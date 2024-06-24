<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'BPStudio',
    'version' => '2021-09-31',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 166945,
      'title' => 'Token',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetToken',
      ),
    ),
    1 => 
    array (
      'id' => 166947,
      'title' => '模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTemplate',
        1 => 'ListTemplate',
        2 => 'ValuateTemplate',
      ),
    ),
    2 => 
    array (
      'id' => 166950,
      'title' => '应用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateApplication',
        1 => 'DeleteApplication',
        2 => 'GetApplication',
        3 => 'ListApplication',
        4 => 'DeployApplication',
        5 => 'ReleaseApplication',
        6 => 'ValidateApplication',
        7 => 'ValuateApplication',
      ),
    ),
    3 => 
    array (
      'id' => 171044,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeResourceGroup',
      ),
    ),
    4 => 
    array (
      'id' => 188653,
      'title' => '容灾服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InitAppFailOver',
        1 => 'GetPotentialFailZones',
        2 => 'GetFoTaskStatus',
        3 => 'AppFailOver',
        4 => 'AppFailBack',
        5 => 'ListFoCreatedApps',
      ),
    ),
    5 => 
    array (
      'id' => 170687,
      'title' => '其他接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExecuteOperationSync',
        1 => 'GetExecuteOperationResult',
        2 => 'ExecuteOperationASync',
        3 => 'ListTagResources',
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
    'GetToken' => 
    array (
      'summary' => '获取读取架构图的临时授权，有效期30分钟。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzhfgmw4e6fwq',
          ),
        ),
      ),
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
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '授权信息',
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityToken' => 
                  array (
                    'title' => 'oss访问token',
                    'description' => 'oss访问token',
                    'type' => 'string',
                    'example' => 'ABCD',
                  ),
                  'Endpoint' => 
                  array (
                    'title' => 'oss的endpoint',
                    'description' => 'oss的endpoint',
                    'type' => 'string',
                    'example' => 'https://oss-cn-beijing.aliyuncs.com',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'title' => 'oss访问access key secret id',
                    'description' => 'oss访问access key secret',
                    'type' => 'string',
                    'example' => '9NG*****K4X',
                  ),
                  'AccessKeyId' => 
                  array (
                    'title' => 'oss访问access key id',
                    'description' => 'oss访问access key id',
                    'type' => 'string',
                    'example' => 'STS.NTm*****8tu',
                  ),
                  'Bucket' => 
                  array (
                    'title' => 'oss文件保存bucket位置',
                    'description' => 'oss文件保存bucket位置',
                    'type' => 'string',
                    'example' => 'bucket-1',
                  ),
                  'SnapshotBucket' => 
                  array (
                    'title' => 'oss快照保存bucket位置',
                    'description' => 'oss快照保存bucket位置',
                    'type' => 'string',
                    'example' => 'bucket-2',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'BPStudio::2021-09-31::GetApplication',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": {\\n    \\"SecurityToken\\": \\"ABCD\\",\\n    \\"Endpoint\\": \\"https://oss-cn-beijing.aliyuncs.com\\",\\n    \\"AccessKeySecret\\": \\"9NG*****K4X\\",\\n    \\"AccessKeyId\\": \\"STS.NTm*****8tu\\",\\n    \\"Bucket\\": \\"bucket-1\\",\\n    \\"SnapshotBucket\\": \\"bucket-2\\"\\n  },\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<GetTokenResponse>\\n    <Message>Success</Message>\\n    <RequestId>A07FFDF2-78FA-1B48-9E38-88E833A93187</RequestId>\\n    <Data>\\n        <SecurityToken>ABCD</SecurityToken>\\n        <Endpoint>https://oss-cn-beijing.aliyuncs.com</Endpoint>\\n        <AccessKeySecret>9NG*****K4X</AccessKeySecret>\\n        <AccessKeyId>STS.NTm*****8tu</AccessKeyId>\\n        <Bucket>bucket-1</Bucket>\\n        <SnapshotBucket>bucket-2</SnapshotBucket>\\n    </Data>\\n    <Code>200</Code>\\n</GetTokenResponse>","errorExample":""}]',
      'title' => '获取加载架构图token（不推荐使用）',
      'description' => '><warning> 该接口不再推荐使用，Application相关图片已在GetApplication中属性中包含访问授权。></warning>',
    ),
    'GetTemplate' => 
    array (
      'summary' => '获取模板图片及架构图相关信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板ID',
            'type' => 'string',
            'required' => true,
            'example' => 'XFKR6WYRVS24S07R',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板区域',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzhfgmw4e6fwq',
          ),
        ),
      ),
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
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '模板详情',
                'type' => 'object',
                'properties' => 
                array (
                  'Description' => 
                  array (
                    'description' => '模板描述',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'ImageURL' => 
                  array (
                    'description' => '模板架构图片文件路径',
                    'type' => 'string',
                    'example' => 'bp-studio-template/sr-U37UD2YQCRJ75X5V.png',
                  ),
                  'Name' => 
                  array (
                    'description' => '模板名称',
                    'type' => 'string',
                    'example' => 'cadt-template',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '模板ID',
                    'type' => 'string',
                    'example' => 'XFKR6WYRVS24S07R',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2020-09-22 17:08:31',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID',
                    'type' => 'string',
                    'example' => 'rg-aekzhfgmw4e6fwq',
                  ),
                  'Variables' => 
                  array (
                    'description' => '模板变量详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Attribute' => 
                        array (
                          'title' => '变量名',
                          'description' => '变量名',
                          'type' => 'string',
                          'example' => 'instance_name',
                        ),
                        'DataType' => 
                        array (
                          'title' => '变量类型',
                          'description' => '变量类型',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'DefaultValue' => 
                        array (
                          'title' => '默认值',
                          'description' => '默认值',
                          'type' => 'string',
                          'example' => 'cadt-app-01',
                        ),
                        'Variable' => 
                        array (
                          'title' => '变量值',
                          'description' => '变量值',
                          'type' => 'string',
                          'example' => '${name}',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": {\\n    \\"Description\\": \\"无\\",\\n    \\"ImageURL\\": \\"bp-studio-template/sr-U37UD2YQCRJ75X5V.png\\",\\n    \\"Name\\": \\"cadt-template\\",\\n    \\"TemplateId\\": \\"XFKR6WYRVS24S07R\\",\\n    \\"CreateTime\\": \\"2020-09-22 17:08:31\\",\\n    \\"ResourceGroupId\\": \\"rg-aekzhfgmw4e6fwq\\",\\n    \\"Variables\\": [\\n      {\\n        \\"Attribute\\": \\"instance_name\\",\\n        \\"DataType\\": \\"String\\",\\n        \\"DefaultValue\\": \\"cadt-app-01\\",\\n        \\"Variable\\": \\"${name}\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateResponse>\\n    <Message>Success</Message>\\n    <RequestId>A07FFDF2-78FA-1B48-9E38-88E833A93187</RequestId>\\n    <Data>\\n        <Description>无</Description>\\n        <ImageURL>bp-studio-template/sr-U37UD2YQCRJ75X5V.png</ImageURL>\\n        <Name>cadt-template</Name>\\n        <TopoURL>bp-studio-template/topo-0RJH9V408JV6MIT9.json</TopoURL>\\n        <TemplateId>XFKR6WYRVS24S07R</TemplateId>\\n        <CreateTime>2020-09-22 17:08:31</CreateTime>\\n        <ResourceGroupId>rg-aekzhfgmw4e6fwq</ResourceGroupId>\\n    </Data>\\n    <Code>200</Code>\\n</GetTemplateResponse>","errorExample":""}]',
      'title' => '获取模板信息',
    ),
    'ListTemplate' => 
    array (
      'summary' => '获取模板列表，包括模板名称、架构图地址、架构图序列化文件地址等。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '50',
            'exclusiveMaximum' => false,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'OrderType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段：
- 1：按更新时间排序
- 2：按创建时间排序
- 3：按系统推荐排序
- 4：按使用次数排序
- 不输入任何值或输入除了1，2，3，4之外的任意整数：按系统推荐排序',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '5',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '搜索关键字',
            'description' => '搜索模板名称关键字',
            'type' => 'string',
            'required' => false,
            'example' => '“CADT”',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类型',
            'description' => '“public”代表开放模板，“private”代表私有模板。',
            'type' => 'string',
            'required' => true,
            'example' => 'private',
          ),
        ),
        5 => 
        array (
          'name' => 'TagList',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板的标签',
            'description' => '模板的标签',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
      ),
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
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'NextToken' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '模板列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ImageURL' => 
                    array (
                      'title' => '模板的图片链接',
                      'description' => '模板的图片链接',
                      'type' => 'string',
                      'example' => 'bp-studio-template/sr-U37UD2YQCRJ75X5V.png',
                    ),
                    'TagId' => 
                    array (
                      'title' => '模板的标签的ID',
                      'description' => '模板的标签的ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TagName' => 
                    array (
                      'title' => '模板标签的名称',
                      'description' => '模板标签的名称',
                      'type' => 'string',
                      'example' => '官方模板',
                    ),
                    'Name' => 
                    array (
                      'title' => '模板的名称',
                      'description' => '模板的名称',
                      'type' => 'string',
                      'example' => 'cadt-name',
                    ),
                    'TemplateId' => 
                    array (
                      'title' => '模板的ID',
                      'description' => '模板的ID',
                      'type' => 'string',
                      'example' => 'CJQ6H0XUEQ20IYJQ',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2021-03-18 16:41:31',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组ID',
                      'description' => '资源组ID',
                      'type' => 'string',
                      'example' => 'rg-acfmyjt3c5om3hi',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"Message\\": \\"Success\\",\\n  \\"NextToken\\": 1,\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": [\\n    {\\n      \\"ImageURL\\": \\"bp-studio-template/sr-U37UD2YQCRJ75X5V.png\\",\\n      \\"TagId\\": 1,\\n      \\"TagName\\": \\"官方模板\\",\\n      \\"Name\\": \\"cadt-name\\",\\n      \\"TemplateId\\": \\"CJQ6H0XUEQ20IYJQ\\",\\n      \\"CreateTime\\": \\"2021-03-18 16:41:31\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmyjt3c5om3hi\\"\\n    }\\n  ],\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ListTemplateResponse>\\n    <TotalCount>100</TotalCount>\\n    <Message>Success</Message>\\n    <NextToken>1</NextToken>\\n    <RequestId>A07FFDF2-78FA-1B48-9E38-88E833A93187</RequestId>\\n    <Data>\\n        <ImageURL>bp-studio-template/sr-U37UD2YQCRJ75X5V.png</ImageURL>\\n        <TagId>1</TagId>\\n        <TagName>官方模板</TagName>\\n        <Name>cadt-name</Name>\\n        <TopoURL>bp-studio-template/topo-0RJH9V408JV6MIT9.json</TopoURL>\\n        <TemplateId>CJQ6H0XUEQ20IYJQ</TemplateId>\\n        <CreateTime>2021-03-18 16:41:31</CreateTime>\\n        <ResourceGroupId>rg-acfmyjt3c5om3hi</ResourceGroupId>\\n    </Data>\\n    <Code>200</Code>\\n</ListTemplateResponse>","errorExample":""}]',
      'title' => '查询模板列表',
    ),
    'ValuateTemplate' => 
    array (
      'summary' => '查询模板价格。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板ID',
            'description' => '模板ID',
            'type' => 'string',
            'required' => true,
            'example' => '0KSHPM6SJU03TNZP',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1600765710019',
          ),
        ),
        2 => 
        array (
          'name' => 'AreaId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '区域ID',
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'Instances',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '待替换实例列表',
            'description' => '待替换实例列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'NodeType' => 
                array (
                  'title' => '实例类型',
                  'description' => '实例类型',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs',
                ),
                'NodeName' => 
                array (
                  'title' => '图上实例名',
                  'description' => '图上实例名',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs',
                ),
                'Id' => 
                array (
                  'title' => '实例ID',
                  'description' => '实例ID',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-bp1q56trhtaq40vlq5oj',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用所属资源组ID',
            'description' => '应用所属资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3fi',
          ),
        ),
        5 => 
        array (
          'name' => 'Variables',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '对于带参数的模板，这个字段用于传递相关参数值，如果未传递，则使用默认值',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => '${var1}',
              'description' => '支持类型',
            ),
            'enumValueTitles' => 
            array (
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
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '847C9D0A-BABD-589C-8A9C-6464409EDED9',
              ),
              'Data' => 
              array (
                'description' => '询价结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceList' => 
                  array (
                    'description' => '询价返回结果集',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '结果集',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NodeType' => 
                        array (
                          'description' => '资源类型',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Error' => 
                        array (
                          'description' => '询价错误信息',
                          'type' => 'string',
                          'example' => 'InvalidSaleComponentFault : The request not refer to the correct order sale component.',
                        ),
                        'TradePrice' => 
                        array (
                          'description' => '交易金额',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '10.0',
                        ),
                        'DiscountAmount' => 
                        array (
                          'description' => '减免金额',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '73.0',
                        ),
                        'OriginalPrice' => 
                        array (
                          'description' => '原价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '83.0',
                        ),
                        'PromotionName' => 
                        array (
                          'description' => '优惠信息',
                          'type' => 'string',
                          'example' => '优惠信息',
                        ),
                        'PriceUnit' => 
                        array (
                          'description' => '计价单位。',
                          'type' => 'string',
                          'example' => 'CNY或USD',
                        ),
                        'PriceList' => 
                        array (
                          'description' => '子询价列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子询价列表',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'NodeType' => 
                              array (
                                'description' => '资源类型',
                                'type' => 'string',
                                'example' => 'eip',
                              ),
                              'ResourceId' => 
                              array (
                                'description' => '资源topo Id',
                                'type' => 'string',
                                'example' => '1687225092',
                              ),
                              'Error' => 
                              array (
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'ServiceUnavailable : The request has failed due to a temporary failure of the server.\\r\\nRequestId : 4AA302DB-3286-5589-8637-FF6D8507B7A9.',
                              ),
                              'TradePrice' => 
                              array (
                                'description' => '交易价格',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '0.01',
                              ),
                              'DiscountAmount' => 
                              array (
                                'description' => '订单优惠金额',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '82.99',
                              ),
                              'OriginalPrice' => 
                              array (
                                'description' => '原价',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '83.0',
                              ),
                              'PromotionName' => 
                              array (
                                'description' => '优惠信息',
                                'type' => 'string',
                                'example' => '优惠信息',
                              ),
                              'PriceUnit' => 
                              array (
                                'description' => '计价单位',
                                'type' => 'string',
                                'example' => 'CNY或USD
',
                              ),
                              'Type' => 
                              array (
                                'description' => '是否新购：</br>1.新建</br>2已保有</br>0不计入价格',
                                'type' => 'string',
                                'example' => '"1"',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
          1 => 
          array (
            'errorCode' => 'bp.java.8004',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'bp.java.appNameNotNull',
            'errorMessage' => 'Application name cannot be repeated.',
          ),
          3 => 
          array (
            'errorCode' => 'bp.java.nopower',
            'errorMessage' => 'No permissions.',
          ),
          4 => 
          array (
            'errorCode' => 'bp.java.nopowerContact',
            'errorMessage' => 'You do not have permission to use this function. Please contact the main account or permission administrator to authorize the relevant permissions.',
          ),
          5 => 
          array (
            'errorCode' => 'bp.java.tempNameNotNull',
            'errorMessage' => 'Application name cannot be repeated.',
          ),
          6 => 
          array (
            'errorCode' => 'bp.java.userNotExist',
            'errorMessage' => 'The user does not exist. The current user does not authenticate AliCloud with his real name.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'bp.java.notDelete',
            'errorMessage' => 'This template has been shared with other users and cannot be deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'bp.java.serviceError',
            'errorMessage' => 'The server is abnormal. Please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"847C9D0A-BABD-589C-8A9C-6464409EDED9\\",\\n  \\"Data\\": {\\n    \\"ResourceList\\": [\\n      {\\n        \\"NodeType\\": \\"ecs\\",\\n        \\"Error\\": \\"InvalidSaleComponentFault : The request not refer to the correct order sale component.\\",\\n        \\"TradePrice\\": 10,\\n        \\"DiscountAmount\\": 73,\\n        \\"OriginalPrice\\": 83,\\n        \\"PromotionName\\": \\"优惠信息\\",\\n        \\"PriceUnit\\": \\"CNY或USD\\",\\n        \\"PriceList\\": [\\n          {\\n            \\"NodeType\\": \\"eip\\",\\n            \\"ResourceId\\": \\"1687225092\\",\\n            \\"Error\\": \\"ServiceUnavailable : The request has failed due to a temporary failure of the server.\\\\\\\\r\\\\\\\\nRequestId : 4AA302DB-3286-5589-8637-FF6D8507B7A9.\\",\\n            \\"TradePrice\\": 0.01,\\n            \\"DiscountAmount\\": 82.99,\\n            \\"OriginalPrice\\": 83,\\n            \\"PromotionName\\": \\"优惠信息\\",\\n            \\"PriceUnit\\": \\"CNY或USD\\\\n\\",\\n            \\"Type\\": \\"\\\\\\"1\\\\\\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '模板实时询价',
    ),
    'CreateApplication' => 
    array (
      'summary' => '请确保在使用该接口前，已充分了解阿里云产品的收费方式和价格。基于CADT上官方模板或私有模板创建新的应用。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板ID',
            'description' => '模板ID',
            'type' => 'string',
            'required' => true,
            'example' => '0KSHPM6SJU03TNZP',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户端 Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。',
            'description' => '客户端 Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1600765710019',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '新建应用名',
            'description' => '输入应用名称。

- 应用名称需唯一，不能与其他应用名称重复，可以调用<props="china">[ListApplication](~~428266~~)</props><props="intl">[ListApplication](https://www.alibabacloud.com/help/zh/bp-studio/latest/api-bpstudio-2021-09-31-listapplication)</props>获取应用列表。
- 长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、下划线（_）、或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'cadt-application',
          ),
        ),
        3 => 
        array (
          'name' => 'AreaId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '区域ID',
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'Instances',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '待替换实例列表',
            'description' => '支持在已保有VPC下创建',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'NodeType' => 
                array (
                  'title' => '实例类型',
                  'description' => '实例类型',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc',
                ),
                'NodeName' => 
                array (
                  'title' => '图上实例名',
                  'description' => '节点名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc',
                ),
                'Id' => 
                array (
                  'title' => '实例ID',
                  'description' => '实例ID',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-bp1q56trhtaq40vlq5ojm',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用所属资源组ID',
            'description' => '应用所属资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
        6 => 
        array (
          'name' => 'Configuration',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '应用相关配置参数，例如：enableMonitor 代表是否自动创建云监控; enableReport 代表是否生成相关报告',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '参数值',
              'example' => 'enableReport',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Variables',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '对于带参数的模板，这个字段用于传递相关参数值，如果未传递，则使用默认值',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '参数值',
              'example' => '${var1}',
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
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'title' => '应用ID',
                'description' => '应用ID',
                'type' => 'string',
                'example' => '002XWH7MXB8MJRU0',
              ),
              'Code' => 
              array (
                'description' => '响应码',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
          1 => 
          array (
            'errorCode' => 'bp.java.8004',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'bp.java.appNameNotNull',
            'errorMessage' => 'Application name cannot be repeated.',
          ),
          3 => 
          array (
            'errorCode' => 'bp.java.nopower',
            'errorMessage' => 'No permissions.',
          ),
          4 => 
          array (
            'errorCode' => 'bp.java.nopowerContact',
            'errorMessage' => 'You do not have permission to use this function. Please contact the main account or permission administrator to authorize the relevant permissions.',
          ),
          5 => 
          array (
            'errorCode' => 'bp.java.tempNameNotNull',
            'errorMessage' => 'Application name cannot be repeated.',
          ),
          6 => 
          array (
            'errorCode' => 'bp.java.userNotExist',
            'errorMessage' => 'The user does not exist. The current user does not authenticate AliCloud with his real name.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'bp.java.notDelete',
            'errorMessage' => 'This template has been shared with other users and cannot be deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'bp.java.serviceError',
            'errorMessage' => 'The server is abnormal. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": \\"002XWH7MXB8MJRU0\\",\\n  \\"Code\\": 200\\n}","type":"json"}]',
      'title' => '基于模板创建应用接口',
    ),
    'DeleteApplication' => 
    array (
      'summary' => '删除应用。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '002XWH7MXB8MJRU0',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
      ),
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
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Code' => 
              array (
                'description' => '响应码',
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
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'The request parameter cannot be empty.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Code\\": 200\\n}","type":"json"}]',
      'title' => '删除应用',
      'description' => '调用该接口删除应用前，必须确保应用的状态为`释放成功`（`Destroyed_Success`），否则删除失败。可以调用<props="china">[GetApplication](~~428265~~)</props><props="intl">[GetApplication](https://www.alibabacloud.com/help/zh/bp-studio/latest/api-bpstudio-2021-09-31-getapplication)</props>查询应用状态。',
    ),
    'GetApplication' => 
    array (
      'summary' => '获取指定应用的基本信息、校验结果、计费结果、部署结果。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'VVK605ZH00OA4MRT',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
      ),
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
                'title' => '请求失败原因',
                'description' => '请求失败原因',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '应用详情',
                'type' => 'object',
                'properties' => 
                array (
                  'Description' => 
                  array (
                    'title' => '应用描述',
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => 'remark',
                  ),
                  'ImageURL' => 
                  array (
                    'title' => '数据库中图片地址',
                    'description' => '数据库中图片地址',
                    'type' => 'string',
                    'example' => 'https://cadt-studio-publish.oss-cn-hangzhou.aliyuncs.com/xxxxxxxxxxxxxxxxxxx/sr-8DWU4RUS49NIDII0.png',
                  ),
                  'ApplicationId' => 
                  array (
                    'title' => '应用ID',
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => 'VVK605ZH00OA4MRT',
                  ),
                  'Name' => 
                  array (
                    'title' => '应用名',
                    'description' => '应用名',
                    'type' => 'string',
                    'example' => 'CADT应用',
                  ),
                  'TemplateId' => 
                  array (
                    'title' => '应用关联模板ID',
                    'description' => '应用关联模板ID',
                    'type' => 'string',
                    'example' => 'FYS9VZ535U20V7HT',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '应用创建时间',
                    'description' => '应用创建时间',
                    'type' => 'string',
                    'example' => '2021-08-09 14:37:16',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '应用所属资源组ID',
                    'description' => '应用所属资源组ID',
                    'type' => 'string',
                    'example' => 'rg-aekzhfgmw4e6fwq',
                  ),
                  'PriceList' => 
                  array (
                    'title' => '计费结果列表',
                    'description' => '计费结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceCode' => 
                        array (
                          'title' => '产品code',
                          'description' => '产品code',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'InstanceName' => 
                        array (
                          'title' => '实例名',
                          'description' => '实例名',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'OriginalPrice' => 
                        array (
                          'title' => '原价',
                          'description' => '原价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.570',
                        ),
                        'OnePrice' => 
                        array (
                          'title' => '单价',
                          'description' => '单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.01',
                        ),
                        'Period' => 
                        array (
                          'description' => '时长',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Count' => 
                        array (
                          'title' => '数量',
                          'description' => '数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'PriceUnit' => 
                        array (
                          'title' => '单位',
                          'description' => '单位：<props="china">元/时</props>
<props="intl">USD/时</props>',
                          'type' => 'string',
                          'example' => '金额/时',
                        ),
                        'Price' => 
                        array (
                          'title' => '总价',
                          'description' => '总价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.01',
                        ),
                        'ChargeType' => 
                        array (
                          'title' => '支付类型',
                          'description' => '支付类型',
                          'type' => 'string',
                          'example' => 'PayAsYouGo',
                        ),
                        'Region' => 
                        array (
                          'title' => '区域',
                          'description' => '区域',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Specification' => 
                        array (
                          'title' => '规格',
                          'description' => '实例规格。
返回实例规格信息，例如VPC返回网段信息“192.168.0.0/16”，ECS返回实例规格“ecs.g5.large”，SLB返回“slb.s1.small”等；如果该实例没有规格属性，则返回空。',
                          'type' => 'string',
                          'example' => '"slb.s1.small"
 "192.168.0.0/24"
"ecs.c6.large"
"normal"
 ""',
                        ),
                        'Lifecycle' => 
                        array (
                          'title' => '资源标记',
                          'description' => '资源标记',
                          'type' => 'string',
                          'example' => 'Create',
                        ),
                        'Remark' => 
                        array (
                          'description' => '询价失败时返回错误信息',
                          'type' => 'string',
                          'example' => 'ecs售罄',
                        ),
                        'type' => 
                        array (
                          'description' => '创建类型：
</br>新建-1
</br>导入-2',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'Checklist' => 
                  array (
                    'title' => '校验结果列表',
                    'description' => '校验结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceCode' => 
                        array (
                          'title' => '产品code',
                          'description' => '产品code',
                          'type' => 'string',
                          'example' => 'vpc',
                        ),
                        'ResourceName' => 
                        array (
                          'title' => '实例名',
                          'description' => '实例名',
                          'type' => 'string',
                          'example' => 'vpc',
                        ),
                        'Region' => 
                        array (
                          'title' => '区域',
                          'description' => '区域',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Result' => 
                        array (
                          'title' => '校验结果',
                          'description' => '校验结果',
                          'type' => 'string',
                          'example' => 'Finish',
                        ),
                        'Remark' => 
                        array (
                          'title' => '失败原因',
                          'description' => '失败原因',
                          'type' => 'string',
                          'example' => '校验通过',
                        ),
                        'Specification' => 
                        array (
                          'title' => '规格',
                          'description' => '规格',
                          'type' => 'string',
                          'example' => '192.168.0.0/16',
                        ),
                        'Lifecycle' => 
                        array (
                          'title' => '资源标记',
                          'description' => '资源标记',
                          'type' => 'string',
                          'example' => 'Create',
                        ),
                      ),
                    ),
                  ),
                  'Status' => 
                  array (
                    'title' => '应用状态',
                    'description' => '应用状态',
                    'type' => 'string',
                    'example' => 'Deployed_Success',
                  ),
                  'ResourceList' => 
                  array (
                    'title' => '资源列表',
                    'description' => '资源列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'title' => '资源部署结果',
                          'description' => '资源部署结果',
                          'type' => 'string',
                          'example' => 'Finish',
                        ),
                        'ResourceCode' => 
                        array (
                          'title' => '产品code',
                          'description' => '产品code',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'ResourceName' => 
                        array (
                          'title' => '实例名称',
                          'description' => '实例名称',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'ResourceId' => 
                        array (
                          'title' => '实例ID',
                          'description' => '实例ID',
                          'type' => 'string',
                          'example' => 'i-2zehnzxqixu1pywsfbx1',
                        ),
                        'ChargeType' => 
                        array (
                          'title' => '支付类型',
                          'description' => '支付类型',
                          'type' => 'string',
                          'example' => 'PayAsYouGo',
                        ),
                        'ResourceType' => 
                        array (
                          'title' => '资源类型',
                          'description' => '资源类型',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Remark' => 
                        array (
                          'title' => '部署结果',
                          'description' => '部署结果',
                          'type' => 'string',
                          'example' => '{"hostName":"iZ2zehnzxqixu1pywsfbx1Z","memory":32768.0,"creationTime":"2021-09-28T11:23:46Z","instanceName":"ecs","internetMaxBandwidthOut":0.0,"description":"","clusterId":"","private_ip":"192.168.0.247","instanceId":"i-2zehnzxqixu1pywsfbx1","requestId":"F1C64344-3723-51A0-855B-5F08B5634323","zoneId":"cn-beijing-b","ioOptimized":"optimized","id":"i-2zehnzxqixu1pywsfbx1","instanceNetworkType":"vpc","instanceChargeType":"PostPaid","imageId":"centos_8_4_x64_20G_alibase_20210824.vhd","serialNumber":"cee246c4-38f3-4bf3-950b-c17e88ff6527","vlanId":"","instanceType":"ecs.e3.large","cpu":4.0,"creditSpecification":"","internetMaxBandwidthIn":-1.0,"expiredTime":"2099-12-31T15:59Z","internetChargeType":"PayByTraffic","regionId":"cn-beijing","refId":"79224644_0","stoppedMode":"Not-applicable","status":"Running"}',
                        ),
                        'Lifecycle' => 
                        array (
                          'title' => '资源标记',
                          'description' => '资源标记',
                          'type' => 'string',
                          'example' => 'Create',
                        ),
                      ),
                    ),
                  ),
                  'Error' => 
                  array (
                    'title' => '失败原因',
                    'description' => '失败原因',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'string',
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
            'errorCode' => 'bp.java.8004',
            'errorMessage' => 'No permissions.',
          ),
          1 => 
          array (
            'errorCode' => 'bp.java.nopower',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'bp.java.nopowerContact',
            'errorMessage' => 'You do not have permission to use this function. Please contact the main account or permission administrator to authorize the relevant permissions.',
          ),
          3 => 
          array (
            'errorCode' => 'bp.java.userNotExist',
            'errorMessage' => 'The user does not exist. The current user does not authenticate AliCloud with his real name.',
          ),
          4 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'The request parameter cannot be empty.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": {\\n    \\"Description\\": \\"remark\\",\\n    \\"ImageURL\\": \\"https://cadt-studio-publish.oss-cn-hangzhou.aliyuncs.com/xxxxxxxxxxxxxxxxxxx/sr-8DWU4RUS49NIDII0.png\\",\\n    \\"ApplicationId\\": \\"VVK605ZH00OA4MRT\\",\\n    \\"Name\\": \\"CADT应用\\",\\n    \\"TemplateId\\": \\"FYS9VZ535U20V7HT\\",\\n    \\"CreateTime\\": \\"2021-08-09 14:37:16\\",\\n    \\"ResourceGroupId\\": \\"rg-aekzhfgmw4e6fwq\\",\\n    \\"PriceList\\": [\\n      {\\n        \\"ResourceCode\\": \\"ecs\\",\\n        \\"InstanceName\\": \\"ecs\\",\\n        \\"OriginalPrice\\": 3.57,\\n        \\"OnePrice\\": 0.01,\\n        \\"Period\\": 1,\\n        \\"Count\\": 1,\\n        \\"PriceUnit\\": \\"金额/时\\",\\n        \\"Price\\": 0.01,\\n        \\"ChargeType\\": \\"PayAsYouGo\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"Specification\\": \\"\\\\\\"slb.s1.small\\\\\\"\\\\n \\\\\\"192.168.0.0/24\\\\\\"\\\\n\\\\\\"ecs.c6.large\\\\\\"\\\\n\\\\\\"normal\\\\\\"\\\\n \\\\\\"\\\\\\"\\",\\n        \\"Lifecycle\\": \\"Create\\",\\n        \\"Remark\\": \\"ecs售罄\\",\\n        \\"type\\": \\"1\\"\\n      }\\n    ],\\n    \\"Checklist\\": [\\n      {\\n        \\"ResourceCode\\": \\"vpc\\",\\n        \\"ResourceName\\": \\"vpc\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"Result\\": \\"Finish\\",\\n        \\"Remark\\": \\"校验通过\\",\\n        \\"Specification\\": \\"192.168.0.0/16\\",\\n        \\"Lifecycle\\": \\"Create\\"\\n      }\\n    ],\\n    \\"Status\\": \\"Deployed_Success\\",\\n    \\"ResourceList\\": [\\n      {\\n        \\"Status\\": \\"Finish\\",\\n        \\"ResourceCode\\": \\"ecs\\",\\n        \\"ResourceName\\": \\"ecs\\",\\n        \\"ResourceId\\": \\"i-2zehnzxqixu1pywsfbx1\\",\\n        \\"ChargeType\\": \\"PayAsYouGo\\",\\n        \\"ResourceType\\": \\"ecs\\",\\n        \\"Remark\\": \\"{\\\\\\"hostName\\\\\\":\\\\\\"iZ2zehnzxqixu1pywsfbx1Z\\\\\\",\\\\\\"memory\\\\\\":32768.0,\\\\\\"creationTime\\\\\\":\\\\\\"2021-09-28T11:23:46Z\\\\\\",\\\\\\"instanceName\\\\\\":\\\\\\"ecs\\\\\\",\\\\\\"internetMaxBandwidthOut\\\\\\":0.0,\\\\\\"description\\\\\\":\\\\\\"\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"\\\\\\",\\\\\\"private_ip\\\\\\":\\\\\\"192.168.0.247\\\\\\",\\\\\\"instanceId\\\\\\":\\\\\\"i-2zehnzxqixu1pywsfbx1\\\\\\",\\\\\\"requestId\\\\\\":\\\\\\"F1C64344-3723-51A0-855B-5F08B5634323\\\\\\",\\\\\\"zoneId\\\\\\":\\\\\\"cn-beijing-b\\\\\\",\\\\\\"ioOptimized\\\\\\":\\\\\\"optimized\\\\\\",\\\\\\"id\\\\\\":\\\\\\"i-2zehnzxqixu1pywsfbx1\\\\\\",\\\\\\"instanceNetworkType\\\\\\":\\\\\\"vpc\\\\\\",\\\\\\"instanceChargeType\\\\\\":\\\\\\"PostPaid\\\\\\",\\\\\\"imageId\\\\\\":\\\\\\"centos_8_4_x64_20G_alibase_20210824.vhd\\\\\\",\\\\\\"serialNumber\\\\\\":\\\\\\"cee246c4-38f3-4bf3-950b-c17e88ff6527\\\\\\",\\\\\\"vlanId\\\\\\":\\\\\\"\\\\\\",\\\\\\"instanceType\\\\\\":\\\\\\"ecs.e3.large\\\\\\",\\\\\\"cpu\\\\\\":4.0,\\\\\\"creditSpecification\\\\\\":\\\\\\"\\\\\\",\\\\\\"internetMaxBandwidthIn\\\\\\":-1.0,\\\\\\"expiredTime\\\\\\":\\\\\\"2099-12-31T15:59Z\\\\\\",\\\\\\"internetChargeType\\\\\\":\\\\\\"PayByTraffic\\\\\\",\\\\\\"regionId\\\\\\":\\\\\\"cn-beijing\\\\\\",\\\\\\"refId\\\\\\":\\\\\\"79224644_0\\\\\\",\\\\\\"stoppedMode\\\\\\":\\\\\\"Not-applicable\\\\\\",\\\\\\"status\\\\\\":\\\\\\"Running\\\\\\"}\\",\\n        \\"Lifecycle\\": \\"Create\\"\\n      }\\n    ],\\n    \\"Error\\": \\"Success\\"\\n  },\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<GetApplicationResponse>\\n    <Message>Success</Message>\\n    <RequestId>A07FFDF2-78FA-1B48-9E38-88E833A93187</RequestId>\\n    <Data>\\n        <Description>remark</Description>\\n        <ImageURL>https://cadt-studio-publish.oss-cn-hangzhou.aliyuncs.com/xxxxxxxxxxxxxxxxxxx/sr-8DWU4RUS49NIDII0.png</ImageURL>\\n        <ApplicationId>VVK605ZH00OA4MRT</ApplicationId>\\n        <Name>CADT应用</Name>\\n        <TemplateId>FYS9VZ535U20V7HT</TemplateId>\\n        <CreateTime>2021-08-09 14:37:16</CreateTime>\\n        <ResourceGroupId>rg-aekzhfgmw4e6fwq</ResourceGroupId>\\n        <PriceList>\\n            <ResourceCode>ecs</ResourceCode>\\n            <InstanceName>ecs</InstanceName>\\n            <OriginalPrice>3.57</OriginalPrice>\\n            <OnePrice>0.01</OnePrice>\\n            <Period>1</Period>\\n            <Count>1</Count>\\n            <PriceUnit>金额/时</PriceUnit>\\n            <Price>0.01</Price>\\n            <ChargeType>PayAsYouGo</ChargeType>\\n            <Region>cn-hangzhou</Region>\\n            <Specification>\\"slb.s1.small\\"\\n \\"192.168.0.0/24\\"\\n\\"ecs.c6.large\\"\\n\\"normal\\"\\n \\"\\"</Specification>\\n            <Lifecycle>Create</Lifecycle>\\n            <Remark>ecs售罄</Remark>\\n            <type>1</type>\\n        </PriceList>\\n        <Checklist>\\n            <ResourceCode>vpc</ResourceCode>\\n            <ResourceName>vpc</ResourceName>\\n            <Region>cn-hangzhou</Region>\\n            <Result>Finish</Result>\\n            <Remark>校验通过</Remark>\\n            <Specification>192.168.0.0/16</Specification>\\n            <Lifecycle>Create</Lifecycle>\\n        </Checklist>\\n        <Status>Deployed_Success</Status>\\n        <ResourceList>\\n            <Status>Finish</Status>\\n            <ResourceCode>ecs</ResourceCode>\\n            <ResourceName>ecs</ResourceName>\\n            <ResourceId>i-2zehnzxqixu1pywsfbx1</ResourceId>\\n            <ChargeType>PayAsYouGo</ChargeType>\\n            <ResourceType>ecs</ResourceType>\\n            <Remark>{\\"hostName\\":\\"iZ2zehnzxqixu1pywsfbx1Z\\",\\"memory\\":32768.0,\\"creationTime\\":\\"2021-09-28T11:23:46Z\\",\\"instanceName\\":\\"ecs\\",\\"internetMaxBandwidthOut\\":0.0,\\"description\\":\\"\\",\\"clusterId\\":\\"\\",\\"private_ip\\":\\"192.168.0.247\\",\\"instanceId\\":\\"i-2zehnzxqixu1pywsfbx1\\",\\"requestId\\":\\"F1C64344-3723-51A0-855B-5F08B5634323\\",\\"zoneId\\":\\"cn-beijing-b\\",\\"ioOptimized\\":\\"optimized\\",\\"id\\":\\"i-2zehnzxqixu1pywsfbx1\\",\\"instanceNetworkType\\":\\"vpc\\",\\"instanceChargeType\\":\\"PostPaid\\",\\"imageId\\":\\"centos_8_4_x64_20G_alibase_20210824.vhd\\",\\"serialNumber\\":\\"cee246c4-38f3-4bf3-950b-c17e88ff6527\\",\\"vlanId\\":\\"\\",\\"instanceType\\":\\"ecs.e3.large\\",\\"cpu\\":4.0,\\"creditSpecification\\":\\"\\",\\"internetMaxBandwidthIn\\":-1.0,\\"expiredTime\\":\\"2099-12-31T15:59Z\\",\\"internetChargeType\\":\\"PayByTraffic\\",\\"regionId\\":\\"cn-beijing\\",\\"refId\\":\\"79224644_0\\",\\"stoppedMode\\":\\"Not-applicable\\",\\"status\\":\\"Running\\"}</Remark>\\n            <Lifecycle>Create</Lifecycle>\\n        </ResourceList>\\n        <Error>Success</Error>\\n    </Data>\\n    <Code>200</Code>\\n</GetApplicationResponse>","errorExample":""}]',
      'title' => '获取应用详情',
      'responseParamsDescription' => '应用状态列表：
 - Creating 创建中
 - Modified 已修改
 - Verifying 校验中
 - Verified_Failure 校验失败
 - Verified_Success 校验成功
 - Valuating 计价中
 - Valuating_Failure 计价失败
 - Valuating_Success 计价成功
 - Deploying 部署中
 - Deployed_Failure 部署失败
 - Partially_Deployed_Success 部分部署成功
 - Deployed_Success 部署成功
 - Destroying 释放中
 - Delayed_Destroy 延时销毁
 - Destroyed_Failure 释放失败
 - Partially_Destroyed_Success 部分释放成功
 - Destroyed_Success 释放成功
 - Revised 架构调整
 - Verifying_In_Revision 资源验证（架构调整）
 - Verified_Failure_In_Revision 资源验证失败（架构调整）
 - Verified_Success_In_Revision 资源验证成功（架构调整）
 - Valuating_In_Revision 询价中（架构调整）
 - Valuating_Failure_In_Revision 询价失败（架构调整）
 - Valuating_Success_In_Revision 询价成功（架构调整）',
    ),
    'ListApplication' => 
    array (
      'summary' => '该接口提供当前用户下所有应用的列表。其中可选参数keyword定义应用名中包含的关键字。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结果值的分页页码不能小于最小值 1，不能大于最大值 10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结果值的分页大小不能小于最小值 1，也不能大于最大值 50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用名称中的关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '1 更新时间<br>2 创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用的状态',
            'description' => '应用的状态。',
            'type' => 'string',
            'required' => false,
            'example' => '该参数可选值有“success”和“release”。
如果输入值是“success”，返回的应用列表包括所有部署成功（Deployed_Success）状态的应用；
如果输入值是“release”，返回的应用列表包括所有释放成功（Destroyed_Success）和释放失败（Destroyed_Failure）状态的应用；
如果置空该参数，返回的应用列表包括所有状态的应用。If the input value is "success", the returned application list includes all applications in the Deployed_Success state of successful deployment.
If the input value is release, the returned application list includes all applications in the release success (Destroyed_Success) and release failure (Destroyed_Failure) status.
If this parameter is left blank, the returned app list includes apps in all states.

',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组的 ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-xxxxxxxxxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板ID',
            'type' => 'string',
            'required' => false,
            'example' => '0KSXXX6SJU03TXXX',
          ),
        ),
      ),
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
                'description' => '返回的条目总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '123',
              ),
              'Message' => 
              array (
                'description' => '接口返回信息。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'NextToken' => 
              array (
                'description' => '返回的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '应用的 ID。',
                'type' => 'string',
                'example' => 'BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C',
              ),
              'Data' => 
              array (
                'description' => '应用列表信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ImageURL' => 
                    array (
                      'title' => '应用的图片链接',
                      'description' => '应用Topo图的 URL。',
                      'type' => 'string',
                      'example' => 'https://bp-studio-daily.oss-cn-beijing.aliyuncs.com/1411182597819805/sr-Y3KR7ZSQZR2F0YX3.png',
                    ),
                    'Status' => 
                    array (
                      'title' => '应用状态：Modified、Verifying、Verified_Failure、Verified_Success、Valuating、Valuating_Failure、Valuating_Success、Deploying、Deployed_Failure、Partially_Deployed_Success、Deployed_Success、Destroying、Destroyed_Failure、Partially_Destroyed_Success、Destroyed_Success等，详见应用状态说明',
                      'description' => '应用状态',
                      'type' => 'string',
                      'example' => 'Deployed_Success',
                    ),
                    'ApplicationId' => 
                    array (
                      'title' => '应用ID',
                      'description' => '应用的名称。',
                      'type' => 'string',
                      'example' => 'JIX9NEZUALGS46UI',
                    ),
                    'Name' => 
                    array (
                      'title' => '应用的名称',
                      'description' => 'The name of the application.',
                      'type' => 'string',
                      'example' => 'cadt-appName',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建应用的时间。',
                      'type' => 'string',
                      'example' => '2021-09-15  08:30:00',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '应用的资源组',
                      'description' => '应用所属的资源组的 ID。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => 'HTTP 状态代码。',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 123,\\n  \\"Message\\": \\"Success\\",\\n  \\"NextToken\\": 2,\\n  \\"RequestId\\": \\"BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C\\",\\n  \\"Data\\": [\\n    {\\n      \\"ImageURL\\": \\"https://bp-studio-daily.oss-cn-beijing.aliyuncs.com/1411182597819805/sr-Y3KR7ZSQZR2F0YX3.png\\",\\n      \\"Status\\": \\"Deployed_Success\\",\\n      \\"ApplicationId\\": \\"JIX9NEZUALGS46UI\\",\\n      \\"Name\\": \\"cadt-appName\\",\\n      \\"CreateTime\\": \\"2021-09-15  08:30:00\\",\\n      \\"ResourceGroupId\\": \\"default\\"\\n    }\\n  ],\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取应用列表',
      'responseParamsDescription' => '应用状态列表：

Creating 创建中 </br>
Modified 已修改</br>
Verifying 校验中</br>
Verified_Failure 校验失败</br>
Verified_Success 校验成功</br>
Valuating 计价中</br>
Valuating_Failure 计价失败</br>
Valuating_Success 计价成功</br>
Deploying 部署中</br>
Deployed_Failure 部署失败</br>
Partially_Deployed_Success 部分部署成功</br>
Deployed_Success 部署成功</br>
Destroying 释放中</br>
Delayed_Destroy 延时销毁</br>
Destroyed_Failure 释放失败</br>
Partially_Destroyed_Success 部分释放成功</br>
Destroyed_Success 释放成功</br>
Revised 架构调整</br>
Verifying_In_Revision 资源验证（架构调整）</br>
Verified_Failure_In_Revision 资源验证失败（架构调整）</br>
Verified_Success_In_Revision 资源验证成功（架构调整）</br>
Valuating_In_Revision 询价中（架构调整）</br>
Valuating_Failure_In_Revision 询价失败（架构调整）</br>
Valuating_Success_In_Revision 询价成功（架构调整）</br>',
    ),
    'DeployApplication' => 
    array (
      'summary' => '计费成功后，创建资源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'VVK605ZH00OA4MRT',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'example' => '1600765710019',
          ),
        ),
      ),
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
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '应用数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
              'Code' => 
              array (
                'description' => '响应码',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": 123,\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<DeployApplicationResponse>\\n    <Message>Success</Message>\\n    <RequestId>A07FFDF2-78FA-1B48-9E38-88E833A93187</RequestId>\\n    <Data>123</Data>\\n    <Code>200</Code>\\n</DeployApplicationResponse>","errorExample":""}]',
      'title' => '部署应用',
    ),
    'ReleaseApplication' => 
    array (
      'summary' => '该接口释放应用的资源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => '7QSXFQW46ZNGOUDM',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源ID',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'example' => '1600765710019',
          ),
        ),
      ),
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
                'description' => '错误消息',
                'type' => 'string',
                'example' => '资源不存在',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C',
              ),
              'Data' => 
              array (
                'description' => '返回值',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Code' => 
              array (
                'description' => 'HTTP返回code',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"资源不存在\\",\\n  \\"RequestId\\": \\"BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C\\",\\n  \\"Data\\": 1,\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ReleaseApplicationResponse>\\n    <Message>应用ID错误</Message>\\n    <RequestId>BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C</RequestId>\\n    <Data>1</Data>\\n    <Code>200</Code>\\n</ReleaseApplicationResponse>","errorExample":""}]',
      'title' => '释放应用',
    ),
    'ValidateApplication' => 
    array (
      'summary' => '对应用下的资源输入的合法性进行校验，异步执行，校验结果调用GetApplication获取。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '02S7UU41WKJL7ERR',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'example' => '1600765710019',
          ),
        ),
      ),
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
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '应用数据',
                'type' => 'string',
                'example' => '123',
              ),
              'Code' => 
              array (
                'description' => '状态码',
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
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'The request parameter cannot be empty.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": \\"123\\",\\n  \\"Code\\": 200\\n}","type":"json"}]',
      'title' => '应用校验',
    ),
    'ValuateApplication' => 
    array (
      'summary' => '对应用下的资源进行询价，通过GetApplication获取询价结果。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => '02S7UU41WKJL7ERR',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'example' => '1600765710019',
          ),
        ),
      ),
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
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Data' => 
              array (
                'description' => '应用数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
              'Code' => 
              array (
                'description' => '状态码',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'Success',
            'errorMessage' => 'The transaction is successful.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterEmpty',
            'errorMessage' => 'You must specify the request parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceError',
            'errorMessage' => 'A server error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Data\\": 123,\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ValuateApplicationResponse>\\n    <Message>Success</Message>\\n    <RequestId>A07FFDF2-78FA-1B48-9E38-88E833A93187</RequestId>\\n    <Data>123</Data>\\n    <Code>200</Code>\\n</ValuateApplicationResponse>","errorExample":""}]',
      'title' => '应用计费',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '该接口可以将CADT创建的应用或模板从一个资源组转移到另一个资源组。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'CADT应用或模板ID',
            'type' => 'string',
            'required' => true,
            'example' => 'P7RMVSVM9LOVYQOM',
          ),
        ),
        1 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新资源组ID',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aek2ajbjoloa23q',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要更换资源组的资源类型，这里指CADT应用（APPLICATION）或模板（TEMPLATE）。',
            'type' => 'string',
            'required' => true,
            'example' => 'APPLICATION',
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
                'example' => 'A3488F1D-xxxx-xxxx-xxxx-5374BA0F3562',
              ),
              'Data' => 
              array (
                'description' => '该字段不返回具体业务数据',
                'type' => 'string',
                'example' => '无',
              ),
              'Message' => 
              array (
                'description' => '当变更失败时，返回错误信息。',
                'type' => 'string',
                'example' => '无',
              ),
              'Code' => 
              array (
                'description' => '执行结果码，200代表成功，其它代表失败。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A3488F1D-xxxx-xxxx-xxxx-5374BA0F3562\\",\\n  \\"Data\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ChangeResourceGroupResponse>\\n    <RequestId>A3488F1D-C444-17D0-BA4F-5374BA0F3562</RequestId>\\n    <Data>无</Data>\\n    <Message>无</Message>\\n    <Code>200</Code>\\n</ChangeResourceGroupResponse>","errorExample":""}]',
      'title' => '更换应用或模板资源组',
    ),
    'InitAppFailOver' => 
    array (
      'summary' => '应用容灾切换准备，初始化容灾切换任务。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => false,
            'example' => '002XWH7MXB8MJRU0',
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
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A07FFDF2-78FA-1B48-9E38-88E833A93187',
              ),
              'Message' => 
              array (
                'title' => '报错信息',
                'description' => '报错信息',
                'type' => 'string',
                'example' => 'Unsupported Operation PrepareEvent->FailOverPrepareSuccess FoApp_DDLJK2WM8ETU9JAC',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '返回容灾切换任务ID（TaskId）',
                'description' => '返回容灾切换任务ID（TaskId）',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7250',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A07FFDF2-78FA-1B48-9E38-88E833A93187\\",\\n  \\"Message\\": \\"Unsupported Operation PrepareEvent->FailOverPrepareSuccess FoApp_DDLJK2WM8ETU9JAC\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": 7250\\n}","type":"json"}]',
      'title' => '应用容灾准备',
      'description' => '应用容灾切换准备，初始化容灾切换任务。',
    ),
    'GetPotentialFailZones' => 
    array (
      'summary' => '获取指定容灾服务可切换的可用区列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsPlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否为容灾集ID',
            'description' => '是否为容灾集ID',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'ObjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'IsPlanId选择false传入ApplicationId（应用ID），IsPlanId选择true传入PlanId（容灾集ID）',
            'description' => 'IsPlanId选择false传入ApplicationId（应用ID），IsPlanId选择true传入PlanId（容灾集ID）',
            'type' => 'string',
            'required' => false,
            'example' => 'FS3ATPTOSC4SE1GG',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '接口返回数据',
            'description' => '接口返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C',
              ),
              'Message' => 
              array (
                'title' => '报错信息',
                'description' => '报错信息',
                'type' => 'string',
                'example' => 'The specified ResourceIds are not found in our records.',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '当前容灾服务可切换的可用区列表',
                'description' => '当前容灾服务可切换的可用区列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '当前容灾服务可切换的可用区',
                  'description' => '当前容灾服务可切换的可用区',
                  'type' => 'string',
                  'example' => 'cn-hangzhou-f',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFB7F5C8-FE7A-06CA-9F87-ABBF6B848F0C\\",\\n  \\"Message\\": \\"The specified ResourceIds are not found in our records.\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": [\\n    \\"cn-hangzhou-f\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取容灾服务可切换的可用区列表',
      'description' => '获取指定容灾服务可切换的可用区列表。',
    ),
    'GetFoTaskStatus' => 
    array (
      'summary' => '获取指定容灾任务（TaskId）的状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '容灾切换任务ID',
            'description' => '容灾切换任务ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2615',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '923692F0-A15B-58B4-BAF4-2AFA4AF46240',
              ),
              'Message' => 
              array (
                'title' => '报错信息',
                'description' => '报错信息',
                'type' => 'string',
                'example' => 'OKITHEVRQCN6ULQG',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '容灾切换任务Task的状态',
                'description' => '容灾切换任务Task的状态',
                'type' => 'string',
                'example' => 'Running',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"923692F0-A15B-58B4-BAF4-2AFA4AF46240\\",\\n  \\"Message\\": \\"OKITHEVRQCN6ULQG\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"Running\\"\\n}","type":"json"}]',
      'title' => '获取指定容灾任务的状态',
      'description' => '获取指定容灾任务（TaskId）的状态。',
      'responseParamsDescription' => '应用状态列表：
- Creating 创建中
- Modified 已修改
- Verifying 校验中
- Verified_Failure 校验失败
- Verified_Success 校验成功
- Valuating 计价中
- Valuating_Failure 计价失败
- Valuating_Success 计价成功
- Deploying 部署中
- Deployed_Failure 部署失败
- Partially_Deployed_Success 部分部署成功
- Deployed_Success 部署成功
- Destroying 释放中
- Delayed_Destroy 延时销毁
- Destroyed_Failure 释放失败
- Partially_Destroyed_Success 部分释放成功
- Destroyed_Success 释放成功
- Revised 架构调整
- Verifying_In_Revision 资源验证（架构调整）
- Verified_Failure_In_Revision 资源验证失败（架构调整）
- Verified_Success_In_Revision 资源验证成功（架构调整）
- Valuating_In_Revision 询价中（架构调整）
- Valuating_Failure_In_Revision 询价失败（架构调整）
- Valuating_Success_In_Revision 询价成功（架构调整）',
    ),
    'AppFailOver' => 
    array (
      'summary' => '将容灾集切换至支持的可用区。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'BE68D71ZY5YYIU9R',
          ),
        ),
        1 => 
        array (
          'name' => 'FailZone',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '容灾切换目标可用区',
            'description' => '容灾切换目标可用区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9656C816-1E9A-58D2-86D5-710678D61AF1',
              ),
              'Message' => 
              array (
                'title' => '报错信息',
                'description' => '报错信息',
                'type' => 'string',
                'example' => '该应用存在主备切换组状态不对，切换前必须所有组处于待切换状态！',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '容灾切换任务码TaskId',
                'description' => '容灾切换任务ID（TaskId）',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7441',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9656C816-1E9A-58D2-86D5-710678D61AF1\\",\\n  \\"Message\\": \\"该应用存在主备切换组状态不对，切换前必须所有组处于待切换状态！\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": 7441\\n}","type":"json"}]',
      'title' => '容灾应用切换',
      'description' => '将容灾集切换至支持的可用区。',
    ),
    'AppFailBack' => 
    array (
      'summary' => '将容灾集切回至主可用区。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => false,
            'example' => '61ZW1DY5Y3FSAOO2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7036DDBE-0ABA-52D7-A39D-75E511970F07',
              ),
              'Message' => 
              array (
                'title' => '报错信息',
                'description' => '报错信息',
                'type' => 'string',
                'example' => 'OKITHEVRQCN6ULQG',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '容灾任务切回TaskId',
                'description' => '容灾切回任务ID（TaskId）',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3309',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7036DDBE-0ABA-52D7-A39D-75E511970F07\\",\\n  \\"Message\\": \\"OKITHEVRQCN6ULQG\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": 3309\\n}","type":"json"}]',
      'title' => '容灾应用切回',
      'description' => '将容灾集切回至主可用区。',
    ),
    'ListFoCreatedApps' => 
    array (
      'summary' => '接口查询当前账户下所有容灾服务计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '接口返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '40F63F07-3AB6-53B3-8825-0580C130E3EA',
              ),
              'Message' => 
              array (
                'title' => '报错信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Cannot find region according to your domain.',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '返回值数据列表',
                'description' => '模板列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '返回值数据',
                  'description' => '应用数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApplicationId' => 
                    array (
                      'title' => '应用ID',
                      'description' => '应用ID',
                      'type' => 'string',
                      'example' => 'JIX9NEZUALGS46UI',
                    ),
                    'Title' => 
                    array (
                      'title' => '容灾服务名称',
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '容灾计划1',
                    ),
                    'ReportUrl' => 
                    array (
                      'title' => '报告路径URL',
                      'description' => '错误报告url',
                      'type' => 'string',
                      'example' => '14318082782*****/drs-application-3ET9ZEVPOWRDZK0N.pdf',
                    ),
                    'Status' => 
                    array (
                      'title' => '容灾服务状态',
                      'description' => '应用状态',
                      'type' => 'string',
                      'example' => 'Deployed_Success',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40F63F07-3AB6-53B3-8825-0580C130E3EA\\",\\n  \\"Message\\": \\"Cannot find region according to your domain.\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": [\\n    {\\n      \\"ApplicationId\\": \\"JIX9NEZUALGS46UI\\",\\n      \\"Title\\": \\"容灾计划1\\",\\n      \\"ReportUrl\\": \\"14318082782*****/drs-application-3ET9ZEVPOWRDZK0N.pdf\\",\\n      \\"Status\\": \\"Deployed_Success\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询所有容灾服务计划',
      'description' => '接口查询当前账户下所有容灾服务计划。',
      'requestParamsDescription' => '无请求参数',
      'responseParamsDescription' => '应用状态列表：
- Creating 创建中
- Modified 已修改
- Verifying 校验中
- Verified_Failure 校验失败
- Verified_Success 校验成功
- Valuating 计价中
- Valuating_Failure 计价失败
- Valuating_Success 计价成功
- Deploying 部署中
- Deployed_Failure 部署失败
- Partially_Deployed_Success 部分部署成功
- Deployed_Success 部署成功
- Destroying 释放中
- Delayed_Destroy 延时销毁
- Destroyed_Failure 释放失败
- Partially_Destroyed_Success 部分释放成功
- Destroyed_Success 释放成功
- Revised 架构调整
- Verifying_In_Revision 资源验证（架构调整）
- Verified_Failure_In_Revision 资源验证失败（架构调整）
- Verified_Success_In_Revision 资源验证成功（架构调整）
- Valuating_In_Revision 询价中（架构调整）
- Valuating_Failure_In_Revision 询价失败（架构调整）
- Valuating_Success_In_Revision 询价成功（架构调整）',
      'extraInfo' => '无',
    ),
    'ExecuteOperationSync' => 
    array (
      'summary' => '同步执行产品操作功能。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云速搭应用ID',
            'description' => '云速搭应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'BE68D71ZY5YYIU9R',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源类型，如果需要修改 dds 的相关参数请填写：dds。',
            'description' => '资源类型，如果需要修改 dds 的相关参数请填写：dds。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'dds' => 'dds',
              'ecs' => 'ecs',
            ),
            'example' => 'dds',
          ),
        ),
        2 => 
        array (
          'name' => 'Operation',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '本次操作类型',
            'description' => '本次操作类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'modifyConnectionString' => 'modifyConnectionString',
              'rename' => 'rename',
            ),
            'example' => 'rename',
          ),
        ),
        3 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '操作相关参数，根据不同的Operation值，输入对应的参数',
            'description' => '操作相关参数，根据不同的Operation值，输入对应的参数',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'any',
              'description' => '调试时请先选择“参数类型”，再输入参数值。',
              'example' => '选择string类型:”CADT“； 选择number类型:123',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID，用于资源组权限校验',
            'description' => '资源组ID，用于资源组权限校验',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyjt3c5om3hi',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'example' => '1600765710019',
          ),
        ),
      ),
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
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Access key ID cannot be null.',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FDC73B05-5331-57AA-BA93-4C9882792FF5',
              ),
              'Data' => 
              array (
                'title' => '同步操作任务ID',
                'description' => '同步操作任务ID',
                'type' => 'string',
                'example' => 'op_xxxxxxxxxxxxxxxxxx_dds_modifyInstanceType_BYSOQGWUV6PME412_ERMEZLXNN3K9N3OL',
              ),
              'Code' => 
              array (
                'title' => '结果码，200代表成功；其它代表失败。',
                'description' => '结果码，200代表成功；其它代表失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Access key ID cannot be null.\\",\\n  \\"RequestId\\": \\"FDC73B05-5331-57AA-BA93-4C9882792FF5\\",\\n  \\"Data\\": \\"op_xxxxxxxxxxxxxxxxxx_dds_modifyInstanceType_BYSOQGWUV6PME412_ERMEZLXNN3K9N3OL\\",\\n  \\"Code\\": 200\\n}","type":"json"}]',
      'title' => '同步执行操作',
      'description' => '同步执行产品操作功能。',
    ),
    'GetExecuteOperationResult' => 
    array (
      'summary' => '异步获取操作结果。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OperationId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作ID',
            'description' => '操作ID',
            'type' => 'string',
            'required' => true,
            'example' => 'op_xxxxxxxxxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID，用于资源组相关权限校验',
            'description' => '资源组ID，用于资源组相关权限校验',
            'type' => 'string',
            'required' => false,
            'example' => 'testResourceId',
          ),
        ),
      ),
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
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '" "',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A3488F1D-xxxx-xxxx-xxxx-5374BA0F3562',
              ),
              'Data' => 
              array (
                'description' => '返回异步操作结果详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'OperationId' => 
                  array (
                    'title' => '操作ID',
                    'description' => '操作ID',
                    'type' => 'string',
                    'example' => 'op_xxxxxxxx',
                  ),
                  'Status' => 
                  array (
                    'title' => '当前操作状态',
                    'description' => '当前操作状态',
                    'type' => 'string',
                    'example' => '初始化：INIT；运行中：RUNNING； 成功：SUCCESS；失败：FAILURE;
',
                  ),
                  'Message' => 
                  array (
                    'title' => '操作相关信息',
                    'description' => '操作相关信息',
                    'type' => 'string',
                    'example' => '"[{"vServerGroupId":"rsp-xxxx","healthCheckHttpVersion":"http1.0","status":"running","gzip":"on","requestId":"89xxxx","description":"abcxxx","bandwidth":-1,"healthCheckTimeout":10,"healthCheckType":"http","aclStatus":"off","unhealthyThreshold":3,"xForwardedFor_SLBID":"off","healthCheckHttpCode":"http_3xx,http_2xx","listenerForward":"off","xForwardedFor":"on","idleTimeout":15,"requestTimeout":60,"listenerPort":80,"healthCheckInterval":2,"healthCheckURI":"/","scheduler":"rr","healthyThreshold":3,"xForwardedFor_proto":"off","xForwardedFor_SLBIP":"off","stickySession":"off","healthCheckMethod":"head","healthCheck":"on","rules":[],"aclIds":[]}]"',
                  ),
                  'Arguments' => 
                  array (
                    'title' => '操作相关输出结果',
                    'description' => '操作相关输出结果',
                    'type' => 'string',
                    'example' => '{
    "tagMap"：{
        "cadt": [
          "12xxxxxxx",
          "34xxxxxxx"
        ]
    }
}',
                  ),
                ),
              ),
              'Code' => 
              array (
                'title' => '结果码，200代表成功',
                'description' => '结果码，200代表成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"\\\\\\" \\\\\\"\\",\\n  \\"RequestId\\": \\"A3488F1D-xxxx-xxxx-xxxx-5374BA0F3562\\",\\n  \\"Data\\": {\\n    \\"OperationId\\": \\"op_xxxxxxxx\\",\\n    \\"Status\\": \\"初始化：INIT；运行中：RUNNING； 成功：SUCCESS；失败：FAILURE;\\\\n\\",\\n    \\"Message\\": \\"\\\\\\"[{\\\\\\"vServerGroupId\\\\\\":\\\\\\"rsp-xxxx\\\\\\",\\\\\\"healthCheckHttpVersion\\\\\\":\\\\\\"http1.0\\\\\\",\\\\\\"status\\\\\\":\\\\\\"running\\\\\\",\\\\\\"gzip\\\\\\":\\\\\\"on\\\\\\",\\\\\\"requestId\\\\\\":\\\\\\"89xxxx\\\\\\",\\\\\\"description\\\\\\":\\\\\\"abcxxx\\\\\\",\\\\\\"bandwidth\\\\\\":-1,\\\\\\"healthCheckTimeout\\\\\\":10,\\\\\\"healthCheckType\\\\\\":\\\\\\"http\\\\\\",\\\\\\"aclStatus\\\\\\":\\\\\\"off\\\\\\",\\\\\\"unhealthyThreshold\\\\\\":3,\\\\\\"xForwardedFor_SLBID\\\\\\":\\\\\\"off\\\\\\",\\\\\\"healthCheckHttpCode\\\\\\":\\\\\\"http_3xx,http_2xx\\\\\\",\\\\\\"listenerForward\\\\\\":\\\\\\"off\\\\\\",\\\\\\"xForwardedFor\\\\\\":\\\\\\"on\\\\\\",\\\\\\"idleTimeout\\\\\\":15,\\\\\\"requestTimeout\\\\\\":60,\\\\\\"listenerPort\\\\\\":80,\\\\\\"healthCheckInterval\\\\\\":2,\\\\\\"healthCheckURI\\\\\\":\\\\\\"/\\\\\\",\\\\\\"scheduler\\\\\\":\\\\\\"rr\\\\\\",\\\\\\"healthyThreshold\\\\\\":3,\\\\\\"xForwardedFor_proto\\\\\\":\\\\\\"off\\\\\\",\\\\\\"xForwardedFor_SLBIP\\\\\\":\\\\\\"off\\\\\\",\\\\\\"stickySession\\\\\\":\\\\\\"off\\\\\\",\\\\\\"healthCheckMethod\\\\\\":\\\\\\"head\\\\\\",\\\\\\"healthCheck\\\\\\":\\\\\\"on\\\\\\",\\\\\\"rules\\\\\\":[],\\\\\\"aclIds\\\\\\":[]}]\\\\\\"\\",\\n    \\"Arguments\\": \\"{\\\\n    \\\\\\"tagMap\\\\\\"：{\\\\n        \\\\\\"cadt\\\\\\": [\\\\n          \\\\\\"12xxxxxxx\\\\\\",\\\\n          \\\\\\"34xxxxxxx\\\\\\"\\\\n        ]\\\\n    }\\\\n}\\"\\n  },\\n  \\"Code\\": 200\\n}","type":"json"}]',
      'title' => '异步获取操作结果',
    ),
    'ExecuteOperationASync' => 
    array (
      'summary' => '异步执行产品操作功能。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云速搭应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'BG**********UQ',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源类型，当前只支持cadt_app',
            'description' => '资源类型，如果需要修改ecs的相关参数请填写：ecs。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'ecs' => 'ecs',
            ),
            'example' => 'ACK',
          ),
        ),
        2 => 
        array (
          'name' => 'Operation',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '本次操作类型，例如：attachTag，批量打标; assignResourceGroup，批量分配资源组等',
            'description' => '本次操作类型，是修改产品的操作类型，有的操作类型是通用，有的是单独使用。
下面为ecs的相关编配示例：
- ecs的名称：rename
- ecs的规格：modifyInstanceType
- ecs的启动：modifyInstanceType
- ecs的停止：modifyInstanceType
- ecs的重启：modifyInstanceType
- ecs添加标签：addTags
- ecs的删除：ecsDelete
- ecs的付费类型：modifyPayType',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'addTags' => 'addTags',
              'modifyInstanceType' => 'modifyInstanceType',
            ),
            'example' => 'addTags',
          ),
        ),
        3 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '操作相关参数，根据不同的Operation值，输入对应的参数',
            'description' => '操作相关参数，根据不同的Operation值，输入对应的参数，此次传值是以map的形式传参。
以下为ecs的变配为例：
- ecs的需要传递的公共参数如下：
change_type,
regionId,
instanceId,
appId
- ecs变更规格的参数值示例：
{
	"ServiceType": "ecs",
	"Operation": "modifyInstanceType",
	"Attributes": "{\\"change_type\\":\\"modify_instance_type\\",\\"instance_type\\":\\"ecs.hfr7.2xlarge\\",\\"instanceId\\":\\"i-xxxxxxxxx\\",\\"regionId\\":\\"cn-beijing\\",\\"appId\\":\\"xxxxxxxxxxxxx\\"}"
}
- ecs停止实例如下：
{
	"ServiceType": "ecs",
	"Operation": "modifyInstanceType",
	"Attributes": "{\\"change_type\\":\\"modify_status\\",\\"status\\":\\"Stopped\\",\\"instanceId\\":\\"i-xxxxxxxxx\\",\\"regionId\\":\\"cn-beijing\\",\\"appId\\":\\"xxxxxxxxxxxxx\\"}"
}
- ecs启动的参数实例如下：
{
	"ServiceType": "ecs",
	"Operation": "modifyInstanceType",
	"Attributes": "{\\"change_type\\":\\"modify_status\\",\\"status\\":\\"Running\\",\\"instanceId\\":\\"i-xxxxxxxxx\\",\\"regionId\\":\\"cn-beijing\\",\\"appId\\":\\"xxxxxxxxxxxxx\\"}"
}
- ecs重启的实例如下：
{
	"ServiceType": "ecs",
	"Operation": "modifyInstanceType",
	"Attributes": "{\\"change_type\\":\\"modify_status\\",\\"status\\":\\"Restart\\",\\"instanceId\\":\\"i-xxxxxxxxx\\",\\"regionId\\":\\"cn-beijing\\",\\"appId\\":\\"xxxxxxxxxxxxx\\"}"
}',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'any',
              'description' => '调试时请先选择“参数类型”，再输入参数值。',
              'example' => '选择string类型：”CADT“；
选择number类型：123',
            ),
            'enumValueTitles' => 
            array (
              '{ 	"ServiceType": "ecs", 	"Operation": "modifyInstanceType", 	"Attributes": "{\\"change_type\\":\\"modify_instance_type\\",\\"instance_type\\":\\"ecs.hfr7.2xlarge\\",\\"instanceId\\":\\"i-xxxxxxxxx\\",\\"regionId\\":\\"cn-beijing\\",\\"appId\\":\\"xxxxxxxxxxxxx\\"}" }' => '{ 	"ServiceType": "ecs", 	"Operation": "modifyInstanceType", 	"Attributes": "{\\"change_type\\":\\"modify_instance_type\\",\\"instance_type\\":\\"ecs.hfr7.2xlarge\\",\\"instanceId\\":\\"i-xxxxxxxxx\\",\\"regionId\\":\\"cn-beijing\\",\\"appId\\":\\"xxxxxxxxxxxxx\\"}" }',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID，用于资源组权限校验',
            'description' => '资源组ID，用于资源组权限校验',
            'type' => 'string',
            'required' => false,
            'example' => 'ceshi',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'example' => '1600765710019',
          ),
        ),
      ),
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
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '" "',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'SD-WEF-DSW-32ED-323DDSD-2332D',
              ),
              'Data' => 
              array (
                'title' => '异步操作任务ID',
                'description' => '本次操作信息。',
                'type' => 'string',
                'example' => 'op_xxxxxxxxxxxxxxxxxx_ecs_modifyInstanceType_BYSOQGWUV6PME412_ERMEZLXNN3K9N3OL',
              ),
              'Code' => 
              array (
                'title' => '结果码，200代表成功；其它代表失败。',
                'description' => '结果码，200代表成功；其它代表失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"\\\\\\" \\\\\\"\\",\\n  \\"RequestId\\": \\"SD-WEF-DSW-32ED-323DDSD-2332D\\",\\n  \\"Data\\": \\"op_xxxxxxxxxxxxxxxxxx_ecs_modifyInstanceType_BYSOQGWUV6PME412_ERMEZLXNN3K9N3OL\\",\\n  \\"Code\\": 200\\n}","type":"json"}]',
      'title' => '异步执行操作',
    ),
    'ListTagResources' => 
    array (
      'summary' => '该接口用于查询应用或模板的标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标记',
            'description' => '幂等标记',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1600765710019',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '区域ID',
            'description' => '区域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一个查询开始Token',
            'description' => '下一个查询开始Token',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => true,
            'example' => 'Application',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '资源ID,最多 50个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '如果“ResourceType”是“Application”，则“ResourceId”为应用ID；
如果“ResourceType”是“Template”，则“ResourceId”为模板ID。',
              'type' => 'string',
              'required' => true,
              'example' => 'A926QK1X89YF2G62',
            ),
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => '标签1',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => '值1',
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
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                'description' => '下一个查询开始Token，NextToken为空说明没有下一个',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '847C9D0A-BABD-589C-8A9C-6464409EDED9',
              ),
              'Code' => 
              array (
                'description' => '结果码，200代表成功',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'bp.java.nopowerContact',
              ),
              'TagResources' => 
              array (
                'title' => 'TagResource',
                'description' => 'TagResource',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签资源集合',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => 'Application或Template',
                      'type' => 'string',
                      'example' => 'application',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值',
                      'type' => 'string',
                      'example' => 'Value值。',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => 'CADT应用或模板ID',
                      'type' => 'string',
                      'example' => 'MW7T1820ACJX9BI7',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键',
                      'type' => 'string',
                      'example' => 'Key值。',
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
            'errorCode' => 'bp.java.nopowerContact',
            'errorMessage' => 'You do not have permission to use this function. Please contact the main account or permission administrator to authorize the relevant permissions.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"1\\",\\n  \\"RequestId\\": \\"847C9D0A-BABD-589C-8A9C-6464409EDED9\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"bp.java.nopowerContact\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"application\\",\\n      \\"TagValue\\": \\"Value值。\\",\\n      \\"ResourceId\\": \\"MW7T1820ACJX9BI7\\",\\n      \\"TagKey\\": \\"Key值。\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询标签接口',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'bpstudio.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'bpstudio.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
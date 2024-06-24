<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Sts',
    'version' => '2015-04-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 120773,
      'title' => '角色扮演',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AssumeRole',
        1 => 'AssumeRoleWithSAML',
        2 => 'AssumeRoleWithOIDC',
      ),
    ),
    1 => 
    array (
      'id' => 120777,
      'title' => '调用身份',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetCallerIdentity',
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
    'AssumeRole' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DurationSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Token有效期。单位：秒。

Token有效期最小值为900秒，最大值为要扮演角色的`MaxSessionDuration`时间。默认值为3600秒。

您可以通过CreateRole或UpdateRole设置角色最大会话时间`MaxSessionDuration`。更多信息，请参见[CreateRole](~~28710~~)或[UpdateRole](~~28712~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
        1 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为STS Token额外添加的一个权限策略，进一步限制STS Token的权限。具体如下：

- 如果指定该权限策略，则STS Token最终的权限策略取RAM角色权限策略与该权限策略的交集。
- 如果不指定该权限策略，则STS Token最终的权限策略取RAM角色的权限策略。

长度为1~2048个字符。

关于权限策略元素和示例，请参见[权限策略基本元素](~~93738~~)和[权限策略示例库](~~210969~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Statement": [{"Action": ["*"],"Effect": "Allow","Resource": ["*"]}],"Version":"1"}',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要扮演的RAM角色ARN。

该角色是可信实体为阿里云账号类型的RAM角色。更多信息，请参见[创建可信实体为阿里云账号的RAM角色](~~93691~~)或[CreateRole](~~28710~~)。

格式：`acs:ram::<account_id>:role/<role_name>` 。

您可以通过RAM控制台或API查看角色ARN。具体如下：

- RAM控制台：请参见[查看RAM角色的ARN](~~39744~~)。
- API：请参见[ListRoles](~~28713~~)或[GetRole](~~28711~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ram::123456789012****:role/adminrole',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleSessionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色会话名称。

该参数为用户自定义参数。通常设置为调用该API的用户身份，例如：用户名。在操作审计日志中，即使是同一个RAM角色执行的操作，也可以根据不同的`RoleSessionName`来区分实际操作者，以实现用户级别的访问审计。

长度为2~64个字符，可包含英文字母、数字和特殊字符`.@-_`。',
            'type' => 'string',
            'required' => true,
            'example' => 'alice',
          ),
        ),
        4 => 
        array (
          'name' => 'ExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色外部ID。

该参数为外部提供的用于表示角色的参数信息，主要功能是防止混淆代理人问题。更多信息，请参见[使用ExternalId防止混淆代理人问题](~~2361741~~)。

长度为2~1224个字符，可包含英文字母、数字和特殊字符`=,.@:/-_`。正则为：`[\\w+=,.@:\\/-]*`。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcd1234',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6894B13B-6D71-4EF5-88FA-F32781734A7F',
              ),
              'AssumedRoleUser' => 
              array (
                'description' => '角色扮演时的临时身份。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumedRoleId' => 
                  array (
                    'description' => '临时身份的ID。',
                    'type' => 'string',
                    'example' => '34458433936495****:alice',
                  ),
                  'Arn' => 
                  array (
                    'description' => '临时身份的ARN。',
                    'type' => 'string',
                    'example' => 'acs:ram::123456789012****:role/adminrole/alice',
                  ),
                ),
              ),
              'Credentials' => 
              array (
                'description' => '访问凭证。
',
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityToken' => 
                  array (
                    'description' => '安全令牌。
> 安全令牌的长度不固定，我们强烈建议您不要对安全令牌的最大长度做任何限制。',
                    'type' => 'string',
                    'example' => '********',
                  ),
                  'Expiration' => 
                  array (
                    'description' => 'Token到期失效时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-04-09T11:52:19Z',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'description' => '访问密钥。',
                    'type' => 'string',
                    'example' => 'wyLTSmsyPGP1ohvvw8xYgB29dlGI8KMiH2pK****',
                  ),
                  'AccessKeyId' => 
                  array (
                    'description' => '访问密钥ID。',
                    'type' => 'string',
                    'example' => 'STS.L4aBSCSJVMuKg5U1****',
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
            'errorCode' => 'InvalidParameter.DurationSeconds',
            'errorMessage' => 'The Min/Max value of DurationSeconds is 15min/1hr.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ExternalId',
            'errorMessage' => 'The parameter ExternalId is wrongly formed.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.RoleArn',
            'errorMessage' => 'The parameter RoleArn is wrongly formed.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.RoleSessionName',
            'errorMessage' => 'The parameter RoleSessionName is wrongly formed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.SerialNumber',
            'errorMessage' => 'The parameter SerialNumber is wrongly formed.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TokenCode',
            'errorMessage' => 'The parameter TokenCode is wrongly formed.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyGrammar',
            'errorMessage' => 'The parameter Policy has not passed grammar check.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.PolicySize',
            'errorMessage' => 'The size of Policy must be smaller than 2048 bytes.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ContentType',
            'errorMessage' => 'The ContentType request header must be either "application/json" or "application/x-www-form-urlencoded".',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to do this action. You should be authorized by RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'AuthenticationFail.ApiUsername',
            'errorMessage' => 'The specified api username is not legal.',
          ),
          2 => 
          array (
            'errorCode' => 'AuthenticationFail.ApiPassword',
            'errorMessage' => 'The specified api password is not legal.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The specified Role not exists .',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'STS Server Internal Error happened, please send the RequestId to us.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6894B13B-6D71-4EF5-88FA-F32781734A7F\\",\\n  \\"AssumedRoleUser\\": {\\n    \\"AssumedRoleId\\": \\"34458433936495****:alice\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/adminrole/alice\\"\\n  },\\n  \\"Credentials\\": {\\n    \\"SecurityToken\\": \\"********\\",\\n    \\"Expiration\\": \\"2015-04-09T11:52:19Z\\",\\n    \\"AccessKeySecret\\": \\"wyLTSmsyPGP1ohvvw8xYgB29dlGI8KMiH2pK****\\",\\n    \\"AccessKeyId\\": \\"STS.L4aBSCSJVMuKg5U1****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AssumeRoleResponse>\\n    <Credentials>\\n        <AccessKeyId>STS.L4aBSCSJVMuKg5U1****</AccessKeyId>\\n        <AccessKeySecret>wyLTSmsyPGP1ohvvw8xYgB29dlGI8KMiH2pK****</AccessKeySecret>\\n        <Expiration>2015-04-09T11:52:19Z</Expiration>\\n        <SecurityToken>********</SecurityToken>\\n    </Credentials>\\n    <AssumedRoleUser>\\n        <Arn>acs:ram::123456789012****:role/adminrole/alice</Arn>\\n        <AssumedRoleId>34458433936495****:alice</AssumedRoleId>\\n    </AssumedRoleUser>\\n    <RequestId>6894B13B-6D71-4EF5-88FA-F32781734A7F</RequestId>\\n</AssumeRoleResponse>","errorExample":""}]',
      'title' => '获取扮演角色的临时身份凭证',
      'summary' => '通过调用AssumeRole接口，获取一个扮演RAM角色的临时身份凭证（STS Token）。',
      'description' => '### 前提条件

该接口不能使用阿里云账号（主账号）调用，只能使用RAM用户或RAM角色调用，请确保已为调用者（RAM用户或RAM角色）授予STS的管理权限（AliyunSTSAssumeRoleAccess）。

否则，会报如下错误：

`You are not authorized to do this action. You should be authorized by RAM.`

问题原因和解决方法如下：

- 该调用者缺少允许STS扮演角色的权限策略：请为该调用者添加系统策略（AliyunSTSAssumeRoleAccess）或自定义策略。具体操作，请参见[能否指定RAM用户具体可以扮演哪个RAM角色](~~39744~~)、[为RAM用户授权](~~116146~~)。
- RAM角色的信任策略不包含调用者，即RAM角色不允许该调用者扮演：请为RAM角色添加允许该调用者扮演的信任策略。具体操作，请参见[修改RAM角色的信任策略](~~116819~~)。

### 最佳实践

STS Token自颁发后将在一段时间内有效，建议您设置合理的Token有效期，并在有效期内重复使用，以避免业务请求速率上升后，STS Token颁发的速率限制影响到业务。具体速率限制，请参见[STS服务调用次数是否有上限](~~39744~~)。您可以通过请求参数`DurationSeconds`设置Token有效期。

在移动端上传或下载OSS文件等场景下，其访问量较大，即使重复使用STS Token也可能无法满足限流要求。为避免STS的限流成为OSS访问量的瓶颈，您可以尝试OSS的**在URL中包含签名**的方案。更多信息，请参见[在URL中包含签名](~~31952~~)和[服务端签名后直传](~~31926~~)。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共请求参数](~~315526~~)。',
    ),
    'AssumeRoleWithSAML' => 
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
          'Anonymous' => 
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
          'name' => 'SAMLProviderArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM中创建的SAML身份提供商的ARN。

格式：`acs:ram::<account_id>:saml-provider/<saml_provider_id>`。

您可以通过RAM控制台或API查看身份提供商的ARN。具体如下：

- RAM控制台：请参见[查看SAML身份提供商基本信息](~~116795~~)。
- API：请参见[GetSAMLProvider](~~186833~~)或[ListSAMLProviders](~~186851~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'acs:ram::123456789012****:saml-provider/company1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要扮演的RAM角色的ARN。

该角色是可信实体为SAML身份提供商的RAM角色。更多信息，请参见[创建可信实体为身份提供商的RAM角色](~~116805~~)或[CreateRole](~~28710~~)。

格式：`acs:ram::<account_id>:role/<role_name>`。

您可以通过RAM控制台或API查看角色ARN。具体如下：

- RAM控制台：请参见[如何查看RAM角色的ARN？](~~39744~~)。
- API：请参见[ListRoles](~~28713~~)或[GetRole](~~28711~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'acs:ram::123456789012****:role/adminrole',
          ),
        ),
        2 => 
        array (
          'name' => 'SAMLAssertion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Base64编码后的SAML断言。

长度为4~100000个字符。

> 需要从IdP获取完整的SAML响应，不能是单独的SAML断言字段。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'base64_encoded_saml_assertion',
          ),
        ),
        3 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为STS Token额外添加的一个权限策略，进一步限制STS Token的权限。具体如下：

- 如果指定该权限策略，则STS Token最终的权限取RAM角色权限策略与该权限策略的交集。
- 如果不指定该权限策略，则STS Token最终的权限就是RAM角色的权限。

长度为1~2048个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'url_encoded_policy',
          ),
        ),
        4 => 
        array (
          'name' => 'DurationSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Token有效期。单位：秒。

Token有效期最小值为900秒，最大值为`MaxSessionDuration`设置的时间，默认值为3600秒。

您可以通过CreateRole或UpdateRole接口设置角色最大会话时间`MaxSessionDuration`。更多信息，请参见[CreateRole](~~28710~~)或[UpdateRole](~~28712~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
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
                'example' => '6894B13B-6D71-4EF5-88FA-F32781734A7F',
              ),
              'SAMLAssertionInfo' => 
              array (
                'description' => 'SAML断言中的部分信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'SubjectType' => 
                  array (
                    'description' => 'SAML断言中`NameID`的格式。当前缀为`urn:oasis:names:tc:SAML:2.0:nameid-format:`时，前缀会被移除。例如：`persistent/transient`。',
                    'type' => 'string',
                    'example' => 'persistent',
                  ),
                  'Subject' => 
                  array (
                    'description' => 'SAML断言中`Subject - NameID`字段的值。',
                    'type' => 'string',
                    'example' => 'alice@example.com',
                  ),
                  'Issuer' => 
                  array (
                    'description' => 'SAML断言中`Issuer`字段的值。',
                    'type' => 'string',
                    'example' => 'http://example.com/adfs/services/trust',
                  ),
                  'Recipient' => 
                  array (
                    'description' => 'SAML断言中`Subject - SubjectConfirmation - SubjectConfirmationData`字段中`Recipient`属性的值。',
                    'type' => 'string',
                    'example' => 'https://signin.aliyun.com/saml-role/SSO',
                  ),
                ),
              ),
              'AssumedRoleUser' => 
              array (
                'description' => '角色扮演临时身份。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumedRoleId' => 
                  array (
                    'description' => '临时身份的ID。',
                    'type' => 'string',
                    'example' => '34458433936495****:alice',
                  ),
                  'Arn' => 
                  array (
                    'description' => '临时身份的ARN。',
                    'type' => 'string',
                    'example' => 'acs:sts::123456789012****:assumed-role/AdminRole/alice',
                  ),
                ),
              ),
              'Credentials' => 
              array (
                'description' => '访问凭证。',
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityToken' => 
                  array (
                    'description' => '安全令牌。
> 安全令牌的长度不固定，我们强烈建议您不要对安全令牌的最大长度做任何限制。',
                    'type' => 'string',
                    'example' => '********',
                  ),
                  'Expiration' => 
                  array (
                    'description' => 'Token到期失效时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-04-09T11:52:19Z',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'description' => '访问密钥。',
                    'type' => 'string',
                    'example' => 'wyLTSmsyPGP1ohvvw8xYgB29dlGI8KMiH2pK****',
                  ),
                  'AccessKeyId' => 
                  array (
                    'description' => '访问密钥ID。',
                    'type' => 'string',
                    'example' => 'STS.L4aBSCSJVMuKg5U1****',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'STS Server Internal Error happened, please send the RequestId to us.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6894B13B-6D71-4EF5-88FA-F32781734A7F\\",\\n  \\"SAMLAssertionInfo\\": {\\n    \\"SubjectType\\": \\"persistent\\",\\n    \\"Subject\\": \\"alice@example.com\\",\\n    \\"Issuer\\": \\"http://example.com/adfs/services/trust\\",\\n    \\"Recipient\\": \\"https://signin.aliyun.com/saml-role/SSO\\"\\n  },\\n  \\"AssumedRoleUser\\": {\\n    \\"AssumedRoleId\\": \\"34458433936495****:alice\\",\\n    \\"Arn\\": \\"acs:sts::123456789012****:assumed-role/AdminRole/alice\\"\\n  },\\n  \\"Credentials\\": {\\n    \\"SecurityToken\\": \\"********\\",\\n    \\"Expiration\\": \\"2015-04-09T11:52:19Z\\",\\n    \\"AccessKeySecret\\": \\"wyLTSmsyPGP1ohvvw8xYgB29dlGI8KMiH2pK****\\",\\n    \\"AccessKeyId\\": \\"STS.L4aBSCSJVMuKg5U1****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AssumeRoleWithSAMLResponse>\\n    <Credentials>\\n        <AccessKeyId>STS.L4aBSCSJVMuKg5U1****</AccessKeyId>\\n        <AccessKeySecret>wyLTSmsyPGP1ohvvw8xYgB29dlGI8KMiH2pK****</AccessKeySecret>\\n        <Expiration>2015-04-09T11:52:19Z</Expiration>\\n        <SecurityToken>********</SecurityToken>\\n    </Credentials>\\n    <AssumedRoleUser>\\n        <arn>acs:sts::1234567890123456:assumed-role/AdminRole/alice</arn>\\n        <AssumedRoleId>34458433936495****:alice</AssumedRoleId>\\n    </AssumedRoleUser>\\n    <SAMLAssertionInfo>\\n        <SubjectType>persistent</SubjectType>\\n        <Subject>alice@example.com</Subject>\\n        <Recipient>https://signin.aliyun.com/saml-role/SSO</Recipient>\\n        <Issuer>http://example.com/adfs/services/trust</Issuer>\\n    </SAMLAssertionInfo>\\n    <RequestId>6894B13B-6D71-4EF5-88FA-F32781734A7F</RequestId>\\n</AssumeRoleWithSAMLResponse>","errorExample":""}]',
      'title' => 'SAML角色SSO时获取扮演角色的临时身份凭证',
      'summary' => '进行SAML角色SSO时，通过调用AssumeRoleWithSAML接口，获取扮演RAM角色的临时身份凭证（STS Token）。',
      'description' => '### 前提条件

- 确保已从外部身份提供商（IdP）获取到SAML响应。
- 确保已在RAM中创建了SAML身份提供商。具体操作，请参见[创建SAML身份提供商](~~116083~~)或[CreateSAMLProvider](~~186846~~) 。
- 确保已在RAM中创建了可信实体为SAML身份提供商的RAM角色。具体操作，请参见[创建可信实体为身份提供商的RAM角色](~~116805~~)或[CreateRole](~~28710~~) 。',
      'requestParamsDescription' => '> 由于AssumeRoleWithSAML接口使用SAML断言进行身份认证，可以匿名访问，因此不需要提供公共请求参数中的`Signature`、`SignatureMethod`、`SignatureVersion`和`AccessKeyId`参数。关于公共请求参数的详情，请参见[公共请求参数](~~315526~~)。',
    ),
    'AssumeRoleWithOIDC' => 
    array (
      'summary' => '进行OIDC角色SSO时，通过调用AssumeRoleWithOIDC接口，获取扮演RAM角色的临时身份凭证（STS Token）。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'ARS_OIDC' => 
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
          'name' => 'OIDCProviderArn',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'OIDC Provider的ARN',
            'description' => 'OIDC身份提供商的ARN。

您可以通过RAM控制台或API查看OIDC身份提供商的ARN。具体如下：

- RAM控制台：请参见[查看OIDC身份提供商信息](~~327123~~)。
- API：请参见[GetOIDCProvider](~~327126~~)或[ListOIDCProviders](~~327127~~) 。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'acs:ram::113511544585****:oidc-provider/TestOidcIdp',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要扮演的角色的ARN',
            'description' => '需要扮演的RAM角色ARN。

您可以通过RAM控制台或API查看角色ARN。具体如下：

- RAM控制台：请参见[如何查看RAM角色的ARN](~~39744~~)。
- API：请参见[ListRoles](~~28713~~)或[GetRole](~~28711~~) 。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'acs:ram::113511544585****:role/testoidc',
          ),
        ),
        2 => 
        array (
          'name' => 'OIDCToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'OIDC的ID Token，需输入原始Token，无需Base64解码',
            'description' => '由外部IdP签发的OIDC令牌（OIDC Token）。

长度：4~20000个字符。

> 需要输入原始OIDC Token，无需Base64解码。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'eyJraWQiOiJKQzl3eHpyaHFKMGd0****',
          ),
        ),
        3 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '权限策略。 生成STS Token时可以指定一个额外的权限策略，以进一步限制STS Token的权限。若不指定则返回的Token拥有指定角色的所有权限。',
            'description' => '为STS Token额外添加的一个权限策略，进一步限制STS Token的权限。具体如下：

- 如果指定该权限策略，则STS Token最终的权限取RAM角色权限策略与该权限策略的交集。
- 如果不指定该权限策略，则STS Token最终的权限就是RAM角色的权限。

长度：1~2048个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Statement": [{"Action": ["*"],"Effect": "Allow","Resource": ["*"]}],"Version":"1"}',
          ),
        ),
        4 => 
        array (
          'name' => 'DurationSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Session过期时间，单位为秒。',
            'description' => 'Token有效期。单位：秒。

默认值：3600。最小值：900。最大值：`MaxSessionDuration`设置的时间。

关于设置角色最大会话时间`MaxSessionDuration`的具体操作，请参见[CreateRole](~~28710~~)或[UpdateRole](~~28712~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleSessionName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义参数。此参数用来区分不同的令牌，可用于用户级别的访问审计。',
            'description' => '角色会话名称。

该参数为用户自定义参数。通常设置为调用该API的用户身份，例如：用户名。在操作审计日志中，即使是同一个RAM角色执行的操作，也可以根据不同的RoleSessionName来区分实际操作者，以实现用户级别的访问审计。

格式：包含英文字母、数字、半角句号（.）、at（@）、短划线（-）和下划线（_）。

长度：2~64个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TestOidcAssumedRoleSession',
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
                'example' => '3D57EAD2-8723-1F26-B69C-F8707D8B565D',
              ),
              'OIDCTokenInfo' => 
              array (
                'description' => '解析的OIDC Token信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Subject' => 
                  array (
                    'description' => 'OIDC主体。

对应OIDC Token中的`sub`字段值。
',
                    'type' => 'string',
                    'example' => 'KryrkIdjylZb7agUgCEf****',
                  ),
                  'Issuer' => 
                  array (
                    'description' => 'OIDC颁发者URL。

对应OIDC Token中的`iss`字段值。',
                    'type' => 'string',
                    'example' => 'https://dev-xxxxxx.okta.com',
                  ),
                  'ClientIds' => 
                  array (
                    'description' => 'OIDC受众。多个之间用半角逗号（,）分隔。

对应OIDC Token中的`aud`字段值。',
                    'type' => 'string',
                    'example' => '496271242565057****',
                  ),
                  'ExpirationTime' => 
                  array (
                    'description' => 'OIDC Token的过期时间。',
                    'type' => 'string',
                    'example' => '2021-10-20T04:27:09Z',
                  ),
                  'IssuanceTime' => 
                  array (
                    'description' => 'OIDC Token的签发时间。',
                    'type' => 'string',
                    'example' => '2021-10-20T03:27:09Z',
                  ),
                  'VerificationInfo' => 
                  array (
                    'description' => 'OIDC Token的检验信息。更多信息，请参见[管理OIDC身份提供商](~~327123~~)。',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                ),
              ),
              'AssumedRoleUser' => 
              array (
                'description' => '角色扮演临时身份。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumedRoleId' => 
                  array (
                    'description' => '临时身份的ID。',
                    'type' => 'string',
                    'example' => '33157794895460****',
                  ),
                  'Arn' => 
                  array (
                    'description' => '临时身份的ARN。',
                    'type' => 'string',
                    'example' => 'acs:ram::113511544585****:role/testoidc/TestOidcAssumedRoleSession',
                  ),
                ),
              ),
              'Credentials' => 
              array (
                'description' => '临时访问凭证（STS Token）。',
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityToken' => 
                  array (
                    'description' => '安全令牌。
> 安全令牌的长度不固定，我们强烈建议您不要对安全令牌的最大长度做任何限制。',
                    'type' => 'string',
                    'example' => 'CAIShwJ1q6Ft5B2yfSjIr5bSEsj4g7BihPWGWHz****',
                  ),
                  'Expiration' => 
                  array (
                    'description' => 'Token到期失效时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2021-10-20T04:27:09Z',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'description' => '访问密钥。',
                    'type' => 'string',
                    'example' => 'CVwjCkNzTMupZ8NbTCxCBRq3K16jtcWFTJAyBEv2****',
                  ),
                  'AccessKeyId' => 
                  array (
                    'description' => '访问密钥ID。',
                    'type' => 'string',
                    'example' => 'STS.NUgYrLnoC37mZZCNnAbez****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3D57EAD2-8723-1F26-B69C-F8707D8B565D\\",\\n  \\"OIDCTokenInfo\\": {\\n    \\"Subject\\": \\"KryrkIdjylZb7agUgCEf****\\",\\n    \\"Issuer\\": \\"https://dev-xxxxxx.okta.com\\",\\n    \\"ClientIds\\": \\"496271242565057****\\",\\n    \\"ExpirationTime\\": \\"2021-10-20T04:27:09Z\\",\\n    \\"IssuanceTime\\": \\"2021-10-20T03:27:09Z\\",\\n    \\"VerificationInfo\\": \\"Success\\"\\n  },\\n  \\"AssumedRoleUser\\": {\\n    \\"AssumedRoleId\\": \\"33157794895460****\\",\\n    \\"Arn\\": \\"acs:ram::113511544585****:role/testoidc/TestOidcAssumedRoleSession\\"\\n  },\\n  \\"Credentials\\": {\\n    \\"SecurityToken\\": \\"CAIShwJ1q6Ft5B2yfSjIr5bSEsj4g7BihPWGWHz****\\",\\n    \\"Expiration\\": \\"2021-10-20T04:27:09Z\\",\\n    \\"AccessKeySecret\\": \\"CVwjCkNzTMupZ8NbTCxCBRq3K16jtcWFTJAyBEv2****\\",\\n    \\"AccessKeyId\\": \\"STS.NUgYrLnoC37mZZCNnAbez****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<AssumeRoleWithOIDCResponse>\\n\\t<RequestId>3D57EAD2-8723-1F26-B69C-F8707D8B565D</RequestId>\\n\\t<OIDCTokenInfo>\\n\\t\\t<Subject>KryrkIdjylZb7agUgCEf****</Subject>\\n\\t\\t<Issuer>https://dev-xxxxxx.okta.com</Issuer>\\n\\t\\t<ClientIds>496271242565057****</ClientIds>\\n\\t</OIDCTokenInfo>\\n\\t<AssumedRoleUser>\\n\\t\\t<AssumedRoleId>33157794895460****</AssumedRoleId>\\n\\t\\t<Arn>acs:ram::113511544585****:role/testoidc/TestOidcAssumedRoleSession</Arn>\\n\\t</AssumedRoleUser>\\n\\t<Credentials>\\n\\t\\t<SecurityToken>CAIShwJ1q6Ft5B2yfSjIr5bSEsj4g7BihPWGWHz****</SecurityToken>\\n\\t\\t<Expiration>2021-10-20T04:27:09Z</Expiration>\\n\\t\\t<AccessKeySecret>CVwjCkNzTMupZ8NbTCxCBRq3K16jtcWFTJAyBEv2****</AccessKeySecret>\\n\\t\\t<AccessKeyId>STS.NUgYrLnoC37mZZCNnAbez****</AccessKeyId>\\n\\t</Credentials>\\n</AssumeRoleWithOIDCResponse>\\t\\n","errorExample":""}]',
      'title' => 'OIDC角色SSO时获取扮演角色的临时身份凭证',
      'description' => '### 前提条件

- 确保已从外部身份提供商（IdP）获取到OIDC令牌（OIDC Token）。
- 确保已在RAM中创建了OIDC身份提供商。具体操作，请参见[创建OIDC身份提供商](~~327123~~)或[CreateOIDCProvider](~~327135~~) 。
- 确保已在RAM中创建了可信实体为OIDC身份提供商的RAM角色。具体操作，请参见[创建可信实体为身份提供商的RAM角色](~~116805~~)或[CreateRole](~~28710~~) 。',
      'requestParamsDescription' => '> 由于AssumeRoleWithOIDC接口使用OIDC Token进行身份认证，可以匿名访问，因此不需要提供公共请求参数中的`Signature`、`SignatureMethod`、`SignatureVersion`和`AccessKeyId`参数。关于公共请求参数的详情，请参见[公共请求参数](~~315526~~)。',
    ),
    'GetCallerIdentity' => 
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'IdentityType' => 
              array (
                'description' => '身份类型。取值：

- Account：阿里云账号（主账号）。
- RAMUser：RAM用户。
- AssumedRoleUser：RAM角色。',
                'type' => 'string',
                'example' => 'RAMUser',
              ),
              'AccountId' => 
              array (
                'description' => '当前调用者所属阿里云账号ID。',
                'type' => 'string',
                'example' => '196813200012****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3C87BF47-3724-5443-ADC1-5AEAD9A03EB1',
              ),
              'PrincipalId' => 
              array (
                'description' => '身份标识。',
                'type' => 'string',
                'example' => '28877424437521****',
              ),
              'UserId' => 
              array (
                'description' => '用户ID。具体如下：

- 如果当前调用者是阿里云账号，则返回阿里云账号ID。
- 如果当前调用者是RAM用户，则返回RAM用户ID。

> 仅限当前调用者是阿里云账号或RAM用户时返回该参数。',
                'type' => 'string',
                'example' => '216959339000****',
              ),
              'Arn' => 
              array (
                'description' => '当前调用者的ARN。',
                'type' => 'string',
                'example' => 'acs:ram::196813200012****:user/admin',
              ),
              'RoleId' => 
              array (
                'description' => 'RAM角色ID。

> 仅限当前调用者是RAM角色时返回该参数。',
                'type' => 'string',
                'example' => '33537620082992****',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'STS Server Internal Error happened, please send the RequestId to us.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IdentityType\\": \\"RAMUser\\",\\n  \\"AccountId\\": \\"196813200012****\\",\\n  \\"RequestId\\": \\"3C87BF47-3724-5443-ADC1-5AEAD9A03EB1\\",\\n  \\"PrincipalId\\": \\"28877424437521****\\",\\n  \\"UserId\\": \\"216959339000****\\",\\n  \\"Arn\\": \\"acs:ram::196813200012****:user/admin\\",\\n  \\"RoleId\\": \\"33537620082992****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取当前调用者的身份信息',
      'summary' => '调用GetCallerIdentity获取当前调用者的身份信息。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'sts.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'sts.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'sts.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'sts.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'sts.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'sts.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'sts.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'sts.cn-nanjing.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'sts.cn-fuzhou.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'sts.cn-shenzhen.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'sts.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'sts.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'sts.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'sts.ap-northeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'sts.ap-southeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'sts.ap-southeast-2.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'sts.ap-southeast-3.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'sts.ap-southeast-5.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'sts.us-east-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'sts.us-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'sts.eu-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'sts.eu-central-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'sts.ap-south-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'sts.me-east-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'sts.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'sts.cn-shanghai-finance-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'sts.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'sts.ap-southeast-7.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'sts.cn-beijing-finance-1.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'sts.me-central-1.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'sts.cn-heyuan.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'sts.cn-guangzhou.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'sts.cn-wuhan-lr.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'VpcPeer',
    'version' => '2022-01-01',
  ),
  'directories' => 
  array (
    0 => 'AcceptVpcPeerConnection',
    1 => 'CreateVpcPeerConnection',
    2 => 'DeleteVpcPeerConnection',
    3 => 'GetVpcPeerConnectionAttribute',
    4 => 'ListTagResources',
    5 => 'ListVpcPeerConnections',
    6 => 'ModifyVpcPeerConnection',
    7 => 'MoveResourceGroup',
    8 => 'RejectVpcPeerConnection',
    9 => 'TagResources',
    10 => 'UnTagResources',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'AcceptVpcPeerConnection' => 
    array (
      'summary' => '调用AcceptVpcPeerConnection接口接收VPC对等连接实例的请求。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '130834',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREvpcZAZ5VI',
          1 => 'FEATUREvpc3J8W0N',
          2 => 'FEATUREvpc7MUSG6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接收端需要接收的VPC对等连接实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcc-guzvyqlj0n6e10****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会接收VPC对等连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<CreateVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
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
            'errorCode' => 'ResourceNotFound.InstanceId',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcPeer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationFailed.CdtNotOpened',
            'errorMessage' => 'The operation failed because the Cdt service is not opened.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcPeer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationFailed.NotExist.ResourceGroup',
            'errorMessage' => 'The operation failed because the resource group does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationFailed.CrossBorderCdtNotOpened',
            'errorMessage' => 'The cross-border data transmission function of Alibaba Cloud is not enabled.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\"\\n}","errorExample":""},{"type":"xml","example":"<AcceptVpcPeerConnectionResponse>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n</AcceptVpcPeerConnectionResponse>","errorExample":""}]',
      'title' => '接收VPC对等连接',
      'description' => '- 对于跨账号的VPC对等连接，只有接收端接收了连接请求后VPC对等连接实例才会激活。

- **AcceptVpcPeerConnection**接口属于异步接口，即系统会先返回一个**RequestId**，但该VPC对等连接实例并未激活完成，系统后台的激活任务仍在进行。您可以调用[GetVpcPeerConnectionAttribute](~~426100~~)查询VPC对等连接实例的状态。

    - 当VPC对等连接实例处于**Updating**状态时，表示VPC对等连接实例正在激活中。

    - 当VPC对等连接实例处于**Activated**状态时，表示VPC对等连接实例激活完成。

- **AcceptVpcPeerConnection**接口不支持对同一个VPC对等连接实例并发发起接收VPC对等连接实例的请求。',
    ),
    'CreateVpcPeerConnection' => 
    array (
      'summary' => '调用CreateVpcPeerConnection接口创建VPC对等连接。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建VPC对等连接的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建VPC对等连接发起端的VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp1gsk7h12ew7oegk****',
          ),
        ),
        2 => 
        array (
          'name' => 'AcceptingAliUid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建的VPC对等连接接收端的阿里云账号（主账号）ID。

- 输入您的阿里云账号ID，则创建同账号VPC对等连接。

- 输入其他阿里云账号ID，则创建跨账号VPC对等连接。
   
> 如果接收端的账号为RAM用户（子账号），则**AcceptingAliUid**需要输入该RAM用户对应的阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1210123456123456',
          ),
        ),
        3 => 
        array (
          'name' => 'AcceptingRegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建的VPC对等连接接收端的地域ID。

- 创建同地域VPC对等连接时，输入与发起端的地域ID相同的地域ID。

- 创建跨地域VPC对等连接时，输入与发起端的地域ID不同的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'AcceptingVpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'VPC对等连接接收端的VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp1vzjkp2q1xgnind****',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建的VPC对等连接名称。

名称长度为2~128个字符，以英文字母或中文开头，可包含数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpcpeer',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建的VPC对等连接描述信息。

长度为2～256个字符，必须以字母或中文开头，但不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：

- **true**：发送检查请求，不会创建VPC对等连接。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        10 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要创建的VPC对等连接的带宽值，单位：Mbps，取值范围为大于0的整数。如需指定该参数，请确保您创建的是跨地域的对等连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<CreateVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'InstanceId' => 
              array (
                'description' => '创建的VPC对等连接的实例ID。',
                'type' => 'string',
                'example' => 'pcc-lnk0m24khwvtkm****',
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
            'errorCode' => 'OperationFailed.CdtNotOpened',
            'errorMessage' => 'The operation failed because the Cdt service is not opened.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.CrossBorderCdtNotOpened',
            'errorMessage' => 'The operation failed because the CrossBorderCdt service is not opened.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.Vpc',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.AcceptingVpc',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.RouterInterface',
            'errorMessage' => 'The specified resource of %s already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.VpcPeer',
            'errorMessage' => 'The specified resource of %s already exists.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.CloudBoxExistsInVpc',
            'errorMessage' => 'The operation is not allowed because the CloudBox device exists in vpc.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.CloudBoxExistsInAcceptingVpc',
            'errorMessage' => 'The operation is not allowed because the CloudBox device exists in accepting vpc.',
          ),
          8 => 
          array (
            'errorCode' => 'QuotaExceeded.VpcPeerCountPerVpc',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'UnsupportedRegion',
            'errorMessage' => 'The feature of %s is not supported in the region of %s.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaExceeded.VpcPeerCountPerUserPerRegion',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          11 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcPeer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationFailed.NotExist.ResourceGroup',
            'errorMessage' => 'The operation failed because the resource group does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationFailed.AcceptUserCdtNotOpened',
            'errorMessage' => 'The operation failed because the Cdt service of accept user is not opened.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationFailed.AcceptUserCrossBorderCdtNotOpened',
            'errorMessage' => 'The operation failed because the CrossBorderCdt service of accept user is not opened.',
          ),
          15 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.AcceptUserVpcPeer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          16 => 
          array (
            'errorCode' => 'OperationFailed.ViolativeVpcPeer',
            'errorMessage' => 'The creation operation fails because it is not allowed to create a vpc peer instance between the originating region and the receiving region.',
          ),
          17 => 
          array (
            'errorCode' => 'QuotaExceeded.CrossRegionVpcPeerCountPerVpc',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          18 => 
          array (
            'errorCode' => 'QuotaExceeded.IntraRegionVpcPeerCountPerVpc',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"InstanceId\\": \\"pcc-lnk0m24khwvtkm****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVpcPeerConnectionResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <InstanceId>pcc-lnk0m24khwvtkm****</InstanceId>\\n</CreateVpcPeerConnectionResponse>","errorExample":""}]',
      'title' => '创建VPC对等连接',
      'description' => '创建VPC对等连接前，您需要完成以下事项：
- **CreateVpcPeerConnection**接口属于异步接口，即系统会先返回一个**InstanceId**，但该VPC对等连接实例并未创建完成，系统后台的创建任务仍在进行。您可以调用[GetVpcPeerConnectionAttribute](~~426095~~)查询VPC对等连接的状态。
    - 当VPC对等连接处于**Creating**状态时，表示VPC对等连接正在创建中。    
    - 当VPC对等连接处于**Activated**状态时，表示VPC对等连接创建完成。
    - 当VPC对等连接处于**Accepting**状态时，为跨账号场景，跨账号场景需要在接收端接收。
- **CreateVpcPeerConnection**接口不支持在同一个VPC下并发创建VPC对等连接。

<props="china">创建VPC对等连接时，系统会为您自动开通非跨境云数据传输CDT（Cloud DataTransfer）和跨境CDT功能。</props>

<props="intl">创建VPC对等连接时，系统会为您自动开通非跨境云数据传输CDT（Cloud DataTransfer）功能。</props>',
    ),
    'DeleteVpcPeerConnection' => 
    array (
      'summary' => '调用DeleteVpcPeerConnection接口删除VPC对等连接实例。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要删除的VPC对等连接的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcc-lnk0m24khwvtkm****',
          ),
        ),
        1 => 
        array (
          'name' => 'Force',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否强删',
            'description' => '是否强制删除VPC对等连接。取值：

- **false**（默认值）：不强制删除VPC对等连接。

- **true**：强制删除VPC对等连接。强制删除时，系统会将VPC路由表中指向该VPC对等连接的路由条目删除。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除VPC对等连接。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<DeleteVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'ResourceNotFound.InstanceId',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcPeer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.RouteEntryExist',
            'errorMessage' => 'The operation is not allowed because of existing routeEntry point to VpcPeer.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcPeerConnectionResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</DeleteVpcPeerConnectionResponse>","errorExample":""}]',
      'title' => '删除VPC对等连接',
      'description' => '- 您可用删除VPC对等连接实例，删除后，您的业务也会中断，请在不影响业务的情况下执行该操作。

    - 如果选择强制删除，系统会将VPC路由表中指向VPC对等连接实例的路由条目删除。

    - 如果未选择强制删除，系统不会将VPC路由表中指向VPC对等连接实例的路由条目删除，您需要手动删除该路由条目。



- **DeleteVpcPeerConnection**接口属于异步接口，即系统会先返回一个**RequestId**，但该VPC对等连接实例并未删除完成，系统后台的删除任务仍在进行。您可以调用[GetVpcPeerConnectionAttribute](~~426100~~)查询VPC对等连接实例的状态。

    - 当VPC对等连接实例处于**Deleting**状态时，表示正在删除中。

    - 当VPC对等连接实例处于**Deleted**状态时，表示删除完成。

- **DeleteVpcPeerConnection**接口不支持并发删除同一个VPC对等连接实例。',
    ),
    'GetVpcPeerConnectionAttribute' => 
    array (
      'summary' => '调用GetVpcPeerConnectionAttribute接口查询指定VPC对等连接的详细信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询详细信息的VPC对等连接实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcc-lnk0m24khwvtkm****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<GetVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3AC0DE3C83E',
              ),
              'InstanceId' => 
              array (
                'description' => 'VPC对等连接的实例ID。',
                'type' => 'string',
                'example' => 'pcc-lnk0m24khwvtkm****',
              ),
              'GmtCreate' => 
              array (
                'description' => 'VPC对等连接的创建时间。使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-04-24T09:02:36Z',
              ),
              'GmtModified' => 
              array (
                'description' => 'VPC对等连接的修改时间。使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-04-24T19:20:45Z',
              ),
              'Name' => 
              array (
                'description' => 'VPC对等连接的名称。',
                'type' => 'string',
                'example' => 'vpcpeer',
              ),
              'Description' => 
              array (
                'description' => 'VPC对等连接的描述信息。',
                'type' => 'string',
                'example' => 'test',
              ),
              'OwnerId' => 
              array (
                'description' => 'VPC对等连接发起端的阿里云账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '25346073170691****',
              ),
              'AcceptingOwnerUid' => 
              array (
                'description' => 'VPC对等连接接收端的阿里云账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '28311773240248****',
              ),
              'RegionId' => 
              array (
                'description' => 'VPC对等连接发起端的地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'AcceptingRegionId' => 
              array (
                'description' => 'VPC对等连接接收端的地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'Bandwidth' => 
              array (
                'description' => 'VPC对等连接的带宽，单位：Mbps，取值范围为大于0的整数。

> 例外取值-1，表示无带宽限制。

默认值如下：
- 跨地域VPC对等连接的带宽默认值为1024 Mbps。
- 同地域VPC对等连接的带宽默认值为-1 Mbps，即不限制带宽。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1024',
              ),
              'Status' => 
              array (
                'description' => 'VPC对等连接的状态。取值：

- **Creating**：创建中。
- **Accepting**：接收中。
- **Updating**：更新中。
- **Rejected**：已拒绝。
- **Expired**：已过期。
- **Activated**：已激活。
- **Deleting**：删除中。
- **Deleted**：已删除。 


关于VPC对等连接状态的更多信息，请参见[VPC对等连接概述](~~418507~~)。',
                'type' => 'string',
                'example' => 'Activated',
              ),
              'BizStatus' => 
              array (
                'description' => 'VPC对等连接的商业状态。取值：

- **Normal**：正常。
- **FinancialLocked**：欠费锁定。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'GmtExpired' => 
              array (
                'description' => 'VPC对等连接的过期时间。

只有当VPC对等连接的**Status**（状态）为**Accepting**（接收中）或**Expired**（已过期）时，才会返回具体的过期时间；VPC对等连接处于其余状态时，返回值为**null**。',
                'type' => 'string',
                'example' => '2022-05-01T09:02:36Z',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmxazb4ph6aiy****',
              ),
              'Vpc' => 
              array (
                'description' => '发起端VPC实例详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => '发起端VPC实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp1gsk7h12ew7oegk****',
                  ),
                  'Ipv4Cidrs' => 
                  array (
                    'description' => '发起端网段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '发起端网段信息。',
                      'type' => 'string',
                      'example' => '192.168.0.0/16',
                    ),
                  ),
                  'Ipv6Cidrs' => 
                  array (
                    'description' => '发起端IPv6网段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '发起端IPv6网段信息。',
                      'type' => 'string',
                      'example' => '2408:XXXX:3c5:6e00::/56',
                    ),
                  ),
                ),
              ),
              'AcceptingVpc' => 
              array (
                'description' => '接收端VPC实例详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => '接收端VPC实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp1vzjkp2q1xgnind****',
                  ),
                  'Ipv4Cidrs' => 
                  array (
                    'description' => '接收端网段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '接收端网段信息。',
                      'type' => 'string',
                      'example' => '10.0.0.0/16',
                    ),
                  ),
                  'Ipv6Cidrs' => 
                  array (
                    'description' => '接收端IPv6网段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '接收端IPv6网段信息。',
                      'type' => 'string',
                      'example' => '2408:XXXX:3b8:3a00::/56',
                    ),
                  ),
                ),
              ),
              'Tags' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'FinanceDept',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'FinanceJoshua',
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
            'errorCode' => 'ResourceNotFound.InstanceId',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3AC0DE3C83E\\",\\n  \\"InstanceId\\": \\"pcc-lnk0m24khwvtkm****\\",\\n  \\"GmtCreate\\": \\"2022-04-24T09:02:36Z\\",\\n  \\"GmtModified\\": \\"2022-04-24T19:20:45Z\\",\\n  \\"Name\\": \\"vpcpeer\\",\\n  \\"Description\\": \\"test\\",\\n  \\"OwnerId\\": 0,\\n  \\"AcceptingOwnerUid\\": 0,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"AcceptingRegionId\\": \\"cn-hangzhou\\",\\n  \\"Bandwidth\\": 1024,\\n  \\"Status\\": \\"Activated\\",\\n  \\"BizStatus\\": \\"Normal\\",\\n  \\"GmtExpired\\": \\"2022-05-01T09:02:36Z\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmxazb4ph6aiy****\\",\\n  \\"Vpc\\": {\\n    \\"VpcId\\": \\"vpc-bp1gsk7h12ew7oegk****\\",\\n    \\"Ipv4Cidrs\\": [\\n      \\"192.168.0.0/16\\"\\n    ],\\n    \\"Ipv6Cidrs\\": [\\n      \\"2408:XXXX:3c5:6e00::/56\\"\\n    ]\\n  },\\n  \\"AcceptingVpc\\": {\\n    \\"VpcId\\": \\"vpc-bp1vzjkp2q1xgnind****\\",\\n    \\"Ipv4Cidrs\\": [\\n      \\"10.0.0.0/16\\"\\n    ],\\n    \\"Ipv6Cidrs\\": [\\n      \\"2408:XXXX:3b8:3a00::/56\\"\\n    ]\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"FinanceDept\\",\\n      \\"Value\\": \\"FinanceJoshua\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetVpcPeerConnectionAttributeResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3AC0DE3C83E</RequestId>\\n    <InstanceId>pcc-lnk0m24khwvtkm****</InstanceId>\\n    <GmtCreate>2022-04-24T09:02:36Z</GmtCreate>\\n    <GmtModified>2022-04-24T19:20:45Z</GmtModified>\\n    <Name>vpcpeer</Name>\\n    <Description>test</Description>\\n    <OwnerId>253460731706911260</OwnerId>\\n    <AcceptingOwnerUid>283117732402484000</AcceptingOwnerUid>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <AcceptingRegionId>cn-hangzhou</AcceptingRegionId>\\n    <Bandwidth>1024</Bandwidth>\\n    <Status>Activated</Status>\\n    <BizStatus>Normal</BizStatus>\\n    <GmtExpired>2022-05-01T09:02:36Z</GmtExpired>\\n    <ResourceGroupId>rg-acfmxazb4ph6aiy****</ResourceGroupId>\\n    <Vpc>\\n        <VpcId>vpc-bp1gsk7h12ew7oegk****</VpcId>\\n        <Ipv4Cidrs>192.168.0.0/16</Ipv4Cidrs>\\n        <Ipv6Cidrs>2408:XXXX:3c5:6e00::/56</Ipv6Cidrs>\\n    </Vpc>\\n    <AcceptingVpc>\\n        <VpcId>vpc-bp1vzjkp2q1xgnind****</VpcId>\\n        <Ipv4Cidrs>10.0.0.0/16</Ipv4Cidrs>\\n        <Ipv6Cidrs>2408:XXXX:3b8:3a00::/56</Ipv6Cidrs>\\n    </AcceptingVpc>\\n    <Tags>\\n        <Key>FinanceDept</Key>\\n        <Value>FinanceJoshua</Value>\\n    </Tags>\\n</GetVpcPeerConnectionAttributeResponse>","errorExample":""}]',
      'title' => '查询单个VPC对等连接属性',
    ),
    'ListTagResources' => 
    array (
      'summary' => '调用ListTagResources接口查询对等连接已经绑定的标签列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：**PeerConnection**，VPC对等连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'PeerConnection',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。最多支持20个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持输入20个资源ID。

> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
              'type' => 'string',
              'required' => false,
              'example' => 'pcc-bp16qjewdsunr41m1****',
            ),
            'deprecated' => true,
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

一个标签键最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。


一个标签值最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'deprecated' => true,
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：

- 第一次查询和没有下一次查询时，均无需填写。

- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'title' => 'RpcResponse<ListVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DE65F6B7-7566-4802-9007-96F2494AC512',
              ),
              'TagResources' => 
              array (
                'description' => '绑定标签的资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '绑定标签的资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'pcc-bp16qjewdsunr41m1****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。取值：**PeerConnection**，VPC对等连接。',
                      'type' => 'string',
                      'example' => 'PeerConnection',
                    ),
                    'RegionNo' => 
                    array (
                      'description' => 'VPC对等连接发起方的地域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'FinanceDept',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'FinanceJoshua',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
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
            'errorCode' => 'InvalidTagKey',
            'errorMessage' => 'The tag keys are not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of tags is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of resource IDs is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.TagKeys',
            'errorMessage' => 'The tag key cannot be operated by the request.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.TagKey.Duplicated',
            'errorMessage' => 'The specified tag key already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceIds.NotFound',
            'errorMessage' => 'The instance IDs are not found.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidInstanceType.NotFound',
            'errorMessage' => 'The instance type is not found.',
          ),
          7 => 
          array (
            'errorCode' => 'BothEmpty.TagsAndResources',
            'errorMessage' => 'The specified Tags and ResourcesIds are not allow to both empty.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE65F6B7-7566-4802-9007-96F2494AC512\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"pcc-bp16qjewdsunr41m1****\\",\\n      \\"ResourceType\\": \\"PeerConnection\\",\\n      \\"RegionNo\\": \\"cn-hangzhou\\",\\n      \\"TagKey\\": \\"FinanceDept\\",\\n      \\"TagValue\\": \\"FinanceJoshua\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 50\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <RequestId>DE65F6B7-7566-4802-9007-96F2494AC512</RequestId>\\n    <TagResources>\\n        <ResourceId>pcc-bp16qjewdsunr41m1****</ResourceId>\\n        <ResourceType>PeerConnection</ResourceType>\\n        <RegionNo>cn-hangzhou</RegionNo>\\n        <TagKey>FinanceDept</TagKey>\\n        <TagValue>FinanceJoshua</TagValue>\\n    </TagResources>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>50</MaxResults>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询对等连接已经绑定的标签列表',
      'description' => '- 请求中至少指定参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**），以确定检索对象。
- **Tag.N**是资源的标签，由一个键值对组成。仅指定**Tag.N.Key**时，则返回该标签键关联的所有标签值。仅指定**Tag.N.Value**会报错。
- 如果您同时指定**Tag.N**和**ResourceId.N**筛选标签，则**ResourceId.N**必须满足所有输入的标签键值对。
- 如果您同时指定多个标签键值对，返回结果为同时包含被指定的多个键值对的资源。',
    ),
    'ListVpcPeerConnections' => 
    array (
      'summary' => '调用ListVpcPeerConnections接口查询VPC对等连接的详细信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询详细信息的VPC对等连接的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询详细信息的VPC对等连接实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pcc-lnk0m24khwvtkm****',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '根据两端vpcid过滤，不区分发起端和接收端。如果只传入一个，则根据一端过滤',
            'description' => '根据两端vpcid过滤，不区分发起端和接收端。如果只传入一个，则根据一端过滤',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要查询详细信息的VPC对等连接的发起端或者接收端VPC的实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vpc-bp1gsk7h12ew7oegk****',
            ),
            'required' => false,
            'maxItems' => 2,
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询详细信息的VPC对等连接的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpcpeer',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持输入20个标签键。一旦传入该值，则不允许为空字符串。

一个标签键最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持输入20个标签值。一旦传入该值，可以为空字符串。

一个标签值最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<ListVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED39DCAC0',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'VpcPeerConnects' => 
              array (
                'description' => '查询的VPC对等连接的详细信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询的VPC对等连接的详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => 'VPC对等连接的实例ID。',
                      'type' => 'string',
                      'example' => 'pcc-lnk0m24khwvtkm****',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => 'VPC对等连接的创建时间。使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2022-04-24T09:02:36Z',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => 'VPC对等连接的修改时间。使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2022-04-24T19:20:45Z',
                    ),
                    'Name' => 
                    array (
                      'description' => 'VPC对等连接的名称。',
                      'type' => 'string',
                      'example' => 'vpcpeer',
                    ),
                    'Description' => 
                    array (
                      'description' => 'VPC对等连接的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => 'VPC对等连接发起端的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '25346073170691****',
                    ),
                    'AcceptingOwnerUid' => 
                    array (
                      'description' => 'VPC对等连接接收端的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '25346073170691****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => 'VPC对等连接发起端的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'AcceptingRegionId' => 
                    array (
                      'description' => 'VPC对等连接接收端的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => 'VPC对等连接的带宽，单位：Mbps，取值范围为大于0的整数。

> 例外取值-1，表示无带宽限制。

默认值如下：
- 跨地域VPC对等连接的带宽默认值为1024 Mbps。
- 同地域VPC对等连接的带宽默认值为-1 Mbps，即不限制带宽。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1024',
                    ),
                    'Status' => 
                    array (
                      'description' => 'VPC对等连接的状态。取值：

- **Creating**：创建中。
- **Accepting**：接收中。
- **Updating**：更新中。
- **Rejected**：已拒绝。
- **Expired**：已过期。
- **Activated**：已激活。
- **Deleting**：删除中。
- **Deleted**：已删除。

关于VPC对等连接状态的更多信息，请参见[VPC对等连接概述](~~418507~~)。',
                      'type' => 'string',
                      'example' => 'Activated',
                    ),
                    'BizStatus' => 
                    array (
                      'description' => 'VPC对等连接的商业状态。取值：

- **Normal**：正常。
- **FinancialLocked**：欠费锁定。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'GmtExpired' => 
                    array (
                      'description' => 'VPC对等连接的过期时间。使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。

只有当VPC对等连接的**Status**（状态）为**Accepting**（接收中）或**Expired**（已过期）时，才会返回具体的过期时间；VPC对等连接处于其余状态时，返回值为**null**。',
                      'type' => 'string',
                      'example' => '2022-05-01T09:02:36Z',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmxazb4ph6aiy****',
                    ),
                    'Vpc' => 
                    array (
                      'description' => '发起端VPC实例详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '发起端VPC实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp1gsk7h12ew7oegk****',
                        ),
                        'Ipv4Cidrs' => 
                        array (
                          'description' => '发起端网段信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '发起端网段信息。',
                            'type' => 'string',
                            'example' => '192.168.0.0/16',
                          ),
                        ),
                        'Ipv6Cidrs' => 
                        array (
                          'description' => '发起端IPv6网段信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '发起端IPv6网段信息。',
                            'type' => 'string',
                            'example' => '2408:XXXX:3c5:6e00::/56',
                          ),
                        ),
                      ),
                    ),
                    'AcceptingVpc' => 
                    array (
                      'description' => '接收端VPC实例详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '接收端VPC实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp1vzjkp2q1xgnind****',
                        ),
                        'Ipv4Cidrs' => 
                        array (
                          'description' => '接收端网段信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '接收端网段信息。',
                            'type' => 'string',
                            'example' => '10.0.0.0/16',
                          ),
                        ),
                        'Ipv6Cidrs' => 
                        array (
                          'description' => '接收端IPv6网段信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '接收端IPv6网段信息。',
                            'type' => 'string',
                            'example' => '2408:XXXX:3b8:3a00::/56',
                          ),
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'FinanceDept',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'FinanceJoshua',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED39DCAC0\\",\\n  \\"TotalCount\\": 1,\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"VpcPeerConnects\\": [\\n    {\\n      \\"InstanceId\\": \\"pcc-lnk0m24khwvtkm****\\",\\n      \\"GmtCreate\\": \\"2022-04-24T09:02:36Z\\",\\n      \\"GmtModified\\": \\"2022-04-24T19:20:45Z\\",\\n      \\"Name\\": \\"vpcpeer\\",\\n      \\"Description\\": \\"test\\",\\n      \\"OwnerId\\": 0,\\n      \\"AcceptingOwnerUid\\": 0,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"AcceptingRegionId\\": \\"cn-hangzhou\\",\\n      \\"Bandwidth\\": 1024,\\n      \\"Status\\": \\"Activated\\",\\n      \\"BizStatus\\": \\"Normal\\",\\n      \\"GmtExpired\\": \\"2022-05-01T09:02:36Z\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxazb4ph6aiy****\\",\\n      \\"Vpc\\": {\\n        \\"VpcId\\": \\"vpc-bp1gsk7h12ew7oegk****\\",\\n        \\"Ipv4Cidrs\\": [\\n          \\"192.168.0.0/16\\"\\n        ],\\n        \\"Ipv6Cidrs\\": [\\n          \\"2408:XXXX:3c5:6e00::/56\\"\\n        ]\\n      },\\n      \\"AcceptingVpc\\": {\\n        \\"VpcId\\": \\"vpc-bp1vzjkp2q1xgnind****\\",\\n        \\"Ipv4Cidrs\\": [\\n          \\"10.0.0.0/16\\"\\n        ],\\n        \\"Ipv6Cidrs\\": [\\n          \\"2408:XXXX:3b8:3a00::/56\\"\\n        ]\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListVpcPeerConnectionsResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED39DCAC0</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <MaxResults>20</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <VpcPeerConnects>\\n        <InstanceId>pcc-lnk0m24khwvtkm****</InstanceId>\\n        <GmtCreate>2022-04-24T09:02:36Z</GmtCreate>\\n        <GmtModified>2022-04-24T19:20:45Z</GmtModified>\\n        <Name>vpcpeer</Name>\\n        <Description>test</Description>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <AcceptingRegionId>cn-hangzhou</AcceptingRegionId>\\n        <Bandwidth>1024</Bandwidth>\\n        <Status>Activated</Status>\\n        <BizStatus>Normal</BizStatus>\\n        <GmtExpired>2022-05-01T09:02:36Z</GmtExpired>\\n        <ResourceGroupId>rg-acfmxazb4ph6aiy****</ResourceGroupId>\\n        <Vpc>\\n            <VpcId>vpc-bp1gsk7h12ew7oegk****</VpcId>\\n            <Ipv4Cidrs>192.168.0.0/16</Ipv4Cidrs>\\n            <Ipv6Cidrs>2408:XXXX:3c5:6e00::/56</Ipv6Cidrs>\\n        </Vpc>\\n        <AcceptingVpc>\\n            <VpcId>vpc-bp1vzjkp2q1xgnind****</VpcId>\\n            <Ipv4Cidrs>10.0.0.0/16</Ipv4Cidrs>\\n            <Ipv6Cidrs>2408:XXXX:3b8:3a00::/56</Ipv6Cidrs>\\n        </AcceptingVpc>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n    </VpcPeerConnects>\\n</ListVpcPeerConnectionsResponse>","errorExample":""}]',
      'title' => '查询VPC对等连接列表',
    ),
    'ModifyVpcPeerConnection' => 
    array (
      'summary' => '调用ModifyVpcPeerConnection接口修改VPC对等连接实例的名称或者描述信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要修改名称或者描述信息的VPC对等连接实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcc-lnk0m24khwvtkm****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要修改的VPC对等连接的名称，即修改后的名称。

名称长度为1～128个字符，不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpcpeername',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要修改的VPC对等连接的描述信息，即修改后的描述信息。

描述长度为1～256个字符，不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'newdescription',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要修改的VPC对等连接的带宽，单位：Mbps，取值范围为大于0的整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<ModifyVpcPeerResponse>',
            'description' => 'RpcResponse<ModifyVpcPeerResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '880C99E1-449B-524A-B81F-1EC53D2A7EAC',
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
            'errorCode' => 'ResourceNotFound.InstanceId',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcPeer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcPeer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationFailed.BandwidthCannotBeChangedInSameRegion',
            'errorMessage' => 'The operation failed because the bandwidth cannot be changed in the same region.',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.Bandwidth',
            'errorMessage' => 'The quota of bandwidth is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"880C99E1-449B-524A-B81F-1EC53D2A7EAC\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcPeerConnectionResponse>\\n    <RequestId>880C99E1-449B-524A-B81F-1EC53D2A7EAC</RequestId>\\n</ModifyVpcPeerConnectionResponse>","errorExample":""}]',
      'title' => '修改VPC对等连接',
      'description' => '- **ModifyVpcPeerConnection**接口属于异步接口，即系统会先返回一个**RequestId**，但该VPC对等连接实例并未修改完成，系统后台的修改任务仍在进行。您可以调用[GetVpcPeerConnectionAttribute](~~426100~~)查询VPC对等连接实例的状态。
    - 当VPC对等连接实例处于**Updating**状态时，表示正在修改中。
    - 当VPC对等连接实例处于**Activated**状态时，表示修改完成。

- **ModifyVpcPeerConnection**接口不支持并发修改同一个VPC对等连接实例的名称和描述信息。',
    ),
    'MoveResourceGroup' => 
    array (
      'summary' => '调用MoveResourceGroup接口修改对等连接所属的资源组。',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改资源组的对等连接的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcc-gu32s92f9ytsk9****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：**PeerConnection**，VPC对等连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'PeerConnection',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要移入对等连接实例的资源组ID。

> 资源组是在阿里云账号下进行资源分组管理的一种机制，资源组能够帮助您解决单个云账号内的资源分组和授权管理等复杂性问题。更多信息，请参见[什么是资源管理](~~94475~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-acfm3peow3k****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
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
            'title' => 'RpcResponse<CreateVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F',
              ),
              'Success' => 
              array (
                'description' => '是否修改成功。取值：

- **true**：修改成功。
- **false**：修改失败。',
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
            'errorCode' => 'OperationFailed.NotExist.ResourceGroup',
            'errorMessage' => 'The operation failed because the resource group not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcPeer',
            'errorMessage' => 'The specified resource of VpcPeer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<MoveResourceGroupResponse>\\n    <RequestId>611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F</RequestId>\\n    <Success>true</Success>\\n</MoveResourceGroupResponse>","errorExample":""}]',
      'title' => '迁移VPC对等连接资源组',
    ),
    'RejectVpcPeerConnection' => 
    array (
      'summary' => '调用RejectVpcPeerConnection接口拒绝VPC对等连接实例的请求。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接收端拒绝的VPC对等连接实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcc-lnk0m24khwvtkm0****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会拒绝连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<RejectVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD2E-403F3EE64CAF',
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
            'errorCode' => 'ResourceNotFound.InstanceId',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcPeer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD2E-403F3EE64CAF\\"\\n}","errorExample":""},{"type":"xml","example":"<RejectVpcPeerConnectionResponse>\\n    <RequestId>4EC47282-1B74-4534-BD2E-403F3EE64CAF</RequestId>\\n</RejectVpcPeerConnectionResponse>","errorExample":""}]',
      'title' => '拒绝VPC对等连接',
      'description' => '- 对于跨账号的VPC对等连接实例，接收端可以拒绝连接请求。拒绝连接请求的VPC对等连接实例变为**已拒绝**状态。

- **RejectVpcPeerConnection**不支持对同一个对等连接实例并发发起拒绝连接请求。',
    ),
    'TagResources' => 
    array (
      'summary' => '调用TagResources接口为指定的VPC对等连接统一创建并绑定标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID，最多支持输入20个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，最多支持输入20个资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'pcc-bp16qjewdsunr41m1****',
            ),
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。至少输入1个标签键，最多支持输入20个标签键。一旦传入该值，则不允许为空字符串。

最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。至少输入1个标签值，最多支持输入20个标签值。一旦传入该值，可以为空字符串。

最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：**PeerConnection**，表示VPC对等连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'PeerConnection',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要创建并绑定标签的资源所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。

',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'title' => 'RpcResponse<CreateVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
              ),
              'Success' => 
              array (
                'description' => '是否创建并绑定成功。取值：

- **true**：创建并绑定成功。
- **false**：创建并绑定失败。',
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
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of tags is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of resource IDs is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.TagKeys',
            'errorMessage' => 'The tag key cannot be operated by the request.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.TagKey.Duplicated',
            'errorMessage' => 'The specified tag key already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidInstanceIds.NotFound',
            'errorMessage' => 'The instance IDs are not found.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceType.NotFound',
            'errorMessage' => 'The instance type is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n    <Success>true</Success>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为指定的VPC对等连接统一创建并绑定标签',
      'description' => '标签是您为实例分配的标记，每个标签都由一对键值对（Key-Value）组成。标签的使用说明如下： 
- 一个实例上的每条标签的标签键（Key）必须唯一。
- 不支持未绑定实例的空标签存在，标签必须绑定在实例上。
- 不同地域下的标签信息不互通。 

    例如在华东1（杭州）地域创建的标签在华东2（上海）地域不可见。

- 同账号同地域下，不同VPC对等连接的实例标签信息互通。 

       例如在同账号同地域下，VPC对等连接实例绑定了某个标签，那么您可以在其他VPC对等连接实例的编辑标签页面，直接选择将该标签绑定到实例上，而无需手动输入标签的键值信息。您可以修改标签的键和值，也可以随时删除实例的标签。如果删除实例，绑定实例的所有标签也会被删除。

- 单个实例最多可绑定20条标签。绑定标签前，阿里云会校验资源已有标签数量。超过限制值后返回报错信息。',
    ),
    'UnTagResources' => 
    array (
      'summary' => '调用UnTagResources接口为指定的VPC对等连接统一解绑标签。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。最多支持解绑20个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持解绑20个资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'pcc-bp16qjewdsunr41m1****',
            ),
            'deprecated' => false,
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要解绑的标签键。最多支持输入20个标签键。如需传入该值，可以输入空字符串。


最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要解绑的标签键。最多支持输入20个标签键。如需传入该值，可以输入空字符串。


最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。
',
              'type' => 'string',
              'required' => false,
              'example' => 'FinanceDept',
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑资源的所有标签。取值：
- **true**：解除资源的所有标签。
- **false**（默认值）：不解除资源的所有标签。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：**PeerConnection**，VPC对等连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'PeerConnection',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
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
            'title' => 'RpcResponse<CreateVpcPeerResponse>',
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
              ),
              'Success' => 
              array (
                'description' => '是否解绑成功。取值：

- **true**：创建并绑定成功。
- **false**：创建并绑定失败。',
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
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of tags is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of resource IDs is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.TagKeys',
            'errorMessage' => 'The tag key cannot be operated by the request.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.TagKey.Duplicated',
            'errorMessage' => 'The specified tag key already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidInstanceIds.NotFound',
            'errorMessage' => 'The instance IDs are not found.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceType.NotFound',
            'errorMessage' => 'The instance type is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnTagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n    <Success>true</Success>\\n</UnTagResourcesResponse>","errorExample":""}]',
      'title' => '为指定的VPC对等连接统一解绑标签',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'vpcpeer.aliyuncs.com',
    ),
  ),
);
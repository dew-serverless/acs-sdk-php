<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Linkcard',
    'version' => '2021-05-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 124178,
      'title' => '卡',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Renew',
        1 => 'StopSingleCard',
        2 => 'ResumeSingleCard',
        3 => 'RebindResumeSingleCard',
        4 => 'ForceActivation',
        5 => 'SetCardStopRule',
        6 => 'UpdateAutoRechargeSwitch',
        7 => 'GetCredentialPoolStatistics',
        8 => 'GetCardFlowInfo',
        9 => 'GetCardDetail',
        10 => 'ListCardInfo',
        11 => 'ListOrder',
      ),
    ),
    1 => 
    array (
      'id' => 170671,
      'title' => '定向服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddDirectionalCard',
        1 => 'AddDirectionalGroup',
        2 => 'BatchAddDirectionalAddress',
        3 => 'ListDirectionalAddress',
        4 => 'ListDirectionalDetail',
        5 => 'VerifyIotCard',
      ),
    ),
    2 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddTagsToCard',
        1 => 'GetSimCardStateDistribution',
        2 => 'AddDirectionalAddress',
        3 => 'DeleteDirectionalAddress',
        4 => 'DeleteDirectionalGroup',
        5 => 'GetCardStatusStatistics',
        6 => 'GetCardRealStatus',
        7 => 'GetCardLatestFlow',
        8 => 'AddCardToDirectionalGroup',
        9 => 'GetRealNameStatus',
        10 => 'SendMessage',
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
    'Renew' => 
    array (
      'summary' => '卡的套餐续订和叠加包订购，仅适用于单卡套餐和同档位池套餐（统付池套餐请通过控制台进行扩池和购功能费）。',
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
          'name' => 'ApiProduct',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接口Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'linkcard',
          ),
        ),
        1 => 
        array (
          'name' => 'ApiRevision',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接口版本。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-05-20',
          ),
        ),
        2 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面，查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        3 => 
        array (
          'name' => 'RechargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '充值类型。

- STANDARD：续订套餐。

- OVERLAY ：订购叠加包。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'STANDARD',
          ),
        ),
        4 => 
        array (
          'name' => 'SerialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义的订单编号，编号需唯一且保持幂等性。

如果您的充值，涉及自有平台的订单管理，如给下游客户充值等，您可填入自有平台已生成的外部订单编号，该接口调用成功后，会生成一个订单编号（OrderNo）。该参数可以方便您将生成的订单编号与外部订单号关联起来。如果非此场景，你可填入任意正整数，例如0。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12345678',
          ),
        ),
        5 => 
        array (
          'name' => 'OfferCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '充值类型为订购叠加包时需填写。

具体Code请咨询技术对接人员。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'COM***0203',
          ),
        ),
        6 => 
        array (
          'name' => 'BuyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订购份数。根据物联网卡本身的套餐类型选择订购份数。
- 续订月套餐：支持1、2、3、6、9、12。

- 续订年套餐：支持1、2、3。

- 订购叠加包：支持1、2、3。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '12',
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
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
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
                'description' => '返回的订单编号数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'OrderNo' => 
                  array (
                    'description' => '接口调用成功后生成的订单编号。',
                    'type' => 'string',
                    'example' => '21450******0275',
                  ),
                  'SerialNo' => 
                  array (
                    'description' => '自定义的订单编号（SerialNo）。',
                    'type' => 'string',
                    'example' => '12345678',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"OrderNo\\": \\"21450******0275\\",\\n    \\"SerialNo\\": \\"12345678\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RenewResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Data>\\n        <OrderNo>21450******0275</OrderNo>\\n        <SerialNo>12345678</SerialNo>\\n    </Data>\\n</RenewResponse>","errorExample":""}]',
      'title' => '充值',
      'description' => '## 使用限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
    ),
    'StopSingleCard' => 
    array (
      'summary' => '将状态为“使用中”的单卡进行自主停用。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面，查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'OptMsisdns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '是否对子卡进行操作，填入子卡的MSISDN。

- 普通单网卡无需传入此参数。
- 虚拟运营商：
    - 如果传入该参数，则对指定的子卡进行操作。
    - 如果不传入该参数，则对所有子卡进行操作。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子卡的MSISDN。',
              'type' => 'string',
              'required' => false,
              'example' => '141******1111',
            ),
            'required' => false,
            'example' => '["1112******826","1112******827"] ',
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
              'Data' => 
              array (
                'description' => '执行结果。

- **true**：执行成功。

- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。
',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.	',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
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
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\\\t\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<StopSingleCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</StopSingleCardResponse>","errorExample":""}]',
      'title' => '卡的主动停用',
      'description' => '## 限制说明


单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResumeSingleCard' => 
    array (
      'summary' => '将状态为“主动停用”、“大量停用”的单卡操作为“复用”。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'OptMsisdns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '是否对子卡进行操作，填入子卡的MSISDN。

- 普通单网卡无需传入此参数。
- 虚拟运营商：
    - 如果传入该参数，则对指定的子卡进行操作。
    - 如果不传入该参数，则对所有子卡进行操作。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子卡的MSISDN。',
              'type' => 'string',
              'required' => false,
              'example' => '141******1111',
            ),
            'required' => false,
            'example' => '["111******6826","11*******6827"]',
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
              'Data' => 
              array (
                'description' => '执行结果。

- **true**：执行成功。

- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.	',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
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
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\\\t\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<ResumeSingleCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</ResumeSingleCardResponse>","errorExample":""}]',
      'title' => '卡的主动复用',
      'description' => '## 限制说明


单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RebindResumeSingleCard' => 
    array (
      'summary' => '将状态为“换绑停用”的单卡操作为“换绑复用”。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'OptMsisdns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '是否对子卡进行操作，填入子卡的MSISDN。

- 普通单网卡无需传入此参数。
- 虚拟运营商：
    - 如果传入该参数，则对指定的子卡进行操作。
    - 如果不传入该参数，则对所有子卡进行操作。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子卡的MSISDN。',
              'type' => 'string',
              'required' => false,
              'example' => '141******1111',
            ),
            'required' => false,
            'example' => ' ["1112******826","1112******827"] ',
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
              'Data' => 
              array (
                'description' => '执行结果。

- **true**：执行成功。

- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。
',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'Iccid cannot be empty.	',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
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
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"Iccid cannot be empty.\\\\t\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<RebindResumeSingleCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</RebindResumeSingleCardResponse>","errorExample":""}]',
      'title' => '卡的换绑复用',
      'description' => '## 使用说明


物联网卡与设备是一一对应关系，在物联网卡首次插入设备通电使用产生流量时，就与设备进行了绑定。如果将卡更换至其他设备中使用，将导致卡被锁定，用户可以使用此接口进行解卡。

',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ForceActivation' => 
    array (
      'summary' => '同档位套餐的卡强制激活，实现共享流量扩池。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'DateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐类型。

- **sameflowcard**：同档位通用流量套餐。

- **directional_sameflowcard**：同档位定向流量套餐。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'sameflowcard',
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
              'Data' => 
              array (
                'description' => '执行结果。

- **true**：执行成功。

- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
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
            'errorCode' => 'linkcard.check.ForceActivationSameFlowCard',
            'errorMessage' => 'Only cards in the same flow support forced activation.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.check.OnlyUnusedCanForceActivation',
            'errorMessage' => 'Only unused cards support forced activation.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<ForceActivationResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</ForceActivationResponse>","errorExample":""}]',
      'title' => '卡的强制激活',
      'description' => '## 使用限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
    ),
    'SetCardStopRule' => 
    array (
      'summary' => '设置卡的达量停用规则，仅支持同档位池套餐和统付池套餐。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'FlowLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '达量停用的数值，仅支持正整数，单位：MB。

当月流量达到此数值时将自动停用，可主动复用。


',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoRestore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '达量停用后，次月是否自动复用。

- true（默认值）：次月自动复用。

- false：次月不自动复用。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'Data' => 
              array (
                'description' => '执行结果。

- **true**：执行成功。

- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
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
            'errorCode' => 'linkcard.check.RuleMaxValueLimit',
            'errorMessage' => 'The maximum value of Rule must be less than 9007199254740991.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.check.RuleMustBePositiveInteger',
            'errorMessage' => 'The valid values of Rule are positive integers and zero.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<SetCardStopRuleResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</SetCardStopRuleResponse>","errorExample":""}]',
      'title' => '设置卡的达量停用规则',
      'description' => '## 使用限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
    ),
    'UpdateAutoRechargeSwitch' => 
    array (
      'summary' => '该接口用于开启或关闭卡的自动续费功能，仅适用于单卡套餐和同档位池套餐。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'Open',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费开关。

- **true**：开启自动续费。

- **false**：关闭自动续费。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'Data' => 
              array (
                'description' => '执行结果。

- **true**：执行成功。

- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
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
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAutoRechargeSwitchResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</UpdateAutoRechargeSwitchResponse>","errorExample":""}]',
      'title' => 'UpdateAutoRechargeSwitch',
      'description' => '## 使用限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
    ),
    'GetCredentialPoolStatistics' => 
    array (
      'summary' => '查询套餐凭证对应的池信息。',
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
          'name' => 'Date',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的套餐流量使用详情的月份。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '202108',
          ),
        ),
        1 => 
        array (
          'name' => 'CredentialNO',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐凭证。获取方法如下：

- 在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的**套餐凭证**页面，查看套餐凭证。

- 调用接口[GetCardDetail](~~374328~~)，在返回参数中查看套餐凭证（CredentialNo）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CM-SF-M-2-12G',
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
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- true：调用成功。

- false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '套餐流量使用详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PoolUsed' => 
                  array (
                    'description' => '当月已用流量。',
                    'type' => 'string',
                    'example' => '0KB',
                  ),
                  'CredentialNO' => 
                  array (
                    'description' => '套餐凭证。',
                    'type' => 'string',
                    'example' => 'CM-SF-M-2-12G',
                  ),
                  'PoolOutUsed' => 
                  array (
                    'description' => '当月套餐外流量。',
                    'type' => 'string',
                    'example' => '0KB',
                  ),
                  'PoolGrandTotalUsed' => 
                  array (
                    'description' => '套餐流量使用总量，仅统付池套餐显示该参数。',
                    'type' => 'string',
                    'example' => '6.00GB',
                  ),
                  'CredentialType' => 
                  array (
                    'description' => '套餐凭证类型。

- 单卡套餐示例：CT-SC-M-1-30M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。

- 同档位池套餐示例：CM-SF-M-3-100M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。

- 统付池套餐示例：CU-UPG-M-2-池编号（运营商-套餐类型-套餐周期-资费版本-池编号）。',
                    'type' => 'string',
                    'example' => 'CT-SC-M-1-30M',
                  ),
                  'CardTotalNum' => 
                  array (
                    'description' => '套餐内总卡数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'PoolGrandTotal' => 
                  array (
                    'description' => '套餐总流量，仅统付池套餐显示该参数。',
                    'type' => 'string',
                    'example' => '12.00GB',
                  ),
                  'CardActiveNum' => 
                  array (
                    'description' => '套餐内的生效卡数（已激活且未停机未销户）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'EffectiveTotalFlow' => 
                  array (
                    'description' => '套餐总流量，仅同档位池套餐显示该参数。',
                    'type' => 'string',
                    'example' => '12.00GB',
                  ),
                  'EffectiveAvailableFlow' => 
                  array (
                    'description' => '套餐内可用余量，仅同档位池套餐显示该参数。',
                    'type' => 'string',
                    'example' => '6.00GB',
                  ),
                  'PoolAvaiable' => 
                  array (
                    'description' => '套餐内可用余量，仅统付池套餐显示该参数。',
                    'type' => 'string',
                    'example' => '6.00GB',
                  ),
                  'MonthFeatureFee' => 
                  array (
                    'description' => '月功能费份数，仅统付池套餐显示该参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'CredentialInstanceId' => 
                  array (
                    'description' => '凭证实例ID。',
                    'type' => 'string',
                    'example' => '259****',
                  ),
                  'SmsUsed' => 
                  array (
                    'description' => '短信用量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'MonthUsedAmount' => 
                  array (
                    'description' => '月度流量使用总量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3.00GB',
                  ),
                  'MonthExceedFee' => 
                  array (
                    'description' => '当月功能费超套份数。

大于0代表功能费已超套；等于0或null代表未超套。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
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
            'errorCode' => 'linkcard.check.TimeFormatError',
            'errorMessage' => 'Time format error.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.BusinessProcessError',
            'errorMessage' => 'A business processing exception occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PoolUsed\\": \\"0KB\\",\\n    \\"CredentialNO\\": \\"CM-SF-M-2-12G\\",\\n    \\"PoolOutUsed\\": \\"0KB\\",\\n    \\"PoolGrandTotalUsed\\": \\"6.00GB\\",\\n    \\"CredentialType\\": \\"CT-SC-M-1-30M\\",\\n    \\"CardTotalNum\\": 20,\\n    \\"PoolGrandTotal\\": \\"12.00GB\\",\\n    \\"CardActiveNum\\": 10,\\n    \\"EffectiveTotalFlow\\": \\"12.00GB\\",\\n    \\"EffectiveAvailableFlow\\": \\"6.00GB\\",\\n    \\"PoolAvaiable\\": \\"6.00GB\\",\\n    \\"MonthFeatureFee\\": 100,\\n    \\"CredentialInstanceId\\": \\"259****\\",\\n    \\"SmsUsed\\": 0,\\n    \\"MonthUsedAmount\\": 0,\\n    \\"MonthExceedFee\\": 200\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCredentialPoolStatisticsResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <PoolUsed>0KB</PoolUsed>\\n        <CredentialNO>CM-SF-M-2-12G</CredentialNO>\\n        <PoolOutUsed>0KB</PoolOutUsed>\\n        <PoolGrandTotalUsed>6.00GB</PoolGrandTotalUsed>\\n        <CredentialType>CM-SF-M-2-12G</CredentialType>\\n        <CardTotalNum>20</CardTotalNum>\\n        <PoolGrandTotal>12.00GB</PoolGrandTotal>\\n        <CardActiveNum>10</CardActiveNum>\\n        <EffectiveTotalFlow>12.00GB</EffectiveTotalFlow>\\n        <EffectiveAvailableFlow>6.00GB</EffectiveAvailableFlow>\\n        <PoolAvaiable>6.00GB</PoolAvaiable>\\n        <MonthFeatureFee>100</MonthFeatureFee>\\n        <CredentialInstanceId>259****</CredentialInstanceId>\\n        <SmsUsed>0</SmsUsed>\\n    </Data>\\n</GetCredentialPoolStatisticsResponse>","errorExample":""}]',
      'title' => '套餐凭证信息查询',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetCardFlowInfo' => 
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'DateList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要查询的月份。

最多可以查询6个月，如果为空则获取最近两个月的数据。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要查询的月份。

最多可以查询6个月，如果为空则获取最近两个月的数据。',
              'type' => 'string',
              'required' => false,
              'example' => '["202110","202111"]',
            ),
            'required' => false,
            'example' => '["202110","202111"]',
            'maxItems' => 5,
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
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '物联网卡的流量信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ListVendorDetail' => 
                  array (
                    'description' => '网络数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NetWorkDelay' => 
                        array (
                          'description' => '网络延迟，单位ms。',
                          'type' => 'string',
                          'example' => '20',
                        ),
                        'SignalStrength' => 
                        array (
                          'description' => '信号强度。',
                          'type' => 'string',
                          'example' => '20',
                        ),
                        'Vendor' => 
                        array (
                          'description' => '物联网卡的运营商。
- CMCC：移动。
- CUCC：联通。
- CTCC：电信。
',
                          'type' => 'string',
                          'example' => 'CMCC',
                        ),
                        'UsedFlow' => 
                        array (
                          'description' => '已用流量。',
                          'type' => 'string',
                          'example' => '100MB',
                        ),
                        'Ratio' => 
                        array (
                          'description' => '用量占比。',
                          'type' => 'string',
                          'example' => '80%',
                        ),
                      ),
                    ),
                  ),
                  'ListCardMonthFlow' => 
                  array (
                    'description' => '月用量详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FlowCount' => 
                        array (
                          'description' => '月总流量统计。',
                          'type' => 'string',
                          'example' => '200MB',
                        ),
                        'Month' => 
                        array (
                          'description' => '流量月份。',
                          'type' => 'string',
                          'example' => '202112',
                        ),
                        'ListDayFlow' => 
                        array (
                          'description' => '每日用量。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Flow' => 
                              array (
                                'description' => '日用量。',
                                'type' => 'string',
                                'example' => '100MB',
                              ),
                              'Day' => 
                              array (
                                'description' => '流量日期。',
                                'type' => 'string',
                                'example' => '20211201',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ListPackageDTO' => 
                  array (
                    'description' => '套餐包信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EffectiveTime' => 
                        array (
                          'description' => '套餐生效时间。',
                          'type' => 'string',
                          'example' => '2022-03-20 23:59:59',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '备注内容',
                        ),
                        'PackageName' => 
                        array (
                          'description' => '套餐名称。',
                          'type' => 'string',
                          'example' => '移动-单卡通用流量-月包-30M',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '套餐到期时间。',
                          'type' => 'string',
                          'example' => '2022-04-30 23:59:59',
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
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.CardNotExist',
            'errorMessage' => 'The card does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'CardDisabled',
            'errorMessage' => 'The SIM card has been permanently disabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"ListVendorDetail\\": [\\n      {\\n        \\"NetWorkDelay\\": \\"20\\",\\n        \\"SignalStrength\\": \\"20\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"UsedFlow\\": \\"100MB\\",\\n        \\"Ratio\\": \\"80%\\"\\n      }\\n    ],\\n    \\"ListCardMonthFlow\\": [\\n      {\\n        \\"FlowCount\\": \\"200MB\\",\\n        \\"Month\\": \\"202112\\",\\n        \\"ListDayFlow\\": [\\n          {\\n            \\"Flow\\": \\"100MB\\",\\n            \\"Day\\": \\"20211201\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"ListPackageDTO\\": [\\n      {\\n        \\"EffectiveTime\\": \\"2022-03-20 23:59:59\\",\\n        \\"Remark\\": \\"备注内容\\",\\n        \\"PackageName\\": \\"移动-单卡通用流量-月包-30M\\",\\n        \\"ExpireTime\\": \\"2022-04-30 23:59:59\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCardFlowInfoResponse>\\n    <Code>200</Code>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <ListVendorDetail>\\n            <NetWorkDelay>20</NetWorkDelay>\\n            <SignalStrength>20</SignalStrength>\\n            <Vendor>CMCC</Vendor>\\n        </ListVendorDetail>\\n        <ListCardMonthFlow>\\n            <FlowCount>200MB</FlowCount>\\n            <Month>202112</Month>\\n            <ListDayFlow>\\n                <Flow>100MB</Flow>\\n                <Day>20211201</Day>\\n            </ListDayFlow>\\n        </ListCardMonthFlow>\\n        <ListPackageDTO>\\n            <EffectiveTime>2022-03-20 23:59:59</EffectiveTime>\\n            <Remark>备注内容</Remark>\\n            <PackageName>移动-单卡通用流量-月包-30M</PackageName>\\n            <ExpireTime>2022-04-30 23:59:59</ExpireTime>\\n        </ListPackageDTO>\\n    </Data>\\n</GetCardFlowInfoResponse>","errorExample":""}]',
      'title' => '卡流量查询',
      'summary' => '查询卡的流量信息。',
      'description' => '## 限制说明


单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetCardDetail' => 
    array (
      'summary' => '查询卡的详情信息。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的**卡管理页面**查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'ShowPsim',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否展示子卡的详情信息，默认为否。

- **true**：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的实例ID。

只有查询的物联网卡已销户时（即**DestroyCard**为**true**）需要填入该参数。

您可以调用接口[ListCardInfo](~~425529~~)在返回参数中查看物联网卡的实例ID（VsimInstanceId）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '411****',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyCard',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的物联网卡是否已销户，默认为否。

- **true**：是。
- **false**：否。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '物联网卡的详情信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ListPsimCards' => 
                  array (
                    'description' => '多网卡的子卡详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '多网卡的子卡详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '物联网卡的状态。

- **10**：可测试。

- **20**：未使用。

- **30**：使用中。

- **35**：已停用。

- **40**：已停机。

- **50**：已销户。',
                          'type' => 'string',
                          'example' => '35',
                        ),
                        'PrivateNetworkSegment' => 
                        array (
                          'description' => '私网网段（定向卡）。',
                          'type' => 'string',
                          'example' => '*.2.*.4',
                        ),
                        'OsStatus' => 
                        array (
                          'description' => '物联网卡的具体状态。

- **10**：测试期。
- **20**：静默期。
- **100**：使用中。
- **130**：测试期换绑停用。
- **150**：部分使用中。
- **200**：主动停用。
- **300**：达量停用。
- **400**：信控停用。
- **500**：换绑停用。
- **600**：实名停用。
- **700**：异常停用。
- **40**：已停机。
- **50**：已销户。',
                          'type' => 'string',
                          'example' => '300',
                        ),
                        'CertifyStatus' => 
                        array (
                          'description' => '实名认证状态。

- **1**：未认证。

- **2**：已认证。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'ApnName' => 
                        array (
                          'description' => 'APN名称。',
                          'type' => 'string',
                          'example' => 'cmiot',
                        ),
                        'PeriodAddFlow' => 
                        array (
                          'description' => '周期累计流量。',
                          'type' => 'string',
                          'example' => '130.00MB',
                        ),
                        'Iccid' => 
                        array (
                          'description' => '子卡的ICCID。',
                          'type' => 'string',
                          'example' => '89860321******15668',
                        ),
                        'Vendor' => 
                        array (
                          'description' => '运营商。

- **CMCC**：移动。

- **CUCC**：联通。

- **CTCC**：电信。',
                          'type' => 'string',
                          'example' => 'CMCC',
                        ),
                        'PeriodSmsUse' => 
                        array (
                          'description' => '周期短信用量。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'Imsi' => 
                        array (
                          'description' => '子卡的IMSI。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子卡的IMSI。',
                            'type' => 'string',
                            'example' => '460081937******',
                          ),
                        ),
                        'Msisdn' => 
                        array (
                          'description' => '子卡的MSISDN。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子卡的MSISDN。',
                            'type' => 'string',
                            'example' => '1411111******',
                          ),
                        ),
                        'OpenSms' => 
                        array (
                          'description' => '短信功能开通情况。

 - **true**：开通。

- **false**：关闭。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Ip' => 
                        array (
                          'description' => '物联网卡的IP地址。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '物联网卡的IP地址。',
                            'type' => 'string',
                            'example' => '1.1.*.*',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'VsimCardInfo' => 
                  array (
                    'description' => '物联网卡的详情。

当查询多网卡时，展示虚拟卡信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '物联网卡状态。

- **10**：可测试。

- **20**：未使用。

- **30**：使用中。

- **35**：已停用。

- **40**：已停机。

- **50**：已销户。',
                        'type' => 'string',
                        'example' => '35',
                      ),
                      'DataType' => 
                      array (
                        'description' => '流量类型。

- **singlecard**：单卡通用流量。

- **directionalcard**：单卡定向流量。

- **sameflowcard**：同档位池共享流量。

- **directional_sameflowcard**：同档位池共享定向流量。

- **unityPayPool**：统付池通用流量。

- **GREcard**：统付池定向流量。',
                        'type' => 'string',
                        'example' => 'sameflowcard',
                      ),
                      'CardLimitSpeedThreshold' => 
                      array (
                        'description' => '物联网卡达量限速阈值，单位为KB。（暂不支持）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1024',
                      ),
                      'PeriodRestFlow' => 
                      array (
                        'description' => '周期剩余流量。',
                        'type' => 'string',
                        'example' => '130.00MB',
                      ),
                      'DirectionalGroupName' => 
                      array (
                        'description' => '定向分组名称。',
                        'type' => 'string',
                        'example' => '测试分组',
                      ),
                      'CredentialType' => 
                      array (
                        'description' => '套餐凭证类型。

- 单卡套餐示例：CT-SC-M-1-30M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。

- 同档位池套餐示例：CM-SF-M-3-100M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。

- 统付池套餐示例：CU-UPG-M-2-池编号（运营商-套餐类型-套餐周期-资费版本-池编号）。',
                        'type' => 'string',
                        'example' => 'CT-SC-M-1-30M',
                      ),
                      'PeriodAddFlow' => 
                      array (
                        'description' => '周期累计流量。',
                        'type' => 'string',
                        'example' => '0KB',
                      ),
                      'DirectionalGroupId' => 
                      array (
                        'description' => '定向分组ID。',
                        'type' => 'string',
                        'example' => '22',
                      ),
                      'PeriodSmsUse' => 
                      array (
                        'description' => '周期短信用量。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'OsStatus' => 
                      array (
                        'description' => '物联网卡的具体状态。

- **10**：测试期。

- **20**：静默期。

- **100**：使用中。

- **150**：部分使用中。

- **200**：主动停用。

- **300**：达量停用。

- **400**：信控停用。

- **500**：换绑停用。

- **600**：实名停用。

- **700**：异常停用。

- **40**：已停机。

- **50**：已销户。',
                        'type' => 'string',
                        'example' => '200',
                      ),
                      'NotifyId' => 
                      array (
                        'description' => '自动化规则的通知ID。',
                        'type' => 'string',
                        'example' => '11111',
                      ),
                      'DataLevel' => 
                      array (
                        'description' => '流量包档位。',
                        'type' => 'string',
                        'example' => '30MB',
                      ),
                      'TagList' => 
                      array (
                        'description' => '物联网卡的标签。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '标签列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TagName' => 
                            array (
                              'description' => '标签名称。',
                              'type' => 'string',
                              'example' => '测试标签',
                            ),
                            'Id' => 
                            array (
                              'description' => '标签ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '24',
                            ),
                          ),
                        ),
                        'example' => '测试标签',
                      ),
                      'AliyunOrderId' => 
                      array (
                        'description' => '物联网卡关联的订单编号。',
                        'type' => 'string',
                        'example' => '211519634******',
                      ),
                      'AliFee' => 
                      array (
                        'description' => '资费版本。',
                        'type' => 'string',
                        'example' => 'ali_2',
                      ),
                      'ActiveType' => 
                      array (
                        'description' => '激活方式。

- **first_data_record**：首话单激活。

- **carrier_status_push**：运营商状态推送激活。

- **silence_expire**：静默期结束激活。

- **manage**：手动激活。

- **test_flow_depleted**：测试流量超套激活。',
                        'type' => 'string',
                        'example' => 'first_data_record',
                      ),
                      'IsAutoRecharge' => 
                      array (
                        'description' => '套餐是否自动续费。

- **true**：是。

- **false**：否。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'AutoLimitResume' => 
                      array (
                        'description' => '达量停用后，次月是否自动复用。

- **true**：是。

- **false**：否。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'CredentialInstanceId' => 
                      array (
                        'description' => '凭证实例ID。',
                        'type' => 'string',
                        'example' => '2622***',
                      ),
                      'CredentialLimitSpeedThreshold' => 
                      array (
                        'description' => '凭证达量限速阈值，单位为KB。（暂不支持）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1024',
                      ),
                      'ExpireTime' => 
                      array (
                        'description' => '套餐到期时间。',
                        'type' => 'string',
                        'example' => '2022-04-30 23:59:59',
                      ),
                      'FlowThresholdUnit' => 
                      array (
                        'description' => '阈值流量单位。',
                        'type' => 'string',
                        'example' => 'KB',
                      ),
                      'ApnName' => 
                      array (
                        'description' => 'APN名称。',
                        'type' => 'string',
                        'example' => 'cmiot',
                      ),
                      'ActiveTime' => 
                      array (
                        'description' => '激活时间。',
                        'type' => 'string',
                        'example' => '2021-11-16 16:35:50',
                      ),
                      'CardLimitStopThreshold' => 
                      array (
                        'description' => '物联网卡达量停用阈值，单位为KB。（暂不支持）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20480',
                      ),
                      'Iccid' => 
                      array (
                        'description' => '物联网卡的ICCID。',
                        'type' => 'string',
                        'example' => '89860321******15668',
                      ),
                      'Vendor' => 
                      array (
                        'description' => '运营商。

- **CMCC**：移动。

- **CUCC**：联通。

- **CTCC**：电信。

- **VNO**：虚拟运营商。',
                        'type' => 'string',
                        'example' => 'CMCC',
                      ),
                      'Period' => 
                      array (
                        'description' => '套餐结算周期。

- **1101**：月度。

- **1103**：季度。

- **1106**：半年度。

- **1112**：年度。',
                        'type' => 'string',
                        'example' => '1101',
                      ),
                      'PrivateNetworkSegment' => 
                      array (
                        'description' => '私网网段（定向卡）。',
                        'type' => 'string',
                        'example' => '1.*.3.*',
                      ),
                      'OpenAccountTime' => 
                      array (
                        'description' => '开户时间。',
                        'type' => 'string',
                        'example' => '2021-11-29 16:12:14',
                      ),
                      'CertifyType' => 
                      array (
                        'description' => '认证方式。

enterprise：企业认证。',
                        'type' => 'string',
                        'example' => 'enterprise',
                      ),
                      'SimType' => 
                      array (
                        'description' => 'SIM卡类型。

- **nano**：插拔三切卡（消费级）。

- **micro**：插拔双切卡（消费级）。

- **normal**：插拔大卡（消费级）。

- **simplus56**：贴片卡5*6（消费级）。

- **simplus22**：贴片卡2*2（消费级）。

- **industry-normal**：插拔大卡（工业级）。

- **industry-micro**：插拔双切卡（工业级）。

- **industry-nano**：插拔三切卡（工业级）。

- **simplus**：贴片卡5*6（工业级）。

- **industry-simplus22**：贴片卡2*2（工业级）。',
                        'type' => 'string',
                        'example' => 'nano',
                      ),
                      'CertifyStatus' => 
                      array (
                        'description' => '实名认证状态。

- **1**：未认证。

- **2**：已认证。',
                        'type' => 'string',
                        'example' => '2',
                      ),
                      'DeviceImei' => 
                      array (
                        'description' => '设备的IMEI号。',
                        'type' => 'string',
                        'example' => '11111111******',
                      ),
                      'VsimInstanceId' => 
                      array (
                        'description' => '物联网卡的InstanceId值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '123456',
                      ),
                      'AutoRebindReuse' => 
                      array (
                        'description' => '自动换绑重用。

- **true**：开。

- **false**：关。',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'CredentialNo' => 
                      array (
                        'description' => '套餐凭证。',
                        'type' => 'string',
                        'example' => 'CM-***-*-2-**M',
                      ),
                      'CredentialLimitStopThreshold' => 
                      array (
                        'description' => '凭证达量停用阈值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20480',
                      ),
                      'Imsi' => 
                      array (
                        'description' => '物联网卡的IMSI。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '物联网卡的IMSI。',
                          'type' => 'string',
                          'example' => '460081937******',
                        ),
                      ),
                      'Msisdn' => 
                      array (
                        'description' => '物联网卡的MSISDN。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '物联网卡的MSISDN。',
                          'type' => 'string',
                          'example' => '1440993******',
                        ),
                      ),
                      'OpenSms' => 
                      array (
                        'description' => '短信功能开通情况。

- true：开通。

- false：关闭。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'Ip' => 
                      array (
                        'description' => '物联网卡的IP地址。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '物联网卡的IP地址。',
                          'type' => 'string',
                          'example' => '190.*.*.*',
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
            'errorCode' => 'linkcard.check.InstanceIdCanNotEmpty',
            'errorMessage' => 'InstanceId cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          4 => 
          array (
            'errorCode' => 'linkcard.common.CardNotExist',
            'errorMessage' => 'The card does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'CardDisabled',
            'errorMessage' => 'The SIM card has been permanently disabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.BusinessProcessError',
            'errorMessage' => 'A business processing exception occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"ListPsimCards\\": [\\n      {\\n        \\"Status\\": \\"35\\",\\n        \\"PrivateNetworkSegment\\": \\"*.2.*.4\\",\\n        \\"OsStatus\\": \\"300\\",\\n        \\"CertifyStatus\\": \\"2\\",\\n        \\"ApnName\\": \\"cmiot\\",\\n        \\"PeriodAddFlow\\": \\"130.00MB\\",\\n        \\"Iccid\\": \\"89860321******15668\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"PeriodSmsUse\\": \\"0\\",\\n        \\"Imsi\\": [\\n          \\"460081937******\\"\\n        ],\\n        \\"Msisdn\\": [\\n          \\"1411111******\\"\\n        ],\\n        \\"OpenSms\\": true,\\n        \\"Ip\\": [\\n          \\"1.1.*.*\\"\\n        ]\\n      }\\n    ],\\n    \\"VsimCardInfo\\": {\\n      \\"Status\\": \\"35\\",\\n      \\"DataType\\": \\"sameflowcard\\",\\n      \\"CardLimitSpeedThreshold\\": 1024,\\n      \\"PeriodRestFlow\\": \\"130.00MB\\",\\n      \\"DirectionalGroupName\\": \\"测试分组\\",\\n      \\"CredentialType\\": \\"CT-SC-M-1-30M\\",\\n      \\"PeriodAddFlow\\": \\"0KB\\",\\n      \\"DirectionalGroupId\\": \\"22\\",\\n      \\"PeriodSmsUse\\": \\"0\\",\\n      \\"OsStatus\\": \\"200\\",\\n      \\"NotifyId\\": \\"11111\\",\\n      \\"DataLevel\\": \\"30MB\\",\\n      \\"TagList\\": [\\n        {\\n          \\"TagName\\": \\"测试标签\\",\\n          \\"Id\\": 24\\n        }\\n      ],\\n      \\"AliyunOrderId\\": \\"211519634******\\",\\n      \\"AliFee\\": \\"ali_2\\",\\n      \\"ActiveType\\": \\"first_data_record\\",\\n      \\"IsAutoRecharge\\": true,\\n      \\"AutoLimitResume\\": true,\\n      \\"CredentialInstanceId\\": \\"2622***\\",\\n      \\"CredentialLimitSpeedThreshold\\": 1024,\\n      \\"ExpireTime\\": \\"2022-04-30 23:59:59\\",\\n      \\"FlowThresholdUnit\\": \\"KB\\",\\n      \\"ApnName\\": \\"cmiot\\",\\n      \\"ActiveTime\\": \\"2021-11-16 16:35:50\\",\\n      \\"CardLimitStopThreshold\\": 20480,\\n      \\"Iccid\\": \\"89860321******15668\\",\\n      \\"Vendor\\": \\"CMCC\\",\\n      \\"Period\\": \\"1101\\",\\n      \\"PrivateNetworkSegment\\": \\"1.*.3.*\\",\\n      \\"OpenAccountTime\\": \\"2021-11-29 16:12:14\\",\\n      \\"CertifyType\\": \\"enterprise\\",\\n      \\"SimType\\": \\"nano\\",\\n      \\"CertifyStatus\\": \\"2\\",\\n      \\"DeviceImei\\": \\"11111111******\\",\\n      \\"VsimInstanceId\\": 123456,\\n      \\"AutoRebindReuse\\": false,\\n      \\"CredentialNo\\": \\"CM-***-*-2-**M\\",\\n      \\"CredentialLimitStopThreshold\\": 20480,\\n      \\"Imsi\\": [\\n        \\"460081937******\\"\\n      ],\\n      \\"Msisdn\\": [\\n        \\"1440993******\\"\\n      ],\\n      \\"OpenSms\\": true,\\n      \\"Ip\\": [\\n        \\"190.*.*.*\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCardDetailResponse>\\n    <Code>200</Code>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <ListPsimCards>\\n            <Status>35</Status>\\n            <PrivateNetworkSegment>*.2.*.4</PrivateNetworkSegment>\\n            <OsStatus>300</OsStatus>\\n            <CertifyStatus>2</CertifyStatus>\\n            <ApnName>cmiot</ApnName>\\n            <PeriodAddFlow>130.00MB</PeriodAddFlow>\\n            <Iccid>89860321******15668</Iccid>\\n            <Vendor>CMCC</Vendor>\\n            <PeriodSmsUse>0</PeriodSmsUse>\\n            <Imsi>460081937******</Imsi>\\n            <Msisdn>1411111******</Msisdn>\\n            <OpenSms>true</OpenSms>\\n            <Ip>1.1.*.*</Ip>\\n        </ListPsimCards>\\n        <VsimCardInfo>\\n            <Status>35</Status>\\n            <DataType>sameflowcard</DataType>\\n            <CardLimitSpeedThreshold>1024</CardLimitSpeedThreshold>\\n            <PeriodRestFlow>130.00MB</PeriodRestFlow>\\n            <DirectionalGroupName>测试分组</DirectionalGroupName>\\n            <CredentialType>CT-SC-M-1-30M</CredentialType>\\n            <PeriodAddFlow>0KB</PeriodAddFlow>\\n            <DirectionalGroupId>22</DirectionalGroupId>\\n            <PeriodSmsUse>0</PeriodSmsUse>\\n            <OsStatus>200</OsStatus>\\n            <NotifyId>11111</NotifyId>\\n            <DataLevel>30MB</DataLevel>\\n            <TagList>\\n                <TagName>测试标签</TagName>\\n                <Id>24</Id>\\n            </TagList>\\n            <AliyunOrderId>211519634******</AliyunOrderId>\\n            <AliFee>ali_2</AliFee>\\n            <ActiveType>first_data_record</ActiveType>\\n            <IsAutoRecharge>true</IsAutoRecharge>\\n            <AutoLimitResume>true</AutoLimitResume>\\n            <CredentialInstanceId>2622***</CredentialInstanceId>\\n            <CredentialLimitSpeedThreshold>1024</CredentialLimitSpeedThreshold>\\n            <ExpireTime>2022-04-30 23:59:59</ExpireTime>\\n            <FlowThresholdUnit>KB</FlowThresholdUnit>\\n            <ApnName>cmiot</ApnName>\\n            <ActiveTime>2021-11-16 16:35:50</ActiveTime>\\n            <CardLimitStopThreshold>20480</CardLimitStopThreshold>\\n            <Iccid>89860321******15668</Iccid>\\n            <Vendor>CMCC</Vendor>\\n            <Period>1101</Period>\\n            <PrivateNetworkSegment>1.*.3.*</PrivateNetworkSegment>\\n            <OpenAccountTime>2021-11-29 16:12:14</OpenAccountTime>\\n            <CertifyType>enterprise</CertifyType>\\n            <SimType>nano</SimType>\\n            <CertifyStatus>2</CertifyStatus>\\n            <DeviceImei>11111111******</DeviceImei>\\n            <VsimInstanceId>123456</VsimInstanceId>\\n            <AutoRebindReuse>false</AutoRebindReuse>\\n            <CredentialNo>CM-***-*-2-**M</CredentialNo>\\n            <CredentialLimitStopThreshold>20480</CredentialLimitStopThreshold>\\n            <Imsi>460081937******</Imsi>\\n            <Msisdn>1440993******</Msisdn>\\n            <OpenSms>true</OpenSms>\\n            <Ip>190.*.*.*</Ip>\\n        </VsimCardInfo>\\n    </Data>\\n</GetCardDetailResponse>","errorExample":""}]',
      'title' => '卡详情查询',
      'description' => '## 限制说明


单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListCardInfo' => 
    array (
      'summary' => '查询卡列表。',
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
          'name' => 'ActiveTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的激活时间区间：结束时间。

格式为：`yyyy-MM-dd HH:mm:ss`。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25 23:59:59',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的数量，支持10、15、25、40。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的**卡管理页面**查看ICCID。',
            'type' => 'string',
            'required' => false,
            'example' => '89860321******15668',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐凭证。

',
            'type' => 'string',
            'required' => false,
            'example' => 'CM-***-*-2-**M',
          ),
        ),
        4 => 
        array (
          'name' => 'Vendor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商。

- **CMCC**：移动。

- **CUCC**：联通。

- **CTCC**：电信。

- **VNO**：虚拟运营商。',
            'type' => 'string',
            'required' => false,
            'example' => 'CMCC',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页数，需结合**PageSize**参数组合使用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Msisdn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的MSISDN。',
            'type' => 'string',
            'required' => false,
            'example' => '1440993******',
          ),
        ),
        7 => 
        array (
          'name' => 'AliyunOrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡关联的订单编号。

',
            'type' => 'string',
            'required' => false,
            'example' => '211519634******',
          ),
        ),
        8 => 
        array (
          'name' => 'AliFee',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资费版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali_2',
          ),
        ),
        9 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐结算周期。

- **1101**：月度。

- **1103**：季度。

- **1106**：半年度。

- **1112**：年度。',
            'type' => 'string',
            'required' => false,
            'example' => '1101',
          ),
        ),
        10 => 
        array (
          'name' => 'DataType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流量类型。

- **singlecard**：单卡通用流量。

- **directionalcard**：单卡定向流量。

- **sameflowcard**：同档位池共享流量。

- **directional_sameflowcard**：同档位池共享定向流量。

- **unityPayPool**：统付池通用流量。

- **GREcard** ：统付池定向流量。',
            'type' => 'string',
            'required' => false,
            'example' => 'sameflowcard',
          ),
        ),
        11 => 
        array (
          'name' => 'ActiveTimeStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的激活时间区间：开始时间。

格式为：`yyyy-MM-dd HH:mm:ss`。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25 23:59:59',
          ),
        ),
        12 => 
        array (
          'name' => 'SimType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SIM卡类型。

- **nano**：插拔三切卡（消费级）。

- **micro**：插拔双切卡（消费级）。

- **normal**：插拔大卡（消费级）。

- **simplus56**：贴片卡5*6（消费级）。

- **simplus22**：贴片卡2*2（消费级）。

- **industry-normal**：插拔大卡（工业级）。

- **industry-micro**：插拔双切卡（工业级）。

- **industry-nano**：插拔三切卡（工业级）。

- **simplus**：贴片卡5*6（工业级）。

- **industry-simplus22**：贴片卡2*2（工业级）。',
            'type' => 'string',
            'required' => false,
            'example' => 'nano',
          ),
        ),
        13 => 
        array (
          'name' => 'ExpireTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的套餐结束时间。

格式为：`yyyy-MM-dd HH:mm:ss`',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25 23:59:59',
          ),
        ),
        14 => 
        array (
          'name' => 'IsAutoRecharge',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐是否自动续费。

- **true**：是。

- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'ExpireTimeStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的套餐开始时间。

格式为：`yyyy-MM-dd HH:mm:ss`',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25 23:59:59',
          ),
        ),
        16 => 
        array (
          'name' => 'OsStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的具体状态。

- **10**：测试期。

- **20**：静默期。

- **100**：使用中。

- **150**：部分使用中。

- **200**：主动停用。

- **300**：达量停用。

- **400**：信控停用。

- **500**：换绑停用。

- **600**：实名停用。

- **700**：异常停用。

- **40**：已停机。

- **50**：已销户。',
            'type' => 'string',
            'required' => false,
            'example' => '300',
          ),
        ),
        17 => 
        array (
          'name' => 'NotifyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动化规则的通知ID。',
            'type' => 'string',
            'required' => false,
            'example' => '11111',
          ),
        ),
        18 => 
        array (
          'name' => 'DataLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流量包档位。',
            'type' => 'string',
            'required' => false,
            'example' => '30MB',
          ),
        ),
        19 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的状态。

- **10**：可测试。

- **20**：未使用。

- **30**：使用中。

- **35**：已停用。

- **40**：已停机。

- **50**：已销户。',
            'type' => 'string',
            'required' => false,
            'example' => '35',
          ),
        ),
        20 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称。
',
            'type' => 'string',
            'required' => false,
            'example' => '测试标签',
          ),
        ),
        21 => 
        array (
          'name' => 'CertifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证方式。

仅支持enterprise：企业认证。',
            'type' => 'string',
            'required' => false,
            'example' => 'enterprise',
          ),
        ),
        22 => 
        array (
          'name' => 'DirectionalGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定向分组ID。',
            'type' => 'string',
            'required' => false,
            'example' => '22',
          ),
        ),
        23 => 
        array (
          'name' => 'ApnName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'APN名称。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cmiot',
          ),
        ),
        24 => 
        array (
          'name' => 'Imsi',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的IMSI。',
            'type' => 'string',
            'required' => false,
            'example' => '460081937******',
          ),
        ),
        25 => 
        array (
          'name' => 'PoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '池编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1',
          ),
        ),
        26 => 
        array (
          'name' => 'MinFlow',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '周期用量区间筛选：最小用量（单位MB）。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        27 => 
        array (
          'name' => 'MaxFlow',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '周期用量区间筛选：最大用量（单位MB）。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
          ),
        ),
        28 => 
        array (
          'name' => 'MaxRestFlowPercentage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单卡周期流量剩余比例，仅支持如下三个参数。
0.1：剩余10%
0.2：剩余20%
0.3：剩余30%',
            'type' => 'number',
            'format' => 'double',
            'required' => false,
            'example' => '0.2',
          ),
        ),
        29 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '网络制式：4G，5G。',
            'type' => 'string',
            'required' => false,
            'example' => '4G',
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
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- true：调用成功。

- false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回页面信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '查询页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '符合条件的物联网卡总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '199',
                  ),
                  'List' => 
                  array (
                    'description' => '卡列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '卡列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '卡的状态。

- **10**：可测试。

- **20**：未使用。

- **30**：使用中。

- **35**：已停用。

- **40**：已停机。

- **50**：已销户。',
                          'type' => 'string',
                          'example' => '35',
                        ),
                        'DataType' => 
                        array (
                          'description' => '流量类型。

- **singlecard**：单卡通用流量。

- **directionalcard**：单卡定向流量。

- **sameflowcard**：同档位池共享流量。

- **directional_sameflowcard**：同档位池共享定向流量。

- **unityPayPool**：统付池通用流量。

- **GREcard** ：统付池定向流量。',
                          'type' => 'string',
                          'example' => 'sameflowcard',
                        ),
                        'DirectionalGroupName' => 
                        array (
                          'description' => '定向分组名称。',
                          'type' => 'string',
                          'example' => '测试分组',
                        ),
                        'PeriodRestFlow' => 
                        array (
                          'description' => '周期剩余流量。',
                          'type' => 'string',
                          'example' => '130.00MB',
                        ),
                        'CredentialType' => 
                        array (
                          'description' => '套餐凭证类型。',
                          'type' => 'string',
                          'example' => 'unityPayPool',
                        ),
                        'PeriodAddFlow' => 
                        array (
                          'description' => '周期累计流量。',
                          'type' => 'string',
                          'example' => '0KB',
                        ),
                        'PeriodSmsUse' => 
                        array (
                          'description' => '周期短信用量。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'DataLevel' => 
                        array (
                          'description' => '流量包档位。',
                          'type' => 'string',
                          'example' => '30MB',
                        ),
                        'OsStatus' => 
                        array (
                          'description' => '物联网卡的具体状态。

- **10**：测试期。

- **20**：静默期。

- **100**：使用中。

- **150**：部分使用中。

- **200**：主动停用。

- **300**：达量停用。

- **400**：信控停用。

- **500**：换绑停用。

- **600**：实名停用。

- **700**：异常停用。

- **40**：已停机。

- **50**：已销户。',
                          'type' => 'string',
                          'example' => '300',
                        ),
                        'NotifyId' => 
                        array (
                          'description' => '自动化规则的通知ID。',
                          'type' => 'string',
                          'example' => '11111',
                        ),
                        'AliFee' => 
                        array (
                          'description' => '资费版本。',
                          'type' => 'string',
                          'example' => 'ali_2',
                        ),
                        'AliyunOrderId' => 
                        array (
                          'description' => '物联网卡关联的订单编号。',
                          'type' => 'string',
                          'example' => '211519634******',
                        ),
                        'ActiveType' => 
                        array (
                          'description' => '物联网卡的激活方式。

- **firstdatarecord**：首话单激活。

- **carrierstatuspush**：运营商状态推送激活。

- **silence_expire**：沉默期结束激活。

- **manage**：手动激活。

- **testflowdepleted**：测试期流量超出后激活。',
                          'type' => 'string',
                          'example' => 'first_data_record',
                        ),
                        'IsAutoRecharge' => 
                        array (
                          'description' => '套餐是否自动续费。

- true：是。

- false：否。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CredentialInstanceId' => 
                        array (
                          'description' => '凭证实例ID。',
                          'type' => 'string',
                          'example' => '2622***',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '套餐到期时间。',
                          'type' => 'string',
                          'example' => '2022-04-30 23:59:59',
                        ),
                        'ApnName' => 
                        array (
                          'description' => 'APN名称。',
                          'type' => 'string',
                          'example' => 'cmiot',
                        ),
                        'ActiveTime' => 
                        array (
                          'description' => '激活时间。',
                          'type' => 'string',
                          'example' => '2021-11-16 16:35:50',
                        ),
                        'Iccid' => 
                        array (
                          'description' => '物联网卡的ICCID。',
                          'type' => 'string',
                          'example' => '89860321******15668',
                        ),
                        'Vendor' => 
                        array (
                          'description' => '运营商。

- **CMCC**：移动。

- **CUCC**：联通。

- **CTCC**：电信。

- **VNO**：虚拟运营商。',
                          'type' => 'string',
                          'example' => 'CMCC',
                        ),
                        'Period' => 
                        array (
                          'description' => '套餐结算周期。

- **1101**：月度。

- **1103**：季度。

- **1106**：半年度。

- **1112**：年度。',
                          'type' => 'string',
                          'example' => '1101',
                        ),
                        'CertifyType' => 
                        array (
                          'description' => '认证方式。

enterprise：企业认证。',
                          'type' => 'string',
                          'example' => 'enterprise',
                        ),
                        'PrivateNetworkSegment' => 
                        array (
                          'description' => '私网网段（定向卡）。',
                          'type' => 'string',
                          'example' => '1.*.3.*',
                        ),
                        'OpenAccountTime' => 
                        array (
                          'description' => '开户时间。',
                          'type' => 'string',
                          'example' => '2021-11-29 16:12:14',
                        ),
                        'SimType' => 
                        array (
                          'description' => 'SIM卡类型。

- **nano**：插拔三切卡（消费级）。

- **micro**：插拔双切卡（消费级）。

- **normal**：插拔大卡（消费级）。

- **simplus56**：贴片卡5*6（消费级）。

- **simplus22**：贴片卡2*2（消费级）。

- **industry-normal**：插拔大卡（工业级）。

- **industry-micro**：插拔双切卡（工业级）。

- **industry-nano**：插拔三切卡（工业级）。

- **simplus**：贴片卡5*6（工业级）。

- **industry-simplus22**：贴片卡2*2（工业级）。',
                          'type' => 'string',
                          'example' => 'nano',
                        ),
                        'VsimInstanceId' => 
                        array (
                          'description' => '物联网卡的InstanceId值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456',
                        ),
                        'CredentialNo' => 
                        array (
                          'description' => '套餐凭证。',
                          'type' => 'string',
                          'example' => 'CM-***-*-2-**M',
                        ),
                        'TagList' => 
                        array (
                          'description' => '物联网卡的标签。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagName' => 
                              array (
                                'description' => '标签名称。',
                                'type' => 'string',
                                'example' => '测试标签',
                              ),
                              'Id' => 
                              array (
                                'description' => '标签ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '24',
                              ),
                            ),
                          ),
                        ),
                        'Imsi' => 
                        array (
                          'description' => '物联网卡的IMSI。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '物联网卡的IMSI。',
                            'type' => 'string',
                            'example' => '460081937******',
                          ),
                        ),
                        'Msisdn' => 
                        array (
                          'description' => '物联网卡的MSISDN。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '物联网卡的MSISDN。',
                            'type' => 'string',
                            'example' => '1440993******',
                          ),
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注信息。',
                          'type' => 'string',
                          'example' => '备注信息',
                        ),
                        'DirectionalGroupId' => 
                        array (
                          'description' => '定向分组ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '55',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络制式：4G，5G。',
                          'type' => 'string',
                          'example' => '4G',
                        ),
                        'FlowLatestModifiedTime' => 
                        array (
                          'description' => '用量更新时间',
                          'type' => 'string',
                          'example' => '2023-08-15 18:20:11',
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
            'errorCode' => 'linkcard.common.InvalidAliyunPK',
            'errorMessage' => 'AliyunPk is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.BusinessProcessError',
            'errorMessage' => 'A business processing exception occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 20,\\n    \\"Total\\": 199,\\n    \\"List\\": [\\n      {\\n        \\"Status\\": \\"35\\",\\n        \\"DataType\\": \\"sameflowcard\\",\\n        \\"DirectionalGroupName\\": \\"测试分组\\",\\n        \\"PeriodRestFlow\\": \\"130.00MB\\",\\n        \\"CredentialType\\": \\"unityPayPool\\",\\n        \\"PeriodAddFlow\\": \\"0KB\\",\\n        \\"PeriodSmsUse\\": \\"0\\",\\n        \\"DataLevel\\": \\"30MB\\",\\n        \\"OsStatus\\": \\"300\\",\\n        \\"NotifyId\\": \\"11111\\",\\n        \\"AliFee\\": \\"ali_2\\",\\n        \\"AliyunOrderId\\": \\"211519634******\\",\\n        \\"ActiveType\\": \\"first_data_record\\",\\n        \\"IsAutoRecharge\\": true,\\n        \\"CredentialInstanceId\\": \\"2622***\\",\\n        \\"ExpireTime\\": \\"2022-04-30 23:59:59\\",\\n        \\"ApnName\\": \\"cmiot\\",\\n        \\"ActiveTime\\": \\"2021-11-16 16:35:50\\",\\n        \\"Iccid\\": \\"89860321******15668\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"Period\\": \\"1101\\",\\n        \\"CertifyType\\": \\"enterprise\\",\\n        \\"PrivateNetworkSegment\\": \\"1.*.3.*\\",\\n        \\"OpenAccountTime\\": \\"2021-11-29 16:12:14\\",\\n        \\"SimType\\": \\"nano\\",\\n        \\"VsimInstanceId\\": 123456,\\n        \\"CredentialNo\\": \\"CM-***-*-2-**M\\",\\n        \\"TagList\\": [\\n          {\\n            \\"TagName\\": \\"测试标签\\",\\n            \\"Id\\": 24\\n          }\\n        ],\\n        \\"Imsi\\": [\\n          \\"460081937******\\"\\n        ],\\n        \\"Msisdn\\": [\\n          \\"1440993******\\"\\n        ],\\n        \\"Remark\\": \\"备注信息\\",\\n        \\"DirectionalGroupId\\": 55,\\n        \\"NetworkType\\": \\"4G\\",\\n        \\"FlowLatestModifiedTime\\": \\"2023-08-15 18:20:11\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCardInfoResponse>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <PageCount>20</PageCount>\\n        <Total>199</Total>\\n        <List>\\n            <Status>35</Status>\\n            <DataType>sameflowcard</DataType>\\n            <DirectionalGroupName>测试分组</DirectionalGroupName>\\n            <PeriodRestFlow>130.00MB</PeriodRestFlow>\\n            <CredentialType>unityPayPool</CredentialType>\\n            <PeriodAddFlow>0KB</PeriodAddFlow>\\n            <PeriodSmsUse>0</PeriodSmsUse>\\n            <DataLevel>30MB</DataLevel>\\n            <OsStatus>300</OsStatus>\\n            <NotifyId>11111</NotifyId>\\n            <AliFee>ali_2</AliFee>\\n            <AliyunOrderId>211519634******</AliyunOrderId>\\n            <ActiveType>first_data_record</ActiveType>\\n            <IsAutoRecharge>true</IsAutoRecharge>\\n            <CredentialInstanceId>2622***</CredentialInstanceId>\\n            <ExpireTime>2022-04-30 23:59:59</ExpireTime>\\n            <ApnName>cmiot</ApnName>\\n            <ActiveTime>2021-11-16 16:35:50</ActiveTime>\\n            <Iccid>89860321******15668</Iccid>\\n            <Vendor>CMCC</Vendor>\\n            <Period>1101</Period>\\n            <CertifyType>enterprise</CertifyType>\\n            <PrivateNetworkSegment>1.*.3.*</PrivateNetworkSegment>\\n            <OpenAccountTime>2021-11-29 16:12:14</OpenAccountTime>\\n            <SimType>nano</SimType>\\n            <VsimInstanceId>123456</VsimInstanceId>\\n            <CredentialNo>CM-***-*-2-**M</CredentialNo>\\n            <TagList>\\n                <TagName>测试标签</TagName>\\n                <Id>24</Id>\\n            </TagList>\\n            <Imsi>460081937******</Imsi>\\n            <Msisdn>1440993******</Msisdn>\\n            <Remark>备注信息</Remark>\\n            <DirectionalGroupId>55</DirectionalGroupId>\\n        </List>\\n    </Data>\\n</ListCardInfoResponse>","errorExample":""}]',
      'title' => '查询卡列表',
      'description' => '### 使用说明
该接口的请求参数您可以在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)查看并获取，或者调用接口[GetCardDetail](~~374328~~)在返回参数中查看并获取（后者更为推荐）。
',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
    ),
    'ListOrder' => 
    array (
      'summary' => '查询订单列表。',
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
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单ID。',
            'type' => 'string',
            'required' => false,
            'example' => '21450******0275',
          ),
        ),
        1 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单购买的时间区间（开始日期）。

格式：`YYYY-MM-dd`',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-05',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单购买的时间区间（结束日期）。

格式：`YYYY-MM-dd`',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-05',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型。

- **NEW**：新购。

- **ADD_FLOW**：扩池。

- **ADD_CARD**：补卡。

- **FUNCTION**：购月功能费。

- **FLOW_PLUS**：购买叠加包。

- **RENEW**：续订套餐。

- **AUTO_RENEW**：自动续订套餐。
',
            'type' => 'string',
            'required' => false,
            'example' => 'NEW',
          ),
        ),
        4 => 
        array (
          'name' => 'OrderStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单状态。

- **processing**：处理中。

- **failure**：失败。

- **completed**：处理完成。

- **unpaid**：待支付。

- **refunded**：已退款。',
            'type' => 'string',
            'required' => false,
            'example' => 'processing',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页数，需结合`PageSize`参数使用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的数量，支持10、15、25、40。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'CredentialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐凭证。',
            'type' => 'string',
            'required' => false,
            'example' => 'CT-SF-M-2-100M',
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
                'description' => '接口返回码。

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '查询页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'Total' => 
                  array (
                    'description' => '符合条件的总订单数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '48',
                  ),
                  'List' => 
                  array (
                    'description' => '订单列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '订单列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BillingCycle' => 
                        array (
                          'description' => '套餐结算周期。

- **1101**：月度。

- **1103**：季度。

- **1106**：半年度。

- **1112**：年度。',
                          'type' => 'string',
                          'example' => '1101',
                        ),
                        'BuyNum' => 
                        array (
                          'description' => '购买张数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'PoolCapacityUnit' => 
                        array (
                          'description' => '池容量单位。',
                          'type' => 'string',
                          'example' => 'GB',
                        ),
                        'CardPayCount' => 
                        array (
                          'description' => '支付时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2022-04-11 16:43:00',
                        ),
                        'CredentialPackage' => 
                        array (
                          'description' => '套餐凭证。',
                          'type' => 'string',
                          'example' => 'AL-UPG-******3_beika4',
                        ),
                        'Vendor' => 
                        array (
                          'description' => '运营商。

- **CMCC**：移动。

- **CUCC**：联通。

- **CTCC**：电信。

- **VNO**：虚拟运营商。',
                          'type' => 'string',
                          'example' => 'CMCC',
                        ),
                        'DataLevel' => 
                        array (
                          'description' => '流量包档位。',
                          'type' => 'string',
                          'example' => '30MB',
                        ),
                        'PayDuration' => 
                        array (
                          'description' => '购买时长。',
                          'type' => 'string',
                          'example' => '12月',
                        ),
                        'AliFee' => 
                        array (
                          'description' => '资费版本。',
                          'type' => 'string',
                          'example' => 'ali_2',
                        ),
                        'OrderStatus' => 
                        array (
                          'description' => '订单状态。

- **processing**：处理中。

- **failure**：失败。

- **completed**：处理完成。

- **unpaid**：待支付。

- **refunded**：已退款。',
                          'type' => 'string',
                          'example' => 'processing',
                        ),
                        'PoolNo' => 
                        array (
                          'description' => '池编号。',
                          'type' => 'string',
                          'example' => 'beika4',
                        ),
                        'FunctionFee' => 
                        array (
                          'description' => '月功能费份数（统付池专用）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '90',
                        ),
                        'PayTime' => 
                        array (
                          'description' => '购买时间。',
                          'type' => 'string',
                          'example' => '2022-04-11 16:43:00',
                        ),
                        'FlowType' => 
                        array (
                          'description' => '流量类型。

- **singlecard**：单卡通用流量。

- **directionalcard**：单卡定向流量。

- **sameflowcard**：同档位池共享流量。

- **directional_sameflowcard**：同档位池共享定向流量。

- **unityPayPool**：统付池通用流量。

- **GREcard**：统付池定向流量。',
                          'type' => 'string',
                          'example' => 'singlecard',
                        ),
                        'PoolCapacity' => 
                        array (
                          'description' => '池容量，单位参见**PoolCapacityUnit**字段。',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'OrderInfo' => 
                        array (
                          'description' => '订单信息。',
                          'type' => 'string',
                          'example' => '123123',
                        ),
                        'OrderType' => 
                        array (
                          'description' => '订单类型。

- **NEW**：新购。

- **ADD_FLOW**：扩池。

- **ADD_CARD**：补卡。

- **FUNCTION**：购月功能费。

- **FLOW_PLUS**：购买叠加包。

- **RENEW**：续订套餐。

- **AUTO_RENEW**：自动续订套餐。
',
                          'type' => 'string',
                          'example' => 'NEW',
                        ),
                        'OrderId' => 
                        array (
                          'description' => '订单编号。',
                          'type' => 'string',
                          'example' => '21450******0275',
                        ),
                        'CredentialNo' => 
                        array (
                          'description' => '套餐凭证。',
                          'type' => 'string',
                          'example' => 'CM-***-*-2-**M',
                        ),
                        'ExpressNoList' => 
                        array (
                          'description' => '物流信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '物流单号。',
                            'type' => 'string',
                            'example' => '123123123',
                          ),
                        ),
                        'DeliveryInfo' => 
                        array (
                          'description' => '收货信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ZipCode' => 
                            array (
                              'description' => '收货信息：邮编。',
                              'type' => 'string',
                              'example' => '100000',
                            ),
                            'Address' => 
                            array (
                              'description' => '收货信息：地址。',
                              'type' => 'string',
                              'example' => '收货地址',
                            ),
                            'Mail' => 
                            array (
                              'description' => '收货信息：邮箱。',
                              'type' => 'string',
                              'example' => 'xxx@xxx.com',
                            ),
                            'Receiver' => 
                            array (
                              'description' => '收货信息：收件人。',
                              'type' => 'string',
                              'example' => '收件人',
                            ),
                            'BuyerMessage' => 
                            array (
                              'description' => '收货信息：收件电话。',
                              'type' => 'string',
                              'example' => '收件电话',
                            ),
                          ),
                        ),
                        'OrderDetailUrl' => 
                        array (
                          'description' => '订单详情链接。',
                          'type' => 'string',
                          'example' => 'https://us******60589',
                        ),
                        'ApnName' => 
                        array (
                          'description' => 'APN名称。',
                          'type' => 'string',
                          'example' => 'CMIOTCZHZA.JS',
                        ),
                        'ApnRegion' => 
                        array (
                          'description' => 'APN地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ResourceQuantity' => 
                        array (
                          'description' => 'IP购买数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10000',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络制式：4G，5G。',
                          'type' => 'string',
                          'example' => '4G',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.InvalidAliyunPK',
            'errorMessage' => 'AliyunPk is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.common.BusinessProcessError',
            'errorMessage' => 'A business processing exception occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 5,\\n    \\"Total\\": 48,\\n    \\"List\\": [\\n      {\\n        \\"BillingCycle\\": \\"1101\\",\\n        \\"BuyNum\\": 100,\\n        \\"PoolCapacityUnit\\": \\"GB\\",\\n        \\"CardPayCount\\": 0,\\n        \\"CredentialPackage\\": \\"AL-UPG-******3_beika4\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"DataLevel\\": \\"30MB\\",\\n        \\"PayDuration\\": \\"12月\\",\\n        \\"AliFee\\": \\"ali_2\\",\\n        \\"OrderStatus\\": \\"processing\\",\\n        \\"PoolNo\\": \\"beika4\\",\\n        \\"FunctionFee\\": 90,\\n        \\"PayTime\\": \\"2022-04-11 16:43:00\\",\\n        \\"FlowType\\": \\"singlecard\\",\\n        \\"PoolCapacity\\": \\"200\\",\\n        \\"OrderInfo\\": \\"123123\\",\\n        \\"OrderType\\": \\"NEW\\",\\n        \\"OrderId\\": \\"21450******0275\\",\\n        \\"CredentialNo\\": \\"CM-***-*-2-**M\\",\\n        \\"ExpressNoList\\": [\\n          \\"123123123\\"\\n        ],\\n        \\"DeliveryInfo\\": {\\n          \\"ZipCode\\": \\"100000\\",\\n          \\"Address\\": \\"收货地址\\",\\n          \\"Mail\\": \\"xxx@xxx.com\\",\\n          \\"Receiver\\": \\"收件人\\",\\n          \\"BuyerMessage\\": \\"收件电话\\"\\n        },\\n        \\"OrderDetailUrl\\": \\"https://us******60589\\",\\n        \\"ApnName\\": \\"CMIOTCZHZA.JS\\",\\n        \\"ApnRegion\\": \\"cn-hangzhou\\",\\n        \\"ResourceQuantity\\": 10000,\\n        \\"NetworkType\\": \\"4G\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListOrderResponse>\\n    <Code>200</Code>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <PageCount>5</PageCount>\\n        <Total>48</Total>\\n        <List>\\n            <BillingCycle>1101</BillingCycle>\\n            <BuyNum>100</BuyNum>\\n            <PoolCapacityUnit>GB</PoolCapacityUnit>\\n            <CredentialPackage>AL-UPG-******3_beika4</CredentialPackage>\\n            <Vendor>CMCC</Vendor>\\n            <DataLevel>30MB</DataLevel>\\n            <PayDuration>12月</PayDuration>\\n            <AliFee>ali_2</AliFee>\\n            <OrderStatus>processing</OrderStatus>\\n            <PoolNo>beika4</PoolNo>\\n            <FunctionFee>90</FunctionFee>\\n            <PayTime>2022-04-11 16:43:00</PayTime>\\n            <FlowType>singlecard</FlowType>\\n            <PoolCapacity>200</PoolCapacity>\\n            <OrderInfo>123123</OrderInfo>\\n            <OrderType>NEW</OrderType>\\n            <OrderId>21450******0275</OrderId>\\n            <CredentialNo>CM-***-*-2-**M</CredentialNo>\\n            <ExpressNoList>123123123</ExpressNoList>\\n            <DeliveryInfo>\\n                <ZipCode>100000</ZipCode>\\n                <Address>收货地址</Address>\\n                <Mail>xxx@xxx.com</Mail>\\n                <Receiver>收件人</Receiver>\\n                <BuyerMessage>收件电话</BuyerMessage>\\n            </DeliveryInfo>\\n            <OrderDetailUrl>https://us******60589</OrderDetailUrl>\\n        </List>\\n    </Data>\\n</ListOrderResponse>","errorExample":""}]',
      'title' => '查询订单列表',
      'description' => '## 使用限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
    ),
    'AddDirectionalCard' => 
    array (
      'summary' => '给定向分组中导入定向卡。',
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定向分组ID。

您可调用接口[GetCardDetail](~~374328~~)在返回参数中查看定向分组ID（DirectionalGroupId）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5',
          ),
        ),
        1 => 
        array (
          'name' => 'UploadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导入类型。

- **NO_GROUP**：仅导入还未分组的定向卡。

- **ALL**：全量导入。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALL',
          ),
        ),
        2 => 
        array (
          'name' => 'UploadMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导入方式。

- **TAG**：标签，导入指定标签的定向卡。

- **ORDER**：订单，导入指定订单的定向卡。

- **FILE**：批量文件，导入批量文件中的定向卡。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TAG',
          ),
        ),
        3 => 
        array (
          'name' => 'TagList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签ID列表。导入方式选择为标签时，需填入该参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签ID。导入方式选择为标签时，需填入该参数。

标签ID可在物联网无线连接服务控制台的**SIM卡管理** > **标签管理**页面查看。',
              'type' => 'string',
              'required' => false,
              'example' => '5',
            ),
            'required' => true,
            'docRequired' => true,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'OrderList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '订单编号列表。导入方式选择为订单时，需填入该参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订单编号。导入方式选择为订单时，需填入该参数。

订单编号可在物联网无线连接服务控制台的**订单统计** > **订单管理**页面查看。',
              'type' => 'string',
              'required' => false,
              'example' => '2172***80589',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        5 => 
        array (
          'name' => 'FileUri',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '批量文件的OSS路径。导入方式选择为批量文件时，需填入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://linkcard-user-online.oss-cn-zhangjiakou.aliyuncs.com/DIRECTIONAL_GROUP/20220811/xxxx.csv',
          ),
        ),
        6 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定向分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试分组',
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
              'Data' => 
              array (
                'description' => '是否导入成功。

- **true**：导入成功。

- **false**：导入失败。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- 200：调用成功。

- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDirectionalCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</AddDirectionalCardResponse>","errorExample":""}]',
      'title' => '定向分组导卡',
      'description' => '## 使用说明
定向卡是指仅能访问指定地址的物联网卡。可以调用接口[VerifyIotCard](~~446797~~)查询物联网卡是否为定向卡。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
    ),
    'AddDirectionalGroup' => 
    array (
      'summary' => '创建定向分组。',
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
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '给定向分组设置一个名称。

分组名称支持中文、英文、数字及下划线（_），长度不超过30个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试分组',
            'maxLength' => 30,
            'minLength' => 0,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '定向分组ID。

请记录定向分组ID，后续调用其他接口，例如调用[AddDirectionalCard](~~446808~~)给定向分组里导入物联网卡时需填入定向分组ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '6',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- 200：调用成功。

- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 6,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDirectionalGroupResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>系统异常</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</AddDirectionalGroupResponse>","errorExample":""}]',
      'title' => '创建定向分组',
      'description' => '## 使用说明
仅新版定向服务菜单支持定向分组功能，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
    ),
    'BatchAddDirectionalAddress' => 
    array (
      'summary' => '给定向分组添加访问地址。',
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定向分组ID。

您可调用接口[GetCardDetail](~~374328~~)在返回参数中查看定向分组ID（DirectionalGroupId）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '5',
          ),
        ),
        1 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址来源。

- **user_defined**：用户配置。

- **aliyun_defined**：阿里云预配。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_defined',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址类型。

- **Ip**：IP地址。

- **Domain**：域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'Domain',
          ),
        ),
        3 => 
        array (
          'name' => 'ListAddress',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '具体定向地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '具体地址，上限10个。',
              'type' => 'string',
              'required' => false,
              'example' => '*.aliyun.com',
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BatchAddDirectionalAddressResponse',
            'description' => 'BatchAddDirectionalAddressResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- 200：调用成功。

- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '地址是否添加成功。

- true：添加成功。

- false：添加失败。',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchAddDirectionalAddressResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>true</Data>\\n</BatchAddDirectionalAddressResponse>","errorExample":""}]',
      'title' => '定向地址添加',
      'description' => '## 使用说明
仅新版定向服务菜单支持定向分组功能，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
    ),
    'ListDirectionalAddress' => 
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
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的数量，支持10、15、25、40。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页数，需结合PageSize参数使用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定向分组ID。

您可调用接口[GetCardDetail](~~374328~~)在返回参数中查看定向分组ID（DirectionalGroupId）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码。

- 200：调用成功。

- 其他：调用失败。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回的访问地址。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '查询页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '列表总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '9',
                  ),
                  'Total' => 
                  array (
                    'description' => '列表总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '90',
                  ),
                  'List' => 
                  array (
                    'description' => '访问地址。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Address' => 
                        array (
                          'description' => '定向访问地址。',
                          'type' => 'string',
                          'example' => '*.aliyun.com',
                        ),
                        'AddressType' => 
                        array (
                          'description' => '地址类型。

- **Ip**：IP地址。

- **Domain**：域名。',
                          'type' => 'string',
                          'example' => 'Domain',
                        ),
                        'Source' => 
                        array (
                          'description' => '地址来源。

- **user_defined**：用户配置。

- **aliyun_defined**：阿里云预配。',
                          'type' => 'string',
                          'example' => 'user_defined',
                        ),
                        'GroupId' => 
                        array (
                          'description' => '定向分组ID。',
                          'type' => 'string',
                          'example' => '5',
                        ),
                        'State' => 
                        array (
                          'description' => '地址状态。

- **100**：新增处理中。

- **200**：删除处理中。

- **300**：新增失败。

- **400**：删除失败。

- **500**：新增成功。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 9,\\n    \\"Total\\": 90,\\n    \\"List\\": [\\n      {\\n        \\"Address\\": \\"*.aliyun.com\\",\\n        \\"AddressType\\": \\"Domain\\",\\n        \\"Source\\": \\"user_defined\\",\\n        \\"GroupId\\": \\"5\\",\\n        \\"State\\": 500\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDirectionalAddressResponse>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <PageCount>9</PageCount>\\n        <Total>90</Total>\\n        <List>\\n            <Address>*.aliyun.com</Address>\\n            <AddressType>Domain</AddressType>\\n            <Source>user_defined</Source>\\n            <GroupId>5</GroupId>\\n            <State>500</State>\\n        </List>\\n    </Data>\\n</ListDirectionalAddressResponse>","errorExample":""}]',
      'title' => '查询定向分组信息',
      'summary' => '查询定向分组的访问地址列表。',
      'description' => '## 使用说明
仅新版定向服务菜单支持定向分组功能，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
    ),
    'ListDirectionalDetail' => 
    array (
      'summary' => '查询物联网卡所在的定向分组及访问地址列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面，查看ICCID。',
            'type' => 'string',
            'required' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的页数，不能为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的数量，支持10、15、25、40。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'title' => 'ListDirectionalDetailResponse',
            'description' => 'ListDirectionalDetailResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- 200：调用成功。

- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回的分组信息及分组内的访问地址清单。',
                'type' => 'object',
                'properties' => 
                array (
                  'DirectionalGroupId' => 
                  array (
                    'description' => '定向分组ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'DirectionalName' => 
                  array (
                    'description' => '定向分组名称。',
                    'type' => 'string',
                    'example' => '测试分组',
                  ),
                  'PaginationResult' => 
                  array (
                    'description' => '定向分组内的访问地址列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageNo' => 
                      array (
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'description' => '每页的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Total' => 
                      array (
                        'description' => '列表总数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '90',
                      ),
                      'PageCount' => 
                      array (
                        'description' => '列表总页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '9',
                      ),
                      'List' => 
                      array (
                        'description' => '定向地址列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '定向地址列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'GroupId' => 
                            array (
                              'description' => '定向分组ID。',
                              'type' => 'string',
                              'example' => '5',
                            ),
                            'Address' => 
                            array (
                              'description' => '定向访问地址。',
                              'type' => 'string',
                              'example' => '*.aliyun.com',
                            ),
                            'Source' => 
                            array (
                              'description' => '地址来源。

- **user_defined**：用户配置。

- **aliyun_defined**：阿里云预配。',
                              'type' => 'string',
                              'example' => 'user_defined',
                            ),
                            'AddressType' => 
                            array (
                              'description' => '地址类型。

- **Ip**：IP地址。

- **Domain**：域名。',
                              'type' => 'string',
                              'example' => 'Domain',
                            ),
                            'State' => 
                            array (
                              'description' => '地址状态。

- **100**：新增处理中。

- **200**：删除处理中。

- **300**：新增失败。

- **400**：删除失败。

- **500**：新增成功。',
                              'type' => 'string',
                              'example' => '500',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.directional.notExist',
            'errorMessage' => 'Can not find direction group.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.CardNotExist',
            'errorMessage' => 'The card does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'CardDisabled',
            'errorMessage' => 'The SIM card has been permanently disabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"DirectionalGroupId\\": 5,\\n    \\"DirectionalName\\": \\"测试分组\\",\\n    \\"PaginationResult\\": {\\n      \\"PageNo\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 90,\\n      \\"PageCount\\": 9,\\n      \\"List\\": [\\n        {\\n          \\"GroupId\\": \\"5\\",\\n          \\"Address\\": \\"*.aliyun.com\\",\\n          \\"Source\\": \\"user_defined\\",\\n          \\"AddressType\\": \\"Domain\\",\\n          \\"State\\": \\"500\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDirectionalDetailResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <DirectionalGroupId>5</DirectionalGroupId>\\n        <DirectionalName>测试分组</DirectionalName>\\n        <PaginationResult>\\n            <PageNo>1</PageNo>\\n            <PageSize>10</PageSize>\\n            <Total>90</Total>\\n            <PageCount>9</PageCount>\\n            <List>\\n                <GroupId>5</GroupId>\\n                <Address>*.aliyun.com</Address>\\n                <Source>user_defined</Source>\\n                <AddressType>Domain</AddressType>\\n                <State>500</State>\\n            </List>\\n        </PaginationResult>\\n    </Data>\\n</ListDirectionalDetailResponse>","errorExample":""}]',
      'title' => '查询卡的定向信息',
      'description' => '## 使用说明
仅新版定向服务菜单支持定向分组，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
    ),
    'VerifyIotCard' => 
    array (
      'summary' => '查询物联网卡是否为定向卡。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面，查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
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
            'title' => 'VerifyIotCardResponse',
            'description' => 'VerifyIotCardResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

- 200：调用成功。

- 其他：调用失败。错误码详情，请参见[错误码](~~375339~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '是否为定向卡。

- **true**：是定向卡。

- **false**：不是定向卡。',
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
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          3 => 
          array (
            'errorCode' => 'CardDisabled',
            'errorMessage' => 'The SIM card has been permanently disabled.',
          ),
          4 => 
          array (
            'errorCode' => 'linkcard.common.CardNotExist',
            'errorMessage' => 'The card does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": true\\n}","errorExample":""},{"type":"xml","example":"<VerifyIotCardResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>true</Data>\\n</VerifyIotCardResponse>","errorExample":""}]',
      'title' => '定向卡查询',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
    ),
    'AddTagsToCard' => 
    array (
      'summary' => '物联网卡添加标签',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'TagNameList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签名称。

参数为空或者空集合的时候代表从卡上删除所有标签。

如标签不存在，则会自动创建该标签并打标。',
              'type' => 'string',
              'required' => false,
              'example' => '测试标签',
            ),
            'required' => false,
            'maxItems' => 4,
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
                'description' => '接口返回码。

200：表示成功。 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '该卡已有标签的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagName' => 
                    array (
                      'description' => '标签名称。',
                      'type' => 'string',
                      'example' => '测试标签',
                    ),
                    'TagId' => 
                    array (
                      'description' => '标签ID。',
                      'type' => 'string',
                      'example' => '14',
                    ),
                  ),
                ),
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

true：调用成功。 false：调用失败。',
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
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": [\\n    {\\n      \\"TagName\\": \\"测试标签\\",\\n      \\"TagId\\": \\"14\\"\\n    }\\n  ],\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddTagsToCardResponse>\\n    <Code>200</Code>\\n    <Data>\\n        <TagName>测试标签</TagName>\\n        <TagId>14</TagId>\\n    </Data>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n</AddTagsToCardResponse>","errorExample":""}]',
      'title' => '物联网卡添加标签',
    ),
    'GetSimCardStateDistribution' => 
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
          'name' => 'CredentialNO',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐凭证编号，您可在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/sim/license)的凭证管理页面查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'CT-SC-M-2-100M',
          ),
        ),
        1 => 
        array (
          'name' => 'Date',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的日期。

格式：yyyyMM。',
            'type' => 'string',
            'required' => true,
            'example' => '202209',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码。

200：表示成功。

其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

true：调用成功。
false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CardCount' => 
                  array (
                    'description' => '卡总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'TestCount' => 
                  array (
                    'description' => '可测试卡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'UnusedCount' => 
                  array (
                    'description' => '未使用卡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'StopCount' => 
                  array (
                    'description' => '已停用卡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'DestoryedCount' => 
                  array (
                    'description' => '已销户卡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'UsingCount' => 
                  array (
                    'description' => '使用中卡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'ShutDownCount' => 
                  array (
                    'description' => '已停机卡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.check.TimeFormatError',
            'errorMessage' => 'Time format error.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.CredentialInstanceNotExist',
            'errorMessage' => 'The credential instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'linkcard.common.CredentialNoNotExist',
            'errorMessage' => 'The credentialNo does not exist',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CardCount\\": 100,\\n    \\"TestCount\\": 20,\\n    \\"UnusedCount\\": 10,\\n    \\"StopCount\\": 5,\\n    \\"DestoryedCount\\": 0,\\n    \\"UsingCount\\": 50,\\n    \\"ShutDownCount\\": 10\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSimCardStateDistributionResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>5C06CF1A-959D-10A9-9C56-003EDF663BAF</RequestId>\\n        <Data>\\n            <StopCount>166</StopCount>\\n            <TestCount>50098</TestCount>\\n            <UnusedCount>426</UnusedCount>\\n            <CardCount>902847</CardCount>\\n            <DestoryedCount>340498</DestoryedCount>\\n            <UsingCount>511007</UsingCount>\\n            <ShutDownCount>652</ShutDownCount>\\n        </Data>\\n        <Success>true</Success>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>5C06CF1A-959D-10A9-9C56-003EDF663BAF</requestId>\\n    <successResponse>true</successResponse>\\n</GetSimCardStateDistributionResponse>","errorExample":""}]',
      'title' => '获取卡状态分布',
      'summary' => '获取卡状态分布',
    ),
    'AddDirectionalAddress' => 
    array (
      'summary' => '定向分组新增目标地址。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10000002595',
          ),
        ),
        1 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址类型：

客户配置： user_defined

阿里云预配：aliyun_defined',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'user_defined',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址类型：

Ip：Ip

域名：Domain',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Domain',
          ),
        ),
        3 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '*.aliyun.com',
          ),
        ),
        4 => 
        array (
          'name' => 'SerialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求编号，支持幂等。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        5 => 
        array (
          'name' => 'MsgNotify',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行成功后是否通过MQ推送，默认false：
false：不推送
true： 推送（目前不支持）',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'UrlInsecurityForce',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检测到的高危风险域名是否强制添加，默认被拦截，不添加',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '地址是否添加成功。

true：添加成功。

false：添加失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

true：调用成功。
false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：调用成功。

其他：调用失败。错误码详情，请参见错误码。',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDirectionalAddressResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</AddDirectionalAddressResponse>","errorExample":""}]',
      'title' => '定向分组新增目标地址',
    ),
    'DeleteDirectionalAddress' => 
    array (
      'summary' => '定向分组删除目标地址。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10000002595',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '*.aliyun.com',
          ),
        ),
        2 => 
        array (
          'name' => 'SerialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求编号，支持幂等。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        3 => 
        array (
          'name' => 'MsgNotify',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行成功后是否通过MQ推送，默认false： 

false：不推送 

true： 推送',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '操作是否成功。

true：成功。

false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

true：调用成功。 false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：调用成功。

其他：调用失败。错误码详情，请参见错误码。',
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
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDirectionalAddressResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</DeleteDirectionalAddressResponse>","errorExample":""}]',
      'title' => '定向分组删除目标地址',
    ),
    'DeleteDirectionalGroup' => 
    array (
      'summary' => '删除定向分组。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10000002595',
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
              'Data' => 
              array (
                'description' => '操作是否成功。

true：成功。

false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

true：调用成功。
false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：调用成功。

其他：调用失败。错误码详情，请参见错误码。',
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
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDirectionalGroupResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</DeleteDirectionalGroupResponse>","errorExample":""}]',
      'title' => '删除定向分组',
    ),
    'GetCardStatusStatistics' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码。

200：表示成功。
其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

true：调用成功。
false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'UnbindResumeStatisticsDTO' => 
                  array (
                    'description' => '换绑停用数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'FlowOutStatisticsDTO' => 
                  array (
                    'description' => '信控停用数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'ErrorStopStatisticsDTO' => 
                  array (
                    'description' => '异常停用数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'ExhaustStopStatisticsDTO' => 
                  array (
                    'description' => '达量停用数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'UnCertifiedStopStatisticsDTO' => 
                  array (
                    'description' => '未实名停用数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'ManageStopStatisticsDTO' => 
                  array (
                    'description' => '主动停用数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'ExpireStopStatisticsDTO' => 
                  array (
                    'description' => '套餐到期停机数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'WeekWarnStatisticsDTO' => 
                  array (
                    'description' => '套餐7天到期预警数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PoolCount' => 
                      array (
                        'description' => '统付池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'SingleCardCount' => 
                      array (
                        'description' => '单卡套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'SameFlowCardCount' => 
                      array (
                        'description' => '同档位池套餐卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总卡数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                      ),
                    ),
                  ),
                  'RiskWaringStatisticsDTO' => 
                  array (
                    'description' => '风险告警统计。与控制台风险告警板块数据一致。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'WarningCount' => 
                      array (
                        'description' => '到期预警数。（7天内套餐到期）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '20',
                      ),
                      'WaringTotalCount' => 
                      array (
                        'description' => '总告警数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                      'StopCount' => 
                      array (
                        'description' => '停机/停用数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '40',
                      ),
                      'LeftFlowPercentageWarnCount' => 
                      array (
                        'description' => '余量预警数。（单卡套餐余量不足10%）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '40',
                      ),
                    ),
                  ),
                  'SingCardPeriodLeftFlowWarnDTO' => 
                  array (
                    'description' => '套餐余量不足数据统计。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'LessFlowPercentage10Count' => 
                      array (
                        'description' => '单卡周期套餐余量不足10%的告警数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                      ),
                      'LessFlowPercentage30Count' => 
                      array (
                        'description' => '单卡周期套餐余量不足30%的告警数量.',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '8',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"UnbindResumeStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"FlowOutStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ErrorStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ExhaustStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"UnCertifiedStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ManageStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ExpireStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"WeekWarnStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"RiskWaringStatisticsDTO\\": {\\n      \\"WarningCount\\": 20,\\n      \\"WaringTotalCount\\": 100,\\n      \\"StopCount\\": 40,\\n      \\"LeftFlowPercentageWarnCount\\": 40\\n    },\\n    \\"SingCardPeriodLeftFlowWarnDTO\\": {\\n      \\"LessFlowPercentage10Count\\": 5,\\n      \\"LessFlowPercentage30Count\\": 8\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCardStatusStatisticsResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>DCBDCDBC-0E54-53AC-97A4-6194849CC6BC</RequestId>\\n        <Data>\\n            <ExhaustStopStatisticsDTO>\\n                <TotalCount>8</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>4</SameFlowCardCount>\\n                <PoolCount>4</PoolCount>\\n            </ExhaustStopStatisticsDTO>\\n            <WeekWarnStatisticsDTO>\\n                <TotalCount>20</TotalCount>\\n                <SingleCardCount>20</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>0</PoolCount>\\n            </WeekWarnStatisticsDTO>\\n            <FlowOutStatisticsDTO>\\n                <TotalCount>12</TotalCount>\\n                <SingleCardCount>7</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>5</PoolCount>\\n            </FlowOutStatisticsDTO>\\n            <SingCardPeriodLeftFlowWarnDTO>\\n                <LessFlowPercentage10Count>15</LessFlowPercentage10Count>\\n                <LessFlowPercentage30Count>0</LessFlowPercentage30Count>\\n            </SingCardPeriodLeftFlowWarnDTO>\\n            <ErrorStopStatisticsDTO>\\n                <TotalCount>1</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>1</PoolCount>\\n            </ErrorStopStatisticsDTO>\\n            <ExpireStopStatisticsDTO>\\n                <TotalCount>652</TotalCount>\\n                <SingleCardCount>506</SingleCardCount>\\n                <SameFlowCardCount>146</SameFlowCardCount>\\n                <PoolCount>0</PoolCount>\\n            </ExpireStopStatisticsDTO>\\n            <UnbindResumeStatisticsDTO>\\n                <TotalCount>1</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>1</PoolCount>\\n            </UnbindResumeStatisticsDTO>\\n            <UnCertifiedStopStatisticsDTO>\\n                <TotalCount>1</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>1</PoolCount>\\n            </UnCertifiedStopStatisticsDTO>\\n            <RiskWaringStatisticsDTO>\\n                <WarningCount>20</WarningCount>\\n                <StopCount>825</StopCount>\\n                <LeftFlowPercentageWarnCount>15</LeftFlowPercentageWarnCount>\\n                <WaringTotalCount>860</WaringTotalCount>\\n            </RiskWaringStatisticsDTO>\\n            <ManageStopStatisticsDTO>\\n                <TotalCount>150</TotalCount>\\n                <SingleCardCount>57</SingleCardCount>\\n                <SameFlowCardCount>31</SameFlowCardCount>\\n                <PoolCount>62</PoolCount>\\n            </ManageStopStatisticsDTO>\\n        </Data>\\n        <ErrorMessage/>\\n        <Code/>\\n        <Success>true</Success>\\n        <LocalizedMessage/>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>DCBDCDBC-0E54-53AC-97A4-6194849CC6BC</requestId>\\n    <successResponse>true</successResponse>\\n</GetCardStatusStatisticsResponse>","errorExample":""}]',
      'title' => '概览页风险告警',
      'summary' => '概览页风险告警',
    ),
    'GetCardRealStatus' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => false,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'Msisdn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的MSISDN。',
            'type' => 'string',
            'required' => false,
            'example' => '144******1111',
          ),
        ),
        2 => 
        array (
          'name' => 'SerialNo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '轮询查询结果的唯一标识。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轮询查询结果的唯一标识。

说明：

1、因该接口运营商能力较弱，查询结果需时，故结合轮询能力使用。

2、在首次请求后，如Status未成功，则返回参数中会带此数据，再用此数据进行结果轮询。',
              'type' => 'string',
              'required' => false,
              'example' => '4f84******7895',
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
            'title' => 'GetCardRealStatusResponse',
            'description' => 'GetCardRealStatusResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。

true：调用成功。 false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：表示成功。 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SerialNo' => 
                    array (
                      'description' => '轮询查询结果的唯一标识。

说明：

1、因该接口运营商能力较弱，查询结果需时，故结合轮询能力使用。

2、在首次请求后，如Status未成功，则返回参数中会带此数据，再用此数据进行结果轮询。',
                      'type' => 'string',
                      'example' => '4f84******7895',
                    ),
                    'Iccid' => 
                    array (
                      'description' => '卡的ICCID，当请求ICCID为多网卡主卡时，此处返回子卡ICCID。',
                      'type' => 'string',
                      'example' => '89860321******15668',
                    ),
                    'Gprs' => 
                    array (
                      'description' => '网络服务状态。

true：开通。

false：关闭。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Online' => 
                    array (
                      'description' => '在线状态。

true：在线。

false：不在线。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Status' => 
                    array (
                      'description' => '查询结果状态： 

SUCCESS：成功

FAILURE：失败

PROCESSING' . "\0" . '：处理中',
                      'type' => 'string',
                      'example' => 'SUCCESS',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.BusinessProcessError',
            'errorMessage' => 'A business processing exception occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": [\\n    {\\n      \\"SerialNo\\": \\"4f84******7895\\",\\n      \\"Iccid\\": \\"89860321******15668\\",\\n      \\"Gprs\\": true,\\n      \\"Online\\": true,\\n      \\"Status\\": \\"SUCCESS\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetCardRealStatusResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <SerialNo>4f84b7a5-90******07895</SerialNo>\\n        <Iccid>89860321******15668</Iccid>\\n        <Gprs>true</Gprs>\\n        <Online>true</Online>\\n        <Status>SUCCESS</Status>\\n    </Data>\\n</GetCardRealStatusResponse>","errorExample":""}]',
      'title' => '智能诊断-查询卡在运营商侧状态',
      'summary' => '智能诊断-查询卡在运营商侧状态',
    ),
    'GetCardLatestFlow' => 
    array (
      'summary' => '该接口用于查询物联网卡的实时周期用量。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'iccid',
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/sim/card)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'example' => '89860321******15668',
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
            'title' => 'GetCardLatestFlowResponse',
            'description' => 'GetCardLatestFlowResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。

true：调用成功。
false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：表示成功。

其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '实时周期用量，带流量单位。',
                'type' => 'string',
                'example' => '1.00MB',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.InvalidAliyunPK',
            'errorMessage' => 'AliyunPk is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.IccidNotExist',
            'errorMessage' => 'IccId does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": \\"1.00MB\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCardLatestFlowResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>1.00MB</Data>\\n</GetCardLatestFlowResponse>","errorExample":""}]',
      'title' => 'GetCardLatestFlow',
    ),
    'AddCardToDirectionalGroup' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IccidList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '卡号的iccid集合，数量小于等于200',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ICCID。',
              'type' => 'string',
              'required' => true,
              'example' => '1111****6225',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '10000002595',
          ),
        ),
        2 => 
        array (
          'name' => 'SerialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求编号，支持幂等。',
            'type' => 'string',
            'required' => true,
            'example' => '123123',
          ),
        ),
        3 => 
        array (
          'name' => 'AddType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加的方式：

NEW：仅导入其中待分组的卡

TRANSFER：全量导入（卡从原分组中删除）',
            'type' => 'string',
            'required' => true,
            'example' => 'NEW',
          ),
        ),
        4 => 
        array (
          'name' => 'MsgNotify',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行成功后是否通过MQ推送，默认false： 

false：不推送 

true： 推送',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ApiProduct',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Linkcard',
            'type' => 'string',
            'required' => false,
            'example' => 'Linkcard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AddCardToDirectionalGroupResponse',
            'description' => 'AddCardToDirectionalGroupResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。

true：调用成功。 false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：调用成功。

其他：调用失败。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '请求结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '执行是否成功。

true：添加成功。

false：添加失败。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'SerialNo' => 
                  array (
                    'description' => '请求编号，幂等序列号',
                    'type' => 'string',
                    'example' => '123213',
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
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The request parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          1 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"Result\\": true,\\n    \\"SerialNo\\": \\"123213\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddCardToDirectionalGroupResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <Result>true</Result>\\n        <SerialNo>123213</SerialNo>\\n    </Data>\\n</AddCardToDirectionalGroupResponse>","errorExample":""}]',
      'title' => '定向分组添加卡片',
      'summary' => '定向分组添加卡片。',
    ),
    'GetRealNameStatus' => 
    array (
      'summary' => '该接口用于查询物联网卡的个人实名状态。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的ICCID。

您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/sim/card)的卡管理页面查看ICCID。',
            'type' => 'string',
            'required' => true,
            'example' => '89860321******15668',
          ),
        ),
        1 => 
        array (
          'name' => 'ListMsisdns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '多网卡子卡MSISDN。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网卡的MSISDN。',
              'type' => 'string',
              'required' => false,
              'example' => '144******1111',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'GetRealNameStatusResponse',
            'description' => 'GetRealNameStatusResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。

true：调用成功。
false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：表示成功。
其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'RealNameStatus' => 
                  array (
                    'description' => '个人实名认证状态。
NOT_CERTIFIED：未认证
APPROVING：认证审核中
CERTIFIED：已认证',
                    'type' => 'string',
                    'example' => 'CERTIFIED',
                  ),
                  'Desc' => 
                  array (
                    'description' => '认证状态描述。',
                    'type' => 'string',
                    'example' => '已认证',
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
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.InvalidAliyunPK',
            'errorMessage' => 'AliyunPk is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'linkcard.check.IccidCanNotEmpty',
            'errorMessage' => 'Iccid cannot be empty.',
          ),
          3 => 
          array (
            'errorCode' => 'linkcard.common.CardDestroy',
            'errorMessage' => 'The card do not exist or destroy.',
          ),
          4 => 
          array (
            'errorCode' => 'linkcard.common.IccidFormatError',
            'errorMessage' => 'Iccid format error.',
          ),
          5 => 
          array (
            'errorCode' => 'linkcard.common.VnoCardNotSupported',
            'errorMessage' => 'This function does not support vno card.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"RealNameStatus\\": \\"CERTIFIED\\",\\n    \\"Desc\\": \\"已认证\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRealNameStatusResponse>\\n    <data>\\n        <realNameStatus>NOT_CERTIFIED</realNameStatus>\\n        <desc>未认证</desc>\\n    </data>\\n    <requestId>D3778AAD-6A0E-16F8-8074-C4AF604E21B3</requestId>\\n    <success>true</success>\\n</GetRealNameStatusResponse>","errorExample":""}]',
      'title' => 'GetRealNameStatus',
    ),
    'SendMessage' => 
    array (
      'summary' => '平台短信下发。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义任务名称，不能包含特殊字符，最长40个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '任务0912',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageTemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模版ID',
            'description' => '短信模版编号，可以在控制台查看。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '14',
          ),
        ),
        2 => 
        array (
          'name' => 'MessageVariableParam',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '请求参数',
            'description' => '动态参数短信，替换的参数，格式{1}{2}',
            'type' => 'string',
            'required' => false,
            'example' => '{参数1}{参数2}{参数3}',
          ),
        ),
        3 => 
        array (
          'name' => 'MessageSendTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '单位:s',
            'description' => '时间戳，单位：秒 。

当时间早于当前时间则立即发送，晚于当前时间为定时发送。

最晚不能超过一个月。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1694401634',
          ),
        ),
        4 => 
        array (
          'name' => 'Msisdns',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '发送短信的目标MSISDN列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '发送短信的目标MSISDN',
              'type' => 'string',
              'required' => false,
              'example' => '1411234123412',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'ApiProduct',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Linkcard',
            'type' => 'string',
            'required' => false,
            'example' => 'Linkcard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SendMessageResponse',
            'description' => 'SendMessageResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
              ),
              'Success' => 
              array (
                'title' => '必填',
                'description' => '是否调用成功。

true：调用成功。 false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。

200：调用成功。

其他：调用失败。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '	
调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'LocalizedMessage' => 
              array (
                'description' => '根据当前所在地展示对应语言的错误提示。',
                'type' => 'string',
                'example' => 'InstanceId cannot be empty.',
              ),
              'DynamicCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'InvokeError',
              ),
              'DynamicMessage' => 
              array (
                'description' => '错误码信息',
                'type' => 'string',
                'example' => '入参不能为空，或不能包含空格',
              ),
              'Data' => 
              array (
                'description' => '地址是否添加成功。

true：添加成功。

false：添加失败。',
                'type' => 'integer',
                'format' => 'int64',
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
            'errorCode' => 'linkcard.common.InvalidAliyunPK',
            'errorMessage' => 'AliyunPk is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.IllegalRequest',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'linkcard.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => '%s.',
            'errorMessage' => '%s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'linkcard.system.RPCInvokeError',
            'errorMessage' => 'An RPC invoking error occurred',
          ),
          2 => 
          array (
            'errorCode' => '%s..',
            'errorMessage' => '%s..',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"DynamicCode\\": \\"InvokeError\\",\\n  \\"DynamicMessage\\": \\"入参不能为空，或不能包含空格\\",\\n  \\"Data\\": 0\\n}","errorExample":""},{"type":"xml","example":"<SendMessageResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n</SendMessageResponse>","errorExample":""}]',
      'title' => 'SendMessage',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'linkcard.aliyuncs.com',
    ),
  ),
);
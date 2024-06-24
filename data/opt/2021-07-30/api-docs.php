<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'opt',
    'version' => '2021-07-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 74350,
      'title' => '服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetOpenStatus',
      ),
    ),
    1 => 
    array (
      'id' => 74352,
      'title' => 'License',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetOrderInfo',
        1 => 'GetOrderUsage',
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
    'GetOpenStatus' => 
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
                'description' => '结果状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '详细数据，mpStatus：数学规划服务开通状态，1开通，0未开通；pk：云账号id；parentPk：父账号id。',
                'type' => 'object',
                'example' => '{"gmtModified":"2021-07-27T04:00:00.000+00:00","mpStatus":1,"id":11,"pk":"1084126944995576","gmtCreate":"2021-07-27T04:00:00.000+00:00","parentPk":"1084126944995576"}',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '0EB-FCAC-1B78-BBB8-500ED951E9EB',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'LicenseKeyInvaild',
            'errorMessage' => 'The license key format is invalid, or the license key does not belong to the user.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Unauthorized',
            'errorMessage' => 'The user has not passed RAM verification and is not authorized to perform the operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrencyOverLimit',
            'errorMessage' => 'The concurrency exceeds the upper limit allowed by the license key.',
          ),
        ),
        410 => 
        array (
          0 => 
          array (
            'errorCode' => 'LicenseKeyExpired',
            'errorMessage' => 'LicenseKey has expired.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"gmtModified\\": \\"2021-07-27T04:00:00.000+00:00\\",\\n    \\"mpStatus\\": 1,\\n    \\"id\\": 11,\\n    \\"pk\\": \\"1084126944995576\\",\\n    \\"gmtCreate\\": \\"2021-07-27T04:00:00.000+00:00\\",\\n    \\"parentPk\\": \\"1084126944995576\\"\\n  },\\n  \\"RequestId\\": \\"0EB-FCAC-1B78-BBB8-500ED951E9EB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOpenStatusResponse>\\n    <Message>Success</Message>\\n    <RequestId>D66E40EB-FCAC-1B78-BBB8-500ED951E9EB</RequestId>\\n    <Data>\\n        <gmtModified>2021-07-27T04:00:00.000+00:00</gmtModified>\\n        <mpStatus>1</mpStatus>\\n        <id>11</id>\\n        <pk>1084126944995576</pk>\\n        <gmtCreate>2021-07-27T04:00:00.000+00:00</gmtCreate>\\n        <parentPk>1084126944995576</parentPk>\\n    </Data>\\n    <Code>0</Code>\\n    <Success>true</Success>\\n</GetOpenStatusResponse>","errorExample":""}]',
      'title' => '获取所有服务的开通状态',
      'summary' => '获取优化求解器内所有服务的开通状态，目前包含数学规划服务。',
    ),
    'GetOrderInfo' => 
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
          'name' => 'RelService',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定购买的优化求解器License类别信息，包含一种类别：

- `MP`：数学规划',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MP',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定购买的求解器版本信息，目前仅支持一种：

- `1`：本地运行版',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '1',
            'minimum' => '1',
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ListReleased',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否包含已释放的实例',
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
              'Code' => 
              array (
                'description' => '返回结果码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回结果信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回业务数据，licenseKey：授权证书key；currentConcurrency：并发度；instanceId：实例id；totalDays：总购买天数；currentDays：当前剩余天数。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'currentConcurrency' => 
                    array (
                      'description' => '并发度',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'totalDays' => 
                    array (
                      'description' => '总购买天数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'currentDays' => 
                    array (
                      'description' => '当前剩余天数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'licenseKey' => 
                    array (
                      'description' => '授权证书key',
                      'type' => 'string',
                      'example' => 'xxxxxxxx',
                    ),
                    'instanceId' => 
                    array (
                      'description' => '实例id',
                      'type' => 'string',
                      'example' => 'opt_mplicense_public_cn-xxxxxx',
                    ),
                    'bizType' => 
                    array (
                      'description' => '商品类型',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'remark' => 
                    array (
                      'description' => '实例备注',
                      'type' => 'string',
                      'example' => 'remark',
                    ),
                  ),
                ),
                'example' => '{"licenseKey":"eems7ri3b1u5nui*****","currentConcurrency":2,"instanceId":"opt_mplicense_public_cn-****","totalDays":124,"currentDays":103}',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'LicenseKeyInvaild',
            'errorMessage' => 'The license key format is invalid, or the license key does not belong to the user.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Unauthorized',
            'errorMessage' => 'The user has not passed RAM verification and is not authorized to perform the operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrencyOverLimit',
            'errorMessage' => 'The concurrency exceeds the upper limit allowed by the license key.',
          ),
        ),
        410 => 
        array (
          0 => 
          array (
            'errorCode' => 'LicenseKeyExpired',
            'errorMessage' => 'LicenseKey has expired.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": [\\n    {\\n      \\"currentConcurrency\\": 1,\\n      \\"totalDays\\": 10,\\n      \\"currentDays\\": 1,\\n      \\"licenseKey\\": \\"xxxxxxxx\\",\\n      \\"instanceId\\": \\"opt_mplicense_public_cn-xxxxxx\\",\\n      \\"bizType\\": \\"0\\",\\n      \\"remark\\": \\"remark\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOrderInfoResponse>\\n    <Message>Success</Message>\\n    <RequestId>3FCE6765-742C-1CE7-A44B-83D35C07F286</RequestId>\\n    <Data>\\n        <licenseKey>eems7ri3b1u5nuil***</licenseKey>\\n        <currentConcurrency>2</currentConcurrency>\\n        <instanceId>opt_mplicense_public_cn-****</instanceId>\\n        <totalDays>124</totalDays>\\n        <currentDays>103</currentDays>\\n    </Data>\\n    <Code>0</Code>\\n    <Success>true</Success>\\n</GetOrderInfoResponse>","errorExample":""}]',
      'title' => '查询购买License的信息',
      'summary' => '获取购买License的信息。',
    ),
    'GetOrderUsage' => 
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
          'name' => 'RelService',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定购买的优化求解器License类别信息，包含一种类别：

- `MP`：数学规划',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MP',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定购买的求解器版本信息，目前仅支持一种：

- `1`：本地运行版',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '1',
            'minimum' => '1',
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'LicenseKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '求解器LicenseKey',
            'type' => 'string',
            'required' => true,
            'example' => 'eya5169y2bg96zef03s7',
          ),
        ),
        3 => 
        array (
          'name' => 'TimeRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '* `1`：前后一天
* `2`：前后一周
* `3`：前后一月',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'Message' => 
              array (
                'description' => '返回结果信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回使用量数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据项，其中具体字段含义如下：

- `dateTime`：对应时间
- `actualConcurrency`: 实际并发
- `maxConcurrency`: 最大并发',
                  'type' => 'object',
                  'example' => '[{"dateTime":"2021-08-17 15:00:00","actualConcurrency":0,"maxConcurrency":2},{"dateTime":"2021-08-17 16:00:00","actualConcurrency":0,"maxConcurrency":2},{"dateTime":"2021-08-17 17:00:00","actualConcurrency":0,"maxConcurrency":2}]',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'LicenseKeyInvaild',
            'errorMessage' => 'The license key format is invalid, or the license key does not belong to the user.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Unauthorized',
            'errorMessage' => 'The user has not passed RAM verification and is not authorized to perform the operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrencyOverLimit',
            'errorMessage' => 'The concurrency exceeds the upper limit allowed by the license key.',
          ),
        ),
        410 => 
        array (
          0 => 
          array (
            'errorCode' => 'LicenseKeyExpired',
            'errorMessage' => 'LicenseKey has expired.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": [\\n    [\\n      {\\n        \\"dateTime\\": \\"2021-08-17 15:00:00\\",\\n        \\"actualConcurrency\\": 0,\\n        \\"maxConcurrency\\": 2\\n      },\\n      {\\n        \\"dateTime\\": \\"2021-08-17 16:00:00\\",\\n        \\"actualConcurrency\\": 0,\\n        \\"maxConcurrency\\": 2\\n      },\\n      {\\n        \\"dateTime\\": \\"2021-08-17 17:00:00\\",\\n        \\"actualConcurrency\\": 0,\\n        \\"maxConcurrency\\": 2\\n      }\\n    ]\\n  ],\\n  \\"RequestId\\": \\"5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOrderUsageResponse>\\n    <Message>Success</Message>\\n    <RequestId>B26B09CF-8F7F-1E6D-8E21-CD37A1BB32DB</RequestId>\\n    <Data>\\n        <dateTime>2021-08-17 15:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 16:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 17:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 18:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 19:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 20:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 21:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 22:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 23:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 00:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 01:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 02:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 03:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 04:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 05:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 06:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 07:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 08:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 09:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 10:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 11:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 12:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 13:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 14:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 15:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 16:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 17:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 18:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 19:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 20:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 21:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 22:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 23:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 00:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 01:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 02:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 03:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 04:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 05:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 06:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 07:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 08:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 09:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 10:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 11:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 12:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 13:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 14:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 15:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Success>true</Success>\\n</GetOrderUsageResponse>","errorExample":""}]',
      'title' => '查询License使用情况',
      'summary' => '获取License使用量。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'opt.cn-beijing.aliyuncs.com',
    ),
  ),
);
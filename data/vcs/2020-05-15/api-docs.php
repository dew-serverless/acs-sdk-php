<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Vcs',
    'version' => '2020-05-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 128854,
      'title' => '设备管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListAlgorithmNamesByDeviceIds',
      ),
    ),
    1 => 
    array (
      'id' => 128893,
      'title' => '人员档案',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteProfileCatalog',
      ),
    ),
    2 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddAiotPersonTableItem',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'AiotDevice' => 
      array (
        'title' => 'AiotDeviceStruct',
        'description' => 'Aiot设备',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'IPAddr' => 
          array (
            'title' => 'ip地址',
            'type' => 'string',
          ),
          'Port' => 
          array (
            'title' => '端口',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Longitude' => 
          array (
            'title' => '经度',
            'type' => 'number',
            'format' => 'float',
          ),
          'Latitude' => 
          array (
            'title' => '纬度',
            'type' => 'number',
            'format' => 'float',
          ),
          'Place' => 
          array (
            'title' => '安装位置',
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'ListAlgorithmNamesByDeviceIds' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GbIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备ID集合，多个的话以逗号分隔，最大支持200个',
            'description' => '设备国标编码。',
            'type' => 'string',
            'required' => true,
            'example' => '1101050001132700****,1101050001132701****',
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
                'title' => '返回结果编码  200：获取成功  Failed：获取失败  Retry：按需拉流模式，正在建立取流连接，请稍后重试',
                'description' => '返回编码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '返回结果消息',
                'description' => '返回消息。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备国标编码与对应算法名称对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GbId' => 
                    array (
                      'title' => '设备ID',
                      'description' => '设备国标编码。',
                      'type' => 'string',
                      'example' => '1101050001132700****',
                    ),
                    'AlgorithmNames' => 
                    array (
                      'title' => '设备ID对应呗计算的算法名称集合',
                      'description' => '算法名称集合',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '算法名称',
                        'type' => 'string',
                        'example' => '安全帽算法',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"GbId\\": \\"1101050001132700****\\",\\n      \\"AlgorithmNames\\": [\\n        \\"安全帽算法\\"\\n      ]\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAlgorithmNamesByDeviceIdsResponse>\\n    <RequestId>46329898-489C-4E63-9BA1-C1DA5C5D0986</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <GbId>1101050001132700****</GbId>\\n        <AlgorithmNames>安全帽算法</AlgorithmNames>\\n    </Data>\\n    <Code>200</Code>\\n    <Message>Success</Message>\\n</ListAlgorithmNamesByDeviceIdsResponse>","errorExample":""}]',
      'title' => '按设备ID获取算法名称列表',
      'summary' => '查询设备被哪些算法计算，可支持单个设备或者批量设备。',
    ),
    'DeleteProfileCatalog' => 
    array (
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
      'operationType' => 'readAndWrite',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CorpId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区域id',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '区域id',
          ),
        ),
        1 => 
        array (
          'name' => 'IsvSubId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区域中对人员数据隔离',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '区域中对人员数据隔离',
          ),
        ),
        2 => 
        array (
          'name' => 'CatalogId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人员分组id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Code' => 
              array (
                'description' => '响应code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Data' => 
              array (
                'description' => '响应数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求流水号，用于链路追踪',
                'type' => 'string',
                'example' => 'XXXX-22222',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidCorpId',
            'errorMessage' => 'The specified CorpId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"XXXX-22222\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX-22222</RequestId>\\n<Message>SUCCESS</Message>\\n<Data>true</Data>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '删除人员分组',
      'summary' => '创建一个删除人员分组实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddAiotPersonTableItem' => 
    array (
      'summary' => 'AddAiotPersonTableItem',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PersonTableId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PersonTableItem',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PersonTableId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'PersonId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'LastChange' => 
              array (
                'type' => 'string',
              ),
              'PersonCode' => 
              array (
                'type' => 'string',
              ),
              'PersonName' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'Remarks' => 
              array (
                'type' => 'string',
              ),
              'TimeTemplateNum' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'IdentificationNum' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'IdentificationList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Number' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'ImageNum' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'ImageList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ImageId' => 
                    array (
                      'type' => 'string',
                    ),
                    'EventSort' => 
                    array (
                      'type' => 'string',
                    ),
                    'DeviceId' => 
                    array (
                      'type' => 'string',
                    ),
                    'StoragePath' => 
                    array (
                      'type' => 'string',
                    ),
                    'Size' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Type' => 
                    array (
                      'type' => 'string',
                    ),
                    'FileFormat' => 
                    array (
                      'type' => 'string',
                    ),
                    'ShotTime' => 
                    array (
                      'type' => 'string',
                    ),
                    'Width' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Height' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Data' => 
                    array (
                      'type' => 'string',
                    ),
                    'FeatureInfo' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Vendor' => 
                        array (
                          'type' => 'string',
                        ),
                        'AlgorithmVersion' => 
                        array (
                          'type' => 'string',
                        ),
                        'AlgorithmType' => 
                        array (
                          'type' => 'string',
                        ),
                        'TabId' => 
                        array (
                          'type' => 'string',
                        ),
                        'OjectId' => 
                        array (
                          'type' => 'string',
                        ),
                        'ImageId' => 
                        array (
                          'type' => 'string',
                        ),
                        'FeatureData' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'PersonTableItemId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'vcs.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'vcs.cn-shanghai.aliyuncs.com',
    ),
  ),
);
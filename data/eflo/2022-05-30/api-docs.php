<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'eflo',
    'version' => '2022-05-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 178077,
      'title' => '灵骏网段',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateVpd',
        1 => 'DeleteVpd',
        2 => 'UpdateVpd',
        3 => 'GetVpd',
        4 => 'ListVpds',
        5 => 'AssociateVpdCidrBlock',
        6 => 'UnAssociateVpdCidrBlock',
        7 => 
        array (
          'id' => 182540,
          'title' => '跨账号授权',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateVpdGrantRule',
            1 => 'DeleteVpdGrantRule',
            2 => 'GetVpdGrantRule',
            3 => 'ListVpdGrantRules',
          ),
        ),
        8 => 
        array (
          'id' => 182541,
          'title' => '路由条目',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetVpdRouteEntry',
            1 => 'ListVpdRouteEntries',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 178076,
      'title' => '灵骏子网',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSubnet',
        1 => 'DeleteSubnet',
        2 => 'GetSubnet',
        3 => 'UpdateSubnet',
        4 => 'ListSubnets',
      ),
    ),
    2 => 
    array (
      'id' => 178075,
      'title' => '灵骏连接',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InitializeVcc',
        1 => 'DescribeSlr',
        2 => 'CreateVcc',
        3 => 'UpdateVcc',
        4 => 'GetVcc',
        5 => 'ListVccs',
        6 => 
        array (
          'id' => 182543,
          'title' => '跨账号授权',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateVccGrantRule',
            1 => 'DeleteVccGrantRule',
            2 => 'GetVccGrantRule',
            3 => 'ListVccGrantRules',
          ),
        ),
        7 => 
        array (
          'id' => 182544,
          'title' => '路由条目',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateVccRouteEntry',
            1 => 'DeleteVccRouteEntry',
            2 => 'GetVccRouteEntry',
            3 => 'ListVccRouteEntries',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 185585,
      'title' => '灵骏弹性网卡',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateElasticNetworkInterface',
        1 => 'DeleteElasticNetworkInterface',
        2 => 'GetElasticNetworkInterface',
        3 => 'ListElasticNetworkInterfaces',
        4 => 'UpdateElasticNetworkInterface',
        5 => 'AssignLeniPrivateIpAddress',
        6 => 'UnassignLeniPrivateIpAddress',
        7 => 'GetLeniPrivateIpAddress',
        8 => 'UpdateLeniPrivateIpAddress',
        9 => 'ListLeniPrivateIpAddresses',
      ),
    ),
    4 => 
    array (
      'id' => 179273,
      'title' => '灵骏网卡',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetNetworkInterface',
        1 => 'ListNetworkInterfaces',
        2 => 'ListLniPrivateIpAddress',
        3 => 'AssignPrivateIpAddress',
        4 => 'UnAssignPrivateIpAddress',
        5 => 'GetLniPrivateIpAddress',
      ),
    ),
    5 => 
    array (
      'id' => 180428,
      'title' => '灵骏HUB',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 180429,
          'title' => '实例管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateEr',
            1 => 'DeleteEr',
            2 => 'GetEr',
            3 => 'ListErs',
            4 => 'UpdateEr',
          ),
        ),
        1 => 
        array (
          'id' => 180925,
          'title' => '网络实例连接',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateErAttachment',
            1 => 'DeleteErAttachment',
            2 => 'UpdateErAttachment',
            3 => 'GetErAttachment',
            4 => 'ListErAttachments',
          ),
        ),
        2 => 
        array (
          'id' => 180932,
          'title' => '路由策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateErRouteMap',
            1 => 'ListErRouteMaps',
            2 => 'GetErRouteMap',
            3 => 'DeleteErRouteMap',
            4 => 'CreateErRouteMap',
          ),
        ),
        3 => 
        array (
          'id' => 180938,
          'title' => '路由条目',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetErRouteEntry',
            1 => 'ListErRouteEntries',
          ),
        ),
      ),
    ),
    6 => 
    array (
      'id' => 184612,
      'title' => '网络通信距离',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListInstancesByNcd',
        1 => 'QueryInstanceNcd',
        2 => 'GetFabricTopology',
      ),
    ),
    7 => 
    array (
      'id' => 187827,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetNodeInfoForPod',
        1 => 'ListNodeInfosForPod',
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
    'CreateVpd' => 
    array (
      'summary' => '创建用户私有的灵骏网段，该网段拥有独立的网络环境。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段名称',
            'description' => '灵骏网段实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-1',
          ),
        ),
        2 => 
        array (
          'name' => 'Cidr',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网段',
            'description' => 'VPD的网段。
- 建议您使用RFC私网地址作为灵骏网段的网段如10.0.0.0/8，172.16.0.0/12，192.168.0.0/16，多灵骏网段互通场景或灵骏网段和VPC互通场景需确保地址规划不能冲突。
- 您也可以使用除 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 及其子网外的自定义地址段作为VPD的主IPv4网段。',
            'type' => 'string',
            'required' => true,
            'example' => '10.0.0.0/8',
          ),
        ),
        3 => 
        array (
          'name' => 'Subnets',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '灵骏子网信息列表',
            'description' => '灵骏子网信息列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '灵骏子网信息',
              'type' => 'object',
              'properties' => 
              array (
                'SubnetName' => 
                array (
                  'title' => '灵骏子网名称',
                  'description' => '灵骏子网实例名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'subnet-1',
                ),
                'RegionId' => 
                array (
                  'title' => '地域ID',
                  'description' => '地域',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-wulanchabu',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区ID',
                  'description' => '可用区',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-wulanchabu-b',
                ),
                'Cidr' => 
                array (
                  'title' => '灵骏子网网段',
                  'description' => 'Subnet的网段。

- 子网的网段必须是其所属灵骏网段的真子集且掩码需在16位到29位之间，可提供 8 ~ 65536 个地址。
例如，灵骏网段的网段为192.168.0.0/16，该灵骏网段下的子网的网段为 192.168.0.0/17 ~ 192.168.0.0/29。
- 每个子网网段的第一个和最后三个IP地址为系统保留地址。
例如，子网的网段为192.168.1.0/24，192.168.1.0、192.168.1.253、192.168.1.254和192.168.1.255这四个IP地址为系统保留地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.1.0.0/16',
                ),
                'Type' => 
                array (
                  'title' => '类型；非必选；通用类型不填；OOB类型填OOB;LB类型填LB',
                  'description' => '灵骏子网使用类型；非必选；可选值：
- **通用类型不填**；
- **OOB**：OOB类型
- **LB**： LB类型',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'OOB',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2l4sq6l7unhi',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签信息',
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。

一次最多支持输入20个标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpd-wulanchabu',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'wulanchabu-a',
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
            'title' => 'AjaxResult<VpdCreateRsp>',
            'description' => 'AjaxResult<VpdCreateRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID',
                'type' => 'string',
                'example' => 'DBAD15D6-3F47-5B36-8A92-57C2919D13D0',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'VpdId' => 
                  array (
                    'title' => '灵骏网段实例ID',
                    'description' => '灵骏网段实例ID',
                    'type' => 'string',
                    'example' => 'vpd-eoiy88ju',
                  ),
                  'SubnetIds' => 
                  array (
                    'title' => '灵骏子网实例ID列表',
                    'description' => '灵骏子网ID列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏子网ID',
                      'type' => 'string',
                      'example' => 'subnet-eoiy88ju',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"DBAD15D6-3F47-5B36-8A92-57C2919D13D0\\",\\n  \\"Content\\": {\\n    \\"VpdId\\": \\"vpd-eoiy88ju\\",\\n    \\"SubnetIds\\": [\\n      \\"subnet-eoiy88ju\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏网段',
      'description' => '调用该接口创建灵骏网段时，请注意：

- 一个灵骏网段除了可以指定一个主网段之外，还可以指定附加网段。
- 灵骏网段创建后将无法修改网段。
- 请确保您有足够的灵骏网段配额。
- 该接口属于异步接口，调用该接口后，系统将返回一个灵骏网段的ID，此时灵骏网段可能尚未创建完成，系统后台的创建任务仍在进行中。您可以通过ListVpds或者GetVpd查询灵骏网段的状态：
    - 当灵骏网段状态是Executing时，表示正在创建。
    - 当灵骏网段状态是Available时，表示创建成功。',
    ),
    'DeleteVpd' => 
    array (
      'summary' => '删除某个灵骏网段实例，删除后相关数据丢失且不可恢复。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '灵骏网段实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-zr0farea',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<Object>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'BDBCC783-84CA-5733-8EEA-645C88B9009C',
              ),
              'Content' => 
              array (
                'description' => '响应内容。（当存在依赖资源时，会返回存在的依赖资源）',
                'type' => 'any',
                'example' => '{
      "subnet": [
            {
                  "tenantId": "1620939556166277",
                  "regionId": "cn-wulanchabu",
                  "zoneId": "cn",
                  "type": null,
                  "subnetId": "subnet-zqebaxa0",
                  "name": "lql_testVPD"
            }
      ],
      "nc": [
            {}
      ]
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"BDBCC783-84CA-5733-8EEA-645C88B9009C\\",\\n  \\"Content\\": \\"{\\\\n      \\\\\\"subnet\\\\\\": [\\\\n            {\\\\n                  \\\\\\"tenantId\\\\\\": \\\\\\"1620939556166277\\\\\\",\\\\n                  \\\\\\"regionId\\\\\\": \\\\\\"cn-wulanchabu\\\\\\",\\\\n                  \\\\\\"zoneId\\\\\\": \\\\\\"cn\\\\\\",\\\\n                  \\\\\\"type\\\\\\": null,\\\\n                  \\\\\\"subnetId\\\\\\": \\\\\\"subnet-zqebaxa0\\\\\\",\\\\n                  \\\\\\"name\\\\\\": \\\\\\"lql_testVPD\\\\\\"\\\\n            }\\\\n      ],\\\\n      \\\\\\"nc\\\\\\": [\\\\n            {}\\\\n      ]\\\\n}\\"\\n}","type":"json"}]',
      'title' => '删除灵骏网段',
      'description' => '调用该接口删除灵骏网段时，请注意：

- 删除后，相关数据全部丢失且不可恢复，请谨慎操作。
- 删除前，请确保已经删除了该灵骏网段实例下的所有灵骏子网实例。
- 该接口属于异步接口，调用该接口后，灵骏网段实例可能尚未删除完成，系统后台的删除任务仍在进行中。您可以调用ListVpds或GetVpd查询灵骏网段的删除状态：
    - 当灵骏网段实例的状态是Deleting时，表示灵骏网段实例正在删除中。
    - 当没有该灵骏网段实例记录时，表示灵骏网段实例已经删除完成。',
    ),
    'UpdateVpd' => 
    array (
      'summary' => '更新灵骏网段实例的部分信息，包括灵骏网段实例的名称。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '灵骏网段（VPD）实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-omqutbff',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例名称',
            'description' => '灵骏网段（VPD）实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-lingjun',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<VpdUpdateRsp>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpdId' => 
                  array (
                    'title' => '灵骏网段实例ID',
                    'description' => '灵骏网段（VPD）实例ID。',
                    'type' => 'string',
                    'example' => 'vpd-lg4dppgi',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"VpdId\\": \\"vpd-lg4dppgi\\"\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏网段',
    ),
    'GetVpd' => 
    array (
      'summary' => '查询某个灵骏网段的详细信息，包括灵骏网段状态，Cidr地址，服务网段，Subnet及NC的数量等。',
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
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '灵骏网段（VPD）实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-ze3na***',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<VpdGetRsp>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'VpdId' => 
                  array (
                    'title' => '灵骏网段实例ID',
                    'description' => '灵骏网段（VPD）实例ID。',
                    'type' => 'string',
                    'example' => 'vpd-fulie***',
                  ),
                  'VpdName' => 
                  array (
                    'title' => '灵骏网段实例名称',
                    'description' => '灵骏网段实例名称。',
                    'type' => 'string',
                    'example' => 'vpd-1',
                  ),
                  'Cidr' => 
                  array (
                    'title' => '网络地址段',
                    'description' => '网络地址段。',
                    'type' => 'string',
                    'example' => '10.0.0.0/8',
                  ),
                  'ServiceCidr' => 
                  array (
                    'title' => '内部Service网段',
                    'description' => '内部Service网段。',
                    'type' => 'string',
                    'example' => '169.254.252.0/23',
                  ),
                  'Status' => 
                  array (
                    'title' => '实例状态',
                    'description' => '实例状态。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Not Available：不可用' => 'Not Available：不可用',
                      'Available：正常 ' => 'Available：正常 ',
                      'Deleting：删除中' => 'Deleting：删除中',
                      'Executing：执行中' => 'Executing：执行中',
                    ),
                    'example' => 'Available',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'type' => 'string',
                    'example' => '可用',
                  ),
                  'NcCount' => 
                  array (
                    'title' => '当前灵骏网段下的服务器数量',
                    'description' => 'NC数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '16',
                  ),
                  'NetworkInterfaceCount' => 
                  array (
                    'title' => '灵骏网卡数量',
                    'description' => '灵骏网卡数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'SubnetCount' => 
                  array (
                    'title' => '灵骏子网个数',
                    'description' => '灵骏子网（Subnet）个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2023-10-25 15:57:16',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '2023-10-25 15:57:16',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID。',
                    'type' => 'string',
                    'example' => '162093***166279',
                  ),
                  'ErInfos' => 
                  array (
                    'title' => '已绑定的ER信息',
                    'description' => '已绑定的灵骏HUB（ER）信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已绑定的灵骏HUB（ER）信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2023-10-25 15:57:16',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2023-10-25 15:57:16',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息。',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'ErId' => 
                        array (
                          'title' => '弹性路由器ID',
                          'description' => '弹性路由器（ER）实例ID。',
                          'type' => 'string',
                          'example' => 'er-a7rqv1rq***',
                        ),
                        'RegionId' => 
                        array (
                          'title' => 'ER地域信息',
                          'description' => '弹性路由器（ER）所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID。',
                          'type' => 'string',
                          'example' => '162093***166279
',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'ErName' => 
                        array (
                          'title' => 'ER实例名称',
                          'description' => '弹性路由器（ER）实例名称',
                          'type' => 'string',
                          'example' => 'er-1',
                        ),
                        'MasterZoneId' => 
                        array (
                          'title' => '主可用区',
                          'description' => '主可用区。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述',
                          'description' => '描述。',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'Connections' => 
                        array (
                          'title' => '连接数',
                          'description' => '连接数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'RouteMaps' => 
                        array (
                          'title' => '路由策略数量',
                          'description' => '路由策略数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'AttachErStatus' => 
                  array (
                    'title' => '是否已绑定灵骏HUB',
                    'description' => '是否已绑定灵骏HUB（ER）。
- **true** :  已绑定ER。
- **false** ：未绑定ER。',
                    'type' => 'boolean',
                    'example' => 'true
',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组ID',
                    'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
                    'type' => 'string',
                    'example' => 'rg-aek2l4sq6l7u***',
                  ),
                  'Tags' => 
                  array (
                    'title' => '标签信息列表',
                    'description' => '标签信息。

一次最多支持输入20个标签信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源标签信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'title' => '标签建',
                          'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                          'type' => 'string',
                          'example' => 'tag-subent-region',
                        ),
                        'TagValue' => 
                        array (
                          'title' => '标签值',
                          'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                      ),
                    ),
                  ),
                  'Quota' => 
                  array (
                    'title' => '总配额信息',
                    'description' => '总配额信息。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PrivateIpCount' => 
                  array (
                    'title' => '辅助私网IP总数',
                    'description' => '辅助私网IP总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'SecondaryCidrBlocks' => 
                  array (
                    'title' => '附加网段信息',
                    'description' => '附加网段信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '附加网段信息。',
                      'type' => 'string',
                      'example' => '10.0.0.0/8
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"VpdId\\": \\"vpd-fulie***\\",\\n    \\"VpdName\\": \\"vpd-1\\",\\n    \\"Cidr\\": \\"10.0.0.0/8\\",\\n    \\"ServiceCidr\\": \\"169.254.252.0/23\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"Message\\": \\"可用\\",\\n    \\"NcCount\\": 16,\\n    \\"NetworkInterfaceCount\\": 1,\\n    \\"SubnetCount\\": 1,\\n    \\"CreateTime\\": \\"2023-10-25 15:57:16\\",\\n    \\"GmtModified\\": \\"2023-10-25 15:57:16\\",\\n    \\"TenantId\\": \\"162093***166279\\",\\n    \\"ErInfos\\": [\\n      {\\n        \\"CreateTime\\": \\"2023-10-25 15:57:16\\",\\n        \\"GmtModified\\": \\"2023-10-25 15:57:16\\",\\n        \\"Message\\": \\"success\\",\\n        \\"ErId\\": \\"er-a7rqv1rq***\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"162093***166279\\\\n\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"ErName\\": \\"er-1\\",\\n        \\"MasterZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"Description\\": \\"描述\\",\\n        \\"Connections\\": 2,\\n        \\"RouteMaps\\": 2\\n      }\\n    ],\\n    \\"AttachErStatus\\": true,\\n    \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7u***\\",\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"tag-subent-region\\",\\n        \\"TagValue\\": \\"cn-wulanchabu\\"\\n      }\\n    ],\\n    \\"Quota\\": 10,\\n    \\"PrivateIpCount\\": 10,\\n    \\"SecondaryCidrBlocks\\": [\\n      \\"10.0.0.0/8\\\\n\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网段详情',
    ),
    'ListVpds' => 
    array (
      'summary' => '查询一个或多个灵骏网段的详细信息，包括灵骏网段状态，Cidr地址，服务网段，Subnet等。',
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
          'name' => 'VpdName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例名称',
            'description' => '灵骏网段（VPD）实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-1',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '灵骏网段（VPD）实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-fuliephf',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例状态',
            'description' => '实例状态。可能值：

- **Available**：正常 。
- **Not Available**：不可用。
- **Executing**：执行中。
- **Deleting**：删除中。',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        4 => 
        array (
          'name' => 'WithDependence',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否带依赖资源信息，建议分页查询的时候不查询依赖信息，删出的时候可以单独查询',
            'description' => '是否带依赖资源信息，建议分页查询的时候不查询依赖信息，删除的时候可以单独查询,可能值：

- **true** : 带依赖信息。
- **false** ：不带依赖信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ForSelect',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下拉框使用',
            'description' => '下拉选择时使用，只返回基础信息（包括实例ID、实例名称），可能值：

- **true** ：下拉选择查询使用。
- **false** ：正常查询使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'WithoutVcc',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询没有vcc的vpd信息',
            'description' => '查询未绑定VCC（灵骏连接）的VPD（灵骏网段）信息，可能值：

- **true** : 过滤掉已绑定过VCC的VPD
- **false** ：不过滤已绑定过VCC的VPD',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'FilterErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询没有绑定过的vpd信息',
            'description' => '查询未绑定过指定灵骏HUB的灵骏网段信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkopgtne',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aeky5f3qx6ceapq',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签信息',
            'description' => '标签信息。

一次最多支持输入20个标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-vpd-region',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'wulanchabu',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询。',
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
            'title' => 'AjaxResult<PageResult<VpdQueryRsp>>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '返回数据信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '附加说明信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID。',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'VpdId' => 
                        array (
                          'title' => '灵骏网段实例ID',
                          'description' => '灵骏网段（VPD）实例ID',
                          'type' => 'string',
                          'example' => 'vpd-lg4dppgi',
                        ),
                        'VpdName' => 
                        array (
                          'title' => '灵骏网段名称',
                          'description' => '灵骏网段（VPD）名称。',
                          'type' => 'string',
                          'example' => 'vpd-1',
                        ),
                        'Cidr' => 
                        array (
                          'title' => 'cidr地址',
                          'description' => 'VPD的网段。

- 建议您使用RFC私网地址作为灵骏网段的网段如10.0.0.0/8，172.16.0.0/12，192.168.0.0/16，多灵骏网段互通场景或灵骏网段和VPC互通场景需确保地址规划不能冲突。
- 您也可以使用除 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 及其子网外的自定义地址段作为VPD的主IPv4网段。',
                          'type' => 'string',
                          'example' => '10.0.0.0/8',
                        ),
                        'ServiceCidr' => 
                        array (
                          'title' => '服务网段',
                          'description' => '服务网段。',
                          'type' => 'string',
                          'example' => '169.254.252.0/23',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息。',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'NcCount' => 
                        array (
                          'title' => 'nc数量',
                          'description' => 'nc数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '16',
                        ),
                        'NetworkInterfaceCount' => 
                        array (
                          'title' => '灵骏网卡数量',
                          'description' => '灵骏网卡数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SubnetCount' => 
                        array (
                          'title' => 'subnet数量',
                          'description' => 'Subnet数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'Dependence' => 
                        array (
                          'title' => '依赖项',
                          'description' => '依赖项。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'any',
                            'description' => '依赖信息列表。',
                            'example' => '{
    "subnet": [
        {
            "tenantId": "1620939556166277",
            "regionId": "cn-wulanchabu",
            "zoneId": "cn",
            "type": null,
            "subnetId": "subnet-zqebaxa0",
            "name": "lql_testVPD"
        }
    ],
    "nc": [{}]
}',
                          ),
                        ),
                        'ErInfos' => 
                        array (
                          'title' => '已绑定的灵骏HUB信息列表',
                          'description' => '已绑定的灵骏HUB（ER）信息列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已绑定的灵骏HUB（ER）信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CreateTime' => 
                              array (
                                'title' => '创建时间',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '1678273219000',
                              ),
                              'GmtModified' => 
                              array (
                                'title' => '修改时间',
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '	
1678273219000',
                              ),
                              'Message' => 
                              array (
                                'title' => '提示信息',
                                'description' => '提示信息。',
                                'type' => 'string',
                                'example' => '成功',
                              ),
                              'ErId' => 
                              array (
                                'title' => '弹性路由器ID',
                                'description' => '弹性路由器（ER）实例ID。',
                                'type' => 'string',
                                'example' => 'er-63vzm0fw',
                              ),
                              'RegionId' => 
                              array (
                                'title' => 'ER地域信息',
                                'description' => '地域信息。',
                                'type' => 'string',
                                'example' => 'cn-wulanchabu',
                              ),
                              'TenantId' => 
                              array (
                                'title' => '租户ID',
                                'description' => '租户ID。',
                                'type' => 'string',
                                'example' => '1620939556166277',
                              ),
                              'Status' => 
                              array (
                                'title' => '状态',
                                'description' => '状态。',
                                'type' => 'string',
                                'example' => 'Available',
                              ),
                              'ErName' => 
                              array (
                                'title' => 'ER实例名称',
                                'description' => '灵骏HUB（ER）实例名称。',
                                'type' => 'string',
                                'example' => 'er-1',
                              ),
                              'MasterZoneId' => 
                              array (
                                'title' => '主可用区',
                                'description' => '主可用区。',
                                'type' => 'string',
                                'example' => 'cn-wulanchabu-b',
                              ),
                              'Description' => 
                              array (
                                'title' => '描述',
                                'description' => '描述。',
                                'type' => 'string',
                                'example' => '描述',
                              ),
                              'Connections' => 
                              array (
                                'title' => '连接数',
                                'description' => '连接数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                              'RouteMaps' => 
                              array (
                                'title' => '路由策略数量',
                                'description' => '路由策略数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                            ),
                          ),
                        ),
                        'Tags' => 
                        array (
                          'title' => '标签列表',
                          'description' => '标签信息。

一次最多支持输入20个标签信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagKey' => 
                              array (
                                'title' => '标签建',
                                'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                                'type' => 'string',
                                'example' => 'tag-vpd-region',
                              ),
                              'TagValue' => 
                              array (
                                'title' => '标签值',
                                'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                                'type' => 'string',
                                'example' => 'cn-wulanchabu',
                              ),
                            ),
                          ),
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组ID',
                          'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
                          'type' => 'string',
                          'example' => 'rg-aek2l4sq6l7unhi',
                        ),
                        'SecondaryCidrBlocks' => 
                        array (
                          'description' => '附加网段信息列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'VPD的附加网段。',
                            'type' => 'string',
                            'example' => '10.0.0.0/8',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"VpdId\\": \\"vpd-lg4dppgi\\",\\n        \\"VpdName\\": \\"vpd-1\\",\\n        \\"Cidr\\": \\"10.0.0.0/8\\",\\n        \\"ServiceCidr\\": \\"169.254.252.0/23\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"NcCount\\": 16,\\n        \\"NetworkInterfaceCount\\": 1,\\n        \\"SubnetCount\\": 1,\\n        \\"CreateTime\\": \\"1678273219000\\",\\n        \\"GmtModified\\": \\"1678273219000\\",\\n        \\"Dependence\\": {\\n          \\"key\\": \\"{\\\\n    \\\\\\"subnet\\\\\\": [\\\\n        {\\\\n            \\\\\\"tenantId\\\\\\": \\\\\\"1620939556166277\\\\\\",\\\\n            \\\\\\"regionId\\\\\\": \\\\\\"cn-wulanchabu\\\\\\",\\\\n            \\\\\\"zoneId\\\\\\": \\\\\\"cn\\\\\\",\\\\n            \\\\\\"type\\\\\\": null,\\\\n            \\\\\\"subnetId\\\\\\": \\\\\\"subnet-zqebaxa0\\\\\\",\\\\n            \\\\\\"name\\\\\\": \\\\\\"lql_testVPD\\\\\\"\\\\n        }\\\\n    ],\\\\n    \\\\\\"nc\\\\\\": [{}]\\\\n}\\"\\n        },\\n        \\"ErInfos\\": [\\n          {\\n            \\"CreateTime\\": \\"1678273219000\\",\\n            \\"GmtModified\\": \\"\\\\t\\\\n1678273219000\\",\\n            \\"Message\\": \\"成功\\",\\n            \\"ErId\\": \\"er-63vzm0fw\\",\\n            \\"RegionId\\": \\"cn-wulanchabu\\",\\n            \\"TenantId\\": \\"1620939556166277\\",\\n            \\"Status\\": \\"Available\\",\\n            \\"ErName\\": \\"er-1\\",\\n            \\"MasterZoneId\\": \\"cn-wulanchabu-b\\",\\n            \\"Description\\": \\"描述\\",\\n            \\"Connections\\": 2,\\n            \\"RouteMaps\\": 2\\n          }\\n        ],\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"tag-vpd-region\\",\\n            \\"TagValue\\": \\"cn-wulanchabu\\"\\n          }\\n        ],\\n        \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7unhi\\",\\n        \\"SecondaryCidrBlocks\\": [\\n          \\"10.0.0.0/8\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网段',
    ),
    'AssociateVpdCidrBlock' => 
    array (
      'summary' => '当VPD主网段地址不够分配的时候，可以选择创建额外的附加网段作为VPD主网段的附加网段。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主vpdId',
            'description' => '灵骏网段实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-omqutbff',
          ),
        ),
        2 => 
        array (
          'name' => 'SecondaryCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '附加网段',
            'description' => '附加网段。',
            'type' => 'string',
            'required' => true,
            'example' => '172.16.0.0/12',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<OperateVpdCidrBlockRsp>',
            'description' => 'AjaxResult<OperateVpdCidrBlockRsp>。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpdId' => 
                  array (
                    'description' => '灵骏网段实例ID。',
                    'type' => 'string',
                    'example' => 'vpd-eoiy88ju',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"VpdId\\": \\"vpd-eoiy88ju\\"\\n  }\\n}","type":"json"}]',
      'title' => '申请VPD附加网段',
      'description' => '> **添加附加网段**
> - 不能以0开头，掩码长度有效范围为8~28位。
> - 附加IPv4网段不得与灵骏网段的主IPv4网段及已添加的附加IPv4网段重叠。
> - 不能使用 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 网段作为灵骏网段的网段。举例如下：
在主IPv4网段为 192.168.0.0/16 的灵骏网段中，不能添加以下网段作为附加IPv4网段。
与 192.168.0.0/16 范围相同的网段。
比 192.168.0.0/16 范围更大的网段，例如：192.168.0.0/8。
比 192.168.0.0/16 范围更小的网段，例如：192.168.0.0/24。
> - 默认每个租户每个地域可以创建3个附加网段。',
    ),
    'UnAssociateVpdCidrBlock' => 
    array (
      'summary' => '可通过此功能对VPD的附加网段进行删除。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主vpdId',
            'description' => '灵骏网段实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-aof7dat1',
          ),
        ),
        2 => 
        array (
          'name' => 'SecondaryCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '附加网段',
            'description' => '附加网段。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.0/16',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<OperateVpdCidrBlockRsp>',
            'description' => 'AjaxResult。<OperateVpdCidrBlockRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpdId' => 
                  array (
                    'description' => '灵骏网段实例ID。',
                    'type' => 'string',
                    'example' => 'vpd-ze3na0wf',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"VpdId\\": \\"vpd-ze3na0wf\\"\\n  }\\n}","type":"json"}]',
      'title' => '删除VPD附加网段',
      'description' => '><warning>如果附加网段**有灵骏子网资源**，需要先行**删除依赖资源**之后，方可删除本条附加网段。></warning>',
    ),
    'CreateVpdGrantRule' => 
    array (
      'summary' => '用户可通过此API，将灵骏网段实例对目标账号的灵骏HUB实例授权。授权后，目标账号即可用被授权的灵骏HUB实例关联到您的灵骏网段。',
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
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权网络实例ID',
            'description' => '网络实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-8rgvqazb',
          ),
        ),
        1 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权租户',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => true,
            'example' => '1013666993027780',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GrantResourceToErRsp>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'DBAD15D6-3F47-5B36-8A92-57C2919D13D0',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'GrantRuleId' => 
                  array (
                    'title' => '授权资源主键ID',
                    'description' => '授权资源主键ID',
                    'type' => 'string',
                    'example' => 'grant-rule-hnevjkmw',
                  ),
                ),
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"DBAD15D6-3F47-5B36-8A92-57C2919D13D0\\",\\n  \\"Content\\": {\\n    \\"GrantRuleId\\": \\"grant-rule-hnevjkmw\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏网段跨账号授权信息',
      'description' => '调用该接口创建灵骏HUB跨账号授权时，请注意：

- 请确保您将要授权的对方阿里云归属ID和灵骏HUB实例ID准确无误。
- 如果向对方账号授权，对方账号便可将您的本地网络实例加载到其灵骏HUB中，对方网络将会打通到您的网络，请谨慎操作。',
    ),
    'DeleteVpdGrantRule' => 
    array (
      'summary' => '删除某个灵骏网段的灵骏HUB跨账号授权，删除后相关数据丢失且不可恢复。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GrantRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权资源实例ID',
            'description' => '授权条目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'grant-rule-9rgxqazb',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权那资源实例Id',
            'description' => '网络实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-8rgvqazb',
          ),
        ),
        3 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '被授权租户Id',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '1013666993027780',
          ),
        ),
        4 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB实例ID',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<Object>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '删除灵骏网段跨账号授权信息',
    ),
    'GetVpdGrantRule' => 
    array (
      'summary' => '查询灵骏网段跨账号资源授权详情，包括授权租户ID，灵骏HUB实例ID，网络实例ID等。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID;必选',
            'description' => '地域ID;必选',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GrantRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权资源实例ID',
            'description' => '授权资源实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'grant-rule-xrgvqazb',
          ),
        ),
        2 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB实例Id',
            'description' => '灵骏HUB实例Id',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkopgtne',
          ),
        ),
        3 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权租户ID',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '1620939556166277',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权实例ID',
            'description' => '授权实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-xxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<ResourceGrantRule>',
            'description' => 'AjaxResult<ResourceGrantRule>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'InstanceId' => 
                  array (
                    'title' => '网络实例ID',
                    'description' => '网络实例ID',
                    'type' => 'string',
                    'example' => 'vpd-xxxxxxxxxx',
                  ),
                  'InstanceName' => 
                  array (
                    'title' => '网络实例名称',
                    'description' => '网络实例名称',
                    'type' => 'string',
                    'example' => 'vpd-lingjun',
                  ),
                  'Product' => 
                  array (
                    'title' => '网络产品CODE: VPD、VCC',
                    'description' => '网络产品Code:

- **VPD**：灵骏网段
- **VCC**：灵骏连接',
                    'type' => 'string',
                    'example' => 'VPD',
                  ),
                  'ErId' => 
                  array (
                    'title' => '灵骏HUB实例ID',
                    'description' => '灵骏HUB实例ID',
                    'type' => 'string',
                    'example' => 'er-kkopgtne',
                  ),
                  'GrantTenantId' => 
                  array (
                    'title' => '授权租户ID',
                    'description' => '授权租户ID',
                    'type' => 'string',
                    'example' => '1620939556166277',
                  ),
                  'Used' => 
                  array (
                    'title' => '当前授权信息是否已被使用；默认为false',
                    'description' => '当前授权信息是否已被使用；默认为false',
                    'type' => 'boolean',
                    'example' => '0',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'GrantRuleId' => 
                  array (
                    'title' => '授权资源ID',
                    'description' => '授权资源ID',
                    'type' => 'string',
                    'example' => 'grant-rule-xxxxxx',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"InstanceId\\": \\"vpd-xxxxxxxxxx\\",\\n    \\"InstanceName\\": \\"vpd-lingjun\\",\\n    \\"Product\\": \\"VPD\\",\\n    \\"ErId\\": \\"er-kkopgtne\\",\\n    \\"GrantTenantId\\": \\"1620939556166277\\",\\n    \\"Used\\": true,\\n    \\"CreateTime\\": \\"1648085472000\\",\\n    \\"GrantRuleId\\": \\"grant-rule-xxxxxx\\",\\n    \\"ResourceGroupId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网段跨账号授权信息详情',
    ),
    'ListVpdGrantRules' => 
    array (
      'summary' => '查询一个或多个灵骏网段路由条目的详细信息，包括路由类型，路由条目状态，目的网段，下一条的实例信息等。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID；必选',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB；',
            'description' => '灵骏HUB实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkopgtne',
          ),
        ),
        2 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权租户ID；非必选',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '1620939556166279',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '已授权网络实例ID；非必选',
            'description' => '要查询的网络实例的ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-8rgvqazb',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '已授权网络实例名称；非必选',
            'description' => '实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-1',
          ),
        ),
        5 => 
        array (
          'name' => 'GrantRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权资源ID；非必选',
            'description' => '授权条目ID',
            'type' => 'string',
            'required' => false,
            'example' => 'grant-rule-8rgvqazb',
          ),
        ),
        6 => 
        array (
          'name' => 'ForSelect',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下拉列表查询使用;默认false',
            'description' => '下拉框使用',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询',
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
            'title' => 'AjaxResult<PageResult<ResourceGrantRule>>',
            'description' => 'AjaxResult<PageResult<ResourceGrantRule>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏网段授权信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏网段授权信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'InstanceId' => 
                        array (
                          'title' => '网络实例ID',
                          'description' => '灵骏网段实例ID',
                          'type' => 'string',
                          'example' => 'vpd-8rgvqazb',
                        ),
                        'InstanceName' => 
                        array (
                          'title' => '网络实例名称',
                          'description' => '实例名称',
                          'type' => 'string',
                          'example' => 'vpd-1',
                        ),
                        'Product' => 
                        array (
                          'title' => '网络产品CODE: VPD、VCC',
                          'description' => '授权产品类型。可选值：

- **VPD**：表示灵骏网段VPD实例。
- **VCC**：表示灵骏连接VCC实例。

调用者无需指定。',
                          'type' => 'string',
                          'example' => 'VPD',
                        ),
                        'ErId' => 
                        array (
                          'title' => '灵骏HUB实例ID',
                          'description' => '当前网络示例授权到指定的灵骏HUB示例ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'GrantTenantId' => 
                        array (
                          'title' => '授权租户ID',
                          'description' => '当前实例授权到的租户ID',
                          'type' => 'string',
                          'example' => '1672372231790',
                        ),
                        'Used' => 
                        array (
                          'title' => '当前授权信息是否已被使用；默认为false',
                          'description' => '当前授权实例是否已被绑定',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1643013506000',
                        ),
                        'GrantRuleId' => 
                        array (
                          'title' => '授权资源ID',
                          'description' => '授权条目ID',
                          'type' => 'string',
                          'example' => 'grant-rule-8rgvqazb',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"InstanceId\\": \\"vpd-8rgvqazb\\",\\n        \\"InstanceName\\": \\"vpd-1\\",\\n        \\"Product\\": \\"VPD\\",\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"GrantTenantId\\": \\"1672372231790\\",\\n        \\"Used\\": true,\\n        \\"CreateTime\\": \\"1643013506000\\",\\n        \\"GrantRuleId\\": \\"grant-rule-8rgvqazb\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网段授权信息',
    ),
    'GetVpdRouteEntry' => 
    array (
      'summary' => '查询路由条目。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '入云专线 Id',
            'description' => '灵骏网段实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-iv2zm1qf',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdRouteEntryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由条目Id',
            'description' => '路由条目实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-rte-toekyqel',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetVpdRouteEntryRsp>',
            'description' => 'AjaxResult<GetVpdRouteEntryRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'VpdRouteEntryId' => 
                  array (
                    'title' => '路由条目ID',
                    'description' => '灵骏网段路由条目ID',
                    'type' => 'string',
                    'example' => 'vpd-rte-toekyqel',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户Id',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'VpdId' => 
                  array (
                    'title' => '入云专线 Id',
                    'description' => '灵骏网段实例 ID',
                    'type' => 'string',
                    'example' => 'vpd-ze3na0wf',
                  ),
                  'DestinationCidrBlock' => 
                  array (
                    'title' => '目标网段',
                    'description' => '目标网段',
                    'type' => 'string',
                    'example' => '0.0.0.0/0',
                  ),
                  'NextHopType' => 
                  array (
                    'title' => '下一跳类型',
                    'description' => '下一跳实例类型',
                    'type' => 'string',
                    'example' => 'ER',
                  ),
                  'NextHopId' => 
                  array (
                    'title' => '下一跳实列',
                    'description' => '下一跳实例',
                    'type' => 'string',
                    'example' => 'er-bmlqiym1',
                  ),
                  'RouteType' => 
                  array (
                    'title' => '路由类型',
                    'description' => '路由类型',
                    'type' => 'string',
                    'example' => 'BGP',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '1678273219000',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"VpdRouteEntryId\\": \\"vpd-rte-toekyqel\\",\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"VpdId\\": \\"vpd-ze3na0wf\\",\\n    \\"DestinationCidrBlock\\": \\"0.0.0.0/0\\",\\n    \\"NextHopType\\": \\"ER\\",\\n    \\"NextHopId\\": \\"er-bmlqiym1\\",\\n    \\"RouteType\\": \\"BGP\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"GmtModified\\": \\"1678273219000\\",\\n    \\"ResourceGroupId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网段路由条目详情',
    ),
    'ListVpdRouteEntries' => 
    array (
      'summary' => '查询灵骏网段路由条目。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '灵骏网段实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-fuliephf',
          ),
        ),
        2 => 
        array (
          'name' => 'NextHopType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一跳类型(vpd...)(可填)',
            'description' => '下一跳实例类型',
            'type' => 'string',
            'required' => false,
            'example' => 'VCC',
          ),
        ),
        3 => 
        array (
          'name' => 'NextHopId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一跳实例',
            'description' => '下一跳实例',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-209300qha01',
          ),
        ),
        4 => 
        array (
          'name' => 'RouteType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由类型',
            'description' => '路由类型',
            'type' => 'string',
            'required' => false,
            'example' => 'BGP',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目标网段',
            'description' => '目标网段',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        7 => 
        array (
          'name' => 'VpdRouteEntryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由条目Id',
            'description' => '灵骏网段路由条目实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-rte-4r1zbhoh',
          ),
        ),
        8 => 
        array (
          'name' => 'IgnoreDetailedRouteEntry',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '过滤32明细网段 默认为True',
            'description' => '过滤32明细网段。默认为true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页返回值的个数。默认值：20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询，可选值：

- **true**  ：开启分页查询
- **false** ：不开启分页查询',
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
            'title' => 'AjaxResult<PageResult<ListVpdRouteEntryRsp>>',
            'description' => 'AjaxResult<PageResult<ListVpdRouteEntryRsp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '039C3C3A-3C37-5672-80D5-D8CD48C676D1',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏网段路由条目列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏网段路由条目',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpdId' => 
                        array (
                          'title' => '灵骏网段实例ID',
                          'description' => '灵骏网段实例ID',
                          'type' => 'string',
                          'example' => 'vpd-eoiy88ju',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'ResourceTenantId' => 
                        array (
                          'title' => '资源所属租户ID',
                          'description' => '资源所属租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域',
                          'description' => '地域',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'VpdRouteEntryId' => 
                        array (
                          'title' => '路由条目ID',
                          'description' => '路由条目ID',
                          'type' => 'string',
                          'example' => 'vpd-rte-toekyqel',
                        ),
                        'DestinationCidrBlock' => 
                        array (
                          'title' => '目标网段',
                          'description' => '目标网段',
                          'type' => 'string',
                          'example' => '0.0.0.0/0',
                        ),
                        'NextHopType' => 
                        array (
                          'title' => '下一跳类型',
                          'description' => '下一跳实例类型',
                          'type' => 'string',
                          'example' => 'ER',
                        ),
                        'NextHopId' => 
                        array (
                          'title' => '下一跳实列',
                          'description' => '下一跳实例',
                          'type' => 'string',
                          'example' => 'er-bmlqiym1',
                        ),
                        'RouteType' => 
                        array (
                          'title' => '路由类型',
                          'description' => '路由类型',
                          'type' => 'string',
                          'example' => 'BGP',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"039C3C3A-3C37-5672-80D5-D8CD48C676D1\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"VpdId\\": \\"vpd-eoiy88ju\\",\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"ResourceTenantId\\": \\"1655449505171\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"VpdRouteEntryId\\": \\"vpd-rte-toekyqel\\",\\n        \\"DestinationCidrBlock\\": \\"0.0.0.0/0\\",\\n        \\"NextHopType\\": \\"ER\\",\\n        \\"NextHopId\\": \\"er-bmlqiym1\\",\\n        \\"RouteType\\": \\"BGP\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"GmtModified\\": \\"1678273219000\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网段路由条目',
    ),
    'CreateSubnet' => 
    array (
      'summary' => '用户可以使用该API在灵骏网段下创建一个灵骏子网。',
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
          'name' => 'SubnetName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'subnet名称',
            'description' => '灵骏子网实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-1',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区',
            'description' => '可用区ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu-b',
          ),
        ),
        3 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属vpd',
            'description' => '所属灵骏网段实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-xcuhjyrj',
          ),
        ),
        4 => 
        array (
          'name' => 'Cidr',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网段',
            'description' => 'Subnet的网段。

- 子网的网段必须是其所属灵骏网段的真子集且掩码需在16位到29位之间，可提供 8 ~ 65536 个地址。 例如，灵骏网段的网段为192.168.0.0/16，该灵骏网段下的子网的网段为 192.168.0.0/17 ~ 192.168.0.0/29。
- 每个子网网段的第一个和最后三个IP地址为系统保留地址。 例如，子网的网段为192.168.1.0/24，192.168.1.0、192.168.1.253、192.168.1.254和192.168.1.255这四个IP地址为系统保留地址。',
            'type' => 'string',
            'required' => true,
            'example' => '10.0.0.0/16',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'subnet类型，非必选',
            'description' => '灵骏子网使用类型；非必选；可选值：

- **通用类型不填**
- **OOB**：OOB类型
- **LB**： LB类型',
            'type' => 'string',
            'required' => false,
            'example' => 'OOB',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签信息',
            'description' => '标签信息。

一次最多支持输入20个标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例的标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-subnet',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'subnet-tag-1',
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
            'title' => 'AjaxResult<SubnetCreateRsp>',
            'description' => 'AjaxResult<SubnetCreateRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '业务码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'SubnetId' => 
                  array (
                    'title' => '灵骏网段实例ID',
                    'description' => '灵骏子网实例ID',
                    'type' => 'string',
                    'example' => 'subnet-yuvn29bn',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"SubnetId\\": \\"subnet-yuvn29bn\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏子网',
      'description' => '在调用该接口创建灵骏子网时，请注意：
- 您已创建了灵骏网段。
- 一个灵骏子网只能指定一个网段。
- 灵骏子网创建后将无法修改网段。
- 请确保您有足够的灵骏子网配额。
- 该接口属于异步接口，调用该接口后，系统将返回一个灵骏子网的ID，此时灵骏网段可能尚未创建完成，系统后台的创建任务仍在进行中。您可以通过ListSubnets或者GetSubnet查询灵骏网段的状态：
    - 当灵骏子网状态是Executing时，表示正在创建。
    - 当灵骏子网状态是Available时，表示创建成功。',
    ),
    'DeleteSubnet' => 
    array (
      'summary' => '删除某个灵骏子网实例，删除后相关数据丢失且不可恢复。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu-b',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '所属灵骏网段 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-iv2zm1qf',
          ),
        ),
        3 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏子网ID',
            'description' => '灵骏子网 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-f3zfzmnc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<Object>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '业务码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC',
              ),
              'Content' => 
              array (
                'description' => '响应内容（当资源存在依赖资源时，会返回存在的依赖资源）',
                'type' => 'any',
                'example' => '{
      "nc": [
            {}
      ]
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC\\",\\n  \\"Content\\": \\"{\\\\n      \\\\\\"nc\\\\\\": [\\\\n            {}\\\\n      ]\\\\n}\\"\\n}","type":"json"}]',
      'title' => '删除灵骏子网',
      'description' => '调用该接口删除灵骏子网时，请注意：

- 删除后，相关数据全部丢失且不可恢复，请谨慎操作。
- 该接口属于异步接口，调用该接口后，灵骏子网实例可能尚未删除完成，系统后台的删除任务仍在进行中。您可以调用ListSubnets或GetSubnet查询灵骏子网的删除状态：
    - 当灵骏子网的状态是Deleting时，表示灵骏子网实例正在删除中。
    - 当没有该灵骏子网实例记录时，表示灵骏子网实例已经删除完成。',
    ),
    'GetSubnet' => 
    array (
      'summary' => '查询某个灵骏子网的详细信息，包括灵骏子网类型，网络地址段，所属灵骏网段实例ID，实例状态，NC数量等。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏子网',
            'description' => '灵骏子网实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-2avf0itf',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段',
            'description' => '所属灵骏网段 ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-cxcmdk1m',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<SubnetGetRsp>',
            'description' => '响应结果信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '业务码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '1678273219000',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户 ID。',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'ZoneId' => 
                  array (
                    'title' => '可用区ID',
                    'description' => '可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu-b',
                  ),
                  'SubnetId' => 
                  array (
                    'title' => '灵骏子网实例ID',
                    'description' => '灵骏子网实例ID。',
                    'type' => 'string',
                    'example' => 'subnet-aj93mko8',
                  ),
                  'SubnetName' => 
                  array (
                    'title' => '灵骏子网实例名称',
                    'description' => '灵骏子网实例名称。',
                    'type' => 'string',
                    'example' => 'subnet-1',
                  ),
                  'Cidr' => 
                  array (
                    'title' => '网络地址段',
                    'description' => 'Subnet的网段。

- 子网的网段必须是其所属灵骏网段的真子集且掩码需在16位到29位之间，可提供 8 ~ 65536 个地址。 例如，灵骏网段的网段为192.168.0.0/16，该灵骏网段下的子网的网段为 192.168.0.0/17 ~ 192.168.0.0/29。
- 每个子网网段的第一个和最后三个IP地址为系统保留地址。 例如，子网的网段为192.168.1.0/24，192.168.1.0、192.168.1.253、192.168.1.254和192.168.1.255这四个IP地址为系统保留地址。',
                    'type' => 'string',
                    'example' => '10.10.10.0/24',
                  ),
                  'VpdId' => 
                  array (
                    'title' => '所属灵骏网段实例ID',
                    'description' => '所属灵骏网段实例ID。',
                    'type' => 'string',
                    'example' => 'vpd-ze3na0wf',
                  ),
                  'Type' => 
                  array (
                    'title' => '灵骏子网类型',
                    'description' => '灵骏子网使用类型；非必选；可选值：

- **通用类型返回空**
- **OOB**：OOB类型
- **LB**： LB类型',
                    'type' => 'string',
                    'example' => 'OOB',
                  ),
                  'Status' => 
                  array (
                    'title' => '实例状态',
                    'description' => '实例状态。',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                  'NcCount' => 
                  array (
                    'title' => 'NC数量',
                    'description' => 'NC数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '16',
                  ),
                  'NetworkInterfaceCount' => 
                  array (
                    'title' => '灵骏网卡数量',
                    'description' => '灵骏网卡数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'LbCount' => 
                  array (
                    'title' => '负载均衡数量',
                    'description' => '负载均衡数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'VpdBaseInfo' => 
                  array (
                    'title' => '所属灵骏网段信息',
                    'description' => '所属灵骏网段信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VpdId' => 
                      array (
                        'title' => '灵骏网段实例ID',
                        'description' => '灵骏网段实例ID。',
                        'type' => 'string',
                        'example' => 'vpd-iv2zm1qf',
                      ),
                      'VpdName' => 
                      array (
                        'title' => '灵骏网段实例名称',
                        'description' => '灵骏网段实例名称。',
                        'type' => 'string',
                        'example' => 'vpd-1',
                      ),
                      'Cidr' => 
                      array (
                        'title' => '网络地址段',
                        'description' => 'VPD的网段。

- 建议您使用RFC私网地址作为灵骏网段的网段如10.0.0.0/8，172.16.0.0/12，192.168.0.0/16，多灵骏网段互通场景或灵骏网段和VPC互通场景需确保地址规划不能冲突。
- 您也可以使用除 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 及其子网外的自定义地址段作为VPD的主IPv4网段。',
                        'type' => 'string',
                        'example' => '10.0.0.0/8',
                      ),
                      'CreateTime' => 
                      array (
                        'title' => '创建时间',
                        'description' => '创建时间。',
                        'type' => 'string',
                        'example' => '1678273219000',
                      ),
                    ),
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-aek2l4sq6l7unhi',
                  ),
                  'Tags' => 
                  array (
                    'title' => '标签信息列表',
                    'description' => '标签信息。

一次最多支持输入20个标签信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源标签信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'title' => '标签建',
                          'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                          'type' => 'string',
                          'example' => 'tag-subnet',
                        ),
                        'TagValue' => 
                        array (
                          'title' => '标签值',
                          'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                          'type' => 'string',
                          'example' => 'subnet-group-1',
                        ),
                      ),
                    ),
                  ),
                  'PrivateIpCount' => 
                  array (
                    'title' => '辅助私网IP总数',
                    'description' => '辅助私网IP总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'AvailableIps' => 
                  array (
                    'title' => '可用Ip数',
                    'description' => '可用IP地址数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1024',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": {\\n    \\"CreateTime\\": \\"1648085472000\\",\\n    \\"GmtModified\\": \\"1678273219000\\",\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n    \\"SubnetId\\": \\"subnet-aj93mko8\\",\\n    \\"SubnetName\\": \\"subnet-1\\",\\n    \\"Cidr\\": \\"10.10.10.0/24\\",\\n    \\"VpdId\\": \\"vpd-ze3na0wf\\",\\n    \\"Type\\": \\"OOB\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"Message\\": \\"成功\\",\\n    \\"NcCount\\": 16,\\n    \\"NetworkInterfaceCount\\": 4,\\n    \\"LbCount\\": 0,\\n    \\"VpdBaseInfo\\": {\\n      \\"VpdId\\": \\"vpd-iv2zm1qf\\",\\n      \\"VpdName\\": \\"vpd-1\\",\\n      \\"Cidr\\": \\"10.0.0.0/8\\",\\n      \\"CreateTime\\": \\"1678273219000\\"\\n    },\\n    \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7unhi\\",\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"tag-subnet\\",\\n        \\"TagValue\\": \\"subnet-group-1\\"\\n      }\\n    ],\\n    \\"PrivateIpCount\\": 20,\\n    \\"AvailableIps\\": 1024\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏子网详情',
    ),
    'UpdateSubnet' => 
    array (
      'summary' => '更新灵骏子网实例的部分信息，包括灵骏子网实例名称。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu-a',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '所属灵骏网段实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-aof7dat1',
          ),
        ),
        3 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏子网实例ID',
            'description' => '灵骏子网实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-f3zfzmnc',
          ),
        ),
        4 => 
        array (
          'name' => 'SubnetName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏子网名称',
            'description' => '灵骏子网实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'subnet-1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<SubnetUpdateRsp>',
            'description' => 'AjaxResult<SubnetUpdateRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '系统返回状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID',
                'type' => 'string',
                'example' => '3D9D6E7B-365B-5200-BFA6-9B79E269058C',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'SubnetId' => 
                  array (
                    'title' => '灵骏子网实例ID',
                    'description' => '灵骏子网实例ID',
                    'type' => 'string',
                    'example' => 'subnet-yuvn29bn',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"3D9D6E7B-365B-5200-BFA6-9B79E269058C\\",\\n  \\"Content\\": {\\n    \\"SubnetId\\": \\"subnet-yuvn29bn\\"\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏子网',
    ),
    'ListSubnets' => 
    array (
      'summary' => '查询一个或多个灵骏子网的详细信息，包括灵骏子网类型，网络地址段，所属灵骏网段实例ID等。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区',
            'description' => '可用区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu-a',
          ),
        ),
        2 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属subnet网段',
            'description' => '灵骏子网实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'subnet-anhtskts',
          ),
        ),
        3 => 
        array (
          'name' => 'SubnetName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏子网实例名称',
            'description' => '灵骏子网实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'subnet-1',
          ),
        ),
        4 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属vpd',
            'description' => '所属灵骏网段实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-fuliephf',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '实例状态。可能值：

- **Available**：正常
- **Not Available**：不可用
- **Executing**：执行中
- **Deleting**：删除中',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类型',
            'description' => '灵骏子网使用类型；非必选；可选值：

- **通用类型不填**
- **OOB**：OOB类型
- **LB**： LB类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Null',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aeky5f3qx6ceapq',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签',
            'description' => '标签信息。

一次最多支持输入20个标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rg-subnet',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'subnet-group-1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        9 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页数。 取值范围：大于0。 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页返回值的个数。 取值范围：1~100。 默认值：20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        11 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否分页查询，可选值：

- **true**  ：开启分页查询
- **false** ：不开启分页查询',
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
            'title' => 'AjaxResult<PageResult<SubnetQueryRsp>>',
            'description' => 'AjaxResult<PageResult<SubnetQueryRsp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '7F9082CC-3D94-560F-A575-8E8EF6CE2CB8',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏子网信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏子网信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'ZoneId' => 
                        array (
                          'title' => '可用区ID',
                          'description' => '可用区ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'Type' => 
                        array (
                          'title' => '灵骏子网类型',
                          'description' => '灵骏子网使用类型；非必选；可选值：

- **通用类型不填**
- **OOB**：OOB类型
- **LB**： LB类型',
                          'type' => 'string',
                          'example' => 'OOB',
                        ),
                        'SubnetId' => 
                        array (
                          'title' => '灵骏子网实例ID',
                          'description' => '灵骏子网实例ID',
                          'type' => 'string',
                          'example' => 'subnet-c6wci55i',
                        ),
                        'SubnetName' => 
                        array (
                          'title' => '灵骏子网实例名称',
                          'description' => '灵骏子网实例名称',
                          'type' => 'string',
                          'example' => 'yzp-rg-test3',
                        ),
                        'Cidr' => 
                        array (
                          'title' => '灵骏子网Cidr网段',
                          'description' => 'Subnet的网段。

- 子网的网段必须是其所属灵骏网段的真子集且掩码需在16位到29位之间，可提供 8 ~ 65536 个地址。 例如，灵骏网段的网段为192.168.0.0/16，该灵骏网段下的子网的网段为 192.168.0.0/17 ~ 192.168.0.0/29。
- 每个子网网段的第一个和最后三个IP地址为系统保留地址。 例如，子网的网段为192.168.1.0/24，192.168.1.0、192.168.1.253、192.168.1.254和192.168.1.255这四个IP地址为系统保留地址。',
                          'type' => 'string',
                          'example' => '172.18.0.0/24',
                        ),
                        'VpdId' => 
                        array (
                          'title' => '所属灵骏网段实例ID',
                          'description' => '所属灵骏网段实例ID',
                          'type' => 'string',
                          'example' => 'vpd-ze3na0wf',
                        ),
                        'Status' => 
                        array (
                          'title' => '实例状态',
                          'description' => '实例状态。可能值：

- **Available**：正常
- **Not Available**：不可用
- **Executing**：执行中
- **Deleting**：删除中',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'VpdBaseInfo' => 
                        array (
                          'title' => '所属灵骏网段信息',
                          'description' => 'vpd基本信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'VpdId' => 
                            array (
                              'title' => '灵骏网段实例ID',
                              'description' => '灵骏网段实例ID',
                              'type' => 'string',
                              'example' => 'vpd-d3isyds4',
                            ),
                            'VpdName' => 
                            array (
                              'title' => '灵骏网段实例名称',
                              'description' => '灵骏网段实例名称',
                              'type' => 'string',
                              'example' => 'yzp-rg-test3',
                            ),
                            'Cidr' => 
                            array (
                              'title' => '网络地址段',
                              'description' => 'VPD的网段。

- 建议您使用RFC私网地址作为灵骏网段的网段如10.0.0.0/8，172.16.0.0/12，192.168.0.0/16，多灵骏网段互通场景或灵骏网段和VPC互通场景需确保地址规划不能冲突。
- 您也可以使用除 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 及其子网外的自定义地址段作为VPD的主IPv4网段。',
                              'type' => 'string',
                              'example' => '10.0.0.0/8',
                            ),
                            'CreateTime' => 
                            array (
                              'title' => '创建时间',
                              'description' => '创建时间',
                              'type' => 'string',
                              'example' => '1678273219000',
                            ),
                          ),
                        ),
                        'NcCount' => 
                        array (
                          'title' => '灵骏子网下主机数量',
                          'description' => 'NC数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '16',
                        ),
                        'NetworkInterfaceCount' => 
                        array (
                          'title' => '灵骏网卡数量',
                          'description' => '灵骏网卡数量',
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
                          'type' => 'string',
                          'example' => 'rg-aek2l4sq6l7unhi',
                        ),
                        'Tags' => 
                        array (
                          'title' => 'tag标签列表',
                          'description' => '标签信息。

一次最多支持输入20个标签信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagKey' => 
                              array (
                                'title' => '标签建',
                                'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                                'type' => 'string',
                                'example' => 'tag-subnet',
                              ),
                              'TagValue' => 
                              array (
                                'title' => '标签值',
                                'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                                'type' => 'string',
                                'example' => 'subnet-group-1',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"7F9082CC-3D94-560F-A575-8E8EF6CE2CB8\\",\\n  \\"Content\\": {\\n    \\"Total\\": 10,\\n    \\"Data\\": [\\n      {\\n        \\"CreateTime\\": \\"1678273219000\\",\\n        \\"GmtModified\\": \\"1678273219000\\",\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"Type\\": \\"OOB\\",\\n        \\"SubnetId\\": \\"subnet-c6wci55i\\",\\n        \\"SubnetName\\": \\"yzp-rg-test3\\",\\n        \\"Cidr\\": \\"172.18.0.0/24\\",\\n        \\"VpdId\\": \\"vpd-ze3na0wf\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"VpdBaseInfo\\": {\\n          \\"VpdId\\": \\"vpd-d3isyds4\\",\\n          \\"VpdName\\": \\"yzp-rg-test3\\",\\n          \\"Cidr\\": \\"10.0.0.0/8\\",\\n          \\"CreateTime\\": \\"1678273219000\\"\\n        },\\n        \\"NcCount\\": 16,\\n        \\"NetworkInterfaceCount\\": 0,\\n        \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7unhi\\",\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"tag-subnet\\",\\n            \\"TagValue\\": \\"subnet-group-1\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏子网',
    ),
    'InitializeVcc' => 
    array (
      'summary' => '初始化灵骏连接，授权智能计算灵骏在您的账号创建SLR。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxhucx5ewuwy',
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
            'title' => 'AjaxResult<CreateSlrRsp>',
            'description' => 'AjaxResult<CreateSlrRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID',
                'type' => 'string',
                'example' => 'E30DA7CB-03D0-51EB-8F18-856B99987E18',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RoleName' => 
                  array (
                    'description' => '灵骏连接实例关联角色（AliyunServiceRoleForEfloVcc）',
                    'type' => 'string',
                    'example' => '	
AliyunServiceRoleForEfloVcc',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '本次请求的ID',
                    'type' => 'string',
                    'example' => 'E30DA7CB-03D0-51EB-8F18-856B99987E18',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"E30DA7CB-03D0-51EB-8F18-856B99987E18\\",\\n  \\"Content\\": {\\n    \\"RoleName\\": \\"\\\\t\\\\nAliyunServiceRoleForEfloVcc\\",\\n    \\"RequestId\\": \\"E30DA7CB-03D0-51EB-8F18-856B99987E18\\"\\n  }\\n}","type":"json"}]',
      'title' => '初始化灵骏连接',
    ),
    'DescribeSlr' => 
    array (
      'summary' => '查询用户是否存在灵骏连接需要的SLR角色-AliyunServiceRoleForEfloVcc。',
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
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '访问控制实例所属资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aeky5f3qx6ceapq',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<DescribeSlrRsp>',
            'description' => 'AjaxResult<DescribeSlrRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HasRole' => 
                  array (
                    'title' => '是否存在角色',
                    'description' => '是否存在角色',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"HasRole\\": true\\n  }\\n}","type":"json"}]',
      'title' => '查询SLR授权信息',
      'description' => '可以使用该接口查询用户账号是否有**AliyunServiceRoleForEfloVcc**角色。

> 如果没有**AliyunServiceRoleForEfloVcc**角色，您需要使用initializeVcc接口完成授权，否则用户将无法使用灵骏连接产品。',
    ),
    'CreateVcc' => 
    array (
      'summary' => '用户可创建灵骏连接，用于连通灵骏网络环境和阿里云网络环境。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu-a',
          ),
        ),
        2 => 
        array (
          'name' => 'VccName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '专线名称',
            'description' => '灵骏连接名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'VPD',
            'description' => '灵骏网段实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-t2jseldp',
          ),
        ),
        4 => 
        array (
          'name' => 'CenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'CEN',
            'description' => '云企业网实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cen-bkiw0x1347roekr7f2',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        6 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '带宽',
            'description' => '带宽，单位Mbps。最小值为1000，代表1Gbps带宽；最大值为400000，代表400Gbps带宽。

> 1Gbps = 1000Mbps',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签',
            'description' => '标签信息。

一次最多支持输入20个标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例的标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-vcc',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vcc-group-1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '入云专线ID',
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
        9 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建代理相关vpcId、vSwitchId',
            'description' => '专有网络ID；[什么是专有网络](https://help.aliyun.com/document_detail/34217.html)

可调用[DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0)接口查询指定VPC。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6aa4ddo97frj22tgp52',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aeky5f3qx6ceapq',
          ),
        ),
        11 => 
        array (
          'name' => 'ConnectionType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '连接方式，CENTR/VPC',
            'description' => '连接方式，可选值：
- **专有网络（VPC）**
- **云企业网（CENTR）**',
            'type' => 'string',
            'required' => false,
            'example' => 'CENTR',
          ),
        ),
        12 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'vSwitchId',
            'description' => '交换机实例ID。[专有网络交换机](https://help.aliyun.com/document_detail/100380.html)。

你可以调用[DescribeVSwitches](https://help.aliyun.com/document_detail/35748.html)接口查询已创建的交换机。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-t4nahb0pxckgktx1kot8q',
          ),
        ),
        13 => 
        array (
          'name' => 'BgpCidr',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '互联网段，云上输入，云下默认',
            'description' => '互联网段，云上输入，云下默认',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.0/24',
          ),
        ),
        14 => 
        array (
          'name' => 'AccessCouldService',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '启动访问云服务',
            'description' => '启动访问云服务，可选值：

- **true**  ：启用访问云服务
- **false** ：不启用访问云服务',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'CenOwnerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'cen所属账号',
            'description' => 'cen所属账号',
            'type' => 'string',
            'required' => false,
            'example' => '1511928242963727',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<CreateVccRsp>',
            'description' => 'AjaxResult<CreateVccRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '039C3C3A-3C37-5672-80D5-D8CD48C676D1',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'VccId' => 
                  array (
                    'title' => '灵骏连接ID',
                    'description' => '灵骏连接实例ID',
                    'type' => 'string',
                    'example' => 'vcc-cn-zvp2w222001',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"039C3C3A-3C37-5672-80D5-D8CD48C676D1\\",\\n  \\"Content\\": {\\n    \\"VccId\\": \\"vcc-cn-zvp2w222001\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏连接',
      'description' => '调用该接口创建灵骏连接时，请注意：

- 填写参数vccId时，系统将为您配置已购买的灵骏连接；当缺省参数vccId时，系统将自动为您下单并配置灵骏连接。
- 请确保您已经调用InitializeVcc接口授权。
- 该接口属于异步接口，调用该接口后，系统将返回灵骏连接ID，但灵骏连接实例可能尚未创建完成，系统后台的创建任务仍在进行中。您可以调用ListVccs或GetVcc查询灵骏连接的创建状态：
    -  当灵骏连接的状态是Executing时，表示灵骏连接正在创建中。
    -  当灵骏连接的状态是Available时，表示灵骏连接创建成功。',
    ),
    'UpdateVcc' => 
    array (
      'summary' => '更新灵骏连接实例的部分信息，包括灵骏连接实例的带宽峰值和名称。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域 ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接ID',
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
        2 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接实例的带宽峰值，单位mbps。取值范围：1000~400000',
            'description' => '灵骏连接实例的带宽峰值，单位mbps。取值范围：1000~400000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        3 => 
        array (
          'name' => 'VccName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接名称',
            'description' => '灵骏连接实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-heyuan-backup',
          ),
        ),
        4 => 
        array (
          'name' => 'OrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单ID',
            'description' => '订单ID',
            'type' => 'string',
            'required' => false,
            'example' => '20006627643',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<UpdateVccRsp>',
            'description' => 'AjaxResult<UpdateVccRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => 'Code码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F906C4D3-7444-58E2-9819-E3D8563571A3',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'VccId' => 
                  array (
                    'title' => '灵骏连接实例ID',
                    'description' => '灵骏连接实例ID',
                    'type' => 'string',
                    'example' => 'vcc-cn-2r42v22cn03',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"F906C4D3-7444-58E2-9819-E3D8563571A3\\",\\n  \\"Content\\": {\\n    \\"VccId\\": \\"vcc-cn-2r42v22cn03\\"\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏连接',
    ),
    'GetVcc' => 
    array (
      'summary' => '查询某个灵骏连接的详细信息，包括规格，物理专线接入端口类型，实例状态，带宽，BGP网段等。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接ID',
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vcc-cn-zvp2w222***',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页参数：参数已废弃',
            'description' => '分页参数：当前参数已废弃',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页参数：参数已废弃',
            'description' => '分页参数：当前参数已废弃',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页参数：参数已废弃',
            'description' => '分页参数：当前参数已废弃',
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
            'title' => 'popApi 默认不忽略，幂等使用',
            'description' => 'popApi 默认不忽略，幂等使用',
            'type' => 'string',
            'required' => false,
            'example' => 'c5e3130a-d02f-11ec-a7d3-0242ac110005',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetVccRsp>',
            'description' => 'AjaxResult<GetVccRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'CAD09E47-B651-5206-B2DC-3AB78C8EB446',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1620939556166279',
                  ),
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'ZoneId' => 
                  array (
                    'title' => '可用区ID',
                    'description' => '可用区ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu-b',
                  ),
                  'VccId' => 
                  array (
                    'title' => '灵骏连接实例ID',
                    'description' => '灵骏连接实例ID',
                    'type' => 'string',
                    'example' => 'vcc-cn-cqf2xh40101',
                  ),
                  'VpdId' => 
                  array (
                    'title' => '灵骏网段实例ID',
                    'description' => '灵骏网段实例ID',
                    'type' => 'string',
                    'example' => 'vpd-d3isyds4',
                  ),
                  'VpcId' => 
                  array (
                    'title' => '专有网络(VPC)实例ID',
                    'description' => '专有网络ID；[什么是专有网络](https://help.aliyun.com/document_detail/34217.html)

可调用[DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0)接口查询指定VPC。',
                    'type' => 'string',
                    'example' => 'vpc-j6ctp4n75306phv5tmpsm',
                  ),
                  'VSwitchId' => 
                  array (
                    'title' => 'vSwitchId',
                    'description' => '交换机实例ID。[专有网络交换机](https://help.aliyun.com/document_detail/100380.html)。

你可以调用[DescribeVSwitches](https://help.aliyun.com/document_detail/35748.html)接口查询已创建的交换机。',
                    'type' => 'string',
                    'example' => 'vsw-uf6u8473r84e6n1n19he5',
                  ),
                  'CenId' => 
                  array (
                    'title' => '云企业网(cen)实例ID',
                    'description' => '云企业网实例的ID；[什么是云企业网?](https://help.aliyun.com/document_detail/181681.html)

你可用调用[DescribeCens](https://help.aliyun.com/document_detail/468215.htm)查询当前阿里云账号下的云企业网实例信息。',
                    'type' => 'string',
                    'example' => 'cen-m2iskbojlvda5w65fp',
                  ),
                  'VccName' => 
                  array (
                    'title' => '灵骏连接名称',
                    'description' => '灵骏连接实例名称',
                    'type' => 'string',
                    'example' => 'vcc-heyuan-backup',
                  ),
                  'AccessPointId' => 
                  array (
                    'title' => '物理专线接入点的ID：',
                    'description' => '物理专线接入点的ID：

- **ap-cn-wulanchabu-jn-ts-A**：乌兰察布-集宁-A
- **ap-cn-heyuan-yc-ts-SA127**：河源-源城-A',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'ap-cn-heyuan-yc-ts-SA127' => '河源-源城-A',
                      'ap-cn-wulanchabu-jn-ts-A' => '乌兰察布-集宁-A',
                    ),
                    'example' => 'ap-cn-wulanchabu-jn-ts-A',
                  ),
                  'LineOperator' => 
                  array (
                    'title' => '提供接入物理线路的运营商。取值：',
                    'description' => '提供接入物理线路的运营商。取值：
- **CO**：中国其他',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'CO' => '中国其他',
                    ),
                    'example' => 'CO',
                  ),
                  'Spec' => 
                  array (
                    'title' => '规格',
                    'description' => '规格；取值：

- **Large** ：大型',
                    'type' => 'string',
                    'example' => 'Large',
                  ),
                  'PortType' => 
                  array (
                    'title' => '物理专线接入端口类型。取值：',
                    'description' => '物理专线接入端口类型。取值：
- **100GBase-LR**：十万兆单模光口（10千米）',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      '100GBase-LR' => '100G',
                    ),
                    'example' => '100GBase-LR',
                  ),
                  'PricingCycle' => 
                  array (
                    'title' => '计费周期。取值：',
                    'description' => '计费周期。取值：

- **Month**：按月计费
- **Year**：按年计费',
                    'type' => 'string',
                    'example' => 'Month',
                  ),
                  'PayType' => 
                  array (
                    'title' => '实例的付费类型，返回：',
                    'description' => '实例的付费类型，返回：

- **PREPAY**：包年包月
- **POSTPAY**：按量付费',
                    'type' => 'string',
                    'example' => 'PrePay',
                  ),
                  'Duration' => 
                  array (
                    'title' => '续费周期',
                    'description' => '续费周期',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'title' => '实例状态',
                    'description' => '实例状态。可能值：

- **Available**：正常 。
- **Not Available**：不可用。

- **Executing**：执行中。

- **Deleting**：删除中。',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'CurrentNode' => 
                  array (
                    'title' => '流程当前节点',
                    'description' => '当前节点',
                    'type' => 'string',
                    'example' => '创建物理专线1',
                  ),
                  'InternetChargeType' => 
                  array (
                    'title' => '网络计费类型。',
                    'description' => '网络计费类型。

- **PayByTraffic**：按流量计费

- **PayByBandwidth**：按带宽计费',
                    'type' => 'string',
                    'example' => 'PayByBandwidth',
                  ),
                  'BandwidthStr' => 
                  array (
                    'title' => '带宽字符串；例如：1000M、10G',
                    'description' => '带宽',
                    'type' => 'string',
                    'example' => '1G',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '串讲时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'CommodityCode' => 
                  array (
                    'title' => '商品代码',
                    'description' => '商品代码',
                    'type' => 'string',
                    'example' => 'bccluster_cloudconnectionpre_public_cn',
                  ),
                  'BgpCidr' => 
                  array (
                    'title' => 'bgp网段',
                    'description' => 'BGP网段',
                    'type' => 'string',
                    'example' => '10.4.0.0/24',
                  ),
                  'ExpirationDate' => 
                  array (
                    'title' => '过期时间',
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '1678379917000',
                  ),
                  'VpdBaseInfo' => 
                  array (
                    'title' => '关联灵骏网段信息',
                    'description' => '灵骏网段信息；（适用于老版本的灵骏连接直接绑定灵骏网段的场景）',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VpdId' => 
                      array (
                        'title' => '灵骏网段实例ID',
                        'description' => '灵骏网段实例ID',
                        'type' => 'string',
                        'example' => 'vpd-ppdunxzc',
                      ),
                      'VpdName' => 
                      array (
                        'title' => '灵骏网段实例名称',
                        'description' => '灵骏网段实例名称',
                        'type' => 'string',
                        'example' => 'yzp-rg-test3',
                      ),
                      'Cidr' => 
                      array (
                        'title' => '网络地址段',
                        'description' => '网络地址段',
                        'type' => 'string',
                        'example' => '172.18.0.0/24',
                      ),
                      'CreateTime' => 
                      array (
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '1678379917000',
                      ),
                    ),
                  ),
                  'AttachErStatus' => 
                  array (
                    'title' => '已绑定的灵骏HUB-网络实例状态信息',
                    'description' => '灵骏HUB是否已绑定网络实例
- **true** : 已绑定
- **false** : 未绑定',
                    'type' => 'boolean',
                    'example' => 'true
',
                  ),
                  'ErInfos' => 
                  array (
                    'title' => '已绑定的灵骏HUB信息',
                    'description' => '已绑定的灵骏HUB信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已绑定的灵骏HUB信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1678379917000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1678379917000',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'ErId' => 
                        array (
                          'title' => '弹性路由器ID',
                          'description' => '灵骏HUB ID',
                          'type' => 'string',
                          'example' => 'er-p68b0jwn',
                        ),
                        'RegionId' => 
                        array (
                          'title' => 'ER地域信息',
                          'description' => '灵骏HUB地域信息',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'ErName' => 
                        array (
                          'title' => 'ER实例名称',
                          'description' => '灵骏HUB实例名称',
                          'type' => 'string',
                          'example' => 'er-1',
                        ),
                        'MasterZoneId' => 
                        array (
                          'title' => '主可用区',
                          'description' => '主可用区',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述',
                          'description' => '描述',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'Connections' => 
                        array (
                          'title' => '连接数',
                          'description' => '连接数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'RouteMaps' => 
                        array (
                          'title' => '路由策略数量',
                          'description' => '路由策略数量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'AliyunRouterInfo' => 
                  array (
                    'title' => '阿里云路由信息列表',
                    'description' => '阿里云路由信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '阿里云路由信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PcId' => 
                        array (
                          'title' => '物理专线ID',
                          'description' => '物理专线ID',
                          'type' => 'string',
                          'example' => 'pc-0jlof4bphlsnxbdztkvad',
                        ),
                        'VbrId' => 
                        array (
                          'title' => '边界路由器实例ID',
                          'description' => '边界路由器实例ID',
                          'type' => 'string',
                          'example' => 'vbr-2ze4i85p6vb9nwcan5xt0',
                        ),
                        'LocalGatewayIp' => 
                        array (
                          'title' => '阿里云侧互联IPv4地址',
                          'description' => '阿里云侧互联IPv4地址',
                          'type' => 'string',
                          'example' => '169.254.248.30',
                        ),
                        'PeerGatewayIp' => 
                        array (
                          'title' => '灵骏侧互联IPv4地址',
                          'description' => '灵骏侧互联IPv4地址',
                          'type' => 'string',
                          'example' => '169.254.248.28',
                        ),
                        'Mask' => 
                        array (
                          'title' => '掩码',
                          'description' => '掩码',
                          'type' => 'string',
                          'example' => '255.255.255.248',
                        ),
                        'VlanId' => 
                        array (
                          'title' => 'VBR实例的VLAN ID',
                          'description' => '边界路由器实例的VLAN ID',
                          'type' => 'string',
                          'example' => '1042',
                        ),
                      ),
                    ),
                  ),
                  'CisRouterInfo' => 
                  array (
                    'title' => '灵骏网络路由信息列表',
                    'description' => '灵骏网络路由信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏网络路由信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CcrId' => 
                        array (
                          'title' => '上云路由器实例ID',
                          'description' => '云上路由器实例ID',
                          'type' => 'string',
                          'example' => 'ccr-1ms84am0',
                        ),
                        'CcInfos' => 
                        array (
                          'title' => '专线信息列表',
                          'description' => '专线信息列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '专线信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CcId' => 
                              array (
                                'title' => '专线ID',
                                'description' => '专线ID',
                                'type' => 'string',
                                'example' => 'cc-73aeex5o',
                              ),
                              'VlanId' => 
                              array (
                                'title' => 'Vlan ID',
                                'description' => '专线的Vlan ID',
                                'type' => 'string',
                                'example' => 'Ethernet1042',
                              ),
                              'LocalGatewayIp' => 
                              array (
                                'title' => '灵骏侧互联IPv4地址',
                                'description' => '灵骏侧互联IPv4地址',
                                'type' => 'string',
                                'example' => '169.254.248.26',
                              ),
                              'RemoteGatewayIp' => 
                              array (
                                'title' => '阿里云侧互联IPv4地址',
                                'description' => '灵骏侧互联IPv4地址',
                                'type' => 'string',
                                'example' => '169.254.248.30
',
                              ),
                              'SubnetMask' => 
                              array (
                                'title' => '子网掩码',
                                'description' => '子网掩码',
                                'type' => 'string',
                                'example' => '255.255.255.248',
                              ),
                              'Status' => 
                              array (
                                'title' => '实例状态：',
                                'description' => '实例状态',
                                'type' => 'string',
                                'example' => 'Established',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组ID',
                    'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm)。',
                    'type' => 'string',
                    'example' => 'rg-aek2l4sq6l7unhi',
                  ),
                  'Tags' => 
                  array (
                    'title' => '标签信息列表',
                    'description' => '标签信息。

一次最多支持输入20个标签信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'title' => '标签建',
                          'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                          'type' => 'string',
                          'example' => 'tag-vcc',
                        ),
                        'TagValue' => 
                        array (
                          'title' => '标签值',
                          'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                          'type' => 'string',
                          'example' => 'vcc-group-1',
                        ),
                      ),
                    ),
                  ),
                  'ConnectionType' => 
                  array (
                    'description' => '连接方式，可选值：
- **VPC**
- **CENTR**',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'VPC' => 'VPC',
                      'CENTR' => 'CENTR',
                    ),
                    'example' => 'CENTR',
                  ),
                  'CenOwnerId' => 
                  array (
                    'title' => 'cen所属账号',
                    'description' => '云企业网所属账号',
                    'type' => 'string',
                    'example' => '1620939556166279',
                  ),
                  'VbrInfos' => 
                  array (
                    'title' => 'vbr信息',
                    'description' => '边界路由器信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '边界路由器信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VbrId' => 
                        array (
                          'title' => '边界路由器ID',
                          'description' => '边界路由器ID',
                          'type' => 'string',
                          'example' => 'vbr-wz96agu9h3d50z****',
                        ),
                        'CenId' => 
                        array (
                          'title' => '云企业网ID',
                          'description' => '云企业网ID',
                          'type' => 'string',
                          'example' => 'cen-cx0qua8q6cm4z9****',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '边界路由器状态。取值：
 - unconfirmed：等待他人确认。

 - active：正常。

 - terminating：终止接入中。

 - terminated：已终止接入。

 - recovering：恢复中。

 - deleting：删除中。

 - Available： 可用。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1683250981000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1673578603000',
                        ),
                        'VbrBgpPeers' => 
                        array (
                          'title' => 'BGP邻居',
                          'description' => 'BGP邻居信息列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'BGP邻居信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'BgpGroupId' => 
                              array (
                                'title' => 'BGP组ID',
                                'description' => 'BGP组ID',
                                'type' => 'string',
                                'example' => 'bgpg-2ze2sit2vakrkapvy****',
                              ),
                              'BgpPeerId' => 
                              array (
                                'title' => 'BGP邻居ID',
                                'description' => 'BGP邻居ID',
                                'type' => 'string',
                                'example' => 'bgp-uf6heugif9enu48rj****',
                              ),
                              'PeerIpAddress' => 
                              array (
                                'title' => 'BGP邻居IP',
                                'description' => 'BGP邻居IP',
                                'type' => 'string',
                                'example' => '169.254.****',
                              ),
                              'PeerAsn' => 
                              array (
                                'title' => 'Peer AS号',
                                'description' => 'Peer AS号',
                                'type' => 'string',
                                'example' => '98765****',
                              ),
                              'Status' => 
                              array (
                                'title' => '状态',
                                'description' => 'BGP邻居的状态。取值：

 - Pending：待定。

 - Available：可用。

 - Modifying：修改中。

 - Deleting：删除中。

 - Deleted：已删除。

 - Not Available：不可用。',
                                'type' => 'string',
                                'example' => 'Available',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"CAD09E47-B651-5206-B2DC-3AB78C8EB446\\",\\n  \\"Content\\": {\\n    \\"TenantId\\": \\"1620939556166279\\",\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n    \\"VccId\\": \\"vcc-cn-cqf2xh40101\\",\\n    \\"VpdId\\": \\"vpd-d3isyds4\\",\\n    \\"VpcId\\": \\"vpc-j6ctp4n75306phv5tmpsm\\",\\n    \\"VSwitchId\\": \\"vsw-uf6u8473r84e6n1n19he5\\",\\n    \\"CenId\\": \\"cen-m2iskbojlvda5w65fp\\",\\n    \\"VccName\\": \\"vcc-heyuan-backup\\",\\n    \\"AccessPointId\\": \\"ap-cn-wulanchabu-jn-ts-A\\",\\n    \\"LineOperator\\": \\"CO\\",\\n    \\"Spec\\": \\"Large\\",\\n    \\"PortType\\": \\"100GBase-LR\\",\\n    \\"PricingCycle\\": \\"Month\\",\\n    \\"PayType\\": \\"PrePay\\",\\n    \\"Duration\\": \\"1\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"CurrentNode\\": \\"创建物理专线1\\",\\n    \\"InternetChargeType\\": \\"PayByBandwidth\\",\\n    \\"BandwidthStr\\": \\"1G\\",\\n    \\"Message\\": \\"成功\\",\\n    \\"CreateTime\\": \\"1648085472000\\",\\n    \\"GmtModified\\": \\"1648085472000\\",\\n    \\"CommodityCode\\": \\"bccluster_cloudconnectionpre_public_cn\\",\\n    \\"BgpCidr\\": \\"10.4.0.0/24\\",\\n    \\"ExpirationDate\\": \\"1678379917000\\",\\n    \\"VpdBaseInfo\\": {\\n      \\"VpdId\\": \\"vpd-ppdunxzc\\",\\n      \\"VpdName\\": \\"yzp-rg-test3\\",\\n      \\"Cidr\\": \\"172.18.0.0/24\\",\\n      \\"CreateTime\\": \\"1678379917000\\"\\n    },\\n    \\"AttachErStatus\\": true,\\n    \\"ErInfos\\": [\\n      {\\n        \\"CreateTime\\": \\"1678379917000\\",\\n        \\"GmtModified\\": \\"1678379917000\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"ErId\\": \\"er-p68b0jwn\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"1620939556166277\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"ErName\\": \\"er-1\\",\\n        \\"MasterZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"Description\\": \\"描述\\",\\n        \\"Connections\\": 2,\\n        \\"RouteMaps\\": 2\\n      }\\n    ],\\n    \\"AliyunRouterInfo\\": [\\n      {\\n        \\"PcId\\": \\"pc-0jlof4bphlsnxbdztkvad\\",\\n        \\"VbrId\\": \\"vbr-2ze4i85p6vb9nwcan5xt0\\",\\n        \\"LocalGatewayIp\\": \\"169.254.248.30\\",\\n        \\"PeerGatewayIp\\": \\"169.254.248.28\\",\\n        \\"Mask\\": \\"255.255.255.248\\",\\n        \\"VlanId\\": \\"1042\\"\\n      }\\n    ],\\n    \\"CisRouterInfo\\": [\\n      {\\n        \\"CcrId\\": \\"ccr-1ms84am0\\",\\n        \\"CcInfos\\": [\\n          {\\n            \\"CcId\\": \\"cc-73aeex5o\\",\\n            \\"VlanId\\": \\"Ethernet1042\\",\\n            \\"LocalGatewayIp\\": \\"169.254.248.26\\",\\n            \\"RemoteGatewayIp\\": \\"169.254.248.30\\\\n\\",\\n            \\"SubnetMask\\": \\"255.255.255.248\\",\\n            \\"Status\\": \\"Established\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7unhi\\",\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"tag-vcc\\",\\n        \\"TagValue\\": \\"vcc-group-1\\"\\n      }\\n    ],\\n    \\"ConnectionType\\": \\"CENTR\\",\\n    \\"CenOwnerId\\": \\"1620939556166279\\",\\n    \\"VbrInfos\\": [\\n      {\\n        \\"VbrId\\": \\"vbr-wz96agu9h3d50z****\\",\\n        \\"CenId\\": \\"cen-cx0qua8q6cm4z9****\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"GmtCreate\\": \\"1683250981000\\",\\n        \\"GmtModified\\": \\"1673578603000\\",\\n        \\"VbrBgpPeers\\": [\\n          {\\n            \\"BgpGroupId\\": \\"bgpg-2ze2sit2vakrkapvy****\\",\\n            \\"BgpPeerId\\": \\"bgp-uf6heugif9enu48rj****\\",\\n            \\"PeerIpAddress\\": \\"169.254.****\\",\\n            \\"PeerAsn\\": \\"98765****\\",\\n            \\"Status\\": \\"Available\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏连接详情',
    ),
    'ListVccs' => 
    array (
      'summary' => '查询一个或多个灵骏连接的详细信息，包括规格，物理专线接入端口类型，实例状态，带宽，bgp网段等。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段实例ID',
            'description' => '灵骏网段实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-omqutbff',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'VPC实例ID',
            'description' => '专有网络ID；[什么是专有网络](https://help.aliyun.com/document_detail/34217.html)

可调用[DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0)接口查询指定VPC。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1nrtkmamy329u6a1z0i',
          ),
        ),
        3 => 
        array (
          'name' => 'CenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云企业网实例ID',
            'description' => '云企业网实例的ID；[什么是云企业网?](https://help.aliyun.com/document_detail/181681.html)

你可用调用[DescribeCens](https://help.aliyun.com/document_detail/468215.htm)查询当前阿里云账号下的云企业网实例信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cen-95iwtpyvj3kk1v0ao0',
          ),
        ),
        4 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '带宽',
            'description' => '灵骏连接实例的带宽峰值，单位mbps。取值范围：1000~400000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5000',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态信息',
            'description' => '实例状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        6 => 
        array (
          'name' => 'ExStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '除外的状态，Status存在则不生效',
            'description' => '把指定状态的数据全部排除掉，如果status参数存在那么ExStatus就不会生效',
            'type' => 'string',
            'required' => false,
            'example' => 'Prepaid',
          ),
        ),
        7 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接实例ID',
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
        8 => 
        array (
          'name' => 'FilterErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '根据灵骏HUB实例筛选',
            'description' => '通过灵骏HUB实例ID过滤查询',
            'type' => 'string',
            'required' => false,
            'example' => 'er-a7rqv1rq',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aeky5f3qx6ceapq',
          ),
        ),
        10 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签信息列表',
            'description' => '标签信息。

一次最多支持输入20个标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-vcc',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vcc-group-1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        11 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        13 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询，可选值：

- **true**  ：开启分页查询
- **false** ：不开启分页查询',
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
            'title' => 'AjaxResult<PageResult<ListVccRsp>>',
            'description' => 'AjaxResult<PageResult<ListVccRsp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '28451248-7038-5184-B5D3-80F104654BE8',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏连接信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏连接信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1620939556166279
',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'VccId' => 
                        array (
                          'title' => '灵骏连接实例ID',
                          'description' => '灵骏连接实例ID',
                          'type' => 'string',
                          'example' => 'vcc-cn-zvp2w222001',
                        ),
                        'VpdId' => 
                        array (
                          'title' => '灵骏网段实例ID',
                          'description' => '灵骏网段实例ID',
                          'type' => 'string',
                          'example' => 'vpd-eoiy88ju',
                        ),
                        'VpcId' => 
                        array (
                          'title' => '专有网络（VPC）的ID',
                          'description' => '专有网络ID；[什么是专有网络](https://help.aliyun.com/document_detail/34217.html)

可调用[DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0)接口查询指定VPC。',
                          'type' => 'string',
                          'example' => 'vpc-f8ziirfl9k25h2qn7y4f8',
                        ),
                        'CenId' => 
                        array (
                          'title' => '云企业网（cen）实例ID',
                          'description' => '云企业网实例的ID；[什么是云企业网?](https://help.aliyun.com/document_detail/181681.html)

你可用调用[DescribeCens](https://help.aliyun.com/document_detail/468215.htm)查询当前阿里云账号下的云企业网实例信息。',
                          'type' => 'string',
                          'example' => 'cen-w15qot0pfvs83pkckj',
                        ),
                        'VccName' => 
                        array (
                          'title' => '灵骏连接实例名称',
                          'description' => '灵骏连接实例名称',
                          'type' => 'string',
                          'example' => 'vcc-heyuan-backup',
                        ),
                        'AccessPointId' => 
                        array (
                          'title' => '物理专线接入点的ID：',
                          'description' => '物理专线接入点的ID：

- **ap-cn-wulanchabu-jn-ts-A**：乌兰察布-集宁-A
- **ap-cn-heyuan-yc-ts-SA127**：河源-源城-A',
                          'type' => 'string',
                          'example' => 'ap-cn-wulanchabu-jn-ts-A',
                        ),
                        'LineOperator' => 
                        array (
                          'title' => '提供接入物理线路的运营商。取值：',
                          'description' => '提供接入物理线路的运营商。取值：

- **CO**：中国其他',
                          'type' => 'string',
                          'example' => 'CO',
                        ),
                        'Spec' => 
                        array (
                          'title' => '规格',
                          'description' => '规格',
                          'type' => 'string',
                          'example' => 'Large',
                        ),
                        'PortType' => 
                        array (
                          'title' => '物理专线接入端口类型。取值：',
                          'description' => '物理专线接入端口类型。取值：

- **100GBase-LR**：十万兆单模光口（10千米）',
                          'type' => 'string',
                          'example' => '100GBase-LR
',
                        ),
                        'Status' => 
                        array (
                          'title' => '实例状态',
                          'description' => '实例状态',
                          'type' => 'string',
                          'example' => 'Init',
                        ),
                        'CurrentNode' => 
                        array (
                          'title' => '当前流程节点',
                          'description' => '当前流程节点',
                          'type' => 'string',
                          'example' => '持久化资源数据',
                        ),
                        'Message' => 
                        array (
                          'title' => '错误信息。（当实例状态为异常时，提示异常原因）',
                          'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'TaskId' => 
                        array (
                          'title' => '任务Id',
                          'description' => '任务Id',
                          'type' => 'string',
                          'example' => 'task-cd544092-ed0a-49e9-83eb-e8c94770dccf',
                        ),
                        'VpdBaseInfo' => 
                        array (
                          'title' => '灵骏网段信息；（适用于老版本的灵骏连接直接绑定灵骏网段的场景）',
                          'description' => '灵骏网段信息；（适用于老版本的灵骏连接直接绑定灵骏网段的场景）',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'VpdId' => 
                            array (
                              'title' => '灵骏网段实例ID',
                              'description' => '灵骏网段实例ID',
                              'type' => 'string',
                              'example' => 'vpd-9n7ioqrp',
                            ),
                            'VpdName' => 
                            array (
                              'title' => '灵骏网段实例名称',
                              'description' => '灵骏网段实例名称',
                              'type' => 'string',
                              'example' => 'yzp-rg-test3',
                            ),
                            'Cidr' => 
                            array (
                              'title' => '网络地址段',
                              'description' => 'VPD的网段。

- 建议您使用RFC私网地址作为灵骏网段的网段如10.0.0.0/8，172.16.0.0/12，192.168.0.0/16，多灵骏网段互通场景或灵骏网段和VPC互通场景需确保地址规划不能冲突。
- 您也可以使用除 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 及其子网外的自定义地址段作为VPD的主IPv4网段。',
                              'type' => 'string',
                              'example' => '10.0.0.0/13',
                            ),
                            'CreateTime' => 
                            array (
                              'title' => '创建时间',
                              'description' => '创建时间',
                              'type' => 'string',
                              'example' => '1668158213000',
                            ),
                          ),
                        ),
                        'Rate' => 
                        array (
                          'title' => '当前流程进度',
                          'description' => '流程进度；取值返回0~1；未开始为null',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1',
                        ),
                        'BandwidthStr' => 
                        array (
                          'title' => '带宽字符串；例如：1000M、10G',
                          'description' => '带宽',
                          'type' => 'string',
                          'example' => '1000',
                        ),
                        'CommodityCode' => 
                        array (
                          'title' => '商品代码',
                          'description' => '商品代码',
                          'type' => 'string',
                          'example' => 'bccluster_cloudconnectionpre_public_cn',
                        ),
                        'BgpCidr' => 
                        array (
                          'title' => 'bgp网段',
                          'description' => 'bgp网段',
                          'type' => 'string',
                          'example' => '172.16.128.0/24',
                        ),
                        'ExpirationDate' => 
                        array (
                          'title' => '过期时间',
                          'description' => '过期时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。

关于资源组的更多信息，请参见[什么是资源组](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu)。',
                          'type' => 'string',
                          'example' => 'rg-aek2l4sq6l7unhi',
                        ),
                        'ErInfos' => 
                        array (
                          'title' => '已绑定的灵骏HUB信息',
                          'description' => '已绑定的灵骏HUB信息列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已绑定的灵骏HUB信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CreateTime' => 
                              array (
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '1678273219000',
                              ),
                              'GmtModified' => 
                              array (
                                'title' => '修改时间',
                                'description' => '修改时间',
                                'type' => 'string',
                                'example' => '1678273219000',
                              ),
                              'Message' => 
                              array (
                                'title' => '提示信息',
                                'description' => '提示信息',
                                'type' => 'string',
                                'example' => '成功',
                              ),
                              'ErId' => 
                              array (
                                'title' => '弹性路由器ID',
                                'description' => '弹性路由器ID',
                                'type' => 'string',
                                'example' => 'er-a7rqv1rq',
                              ),
                              'RegionId' => 
                              array (
                                'title' => 'ER地域信息',
                                'description' => 'ER地域信息',
                                'type' => 'string',
                                'example' => 'cn-wulanchabu',
                              ),
                              'TenantId' => 
                              array (
                                'title' => '租户ID',
                                'description' => '租户ID',
                                'type' => 'string',
                                'example' => '1620939556166277',
                              ),
                              'Status' => 
                              array (
                                'title' => '状态',
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'Available',
                              ),
                              'ErName' => 
                              array (
                                'title' => 'ER实例名称',
                                'description' => 'ER实例名称',
                                'type' => 'string',
                                'example' => 'er-1',
                              ),
                              'MasterZoneId' => 
                              array (
                                'title' => '主可用区',
                                'description' => '主可用区',
                                'type' => 'string',
                                'example' => 'cn-wulanchabu-b',
                              ),
                              'Description' => 
                              array (
                                'title' => '描述',
                                'description' => '描述',
                                'type' => 'string',
                                'example' => '描述',
                              ),
                              'Connections' => 
                              array (
                                'title' => '连接数',
                                'description' => '连接数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                              'RouteMaps' => 
                              array (
                                'title' => '路由策略数量',
                                'description' => '路由策略数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                            ),
                          ),
                        ),
                        'Tags' => 
                        array (
                          'title' => '标签信息',
                          'description' => '标签信息。

一次最多支持输入20个标签信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagKey' => 
                              array (
                                'title' => '标签建',
                                'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun或者acs:开头，不能包含http://或者https://。

一次最多支持输入20个标签的标签键。',
                                'type' => 'string',
                                'example' => 'tag-vcc',
                              ),
                              'TagValue' => 
                              array (
                                'title' => '标签值',
                                'description' => '资源的标签值。

标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。

每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                                'type' => 'string',
                                'example' => 'vcc-group-1',
                              ),
                            ),
                          ),
                        ),
                        'ConnectionType' => 
                        array (
                          'description' => '连接方式，可选值：
- **VPC**
- **CENTR**',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'VPC' => 'VPC',
                            'CENTR' => 'CENTR',
                          ),
                          'example' => 'CENTR',
                        ),
                        'CenOwnerId' => 
                        array (
                          'title' => 'cen所属账号',
                          'description' => 'cen所属账号',
                          'type' => 'string',
                          'example' => '1238685214107736',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"28451248-7038-5184-B5D3-80F104654BE8\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"TenantId\\": \\"1620939556166279\\\\n\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"VccId\\": \\"vcc-cn-zvp2w222001\\",\\n        \\"VpdId\\": \\"vpd-eoiy88ju\\",\\n        \\"VpcId\\": \\"vpc-f8ziirfl9k25h2qn7y4f8\\",\\n        \\"CenId\\": \\"cen-w15qot0pfvs83pkckj\\",\\n        \\"VccName\\": \\"vcc-heyuan-backup\\",\\n        \\"AccessPointId\\": \\"ap-cn-wulanchabu-jn-ts-A\\",\\n        \\"LineOperator\\": \\"CO\\",\\n        \\"Spec\\": \\"Large\\",\\n        \\"PortType\\": \\"100GBase-LR\\\\n\\",\\n        \\"Status\\": \\"Init\\",\\n        \\"CurrentNode\\": \\"持久化资源数据\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"CreateTime\\": \\"1678273219000\\",\\n        \\"GmtModified\\": \\"1678273219000\\",\\n        \\"TaskId\\": \\"task-cd544092-ed0a-49e9-83eb-e8c94770dccf\\",\\n        \\"VpdBaseInfo\\": {\\n          \\"VpdId\\": \\"vpd-9n7ioqrp\\",\\n          \\"VpdName\\": \\"yzp-rg-test3\\",\\n          \\"Cidr\\": \\"10.0.0.0/13\\",\\n          \\"CreateTime\\": \\"1668158213000\\"\\n        },\\n        \\"Rate\\": 1,\\n        \\"BandwidthStr\\": \\"1000\\",\\n        \\"CommodityCode\\": \\"bccluster_cloudconnectionpre_public_cn\\",\\n        \\"BgpCidr\\": \\"172.16.128.0/24\\",\\n        \\"ExpirationDate\\": \\"1678273219000\\",\\n        \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7unhi\\",\\n        \\"ErInfos\\": [\\n          {\\n            \\"CreateTime\\": \\"1678273219000\\",\\n            \\"GmtModified\\": \\"1678273219000\\",\\n            \\"Message\\": \\"成功\\",\\n            \\"ErId\\": \\"er-a7rqv1rq\\",\\n            \\"RegionId\\": \\"cn-wulanchabu\\",\\n            \\"TenantId\\": \\"1620939556166277\\",\\n            \\"Status\\": \\"Available\\",\\n            \\"ErName\\": \\"er-1\\",\\n            \\"MasterZoneId\\": \\"cn-wulanchabu-b\\",\\n            \\"Description\\": \\"描述\\",\\n            \\"Connections\\": 2,\\n            \\"RouteMaps\\": 2\\n          }\\n        ],\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"tag-vcc\\",\\n            \\"TagValue\\": \\"vcc-group-1\\"\\n          }\\n        ],\\n        \\"ConnectionType\\": \\"CENTR\\",\\n        \\"CenOwnerId\\": \\"1238685214107736\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏连接',
    ),
    'CreateVccGrantRule' => 
    array (
      'summary' => '用户可通过此API，将灵骏连接实例对目标账号的灵骏HUB实例授权。授权后，目标账号即可用被授权的灵骏HUB实例关联到您的灵骏连接。',
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
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权网络实例ID',
            'description' => '网络实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vcc-8rgvqazb',
          ),
        ),
        1 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权租户',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => true,
            'example' => '1620939556166277',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GrantResourceToErRsp>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'GrantRuleId' => 
                  array (
                    'title' => '授权资源主键ID',
                    'description' => '授权资源主键ID',
                    'type' => 'string',
                    'example' => 'grant-rule-8rgvqazb',
                  ),
                ),
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"GrantRuleId\\": \\"grant-rule-8rgvqazb\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏连接跨账号授权信息',
      'description' => '调用该接口创建灵骏HUB跨账号授权时，请注意：

- 请确保您将要授权的对方阿里云归属ID和灵骏HUB实例ID准确无误。
- 如果向对方账号授权，对方账号便可将您的本地网络实例加载到其灵骏HUB中，对方网络将会打通到您的网络，请谨慎操作。',
    ),
    'DeleteVccGrantRule' => 
    array (
      'summary' => '删除某个灵骏连接的灵骏HUB跨账号授权，删除后相关数据丢失且不可恢复。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GrantRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权资源实例ID',
            'description' => '授权条目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'grant-rule-jaj34d75h01',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权那资源实例Id',
            'description' => '网络实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-jaj34d75h01',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB实例ID',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<Object>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'BDBCC783-84CA-5733-8EEA-645C88B9009C',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"BDBCC783-84CA-5733-8EEA-645C88B9009C\\",\\n  \\"Content\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '删除灵骏连接跨账号授权信息',
    ),
    'GetVccGrantRule' => 
    array (
      'summary' => '查询灵骏连接跨账号资源授权详情，包括授权租户ID，灵骏HUB实例ID，网络实例ID等。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID;必选',
            'description' => '地域ID;必选',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GrantRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权资源实例ID',
            'description' => '授权资源实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'grant-rule-jaj34d75h01',
          ),
        ),
        2 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB实例Id',
            'description' => '灵骏HUB实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'er-aueyxxsy',
          ),
        ),
        3 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权租户ID',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '1620939556166277',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权实例ID',
            'description' => '授权实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-jaj34d75h01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<ResourceGrantRule>',
            'description' => 'AjaxResult<ResourceGrantRule>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1620939556166279',
                  ),
                  'InstanceId' => 
                  array (
                    'title' => '网络实例ID',
                    'description' => '网络实例ID',
                    'type' => 'string',
                    'example' => 'vcc-cn-jaj34d75h01',
                  ),
                  'InstanceName' => 
                  array (
                    'title' => '网络实例名称',
                    'description' => '网络实例名称',
                    'type' => 'string',
                    'example' => 'vcc-1',
                  ),
                  'Product' => 
                  array (
                    'title' => '网络产品CODE: VPD、VCC',
                    'description' => '网络产品Code:
- **VPD**：灵骏网段
- **VCC**：灵骏连接',
                    'type' => 'string',
                    'example' => 'VCC',
                  ),
                  'ErId' => 
                  array (
                    'title' => '灵骏HUB实例ID',
                    'description' => '灵骏HUB实例ID',
                    'type' => 'string',
                    'example' => 'er-aueyxxsy',
                  ),
                  'GrantTenantId' => 
                  array (
                    'title' => '授权租户ID',
                    'description' => '授权租户ID',
                    'type' => 'string',
                    'example' => '1620939556166277',
                  ),
                  'Used' => 
                  array (
                    'title' => '当前授权信息是否已被使用；默认为false',
                    'description' => '当前授权信息是否已被使用；，可选值：

- **true**  ：已使用
- **false** ：未使用',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'GrantRuleId' => 
                  array (
                    'title' => '授权资源ID',
                    'description' => '授权资源ID',
                    'type' => 'string',
                    'example' => 'grant-rule-jaj34d75h01',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"TenantId\\": \\"1620939556166279\\",\\n    \\"InstanceId\\": \\"vcc-cn-jaj34d75h01\\",\\n    \\"InstanceName\\": \\"vcc-1\\",\\n    \\"Product\\": \\"VCC\\",\\n    \\"ErId\\": \\"er-aueyxxsy\\",\\n    \\"GrantTenantId\\": \\"1620939556166277\\",\\n    \\"Used\\": false,\\n    \\"CreateTime\\": \\"1648085472000\\",\\n    \\"GrantRuleId\\": \\"grant-rule-jaj34d75h01\\",\\n    \\"ResourceGroupId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏连接跨账号资源授权详情',
    ),
    'ListVccGrantRules' => 
    array (
      'summary' => '查询某个灵骏连接授权的详细信息，包括授权租户ID，地域，灵骏HUB实例信息等。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID；必选',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB；',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkopgtne',
          ),
        ),
        2 => 
        array (
          'name' => 'GrantTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权租户ID；非必选',
            'description' => '授权租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '1620939556166277',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '已授权网络实例ID；非必选',
            'description' => '网络实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-jaj33d1b804',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '已授权网络实例名称；非必选',
            'description' => '实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-1',
          ),
        ),
        5 => 
        array (
          'name' => 'GrantRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权资源ID；非必选',
            'description' => '授权条目ID',
            'type' => 'string',
            'required' => false,
            'example' => 'grant-rule-jaj33d1b804',
          ),
        ),
        6 => 
        array (
          'name' => 'ForSelect',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下拉列表查询使用;默认false',
            'description' => '下拉框使用',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询，可选值：

- **true**  ：开启分页查询
- **false** ：不开启分页查询',
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
            'title' => 'AjaxResult<PageResult<ResourceGrantRule>>',
            'description' => 'AjaxResult<PageResult<ResourceGrantRule>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏连接跨账号授权信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏连接跨账号授权信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'InstanceId' => 
                        array (
                          'title' => '网络实例ID',
                          'description' => '网络实例ID',
                          'type' => 'string',
                          'example' => 'vcc-cn-jaj33d1kb05',
                        ),
                        'InstanceName' => 
                        array (
                          'title' => '网络实例名称',
                          'description' => '实例名称',
                          'type' => 'string',
                          'example' => 'vcc-1',
                        ),
                        'Product' => 
                        array (
                          'title' => '网络产品CODE: VPD、VCC',
                          'description' => '授权产品类型。可选值：

- **VPD**：表示灵骏网段VPD实例。
- **VCC**：表示灵骏连接VCC实例。',
                          'type' => 'string',
                          'example' => 'VCC',
                        ),
                        'ErId' => 
                        array (
                          'title' => '灵骏HUB实例ID',
                          'description' => '灵骏HUB ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'GrantTenantId' => 
                        array (
                          'title' => '授权租户ID',
                          'description' => '授权租户ID',
                          'type' => 'string',
                          'example' => '1013666993027780',
                        ),
                        'Used' => 
                        array (
                          'title' => '当前授权信息是否已被使用；默认为false',
                          'description' => '当前跨账号资源是否已被跨账号灵骏HUB绑定，可选值：
- **true**  ：已使用
- **false** ：未使用',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1678273219000',
                        ),
                        'GrantRuleId' => 
                        array (
                          'title' => '授权资源ID',
                          'description' => '跨账号授权信息实例ID',
                          'type' => 'string',
                          'example' => 'grant-rule-jpumgwvp',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"InstanceId\\": \\"vcc-cn-jaj33d1kb05\\",\\n        \\"InstanceName\\": \\"vcc-1\\",\\n        \\"Product\\": \\"VCC\\",\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"GrantTenantId\\": \\"1013666993027780\\",\\n        \\"Used\\": true,\\n        \\"CreateTime\\": \\"1678273219000\\",\\n        \\"GrantRuleId\\": \\"grant-rule-jpumgwvp\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏连接跨账号授权信息',
    ),
    'CreateVccRouteEntry' => 
    array (
      'summary' => '创建灵骏连接路由条目。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标网段',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.98.112/28',
          ),
        ),
        2 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<CreateVbrRouteEntryRsp>',
            'description' => 'AjaxResult<CreateVbrRouteEntryRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '039C3C3A-3C37-5672-80D5-D8CD48C676D1',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'VccRouteEntryId' => 
                  array (
                    'description' => '路由条目ID',
                    'type' => 'string',
                    'example' => 'vcc-rte-5cey1sap',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"039C3C3A-3C37-5672-80D5-D8CD48C676D1\\",\\n  \\"Content\\": {\\n    \\"VccRouteEntryId\\": \\"vcc-rte-5cey1sap\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏连接路由条目',
      'description' => '调用该接口创建VBR路由条目时，请注意：

- 调用该接口后，将在灵骏连接所属的VBR上创建静态路由条目和BGP网络宣告
- 该接口属于异步接口，调用该接口后，此时VBR静态路由条目可能尚未创建完成，系统后台的创建任务仍在进行中。您可以通过ListVccRouteEntries或者GetVccRouteEntry查询VBR静态路由条目的状态：
    - 当VBR静态路由条目状态是Executing时，表示正在创建。
    - 当VBR静态路由条目状态是Available时，表示创建成功。',
    ),
    'DeleteVccRouteEntry' => 
    array (
      'summary' => '删除灵骏连接路由条目。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标网段',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.199.128/25',
          ),
        ),
        2 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
        3 => 
        array (
          'name' => 'VccRouteEntryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '路由条目ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-rte-5cey1sap',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<Object>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '删除灵骏连接路由条目',
      'description' => '调用该接口删除VBR静态路由条目时，请注意：

- 删除后，相关数据全部丢失且不可恢复，请谨慎操作。
- 该接口属于异步接口，调用该接口后，VBR静态路由条目实例可能尚未删除完成，系统后台的删除任务仍在进行中。您可以调用ListVccRouteEntries或GetVccRouteEntry查询VBR静态路由条目的删除状态：
    - 当VBR静态路由条目实例的状态是Deleting时，表示VBR静态路由条目实例正在删除中。
    - 当没有该VBR静态路由条目实例记录时，表示VBR静态路由条目实例已经删除完成。',
    ),
    'GetVccRouteEntry' => 
    array (
      'summary' => '查询路由条目。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '入云专线 Id',
            'description' => '灵骏连接ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
        2 => 
        array (
          'name' => 'VccRouteEntryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接路由条目Id',
            'description' => '路由条目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vcc-rte-31ocvdhq',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetVccRouteEntryRsp>',
            'description' => 'AjaxResult<GetVccRouteEntryRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'BDBCC783-84CA-5733-8EEA-645C88B9009C',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'VccRouteEntryId' => 
                  array (
                    'title' => '路由条目ID',
                    'description' => '路由条目ID',
                    'type' => 'string',
                    'example' => 'vcc-rte-31ocvdhq',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户Id',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'VccId' => 
                  array (
                    'title' => '入云专线 Id',
                    'description' => '灵骏连接实例 ID',
                    'type' => 'string',
                    'example' => 'vcc-cn-zvp2w222001',
                  ),
                  'DestinationCidrBlock' => 
                  array (
                    'title' => '目标网段',
                    'description' => '目的网段',
                    'type' => 'string',
                    'example' => '0.0.0.0/0',
                  ),
                  'NextHopType' => 
                  array (
                    'title' => '下一跳类型',
                    'description' => '下一跳类型',
                    'type' => 'string',
                    'example' => 'VCC',
                  ),
                  'NextHopId' => 
                  array (
                    'title' => '下一跳实列',
                    'description' => '下一跳实例',
                    'type' => 'string',
                    'example' => 'local',
                  ),
                  'RouteType' => 
                  array (
                    'title' => '路由类型',
                    'description' => '路由类型',
                    'type' => 'string',
                    'example' => 'System',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '提示信息',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                    'example' => 'rg-aek2l4sq6l7u***',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"BDBCC783-84CA-5733-8EEA-645C88B9009C\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"VccRouteEntryId\\": \\"vcc-rte-31ocvdhq\\",\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"VccId\\": \\"vcc-cn-zvp2w222001\\",\\n    \\"DestinationCidrBlock\\": \\"0.0.0.0/0\\",\\n    \\"NextHopType\\": \\"VCC\\",\\n    \\"NextHopId\\": \\"local\\",\\n    \\"RouteType\\": \\"System\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"GmtModified\\": \\"1648085472000\\",\\n    \\"Message\\": \\"成功\\",\\n    \\"ResourceGroupId\\": \\"rg-aek2l4sq6l7u***\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏连接路由条目详情',
    ),
    'ListVccRouteEntries' => 
    array (
      'summary' => '查询灵骏连接路由条目。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VccId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏连接实例ID',
            'description' => '灵骏连接实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vcc-cn-zvp2w222001',
          ),
        ),
        2 => 
        array (
          'name' => 'NextHopType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一跳类型(vpd...)(可填)',
            'description' => '下一跳实例类型',
            'type' => 'string',
            'required' => false,
            'example' => 'VCC',
          ),
        ),
        3 => 
        array (
          'name' => 'NextHopId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一跳实例',
            'description' => '下一跳实例',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-jaj34d75h01',
          ),
        ),
        4 => 
        array (
          'name' => 'RouteType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由类型',
            'description' => '路由类型',
            'type' => 'string',
            'required' => false,
            'example' => 'BGP',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目标网段',
            'description' => '目标网段',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        7 => 
        array (
          'name' => 'VpdRouteEntryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由条目Id',
            'description' => '灵骏网段路由条目实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-rte-toekyqel',
          ),
        ),
        8 => 
        array (
          'name' => 'IgnoreDetailedRouteEntry',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '过滤32明细网段 默认为True',
            'description' => '过滤32明细网段。默认为true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询',
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
            'title' => 'AjaxResult<PageResult<ListVccRouteEntryRsp>>',
            'description' => 'AjaxResult<PageResult<ListVccRouteEntryRsp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏连接路由条目信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏连接路由条目信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VccId' => 
                        array (
                          'title' => '灵骏连接实例ID',
                          'description' => '灵骏连接实例ID',
                          'type' => 'string',
                          'example' => 'vcc-cn-zvp2w222001',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'ResourceTenantId' => 
                        array (
                          'title' => '资源所属租户ID',
                          'description' => '资源所属租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域',
                          'description' => '地域',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'VccRouteEntryId' => 
                        array (
                          'title' => '路由条目ID',
                          'description' => '路由条目ID',
                          'type' => 'string',
                          'example' => 'vcc-rte-maysfadg',
                        ),
                        'DestinationCidrBlock' => 
                        array (
                          'title' => '目标网段',
                          'description' => '目标网段',
                          'type' => 'string',
                          'example' => '10.192.32.0/24',
                        ),
                        'NextHopType' => 
                        array (
                          'title' => '下一跳类型',
                          'description' => '下一跳类型',
                          'type' => 'string',
                          'example' => 'VCC',
                        ),
                        'NextHopId' => 
                        array (
                          'title' => '下一跳实列',
                          'description' => '下一跳实例',
                          'type' => 'string',
                          'example' => 'vcc-cn-zvp2w222001
',
                        ),
                        'RouteType' => 
                        array (
                          'title' => '路由类型',
                          'description' => '路由类型',
                          'type' => 'string',
                          'example' => 'BGP',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '1642745758000',
                        ),
                        'Message' => 
                        array (
                          'title' => '错误信息',
                          'description' => '提示信息',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"VccId\\": \\"vcc-cn-zvp2w222001\\",\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"ResourceTenantId\\": \\"1655449505171\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"VccRouteEntryId\\": \\"vcc-rte-maysfadg\\",\\n        \\"DestinationCidrBlock\\": \\"10.192.32.0/24\\",\\n        \\"NextHopType\\": \\"VCC\\",\\n        \\"NextHopId\\": \\"vcc-cn-zvp2w222001\\\\n\\",\\n        \\"RouteType\\": \\"BGP\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"GmtModified\\": \\"1642745758000\\",\\n        \\"Message\\": \\"success\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏连接路由条目',
    ),
    'CreateElasticNetworkInterface' => 
    array (
      'summary' => '创建灵骏弹性网卡。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu-a',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '机器节点ID 默认第一张bond0的卡上创建灵骏弹性网卡',
            'description' => '灵骏节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'e01-cn-lbj3aej****',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云上vpcID',
            'description' => '云上VPC ID。

> NodeId为空时，VpcId必填；NodeId不为空时，VpcId选填。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6aa4ddo97fr****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '交换机ID',
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-t4nahb0pxck****',
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '安全组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-wz9fj2s3o21nw2****',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'popApi 默认不忽略，幂等使用',
            'description' => 'POP API默认不忽略，幂等使用。',
            'type' => 'string',
            'required' => false,
            'example' => '3fd79d62-ab1d-11ec-9a53-0242ac110004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeId' => 
                  array (
                    'title' => '设备ID',
                    'description' => '灵骏节点ID。',
                    'type' => 'string',
                    'example' => 'e01-cn-lbj3aej****',
                  ),
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID。',
                    'type' => 'string',
                    'example' => 'leni-1fejojjo****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"NodeId\\": \\"e01-cn-lbj3aej****\\",\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1fejojjo****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏弹性网卡',
    ),
    'DeleteElasticNetworkInterface' => 
    array (
      'summary' => '删除灵骏弹性网卡，删除后，相关数据全部丢失且不可恢复，请谨慎操作。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡ID',
            'description' => '灵骏弹性网卡ID',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'popApi 默认不忽略，幂等使用',
            'description' => 'popApi 默认不忽略，幂等使用',
            'type' => 'string',
            'required' => false,
            'example' => '141cccd6-dfbd-11ec-b8e8-0242ac110003',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BDBCC783-84CA-5733-8EEA-645C88B9009C',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeId' => 
                  array (
                    'title' => '设备ID',
                    'description' => '灵骏节点ID',
                    'type' => 'string',
                    'example' => 'e01-cn-lbj3aej****',
                  ),
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"BDBCC783-84CA-5733-8EEA-645C88B9009C\\",\\n  \\"Content\\": {\\n    \\"NodeId\\": \\"e01-cn-lbj3aej****\\",\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\"\\n  }\\n}","type":"json"}]',
      'title' => '删除灵骏弹性网卡',
    ),
    'GetElasticNetworkInterface' => 
    array (
      'summary' => '获取灵骏弹性网卡详情。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性网卡ID',
            'description' => '灵骏弹性网卡ID',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'ZoneId' => 
                  array (
                    'title' => '可用区ID',
                    'description' => '可用区ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu-b',
                  ),
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                  'NodeId' => 
                  array (
                    'title' => '节点ID',
                    'description' => '灵骏节点ID',
                    'type' => 'string',
                    'example' => 'e01-cn-lbj3aej****',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Create Failed' => '创建失败',
                      'Delete Failed' => '删除失败',
                      'Executing' => '执行中',
                      'Available' => '可用',
                      'Deleting' => '删除中',
                    ),
                    'example' => 'Available',
                  ),
                  'Ip' => 
                  array (
                    'title' => '弹性网卡ip',
                    'description' => '弹性网卡IP',
                    'type' => 'string',
                    'example' => '203.107.****',
                  ),
                  'VpcId' => 
                  array (
                    'title' => '云上vpcId',
                    'description' => '云上VPC ID',
                    'type' => 'string',
                    'example' => 'vpc-j6ctp4n75306****',
                  ),
                  'VSwitchId' => 
                  array (
                    'title' => '交换机ID',
                    'description' => '交换机ID',
                    'type' => 'string',
                    'example' => 'vsw-uf6u8473r84e9****',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '错误信息',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                  'Mac' => 
                  array (
                    'title' => 'mac地址',
                    'description' => 'mac地址',
                    'type' => 'string',
                    'example' => '00:22:6D:97:**:**',
                  ),
                  'Type' => 
                  array (
                    'title' => '网卡类型，默认类型 DEFAULT 不可手动释放',
                    'description' => '网卡类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'CUSTOM' => '自定义类型',
                      'DEFAULT' => '系统类型',
                    ),
                    'example' => 'DEFAULT',
                  ),
                  'Gateway' => 
                  array (
                    'title' => 'vswitch网关地址',
                    'description' => 'vswitch网关地址',
                    'type' => 'string',
                    'example' => '172.16.****',
                  ),
                  'Mask' => 
                  array (
                    'title' => 'vswitch掩码位',
                    'description' => 'vswitch掩码位',
                    'type' => 'string',
                    'example' => '24',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1672971789000',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '1672971789000',
                  ),
                  'Description' => 
                  array (
                    'title' => '描述信息',
                    'description' => '描述信息',
                    'type' => 'string',
                    'example' => '描述',
                  ),
                  'PrivateIpAddresses' => 
                  array (
                    'title' => '辅助私网IP',
                    'description' => '辅助私网IP',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例私网返回信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ElasticNetworkInterfaceId' => 
                        array (
                          'title' => '灵骏弹性网卡ID',
                          'description' => '灵骏弹性网卡ID',
                          'type' => 'string',
                          'example' => 'leni-1234****',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1672971789000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '1672971789000',
                        ),
                        'IpName' => 
                        array (
                          'title' => '灵骏弹性网卡辅助私网IP唯一标识',
                          'description' => '灵骏弹性网卡辅助私网IP唯一标识',
                          'type' => 'string',
                          'example' => 'sip-ywz****',
                        ),
                        'PrivateIpAddress' => 
                        array (
                          'title' => '灵骏弹性网卡辅助私网IP地址',
                          'description' => '灵骏弹性网卡辅助私网IP地址',
                          'type' => 'string',
                          'example' => '172.16.****',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述信息',
                          'description' => '描述信息',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'Message' => 
                        array (
                          'description' => '返回信息',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                      ),
                    ),
                  ),
                  'SecurityGroupId' => 
                  array (
                    'title' => '安全组ID',
                    'description' => '安全组ID',
                    'type' => 'string',
                    'example' => 'sg-0jl5s4p4laalruk7****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\",\\n    \\"NodeId\\": \\"e01-cn-lbj3aej****\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"Ip\\": \\"203.107.****\\",\\n    \\"VpcId\\": \\"vpc-j6ctp4n75306****\\",\\n    \\"VSwitchId\\": \\"vsw-uf6u8473r84e9****\\",\\n    \\"Message\\": \\"成功\\",\\n    \\"Mac\\": \\"00:22:6D:97:**:**\\",\\n    \\"Type\\": \\"DEFAULT\\",\\n    \\"Gateway\\": \\"172.16.****\\",\\n    \\"Mask\\": \\"24\\",\\n    \\"CreateTime\\": \\"1672971789000\\",\\n    \\"GmtModified\\": \\"1672971789000\\",\\n    \\"Description\\": \\"描述\\",\\n    \\"PrivateIpAddresses\\": [\\n      {\\n        \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"GmtCreate\\": \\"1672971789000\\",\\n        \\"GmtModified\\": \\"1672971789000\\",\\n        \\"IpName\\": \\"sip-ywz****\\",\\n        \\"PrivateIpAddress\\": \\"172.16.****\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Description\\": \\"描述\\",\\n        \\"Message\\": \\"成功\\"\\n      }\\n    ],\\n    \\"SecurityGroupId\\": \\"sg-0jl5s4p4laalruk7****\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取灵骏弹性网卡详情',
    ),
    'ListElasticNetworkInterfaces' => 
    array (
      'summary' => '查询灵骏弹性网卡列表。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu-b',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡类型 CUSTOM / DEFAULT',
            'description' => '类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CUSTOM' => '自定义类型',
              'DEFAULT' => '系统类型',
            ),
            'example' => 'DEFAULT',
          ),
        ),
        3 => 
        array (
          'name' => 'NetworkType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络类型',
            'description' => '网络类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Tenant' => 'Tenant',
              'VPC' => 'VPC',
            ),
            'example' => 'tenant',
          ),
        ),
        4 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡ID',
            'description' => '灵骏弹性网卡ID',
            'type' => 'string',
            'required' => false,
            'example' => 'leni-1234****',
          ),
        ),
        5 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '节点ID',
            'description' => '节点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'e01-cn-lbj3aej****',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Create Failed' => '创建失败',
              'Delete Failed' => '删除失败',
              'Executing' => '执行中',
              'Available' => '正常',
              'Deleting' => '删除中',
            ),
            'example' => 'Available',
          ),
        ),
        7 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性网卡ip',
            'description' => 'IP地址',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
          ),
        ),
        8 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云上vpcId',
            'description' => '专有网络ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6aa4ddo97fr****',
          ),
        ),
        9 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '交换机ID',
            'description' => '交换机ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf6u8473r84e9****',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：20',
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
            'title' => '返回参数',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏弹性网卡信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏弹性网卡信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'ZoneId' => 
                        array (
                          'title' => '可用区ID',
                          'description' => '可用区ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'ElasticNetworkInterfaceId' => 
                        array (
                          'title' => '灵骏弹性网卡ID',
                          'description' => '灵骏弹性网卡ID',
                          'type' => 'string',
                          'example' => 'leni-1234****',
                        ),
                        'NodeId' => 
                        array (
                          'title' => '节点ID',
                          'description' => '节点ID',
                          'type' => 'string',
                          'example' => 'e01-cn-uax37m1****',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Ip' => 
                        array (
                          'title' => '弹性网卡ip',
                          'description' => 'IP地址',
                          'type' => 'string',
                          'example' => '10.0.0.13',
                        ),
                        'VpcId' => 
                        array (
                          'title' => '云上vpcId',
                          'description' => '专有网络ID',
                          'type' => 'string',
                          'example' => 'vpc-f8ziirfl9k25h2qn7****',
                        ),
                        'VSwitchId' => 
                        array (
                          'title' => '交换机ID',
                          'description' => '交换机ID',
                          'type' => 'string',
                          'example' => 'vsw-uf6u8473r84e9****',
                        ),
                        'Message' => 
                        array (
                          'title' => '错误信息',
                          'description' => '错误信息',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'Mac' => 
                        array (
                          'title' => 'mac地址',
                          'description' => 'mac地址',
                          'type' => 'string',
                          'example' => 'E0:01:A6:4A:6A:D0',
                        ),
                        'Type' => 
                        array (
                          'title' => '网卡类型，默认类型 DEFAULT 不可手动释放',
                          'description' => '网卡类型，默认类型 DEFAULT 不可手动释放',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'CUSTOM' => '自定义类型',
                            'DEFAULT' => '系统类型',
                          ),
                          'example' => 'DEFAULT',
                        ),
                        'Gateway' => 
                        array (
                          'title' => 'vswitch网关地址',
                          'description' => 'vswitch网关地址',
                          'type' => 'string',
                          'example' => '172.16.****',
                        ),
                        'Mask' => 
                        array (
                          'title' => 'vswitch掩码位',
                          'description' => 'vswitch掩码位',
                          'type' => 'string',
                          'example' => '24',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1601176751000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1640187007000',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述信息',
                          'description' => '描述信息',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'SecurityGroupId' => 
                        array (
                          'title' => '安全组ID',
                          'description' => '安全组ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"Total\\": 100,\\n    \\"Data\\": [\\n      {\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\",\\n        \\"NodeId\\": \\"e01-cn-uax37m1****\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Ip\\": \\"10.0.0.13\\",\\n        \\"VpcId\\": \\"vpc-f8ziirfl9k25h2qn7****\\",\\n        \\"VSwitchId\\": \\"vsw-uf6u8473r84e9****\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"Mac\\": \\"E0:01:A6:4A:6A:D0\\",\\n        \\"Type\\": \\"DEFAULT\\",\\n        \\"Gateway\\": \\"172.16.****\\",\\n        \\"Mask\\": \\"24\\",\\n        \\"CreateTime\\": \\"1601176751000\\",\\n        \\"GmtModified\\": \\"1640187007000\\",\\n        \\"Description\\": \\"描述\\",\\n        \\"SecurityGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏弹性网卡列表',
    ),
    'UpdateElasticNetworkInterface' => 
    array (
      'summary' => '更新灵骏弹性网卡信息。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡ID',
            'description' => '灵骏弹性网卡ID',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目前仅支持修改描述信息',
            'description' => '描述信息',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'popApi 默认不忽略，幂等使用',
            'description' => '幂等参数',
            'type' => 'string',
            'required' => false,
            'example' => '3fd79d62-ab1d-11ec-9a53-0242ac110004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeId' => 
                  array (
                    'title' => '设备ID',
                    'description' => '灵骏节点ID',
                    'type' => 'string',
                    'example' => 'e01-cn-lbj3aej****',
                  ),
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"NodeId\\": \\"e01-cn-lbj3aej****\\",\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\"\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏弹性网卡',
    ),
    'AssignLeniPrivateIpAddress' => 
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡辅助私网IP（缺省自动分配）',
            'description' => '灵骏弹性网卡辅助私网IP（缺省自动分配）。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.****',
          ),
        ),
        2 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡ID',
            'description' => '灵骏弹性网卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '幂等标识。',
            'type' => 'string',
            'required' => false,
            'example' => '3fd79d62-ab1d-11ec-9a53-0242ac110004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<AssignLeniPrivateIpAddressRsp>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'IpName' => 
                  array (
                    'title' => '灵骏弹性网卡辅助私网IP唯一标识',
                    'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
                    'type' => 'string',
                    'example' => 'sip-lzwx****',
                  ),
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID。',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"IpName\\": \\"sip-lzwx****\\",\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\"\\n  }\\n}","type":"json"}]',
      'title' => '分配灵骏弹性网卡辅助私网IP',
      'summary' => '为当前的灵骏弹性网卡申请辅助私网IP（可选自动分配辅助私网IP）。',
      'description' => '为指定的灵骏弹性网卡申请辅助私网IP。
 - 当PrivateIp字段为空时，自动分配一个辅助私网IP，并返回该IP的唯一标识。
 - 可使用GetLeniPrivateIpAddress或ListLeniPrivateIpAddresses接口查询辅助私网IP的状态是否分配成功。',
    ),
    'UnassignLeniPrivateIpAddress' => 
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡辅助私网IP唯一标识',
            'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'sip-8ylg****',
          ),
        ),
        2 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡ID',
            'description' => '灵骏弹性网卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '幂等标识。',
            'type' => 'string',
            'required' => false,
            'example' => '967e77a2-b61d-11ec-a147-0242c0a80504',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<UnassignPrivateIpAddressRsp>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'IpName' => 
                  array (
                    'title' => '灵骏弹性网卡辅助私网IP唯一标识',
                    'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
                    'type' => 'string',
                    'example' => 'sip-dqvs****',
                  ),
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID。',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                ),
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"IpName\\": \\"sip-dqvs****\\",\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\"\\n  }\\n}","type":"json"}]',
      'title' => '取消分配灵骏弹性网卡辅助私网IP',
      'summary' => '将分配的灵骏弹性网卡辅助私网IP删除。',
    ),
    'GetLeniPrivateIpAddress' => 
    array (
      'summary' => '获取指定灵骏弹性网卡辅助私网IP的详细信息。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡辅助私网IP唯一标识',
            'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'sip-8ylg****',
          ),
        ),
        2 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡Id',
            'description' => '灵骏弹性网卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<LeniIpAddressDTO>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => 'message信息。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID。',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                  'RegionId' => 
                  array (
                    'title' => '地域',
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '1663722356000',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间。',
                    'type' => 'string',
                    'example' => '1635231890000',
                  ),
                  'IpName' => 
                  array (
                    'title' => '灵骏弹性网卡辅助私网IP唯一标识',
                    'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
                    'type' => 'string',
                    'example' => 'sip-8ylg****',
                  ),
                  'PrivateIpAddress' => 
                  array (
                    'title' => '灵骏弹性网卡辅助私网IP地址',
                    'description' => '灵骏弹性网卡辅助私网IP地址。',
                    'type' => 'string',
                    'example' => '10.42.****',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态。',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'Description' => 
                  array (
                    'title' => '描述信息',
                    'description' => '描述信息。',
                    'type' => 'string',
                    'example' => '描述',
                  ),
                  'Message' => 
                  array (
                    'description' => '消息。',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\",\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"GmtCreate\\": \\"1663722356000\\",\\n    \\"GmtModified\\": \\"1635231890000\\",\\n    \\"IpName\\": \\"sip-8ylg****\\",\\n    \\"PrivateIpAddress\\": \\"10.42.****\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"Description\\": \\"描述\\",\\n    \\"Message\\": \\"成功\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取灵骏弹性网卡辅助私网IP详情',
    ),
    'UpdateLeniPrivateIpAddress' => 
    array (
      'summary' => '更新灵骏弹性网卡分配的辅助私网描述。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡Id',
            'description' => '灵骏弹性网卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'leni-1234****',
          ),
        ),
        2 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡辅助私网IP唯一标识，必传',
            'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'sip-8ylg****',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => '描述',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<UpdateLeniPrivateIpAddressRsp>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ElasticNetworkInterfaceId' => 
                  array (
                    'title' => '灵骏弹性网卡ID',
                    'description' => '灵骏弹性网卡ID。',
                    'type' => 'string',
                    'example' => 'leni-1234****',
                  ),
                  'IpName' => 
                  array (
                    'title' => '灵骏弹性网卡辅助私网IP唯一标识',
                    'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
                    'type' => 'string',
                    'example' => 'sip-8ylg****
',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\",\\n    \\"IpName\\": \\"sip-8ylg****\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '修改灵骏弹性网卡辅助私网描述',
    ),
    'ListLeniPrivateIpAddresses' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticNetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡Id',
            'description' => '灵骏弹性网卡ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'leni-1234****',
          ),
        ),
        2 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡辅助私网IP唯一标识',
            'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
            'type' => 'string',
            'required' => false,
            'example' => 'sip-8ylg****',
          ),
        ),
        3 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏弹性网卡辅助私网IP',
            'description' => '灵骏弹性网卡辅助私网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.****',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<PageResult<LeniIpAddressDTO>>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '返回内容。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ElasticNetworkInterfaceId' => 
                        array (
                          'title' => '灵骏弹性网卡ID',
                          'description' => '灵骏弹性网卡ID。',
                          'type' => 'string',
                          'example' => 'leni-1234****',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域',
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '1675929918000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '1675929918000',
                        ),
                        'IpName' => 
                        array (
                          'title' => '灵骏弹性网卡辅助私网IP唯一标识',
                          'description' => '灵骏弹性网卡辅助私网IP唯一标识。',
                          'type' => 'string',
                          'example' => 'sip-8ylg****',
                        ),
                        'PrivateIpAddress' => 
                        array (
                          'title' => '灵骏弹性网卡辅助私网IP地址',
                          'description' => '灵骏弹性网卡辅助私网IP地址。',
                          'type' => 'string',
                          'example' => '10.0.****',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述信息',
                          'description' => '描述信息。',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'Message' => 
                        array (
                          'description' => '返回信息。',
                          'type' => 'string',
                          'example' => '成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"Total\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"ElasticNetworkInterfaceId\\": \\"leni-1234****\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"GmtCreate\\": \\"1675929918000\\",\\n        \\"GmtModified\\": \\"1675929918000\\",\\n        \\"IpName\\": \\"sip-8ylg****\\",\\n        \\"PrivateIpAddress\\": \\"10.0.****\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Description\\": \\"描述\\",\\n        \\"Message\\": \\"成功\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏弹性网卡私网IP列表',
      'summary' => '查询当前灵骏弹性网卡辅助私网IP的列表信息。',
    ),
    'GetNetworkInterface' => 
    array (
      'summary' => '查询某张网卡实例信息。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属Subnet',
            'description' => '所属灵骏子网（Subnet）',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-f3zfzmnc',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡ID',
            'description' => '灵骏网卡ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-bp18exxqa2rvfn45e5pz',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<NetworkInterfaceInfo>',
            'description' => 'AjaxResult<NetworkInterfaceInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容。（当资源存在依赖资源时，会返回存在的依赖资源）',
                'type' => 'object',
                'properties' => 
                array (
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'NetworkInterfaceId' => 
                  array (
                    'title' => '网卡ID',
                    'description' => '灵骏网卡ID',
                    'type' => 'string',
                    'example' => 'lni-f8z4scmfh0u4ewv6vdd8',
                  ),
                  'NodeId' => 
                  array (
                    'title' => '所属机器ID',
                    'description' => '所属机器ID',
                    'type' => 'string',
                    'example' => 'masterintranett2fdth5fkoocg',
                  ),
                  'VpdBaseInfo' => 
                  array (
                    'title' => 'VPD基本信息',
                    'description' => '灵骏网段（VPD）基本信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VpdId' => 
                      array (
                        'title' => '灵骏网段实例ID',
                        'description' => '灵骏网段（VPD）实例ID',
                        'type' => 'string',
                        'example' => 'vpd-ppdunxzc',
                      ),
                      'VpdName' => 
                      array (
                        'title' => '灵骏网段实例名称',
                        'description' => '灵骏网段（VPD）实例名称',
                        'type' => 'string',
                        'example' => 'vpd-1',
                      ),
                      'Cidr' => 
                      array (
                        'title' => '网络地址段',
                        'description' => '灵骏子网的网段。

- 子网的网段必须是其所属灵骏网段的真子集且掩码需在16位到29位之间，可提供 8 ~ 65536 个地址。 例如，灵骏网段的网段为192.168.0.0/16，该灵骏网段下的子网的网段为 192.168.0.0/17 ~ 192.168.0.0/29。
- 每个子网网段的第一个和最后三个IP地址为系统保留地址。 例如，子网的网段为192.168.1.0/24，192.168.1.0、192.168.1.253、192.168.1.254和192.168.1.255这四个IP地址为系统保留地址。

<props="china">关于CIDR地址块的详细信息，请参见[什么是CIDR](https://help.aliyun.com/knowledge_detail/40637.html#title-gu4-uzk-12r)。</props>

<props="intl">关于CIDR地址块的详细信息，请参见[什么是CIDR](https://www.alibabacloud.com/help/doc-detail/40637.htm#title-gu4-uzk-12r)。</props>

<props="partner">关于CIDR地址块的详细信息，请参见[什么是CIDR](https://partners-intl.aliyun.com/help/doc-detail/40637.htm#title-gu4-uzk-12r)。</props>

默认值：空。',
                        'type' => 'string',
                        'example' => '172.18.0.0/24',
                      ),
                      'CreateTime' => 
                      array (
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '1678273219000',
                      ),
                    ),
                  ),
                  'ZoneId' => 
                  array (
                    'title' => '可用区ID',
                    'description' => '可用区ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu-b',
                  ),
                  'SubnetBaseInfo' => 
                  array (
                    'title' => 'SUBNET基本信息',
                    'description' => '灵骏子网（Subnet）基本信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SubnetId' => 
                      array (
                        'title' => '灵骏子网实例ID',
                        'description' => '灵骏子网（Subnet）实例ID',
                        'type' => 'string',
                        'example' => 'subnet-urb01blo',
                      ),
                      'SubnetName' => 
                      array (
                        'description' => '灵骏子网（Subnet）实例名称',
                        'type' => 'string',
                        'example' => 'subnet-1',
                      ),
                      'Cidr' => 
                      array (
                        'title' => '灵骏子网所属网段',
                        'description' => '网络地址段',
                        'type' => 'string',
                        'example' => '116.233.21.57/32',
                      ),
                      'CreateTime' => 
                      array (
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '1678273219000',
                      ),
                    ),
                  ),
                  'Ip' => 
                  array (
                    'title' => 'IP地址',
                    'description' => 'IP地址',
                    'type' => 'string',
                    'example' => '203.107.****',
                  ),
                  'ServiceMac' => 
                  array (
                    'title' => '服务网卡地址',
                    'description' => '服务网卡地址',
                    'type' => 'string',
                    'example' => '01-00-5e-00-00-16',
                  ),
                  'PrivateIpAddressMacGroup' => 
                  array (
                    'title' => '辅助私网IP',
                    'description' => '辅助私网IP&MAC地址集合',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '辅助私网IP&MAC地址',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IpName' => 
                        array (
                          'description' => 'IP唯一标识',
                          'type' => 'string',
                          'example' => 'sip-1asjd3xg',
                        ),
                        'PrivateIpAddress' => 
                        array (
                          'description' => '辅助私网IP地址',
                          'type' => 'string',
                          'example' => '172.23.161.57',
                        ),
                        'IpAddressMac' => 
                        array (
                          'description' => '辅助私网MAC地址',
                          'type' => 'string',
                          'example' => '01-00-5e-00-00-16',
                        ),
                        'Status' => 
                        array (
                          'description' => '实例状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述信息',
                          'description' => '描述信息',
                          'type' => 'string',
                          'example' => 'test测试',
                        ),
                        'Message' => 
                        array (
                          'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                      ),
                    ),
                  ),
                  'Ethernet' => 
                  array (
                    'title' => '端口',
                    'description' => '端口',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '端口信息',
                      'type' => 'string',
                      'example' => 'eth0 eth1',
                    ),
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'Gateway' => 
                  array (
                    'title' => '网关',
                    'description' => '网关',
                    'type' => 'string',
                    'example' => '172.24.20.254',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1678273219000',
                  ),
                  'Quota' => 
                  array (
                    'title' => '网卡私有辅助ip额度',
                    'description' => '网卡私有辅助IP额度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'NcType' => 
                  array (
                    'title' => 'NC类型',
                    'description' => 'NC类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'CUSTOM_LNI_INTEGRATION' => '两网合一架构灵骏托管网卡',
                      'CPU' => 'CPU机器',
                      'ELASTIC_6.2' => '两网合一架构机器',
                      'GPU' => 'GPU机器',
                      'DEFAULT' => '旧CPU机器',
                      'CUSTOM_LNI' => '两网分离架构灵骏托管网卡',
                    ),
                    'example' => 'DEFAULT',
                  ),
                  'NetworkInterfaceName' => 
                  array (
                    'title' => '端口名称',
                    'description' => '网卡名称',
                    'type' => 'string',
                    'example' => 'bond0',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"NetworkInterfaceId\\": \\"lni-f8z4scmfh0u4ewv6vdd8\\",\\n    \\"NodeId\\": \\"masterintranett2fdth5fkoocg\\",\\n    \\"VpdBaseInfo\\": {\\n      \\"VpdId\\": \\"vpd-ppdunxzc\\",\\n      \\"VpdName\\": \\"vpd-1\\",\\n      \\"Cidr\\": \\"172.18.0.0/24\\",\\n      \\"CreateTime\\": \\"1678273219000\\"\\n    },\\n    \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n    \\"SubnetBaseInfo\\": {\\n      \\"SubnetId\\": \\"subnet-urb01blo\\",\\n      \\"SubnetName\\": \\"subnet-1\\",\\n      \\"Cidr\\": \\"116.233.21.57/32\\",\\n      \\"CreateTime\\": \\"1678273219000\\"\\n    },\\n    \\"Ip\\": \\"203.107.****\\",\\n    \\"ServiceMac\\": \\"01-00-5e-00-00-16\\",\\n    \\"PrivateIpAddressMacGroup\\": [\\n      {\\n        \\"IpName\\": \\"sip-1asjd3xg\\",\\n        \\"PrivateIpAddress\\": \\"172.23.161.57\\",\\n        \\"IpAddressMac\\": \\"01-00-5e-00-00-16\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Description\\": \\"test测试\\",\\n        \\"Message\\": \\"success\\"\\n      }\\n    ],\\n    \\"Ethernet\\": [\\n      \\"eth0 eth1\\"\\n    ],\\n    \\"Status\\": \\"Available\\",\\n    \\"Gateway\\": \\"172.24.20.254\\",\\n    \\"CreateTime\\": \\"1678273219000\\",\\n    \\"Quota\\": 0,\\n    \\"NcType\\": \\"DEFAULT\\",\\n    \\"NetworkInterfaceName\\": \\"bond0\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询网卡实例信息',
    ),
    'ListNetworkInterfaces' => 
    array (
      'summary' => '查询灵骏网卡列表信息。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域 regionId',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡ID',
            'description' => '灵骏网卡ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lni-bp18exxqa2rvfn45e5pz',
          ),
        ),
        2 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属VPD',
            'description' => '所属灵骏网段（VPD）实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-iv2zm1qf',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属机器ID',
            'description' => '所属机器ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-2ze121o4uhr4np3r5t-db-5',
          ),
        ),
        4 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属Subnet',
            'description' => '所属灵骏子网（Subnet）实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'subnet-anhtskts',
          ),
        ),
        5 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡IP地址,不支持模糊查询',
            'description' => '网卡IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '203.107.46.227',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '当前页数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否需要分页。',
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
            'title' => 'AjaxResult<PageResult<NetworkInterfaceInfo>>',
            'description' => '响应实体对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '039C3C3A-3C37-5672-80D5-D8CD48C676D1',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏网卡信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID。',
                          'type' => 'string',
                          'example' => '1620939556166279
',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'NetworkInterfaceId' => 
                        array (
                          'title' => '网卡ID',
                          'description' => '灵骏网卡ID。',
                          'type' => 'string',
                          'example' => 'lni-2ze50voovmtswn328ogm',
                        ),
                        'NodeId' => 
                        array (
                          'title' => '所属机器ID',
                          'description' => '所属机器ID。',
                          'type' => 'string',
                          'example' => '2d53f5c204e7476dae69177e7fa6f19c',
                        ),
                        'VpdBaseInfo' => 
                        array (
                          'title' => 'VPD基本信息',
                          'description' => '灵骏网段（VPD）基本信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'VpdId' => 
                            array (
                              'title' => '灵骏网段实例ID',
                              'description' => '灵骏网段（VPD）实例ID。',
                              'type' => 'string',
                              'example' => 'vpd-d3isyds4',
                            ),
                            'VpdName' => 
                            array (
                              'title' => '灵骏网段实例名称',
                              'description' => '灵骏网段（VPD）实例名称。',
                              'type' => 'string',
                              'example' => 'vpd-1
',
                            ),
                            'Cidr' => 
                            array (
                              'title' => '网络地址段',
                              'description' => '灵骏网段（VPD）的网段。

- 建议您使用RFC私网地址作为灵骏网段的网段如10.0.0.0/8，172.16.0.0/12，192.168.0.0/16，多灵骏网段互通场景或灵骏网段和VPC互通场景需确保地址规划不能冲突。
- 您也可以使用除 100.64.0.0/10、224.0.0.0/4、127.0.0.0/8 或 169.254.0.0/16 及其子网外的自定义地址段作为VPD的主IPv4网段。
默认值：空。',
                              'type' => 'string',
                              'example' => '10.0.0.0/16',
                            ),
                            'CreateTime' => 
                            array (
                              'title' => '创建时间',
                              'description' => '创建时间。',
                              'type' => 'string',
                              'example' => '1668158213000',
                            ),
                          ),
                        ),
                        'ZoneId' => 
                        array (
                          'title' => '可用区ID',
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'SubnetBaseInfo' => 
                        array (
                          'title' => 'SUBNET基本信息',
                          'description' => '灵骏子网（Subnet）基本信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SubnetId' => 
                            array (
                              'title' => '灵骏子网实例ID',
                              'description' => '灵骏子网（Subnet）实例ID。',
                              'type' => 'string',
                              'example' => 'subnet-yjnqn5ef',
                            ),
                            'SubnetName' => 
                            array (
                              'description' => '灵骏子网（Subnet）实例名称。',
                              'type' => 'string',
                              'example' => 'subnet-1',
                            ),
                            'Cidr' => 
                            array (
                              'title' => '灵骏子网所属网段',
                              'description' => '灵骏子网（Subnet）的网段。

- 子网的网段必须是其所属灵骏网段的真子集且掩码需在16位到29位之间，可提供 8 ~ 65536 个地址。 例如，灵骏网段的网段为192.168.0.0/16，该灵骏网段下的子网的网段为 192.168.0.0/17 ~ 192.168.0.0/29。
- 每个子网网段的第一个和最后三个IP地址为系统保留地址。 例如，子网的网段为192.168.1.0/24，192.168.1.0、192.168.1.253、192.168.1.254和192.168.1.255这四个IP地址为系统保留地址。

<props="china">关于CIDR地址块的详细信息，请参见[什么是CIDR](https://help.aliyun.com/knowledge_detail/40637.html#title-gu4-uzk-12r)。</props>

<props="intl">关于CIDR地址块的详细信息，请参见[什么是CIDR](https://www.alibabacloud.com/help/doc-detail/40637.htm#title-gu4-uzk-12r)。</props>

<props="partner">关于CIDR地址块的详细信息，请参见[什么是CIDR](https://partners-intl.aliyun.com/help/doc-detail/40637.htm#title-gu4-uzk-12r)。</props>

默认值：空。',
                              'type' => 'string',
                              'example' => '10.0.0.0/24',
                            ),
                            'CreateTime' => 
                            array (
                              'title' => '创建时间',
                              'description' => '创建时间。',
                              'type' => 'string',
                              'example' => '1623656472000',
                            ),
                          ),
                        ),
                        'Ip' => 
                        array (
                          'title' => 'IP地址',
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '10.0.0.13',
                        ),
                        'ServiceMac' => 
                        array (
                          'title' => '服务网卡地址',
                          'description' => '服务网卡地址。',
                          'type' => 'string',
                          'example' => '00-ff-84-15-ba-67',
                        ),
                        'PrivateIpAddressMacGroup' => 
                        array (
                          'title' => '辅助私网IP',
                          'description' => '辅助私网IP&MAC地址集合',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '描述信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'IpName' => 
                              array (
                                'description' => 'IP唯一标识。',
                                'type' => 'string',
                                'example' => 'sip-1asjd3xg',
                              ),
                              'PrivateIpAddress' => 
                              array (
                                'description' => '辅助私网IP地址。',
                                'type' => 'string',
                                'example' => '10.0.0.14',
                              ),
                              'IpAddressMac' => 
                              array (
                                'description' => '辅助私网MAC地址。',
                                'type' => 'string',
                                'example' => '00:25:9d:00:20:20',
                              ),
                              'Status' => 
                              array (
                                'description' => '实例状态。',
                                'type' => 'string',
                                'example' => 'Available',
                              ),
                              'Description' => 
                              array (
                                'title' => '描述信息',
                                'description' => '描述信息',
                                'type' => 'string',
                                'example' => 'test测试',
                              ),
                              'Message' => 
                              array (
                                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                                'type' => 'string',
                                'example' => 'success',
                              ),
                            ),
                          ),
                        ),
                        'Ethernet' => 
                        array (
                          'title' => '端口',
                          'description' => '端口。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '网卡端口信息。',
                            'type' => 'string',
                            'example' => 'eth1 eth2',
                          ),
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Gateway' => 
                        array (
                          'title' => '网关',
                          'description' => '网关。',
                          'type' => 'string',
                          'example' => '10.0.0.253',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '1669734207000',
                        ),
                        'Quota' => 
                        array (
                          'title' => '网卡私有辅助ip额度',
                          'description' => '网卡私有辅助IP额度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '6',
                        ),
                        'NcType' => 
                        array (
                          'title' => 'NC类型',
                          'description' => 'NC类型。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'CUSTOM_LNI_INTEGRATION' => '两网合一架构灵骏托管网卡',
                            'CPU' => 'CPU机器',
                            'ELASTIC_6.2' => '两网合一架构机器',
                            'GPU' => 'GPU机器',
                            'DEFAULT' => '旧CPU机器',
                            'CUSTOM_LNI' => '两网分离架构灵骏托管网卡',
                          ),
                          'example' => 'GPU',
                        ),
                        'NetworkInterfaceName' => 
                        array (
                          'title' => '端口名称',
                          'description' => '端口名称。',
                          'type' => 'string',
                          'example' => 'bond0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"039C3C3A-3C37-5672-80D5-D8CD48C676D1\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"TenantId\\": \\"1620939556166279\\\\n\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"NetworkInterfaceId\\": \\"lni-2ze50voovmtswn328ogm\\",\\n        \\"NodeId\\": \\"2d53f5c204e7476dae69177e7fa6f19c\\",\\n        \\"VpdBaseInfo\\": {\\n          \\"VpdId\\": \\"vpd-d3isyds4\\",\\n          \\"VpdName\\": \\"vpd-1\\\\n\\",\\n          \\"Cidr\\": \\"10.0.0.0/16\\",\\n          \\"CreateTime\\": \\"1668158213000\\"\\n        },\\n        \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"SubnetBaseInfo\\": {\\n          \\"SubnetId\\": \\"subnet-yjnqn5ef\\",\\n          \\"SubnetName\\": \\"subnet-1\\",\\n          \\"Cidr\\": \\"10.0.0.0/24\\",\\n          \\"CreateTime\\": \\"1623656472000\\"\\n        },\\n        \\"Ip\\": \\"10.0.0.13\\",\\n        \\"ServiceMac\\": \\"00-ff-84-15-ba-67\\",\\n        \\"PrivateIpAddressMacGroup\\": [\\n          {\\n            \\"IpName\\": \\"sip-1asjd3xg\\",\\n            \\"PrivateIpAddress\\": \\"10.0.0.14\\",\\n            \\"IpAddressMac\\": \\"00:25:9d:00:20:20\\",\\n            \\"Status\\": \\"Available\\",\\n            \\"Description\\": \\"test测试\\",\\n            \\"Message\\": \\"success\\"\\n          }\\n        ],\\n        \\"Ethernet\\": [\\n          \\"eth1 eth2\\"\\n        ],\\n        \\"Status\\": \\"Available\\",\\n        \\"Gateway\\": \\"10.0.0.253\\",\\n        \\"CreateTime\\": \\"1669734207000\\",\\n        \\"Quota\\": 6,\\n        \\"NcType\\": \\"GPU\\",\\n        \\"NetworkInterfaceName\\": \\"bond0\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网卡列表',
    ),
    'ListLniPrivateIpAddress' => 
    array (
      'summary' => '查询当前灵骏网卡辅助私网IP的列表信息。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域 regionId',
            'description' => '地域 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡ID',
            'description' => '灵骏网卡ID',
            'type' => 'string',
            'required' => false,
            'example' => 'lni-2ze4uww7n6hsfzrwq77y',
          ),
        ),
        2 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡IP地址',
            'description' => '网卡IP地址',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.98.10',
          ),
        ),
        3 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'IP唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'sip-tynhdh2s',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'test测试',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '当前页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否需要分页',
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
            'title' => 'AjaxResult<PageResult<IpAddressMacDTO>>',
            'description' => 'AjaxResult<PageResult<IpAddressMacDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '返回的结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1651734291000',
                        ),
                        'NetworkInterfaceId' => 
                        array (
                          'description' => '灵骏网卡ID',
                          'type' => 'string',
                          'example' => 'lni-bp11hq1ql7vza3k4xz7q',
                        ),
                        'IpName' => 
                        array (
                          'description' => 'IP唯一标识',
                          'type' => 'string',
                          'example' => 'sip-1hq1ql7vz',
                        ),
                        'PrivateIpAddress' => 
                        array (
                          'description' => '灵骏网卡的辅助私网IP地址',
                          'type' => 'string',
                          'example' => '10.42.5.92',
                        ),
                        'IpAddressMac' => 
                        array (
                          'description' => '辅助私网的MAC地址',
                          'type' => 'string',
                          'example' => '00-ff-84-15-ba-67',
                        ),
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述信息',
                          'description' => '描述信息',
                          'type' => 'string',
                          'example' => 'test测试',
                        ),
                        'Message' => 
                        array (
                          'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                          'type' => 'string',
                          'example' => '成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"GmtCreate\\": \\"1651734291000\\",\\n        \\"NetworkInterfaceId\\": \\"lni-bp11hq1ql7vza3k4xz7q\\",\\n        \\"IpName\\": \\"sip-1hq1ql7vz\\",\\n        \\"PrivateIpAddress\\": \\"10.42.5.92\\",\\n        \\"IpAddressMac\\": \\"00-ff-84-15-ba-67\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"Description\\": \\"test测试\\",\\n        \\"Message\\": \\"成功\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏网卡私网IP列表',
    ),
    'AssignPrivateIpAddress' => 
    array (
      'summary' => '为当前的灵骏网卡申请辅助私网IP，以及可选自动分配辅助Mac地址。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡ID',
            'description' => '网卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-bp18exxqa2rvfn45e5pz',
          ),
        ),
        2 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属灵骏子网',
            'description' => '所属灵骏子网。',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-f3zfzmnc',
          ),
        ),
        3 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '辅助私网ip地址',
            'description' => '辅助私网IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.6.194',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'test测试',
          ),
        ),
        5 => 
        array (
          'name' => 'AssignMac',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否分配mac地址',
            'description' => '是否分配mac地址。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'SkipConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否跳过下发交换机配置地址',
            'description' => '默认值是false。值为true时可以加速辅助私网IP申请流程。

> 具体使用方法请提工单咨询。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'popApi 默认不忽略，幂等使用',
            'description' => 'popApi 默认不忽略，幂等使用',
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
            'title' => 'AjaxResult<OperatePrivateIpMacBaseRsp>',
            'description' => '响应实体对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'NetworkInterfaceId' => 
                  array (
                    'description' => '灵骏网卡ID。',
                    'type' => 'string',
                    'example' => 'lni-bp18exxqa2rvfn45e5pz',
                  ),
                  'IpName' => 
                  array (
                    'description' => 'IP唯一标识。',
                    'type' => 'string',
                    'example' => 'sip-8exxqa2r',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"NetworkInterfaceId\\": \\"lni-bp18exxqa2rvfn45e5pz\\",\\n    \\"IpName\\": \\"sip-8exxqa2r\\"\\n  }\\n}","type":"json"}]',
      'title' => '分配辅助私网IP',
      'description' => '> 辅助私网IP地址申请规则
> - 每张网卡申请辅助私网IP的额度默认为3个，如超过额度，需要联系管理员处理。
> - 辅助私网IP地址是从当前网卡所属的灵骏子网中分配，第一个地址和最后两个地址属于保留地址，不参与分配。',
    ),
    'UnAssignPrivateIpAddress' => 
    array (
      'summary' => '将分配的辅助私网IP地址删除。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属地域',
            'description' => '所属地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡ID',
            'description' => '灵骏网卡ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-bp18exxqa2rvfn45e5pz',
          ),
        ),
        2 => 
        array (
          'name' => 'SubnetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所属Subnet',
            'description' => '所属Subnet',
            'type' => 'string',
            'required' => true,
            'example' => 'subnet-f3zfzmnc',
          ),
        ),
        3 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'IP标识，必传',
            'description' => 'IP唯一标识',
            'type' => 'string',
            'required' => true,
            'example' => 'sip-xxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '私有Ip地址',
            'description' => '私有IP地址',
            'type' => 'string',
            'required' => false,
            'example' => '10.209.75.242',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'popApi 默认不忽略，幂等使用',
            'description' => 'popApi 默认不忽略，幂等使用',
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
            'title' => 'AjaxResult<OperatePrivateIpMacBaseRsp>',
            'description' => 'AjaxResult<OperatePrivateIpMacBaseRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'NetworkInterfaceId' => 
                  array (
                    'description' => '灵骏网卡ID',
                    'type' => 'string',
                    'example' => 'lni-bp164jwjpdq4lnsy83s5',
                  ),
                  'IpName' => 
                  array (
                    'description' => 'IP唯一标识',
                    'type' => 'string',
                    'example' => 'sip-xxxxx',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"NetworkInterfaceId\\": \\"lni-bp164jwjpdq4lnsy83s5\\",\\n    \\"IpName\\": \\"sip-xxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '取消分配私网辅助IP',
    ),
    'GetLniPrivateIpAddress' => 
    array (
      'summary' => '获取辅助私网IP详情信息。',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkInterfaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡id',
            'description' => '灵骏网卡ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-bp18exxqa2rvfn45e5pz',
          ),
        ),
        2 => 
        array (
          'name' => 'IpName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'ip标识',
            'description' => 'IP唯一标识',
            'type' => 'string',
            'required' => true,
            'example' => 'sip-xxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<IpAddressMacDTO>',
            'description' => 'AjaxResult<IpAddressMacDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '系统返回状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'DBAD15D6-3F47-5B36-8A92-57C2919D13D0',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2022-12-26 20:16:36',
                  ),
                  'NetworkInterfaceId' => 
                  array (
                    'description' => '灵骏网卡ID',
                    'type' => 'string',
                    'example' => 'lni-2ze4uww7n6hsfzrwq77y',
                  ),
                  'IpName' => 
                  array (
                    'description' => 'IP唯一标识',
                    'type' => 'string',
                    'example' => 'sip-xxxxx',
                  ),
                  'PrivateIpAddress' => 
                  array (
                    'description' => '灵骏网卡的辅助私网IP地址。',
                    'type' => 'string',
                    'example' => '10.42.5.92',
                  ),
                  'IpAddressMac' => 
                  array (
                    'description' => '辅助私网的MAC地址',
                    'type' => 'string',
                    'example' => '00-ff-84-15-ba-67',
                  ),
                  'Status' => 
                  array (
                    'description' => '实例状态',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'Description' => 
                  array (
                    'title' => '描述信息',
                    'description' => '描述信息',
                    'type' => 'string',
                    'example' => 'test测试',
                  ),
                  'Message' => 
                  array (
                    'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"DBAD15D6-3F47-5B36-8A92-57C2919D13D0\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"GmtCreate\\": \\"2022-12-26 20:16:36\\",\\n    \\"NetworkInterfaceId\\": \\"lni-2ze4uww7n6hsfzrwq77y\\",\\n    \\"IpName\\": \\"sip-xxxxx\\",\\n    \\"PrivateIpAddress\\": \\"10.42.5.92\\",\\n    \\"IpAddressMac\\": \\"00-ff-84-15-ba-67\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"Description\\": \\"test测试\\",\\n    \\"Message\\": \\"成功\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取私网IP详情',
    ),
    'CreateEr' => 
    array (
      'summary' => '创建灵骏HUB。',
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
          'name' => 'ErName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB名称',
            'description' => '灵骏HUB名称',
            'type' => 'string',
            'required' => true,
            'example' => 'er-wulanchabu-main',
          ),
        ),
        1 => 
        array (
          'name' => 'MasterZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主可用区',
            'description' => '主可用区',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu-b',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => 'er-乌兰察布实例',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
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
            'title' => 'AjaxResult<CreateErRsp>',
            'description' => 'AjaxResult<CreateErRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '业务码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'ErId' => 
                  array (
                    'title' => '灵骏HUB ID',
                    'description' => '灵骏HUB ID',
                    'type' => 'string',
                    'example' => 'er-aueyxxsy',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"ErId\\": \\"er-aueyxxsy\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏HUB',
      'description' => '调用该接口创建灵骏HUB时，请注意：

- 请确保您有足够的灵骏HUB配额。
- 该接口属于异步接口，调用该接口后，系统将返回一个灵骏HUB的ID，此时灵骏HUB实例可能尚未创建完成，系统后台的创建任务仍在进行中。您可以通过ListErs或者GetEr查询灵骏HUB的状态：
    - 当灵骏HUB状态是Executing时，表示正在创建。
    - 当灵骏HUB状态是Available时，表示创建成功。',
    ),
    'DeleteEr' => 
    array (
      'summary' => '删除某个灵骏HUB实例，删除后相关数据丢失且不可恢复。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult',
            'description' => 'AjaxResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '删除灵骏HUB',
      'description' => '调用该接口删除灵骏HUB时，请注意：

- 删除前，请确保灵骏HUB实例下不存在网络实例连接。
- 删除后，相关数据全部丢失且不可恢复，请谨慎操作。
- 该接口属于异步接口，调用该接口后，灵骏HUB实例可能尚未删除完成，系统后台的删除任务仍在进行中。您可以调用ListErs或GetEr查询灵骏HUB的删除状态：
    - 当灵骏HUB的状态是Deleting时，表示灵骏HUB实例正在删除中。
    - 当没有该灵骏HUB实例记录时，表示灵骏HUB实例已经删除完成。',
    ),
    'GetEr' => 
    array (
      'summary' => '查询灵骏HUB。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetErRsp>',
            'description' => 'AjaxResult<GetErRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '业务码，成功返回0',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '调用失败时返回的信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '308DE9D2-03A6-5B44-A369-67B75D1EE091',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1644283112720',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '1627545952000',
                  ),
                  'Message' => 
                  array (
                    'title' => '提示信息',
                    'description' => '提示信息',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                  'ErId' => 
                  array (
                    'title' => '弹性路由器ID',
                    'description' => '灵骏HUB实例ID',
                    'type' => 'string',
                    'example' => 'er-aueyxxsy',
                  ),
                  'RegionId' => 
                  array (
                    'title' => 'ER地域信息',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1620939556166277',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'ErName' => 
                  array (
                    'title' => 'ER实例名称',
                    'description' => '灵骏HUB实例名称',
                    'type' => 'string',
                    'example' => 'er-heyuan-main',
                  ),
                  'MasterZoneId' => 
                  array (
                    'title' => '主可用区',
                    'description' => '主可用区',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu-b',
                  ),
                  'Description' => 
                  array (
                    'title' => '描述',
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '描述',
                  ),
                  'ErAttachments' => 
                  array (
                    'title' => '网络实例信息',
                    'description' => '网络实例信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '网络实例信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1644283112720',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1649303733000',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息',
                          'type' => 'string',
                          'example' => '可用',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'RegionId' => 
                        array (
                          'title' => 'ER地域信息',
                          'description' => '地域信息',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'ErAttachmentName' => 
                        array (
                          'title' => 'ER网络实例名称',
                          'description' => '网络实例名称',
                          'type' => 'string',
                          'example' => 'er网络实例-vpd-kkopgtne',
                        ),
                        'ErAttachmentId' => 
                        array (
                          'title' => 'ER网络实例ID',
                          'description' => '灵骏HUB网络实例连接ID',
                          'type' => 'string',
                          'example' => 'er-attachment-f32hxfsu',
                        ),
                        'ErId' => 
                        array (
                          'title' => '弹性路由器ID',
                          'description' => '灵骏HUB实例ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'InstanceType' => 
                        array (
                          'title' => '实例类型：VPD、CSC、DLR、ER',
                          'description' => '实例类型：VPD、VCC',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'VCC' => '灵骏连接',
                            'VPD' => '灵骏网段',
                          ),
                          'example' => 'VPD',
                        ),
                        'InstanceId' => 
                        array (
                          'title' => '实例ID',
                          'description' => '实例ID',
                          'type' => 'string',
                          'example' => 'vpd-kkopgtne',
                        ),
                        'InstanceName' => 
                        array (
                          'title' => '实例名称',
                          'description' => '实例名称',
                          'type' => 'string',
                          'example' => '灵骏网段实例',
                        ),
                        'AutoReceiveAllRoute' => 
                        array (
                          'title' => '自动接收所有路由',
                          'description' => '自动接收所有路由',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Across' => 
                        array (
                          'title' => '是否夸账号',
                          'description' => '是否跨账号',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ResourceTenantId' => 
                        array (
                          'title' => '资源所属租户ID',
                          'description' => '资源所属租户ID',
                          'type' => 'string',
                          'example' => 'xxxxxxxx',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'ErRouteMaps' => 
                  array (
                    'title' => '路由策略信息',
                    'description' => '路由策略信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '路由策略信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => 'XXQGPROD-zh_CN',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1645766599809',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1623899444000',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'ErRouteMapId' => 
                        array (
                          'title' => '路由策略ID',
                          'description' => '路由策略ID',
                          'type' => 'string',
                          'example' => 'er-rmap-xkslnmsr',
                        ),
                        'ErId' => 
                        array (
                          'title' => '灵骏HUB ID',
                          'description' => '灵骏HUB ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'RouteMapNum' => 
                        array (
                          'title' => '策略序号(1001-2000)',
                          'description' => '策略序号(1001-2000)',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1001',
                        ),
                        'Description' => 
                        array (
                          'title' => '策略描述',
                          'description' => '策略描述',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DestinationCidrBlock' => 
                        array (
                          'title' => '目的网段',
                          'description' => '目的网段',
                          'type' => 'string',
                          'example' => '10.0.0.0/8',
                        ),
                        'TransmissionInstanceName' => 
                        array (
                          'title' => '源实例名称',
                          'description' => '源实例名称',
                          'type' => 'string',
                          'example' => '发送实例',
                        ),
                        'TransmissionInstanceId' => 
                        array (
                          'title' => '源实例ID',
                          'description' => '源实例ID',
                          'type' => 'string',
                          'example' => 'vpd-xmglsymg',
                        ),
                        'TransmissionInstanceType' => 
                        array (
                          'title' => '源实例类型',
                          'description' => '源实例类型',
                          'type' => 'string',
                          'example' => 'VPD',
                        ),
                        'ReceptionInstanceName' => 
                        array (
                          'title' => '目的实例名称',
                          'description' => '目的实例名称',
                          'type' => 'string',
                          'example' => '接收实例',
                        ),
                        'ReceptionInstanceId' => 
                        array (
                          'title' => '目的实例ID',
                          'description' => '目的实例ID',
                          'type' => 'string',
                          'example' => 'vpd-sdkd2gkx',
                        ),
                        'ReceptionInstanceType' => 
                        array (
                          'title' => '目的实例类型',
                          'description' => '目的实例类型',
                          'type' => 'string',
                          'example' => 'VPD',
                        ),
                        'Action' => 
                        array (
                          'title' => '策略行为',
                          'description' => '策略行为',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'deny' => '拒绝',
                            'permit' => '允许',
                          ),
                          'example' => ' permit',
                        ),
                        'TransmissionInstanceOwner' => 
                        array (
                          'title' => '源实例所属租户',
                          'description' => '源实例所属租户',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'ReceptionInstanceOwner' => 
                        array (
                          'title' => '目的实例所属租户',
                          'description' => '目的实例所属租户',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
                          'type' => 'string',
                        ),
                        'ErRouteMapName' => 
                        array (
                          'title' => '路由策略名称',
                          'description' => '路由策略名称',
                          'type' => 'string',
                          'example' => '路由条目信息',
                        ),
                      ),
                    ),
                  ),
                  'ErRouteEntrys' => 
                  array (
                    'title' => '路由条目信息',
                    'description' => '路由条目信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '路由条目信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErId' => 
                        array (
                          'title' => '灵骏HUB实例ID',
                          'description' => '灵骏HUB实例ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'ResourceTenantId' => 
                        array (
                          'title' => '资源所属租户ID',
                          'description' => '资源所属租户ID',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域',
                          'description' => '地域',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'ErRouteEntryId' => 
                        array (
                          'title' => '路由条目ID',
                          'description' => '路由条目ID',
                          'type' => 'string',
                          'example' => 'er-rte-xnmsd2kl',
                        ),
                        'DestinationCidrBlock' => 
                        array (
                          'title' => '目的网段',
                          'description' => '目的网段',
                          'type' => 'string',
                          'example' => '10.0.0.0/9',
                        ),
                        'NextHopType' => 
                        array (
                          'title' => '下一跳类型',
                          'description' => '下一跳实例类型',
                          'type' => 'string',
                          'example' => 'VCC',
                        ),
                        'NextHopId' => 
                        array (
                          'title' => '下一跳实列',
                          'description' => '下一跳实例',
                          'type' => 'string',
                          'example' => 'vcc-xxkmggkw',
                        ),
                        'RouteType' => 
                        array (
                          'title' => '路由类型',
                          'description' => '路由类型',
                          'type' => 'string',
                          'example' => 'System',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '1623317089000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"308DE9D2-03A6-5B44-A369-67B75D1EE091\\",\\n  \\"Content\\": {\\n    \\"CreateTime\\": \\"1644283112720\\",\\n    \\"GmtModified\\": \\"1627545952000\\",\\n    \\"Message\\": \\"成功\\",\\n    \\"ErId\\": \\"er-aueyxxsy\\",\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"TenantId\\": \\"1620939556166277\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"ErName\\": \\"er-heyuan-main\\",\\n    \\"MasterZoneId\\": \\"cn-wulanchabu-b\\",\\n    \\"Description\\": \\"描述\\",\\n    \\"ErAttachments\\": [\\n      {\\n        \\"CreateTime\\": \\"1644283112720\\",\\n        \\"GmtModified\\": \\"1649303733000\\",\\n        \\"Message\\": \\"可用\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"1620939556166277\\",\\n        \\"ErAttachmentName\\": \\"er网络实例-vpd-kkopgtne\\",\\n        \\"ErAttachmentId\\": \\"er-attachment-f32hxfsu\\",\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"InstanceType\\": \\"VPD\\",\\n        \\"InstanceId\\": \\"vpd-kkopgtne\\",\\n        \\"InstanceName\\": \\"灵骏网段实例\\",\\n        \\"AutoReceiveAllRoute\\": true,\\n        \\"Across\\": false,\\n        \\"ResourceTenantId\\": \\"xxxxxxxx\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ],\\n    \\"ErRouteMaps\\": [\\n      {\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"XXQGPROD-zh_CN\\",\\n        \\"CreateTime\\": \\"1645766599809\\",\\n        \\"GmtModified\\": \\"1623899444000\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"ErRouteMapId\\": \\"er-rmap-xkslnmsr\\",\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"RouteMapNum\\": 1001,\\n        \\"Description\\": \\"test\\",\\n        \\"DestinationCidrBlock\\": \\"10.0.0.0/8\\",\\n        \\"TransmissionInstanceName\\": \\"发送实例\\",\\n        \\"TransmissionInstanceId\\": \\"vpd-xmglsymg\\",\\n        \\"TransmissionInstanceType\\": \\"VPD\\",\\n        \\"ReceptionInstanceName\\": \\"接收实例\\",\\n        \\"ReceptionInstanceId\\": \\"vpd-sdkd2gkx\\",\\n        \\"ReceptionInstanceType\\": \\"VPD\\",\\n        \\"Action\\": \\" permit\\",\\n        \\"TransmissionInstanceOwner\\": \\"1620939556166277\\",\\n        \\"ReceptionInstanceOwner\\": \\"1620939556166277\\",\\n        \\"ResourceGroupId\\": \\"\\",\\n        \\"ErRouteMapName\\": \\"路由条目信息\\"\\n      }\\n    ],\\n    \\"ErRouteEntrys\\": [\\n      {\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"TenantId\\": \\"1620939556166277\\",\\n        \\"ResourceTenantId\\": \\"1620939556166277\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"ErRouteEntryId\\": \\"er-rte-xnmsd2kl\\",\\n        \\"DestinationCidrBlock\\": \\"10.0.0.0/9\\",\\n        \\"NextHopType\\": \\"VCC\\",\\n        \\"NextHopId\\": \\"vcc-xxkmggkw\\",\\n        \\"RouteType\\": \\"System\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"GmtModified\\": \\"1623317089000\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ],\\n    \\"ResourceGroupId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB详情信息',
    ),
    'ListErs' => 
    array (
      'summary' => '查询灵骏HUB。',
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
          'name' => 'MasterZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主可用区',
            'description' => '主可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu-b',
          ),
        ),
        1 => 
        array (
          'name' => 'ErName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性路由器名称',
            'description' => '灵骏HUB名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'er-heyuan-main',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性路由器Id',
            'description' => '灵骏HUB实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'er-kkop****',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例Id,可以是VPD,可以是VCC',
            'description' => '网络实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-209300q****',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例类型: VPD、VCC、DLR...',
            'description' => '网络实例类型。
取值：

- **灵骏网段（VPD）**

- **灵骏连接（VCC）**',
            'type' => 'string',
            'required' => false,
            'example' => 'VCC',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询。
取值：

- true：开启分页查询。

- false：关闭分页查询。',
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
            'title' => 'AjaxResult<PageResult<ListErRsp>>',
            'description' => '请求响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因。）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏HUB信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏HUB信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '1640930671000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '1640930671000',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息。',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'ErId' => 
                        array (
                          'title' => '弹性路由器ID',
                          'description' => '灵骏HUB实例ID。',
                          'type' => 'string',
                          'example' => 'er-kkop****',
                        ),
                        'RegionId' => 
                        array (
                          'title' => 'ER地域信息',
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID。',
                          'type' => 'string',
                          'example' => '165544950****',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'ErName' => 
                        array (
                          'title' => 'ER实例名称',
                          'description' => '灵骏HUB实例名称。',
                          'type' => 'string',
                          'example' => 'er-wulanchabu-main',
                        ),
                        'MasterZoneId' => 
                        array (
                          'title' => '主可用区',
                          'description' => '主可用区。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu-b',
                        ),
                        'Description' => 
                        array (
                          'title' => '描述',
                          'description' => '描述。',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'Connections' => 
                        array (
                          'title' => '连接数',
                          'description' => '灵骏HUB网络实例连接数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'RouteMaps' => 
                        array (
                          'title' => '路由策略数量',
                          'description' => '灵骏HUB路由策略数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"Total\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"CreateTime\\": \\"1640930671000\\",\\n        \\"GmtModified\\": \\"1640930671000\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"ErId\\": \\"er-kkop****\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"165544950****\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"ErName\\": \\"er-wulanchabu-main\\",\\n        \\"MasterZoneId\\": \\"cn-wulanchabu-b\\",\\n        \\"Description\\": \\"描述\\",\\n        \\"Connections\\": 2,\\n        \\"RouteMaps\\": 2,\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB',
    ),
    'UpdateEr' => 
    array (
      'summary' => '更新灵骏HUB。',
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
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        1 => 
        array (
          'name' => 'ErName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '名称',
            'type' => 'string',
            'required' => false,
            'example' => 'er-wulanchabu-main',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<UpdateErRsp>',
            'description' => 'AjaxResult<UpdateErRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '3D9D6E7B-365B-5200-BFA6-9B79E269058C',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"3D9D6E7B-365B-5200-BFA6-9B79E269058C\\",\\n  \\"Content\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏HUB',
    ),
    'CreateErAttachment' => 
    array (
      'summary' => '创建网络实例连接。',
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
          'name' => 'InstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例类型',
            'description' => '实例类型。取值：

- **VPD**：表示灵骏网段。
- **VCC**：表示灵骏连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'VPD',
          ),
        ),
        1 => 
        array (
          'name' => 'ErAttachmentName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例连接名称',
            'description' => '网络实例连接名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'er-attachemnt-vpd-xksd2obl',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '网络实例ID，目前支持**灵骏网段(VPD)**、**灵骏连接(VCC)**。

更多信息，请参见[什么是灵骏？](https://help.aliyun.com/document_detail/444430.html)

您可以通过[ListVpds](https://help.aliyun.com/document_detail/2331077.html)、[ListVccs](https://help.aliyun.com/document_detail/2399526.html?)分别查询**灵骏网段**、**灵骏连接**。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-xksd****',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoReceiveAllRoute',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否自动接收来自本ER的实例的所有路由',
            'description' => '是否自动接收来自本灵骏HUB下所有实例的所有路由。取值：

- **true**  ：自动接收。
- **false** ：不接收。',
            'type' => 'boolean',
            'required' => true,
            'enumValueTitles' => 
            array (
              'true' => '自动接收',
              'false' => '不接收',
            ),
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源所属租户Id;跨账号资源需要填写',
            'description' => '资源所属租户ID，跨账号资源需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => '162093955616****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        6 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkop****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<CreateErAttachmentRsp>',
            'description' => '响应实体。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因。）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'DBAD15D6-3F47-5B36-8A92-57C2919D13D0',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ErAttachmentId' => 
                  array (
                    'title' => '网络连接实例ID',
                    'description' => '网络连接实例ID。',
                    'type' => 'string',
                    'example' => 'er-attachment-ggjb****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"DBAD15D6-3F47-5B36-8A92-57C2919D13D0\\",\\n  \\"Content\\": {\\n    \\"ErAttachmentId\\": \\"er-attachment-ggjb****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建网络实例连接',
      'description' => '调用该接口创建网络实例连接时，请注意：

- 请确保您已创建灵骏HUB实例。
- 请确保您有足够的网络实例连接配额。
- 该接口属于异步接口，调用该接口后，系统将返回一个网络实例连接的ID，此时网络实例连接实例可能尚未创建完成，系统后台的创建任务仍在进行中。您可以通过ListErAttachments或者GetErAttachment查询网络实例连接的状态：
    - 当网络实例连接状态是Executing时，表示正在创建。
    - 当网络实例连接状态是Available时，表示创建成功。',
    ),
    'DeleteErAttachment' => 
    array (
      'summary' => '删除某个网络实例连接实例，删除后相关数据丢失且不可恢复。',
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
          'name' => 'ErAttachmentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络连接实例ID',
            'description' => '网络连接实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-attachment-5n3nsmvl',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域Id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB Id',
            'type' => 'string',
            'required' => true,
            'example' => 'er-opy1wrfv',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<Object>',
            'description' => 'AjaxResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容（当资源存在依赖资源时，会返回存在的依赖资源）。',
                'type' => 'any',
                'example' => '{
    "ER_RMAP": [
        {
            "erId": "er-opy1wrfv",
            "destinationCidrBlock": "0.0.0.0/0",
            "regionId": "cn-wulanchabu",
            "routeMapNum": 3000,
            "erRouteMapId": "er-rmap-v5lfhmvm",
            "action": "permit",
            "status": "Available"
        },
        {
            "erId": "er-opy1wrfv",
            "destinationCidrBlock": "0.0.0.0/0",
            "regionId": "cn-wulanchabu",
            "routeMapNum": 3000,
            "erRouteMapId": "er-rmap-of3r0ndh",
            "action": "permit",
            "status": "Available"
        }
    ]
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": \\"{\\\\n    \\\\\\"ER_RMAP\\\\\\": [\\\\n        {\\\\n            \\\\\\"erId\\\\\\": \\\\\\"er-opy1wrfv\\\\\\",\\\\n            \\\\\\"destinationCidrBlock\\\\\\": \\\\\\"0.0.0.0/0\\\\\\",\\\\n            \\\\\\"regionId\\\\\\": \\\\\\"cn-wulanchabu\\\\\\",\\\\n            \\\\\\"routeMapNum\\\\\\": 3000,\\\\n            \\\\\\"erRouteMapId\\\\\\": \\\\\\"er-rmap-v5lfhmvm\\\\\\",\\\\n            \\\\\\"action\\\\\\": \\\\\\"permit\\\\\\",\\\\n            \\\\\\"status\\\\\\": \\\\\\"Available\\\\\\"\\\\n        },\\\\n        {\\\\n            \\\\\\"erId\\\\\\": \\\\\\"er-opy1wrfv\\\\\\",\\\\n            \\\\\\"destinationCidrBlock\\\\\\": \\\\\\"0.0.0.0/0\\\\\\",\\\\n            \\\\\\"regionId\\\\\\": \\\\\\"cn-wulanchabu\\\\\\",\\\\n            \\\\\\"routeMapNum\\\\\\": 3000,\\\\n            \\\\\\"erRouteMapId\\\\\\": \\\\\\"er-rmap-of3r0ndh\\\\\\",\\\\n            \\\\\\"action\\\\\\": \\\\\\"permit\\\\\\",\\\\n            \\\\\\"status\\\\\\": \\\\\\"Available\\\\\\"\\\\n        }\\\\n    ]\\\\n}\\"\\n}","type":"json"}]',
      'title' => '删除网络实例连接',
      'description' => '调用该接口删除网络实例连接时，请注意：

- 删除前，请确保网络实例连接实例下不存在路由策略。
- 删除后，相关数据全部丢失且不可恢复，请谨慎操作。
- 该接口属于异步接口，调用该接口后，网络实例连接实例可能尚未删除完成，系统后台的删除任务仍在进行中。您可以调用ListErAttachments或GetErAttachment查询网络实例连接的删除状态：
    - 当网络实例连接的状态是Deleting时，表示网络实例连接实例正在删除中。
    - 当没有该网络实例连接实例记录时，表示网络实例连接实例已经删除完成。',
    ),
    'UpdateErAttachment' => 
    array (
      'summary' => '更新网络实例连接。',
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
          'name' => 'ErAttachmentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例连接ID',
            'description' => '灵骏HUB网络实例连接ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-attachment-i1ioibyf',
          ),
        ),
        1 => 
        array (
          'name' => 'ErAttachmentName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例连接名称',
            'description' => '灵骏HUB网络实例连接名称',
            'type' => 'string',
            'required' => false,
            'example' => 'er-attachment-wulanchabu-main',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<UpdateErAttachmentRsp>',
            'description' => 'AjaxResult<UpdateErAttachmentRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '7F9082CC-3D94-560F-A575-8E8EF6CE2CB8',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"7F9082CC-3D94-560F-A575-8E8EF6CE2CB8\\",\\n  \\"Content\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏HUB网络连接',
    ),
    'GetErAttachment' => 
    array (
      'summary' => '查询网络实例连接。',
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
          'name' => 'ErAttachmentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例ID',
            'description' => '灵骏HUB网络连接实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er-attachment-i1io****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkop****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetErAttachmentRsp>',
            'description' => '响应实例对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因。）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '7F0D9440-1F97-5613-87CD-D3047172A93C',
              ),
              'Content' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'Message' => 
                  array (
                    'title' => '提示信息',
                    'description' => '提示信息。',
                    'type' => 'string',
                    'example' => '可用',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '实例状态。取值：

- **Available**：正常。
- **Not Available**：不可用。
- **Executing**：执行中。
- **Deleting**：删除中。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Not Available' => '不可用',
                      'Executing' => '执行中',
                      'Available' => '可用',
                      'Deleting' => '删除中',
                    ),
                    'example' => 'Available',
                  ),
                  'RegionId' => 
                  array (
                    'title' => 'ER地域信息',
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID。',
                    'type' => 'string',
                    'example' => '165544950****',
                  ),
                  'ErAttachmentName' => 
                  array (
                    'title' => 'ER网络实例名称',
                    'description' => '灵骏HUB网络实例名称。',
                    'type' => 'string',
                    'example' => 'vpd-lxnsj2cx',
                  ),
                  'ErAttachmentId' => 
                  array (
                    'title' => 'ER网络实例ID',
                    'description' => '灵骏HUB网络实例ID。',
                    'type' => 'string',
                    'example' => 'er-attachment-i1io****
',
                  ),
                  'ErId' => 
                  array (
                    'title' => '弹性路由器ID',
                    'description' => '灵骏HUB实例ID。',
                    'type' => 'string',
                    'example' => 'er-auey****',
                  ),
                  'InstanceType' => 
                  array (
                    'title' => '实例类型：VPD、CSC、DLR、ER',
                    'description' => '实例类型。取值：

- **VPD**：表示灵骏网段。
- **VCC**：表示灵骏连接。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'VCC' => '灵骏连接',
                      'VPD' => '灵骏网段',
                    ),
                    'example' => 'VPD',
                  ),
                  'InstanceId' => 
                  array (
                    'title' => '实例ID',
                    'description' => '网络实例ID，目前支持**灵骏网段(VPD)**、**灵骏连接(VCC)**。

更多信息，请参见[什么是灵骏？](https://help.aliyun.com/document_detail/444430.html)

您可以通过[ListVpds](https://help.aliyun.com/document_detail/2331077.html)、[ListVccs](https://help.aliyun.com/document_detail/2399526.html?)分别查询**灵骏网段**、**灵骏连接**。',
                    'type' => 'string',
                    'example' => 'vpd-lxns****',
                  ),
                  'InstanceName' => 
                  array (
                    'title' => '实例名称',
                    'description' => '实例名称。',
                    'type' => 'string',
                    'example' => 'vpd-wulanchabu-main',
                  ),
                  'AutoReceiveAllRoute' => 
                  array (
                    'title' => '自动接收所有路由',
                    'description' => '是否自动接收来自本灵骏HUB下所有实例的所有路由。取值：

- **true**  ：自动接收。
- **false** ：不接收。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '自动接收',
                      'false' => '不接收',
                    ),
                    'example' => 'true',
                  ),
                  'Across' => 
                  array (
                    'title' => '是否夸账号',
                    'description' => '是否跨账号。取值：

- **true**  ：当前网络实例为跨账号资源。
- **false** ：当前网络实例为本账号资源。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '跨账号资源',
                      'false' => '本账号资源',
                    ),
                    'example' => 'fasle',
                  ),
                  'ResourceTenantId' => 
                  array (
                    'title' => '资源所属租户ID',
                    'description' => '资源所属租户ID。',
                    'type' => 'string',
                    'example' => '162093955616****',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"7F0D9440-1F97-5613-87CD-D3047172A93C\\",\\n  \\"Content\\": {\\n    \\"CreateTime\\": \\"1648085472000\\",\\n    \\"GmtModified\\": \\"1648085472000\\",\\n    \\"Message\\": \\"可用\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"TenantId\\": \\"165544950****\\",\\n    \\"ErAttachmentName\\": \\"vpd-lxnsj2cx\\",\\n    \\"ErAttachmentId\\": \\"er-attachment-i1io****\\\\n\\",\\n    \\"ErId\\": \\"er-auey****\\",\\n    \\"InstanceType\\": \\"VPD\\",\\n    \\"InstanceId\\": \\"vpd-lxns****\\",\\n    \\"InstanceName\\": \\"vpd-wulanchabu-main\\",\\n    \\"AutoReceiveAllRoute\\": true,\\n    \\"Across\\": true,\\n    \\"ResourceTenantId\\": \\"162093955616****\\",\\n    \\"ResourceGroupId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB网络实例连接详情',
    ),
    'ListErAttachments' => 
    array (
      'summary' => '查询网络实例连接。',
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
          'name' => 'ErAttachmentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例连接ID',
            'description' => '网络实例连接ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'er-attachment-i1io****',
          ),
        ),
        1 => 
        array (
          'name' => 'ErAttachmentName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '网络实例连接名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-209300qha01',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '实例状态。取值：

- **Available**：正常。
- **Not Available**：不可用。
- **Executing**：执行中。
- **Deleting**：删除中。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Not Available' => '不可用',
              'Executing' => '执行中',
              'Available' => '可用',
              'Deleting' => '删除中',
            ),
            'example' => 'Available',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoReceiveAllRoute',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否自动接收来自本ER的实例的所有路由',
            'description' => '是否自动接收来自本灵骏HUB下所有实例的所有路由，取值：

- **true**  ：自动接收。
- **false** ：不接收。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '自动接收',
              'false' => '不接收',
            ),
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '网络实例ID，目前支持**灵骏网段(VPD)**、**灵骏连接(VCC)**。

更多信息，请参见[什么是灵骏？](https://help.aliyun.com/document_detail/444430.html)

您可以通过[ListVpds](https://help.aliyun.com/document_detail/2331077.html)、[ListVccs](https://help.aliyun.com/document_detail/2399526.html?)分别查询**灵骏网段**、**灵骏连接**。',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-209300q****',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例类型',
            'description' => '实例类型。取值：

- **VPD**：表示灵骏网段。
- **VCC**：表示灵骏连接。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'VCC' => '灵骏连接',
              'VPD' => '灵骏网段',
            ),
            'example' => 'VCC',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceTenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例所属租户ID',
            'description' => '实例所属租户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '111115666713****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        9 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性路由器Id',
            'description' => '灵骏HUB实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkop****',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页返回值的个数。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询。取值：

- **true**：开启分页查询。

- **false**：不开启分页查询。',
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
            'title' => 'AjaxResult<PageResult<ListErAttachmentRsp>>',
            'description' => '响应实体对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因。）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '3D9D6E7B-365B-5200-BFA6-9B79E269058C',
              ),
              'Content' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏HUB网络实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏HUB网络实例。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '1669734207000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '1640187007000',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息。',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '实例状态。取值：

- **Available**：正常。
- **Not Available**：不可用。
- **Executing**：执行中。
- **Deleting**：删除中。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'Not Available' => '不可用',
                            'Executing' => '执行中',
                            'Available' => '可用',
                            'Deleting' => '删除中',
                          ),
                          'example' => 'Available',
                        ),
                        'RegionId' => 
                        array (
                          'title' => 'ER地域信息',
                          'description' => '灵骏HUB地域信息。',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID。',
                          'type' => 'string',
                          'example' => '165544950****',
                        ),
                        'ErAttachmentName' => 
                        array (
                          'title' => 'ER网络实例名称',
                          'description' => '灵骏HUB网络实例名称。',
                          'type' => 'string',
                          'example' => 'vcc-cn-209300qha01',
                        ),
                        'ErAttachmentId' => 
                        array (
                          'title' => 'ER网络实例ID',
                          'description' => '灵骏HUB网络实例ID。',
                          'type' => 'string',
                          'example' => 'er-attachment-i1io****',
                        ),
                        'ErId' => 
                        array (
                          'title' => '弹性路由器ID',
                          'description' => '灵骏HUB实例ID。',
                          'type' => 'string',
                          'example' => 'er-kkop****',
                        ),
                        'InstanceType' => 
                        array (
                          'title' => '实例类型：VPD、CSC、DLR、ER',
                          'description' => '实例类型。取值：

- **VPD**：表示灵骏网段。
- **VCC**：表示灵骏连接。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'VCC' => '灵骏连接',
                            'VPD' => '灵骏网段',
                          ),
                          'example' => 'VCC',
                        ),
                        'InstanceId' => 
                        array (
                          'title' => '实例ID',
                          'description' => '网络实例ID，目前支持**灵骏网段(VPD)**、**灵骏连接(VCC)**。

更多信息，请参见[什么是灵骏？](https://help.aliyun.com/document_detail/444430.html)

您可以通过[ListVpds](https://help.aliyun.com/document_detail/2331077.html)、[ListVccs](https://help.aliyun.com/document_detail/2399526.html)分别查询**灵骏网段**、**灵骏连接**。',
                          'type' => 'string',
                          'example' => 'vcc-cn-209300q****',
                        ),
                        'InstanceName' => 
                        array (
                          'title' => '实例名称',
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'vcc-wulanchabu-main',
                        ),
                        'AutoReceiveAllRoute' => 
                        array (
                          'title' => '自动接收所有路由',
                          'description' => '是否自动接收来自本灵骏HUB下所有实例的所有路由，取值：

- **true**  ：自动接收。
- **false** ：不接收。',
                          'type' => 'boolean',
                          'enumValueTitles' => 
                          array (
                            'true' => '自动接收',
                            'false' => '不接收',
                          ),
                          'example' => 'true',
                        ),
                        'Across' => 
                        array (
                          'title' => '是否夸账号',
                          'description' => '是否跨账号，取值：

- **true**  ：当前网络实例为跨账号资源。
- **false** ：当前网络实例为本账号资源。',
                          'type' => 'boolean',
                          'enumValueTitles' => 
                          array (
                            'true' => '跨账号资源',
                            'false' => '本账号资源',
                          ),
                          'example' => 'false',
                        ),
                        'ResourceTenantId' => 
                        array (
                          'title' => '资源所属租户ID',
                          'description' => '资源所属租户ID。',
                          'type' => 'string',
                          'example' => '111115666713****',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"3D9D6E7B-365B-5200-BFA6-9B79E269058C\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"CreateTime\\": \\"1669734207000\\",\\n        \\"GmtModified\\": \\"1640187007000\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"165544950****\\",\\n        \\"ErAttachmentName\\": \\"vcc-cn-209300qha01\\",\\n        \\"ErAttachmentId\\": \\"er-attachment-i1io****\\",\\n        \\"ErId\\": \\"er-kkop****\\",\\n        \\"InstanceType\\": \\"VCC\\",\\n        \\"InstanceId\\": \\"vcc-cn-209300q****\\",\\n        \\"InstanceName\\": \\"vcc-wulanchabu-main\\",\\n        \\"AutoReceiveAllRoute\\": true,\\n        \\"Across\\": false,\\n        \\"ResourceTenantId\\": \\"111115666713****\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB网络连接',
    ),
    'UpdateErRouteMap' => 
    array (
      'summary' => '更新路由策略的部分信息，包括路由策略的描述和名称。',
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
          'name' => 'ErRouteMapId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由策略ID',
            'description' => '路由策略ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-rmap-uwglhzom',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        3 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<UpdateErRouteMapRsp>',
            'description' => 'AjaxResult<UpdateErRouteMapRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'BDBCC783-84CA-5733-8EEA-645C88B9009C',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"BDBCC783-84CA-5733-8EEA-645C88B9009C\\",\\n  \\"Content\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '更新灵骏HUB路由策略',
    ),
    'ListErRouteMaps' => 
    array (
      'summary' => '查询路由策略。',
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
          'name' => 'ErRouteMapId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由策略ID',
            'description' => '路由策略ID',
            'type' => 'string',
            'required' => false,
            'example' => 'er-rmap-uwglhzom',
          ),
        ),
        1 => 
        array (
          'name' => 'ErRouteMapNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '策略编号',
            'description' => '策略编号（自动创建默认为3000；用户手动创建的策略编号取值范围：1001-2000）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1001',
          ),
        ),
        2 => 
        array (
          'name' => 'RouteMapAction',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '策略行为',
            'description' => '策略行为；可选值：
- **permit**: 允许
- **deny**： 拒绝',
            'type' => 'string',
            'required' => false,
            'example' => 'deny',
          ),
        ),
        3 => 
        array (
          'name' => 'TransmissionInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '源实例ID',
            'description' => '发布实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-xsdlg2xb',
          ),
        ),
        4 => 
        array (
          'name' => 'TransmissionInstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '发布路由源实例名称',
            'description' => '发布实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd1',
          ),
        ),
        5 => 
        array (
          'name' => 'TransmissionInstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '源实例类型',
            'description' => '发布实例类型，可选值：

- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPD',
          ),
        ),
        6 => 
        array (
          'name' => 'ReceptionInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目的实例ID',
            'description' => '接收实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-x2lohgpv',
          ),
        ),
        7 => 
        array (
          'name' => 'ReceptionInstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '接收路由源实例名称',
            'description' => '接收实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd2',
          ),
        ),
        8 => 
        array (
          'name' => 'ReceptionInstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目的实例类型',
            'description' => '接收实例类型，可选值：

- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPD',
          ),
        ),
        9 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目标网段',
            'description' => '目的网段',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        12 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性路由器Id',
            'description' => '弹性路由器ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
        13 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页显示的行数。默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        15 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询。',
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
            'title' => 'AjaxResult<PageResult<ListErRouteMapRsp>>',
            'description' => 'AjaxResult<PageResult<ListErRouteMapRsp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '路由策略信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '路由策略信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1655449505171',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '1601176751000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '1601176751000',
                        ),
                        'Message' => 
                        array (
                          'title' => '提示信息',
                          'description' => '提示信息',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态实例状态。可能值：

- **Available**：可用
- **Not Available**：不可用
- **Executing**：执行中
- **Deleting**：删除中',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'ErRouteMapId' => 
                        array (
                          'title' => '路由策略ID',
                          'description' => '路由策略ID',
                          'type' => 'string',
                          'example' => 'er-rmap-uwglhzom',
                        ),
                        'ErId' => 
                        array (
                          'title' => '灵骏HUB ID',
                          'description' => '灵骏HUB ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'RouteMapNum' => 
                        array (
                          'title' => '策略序号(1001-2000)',
                          'description' => '策略编号。

序号越小，优先级越低，当进行路由匹配时会优先匹配优先级高的策略。

**取值范围：1001~2000**',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1001',
                        ),
                        'Description' => 
                        array (
                          'title' => '策略描述',
                          'description' => '策略描述',
                          'type' => 'string',
                          'example' => '描述',
                        ),
                        'DestinationCidrBlock' => 
                        array (
                          'title' => '目的网段',
                          'description' => '目的网段',
                          'type' => 'string',
                          'example' => '0.0.0.0/0',
                        ),
                        'TransmissionInstanceName' => 
                        array (
                          'title' => '源实例名称',
                          'description' => '发布实例名称',
                          'type' => 'string',
                          'example' => 'vpd-transmit',
                        ),
                        'TransmissionInstanceId' => 
                        array (
                          'title' => '源实例ID',
                          'description' => '发布实例ID',
                          'type' => 'string',
                          'example' => 'vpd-8rgvqazb',
                        ),
                        'TransmissionInstanceType' => 
                        array (
                          'title' => '源实例类型',
                          'description' => '发布实例类型,可能值：

- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
                          'type' => 'string',
                          'example' => 'VPD',
                        ),
                        'ReceptionInstanceName' => 
                        array (
                          'title' => '目的实例名称',
                          'description' => '接收实例名称',
                          'type' => 'string',
                          'example' => 'vpd-reception',
                        ),
                        'ReceptionInstanceId' => 
                        array (
                          'title' => '目的实例ID',
                          'description' => '接收实例ID',
                          'type' => 'string',
                          'example' => 'vpd-9rgxqazc',
                        ),
                        'ReceptionInstanceType' => 
                        array (
                          'title' => '目的实例类型',
                          'description' => '接收实例类型，可能值：

- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
                          'type' => 'string',
                          'example' => 'VPD',
                        ),
                        'Action' => 
                        array (
                          'title' => '策略行为',
                          'description' => '策略行为；可选值：
- **permit**: 允许
- **deny**： 禁止',
                          'type' => 'string',
                          'example' => 'permit',
                        ),
                        'TransmissionInstanceOwner' => 
                        array (
                          'title' => '源实例所属租户',
                          'description' => '发布实例所属租户',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'ReceptionInstanceOwner' => 
                        array (
                          'title' => '目的实例所属租户',
                          'description' => '接收实例所属租户',
                          'type' => 'string',
                          'example' => '1620939556166277',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"TenantId\\": \\"1655449505171\\",\\n        \\"CreateTime\\": \\"1601176751000\\",\\n        \\"GmtModified\\": \\"1601176751000\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"ErRouteMapId\\": \\"er-rmap-uwglhzom\\",\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"RouteMapNum\\": 1001,\\n        \\"Description\\": \\"描述\\",\\n        \\"DestinationCidrBlock\\": \\"0.0.0.0/0\\",\\n        \\"TransmissionInstanceName\\": \\"vpd-transmit\\",\\n        \\"TransmissionInstanceId\\": \\"vpd-8rgvqazb\\",\\n        \\"TransmissionInstanceType\\": \\"VPD\\",\\n        \\"ReceptionInstanceName\\": \\"vpd-reception\\",\\n        \\"ReceptionInstanceId\\": \\"vpd-9rgxqazc\\",\\n        \\"ReceptionInstanceType\\": \\"VPD\\",\\n        \\"Action\\": \\"permit\\",\\n        \\"TransmissionInstanceOwner\\": \\"1620939556166277\\",\\n        \\"ReceptionInstanceOwner\\": \\"1620939556166277\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB路由策略',
    ),
    'GetErRouteMap' => 
    array (
      'summary' => '查询灵骏HUB路由策略详情信息。',
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
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ErRouteMapId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由策略Id',
            'description' => '路由策略ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-rmap-uwglhzom',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetErRouteMapRsp>',
            'description' => 'AjaxResult<GetErRouteMapRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '1648085472000',
                  ),
                  'Message' => 
                  array (
                    'title' => '提示信息',
                    'description' => '提示信息',
                    'type' => 'string',
                    'example' => '成功',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '实例状态。可能值：

- **Available**：可用
- **Not Available**：不可用
- **Executing**：执行中
- **Deleting**：删除中',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'ErRouteMapId' => 
                  array (
                    'title' => 'ER路由策略ID',
                    'description' => '灵骏HUB路由策略ID',
                    'type' => 'string',
                    'example' => 'er-rmap-uwglhzom',
                  ),
                  'ErId' => 
                  array (
                    'title' => '灵骏HUB ID',
                    'description' => '灵骏HUB ID',
                    'type' => 'string',
                    'example' => 'er-kkopgtne',
                  ),
                  'RouteMapNum' => 
                  array (
                    'title' => '策略序号(1001-2000)',
                    'description' => '策略编号。

序号越小，优先级越低，当进行路由匹配时会优先匹配优先级高的策略。

**取值范围：1001~2000**',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1001',
                  ),
                  'Description' => 
                  array (
                    'title' => '策略描述',
                    'description' => '策略描述',
                    'type' => 'string',
                    'example' => '允许',
                  ),
                  'DestinationCidrBlock' => 
                  array (
                    'title' => '目标网段',
                    'description' => '目标网段',
                    'type' => 'string',
                    'example' => '0.0.0.0/0',
                  ),
                  'TransmissionInstanceName' => 
                  array (
                    'title' => '源实例名称',
                    'description' => '发布实例名称',
                    'type' => 'string',
                    'example' => 'vpd-transimit',
                  ),
                  'TransmissionInstanceId' => 
                  array (
                    'title' => '源实例ID',
                    'description' => '发布实例ID',
                    'type' => 'string',
                    'example' => 'vpd-xgkb2kl',
                  ),
                  'TransmissionInstanceType' => 
                  array (
                    'title' => '源实例类型',
                    'description' => '发布实例类型;可选值：
- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
                    'type' => 'string',
                    'example' => 'VPD',
                  ),
                  'ReceptionInstanceName' => 
                  array (
                    'title' => '目的实例名称',
                    'description' => '接收实例名称',
                    'type' => 'string',
                    'example' => 'vpd-receprion',
                  ),
                  'ReceptionInstanceId' => 
                  array (
                    'title' => '目的实例ID',
                    'description' => '接收实例ID',
                    'type' => 'string',
                    'example' => 'vpd-x25vxrb2',
                  ),
                  'ReceptionInstanceType' => 
                  array (
                    'title' => '目的实例类型',
                    'description' => '接收实例类型，可选值：

- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
                    'type' => 'string',
                    'example' => 'VPD',
                  ),
                  'Action' => 
                  array (
                    'title' => '策略行为(允许：permit；拒绝：deny)',
                    'description' => '策略行为；可选值：
- **permit**: 允许
- **deny**： 拒绝',
                    'type' => 'string',
                    'example' => 'permit',
                  ),
                  'TransmissionInstanceOwner' => 
                  array (
                    'title' => '源实例所属租户',
                    'description' => '发布实例所属租户',
                    'type' => 'string',
                    'example' => '1620939556166277',
                  ),
                  'ReceptionInstanceOwner' => 
                  array (
                    'title' => '目的实例所属租户',
                    'description' => '接收实例所属租户',
                    'type' => 'string',
                    'example' => '1620939556166277',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                  'ErRouteMapName' => 
                  array (
                    'title' => 'ER路由策略名称',
                    'description' => '灵骏HUB路由策略名称',
                    'type' => 'string',
                    'example' => 'er-rmap-wulanchabu',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"GmtCreate\\": \\"1648085472000\\",\\n    \\"GmtModified\\": \\"1648085472000\\",\\n    \\"Message\\": \\"成功\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"ErRouteMapId\\": \\"er-rmap-uwglhzom\\",\\n    \\"ErId\\": \\"er-kkopgtne\\",\\n    \\"RouteMapNum\\": 1001,\\n    \\"Description\\": \\"允许\\",\\n    \\"DestinationCidrBlock\\": \\"0.0.0.0/0\\",\\n    \\"TransmissionInstanceName\\": \\"vpd-transimit\\",\\n    \\"TransmissionInstanceId\\": \\"vpd-xgkb2kl\\",\\n    \\"TransmissionInstanceType\\": \\"VPD\\",\\n    \\"ReceptionInstanceName\\": \\"vpd-receprion\\",\\n    \\"ReceptionInstanceId\\": \\"vpd-x25vxrb2\\",\\n    \\"ReceptionInstanceType\\": \\"VPD\\",\\n    \\"Action\\": \\"permit\\",\\n    \\"TransmissionInstanceOwner\\": \\"1620939556166277\\",\\n    \\"ReceptionInstanceOwner\\": \\"1620939556166277\\",\\n    \\"ResourceGroupId\\": \\"\\",\\n    \\"ErRouteMapName\\": \\"er-rmap-wulanchabu\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB路由策略详情',
    ),
    'DeleteErRouteMap' => 
    array (
      'summary' => '删除某个路由策略实例，删除后相关数据丢失且不可恢复。',
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
          'name' => 'ErRouteMapIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '路由策略ID列表',
            'description' => '路由策略实例ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '路由策略ID',
              'type' => 'string',
              'required' => false,
              'example' => 'er-rmap-uwglhzom',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult',
            'description' => 'AjaxResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '删除路由策略',
      'description' => '调用该接口删除路由策略时，请注意：

- 删除后，相关数据全部丢失且不可恢复，请谨慎操作。
- 该接口属于异步接口，调用该接口后，路由策略实例可能尚未删除完成，系统后台的删除任务仍在进行中。您可以调用ListErRouteMaps或GetErRouteMap查询路由策略的删除状态：
    - 当路由策略的状态是Deleting时，表示路由策略实例正在删除中。
    - 当没有该路由策略实例记录时，表示路由策略实例已经删除完成。',
    ),
    'CreateErRouteMap' => 
    array (
      'summary' => '用户可以使用该API，通过指定灵骏HUB下的网络实例连接，创建路由策略。',
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
          'name' => 'RouteMapNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '策略编号',
            'description' => '策略编号。

序号越小，优先级越低，当进行路由匹配时会优先匹配优先级高的策略。

**取值范围：1001~2000**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1001',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '策略描述',
            'description' => '策略描述',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        2 => 
        array (
          'name' => 'TransmissionInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '源实例Id',
            'description' => '源实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-xlsjsdvt',
          ),
        ),
        3 => 
        array (
          'name' => 'TransmissionInstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '源实例类型',
            'description' => '源实例类型,可选值：
- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'VPD',
          ),
        ),
        4 => 
        array (
          'name' => 'ReceptionInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目的实例ID',
            'description' => '目的实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'vpd-xlhsvdvt',
          ),
        ),
        5 => 
        array (
          'name' => 'ReceptionInstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目的实例类型',
            'description' => '目的实例类型,可选值：

- **VPD**：灵骏网段。
- **VCC**：灵骏连接。',
            'type' => 'string',
            'required' => true,
            'example' => 'VPD',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目的网段',
            'description' => '目的网段',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        7 => 
        array (
          'name' => 'RouteMapAction',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '策略行为',
            'description' => '策略行为；可选值：
- **permit**: 允许
- **deny**： 拒绝',
            'type' => 'string',
            'required' => true,
            'example' => 'permit',
          ),
        ),
        8 => 
        array (
          'name' => 'TransmissionInstanceOwner',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '发布实例所属租户',
            'description' => '路由发布实例所属租户',
            'type' => 'string',
            'required' => false,
            'example' => '1620939556166277',
          ),
        ),
        9 => 
        array (
          'name' => 'ReceptionInstanceOwner',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '接收实例所属租户',
            'description' => '路由接收实例所属租户',
            'type' => 'string',
            'required' => false,
            'example' => '1620939556166277',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        11 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-aueyxxsy',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<CreateErRouteMapRsp>',
            'description' => 'AjaxResult<CreateErRouteMapRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '039C3C3A-3C37-5672-80D5-D8CD48C676D1',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'ErRouteMapId' => 
                  array (
                    'title' => '路由策略ID',
                    'description' => '路由策略ID',
                    'type' => 'string',
                    'example' => 'er-rmap-uwglhzom',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"039C3C3A-3C37-5672-80D5-D8CD48C676D1\\",\\n  \\"Content\\": {\\n    \\"ErRouteMapId\\": \\"er-rmap-uwglhzom\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建灵骏HUB路由策略',
      'description' => '调用该接口创建路由策略时，请注意：

- 请确保您已创建灵骏HUB实例。
- 请确保您已创建网络实例连接。
- 该接口属于异步接口，调用该接口后，系统将返回一个路由策略的ID，此时路由策略实例可能尚未创建完成，系统后台的创建任务仍在进行中。您可以通过ListErRouteMaps或者GetErRouteMap查询路由策略的状态：
    - 当路由策略状态是Executing时，表示正在创建。
    - 当路由策略状态是Available时，表示创建成功。',
    ),
    'GetErRouteEntry' => 
    array (
      'summary' => '查询灵骏HUB路由条目详情。',
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
          'name' => 'ErRouteEntryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由条目Id',
            'description' => '路由条目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-rte-4q0jbylz',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏HUB Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<GetErRouteEntryRsp>',
            'description' => 'AjaxResult<GetErRouteEntryRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '1F38A2E6-CB47-5369-95D2-96D0C287B4A5',
              ),
              'Content' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ErRouteEntryId' => 
                  array (
                    'title' => '路由条目ID',
                    'description' => '路由条目ID',
                    'type' => 'string',
                    'example' => 'er-rte-4q0jbylz',
                  ),
                  'TenantId' => 
                  array (
                    'title' => '租户Id',
                    'description' => '租户ID',
                    'type' => 'string',
                    'example' => '1655449505171',
                  ),
                  'ErId' => 
                  array (
                    'title' => 'erId',
                    'description' => '灵骏HUB实例ID',
                    'type' => 'string',
                    'example' => 'er-aueyxxsy',
                  ),
                  'DestinationCidrBlock' => 
                  array (
                    'title' => '目标网段',
                    'description' => '目的网段',
                    'type' => 'string',
                    'example' => '11.0.0.0/16',
                  ),
                  'NextHopType' => 
                  array (
                    'title' => '下一跳类型',
                    'description' => '下一跳实例类型',
                    'type' => 'string',
                    'example' => 'VCC',
                  ),
                  'NextHopId' => 
                  array (
                    'title' => '下一跳实列',
                    'description' => '下一跳实例',
                    'type' => 'string',
                    'example' => 'vcc-cn-209300qha01',
                  ),
                  'RouteType' => 
                  array (
                    'title' => '路由类型',
                    'description' => '路由类型',
                    'type' => 'string',
                    'example' => 'System',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '1666677783000',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'title' => '资源组实例ID',
                    'description' => '资源组实例ID',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"1F38A2E6-CB47-5369-95D2-96D0C287B4A5\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ErRouteEntryId\\": \\"er-rte-4q0jbylz\\",\\n    \\"TenantId\\": \\"1655449505171\\",\\n    \\"ErId\\": \\"er-aueyxxsy\\",\\n    \\"DestinationCidrBlock\\": \\"11.0.0.0/16\\",\\n    \\"NextHopType\\": \\"VCC\\",\\n    \\"NextHopId\\": \\"vcc-cn-209300qha01\\",\\n    \\"RouteType\\": \\"System\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"GmtModified\\": \\"1666677783000\\",\\n    \\"ResourceGroupId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB路由条目详情',
    ),
    'ListErRouteEntries' => 
    array (
      'summary' => '查询灵骏HUB路由条目。',
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
          'name' => 'NextHopType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一跳类型',
            'description' => '下一跳实例类型',
            'type' => 'string',
            'required' => false,
            'example' => 'VCC',
          ),
        ),
        1 => 
        array (
          'name' => 'NextHopId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '下一跳实例',
            'description' => '下一跳实例',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-209300qha01',
          ),
        ),
        2 => 
        array (
          'name' => 'RouteType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '路由类型',
            'description' => '路由类型',
            'type' => 'string',
            'required' => false,
            'example' => 'VCC',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Available',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationCidrBlock',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目的网段',
            'description' => '目的网段',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网络实例ID',
            'description' => '网络实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vcc-cn-209300qha01
',
          ),
        ),
        6 => 
        array (
          'name' => 'IgnoreDetailedRouteEntry',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '过滤32明细网段 默认为True',
            'description' => '过滤32明细网段。默认为true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组实例ID',
            'description' => '资源组实例ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        9 => 
        array (
          'name' => 'ErId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹性路由器Id',
            'description' => '灵骏HUB ID',
            'type' => 'string',
            'required' => true,
            'example' => 'er-kkopgtne',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码。起始值：1默认值：1',
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示的行数。默认值：20',
            'description' => '每页返回值的个数。默认值：20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'EnablePage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启分页查询；默认开启',
            'description' => '是否开启分页查询',
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
            'title' => 'AjaxResult<PageResult<ListErRouteEntryRsp>>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'A88DFED5-24B7-5A3E-87DE-380BF06F3C90',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Data' => 
                  array (
                    'description' => '灵骏HUB路由条目信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '灵骏HUB路由条目信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErId' => 
                        array (
                          'title' => '灵骏HUB实例ID',
                          'description' => '灵骏HUB实例ID',
                          'type' => 'string',
                          'example' => 'er-kkopgtne',
                        ),
                        'TenantId' => 
                        array (
                          'title' => '租户ID',
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1111156667137893',
                        ),
                        'ResourceTenantId' => 
                        array (
                          'title' => '资源所属租户ID',
                          'description' => '资源所属租户ID',
                          'type' => 'string',
                          'example' => '1111156667137893
',
                        ),
                        'RegionId' => 
                        array (
                          'title' => '地域',
                          'description' => '地域',
                          'type' => 'string',
                          'example' => 'cn-wulanchabu',
                        ),
                        'ErRouteEntryId' => 
                        array (
                          'title' => '路由条目ID',
                          'description' => '路由条目ID',
                          'type' => 'string',
                          'example' => 'er-rte-maysfadg',
                        ),
                        'DestinationCidrBlock' => 
                        array (
                          'title' => '目的网段',
                          'description' => '目的网段',
                          'type' => 'string',
                          'example' => '100.64.1.100/32',
                        ),
                        'NextHopType' => 
                        array (
                          'title' => '下一跳类型',
                          'description' => '下一跳实例类型',
                          'type' => 'string',
                          'example' => 'VCC',
                        ),
                        'NextHopId' => 
                        array (
                          'title' => '下一跳实列',
                          'description' => '下一跳实例',
                          'type' => 'string',
                          'example' => 'vcc-cn-209300qha01',
                        ),
                        'RouteType' => 
                        array (
                          'title' => '路由类型',
                          'description' => '路由类型',
                          'type' => 'string',
                          'example' => 'VCC',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态',
                          'description' => '状态。可取值：
 - Synchronizing
 - Available',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '1640930901000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'title' => '资源组实例ID',
                          'description' => '资源组实例ID',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"A88DFED5-24B7-5A3E-87DE-380BF06F3C90\\",\\n  \\"Content\\": {\\n    \\"Total\\": 0,\\n    \\"Data\\": [\\n      {\\n        \\"ErId\\": \\"er-kkopgtne\\",\\n        \\"TenantId\\": \\"1111156667137893\\",\\n        \\"ResourceTenantId\\": \\"1111156667137893\\\\n\\",\\n        \\"RegionId\\": \\"cn-wulanchabu\\",\\n        \\"ErRouteEntryId\\": \\"er-rte-maysfadg\\",\\n        \\"DestinationCidrBlock\\": \\"100.64.1.100/32\\",\\n        \\"NextHopType\\": \\"VCC\\",\\n        \\"NextHopId\\": \\"vcc-cn-209300qha01\\",\\n        \\"RouteType\\": \\"VCC\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"GmtModified\\": \\"1640930901000\\",\\n        \\"ResourceGroupId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询灵骏HUB路由条目',
    ),
    'ListInstancesByNcd' => 
    array (
      'summary' => '查询与指定GPU节点，通信距离不超过指定NCD的GPU节点列表。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域id',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-1234****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例类型',
            'description' => '实例类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'node' => '灵骏节点',
              'lni' => '灵骏网卡',
            ),
            'example' => 'lni',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxNcd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '网卡间最大通信距离',
            'description' => '最大网络通信距离',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'title' => 'AjaxResult<ListInstancesByNcdRsp>',
            'description' => 'AjaxResult<ListInstancesByNcdRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxNcd' => 
                  array (
                    'title' => '节点间最大通信距离',
                    'description' => '节点间最大通信距离',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'InstanceType' => 
                  array (
                    'title' => '实例类型',
                    'description' => '实例类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'node' => '灵骏节点',
                      'lni' => '灵骏网卡',
                    ),
                    'example' => 'lni',
                  ),
                  'SourceInstanceId' => 
                  array (
                    'title' => '源实例id',
                    'description' => '源实例ID',
                    'type' => 'string',
                    'example' => 'lni-1234****',
                  ),
                  'InstanceInfos' => 
                  array (
                    'title' => '与源实例id间通信距离不超过maxNcd的结合',
                    'description' => '与源实例ID间网络通信距离不超过maxNcd的实例集合',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceId' => 
                        array (
                          'title' => '实例id',
                          'description' => '实例ID',
                          'type' => 'string',
                          'example' => 'lni-1235****',
                        ),
                        'Ncd' => 
                        array (
                          'title' => '通信距离',
                          'description' => '网络通信距离',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"MaxNcd\\": 3,\\n    \\"InstanceType\\": \\"lni\\",\\n    \\"SourceInstanceId\\": \\"lni-1234****\\",\\n    \\"InstanceInfos\\": [\\n      {\\n        \\"InstanceId\\": \\"lni-1235****\\",\\n        \\"Ncd\\": 2\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '通过网络通信距离筛选实例',
    ),
    'QueryInstanceNcd' => 
    array (
      'summary' => '查询实例（灵骏节点、灵骏网卡）之间的网络通信距离（Network Communication Distance，NCD）。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId1',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '实例1ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-1235****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId2',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '实例2ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lni-1234****',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例类型（node,lni）',
            'description' => '实例类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'node' => '灵骏节点',
              'lni' => '灵骏网卡',
            ),
            'example' => 'lni',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<QueryInstanceNcdRsp>',
            'description' => 'AjaxResult<QueryInstanceNcdRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => 'Code码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'BDBCC783-84CA-5733-8EEA-645C88B9009C',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Ncd' => 
                  array (
                    'title' => 'ncd实例间通信距离',
                    'description' => '实例间网络通信距离',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'InstanceId1' => 
                  array (
                    'title' => 'id可能是gpu节点id，也可能是网卡id，同入参相同',
                    'description' => '实例1ID',
                    'type' => 'string',
                    'example' => 'lni-1235****',
                  ),
                  'InstanceId2' => 
                  array (
                    'title' => 'id可能是gpu节点id，也可能是网卡id，同入参相同',
                    'description' => '实例2ID',
                    'type' => 'string',
                    'example' => 'lni-1234****',
                  ),
                  'InstanceType' => 
                  array (
                    'title' => '实例类型',
                    'description' => '实例类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'node' => '灵骏节点',
                      'lni' => '灵骏网卡',
                    ),
                    'example' => 'lni',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"BDBCC783-84CA-5733-8EEA-645C88B9009C\\",\\n  \\"Content\\": {\\n    \\"Ncd\\": 1,\\n    \\"InstanceId1\\": \\"lni-1235****\\",\\n    \\"InstanceId2\\": \\"lni-1234****\\",\\n    \\"InstanceType\\": \\"lni\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询实例网络通信距离',
    ),
    'GetFabricTopology' => 
    array (
      'summary' => '查询VPD下灵骏网卡和灵骏节点的物理拓扑信息。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'VpdId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '灵骏网段vpdId',
            'description' => '灵骏网段ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpd-aof7****',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '专有网络vpcId',
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群id',
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'NodeIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '节点id',
            'description' => '节点ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点ID',
              'type' => 'string',
              'required' => false,
              'example' => 'e01-cn-1234*****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'LniIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '灵骏网卡id',
            'description' => '灵骏网卡ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '灵骏网卡ID',
              'type' => 'string',
              'required' => false,
              'example' => 'lni-1234****',
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
            'title' => 'AjaxResult<GetFabricTopologyRsp>',
            'description' => 'AjaxResult<GetFabricTopologyRsp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => 'Code码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => 'AC8C713A-A9F4-5984-A5E1-76496DF35153',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'VpdId' => 
                  array (
                    'title' => '灵骏网段vpdId',
                    'description' => '灵骏网段ID',
                    'type' => 'string',
                    'example' => 'vpd-fuli****',
                  ),
                  'VpcId' => 
                  array (
                    'title' => '专有网络vpcId',
                    'type' => 'string',
                  ),
                  'ClusterId' => 
                  array (
                    'title' => '集群clusterId',
                    'type' => 'string',
                  ),
                  'TopoInfo' => 
                  array (
                    'title' => '网卡拓扑信息',
                    'description' => '网卡拓扑信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '层级信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LayerType' => 
                        array (
                          'title' => '层级资源类型',
                          'description' => '层级资源类型',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'core' => '核心层',
                            'node' => '灵骏节点',
                            'lni' => '灵骏网卡',
                            'spine' => '骨干层',
                            'leaf' => '接入层',
                          ),
                          'example' => 'core',
                        ),
                        'LayerName' => 
                        array (
                          'title' => '资源名称',
                          'description' => '资源名称',
                          'type' => 'string',
                          'example' => 'core-1',
                        ),
                        'NextLayer' => 
                        array (
                          'title' => '下一层级',
                          'description' => '下一层级',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '层级信息',
                            'type' => 'any',
                            'example' => '
{layerType: "node", layerName: "e01-22215****"}',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"AC8C713A-A9F4-5984-A5E1-76496DF35153\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"VpdId\\": \\"vpd-fuli****\\",\\n    \\"TopoInfo\\": [\\n      {\\n        \\"LayerType\\": \\"core\\",\\n        \\"LayerName\\": \\"core-1\\",\\n        \\"NextLayer\\": [\\n          \\"\\\\n{layerType: \\\\\\"node\\\\\\", layerName: \\\\\\"e01-22215****\\\\\\"}\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询VPD/VPC/灵骏集群物理拓扑',
    ),
    'GetNodeInfoForPod' => 
    array (
      'summary' => '查询节点网络信息详情。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '本次操作的节点ID',
            'description' => '本次操作的节点ID',
            'type' => 'string',
            'required' => true,
            'example' => 'node-be70****
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<NodeInfo>',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。（当实例状态为异常时，提示异常原因）',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '9C50C9CD-E799-54DA-BA7A-1FAF3DF80857',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'title' => '地域ID',
                    'description' => '地域ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu',
                  ),
                  'ZoneId' => 
                  array (
                    'title' => '可用区ID',
                    'description' => '可用区ID',
                    'type' => 'string',
                    'example' => 'cn-wulanchabu-b',
                  ),
                  'ClusterId' => 
                  array (
                    'title' => '集群ID',
                    'description' => '集群ID',
                    'type' => 'string',
                    'example' => 'cluster-****',
                  ),
                  'VpcId' => 
                  array (
                    'title' => '本节点所属的专有网络ID',
                    'description' => '本节点所属的专有网络ID',
                    'type' => 'string',
                    'example' => 'vpc-j6ctp4n75306****',
                  ),
                  'NodeId' => 
                  array (
                    'title' => '本次操作的节点ID',
                    'description' => '本次操作的节点ID',
                    'type' => 'string',
                    'example' => 'node-be70****
',
                  ),
                  'VSwitches' => 
                  array (
                    'title' => '本节点可以申请IP的VSwitch列表',
                    'description' => '本节点可以申请IP的VSwitch列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'VSwitch实例ID',
                      'type' => 'string',
                      'example' => 'vsw-wz9t4gwnydfhb9k05****',
                    ),
                  ),
                  'LeniQuota' => 
                  array (
                    'title' => '灵骏弹性网卡配额，包含系统类型',
                    'description' => '灵骏弹性网卡配额，包含系统类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'LniSipQuota' => 
                  array (
                    'title' => '灵骏网卡辅助私网IP配额',
                    'description' => '灵骏网卡辅助私网IP配额',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'LeniSipQuota' => 
                  array (
                    'title' => '灵骏弹性网卡辅助私网IP配额',
                    'description' => '灵骏弹性网卡辅助私网IP配额',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'HdeniQuota' => 
                  array (
                    'title' => '灵骏高密网卡配额',
                    'description' => '灵骏高密网卡配额',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C50C9CD-E799-54DA-BA7A-1FAF3DF80857\\",\\n  \\"Content\\": {\\n    \\"RegionId\\": \\"cn-wulanchabu\\",\\n    \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n    \\"ClusterId\\": \\"cluster-****\\",\\n    \\"VpcId\\": \\"vpc-j6ctp4n75306****\\",\\n    \\"NodeId\\": \\"node-be70****\\\\n\\",\\n    \\"VSwitches\\": [\\n      \\"vsw-wz9t4gwnydfhb9k05****\\"\\n    ],\\n    \\"LeniQuota\\": 10,\\n    \\"LniSipQuota\\": 10,\\n    \\"LeniSipQuota\\": 0,\\n    \\"HdeniQuota\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '查询节点网络信息详情',
    ),
    'ListNodeInfosForPod' => 
    array (
      'summary' => '查询节点网络信息。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu-b',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cluster-***',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '本次操作的节点ID',
            'description' => '本次操作的节点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'node-be70****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AjaxResult<List<NodeInfo>>',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '当次请求的Request ID',
                'type' => 'string',
                'example' => '0901F411-28FA-5B9C-BAEE-7776463FF0DC',
              ),
              'Content' => 
              array (
                'description' => '响应内容',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '地域ID',
                      'description' => '地域ID',
                      'type' => 'string',
                      'example' => 'cn-wulanchabu',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '可用区ID',
                      'description' => '可用区ID',
                      'type' => 'string',
                      'example' => 'cn-wulanchabu-b',
                    ),
                    'ClusterId' => 
                    array (
                      'title' => '集群ID',
                      'description' => '集群ID',
                      'type' => 'string',
                      'example' => 'cluster-****',
                    ),
                    'VpcId' => 
                    array (
                      'title' => '本节点所属的专有网络ID',
                      'description' => '本节点所属的专有网络ID',
                      'type' => 'string',
                      'example' => 'vpc-j6ctp4n75306****',
                    ),
                    'NodeId' => 
                    array (
                      'title' => '本次操作的节点ID',
                      'description' => '本次操作的节点ID',
                      'type' => 'string',
                      'example' => 'node-be70****',
                    ),
                    'VSwitches' => 
                    array (
                      'title' => '本节点可以申请IP的VSwitch列表',
                      'description' => '本节点可申请IP的VSwitch列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'VSwitch实例ID',
                        'type' => 'string',
                        'example' => 'vsw-j6cyi432bh437ens****',
                      ),
                    ),
                    'LeniQuota' => 
                    array (
                      'title' => '灵骏弹性网卡配额，包含系统类型',
                      'description' => '灵骏弹性网卡配额，不包含系统类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'LniSipQuota' => 
                    array (
                      'title' => '灵骏网卡辅助私网IP配额',
                      'description' => '灵骏网卡辅助私网IP配额',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'LeniSipQuota' => 
                    array (
                      'title' => '灵骏弹性网卡辅助私网IP配额',
                      'description' => '灵骏弹性网卡辅助私网IP配额',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'HdeniQuota' => 
                    array (
                      'title' => '灵骏高密网卡配额',
                      'description' => '灵骏高密网卡配额',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"0901F411-28FA-5B9C-BAEE-7776463FF0DC\\",\\n  \\"Content\\": [\\n    {\\n      \\"RegionId\\": \\"cn-wulanchabu\\",\\n      \\"ZoneId\\": \\"cn-wulanchabu-b\\",\\n      \\"ClusterId\\": \\"cluster-****\\",\\n      \\"VpcId\\": \\"vpc-j6ctp4n75306****\\",\\n      \\"NodeId\\": \\"node-be70****\\",\\n      \\"VSwitches\\": [\\n        \\"vsw-j6cyi432bh437ens****\\"\\n      ],\\n      \\"LeniQuota\\": 10,\\n      \\"LniSipQuota\\": 10,\\n      \\"LeniSipQuota\\": 10,\\n      \\"HdeniQuota\\": 10\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询节点网络信息',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'eflo.cn-wulanchabu.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'eflo.cn-heyuan.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'eflo.ap-southeast-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'eflo.cn-shanghai.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'gws',
    'version' => '2019-06-18',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64023,
      'title' => '角色',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServiceLinkedRole',
      ),
    ),
    1 => 
    array (
      'id' => 64025,
      'title' => '用户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeClusterADDomain',
        1 => 'IsUserAdmin',
      ),
    ),
    2 => 
    array (
      'id' => 64028,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstance',
        1 => 'DeleteInstance',
        2 => 'SetInstanceName',
        3 => 'SetInstancePolicy',
        4 => 'SetInstanceUser',
        5 => 'StartInstance',
        6 => 'StopInstance',
        7 => 'DescribeInstancePolicy',
        8 => 'DescribeInstances',
        9 => 'GetConnectTicket',
        10 => 'RestartInstance',
      ),
    ),
    3 => 
    array (
      'id' => 64040,
      'title' => '镜像',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateImage',
        1 => 'DeleteImage',
        2 => 'SetImageName',
        3 => 'DescribeImages',
      ),
    ),
    4 => 
    array (
      'id' => 64045,
      'title' => '集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCluster',
        1 => 'DeleteCluster',
        2 => 'SetClusterDnat',
        3 => 'SetClusterName',
        4 => 'SetClusterADDomain',
        5 => 'SetClusterPolicy',
        6 => 'DescribeClusterConnections',
        7 => 'DescribeClusterPolicy',
        8 => 'DescribeClusters',
        9 => 'DescribeAvailableResource',
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
    'CreateServiceLinkedRole' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
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
              'AlreadyExists' => 
              array (
                'description' => '* true：当前账号**已经**创建过服务关联角色
* false：当前账号**没有**创建过服务关联角色',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AlreadyExists\\": true,\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>\\n<AlreadyExists>true</AlreadyExists>","errorExample":""}]',
      'title' => '为云桌面创建服务关联角色',
      'summary' => '为云桌面创建服务关联角色。',
    ),
    'DescribeClusterADDomain' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-rhzlyl5zx3ua****	',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用SetClusterADDomain获取的任务ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 't-xxx',
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
                'example' => '7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A',
              ),
              'IsSupported' => 
              array (
                'description' => '集群是否支持关联AD域。
* true：支持。
* false：不支持。

> 只有gws.s1.advanced集群支持关联AD域。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskFinished' => 
              array (
                'description' => '当前查询命令的运行状态。可能值：
* false：未完成。
* true：已完成。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DomainDnsIp' => 
              array (
                'description' => 'AD域的DNS IP。
',
                'type' => 'string',
                'example' => '192.168.XX.XX',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
              'DomainName' => 
              array (
                'description' => 'AD域的域名。',
                'type' => 'string',
                'example' => 'example.com',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A\\",\\n  \\"IsSupported\\": true,\\n  \\"TaskFinished\\": true,\\n  \\"DomainDnsIp\\": \\"192.168.XX.XX\\",\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"DomainName\\": \\"example.com\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterADDomainResponse>\\n    <TaskId>t-xxx</TaskId>\\n    <RequestId>7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A</RequestId>\\n    <DomainName>example.com</DomainName>\\n    <TaskFinished>true</TaskFinished>\\n    <IsSupported>true</IsSupported>\\n    <DomainDnsIp>192.168.XX.XX</DomainDnsIp>\\n</DescribeClusterADDomainResponse>","errorExample":""}]',
      'title' => '查询用户关联 AD 信息',
      'summary' => '查询与云桌面集群的用户关联 AD 的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'IsUserAdmin' => 
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
      'systemTags' => 
      array (
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
              'IsAllow' => 
              array (
                'description' => '是否可以使用云工作站：
* true
* false',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'IsAdmin' => 
              array (
                'description' => '是否为 admin 用户：
* true
* false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IsAllow\\": false,\\n  \\"IsAdmin\\": true,\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<IsAdmin>true</IsAdmin>\\n<IsAllow>true</IsAllow>\\n<RequestId>C8760FD7-61AD-47EA-AAC3-F4E6A973DF51</RequestId>","errorExample":""}]',
      'title' => '查询当前用户的权限',
      'summary' => '查询当前用户的权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstance' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机 id。
* 当指定时，选用此交换机来创建实例。推荐在创建时使用此参数，以限定实例的网段与可用区。
* 当不指定时，后台会根据当前实例类型，找到有库存的最新可用区（例如华北 2 可用区 G ），如果此可用区
    * 已有交换机，则直接选用
    * 没有交换机，则会尝试自动创建

',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'desktop-xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'm-xxx',
          ),
        ),
        4 => 
        array (
          'name' => 'SystemDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘大小，单位为 GB。
* 取值范围 20~500。
* 选取不同镜像时，要求系统盘大小 >= 镜像的大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '500',
            'minimum' => '20',
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'SystemDiskCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的种类：
* cloud_efficiency：高效云盘。
* cloud_ssd：SSD云盘。
* cloud_essd：ESSD 云盘。（只有较新规格族的实例，例如 ecs.g6 系统，才支持 ESSD 云盘）
',
            'type' => 'string',
            'required' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        6 => 
        array (
          'name' => 'AllocatePublicAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否分配公网地址
* True
* False',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值只在 `AllocatePublicAddress` 为 `true` 时有效

网络计费类型。取值范围：

- PayByTraffic（默认）：按使用流量计费
- PayByBandwidth：按固定带宽计费
',
            'type' => 'string',
            'required' => false,
            'example' => 'PayByBandwidth',
            'default' => 'PayByTraffic',
          ),
        ),
        8 => 
        array (
          'name' => 'InternetMaxBandwidthIn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值只在 `AllocatePublicAddress` 为 `true` 时有效

公网入带宽最大值，单位为 Mbps
* 取值范围 1~100
* 默认值：4',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        9 => 
        array (
          'name' => 'InternetMaxBandwidthOut',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值只在 `AllocatePublicAddress` 为 `true` 时有效

公网出带宽最大值，单位为 Mbps
* 取值范围 1~100
* 默认值：4',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '4',
            'default' => '4',
          ),
        ),
        10 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，请参见 [实例规格族](https://help.aliyun.com/document_detail/25378.html) 或调用 [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) 获得规格表。',
            'type' => 'string',
            'required' => true,
            'example' => 'ecs.g6.large',
          ),
        ),
        11 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例付费方式：
* PostPaid（默认）：按量付费
* PrePaid：包年包月
',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
            'default' => 'PostPaid',
          ),
        ),
        12 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费：
* False（默认）
* True',
            'type' => 'string',
            'required' => false,
            'example' => 'True',
            'default' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值仅在 `InstanceChargeType` 为 `PrePaid`（包年包月）时有效。

包年包月的时长。
* `PeriodUnit` 为 `Week`（周）时，取值范围 1~4
* `PeriodUnit` 为 `Month`（月）时，取值范围 1 2 3 4 5 6 7 8 9 12 24 36 48 60',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值仅在 `InstanceChargeType` 为 `PrePaid`（包年包月）时有效。

包年包月的单位。
* Week
* Month',
            'type' => 'string',
            'required' => false,
            'example' => 'Week',
          ),
        ),
        15 => 
        array (
          'name' => 'WorkMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作模式：
* Desktop：桌面模式。
* Application：应用模式。',
            'type' => 'string',
            'required' => true,
            'example' => 'Desktop',
          ),
        ),
        16 => 
        array (
          'name' => 'AppList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'AppName' => 
                array (
                  'description' => '> 此值仅在 `WorkMode` 为 `Application` 时有效。

应用名称。其中 AppList.N 的允许范围是 1~10。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'notepad',
                ),
                'AppPath' => 
                array (
                  'description' => '> 此值仅在 `WorkMode` 为 `Application` 时有效。

应用的运行路径。其中 AppList.N 的允许范围是 1~10。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'C:\\Windows\\System32\\notepad.exe',
                ),
                'AppArgs' => 
                array (
                  'description' => '> 此值仅在 `WorkMode` 为 `Application` 时有效。

应用的运行参数。其中 AppList.N 的允许范围是 1~10。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'c:/temp.txt',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例 id',
                'type' => 'string',
                'example' => 'i-xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"i-xxx\\",\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>\\n<InstanceId>i-xxx</InstanceId>","errorExample":""}]',
      'title' => 'CreateInstance',
      'summary' => '创建实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInstance' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>","errorExample":""}]',
      'title' => '删除实例',
      'summary' => '删除实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetInstanceName' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'desktop-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '设置实例名称',
      'summary' => '设置实例名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetInstancePolicy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'VisualLossless',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 仅对 GPU 实例有效，打开后可获得更好的画面质量。

视频无损模式
* off（默认）：关闭
* on：打开
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
            'enum' => 
            array (
              0 => 'on',
              1 => 'off',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'OptimizeFor3d',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 仅对 GPU 实例有效，打开后可获得更小的桌面延迟。

GPU 加速
* off（默认）：关闭
* on：打开
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
            'enum' => 
            array (
              0 => 'on',
              1 => 'off',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'AsyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步模式调用：
* false（默认）：设置完成后，api 才会返回
* true：api **立即**返回
    * 当 `TaskId` 为空：设置动作在后台异步执行。调用方需使用**返回值**中的 TaskId，继续调用 DescribeInstancePolicy 来获得设置运作的结果。
    * 当 `TaskId` 不为空：获得设置动作的结果。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
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
              'TaskId' => 
              array (
                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

调用方可使用此值，用 DescribeInstancePolicy 来查询设置运作的执行状态。
',
                'type' => 'string',
                'example' => 't-xxx',
              ),
              'RequestId' => 
              array (
                'description' => 'Request id。',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>","errorExample":""}]',
      'title' => '设置实例策略状态',
      'summary' => '设置实例的策略状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetInstanceUser' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'UserUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户 id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1234',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '给实例分配用户',
      'summary' => '给实例分配用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartInstance' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '启动实例',
      'summary' => '启动实例。',
    ),
    'StopInstance' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '停止实例',
      'summary' => '停止实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstancePolicy' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

非空时用来获得之前查询命令的执行状态。
',
            'type' => 'string',
            'required' => false,
            'example' => 't-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'AsyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步模式调用：
* false（默认）：命令执行完成后，API才会返回。
* true：API**立即**返回。
    * 当`TaskId`为空：查询命令在后台异步执行。调用方需使用**返回值**中的TaskId，继续调用此API来获得查询命令的结果。
    * 当`TaskId`不为空：获得查询命令的结果。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
              'OptimizeFor3d' => 
              array (
                'description' => 'GPU 3D 加速。
* off：关闭。
* on：打开。
* N/A：不适用，例如非 GPU 实例',
                'type' => 'string',
                'example' => 'on',
              ),
              'TaskFinished' => 
              array (
                'description' => '当前查询命令的运行状态
* false：还未完成。
* true：已完成。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'VisualLossless' => 
              array (
                'description' => '视频无损模式
* off：关闭。
* on：打开。
* N/A：不适用，例如非 GPU 实例',
                'type' => 'string',
                'example' => 'off',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id。',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
              'TaskId' => 
              array (
                'description' => '当前查询命令的任务 id。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OptimizeFor3d\\": \\"on\\",\\n  \\"TaskFinished\\": true,\\n  \\"VisualLossless\\": \\"off\\",\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"TaskId\\": \\"t-xxx\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>\\n<VisualLossless>off</VisualLossless>\\n<TaskFinished>true</TaskFinished>\\n<OptimizeFor3d>on</OptimizeFor3d>","errorExample":""}]',
      'title' => '获取实例策略配置状态',
      'summary' => '攻取实例的策略配置状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstances' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的实例个数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列出指定集群 id 中的所有实例。
> 如果此参数未指定，则列出所有集群中的实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'gws-xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列出实例 id 的信息。
> 如果此参数未指定，则列出所有实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-xxx',
          ),
        ),
        4 => 
        array (
          'name' => 'UserUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列出分配给指定用户 id 的所有实例。
> 如果此参数未指定，则列出所有用户的实例。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345',
          ),
        ),
        5 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列出分配给指定用户的所有实例。
> 如果此参数未指定，则列出所有用户的实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'user01',
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
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Instances' => 
              array (
                'description' => '实例信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '实例状态：
* Creating：创建中
* Starting：启动中
* Stopping：停止中
* Stopped：已停止
* Initializing：初始化
* Unregistered：未注册
* Registered：已注册
* InUse：使用中
* Missing：丢失
* Cloning：镜像制作中
',
                      'type' => 'string',
                      'example' => 'Stopped',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '过期时间。',
                      'type' => 'string',
                      'example' => '2099-12-31T15:59Z',
                    ),
                    'WorkMode' => 
                    array (
                      'description' => '工作模式
* Desktop：桌面模式
* Application：应用模式',
                      'type' => 'string',
                      'example' => 'Application',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-10-12T07:35Z',
                    ),
                    'StoppedMode' => 
                    array (
                      'description' => '实例停止时的计费状态。
* KeepCharging：收费中，例如用户通过 Windows 内部关机
* StopCharging：停止收费
* Not-applicable：不适用。例如包年包月实例',
                      'type' => 'string',
                      'example' => '停止',
                    ),
                    'UserUid' => 
                    array (
                      'description' => '分配的用户 id

> 实例未分配给指定用户时，此值为空。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1234',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称，实例创建时自动生成。不可更改，否则会导致实例状态“未注册”',
                      'type' => 'string',
                      'example' => 'c0-i01-xx-t6',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例 id',
                      'type' => 'string',
                      'example' => 'i-xxx',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型。',
                      'type' => 'string',
                      'example' => 'ecs.g6.large',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '实例所在的集群所关联的用户 AD。当集群未做 AD 关联或集群不支持 AD 关联时，此值为空。',
                      'type' => 'string',
                      'example' => 'abc.com',
                    ),
                    'InstanceChargeType' => 
                    array (
                      'description' => '计费方式：
* PrePaid：包年包月
* PostPaid：按量付费',
                      'type' => 'string',
                      'example' => 'PostPaid',
                    ),
                    'MaxBandwidthIn' => 
                    array (
                      'description' => '公网入带宽最大值，单位为 Mbps',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'IsBoundUser' => 
                    array (
                      'description' => '当前调用者是否已分配给当前实例
* true：是
* false：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'MaxBandwidthOut' => 
                    array (
                      'description' => '公网出带宽最大值，单位为 Mbps',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'Name' => 
                    array (
                      'description' => '实例名称，用户可以自行设置',
                      'type' => 'string',
                      'example' => 'c0-i01-xx-t6-2c8g',
                    ),
                    'UserName' => 
                    array (
                      'description' => '分配的用户名。

> 实例未分配给指定用户时，此值为空。',
                      'type' => 'string',
                      'example' => 'user-xxx',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '实例创建时所使用的镜像 id。',
                      'type' => 'string',
                      'example' => 'm-xxx',
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '集群 id',
                      'type' => 'string',
                      'example' => 'gws-xxx',
                    ),
                    'AppList' => 
                    array (
                      'description' => '应用列表。

> 工作模式为`桌面模式`时，此列表为空',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AppName' => 
                          array (
                            'description' => '应用名称。',
                            'type' => 'string',
                            'example' => 'notepad',
                          ),
                          'AppArgs' => 
                          array (
                            'description' => '应用的运行参数。',
                            'type' => 'string',
                            'example' => 'c:\\temp.txt',
                          ),
                          'AppPath' => 
                          array (
                            'description' => '应用的运行路径。',
                            'type' => 'string',
                            'example' => 'c:\\windows\\system32\\nodepad.exe',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Instances\\": [\\n    {\\n      \\"Status\\": \\"Stopped\\",\\n      \\"ExpireTime\\": \\"2099-12-31T15:59Z\\",\\n      \\"WorkMode\\": \\"Application\\",\\n      \\"CreateTime\\": \\"2019-10-12T07:35Z\\",\\n      \\"StoppedMode\\": \\"停止\\",\\n      \\"UserUid\\": 1234,\\n      \\"HostName\\": \\"c0-i01-xx-t6\\",\\n      \\"InstanceId\\": \\"i-xxx\\",\\n      \\"InstanceType\\": \\"ecs.g6.large\\",\\n      \\"DomainName\\": \\"abc.com\\",\\n      \\"InstanceChargeType\\": \\"PostPaid\\",\\n      \\"MaxBandwidthIn\\": 100,\\n      \\"IsBoundUser\\": true,\\n      \\"MaxBandwidthOut\\": 100,\\n      \\"Name\\": \\"c0-i01-xx-t6-2c8g\\",\\n      \\"UserName\\": \\"user-xxx\\",\\n      \\"ImageId\\": \\"m-xxx\\",\\n      \\"ClusterId\\": \\"gws-xxx\\",\\n      \\"AppList\\": [\\n        {\\n          \\"AppName\\": \\"notepad\\",\\n          \\"AppArgs\\": \\"c:\\\\\\\\temp.txt\\",\\n          \\"AppPath\\": \\"c:\\\\\\\\windows\\\\\\\\system32\\\\\\\\nodepad.exe\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Instances>\\n    <Status>Stopped</Status>\\n    <MaxBandwidthOut>100</MaxBandwidthOut>\\n    <MaxBandwidthIn>100</MaxBandwidthIn>\\n    <UserName>user-xxx</UserName>\\n    <DomainName>abc.com</DomainName>\\n    <ClusterId>gws-xxx</ClusterId>\\n    <InstanceId>i-xxx</InstanceId>\\n    <InstanceChargeType>PostPaid</InstanceChargeType>\\n    <StoppedMode>停止</StoppedMode>\\n    <CreateTime>2019-10-12T07:35Z</CreateTime>\\n    <IsBoundUser>true</IsBoundUser>\\n    <Name>c0-i01-xx-t6-2c8g</Name>\\n    <UserUid>1234</UserUid>\\n    <ImageId>m-xxx</ImageId>\\n    <ExpireTime>2099-12-31T15:59Z</ExpireTime>\\n    <InstanceType>ecs.g6.large</InstanceType>\\n    <WorkMode>Application</WorkMode>\\n    <HostName>c0-i01-xx-t6</HostName>\\n    <AppList>\\n        <AppArgs>c:\\\\temp.txt</AppArgs>\\n        <AppPath>c:\\\\windows\\\\system32\\\\nodepad.exe</AppPath>\\n        <AppName>notepad</AppName>\\n    </AppList>\\n</Instances>\\n<TotalCount>1</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>XXX-XXX</RequestId>\\n<PageNumber>1</PageNumber>","errorExample":""}]',
      'title' => '获取实例信息',
      'summary' => '描述实例信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetConnectTicket' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> `WorkMode` 为 `Desktop`（桌面模式）时，不要指定此参数。
> `WorkMode` 为 `Application`（应用模式）时，必需指定此参数

应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'app-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> DescribeInstances 返回字段的 DomainName 非空，且调用者身份为该实例的已分配用户时，需要此参数

域用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'user01',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> DescribeInstances 返回字段的 DomainName 非空，且调用者身份为该实例的已分配用户时，需要此参数

域用户名的密码。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

非空时用来获得之前调用的执行状态。
',
            'type' => 'string',
            'required' => false,
            'example' => 't-xxx',
          ),
        ),
        5 => 
        array (
          'name' => 'AsyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步模式调用。
* false（默认）：命令执行完成后，API才会返回。
* true：API **立即**返回。
    * 当 `TaskId` 为空：查询命令在后台异步执行。调用方需使用**返回值**中的TaskId，继续调用此API来获得查询命令的结果。
    * 当 `TaskId` 不为空：获得查询命令的结果。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'UsePrivateIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用内网IP连接云桌面：
* false（默认）：获取连接 token 时，优先级从高到低、按以下顺序选择连接云桌面的方式。
    * 实例的弹性IP
    * 实例的公网IP
    * 集群关联NAT时所使用的弹性公网IP
    * 实例的内网IP
* true：获取连接 token 时，以实例的内网IP来连接云桌面。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
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
              'TaskFinished' => 
              array (
                'description' => '当前调用的运行状态
* false：还未完成。
* true：已完成。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
              'Ticket' => 
              array (
                'description' => '用来连接用户实例 Ticket，使用时需要先将其内容做 base64 的 decode，保存为 xxx.ica 文件，然后打开这个文件。python 代码举例：

```
import base64
response = {
    "Ticket": "XXXX",
    "RequestId": "XXX-XXX",
}
f = open (\'xxx.ica\', \'w\')
out = base64.b64decode(response[\'Ticket\'])
f.write(out)
f.close()
```
',
                'type' => 'string',
                'example' => 'XXXXXXXXX',
              ),
              'TaskId' => 
              array (
                'description' => '当前调用对应的任务 id。调用方可使用此值，继续调用此 API 来获取运行的结果。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskFinished\\": true,\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"Ticket\\": \\"XXXXXXXXX\\",\\n  \\"TaskId\\": \\"t-xxx\\"\\n}","errorExample":""},{"type":"xml","example":"<Ticket>XXXXXXXXX</Ticket>\\n<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>\\n<TaskFinished>true</TaskFinished>","errorExample":""}]',
      'title' => '获取连接实例所需要的 token',
      'summary' => '获取连接实例所需要的token。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartInstance' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>908AB064-2453-49E9-B062-9B6CC09FA25C</RequestId>","errorExample":""}]',
      'title' => '重启实例',
      'summary' => '重启实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateImage' => 
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
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'image-xxx',
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
              'ImageId' => 
              array (
                'description' => '镜像 id',
                'type' => 'string',
                'example' => 'm-xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ImageId\\": \\"m-xxx\\",\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<ImageId>m-xxx</ImageId>\\n<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '创建镜像',
      'summary' => '创建镜像。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteImage' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像 id',
            'type' => 'string',
            'required' => true,
            'example' => 'm-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '删除镜像',
      'summary' => '删除镜像。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetImageName' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像 id',
            'type' => 'string',
            'required' => true,
            'example' => 'm-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'image-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '设置镜像名称',
      'summary' => '设置镜像名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeImages' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.g6.large',
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
              'PageSize' => 
              array (
                'description' => '当前分页包含多少条目。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'XXXX-XXXX',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '镜像资源总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Images' => 
              array (
                'description' => '镜像信息Images组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '镜像状态：
* Missing
* Available
* Creating
* UnAvailable
* CreateFailed
',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'ImageType' => 
                    array (
                      'description' => '镜像类型：
* system
* custom',
                      'type' => 'string',
                      'example' => 'system',
                    ),
                    'Progress' => 
                    array (
                      'description' => '镜像完成的进度，单位为百分比。',
                      'type' => 'string',
                      'example' => '100%',
                    ),
                    'Size' => 
                    array (
                      'description' => '镜像大小，单位是 GB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '40',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '镜像的创建时间。',
                      'type' => 'string',
                      'example' => 'Mon May 27 13:33:42 CST 2019',
                    ),
                    'Name' => 
                    array (
                      'description' => '镜像名称。',
                      'type' => 'string',
                      'example' => 'windows 2016 标准版 citrix 1903',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像 id。',
                      'type' => 'string',
                      'example' => 'm-bp125mb261tmk6tqvoni',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '产品代码。  
如果返回该参数，则表示该镜像是基于镜像市场的镜像制作而成。',
                      'type' => 'string',
                      'example' => 'cmjj00042097',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"XXXX-XXXX\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Images\\": [\\n    {\\n      \\"Status\\": \\"Available\\",\\n      \\"ImageType\\": \\"system\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"Size\\": 40,\\n      \\"CreateTime\\": \\"Mon May 27 13:33:42 CST 2019\\",\\n      \\"Name\\": \\"windows 2016 标准版 citrix 1903\\",\\n      \\"ImageId\\": \\"m-bp125mb261tmk6tqvoni\\",\\n      \\"ProductCode\\": \\"cmjj00042097\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<PageSize>20</PageSize>\\n<RequestId>XXXX-XXXX</RequestId>\\n<PageNumber>1</PageNumber>\\n<Images>\\n    <Status>Available</Status>\\n    <Progress>100%</Progress>\\n    <ProductCode>cmjj00042097</ProductCode>\\n    <Size>40</Size>\\n    <CreateTime>Mon May 27 13:33:42 CST 2019</CreateTime>\\n    <ImageId>m-bp125mb261tmk6tqvoni</ImageId>\\n    <ImageType>system</ImageType>\\n    <Name>windows 2016 标准版 citrix 1903</Name>\\n</Images>","errorExample":""}]',
      'title' => '获取镜像信息列表',
      'summary' => '描述镜像。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCluster' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC id',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群类型：
* gws.s1.standard',
            'type' => 'string',
            'required' => true,
            'example' => 'gws.s1.standard',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VSWitch id，用于集群服务器的创建。当不指定时，后台会根据当前集群规格，找到有库存的最新可用区（例如华北 2 可用区 H ），如果此可用区
* 已有交换机，则直接选用
* 没有交换机，则会尝试自动创建',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-xxx',
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
              'ClusterId' => 
              array (
                'description' => '集群 id',
                'type' => 'string',
                'example' => 'gws-xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterId\\": \\"gws-xxx\\",\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<ClusterId>gws-xxx</ClusterId>\\n<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '创建新集群',
      'summary' => '创建集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteCluster' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群 id',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '删除集群',
      'summary' => '删除集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetClusterDnat' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NatId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关 id。
* 取值非空时，代表将待关联 NAT id；此 NAT 与云桌面集群必须处在同一个VPC中
* 此值空时，如果当前集群已关联了某个 NAT，将解除集群与此 NAT 的关联',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'NatEip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '* 当 NatId 非空时，如果此参数
    * 非空，将使用此 EIP 来与集群做关联
    * 为空值，将从 NAT 中状态为 Idle 或 UsedByForwardTable 的 EIP 中自动选择
* 当 NatId 为空值时，此参数无效',
            'type' => 'string',
            'required' => false,
            'example' => '1.2.3.4',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>","errorExample":""}]',
      'title' => '将集群与网关（NAT）做关联',
      'summary' => '将集群与网关（NAT）做关联，关联后将以 DNAT + EIP 的方式来连接桌面。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetClusterName' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群 id',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置的集群名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'cluster-xxx',
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
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '设置集群名称',
      'summary' => '设置集群名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetClusterADDomain' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-rhzlyl5zx3ua****',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainDnsIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD域的DNS IP。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD域的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD域的管理员密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'password***',
          ),
        ),
        4 => 
        array (
          'name' => 'DomainAdmin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD域的管理员密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'administrator',
            'default' => 'administrator',
          ),
        ),
        5 => 
        array (
          'name' => 'DomainDelete',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否建立集群和AD域的关联。取值范围：
* false：建立集群与AD域的关联。
* true：取消集群与AD域的关联。
默认为false。

> 建立集群域AD域的关联前，需要先通过智能接入网关、专线等方式打通AD域与云桌面VPC之间的网络。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
              'TaskId' => 
              array (
                'description' => '任务ID。用于获取escribeClusterADDomain的执行状态。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"RequestId\\": \\"7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A\\"\\n}","errorExample":""},{"type":"xml","example":"<SetClusterADDomainResponse>\\n    <TaskId>t-xxx</TaskId>\\n    <RequestId>7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A</RequestId>\\n</SetClusterADDomainResponse>","errorExample":""}]',
      'title' => '关联云桌面集群与用户 AD',
      'summary' => '调用SetClusterADDomain关联云桌面集群和AD域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetClusterPolicy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群 id',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'UsbRedirect',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'USB 重定向：
* off：关闭
* on：打开
',
            'type' => 'string',
            'required' => true,
            'example' => 'on',
            'enum' => 
            array (
              0 => 'off',
              1 => 'on',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Watermark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '水印：
* off：关闭
* on：打开。水印为星状覆盖屏幕的两行半透明文字，格式为集群信息与主机信息，类似
    * gws-xxx@gws
    * c0-i00-xx-t6',
            'type' => 'string',
            'required' => true,
            'example' => 'off',
            'enum' => 
            array (
              0 => 'off',
              1 => 'on',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'LocalDrive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地磁盘映射：
* off：关闭
* read：只可读
* readwrite：可读写
',
            'type' => 'string',
            'required' => true,
            'example' => 'readwrite',
            'enum' => 
            array (
              0 => 'off',
              1 => 'read',
              2 => 'readwrite',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Clipboard',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '剪贴板：
* off：关闭
* read：只可读
* write：只可写
* readwrite：可读写
',
            'type' => 'string',
            'required' => true,
            'example' => 'read',
            'enum' => 
            array (
              0 => 'off',
              1 => 'read',
              2 => 'readwrite',
              3 => 'write',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'UdpPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'udp 端口：
* on（默认）：打开。推荐配置为 on，带宽占用与网络稳定性更好。
* off：关闭。定位 udp 相关的网络问题时，有时需要在这里设置 off，设置后安全组入方向的 1494 / 2598 的规则会被移除
',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
            'default' => 'on',
            'enum' => 
            array (
              0 => 'off',
              1 => 'on',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Audio',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '音频：
* on（默认）：打开，客户端可以听到云桌面内部的声音。
* off：关闭，客户端听不到云桌面内部的声音。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'on',
            'enum' => 
            array (
              0 => 'off',
              1 => 'on',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'DomainList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名白名单
* 白名单为空时，允许访问所有域名
* 白名单非空时，仅允许访问列表中的域名
* 支持 `*` 通配符
* 多条域名规则之间用逗号分隔
* 设置后对当前集群的所有实例即时生效
',
            'type' => 'string',
            'required' => false,
            'example' => '*.abc.com,*.xyz.com',
          ),
        ),
        8 => 
        array (
          'name' => 'AsyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步模式调用：
* false（默认）：命令执行完成后，api 才会返回
* true：命令后台执行，api 立即返回。调用方需要记录返回值中的 TaskId，然后来 DescribeClusterPolicy 查询命令的执行状态。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
              'TaskId' => 
              array (
                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

调用方可使用此值，用 DescribeClusterPolicy 来查询命令的执行状态。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求 id',
                'type' => 'string',
                'example' => 'XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<RequestId>XXXX</RequestId>","errorExample":""}]',
      'title' => '设置集群策略',
      'summary' => '设置集群策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusterConnections' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云桌面集群 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询区间的起始日期。',
            'type' => 'string',
            'required' => true,
            'example' => '2020-09-07',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询区间的截止日期。',
            'type' => 'string',
            'required' => true,
            'example' => '2020-09-01',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '做异步查询时的 task id。',
            'type' => 'string',
            'required' => false,
            'example' => 't-xxx',
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
                'description' => '请求 id。',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
              'TaskFinished' => 
              array (
                'description' => '* true：当前 task 已经完成
* false：当前 task 还在运行中',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalCount' => 
              array (
                'description' => '数组Connections的长度。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TaskId' => 
              array (
                'description' => '* 调用时如果入参TaskId为空，则调用方需使用返回值中的TaskId，继续调用此API来获得查询命令的结果。
* 调用时如果入参TaskId非空，则返回值会查询此TaskId 的运行状态。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
              'Connections' => 
              array (
                'description' => '描述连接会话信息的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogoffStatus' => 
                    array (
                      'description' => '* 0：此会话已正常退出
* 空值：此会话还未退出',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'LogonTime' => 
                    array (
                      'description' => '此会话的登入时间。 ',
                      'type' => 'string',
                      'example' => '2020-09-01T01:02:03.456Z',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称。',
                      'type' => 'string',
                      'example' => 'hostname',
                    ),
                    'LogoffTime' => 
                    array (
                      'description' => '此会话的退出时间。
当此值为空时，说明此会话还未退出。',
                      'type' => 'string',
                      'example' => '2020-09-03T01:02:03.456Z',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例 id。',
                      'type' => 'string',
                      'example' => 'i-xxx',
                    ),
                    'ClientName' => 
                    array (
                      'description' => '客户端的主机名称.',
                      'type' => 'string',
                      'example' => 'client-xxx',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"TaskFinished\\": true,\\n  \\"TotalCount\\": 1,\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"Connections\\": [\\n    {\\n      \\"LogoffStatus\\": \\"0\\",\\n      \\"InstanceName\\": \\"test\\",\\n      \\"LogonTime\\": \\"2020-09-01T01:02:03.456Z\\",\\n      \\"HostName\\": \\"hostname\\",\\n      \\"LogoffTime\\": \\"2020-09-03T01:02:03.456Z\\",\\n      \\"InstanceId\\": \\"i-xxx\\",\\n      \\"ClientName\\": \\"client-xxx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Connections>\\n    <LogoffStatus>0</LogoffStatus>\\n    <LogoffTime>2020-09-03T01:02:03.456Z</LogoffTime>\\n    <ClientName>client-xxx</ClientName>\\n    <LogonTime>2020-09-01T01:02:03.456Z</LogonTime>\\n    <InstanceId>i-xxx</InstanceId>\\n</Connections>\\n<TotalCount>1</TotalCount>\\n<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>\\n<TaskFinished>true</TaskFinished>","errorExample":""}]',
      'title' => '查询某集群的会话连接信息',
      'summary' => '查询某集群的会话连接信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusterPolicy' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

非空时用来获得之前查询命令的执行状态。
',
            'type' => 'string',
            'required' => false,
            'example' => 't-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AsyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步模式调用：
* false（默认）：命令执行完成后，API才会返回。
* true：API **立即**返回。
    * 当 `TaskId` 为空：查询命令在后台异步执行。调用方需使用**返回值**中的TaskId，继续调用此API来获得查询命令的结果。
    * 当 `TaskId` 不为空：获得查询命令的结果。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群 id。',
            'type' => 'string',
            'required' => true,
            'example' => 'gws-xxx',
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
              'UdpPort' => 
              array (
                'description' => 'UDP 端口：
* on：打开
* off：关闭',
                'type' => 'string',
                'example' => 'on',
              ),
              'TaskFinished' => 
              array (
                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

当前查询命令的运行状态
* false：还未完成。
* true：已完成。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => 'Request Id',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
              'UsbRedirect' => 
              array (
                'description' => 'USB 重定向：
* off
* on
',
                'type' => 'string',
                'example' => 'off',
              ),
              'Clipboard' => 
              array (
                'description' => '本地剪贴板在云桌面中：
* off：关闭
* read：只可读
* write：只可写
* readwrite：可读 & 可写

',
                'type' => 'string',
                'example' => 'readwrite',
              ),
              'Watermark' => 
              array (
                'description' => '水印：
* off
* on',
                'type' => 'string',
                'example' => 'off',
              ),
              'TaskId' => 
              array (
                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效

当前查询命令的任务 id。',
                'type' => 'string',
                'example' => 't-xxx',
              ),
              'DomainList' => 
              array (
                'description' => '域名白名单
* 白名单为空时，允许访问所有域名
* 白名单非空时，仅允许访问列表中的域名
* 支持 `*` 通配符
* 多条域名规则时之间用逗号分隔
',
                'type' => 'string',
                'example' => '*.abc.com,*.xyz.com',
              ),
              'Audio' => 
              array (
                'description' => '音频：
* on：打开
* off：关闭',
                'type' => 'string',
                'example' => 'on',
              ),
              'LocalDrive' => 
              array (
                'description' => '本地磁盘在云桌面中的映射驱动器：
* off：关闭
* read：只可读
* readwrite：可读 & 可写
',
                'type' => 'string',
                'example' => 'readwrite',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UdpPort\\": \\"on\\",\\n  \\"TaskFinished\\": true,\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"UsbRedirect\\": \\"off\\",\\n  \\"Clipboard\\": \\"readwrite\\",\\n  \\"Watermark\\": \\"off\\",\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"DomainList\\": \\"*.abc.com,*.xyz.com\\",\\n  \\"Audio\\": \\"on\\",\\n  \\"LocalDrive\\": \\"readwrite\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<UdpPort>on</UdpPort>\\n<RequestId>XXX-XXX</RequestId>\\n<LocalDrive>readwrite</LocalDrive>\\n<UsbRedirect>off</UsbRedirect>\\n<TaskFinished>true</TaskFinished>\\n<DomainList>*.abc.com,*.xyz.com</DomainList>\\n<Clipboard>readwrite</Clipboard>\\n<Audio>on</Audio>\\n<Watermark>off</Watermark>","errorExample":""}]',
      'title' => '获取集群策略',
      'summary' => '获取集群策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusters' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'gws-rhzlyl5zx3ua****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的行数。',
            'type' => 'integer',
            'format' => 'int64',
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
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '集群总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Clusters' => 
              array (
                'description' => '集群信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => 'VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1vi54o1on2sijpm****',
                    ),
                    'Status' => 
                    array (
                      'description' => '集群状态。可能值：
* creating
* starting
* running
* deleted
* indebt
',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'NatId' => 
                    array (
                      'description' => '与集群关联的NAT网关的ID。
> 当集群没有与NAT网关关联时，此值为空。',
                      'type' => 'string',
                      'example' => 'ngw-uf63l0kkf73ieyf9k****',
                    ),
                    'InstanceCount' => 
                    array (
                      'description' => '集群中的实例个数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-09-17T02:02:25Z',
                    ),
                    'NatEip' => 
                    array (
                      'description' => '与集群关联的NAT网关所使用的弹性公网IP。
> 当集群没有与NAT网关关联时，此值为空。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'SecurityGroup' => 
                    array (
                      'description' => '安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-bp18ny7dvho4g0s7****',
                    ),
                    'Name' => 
                    array (
                      'description' => '集群名称。',
                      'type' => 'string',
                      'example' => 'cluster-xxx',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '* gws.s1.standard 集群：返回空值。
* gws.s1.advanced 集群：关联用户AD域之后，此值对应已关联的用户AD域，例如：example.com。取消关联后，此值为空。',
                      'type' => 'string',
                      'example' => 'example.com',
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'gws-rhzlyl5zx3ua****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Clusters\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1vi54o1on2sijpm****\\",\\n      \\"Status\\": \\"running\\",\\n      \\"NatId\\": \\"ngw-uf63l0kkf73ieyf9k****\\",\\n      \\"InstanceCount\\": 1,\\n      \\"CreateTime\\": \\"2020-09-17T02:02:25Z\\",\\n      \\"NatEip\\": \\"192.168.XX.XX\\",\\n      \\"SecurityGroup\\": \\"sg-bp18ny7dvho4g0s7****\\",\\n      \\"Name\\": \\"cluster-xxx\\",\\n      \\"DomainName\\": \\"example.com\\",\\n      \\"ClusterId\\": \\"gws-rhzlyl5zx3ua****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Clusters>\\n        <Status>running</Status>\\n        <InstanceCount>1</InstanceCount>\\n        <NatId>ngw-uf63l0kkf73ieyf9k****</NatId>\\n        <VpcId>vpc-bp1vi54o1on2sijpm****</VpcId>\\n        <DomainName>example.com</DomainName>\\n        <ClusterId>gws-rhzlyl5zx3ua****</ClusterId>\\n        <CreateTime>2020-09-17T02:02:25Z</CreateTime>\\n        <SecurityGroup>sg-bp18ny7dvho4g0s7****</SecurityGroup>\\n        <NatEip>192.168.XX.XX</NatEip>\\n        <Name>cluster-xxx</Name>\\n    </Clusters>\\n</DescribeClustersResponse>","errorExample":""}]',
      'title' => '描述集群信息',
      'summary' => '调用DescribeClusters查询集群信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAvailableResource' => 
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
                'description' => 'Request id。',
                'type' => 'string',
                'example' => 'XXX-XXX',
              ),
              'AvailableResources' => 
              array (
                'description' => 'AvailableResources',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ClusterType' => 
                    array (
                      'description' => '集群类型。',
                      'type' => 'string',
                      'example' => 'gws.s1.stardard',
                    ),
                    'Zone' => 
                    array (
                      'description' => '可用区。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"AvailableResources\\": [\\n    {\\n      \\"ClusterType\\": \\"gws.s1.stardard\\",\\n      \\"Zone\\": \\"cn-hangzhou-i\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>\\n<AvailableResources>\\n    <Zone>cn-hangzhou-i</Zone>\\n    <ClusterType>gws.s1.stardard</ClusterType>\\n</AvailableResources>","errorExample":""}]',
      'title' => '查看云桌面集群的规格与可用区列表',
      'summary' => '查看云桌面集群的规格与可用区列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'gws.ap-northeast-3.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'gws.cn-qingdao.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'gws.cn-beijing.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'gws.cn-chengdu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'gws.cn-zhangjiakou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'gws.cn-huhehaote.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'gws.cn-hangzhou.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'gws.cn-shanghai.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'gws.cn-shenzhen.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'gws.cn-hongkong.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'gws.ap-southeast-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'gws.ap-southeast-2.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'gws.ap-southeast-5.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'gws.ap-northeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'gws.us-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'gws.us-east-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'gws.eu-central-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'gws.ap-south-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'gws.eu-west-1.aliyuncs.com',
    ),
  ),
);
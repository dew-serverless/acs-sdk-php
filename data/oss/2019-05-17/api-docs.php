<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'OSS',
    'product' => 'Oss',
    'version' => '2019-05-17',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 146111,
      'title' => '服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListBuckets',
      ),
    ),
    1 => 
    array (
      'id' => 146109,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    2 => 
    array (
      'id' => 146114,
      'title' => '存储空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 146115,
          'title' => '基础操作',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetBucketStat',
            1 => 'PutBucket',
            2 => 'DeleteBucket',
            3 => 'ListObjects',
            4 => 'ListObjectsV2',
            5 => 'GetBucketInfo',
            6 => 'GetBucketLocation',
          ),
        ),
        1 => 
        array (
          'id' => 184274,
          'title' => '接入点',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListAccessPoints',
            1 => 'GetAccessPoint',
            2 => 'GetAccessPointPolicy',
            3 => 'DeleteAccessPointPolicy',
            4 => 'PutAccessPointPolicy',
            5 => 'DeleteAccessPoint',
            6 => 'CreateAccessPoint',
          ),
        ),
        2 => 
        array (
          'id' => 146122,
          'title' => '合规保留策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'InitiateBucketWorm',
            1 => 'AbortBucketWorm',
            2 => 'CompleteBucketWorm',
            3 => 'ExtendBucketWorm',
            4 => 'GetBucketWorm',
          ),
        ),
        3 => 
        array (
          'id' => 146128,
          'title' => '权限控制',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketAcl',
            1 => 'GetBucketAcl',
          ),
        ),
        4 => 
        array (
          'id' => 146131,
          'title' => '生命周期',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketLifecycle',
            1 => 'GetBucketLifecycle',
            2 => 'DeleteBucketLifecycle',
          ),
        ),
        5 => 
        array (
          'id' => 146135,
          'title' => '传输加速',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketTransferAcceleration',
            1 => 'GetBucketTransferAcceleration',
          ),
        ),
        6 => 
        array (
          'id' => 146138,
          'title' => '版本控制',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketVersioning',
            1 => 'GetBucketVersioning',
            2 => 'ListObjectVersions',
          ),
        ),
        7 => 
        array (
          'id' => 146148,
          'title' => '授权策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketPolicy',
            1 => 'GetBucketPolicy',
            2 => 'DeleteBucketPolicy',
            3 => 'GetBucketPolicyStatus',
          ),
        ),
        8 => 
        array (
          'id' => 146142,
          'title' => '数据复制',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketRtc',
            1 => 'PutBucketReplication',
            2 => 'GetBucketReplication',
            3 => 'GetBucketReplicationLocation',
            4 => 'GetBucketReplicationProgress',
            5 => 'DeleteBucketReplication',
          ),
        ),
        9 => 
        array (
          'id' => 146152,
          'title' => '清单',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketInventory',
            1 => 'GetBucketInventory',
            2 => 'ListBucketInventory',
            3 => 'DeleteBucketInventory',
          ),
        ),
        10 => 
        array (
          'id' => 146157,
          'title' => '日志管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketLogging',
            1 => 'GetBucketLogging',
            2 => 'DeleteBucketLogging',
            3 => 'PutUserDefinedLogFieldsConfig',
            4 => 'GetUserDefinedLogFieldsConfig',
            5 => 'DeleteUserDefinedLogFieldsConfig',
          ),
        ),
        11 => 
        array (
          'id' => 146161,
          'title' => '静态网站',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetBucketWebsite',
            1 => 'PutBucketWebsite',
            2 => 'DeleteBucketWebsite',
          ),
        ),
        12 => 
        array (
          'id' => 146165,
          'title' => '防盗链',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketReferer',
            1 => 'GetBucketReferer',
          ),
        ),
        13 => 
        array (
          'id' => 146168,
          'title' => '标签',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketTags',
            1 => 'GetBucketTags',
            2 => 'DeleteBucketTags',
          ),
        ),
        14 => 
        array (
          'id' => 191780,
          'title' => '存储冗余转换',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListBucketDataRedundancyTransition',
            1 => 'GetBucketDataRedundancyTransition',
            2 => 'CreateBucketDataRedundancyTransition',
            3 => 'DeleteBucketDataRedundancyTransition',
          ),
        ),
        15 => 
        array (
          'id' => 146172,
          'title' => '加密',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketEncryption',
            1 => 'GetBucketEncryption',
            2 => 'DeleteBucketEncryption',
          ),
        ),
        16 => 
        array (
          'id' => 146176,
          'title' => '请求者付费',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketRequestPayment',
            1 => 'GetBucketRequestPayment',
          ),
        ),
        17 => 
        array (
          'id' => 146179,
          'title' => '跨资源共享',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketCors',
            1 => 'GetBucketCors',
            2 => 'DeleteBucketCors',
            3 => 'OptionObject',
          ),
        ),
        18 => 
        array (
          'id' => 184334,
          'title' => '访问跟踪',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutBucketAccessMonitor',
            1 => 'GetBucketAccessMonitor',
          ),
        ),
        19 => 
        array (
          'id' => 184337,
          'title' => '数据索引',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetMetaQueryStatus',
            1 => 'CloseMetaQuery',
            2 => 'DoMetaQuery',
            3 => 'OpenMetaQuery',
          ),
        ),
        20 => 
        array (
          'id' => 184342,
          'title' => '高防',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateUserAntiDDosInfo',
            1 => 'UpdateBucketAntiDDosInfo',
            2 => 'ListBucketAntiDDosInfo',
            3 => 'InitUserAntiDDosInfo',
            4 => 'InitBucketAntiDDosInfo',
            5 => 'GetUserAntiDDosInfo',
          ),
        ),
        21 => 
        array (
          'id' => 184349,
          'title' => '资源组',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetBucketResourceGroup',
            1 => 'PutBucketResourceGroup',
          ),
        ),
        22 => 
        array (
          'id' => 184352,
          'title' => '自定义域名',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutCname',
            1 => 'ListCname',
            2 => 'DeleteCname',
            3 => 'GetCnameToken',
            4 => 'CreateCnameToken',
          ),
        ),
        23 => 
        array (
          'id' => 184358,
          'title' => '图片样式',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutStyle',
            1 => 'ListStyle',
            2 => 'GetStyle',
            3 => 'DeleteStyle',
          ),
        ),
        24 => 
        array (
          'id' => 186871,
          'title' => '安全传输层协议（TLS）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetBucketHttpsConfig',
            1 => 'PutBucketHttpsConfig',
          ),
        ),
        25 => 
        array (
          'id' => 191785,
          'title' => '对象FC接入点',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateAccessPointForObjectProcess',
            1 => 'GetAccessPointForObjectProcess',
            2 => 'ListAccessPointsForObjectProcess',
            3 => 'DeleteAccessPointForObjectProcess',
            4 => 'GetAccessPointConfigForObjectProcess',
            5 => 'PutAccessPointConfigForObjectProcess',
            6 => 'PutAccessPointPolicyForObjectProcess',
            7 => 'GetAccessPointPolicyForObjectProcess',
            8 => 'DeleteAccessPointPolicyForObjectProcess',
          ),
        ),
        26 => 
        array (
          'id' => 191709,
          'title' => '阻止公共访问',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 191710,
              'title' => 'OSS全局阻止公共访问',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'GetPublicAccessBlock',
                1 => 'PutPublicAccessBlock',
                2 => 'DeletePublicAccessBlock',
              ),
            ),
            1 => 
            array (
              'id' => 191714,
              'title' => 'Bucket级别阻止公共访问',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'GetBucketPublicAccessBlock',
                1 => 'PutBucketPublicAccessBlock',
                2 => 'DeleteBucketPublicAccessBlock',
              ),
            ),
            2 => 
            array (
              'id' => 191718,
              'title' => '接入点级别阻止公共访问',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'GetAccessPointPublicAccessBlock',
                1 => 'PutAccessPointPublicAccessBlock',
                2 => 'DeleteAccessPointPublicAccessBlock',
              ),
            ),
          ),
        ),
        27 => 
        array (
          'id' => 191795,
          'title' => '归档直读',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetBucketArchiveDirectRead',
            1 => 'PutBucketArchiveDirectRead',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 146184,
      'title' => '文件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 146185,
          'title' => '基础操作',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutObject',
            1 => 'CopyObject',
            2 => 'GetObject',
            3 => 'AppendObject',
            4 => 'DeleteObject',
            5 => 'HeadObject',
            6 => 'GetObjectMeta',
            7 => 'RestoreObject',
            8 => 'SelectObject',
            9 => 'CreateSelectObjectMeta',
          ),
        ),
        1 => 
        array (
          'id' => 146198,
          'title' => '分片上传',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'InitiateMultipartUpload',
            1 => 'UploadPart',
            2 => 'CompleteMultipartUpload',
            3 => 'UploadPartCopy',
            4 => 'AbortMultipartUpload',
            5 => 'ListMultipartUploads',
            6 => 'ListParts',
          ),
        ),
        2 => 
        array (
          'id' => 146206,
          'title' => '权限控制',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutObjectAcl',
            1 => 'GetObjectAcl',
          ),
        ),
        3 => 
        array (
          'id' => 146209,
          'title' => '软链接',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutSymlink',
            1 => 'GetSymlink',
          ),
        ),
        4 => 
        array (
          'id' => 146212,
          'title' => '标签',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PutObjectTagging',
            1 => 'GetObjectTagging',
            2 => 'DeleteObjectTagging',
          ),
        ),
      ),
    ),
    4 => 
    array (
      'id' => 146216,
      'title' => '直播推流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PutLiveChannel',
        1 => 'ListLiveChannel',
        2 => 'DeleteLiveChannel',
        3 => 'PutLiveChannelStatus',
        4 => 'GetLiveChannelInfo',
        5 => 'GetLiveChannelHistory',
        6 => 'GetLiveChannelStat',
        7 => 'GetVodPlaylist',
        8 => 'PostVodPlaylist',
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
    'ListBuckets' => 
    array (
      'summary' => '列举请求者拥有的所有存储空间（Bucket）。',
      'path' => '/',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '9318',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossTOZXHW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回的Bucket名称必须以prefix作为前缀。如果不设定，则不过滤前缀信息。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'my',
          ),
        ),
        1 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'mybucket10',
          ),
        ),
        2 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定此次返回Bucket的最大个数。
取值范围：1~1000
默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'x-oss-resource-group-id',
          'in' => 'header',
          'schema' => 
          array (
            'description' => 'Bucket所属资源组Id',
            'required' => false,
            '$ref' => '#/components/schemas/ResourceGroupId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'ListBuckets（GetService）接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListAllMyBucketsResult' => 
              array (
                'description' => '保存ListBuckets（GetService）请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Owner' => 
                  array (
                    'description' => '保存Bucket拥有者信息的容器。',
                    '$ref' => '#/components/schemas/Owner',
                  ),
                  'Prefix' => 
                  array (
                    'description' => '本次查询结果的前缀。',
                    'type' => 'string',
                    'example' => 'logs/',
                  ),
                  'Marker' => 
                  array (
                    'description' => '本次ListBuckets（GetSerivce）的起点。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'MaxKeys' => 
                  array (
                    'description' => '响应请求内返回结果的最大数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'IsTruncated' => 
                  array (
                    'description' => '是否所有的结果都已经返回。取值范围如下：
- true：表示本次没有返回全部结果。
- false：表示本次已经返回了全部结果。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '本次没有返回全部结果',
                      'false' => '本次已经返回全部结果',
                    ),
                    'example' => 'true',
                  ),
                  'NextMarker' => 
                  array (
                    'description' => '用于继续查询时给marker赋值。表示下一次ListBuckets（GetService）可以以此为marker，将未返回的结果返回。',
                    'type' => 'string',
                    'example' => 'def',
                  ),
                  'Buckets' => 
                  array (
                    'description' => '保存Bucket信息列表的容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Bucket' => 
                      array (
                        'description' => '保存多个Bucket信息的列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '保存Bucket信息的容器。',
                          '$ref' => '#/components/schemas/Bucket',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5xx' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListAllMyBucketsResult\\": {\\n    \\"Owner\\": {\\n      \\"ID\\": \\"\\",\\n      \\"DisplayName\\": \\"\\"\\n    },\\n    \\"Prefix\\": \\"logs/\\",\\n    \\"Marker\\": \\"abc\\",\\n    \\"MaxKeys\\": 20,\\n    \\"IsTruncated\\": true,\\n    \\"NextMarker\\": \\"def\\",\\n    \\"Buckets\\": {\\n      \\"Bucket\\": [\\n        {\\n          \\"CreationDate\\": \\"\\",\\n          \\"ExtranetEndpoint\\": \\"\\",\\n          \\"IntranetEndpoint\\": \\"\\",\\n          \\"Location\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Region\\": \\"\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '列举存储空间',
      'description' => '- 您也可以通过设置prefix、marker或者max-keys参数列举满足指定条件的存储空间。
- 要列举存储空间，您必须有oss:GetService (ListBuckets)权限。具体操作，请参见[为RAM用户授权自定义的权限策略](https://help.aliyun.com/document_detail/199058.htm?spm=a2c4g.11186623.0.0.48be7590hCA8LI#section-ucu-jv0-zip)。
- 调用接口时，如果所有Bucket已返回，则返回参数的XML中不包含Prefix、Marker、MaxKeys、IsTruncated和NextMarker响应元素。',
    ),
    'DescribeRegions' => 
    array (
      'summary' => '查询所有支持地域或者指定地域对应的Endpoint信息，包括外网Endpoint、内网Endpoint和传输加速Endpoint。',
      'path' => '/?regions',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'regions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'DescribeRegions接口的响应体结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RegionInfoList' => 
              array (
                'description' => '地域信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionInfo' => 
                  array (
                    'description' => '保存多个地域信息的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '地域信息。',
                      '$ref' => '#/components/schemas/RegionInfo',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RegionInfoList\\": {\\n    \\"RegionInfo\\": [\\n      {\\n        \\"Region\\": \\"\\",\\n        \\"InternetEndpoint\\": \\"\\",\\n        \\"InternalEndpoint\\": \\"\\",\\n        \\"AccelerateEndpoint\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询地域',
      'description' => '只支持在二级域名（例如oss-cn-hangzhou.aliyuncs.com）上调用DescribeRegions接口。',
      'extraInfo' => '<details>
<summary>查询所有支持地域的描述信息</summary>
请求示例

```http
GET /?regions HTTP/1.1
Host: oss-cn-hangzhou.aliyuncs.com
Date: Fri, 20 Aug 2021 06:38:30 GMT
Authorization: SignatureValue
```
返回示例
```http
HTTP/1.1 200 OK
x-oss-request-id: 3a8f-2e2d-7965-3ff9-51c875b*****
Date: Fri, 20 Aug 2021 06:38:30 GMT
Content-Type: application/xml
Content-Length: 344606
Server: AliyunOSS
```
```xml
<?xml version="1.0" encoding="UTF-8"?>
<RegionInfoList>
  <RegionInfo>
     <Region>oss-cn-hangzhou</Region>
     <InternetEndpoint>oss-cn-hangzhou.aliyuncs.com</InternetEndpoint>
     <InternalEndpoint>oss-cn-hangzhou-internal.aliyuncs.com</InternalEndpoint>
     <AccelerateEndpoint>oss-accelerate.aliyuncs.com</AccelerateEndpoint>  
  </RegionInfo>
  <RegionInfo>
     <Region>oss-cn-shanghai</Region>
     <InternetEndpoint>oss-cn-shanghai.aliyuncs.com</InternetEndpoint>
     <InternalEndpoint>oss-cn-shanghai-internal.aliyuncs.com</InternalEndpoint>
     <AccelerateEndpoint>oss-accelerate.aliyuncs.com</AccelerateEndpoint>  
  </RegionInfo>
</RegionInfoList>
```
</details>
<details>
<summary>查询指定地域的描述信息</summary>
请求示例

```http
GET /?regions=oss-cn-hangzhou HTTP/1.1
Host: oss-cn-hangzhou.aliyuncs.com
Date: Fri, 20 Aug 2021 06:40:30 GMT
Authorization: SignatureValue
```
返回示例
```http
HTTP/1.1 200 OK
x-oss-request-id: 3a8f-2e2d-7965-3ff9-51c875b*****
Date: Fri, 20 Aug 2021 06:40:30 GMT
Content-Type: application/xml
Content-Length: 3446
Server: AliyunOSS
```
```xml
<?xml version="1.0" encoding="UTF-8"?>
<RegionInfoList>
  <RegionInfo>
    <Region>oss-cn-hangzhou</Region>
    <InternetEndpoint>oss-cn-hangzhou.aliyuncs.com</InternetEndpoint>
    <InternalEndpoint>oss-cn-hangzhou-internal.aliyuncs.com</InternalEndpoint>
    <AccelerateEndpoint>oss-accelerate.aliyuncs.com</AccelerateEndpoint>  
  </RegionInfo>
</RegionInfoList>
```
</details>',
    ),
    'GetBucketStat' => 
    array (
      'summary' => '获取指定存储空间的存储容量以及文件数量。',
      'path' => '/?stat',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '要查询的Bucket',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'GetBucketStat接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketStat' => 
              array (
                'description' => 'BucketStat结构的容器。',
                '$ref' => '#/components/schemas/BucketStat',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BucketStat\\": {\\n    \\"Storage\\": 1994,\\n    \\"ObjectCount\\": 32,\\n    \\"MultipartUploadCount\\": 27,\\n    \\"LiveChannelCount\\": 2,\\n    \\"MultipartPartCount\\": 128,\\n    \\"DeleteMarkerCount\\": 12,\\n    \\"LastModifiedTime\\": 1709724731,\\n    \\"StandardStorage\\": 1990,\\n    \\"StandardObjectCount\\": 18,\\n    \\"InfrequentAccessStorage\\": 120,\\n    \\"InfrequentAccessRealStorage\\": 120,\\n    \\"InfrequentAccessObjectCount\\": 2,\\n    \\"ArchiveStorage\\": 120,\\n    \\"ArchiveRealStorage\\": 120,\\n    \\"ArchiveObjectCount\\": 2,\\n    \\"ColdArchiveStorage\\": 120,\\n    \\"ColdArchiveRealStorage\\": 120,\\n    \\"ColdArchiveObjectCount\\": 2,\\n    \\"DeepColdArchiveStorage\\": 120,\\n    \\"DeepColdArchiveRealStorage\\": 120,\\n    \\"DeepColdArchiveObjectCount\\": 2\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间存储容量与文件数量',
      'description' => '- 调用该接口时需要拥有oss:GetBucketStat权限。
- 调用该接口获取的数据并非是实时数据，延时可能超过一个小时。
- 调用该接口获取到的存储信息的时间点不保证是最新的，即后一次调用该接口返回的LastModifiedTime字段值可能比前一次调用该接口返回的LastModifiedTime字段值小。',
    ),
    'PutBucket' => 
    array (
      'summary' => '创建一个存储空间（Bucket）。',
      'path' => '/',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。存储空间的命名规范如下：

- 只能包括小写字母、数字和短划线（-）。
- 必须以小写字母或者数字开头和结尾。
- 长度必须在3~63字符之间。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Bucket的访问权限ACL。包含如下三种访问权限：

- public-read-write：公共读写

- public-read：公共读

- private：私有（默认值）

关于Bucket访问权限ACL的更多信息，请参见[设置存储空间访问权限ACL](~~31843~~)。',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            '$ref' => '#/components/schemas/BucketACL',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-resource-group-id',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定资源组ID。
- 如果在请求中携带该请求头并指定资源组ID，则创建的存储空间属于该资源组。当指定的资源组ID为rg-default-id时，创建的存储空间属于默认资源组。
- 如果在请求中未携带该请求头，则创建的存储空间属于默认资源组。

您可以通过资源管理的控制台或ListResourceGroups接口获取资源组ID。具体操作，请分别参见[查看资源组基本信息](~~151181~~)和[ListResourceGroups](~~158855~~)。
> 创建无地域属性Bucket时不支持配置资源组。',
            'required' => false,
            '$ref' => '#/components/schemas/ResourceGroupId',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '存储创建Bucket信息的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'CreateBucketConfiguration' => 
              array (
                'description' => '创建Bucket时使用的配置信息。',
                'required' => false,
                '$ref' => '#/components/schemas/CreateBucketConfiguration',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建存储空间',
      'description' => '- 同一阿里云账号在同一地域（Region）内最多支持创建100个Bucket。
- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。',
      'extraInfo' => '此接口所对应的各语言SDK如下：
- Java
- Python
- PHP
- Go
- C
- .NET
- Android
- iOS
- Node.js
- Ruby',
    ),
    'DeleteBucket' => 
    array (
      'summary' => '删除存储空间（Bucket）。',
      'path' => '/',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间',
      'description' => '- 只有Bucket的拥有者才有权限删除该Bucket。
- 为了防止误删除的发生，OSS不支持删除一个非空的Bucket。',
    ),
    'ListObjects' => 
    array (
      'summary' => '列举存储空间（Bucket）中所有文件（Object）的信息。',
      'path' => '/',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'delimiter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对Object名字进行分组的字符。所有Object名字包含指定的前缀，第一次出现delimiter字符之间的Object作为一组元素（即CommonPrefixes）。',
            'type' => 'string',
            'required' => false,
            'example' => '/',
          ),
        ),
        2 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定从marker之后按字母排序开始返回Object。
<br>marker用来实现分页显示效果，参数的长度必须小于1024字节。
<br>做条件查询时，即使marker在列表中不存在，也会从符合marker字母排序的下一个开始打印。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1.txt',
          ),
        ),
        3 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回Object的最大数。 如果因为max-keys的设定无法一次完成列举，返回结果会附加NextMarker元素作为下一次列举的marker。<br>取值：大于0小于1000 <br>默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回文件的Key必须以prefix作为前缀。

- prefix参数的长度必须小于1024字节。

- 使用prefix查询时，返回的Key中仍会包含prefix。

如果把prefix设为某个文件夹名，则列举以此Prefix开头的文件，即该文件夹下递归的所有文件和子文件夹。<br>
在设置prefix的基础上，将delimiter设置为正斜线（/）时，返回值中只列举该文件夹下的文件，文件夹下的子文件夹名返回在CommonPrefixes中，子文件夹下递归的所有文件和文件夹不显示。<br>
例如，一个Bucket中有三个Object ，分别为fun/test.jpg、 fun/movie/001.avi和fun/movie/007.avi。如果设定prefix为fun/，则返回三个Object；如果在prefix设置为fun/的基础上，将delimiter设置为正斜线（/），则返回fun/test.jpg和fun/movie/。',
            'type' => 'string',
            'required' => false,
            'example' => 'fun',
          ),
        ),
        5 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对返回的内容进行编码并指定编码的类型。

> delimiter、marker、prefix、NextMarker以及Key使用UTF-8字符。如果delimiter、marker、prefix、NextMarker以及Key中包含XML 1.0标准不支持的控制字符，您可以通过指定encoding-type对返回结果中的Delimiter、Marker、Prefix、NextMarker以及Key进行编码。',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'GetBucket（ListObjects）接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListBucketResult' => 
              array (
                'description' => '保存GetBucket请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'title' => 'The bucket name',
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Prefix' => 
                  array (
                    'title' => 'The prefix that the names of returned objects contain',
                    'description' => '本次查询结果的前缀。',
                    'type' => 'string',
                    'example' => 'logs/',
                  ),
                  'Marker' => 
                  array (
                    'title' => 'The name of the object from which the list operation begins',
                    'description' => '标识此次GetBucket（ListObjects）的起点。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'MaxKeys' => 
                  array (
                    'title' => 'The maximum number of returned objects in the response',
                    'description' => '响应请求内返回结果的最大数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Delimiter' => 
                  array (
                    'title' => 'The character used to group objects by name',
                    'description' => '对Object名字进行分组的字符。所有名字包含指定的前缀且第一次出现Delimiter字符之间的Object作为一组元素CommonPrefixes。',
                    'type' => 'string',
                    'example' => '/',
                  ),
                  'IsTruncated' => 
                  array (
                    'title' => 'Indicates whether the returned results are truncated',
                    'description' => '请求中返回的结果是否被截断。

返回值：true、false

true表示本次没有返回全部结果。

false表示本次已经返回了全部结果。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '本次没有返回全部结果',
                      'false' => '本次已经返回全部结果',
                    ),
                    'example' => 'true',
                  ),
                  'EncodingType' => 
                  array (
                    'description' => '指明了返回结果中编码使用的类型。如果请求的参数中指定了encoding-type，则会对返回结果中的Delimiter、Marker、Prefix、NextMarker和Key这些元素进行编码。',
                    'type' => 'string',
                    'example' => 'url',
                  ),
                  'NextMarker' => 
                  array (
                    'description' => '下一次列举文件的起点。',
                    'type' => 'string',
                    'example' => 'def',
                  ),
                  'Contents' => 
                  array (
                    'title' => 'The container that stores the returned object metadata',
                    'description' => '保存每个返回Object元数据的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存Object元数据的容器。',
                      '$ref' => '#/components/schemas/ObjectSummary',
                    ),
                  ),
                  'CommonPrefixes' => 
                  array (
                    'title' => 'Objects whose names contain the same string that ranges from the prefix to the next occurrence of the delimiter are grouped as a single result element',
                    'description' => '如果请求中指定了Delimiter参数，则会在返回的响应中包含CommonPrefixes元素。该元素表明以Delimiter结尾，并有共同前缀的Object名称的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '以Delimiter结尾，并有共同前缀的Object名称。',
                      '$ref' => '#/components/schemas/CommonPrefix',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '4xx' => 
        array (
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListBucketResult\\": {\\n    \\"Name\\": \\"example-bucket\\",\\n    \\"Prefix\\": \\"logs/\\",\\n    \\"Marker\\": \\"abc\\",\\n    \\"MaxKeys\\": 20,\\n    \\"Delimiter\\": \\"/\\",\\n    \\"IsTruncated\\": true,\\n    \\"EncodingType\\": \\"url\\",\\n    \\"NextMarker\\": \\"def\\",\\n    \\"Contents\\": [\\n      {\\n        \\"Key\\": \\"fun/test.jpg\\",\\n        \\"LastModified\\": \\"2012-02-24T08:42:32.000Z\\",\\n        \\"ETag\\": \\"5B3C1A2E053D763E1B002CC607C5A0FE1****\\",\\n        \\"Type\\": \\"Normal\\",\\n        \\"Size\\": 344606,\\n        \\"Owner\\": {\\n          \\"ID\\": \\"\\",\\n          \\"DisplayName\\": \\"\\"\\n        },\\n        \\"ResoreInfo\\": \\"ongoing-request=\\\\\\"true”\\"\\n      }\\n    ],\\n    \\"CommonPrefixes\\": [\\n      {\\n        \\"Prefix\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列举存储空间中所有文件的信息',
      'description' => '- GetBucket (ListObjects)接口已修订为GetBucketV2 (ListObjectsV2)。建议您在开发应用程序时使用较新的版本GetBucketV2 (ListObjectsV2)。为保证向后兼容性，OSS继续支持GetBucket (ListObjects)。有关GetBucketV2 (ListObjectsV2)的更多信息，请参见[GetBucketV2 (ListObjectsV2)](~~187544~~)。

- 执行GetBucket (ListObjects)请求时不会返回Object中自定义的元信息。',
    ),
    'ListObjectsV2' => 
    array (
      'summary' => '列举存储空间（Bucket）中所有文件（Object）的信息。',
      'path' => '/?list-type=2',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'delimiter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The character used to group objects by name',
            'description' => '对Object名字进行分组的字符。所有Object名字包含指定的前缀，第一次出现Delimiter字符之间的Object作为一组元素（即CommonPrefixes）。',
            'type' => 'string',
            'required' => false,
            'example' => '/',
          ),
        ),
        2 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The maximum number of objects to return',
            'description' => '指定返回Object的最大数。<br>取值：大于0小于1000 <br>默认值：100

> 如果因为Max-keys的设定无法一次完成列举，返回结果会附加一个<NextContinuationToken>作为下一次列举的Continuation-token。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The prefix that the returned object names must contain',
            'description' => '限定返回文件的Key必须以Prefix作为前缀。<br>

- 参数的长度必须小于1024字节。

- 使用Prefix查询时，返回的Key中仍会包含Prefix。

如果把Prefix设为某个文件夹名，则列举以此Prefix开头的文件，即该文件夹下递归的所有文件和子文件夹。<br>
在设置Prefix的基础上，将Delimiter设置为正斜线（/）时，返回值就只列举该文件夹下的文件，文件夹下的子文件夹名返回在CommonPrefixes中，子文件夹下递归的所有文件和文件夹不显示。<br>
例如，一个Bucket中有三个Object ，分别为fun/test.jpg、 fun/movie/001.avi和fun/movie/007.avi。若设定Prefix为fun/，则返回三个Object；如果在Prefix设置为fun/的基础上，将Delimiter设置为正斜线（/），则返回fun/test.jpg和fun/movie/。',
            'type' => 'string',
            'required' => false,
            'example' => 'a',
          ),
        ),
        4 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The encoding type of the object name in the response',
            'description' => '对返回的内容进行编码并指定编码的类型。

>  Delimiter、Start-after、Prefix、NextContinuationToken以及Key使用UTF-8字符。如果Delimiter、Start-after、Prefix、NextContinuationToken以及Key中包含XML 1.0标准不支持的控制字符，您可以通过指定Encoding-type对返回结果中的Delimiter、Start-after、Prefix、NextContinuationToken以及Key进行编码。',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
        5 => 
        array (
          'name' => 'fetch-owner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定是否在返回结果中包含owner信息。可选值如下：

- true：表示返回结果中包含owner信息。

- false：表示返回结果中不包含owner信息。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => 'true',
              'false' => 'false',
            ),
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'start-after',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定从Start-after之后按字母排序开始返回Object。<br>
Start-after用来实现分页显示效果，参数的长度必须小于1024字节。
<br>做条件查询时，即使Start-after在列表中不存在，也会从符合Start-after字母排序的下一个开始打印。',
            'type' => 'string',
            'required' => false,
            'example' => 'b',
          ),
        ),
        7 => 
        array (
          'name' => 'continuation-token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定list操作需要从此token开始。您可从ListObjectsV2结果中的NextContinuationToken获取此token。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1.txt',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'ListObjectsV2接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListBucketResult' => 
              array (
                'description' => '保存返回Object元信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'title' => 'The bucket name',
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Prefix' => 
                  array (
                    'title' => 'The prefix that the names of returned objects must contain',
                    'description' => '本次查询结果的前缀。',
                    'type' => 'string',
                    'example' => 'logs/',
                  ),
                  'StartAfter' => 
                  array (
                    'description' => '如果请求中指定了StartAfter参数，则会在返回的响应中包含StartAfter元素。',
                    'type' => 'string',
                    'example' => 'test.txt',
                  ),
                  'MaxKeys' => 
                  array (
                    'title' => 'The maximum number of returned objects in the response',
                    'description' => '响应请求内返回结果的最大数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Delimiter' => 
                  array (
                    'description' => '对Object名字进行分组的字符。所有名字包含指定的前缀且第一次出现Delimiter字符之间的Object作为一组元素CommonPrefixes。',
                    'type' => 'string',
                    'example' => '/',
                  ),
                  'IsTruncated' => 
                  array (
                    'title' => 'Indicates whether the returned results are truncated',
                    'description' => '请求中返回的结果是否被截断。

返回值：true、false

true表示本次没有返回全部结果。

false表示本次已经返回了全部结果。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '本次没有返回全部结果',
                      'false' => '本次已经返回全部结果',
                    ),
                    'example' => 'true',
                  ),
                  'KeyCount' => 
                  array (
                    'description' => '此次请求返回的Key的个数。如果指定了Delimiter，则KeyCount为Key和CommonPrefixes的元素之和。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'EncodingType' => 
                  array (
                    'description' => '指明返回结果中编码使用的类型。如果请求的参数中指定了Encoding-type，则会对返回结果中的Delimiter、StartAfter、Prefix、NextContinuationToken和Key这些元素进行编码。',
                    'type' => 'string',
                    'example' => 'url',
                  ),
                  'ContinuationToken' => 
                  array (
                    'description' => '如果请求中指定了ContinuationToken参数，则会在返回的响应中包含ContinuationToken元素。',
                    'type' => 'string',
                    'example' => 'CgJiYw--',
                  ),
                  'NextContinuationToken' => 
                  array (
                    'description' => '表明此次ListObjectsV2（GetBucketV2）请求包含后续结果，需要将NextContinuationToken指定为ContinuationToken继续获取结果。',
                    'type' => 'string',
                    'example' => 'CgJiYw--',
                  ),
                  'Contents' => 
                  array (
                    'title' => 'The container that stores the versions of objects except for delete markers',
                    'description' => '保存每个返回Object元数据的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存单个Object元数据的容器。',
                      '$ref' => '#/components/schemas/ObjectSummary',
                    ),
                  ),
                  'CommonPrefixes' => 
                  array (
                    'title' => 'Objects whose names contain the same string that ranges from the prefix to the next occurrence of the delimiter are grouped as a single result element',
                    'description' => '如果请求中指定了Delimiter参数，则会在返回的响应中包含CommonPrefixes元素。该元素表明以Delimiter结尾，并有共同前缀的Object名称的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '以Delimiter结尾，并有共同前缀的Object名称。',
                      '$ref' => '#/components/schemas/CommonPrefix',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '4xx' => 
        array (
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListBucketResult\\": {\\n    \\"Name\\": \\"example-bucket\\",\\n    \\"Prefix\\": \\"logs/\\",\\n    \\"StartAfter\\": \\"test.txt\\",\\n    \\"MaxKeys\\": 20,\\n    \\"Delimiter\\": \\"/\\",\\n    \\"IsTruncated\\": true,\\n    \\"KeyCount\\": 6,\\n    \\"EncodingType\\": \\"url\\",\\n    \\"ContinuationToken\\": \\"CgJiYw--\\",\\n    \\"NextContinuationToken\\": \\"CgJiYw--\\",\\n    \\"Contents\\": [\\n      {\\n        \\"Key\\": \\"fun/test.jpg\\",\\n        \\"LastModified\\": \\"2012-02-24T08:42:32.000Z\\",\\n        \\"ETag\\": \\"5B3C1A2E053D763E1B002CC607C5A0FE1****\\",\\n        \\"Type\\": \\"Normal\\",\\n        \\"Size\\": 344606,\\n        \\"Owner\\": {\\n          \\"ID\\": \\"\\",\\n          \\"DisplayName\\": \\"\\"\\n        },\\n        \\"ResoreInfo\\": \\"ongoing-request=\\\\\\"true”\\"\\n      }\\n    ],\\n    \\"CommonPrefixes\\": [\\n      {\\n        \\"Prefix\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列举存储空间中所有文件的信息V2',
      'description' => '执行GetBucketV2 (ListObjectsV2)请求时不会返回Object中自定义的元信息。',
    ),
    'GetBucketInfo' => 
    array (
      'summary' => '查看存储空间（Bucket）的相关信息。只有Bucket的拥有者才能查看Bucket的信息。该请求可以从任何一个OSS的Endpoint发起。',
      'path' => '/?bucketInfo',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'GetBucketInfo接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketInfo' => 
              array (
                'description' => '保存Bucket信息的容器。',
                '$ref' => '#/components/schemas/BucketInfo',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BucketInfo\\": {\\n    \\"Bucket\\": {\\n      \\"AccessMonitor\\": \\"Disabled\\",\\n      \\"CreationDate\\": \\"2022-01-06T08:20:09.000Z\\",\\n      \\"CrossRegionReplication\\": \\"Disabled\\",\\n      \\"Location\\": \\"oss-cn-hangzhou\\",\\n      \\"Name\\": \\"test-bucket\\",\\n      \\"TransferAcceleration\\": \\"Disabled\\",\\n      \\"Owner\\": {\\n        \\"ID\\": \\"\\",\\n        \\"DisplayName\\": \\"\\"\\n      },\\n      \\"AccessControlList\\": {},\\n      \\"ServerSideEncryptionRule\\": {\\n        \\"SSEAlgorithm\\": \\"None\\",\\n        \\"KMSMasterKeyID\\": \\"****\\",\\n        \\"KMSDataEncryption\\": \\"SM4\\"\\n      },\\n      \\"BucketPolicy\\": {\\n        \\"LogBucket\\": \\"example-bucket\\",\\n        \\"LogPrefix\\": \\"log/\\"\\n      },\\n      \\"Comment\\": \\"An example bucket.\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看存储空间的相关信息',
    ),
    'GetBucketLocation' => 
    array (
      'summary' => '查看存储空间（Bucket）的位置信息。只有Bucket的拥有者才能查看Bucket的位置信息。',
      'path' => '/?location',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '存储Bucket位置信息的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'LocationConstraint' => 
              array (
                'description' => 'Bucket所在的地域。<br>
有效值：oss-cn-hangzhou、oss-cn-shanghai、oss-cn-qingdao、oss-cn-beijing、oss-cn-zhangjiakouoss-cn-hongkong、oss-cn-shenzhen、oss-us-west-1、oss-us-east-1、oss-ap-southeast-1等。

<br>有关Bucket所在地域与数据中心对应关系的更多信息，请参见[访问域名与数据中心。](~~31837~~)。',
                'type' => 'string',
                'example' => 'oss-cn-hangzhou',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LocationConstraint\\": \\"oss-cn-hangzhou\\"\\n}","type":"json"}]',
      'title' => '查看存储空间的位置信息',
    ),
    'ListAccessPoints' => 
    array (
      'summary' => '获取用户级别或Bucket级别的接入点信息。',
      'path' => '/?accessPoint',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回接入点的最大数量。取值如下：

- 获取用户级别接入点时，取值要求大于0小于等于1000。

- 获取Bucket级别接入点时，取值要求大于0小于等于100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'continuation-token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定List操作需要从此token开始。您可从返回结果中的NextContinuationToken获取此token。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'ListAccessPoints接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListAccessPointsResult' => 
              array (
                'description' => '保存本次列举接入点信息结果的容器。',
                '$ref' => '#/components/schemas/ListAccessPointsResult',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListAccessPointsResult\\": {\\n    \\"IsTruncated\\": \\"true\\",\\n    \\"NextContinuationToken\\": \\"ap-test-01\\",\\n    \\"AccountId\\": \\"11489****34218\\",\\n    \\"AccessPoints\\": {\\n      \\"AccessPoint\\": [\\n        {\\n          \\"Bucket\\": \\"\\",\\n          \\"VpcConfiguration\\": {\\n            \\"VpcId\\": \\"vpc-t4nlw426y44rd3iq4****\\"\\n          }\\n        }\\n      ]\\n    },\\n    \\"MaxKeys\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取接入点信息',
    ),
    'GetAccessPoint' => 
    array (
      'summary' => '获取接入点信息。',
      'path' => '/?accessPoint',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ap-01',
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
              'GetAccessPointResult' => 
              array (
                'description' => '保存接入点信息的容器。',
                '$ref' => '#/components/schemas/GetAccessPointResult',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"GetAccessPointResult\\": {\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"AccountId\\": \\"114******818\\",\\n    \\"VpcConfiguration\\": {\\n      \\"VpcId\\": \\"vpc-t4nlw426y44rd3iq4****\\"\\n    },\\n    \\"Endpoints\\": {},\\n    \\"PublicAccessBlockConfiguration\\": {\\n      \\"BlockPublicAccess\\": true\\n    },\\n    \\"CreationDate\\": \\"Sat, 27 Apr 2024 15:04:14 GMT\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取接入点信息',
    ),
    'GetAccessPointPolicy' => 
    array (
      'summary' => '获取接入点策略配置。',
      'path' => '/?accessPointPolicy',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '接入点策略配置内容。',
            'type' => 'string',
            'example' => '{
   "Version":"1",
   "Statement":[
   {
     "Action":[
       "oss:PutObject",
       "oss:GetObject"
    ],
    "Effect":"Deny",
    "Principal":["27737962156157xxxx"],
    "Resource":[
       "acs:oss:ap-southeast-2:111933544165xxxx:accesspoint/$ap-01",
       "acs:oss:ap-southeast-2:111933544165xxxx:accesspoint/$ap-01/object/*"
     ]
   }
  ]
 }  ',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"\\"{\\\\n   \\\\\\"Version\\\\\\":\\\\\\"1\\\\\\",\\\\n   \\\\\\"Statement\\\\\\":[\\\\n   {\\\\n     \\\\\\"Action\\\\\\":[\\\\n       \\\\\\"oss:PutObject\\\\\\",\\\\n       \\\\\\"oss:GetObject\\\\\\"\\\\n    ],\\\\n    \\\\\\"Effect\\\\\\":\\\\\\"Deny\\\\\\",\\\\n    \\\\\\"Principal\\\\\\":[\\\\\\"27737962156157xxxx\\\\\\"],\\\\n    \\\\\\"Resource\\\\\\":[\\\\n       \\\\\\"acs:oss:ap-southeast-2:111933544165xxxx:accesspoint/$ap-01\\\\\\",\\\\n       \\\\\\"acs:oss:ap-southeast-2:111933544165xxxx:accesspoint/$ap-01/object/*\\\\\\"\\\\n     ]\\\\n   }\\\\n  ]\\\\n }  \\"","type":"json"}]',
      'title' => '获取接入点策略配置',
    ),
    'DeleteAccessPointPolicy' => 
    array (
      'summary' => '删除接入点策略。',
      'path' => '/?accessPointPolicy',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除接入点策略',
    ),
    'PutAccessPointPolicy' => 
    array (
      'summary' => '配置接入点策略。',
      'path' => '/?accessPointPolicy',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ap-01',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '接入点策略配置内容。',
            'type' => 'string',
            'required' => false,
            'example' => '{
   "Version":"1",
   "Statement":[
   {
     "Action":[
       "oss:PutObject",
       "oss:GetObject"
    ],
    "Effect":"Deny",
    "Principal":["27737962156157xxxx"],
    "Resource":[
       "acs:oss:ap-southeast-2:111933544165xxxx:accesspoint/$ap-01",
       "acs:oss:ap-southeast-2:111933544165xxxx:accesspoint/$ap-01/object/*"
     ]
   }
  ]
 }  ',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '配置接入点策略',
    ),
    'DeleteAccessPoint' => 
    array (
      'summary' => '删除接入点。',
      'path' => '/?accessPoint',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => '	
ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除接入点',
    ),
    'CreateAccessPoint' => 
    array (
      'summary' => '创建接入点。',
      'path' => '/?accessPoint',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存接入点信息的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'CreateAccessPointConfiguration' => 
              array (
                'description' => '保存接入点配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/CreateAccessPointConfiguration',
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
            'type' => 'object',
            'properties' => 
            array (
              'CreateAccessPointResult' => 
              array (
                'description' => '保存接入点信息的容器。',
                '$ref' => '#/components/schemas/CreateAccessPointResult',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CreateAccessPointResult\\": {}\\n}","type":"json"}]',
      'title' => '创建接入点',
      'description' => '- 单个阿里云账号支持创建1000个接入点。
- 单个Bucket支持创建100个接入点。',
    ),
    'InitiateBucketWorm' => 
    array (
      'summary' => '新建一条合规保留策略。',
      'path' => '/?worm',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'InitiateWormConfiguration' => 
              array (
                'description' => '初始化合规保留策略的配置。',
                'required' => false,
                '$ref' => '#/components/schemas/InitiateWormConfiguration',
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
          'headers' => 
          array (
            'x-oss-worm-id' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'wormId',
                'type' => 'string',
              ),
            ),
          ),
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '新建合规保留策略',
      'description' => '对象存储OSS支持WORM（Write Once Read Many）特性，允许以不可删除、不可篡改的方式保存和使用数据。OSS允许针对存储空间（Bucket）设置基于时间的合规保留策略，保护周期为1天到70年。

- 当基于时间的合规保留策略创建24小时后未提交锁定，则该策略自动失效。当合规保留策略锁定后，您可以在Bucket中上传和读取文件（Object），但是在Object的保留时间到期之前，不允许删除Object及合规保留策略。Object的保留时间到期后，才可以删除Object。关于合规保留策略的更多信息，请参见[合规保留策略](~~90564~~)。

- 同一个Bucket中，版本控制和合规保留策略无法同时配置。如果Bucket已开启版本控制功能，则无法再配置保留策略。关于版本控制功能更多信息，请参见[版本控制介绍](~~109685~~)。',
    ),
    'AbortBucketWorm' => 
    array (
      'summary' => '删除指定存储空间（Bucket）未锁定的合规保留策略。',
      'path' => '/?worm',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '4xx' => 
        array (
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除未锁定的合规保留策略',
      'description' => '当基于时间的合规保留策略创建后，该策略默认处于InProgress状态，且该状态的有效期为24小时。在有效期24小时内，此策略对应的Bucket数据处于保护状态。

- 启动合规保留策略24小时内：若此策略未提交锁定，则Bucket所有者以及授权用户可以删除此策略；若该保留策略已提交锁定，则不允许删除此策略，且无法缩短策略保护周期，仅可以延长保护周期。

- 启动合规保留策略24小时后：若超过24小时该保留策略未提交锁定，则该策略自动失效。

<br>如果Bucket内有文件处于保护周期内，那么您将无法删除合规保留策略，同时也无法删除Bucket。当Bucket为空时，Bucket的所有者可以删除该Bucket，从而间接删除该Bucket的保留策略。',
    ),
    'CompleteBucketWorm' => 
    array (
      'summary' => '调用CompleteBucketWorm接口锁定合规保留策略。',
      'path' => '/',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'wormId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The ID of the retention policy',
            'description' => '合规保留策略的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1666E2CFB2B3418****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '4xx' => 
        array (
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '锁定合规保留策略',
      'description' => '当基于时间的合规保留策略创建后，此策略默认处于InProgress状态，且该状态的有效期为24小时。在有效期24小时内，此策略对应的Bucket数据处于保护状态。

- 启动合规保留策略24小时内：若此策略未提交锁定，则Bucket所有者以及授权用户可以删除此策略；若此保留策略已提交锁定，则不允许删除此策略，且无法缩短策略保护周期，仅可以延长保护周期。

- 启动合规保留策略24小时后：若超过24小时此保留策略未提交锁定，则此策略自动失效。',
    ),
    'ExtendBucketWorm' => 
    array (
      'summary' => '延长已锁定的合规保留策略对应Bucket中Object的保留天数。',
      'path' => '/?wormExtend',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'wormId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '合规保留策略的ID。

> 如果指定用于延长Object保留天数对应的合规保留策略ID不存在，则返回404。',
            'type' => 'string',
            'required' => true,
            'example' => '1666E2CFB2B3418****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存合规保留策略的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'ExtendWormConfiguration' => 
              array (
                'description' => '保存合规保留策略的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/ExtendWormConfiguration',
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
        ),
        '4xx' => 
        array (
        ),
        '5xx' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '延长存储空间中文件的保留天数',
      'description' => '当基于时间的合规保留策略创建后，该策略默认处于InProgress状态，且该状态的有效期为24小时。在有效期24小时内，此策略对应的Bucket数据处于保护状态。

- 启动合规保留策略24小时内：若此策略未提交锁定，则Bucket所有者以及授权用户可以删除此策略；若该保留策略已提交锁定，则不允许删除此策略，且无法缩短策略保护周期，仅可以延长保护周期。

- 启动合规保留策略24小时后：若超过24小时该保留策略未提交锁定，则该策略自动失效。

若Bucket内有文件处于保护周期内，那么您将无法删除合规保留策略，同时也无法删除Bucket。当Bucket为空时，Bucket的所有者可以删除该Bucket，从而间接删除该Bucket的保留策略。


> 若指定用于延长Object保留天数对应的WORM ID不存在，则返回404。

',
    ),
    'GetBucketWorm' => 
    array (
      'summary' => '获取指定存储空间（Bucket）的合规保留策略信息。',
      'path' => '/?worm',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'WormConfiguration' => 
              array (
                'description' => '存储Bucket合规保留策略的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'WormId' => 
                  array (
                    'description' => '合规保留策略的ID。',
                    'type' => 'string',
                    'example' => '1666E2CFB2B3418****',
                  ),
                  'State' => 
                  array (
                    'description' => '合规保留策略所处的状态。可选值：

InProgress：合规保留策略创建后，该策略默认处于“InProgress”状态，且该状态的有效期为24小时。

Locked：合规保留策略处于锁定状态。',
                    '$ref' => '#/components/schemas/BucketWormState',
                  ),
                  'RetentionPeriodInDays' => 
                  array (
                    'description' => 'Object的指定保留天数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'CreationDate' => 
                  array (
                    'description' => '合规保留策略的创建时间。',
                    'type' => 'string',
                    'example' => '2020-10-15T15:50:32',
                  ),
                  'ExpirationDate' => 
                  array (
                    'description' => '合规保留策略的过期时间。',
                    'type' => 'string',
                    'example' => '2020-10-20T15:50:32
',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"WormConfiguration\\": {\\n    \\"WormId\\": \\"1666E2CFB2B3418****\\",\\n    \\"RetentionPeriodInDays\\": 20,\\n    \\"CreationDate\\": \\"2020-10-15T15:50:32\\",\\n    \\"ExpirationDate\\": \\"2020-10-20T15:50:32\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间的合规保留策略信息',
      'description' => '对象存储OSS支持WORM（Write Once Read Many）特性，允许您以不可删除、不可篡改的方式保存和使用数据。OSS允许针对Bucket设置基于时间的合规保留策略，保护周期为1天到70年。<br>
当合规保留策略锁定后，您可以在Bucket中上传和读取文件（Object），但是在Object的保留时间到期之前，不允许删除Object及合规保留策略。Object的保留时间到期后，才可以删除Object。


> 若指定用来获取Bucket的合规保留策略信息对应的WORM ID不存在，则返回404。
',
    ),
    'PutBucketAcl' => 
    array (
      'summary' => '设置或修改存储空间（Bucket）的访问权限（ACL）。',
      'path' => '/?acl',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '设置Bucket的访问权限ACL。PutBucketAcl接口通过Put请求中的x-oss-acl请求头来设置访问权限，如果没有该请求头，则访问权限设置不生效。
<br>取值如下：

- public-read-write（公共读写）：所有用户都有该Bucket内的文件的读写权限。请谨慎使用该访问权限。
- public-read（公共读）：Bucket的拥有者和授权用户有该Bucket内的文件的读写权限，其他用户只有该Bucket内的文件的读权限。请谨慎使用该访问权限。
- private：Bucket的拥有者和授权用户有该Bucket内的文件的读写权限，其他用户没有权限操作该Bucket内的文件。',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            '$ref' => '#/components/schemas/BucketACL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置或修改存储空间的访问权限',
      'description' => '- 请求者需要对Bucket拥有写入ACL的权限`oss:PutBucketAcl`。

- PutBucketAcl为覆盖语义，即新传入的ACL将覆盖原有的ACL。

- 如果指定要设置ACL的Bucket不存在，调用该接口时将新建Bucket。',
    ),
    'GetBucketAcl' => 
    array (
      'summary' => '获取某个存储空间（Bucket）的访问权限（ACL）。只有Bucket的拥有者才能获取Bucket的访问权限。',
      'path' => '/?acl',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'AccessControlPolicy' => 
              array (
                'description' => '存储ACL信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Owner' => 
                  array (
                    'description' => '保存Bucket拥有者信息的容器。',
                    '$ref' => '#/components/schemas/Owner',
                  ),
                  'AccessControlList' => 
                  array (
                    'description' => '存储ACL信息的容器类。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Grant' => 
                      array (
                        'description' => 'Bucket的ACL权限。',
                        '$ref' => '#/components/schemas/BucketACL',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessControlPolicy\\": {\\n    \\"Owner\\": {\\n      \\"ID\\": \\"\\",\\n      \\"DisplayName\\": \\"\\"\\n    },\\n    \\"AccessControlList\\": {}\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间的访问权限',
    ),
    'PutBucketLifecycle' => 
    array (
      'summary' => '调用PutBucketLifecycle接口设置存储空间（Bucket）的生命周期规则。生命周期规则开启后，OSS将按照配置规则指定的时间，自动转换与规则相匹配的文件（Object）的存储类型或将其删除。',
      'path' => '/?lifecycle',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '9066',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss20S3WM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-allow-same-action-overlap',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定生命周期规则是否允许前缀重叠。取值如下：

true：允许前缀重叠。

false：不允许前缀重叠。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存Lifecycle配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'LifecycleConfiguration' => 
              array (
                'description' => 'Lifecycle配置的容器，最多可容纳1000条规则。',
                'required' => false,
                '$ref' => '#/components/schemas/LifecycleConfiguration',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置存储空间的生命周期规则',
      'description' => '- 只有Bucket的拥有者以及被授予PutBucketLifecycle权限的RAM用户才能发起配置生命周期规则的请求。

- 如果Bucket此前没有设置过生命周期规则，此操作会创建一个新的生命周期规则；如果Bucket此前设置过生命周期规则，此操作会覆写先前的规则配置。

- PutBucketLifecycle是覆盖语义。当您需要追加生命周期规则时，请先调用GetBucketLifecycle接口获取当前生命周期规则配置，然后追加新的生命周期规则配置，最后调用PutBucketLifecycle接口更新生命周期规则配置。

- PutBucketLifecycle操作可以对Object以及Part（以分片方式上传，但最后未提交的分片）设置过期时间。',
    ),
    'GetBucketLifecycle' => 
    array (
      'summary' => '查看存储空间（Bucket）的生命周期规则（Lifecycle）。只有Bucket的拥有者才有权限查看Bucket的生命周期规则。',
      'path' => '/?lifecycle',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '9037',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss20S3WM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'LifecycleConfiguration' => 
              array (
                'description' => '存储Bucket生命周期规则的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '存储生命周期规则的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '生命周期规则配置信息。',
                      '$ref' => '#/components/schemas/LifecycleRule',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LifecycleConfiguration\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"ID\\": \\"rule1\\",\\n        \\"Prefix\\": \\"logs/\\",\\n        \\"Status\\": \\"Enabled\\",\\n        \\"Expiration\\": {\\n          \\"CreatedBeforeDate\\": \\"2002-10-11T00:00:00.000Z\\",\\n          \\"Days\\": 365,\\n          \\"ExpiredObjectDeleteMarker\\": true,\\n          \\"Date\\": \\"2002-10-11T00:00:00.000Z\\"\\n        },\\n        \\"Transition\\": [\\n          {\\n            \\"CreatedBeforeDate\\": \\"2002-10-11T00:00:00.000Z\\",\\n            \\"Days\\": 200,\\n            \\"IsAccessTime\\": true,\\n            \\"ReturnToStdWhenVisit\\": false,\\n            \\"AllowSmallFile\\": true\\n          }\\n        ],\\n        \\"AbortMultipartUpload\\": {\\n          \\"Days\\": 300,\\n          \\"CreatedBeforeDate\\": \\"2002-10-11T00:00:00.000Z\\",\\n          \\"Date\\": \\"2002-10-11T00:00:00.000Z\\"\\n        },\\n        \\"Tag\\": [\\n          {\\n            \\"Key\\": \\"\\",\\n            \\"Value\\": \\"\\"\\n          }\\n        ],\\n        \\"NoncurrentVersionExpiration\\": {\\n          \\"NoncurrentDays\\": 350\\n        },\\n        \\"NoncurrentVersionTransition\\": [\\n          {\\n            \\"NoncurrentDays\\": 200,\\n            \\"IsAccessTime\\": true,\\n            \\"ReturnToStdWhenVisit\\": false,\\n            \\"AllowSmallFile\\": true\\n          }\\n        ],\\n        \\"Filter\\": {\\n          \\"Not\\": {\\n            \\"Prefix\\": \\"logs/keep/\\",\\n            \\"Tag\\": {\\n              \\"Key\\": \\"\\",\\n              \\"Value\\": \\"\\"\\n            }\\n          },\\n          \\"ObjectSizeGreaterThan\\": 10240,\\n          \\"ObjectSizeLessThan\\": 10240\\n        },\\n        \\"AtimeBase\\": 1626158525\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询存储空间的生命周期规则',
    ),
    'DeleteBucketLifecycle' => 
    array (
      'summary' => '调用DeleteBucketLifecycle接口删除指定存储空间（Bucket）的生命周期规则。',
      'path' => '/?lifecycle',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '9024',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss20S3WM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间的生命周期规则',
      'description' => '- 只有Bucket的拥有者才能删除该Bucket的生命周期规则。

- 调用DeleteBucketLifecycle接口删除指定Bucket所有的生命周期规则后，该Bucket中的文件（Object）不会被自动删除。',
    ),
    'PutBucketTransferAcceleration' => 
    array (
      'summary' => '调用PutBucketTransferAcceleration接口为存储空间（Bucket）配置传输加速。开启传输加速后，可提升全球各地用户对OSS的访问速度，适用于远距离数据传输、GB或TB级大文件上传和下载的场景。',
      'path' => '/?transferAcceleration',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '传输加速配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'TransferAccelerationConfiguration' => 
              array (
                'description' => '传输加速配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/TransferAccelerationConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '为存储空间配置传输加速',
      'description' => '- 只有Bucket拥有者以及被授予oss:PutBucketTransferAcceleration权限的RAM用户才能发起配置传输加速的请求。

- 开启传输加速后，Bucket会在保留默认Endpoint的基础上新增传输加速域名，但必须使用OSS的传输加速域名才会提升访问速度。

- 使用传输加速域名访问Bucket时，OSS会收取传输加速费用。详情请参见[传输加速费用](~~173539~~)。

有关传输加速的更多信息，请参见开发指南的[传输加速](~~131312~~)。',
    ),
    'GetBucketTransferAcceleration' => 
    array (
      'summary' => '调用GetBucketTransferAcceleration接口获取目标存储空间（Bucket）的传输加速配置。',
      'path' => '/?transferAcceleration',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'TransferAccelerationConfiguration' => 
              array (
                'description' => '保存传输加速配置信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Enabled' => 
                  array (
                    'description' => '是否开启传出加速。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TransferAccelerationConfiguration\\": {\\n    \\"Enabled\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间的传输加速配置',
      'description' => '- 只有Bucket拥有者以及被授予oss:GetBucketTransferAcceleration权限的RAM用户才能发起获取传输加速配置的请求。

- 如果Bucket未配置过传输加速，调用该接口时不返回加速配置状态。

有关传输加速的更多信息，请参见开发指南的[传输加速](~~131312~~)。',
    ),
    'PutBucketVersioning' => 
    array (
      'summary' => '设置指定存储空间（Bucket）的版本控制状态。',
      'path' => '/?versioning',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'VersioningConfiguration' => 
              array (
                'description' => '保存版本控制配置容器。',
                'required' => false,
                '$ref' => '#/components/schemas/VersioningConfiguration',
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
        ),
        '4xx' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置存储空间的版本控制状态',
      'description' => '- 要配置版本控制，您必须有PutBucketVersioning权限。

- Bucket包括未开启、开启（Enabled）或者暂停（Suspended）三种版本控制状态。默认情况下Bucket处于未开启版本控制状态。

- 在Bucket处于开启版本控制状态下，所有新添加的文件（Object）都将拥有唯一的版本ID，OSS将累积所添加Object的多个版本。

- 在Bucket处于暂停版本控制状态下，所有新添加Object的版本ID将为null，且OSS将不再为此状态下添加的Object累积更多的版本。

关于版本控制的更多信息，请参见[版本控制介绍](~~109695~~)。',
    ),
    'GetBucketVersioning' => 
    array (
      'summary' => '调用GetBucketVersioning接口获取指定Bucket的版本控制状态。',
      'path' => '/?versioning',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'VersioningConfiguration' => 
              array (
                'description' => '保存版本控制状态的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '版本控制状态。',
                    '$ref' => '#/components/schemas/BucketVersioningStatus',
                  ),
                ),
              ),
            ),
          ),
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VersioningConfiguration\\": {}\\n}","type":"json"}]',
      'title' => '获取指定存储空间的版本控制状态',
    ),
    'ListObjectVersions' => 
    array (
      'summary' => '列出Bucket中包括删除标记（Delete Marker）在内的所有Object的版本信息。',
      'path' => '/?versions',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'delimiter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The character used to group objects by name',
            'description' => '对Object名字进行分组的字符。所有Object名字包含指定的前缀（prefix），第一次出现delimiter字符之间的Object作为一组元素（即CommonPrefixes）。
如果将prefix设为文件夹名称后，再把delimiter设置为正斜线（/），则只返回该文件夹下的文件，该文件夹下的子文件名在CommonPrefixes中返回，子文件夹下递归的文件和文件夹不显示。

默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '/',
          ),
        ),
        2 => 
        array (
          'name' => 'key-marker',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The name of the object from which the list operation begins',
            'description' => '设定结果从key-marker之后按字母序开始返回，与version-id-marker组合使用。
参数的长度必须小于1024字节。

默认值：无

>如果version-id-marker不为空，则key-marker不能为空',
            'type' => 'string',
            'required' => false,
            'example' => 'example',
          ),
        ),
        3 => 
        array (
          'name' => 'version-id-marker',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The version id of the object from which the list operation begins',
            'description' => '设定结果从key-marker对象的version-id-marker之后按新旧版本排序开始返回。如果version-id-marker未设定，则默认从key-marker按字母序排序的下一个Key的第一个版本开始返回。

默认值：无

有效值：版本ID',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQMxiBgICbof2D0BYiIGRhZjgwMzJiMjA3MjQ0ODE5MWYxZDYwMzJlZjU1****',
          ),
        ),
        4 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The maximum number of objects to return',
            'description' => '限定此次返回Object的最大个数。
如果因为max-keys的设定无法一次完成列举，返回结果会附加`NextKeyMarker`和`NextVersionIdMarker`作为下一次列举的marker。列举结果中包含`NextKeyMarker`和`NextVersionIdMarker`的值。
取值：大于0小于1000
默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The prefix that the returned object names must contain',
            'description' => '限定返回的Object Key必须以prefix作为前缀。

- prefix的长度必须小于1024字节。
- 使用prefix查询时，返回结果的Key仍会包含prefix。

如果将prefix设为某个文件夹名，则列举以此prefix开头的文件，即该文件夹下递归的所有的文件和子文件夹。

默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'fun',
          ),
        ),
        6 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The encoding type of the object name in the response',
            'description' => '对返回的内容进行编码并指定编码类型。
默认值：无
可选值：URL
>delimiter、marker、prefix、NextMarker以及Key使用UTF-8字符。如果delimiter、marker、prefix、NextMarker以及Key中包含XML
                                    1.0标准不支持的控制字符，您可以通过指定encoding-type对返回结果中的Delimiter、Marker、Prefix、NextMarker以及Key进行编码。',
            'required' => false,
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'GetBucketVersions接口的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListVersionsResult' => 
              array (
                'description' => '保存GetBucketVersions请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'title' => 'The bucket name',
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Prefix' => 
                  array (
                    'title' => 'The prefix that the names of returned objects must contain',
                    'description' => '本次查询结果的前缀。',
                    'type' => 'string',
                    'example' => 'logs/',
                  ),
                  'KeyMarker' => 
                  array (
                    'title' => 'Indicates the object from which the operation starts',
                    'description' => '标识此次GetBucketVersions的起点Object。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'VersionIdMarker' => 
                  array (
                    'title' => 'This parameter is returned with KeyMarker together to indicate the version from which the operation starts',
                    'description' => '与KeyMarker参数一同使用，以指定ListObjectVersions（GetBucketVersions）的起点。',
                    'type' => 'string',
                    'example' => 'CAEQGBiBgIC_jq7P9xYiIDRiZWJkNjY2Y2Q4NDQ5ZTI5ZGE5ODIxMTIyZThl****',
                  ),
                  'MaxKeys' => 
                  array (
                    'title' => 'The maximum number of returned objects in the response',
                    'description' => '响应请求内返回结果的最大数目。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Delimiter' => 
                  array (
                    'description' => '用于对Object名字进行分组的字符。所有名字包含指定的前缀且第一次出现Delimiter字符之间的Object作为一组元素CommonPrefixes。',
                    'type' => 'string',
                    'example' => '/',
                  ),
                  'IsTruncated' => 
                  array (
                    'title' => 'Indicates whether the returned results are truncated',
                    'description' => '指明是否已返回所有结果。

true：表示本次没有返回全部结果。

false：表示本次已返回全部结果。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'EncodingType' => 
                  array (
                    'description' => '指明返回结果中编码使用的类型。如果请求的参数中指定了encoding-type，则表示对返回结果中的Delimiter、Marker、Prefix、NextMarker和Key这些元素进行编码。',
                    'type' => 'string',
                    'example' => 'url',
                  ),
                  'NextKeyMarker' => 
                  array (
                    'description' => '如果本次没有返回全部结果，响应请求中将包含NextKeyMarker元素，用于标明接下来请求的key-marker。',
                    'type' => 'string',
                    'example' => 'def',
                  ),
                  'NextVersionIdMarker' => 
                  array (
                    'description' => '如果本次没有返回全部结果，响应请求中将包含NextVersionIdMarker元素，用于标明接下来请求的version-id-marker。',
                    'type' => 'string',
                    'example' => 'CAEQMxiBgICbof2D0BYiIGRhZjgwMzJiMjA3MjQ0ODE5MWYxZDYwMzJlZjU1****',
                  ),
                  'Version' => 
                  array (
                    'title' => 'The container that stores the versions of objects except for delete markers',
                    'description' => '保存除删除标记以外的Object版本信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存除删除标记以外的Object版本的容器。',
                      '$ref' => '#/components/schemas/ObjectVersion',
                    ),
                  ),
                  'DeleteMarker' => 
                  array (
                    'title' => 'The container that stores delete markers',
                    'description' => '保存删除标记信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存删除标记的容器。',
                      '$ref' => '#/components/schemas/DeleteMarkerEntry',
                    ),
                  ),
                  'CommonPrefixes' => 
                  array (
                    'title' => 'Objects whose names contain the same string that ranges from the prefix to the next occurrence of the delimiter are grouped as a single result element',
                    'description' => '如果请求中指定了delimiter参数，则OSS返回的响应中包含CommonPrefixes元素。该元素标明以delimiter结尾，并有共同前缀的Object名称的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '以delimiter结尾，并有共同前缀的Object名称。',
                      '$ref' => '#/components/schemas/CommonPrefix',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '4xx' => 
        array (
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListVersionsResult\\": {\\n    \\"Name\\": \\"example-bucket\\",\\n    \\"Prefix\\": \\"logs/\\",\\n    \\"KeyMarker\\": \\"abc\\",\\n    \\"VersionIdMarker\\": \\"CAEQGBiBgIC_jq7P9xYiIDRiZWJkNjY2Y2Q4NDQ5ZTI5ZGE5ODIxMTIyZThl****\\",\\n    \\"MaxKeys\\": 20,\\n    \\"Delimiter\\": \\"/\\",\\n    \\"IsTruncated\\": true,\\n    \\"EncodingType\\": \\"url\\",\\n    \\"NextKeyMarker\\": \\"def\\",\\n    \\"NextVersionIdMarker\\": \\"CAEQMxiBgICbof2D0BYiIGRhZjgwMzJiMjA3MjQ0ODE5MWYxZDYwMzJlZjU1****\\",\\n    \\"Version\\": [\\n      {\\n        \\"Key\\": \\"\\",\\n        \\"VersionId\\": \\"\\",\\n        \\"IsLatest\\": true,\\n        \\"LastModified\\": \\"\\",\\n        \\"ETag\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"Owner\\": {\\n          \\"ID\\": \\"\\",\\n          \\"DisplayName\\": \\"\\"\\n        }\\n      }\\n    ],\\n    \\"DeleteMarker\\": [\\n      {\\n        \\"Key\\": \\"\\",\\n        \\"VersionId\\": \\"\\",\\n        \\"IsLatest\\": true,\\n        \\"LastModified\\": \\"\\",\\n        \\"Owner\\": {\\n          \\"ID\\": \\"\\",\\n          \\"DisplayName\\": \\"\\"\\n        }\\n      }\\n    ],\\n    \\"CommonPrefixes\\": [\\n      {\\n        \\"Prefix\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取文件的版本信息',
      'description' => '- GetBucket(ListObjects)接口仅返回Object的当前版本，且当前版本不能为删除标记。
- GetBucketVersions(ListObjectVersions)接口返回Bucket中所有Object的所有版本。

不同Object之间按字母排序返回，同一个Object的不同版本则按从新到旧排序，与版本ID的字母序无关。',
    ),
    'PutBucketPolicy' => 
    array (
      'summary' => '为指定的存储空间（Bucket）设置授权策略（Policy)。',
      'path' => '/?policy',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'string',
            'required' => true,
            'example' => '二进制内容',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置存储空间的授权策略',
      'description' => '- 向其他账号的RAM用户授权访问。

您可以授予其他账号的RAM用户访问您的OSS资源的权限。

- 向匿名用户授予带特定IP条件限制的访问权限。

某些场景下，您需要向匿名用户授予带IP限制的访问策略。例如，企业内部的机密文档，只允许在企业内部访问，不允许在其他区域访问。由于企业内部人员较多，如果针对每个人配置RAM Policy，工作量非常大。此时，您可以基于Bucket Policy设置带IP限制的访问策略，从而高效方便地进行授权。

有关Bucket Policy的配置详情及场景案例，请参见[使用Bucket Policy授权其他用户访问OSS资源](~~85111~~)。有关Policy语法，请参见[权限策略语法和结构](~~93739~~)。',
    ),
    'GetBucketPolicy' => 
    array (
      'summary' => '获取指定存储空间（Bucket）的权限策略（Policy）。',
      'path' => '/?policy',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '字节流形式的Object内容。',
            'type' => 'string',
            'example' => '-',
          ),
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"\\"-\\"","type":"json"}]',
      'title' => '获取存储空间的权限策略',
      'description' => '- 向其他账号的RAM用户授权访问。

您可以授予其他账号的RAM用户访问您的OSS资源的权限。

- 向匿名用户授予带特定IP条件限制的访问权限。

某些场景下，您需要向匿名用户授予带IP限制的访问策略。例如，企业内部的机密文档，只允许在企业内部访问，不允许在其他区域访问。由于企业内部人员较多，如果针对每个人配置RAM Policy，工作量非常大。此时，您可以基于Bucket Policy设置带IP限制的访问策略，从而高效方便地进行授权。

有关Bucket Policy的配置详情及场景案例，请参见[使用Bucket Policy授权其他用户访问OSS资源](~~85111~~)。有关Policy语法，请参见[权限策略语法和结构](~~93739~~)。
',
    ),
    'DeleteBucketPolicy' => 
    array (
      'summary' => '删除指定存储空间（Bucket）的权限策略（Policy）。',
      'path' => '/?policy',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间的权限策略',
      'description' => '- 向其他账号的RAM用户授权访问。

您可以授予其他账号的RAM用户访问您的OSS资源的权限。

- 向匿名用户授予带特定IP条件限制的访问权限。

某些场景下，您需要向匿名用户授予带IP限制的访问策略。例如，企业内部的机密文档，只允许在企业内部访问，不允许在其他区域访问。由于企业内部人员较多，如果针对每个人配置RAM Policy，工作量非常大。此时，您可以基于Bucket Policy设置带IP限制的访问策略，从而高效方便地进行授权。

有关Bucket Policy的配置详情及场景案例，请参见[使用Bucket Policy授权其他用户访问OSS资源](~~85111~~)。有关Policy语法，请参见[权限策略语法和结构](~~93739~~)。
',
    ),
    'GetBucketPolicyStatus' => 
    array (
      'summary' => '查看当前Bucket Policy是否允许公共访问。',
      'path' => '/?policyStatus',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207996',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
          1 => 'FEATUREossHKEIZ2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'example-bucket
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
            'title' => 'Schema of Response',
            'description' => '返回响应。',
            'type' => 'object',
            'properties' => 
            array (
              'PolicyStatus' => 
              array (
                'description' => '保存公共访问信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsPublic' => 
                  array (
                    'description' => '当前Bucket Policy是否包含公共访问的语义。
- true：包含公共访问的语义。
- false：不包含公共访问的语义或者没有设置Bucket Policy。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PolicyStatus\\": {\\n    \\"IsPublic\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间授权策略是否是公共访问',
      'description' => '阿里云账号默认拥有查看当前Bucket Policy是否允许公共访问的权限。如果您希望通过RAM用户或者STS的方式进行查看，您必须拥有`oss:GetBucketPolicyStatus`权限。',
    ),
    'PutBucketRtc' => 
    array (
      'summary' => '为已有的跨区域复制规则开启或关闭数据复制时间控制（RTC）功能。',
      'path' => '/?rtc',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '182629',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存RTC配置规则的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'ReplicationRule' => 
              array (
                'description' => '保存RTC配置规则的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/RtcConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置RTC',
    ),
    'PutBucketReplication' => 
    array (
      'summary' => '为存储空间（Bucket）指定数据复制规则。OSS支持跨区域复制（Cross-Region Replication）和同区域复制（Same-Region Replication）。',
      'path' => '/?replication&comp=add',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '9452',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '指定数据复制配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'ReplicationConfiguration' => 
              array (
                'description' => '保存数据复制配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/ReplicationConfiguration',
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
          'headers' => 
          array (
            'x-oss-replication-rule-id' => 
            array (
              'schema' => 
              array (
                'title' => '新增数据复制规则的ID',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '指定存储空间的数据复制规则',
      'description' => '数据复制是以异步（近实时）方式将源Bucket中的文件（Object）以及对Object的创建、更新和删除等操作自动复制到目标Bucket。使用数据复制时，有如下注意事项：

- 数据复制采用异步复制，数据复制到目标Bucket需要一定的时间，通常几分钟到几小时不等，具体取决于数据的大小。

- 源Bucket与目标Bucket的名称不能相同。

- 使用跨区域复制时，源Bucket与目标Bucket必须处于不同的数据中心；使用同地域复制时，源Bucket与目标Bucket必须处于相同的数据中心。

关于数据复制的更多信息，请分别参见[跨区域复制介绍](https://help.aliyun.com/document_detail/31864.htm?spm=a2c4g.11186623.0.0.32af6265m8tpXg#concept-zjp-31z-5db)和[同区域复制介绍](https://help.aliyun.com/document_detail/254865.htm?spm=a2c4g.11186623.0.0.32af6265m8tpXg#concept-2067125)。',
    ),
    'GetBucketReplication' => 
    array (
      'summary' => '获取某个存储空间（Bucket）已设置的数据复制规则。',
      'path' => '/?replication',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '9458',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'ReplicationConfiguration' => 
              array (
                'description' => '保存复制规则的列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '保存复制规则的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '复制规则信息。',
                      '$ref' => '#/components/schemas/ReplicationRule',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ReplicationConfiguration\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"ID\\": \\"first-repl-rule\\",\\n        \\"PrefixSet\\": {\\n          \\"Prefix\\": [\\n            \\"to-backup/\\"\\n          ]\\n        },\\n        \\"Action\\": \\"ALL\\",\\n        \\"Destination\\": {\\n          \\"Bucket\\": \\"destbucket\\",\\n          \\"Location\\": \\"oss-cn-hangzhou\\",\\n          \\"TransferType\\": \\"internal\\"\\n        },\\n        \\"Status\\": \\"doing\\",\\n        \\"HistoricalObjectReplication\\": \\"disabled\\",\\n        \\"SyncRole\\": \\"aliyunramrole\\",\\n        \\"SourceSelectionCriteria\\": {\\n          \\"SseKmsEncryptedObjects\\": {\\n            \\"Status\\": \\"Disabled\\"\\n          }\\n        },\\n        \\"EncryptionConfiguration\\": {\\n          \\"ReplicaKmsKeyID\\": \\"c4d49f85-ee30-426b-a5ed-95e9139dxxxxx\\"\\n        },\\n        \\"RTC\\": {\\n          \\"Status\\": \\"Enabled\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '设置存储空间的数据复制规则',
    ),
    'GetBucketReplicationLocation' => 
    array (
      'summary' => '获取可复制到的目标存储空间（Bucket）所在的地域。您可以根据返回结果决定将源Bucket的数据复制到哪个地域。',
      'path' => '/?replicationLocation',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '获取可复制地域请求的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ReplicationLocation' => 
              array (
                'description' => '可复制地域信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Location' => 
                  array (
                    'description' => '可复制到的目标Bucket所在的地域列表。

> 如果有多个可复制到的目标地域，那么返回的结果中包含多个Location。如果没有可复制到的目标地域，则返回的Location为空。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可复制到的目标Bucket所在的地域，例如oss-cn-beijing。',
                      'type' => 'string',
                      'example' => 'oss-cn-beijing',
                    ),
                  ),
                  'LocationTransferTypeConstraint' => 
                  array (
                    'description' => '包含TransferType约束的Location信息容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'LocationTransferType' => 
                      array (
                        'description' => '包含TransferType的Location信息容器。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'TransferType的Location信息。',
                          '$ref' => '#/components/schemas/LocationTransferType',
                        ),
                      ),
                    ),
                  ),
                  'LocationRTCConstraint' => 
                  array (
                    'description' => '包含RTC约束的Location信息容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Location' => 
                      array (
                        'description' => '支持RTC的Location信息列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '支持RTC的Location信息。',
                          'type' => 'string',
                          'example' => 'oss-cn-beijing',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ReplicationLocation\\": {\\n    \\"Location\\": [\\n      \\"oss-cn-beijing\\"\\n    ],\\n    \\"LocationTransferTypeConstraint\\": {\\n      \\"LocationTransferType\\": [\\n        {\\n          \\"Location\\": \\"oss-eu-west-1\\",\\n          \\"TransferTypes\\": {\\n            \\"Type\\": [\\n              \\"oss_acc\\"\\n            ]\\n          }\\n        }\\n      ]\\n    },\\n    \\"LocationRTCConstraint\\": {\\n      \\"Location\\": [\\n        \\"oss-cn-beijing\\"\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取可复制到的目标存储空间的地域',
    ),
    'GetBucketReplicationProgress' => 
    array (
      'summary' => '获取某个存储空间（Bucket）的数据复制进度。',
      'path' => '/?replicationProgress',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '9465',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'rule-id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复制规则对应的ID。此ID可从GetBucketReplication中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_replication_1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存每个复制规则进度条目的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ReplicationProgress' => 
              array (
                'description' => '保存每个复制规则进度条目的列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '保存复制规则进度信息的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      '$ref' => '#/components/schemas/ReplicationProgressRule',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ReplicationProgress\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"ID\\": \\"replicate001\\",\\n        \\"PrefixSet\\": {\\n          \\"Prefix\\": [\\n            \\"to-backup/\\"\\n          ]\\n        },\\n        \\"Action\\": \\"ALL\\",\\n        \\"Destination\\": {\\n          \\"Bucket\\": \\"destbucket\\",\\n          \\"Location\\": \\"oss-cn-hangzhou\\",\\n          \\"TransferType\\": \\"internal\\"\\n        },\\n        \\"Status\\": \\"doing\\",\\n        \\"HistoricalObjectReplication\\": \\"disabled\\",\\n        \\"Progress\\": {\\n          \\"HistoricalObject\\": \\"0.85\\",\\n          \\"NewObject\\": \\"Thu, 24 Sep 2015 15:39:18 GMT\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间的数据复制进度',
    ),
    'DeleteBucketReplication' => 
    array (
      'summary' => '停止某个存储空间（Bucket）的数据复制并删除Bucket的复制配置，此时源Bucket中的任何操作都不会被同步到目标Bucket。',
      'path' => '/?replication&comp=delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '9463',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存需要删除的数据复制规则的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'ReplicationRules' => 
              array (
                'description' => '保存需要删除的数据复制规则的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'ID' => 
                  array (
                    'description' => '需要删除的数据复制规则的名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'first-rule',
                  ),
                ),
                'required' => false,
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
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '停止存储空间的数据复制并删除其复制配置',
      'description' => '- 当请求的Bucket没有配置数据复制规则时，调用此接口将返回200 HTTP OK。

- 调用此接口删除某个数据复制规则时，该复制规则不会立刻被删除。OSS需要一定的时间来执行清理操作，此时复制规则的状态为closing。当清理工作完成后，该复制规则才被删除。

- 当请求的Bucket的数据复制规则处于closing状态时，调用此接口将返回204 NoContent。',
    ),
    'PutBucketInventory' => 
    array (
      'summary' => '为指定存储空间（Bucket）配置清单（Inventory）规则。',
      'path' => '/?inventory',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '9324',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossB6HKQU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'inventoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置的清单规则Id。',
            'type' => 'string',
            'required' => true,
            'example' => 'report1',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '存储清单配置信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'InventoryConfiguration' => 
              array (
                'description' => '存储清单配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/InventoryConfiguration',
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
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '配置存储空间的清单规则',
      'description' => '
- 只有Bucket的拥有者以及被授予PutBucketInventory权限的用户才能发起配置清单规则的请求。

- 配置清单规则前需生成一个RAM角色，该角色需要拥有读取源Bucket所有文件和向目标Bucket写入文件的权限。首次使用清单功能时，建议您通过OSS控制台进行配置。清单规则配置完成后，您可以获取拥有所有权限的RAM角色。有关配置清单规则中RAM角色的权限说明，请参见[存储空间清单](~~163489~~)。

- 单个Bucket最多只能配置1000条清单规则。

- 配置清单的源Bucket与存放清单文件的目标Bucket必须位于同一个Region。',
      'extraInfo' => '### SDK
- [Java](~~177804~~)
- [Python](~~177819~~)
- [Go](~~177811~~)
- [C++](~~177809~~)
- [.NET](~~178701~~)
- [Node.js](~~186530~~)

### 错误码
|错误码|HTTP状态码|描述|
|--|--|--|
|InvalidArgument|400|传入非法参数。|
|InventoryExceedLimit|400|超出清单配置规则的数量限制。|
|AccessDenied|403|<br>**·**发起PutBucketInventory请求时，没有传入用户验证信息。<br>**·**用户无操作权限。
|InventoryAlreadyExist|409|请求的清单规则已存在。|',
    ),
    'GetBucketInventory' => 
    array (
      'summary' => '查看某个存储空间（Bucket）中指定的清单（Inventory）任务。',
      'path' => '/?inventory',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '9325',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossB6HKQU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'inventoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The ID of the inventory rule to query',
            'description' => '查询的清单规则Id。',
            'type' => 'string',
            'required' => true,
            'example' => 'list1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'The inventory task configured for a bucket',
            'description' => 'The inventory task configured for a bucket',
            'type' => 'object',
            'properties' => 
            array (
              'InventoryConfiguration' => 
              array (
                'description' => 'Bucket的清单任务信息。',
                '$ref' => '#/components/schemas/InventoryConfiguration',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"InventoryConfiguration\\": {\\n    \\"Id\\": \\"report1\\",\\n    \\"IsEnabled\\": true,\\n    \\"Destination\\": {\\n      \\"OSSBucketDestination\\": {\\n        \\"AccountId\\": \\"100000000000000\\",\\n        \\"RoleArn\\": \\"acs:ram::100000000000000:role/AliyunOSSRole\\",\\n        \\"Bucket\\": \\"acs:oss:::bucket_0001\\",\\n        \\"Prefix\\": \\"prefix1/\\",\\n        \\"Encryption\\": {\\n          \\"SSE-KMS\\": {\\n            \\"KeyId\\": \\"abcd\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"Schedule\\": {},\\n    \\"Filter\\": {\\n      \\"Prefix\\": \\"Pics/\\",\\n      \\"LastModifyBeginTimeStamp\\": 1637883649,\\n      \\"LastModifyEndTimeStamp\\": 1638347592,\\n      \\"LowerSizeBound\\": 1024,\\n      \\"UpperSizeBound\\": 1048576,\\n      \\"StorageClass\\": \\"All\\",\\n      \\"TagsCondition\\": \\"OR_FILTER\\",\\n      \\"Tags\\": \\"tag1#val1;tag2#val2\\"\\n    },\\n    \\"IncludedObjectVersions\\": \\"Current\\",\\n    \\"OptionalFields\\": {\\n      \\"Field\\": []\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看存储空间的清单任务',
      'description' => '调用该请求时，请确保您有足够的权限对存储空间的清单任务进行操作。存储空间所有者默认拥有该权限，若您无该项权限，请先向存储空间所有者申请该项操作的权限。',
    ),
    'ListBucketInventory' => 
    array (
      'summary' => '批量获取某个存储空间（Bucket）中的所有清单（Inventory）任务。',
      'path' => '/?inventory',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'continuation-token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定List操作需要从此token开始。您可从ListBucketInventory结果中的NextContinuationToken获取此token。',
            'type' => 'string',
            'required' => false,
            'example' => 'first',
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
              'ListInventoryConfigurationsResult' => 
              array (
                'description' => '存放清单配置参数的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'InventoryConfiguration' => 
                  array (
                    'description' => '存放清单配置参数的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '清单配置内容。',
                      '$ref' => '#/components/schemas/InventoryConfiguration',
                    ),
                  ),
                  'IsTruncated' => 
                  array (
                    'description' => '是否列举全部的清单任务。

有效值：true或false

如果值为false，则表明存储空间中的所有清单任务已全部列出。

如果值为true，表示还未完整列出存储空间中的所有清单任务，您可以将NextContinuationToken字段的值作为下一次list请求的continuation-token参数，以获取下一页的清单配置列表。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NextContinuationToken' => 
                  array (
                    'description' => '当响应中的IsTruncated为true且NextContinuationToken非空时，使用该字段作为下一次list请求的continuation-token参数。',
                    'type' => 'string',
                    'example' => '当响应中的IsTruncated为true且NextContinuationToken非空时，使用该字段作为下一次list请求的continuation-token参数。',
                  ),
                ),
              ),
            ),
          ),
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListInventoryConfigurationsResult\\": {\\n    \\"InventoryConfiguration\\": [\\n      {\\n        \\"Id\\": \\"report1\\",\\n        \\"IsEnabled\\": true,\\n        \\"Destination\\": {\\n          \\"OSSBucketDestination\\": {\\n            \\"AccountId\\": \\"100000000000000\\",\\n            \\"RoleArn\\": \\"acs:ram::100000000000000:role/AliyunOSSRole\\",\\n            \\"Bucket\\": \\"acs:oss:::bucket_0001\\",\\n            \\"Prefix\\": \\"prefix1/\\",\\n            \\"Encryption\\": {\\n              \\"SSE-KMS\\": {\\n                \\"KeyId\\": \\"abcd\\"\\n              }\\n            }\\n          }\\n        },\\n        \\"Schedule\\": {},\\n        \\"Filter\\": {\\n          \\"Prefix\\": \\"Pics/\\",\\n          \\"LastModifyBeginTimeStamp\\": 1637883649,\\n          \\"LastModifyEndTimeStamp\\": 1638347592,\\n          \\"LowerSizeBound\\": 1024,\\n          \\"UpperSizeBound\\": 1048576,\\n          \\"StorageClass\\": \\"All\\",\\n          \\"TagsCondition\\": \\"OR_FILTER\\",\\n          \\"Tags\\": \\"tag1#val1;tag2#val2\\"\\n        },\\n        \\"IncludedObjectVersions\\": \\"Current\\",\\n        \\"OptionalFields\\": {\\n          \\"Field\\": []\\n        }\\n      }\\n    ],\\n    \\"IsTruncated\\": true,\\n    \\"NextContinuationToken\\": \\"当响应中的IsTruncated为true且NextContinuationToken非空时，使用该字段作为下一次list请求的continuation-token参数。\\"\\n  }\\n}","type":"json"}]',
      'title' => '批量获取存储空间的所有清单任务',
      'description' => '- 单次请求最多可获取100条清单配置项内容。若需获取超过100条清单配置项，则需发送多次请求，并保留相应的token，作为下一次请求的参数。

- 调用该请求时，请确保您有足够的权限对存储空间的清单任务进行操作。存储空间所有者默认拥有该权限，若您无该项权限，请先向存储空间所有者申请该项操作的权限。',
    ),
    'DeleteBucketInventory' => 
    array (
      'summary' => '删除某个存储空间（Bucket）中指定的清单（Inventory）任务。',
      'path' => '/?inventory',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '9326',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossB6HKQU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'inventoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The ID of the inventory task to delete',
            'description' => '删除的清单任务Id。',
            'type' => 'string',
            'required' => true,
            'example' => 'list1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '4xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间的指定清单任务',
      'description' => '- 调用该请求时，请确保您有足够的权限对存储空间的清单任务进行操作。存储空间所有者默认拥有该权限，若您无该项权限，请先向存储空间所有者申请该项操作的权限。
- 请求成功将返回HTTP状态码204。',
    ),
    'PutBucketLogging' => 
    array (
      'summary' => '为存储空间（Bucket）开启日志转存功能，可将OSS的访问日志按照固定命名规则，以小时为单位生成日志文件写入您指定的Bucket。',
      'path' => '/?logging',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '存储访问日志状态信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketLoggingStatus' => 
              array (
                'description' => '存储访问日志状态信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/BucketLoggingStatus',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '开启存储空间的日志转存功能',
      'description' => '- 生成日志的源Bucket和存储日志的目标Bucket可以相同也可以不同，但是必须属于同一账号下的相同地域。

- 日志文件以小时为单位生成，但并不表示某个时段的日志文件记录了该时段的所有请求，部分请求可能会出现在上一时段或下一时段的日志文件中。
日志文件命名规则及日志格式说明，请参见[日志转存](~~31868~~)。

- 在您关闭日志转存功能前，OSS的日志文件会一直生成。请及时清理不再需要的日志文件，以减少您的存储费用。
您可以通过生命周期规则定期删除日志文件。更多信息，请参见[生命周期规则介绍](~~31863~~)。

- OSS会根据需求在日志的尾部添加一些字段，请您在开发日志处理工具时考虑兼容性的问题。',
    ),
    'GetBucketLogging' => 
    array (
      'summary' => '查看存储空间（Bucket）的访问日志配置。只有Bucket的拥有者才能查看Bucket的访问日志配置。',
      'path' => '/?logging',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'BucketLoggingStatus' => 
              array (
                'description' => '访问日志状态信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'LoggingEnabled' => 
                  array (
                    'description' => '访问日志信息的容器。此元素在开启时返回，关闭时不返回。',
                    '$ref' => '#/components/schemas/LoggingEnabled',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BucketLoggingStatus\\": {\\n    \\"LoggingEnabled\\": {\\n      \\"TargetBucket\\": \\"\\",\\n      \\"TargetPrefix\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看存储空间的访问日志配置',
    ),
    'DeleteBucketLogging' => 
    array (
      'summary' => '关闭存储空间（Bucket）的访问日志记录功能。',
      'path' => '/?logging',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '关闭存储空间的访问日志记录功能',
      'description' => '- 只有Bucket的拥有者才有权限关闭Bucket访问日志记录功能。
- 如果目标Bucket没有开启访问日志记录功能，则返回参数显示204状态码。',
    ),
    'PutUserDefinedLogFieldsConfig' => 
    array (
      'summary' => '为存储空间（Bucket）实时日志中的user_defined_log_fields字段进行个性化配置。您可以将OSS请求中用户关心的请求头或查询参数信息记录到该字段中去以便后续分析请求。',
      'path' => '/?userDefinedLogFieldsConfig',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '接口请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'UserDefinedLogFieldsConfiguration' => 
              array (
                'description' => '用户自定义日志配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/UserDefinedLogFieldsConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改存储空间实时日志用户自定义字段配置',
      'description' => '- 本功能将相关信息统一编码后填入固定字段user_defined_log_fields中。user_defined_log_fields字段的值是一个JSON文本Base64编码后的值，这个JSON文本默认有一个字段为“truncated”用于表示是否有截断发生，另外有两个字段“headers”和“querys”分别对应用户配置的请求头和查询参数信息。

- 自定义请求头个数和查询参数的个数之和不能超过6。

- 自定义请求头及查询参数的key、value长度总和不能超过1024字节，超过部分会被截断。

- 请求头不支持下划线（_），可以使用短划线（-）替代。查询参数支持下划线（_）。

- 请求头需要遵从HTTP协议的规定。必须是可打印的ASCII字符，即字符33到字符126，支持小数点（.），不支持冒号（：）。',
    ),
    'GetUserDefinedLogFieldsConfig' => 
    array (
      'summary' => '获取存储空间（Bucket）实时日志中user_defined_log_fields字段的个性化配置。',
      'path' => '/?userDefinedLogFieldsConfig',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存用户自定义日志配置信息的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'UserDefinedLogFieldsConfiguration' => 
              array (
                'description' => '用户自定义日志配置信息的容器。',
                '$ref' => '#/components/schemas/UserDefinedLogFieldsConfiguration',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UserDefinedLogFieldsConfiguration\\": {\\n    \\"HeaderSet\\": {\\n      \\"header\\": [\\n        \\"header1\\"\\n      ]\\n    },\\n    \\"ParamSet\\": {\\n      \\"parameter\\": [\\n        \\"param1\\"\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间实时日志用户自定义字段配置',
    ),
    'DeleteUserDefinedLogFieldsConfig' => 
    array (
      'summary' => '删除存储空间（Bucket）实时日志中user_defined_log_fields字段的个性化配置。',
      'path' => '/?userDefinedLogFieldsConfig',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'example-bucket
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间实时日志用户自定义字段配置',
    ),
    'GetBucketWebsite' => 
    array (
      'summary' => '查看存储空间（Bucket）的静态网站托管状态以及跳转规则。',
      'path' => '/?website',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '9043',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossLM29D7',
          1 => 'FEATUREossIW6LY5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'WebsiteConfiguration' => 
              array (
                'description' => '保存静态网站配置信息的容器。',
                '$ref' => '#/components/schemas/WebsiteConfiguration',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"WebsiteConfiguration\\": {\\n    \\"IndexDocument\\": {\\n      \\"Suffix\\": \\"index.html\\",\\n      \\"SupportSubDir\\": true,\\n      \\"Type\\": 0\\n    },\\n    \\"ErrorDocument\\": {\\n      \\"Key\\": \\"error.html\\",\\n      \\"HttpStatus\\": 200\\n    },\\n    \\"RoutingRules\\": {\\n      \\"RoutingRule\\": [\\n        {\\n          \\"RuleNumber\\": 1,\\n          \\"Condition\\": {\\n            \\"KeyPrefixEquals\\": \\"abc/\\",\\n            \\"KeySuffixEquals\\": \\".txt\\",\\n            \\"HttpErrorCodeReturnedEquals\\": 404,\\n            \\"IncludeHeader\\": [\\n              {\\n                \\"Key\\": \\"test-header\\",\\n                \\"Equals\\": \\"test-value\\",\\n                \\"StartsWith\\": \\"test-prefix-\\",\\n                \\"EndsWith\\": \\"-test-suffix\\"\\n              }\\n            ]\\n          },\\n          \\"Redirect\\": {\\n            \\"RedirectType\\": \\"Mirror\\",\\n            \\"PassQueryString\\": true,\\n            \\"MirrorURL\\": \\"http://example.com/\\",\\n            \\"MirrorSNI\\": true,\\n            \\"MirrorPassQueryString\\": true,\\n            \\"MirrorFollowRedirect\\": true,\\n            \\"MirrorCheckMd5\\": false,\\n            \\"MirrorHeaders\\": {\\n              \\"PassAll\\": false,\\n              \\"Pass\\": [\\n                \\"pass-header\\"\\n              ],\\n              \\"Remove\\": [\\n                \\"remove-header\\"\\n              ],\\n              \\"Set\\": [\\n                {\\n                  \\"Key\\": \\"set-header\\",\\n                  \\"Value\\": \\"set-value\\"\\n                }\\n              ]\\n            },\\n            \\"Protocol\\": \\"https\\",\\n            \\"HostName\\": \\"example.com\\",\\n            \\"ReplaceKeyPrefixWith\\": \\"def/\\",\\n            \\"EnableReplacePrefix\\": true,\\n            \\"ReplaceKeyWith\\": \\"prefix/${key}.suffix\\",\\n            \\"HttpRedirectCode\\": 302,\\n            \\"MirrorPassOriginalSlashes\\": false,\\n            \\"MirrorURLSlave\\": \\"https://example.com\\",\\n            \\"MirrorURLProbe\\": \\"https://example.com/hartbeat\\",\\n            \\"MirrorSaveOssMeta\\": true,\\n            \\"MirrorProxyPass\\": false,\\n            \\"MirrorAllowGetImageInfo\\": true,\\n            \\"MirrorAllowVideoSnapshot\\": false,\\n            \\"MirrorIsExpressTunnel\\": true,\\n            \\"MirrorDstRegion\\": \\"cn-hangzhou\\",\\n            \\"MirrorDstVpcId\\": \\"vpc-test-id\\",\\n            \\"MirrorDstSlaveVpcId\\": \\"vpc-test-id\\",\\n            \\"MirrorUserLastModified\\": false,\\n            \\"MirrorSwitchAllErrors\\": false,\\n            \\"MirrorTunnelId\\": \\"test-tunnel-id\\",\\n            \\"MirrorUsingRole\\": false,\\n            \\"MirrorRole\\": \\"aliyun-test-role\\",\\n            \\"MirrorAllowHeadObject\\": true,\\n            \\"TransparentMirrorResponseCodes\\": \\"false\\",\\n            \\"MirrorAsyncStatus\\": 303,\\n            \\"MirrorTaggings\\": {\\n              \\"Taggings\\": [\\n                {\\n                  \\"Key\\": \\"test-tagging\\",\\n                  \\"Value\\": \\"test-value\\"\\n                }\\n              ]\\n            },\\n            \\"MirrorReturnHeaders\\": {\\n              \\"ReturnHeader\\": [\\n                {\\n                  \\"Key\\": \\"test-header\\",\\n                  \\"Value\\": \\"test-value\\"\\n                }\\n              ]\\n            },\\n            \\"MirrorAuth\\": {\\n              \\"AuthType\\": \\"S3V4\\",\\n              \\"Region\\": \\"ap-southeast-1\\",\\n              \\"AccessKeyId\\": \\"TESTAK\\",\\n              \\"AccessKeySecret\\": \\"TESTSK\\"\\n            },\\n            \\"MirrorMultiAlternates\\": {\\n              \\"MirrorMultiAlternate\\": [\\n                {\\n                  \\"MirrorMultiAlternateNumber\\": 32,\\n                  \\"MirrorMultiAlternateURL\\": \\"https://test-multi-alter.example.com\\",\\n                  \\"MirrorMultiAlternateVpcId\\": \\"vpc-test-id\\",\\n                  \\"MirrorMultiAlternateDstRegion\\": \\"ap-southeast-1\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"LuaConfig\\": {\\n            \\"Script\\": \\"test.lua\\"\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看存储空间的静态网站托管状态和规则',
    ),
    'PutBucketWebsite' => 
    array (
      'summary' => '将存储空间（Bucket）设置为静态网站托管模式并设置跳转规则（RoutingRule）。',
      'path' => '/?website',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '9071',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossLM29D7',
          1 => 'FEATUREossIW6LY5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存静态网站配置的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'WebsiteConfiguration' => 
              array (
                'description' => '保存静态网站配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/WebsiteConfiguration',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置存储空间为静态网站托管模式并设置跳转规则',
      'description' => '- 功能支持：此接口主要用于设置默认主页、默认404页和RoutingRule。RoutingRule用来指定3xx跳转规则以及镜像回源规则。其中镜像回源支持公共云和金融云。

- 使用自有域名访问静态网站：如果要使用自有域名来访问基于Bucket的静态网站，您可以通过域名CNAME来实现。具体操作，请参见绑定自定义域名。

- 索引页面和错误页面：将一个Bucket设置为静态网站托管模式时，如果指定了索引页面或错误页面，则指定的索引页面和错误页面为该Bucket内的某个Object。

- 对静态网站根域名的匿名访问：将一个Bucket设置为静态网站托管模式后，对静态网站根域名的匿名访问，OSS将返回索引页面。对静态网站根域名的签名访问，OSS将返回GetBucket(ListObjects)的结果。',
    ),
    'DeleteBucketWebsite' => 
    array (
      'summary' => '关闭存储空间（Bucket）的静态网站托管模式以及跳转规则。',
      'path' => '/?website',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '9027',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossLM29D7',
          1 => 'FEATUREossIW6LY5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '关闭存储空间的静态网站托管模式以及跳转规则',
      'description' => '只有Bucket的拥有者才能关闭Bucket的静态网站托管模式。',
    ),
    'PutBucketReferer' => 
    array (
      'summary' => '设置存储空间（Bucket）级别的防盗链（Referer）访问白名单，支持设置是否允许Referer字段为空以及是否允许截断QueryString的请求访问OSS。',
      'path' => '/?referer',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存Referer配置内容的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'RefererConfiguration' => 
              array (
                'description' => '保存Referer配置内容的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/RefererConfiguration',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置存储空间的防盗链',
    ),
    'GetBucketReferer' => 
    array (
      'summary' => '查看存储空间（Bucket）的防盗链（Referer）相关配置。',
      'path' => '/?referer',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存Referer配置内容的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'RefererConfiguration' => 
              array (
                '$ref' => '#/components/schemas/RefererConfiguration',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RefererConfiguration\\": {\\n    \\"AllowEmptyReferer\\": true,\\n    \\"AllowTruncateQueryString\\": false,\\n    \\"TruncatePath\\": false,\\n    \\"RefererList\\": {\\n      \\"Referer\\": [\\n        \\"https://www.aliyun.com\\"\\n      ]\\n    },\\n    \\"RefererBlacklist\\": {\\n      \\"Referer\\": [\\n        \\"https://www.abc.com\\"\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看存储空间的防盗链相关配置',
    ),
    'PutBucketTags' => 
    array (
      'summary' => '给某个存储空间（Bucket）添加或修改标签。',
      'path' => '/?tagging',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '设置Bucket TagSet的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'Tagging' => 
              array (
                'description' => '设置Bucket TagSet的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/Tagging',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '为存储空间添加或修改标签',
      'description' => '- 只有Bucket的拥有者及授权RAM账户才能为Bucket设置用户标签，否则返回403 Forbidden错误，错误码为AccessDenied。

- 最多可设置20对Bucket用户标签（Key-Value对）。

- PutBucketTags是覆盖语义，即新添加的标签会完全覆盖已有的标签。
',
    ),
    'GetBucketTags' => 
    array (
      'summary' => '获取存储空间（Bucket）的标签信息。',
      'path' => '/?tagging',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'Tagging' => 
              array (
                'description' => '保存Bucket Tag结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'TagSet' => 
                  array (
                    'description' => '保存标签集合的容器。',
                    '$ref' => '#/components/schemas/TagSet',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Tagging\\": {\\n    \\"TagSet\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间的标签信息',
    ),
    'DeleteBucketTags' => 
    array (
      'summary' => '删除存储空间（Bucket）标签。',
      'path' => '/?tagging',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间的标签',
      'description' => '如果目标Bucket没有任何标签或指定标签的Key不存在，则返回HTTP状态码204。',
    ),
    'ListBucketDataRedundancyTransition' => 
    array (
      'summary' => '列举某个Bucket下所有的存储冗余转换任务。',
      'path' => '/?redundancyTransition',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '207262',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
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
            'description' => '存储空间冗余类型转换任务。',
            'type' => 'object',
            'properties' => 
            array (
              'ListBucketDataRedundancyTransition' => 
              array (
                'description' => '列举存储冗余转换任务的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'BucketDataRedundancyTransition' => 
                  array (
                    '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListBucketDataRedundancyTransition\\": {\\n    \\"BucketDataRedundancyTransition\\": {\\n      \\"Bucket\\": \\"example-bucket\\",\\n      \\"TaskId\\": \\"751f5243f8ac4ae89f34726534d1****\\",\\n      \\"Status\\": \\"Queueing\\",\\n      \\"CreateTime\\": \\"2023-11-17T09:14:39.000Z\\",\\n      \\"StartTime\\": \\"2023-11-17T09:14:39.000Z\\",\\n      \\"EndTime\\": \\"2023-11-17T09:14:39.000Z\\",\\n      \\"ProcessPercentage\\": 88,\\n      \\"EstimatedRemainingTime\\": \\"10\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '列举存储空间冗余类型转换任务',
      'description' => '- 要列举Bucket下所有的存储冗余转换任务，您必须具有`oss:ListBucketDataRedundancyTransition`权限。具体操作，请参见[为RAM用户授权自定义的权限策略](~~199058~~)。
- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。',
    ),
    'GetBucketDataRedundancyTransition' => 
    array (
      'summary' => '获取存储冗余转换任务。',
      'path' => '/?redundancyTransition',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207237',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-redundancy-transition-taskid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储转换任务的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '751f5243f8ac4ae89f34726534d1****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '存储冗余转换任务的容器。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketDataRedundancyTransition' => 
              array (
                'description' => '存储冗余转换任务的容器。',
                '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BucketDataRedundancyTransition\\": {\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"TaskId\\": \\"751f5243f8ac4ae89f34726534d1****\\",\\n    \\"Status\\": \\"Queueing\\",\\n    \\"CreateTime\\": \\"2023-11-17T09:14:39.000Z\\",\\n    \\"StartTime\\": \\"2023-11-17T09:14:39.000Z\\",\\n    \\"EndTime\\": \\"2023-11-17T09:14:39.000Z\\",\\n    \\"ProcessPercentage\\": 88,\\n    \\"EstimatedRemainingTime\\": \\"10\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间存储冗余转换任务',
      'description' => '- 要获取存储冗余转换任务，您必须具有oss:GetBucketDataRedundancyTransition权限。具体操作，请参见[为RAM用户授权自定义的权限策略](~~199058~~)。
- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。',
    ),
    'CreateBucketDataRedundancyTransition' => 
    array (
      'summary' => '为Bucket创建存储冗余转换任务。',
      'path' => '/?redundancyTransition',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '207235',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '要创建存储冗余类型转换任务的Bucket。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-target-redundancy-type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标存储冗余类型。OSS仅支持将LRS（本地冗余存储）转换为ZRS（同城冗余存储）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZRS',
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
            'description' => '返回响应。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketDataRedundancyTransition' => 
              array (
                'description' => '存储冗余转换任务的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '存储冗余转换任务的ID。该ID可以用于后续查看、删除存储冗余转换任务。',
                    'type' => 'string',
                    'example' => '	
4be5beb0f74f490186311b268bf6****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BucketDataRedundancyTransition\\": {\\n    \\"TaskId\\": \\"\\\\t\\\\n4be5beb0f74f490186311b268bf6****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建存储冗余类型转换任务',
      'description' => '- Bucket所属地域支持转换存储冗余类型。支持转换存储冗余类型的地域：华东1（杭州）、华东2（上海）、华北2（北京）、华北3（张家口）、华北6（乌兰察布）、华南1（深圳）、中国香港、日本（东京）、新加坡、印度尼西亚（雅加达）、德国（法兰克福）
- Bucket的存储冗余类型必须为本地冗余存储。OSS仅支持将本地冗余存储转换为同城冗余存储。
- Bucket的存储类型必须为标准存储、低频访问存储或归档存储，但Bucket中的文件的存储类型可以为冷归档存储和深度冷归档存储。冷归档存储和深度冷归档存储的文件转换后依然为本地冗余存储。冷归档存储和深度冷归档存储的Bucket不支持转换存储冗余类型。
- 要创建存储冗余转换任务，您必须具有oss:CreateBucketDataRedundancyTransition权限。具体操作，请参见为[RAM用户授权自定义的权限策略](~~199058~~)。
- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。',
    ),
    'DeleteBucketDataRedundancyTransition' => 
    array (
      'summary' => '删除存储空间数据冗余类型转换任务。',
      'path' => '/?redundancyTransition',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '207246',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossAI8VDR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '要删除存储冗余类型转换任务的Bucket。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-redundancy-transition-taskid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储冗余转换任务的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '4be5beb0f74f490186311b268bf6****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储冗余类型转换任务',
      'description' => '- 要删除存储冗余转换任务，您必须具有`oss:DeleteBucketDataRedundancyTransition`权限。具体操作，请参见[为RAM用户授权自定义的权限策略](~~199058~~)。
- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。
- 处于Processing状态的任务不支持删除。',
    ),
    'PutBucketEncryption' => 
    array (
      'path' => '/?encryption',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '配置服务器端加密规则的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'ServerSideEncryptionRule' => 
              array (
                'description' => '服务器端加密规则的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/ServerSideEncryptionRule',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '配置存储空间的加密规则',
      'summary' => '配置存储空间（Bucket）的加密规则。',
      'description' => '只有Bucket的拥有者及授权的RAM用户才能为Bucket设置加密规则，否则返回403错误。有关Bucket加密的更多信息，请参见[服务器端加密](~~31871~~)。
',
    ),
    'GetBucketEncryption' => 
    array (
      'summary' => '获取存储空间（Bucket）的加密规则。',
      'path' => '/?encryption',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存服务端加密规则的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ServerSideEncryptionRule' => 
              array (
                'description' => '保存服务端加密规则的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApplyServerSideEncryptionByDefault' => 
                  array (
                    'description' => '服务端加密规则信息。',
                    '$ref' => '#/components/schemas/ApplyServerSideEncryptionByDefault',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ServerSideEncryptionRule\\": {\\n    \\"ApplyServerSideEncryptionByDefault\\": {\\n      \\"SSEAlgorithm\\": \\"\\",\\n      \\"KMSMasterKeyID\\": \\"\\",\\n      \\"KMSDataEncryption\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间的加密规则',
      'description' => '只有Bucket的拥有者及授权的RAM用户才能获取Bucket的加密规则，否则返回403错误。有关Bucket加密的更多信息，请参见**[服务器端加密](~~31871~~)**。',
    ),
    'DeleteBucketEncryption' => 
    array (
      'summary' => '删除指定存储空间（Bucket）的加密规则。',
      'path' => '/?encryption',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间的加密规则',
      'description' => '只有Bucket的拥有者及授权的RAM用户才能删除Bucket的加密规则，否则返回403错误。有关Bucket加密的更多信息，请参见[服务器端加密](~~31871~~)。',
    ),
    'PutBucketRequestPayment' => 
    array (
      'summary' => '设置某个存储空间（Bucket）的请求者付费模式。',
      'path' => '/?requestPayment',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '配置请求者付费的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestPaymentConfiguration' => 
              array (
                'description' => '保存请求者付费配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/RequestPaymentConfiguration',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置请求者付费模式',
      'description' => '- 不允许匿名访问：如果您在Bucket上启用了请求者付费模式，则不允许匿名访问该Bucket。请求方必须提供身份验证信息，以便OSS能够识别请求方，从而对请求方而非Bucket拥有者收取请求所产生的费用。
当请求者是通过扮演阿里云RAM角色来请求数据时，该角色所属的账户将为此请求付费。

- 申请方需携带x-oss-request-payer信息：如果您在Bucket上启用了请求者付费模式，请求方必须在其请求中包含x-oss-request-payer:requester（在POST、GET和HEAD请求的Header信息中），以表明请求方已知悉请求和数据下载将产生费用。否则，请求方无法通过验证。
数据拥有者访问该Bucket时，可以不携带x-oss-request-payer请求头。数据拥有者作为请求者访问该Bucket时，请求产生的费用由数据拥有者（也是请求者）来支付。',
    ),
    'GetBucketRequestPayment' => 
    array (
      'summary' => '获取请求者付费模式的配置信息。',
      'path' => '/?requestPayment',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '获取请求者付费配置的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestPaymentConfiguration' => 
              array (
                'description' => '请求者付费配置的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Payer' => 
                  array (
                    'description' => '指定Bucket付费类型。

取值：BucketOwner、Requester',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Requester' => '请求者付费',
                      'BucketOwner' => 'Bucket所有者付费',
                    ),
                    'example' => 'Requester',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestPaymentConfiguration\\": {\\n    \\"Payer\\": \\"Requester\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取请求者付费模式配置信息',
    ),
    'PutBucketCors' => 
    array (
      'summary' => '设置指定存储空间（Bucket）的跨域资源共享CORS（Cross-Origin Resource Sharing）规则。',
      'path' => '/?cors',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '设置跨域资源共享规则的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'CORSConfiguration' => 
              array (
                'description' => '保存Bucket的CORS规则容器。',
                'required' => false,
                '$ref' => '#/components/schemas/CORSConfiguration',
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
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '设置存储空间的跨域资源共享规则',
      'description' => '
- 默认不开启CORS
<br>Bucket默认不开启CORS功能，所有跨域请求的Origin都不被允许。

- 覆盖语义
 <br>PutBucketCors为覆盖语义，即新配置的CORS规则将覆盖已有的CORS规则。

- 应用程序中使用CORS
<br>在应用程序中使用CORS功能时，需通过PutBucketCors接口手动上传CORS规则来开启CORS功能。
<br>例如从`example.com`通过浏览器的`XMLHttpRequest`功能来访问OSS，需要通过本接口手动上传CORS规则，且CORS规则需由XML文档进行描述。

- CORS规则匹配
<br>当OSS收到一个跨域请求或OPTIONS请求，会先读取Bucket对应的CORS规则，然后进行相应的权限检查。OSS会依次检查每一条规则，使用第一条匹配的规则来允许请求并返回对应的Header。如果所有规则都匹配失败，则不附加任何CORS相关的Header。
<br>CORS规则匹配成功必须满足以下三个条件：
    - 请求的Origin必须匹配一个`AllowedOrigin`项。

    - 请求的方法（例如GET、PUT等）或者OPTIONS请求的`Access-Control-Request-Method`头对应的方法必须匹配一个`AllowedMethod`项。

    - OPTIONS请求的`Access-Control-Request-Headers`头包含的每个header都必须匹配一个`AllowedHeader`项。',
      'extraInfo' => '### SDK

- [Java](~~32018~~)
- [Python](~~32036~~)
- [PHP](~~32110~~)
- [Go](~~32156~~)
- [C](~~89705~~)
- [C++](~~103198~~)
- [.NET](~~32095~~)
- [Node.js](~~142900~~)
- [Ruby](~~32128~~)

### 错误码
|错误码|HTTP状态码|描述|
|--|--|--|
|InvalidDigest|400|上传了Content-MD5请求头后，OSS会计算消息体的Content-MD5并检查一致性，如果不一致则返回此错误码。|',
    ),
    'GetBucketCors' => 
    array (
      'summary' => '获取指定存储空间（Bucket）当前的跨域资源共享CORS（Cross-Origin Resource Sharing）规则。',
      'path' => '/?cors',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
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
              'CORSConfiguration' => 
              array (
                'description' => '保存CORS规则配置的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'CORSRule' => 
                  array (
                    'description' => '保存CORS规则的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存CORS规则的容器。',
                      '$ref' => '#/components/schemas/CORSRule',
                    ),
                  ),
                  'ResponseVary' => 
                  array (
                    'description' => '是否返回Vary: Origin头。

true：不管发送的是否是跨域请求或跨域请求是否成功，均会返回Vary: Origin头。

false：任何情况下均不返回Vary: Origin头。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CORSConfiguration\\": {\\n    \\"CORSRule\\": [\\n      {\\n        \\"AllowedOrigin\\": [\\n          \\"*\\"\\n        ],\\n        \\"AllowedMethod\\": [\\n          \\"GET\\"\\n        ],\\n        \\"AllowedHeader\\": [\\n          \\"x-oss-*\\"\\n        ],\\n        \\"ExposeHeader\\": [\\n          \\"Expires\\"\\n        ],\\n        \\"MaxAgeSeconds\\": 300\\n      }\\n    ],\\n    \\"ResponseVary\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间当前的跨域资源共享规则',
      'description' => ' ',
    ),
    'DeleteBucketCors' => 
    array (
      'summary' => '调用DeleteBucketCors接口关闭指定存储空间（Bucket）的跨域资源共享CORS（Cross-Origin Resource Sharing）功能并清空所有规则。',
      'path' => '/?cors',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '关闭存储空间跨域资源共享功能',
      'description' => '### 注意事项
要关闭CORS功能，您必须有`oss:DeleteBucketCors`权限。',
    ),
    'OptionObject' => 
    array (
      'summary' => '浏览器在发送跨域请求之前会发送一个preflight请求（Options）给OSS，并带上特定的来源域、HTTP方法和header等信息，以决定是否发送真正的请求。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'options',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'Origin',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '请求来源域，用于标识跨域请求。
在实际请求中只能设置一个该请求头。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'http://www.example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Access-Control-Request-Method',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '在实际请求中会用到的方法。
在实际请求中只能设置一个该请求头。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'PUT',
          ),
        ),
        4 => 
        array (
          'name' => 'Access-Control-Request-Headers',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '在实际请求中会用到的除了简单头部之外的header。
在实际请求中可以为该请求头设置多个header，多个header之间使用英文逗号(,)隔开。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'x-oss-test1,x-oss-test2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Access-Control-Allow-Origin' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'Access-Control-Allow-Methods' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'Access-Control-Allow-Headers' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'Access-Control-Expose-Headers' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'Access-Control-Max-Age' => 
            array (
              'schema' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '发送预检请求',
      'description' => 'Options请求是由浏览器自动根据是否跨域来决定是否发送。',
    ),
    'PutBucketAccessMonitor' => 
    array (
      'summary' => '修改存储空间（Bucket）的访问追踪状态。',
      'path' => '/?accessmonitor',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '修改访问跟踪状态配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'AccessMonitorConfiguration' => 
              array (
                'description' => '保存Bucket的访问跟踪状态配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/AccessMonitorConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改存储空间访问追踪状态',
    ),
    'GetBucketAccessMonitor' => 
    array (
      'summary' => '获取存储空间（Bucket）的访问追踪功能是否开启。',
      'path' => '/?accessmonitor',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'AccessMonitorConfiguration' => 
              array (
                'description' => '保存Bucket的访问跟踪状态配置信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '是否开启访问追踪。',
                    '$ref' => '#/components/schemas/AccessMonitorStatus',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessMonitorConfiguration\\": {}\\n}","type":"json"}]',
      'title' => '获取存储空间访问追踪状态',
    ),
    'GetMetaQueryStatus' => 
    array (
      'summary' => '获取指定存储空间（Bucket）的元数据索引库信息。',
      'path' => '/?metaQuery',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
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
            'title' => 'Schema of Response',
            'description' => '获取元数据索引信息的响应。',
            'type' => 'object',
            'properties' => 
            array (
              'MetaQueryStatus' => 
              array (
                'description' => '保存元数据索引信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'State' => 
                  array (
                    'description' => '元数据索引库的状态。取值范围如下：

Ready：创建后准备中

元数据索引库正在准备中，您无法通过元数据索引库查询到数据。

Stop：已暂停

Running：运行中

Retrying：创建失败后重试中

Failed：创建失败

Deleted：已删除',
                    'type' => 'string',
                    'example' => 'Runing',
                  ),
                  'Phase' => 
                  array (
                    'description' => '当前扫描类型。取值范围如下：

FullScanning：全量扫描中

IncrementalScanning：增量扫描中',
                    'type' => 'string',
                    'example' => 'FullScanning',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '元数据索引库的创建时间，遵循RFC 3339标准格式，格式为YYYY-MM-DDTHH:mm:ss+TIMEZONE。其中YYYY-MM-DD表示年月日，T表示time元素的开头，HH:mm:ss表示时分秒，TIMEZONE表示时区。',
                    'type' => 'string',
                    'example' => '2021-08-02T10:49:17.289372919+08:00',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '元数据索引库的创建时间，遵循RFC 3339标准格式，格式为YYYY-MM-DDTHH:mm:ss+TIMEZONE。其中YYYY-MM-DD表示年月日，T表示time元素的开头，HH:mm:ss表示时分秒，TIMEZONE表示时区。',
                    'type' => 'string',
                    'example' => '2021-08-02T10:49:17.289372919+08:00',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MetaQueryStatus\\": {\\n    \\"State\\": \\"Runing\\",\\n    \\"Phase\\": \\"FullScanning\\",\\n    \\"CreateTime\\": \\"2021-08-02T10:49:17.289372919+08:00\\",\\n    \\"UpdateTime\\": \\"2021-08-02T10:49:17.289372919+08:00\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取元数据索引库信息',
    ),
    'CloseMetaQuery' => 
    array (
      'summary' => '关闭存储空间（Bucket）的元数据管理功能。OSS会自动删除Bucket的元数据索引库，将无法进行元数据索引。',
      'path' => '/?metaQuery&comp=delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '关闭存储空间元数据管理',
    ),
    'DoMetaQuery' => 
    array (
      'summary' => '通过存储空间（Bucket）的元数据索引功能，查询满足指定条件的文件（Object），并按照字段和排序方式列出文件信息。',
      'path' => '/?metaQuery&comp=query',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存查询条件的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'MetaQuery' => 
              array (
                'description' => '保存查询条件的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/MetaQuery',
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
            'description' => '保存查询结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'MetaQuery' => 
              array (
                'description' => '保存查询结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '当Object总数大于设置的MaxResults时，用于翻页的token。

从NextToken开始按字典序返回Object信息列表。

第一次调用此接口时，设置此字段为空。',
                    'type' => 'string',
                    'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****',
                  ),
                  'Files' => 
                  array (
                    'description' => '保存查询结果Object信息的容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'File' => 
                      array (
                        'description' => '保存Object信息的列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '结果中单个Object信息。',
                          '$ref' => '#/components/schemas/MetaQueryFile',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MetaQuery\\": {\\n    \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****\\",\\n    \\"Files\\": {\\n      \\"File\\": [\\n        {\\n          \\"Filename\\": \\"\\",\\n          \\"Size\\": 0,\\n          \\"FileModifiedTime\\": \\"\\",\\n          \\"OSSObjectType\\": \\"\\",\\n          \\"OSSStorageClass\\": \\"\\",\\n          \\"ObjectACL\\": \\"\\",\\n          \\"ETag\\": \\"\\",\\n          \\"OSSCRC64\\": \\"\\",\\n          \\"ServerSideEncryption\\": \\"\\",\\n          \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n          \\"OSSTaggingCount\\": 0,\\n          \\"OSSTagging\\": {\\n            \\"Tagging\\": [\\n              {\\n                \\"Key\\": \\"\\",\\n                \\"Value\\": \\"\\"\\n              }\\n            ]\\n          },\\n          \\"OSSUserMeta\\": {\\n            \\"UserMeta\\": [\\n              {\\n                \\"Key\\": \\"\\",\\n                \\"Value\\": \\"\\"\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询满足条件的文件',
    ),
    'OpenMetaQuery' => 
    array (
      'summary' => '开启元数据管理功能。开启元数据管理功能后，OSS会为Bucket创建元数据索引库并为Bucket中的所有文件（Object）建立元数据索引。元数据索引库创建完成后，OSS会继续对Bucket中新增文件进行准实时的增量追踪扫描并为增量文件建立元数据索引。',
      'path' => '/?metaQuery&comp=add',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '开启元数据管理功能',
    ),
    'UpdateUserAntiDDosInfo' => 
    array (
      'summary' => '更改高防OSS实例状态。',
      'path' => '/?antiDDos',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'x-oss-defender-instance',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '高防实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbcac8d2-4f75-4d6d-9f2e-c3447f73****',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-defender-status',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '更改高防OSS实例状态。取值为：HaltDefending，表示解除防护。',
            'type' => 'string',
            'required' => true,
            'example' => 'HaltDefending',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更改高防OSS实例状态',
    ),
    'UpdateBucketAntiDDosInfo' => 
    array (
      'summary' => '更新Bucket防护状态。',
      'path' => '/?antiDDos',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-defender-instance',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '高防实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbcac8d2-4f75-4d6d-9f2e-c3447f73****',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-defender-status',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '更新高防实例状态。取值如下：

- Init：初始化防护状态。该状态下需要传入待防护的自定义域名。

- Defending：防护中状态。该状态下可以选择是否传入待防护的自定义域名。

- HaltDefending：解除防护状态。该状态下不需要传入待防护的自定义域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'Init',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存高防实例配置信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'AntiDDOSConfiguration' => 
              array (
                'description' => '保存高防实例配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/BucketAntiDDOSConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新Bucket防护状态',
    ),
    'ListBucketAntiDDosInfo' => 
    array (
      'summary' => '获取Bucket防护信息列表。',
      'path' => '/?bucketAntiDDos',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定从marker之后按字母排序开始返回高防实例。

> 第一次请求时可以将marker设置为空字符串。如果返回结果中IsTruncated存在且为true，则需要将返回结果中的marker字段作为参数进行下一次请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'nextMarker',
          ),
        ),
        1 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的高防实例最大数量。

取值：[1,100]

默认值：100',
            'type' => 'string',
            'required' => false,
            'example' => '	
100',
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
              'AntiDDOSListConfiguration' => 
              array (
                'description' => '保存Bucket防护信息列表的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Marker' => 
                  array (
                    'description' => '返回字母排序在指定marker之后的高防实例。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'IsTruncated' => 
                  array (
                    'description' => '是否已返回所有高防实例。

true：本次请求未返回所有高防实例。

false：本次请求已返回所有高防实例。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AntiDDOSConfiguration' => 
                  array (
                    'description' => '保存高防实例信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存高防实例信息的容器。',
                      '$ref' => '#/components/schemas/BucketAntiDDOSInfo',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AntiDDOSListConfiguration\\": {\\n    \\"Marker\\": \\"abc\\",\\n    \\"IsTruncated\\": true,\\n    \\"AntiDDOSConfiguration\\": [\\n      {\\n        \\"InstanceId\\": \\"\\",\\n        \\"Owner\\": \\"\\",\\n        \\"Bucket\\": \\"\\",\\n        \\"Ctime\\": 0,\\n        \\"Mtime\\": 0,\\n        \\"ActiveTime\\": 0,\\n        \\"Status\\": \\"\\",\\n        \\"Type\\": \\"\\",\\n        \\"Cnames\\": {\\n          \\"Domain\\": [\\n            \\"\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取Bucket防护信息列表',
    ),
    'InitUserAntiDDosInfo' => 
    array (
      'summary' => '创建高防OSS实例。',
      'path' => '/?antiDDos',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
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
          'headers' => 
          array (
            'x-oss-defender-instance' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'defenderInstance',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建高防OSS实例',
    ),
    'InitBucketAntiDDosInfo' => 
    array (
      'summary' => '初始化Bucket防护。',
      'path' => '/?antiDDos',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-defender-instance',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '高防实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbcac8d2-4f75-4d6d-9f2e-c3447f73****',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-defender-type',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '高防实例类型。取值固定为AntiDDosPremimum。',
            'type' => 'string',
            'required' => true,
            'example' => 'AntiDDosPremimum',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存高防实例配置信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'AntiDDOSConfiguration' => 
              array (
                'description' => '保存高防实例配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/BucketAntiDDOSConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '初始化Bucket防护',
    ),
    'GetUserAntiDDosInfo' => 
    array (
      'summary' => '查询指定账号下的高防OSS实例信息。',
      'path' => '/?antiDDos',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
            'title' => 'Schema of Response',
            'description' => '保存高防实例信息列表的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'AntiDDOSListConfiguration' => 
              array (
                'description' => '保存高防实例信息列表的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'AntiDDOSConfiguration' => 
                  array (
                    'description' => '保存高防实例信息的容器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '高防实例信息。',
                      '$ref' => '#/components/schemas/UserAntiDDOSInfo',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AntiDDOSListConfiguration\\": {\\n    \\"AntiDDOSConfiguration\\": [\\n      {\\n        \\"InstanceId\\": \\"\\",\\n        \\"Owner\\": \\"\\",\\n        \\"Ctime\\": 0,\\n        \\"Mtime\\": 0,\\n        \\"ActiveTime\\": 0,\\n        \\"Status\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询高防OSS实例信息',
    ),
    'GetBucketResourceGroup' => 
    array (
      'summary' => '获取存储空间（Bucket）所属的资源组ID。',
      'path' => '/?resourceGroup',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => '要查询的目标Bucket',
            'description' => '要查询的目标Bucket',
            'type' => 'string',
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
            'title' => '资源组ID的容器。',
            'description' => '获取资源组ID的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketResourceGroupConfiguration' => 
              array (
                'description' => '资源组ID的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceGroupId' => 
                  array (
                    'title' => 'Bucket所属的资源组ID。',
                    'description' => 'Bucket所属的资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-asdfklj***',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BucketResourceGroupConfiguration\\": {\\n    \\"ResourceGroupId\\": \\"rg-asdfklj***\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间资源组ID',
    ),
    'PutBucketResourceGroup' => 
    array (
      'summary' => '修改存储空间（Bucket）所属的资源组ID。',
      'path' => '/?resourceGroup',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => '要修改的目标Bucket',
            'description' => '要修改的目标Bucket',
            'type' => 'string',
            'required' => false,
            'example' => 'example-bucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '配置资源组ID的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketResourceGroupConfiguration' => 
              array (
                'description' => '配置资源组ID的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/BucketResourceGroupConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改存储空间资源组',
    ),
    'PutCname' => 
    array (
      'summary' => '为某个存储空间（Bucket）绑定自定义域名。',
      'path' => '/?cname&comp=add',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存Cname配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketCnameConfiguration' => 
              array (
                'description' => '保存Cname配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/BucketCnameConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '绑定自定义域名',
    ),
    'ListCname' => 
    array (
      'summary' => '查询某个存储空间（Bucket）下绑定的所有的自定义域名（Cname）列表。',
      'path' => '/?cname',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
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
            'title' => 'Schema of Response',
            'description' => '查询Cname信息列表的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListCnameResult' => 
              array (
                'description' => '查询Cname信息列表的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Bucket' => 
                  array (
                    'description' => '存储空间名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Owner' => 
                  array (
                    'description' => 'Bucket拥有者的用户ID。',
                    'type' => 'string',
                    'example' => '133413***273506',
                  ),
                  'Cname' => 
                  array (
                    'description' => '保存Cname信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存Cname信息的容器。',
                      '$ref' => '#/components/schemas/CnameInfo',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListCnameResult\\": {\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"Owner\\": \\"133413***273506\\",\\n    \\"Cname\\": [\\n      {\\n        \\"Domain\\": \\"\\",\\n        \\"LastModified\\": \\"\\",\\n        \\"Status\\": \\"\\",\\n        \\"Certificate\\": {\\n          \\"Type\\": \\"\\",\\n          \\"CertId\\": \\"\\",\\n          \\"Status\\": \\"\\",\\n          \\"CreationDate\\": \\"\\",\\n          \\"Fingerprint\\": \\"\\",\\n          \\"ValidStartDate\\": \\"\\",\\n          \\"ValidEndDate\\": \\"\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询自定义域名列表',
    ),
    'DeleteCname' => 
    array (
      'summary' => '删除某个存储空间（Bucket）已绑定的Cname。',
      'path' => '/?cname&comp=delete',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '删除Cname配置信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketCnameConfiguration' => 
              array (
                'description' => '保存Cname配置的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Cname' => 
                  array (
                    'description' => '保存目标Cname域名的容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Domain' => 
                      array (
                        'description' => '要删除的Cname。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除Cname',
    ),
    'GetCnameToken' => 
    array (
      'summary' => '获取已创建的CnameToken。',
      'path' => '/?comp=token',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'cname',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的Cname名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存CnameToken的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'CnameToken' => 
              array (
                'description' => '保存CnameToken的容器。',
                '$ref' => '#/components/schemas/CnameToken',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CnameToken\\": {\\n    \\"Bucket\\": \\"\\",\\n    \\"Cname\\": \\"\\",\\n    \\"Token\\": \\"\\",\\n    \\"ExpireTime\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取CnameToken',
    ),
    'CreateCnameToken' => 
    array (
      'summary' => '创建域名所有权验证所需的CnameToken。',
      'path' => '/?cname&comp=token',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '创建CnameToken的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'BucketCnameConfiguration' => 
              array (
                'description' => '保存Cname配置的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Cname' => 
                  array (
                    'description' => '保存要生成Token的Cname域名。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Domain' => 
                      array (
                        'description' => '目标Cname域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
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
            'description' => '保存CnameToken的相应。',
            'type' => 'object',
            'properties' => 
            array (
              'CnameToken' => 
              array (
                'description' => '保存CnameToken的容器。',
                '$ref' => '#/components/schemas/CnameToken',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CnameToken\\": {\\n    \\"Bucket\\": \\"\\",\\n    \\"Cname\\": \\"\\",\\n    \\"Token\\": \\"\\",\\n    \\"ExpireTime\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建CnameToken',
    ),
    'PutStyle' => 
    array (
      'summary' => '新增图片样式。一个图片样式中可以包含单个或多个图片处理参数。',
      'path' => '/?style',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '169383',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossEPZCYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'styleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片样式名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'imagestyle',
          ),
        ),
        2 => 
        array (
          'name' => 'category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '样式分类。

取值：image、document、video。',
            'type' => 'string',
            'required' => false,
            'example' => 'image',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存图片样式信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'Style' => 
              array (
                'description' => '保存图片样式信息列表的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/Style',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '新增图片样式',
    ),
    'ListStyle' => 
    array (
      'summary' => '查询某个Bucket下已创建的所有图片样式。',
      'path' => '/?style',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '169386',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossEPZCYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'examplebucket
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
            'description' => '保存图片样式信息的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'StyleList' => 
              array (
                'description' => '保存图片样式信息列表的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Style' => 
                  array (
                    'description' => '保存图片样式信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片样式信息。',
                      '$ref' => '#/components/schemas/StyleInfo',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StyleList\\": {\\n    \\"Style\\": [\\n      {\\n        \\"Name\\": \\"first\\",\\n        \\"Content\\": \\"image/resize,p_50\\",\\n        \\"CreateTime\\": \\"Wed, 20 May 2020 12:07:15 GMT\\",\\n        \\"LastModifyTime\\": \\"Wed, 21 May 2020 12:07:15 GMT\\",\\n        \\"Category\\": \\"image\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询图片样式',
    ),
    'GetStyle' => 
    array (
      'summary' => '查询某个Bucket下指定的图片样式信息。',
      'path' => '/?style',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '169384',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossEPZCYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'styleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片样式名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'imagestyle',
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
            'description' => '保存已获取图片样式内容的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'Style' => 
              array (
                'description' => '保存已获取样式内容的容器。',
                '$ref' => '#/components/schemas/StyleInfo',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Style\\": {\\n    \\"Name\\": \\"first\\",\\n    \\"Content\\": \\"image/resize,p_50\\",\\n    \\"CreateTime\\": \\"Wed, 20 May 2020 12:07:15 GMT\\",\\n    \\"LastModifyTime\\": \\"Wed, 21 May 2020 12:07:15 GMT\\",\\n    \\"Category\\": \\"image\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取图片样式',
    ),
    'DeleteStyle' => 
    array (
      'summary' => '删除某个Bucket下指定的图片样式。',
      'path' => '/?style',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '169385',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREossEPZCYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'styleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片样式名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'imagestyle',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除图片样式',
    ),
    'GetBucketHttpsConfig' => 
    array (
      'summary' => '调用GetBucketHttpsConfig接口查看Bucket的TLS版本设置。',
      'path' => '/?httpsConfig',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-bucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存HTTPS配置的响应。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpsConfiguration' => 
              array (
                'description' => '保存HTTPS配置的容器。',
                '$ref' => '#/components/schemas/HttpsConfiguration',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpsConfiguration\\": {\\n    \\"TLS\\": {\\n      \\"Enable\\": true,\\n      \\"TLSVersion\\": [\\n        \\"TLSv1.2\\"\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间HTTPS配置',
      'description' => '- 要查看Bucket的TLS版本设置，您必须有oss:GetBucketHttpsConfig权限。具体操作，请参见[为RAM用户授权自定义的权限策略](https://help.aliyun.com/zh/oss/user-guide/common-examples-of-ram-policies#section-ucu-jv0-zip)。

- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](https://help.aliyun.com/zh/oss/user-guide/regions-and-endpoints)。',
    ),
    'PutBucketHttpsConfig' => 
    array (
      'summary' => '调用PutBucketHttpsConfig接口为Bucket开启或关闭TLS版本设置。',
      'path' => '/?httpsConfig',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-bucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存HTTPS配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpsConfiguration' => 
              array (
                'description' => '保存HTTPS配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/HttpsConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改存储空间HTTPS配置',
    ),
    'CreateAccessPointForObjectProcess' => 
    array (
      'summary' => '创建对象FC接入点。',
      'path' => '/?accessPointForObjectProcess',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '207844',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss3VNG8Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '要创建对象FC接入点的Bucket。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。接入点命名规范说明如下：
- 命名长度不能超过63个字符
- 只允许包含小写字母、数字、短划线（-），且不能以短划线开头或结尾。
- 名称在当前地域必须唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'CreateAccessPointForObjectProcessConfiguration' => 
              array (
                'description' => '保存对象FC接入点信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessPointName' => 
                  array (
                    'description' => 'OSS接入点名称。更多信息，请参见[创建接入点](~~2365063~~)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ap-01',
                  ),
                  'ObjectProcessConfiguration' => 
                  array (
                    'description' => '保存对象处理信息的容器。',
                    'required' => false,
                    '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                  ),
                  'AllowAnonymousAccessForObjectProcess' => 
                  array (
                    'description' => '是否允许匿名访问。

> 开启该选项之后将会允许匿名账号通过ObjectFC接入点访问您的Bucket，会产生相关费用。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'false',
                  ),
                ),
                'required' => false,
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
            'description' => '返回响应。',
            'type' => 'object',
            'properties' => 
            array (
              'CreateAccessPointForObjectProcessResult' => 
              array (
                'description' => '保存对象FC接入点信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessPointForObjectProcessArn' => 
                  array (
                    'description' => '对象FC接入点ARN。',
                    'type' => 'string',
                    'example' => 'acs:oss:cn-qingdao:119335441657143:accesspointforobjectprocess/fc-ap-01',
                  ),
                  'AccessPointForObjectProcessAlias' => 
                  array (
                    'description' => '对象FC接入点别名。',
                    'type' => 'string',
                    'example' => 'fc-ap-01-3b00521f653d2b3223680ec39dbbe2****-opapalias',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CreateAccessPointForObjectProcessResult\\": {\\n    \\"AccessPointForObjectProcessArn\\": \\"acs:oss:cn-qingdao:119335441657143:accesspointforobjectprocess/fc-ap-01\\",\\n    \\"AccessPointForObjectProcessAlias\\": \\"fc-ap-01-3b00521f653d2b3223680ec39dbbe2****-opapalias\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建对象FC接入点',
      'description' => '- 阿里云账号默认拥有创建对象FC接入点的权限。如果您希望通过RAM用户或者STS的方式创建对象FC接入点，您必须拥有`oss:CreateAccessPointForObjectProcess`权限。
- 单个阿里云账号支持创建1000个对象FC接入点。
- 单个Bucket支持创建100个对象FC接入点。',
    ),
    'GetAccessPointForObjectProcess' => 
    array (
      'summary' => '获取对象FC接入点基础信息。',
      'path' => '/?accessPointForObjectProcess',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207845',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss3VNG8Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
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
            'description' => '返回响应。',
            'type' => 'object',
            'properties' => 
            array (
              'GetAccessPointForObjectProcessResult' => 
              array (
                'description' => '保存对象FC接入点信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessPointNameForObjectProcess' => 
                  array (
                    'description' => '对象FC接入点名称。',
                    'type' => 'string',
                    'example' => 'fc-ap-01',
                  ),
                  'AccessPointForObjectProcessAlias' => 
                  array (
                    'description' => '对象FC接入点别名。',
                    'type' => 'string',
                    'example' => 'fc-ap-01-3b00521f653d2b3223680ec39dbbe2****-opapalias',
                  ),
                  'AccessPointName' => 
                  array (
                    'description' => '接入点名称。',
                    'type' => 'string',
                    'example' => 'ap-01',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '配置对象FC接入点的阿里云账号UID。',
                    'type' => 'string',
                    'example' => '111933544165****',
                  ),
                  'AccessPointForObjectProcessArn' => 
                  array (
                    'description' => '对象FC接入点ARN。',
                    'type' => 'string',
                    'example' => 'acs:oss:cn-qingdao:119335441657143:accesspointforobjectprocess/fc-ap-01',
                  ),
                  'CreationDate' => 
                  array (
                    'description' => '对象FC接入点创建时间，格式为时间戳。',
                    'type' => 'string',
                    'example' => '1626769503',
                  ),
                  'Status' => 
                  array (
                    'description' => '对象FC接入点所处状态。返回值如下：
- enable：对象FC接入点已创建完成。
- disable：对象FC接入点已禁用。
- creating：对象FC接入点正在创建中。
- deleting：对象FC接入点已删除。',
                    'type' => 'string',
                    'example' => 'enable',
                  ),
                  'Endpoints' => 
                  array (
                    'description' => '保存对象FC接入点访问域名信息的容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PublicEndpoint' => 
                      array (
                        'description' => '对象FC接入点的外网Endpoint。',
                        'type' => 'string',
                        'example' => 'fc-ap-01-111933544165****.oss-cn-qingdao.oss-object-process.aliyuncs.com',
                      ),
                      'InternalEndpoint' => 
                      array (
                        'description' => '对象FC接入点的内网Endpoint。',
                        'type' => 'string',
                        'example' => 'fc-ap-01-111933544165****.oss-cn-qingdao-internal.oss-object-process.aliyuncs.com',
                      ),
                    ),
                  ),
                  'AllowAnonymousAccessForObjectProcess' => 
                  array (
                    'description' => '是否允许匿名访问。

> 开启该选项之后将会允许匿名账号通过ObjectFC接入点访问您的Bucket，会产生相关费用。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'PublicAccessBlockConfiguration' => 
                  array (
                    'description' => '保存阻止公共访问信息的容器。',
                    '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"GetAccessPointForObjectProcessResult\\": {\\n    \\"AccessPointNameForObjectProcess\\": \\"fc-ap-01\\",\\n    \\"AccessPointForObjectProcessAlias\\": \\"fc-ap-01-3b00521f653d2b3223680ec39dbbe2****-opapalias\\",\\n    \\"AccessPointName\\": \\"ap-01\\",\\n    \\"AccountId\\": \\"111933544165****\\",\\n    \\"AccessPointForObjectProcessArn\\": \\"acs:oss:cn-qingdao:119335441657143:accesspointforobjectprocess/fc-ap-01\\",\\n    \\"CreationDate\\": \\"1626769503\\",\\n    \\"Status\\": \\"enable\\",\\n    \\"Endpoints\\": {\\n      \\"PublicEndpoint\\": \\"fc-ap-01-111933544165****.oss-cn-qingdao.oss-object-process.aliyuncs.com\\",\\n      \\"InternalEndpoint\\": \\"fc-ap-01-111933544165****.oss-cn-qingdao-internal.oss-object-process.aliyuncs.com\\"\\n    },\\n    \\"AllowAnonymousAccessForObjectProcess\\": \\"false\\",\\n    \\"PublicAccessBlockConfiguration\\": {\\n      \\"BlockPublicAccess\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取对象FC接入点详情',
      'description' => '阿里云账号默认拥有获取对象FC接入点基础信息的权限。如果您希望通过RAM用户或者STS的方式获取对象FC接入点基础信息，您必须拥有`oss:GetAccessPointForObjectProcess`权限。',
    ),
    'ListAccessPointsForObjectProcess' => 
    array (
      'summary' => '获取用户级别的对象FC接入点信息。',
      'path' => '/?accessPointForObjectProcess',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '207848',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss3VNG8Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回对象FC接入点的最大数量。

取值：大于0小于等于1000。

> 如果因为max-keys的设置无法一次完成列举，返回结果会附加一个`<NextContinuationToken>`作为下一次列举的continuation-token。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'continuation-token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定List操作需要从此token开始。您可以从返回结果中的NextContinuationToken获取此token。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
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
            'description' => '返回响应。',
            'type' => 'object',
            'properties' => 
            array (
              'ListAccessPointsForObjectProcessResult' => 
              array (
                'description' => '保存本次列举对象FC接入点信息结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsTruncated' => 
                  array (
                    'description' => '请求中返回的结果是否被截断。返回值如下：

- true：表示本次未返回全部结果。
- false：表示本次已返回全部结果。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NextContinuationToken' => 
                  array (
                    'description' => '表明本次ListAccessPointsForObjectProcess请求包含后续结果，需要将NextContinuationToken指定为continuation-token继续获取结果。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '对象FC接入点所属的阿里云账号UID。',
                    'type' => 'string',
                    'example' => '111933544165****',
                  ),
                  'AccessPointsForObjectProcess' => 
                  array (
                    'description' => '保存所有对象FC接入点信息的容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AccessPointForObjectProcess' => 
                      array (
                        'description' => '保存单个对象FC接入点信息的容器。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '保存单个对象FC接入点信息的容器。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AccessPointNameForObjectProcess' => 
                            array (
                              'description' => '对象FC接入点名称。',
                              'type' => 'string',
                              'example' => 'fc-ap-01',
                            ),
                            'AccessPointForObjectProcessAlias' => 
                            array (
                              'description' => '对象FC接入点别名。',
                              'type' => 'string',
                              'example' => 'fc-ap-01-3b00521f653d2b3223680ec39dbbe2****-opapalias',
                            ),
                            'AccessPointName' => 
                            array (
                              'description' => '接入点名称。',
                              'type' => 'string',
                              'example' => 'fc-01',
                            ),
                            'Status' => 
                            array (
                              'description' => '对象FC接入点所处状态。返回值如下：

- enable：对象FC接入点已创建完成。
- disable：对象FC接入点已禁用。
- creating：对象FC接入点正在创建中。
- deleting：对象FC接入点已删除。',
                              'type' => 'string',
                              'example' => 'enable',
                            ),
                            'AllowAnonymousAccessForObjectProcess' => 
                            array (
                              'description' => '是否允许匿名访问。

> 开启该选项之后将会允许匿名账号通过ObjectFC接入点访问您的Bucket，会产生相关费用。',
                              'type' => 'string',
                              'example' => 'false',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListAccessPointsForObjectProcessResult\\": {\\n    \\"IsTruncated\\": true,\\n    \\"NextContinuationToken\\": \\"abc\\",\\n    \\"AccountId\\": \\"111933544165****\\",\\n    \\"AccessPointsForObjectProcess\\": {\\n      \\"AccessPointForObjectProcess\\": [\\n        {\\n          \\"AccessPointNameForObjectProcess\\": \\"fc-ap-01\\",\\n          \\"AccessPointForObjectProcessAlias\\": \\"fc-ap-01-3b00521f653d2b3223680ec39dbbe2****-opapalias\\",\\n          \\"AccessPointName\\": \\"fc-01\\",\\n          \\"Status\\": \\"enable\\",\\n          \\"AllowAnonymousAccessForObjectProcess\\": \\"false\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '列举对象FC接入点',
      'description' => '阿里云账号默认拥有获取对象FC接入点信息的权限。如果您希望通过RAM用户或者STS的方式获取对象FC接入点信息，您必须拥有`oss:ListAccessPointsForObjectProcess`权限。',
    ),
    'DeleteAccessPointForObjectProcess' => 
    array (
      'summary' => '删除对象FC接入点。',
      'path' => '/?accessPointForObjectProcess',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '要删除对象FC接入点的Bucket。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除对象FC接入点',
      'description' => '阿里云账号默认拥有删除对象FC接入点的权限。如果您希望通过RAM用户或者STS的方式删除对象FC接入点，您必须拥有`oss:DeleteAccessPointForObjectProcess`权限。',
    ),
    'GetAccessPointConfigForObjectProcess' => 
    array (
      'summary' => '获取对象FC接入点配置信息。',
      'path' => '/?accessPointConfigForObjectProcess',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207952',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss3VNG8Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
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
            'description' => '返回响应。',
            'type' => 'object',
            'properties' => 
            array (
              'GetAccessPointConfigForObjectProcessResult' => 
              array (
                'description' => '保存对象FC接入点配置信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'ObjectProcessConfiguration' => 
                  array (
                    'description' => '保存对象处理信息的容器。',
                    '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                  ),
                  'AllowAnonymousAccessForObjectProcess' => 
                  array (
                    'description' => '是否允许匿名访问。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'PublicAccessBlockConfiguration' => 
                  array (
                    'description' => '保存阻止公共访问信息的容器。',
                    '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"GetAccessPointConfigForObjectProcessResult\\": {\\n    \\"ObjectProcessConfiguration\\": {\\n      \\"AllowedFeatures\\": {\\n        \\"AllowedFeature\\": [\\n          \\"GetObject-Range\\"\\n        ]\\n      },\\n      \\"TransformationConfigurations\\": {\\n        \\"TransformationConfiguration\\": [\\n          {\\n            \\"Actions\\": {\\n              \\"Action\\": [\\n                \\"OSS API操作，目前仅支持GetObject\\"\\n              ]\\n            },\\n            \\"ContentTransformation\\": {\\n              \\"FunctionCompute\\": {\\n                \\"FunctionAssumeRoleArn\\": \\"acs:ram::111933544165****:role/aliyunfcdefaultrole\\",\\n                \\"FunctionArn\\": \\"acs:fc:cn-qingdao:111933544165****:services/test-oss-fc.LATEST/functions/fc-01\\"\\n              },\\n              \\"AdditionalFeatures\\": {\\n                \\"CustomForwardHeaders\\": {\\n                  \\"CustomForwardHeader\\": [\\n                    \\"\\"\\n                  ]\\n                }\\n              }\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"AllowAnonymousAccessForObjectProcess\\": \\"false\\",\\n    \\"PublicAccessBlockConfiguration\\": {\\n      \\"BlockPublicAccess\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取对象FC接入点配置',
      'description' => '阿里云账号默认拥有获取对象FC接入点配置信息的权限。如果您希望通过RAM用户或者STS的方式获取对象FC接入点配置信息，您必须拥有`oss:GetAccessPointConfigForObjectProcess`权限。',
    ),
    'PutAccessPointConfigForObjectProcess' => 
    array (
      'summary' => '修改对象FC接入点的配置。',
      'path' => '/?accessPointConfigForObjectProcess',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '207951',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss3VNG8Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。接入点命名规范说明如下：

- 命名长度不能超过63个字符。
- 只允许包含小写字母、数字、短划线（-），且不能以短划线开头或结尾。
- 名称在当前地域必须唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'PutAccessPointConfigForObjectProcessConfiguration' => 
              array (
                'description' => '保存对象FC接入点信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'ObjectProcessConfiguration' => 
                  array (
                    'description' => '保存对象处理信息的容器。',
                    'required' => false,
                    '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                  ),
                  'AllowAnonymousAccessForObjectProcess' => 
                  array (
                    'description' => '是否允许匿名访问。

> 开启该选项之后将会允许匿名账号通过ObjectFC接入点访问您的Bucket，会产生相关费用。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'PublicAccessBlockConfiguration' => 
                  array (
                    'description' => '保存阻止公共访问信息的容器。',
                    'required' => false,
                    '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                  ),
                ),
                'required' => false,
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改对象FC接入点配置',
      'description' => '阿里云账号默认拥有修改对象FC接入点配置的权限。如果您希望通过RAM用户或者STS的方式修改对象FC接入点配置，您必须拥有`oss:PutAccessPointConfigForObjectProcess`权限。',
    ),
    'PutAccessPointPolicyForObjectProcess' => 
    array (
      'summary' => '为对象FC接入点配置权限策略。',
      'path' => '/?accessPointPolicyForObjectProcess',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => '	
fc-ap-01',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '接口请求体。',
            'type' => 'string',
            'required' => false,
            'example' => '{
	            "Version": "1",
	            "Statement": [{
		            "Effect": "Allow",
		            "Action": [
			            "oss:GetObject"
		            ],
		            "Principal": [
			            "237210000000000xxxx"
		            ],
		            "Resource": [
			            "acs:oss:cn-qingdao:1030700000xxxx:accesspointforobjectprocess/fc-test/object/*"
		            ]
	            }]
            }',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改对象FC接入点授权策略',
      'description' => '阿里云账号默认拥有为对象FC接入点配置权限策略的权限。如果您希望通过RAM用户或者STS的方式为对象FC接入点配置权限策略，您必须拥有`oss:PutAccessPointPolicyForObjectProcess`权限。',
    ),
    'GetAccessPointPolicyForObjectProcess' => 
    array (
      'summary' => '获取对象FC接入点的权限策略配置。',
      'path' => '/?accessPointPolicyForObjectProcess',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/octet-stream',
      ),
      'produces' => 
      array (
        0 => 'application/json',
        1 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '对象FC接入点权限策略配置。',
            'type' => 'string',
            'example' => '{
	            "Version": "1",
	            "Statement": [{
		            "Effect": "Allow",
		            "Action": [
			            "oss:GetObject"
		            ],
		            "Principal": [
			            "237210000000000xxxx"
		            ],
		            "Resource": [
			            "acs:oss:cn-qingdao:1030700000xxxx:accesspointforobjectprocess/fc-test/object/*"
		            ]
	            }]
            }',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"\\"{\\\\n\\\\t            \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n\\\\t            \\\\\\"Statement\\\\\\": [{\\\\n\\\\t\\\\t            \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n\\\\t\\\\t            \\\\\\"Action\\\\\\": [\\\\n\\\\t\\\\t\\\\t            \\\\\\"oss:GetObject\\\\\\"\\\\n\\\\t\\\\t            ],\\\\n\\\\t\\\\t            \\\\\\"Principal\\\\\\": [\\\\n\\\\t\\\\t\\\\t            \\\\\\"237210000000000xxxx\\\\\\"\\\\n\\\\t\\\\t            ],\\\\n\\\\t\\\\t            \\\\\\"Resource\\\\\\": [\\\\n\\\\t\\\\t\\\\t            \\\\\\"acs:oss:cn-qingdao:1030700000xxxx:accesspointforobjectprocess/fc-test/object/*\\\\\\"\\\\n\\\\t\\\\t            ]\\\\n\\\\t            }]\\\\n            }\\"","type":"json"}]',
      'title' => '获取对象FC接入点策略',
      'description' => '阿里云账号默认拥有获取对象FC接入点权限策略配置的权限。如果您希望通过RAM用户或者STS的方式获取对象FC接入点的权限策略配置，您必须拥有`oss:GetAccessPointPolicyForObjectProcess`权限。',
    ),
    'DeleteAccessPointPolicyForObjectProcess' => 
    array (
      'summary' => '删除对象FC接入点的权限策略。',
      'path' => '/?accessPointPolicyForObjectProcess',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/octet-stream',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '要删除对象FC接入点策略的Bucket。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-for-object-process-name',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '填写对象FC接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc-ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除对象FC接入点策略',
      'description' => '阿里云账号默认拥有删除对象FC接入点策略的权限策略。如果您希望通过RAM用户或者STS的方式删除对象FC接入点的权限策略，您必须拥有`oss:DeleteAccessPointPolicyForObjectProcess`权限。',
    ),
    'GetPublicAccessBlock' => 
    array (
      'summary' => '获取绑定在用户级别的阻止公共访问的配置。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207983',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
        ),
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
            'description' => '接口响应信息。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicAccessBlockConfiguration' => 
              array (
                'description' => '保存阻止公共访问信息的容器。',
                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PublicAccessBlockConfiguration\\": {\\n    \\"BlockPublicAccess\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取用户级别阻止公共访问配置',
    ),
    'PutPublicAccessBlock' => 
    array (
      'summary' => '修改OSS全局阻止公共访问的配置信息。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '207982',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '接口请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicAccessBlockConfiguration' => 
              array (
                'description' => '保存阻止公共访问配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改用户级别阻止公共访问配置',
    ),
    'DeletePublicAccessBlock' => 
    array (
      'summary' => '删除用户级别的阻止公共访问配置。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除用户级别的阻止公共访问配置',
    ),
    'GetBucketPublicAccessBlock' => 
    array (
      'summary' => '获取存储空间绑定的阻止公共访问配置。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207988',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '接口响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicAccessBlockConfiguration' => 
              array (
                'description' => '保存阻止公共访问配置信息的容器。',
                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PublicAccessBlockConfiguration\\": {\\n    \\"BlockPublicAccess\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间阻止公共访问配置',
    ),
    'PutBucketPublicAccessBlock' => 
    array (
      'summary' => '获取绑定在存储空间上的阻止公共访问的配置信息。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '207985',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'exmaplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '接口请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicAccessBlockConfiguration' => 
              array (
                'description' => '保存阻止公共访问配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '获取存储空间阻止公共访问配置',
    ),
    'DeleteBucketPublicAccessBlock' => 
    array (
      'summary' => '删除绑定在存储空间上的组织公共访问配置信息。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除存储空间阻止公共访问配置',
    ),
    'GetAccessPointPublicAccessBlock' => 
    array (
      'summary' => '获取指定接入点的阻止公共访问配置信息。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '207994',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '接口响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicAccessBlockConfiguration' => 
              array (
                'description' => '保存阻止公共访问配置信息的容器。',
                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PublicAccessBlockConfiguration\\": {\\n    \\"BlockPublicAccess\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取接入点阻止公共访问配置',
    ),
    'PutAccessPointPublicAccessBlock' => 
    array (
      'summary' => '修改指定接入点的阻止公共访问的配置信息。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '207993',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREoss4PB2DT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ap-01',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '接口请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicAccessBlockConfiguration' => 
              array (
                'description' => '保存阻止公共访问配置信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改接入点阻止公共访问配置',
    ),
    'DeleteAccessPointPublicAccessBlock' => 
    array (
      'summary' => '删除指定接入点的阻止公共访问配置信息。',
      'path' => '/?publicAccessBlock',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'x-oss-access-point-name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ap-01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除接入点阻止公共访问配置',
    ),
    'GetBucketArchiveDirectRead' => 
    array (
      'summary' => '查看Bucket是否开启归档直读。',
      'path' => '/?bucketArchiveDirectRead',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
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
            'description' => 'Bucket归档直读配置。',
            'type' => 'object',
            'properties' => 
            array (
              'ArchiveDirectReadConfiguration' => 
              array (
                'description' => 'Bucket归档直读配置。',
                '$ref' => '#/components/schemas/ArchiveDirectReadConfiguration',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ArchiveDirectReadConfiguration\\": {\\n    \\"Enabled\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取存储空间归档直读配置',
      'description' => '- 要查看Bucket是否开启归档直读，您必须有`oss:GetBucketArchiveDirectRead`权限。具体操作，请参见[为RAM用户授权自定义的权限策略](~~199058~~)。
- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。',
    ),
    'PutBucketArchiveDirectRead' => 
    array (
      'summary' => '为Bucket开启或关闭归档直读。',
      'path' => '/?bucketArchiveDirectRead',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '存储空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-bucket
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '接口请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'ArchiveDirectReadConfiguration' => 
              array (
                'description' => 'Bucket归档直读配置。',
                'required' => false,
                '$ref' => '#/components/schemas/ArchiveDirectReadConfiguration',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改存储空间归档直读配置',
      'description' => '- 要为Bucket开启归档直读，您必须有`oss:PutBucketArchiveDirectRead`权限。具体操作，请参见[为RAM用户授权自定义的权限策略](~~199058~~)。

- 每个地域都有对应的访问域名（Endpoint）。关于地域与访问域名对应关系的更多信息，请参见[访问域名和数据中心](~~31837~~)。

- 开启归档直读后，直接读取归档存储类型的文件，会产生归档直读数据取回容量（RetrievalDataArchiveDirect）费用。对于已经解冻的归档存储类型的文件，不会产生归档直读数据取回容量费用。详情请参见[数据处理费用](~~173537~~)。',
    ),
    'PutObject' => 
    array (
      'summary' => '上传文件（Object）。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/octet-stream',
      ),
      'produces' => 
      array (
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-forbid-overwrite',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定PutObject操作时是否覆盖同名Object。 当目标Bucket处于已开启或已暂停的版本控制状态时，**x-oss-forbid-overwrite**请求Header设置无效，即允许覆盖同名Object。
  - 不指定**x-oss-forbid-overwrite**或者指定**x-oss-forbid-overwrite**为**false**时，表示允许覆盖同名Object。
  - 指定**x-oss-forbid-overwrite**为**true**时，表示禁止覆盖同名Object。

设置**x-oss-forbid-overwrite**请求Header会导致QPS处理性能下降，如果您有大量的操作需要使用**x-oss-forbid-overwrite**请求Header（QPS>1000），请联系技术支持，避免影响您的业务。
默认值：**false**',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'x-oss-server-side-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '创建Object时，指定服务器端加密方式。

取值：**AES256**、**KMS****或**SM4****

指定此选项后，在响应头中会返回此选项，OSS会对上传的Object进行加密编码存储。当下载该Object时，响应头中会包含**x-oss-server-side-encryption**，且该值会被设置成此Object的加密算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES256',
          ),
        ),
        4 => 
        array (
          'name' => 'x-oss-server-side-data-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '创建Object时，指定服务器端加密方式。

取值：**AES256**、**KMS**或**SM4**

指定此选项后，在响应头中会返回此选项，OSS会对上传的Object进行加密编码存储。当下载该Object时，响应头中会包含**x-oss-server-side-encryption**，且该值会被设置成此Object的加密算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES256',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-server-side-encryption-key-id',
          'in' => 'header',
          'schema' => 
          array (
            'description' => 'KMS托管的用户主密钥。
此选项仅在**x-oss-server-side-encryption**为KMS时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '9468da86-3509-4f8d-a61e-6eab1eac****',
          ),
        ),
        6 => 
        array (
          'name' => 'x-oss-object-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定OSS创建Object时的访问权限。

取值：

- default（默认）：Object遵循所在存储空间的访问权限。
- private：Object是私有资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户没有权限操作该Object。
- public-read：Object是公共读资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户只有该Object的读权限。请谨慎使用该权限。
- public-read-write：Object是公共读写资源。所有用户都有该Object的读写权限。请谨慎使用该权限。

关于访问权限的更多信息，请参见**[读写权限ACL](~~100676~~)**。',
            'required' => false,
            '$ref' => '#/components/schemas/ObjectACL',
          ),
        ),
        7 => 
        array (
          'name' => 'x-oss-storage-class',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的存储类型。                               对于任意存储类型的Bucket，如果上传Object时指定此参数，则此次上传的Object将存储为指定的类型。例如在IA类型的Bucket中上传Object时，如果指定x-oss-storage-class为Standard，则该Object直接存储为Standard。                              取值：                                 Standard：标准存储                                    IA：低频访问                                    Archive：归档存储                                    ColdArchive：冷归档存储                                    关于存储类型的更多信息，请参见存储类型介绍。',
            'required' => false,
            '$ref' => '#/components/schemas/StorageClass',
          ),
        ),
        8 => 
        array (
          'name' => 'x-oss-tagging',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的标签，可同时设置多个标签，例如TagA=A&TagB=B。
> Key和Value需要先进行URL编码，如果某项没有”=“，则看作Value为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'a:1',
          ),
        ),
        9 => 
        array (
          'name' => 'x-oss-meta-*',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '使用PutObject接口时，如果配置以**x-oss-meta-***为前缀的参数，则该参数视为元数据，例如`x-oss-meta-location`。一个Object可以有多个类似的参数，但所有的元数据总大小不能超过8 KB。

元数据支持短划线（-）、数字、英文字母（a~z）。英文字符的大写字母会被转成小写字母，不支持下划线（_）在内的其他字符。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '使用PutObject接口时，如果配置以**x-oss-meta-***为前缀的参数，则该参数视为元数据，例如`x-oss-meta-location`。一个Object可以有多个类似的参数，但所有的元数据总大小不能超过8 KB。

元数据支持短划线（-）、数字、英文字母（a~z）。英文字符的大写字母会被转成小写字母，不支持下划线（_）在内的其他字符。',
              'example' => 'x-oss-meta-location',
            ),
            'example' => 'x-oss-meta-location',
          ),
        ),
        10 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'string',
            'format' => 'binary',
            'required' => false,
            'example' => '二进制内容',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-hash-crc64ecma' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'crc64',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'contentMD5',
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '上传文件',
      'description' => '**注意事项**

- 添加的Object大小不能超过5 GB。

- 默认情况下，如果已存在同名Object且对该Object有访问权限，则新添加的Object将覆盖原有的Object，并返回200 OK。

- OSS没有文件夹的概念，所有资源都是以文件来存储，但您可以通过创建一个以正斜线（/）结尾，大小为0的Object来创建模拟文件夹。

**版本控制**

- 在已开启版本控制的Bucket中，OSS会为新添加的Object自动生成唯一的版本ID，并在响应Header中通过x-oss-version-id形式返回。
- 在暂停了版本控制的Bucket中，新添加的Object的版本ID为null。OSS会保证同一个Object仅有一个null的版本ID。',
    ),
    'CopyObject' => 
    array (
      'summary' => '拷贝同一地域下相同或不同存储空间（Bucket）之间的文件（Object）。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss-example',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-copy-source',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定拷贝的源地址。
默认值：无',
            'type' => 'string',
            'required' => true,
            'example' => '/oss-example/oss.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'x-oss-forbid-overwrite',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定CopyObject操作时是否覆盖同名目标Object。当目标Bucket处于已开启或已暂停版本控制状态时，**x-oss-forbid-overwrite**请求Header设置无效，即允许覆盖同名Object。
  - 未指定**x-oss-forbid-overwrite**或者指定**x-oss-forbid-overwrite**为**false**时，表示允许覆盖同名目标Object。
  - 指定**x-oss-forbid-overwrite**为**true**时，表示禁止覆盖同名Object。

设置**x-oss-forbid-overwrite**请求Header会导致QPS处理性能下降，如果您有大量的操作需要使用x-**x-oss-forbid-overwrite**请求Header（QPS>1000），请联系技术支持，避免影响您的业务。
默认值：false',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'x-oss-copy-source-if-match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果源Object的ETag值和您提供的ETag相等，则执行拷贝操作，并返回200 OK。
默认值：无
',
            'type' => 'string',
            'required' => false,
            'example' => '5B3C1A2E053D763E1B002CC607C5****',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-copy-source-if-none-match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果源Object的ETag值和您提供的ETag不相等，则执行拷贝操作，并返回200 OK。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '5B3C1A2E053D763E1B002CC607C5****',
          ),
        ),
        6 => 
        array (
          'name' => 'x-oss-copy-source-if-unmodified-since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果指定的时间等于或者晚于文件实际修改时间，则正常拷贝文件，并返回200 OK。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '2019-04-09T07:01:56.000Z',
          ),
        ),
        7 => 
        array (
          'name' => 'x-oss-copy-source-if-modified-since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果源Object在用户指定的时间以后被修改过，则执行拷贝操作。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '2019-04-09T07:01:56.000Z',
          ),
        ),
        8 => 
        array (
          'name' => 'x-oss-metadata-directive',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定如何设置目标Object的元信息。
  - **COPY**（默认值）：复制源Object的元数据到目标Object。
OSS不会复制源Object的**x-oss-server-side-encryption**属性配置到目标Object。目标Object的服务器端加密编码方式取决于当前拷贝操作是否指定了**x-oss-server-side-encryption**。
  - **REPLACE**：忽略源Object的元数据，直接采用请求中指定的元数据。

> 如果拷贝操作的源Object地址和目标Object地址相同，且未开启版本控制时，则无论x-oss-metadata-directive为何值，都会忽略源Object的元数据，目标Object将直接采用请求中指定的元数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'COPY',
          ),
        ),
        9 => 
        array (
          'name' => 'x-oss-server-side-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定OSS创建目标Object时，服务器端熵编码加密算法 。
取值：**AES256**、**KMS**
您只有购买了KMS套件，才能使用KMS加密算法，否则OSS会返回KmsServiceNotEnabled错误。
  - 如果拷贝操作中未指定**x-oss-server-side-encryption**，则无论源Object是否进行过服务器端加密编码，拷贝后的目标Object均不进行服务器端加密编码。
  - 如果拷贝操作中指定了**x-oss-server-side-encryption**，则无论源Object是否进行过服务器端加密编码，拷贝后的目标Object均会进行服务器端加密编码。并且拷贝操作的响应头中会包含**x-oss-server-side-encryption**，值为目标Object的加密算法。
在目标Object被下载时，响应头中也会包含**x-oss-server-side-encryption**，值为该Object的加密算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES256',
          ),
        ),
        10 => 
        array (
          'name' => 'x-oss-server-side-data-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的加密算法。如果未指定此选项，表明Object使用AES256加密算法。此选项仅当x-oss-server-side-encryption为KMS时有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'SM4',
          ),
        ),
        11 => 
        array (
          'name' => 'x-oss-server-side-encryption-key-id',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '表示KMS托管的用户主密钥。
该参数仅在**x-oss-server-side-encryption**为KMS时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '9468da86-3509-4f8d-a61e-6eab1eac****',
          ),
        ),
        12 => 
        array (
          'name' => 'x-oss-object-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定OSS创建目标Object时的访问权限。

取值：

- default（默认）：Object遵循所在存储空间的访问权限。
- private：Object是私有资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户没有权限操作该Object。
- public-read：Object是公共读资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户只有该Object的读权限。请谨慎使用该权限。
- public-read-write：Object是公共读写资源。所有用户都有该Object的读写权限。请谨慎使用该权限。

关于访问权限的更多信息，请参见**[读写权限ACL](~~100676~~)**。',
            'required' => false,
            '$ref' => '#/components/schemas/ObjectACL',
          ),
        ),
        13 => 
        array (
          'name' => 'x-oss-storage-class',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的存储类型。
对于任意存储类型Bucket，如果上传Object时指定该值，则此次上传的Object将存储为指定的类型。例如在IA类型的Bucket中上传Object时，如果指定**x-oss-storage-class**为Standard，则该Object直接存储为Standard类型。

取值：
- Standard：标准存储
- IA：低频访问
- Archive：归档存储
- ColdArchive：冷归档存储

关于存储类型的更多信息，请参见**[存储类型介绍](~~51374~~)**。',
            'required' => false,
            '$ref' => '#/components/schemas/StorageClass',
          ),
        ),
        14 => 
        array (
          'name' => 'x-oss-tagging',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的对象标签，可同时设置多个标签，例如TagA=A&TagB=B。
> Key和Value需要先进行URL编码，如果某项没有“=”，则看作Value为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'a:1',
          ),
        ),
        15 => 
        array (
          'name' => 'x-oss-tagging-directive',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定如何设置目标Object的对象标签。取值如下：
  - **Copy**（默认值）：复制源Object的对象标签到目标 Object。
  - **Replace**：忽略源Object的对象标签，直接采用请求中指定的对象标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'Copy',
          ),
        ),
        16 => 
        array (
          'name' => 'x-oss-meta-*',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果配置以x-oss-meta-*为前缀的参数，则该参数视为元数据。
元数据大小限制：一个Object可以包含多个元数据，但所有的元数据总大小不能超过8 KB。
元数据命名规则：支持短划线（-）、数字、英文字母（a~z）。英文字符的大写字母会被转成小写字母，不支持下划线（_）在内的其他字符。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '元数据命名规则：支持短划线（-）、数字、英文字母（a~z）。英文字符的大写字母会被转成小写字母，不支持下划线（_）在内的其他字符。',
              'example' => 'mx-oss-meta-owner',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-copy-source-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '保存CopyObject结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'CopyObjectResult' => 
              array (
                'description' => '保存CopyObject结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'ETag' => 
                  array (
                    'description' => '目标Object的ETag值。',
                    'type' => 'string',
                    'example' => '5B3C1A2E053D763E1B002CC607C5****',
                  ),
                  'LastModified' => 
                  array (
                    'description' => '目标Object最后更新时间。',
                    'type' => 'string',
                    'example' => 'Fri, 24 Feb 2012 07:18:48 GMT',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CopyObjectResult\\": {\\n    \\"ETag\\": \\"5B3C1A2E053D763E1B002CC607C5****\\",\\n    \\"LastModified\\": \\"Fri, 24 Feb 2012 07:18:48 GMT\\"\\n  }\\n}","type":"json"}]',
      'title' => '拷贝文件',
      'description' => '**版本控制**

- `x-oss-copy-source`默认拷贝Object的当前版本，您可以在x-oss-copy-source中加入versionId来拷贝指定的Object版本。拷贝Object时，如果源Object的对应版本为删除标记，则返回404表示该Object不存在。
- 如果需要恢复Object的早期版本为当前版本，您只需将Object的早期版本拷贝到同一个Bucket中，OSS会将该Object对应早期版本置为当前版本。
- 如果目标Bucket已开启版本控制，OSS将会为新拷贝的Object自动生成唯一的版本ID，此版本ID将会在响应Header中的x-oss-version-id返回。如果目标Bucket未开启或者暂停了版本控制，OSS将会为新拷贝的Object自动生成version ID为null的版本，且会覆盖原有versionId为null的版本。

**使用限制**

- 使用CopyObject接口时，Object的大小限制说明如下：

    - 如果源Bucket和目标Bucket相同，则Object的大小无限制。

    - 如果源Bucket和目标Bucket不同，则建议拷贝小于1 GB的Object。当您需要拷贝大于1 GB的Object时，请使用[UploadPartCopy](~~31994~~)接口。
  
     使用CopyObject或UploadPartCopy接口均要求对源Object有读权限。

- 在非版本控制的Bucket中，当调用CopyObject接口拷贝文件时，如果源Object与目标Object为同一个Object，则OSS只修改源Object的元数据，不拷贝源Object的内容。
- 在版本控制的Bucket中，不支持拷贝通过追加上传方式生成的Object。
- 如果源Object为软链接，则只拷贝软链接，无法拷贝软链接指向的文件内容。

**计量计费**

- 调用一次CopyObject接口会对源Object和目标Object所在的Bucket各增加一次Get请求次数。
- 调用CopyObject接口会对目标Object所在的Bucket增加相应的存储量。
- 调用CopyObject接口更改Object存储类型会涉及数据覆盖。例如低频访问IA创建后10天内被覆盖为标准存储Standard，则会产生20天的低频访问不足规定时长容量费用。关于存储费用的更多信息，请参见**[存储费用](~~173534~~)**。',
    ),
    'GetObject' => 
    array (
      'summary' => '获取某个文件（Object）。',
      'path' => '/{key}',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/octet-stream',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'response-content-type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定OSS返回请求的content-type头。
',
            'type' => 'string',
            'required' => false,
            'example' => 'image/jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'response-content-language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定OSS返回请求的content-language头。
',
            'type' => 'string',
            'required' => false,
            'example' => '中文',
          ),
        ),
        4 => 
        array (
          'name' => 'response-expires',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定OSS返回请求的expires头。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 24 Feb 2012 17:00:00 GMT',
          ),
        ),
        5 => 
        array (
          'name' => 'response-cache-control',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定OSS返回请求的cache-control头。
',
            'type' => 'string',
            'required' => false,
            'example' => 'no-cache',
          ),
        ),
        6 => 
        array (
          'name' => 'response-content-disposition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定OSS返回请求的content-disposition头。
',
            'type' => 'string',
            'required' => false,
            'example' => 'attachment; filename:testing.txt',
          ),
        ),
        7 => 
        array (
          'name' => 'response-content-encoding',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定OSS返回请求的content-encoding头。
',
            'type' => 'string',
            'required' => false,
            'example' => 'utf-8',
          ),
        ),
        8 => 
        array (
          'name' => 'Range',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定文件传输的范围。
  - 如果指定的范围符合规范，返回消息中会包含整个Object的大小和此次返回Object的范围。例如：Content-Range: bytes 0~9/44，表示整个Object大小为44，此次返回的范围为0~9。
  - 如果指定的范围不符合规范，则传送整个Object，并且结果中不包含Content-Range。

默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Content-Range: bytes 100-900/344606',
          ),
        ),
        9 => 
        array (
          'name' => 'If-Modified-Since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果指定的时间早于实际修改时间或指定的时间不符合规范，则直接返回Object，并返回200 OK；如果指定的时间等于或者晚于实际修改时间，则返回304 Not Modified。
时间格式：GMT，例如`Fri, 13 Nov 2015 14:47:53 GMT`
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 13 Nov 2015 14:47:53 GMT',
          ),
        ),
        10 => 
        array (
          'name' => 'If-Unmodified-Since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果指定的时间等于或者晚于Object实际修改时间，则正常传输Object，并返回200 OK；如果指定的时间早于实际修改时间，则返回412 Precondition
                              Failed。
时间格式：GMT，例如`Fri, 13 Nov 2015 14:47:53 GMT`
**If-Modified-Since**和**If-Unmodified-Since**可以同时使用。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 13 Nov 2015 14:47:53 GMT',
          ),
        ),
        11 => 
        array (
          'name' => 'If-Match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入的ETag和Object的ETag匹配，则正常传输Object，并返回200 OK；如果传入的ETag和Object的ETag不匹配，则返回412 Precondition Failed。
Object的ETag值用于验证数据是否发生了更改，您可以基于ETag值验证数据完整性。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'fba9dede5f27731c9771645a3986****',
          ),
        ),
        12 => 
        array (
          'name' => 'If-None-Match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入的ETag值和Object的ETag不匹配，则正常传输Object，并返回200 OK；如果传入的ETag和Object的ETag匹配，则返回304 Not Modified。
**If-Match**和**If-None-Match**可以同时使用。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '5B3C1A2E0563E1B002CC607C****',
          ),
        ),
        13 => 
        array (
          'name' => 'Accept-Encoding',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定客户端的编码类型。
如果要对返回内容进行Gzip压缩传输，您需要在请求头中以显示方式加入Accept-Encoding:gzip。OSS会根据Object的Content-Type和Object大小（不小于1
                                 KB）判断是否返回经过Gzip压缩的数据。
>   - 如果采用了Gzip压缩，则不会附带ETag信息。
>   - 目前OSS支持Gzip压缩的Content-Type为text/cache-manifest、 text/xml、text/plain、text/css、application/javascript、application/x-javascript、application/rss+xml、application/json和text/json。

默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'gzip',
          ),
        ),
        14 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标文件的版本ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQNhiBgMDJgZCA0BYiIDc4MGZjZGI2OTBjOTRmNTE5NmU5NmFhZjhjYmY0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-server-side-encryption' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'serverSideEncryption',
                'type' => 'string',
              ),
            ),
            'x-oss-server-side-encryption-key-id' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'sseKeyId',
                'type' => 'string',
              ),
            ),
            'x-oss-storage-class' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'storageClass',
                'type' => 'string',
              ),
            ),
            'x-oss-object-type' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'objectType',
                'type' => 'string',
              ),
            ),
            'x-oss-next-append-position' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'nextAppendPosition',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'x-oss-hash-crc64ecma' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'crc64ecma',
                'type' => 'string',
              ),
            ),
            'x-oss-expiration' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'expiration',
                'type' => 'string',
              ),
            ),
            'x-oss-restore' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'restore',
                'type' => 'string',
              ),
            ),
            'x-oss-process-status' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'processStatus',
                'type' => 'string',
              ),
            ),
            'x-oss-request-charged' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'requestCharged',
                'type' => 'string',
              ),
            ),
            'Content-Md5' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'Last-Modified' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'ETag' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'x-oss-meta-*' => 
            array (
              'style' => 'json',
              'schema' => 
              array (
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                ),
                'parseType' => 'struct',
              ),
            ),
            'x‑oss‑tagging‑count' => 
            array (
              'schema' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '对象关联的标签的个数。仅当有读取标签权限时返回。',
            'type' => 'string',
            'format' => 'binary',
            'example' => '10',
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"\\"10\\"","type":"json"}]',
      'title' => '获取文件',
      'description' => '**注意事项**

- GetObject接口默认可通过HTTP和HTTPS两种方式访问。如果要设置仅允许通过HTTPS方式访问，请使用Bucket Policy的授权访问方式。具体操作，请参见[通过Bucket Policy授权用户访问指定资源](~~85111~~)。

- 如果Object类型为归档类型，需要先完成解冻文件（RestoreObject）请求，且该请求不能超时。

**版本控制**

默认情况下，调用GetObject接口仅返回Object的当前版本。
如果在查询参数中指定Object的versionId，则返回指定的Object版本。当versionId指定为null时，则返回versionId为null的Object版本。',
    ),
    'AppendObject' => 
    array (
      'summary' => '以追加写的方式上传文件（Object）。',
      'path' => '/{key}?append',
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
      'consumes' => 
      array (
        0 => 'application/octet-stream',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'position',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于指定从何处进行追加。 每次操作成功后，响应消息头x-oss-next-append-position会标明下一次追加的position。首次追加操作的position必须为0，后续追加操作的position是Object的当前大小。例如，第一次AppendObject请求指定position值为0，content-length是65536，则第二次AppendObject需要指定position为65536。

- 当position值为0，且不存在同名Object时，则AppendObject与PutObject请求类似，即允许设置x-oss-server-side-encryption等请求头。如果加入了正确的x-oss-server-side-encryption头，那么后续的AppendObject响应头部也会包含x-oss-server-side-encryption头。后续如需更改元数据，可以使用CopyObject接口。
- 在position值正确的情况下，对已存在的Appendable Object追加一个大小为0的内容，该操作不会改变Object的状态。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'x-oss-server-side-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定服务器端加密方式。
合法值：

- AES256：使用OSS完全托管密钥进行加解密（SSE-OSS）。
- KMS：使用KMS托管密钥进行加解密。
- SM4：国密SM4算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES256',
          ),
        ),
        4 => 
        array (
          'name' => 'x-oss-object-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的访问权限。 取值范围如下：

- default（默认）：Object遵循所在存储空间的访问权限。
- private：Object是私有资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户没有权限操作该Object。
- public-read：Object是公共读资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户只有该Object的读权限。请谨慎使用该权限。
- public-read-write：Object是公共读写资源。所有用户都有该Object的读写权限。请谨慎使用该权限。

关于访问权限的更多信息，请参见[读写权限ACL](~~100676~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/ObjectACL',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-storage-class',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的存储类型。取值范围如下：

- Standard：标准存储
-  IA：低频访问
- Archive：归档存储
对于任意存储类型的Bucket，如果上传Object时指定此参数，则此次上传的Object将存储为指定的类型。例如在IA类型的Bucket中上传Object时，如果指定x-oss-storage-class为Standard，则该Object直接存储为Standard。
关于存储类型的更多信息，请参见存储类型介绍。

><notice> 该值仅在首次执行AppendObject操作时有效，后续追加时不生效。',
            'required' => false,
            '$ref' => '#/components/schemas/StorageClass',
          ),
        ),
        6 => 
        array (
          'name' => 'x-oss-meta-*',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '创建AppendObject时可以添加x-oss-meta-*，继续追加时不可以携带此参数。如果配置以x-oss-meta-*为前缀的参数，则该参数视为元数据。
元数据大小限制：一个Object可以包含多个元数据，但所有的元数据总大小不能超过8 KB。
元数据命名规则：支持短划线（-）、数字、英文字母（a~z）。英文字符的大写字母会被转成小写字母，不支持下划线（_）在内的其他字符。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => 'x-oss-meta-location',
              'description' => '创建AppendObject时可以添加x-oss-meta-*，继续追加时不可以携带此参数。如果配置以x-oss-meta-*为前缀的参数，则该参数视为元数据。
元数据大小限制：一个Object可以包含多个元数据，但所有的元数据总大小不能超过8 KB。
元数据命名规则：支持短划线（-）、数字、英文字母（a~z）。英文字符的大写字母会被转成小写字母，不支持下划线（_）在内的其他字符。',
            ),
            'example' => 'x-oss-meta-location',
          ),
        ),
        7 => 
        array (
          'name' => 'Cache-Control',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定该Object的网页缓存行为。更多信息，请参见**[RFC2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'no-cache',
          ),
        ),
        8 => 
        array (
          'name' => 'Content-Disposition',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定该Object被下载时的名称。更多信息，请参见**[RFC2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'attachment;filename=oss_download.jpg',
          ),
        ),
        9 => 
        array (
          'name' => 'Content-Encoding',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定该Object的内容编码格式。更多信息，请参见**[RFC2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'utf-8',
          ),
        ),
        10 => 
        array (
          'name' => 'Content-MD5',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '是一串由MD5算法生成的值，该请求头用于检查消息内容是否与发送时一致。
获取Content-MD5值：对消息内容（不包括头部）执行MD5算法，获得128比特位数字，然后对该数字进行base64编码。
默认值：无
限制：无',
            'type' => 'string',
            'required' => false,
            'example' => 'ohhnqLBJFiKkPSBO1eNaUA==',
          ),
        ),
        11 => 
        array (
          'name' => 'Expires',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '过期时间。更多信息，请参见**[RFC2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Wed, 08 Jul 2015 16:57:01 GMT',
          ),
        ),
        12 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'string',
            'format' => 'binary',
            'required' => false,
            'example' => '二进制内容',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-next-append-position' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'nextAppendPosition',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'x-oss-hash-crc64ecma' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'crc64',
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '以追加写的方式上传文件',
      'description' => '**版本控制**

在目标Bucket处于开启或暂停版本控制状态下，对Appendable类型Object执行相关操作时，有如下注意事项：
- 仅允许对当前版本为Appendable类型的Object执行追加上传（AppendObject）操作，且OSS不会为该Appendable类型的Object生成历史版本。
- 对当前版本为Appendable类型的Object执行PutObject或DeleteObject操作时，OSS会将该Appendable类型的Object保留为历史版本，但该Object不允许继续追加。
- 不支持对Appendable类型Object执行拷贝操作。
- 不支持对非Appendable类型的Object，包括Normal Object、删除标记（Delete Marker）等执行AppendObject操作。

**使用限制**

- 通过AppendObject方式最后生成的Object大小不得超过5 GB。
- 处于[合规保留策略](~~90564~~)保护期的Object不支持AppendObject操作。
- AppendableObject不支持指定CMK ID进行服务端KMS加密。',
    ),
    'DeleteObject' => 
    array (
      'summary' => '删除文件（object）。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Object对应的版本ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQMxiBgIDh3ZCB0BYiIGE4YjIyMjExZDhhYjQxNzZiNGUyZTI4ZjljZDcz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-delete-marker' => 
            array (
              'schema' => 
              array (
                'type' => 'boolean',
              ),
            ),
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除文件',
      'description' => '**注意事项**

- 要删除文件，您必须有Object的写权限。
- 无论要删除的Object是否存在，删除成功后均会返回204状态码。
- 如果Object类型为软链接，使用DeleteObject接口只会删除该软链接。

**版本控制**

版本控制状态下的删除行为说明如下：

- 未指定versionId（临时删除）：
如果在未指定versionId的情况下执行删除操作时，默认不会删除Object的当前版本，而是对当前版本插入删除标记（Delete Marker）。此时，在未指定versionId的情况下执行GetObject操作，OSS会检测到当前版本为删除标记，并返回`404 Not Found`。此外，响应中还会返回header：`x-oss-delete-marker = true`以及新生成的删除标记的版本号`x-oss-version-id`。
`x-oss-delete-marker`的值为true，表示与返回的`x-oss-version-id`对应的版本为删除标记。

- 指定versionId（永久删除）：
如果在指定versionId的情况下执行删除操作时，OSS会根据`params`中指定的`versionId`参数永久删除该版本。如果要删除ID为“null”的版本，请在`params`参数中添加`params[\'versionId\'] = “null”`，OSS将“null”字符串当成“null”的versionId，从而删除versionId为“null”的Object。',
    ),
    'HeadObject' => 
    array (
      'summary' => '获取某个文件（Object）的元信息。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'head',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求Object的版本号。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQMxiBgMCZov2D0BYiIDY4MDllOTc2YmY5MjQxMzdiOGI3OTlhNTU0ODIx****',
          ),
        ),
        3 => 
        array (
          'name' => 'If-Modified-Since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入参数中的时间早于实际修改时间，则返回200 OK和Object Meta；否则返回304 not modified。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 9 Apr 2021 14:47:53 GMT',
          ),
        ),
        4 => 
        array (
          'name' => 'If-Unmodified-Since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入参数中的时间等于或者晚于文件实际修改时间，则返回200 OK和Object Meta；否则返回412 precondition failed。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 13 Oct 2021 14:47:53 GMT',
          ),
        ),
        5 => 
        array (
          'name' => 'If-Match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入期望的ETag和Object的 ETag匹配，则返回200 OK和Object Meta；否则返回412 precondition failed。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'fba9dede5f27731c9771645a3986****',
          ),
        ),
        6 => 
        array (
          'name' => 'If-None-Match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入期望的ETag值和Object的ETag不匹配，则返回200 OK和Object Meta；否则返回304 Not Modified。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '5B3C1A2E0563E1B002CC607C****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-server-side-encryption' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'serverSideEncryption',
                'title' => '如果该Object为进行服务器端熵编码加密存储的，则在响应头头中会返回此参数，其值表明该Object的服务器端加密算法。',
                'type' => 'string',
              ),
            ),
            'x-oss-server-side-encryption-key-id' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'sseKeyId',
                'title' => '如果用户在创建Object时使用了服务端加密，且加密方法为KMS，则响应中会包含此Header，表示加密所使用的用户KMS key ID。',
                'type' => 'string',
              ),
            ),
            'x-oss-storage-class' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'storageClass',
                'title' => '表示Object的存储类型，分别为标准存储类型（Standard）、低频访问存储类型（IA）、归档存储类型（Archive）、冷归档存储类型（ColdArchive）以及深度冷归档存储类型（DeepColdArchive）。',
                'type' => 'string',
              ),
            ),
            'x-oss-object-type' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'objectType',
                'title' => '表示Object的类型。 通过PutObject上传的Object类型为Normal。 通过AppendObject上传的Object类型为Appendable。 通过MultipartUpload上传的Object类型为Multipart。',
                'type' => 'string',
              ),
            ),
            'x-oss-next-append-position' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'nextAppendPosition	',
                'title' => '对于Appendable类型的Object会返回此Header，指明下一次请求应当提供的position。',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'x-oss-hash-crc64ecma' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'crc64ecma',
                'title' => '表示该Object的64位CRC值。该64位CRC根据ECMA-182标准计算得出。 对OSS支持CRC64校验前创建的Object，调用HeadObject接口时可能不会返回此响应头。',
                'type' => 'string',
              ),
            ),
            'x-oss-expiration' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'expiration',
                'title' => '如果为该Object设置了生命周期规则（Lifecycle），响应中将包含x-oss-expiration header。其中expiry-date的值表示该Object的过期日期，rule-id的值表示相匹配的规则ID。',
                'type' => 'string',
              ),
            ),
            'x-oss-restore' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'restore',
                'title' => '如果Bucket类型为Archive，且用户已经提交Restore请求，则响应头中会以x-oss-restore返回该Object的Restore状态，分如下几种情况： 如果没有提交Restore或者Restore已经超时，则不返回该字段。 如果已经提交Restore，且Restore没有完成，则返回的x-oss-restore值为ongoing-request=”true”。 如果已经提交Restore，且Restore已经完成，则返回的x-oss-restore值为ongoing-request=”false”, expiry-date=”Sun, 16 Apr 2017 08:12:33 GMT”，其中expiry-date是Restore完成后Object进入可读状态的过期时间。',
                'type' => 'string',
              ),
            ),
            'x-oss-process-status' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'processStatus',
                'title' => '当用户通过MNS消息服务创建OSS事件通知后，在进行请求OSS相关操作时如果有匹配的事件通知规则，则响应中会携带这个Header，值为经过Base64编码JSON格式的事件通知结果。',
                'type' => 'string',
              ),
            ),
            'x-oss-request-charged' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'requestCharged',
                'title' => '当Object所属的Bucket被设置为请求者付费模式，且请求者不是Bucket的拥有者时，响应中将携带此Header，值为requester。',
                'type' => 'string',
              ),
            ),
            'Content-Md5' => 
            array (
              'schema' => 
              array (
                'title' => '对于Normal类型的Object，根据RFC 1864标准对消息内容（不包括Header）计算Md5值获得128比特位数字，对该数字进行Base64编码作为一个消息的Content-Md5值。 Multipart和Appendable类型的文件不会返回这个Header。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => 'RFC 2616中定义的HTTP请求内容长度。此处是Object内容的大小，单位字节。',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'Last-Modified' => 
            array (
              'schema' => 
              array (
                'title' => 'Object最后一次修改的日期，格式为HTTP 1.1协议中规定的GMT时间。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => 'RFC 2616中定义的HTTP请求内容类型。',
                'type' => 'string',
              ),
            ),
            'ETag' => 
            array (
              'schema' => 
              array (
                'title' => 'ETag (entity tag) 在每个Object生成的时候被创建，用于标识一个Object的内容。对于Put Object请求创建的Object，ETag值是其内容的MD5值；对于其他方式创建的Object，ETag值是基于一定计算规则生成的唯一值，但不是其内容的MD5值。ETag值可以用于检查Object内容是否发生变化。',
                'type' => 'string',
              ),
            ),
            'x-oss-meta-*' => 
            array (
              'style' => 'json',
              'schema' => 
              array (
                'title' => '以x-oss-meta-为前缀的参数作为用户自定义meta header。当用户在PutObject时设置了以x-oss-meta-为前缀的自定义meta，则响应中会包含这些自定义meta。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                ),
                'parseType' => 'struct',
              ),
            ),
            'x‑oss‑tagging‑count' => 
            array (
              'schema' => 
              array (
                'title' => '对象关联的标签个数。仅当用户有读取标签权限时返回。',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '获取文件的元信息',
      'description' => '- 使用此接口不会返回文件内容。

- HeadObject操作默认获取Object当前版本的元信息。如果Object的当前版本为删除标记，则返回404 Not Found。请求参数中指定versionId则返回指定版本Object的元信息。',
    ),
    'GetObjectMeta' => 
    array (
      'summary' => '获取文件（Object）的元数据信息，包括该Object的ETag、Size、LastModified信息，并且不返回该Object的内容。',
      'path' => '/{key}?objectMeta',
      'methods' => 
      array (
        0 => 'head',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Object的版本ID。只有查看Object指定版本的元数据信息时才显示该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQNRiBgIDMh4mD0BYiIDUzNDA4OGNmZjBjYTQ0YmI4Y2I4ZmVlYzJlNGVk****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'title' => 'Object的版本ID。只有查看Object指定版本的元数据信息时才显示该字段。',
                'type' => 'string',
              ),
            ),
            'ETag' => 
            array (
              'schema' => 
              array (
                'title' => 'Object生成时会创建ETag (entity tag)，ETag用于标识一个Object的内容。 对于通过PutObject请求创建的Object，ETag值是其内容的MD5值；对于其他方式创建的Object，ETag值是基于一定计算规则生成的唯一值，但不是其内容的MD5值。ETag值可以用于检查Object内容是否发生变化。不建议用户使用ETag作为Object内容的MD5校验来验证数据完整性。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => 'Object的文件大小，单位为字节。',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
            'x-oss-last-access-time' => 
            array (
              'schema' => 
              array (
                'title' => 'Object的最后一次访问时间。时间格式为HTTP 1.1协议中规定的GMT时间。开启访问追踪时，该字段的值会随着文件被访问的时间持续更新。如果开启后关闭了访问追踪，该字段的值保留为上一次最后更新的值。',
                'type' => 'string',
              ),
            ),
            'Last-Modifed' => 
            array (
              'schema' => 
              array (
                'title' => 'Object最后一次修改时间。时间格式为HTTP 1.1协议中规定的GMT时间。',
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '获取文件的元数据信息',
      'description' => '**注意事项**
- 文件（Object）的元数据信息包括该Object的ETag、Size、LastModified信息，且不返回该Object的内容。如果Object类型为软链接，则会返回软链接自身信息。
- 当Bucket未启用版本控制时，要获取文件的元数据信息，您必须有oss:GetObject权限。当Bucket已启用版本控制时，要获取文件指定版本（请求中携带了x-oss-version-id请求头）的元数据信息，您必须有oss:GetObjectVersion权限。具体操作，请参见[为RAM用户授权自定义的RAM Policy](~~199058~~)。

**版本控制**

GetObjectMeta操作默认获取Object当前版本的元数据信息。如果Object的当前版本为删除标记，则返回404 Not Found。请求参数中指定versionId则返回指定版本Object的元数据信息。

',
    ),
    'RestoreObject' => 
    array (
      'summary' => '解冻归档类型（Archive）或冷归档（Cold Archive）的文件（Object）。',
      'path' => '/{key}?restore',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求解冻的Obejct的版本号。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQNRiBgMClj7qD0BYiIDQ5Y2QyMjc3NGZkODRlMTU5M2VkY2U3MWRiNGRh',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存解冻请求信息的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'RestoreRequest' => 
              array (
                'description' => '解冻请求信息的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/RestoreRequest',
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
          'headers' => 
          array (
            'x-oss-object-restore-priority' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'title' => '',
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '解冻归档类型或冷归档的文件',
      'description' => '**版本控制**

Object的各个版本可以对应不同的存储类型。调用RestoreObject接口默认解冻Object当前版本，您可以通过指定versionId的方式来解冻Object指定版本。

>- RestoreObject接口只针对归档或冷归档类型的Object，不适用于标准类型和低频访问类型的Object。
- 如果针对该Object第一次调用RestoreObject接口，则返回202。
- 如果已经成功调用过RestoreObject接口，且Object已完成解冻，再次调用时返回200 OK。

**解冻过程说明**

对于归档类型或者冷归档类型的Object，如果需要读取Object，请提前解冻。归档类型的Object解冻有分钟级延迟，冷归档类型的Object解冻有数小时延迟。

归档类型或者冷归档类型的Object在执行解冻前后的状态变换过程如下：

1、 Object初始时处于冷冻状态。

2、提交一次解冻请求后，Object处于解冻中状态。

3、服务端完成解冻任务后，Object进入解冻状态，此时您可以读取Object。
- 对于归档类型的Object，解冻状态默认持续24小时，24小时内再次调用RestoreObject接口则解冻状态会自动延长24小时，一次解冻流程内可有效调用7次RestoreObject接口达到最长7天的解冻持续时间。您也可以通过传入解冻天数，一次调用RestoreObject接口指定最长7天的解冻持续时间。
- 对于冷归档类型的Object，您可以指定解冻天数和解冻优先级，解冻天数最短为1天，最长为7天。不同解冻优先级的首字节取回时间如下：

  - 高优先级（Expedited）：表示1小时内完成解冻。
  - 标准（Standard）：表示2~5小时内完成解冻。如果不传入JobParameters节点，则默认为Standard。
  - 批量（Bulk）：表示5~12小时内完成解冻。

4、解冻状态结束后，Object再次返回到冷冻状态。

**计费说明**

状态变换过程中产生的相关费用如下：
- 对处于冷冻状态的Object执行解冻操作，会产生数据取回费用。
- 解冻状态最多延长7天。在此期间不再重复收取数据取回费用。
- 解冻状态结束后，Object又回到冷冻状态，再次执行解冻操作会收取数据取回费用。
',
    ),
    'SelectObject' => 
    array (
      'summary' => '对目标文件执行SQL语句，返回执行结果。',
      'path' => '/{key}',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/octet-stream',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '保存SelectObject请求的容器。',
            'required' => true,
            '$ref' => '#/components/schemas/SelectRequest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '- 若header x-oss-select-output-raw值为true，则表明返回结果是对象数据（而不是Frame包装的），客户端可以完全按照Get API的方式获取数据。
- 若x-oss-select-output-raw的值为false，请求结果以Frame形式返回。
Frame的格式为`Version|Frame-Type | Payload Length | Header Checksum | Payload | Payload Checksum<1 byte><--3 bytes--><---4 bytes----><-------4 bytes--><variable><----4bytes---------->`。


>Checksum均为CRC32。Frame里所有的整数均以大端编码（big endian），且Version目前为1。',
            'type' => 'string',
            'format' => 'binary',
            'example' => '无',
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"\\"无\\"","type":"json"}]',
      'title' => '对文件执行SQL语句并返回结果',
      'description' => '- 此操作要求您对该Object有读权限。
- 正确执行时，该API返回206。如果SQL语句不正确，或者和文件不匹配，则会返回400错误。
- 关于SelectObject的功能介绍请参见[使用SelectObject查询文件](~~106082~~)。',
    ),
    'CreateSelectObjectMeta' => 
    array (
      'summary' => '获取目标文件总的行数，总的列数（对于CSV文件），以及Splits个数。如果该信息不存在，则会扫描整个文件，分析并记录下CSV文件的上述信息。重复调用该API则会保存上述信息而不必重新扫描整个文件。',
      'path' => '/{key}',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.png',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '保存CreateSelectObjectMeta请求的容器。',
            'required' => false,
            '$ref' => '#/components/schemas/SelectMetaRequest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存CreateSelectObjectMeta信息的容器。',
            '$ref' => '#/components/schemas/SelectMetaStatus',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Offset\\": 0,\\n  \\"TotalScannedBytes\\": 0,\\n  \\"Status\\": 0,\\n  \\"SplitsCount\\": 0,\\n  \\"RowsCount\\": 0,\\n  \\"ColsCount\\": 0,\\n  \\"ErrorMessage\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取目标文件总行数、总列数以及Splits个数',
      'description' => '- `CreateSelectObjectMeta`操作要求您对该Object有写权限。

- 如果该API执行正确，返回200。如果目标文件不是合法CSV或者JSON LINES文件，或者指定的CSV分隔符和目标CSV不匹配，则返回400。',
    ),
    'InitiateMultipartUpload' => 
    array (
      'summary' => '通知OSS初始化一个Multipart Upload事件。',
      'path' => '/{key}?uploads',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '初始化一个Multipart Upload事件的Bucket名称。

',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '初始化一个Multipart Upload事件的Object名称。

',
            'type' => 'string',
            'required' => true,
            'example' => 'multipart.data',
          ),
        ),
        2 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定对返回的Key进行编码，目前支持URL编码。Key使用UTF-8字符，但XML 1.0标准不支持解析一些控制字符，例如ASCII值从0到10的字符。对于Key中包含XML
                              1.0标准不支持的控制字符，可以通过指定encoding-type对返回的Key进行编码。
默认值：无
可选值：**url**',
            'required' => false,
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
        3 => 
        array (
          'name' => 'x-oss-forbid-overwrite',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定InitiateMultipartUpload操作时是否覆盖同名Object。当目标Bucket处于已开启或已暂停的版本控制状态时，**x-oss-forbid-overwrite**请求Header设置无效，即允许覆盖同名Object。
  - 不指定**x-oss-forbid-overwrite**或者指定**x-oss-forbid-overwrite**为**false**时，表示允许覆盖同名Object。
  - 指定**x-oss-forbid-overwrite**为**true**时，表示禁止覆盖同名Object。

设置**x-oss-forbid-overwrite**请求Header会导致QPS处理性能下降，如果您有大量的操作需要使用**x-oss-forbid-overwrite**请求Header（QPS>1000），请联系技术支持，避免影响您的业务。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'x-oss-storage-class',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的存储类型。
对于任意存储类型Bucket，如果上传Object时指定该值，则此次上传的Object将存储为指定的类型。例如在IA类型的Bucket中上传Object时，如果指定**x-oss-storage-class**为Standard，则该Object直接存储为Standard类型。
取值：

- Standard：标准存储
- IA：低频访问
- Archive：归档存储
- ColdArchive：冷归档存储

关于存储类型的更多信息，请参见**[存储类型介绍](~~51374~~)**。',
            'required' => false,
            '$ref' => '#/components/schemas/StorageClass',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-tagging',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的标签，可同时设置多个标签，例如： TagA=A&TagB=B
> Key和Value需要先进行URL编码，如果某项没有`=`，则看作Value为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'a:1',
          ),
        ),
        6 => 
        array (
          'name' => 'x-oss-server-side-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定上传该Object的每个part时使用的服务器端加密方式。
取值：**AES256**、**KMS**或**SM4**
> 使用KMS加密算法前，您需要先开通密钥管理服务KMS。


指定此参数后，在响应头中会返回此参数，OSS会对上传的每个part进行加密编码存储。当下载该Object时，响应头中会包含x-oss-server-side-encryption，且该值会被设置成此Object的加密算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES256',
          ),
        ),
        7 => 
        array (
          'name' => 'x-oss-server-side-data-encryption',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的加密算法。若未指定此选项，表明Object使用AES256加密算法。此选项仅当**x-oss-server-side-encryption**为KMS时有效。
取值：SM4',
            'type' => 'string',
            'required' => false,
            'example' => 'SM4',
          ),
        ),
        8 => 
        array (
          'name' => 'x-oss-server-side-encryption-key-id',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '表示KMS托管的用户主密钥。
该参数在**x-oss-server-side-encryption**值为KMS时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '9468da86-3509-4f8d-a61e-6eab1eac****',
          ),
        ),
        9 => 
        array (
          'name' => 'Cache-Control',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定该Object被下载时的网页的缓存行为。更多信息，请参见**[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'private',
          ),
        ),
        10 => 
        array (
          'name' => 'Content-Disposition',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定该Object被下载时的名称。更多信息，请参见**[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'attachment;filename=oss_download.jpg ',
          ),
        ),
        11 => 
        array (
          'name' => 'Content-Encoding',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定该Object被下载时的内容编码格式。更多信息，请参见**[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'utf-8',
          ),
        ),
        12 => 
        array (
          'name' => 'Expires',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '过期时间，单位为毫秒。更多信息，请参见**[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 28 Feb 2012 05:38:42 GMT ',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存Initiate Multipart Upload请求结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'InitiateMultipartUploadResult' => 
              array (
                'description' => '保存Initiate Multipart Upload请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Bucket' => 
                  array (
                    'description' => '初始化一个Multipart Upload事件的Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Key' => 
                  array (
                    'description' => '初始化一个Multipart Upload事件的Object名称。',
                    'type' => 'string',
                    'example' => 'test.txt',
                  ),
                  'UploadId' => 
                  array (
                    'description' => '唯一标识此次Multipart Upload事件的ID，用于后续调用UploadPart和CompleteMultipartUpload接口。',
                    'type' => 'string',
                    'example' => '0004B9894A22E5B1888A1E29F823****',
                  ),
                  'EncodingType' => 
                  array (
                    'description' => '指明返回结果中编码使用的类型。如果请求的参数中指定了encoding-type，那返回的结果会对Key进行编码。',
                    'type' => 'string',
                    'example' => 'url',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"InitiateMultipartUploadResult\\": {\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"Key\\": \\"test.txt\\",\\n    \\"UploadId\\": \\"0004B9894A22E5B1888A1E29F823****\\",\\n    \\"EncodingType\\": \\"url\\"\\n  }\\n}","type":"json"}]',
      'title' => '通知OSS初始化分片上传事件',
      'description' => '- 调用接口会返回一个OSS服务器创建的全局唯一的Upload ID，用于标识本次Multipart Upload事件。您可以根据这个ID来发起相关的操作，例如中止Multipart Upload、查询Multipart Upload等。

- 初始化MultipartUpload请求，并不影响已存在的同名Object。

- 该操作计算认证签名时，需要添加`?uploads`到`CanonicalizedResource`中。',
    ),
    'UploadPart' => 
    array (
      'summary' => '根据指定的Object名和uploadId来分块（Part）上传数据。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/octet-stream',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'partNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每一个上传的Part都有一个标识它的号码（partNumber）。

取值：1~10000

单个Part的大小限制为100 KB~5 GB。
>MultipartUpload事件中除最后一个Part以外，其他Part的大小都要大于或等于100 KB。因不确定是否为最后一个Part，UploadPart接口并不会立即校验上传Part的大小，只有当CompleteMultipartUpload时才会校验。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'uploadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'uploadId用于唯一标识上传的Part属于哪个Object。',
            'type' => 'string',
            'required' => true,
            'example' => '0004B9895DBBB6EC98E36',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'string',
            'format' => 'binary',
            'required' => false,
            'example' => '二进制内容',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '分块上传数据',
      'description' => '- 调用UploadPart接口上传Part数据前，必须先调用InitiateMultipartUpload接口来获取OSS服务器生成的uploadId。

- 如果使用同一个partNumber上传了新的数据，则OSS上已有的partNumber对应的Part数据将被覆盖。

- OSS会将服务器端收到Part数据的MD5值放在ETag头返回给用户。

- 如果调用InitiateMultipartUpload接口时，指定了x-oss-server-side-encryption请求头，则会对上传的Part进行加密编码，并在UploadPart响应头中返回x-oss-server-side-encryption头，其值表明该Part的服务器端加密算法。更多信息，请参见[InitiateMultipartUpload](~~31992~~)。',
    ),
    'CompleteMultipartUpload' => 
    array (
      'summary' => '来完成整个文件的分片上传。',
      'path' => '/{key}',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'uploadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此次MultipartUpload事件的唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '0004B9895DBBB6E****',
          ),
        ),
        3 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定对返回的Key进行编码，目前只支持URL编码。


Key使用UTF-8字符，但XML 1.0标准不支持解析一些控制字符，例如ASCII码值从0到10的字符。当Key中包含XML 1.0标准不支持的控制字符时，您可以通过指定Encoding-type对返回的Key进行编码。

默认值：无

有效值：url',
            'required' => false,
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
        4 => 
        array (
          'name' => 'x-oss-forbid-overwrite',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定CompleteMultipartUpload操作时是否覆盖同名Object。

- 不指定x-oss-forbid-overwrite或者指定x-oss-forbid-overwrite为false时，表示允许覆盖同名Object。
- 指定x-oss-forbid-overwrite为true时，表示禁止覆盖同名Object。

> 
- 当目标Bucket的版本控制状态为“开启”或“暂停”时，x-oss-forbid-overwrite请求Header设置无效，即允许覆盖同名Object。
- 设置x-oss-forbid-overwrite请求Header会导致QPS处理性能下降，如果您有大量的操作需要使用x-oss-forbid-overwrite请求Header（QPS > 1000），请工单联系我们进行确认，避免影响您的业务。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-complete-all',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定是否列举当前UploadId已上传的所有Part。

- 如果指定了x-oss-complete-all:yes，则OSS会列举当前UploadId已上传的所有Part，然后按照PartNumber的序号排序并执行CompleteMultipartUpload操作。执行CompleteMultipartUpload过程中无法检测正在上传或者漏传的Part，因此用户需要自己确保Part的完整性。
- 如果指定了x-oss-complete-all:yes，则不允许继续指定body，否则报错。
- 如果指定了x-oss-complete-all:yes，response的格式保持不变。',
            'type' => 'string',
            'required' => false,
            'example' => 'yes',
          ),
        ),
        6 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存CompleteMultipartUpload请求内容的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'CompleteMultipartUpload' => 
              array (
                'description' => '保存CompleteMultipartUpload请求内容的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/CompleteMultipartUpload',
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
          'headers' => 
          array (
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'title' => '文件版本id',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '保存CompleteMultipartUpload请求结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'CompleteMultipartUploadResult' => 
              array (
                'description' => '保存CompleteMultipartUpload请求响应内容的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'EncodingType' => 
                  array (
                    'description' => '是否对返回的key进行编码。',
                    'type' => 'string',
                    'example' => 'url',
                  ),
                  'Location' => 
                  array (
                    'description' => '新创建Object的URL。',
                    'type' => 'string',
                    'example' => 'http://oss-example.oss-cn-hangzhou.aliyuncs.com/multipart.data',
                  ),
                  'Bucket' => 
                  array (
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Key' => 
                  array (
                    'description' => '新创建Object的名字。',
                    'type' => 'string',
                    'example' => 'multipart.data',
                  ),
                  'ETag' => 
                  array (
                    'description' => 'Object生成时会创建相应的ETag ，ETag用于标识一个Object的内容。

通过CompleteMultipartUpload请求创建的Object，ETag值是基于一定计算规则生成的唯一值，但不是其内容的MD5值。

>ETag值可以用于检查Object内容是否发生变化。不建议使用ETag作为Object内容的MD5来校验数据完整性。',
                    'type' => 'string',
                    'example' => '"B864DB6A936D376F9F8D3ED3BBE540****"',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CompleteMultipartUploadResult\\": {\\n    \\"EncodingType\\": \\"url\\",\\n    \\"Location\\": \\"http://oss-example.oss-cn-hangzhou.aliyuncs.com/multipart.data\\",\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"Key\\": \\"multipart.data\\",\\n    \\"ETag\\": \\"\\\\\\"B864DB6A936D376F9F8D3ED3BBE540****\\\\\\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '完成整个文件的分片上传',
      'description' => '**注意事项**


调用CompleteMultipartUpload操作时，用户必须提供所有有效的Part列表（包括PartNumber和ETag）。OSS收到用户提交的Part列表后，会逐一验证每个Part的有效性。当所有的Part验证通过后，OSS将把这些Part组合成一个完整的Object。
- 确认Part的大小：CompleteMultipartUpload时会确认除最后一个Part以外所有Part的大小是否都大于或等于100 KB，并检查用户提交的Part列表中的每一个PartNumber和ETag。所以在上传Part时，客户端除了需要记录Part号码外，还需要记录每次上传Part成功后服务器返回的ETag值。

- 处理请求：由于OSS处理CompleteMultipartUpload请求时会持续一定的时间。在这段时间内，如果客户端与OSS之间连接中断，OSS仍会继续该请求。

- PartNumber：服务端在调用CompleteMultipartUpload接口时会对PartNumber做校验。
PartNumber取值为1~10000。PartNumber可以不连续，但必须升序排列。例如第一个Part的PartNumber是1，第二个Part的PartNumber可以是5。

- UploadId：同一个Object可以同时拥有不同的UploadId，当Complete一个UploadId后，此UploadId将无效，但该Object的其他UploadId不受影响。

- x-oss-server-side-encryption请求头：如果调用InitiateMultipartUpload接口时，指定了x-oss-server-side-encryption请求头，则在CompleteMultipartUpload的响应头中返回x-oss-server-side-encryption，其值表示该Object的服务器端加密算法。

**版本控制**

在开启版本控制的情况下，调用CompleteMultipartUpload接口来完成整个文件的MultipartUpload，OSS会为整个文件生成唯一的版本ID，并在响应header中以x-oss-version-id的形式返回。',
    ),
    'UploadPartCopy' => 
    array (
      'summary' => '从一个已存在的Object中拷贝数据来上传一个Part。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-copy-source',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '拷贝源地址（必须有可读权限）。',
            'type' => 'string',
            'required' => true,
            'example' => '/oss-example/ src-object',
          ),
        ),
        3 => 
        array (
          'name' => 'partNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每一个上传的Part都有一个标识它的号码（partNumber）。

取值：1~10000

单个Part的大小限制为100 KB~5 GB。
> MultipartUpload事件中除最后一个Part以外，其他Part的大小都要大于或等于100 KB。因不确定是否为最后一个Part，UploadPart接口并不会立即校验上传Part的大小，只有当CompleteMultipartUpload时才会校验。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10000',
          ),
        ),
        4 => 
        array (
          'name' => 'uploadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'uploadId用于唯一标识上传的Part属于哪个Object。',
            'type' => 'string',
            'required' => true,
            'example' => '0004B999EF5A239BB9138C6227D69F95',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-copy-source-range',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '源Object的拷贝范围。例如设置bytes=0~9，表示拷贝0到9这10个字符。
默认值：无
  - 不指定该请求头时，表示拷贝整个源Object。
  - 当指定该请求头时，则返回消息中会包含整个文件的长度和此次拷贝的范围，例如：Content-Range: bytes 0~9/44，表示整个文件长度为44，此次拷贝的范围为0~9。
  - 当指定的范围不符合规范时，则拷贝整个源Object，并且不在结果中提及Content-Range。',
            'type' => 'string',
            'required' => false,
            'example' => 'bytes=100-6291756',
          ),
        ),
        6 => 
        array (
          'name' => 'x-oss-copy-source-if-match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果源Object的ETAG值和用户提供的ETAG相等，则执行拷贝操作；否则返回412 HTTP错误码（预处理失败）。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '5B3C1A2E053D763E1B002CC607C5****',
          ),
        ),
        7 => 
        array (
          'name' => 'x-oss-copy-source-if-none-match',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入的ETag值和Object的ETag不匹配，则正常传输文件，并返回200 OK；否则返回304 Not Modified。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => '5B3C1A2E053D763E1B002CC607C5****',
          ),
        ),
        8 => 
        array (
          'name' => 'x-oss-copy-source-if-unmodified-since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果传入参数中的时间等于或者晚于文件实际修改时间，则正常传输文件，并返回200 OK；否则返回412 precondition failed错误。
默认值：无',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 13 Oct 2015 14:47:53 GMT',
          ),
        ),
        9 => 
        array (
          'name' => 'x-oss-copy-source-if-modified-since',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '如果指定的时间早于实际修改时间，则正常传送文件，并返回200 OK；否则返回304 not modified。
默认值：无
时间格式：GMT时间，例如Fri, 13 Nov 2015 14:47:53 GMT',
            'type' => 'string',
            'required' => false,
            'example' => 'Fri, 13 Nov 2015 14:47:53 GMT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-copy-source-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'UploadPartCopy请求的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'CopyPartResult' => 
              array (
                'description' => '保存UploadPartCopy结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'LastModified' => 
                  array (
                    'description' => '最近一次修改时间。',
                    'type' => 'string',
                    'format' => 'iso8601',
                    'example' => '2014-07-17T06:27:54.000Z',
                  ),
                  'ETag' => 
                  array (
                    'description' => '被拷贝Object的ETag值。',
                    'type' => 'string',
                    'example' => '"5B3C1A2E053D763E1B002CC607C5****"',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CopyPartResult\\": {\\n    \\"LastModified\\": \\"2014-07-17T06:27:54.000Z\\",\\n    \\"ETag\\": \\"\\\\\\"5B3C1A2E053D763E1B002CC607C5****\\\\\\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '拷贝数据上传一个数据块',
      'description' => '该接口为通过在UploadPart请求的基础上增加一个请求头x-oss-copy-source来调用UploadPartCopy接口，实现从一个已存在的Object中拷贝数据来上传一个Part。

**注意事项**
<br>当拷贝一个大于1 GB的文件时，必须使用UploadPartCopy的方式进行拷贝。如果想通过单个操作拷贝小于1 GB的文件，请参见[CopyObject](https://help.aliyun.com/document_detail/31979.htm?spm=a2c4g.11186623.0.0.49aa29d6oRCP8o#t4696.html)。
<br>使用UploadPartCopy接口时，有如下注意事项：

- 不允许拷贝以AppendObject方式上传的Object。

- 执行UploadPartCopy的源Bucket地址和目标Bucket地址必须是同一个Region。

- 调用该接口上传Part数据前，必须先调用InitiateMultipartUpload接口来获取一个OSS服务器颁发的Upload ID。

- 若调用InitiateMultipartUpload接口时，指定了x-oss-server-side-encryption请求头，则会对上传的Part进行加密编码，并在UploadPart响应头中返回x-oss-server-side-encryption头，其值表明该Part的服务器端加密算法，详情请参见[InitiateMultipartUpload](~~31992~~)。

- MultipartUpload要求除最后一个Part以外，其他的Part大小都要大于100 KB。因不确定是否为最后一个Part，UploadPart接口并不会立即校验上传Part的大小，只有当CompleteMultipartUpload的时候才会校验。

**版本控制**

UploadPartCopy默认从一个已存在的Object的当前版本中拷贝数据来上传一个Part。允许通过在请求头x-oss-copy-source中附带versionId的子条件，实现从Object的指定版本进行拷贝，例如x-oss-copy-source : /SourceBucketName/SourceObjectName?versionId=111111。
>SourceObjectName要进行URL编码。响应中将会返回被拷贝Object的versionId：x-oss-copy-source-version-id。

如果未指定versionId且拷贝Object的当前版本为删除标记（Delete Marker），OSS将返回404 Not Found。通过指定versionId来拷贝删除标记时，OSS将返回400 Bad Request。

',
    ),
    'AbortMultipartUpload' => 
    array (
      'summary' => '用于取消MultipartUpload事件并删除对应的Part数据。',
      'path' => '/{key}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss-example',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'uploadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此次MultipartUpload事件的唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '0004B9895DBBB6E****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消分片上传事件并删除数据块数据',
      'description' => '**注意事项**

- 您需要提供MultipartUpload事件相应的uploadId。
- 取消一个MultipartUpload事件过程中，如果所属的某些Part仍然在上传，那么此次取消操作将无法删除这些Part。
- 取消一个MultipartUpload事件后，您无法再使用此uploadId做任何操作，已经上传的Part数据也会被删除。
- 建议您及时完成分片上传或者取消分片上传，因为已上传但是未完成或未取消的分片会占用存储空间进而产生存储费用。',
    ),
    'ListMultipartUploads' => 
    array (
      'summary' => '列举所有执行中的Multipart Upload事件。',
      'path' => '/?uploads',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'delimiter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于对Object名称进行分组的字符。所有名称包含指定的前缀且首次出现delimiter字符之间的Object作为一组元素CommonPrefixes。',
            'type' => 'string',
            'required' => false,
            'example' => '/',
          ),
        ),
        2 => 
        array (
          'name' => 'max-uploads',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定此次返回Multipart Upload事件的最大个数，默认值为1000。最大值为1000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        3 => 
        array (
          'name' => 'key-marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '与upload-id-marker参数配合使用，用于指定返回结果的起始位置。
  - 如果未设置upload-id-marker参数，查询结果中包含所有Object名称的字典序大于key-marker参数值的Multipart Upload事件。
  - 如果设置了upload-id-marker参数，查询结果中包含：
    - 所有Object名称的字典序大于key-marker参数值的Multipart Upload事件。
    - Object名称等于key-marker参数值，但是UploadId比upload-id-marker参数值大的Multipart Upload事件。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1.avi',
          ),
        ),
        4 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回的Object Key必须以prefix作为前缀。注意使用prefix查询时，返回的Key中仍会包含prefix。
> 您可以灵活地使用prefix参数对Bucket内的Object进行分组管理（类似文件夹功能）。',
            'type' => 'string',
            'required' => false,
            'example' => 'fun/',
          ),
        ),
        5 => 
        array (
          'name' => 'upload-id-marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '与key-marker参数配合使用，用于指定返回结果的起始位置。
  - 如果未设置key-marker参数，则OSS会忽略upload-id-marker参数。
  - 如果设置了key-marker参数，查询结果中包含：
    - 所有Object名称的字典序大于key-marker参数值的Multipart Upload事件。
    - Object名称等于key-marker参数值，但是UploadId比upload-id-marker参数值大的Multipart Upload事件。',
            'type' => 'string',
            'required' => false,
            'example' => '0004B99B8E707874FC2D692FA5D7****',
          ),
        ),
        6 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定对返回的内容进行编码，指定编码的类型。Delimiter、KeyMarker、Prefix、NextKeyMarker和Key使用UTF-8字符，但xml 1.0标准不支持解析一些控制字符，例如ASCII值从0到10的字符。对于包含xml
                              1.0标准不支持的控制字符，可以通过指定encoding-type对返回的Delimiter、KeyMarker、Prefix、NextKeyMarker和Key进行编码。

默认值：无',
            'required' => false,
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存ListMultipartUpload请求结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListMultipartUploadsResult' => 
              array (
                'description' => '保存ListMultipartUpload请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Bucket' => 
                  array (
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'EncodingType' => 
                  array (
                    'description' => '指明返回结果中编码使用的类型。如果请求参数中指定了encoding-type，那返回的结果会对Delimiter、KeyMarker、Prefix、NextKeyMarker和Key这些元素进行编码。',
                    'type' => 'string',
                    'example' => 'url',
                  ),
                  'KeyMarker' => 
                  array (
                    'description' => '列表的起始Object位置。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'UploadIdMarker' => 
                  array (
                    'description' => '列表的起始UploadId位置。',
                    'type' => 'string',
                    'example' => '0004B999EF5A239BB9138C6227D6****',
                  ),
                  'NextKeyMarker' => 
                  array (
                    'description' => '如果本次没有返回全部结果，响应请求中将包含NextKeyMarker元素，用于表示接下来请求的KeyMarker值。',
                    'type' => 'string',
                    'example' => 'oss.avi',
                  ),
                  'NextUploadIdMarker' => 
                  array (
                    'description' => '如果本次没有返回全部结果，响应请求中将包含NextUploadMarker元素，用于表示接下来请求的UploadMarker值。',
                    'type' => 'string',
                    'example' => '0004B99B8E707874FC2D692FA5D77D3F',
                  ),
                  'MaxUploads' => 
                  array (
                    'description' => '返回的最大Upload个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'IsTruncated' => 
                  array (
                    'description' => '表示本次返回的MultipartUpload结果列表是否被截断。取值范围如下：

true：表示本次没有返回全部结果。

false（默认）：表示本次已经返回了全部结果。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Prefix' => 
                  array (
                    'description' => '本次查询所用的前缀。',
                    'type' => 'string',
                    'example' => 'logs/',
                  ),
                  'Delimiter' => 
                  array (
                    'description' => '本次查询所用的Object名称分组字符。',
                    'type' => 'string',
                    'example' => '/',
                  ),
                  'Upload' => 
                  array (
                    'description' => '保存Multipart Upload事件信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存Multipart Upload事件信息的容器。',
                      '$ref' => '#/components/schemas/Upload',
                    ),
                  ),
                  'CommonPrefixes' => 
                  array (
                    'description' => '保存列举结果中Object名称公共前缀的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存列举结果中Object名称公共前缀的容器。',
                      '$ref' => '#/components/schemas/CommonPrefix',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListMultipartUploadsResult\\": {\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"EncodingType\\": \\"url\\",\\n    \\"KeyMarker\\": \\"abc\\",\\n    \\"UploadIdMarker\\": \\"0004B999EF5A239BB9138C6227D6****\\",\\n    \\"NextKeyMarker\\": \\"oss.avi\\",\\n    \\"NextUploadIdMarker\\": \\"0004B99B8E707874FC2D692FA5D77D3F\\",\\n    \\"MaxUploads\\": 20,\\n    \\"IsTruncated\\": true,\\n    \\"Prefix\\": \\"logs/\\",\\n    \\"Delimiter\\": \\"/\\",\\n    \\"Upload\\": [\\n      {\\n        \\"Key\\": \\"\\",\\n        \\"UploadId\\": \\"\\",\\n        \\"Initiated\\": \\"\\"\\n      }\\n    ],\\n    \\"CommonPrefixes\\": [\\n      {\\n        \\"Prefix\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列举执行中的分片上传事件',
      'description' => '调用ListMultipartUploads接口列举所有执行中的Multipart Upload事件，即已经初始化但还未完成（Complete）或者还未中止（Abort）的Multipart Upload事件。',
    ),
    'ListParts' => 
    array (
      'summary' => '列举指定Upload ID所属的所有已经上传成功Part。',
      'path' => '/{key}',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'uploadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MultipartUpload事件的ID。
',
            'type' => 'string',
            'required' => true,
            'example' => '0004B999EF5A239BB9138C6227D69F95',
          ),
        ),
        3 => 
        array (
          'name' => 'max-parts',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规定在OSS响应中的最大Part数目。

默认值：**1,000**

最大值：**1,000**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        4 => 
        array (
          'name' => 'part-number-marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定List的起始位置，只有Part Number数目大于该参数的Part会被列出。
默认值：无',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'encoding-type',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '指定对返回的内容进行编码，指定编码的类型。Key使用UTF-8字符，但xml 1.0标准不支持解析一些控制字符，比如ascii值从0到10的字符。对于Key中包含xml 1.0标准不支持的控制字符，可以通过指定Encoding-type对返回的Key进行编码。

默认值：无

可选值：**url**',
            'required' => false,
            '$ref' => '#/components/schemas/EncodeType',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存List Part请求结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListPartResult' => 
              array (
                'description' => '保存List Part请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Bucket' => 
                  array (
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'example' => 'example-bucket',
                  ),
                  'Key' => 
                  array (
                    'description' => 'Object名称。',
                    'type' => 'string',
                    'example' => 'multipart.data',
                  ),
                  'UploadId' => 
                  array (
                    'description' => 'Upload事件ID。',
                    'type' => 'string',
                    'example' => '0004B999EF5A239BB9138C6227D69F95',
                  ),
                  'PartNumberMarker' => 
                  array (
                    'description' => '本次List结果的Part Number起始位置。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'NextPartNumberMarker' => 
                  array (
                    'description' => '如果本次没有返回全部结果，响应请求中将包含NextPartNumberMarker元素，用于标明接下来请求的PartNumberMarker值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'MaxParts' => 
                  array (
                    'description' => '返回请求中最大的Part数目。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'IsTruncated' => 
                  array (
                    'description' => '标明本次返回的ListParts结果列表是否被截断。“true”表示本次没有返回全部结果；“false”表示本次已经返回了全部结果。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Part' => 
                  array (
                    'description' => '保存Part信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存Part信息的容器。',
                      '$ref' => '#/components/schemas/Part',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5xx' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListPartResult\\": {\\n    \\"Bucket\\": \\"example-bucket\\",\\n    \\"Key\\": \\"multipart.data\\",\\n    \\"UploadId\\": \\"0004B999EF5A239BB9138C6227D69F95\\",\\n    \\"PartNumberMarker\\": 10,\\n    \\"NextPartNumberMarker\\": 5,\\n    \\"MaxParts\\": 20,\\n    \\"IsTruncated\\": true,\\n    \\"Part\\": [\\n      {\\n        \\"ETag\\": \\"\\",\\n        \\"PartNumber\\": 0,\\n        \\"Size\\": 0,\\n        \\"LastModified\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列举所有成功上传的数据块',
      'description' => '- OSS的返回结果按照Part号码升序排列。

- 由于网络传输可能出错，所以不推荐使用ListParts返回结果中的Part Number和ETag值来生成已经上传成功的Part列表。
',
    ),
    'PutObjectAcl' => 
    array (
      'summary' => '修改文件（Object）的访问权限（ACL）。',
      'path' => '/{key}?acl',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-object-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定OSS创建Object时的访问权限。
取值：

- default（默认）：Object遵循所在存储空间的访问权限。
- private：Object是私有资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户没有权限操作该Object。
- public-read：Object是公共读资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户只有该Object的读权限。请谨慎使用该权限。
- public-read-write：Object是公共读写资源。所有用户都有该Object的读写权限。请谨慎使用该权限。

关于访问权限的更多信息，请参见**[读写权限ACL](~~100676~~)**。',
            'required' => true,
            '$ref' => '#/components/schemas/ObjectACL',
          ),
        ),
        3 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Object对应的版本',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQMhiBgIC3rpSD0BYiIDBjYTk5MmIzN2JlNjQxZTFiNGIzM2E3OTliODA0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'title' => 'The version of a object',
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改文件的访问权限',
      'description' => '**注意事项**

此操作只有Bucket Owner有权限执行，且需对Object有读写权限。

**版本控制**

调用PutObjectACL接口时，默认只能设置Object当前版本的ACL。您可以通过指定versionId参数来设置指定Object版本的ACL。如果Object的对应版本为删除标记（Delete Marker），则OSS将返回404 Not Found。

**ACL说明**

PutObjectACL接口通过Put请求中的`x-oss-object-acl`头来设置Object ACL。目前Object包括如下四种访问权限。

- private：Object是私有资源。只有该Object的Owner拥有该Object的读写权限，其他用户没有权限操作该Object。
- public-read：Object是公共读资源。Object Owner拥有该Object的读写权限。非Object Owner只有该Object的读权限。
- public-read-write：Object是公共读写资源。所有用户拥有对该Object的读写权限。
- default：Object遵循其所在Bucket的读写权限，即Bucket是什么权限，Object就是什么权限。

>**注意**
- Object ACL优先级高于Bucket ACL。例如Bucket ACL是private的，而Object ACL是public-read-write的，则所有用户都拥有该Object的访问权限，即使该Bucket是私有Bucket。如果某个Object未设置过ACL，则访问权限遵循Bucket ACL。
- Object的读操作包括GetObject、HeadObject、CopyObject和UploadPartCopy中的对原Object的读；Object的写操作包括PutObject、PostObject、AppendObject、DeleteObject、DeleteMultipleObjects、CompleteMultipartUpload以及CopyObject对新Object的写。
- 您还可以在进行Object的写操作时，在请求头中带上x-oss-object-acl来设置Object
 ACL，效果与PutObjectACL等同。例如PutObject时在请求头中带上x-oss-object-acl可以在上传一个Object的同时设置此Object的ACL。
',
    ),
    'GetObjectAcl' => 
    array (
      'summary' => '获取存储空间（Bucket）下某个文件（Object）的访问权限（ACL）。',
      'path' => '/{key}?acl',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The version of a object',
            'description' => 'Object对应的版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'list1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '存储ACL信息的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'AccessControlPolicy' => 
              array (
                'description' => '存储ACL信息的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Owner' => 
                  array (
                    'description' => '保存Bucket拥有者信息的容器。',
                    '$ref' => '#/components/schemas/Owner',
                  ),
                  'AccessControlList' => 
                  array (
                    'description' => '存储ACL信息的容器。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Grant' => 
                      array (
                        'description' => 'Object的ACL权限。',
                        '$ref' => '#/components/schemas/ObjectACL',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessControlPolicy\\": {\\n    \\"Owner\\": {\\n      \\"ID\\": \\"\\",\\n      \\"DisplayName\\": \\"\\"\\n    },\\n    \\"AccessControlList\\": {}\\n  }\\n}","type":"json"}]',
      'title' => '获取文件的访问权限',
      'description' => '**版本控制**

调用GetObjectACL接口时，默认只能获取Object当前版本的ACL。您可以通过指定versionId参数来获取指定Object版本的ACL。如果Object的对应版本为删除标记（Delete Marker），则OSS将返回404 Not Found。

>如果一个Object从未设置过ACL，则调用GetObjectACL时，返回的ObjectACL为default，表示该Object的ACL遵循Bucket ACL。即如果Bucket的访问权限是private，则该Object的访问权限也是private。',
    ),
    'PutSymlink' => 
    array (
      'summary' => '为OSS的目标文件（TargetObject）创建软链接（Symlink）。',
      'path' => '/{key}?symlink',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'x-oss-symlink-target',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '软链接指向的目标文件。
合法值：命名规范同Object
  - TargetObjectName同ObjectName一样，需要对其进行URL编码。
  - 软链接的目标文件类型不能为软链接。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'x-oss-object-acl',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定OSS创建Object时的访问权限。

取值：

- default（默认）：Object遵循所在存储空间的访问权限。
- private：Object是私有资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户没有权限操作该Object。
- public-read：Object是公共读资源。只有Object的拥有者和授权用户有该Object的读写权限，其他用户只有该Object的读权限。请谨慎使用该权限。
- public-read-write：Object是公共读写资源。所有用户都有该Object的读写权限。请谨慎使用该权限。

关于访问权限的更多信息，请参见**[读写权限ACL](~~100676~~)**。',
            'required' => false,
            '$ref' => '#/components/schemas/ObjectACL',
          ),
        ),
        4 => 
        array (
          'name' => 'x-oss-storage-class',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定Object的存储类型。
对于任意存储类型的Bucket，如果上传Object时指定此参数，则此次上传的Object将存储为指定的类型。例如在IA类型的Bucket中上传Object时，如果指定**x-oss-storage-class**为Standard，则该Object直接存储为Standard。

取值：
- Standard：标准存储
- IA：低频访问
- Archive：归档存储

IA与Archive类型的单个Object大小如果不足64 KB，则会按64 KB计量计费。建议在使用PutSymlink接口时不要将Object的存储类型指定为IA或Archive。
关于存储类型的更多信息，请参见**[存储类型介绍](~~51374~~)**。',
            'required' => false,
            '$ref' => '#/components/schemas/StorageClass',
          ),
        ),
        5 => 
        array (
          'name' => 'x-oss-forbid-overwrite',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '指定PutSymlink操作时是否覆盖同名Object。
  - 不指定**x-oss-forbid-overwrite**或者指定**x-oss-forbid-overwrite**为**false**时，表示允许覆盖同名Object。
  - 指定**x-oss-forbid-overwrite**为**true**时，表示禁止覆盖同名Object。

设置**x-oss-forbid-overwrite**请求Header会导致QPS处理性能下降，如果您有大量的操作需要使用**x-oss-forbid-overwrite**请求Header（QPS>1000），请联系技术支持，避免影响您的业务。
> 当目标Bucket处于已开启或已暂停版本控制状态时，**x-oss-forbid-overwrite**请求Header设置无效，即允许覆盖同名Object。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建OSS目标文件的软链接',
      'description' => '**注意事项**

- 使用PutSymlink接口创建软链接时不会检查目标文件是否存在、目标文件类型是否合法以及目标文件是否有访问权限。
- Symlink自身的访问权限（ACL）以及目标文件的ACL检查仅会在GetObject等需要访问目标文件的API中进行。
- 使用PutSymlink接口时，携带以x-oss-meta-为前缀的参数，则被视为user meta，例如x-oss-meta-location。一个Object可以有多个类似的参数，但所有的user meta总大小不能超过8 KB。
- 默认情况下，如果试图添加的文件已经存在，并且有访问权限，则新添加的文件将覆盖原来的文件，成功添加后将返回200 OK。

**版本控制**

您可以通过TargetObject创建的软链接指向TargetObject的当前版本。
软链接本身也可以有多个版本，每个不同的版本可以指向不同的TargetObject，版本ID由OSS自动生成，在响应Header中返回x-oss-version-id。

',
    ),
    'GetSymlink' => 
    array (
      'summary' => '获取OSS目标文件（TargetObject）的软链接。',
      'path' => '/{key}?symlink',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取软链接的当前Object版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQNRiBgMClj7qD0BYiIDQ5Y2QyMjc3NGZkODRlMTU5M2VkY2U3MWRiNGRh****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-oss-symlink-target' => 
            array (
              'schema' => 
              array (
                'sdkPropertyName' => 'symlinkTargetKey',
                'type' => 'string',
              ),
            ),
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '获取软链接',
      'description' => '**版本控制**

GetSymlink接口默认获取软链接的当前版本。允许通过指定versionId来获取指定版本。如果软链接的当前版本为删除标记，OSS会返回404 Not Found，在响应header中返回x-oss-delete-marker = true以及版本ID : x-oss-version-id。删除标记没有关联数据，因此也没有软链接指向的TargetObject。

',
    ),
    'PutObjectTagging' => 
    array (
      'summary' => '设置或更新对象（Object）的标签（Tagging）信息。',
      'path' => '/{key}?tagging',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本对应的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQNRiBgMClj7qD0BYiIDQ5Y2QyMjc3NGZkODRlMTU5M2VkY2U3MWRiNGRh****',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存标签集合的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'Tagging' => 
              array (
                'description' => '标签集合。',
                'required' => false,
                '$ref' => '#/components/schemas/Tagging',
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
          'headers' => 
          array (
            'x-oss-version-id' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置或更新文件的标签信息',
      'description' => '**注意事项**

- 对象标签使用一组键值对（Key-Value）标记对象。
- 单个Object最多能设置10个标签，Key不能重复。
- 每个Key长度不能超过128字符，每个Value长度不能超过256字符。
- Key和Value区分大小写。
- 标签的合法字符集包括大小写字母、数字、空格和以下符号：
+‑=._:/
通过HTTP Header的方式设置标签且标签中包含任意字符时，您需要对标签的Key和Value进行URL编码。
- 更改标签信息不会更新Object的Last‑Modified时间。

关于对象标签的更多信息，请参见[对象标签](~~106678~~)。

**版本控制**

调用PutObjectTagging接口时，默认设置Object当前版本的标签信息。您可以通过指定versionId参数来设置指定Object版本的标签信息。如果Object的对应版本为删除标记（Delete Marker），则OSS将返回404 Not Found。',
    ),
    'GetObjectTagging' => 
    array (
      'summary' => '获取对象（Object）的标签（Tagging）信息。',
      'path' => '/{key}?tagging',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object的完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取的目标Object的版本号。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQExiBgID.jImWlxciIDQ2ZjgwODIyNDk5MTRhNzBiYmQwYTZkMTYzZjM0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存标签集合的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'Tagging' => 
              array (
                'description' => '保存标签集合的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'TagSet' => 
                  array (
                    'description' => '标签集合。',
                    '$ref' => '#/components/schemas/TagSet',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Tagging\\": {\\n    \\"TagSet\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取文件的标签信息',
      'description' => '**版本控制**

调用GetObjectTagging接口时，默认只能获取Object当前版本的标签信息。您可以通过指定versionId参数来获取指定Object版本的标签信息。如果Object的对应版本为删除标记（Delete Marker），则OSS将返回404 Not Found。

',
    ),
    'DeleteObjectTagging' => 
    array (
      'summary' => '删除指定对象（Object）的标签（Tagging）信息。',
      'path' => '/{key}?tagging',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'key',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Object完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'exampledir/exampleobject/txt',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除的Object的版本号。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAEQExiBgID.jImWlxciIDQ2ZjgwODIyNDk5MTRhNzBiYmQwYTZkMTYzZjM0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除对象的标签信息',
      'description' => '**版本控制**

调用DeleteObjectTagging接口时，默认只能删除Object当前版本的标签信息。您可以通过指定versionId参数来删除指定Object版本的标签信息。如果Object的对应版本为删除标记（Delete Marker），则OSS将返回404 Not Found。

',
    ),
    'PutLiveChannel' => 
    array (
      'summary' => '通过RTMP协议上传音视频数据前，必须先创建一个LiveChannel。',
      'path' => '/{channel}?live',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '频道名称。不能包含斜杠（/）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ChannelName',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'xml',
          'schema' => 
          array (
            'description' => '保存LiveChannel配置的请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'LiveChannelConfiguration' => 
              array (
                'description' => '保存LiveChannel配置的容器。',
                'required' => false,
                '$ref' => '#/components/schemas/LiveChannelConfiguration',
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
            'description' => '保存CreateLiveChannel请求结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'CreateLiveChannelResult' => 
              array (
                'description' => '保存CreateLiveChannel请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'PublishUrls' => 
                  array (
                    'description' => '保存推流地址的容器。',
                    '$ref' => '#/components/schemas/LiveChannelPublishUrls',
                  ),
                  'PlayUrls' => 
                  array (
                    'description' => '保存播放地址的容器。',
                    '$ref' => '#/components/schemas/LiveChannelPlayUrls',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CreateLiveChannelResult\\": {\\n    \\"PublishUrls\\": {\\n      \\"Url\\": \\"\\"\\n    },\\n    \\"PlayUrls\\": {\\n      \\"Url\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '创建直播推流',
      'description' => '通过RTMP协议上传音视频数据前，必须先调用该接口创建一个LiveChannel。调用该接口会返回RTMP推流地址，以及对应的播放地址。
<br>您可以使用返回的地址进行推流、播放，您还可以根据该LiveChannel的名称来发起相关的操作，如查询推流状态、查询推流记录、禁止推流等。
',
    ),
    'ListLiveChannel' => 
    array (
      'summary' => '列举指定的LiveChannel。',
      'path' => '/?live',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'channel-1',
          ),
        ),
        2 => 
        array (
          'name' => 'max-keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定此次返回LiveChannel的最大数。max-keys取值不能大于1000。
默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回的LiveChannel必须以prefix作为前缀。注意使用prefix查询时，返回的key中仍会包含prefix。',
            'type' => 'string',
            'required' => false,
            'example' => 'fun/',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存ListLiveChannel请求结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'ListLiveChannelResult' => 
              array (
                'description' => '保存ListLiveChannel请求结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Prefix' => 
                  array (
                    'description' => '本次查询结果的开始前缀。',
                    'type' => 'string',
                    'example' => 'Channel',
                  ),
                  'Marker' => 
                  array (
                    'description' => '本次ListLiveChannel的起点。',
                    'type' => 'string',
                    'example' => 'new',
                  ),
                  'MaxKeys' => 
                  array (
                    'description' => '响应请求内返回结果的最大数目。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'IsTruncated' => 
                  array (
                    'description' => '是否已返回所有的结果。

true：表示本次请求已返回全部结果。

false：表示本次请求未返回全部结果。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NextMarker' => 
                  array (
                    'description' => '如果本次没有返回全部结果，响应请求中将包含NextMarker元素，用于标明接下来请求的Marker值。',
                    'type' => 'string',
                    'example' => 'channel-0',
                  ),
                  'LiveChannel' => 
                  array (
                    'description' => '保存返回的LiveChannel信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存LiveChannel信息的容器。',
                      '$ref' => '#/components/schemas/LiveChannel',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ListLiveChannelResult\\": {\\n    \\"Prefix\\": \\"Channel\\",\\n    \\"Marker\\": \\"new\\",\\n    \\"MaxKeys\\": 20,\\n    \\"IsTruncated\\": true,\\n    \\"NextMarker\\": \\"channel-0\\",\\n    \\"LiveChannel\\": [\\n      {\\n        \\"Name\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Status\\": \\"\\",\\n        \\"LastModified\\": \\"\\",\\n        \\"PublishUrls\\": {\\n          \\"Url\\": \\"\\"\\n        },\\n        \\"PlayUrls\\": {\\n          \\"Url\\": \\"\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列举指定的直播推流',
    ),
    'DeleteLiveChannel' => 
    array (
      'summary' => '删除指定的LiveChannel。',
      'path' => '/{channel}?live',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定LiveChannel名称，该LiveChannel必须存在。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplechannel',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除指定的直播推流',
      'description' => '>- 当有客户端正在向LiveChannel推流时，删除请求会失败。
- 本接口只会删除LiveChannel本身，不会删除推流生成的文件。',
    ),
    'PutLiveChannelStatus' => 
    array (
      'summary' => '切换LiveChannel启用（enabled）和禁用（disabled）两种状态。',
      'path' => '/{channel}?live',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定LiveChannel名称，该LiveChannel必须存在。',
            'type' => 'string',
            'required' => true,
            'example' => 'exmplechannel',
          ),
        ),
        2 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置LiveChannel的Status。
有效值：
- enabled：启用LiveChannel
- disabled：禁用LiveChannel',
            'type' => 'string',
            'required' => true,
            'example' => 'enabled',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '切换直播推流状态',
      'description' => '- LiveChannel处于disabled状态时，OSS会禁止您向该LiveChannel进行推流操作。如果您正在向该LiveChannel推流，那么推流的客户端会被强制断开（会有10s左右的延迟）。
- 当没有客户端向该LiveChannel推流时，调用PutLiveChannelStatus重新创建LiveChannel也可以达到修改Status的目的。
- 当有客户端向该LiveChannel推流时，只能将LiveChannel的状态修改为disabled，无法调用PutLiveChannelStatus重新创建LiveChannel。',
    ),
    'GetLiveChannelInfo' => 
    array (
      'summary' => '获取指定LiveChannel的配置信息。',
      'path' => '/{channel}?live',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'exsmplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '频道名称。不能包含斜杠（/）。',
            'type' => 'string',
            'required' => true,
            'example' => 'channel_name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存GetLiveChannelInfo返回结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'LiveChannelConfiguration' => 
              array (
                'description' => '保存GetLiveChannelInfo返回结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Description' => 
                  array (
                    'description' => 'LiveChannel的描述信息。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Status' => 
                  array (
                    'description' => 'LiveChannel的状态信息。有效值：

enabled：启用状态

disabled：禁用状态',
                    'type' => 'string',
                    'example' => 'enabled',
                  ),
                  'Target' => 
                  array (
                    'description' => '保存LiveChannel转储配置的容器。',
                    '$ref' => '#/components/schemas/LiveChannelTarget',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LiveChannelConfiguration\\": {\\n    \\"Description\\": \\"test\\",\\n    \\"Status\\": \\"enabled\\",\\n    \\"Target\\": {\\n      \\"Type\\": \\"\\",\\n      \\"FragDuration\\": 0,\\n      \\"FragCount\\": 0,\\n      \\"PlaylistName\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取直播推流的配置信息',
    ),
    'GetLiveChannelHistory' => 
    array (
      'summary' => '获取指定LiveChannel的推流记录。',
      'path' => '/{channel}?live&comp=history',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'LiveChannel名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplechannel',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存GetLiveChannelHistory返回结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'LiveChannelHistory' => 
              array (
                'description' => '保存GetLiveChannelHistory返回结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveRecord' => 
                  array (
                    'description' => '保存推流记录信息的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '保存一次推流记录信息的容器。',
                      '$ref' => '#/components/schemas/LiveRecord',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LiveChannelHistory\\": {\\n    \\"LiveRecord\\": [\\n      {\\n        \\"StartTime\\": \\"\\",\\n        \\"EndTime\\": \\"\\",\\n        \\"RemoteAddr\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取直播推流的推流记录',
      'description' => '使用GetLiveChannelHistory接口最多会返回指定LiveChannel最近的10次推流记录。',
    ),
    'GetLiveChannelStat' => 
    array (
      'summary' => '获取指定LiveChannel的推流状态信息。',
      'path' => '/{channel}?live&comp=stat',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Livechannel名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplechannel',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '保存GetLiveChannelStat返回结果的响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'LiveChannelStat' => 
              array (
                'description' => '保存GetLiveChannelStat返回结果的容器。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => 'LiveChannel当前的推流状态描述。有效值：Disabled、Live、Idle。',
                    'type' => 'string',
                    'example' => 'Live',
                  ),
                  'ConnectedTime' => 
                  array (
                    'description' => '当Status为Live时，表示当前客户端开始推流的时间。此元素使用ISO8601格式表示。',
                    'type' => 'string',
                    'format' => 'iso8601',
                    'example' => '2016-08-25T06:25:15.000Z',
                  ),
                  'RemoteAddr' => 
                  array (
                    'description' => '当Status为Live时，表示当前推流客户端的IP地址。',
                    'type' => 'string',
                    'example' => '10.1.2.3:47745',
                  ),
                  'Video' => 
                  array (
                    'description' => '当Status为Live时，保存视频流信息的容器。

>Video、Audio容器只有在Status为Live时才会返回，但Status为Live时不一定返回这两个容器。例如，客户端已经连接到LiveChannel，但尚未发送音视频数据，这种情况不会返回这两个容器。',
                    '$ref' => '#/components/schemas/LiveChannelVideo',
                  ),
                  'Audio' => 
                  array (
                    'description' => '当Status为Live时，保存音频流信息的容器。

>Video、Audio容器只有在Status为Live时才会返回，但Status为Live时不一定返回这两个容器。例如，客户端已经连接到LiveChannel，但尚未发送音视频数据，这种情况不会返回这两个容器。',
                    '$ref' => '#/components/schemas/LiveChannelAudio',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LiveChannelStat\\": {\\n    \\"Status\\": \\"Live\\",\\n    \\"ConnectedTime\\": \\"2016-08-25T06:25:15.000Z\\",\\n    \\"RemoteAddr\\": \\"10.1.2.3:47745\\",\\n    \\"Video\\": {\\n      \\"Width\\": 0,\\n      \\"Height\\": 0,\\n      \\"FrameRate\\": 0,\\n      \\"Bandwidth\\": 0,\\n      \\"Codec\\": \\"\\"\\n    },\\n    \\"Audio\\": {\\n      \\"Bandwidth\\": 0,\\n      \\"SampleRate\\": 0,\\n      \\"Codec\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取直播推流的推流状态信息',
    ),
    'GetVodPlaylist' => 
    array (
      'summary' => '查看指定LiveChannel在指定时间段内推流生成的播放列表。',
      'path' => '/{channel}?vod',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/octet-stream',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定LiveChannel名称。该LiveChannel必须存在。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplechannel',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询ts文件的终止时间，格式为Unix timestamp。
> EndTime必须大于 StartTime，且时间跨度不能大于1天。',
            'type' => 'string',
            'required' => true,
            'example' => '1636618271',
          ),
        ),
        3 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询ts文件的起始时间，格式为Unix timestamp。',
            'type' => 'string',
            'required' => true,
            'example' => '1636600271',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '推流生成的播放列表。',
            'type' => 'string',
            'format' => 'binary',
            'example' => '#EXTM3U
#EXT-X-VERSION:3
#EXT-X-MEDIA-SEQUENCE:0
#EXT-X-TARGETDURATION:13
#EXTINF:7.120,
1543895706266.ts
#EXTINF:5.840,
1543895706323.ts
#EXTINF:6.400,
1543895706356.ts
#EXTINF:5.520,
1543895706389.ts
#EXTINF:5.240,
1543895706428.ts
#EXTINF:13.320,
1543895706468.ts
#EXTINF:5.960,
1543895706538.ts
#EXTINF:6.520,
1543895706561.ts
#EXT-X-ENDLIST',
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"\\"#EXTM3U\\\\n#EXT-X-VERSION:3\\\\n#EXT-X-MEDIA-SEQUENCE:0\\\\n#EXT-X-TARGETDURATION:13\\\\n#EXTINF:7.120,\\\\n1543895706266.ts\\\\n#EXTINF:5.840,\\\\n1543895706323.ts\\\\n#EXTINF:6.400,\\\\n1543895706356.ts\\\\n#EXTINF:5.520,\\\\n1543895706389.ts\\\\n#EXTINF:5.240,\\\\n1543895706428.ts\\\\n#EXTINF:13.320,\\\\n1543895706468.ts\\\\n#EXTINF:5.960,\\\\n1543895706538.ts\\\\n#EXTINF:6.520,\\\\n1543895706561.ts\\\\n#EXT-X-ENDLIST\\"","type":"json"}]',
      'title' => '查看直播推流的播放列表',
    ),
    'PostVodPlaylist' => 
    array (
      'summary' => '为指定的LiveChannel生成一个点播用的播放列表。',
      'path' => '/{channel}/{playlist}?vod',
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
      'consumes' => 
      array (
        0 => 'application/xml',
      ),
      'produces' => 
      array (
        0 => 'application/xml',
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
          'name' => 'bucket',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        1 => 
        array (
          'name' => 'channel',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定LiveChannel名称，该LiveChannel必须存在。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplechannel',
          ),
        ),
        2 => 
        array (
          'name' => 'playlist',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定生成的点播播放列表的名称，必须以“.m3u8”结尾。',
            'type' => 'string',
            'required' => true,
            'example' => 'playlist.m3u8',
          ),
        ),
        3 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询ts文件的终止时间。
格式：Unix timestamp
>EndTime必须大于StartTime，且时间跨度不能大于1天。',
            'type' => 'string',
            'required' => true,
            'example' => '1636618271',
          ),
        ),
        4 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询ts文件的起始时间，格式为Unix timestamp。',
            'type' => 'string',
            'required' => true,
            'example' => '1636600271',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '为直播推流生成点播的播放列表',
      'description' => 'OSS会查询指定时间范围内由该LiveChannel推流生成的ts文件，并将其拼装为一个m3u8播放列表。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'oss-cn-wuhan-lr.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'oss-cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'oss-cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'oss-cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'oss-cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'oss-cn-wulanchabu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'oss-cn-hangzhou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'oss-cn-shanghai.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'oss-cn-nanjing.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'oss-cn-fuzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'oss-cn-shenzhen.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'oss-cn-heyuan.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'oss-cn-guangzhou.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'oss-cn-chengdu.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'oss-cn-hongkong.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'oss-ap-northeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'oss-ap-northeast-2.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'oss-ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'oss-ap-southeast-2.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'oss-ap-southeast-3.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'oss-ap-southeast-5.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'oss-ap-southeast-6.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'oss-us-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'oss-us-west-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'oss-eu-west-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'oss-eu-central-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'oss-ap-south-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'oss-me-east-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'oss-cn-hzjbp-b-console.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'oss-cn-shanghai-finance-1-internal.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'oss-cn-shenzhen-finance-1-internal.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'oss-ap-southeast-7.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'oss-cn-beijing-finance-1-internal.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'foas',
    'version' => '2018-11-11',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 63763,
      'title' => '集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCluster',
        1 => 'CreateCellClusterOrder',
        2 => 'CreatePackage',
        3 => 'ModifyMasterSpec',
        4 => 'UpdateAutoScaleConfig',
        5 => 'GetClusterMetrics',
        6 => 'GetClusterQueueInfo',
        7 => 'GetClusterResource',
        8 => 'ListCluster',
        9 => 'GetClusterDetails',
        10 => 'GetClusterEngineVersions',
        11 => 'GetRawPlanJson',
        12 => 'ExpandCluster',
        13 => 'ShrinkCluster',
        14 => 'DestroyCluster',
      ),
    ),
    1 => 
    array (
      'id' => 63779,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceState',
        1 => 'GetInstanceConfig',
        2 => 'GetInstanceDetail',
        3 => 'GetInstanceExceptions',
        4 => 'GetInstanceFinalState',
        5 => 'GetInstanceHistoryAutoScalePlanContent',
        6 => 'GetInstanceHistoryAutoScalePlanList',
        7 => 'GetInstanceMetric',
        8 => 'GetInstanceResource',
        9 => 'GetInstanceRunSummary',
        10 => 'ListInstance',
        11 => 'GetInstance',
        12 => 'GetInstanceCheckpoint',
        13 => 'BatchGetInstanceRunSummary',
      ),
    ),
    2 => 
    array (
      'id' => 63794,
      'title' => '文件夹',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFolder',
        1 => 'DeleteFolder',
        2 => 'GetFolder',
        3 => 'ListChildFolder',
        4 => 'MVFolder',
      ),
    ),
    3 => 
    array (
      'id' => 63800,
      'title' => '资源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'UntagResources',
      ),
    ),
    4 => 
    array (
      'id' => 63804,
      'title' => 'Package',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeletePackage',
        1 => 'UpdatePackage',
        2 => 'GetRefPackageJob',
        3 => 'ListPackage',
      ),
    ),
    5 => 
    array (
      'id' => 63810,
      'title' => '项目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProject',
        1 => 'DeleteProject',
        2 => 'UpdateProject',
        3 => 'UpdateProjectConfig',
        4 => 'GetProject',
        5 => 'ListProject',
      ),
    ),
    6 => 
    array (
      'id' => 63817,
      'title' => '队列',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateQueue',
        1 => 'DeleteQueue',
        2 => 'UpdateQueue',
        3 => 'ListProjectBindQueue',
        4 => 'ListProjectBindQueueResource',
        5 => 'BindQueue',
        6 => 'UnbindQueue',
      ),
    ),
    7 => 
    array (
      'id' => 63825,
      'title' => '作业',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateJob',
        1 => 'DeleteJob',
        2 => 'StartJob',
        3 => 'UpdateJob',
        4 => 'GetJob',
        5 => 'ListJob',
        6 => 'GetJobLatestAutoScalePlan',
        7 => 'CommitJob',
        8 => 'OfflineJob',
        9 => 'ValidateJob',
        10 => 'CalcPlanJsonResource',
        11 => 'CheckRawPlanJson',
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
    'CreateCluster' => 
    array (
      'path' => '/api/v2/clusters',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地域',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'orderId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '购买订单生成的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'blinkonecs_1234',
          ),
        ),
        2 => 
        array (
          'name' => 'zoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域可用区号。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai-f',
          ),
        ),
        3 => 
        array (
          'name' => 'displayName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cluster_name',
          ),
        ),
        4 => 
        array (
          'name' => 'description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群描述。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cluster1',
          ),
        ),
        5 => 
        array (
          'name' => 'userOssBucket',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您OSS中Bucket名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '12345',
          ),
        ),
        6 => 
        array (
          'name' => 'userVpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您的集群所在VPC名称。
>实时计算和连通的上下游数据存储必须部署于同一个VPC，否则会造成数据无法连通的问题。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vpc-abcde',
          ),
        ),
        7 => 
        array (
          'name' => 'userVSwitch',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您指定的交换机名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-abcde',
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
                'description' => '集群ID',
                'type' => 'string',
                'example' => 'cmy99ugusuco66x9qc6k****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterId\\": \\"cmy99ugusuco66x9qc6k****\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9F1CAD8D-E80E-45AF-82D7-8314FE17A34A</RequestId>\\n<ClusterId>pgr1rnrdlry05mhsarcjs06q</ClusterId>","errorExample":""}]',
      'title' => '创建集群',
      'summary' => '提交实时计算服务独享模式购买订单后，创建集群。',
      'description' => '仅限独享模式支持CreateCluster。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCellClusterOrder' => 
    array (
      'path' => '/api/v2/realtime-compute/cell/buy',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集群所属region。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'payModel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例类型：
>- pre（包年包月）。
- post（按量计费）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'pre',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群所属region。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'masterSpec',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'master机器型号。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Ecs_4c16g',
          ),
        ),
        4 => 
        array (
          'name' => 'masterNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'master机器的数量，仅支持1台或者3台。
>- 您需要3台master才能有效保障服务SLA。
- 选择该参数后不支持修改。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        5 => 
        array (
          'name' => 'slaveSpec',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'slave机器型号，即计算节点。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Ecs_8c32g',
          ),
        ),
        6 => 
        array (
          'name' => 'slaveNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'slave机器数量，至少2台。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        7 => 
        array (
          'name' => 'period',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '仅pre（包年包月）填写，表示购买时间，最多可以购买12个月，单位是月。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '8',
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
              'OrderId' => 
              array (
                'description' => '订单号。',
                'type' => 'string',
                'example' => '285769237053',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便定位实时计算问题。',
                'type' => 'string',
                'example' => '0AF4C903-5164-4128-80FC-461ADCBC2E70',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"285769237053\\",\\n  \\"RequestId\\": \\"0AF4C903-5164-4128-80FC-461ADCBC2E70\\"\\n}","errorExample":""},{"type":"xml","example":"无","errorExample":""}]',
      'title' => '创建实时计算实例',
      'summary' => '创建一个实时计算的实例，仅限独享集群。',
      'description' => '**您可以通过API创建一个独享集群的实例**。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePackage' => 
    array (
      'path' => '/api/v2/projects/{projectName}/packages',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'packageName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'package1.jar',
          ),
        ),
        3 => 
        array (
          'name' => 'originName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package原名',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '12222',
          ),
        ),
        4 => 
        array (
          'name' => 'type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package类型：

- JAR：JAR包

- DICTIONARY：普通文件

- SCRIPT：脚本

- PYTHON：Python文件或者ZIP包',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'JAR',
          ),
        ),
        5 => 
        array (
          'name' => 'description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package的备注描述',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'md5',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package的MD5值',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '3F7468C153E529B141C326332DF15D05',
          ),
        ),
        7 => 
        array (
          'name' => 'ossEndpoint',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS接入点',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'oss-cn-hangzhou-internal.aliyuncs.com',
          ),
        ),
        8 => 
        array (
          'name' => 'ossBucket',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSSBucket',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'blinktest2.oss-cn-hangzhou-internal.aliyuncs.com',
          ),
        ),
        9 => 
        array (
          'name' => 'ossOwner',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS所有者',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'user1',
          ),
        ),
        10 => 
        array (
          'name' => 'ossPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package在OSS中的路径',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'path1/path2/a.jar',
          ),
        ),
        11 => 
        array (
          'name' => 'tag',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package的标记',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"function":"group by time"}',
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
                'example' => 'F85A9751-638B-4186-B5E5-3F66D8A1CBFE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F85A9751-638B-4186-B5E5-3F66D8A1CBFE\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F85A9751-638B-4186-B5E5-3F66D8A1CBFE</RequestId>","errorExample":""}]',
      'title' => '获取在OSS中创建的Package',
      'summary' => '获取在OSS中创建的Package，并将该Package传送到作业的执行节点。',
      'description' => '> - Package的版本信息由您自行维护，上传时可以选填MD5值，开发控制台协助校验。
- 共享集群用户无法使用CreatePackage。
- 独享集群用户只能使用创建集群时的OSS信息，填写时只需要填写ossPath，无需填写完整信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyMasterSpec' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/specification',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'masterTargetModel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Master机型变配的目标机器型号',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Ecs_4c16g',
          ),
        ),
        2 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '更改集群Master机型规格',
      'summary' => '更改集群Master机型的规格，实现Master机型的升配和降配。',
      'description' => '> ModifyMasterSpec仅支持在独享模式的按量付费模式下使用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAutoScaleConfig' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instance/{instanceId}/autoscale/config',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业实例ID。流作业填`-1`，批作业暂时不支持该API。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '403936',
          ),
        ),
        4 => 
        array (
          'name' => 'configJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置开启或者关闭。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"autoscale.enable":"true"}',
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
                'example' => 'A017B343-33DC-4A97-BAC5-4B57872D5B61',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A017B343-33DC-4A97-BAC5-4B57872D5B61\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A017B343-33DC-4A97-BAC5-4B57872D5B61</RequestId>\\n<Metrics>\\n    <metricName>et2hunbu.yarn.resourcemanager.jvmmetrics.MemHeapUsed</metricName>\\n    <dps>\\n        <1574244620>3675.839599609375</1574244620>\\n        <1574244640>3817.712646484375</1574244640>\\n        <1574244660>3864.84130859375</1574244660>\\n        <1574244680>3973.963134765625</1574244680>\\n        <1574244700>4121.57958984375</1574244700>\\n        <1574244720>4170.6123046875</1574244720>\\n        <1574244740>4279.62109375</1574244740>\\n        <1574244760>4427.05615234375</1574244760>\\n        <1574244780>4472.11474609375</1574244780>\\n    </dps>\\n    <summary>6700.7467978583445</summary>\\n    <tags/>\\n</Metrics>","errorExample":""}]',
      'title' => '更新 AutoScale 配置',
      'summary' => '您可以通过本API对开启AutoScale功能的作业进行AutoScale功能的关闭或者关闭后的再次开启。',
      'description' => 'UpdateAutoScaleConfig仅适用于使用AutoScale功能启动的作业，未使用AutoScale功能的作业不支持该API。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetClusterMetrics' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/metrics',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。<note>不是集群的名称。</note>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourClusterID',
          ),
        ),
        2 => 
        array (
          'name' => 'metricJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询Metric提交的JSON信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{ "end":1606291550061, "limit":"avg:sample:50", "queries":[ { "aggregator":"avg", "downsample":"avg", "granularity":"60s", "metric":"ClusterID.system.cpu.user" } ], "start":1606291390000 }',
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
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'Metrics' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Metric' => 
                  array (
                    'description' => 'Metric信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Tags' => 
                        array (
                          'description' => 'Metric标记。',
                          'type' => 'object',
                          'example' => 'k:v',
                        ),
                        'MetricName' => 
                        array (
                          'description' => 'Metric名称。',
                          'type' => 'string',
                          'example' => 'delay',
                        ),
                        'Summary' => 
                        array (
                          'description' => '聚合后的Metric值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10.2',
                        ),
                        'Dps' => 
                        array (
                          'description' => '时间点和对应的Metric值。',
                          'type' => 'object',
                          'example' => 'k:v',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"Metrics\\": {\\n    \\"Metric\\": [\\n      {\\n        \\"Tags\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"MetricName\\": \\"delay\\",\\n        \\"Summary\\": 10.2,\\n        \\"Dps\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A017B343-33DC-4A97-BAC5-4B57872D5B61</RequestId>\\n<Metrics>\\n    <metricName>et2hunbu.yarn.resourcemanager.jvmmetrics.MemHeapUsed</metricName>\\n    <dps>\\n        <1574244620>3675.839599609375</1574244620>\\n        <1574244640>3817.712646484375</1574244640>\\n        <1574244660>3864.84130859375</1574244660>\\n        <1574244680>3973.963134765625</1574244680>\\n        <1574244700>4121.57958984375</1574244700>\\n        <1574244720>4170.6123046875</1574244720>\\n        <1574244740>4279.62109375</1574244740>\\n        <1574244760>4427.05615234375</1574244760>\\n        <1574244780>4472.11474609375</1574244780>\\n    </dps>\\n    <summary>6700.7467978583445</summary>\\n    <tags/>\\n</Metrics>","errorExample":""}]',
      'title' => '获取集群资源分配状况',
      'summary' => '获取集群的CPU、存储或YARN的资源分配状况等信息。仅支持独享模式。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetClusterQueueInfo' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/queueinfo',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'h6272cj4etgqe7oets4s****',
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
                'example' => 'DACD3B42-5977-4293-B5A8-197A33A954BB',
              ),
              'Queues' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Queue' => 
                  array (
                    'description' => '返回Queues详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MaxMem' => 
                        array (
                          'description' => '内存最大值（MB）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '24576',
                        ),
                        'MinGpu' => 
                        array (
                          'description' => '最小GPU。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MinVCore' => 
                        array (
                          'description' => '最小Vcore数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '599',
                        ),
                        'ExternalInfo' => 
                        array (
                          'description' => '未转换为INTEGER时的原始信息。
> - 仅在`aliyun-java-sdk-foas 2.7.0`及以上版本返回ExternalInfo。
-  Integer类型返回-9999时，表示该数值超过Integer能表示的大小，请从ExternalInfo中取值。
',
                          'type' => 'string',
                          'example' => '{\\"minGpu\\":0,\\"maxGpu\\":0,\\"name\\":\\"root.cloudpay_dev\\",\\"minMem\\":24535,\\"usedVCore\\":50,\\"usedGpu\\":0,\\"usedMem\\":2816,\\"minVCore\\":599,\\"maxVCore\\":600,\\"maxMem\\":24576}',
                        ),
                        'UsedGpu' => 
                        array (
                          'description' => '已使用GPU。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'UsedMem' => 
                        array (
                          'description' => '已使用内存（MB）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2816',
                        ),
                        'QueueName' => 
                        array (
                          'description' => '队列名称。',
                          'type' => 'string',
                          'example' => 'root.cloudpay_dev',
                        ),
                        'MaxGpu' => 
                        array (
                          'description' => '最大GPU。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'UsedVCore' => 
                        array (
                          'description' => '已使用Vcore。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '50',
                        ),
                        'MinMem' => 
                        array (
                          'description' => '最小内存数（MB）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '24535',
                        ),
                        'MaxVCore' => 
                        array (
                          'description' => '最大Vcore数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '599',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID。
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
                          'type' => 'string',
                          'example' => 'h6272cj4etgqe7oets4s****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DACD3B42-5977-4293-B5A8-197A33A954BB\\",\\n  \\"Queues\\": {\\n    \\"Queue\\": [\\n      {\\n        \\"MaxMem\\": 24576,\\n        \\"MinGpu\\": 0,\\n        \\"MinVCore\\": 599,\\n        \\"ExternalInfo\\": \\"{\\\\\\\\\\\\\\"minGpu\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"maxGpu\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"root.cloudpay_dev\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"minMem\\\\\\\\\\\\\\":24535,\\\\\\\\\\\\\\"usedVCore\\\\\\\\\\\\\\":50,\\\\\\\\\\\\\\"usedGpu\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"usedMem\\\\\\\\\\\\\\":2816,\\\\\\\\\\\\\\"minVCore\\\\\\\\\\\\\\":599,\\\\\\\\\\\\\\"maxVCore\\\\\\\\\\\\\\":600,\\\\\\\\\\\\\\"maxMem\\\\\\\\\\\\\\":24576}\\",\\n        \\"UsedGpu\\": 0,\\n        \\"UsedMem\\": 2816,\\n        \\"QueueName\\": \\"root.cloudpay_dev\\",\\n        \\"MaxGpu\\": 0,\\n        \\"UsedVCore\\": 50,\\n        \\"MinMem\\": 24535,\\n        \\"MaxVCore\\": 599,\\n        \\"ClusterId\\": \\"h6272cj4etgqe7oets4s****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DACD3B42-5977-4293-B5A8-197A33A954BB</RequestId>\\n<Queues>\\n    <Queue>\\n        <MaxMem>24576</MaxMem>\\n        <UsedGpu>0</UsedGpu>\\n        <ExternalInfo>{\\"minGpu\\":0,\\"maxGpu\\":0,\\"name\\":\\"root.cloudpay_dev\\",\\"minMem\\":24535,\\"usedVCore\\":50,\\"usedGpu\\":0,\\"usedMem\\":2816,\\"minVCore\\":599,\\"maxVCore\\":600,\\"maxMem\\":24576}</ExternalInfo>\\n        <UsedMem>2816</UsedMem>\\n        <ClusterId>h6272cj4etgqe7oets4s****</ClusterId>\\n        <MinGpu>0</MinGpu>\\n        <MaxVCore>600</MaxVCore>\\n        <MinVCore>599</MinVCore>\\n        <MaxGpu>0</MaxGpu>\\n        <MinMem>24535</MinMem>\\n        <QueueName>root.cloudpay_dev</QueueName>\\n        <UsedVCore>50</UsedVCore>\\n    </Queue>\\n</Queues>","errorExample":""}]',
      'title' => '查询集群上已存在的Queue的信息',
      'summary' => '您可以通过GetClusterQueueInfo查询集群上已存在的Queue的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetClusterResource' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/resource',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
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
                'example' => '1F721BC4-6298-42BB-9289-794E7B0349B9',
              ),
              'Resource' => 
              array (
                'description' => '资源详情',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalMB' => 
                  array (
                    'description' => '集群总内存',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '24576',
                  ),
                  'AllocatedVirtualCores' => 
                  array (
                    'description' => '已使用的VCore数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '250',
                  ),
                  'AllocatedMB' => 
                  array (
                    'description' => '已使用的内存',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10496',
                  ),
                  'AvailableMB' => 
                  array (
                    'description' => '可使用的内存',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '14080',
                  ),
                  'TotalVirtualCores' => 
                  array (
                    'description' => '集群总VCore数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '600',
                  ),
                  'AvailableVirtualCores' => 
                  array (
                    'description' => '可使用的VCore数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '350',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1F721BC4-6298-42BB-9289-794E7B0349B9\\",\\n  \\"Resource\\": {\\n    \\"TotalMB\\": 24576,\\n    \\"AllocatedVirtualCores\\": 250,\\n    \\"AllocatedMB\\": 10496,\\n    \\"AvailableMB\\": 14080,\\n    \\"TotalVirtualCores\\": 600,\\n    \\"AvailableVirtualCores\\": 350\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1F721BC4-6298-42BB-9289-794E7B0349B9</RequestId>\\n<Resource>\\n    <TotalVirtualCores>600</TotalVirtualCores>\\n    <AllocatedMB>10496</AllocatedMB>\\n    <AllocatedVirtualCores>250</AllocatedVirtualCores>\\n    <AvailableVirtualCores>350</AvailableVirtualCores>\\n    <TotalMB>24576</TotalMB>\\n    <AvailableMB>14080</AvailableMB>\\n</Resource>","errorExample":""}]',
      'title' => '查看集群总资源和当前已使用的资源情况',
      'summary' => '您可以通过GetClusterResource OpenAPI查看集群总资源和当前已使用的资源情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListCluster' => 
    array (
      'path' => '/api/v2/clusters',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'rulpqd442sgxbtw9736r****',
          ),
        ),
        2 => 
        array (
          'name' => 'displayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'demo',
          ),
        ),
        3 => 
        array (
          'name' => 'state',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群状态：
- STARTING： 集群创建中
- EXPANDING：集群扩容中（增加Slave机型台数）
- UPGRADING ：集群变配中（提高或者降低Master）
- DESTROYING ：集群注销中
- DESTROYED ：集群已销毁
- REDUCING：集群缩容中（减少Slave机型台数）
- MAINTAINING：集群维护中',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'RUNNING',
          ),
        ),
        4 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群所属地区',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-beijing',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的集群数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'pageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询的页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
              'PageIndex' => 
              array (
                'description' => '指定查询的页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的集群数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10C4F123-351D-4D2B-94A4-D6FF456AEA6E',
              ),
              'TotalCount' => 
              array (
                'description' => '总集群数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'Clusters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Cluster' => 
                  array (
                    'description' => '集群详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisplayName' => 
                        array (
                          'description' => '集群名称',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'Description' => 
                        array (
                          'description' => '集群备注',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'State' => 
                        array (
                          'description' => '集群状态：
- STARTING： 集群创建中
- EXPANDING：集群扩容中（增加Slave机型台数）
- UPGRADING ：集群变配中（提高或者降低Master）
- DESTROYING ：集群注销中
- DESTROYED ：集群已销毁
- REDUCING：集群缩容中（减少Slave机型台数）
- MAINTAINING：集群维护中',
                          'type' => 'string',
                          'example' => 'RUNNING',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '集群VPC创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1605609438000',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用地域ID',
                          'type' => 'string',
                          'example' => 'cn-beijing-e',
                        ),
                        'Operator' => 
                        array (
                          'description' => '集群最后操作者UID',
                          'type' => 'string',
                          'example' => '27395716024545****',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '集群VPC修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1605610377000',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '集群拥有者UID',
                          'type' => 'string',
                          'example' => '107992689699****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '集群所属地区',
                          'type' => 'string',
                          'example' => 'cn-beijing',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID',
                          'type' => 'string',
                          'example' => 'rulpqd442sgxbtw9736r****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"TotalPage\\": 10,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"10C4F123-351D-4D2B-94A4-D6FF456AEA6E\\",\\n  \\"TotalCount\\": 3,\\n  \\"Clusters\\": {\\n    \\"Cluster\\": [\\n      {\\n        \\"DisplayName\\": \\"demo\\",\\n        \\"Description\\": \\"demo\\",\\n        \\"State\\": \\"RUNNING\\",\\n        \\"GmtCreate\\": 1605609438000,\\n        \\"ZoneId\\": \\"cn-beijing-e\\",\\n        \\"Operator\\": \\"27395716024545****\\",\\n        \\"GmtModified\\": 1605610377000,\\n        \\"OwnerId\\": \\"107992689699****\\",\\n        \\"RegionId\\": \\"cn-beijing\\",\\n        \\"ClusterId\\": \\"rulpqd442sgxbtw9736r****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>3</TotalCount>\\n<TotalPage>1</TotalPage>\\n<PageSize>10</PageSize>\\n<RequestId>10C4F123-351D-4D2B-94A4-D6FF456AEA6E</RequestId>\\n<Clusters>\\n    <Cluster>\\n        <Operator>27395716024545****</Operator>\\n        <GmtCreate>1605609438000</GmtCreate>\\n        <Description>demo</Description>\\n        <ZoneId>cn-beijing-e</ZoneId>\\n        <OwnerId>107992689699****</OwnerId>\\n        <ClusterId>rulpqd442sgxbtw9736r****</ClusterId>\\n        <State>RUNNING</State>\\n        <DisplayName>demo</DisplayName>\\n        <GmtModified>1605610377000</GmtModified>\\n        <RegionId>cn-beijing</RegionId>\\n    </Cluster>\\n    <Cluster>\\n        <Operator>23996037709276****</Operator>\\n        <GmtCreate>1597654146000</GmtCreate>\\n        <Description>test</Description>\\n        <ZoneId>cn-hangzhou-f</ZoneId>\\n        <OwnerId>107992689699****</OwnerId>\\n        <ClusterId>rcmp9x37ztfb63g1x7lt****</ClusterId>\\n        <State>RUNNING</State>\\n        <DisplayName>niuna</DisplayName>\\n        <GmtModified>1601051659000</GmtModified>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Cluster>\\n</Clusters>\\n<PageIndex>1</PageIndex>","errorExample":""}]',
      'title' => '查询已拥有的集群信息',
      'summary' => '您可以通过ListCluster OpenAPI查询集群信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetClusterDetails' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/details',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
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
                'example' => 'A35C7747-AE0B-4688-AD84-82CAAD512FD3',
              ),
              'Details' => 
              array (
                'description' => '集群配置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceInfos' => 
                  array (
                    'description' => '集群Master机型和Slave机型的相关信息，包括实例ID，ENI，IP和机器型号等。',
                    'type' => 'string',
                    'example' => '{k:v}',
                  ),
                  'UserOssInfo' => 
                  array (
                    'description' => '您的OSS信息。以JSO形式返回，包括Bucket，Endpoint等。',
                    'type' => 'string',
                    'example' => '{\\"endpoint\\":\\"oss-cn-shanghai.aliyuncs.com\\",\\"vpcEndpoint\\":\\"oss-cn-shanghai-internal.aliyuncs.com\\",\\"oxsEndpoint\\":\\"oss-cn-shanghai-internal.aliyuncs.com\\",\\"accessId\\":null,\\"accessKey\\":null,\\"bucket\\":\\"flink-test-oss-beijing\\"}',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '集群名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'UserVpcId' => 
                  array (
                    'description' => 'VPC ID。',
                    'type' => 'string',
                    'example' => 'vpc-uf6aq156h1gy06dzf****',
                  ),
                  'State' => 
                  array (
                    'description' => '集群状态：
- 集群创建中 ：STARTING。
- 集群扩容中（增加Slave机型台数）： EXPANDING。
- 集群变配中（提高或者降低Master型号） ：UPGRADING。
- 集群注销中 ：DESTROYING。
- 集群已销毁 ：DESTROYED。
- 集群缩容中（减少Slave机型台数）：REDUCING。
- 集群维护中：MAINTAINING。',
                    'type' => 'string',
                    'example' => 'STARTING',
                  ),
                  'UserSGId' => 
                  array (
                    'description' => '安全组ID。',
                    'type' => 'string',
                    'example' => 'sg-abcd',
                  ),
                  'StorageType' => 
                  array (
                    'description' => '存储类型。',
                    'type' => 'string',
                    'example' => 'HDFS',
                  ),
                  'GmtModified' => 
                  array (
                    'description' => '集群VPC修改时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1612693397000',
                  ),
                  'UserVSwitchList' => 
                  array (
                    'description' => '您的VSW列表。',
                    'type' => 'string',
                    'example' => '[\\"vsw-uf6v128q9khll8e9ucyhj\\"]',
                  ),
                  'OwnerId' => 
                  array (
                    'description' => '集群拥有者UID。',
                    'type' => 'string',
                    'example' => '137677185440****',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '区域ID。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                  'IsMixDeploy' => 
                  array (
                    'description' => '是否为混部集群（存在多种型号Slave机型）。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Description' => 
                  array (
                    'description' => '集群描述。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '集群VPC创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1612693397000',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用地域ID。',
                    'type' => 'string',
                    'example' => 'cn-shanghai-f',
                  ),
                  'Operator' => 
                  array (
                    'description' => '集群最后操作人UID。',
                    'type' => 'string',
                    'example' => '137677185440****',
                  ),
                  'ClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => '7cmedvslzs8q9n7pkfx5****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A35C7747-AE0B-4688-AD84-82CAAD512FD3\\",\\n  \\"Details\\": {\\n    \\"InstanceInfos\\": \\"{k:v}\\",\\n    \\"UserOssInfo\\": \\"{\\\\\\\\\\\\\\"endpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss-cn-shanghai.aliyuncs.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"vpcEndpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss-cn-shanghai-internal.aliyuncs.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"oxsEndpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss-cn-shanghai-internal.aliyuncs.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"accessId\\\\\\\\\\\\\\":null,\\\\\\\\\\\\\\"accessKey\\\\\\\\\\\\\\":null,\\\\\\\\\\\\\\"bucket\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"flink-test-oss-beijing\\\\\\\\\\\\\\"}\\",\\n    \\"DisplayName\\": \\"test\\",\\n    \\"UserVpcId\\": \\"vpc-uf6aq156h1gy06dzf****\\",\\n    \\"State\\": \\"STARTING\\",\\n    \\"UserSGId\\": \\"sg-abcd\\",\\n    \\"StorageType\\": \\"HDFS\\",\\n    \\"GmtModified\\": 1612693397000,\\n    \\"UserVSwitchList\\": \\"[\\\\\\\\\\\\\\"vsw-uf6v128q9khll8e9ucyhj\\\\\\\\\\\\\\"]\\",\\n    \\"OwnerId\\": \\"137677185440****\\",\\n    \\"RegionId\\": \\"cn-shanghai\\",\\n    \\"IsMixDeploy\\": false,\\n    \\"Description\\": \\"test\\",\\n    \\"GmtCreate\\": 1612693397000,\\n    \\"ZoneId\\": \\"cn-shanghai-f\\",\\n    \\"Operator\\": \\"137677185440****\\",\\n    \\"ClusterId\\": \\"7cmedvslzs8q9n7pkfx5****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Details>\\n    <Operator>137677185440****</Operator>\\n    <UserOssInfo>{\\"endpoint\\":\\"oss-cn-shanghai.aliyuncs.com\\",\\"vpcEndpoint\\":\\"oss-cn-shanghai-internal.aliyuncs.com\\",\\"oxsEndpoint\\":\\"oss-cn-shanghai-internal.aliyuncs.com\\",\\"accessId\\":null,\\"accessKey\\":null,\\"bucket\\":\\"flink-test-oss-beijing\\"}</UserOssInfo>\\n    <Description>test</Description>\\n    <StorageType>HDFS</StorageType>\\n    <ZoneId>cn-shanghai-f</ZoneId>\\n    <UserVSwitchList>[\\"vsw-uf6v128q9khll8e9ucyhj\\"]</UserVSwitchList>\\n    <ClusterId>7cmedvslzs8q9n7pkfx5****</ClusterId>\\n    <IsMixDeploy>false</IsMixDeploy>\\n    <GmtModified>1612693397000</GmtModified>\\n    <GmtCreate>1612693397000</GmtCreate>\\n    <OwnerId>137677185440****</OwnerId>\\n    <State>STARTING</State>\\n    <UserVpcId>vpc-uf6aq156h1gy06dzf****</UserVpcId>\\n    <DisplayName>test</DisplayName>\\n    <RegionId>cn-shanghai</RegionId>\\n</Details>\\n<RequestId>A35C7747-AE0B-4688-AD84-82CAAD512FD3</RequestId>","errorExample":""}]',
      'title' => '获取集群详情',
      'summary' => '获取集有集群的集群详细配置信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetClusterEngineVersions' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/engineversions',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
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
                'example' => '7203295B-3726-4BEF-B3E1-9EE33BF2FECF',
              ),
              'EngineVersions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'EngineVersion' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '引擎版本',
                      'type' => 'string',
                      'example' => 'current--blink-3.4.4',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7203295B-3726-4BEF-B3E1-9EE33BF2FECF\\",\\n  \\"EngineVersions\\": {\\n    \\"EngineVersion\\": [\\n      \\"current--blink-3.4.4\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7203295B-3726-4BEF-B3E1-9EE33BF2FECF</RequestId>\\n<EngineVersions>\\n    <EngineVersion>current--blink-3.4.4</EngineVersion>\\n</EngineVersions>","errorExample":""}]',
      'title' => '获取集群上可使用的引擎版本号',
      'summary' => '您可以通过GetClusterEngineVersions OpenAPI获取集群上可使用的引擎版本号。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetRawPlanJson' => 
    array (
      'summary' => '获取作业原始执行计划。',
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/planjson',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'autoconfEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启智能调优，开启或根据作业历史metric，生成一份执行计划；不开启则使用默认执行计划',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'expectedCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '期望cpu数',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1',
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'expectedGB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '期望内存',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '4',
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'AdvisorAction',
          'in' => 'query',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'SessionId' => 
              array (
                'description' => '会话ID，需要传入checkrowplanjson接口中配合使用',
                'type' => 'string',
                'example' => 'xxxxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SessionId\\": \\"xxxxxx\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取原始执行计划',
      'description' => '通过本接口在作业上线时可以智能获取最佳的执行计划',
    ),
    'ExpandCluster' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/expand',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'model',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '机器型号

> 扩容机型必须和已有Slave机型一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'Ecs_4c16g',
          ),
        ),
        2 => 
        array (
          'name' => 'count',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩容后的机器台数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        3 => 
        array (
          'name' => 'userVSwitch',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交换机名称
> 扩容提示vSwitch不足时，需要填写该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-abcd',
          ),
        ),
        4 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '对已有集群进行Slave机型的扩容',
      'summary' => '您可以通过ExpandCluster OpenAPI对已有集群进行Slave机型的扩容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ShrinkCluster' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/shrink',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceIds',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '机器实例ID，代表你要缩容的机器是哪台，多个逗号分割',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxx',
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6knqms',
          ),
        ),
        3 => 
        array (
          'name' => 'modelTargetCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '缩容后保留slave的台数，需要大于等于2',
            'type' => 'string',
            'required' => false,
            'example' => '2',
            'docRequired' => false,
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
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '集群缩容',
      'summary' => '可以减少集群slave台数，仅限独享模式后付费集群。',
      'description' => '调用本API，可以减少集群slave台数，仅限独享模式后付费集群，用户可以选择填写机器的实例ID来缩容某台机器，也可以只填写数量，随机为你将集群的slave缩容到该数量',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DestroyCluster' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '注销集群',
      'summary' => '注销集群，集群注销后不再产生费用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceState' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/expectstate',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID：

- 流作业：填写实际运行的实例ID或直接填写-1（当前运行的实例）。

- 批作业：可以通过ListInstance、StartJob等接口获得。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'expectState',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望状态：

- RUNNING：运行中。

- PAUSED：暂停。

- TERMINATED：停止。

- SUCCESS：成功（批作业）。

- FAILED：失败（流作业）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RUNNING',
          ),
        ),
        5 => 
        array (
          'name' => 'isFlush',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '在恢复作业时，是否使用最新配置。默认值为true。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'triggerCheckpoint',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '在暂停或者停止作业时，是否进行一次Checkpoint。

> Blink 3.5.0及以上版本支持该参数。',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EA0059FA-FD69-4A83-B216-6B36B03129A7',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EA0059FA-FD69-4A83-B216-6B36B03129A7\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>EA0059FA-FD69-4A83-B216-6B36B03129A7</requestId>","errorExample":""}]',
      'title' => '修改实例状态',
      'summary' => '修改运行实例的状态，实现对实例的操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetInstanceConfig' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/config',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
              'Config' => 
              array (
                'description' => '作业运行的相关参数',
                'type' => 'string',
                'example' => '{a:b}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Config\\": \\"{a:b}\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取作业运行参数',
      'summary' => '获取作业实例运行时的具体参数。',
      'description' => '通过本APi可以获取到运行实例的运行相关参数，返回值Config中是kv对，可以提取自己想要的运行参数。对于没有运行的作业调用本方法会报错',
    ),
    'GetInstanceDetail' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/details',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
              'Detail' => 
              array (
                'description' => '作业运行的DAG信息',
                'type' => 'string',
                'example' => '{a:b}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Detail\\": \\"{a:b}\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取实例运行的DAG图',
      'summary' => '获取实例运行的DAG图。',
      'description' => '使用本API可以获得运行实例的DAG图，以json的形式返回；获取未运行的实例的DAG图会报错',
    ),
    'GetInstanceExceptions' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/exceptions',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
              'Exceptions' => 
              array (
                'description' => 'failover的具体信息',
                'type' => 'string',
                'example' => 'xxxxerror ',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Exceptions\\": \\"xxxxerror \\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取运行实例的 Failover 信息',
      'summary' => '获取运行实例的failover信息。',
      'description' => '**1**',
    ),
    'GetInstanceFinalState' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/finalstate',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-pre ',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
              'Finalstate' => 
              array (
                'description' => 'yarn上的最终状态',
                'type' => 'string',
                'example' => 'RUNNING',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Finalstate\\": \\"RUNNING\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取运行实例最终状态',
      'summary' => '获取运行实例在yarn上的最终状态。',
      'description' => '使用本API可以查看运行实例在yarn上的最终状态',
    ),
    'GetInstanceHistoryAutoScalePlanContent' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instance/{instanceId}/autoscale/plancontent',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业实例ID。流作业填写-1，批作业不支持使用。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'planName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动调优某次PlanJson的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2018-09-18 10:10:20',
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
              'PlanContent' => 
              array (
                'description' => 'PlanJson的详细内容。',
                'type' => 'string',
                'example' => '{k:v}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6C799EEF-1DD8-4C55-961C-3B9D55A87AE6',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PlanContent\\": \\"{k:v}\\",\\n  \\"RequestId\\": \\"6C799EEF-1DD8-4C55-961C-3B9D55A87AE6\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6C799EEF-1DD8-4C55-961C-3B9D55A87AE6</RequestId>\\n<Message>Specified parameter instanceId is not valid.</Message>\\n<Recommend>https://error-center.aliyun.com/status/search?Keyword=InvalidinstanceId&amp;source=PopGw</Recommend>\\n<HostId>foas.cn-shanghai.aliyuncs.com</HostId>\\n<Code>InvalidinstanceId</Code>","errorExample":""}]',
      'title' => '获取作业自动调优PlanJson内容',
      'summary' => '您可以通过GetInstanceHistoryAutoScalePlanContent查看到历史调优某次PlanJson的详细内容，需要和获取作业历史调优PlanJson列表配合使用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetInstanceHistoryAutoScalePlanList' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instance/{instanceId}/autoscale/planlist',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业实例ID。流作业参数值是`-1`，批作业暂不支持。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
                'example' => '9C010057-9F22-45DC-A415-4E4E53181E5E',
              ),
              'PlanList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Plan' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自动调优作业历史Plan名称。',
                      'type' => 'string',
                      'example' => '[planA,planB]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9C010057-9F22-45DC-A415-4E4E53181E5E\\",\\n  \\"PlanList\\": {\\n    \\"Plan\\": [\\n      \\"[planA,planB]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9C010057-9F22-45DC-A415-4E4E53181E5E</RequestId>","errorExample":""}]',
      'title' => '获取作业自动调优PlanJson列表',
      'summary' => '您可以通过GetInstanceHistoryAutoScalePlanList获取作业自动调优PlanJson列表。配合GetInstanceHistoryAutoScalePlanContent接口可以定位到指定的PlanJson。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetInstanceMetric' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/metric',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地域ID

> GetInstanceMetric',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'InstanceID。流作业和批作业对应的实例ID如下：
- 流作业：只有一个运行实例，此处填`-1L`，指在线上运行的。
- 批作业：可以通过`ListInstance`接口或者`Startjob`接口获得。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'metricJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '使用特定JSON来获取Metric：
- start：Metric开始时间。使用13位时间戳，精确到毫秒。
- limit：取各条线值类型：max、avg和min。取值：bottom、above和sample。
- end：Metric结束时间。使用13位时间戳，精确到毫秒。
- downsample：采样方式时间（秒）。取值：max、avg和min。
- metric：blink.项目名称.作业名称.指标名称。常用指标名称例如：业务延时（delay）。
- granularity：采样时间，每隔多少秒取一个点。需要根据start和end的进行计算。采集时间点太多会造成调用超时。
- aggregator：聚合方式。按照采样时间将底层的点聚合后输出为一个点。聚合方式有最大值max，最小值min和平均值avg。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"start":1606291390000,"end":1606294626216,"limit":"avg:sample:50","queries":[{"downsample":"20s-avg","metric":"blink.projectName.jobName.task_failover.rate","granularity":"20s","aggregator":"max"}]}',
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
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'Metrics' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Metric' => 
                  array (
                    'description' => 'Metric信息详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Tags' => 
                        array (
                          'description' => 'Metric标记',
                          'type' => 'object',
                          'example' => 'k:v',
                        ),
                        'MetricName' => 
                        array (
                          'description' => 'Metric名称',
                          'type' => 'string',
                          'example' => 'delay',
                        ),
                        'Summary' => 
                        array (
                          'description' => '聚合后的Metric值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10.2',
                        ),
                        'Dps' => 
                        array (
                          'description' => '时间点和对应的Metric值',
                          'type' => 'object',
                          'example' => 'k:v',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"Metrics\\": {\\n    \\"Metric\\": [\\n      {\\n        \\"Tags\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"MetricName\\": \\"delay\\",\\n        \\"Summary\\": 10.2,\\n        \\"Dps\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>4D7AB7CF-4EF2-4635-9137-51803CD71DAD</requestId>\\n<metrics>\\n    <metricName>blink.bayes_team.ss2.delay</metricName>\\n    <dps>\\n        <1574247000>4.929E+8</1574247000>\\n        <1574247600>4.9350016E+8</1574247600>\\n        <1574248200>494100352</1574248200>\\n        <1574248800>494700544</1574248800>\\n        <1574249400>495300736</1574249400>\\n        <1574250000>495900896</1574250000>\\n    </dps>\\n    <summary>494400448</summary>\\n    <tags/>\\n</metrics>","errorExample":""}]',
      'title' => '获取正在运行实例的所有Metric信息',
      'summary' => '您可以通过GetInstanceMetric获取正在运行实例的所有Metric信息。',
      'description' => '使用GetInstanceMetric调用未运行的实例的Metric时，会产生报错。`metricJson`参数的详细请参见[opentsdb标准协议](http://opentsdb.net/docs/build/html/api_http/query/index.html?highlight=query)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## Metric名称对应表
|参数名称|指标名称|
|-----|------|
|业务延时（ms）|`delay`|
|数据滞留时间（ms）|`fetched_delay`|
|数据间隔时间（ms）|`no_data_delay` |
|作业失败率|`task_failover.rate`|
|Source的tps数据输入|`tps.rate`|
|Sink的数据输出|`sink.outTps.rate`|
|Source的RPS数据输出|`parserTps.rate`|
|Source的数据流量输入（byte）|`inBps.rate`|
|Source的脏数据比例|`parserSkipCount`|
|Checkpoint Duration（ms）|`lastCheckpointDuration`|
|Checkpoint大小（byte）|`lastCheckpointSize`|
|checkpoint对齐时间（ns）|`checkpointAlignmentTime`|
|checkpoint数量|`checkpoints`|
|获取state的时间（ns）|`rocksdb_get.mean`|
|写入state的时间（ns）|`rocksdb_put.mean`|
|seek（ns）|`niagara_seek.meam / rocksdb_seek.mean`|
|state大小（byte）|`state.state_size / state.state_newsize`|
|GMS GC Time（ms）|`Status.JVM.GarbageCollector.ConcurrentMarkSweep.Time`|
|GMS GC Rate|`Status.JVM.GarbageCollector.ConcurrentMarkSweep.Count`|
|WaterMark Delay（ms）|`watermarkLatency`|
|数据迟到丢弃TPS|`lateRecordsDroppedRate`|
|数据迟到累计丢弃数|`numLateRecordsDropped`|
|读TT延时（ms）|`input.tt.readLatency`|
|Task Input TPS|`numRecordsInPerSecond.rate`|
|Task Output TPS|`numRecordsOutPerSecond.rate`|
|Input Queue Usage|`buffers.inPoolUsage`|
|Output Queue Usage|`buffers.outPoolUsage`|
|Time Used In Processing Per Second（ns）|`taskLatency.sum`|
|Time Used In Waiting Oputput Per Second（ns）|`waitOutput.sum`|
|TaskLatency Histogram Mean（ns）|`taskLatency.histogram.mean`|
|WaitOutput Histogram Mean（ns）|`waitOutput.histogram.mean`|
|WaitInput Histogram Mean（ns）|`waitInput.histogram.mean`|
|PartitionLatency Mean（ns）|`partitionLatency.mean`|
|Process MEM Rss（kb）|`Status.JVM.Memory.Process.rss`|
|CPU Usage|`Status.JVM.CPU.Usage`|
|Memory Heap Used（byte）|`Status.JVM.Memory.Heap.Used`|
|Memory NonHeap Used（byte）|`Status.JVM.Memory.NonHeap.Used`|
|Threads Count|`Status.JVM.Threads.Count`|
|GC(CMS)|`Status.JVM.GarbageCollector.ConcurrentMarkSweep.Count`|',
      'extraInfo' => ' ',
    ),
    'GetInstanceResource' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/resource',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'Resource' => 
              array (
                'description' => '资源情况',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalMB' => 
                  array (
                    'description' => '实际运行使用的内存',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1024',
                  ),
                  'AllocatedMB' => 
                  array (
                    'description' => '作业申请的内存',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2048',
                  ),
                  'AllocatedVirtualCores' => 
                  array (
                    'description' => '作业申请的vcore',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'TotalVirtualCores' => 
                  array (
                    'description' => '实际运行使用的vcore',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"Resource\\": {\\n    \\"TotalMB\\": 1024,\\n    \\"AllocatedMB\\": 2048,\\n    \\"AllocatedVirtualCores\\": 100,\\n    \\"TotalVirtualCores\\": 50\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取运行实例使用资源',
      'summary' => '获取运行实例申请和已使用的CPU和Memory等信息。',
      'description' => '使用本API可以获取运行实例使用的cpu，memory和提交时申请的cpu，memory；未运行的作业调用该方法会报错',
    ),
    'GetInstanceRunSummary' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/runsummary',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'RunSummary' => 
              array (
                'description' => '运行概要信息',
                'type' => 'object',
                'properties' => 
                array (
                  'InputDelay' => 
                  array (
                    'description' => '业务延时',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'JobName' => 
                  array (
                    'description' => '作业名称',
                    'type' => 'string',
                    'example' => 'job1',
                  ),
                  'LastErrorTime' => 
                  array (
                    'description' => '最近错误时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1548397575000',
                  ),
                  'ExpectState' => 
                  array (
                    'description' => '期望运行状态：
WAITING  等待；
RUNNING  运行；
PAUSED  暂停；
TERMINATED  停止；
SUCCESS  成功（批作业）；
FAILED  失败（流作业）',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'ActualState' => 
                  array (
                    'description' => '实际运行状态：
WAITING  等待；
RUNNING  运行；
PAUSED  暂停；
TERMINATED  停止；
SUCCESS  成功（批作业）；
FAILED  失败（流作业）
',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'EngineJobHandler' => 
                  array (
                    'description' => 'instance在yarn中的名称： ApplicaitonID | jobID（jm分配的jobid）',
                    'type' => 'string',
                    'example' => 'application_xxxxx | xxxxx',
                  ),
                  'LastErrorMessage' => 
                  array (
                    'description' => '最近错误信息',
                    'type' => 'string',
                    'example' => 'error',
                  ),
                  'Id' => 
                  array (
                    'description' => 'InstanceID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"RunSummary\\": {\\n    \\"InputDelay\\": 20,\\n    \\"JobName\\": \\"job1\\",\\n    \\"LastErrorTime\\": 1548397575000,\\n    \\"ExpectState\\": \\"RUNNING\\",\\n    \\"ActualState\\": \\"RUNNING\\",\\n    \\"EngineJobHandler\\": \\"application_xxxxx | xxxxx\\",\\n    \\"LastErrorMessage\\": \\"error\\",\\n    \\"Id\\": 123\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取作业运行实例的运行概要',
      'summary' => '获取作业运行实例的运行概要。',
      'description' => '本APi是getInstance接口的轻量级版本，会返回作业运行时的部分信息，相比getInstance接口更加轻量级',
    ),
    'ListInstance' => 
    array (
      'path' => '/api/v2/projects/{projectName}/instances',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业名称
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'startBeginTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启动时间范围上限，和启动时间下限配合使用，搜索启动时间在该范围内的运行实例。使用13位时间戳，单位到毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1548397575000',
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'startEndTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启动时间范围下限，和启动时间上限配合使用，搜索启动时间在该范围内的运行实例。使用13位时间戳，单位到毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1548397575000',
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'endBeginTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '停止时间范围上限，和停止时间下限配合使用，搜索停止时间在该范围内的运行实例。使用13位时间戳，单位到毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1548397575000',
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'endEndTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '停止时间范围下限，和停止时间上限配合使用，搜索停止时间在该范围内的运行实例。使用13位时间戳，单位到毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1548397575000',
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'jobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业类型：FLINK_STREAM（流作业）；FLINK_BATCH（批作业）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FLINK_STREAM',
          ),
        ),
        8 => 
        array (
          'name' => 'apiType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'api类型：DATASTREAM，SQL',
            'type' => 'string',
            'required' => false,
            'example' => 'SQL',
            'docRequired' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'expectState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '期望状态：
RUNNING  运行中；
PAUSED   暂停；
TERMINATED  停止；
SUCCESS  成功（批作业）；
FAILED  失败（流作业）',
            'type' => 'string',
            'required' => false,
            'example' => 'RUNNING',
            'docRequired' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'actualState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实际运行状态：
RUNNING  运行中；
PAUSED   暂停；
TERMINATED  停止；
SUCCESS  成功（批作业）；
FAILED  失败（流作业）',
            'type' => 'string',
            'required' => false,
            'example' => 'RUNNING',
            'docRequired' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'isArchived',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否搜索归档实例，默认搜索非归档实例。对于流作业来说，同时只存在一个实例，所以当作业启动或者恢复运行的时候，就生成了新的实例，旧实例会被归档；对于批作业，运行结束两天的实例会被归档',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'docRequired' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页选项，每页的实例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'docRequired' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'pageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页选项，第几页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'docRequired' => false,
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
              'PageIndex' => 
              array (
                'description' => '分页属性，第几页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'PageSize' => 
              array (
                'description' => '分页属性，每页多少实例',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'TotalCount' => 
              array (
                'description' => '总实例数目',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Instance' => 
                  array (
                    'description' => '实例详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PlanJson' => 
                        array (
                          'description' => '作业上线执行计划',
                          'type' => 'string',
                          'example' => '{a:b}',
                        ),
                        'ApiType' => 
                        array (
                          'description' => 'API类型：DATASTREAM；SQL',
                          'type' => 'string',
                          'example' => 'SQL',
                        ),
                        'LastErrorTime' => 
                        array (
                          'description' => '最近错误时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'ExpectState' => 
                        array (
                          'description' => '期望状态：
RUNNING  运行中；
PAUSED   暂停；
TERMINATED  停止；
SUCCESS  成功（批作业）；
FAILED  失败（流作业）',
                          'type' => 'string',
                          'example' => 'RUNNING',
                        ),
                        'JobType' => 
                        array (
                          'description' => '作业种类：
FLINK_STREAM  流作业
FLINK_BATCH  批作业',
                          'type' => 'string',
                          'example' => 'FLINK_STREAM',
                        ),
                        'ActualState' => 
                        array (
                          'description' => '实际运行状态：
RUNNING  运行中；
PAUSED   暂停；
TERMINATED  停止；
SUCCESS  成功（批作业）；
FAILED  失败（流作业）',
                          'type' => 'string',
                          'example' => 'RUNNING',
                        ),
                        'Priority' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'LastErrorMessage' => 
                        array (
                          'description' => '最近一次错误信息',
                          'type' => 'string',
                          'example' => 'error',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '引擎版本',
                          'type' => 'string',
                          'example' => 'blink_2.2.4',
                        ),
                        'JobName' => 
                        array (
                          'description' => '作业名称',
                          'type' => 'string',
                          'example' => 'job1',
                        ),
                        'Code' => 
                        array (
                          'description' => '实例代码',
                          'type' => 'string',
                          'example' => 'code',
                        ),
                        'LastOperator' => 
                        array (
                          'description' => '最近操作者',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID',
                          'type' => 'string',
                          'example' => 'd6wxwo5tnrmuamx2ly3m7vkz',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '项目名称',
                          'type' => 'string',
                          'example' => 'project1',
                        ),
                        'Starter' => 
                        array (
                          'description' => '启动人',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'LastOperateTime' => 
                        array (
                          'description' => '最近操作时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '结束时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '作业启动时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'InputDelay' => 
                        array (
                          'description' => '业务延时',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'QueueName' => 
                        array (
                          'description' => '队列名称',
                          'type' => 'string',
                          'example' => 'root.default',
                        ),
                        'Packages' => 
                        array (
                          'description' => 'Instance引用的package，多个逗号分隔，未引用为空',
                          'type' => 'string',
                          'example' => 'package1.jar',
                        ),
                        'EngineJobHandler' => 
                        array (
                          'description' => 'instance在yarn中的名称： ApplicaitonID | jobID（jm分配的jobid）',
                          'type' => 'string',
                          'example' => 'application_xxxx | xxxx',
                        ),
                        'Id' => 
                        array (
                          'description' => 'InstanceID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Properties' => 
                        array (
                          'description' => '作业运行配置参数',
                          'type' => 'string',
                          'example' => 'k:v',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"TotalPage\\": 5,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"TotalCount\\": 50,\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"PlanJson\\": \\"{a:b}\\",\\n        \\"LastErrorTime\\": 1548397575000,\\n        \\"ApiType\\": \\"SQL\\",\\n        \\"ProjectName\\": \\"project1\\",\\n        \\"JobType\\": \\"FLINK_STREAM\\",\\n        \\"ExpectState\\": \\"RUNNING\\",\\n        \\"Starter\\": \\"xxxx\\",\\n        \\"ActualState\\": \\"RUNNING\\",\\n        \\"LastOperateTime\\": 1548397575000,\\n        \\"LastErrorMessage\\": \\"error\\",\\n        \\"EngineVersion\\": \\"blink_2.2.4\\",\\n        \\"EndTime\\": 1548397575000,\\n        \\"StartTime\\": 1548397575000,\\n        \\"InputDelay\\": 20,\\n        \\"QueueName\\": \\"root.default\\",\\n        \\"JobName\\": \\"job1\\",\\n        \\"Packages\\": \\"package1.jar\\",\\n        \\"Code\\": \\"code\\",\\n        \\"EngineJobHandler\\": \\"application_xxxx | xxxx\\",\\n        \\"Id\\": 123,\\n        \\"ClusterId\\": \\"d6wxwo5tnrmuamx2ly3m7vkz\\",\\n        \\"LastOperator\\": \\"xxxx\\",\\n        \\"Properties\\": \\"k:v\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取某个project下所有的运行实例',
      'summary' => '获取某个project下所有的运行实例。',
      'description' => '调用本API可以获取某个project下所有的运行实例的详细信息',
    ),
    'GetInstance' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可以通过ListInstance接口或者StartJob接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
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
                'example' => 'B2F5A5C5-5CCC-45C8-B884-7152CC345EFA',
              ),
              'Instance' => 
              array (
                'description' => 'Instance详情',
                'type' => 'object',
                'properties' => 
                array (
                  'PlanJson' => 
                  array (
                    'description' => '执行计划',
                    'type' => 'string',
                    'example' => '{a:b}',
                  ),
                  'ApiType' => 
                  array (
                    'description' => '作业类型：
- DATASTREAM：Datastream作业。
- SQL：SQL作业。
',
                    'type' => 'string',
                    'example' => 'DATASTREAM',
                  ),
                  'LastErrorTime' => 
                  array (
                    'description' => '最新的报错时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1548397575000',
                  ),
                  'ExpectState' => 
                  array (
                    'description' => '期望状态：
- RUNNING：运行中。
- PAUSED：暂停。
- TERMINATED：停止。
- SUCCESS：成功（批作业）。
- FAILED：失败（流作业）。',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'JobType' => 
                  array (
                    'description' => '作业类型：
- FLINK_STREAM：流作业。
- FLINK_BATCH：批作业。',
                    'type' => 'string',
                    'example' => 'FLINK_STREAM',
                  ),
                  'ActualState' => 
                  array (
                    'description' => 'Instance的实际状态：
- WAITING：等待。
- RUNNING：运行中。
- PAUSED：暂停。
- TERMINATED：停止。
- SUCCESS：成功（批作业）。
- FAILED：失败（批作业）。',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'Priority' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'LastErrorMessage' => 
                  array (
                    'description' => '最新的报错信息',
                    'type' => 'string',
                    'example' => 'error',
                  ),
                  'EngineVersion' => 
                  array (
                    'description' => 'Blink版本',
                    'type' => 'string',
                    'example' => 'blink-3.4.4',
                  ),
                  'JobName' => 
                  array (
                    'description' => '作业名称',
                    'type' => 'string',
                    'example' => 'job1',
                  ),
                  'Code' => 
                  array (
                    'description' => 'Instance的运行代码：
- SQL作业返回SQL代码。
- Datastream作业返回Datastream配置。',
                    'type' => 'string',
                    'example' => '--完整主类名，必填，例如com.alibaba.realtimecompute.DatastreamExample\\nblink.main.class=Hbase_Demo.HbaseDemo\\n\\n--包含完整主类名的JAR包资源名称，多个JAR包时必填，例如blink_datastream.jar\\n--blink.main.jar=hbase_demo-1.0-snapshot.jar \\n\\n--默认state backend配置，当作业代码没有显式声明时生效\\nstate.backend.type=niagara\\nstate.backend.niagara.ttl.ms=129600000\\n\\n--默认Checkpoint配置，当作业代码没有显式声明时生效\\nblink.checkpoint.interval.ms=180000\\n\\n--默认启用项目参数\\n--enable.project.config=true',
                  ),
                  'LastOperator' => 
                  array (
                    'description' => '最新的操作人',
                    'type' => 'string',
                    'example' => '239960377092765296',
                  ),
                  'ClusterId' => 
                  array (
                    'description' => '集群ID',
                    'type' => 'string',
                    'example' => 'rcmp9x37ztfb63g1x7lt****',
                  ),
                  'ProjectName' => 
                  array (
                    'description' => '项目名称',
                    'type' => 'string',
                    'example' => 'project1',
                  ),
                  'Starter' => 
                  array (
                    'description' => '启动人',
                    'type' => 'string',
                    'example' => '239960377092765296',
                  ),
                  'LastOperateTime' => 
                  array (
                    'description' => '最新的操作时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1599794334000',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '作业结束时间，未结束作业返回空值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1548397575000',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '开始时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1599794335000',
                  ),
                  'AutoScaleParams' => 
                  array (
                    'description' => '作业上线时设置的AutoScale参数。',
                    'type' => 'string',
                    'example' => '"{\\"isOnOff\\":false,\\"strategyConfigure\\":null,\\"maxCU\\":null}',
                  ),
                  'InputDelay' => 
                  array (
                    'description' => '业务延迟，单位为毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '-99999999',
                  ),
                  'QueueName' => 
                  array (
                    'description' => '队列名称',
                    'type' => 'string',
                    'example' => 'root.project1',
                  ),
                  'Packages' => 
                  array (
                    'description' => '实例引用的包名称，多个Package使用逗号（,）分隔，未引用为空。',
                    'type' => 'string',
                    'example' => 'hbase_demo-1.0-snapshot-shaded.jar',
                  ),
                  'EngineJobHandler' => 
                  array (
                    'description' => 'Instance在YARN中的名称，格式为： ApplicaitonID | jobID（JobManager分配的jobid）。',
                    'type' => 'string',
                    'example' => 'application_1597654819348_****|405a6d40d7f4f2618ed532359887****',
                  ),
                  'Id' => 
                  array (
                    'description' => 'InstanceID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '412536',
                  ),
                  'Properties' => 
                  array (
                    'description' => '作业运行参数',
                    'type' => 'string',
                    'example' => '#checkpoint模式：EXACTLY_ONCE 或者 AT_LEAST_ONCE\\n#blink.checkpoint.mode=EXACTLY_ONCE\\n\\n#checkpoint间隔时间，单位毫秒\\n#blink.checkpoint.interval.ms=180000\\n\\n#rocksdb的数据生命周期，单位毫秒\\n#state.backend.rocksdb.ttl.ms=129600000\\n\\n#启用项目参数\\n#enable.project.config=true\\nblink.job.timeZone=Asia/Shanghai',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2F5A5C5-5CCC-45C8-B884-7152CC345EFA\\",\\n  \\"Instance\\": {\\n    \\"PlanJson\\": \\"{a:b}\\",\\n    \\"ApiType\\": \\"DATASTREAM\\",\\n    \\"LastErrorTime\\": 1548397575000,\\n    \\"ExpectState\\": \\"RUNNING\\",\\n    \\"JobType\\": \\"FLINK_STREAM\\",\\n    \\"ActualState\\": \\"RUNNING\\",\\n    \\"LastErrorMessage\\": \\"error\\",\\n    \\"EngineVersion\\": \\"blink-3.4.4\\",\\n    \\"JobName\\": \\"job1\\",\\n    \\"Code\\": \\"--完整主类名，必填，例如com.alibaba.realtimecompute.DatastreamExample\\\\\\\\nblink.main.class=Hbase_Demo.HbaseDemo\\\\\\\\n\\\\\\\\n--包含完整主类名的JAR包资源名称，多个JAR包时必填，例如blink_datastream.jar\\\\\\\\n--blink.main.jar=hbase_demo-1.0-snapshot.jar \\\\\\\\n\\\\\\\\n--默认state backend配置，当作业代码没有显式声明时生效\\\\\\\\nstate.backend.type=niagara\\\\\\\\nstate.backend.niagara.ttl.ms=129600000\\\\\\\\n\\\\\\\\n--默认Checkpoint配置，当作业代码没有显式声明时生效\\\\\\\\nblink.checkpoint.interval.ms=180000\\\\\\\\n\\\\\\\\n--默认启用项目参数\\\\\\\\n--enable.project.config=true\\",\\n    \\"LastOperator\\": \\"239960377092765296\\",\\n    \\"ClusterId\\": \\"rcmp9x37ztfb63g1x7lt****\\",\\n    \\"ProjectName\\": \\"project1\\",\\n    \\"Starter\\": \\"239960377092765296\\",\\n    \\"LastOperateTime\\": 1599794334000,\\n    \\"EndTime\\": 1548397575000,\\n    \\"StartTime\\": 1599794335000,\\n    \\"AutoScaleParams\\": \\"\\\\\\"{\\\\\\\\\\\\\\"isOnOff\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"strategyConfigure\\\\\\\\\\\\\\":null,\\\\\\\\\\\\\\"maxCU\\\\\\\\\\\\\\":null}\\",\\n    \\"InputDelay\\": -99999999,\\n    \\"QueueName\\": \\"root.project1\\",\\n    \\"Packages\\": \\"hbase_demo-1.0-snapshot-shaded.jar\\",\\n    \\"EngineJobHandler\\": \\"application_1597654819348_****|405a6d40d7f4f2618ed532359887****\\",\\n    \\"Id\\": 412536,\\n    \\"Properties\\": \\"#checkpoint模式：EXACTLY_ONCE 或者 AT_LEAST_ONCE\\\\\\\\n#blink.checkpoint.mode=EXACTLY_ONCE\\\\\\\\n\\\\\\\\n#checkpoint间隔时间，单位毫秒\\\\\\\\n#blink.checkpoint.interval.ms=180000\\\\\\\\n\\\\\\\\n#rocksdb的数据生命周期，单位毫秒\\\\\\\\n#state.backend.rocksdb.ttl.ms=129600000\\\\\\\\n\\\\\\\\n#启用项目参数\\\\\\\\n#enable.project.config=true\\\\\\\\nblink.job.timeZone=Asia/Shanghai\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9B7BD33D-5F3A-4C4C-BCF5-AD686CAD2370</RequestId>\\n<Instance>\\n    <ExpectState>RUNNING</ExpectState>\\n    <EngineVersion>blink-3.4.4</EngineVersion>\\n    <ProjectName>project1</ProjectName>\\n    <ClusterId>rcmp9x37ztfb63g1x7lt****</ClusterId>\\n    <PlanJson/>\\n    <JobName>job1</JobName>\\n    <StartTime>1599794335000</StartTime>\\n    <Properties>#checkpoint模式：EXACTLY_ONCE 或者 AT_LEAST_ONCE\\n#blink.checkpoint.mode=EXACTLY_ONCE\\n\\n#checkpoint间隔时间，单位毫秒\\n#blink.checkpoint.interval.ms=180000\\n\\n#rocksdb的数据生命周期，单位毫秒\\n#state.backend.rocksdb.ttl.ms=129600000\\n\\n#启用项目参数\\n#enable.project.config=true\\nblink.job.timeZone=Asia/Shanghai</Properties>\\n    <Starter>239960377092765296</Starter>\\n    <InputDelay>-99999999</InputDelay>\\n    <Code>--完整主类名，必填，例如com.alibaba.realtimecompute.DatastreamExample\\nblink.main.class=Hbase_Demo.HbaseDemo\\n\\n--包含完整主类名的JAR包资源名称，多个JAR包时必填，例如blink_datastream.jar\\n--blink.main.jar=hbase_demo-1.0-snapshot.jar \\n\\n--默认state backend配置，当作业代码没有显式声明时生效\\nstate.backend.type=niagara\\nstate.backend.niagara.ttl.ms=129600000\\n\\n--默认Checkpoint配置，当作业代码没有显式声明时生效\\nblink.checkpoint.interval.ms=180000\\n\\n--默认启用项目参数\\n--enable.project.config=true</Code>\\n    <ActualState>RUNNING</ActualState>\\n    <EngineJobHandler>application_1597654819348_0011|405a6d40d7f4f2618ed532359887d344</EngineJobHandler>\\n    <LastOperator>239960377092765296</LastOperator>\\n    <JobType>FLINK_STREAM</JobType>\\n    <Packages>hbase_demo-1.0-snapshot-shaded.jar</Packages>\\n    <AutoScaleParams>{\\"isOnOff\\":false,\\"strategyConfigure\\":null,\\"maxCU\\":null}</AutoScaleParams>\\n    <ApiType>DATASTREAM</ApiType>\\n    <Id>412536</Id>\\n    <LastOperateTime>1599794334000</LastOperateTime>\\n    <QueueName>root.project1</QueueName>\\n</Instance>","errorExample":""}]',
      'title' => '获取运行作业',
      'summary' => '获取运行作业的全部信息，未运行的作业会失败。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetInstanceCheckpoint' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instances/{instanceId}/checkpoints',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => ' cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'InstanceID，流作业只有一个运行实例，此处填-1L，指在线上运行的，批作业可以通过ListInstance接口或者Startjob接口获得',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '-1',
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
              'Checkpoints' => 
              array (
                'description' => 'checkpint具体信息',
                'type' => 'string',
                'example' => '{a:b}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Checkpoints\\": \\"{a:b}\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取运行实例的ckeckpoint',
      'summary' => '获取运行实例的ckeckpoint。',
      'description' => '使用该API可以获得正在运行实例作业的checkpoint，非运行状态的作业调用该方法会返回错误',
    ),
    'BatchGetInstanceRunSummary' => 
    array (
      'path' => '/api/v2/projects/{projectName}/runsummary',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用：
- 公共云预发：cn-hangzhou-pre
- 集团内生产：cn-hangzhou-internal
- 集团内预发：cn-hangzhou-internal-pre
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_project',
          ),
        ),
        2 => 
        array (
          'name' => 'jobNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业名称，逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1,job2',
          ),
        ),
        3 => 
        array (
          'name' => 'jobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业类型，批作业使用FLINK_BATCH；流作业使用FLINK_STREAM。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FLINK_STREAM',
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
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'RunSummarys' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RunSummary' => 
                  array (
                    'description' => '作业运行状态详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InputDelay' => 
                        array (
                          'description' => '业务延时。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '300',
                        ),
                        'JobName' => 
                        array (
                          'description' => '作业名称，多个逗号（,）分隔。',
                          'type' => 'string',
                          'example' => 'job1，job2',
                        ),
                        'LastErrorTime' => 
                        array (
                          'description' => '上次出现错误时间（时间戳，精确到毫秒）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'ExpectState' => 
                        array (
                          'description' => '作业期望状态：
- WAITING：等待
- RUNNING：正在运行
- PAUSED：暂停
- TERMINATED：停止
- SUCCESS：成功（批作业）
- FAILED：失败（批作业）',
                          'type' => 'string',
                          'example' => 'RUNNIBG',
                        ),
                        'ActualState' => 
                        array (
                          'description' => '返回作业的实际运行状态：
- WAITING：等待
- RUNNING：正在运行
- PAUSED：暂停
- TERMINATED：停止
- SUCCESS：成功（批作业）
- FAILED：失败（批作业）',
                          'type' => 'string',
                          'example' => 'RUNNING',
                        ),
                        'EngineJobHandler' => 
                        array (
                          'description' => 'YARN中为作业分配的名称：ApplicationID | JobID（JM分配的ID）。',
                          'type' => 'string',
                          'example' => 'aplication_x | xxxxx',
                        ),
                        'LastErrorMessage' => 
                        array (
                          'description' => '上次错误信息。',
                          'type' => 'string',
                          'example' => 'error',
                        ),
                        'Id' => 
                        array (
                          'description' => '运行实例ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"RunSummarys\\": {\\n    \\"RunSummary\\": [\\n      {\\n        \\"InputDelay\\": 300,\\n        \\"JobName\\": \\"job1，job2\\",\\n        \\"LastErrorTime\\": 1548397575000,\\n        \\"ExpectState\\": \\"RUNNIBG\\",\\n        \\"ActualState\\": \\"RUNNING\\",\\n        \\"EngineJobHandler\\": \\"aplication_x | xxxxx\\",\\n        \\"LastErrorMessage\\": \\"error\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BatchGetInstanceRunSummaryResponse>\\n\\t<RunSummarys>\\n\\t\\t<RunSummary>\\n\\t\\t\\t<ExpectState>RUNNING</ExpectState>\\n\\t\\t\\t<InputDelay>0</InputDelay>\\n\\t\\t\\t<JobName>test</JobName>\\n\\t\\t\\t<EngineJobHandler>application_1564648959240_0125|6150954a90852814ce0c6eace9868691</EngineJobHandler>\\n\\t\\t\\t<ActualState>RUNNING</ActualState>\\n\\t\\t\\t<Id>177474</Id>\\n\\t\\t</RunSummary>\\n\\t</RunSummarys>\\n\\t<RequestId>45BE0E07-8543-4EEE-BC4D-E846E4C1230D</RequestId>\\n</BatchGetInstanceRunSummaryResponse>","errorExample":""}]',
      'title' => '批量获取实例运行信息',
      'summary' => '根据作业类型和名称批量获取某个项目下，某一类作业（批作业或者流作业）的多个Job的运行实例情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFolder' => 
    array (
      'path' => '/api/v2/projects/{projectName}/folders',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'path',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件夹路径',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/path',
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
              'FolderId' => 
              array (
                'description' => '文件夹ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '33193',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B43F695A-F126-46C0-B336-846D6290474D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FolderId\\": 33193,\\n  \\"RequestId\\": \\"B43F695A-F126-46C0-B336-846D6290474D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B43F695A-F126-46C0-B336-846D6290474D</RequestId>\\n<FolderId>33193</FolderId>","errorExample":""}]',
      'title' => '项目中创建文件夹',
      'summary' => '在项目对应路径下创建文件夹，并在开发控制台上保存文件夹ID和作业路径。',
      'description' => '> 作业开发对应根目录，在开发控制台上，作业都显示在作业开发目录下。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFolder' => 
    array (
      'path' => '/api/v2/projects/{projectName}/folders',
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
      'operationType' => 'readAndWrite',
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
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件夹路径',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/path1/path2	',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '删除空文件夹',
      'summary' => '删除空文件夹，删除非空文件夹会报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetFolder' => 
    array (
      'path' => '/api/v2/projects/{projectName}/folders',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件夹路径',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/path1',
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
                'example' => 'AFD7EF32-88FA-4539-A83C-EF91DDFA2C96',
              ),
              'Folder' => 
              array (
                'description' => '文件夹详情',
                'type' => 'object',
                'properties' => 
                array (
                  'Path' => 
                  array (
                    'description' => '文件夹路径',
                    'type' => 'string',
                    'example' => '/path1',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '文件夹ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '27552',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AFD7EF32-88FA-4539-A83C-EF91DDFA2C96\\",\\n  \\"Folder\\": {\\n    \\"Path\\": \\"/path1\\",\\n    \\"FolderId\\": 27552\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AFD7EF32-88FA-4539-A83C-EF91DDFA2C96</RequestId>\\n<Folder>\\n    <Path>/path1</Path>\\n    <FolderId>27552</FolderId>\\n</Folder>","errorExample":""}]',
      'title' => '获取文件夹信息',
      'summary' => '获取文件夹信息，即文件夹ID和文件夹路径。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListChildFolder' => 
    array (
      'path' => '/api/v2/projects/{projectName}/folders/children',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主目录路径',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/path1',
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
                'example' => 'DA0A418B-E495-4BCC-B44F-1BA3CE731103',
              ),
              'Folders' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Folder' => 
                  array (
                    'description' => '文件目录详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Path' => 
                        array (
                          'description' => '文件夹目录',
                          'type' => 'string',
                          'example' => '/path1/path2',
                        ),
                        'FolderId' => 
                        array (
                          'description' => '文件夹ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '33215',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA0A418B-E495-4BCC-B44F-1BA3CE731103\\",\\n  \\"Folders\\": {\\n    \\"Folder\\": [\\n      {\\n        \\"Path\\": \\"/path1/path2\\",\\n        \\"FolderId\\": 33215\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DA0A418B-E495-4BCC-B44F-1BA3CE731103</RequestId>\\n<Folders>\\n    <Folder>\\n        <Path>/path1/path2</Path>\\n        <FolderId>33215</FolderId>\\n    </Folder>\\n</Folders>","errorExample":""}]',
      'title' => '获取主目录下子目录信息',
      'summary' => '获取指定主目录下所有子目录的ID和路径。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MVFolder' => 
    array (
      'path' => '/api/v2/projects/{projectName}/folders',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'srcPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原路径',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/path1',
          ),
        ),
        3 => 
        array (
          'name' => 'destPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标路径',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/path2',
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
                'example' => 'D34CBA74-DED8-4B1E-80B4-DE4C58291726',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D34CBA74-DED8-4B1E-80B4-DE4C58291726\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D34CBA74-DED8-4B1E-80B4-DE4C58291726</RequestId>","errorExample":""}]',
      'title' => '移动项目文件夹',
      'summary' => '移动指定项目下的文件夹。移动非空文件夹时，会将文件夹下的作业一起移动。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
    array (
      'path' => '/api/v2/cluster/tags',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'type' => 'string',
                  ),
                  'TagResources' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'type' => 'string',
                        ),
                        'TagValue' => 
                        array (
                          'type' => 'string',
                        ),
                        'ResourceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'TagKey' => 
                        array (
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'TagResources' => 
    array (
      'path' => '/api/v2/cluster/tags',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Data' => 
              array (
                'type' => 'boolean',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'UntagResources' => 
    array (
      'path' => '/api/v2/cluster/tags',
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
          'in' => 'header',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKeys',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
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
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Data' => 
              array (
                'type' => 'boolean',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'DeletePackage' => 
    array (
      'path' => '/api/v2/projects/{projectName}/packages/{packageName}',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'packageName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Package名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'package.jar',
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
                'example' => 'A604B9FA-D181-43D7-A064-5FF971B90466',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A604B9FA-D181-43D7-A064-5FF971B90466\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A604B9FA-D181-43D7-A064-5FF971B90466</RequestId>","errorExample":""}]',
      'title' => '删除 Package',
      'summary' => '您可以通过DeletePackag OpenAPI删除开发控制台上通过CreatePackage创建的Package。删除后开发控制台无法再获取对应的Package信息。',
      'description' => '> 使用DeletePackage删除不存在的Package时，系统会报错。如果已上线的作业已引用该Package，删除该Package时也会报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdatePackage' => 
    array (
      'path' => '/api/v2/projects/{projectName}/packages/{packageName}',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'packageName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Package名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'package1.jar',
          ),
        ),
        3 => 
        array (
          'name' => 'originName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package别名',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'package2.jar',
          ),
        ),
        4 => 
        array (
          'name' => 'description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package备注描述',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'md5',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package的Md5值',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '3F7468C153E529B141C326332DF15D05',
          ),
        ),
        6 => 
        array (
          'name' => 'ossEndpoint',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS接入点',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss-cn-hangzhou-internal.aliyuncs.com',
          ),
        ),
        7 => 
        array (
          'name' => 'ossBucket',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS Bucket',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'blinktest2.oss-cn-hangzhou-internal.aliyuncs.com',
          ),
        ),
        8 => 
        array (
          'name' => 'ossOwner',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS所有者',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'owner1',
          ),
        ),
        9 => 
        array (
          'name' => 'ossPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS路径',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'path1/path2/a.jar',
          ),
        ),
        10 => 
        array (
          'name' => 'tag',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Package的标记',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"function":"group by time"}',
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
                'example' => '77D5CB98-5E9F-42BB-8AA9-001125B48E28',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"77D5CB98-5E9F-42BB-8AA9-001125B48E28\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>77D5CB98-5E9F-42BB-8AA9-001125B48E28</RequestId>","errorExample":""}]',
      'title' => '更新 Package',
      'summary' => '更新开发控制台上保存在指定项目下的 Package。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetRefPackageJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/packages/{packageName}/jobs',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'packageName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Package名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'package1.jar',
          ),
        ),
        3 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'pageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '123',
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
              'PageIndex' => 
              array (
                'description' => '返回第几页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '页码总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含的作业数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '31FDAE27-F135-4DAB-9C75-FADD6B0C4D1D',
              ),
              'TotalCount' => 
              array (
                'description' => '作业总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Jobs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Job' => 
                  array (
                    'description' => '作业详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'description' => '作业创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1551161842000',
                        ),
                        'PlanJson' => 
                        array (
                          'description' => '作业上线的执行计划',
                          'type' => 'string',
                          'example' => '{\\n  \\"nodes\\": [\\n    {\\n      \\"id\\": 1,\\n      \\"type\\": \\"Source: Custom Source\\",\\n      \\"pact\\": \\"Data Source\\",\\n      \\"contents\\": \\"Source: Custom Source\\",\\n      \\"parallelism\\": 1\\n    },\\n    {\\n      \\"id\\": 2,\\n      \\"type\\": \\"Timestamps/Watermarks\\",\\n      \\"pact\\": \\"Operator\\",\\n      \\"contents\\": \\"Timestamps/Watermarks\\",\\n      \\"parallelism\\": 1,\\n      \\"predecessors\\": [\\n        {\\n          \\"id\\": 1,\\n          \\"ship_strategy\\": \\"FORWARD\\",\\n          \\"side\\": \\"second\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\"id\\": 4,\\n      \\"type\\": \\"TriggerWindow(GlobalWindows(), ListStateDescriptor{serializer=org.apache.flink.api.common.typeutils.base.ListSerializer@b2107f67}, DeltaTrigger(com.hjc.test.blink_test.ChinanTopSpeedWindowing$1@350aac89, 50.0), TimeEvictor(10000), WindowedStream.reduce(WindowedStream.java:258))\\",\\n      \\"pact\\": \\"Operator\\",\\n      \\"contents\\": \\"TriggerWindow(GlobalWindows(), ListStateDescriptor{serializer=org.apache.flink.api.common.typeutils.base.ListSerializer@b2107f67}, DeltaTrigger(com.hjc.test.blink_test.ChinanTopSpeedWindowing$1@350aac89, 50.0), TimeEvictor(10000), WindowedStream.reduce(WindowedStream.java:258))\\",\\n      \\"parallelism\\": 1,\\n      \\"predecessors\\": [\\n        {\\n          \\"id\\": 2,\\n          \\"ship_strategy\\": \\"KEY-GROUP\\",\\n          \\"side\\": \\"second\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\"id\\": 5,\\n      \\"type\\": \\"Sink: Unnamed\\",\\n      \\"pact\\": \\"Data Sink\\",\\n      \\"contents\\": \\"Sink: Unnamed\\",\\n      \\"parallelism\\": 1,\\n      \\"predecessors\\": [\\n        {\\n          \\"id\\": 4,\\n          \\"ship_strategy\\": \\"FORWARD\\",\\n          \\"side\\": \\"second\\"\\n        }\\n      ]\\n    }\\n  ]\\n}',
                        ),
                        'ApiType' => 
                        array (
                          'description' => 'API类型：DATASTREAM或SQL',
                          'type' => 'string',
                          'example' => 'DATASTREAM',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '项目名称',
                          'type' => 'string',
                          'example' => 'project1',
                        ),
                        'JobType' => 
                        array (
                          'description' => '作业类型：
- FLINK_STREAM：流作业
- FLINK_BATCH：批作业',
                          'type' => 'string',
                          'example' => 'FLINK_STREAM',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '引擎版本',
                          'type' => 'string',
                          'example' => 'blink_2.2.4',
                        ),
                        'Creator' => 
                        array (
                          'description' => '作业创建者',
                          'type' => 'string',
                          'example' => '1709064687573327',
                        ),
                        'Modifier' => 
                        array (
                          'description' => '最新修改者',
                          'type' => 'string',
                          'example' => '1709064687573327',
                        ),
                        'QueueName' => 
                        array (
                          'description' => '队列名称',
                          'type' => 'string',
                          'example' => 'root.bayes_team',
                        ),
                        'Description' => 
                        array (
                          'description' => '作业备注',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'JobName' => 
                        array (
                          'description' => '作业名称',
                          'type' => 'string',
                          'example' => 'job1',
                        ),
                        'FolderId' => 
                        array (
                          'description' => '文件夹ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10148',
                        ),
                        'JobId' => 
                        array (
                          'description' => '作业ID',
                          'type' => 'string',
                          'example' => '9t9m6jfw8rb44iexhbpv3tnz',
                        ),
                        'Packages' => 
                        array (
                          'description' => 'Package名称，多个Package请使用逗号（,）分隔。',
                          'type' => 'string',
                          'example' => 'blink_test_datastream.jar',
                        ),
                        'Code' => 
                        array (
                          'description' => '作业代码',
                          'type' => 'string',
                          'example' => 'blink.main.class=com.hjc.test.blink_test.ChinanTopSpeedWindowing2\\r\\nblink.job.name=datastream_prestest',
                        ),
                        'IsCommitted' => 
                        array (
                          'description' => '是否上线',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID',
                          'type' => 'string',
                          'example' => 'et2cloud****',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '最新修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'Properties' => 
                        array (
                          'description' => '作业运行参数配置',
                          'type' => 'string',
                          'example' => '#checkpoint模式：EXACTLY_ONCE 或者 AT_LEAST_ONCE\\n#blink.checkpoint.mode=EXACTLY_ONCE\\n\\n#checkpoint间隔时间，单位毫秒\\n#blink.checkpoint.interval.ms=180000\\n\\n#rocksdb的数据生命周期，单位毫秒\\n#state.backend.rocksdb.ttl.ms=129600000\\n',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"TotalPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"31FDAE27-F135-4DAB-9C75-FADD6B0C4D1D\\",\\n  \\"TotalCount\\": 1,\\n  \\"Jobs\\": {\\n    \\"Job\\": [\\n      {\\n        \\"CreateTime\\": 1551161842000,\\n        \\"PlanJson\\": \\"{\\\\\\\\n  \\\\\\\\\\\\\\"nodes\\\\\\\\\\\\\\": [\\\\\\\\n    {\\\\\\\\n      \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 1,\\\\\\\\n      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Source: Custom Source\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"pact\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Data Source\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"contents\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Source: Custom Source\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"parallelism\\\\\\\\\\\\\\": 1\\\\\\\\n    },\\\\\\\\n    {\\\\\\\\n      \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 2,\\\\\\\\n      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Timestamps/Watermarks\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"pact\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Operator\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"contents\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Timestamps/Watermarks\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"parallelism\\\\\\\\\\\\\\": 1,\\\\\\\\n      \\\\\\\\\\\\\\"predecessors\\\\\\\\\\\\\\": [\\\\\\\\n        {\\\\\\\\n          \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 1,\\\\\\\\n          \\\\\\\\\\\\\\"ship_strategy\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"FORWARD\\\\\\\\\\\\\\",\\\\\\\\n          \\\\\\\\\\\\\\"side\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"second\\\\\\\\\\\\\\"\\\\\\\\n        }\\\\\\\\n      ]\\\\\\\\n    },\\\\\\\\n    {\\\\\\\\n      \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 4,\\\\\\\\n      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"TriggerWindow(GlobalWindows(), ListStateDescriptor{serializer=org.apache.flink.api.common.typeutils.base.ListSerializer@b2107f67}, DeltaTrigger(com.hjc.test.blink_test.ChinanTopSpeedWindowing$1@350aac89, 50.0), TimeEvictor(10000), WindowedStream.reduce(WindowedStream.java:258))\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"pact\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Operator\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"contents\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"TriggerWindow(GlobalWindows(), ListStateDescriptor{serializer=org.apache.flink.api.common.typeutils.base.ListSerializer@b2107f67}, DeltaTrigger(com.hjc.test.blink_test.ChinanTopSpeedWindowing$1@350aac89, 50.0), TimeEvictor(10000), WindowedStream.reduce(WindowedStream.java:258))\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"parallelism\\\\\\\\\\\\\\": 1,\\\\\\\\n      \\\\\\\\\\\\\\"predecessors\\\\\\\\\\\\\\": [\\\\\\\\n        {\\\\\\\\n          \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 2,\\\\\\\\n          \\\\\\\\\\\\\\"ship_strategy\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"KEY-GROUP\\\\\\\\\\\\\\",\\\\\\\\n          \\\\\\\\\\\\\\"side\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"second\\\\\\\\\\\\\\"\\\\\\\\n        }\\\\\\\\n      ]\\\\\\\\n    },\\\\\\\\n    {\\\\\\\\n      \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 5,\\\\\\\\n      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Sink: Unnamed\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"pact\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Data Sink\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"contents\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Sink: Unnamed\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"parallelism\\\\\\\\\\\\\\": 1,\\\\\\\\n      \\\\\\\\\\\\\\"predecessors\\\\\\\\\\\\\\": [\\\\\\\\n        {\\\\\\\\n          \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 4,\\\\\\\\n          \\\\\\\\\\\\\\"ship_strategy\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"FORWARD\\\\\\\\\\\\\\",\\\\\\\\n          \\\\\\\\\\\\\\"side\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"second\\\\\\\\\\\\\\"\\\\\\\\n        }\\\\\\\\n      ]\\\\\\\\n    }\\\\\\\\n  ]\\\\\\\\n}\\",\\n        \\"ApiType\\": \\"DATASTREAM\\",\\n        \\"ProjectName\\": \\"project1\\",\\n        \\"JobType\\": \\"FLINK_STREAM\\",\\n        \\"EngineVersion\\": \\"blink_2.2.4\\",\\n        \\"Creator\\": \\"1709064687573327\\",\\n        \\"Modifier\\": \\"1709064687573327\\",\\n        \\"QueueName\\": \\"root.bayes_team\\",\\n        \\"Description\\": \\"test\\",\\n        \\"JobName\\": \\"job1\\",\\n        \\"FolderId\\": 10148,\\n        \\"JobId\\": \\"9t9m6jfw8rb44iexhbpv3tnz\\",\\n        \\"Packages\\": \\"blink_test_datastream.jar\\",\\n        \\"Code\\": \\"blink.main.class=com.hjc.test.blink_test.ChinanTopSpeedWindowing2\\\\\\\\r\\\\\\\\nblink.job.name=datastream_prestest\\",\\n        \\"IsCommitted\\": true,\\n        \\"ClusterId\\": \\"et2cloud****\\",\\n        \\"ModifyTime\\": 1548397575000,\\n        \\"Properties\\": \\"#checkpoint模式：EXACTLY_ONCE 或者 AT_LEAST_ONCE\\\\\\\\n#blink.checkpoint.mode=EXACTLY_ONCE\\\\\\\\n\\\\\\\\n#checkpoint间隔时间，单位毫秒\\\\\\\\n#blink.checkpoint.interval.ms=180000\\\\\\\\n\\\\\\\\n#rocksdb的数据生命周期，单位毫秒\\\\\\\\n#state.backend.rocksdb.ttl.ms=129600000\\\\\\\\n\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<TotalPage>1</TotalPage>\\n<PageSize>10</PageSize>\\n<RequestId>31FDAE27-F135-4DAB-9C75-FADD6B0C4D1D</RequestId>\\n<Jobs>\\n    <Job>\\n        <ModifyTime>1583722910000</ModifyTime>\\n        <Description/>\\n        <EngineVersion>blink-3.4.4</EngineVersion>\\n        <ProjectName>bayes_team</ProjectName>\\n        <ClusterId>et2cloud****</ClusterId>\\n        <PlanJson>{\\n  \\"nodes\\": [\\n    {\\n      \\"id\\": 1,\\n      \\"type\\": \\"Source: Custom Source\\",\\n      \\"pact\\": \\"Data Source\\",\\n      \\"contents\\": \\"Source: Custom Source\\",\\n      \\"parallelism\\": 1\\n    },\\n    {\\n      \\"id\\": 2,\\n      \\"type\\": \\"Timestamps/Watermarks\\",\\n      \\"pact\\": \\"Operator\\",\\n      \\"contents\\": \\"Timestamps/Watermarks\\",\\n      \\"parallelism\\": 1,\\n      \\"predecessors\\": [\\n        {\\n          \\"id\\": 1,\\n          \\"ship_strategy\\": \\"FORWARD\\",\\n          \\"side\\": \\"second\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\"id\\": 4,\\n      \\"type\\": \\"TriggerWindow(GlobalWindows(), ListStateDescriptor{serializer=org.apache.flink.api.common.typeutils.base.ListSerializer@b2107f67}, DeltaTrigger(com.hjc.test.blink_test.ChinanTopSpeedWindowing$1@350aac89, 50.0), TimeEvictor(10000), WindowedStream.reduce(WindowedStream.java:258))\\",\\n      \\"pact\\": \\"Operator\\",\\n      \\"contents\\": \\"TriggerWindow(GlobalWindows(), ListStateDescriptor{serializer=org.apache.flink.api.common.typeutils.base.ListSerializer@b2107f67}, DeltaTrigger(com.hjc.test.blink_test.ChinanTopSpeedWindowing$1@350aac89, 50.0), TimeEvictor(10000), WindowedStream.reduce(WindowedStream.java:258))\\",\\n      \\"parallelism\\": 1,\\n      \\"predecessors\\": [\\n        {\\n          \\"id\\": 2,\\n          \\"ship_strategy\\": \\"KEY-GROUP\\",\\n          \\"side\\": \\"second\\"\\n        }\\n      ]\\n    },\\n    {\\n      \\"id\\": 5,\\n      \\"type\\": \\"Sink: Unnamed\\",\\n      \\"pact\\": \\"Data Sink\\",\\n      \\"contents\\": \\"Sink: Unnamed\\",\\n      \\"parallelism\\": 1,\\n      \\"predecessors\\": [\\n        {\\n          \\"id\\": 4,\\n          \\"ship_strategy\\": \\"FORWARD\\",\\n          \\"side\\": \\"second\\"\\n        }\\n      ]\\n    }\\n  ]\\n}</PlanJson>\\n        <CreateTime>1551161842000</CreateTime>\\n        <JobName>job1</JobName>\\n        <Creator>1709064687573327</Creator>\\n        <FolderId>10148</FolderId>\\n        <Properties>#checkpoint模式：EXACTLY_ONCE 或者 AT_LEAST_ONCE\\n#blink.checkpoint.mode=EXACTLY_ONCE\\n\\n#checkpoint间隔时间，单位毫秒\\n#blink.checkpoint.interval.ms=180000\\n\\n#rocksdb的数据生命周期，单位毫秒\\n#state.backend.rocksdb.ttl.ms=129600000\\n</Properties>\\n        <Code>blink.main.class=com.hjc.test.blink_test.ChinanTopSpeedWindowing2\\r\\nblink.job.name=datastream_prestest</Code>\\n        <JobType>FLINK_STREAM</JobType>\\n        <Packages>blink_test_datastream.jar</Packages>\\n        <ApiType>DATASTREAM</ApiType>\\n        <IsCommitted>true</IsCommitted>\\n        <Modifier>1709064687573327</Modifier>\\n        <QueueName>root.bayes_team</QueueName>\\n        <JobId>9t9m6jfw8rb44iexhbpv3tnz</JobId>\\n    </Job>\\n</Jobs>\\n<PageIndex>1</PageIndex>","errorExample":""}]',
      'title' => '获取指定Package的所有作业详情',
      'summary' => '您可以通过GetRefPackageJob OpenAPI获取指定Package的所有作业详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListPackage' => 
    array (
      'path' => '/api/v2/projects/{projectName}/packages',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'packageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Package名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'package1.jar',
          ),
        ),
        3 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Package类型：
- JAR：JAR包
- DICTIONARY：普通文件
- SCRIPT：脚本
- PYTHON：Python文件或者ZIP包',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'JAR',
          ),
        ),
        4 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页包含Package数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'pageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'tag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Package的标记',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"function":"group by time"}',
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
              'PageIndex' => 
              array (
                'description' => '第几页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '总页面数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含Package数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F33B93C0-56E6-43BD-B30F-E1FF1D4EF1EE',
              ),
              'TotalCount' => 
              array (
                'description' => 'Package总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
              'Packages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Package' => 
                  array (
                    'description' => 'Package详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => 'Package 类型：
- JAR：JAR包
- DICTIONARY：普通文件
- SCRIPT：脚本
- PYTHON：Python文件或者ZIP包',
                          'type' => 'string',
                          'example' => 'JAR',
                        ),
                        'ScanExtBizNo' => 
                        array (
                          'type' => 'string',
                        ),
                        'PackageName' => 
                        array (
                          'description' => 'Package名称',
                          'type' => 'string',
                          'example' => 'aliyun-java-sdk-foas-2.9.0.jar',
                        ),
                        'ScanErrorMessage' => 
                        array (
                          'type' => 'string',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间（13位时间戳，精确到毫秒）',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1600156643000',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '项目名称',
                          'type' => 'string',
                          'example' => 'project1',
                        ),
                        'ScanLink' => 
                        array (
                          'type' => 'string',
                        ),
                        'Tag' => 
                        array (
                          'description' => 'Package的标记',
                          'type' => 'string',
                          'example' => '{"function":"group by time"}',
                        ),
                        'OssBucket' => 
                        array (
                          'description' => 'OssBucket',
                          'type' => 'string',
                          'example' => '79zec7svps7hca0xnogbqpvu/aliyun-java-sdk-foas-2.9.0.jar/l1jsjfzlps4z4pk5rhutb91k.bayes',
                        ),
                        'OriginName' => 
                        array (
                          'description' => 'Package别名',
                          'type' => 'string',
                          'example' => 'aliyun-java-sdk-foas-2.9.0.jar',
                        ),
                        'Creator' => 
                        array (
                          'description' => '创建者',
                          'type' => 'string',
                          'example' => '1709064687573327',
                        ),
                        'Modifier' => 
                        array (
                          'description' => '最新修改者',
                          'type' => 'string',
                          'example' => '1709064687573327',
                        ),
                        'Description' => 
                        array (
                          'description' => 'Package备注',
                          'type' => 'string',
                          'example' => 'adas',
                        ),
                        'ScanState' => 
                        array (
                          'type' => 'string',
                        ),
                        'OssOwner' => 
                        array (
                          'description' => 'Oss拥有者',
                          'type' => 'string',
                          'example' => 'owner1',
                        ),
                        'Md5' => 
                        array (
                          'description' => 'Package的Md5值',
                          'type' => 'string',
                          'example' => 'e0899e291f0524c6e6572c126599f73b',
                        ),
                        'OssPath' => 
                        array (
                          'description' => 'Oss路径',
                          'type' => 'string',
                          'example' => 'path1/path2/a.jar',
                        ),
                        'OssEndpoint' => 
                        array (
                          'description' => 'Oss接入点',
                          'type' => 'string',
                          'example' => 'oss-cn-hangzhou-internal.aliyuncs.com',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '最新修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1600156643000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"TotalPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"F33B93C0-56E6-43BD-B30F-E1FF1D4EF1EE\\",\\n  \\"TotalCount\\": 4,\\n  \\"Packages\\": {\\n    \\"Package\\": [\\n      {\\n        \\"Type\\": \\"JAR\\",\\n        \\"PackageName\\": \\"aliyun-java-sdk-foas-2.9.0.jar\\",\\n        \\"CreateTime\\": 1600156643000,\\n        \\"ProjectName\\": \\"project1\\",\\n        \\"Tag\\": \\"{\\\\\\"function\\\\\\":\\\\\\"group by time\\\\\\"}\\",\\n        \\"OssBucket\\": \\"79zec7svps7hca0xnogbqpvu/aliyun-java-sdk-foas-2.9.0.jar/l1jsjfzlps4z4pk5rhutb91k.bayes\\",\\n        \\"OriginName\\": \\"aliyun-java-sdk-foas-2.9.0.jar\\",\\n        \\"Creator\\": \\"1709064687573327\\",\\n        \\"Modifier\\": \\"1709064687573327\\",\\n        \\"Description\\": \\"adas\\",\\n        \\"OssOwner\\": \\"owner1\\",\\n        \\"Md5\\": \\"e0899e291f0524c6e6572c126599f73b\\",\\n        \\"OssPath\\": \\"path1/path2/a.jar\\",\\n        \\"OssEndpoint\\": \\"oss-cn-hangzhou-internal.aliyuncs.com\\",\\n        \\"ModifyTime\\": 1600156643000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>4</TotalCount>\\n<TotalPage>1</TotalPage>\\n<PageSize>10</PageSize>\\n<RequestId>F33B93C0-56E6-43BD-B30F-E1FF1D4EF1EE</RequestId>\\n<Packages>\\n    <Package>\\n        <ModifyTime>1600156643000</ModifyTime>\\n        <OriginName>aliyun-java-sdk-foas-2.9.0.jar</OriginName>\\n        <Type>JAR</Type>\\n        <Description>adas</Description>\\n        <ProjectName>project1</ProjectName>\\n        <PackageName>aliyun-java-sdk-foas-2.9.0.jar</PackageName>\\n        <CreateTime>1600156643000</CreateTime>\\n        <OssPath>79zec7svps7hca0xnogbqpvu/aliyun-java-sdk-foas-2.9.0.jar/l1jsjfzlps4z4pk5rhutb91k.bayes</OssPath>\\n        <Creator>1709064687573327</Creator>\\n        <Modifier>1709064687573327</Modifier>\\n        <Md5>e0899e291f0524c6e6572c126599f73b</Md5>\\n    </Package>\\n    <Package>\\n        <ModifyTime>1596436948000</ModifyTime>\\n        <OriginName>blink-udx-2.x-1.0-snapshot.jar</OriginName>\\n        <Type>JAR</Type>\\n        <Description>123</Description>\\n        <ProjectName>bayes_team</ProjectName>\\n        <PackageName>blink-udx-2.x-1.0-snapshot.jar</PackageName>\\n        <CreateTime>1596436947000</CreateTime>\\n        <OssPath>79zec7svps7hca0xnogbqpvu/blink-udx-2.x-1.0-snapshot.jar/dr6r901verct65f612ca4t0c.bayes</OssPath>\\n        <Creator>1709064687573327</Creator>\\n        <Modifier>1709064687573327</Modifier>\\n        <Md5>70bf694b7c737ee608f1aaf11b15816a</Md5>\\n    </Package>\\n    <Package>\\n        <ModifyTime>1551161104000</ModifyTime>\\n        <OriginName>blink_test_datastream.jar</OriginName>\\n        <Type>JAR</Type>\\n        <Description>1</Description>\\n        <ProjectName>bayes_team</ProjectName>\\n        <PackageName>blink_test_datastream.jar</PackageName>\\n        <CreateTime>1551161103000</CreateTime>\\n        <OssPath>79zec7svps7hca0xnogbqpvu/blink_test_datastream.jar/mg5174rvvsv472xrkvv23wn3.bayes</OssPath>\\n        <Creator>1709064687573327</Creator>\\n        <Modifier>1709064687573327</Modifier>\\n        <Md5>7fd9782e4aad6e4b6a9aed8521774d40</Md5>\\n    </Package>\\n    <Package>\\n        <ModifyTime>1546094734000</ModifyTime>\\n        <OriginName>sql_udx-3.0</OriginName>\\n        <Type>JAR</Type>\\n        <Description>1</Description>\\n        <ProjectName>bayes_team</ProjectName>\\n        <PackageName>sql_udx-3.0</PackageName>\\n        <CreateTime>1546094733000</CreateTime>\\n        <OssPath>79zec7svps7hca0xnogbqpvu/sql_udx-3.0/6za6dxizvsscdjpupnbp0cfq.bayes</OssPath>\\n        <Creator>1709064687573327</Creator>\\n        <Modifier>1709064687573327</Modifier>\\n        <Md5>d8e19321c1b33af2e52643ea169d4f7d</Md5>\\n    </Package>\\n</Packages>\\n<PageIndex>1</PageIndex>","errorExample":""}]',
      'title' => '获取 Package 信息',
      'summary' => '获取指定Project下满足特定条件的Package信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateProject' => 
    array (
      'path' => '/api/v2/projects',
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
          'name' => 'name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'project1',
          ),
        ),
        1 => 
        array (
          'name' => 'orderId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '共享模式实例ID

> 仅共享模式需要填写。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'stream-abcd',
          ),
        ),
        2 => 
        array (
          'name' => 'deployType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群类型：

- 独享集群：cell

- 共享集群：public',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'public',
          ),
        ),
        3 => 
        array (
          'name' => 'clusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cmy99ugusuco66x9qc6k****',
          ),
        ),
        4 => 
        array (
          'name' => 'managerIds',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '主账号ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1234567',
          ),
        ),
        5 => 
        array (
          'name' => 'description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目描述',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试项目',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '区域ID',
            'default' => 'cn-shanghai',
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
                'example' => 'B661F03F-0F9D-4EFF-A40F-4ED1519A549A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B661F03F-0F9D-4EFF-A40F-4ED1519A549A\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>B661F03F-0F9D-4EFF-A40F-4ED1519A549A</requestId>","errorExample":""}]',
      'title' => '在集群中创建项目',
      'summary' => '您可以通过CreateProject OpenAPI在集群中创建项目。',
      'description' => '> 不能通过子账号的AK信息以openAPI方式创建项目。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteProject' => 
    array (
      'path' => '/api/v2/projects/{projectName}',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
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
                'example' => '3F4ADBCF-B116-4680-80B3-E9A139841A0D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3F4ADBCF-B116-4680-80B3-E9A139841A0D\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>3F4ADBCF-B116-4680-80B3-E9A139841A0D</requestId>","errorExample":""}]',
      'title' => '删除集群中的项目',
      'summary' => '如果需要删除的项目已经和Queue绑定，也会将项目和Queue解绑（不会删除Queue）。',
      'description' => '> DeleteProject仅支持独享模式。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateProject' => 
    array (
      'path' => '/api/v2/projects/{projectName}',
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
          'name' => 'globalJobConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'UpdateProjectConfig' => 
    array (
      'path' => '/api/v2/project/config',
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
          'name' => 'IsOpenBatchSQL',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'type' => 'boolean',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'GetProject' => 
    array (
      'path' => '/api/v2/projects/{projectName}',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
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
                'example' => '4A6BFFEE-6C96-4727-A620-A109F50284DA',
              ),
              'Project' => 
              array (
                'description' => '项目详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'GlobalJobConfig' => 
                  array (
                    'description' => '项目级别系统参数。',
                    'type' => 'string',
                    'example' => 'sql.type=print  datastream.main.class=test',
                  ),
                  'State' => 
                  array (
                    'description' => '项目状态。',
                    'type' => 'string',
                    'example' => 'ENABLE',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '项目创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1597655424000',
                  ),
                  'DeployType' => 
                  array (
                    'description' => '集群类型：

- 独享集群：cell。
- 共享集群：public。',
                    'type' => 'string',
                    'example' => 'cell',
                  ),
                  'Creator' => 
                  array (
                    'description' => '项目创建者的UID。',
                    'type' => 'string',
                    'example' => '23996037709276****',
                  ),
                  'Modifier' => 
                  array (
                    'description' => '项目修改者UID。',
                    'type' => 'string',
                    'example' => '23996037709276****',
                  ),
                  'Description' => 
                  array (
                    'description' => '项目描述。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Region' => 
                  array (
                    'description' => '区域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ManagerIds' => 
                  array (
                    'description' => '管理员ID列表。多个ID使用英文逗号（,）分隔。',
                    'type' => 'string',
                    'example' => '107992689699****',
                  ),
                  'Name' => 
                  array (
                    'description' => '项目名称。',
                    'type' => 'string',
                    'example' => 'project1',
                  ),
                  'Id' => 
                  array (
                    'description' => '请求ID。',
                    'type' => 'string',
                    'example' => '7ht9ed87rtd48bof9mu8****',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '项目修改时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1597655424000',
                  ),
                  'ClusterId' => 
                  array (
                    'description' => '集群ID。
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
                    'type' => 'string',
                    'example' => 'rcmp9x37ztfb63g1x7lt****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A6BFFEE-6C96-4727-A620-A109F50284DA\\",\\n  \\"Project\\": {\\n    \\"GlobalJobConfig\\": \\"sql.type=print  datastream.main.class=test\\",\\n    \\"State\\": \\"ENABLE\\",\\n    \\"CreateTime\\": 1597655424000,\\n    \\"DeployType\\": \\"cell\\",\\n    \\"Creator\\": \\"23996037709276****\\",\\n    \\"Modifier\\": \\"23996037709276****\\",\\n    \\"Description\\": \\"test\\",\\n    \\"Region\\": \\"cn-hangzhou\\",\\n    \\"ManagerIds\\": \\"107992689699****\\",\\n    \\"Name\\": \\"project1\\",\\n    \\"Id\\": \\"7ht9ed87rtd48bof9mu8****\\",\\n    \\"ModifyTime\\": 1597655424000,\\n    \\"ClusterId\\": \\"rcmp9x37ztfb63g1x7lt****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Project>\\n    <DeployType>CELL</DeployType>\\n    <ModifyTime>1597655424000</ModifyTime>\\n    <ManagerIds>107992689699****</ManagerIds>\\n    <Description>test</Description>\\n    <ClusterId>rcmp9x37ztfb63g1x7lt****</ClusterId>\\n    <CreateTime>1597655424000</CreateTime>\\n    <Creator>23996037709276****</Creator>\\n    <Name>project1</Name>\\n    <State>ENABLE</State>\\n    <Region>cn-hangzhou</Region>\\n    <Id>7ht9ed87rtd48bof9mu8****</Id>\\n    <Modifier>23996037709276****</Modifier>\\n</Project>\\n<RequestId>4A6BFFEE-6C96-4727-A620-A109F50284DA</RequestId>","errorExample":""}]',
      'title' => 'GetProject',
      'summary' => '您可以通过GetProject OpenAPI查看指定项目的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListProject' => 
    array (
      'path' => '/api/v2/projects',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'job1',
          ),
        ),
        2 => 
        array (
          'name' => 'deployType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群类型： 

- CELL：独享集群

- PUBLIC：共享集群',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cell',
          ),
        ),
        3 => 
        array (
          'name' => 'clusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cmy99ugusuco66x9qc6k****',
          ),
        ),
        4 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的项目数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'pageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'PageIndex' => 
              array (
                'description' => '查询的页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '总页码数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的项目数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5A0EA261-AA2F-47FF-B7D9-A785ED1D0ADE',
              ),
              'TotalCount' => 
              array (
                'description' => '总项目数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'Projects' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'description' => '项目详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'State' => 
                        array (
                          'description' => '项目状态',
                          'type' => 'string',
                          'example' => 'ENABLE',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '项目创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1597655424000',
                        ),
                        'DeployType' => 
                        array (
                          'description' => '集群类型： 

- CELL：独享集群

- PUBLIC：共享集群',
                          'type' => 'string',
                          'example' => 'CELL',
                        ),
                        'Creator' => 
                        array (
                          'description' => '项目创建者的UID',
                          'type' => 'string',
                          'example' => '23996037709276****',
                        ),
                        'Modifier' => 
                        array (
                          'description' => '项目修改者UID',
                          'type' => 'string',
                          'example' => '27395716024545****',
                        ),
                        'Description' => 
                        array (
                          'description' => '项目描述',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Region' => 
                        array (
                          'description' => '区域ID',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ManagerIds' => 
                        array (
                          'description' => '管理员ID列表。多个ID请使用逗号（,）分隔。',
                          'type' => 'string',
                          'example' => '1079926896999421',
                        ),
                        'Name' => 
                        array (
                          'description' => '项目名称',
                          'type' => 'string',
                          'example' => 'project1',
                        ),
                        'Id' => 
                        array (
                          'description' => '请求ID',
                          'type' => 'string',
                          'example' => 'e8edisrtou71a2neroi5f3kc',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '项目修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1605610424000',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
                          'type' => 'string',
                          'example' => 'rcmp9x37ztfb63g1x7lt****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"TotalPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"5A0EA261-AA2F-47FF-B7D9-A785ED1D0ADE\\",\\n  \\"TotalCount\\": 3,\\n  \\"Projects\\": {\\n    \\"Project\\": [\\n      {\\n        \\"State\\": \\"ENABLE\\",\\n        \\"CreateTime\\": 1597655424000,\\n        \\"DeployType\\": \\"CELL\\",\\n        \\"Creator\\": \\"23996037709276****\\",\\n        \\"Modifier\\": \\"27395716024545****\\",\\n        \\"Description\\": \\"test\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"ManagerIds\\": \\"1079926896999421\\",\\n        \\"Name\\": \\"project1\\",\\n        \\"Id\\": \\"e8edisrtou71a2neroi5f3kc\\",\\n        \\"ModifyTime\\": 1605610424000,\\n        \\"ClusterId\\": \\"rcmp9x37ztfb63g1x7lt****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>3</TotalCount>\\n<TotalPage>1</TotalPage>\\n<PageSize>10</PageSize>\\n<RequestId>5A0EA261-AA2F-47FF-B7D9-A785ED1D0ADE</RequestId>\\n<Projects>\\n    <Project>\\n        <DeployType>CELL</DeployType>\\n        <ModifyTime>1597655424000</ModifyTime>\\n        <ManagerIds>1079926896999421</ManagerIds>\\n        <Description>test</Description>\\n        <ClusterId>rcmp9x37ztfb63g1x7lt****</ClusterId>\\n        <State>ENABLE</State>\\n        <CreateTime>1597655424000</CreateTime>\\n        <Region>cn-hangzhou</Region>\\n        <Creator>23996037709276****</Creator>\\n        <Id>7ht9ed87rtd48bof9mu8895z</Id>\\n        <Modifier>23996037709276****</Modifier>\\n        <Name>project1</Name>\\n    </Project>\\n    <Project>\\n        <DeployType>CELL</DeployType>\\n        <ModifyTime>1605610424000</ModifyTime>\\n        <ManagerIds>1079926896999421</ManagerIds>\\n        <Description>stream4demo</Description>\\n        <ClusterId>rulpqd442sgxbtw9736r****</ClusterId>\\n        <State>ENABLE</State>\\n        <CreateTime>1605610424000</CreateTime>\\n        <Region>cn-beijing</Region>\\n        <Creator>27395716024545****</Creator>\\n        <Id>e8edisrtou71a2neroi5f3kc</Id>\\n        <Modifier>27395716024545****</Modifier>\\n        <Name>stream4demo</Name>\\n    </Project>\\n</Projects>\\n<PageIndex>1</PageIndex>","errorExample":""}]',
      'title' => '查询多个项目信息',
      'summary' => '查询多个项目的信息。查询的项目信息可根据参数选择，进行自由组合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateQueue' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/queue',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
          ),
        ),
        2 => 
        array (
          'name' => 'queueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的名称。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'root.default',
          ),
        ),
        3 => 
        array (
          'name' => 'maxVcore',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的最大CPU个数。
>100Vcore = 1CU = 4G MEM。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '4',
          ),
        ),
        4 => 
        array (
          'name' => 'maxMemMB',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的最大内存，单位为MB。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '16',
          ),
        ),
        5 => 
        array (
          'name' => 'gpu',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'GPU个数。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9F1CAD8D-E80E-45AF-82D7-8314FE17A34A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9F1CAD8D-E80E-45AF-82D7-8314FE17A34A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9F1CAD8D-E80E-45AF-82D7-8314FE17A34A</RequestId>","errorExample":""}]',
      'title' => '将集群资源分配到创建的Queue中',
      'summary' => '绑定Queue中的项目。Queue创建成功后即开始消耗资源。',
      'description' => '

> CreateQueue仅限独享模式使用。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteQueue' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/queue',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd6wxwo5tnrmuamx2ly3m****',
          ),
        ),
        2 => 
        array (
          'name' => 'queueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Queue名称
> 您可以使用[GetClusterQueueInfo](~~117517~~)获取Queue名称信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'root.default',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '删除 Queue',
      'summary' => '删除已存在的Queue。如果需要删除的Queue已被项目绑定，则需要先解绑项目，再进行删除。',
      'description' => '> DeleteQueue仅适用于独享模式。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateQueue' => 
    array (
      'path' => '/api/v2/clusters/{clusterId}/queue',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'h6272cj4etgqe7oe****',
          ),
        ),
        2 => 
        array (
          'name' => 'queueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'root.cloudpay_dev',
          ),
        ),
        3 => 
        array (
          'name' => 'maxVcore',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的最大CPU个数。
> 100Vcore=1core。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '4',
          ),
        ),
        4 => 
        array (
          'name' => 'maxMemMB',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的最大内存，单位为MB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '16',
          ),
        ),
        5 => 
        array (
          'name' => 'gpu',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'GPU个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9F1CAD8D-E80E-45AF-82D7-8314FE17A34A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9F1CAD8D-E80E-45AF-82D7-8314FE17A34A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9F1CAD8D-E80E-45AF-82D7-8314FE17A34A</RequestId>","errorExample":""}]',
      'title' => '修改指定queue的某些参数',
      'summary' => '例如maxVcore、maxMemMB等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListProjectBindQueue' => 
    array (
      'path' => '/api/v2/projects/{projectName}/queues',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'clusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'd6wxwo5tnrmuamx2ly3m****',
          ),
        ),
        3 => 
        array (
          'name' => 'queueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称
> 您可以使用[GetClusterQueueInfo](~~117517~~)获取Queue名称信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'root.project1',
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
                'example' => '36277E3E-99BA-43C7-8F91-ADCC8FE1EC96',
              ),
              'Queues' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Queue' => 
                  array (
                    'description' => '队列详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'QueueName' => 
                        array (
                          'description' => '队列名称',
                          'type' => 'string',
                          'example' => 'root.project1',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID',
                          'type' => 'string',
                          'example' => 'd6wxwo5tnrmuamx2ly3m****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36277E3E-99BA-43C7-8F91-ADCC8FE1EC96\\",\\n  \\"Queues\\": {\\n    \\"Queue\\": [\\n      {\\n        \\"QueueName\\": \\"root.project1\\",\\n        \\"ClusterId\\": \\"d6wxwo5tnrmuamx2ly3m****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>36277E3E-99BA-43C7-8F91-ADCC8FE1EC96</RequestId>\\n<Queues>\\n    <Queue>\\n        <ClusterId>d6wxwo5tnrmuamx2ly3m****</ClusterId>\\n        <QueueName>root.project1</QueueName>\\n    </Queue>\\n</Queues>","errorExample":""}]',
      'title' => '查看指定项目对应的队列相关的信息',
      'summary' => '您可以通过ListProjectBindQueue OpenAPI查看指定项目对应的队列相关的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListProjectBindQueueResource' => 
    array (
      'path' => '/api/v2/projects/{projectName}/queueresource',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'clusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'd6wxwo5tnrmuamx2ly3m****',
          ),
        ),
        3 => 
        array (
          'name' => 'queueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称
> 您可以使用[GetClusterQueueInfo](~~117517~~)获取Queue名称信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'root.project1',
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
                'example' => '2127A47D-CB91-44AE-8277-3FC645A761CE',
              ),
              'Queues' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Queue' => 
                  array (
                    'description' => '队列详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UsedGpu' => 
                        array (
                          'description' => '已使用GPU',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MaxMem' => 
                        array (
                          'description' => '内存最大值（MB）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '24576',
                        ),
                        'UsedMem' => 
                        array (
                          'description' => '已使用内存（MB）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10496',
                        ),
                        'MinGpu' => 
                        array (
                          'description' => '最小GPU数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MaxGpu' => 
                        array (
                          'description' => 'GPU最大值',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'QueueName' => 
                        array (
                          'description' => '队列名称',
                          'type' => 'string',
                          'example' => 'root.project1',
                        ),
                        'MinVCore' => 
                        array (
                          'description' => '最小Vcore数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '599',
                        ),
                        'UsedVCore' => 
                        array (
                          'description' => '已使用VCore',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '250',
                        ),
                        'MinMem' => 
                        array (
                          'description' => '最小内存数（MB）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '24535',
                        ),
                        'MaxVCore' => 
                        array (
                          'description' => '最大Vcore数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '600',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID',
                          'type' => 'string',
                          'example' => 'd6wxwo5tnrmuamx2ly3m****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2127A47D-CB91-44AE-8277-3FC645A761CE\\",\\n  \\"Queues\\": {\\n    \\"Queue\\": [\\n      {\\n        \\"UsedGpu\\": 0,\\n        \\"MaxMem\\": 24576,\\n        \\"UsedMem\\": 10496,\\n        \\"MinGpu\\": 0,\\n        \\"MaxGpu\\": 0,\\n        \\"QueueName\\": \\"root.project1\\",\\n        \\"MinVCore\\": 599,\\n        \\"UsedVCore\\": 250,\\n        \\"MinMem\\": 24535,\\n        \\"MaxVCore\\": 600,\\n        \\"ClusterId\\": \\"d6wxwo5tnrmuamx2ly3m****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2127A47D-CB91-44AE-8277-3FC645A761CE</RequestId>\\n<Queues>\\n    <Queue>\\n        <MaxMem>24576</MaxMem>\\n        <UsedGpu>0</UsedGpu>\\n        <UsedMem>10496</UsedMem>\\n        <ClusterId>d6wxwo5tnrmuamx2ly3m****</ClusterId>\\n        <MinGpu>0</MinGpu>\\n        <MaxVCore>600</MaxVCore>\\n        <MinVCore>599</MinVCore>\\n        <MaxGpu>0</MaxGpu>\\n        <MinMem>24535</MinMem>\\n        <QueueName>root.project1</QueueName>\\n        <UsedVCore>250</UsedVCore>\\n    </Queue>\\n</Queues>","errorExample":""}]',
      'title' => '查询Project关联的队列详情',
      'summary' => '您可以通过ListProjectBindQueueResource OpenAPI查询Project关联的队列详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindQueue' => 
    array (
      'path' => '/api/v2/projects/{projectName}/queue',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'clusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'd6wxwo5tnrmuamx2ly3m****',
          ),
        ),
        3 => 
        array (
          'name' => 'queueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要绑定的Queue名称
> 您可以使用[GetClusterQueueInfo](~~117517~~)获取Queue名称信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'queue1',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '将Project绑定在Queue上',
      'summary' => '将Project绑定在已经存在但没有被其他Project绑定的Queue上。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindQueue' => 
    array (
      'path' => '/api/v2/projects/{projectName}/queue',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'clusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmy99ugusuco66x9qc6k****',
          ),
        ),
        3 => 
        array (
          'name' => 'queueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要绑定的Queue名称
> 您可以使用[GetClusterQueueInfo](~~117517~~)获取Queue名称信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'queue1',
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
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '解绑Queue中已经绑定的项目',
      'summary' => '您可以通过UnbindQueue OpenAPI将Queue中已经绑定的项目进行解绑。执行UnbindQueue操作前，需要将项目上的作业全部下线。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        1 => 
        array (
          'name' => 'properties',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业运行的相关参数',
            'type' => 'string',
            'required' => false,
            'example' => '{k:v}',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'jobType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业类型： 
- FLINK_STREAM：流作业
- FLINK_BATCH：批作业',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FLINK_STREAM',
          ),
        ),
        4 => 
        array (
          'name' => 'apiType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'API类型：
- DATASTREAM：Datastream作业
- SQL：SQL作业',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Datastream',
          ),
        ),
        5 => 
        array (
          'name' => 'code',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业代码：
- SQL作业：填写SQL代码。
- DataStream作业：填写DataStream作业的相关参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'blink.main.class=com.hjc.test.blink_test.ChinanTopSpeedWindowing2\\r\\nblink.job.name=datastream_prestest',
          ),
        ),
        6 => 
        array (
          'name' => 'planJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行计划',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{a:b}',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '区域ID',
            'default' => 'cn-shanghai',
          ),
        ),
        8 => 
        array (
          'name' => 'packages',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'JAR包名称，多个使用逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'package1,package2',
          ),
        ),
        9 => 
        array (
          'name' => 'description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业备注',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        10 => 
        array (
          'name' => 'engineVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '引擎版本',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'blink_2.2.4',
          ),
        ),
        11 => 
        array (
          'name' => 'clusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'rcmp9x37ztfb63g1x7lt****',
          ),
        ),
        12 => 
        array (
          'name' => 'queueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '队列名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'root.default',
          ),
        ),
        13 => 
        array (
          'name' => 'folderId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件夹ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
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
                'example' => 'B661F03F-0F9D-4EFF-A40F-4ED1519A549A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B661F03F-0F9D-4EFF-A40F-4ED1519A549A\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>B661F03F-0F9D-4EFF-A40F-4ED1519A549A</requestId>","errorExample":""}]',
      'title' => '在指定项目下创建作业',
      'summary' => '您可以通过CreateJob OpenAPI在指定项目下创建作业。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
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
                'example' => '78261AC6-B5C9-4514-B82F-39BCC45A5D63',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"78261AC6-B5C9-4514-B82F-39BCC45A5D63\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>78261AC6-B5C9-4514-B82F-39BCC45A5D63</RequestId>","errorExample":""}]',
      'title' => '删除已下线作业',
      'summary' => '删除已经下线的作业，删除未下线作业会报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/instance',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'parameterJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'JSON格式的配置参数，详情请参见配置参数表。',
            'type' => 'string',
            'required' => false,
            'example' => '{"blink.checkpoint.interval.ms":"180000"}',
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
              'instanceId' => 
              array (
                'description' => '实例ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '415854',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5313EF6E-6E3F-45DB-8E33-20DA279D8F3F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"instanceId\\": 415854,\\n  \\"RequestId\\": \\"5313EF6E-6E3F-45DB-8E33-20DA279D8F3F\\"\\n}","errorExample":""},{"type":"xml","example":"<instanceId>415854</instanceId>\\n<RequestId>5313EF6E-6E3F-45DB-8E33-20DA279D8F3F</RequestId>","errorExample":""}]',
      'title' => '开始启动作业',
      'summary' => '启动作业。',
      'requestParamsDescription' => '### 配置参数
|参数名称|说明|备注|
|-----|---- |------|
|blink.checkpoint.mode|Checkpoint模式 |AT_LEAST_ONCE：至少计算一次。EXACTLY_ONCE：精确计算一次。|
|blink.checkpoint.interval.ms|Checkpoint间隔时间|数据类型为LONG，例如180000，单位为毫秒。 |
|blink.checkpoint.timeout.ms|Checkpoint超时时间|数据类型为LONG，例如600000，单位为毫秒，默认值为10分钟。|
|blink.job.option.jmMemMB|Job Manager内存|例如1024 MB。|
|blink.job.option|传给Flink Run的参数，可以传递多个参数，具体请参见Flink命令说明。|例如设置Task Manager的JVM线程的堆栈大小，可以配置：blink.job.option=-yD env.java.opts=\'-Xss8192K\'。 |
|client.jvm.option|编译阶段的JVM|例如：-Xss2048k。|
|blink.miniBatch.allowLatencyMs|Batch最大允许延迟时间|添加或删除该参数Job状态会丢失，修改值大小状态不会丢失，数据类型为LONG， 例如10000，单位为毫秒。|
|blink.miniBatch.size|Batch最大条数|添加或删除该参数Job状态会丢失，修改值大小状态不会丢失；此参数不能设置过大，如果一个Batch实际去完重的数据超过65536，在访问statebackend时可能触发JNI OOM异常；数据类型为LONG， 例如1000。|
|blink.microBatch.allowLatencyMs|Batch最大允许延迟时间，与minibatch的区别在于microbatch是基于batchmark触发的，而不是timer，具有更高的效率。|数据类型为LONG， 例如10000，Blink 2.2及以上版本支持该参数，单位为毫秒。|
|blink.localAgg.enabled|是否开启Local-Global Agg。需要开启MiniBatch，Local-Global Agg功能才生效。|添加或删除该参数Job状态会丢失，修改值大小状态不会丢失；Blink 2.2版本默认值为true，其他版本默认值为false。|
|blink.partialAgg.enabled|是否开启Partial-Final Agg。Parital-Final Agg常用于解决COUNT DISTINCT热点问题。|默认值为false，Blink 2.2.0及以上版本支持该参数。 |
|sql.exec.mini-batch.window.enabled|是否开启minibatch window|默认值为false（不开启），Blink 3.2.0及以上版本支持该参数。 |
|sql.exec.source.idle.timeout.ms|Source空闲超时的时间，当source被标记为空闲后，下游就不会再等待该分区source发来的watermark，从而能触发window。 |默认值为-1（不开启），取值大于0则表示开启。Blink 3.2.0及以上版本支持该参数。|
|blink.state.ttl.ms|TopN和groupBy节点的状态过期清理时间。状态在指定时间内没有被更新过则会被清除。|数据类型为LONG， 例如60000，单位为毫秒，默认为不清除。|
|blink.topn.cache.size|TopN缓存数据的条数。例如Top100，配置缓存10000条，即缓存了100组数据。|数据类型为LONG，默认值为10000。|
|blink.job.submit.timeoutInSeconds|SQL编译超时时间，建议设置最大不超过250s。|数据类型为LONG，默认值为180。 |
|blink.job.timeZone|作业的时区|默认为Bayes前端时区，例如Asia/Shanghai。|
|blink.object.reuse|是否开启对象重用。如果不开启，chain一起的operator之前的数据传输会发生序列化或反序列化|Blink 2.2.0及以上版本默认值为true，其他版本默认值为false。|
|blink.auto.watermark.interval.ms|Watermark发送的频率。需要权衡延迟和性能。太高会导致延迟增加，太低会导致频繁发送watermark，影响性能。|默认值为100ms。 |
|blink.job.timestamp.reserve.ms|对于Ads、Petadata、SLS、Elasticsearch、DataHub类型的Sink，在写入timestamp类型时支持毫秒精度。|默认值为false，Blink 2.2.6及以上版本支持该参数。|
|yarn.app.blink.source.buffer-len|Connector source里面RecordReader线程作为生产者，上层ParallelReader线程作为消费者，中间的阻塞队列的长度，当数据源单条数据较小，数据量极大时，调高此项能提升部分性能。|默认值为10。|
|yarn.app.blink.source.source.idle-interval|Connector source里面ParallelReader无数据可读时，sleep的时间。|默认值为10，单位为100ms，Blink 2.2.5及以上版本支持该参数。|
|sql.exec.fault.tolerance.enabled|是否开启容错机制|默认值为false，Blink 3.4.0及以上版本支持该参数。| 
|state.backend.niagara.ttl.ms|Niagara StateBackend中数据的保存时间|数据类型为LONG，例如129600000，默认值为一天半。|
|state.backend.block.cache.size.mb|Niagara StateBackend读缓存大小|默认值为256 MB。|
|state.backend.mem.table.size.mb|Niagara StateBackend写缓存大小|默认值为128 MB。|
|state.backend.gemini.ttl.ms|Gemini StateBackend数据的保存时间|数据类型为LONG，例如129600000，默认值为一天半。|
|state.backend.gemini.mem.size.mb|Gemini StateBackend Native内存大小|默认值为384 MB。|
|state.backend.gemini.ttl.ms|Gemini StateBackend中数据的保存时间|数据类型为LONG，例如129600000，默认值为一天半。|
|state.backend.block.cache.size.mb|Gemini StateBackend读缓存大小|默认值为256 MB。|
|state.backend.mem.table.size.mb|Gemini StateBackend写缓存大小|默认值为128 MB。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}',
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
          'name' => 'packages',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'package名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'package1.jar',
          ),
        ),
        1 => 
        array (
          'name' => 'planJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业执行计划',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{a:b}',
          ),
        ),
        2 => 
        array (
          'name' => 'code',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业代码',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'code',
          ),
        ),
        3 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        5 => 
        array (
          'name' => 'description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业备注',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'engineVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '引擎版本',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'blink_2.2.4',
          ),
        ),
        7 => 
        array (
          'name' => 'clusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群ID
> 您可以使用[listcluster](~~117251~~)获取集群ID信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'd6wxwo5tnrmuamx2ly3m7vkz',
          ),
        ),
        8 => 
        array (
          'name' => 'queueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '队列名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'root.default',
          ),
        ),
        9 => 
        array (
          'name' => 'folderId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件夹ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '123',
          ),
        ),
        10 => 
        array (
          'name' => 'properties',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '作业运行配置参数，参数详情请参见配置参数表。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'blink.checkpoint.interval.ms:180000',
          ),
        ),
        11 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
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
                'example' => 'C3FC248C-1CF4-4A64-97C1-0BD667A4D09D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3FC248C-1CF4-4A64-97C1-0BD667A4D09D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C3FC248C-1CF4-4A64-97C1-0BD667A4D09D</RequestId>","errorExample":""}]',
      'title' => '更新作业属性',
      'summary' => '更新作业相关属性。',
      'requestParamsDescription' => '### 配置参数
|参数名称|说明|备注|
|-----|---- |------|
|blink.checkpoint.mode|Checkpoint模式 |AT_LEAST_ONCE：至少计算一次。EXACTLY_ONCE：精确计算一次。|
|blink.checkpoint.interval.ms|Checkpoint间隔时间|数据类型为LONG，例如180000，单位为毫秒。 |
|blink.checkpoint.timeout.ms|Checkpoint超时时间|数据类型为LONG，例如600000，单位为毫秒，默认值为10分钟。|
|blink.job.option.jmMemMB|Job Manager内存|例如1024 MB。|
|blink.job.option|传给Flink Run的参数，可以传递多个参数，具体请参见Flink命令说明。|例如设置Task Manager的JVM线程的堆栈大小，可以配置：blink.job.option=-yD env.java.opts=\'-Xss8192K\'。 |
|client.jvm.option|编译阶段的JVM|例如：-Xss2048k。|
|blink.miniBatch.allowLatencyMs|Batch最大允许延迟时间|添加或删除该参数Job状态会丢失，修改值大小状态不会丢失，数据类型为LONG， 例如10000，单位为毫秒。|
|blink.miniBatch.size|Batch最大条数|添加或删除该参数Job状态会丢失，修改值大小状态不会丢失；此参数不能设置过大，如果一个Batch实际去完重的数据超过65536，在访问statebackend时可能触发JNI OOM异常；数据类型为LONG， 例如1000。|
|blink.microBatch.allowLatencyMs|Batch最大允许延迟时间，与minibatch的区别在于microbatch是基于batchmark触发的，而不是timer，具有更高的效率。|数据类型为LONG， 例如10000，Blink 2.2及以上版本支持该参数，单位为毫秒。|
|blink.localAgg.enabled|是否开启Local-Global Agg。需要开启MiniBatch，Local-Global Agg功能才生效。|添加或删除该参数Job状态会丢失，修改值大小状态不会丢失；Blink 2.2版本默认值为true，其他版本默认值为false。|
|blink.partialAgg.enabled|是否开启Partial-Final Agg。Parital-Final Agg常用于解决COUNT DISTINCT热点问题。|默认值为false，Blink 2.2.0及以上版本支持该参数。 |
|sql.exec.mini-batch.window.enabled|是否开启minibatch window|默认值为false（不开启），Blink 3.2.0及以上版本支持该参数。 |
|sql.exec.source.idle.timeout.ms|Source空闲超时的时间，当source被标记为空闲后，下游就不会再等待该分区source发来的watermark，从而能触发window。 |默认值为-1（不开启），取值大于0则表示开启。Blink 3.2.0及以上版本支持该参数。|
|blink.state.ttl.ms|TopN和groupBy节点的状态过期清理时间。状态在指定时间内没有被更新过则会被清除。|数据类型为LONG， 例如60000，单位为毫秒，默认为不清除。|
|blink.topn.cache.size|TopN缓存数据的条数。例如Top100，配置缓存10000条，即缓存了100组数据。|数据类型为LONG，默认值为10000。|
|blink.job.submit.timeoutInSeconds|SQL编译超时时间，建议设置最大不超过250s。|数据类型为LONG，默认值为180。 |
|blink.job.timeZone|作业的时区|默认为Bayes前端时区，例如Asia/Shanghai。|
|blink.object.reuse|是否开启对象重用。如果不开启，chain一起的operator之前的数据传输会发生序列化或反序列化|Blink 2.2.0及以上版本默认值为true，其他版本默认值为false。|
|blink.auto.watermark.interval.ms|Watermark发送的频率。需要权衡延迟和性能。太高会导致延迟增加，太低会导致频繁发送watermark，影响性能。|默认值为100ms。 |
|blink.job.timestamp.reserve.ms|对于Ads、Petadata、SLS、Elasticsearch、DataHub类型的Sink，在写入timestamp类型时支持毫秒精度。|默认值为false，Blink 2.2.6及以上版本支持该参数。|
|yarn.app.blink.source.buffer-len|Connector source里面RecordReader线程作为生产者，上层ParallelReader线程作为消费者，中间的阻塞队列的长度，当数据源单条数据较小，数据量极大时，调高此项能提升部分性能。|默认值为10。|
|yarn.app.blink.source.source.idle-interval|Connector source里面ParallelReader无数据可读时，sleep的时间。|默认值为10，单位为100ms，Blink 2.2.5及以上版本支持该参数。|
|sql.exec.fault.tolerance.enabled|是否开启容错机制|默认值为false，Blink 3.4.0及以上版本支持该参数。| 
|state.backend.niagara.ttl.ms|Niagara StateBackend中数据的保存时间|数据类型为LONG，例如129600000，默认值为一天半。|
|state.backend.block.cache.size.mb|Niagara StateBackend读缓存大小|默认值为256 MB。|
|state.backend.mem.table.size.mb|Niagara StateBackend写缓存大小|默认值为128 MB。|
|state.backend.gemini.ttl.ms|Gemini StateBackend数据的保存时间|数据类型为LONG，例如129600000，默认值为一天半。|
|state.backend.gemini.mem.size.mb|Gemini StateBackend Native内存大小|默认值为384 MB。|
|state.backend.gemini.ttl.ms|Gemini StateBackend中数据的保存时间|数据类型为LONG，例如129600000，默认值为一天半。|
|state.backend.block.cache.size.mb|Gemini StateBackend读缓存大小|默认值为256 MB。|
|state.backend.mem.table.size.mb|Gemini StateBackend写缓存大小|默认值为128 MB。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
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
                'example' => '2C6E2F4C-2FA1-4159-87DA-676DB15F4826',
              ),
              'Job' => 
              array (
                'description' => '作业详情',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'description' => '作业创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1595493794000',
                  ),
                  'PlanJson' => 
                  array (
                    'description' => '作业上线的执行计划',
                    'type' => 'string',
                    'example' => '{a:b}',
                  ),
                  'ApiType' => 
                  array (
                    'description' => '作业类型：DATASTREAM或SQL。',
                    'type' => 'string',
                    'example' => 'DATASTREAM',
                  ),
                  'ProjectName' => 
                  array (
                    'description' => '项目名称',
                    'type' => 'string',
                    'example' => 'bayes_team',
                  ),
                  'JobType' => 
                  array (
                    'description' => '作业类型：

- FLINK_STREAM：流作业。

- FLINK_BATCH：批作业。',
                    'type' => 'string',
                    'example' => 'FLINK_STREAM',
                  ),
                  'EngineVersion' => 
                  array (
                    'description' => '引擎版本',
                    'type' => 'string',
                    'example' => 'blink-3.5.0-hotfix',
                  ),
                  'FileId' => 
                  array (
                    'description' => '文件ID',
                    'type' => 'string',
                    'example' => '75724',
                  ),
                  'Creator' => 
                  array (
                    'description' => '作业创建者',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'Modifier' => 
                  array (
                    'description' => '最新修改者',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'QueueName' => 
                  array (
                    'description' => '队列名称',
                    'type' => 'string',
                    'example' => 'root.default',
                  ),
                  'Description' => 
                  array (
                    'description' => '作业备注信息',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'JobName' => 
                  array (
                    'description' => '作业名称',
                    'type' => 'string',
                    'example' => 'datastream_enable',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '文件夹ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '26808',
                  ),
                  'JobId' => 
                  array (
                    'description' => '作业ID',
                    'type' => 'string',
                    'example' => 'rd8r1lgccsnnchh9fqwukw6e',
                  ),
                  'Packages' => 
                  array (
                    'description' => '实例引用的包名称，多个包使用逗号（,）分隔，未引用为空。',
                    'type' => 'string',
                    'example' => 'big-data-1.0-snapshot.jar',
                  ),
                  'Code' => 
                  array (
                    'description' => '运行代码：

- SQL作业返回SQL代码。

- Datastream作业返回Datastream配置。',
                    'type' => 'string',
                    'example' => 'xxxxx',
                  ),
                  'IsCommitted' => 
                  array (
                    'description' => '是否为上线状态。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ClusterId' => 
                  array (
                    'description' => '集群ID',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '最新修改时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1597743765000',
                  ),
                  'Properties' => 
                  array (
                    'description' => '作业运行配置参数',
                    'type' => 'string',
                    'example' => 'k:v',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C6E2F4C-2FA1-4159-87DA-676DB15F4826\\",\\n  \\"Job\\": {\\n    \\"CreateTime\\": 1595493794000,\\n    \\"PlanJson\\": \\"{a:b}\\",\\n    \\"ApiType\\": \\"DATASTREAM\\",\\n    \\"ProjectName\\": \\"bayes_team\\",\\n    \\"JobType\\": \\"FLINK_STREAM\\",\\n    \\"EngineVersion\\": \\"blink-3.5.0-hotfix\\",\\n    \\"FileId\\": \\"75724\\",\\n    \\"Creator\\": \\"xxx\\",\\n    \\"Modifier\\": \\"xxx\\",\\n    \\"QueueName\\": \\"root.default\\",\\n    \\"Description\\": \\"test\\",\\n    \\"JobName\\": \\"datastream_enable\\",\\n    \\"FolderId\\": 26808,\\n    \\"JobId\\": \\"rd8r1lgccsnnchh9fqwukw6e\\",\\n    \\"Packages\\": \\"big-data-1.0-snapshot.jar\\",\\n    \\"Code\\": \\"xxxxx\\",\\n    \\"IsCommitted\\": true,\\n    \\"ClusterId\\": \\"xxx\\",\\n    \\"ModifyTime\\": 1597743765000,\\n    \\"Properties\\": \\"k:v\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>2C6E2F4C-2FA1-4159-87DA-676DB15F4826</requestId>\\n<job>\\n    <jobName>datastream_enable</jobName>\\n    <projectName>bayes_team</projectName>\\n    <jobType>FLINK_STREAM</jobType>\\n    <apiType>DATASTREAM</apiType>\\n    <code>xxxxx</code>\\n    <packages>big-data-1.0-snapshot.jar</packages>\\n    <isCommitted>true</isCommitted>\\n    <creator>xxx</creator>\\n    <createTime>1595493794000</createTime>\\n    <modifier>xxx</modifier>\\n    <modifyTime>1597743765000</modifyTime>\\n    <engineVersion>blink-3.5.0-hotfix</engineVersion>\\n    <clusterId>xxx</clusterId>\\n    <queueName>root.default</queueName>\\n    <folderId>26808</folderId>\\n    <jobId>rd8r1lgccsnnchh9fqwukw6e</jobId>\\n    <fileId>75724</fileId>\\n</job>","errorExample":""}]',
      'title' => '获取作业详细信息',
      'summary' => '您可以通过GetJob获取作业详细信息。',
      'description' => '********',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs',
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
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页属性，每页返回job数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'pageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页属性，第几页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'jobName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => false,
            'example' => 'job1',
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'jobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业种类： FLINK_STREAM 流作业 FLINK_BATCH 批作业',
            'type' => 'string',
            'required' => false,
            'example' => 'FLINK_STREAM',
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'apiType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API类型：DATASTREAM；SQL',
            'type' => 'string',
            'required' => false,
            'example' => 'SQL',
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'engineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎版本',
            'type' => 'string',
            'required' => false,
            'example' => 'blink_2.2.4',
            'docRequired' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'clusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID',
            'type' => 'string',
            'required' => false,
            'example' => 'd6wxwo5tnrmuamx2ly3m7vkz',
            'docRequired' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'queueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称',
            'type' => 'string',
            'required' => false,
            'example' => 'root.default',
            'docRequired' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'folderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件夹ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
            'docRequired' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'isShowFullField',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
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
              'PageIndex' => 
              array (
                'description' => '分页属性，第几页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '分页属性，总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'PageSize' => 
              array (
                'description' => '分页属性，每页多少个job',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，方便foas定位问题
',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'TotalCount' => 
              array (
                'description' => '分页属性，总job数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'Jobs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Job' => 
                  array (
                    'description' => '作业详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'description' => '作业创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'PlanJson' => 
                        array (
                          'description' => '执行计划',
                          'type' => 'string',
                          'example' => '{a:b}',
                        ),
                        'ApiType' => 
                        array (
                          'description' => 'API类型：DATASTREAM；SQL',
                          'type' => 'string',
                          'example' => 'SQL',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '项目名称',
                          'type' => 'string',
                          'example' => 'project1',
                        ),
                        'JobType' => 
                        array (
                          'description' => '作业种类： FLINK_STREAM 流作业 FLINK_BATCH 批作业',
                          'type' => 'string',
                          'example' => 'FLINK_STREAM',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '引擎版本',
                          'type' => 'string',
                          'example' => 'blink_2.2.4',
                        ),
                        'Creator' => 
                        array (
                          'description' => '创建者',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'Modifier' => 
                        array (
                          'description' => '最近修改者',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'QueueName' => 
                        array (
                          'description' => '队列名称',
                          'type' => 'string',
                          'example' => 'root.default',
                        ),
                        'Description' => 
                        array (
                          'description' => '作业备注描述',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'JobName' => 
                        array (
                          'description' => '作业名称',
                          'type' => 'string',
                          'example' => 'job1',
                        ),
                        'FolderId' => 
                        array (
                          'description' => '文件夹ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'JobId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Packages' => 
                        array (
                          'description' => 'package名称',
                          'type' => 'string',
                          'example' => 'package1.jar',
                        ),
                        'Code' => 
                        array (
                          'description' => '作业代码',
                          'type' => 'string',
                          'example' => 'code',
                        ),
                        'IsCommitted' => 
                        array (
                          'description' => '作业是否已经提交运行',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID',
                          'type' => 'string',
                          'example' => 'd6wxwo5tnrmuamx2ly3m7vkz',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '最近修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1548397575000',
                        ),
                        'Properties' => 
                        array (
                          'description' => '作业运行配置',
                          'type' => 'string',
                          'example' => 'k:v',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"TotalPage\\": 5,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"TotalCount\\": 50,\\n  \\"Jobs\\": {\\n    \\"Job\\": [\\n      {\\n        \\"CreateTime\\": 1548397575000,\\n        \\"PlanJson\\": \\"{a:b}\\",\\n        \\"ApiType\\": \\"SQL\\",\\n        \\"ProjectName\\": \\"project1\\",\\n        \\"JobType\\": \\"FLINK_STREAM\\",\\n        \\"EngineVersion\\": \\"blink_2.2.4\\",\\n        \\"Creator\\": \\"xxxx\\",\\n        \\"Modifier\\": \\"xxxx\\",\\n        \\"QueueName\\": \\"root.default\\",\\n        \\"Description\\": \\"test\\",\\n        \\"JobName\\": \\"job1\\",\\n        \\"FolderId\\": 123,\\n        \\"Packages\\": \\"package1.jar\\",\\n        \\"Code\\": \\"code\\",\\n        \\"IsCommitted\\": true,\\n        \\"ClusterId\\": \\"d6wxwo5tnrmuamx2ly3m7vkz\\",\\n        \\"ModifyTime\\": 1548397575000,\\n        \\"Properties\\": \\"k:v\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '搜索job',
      'summary' => '获取指定project下满足条件的Job信息。',
      'description' => '使用本API，可以搜索某个project下满足条件的job信息',
    ),
    'GetJobLatestAutoScalePlan' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/autoscale/latestplanjson',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地区ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'p1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'j1',
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
              'PlanJson' => 
              array (
                'description' => '作业执行计划',
                'type' => 'string',
                'example' => '{k:v}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PlanJson\\": \\"{k:v}\\",\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C0D76C25-2056-43E4-B4EA-A7BBF774BAC1</RequestId>","errorExample":""}]',
      'title' => '获取作业最新的自动调优执行计划',
      'summary' => '获取作业最新的自动调优执行计划。',
      'description' => '> 仅开启自动调优功能的作业支持GetJobLatestAutoScalePlan。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CommitJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/commit',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID

> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'isOnOff',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启用AutoScale。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'maxCU',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '最大CU数，作业运行期间使用的资源不会超过该上限。单位为CU，`1 CU=1 Core + 4 GB RAM`。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '10.0',
          ),
        ),
        5 => 
        array (
          'name' => 'configure',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您可以配置以下几项：

- 调优策略：系统根据选择的策略和期望值对作业自动调优，以达到期望值。目前只支持数据滞留时间fetch_delay，单位为秒。

- 期望值：数据滞留时间阈值，当Source的数据滞留时间超过该阈值时，触发AutoScale并优化作业并发度。

- 建议recommendOnly：true表示开启PlanJson建议功能。

> - 仅支持通过AutoScale后台服务提供PlanJson建议。
- 仅在AutoScale设置为true时，recommendOnly生效。
- 仅Blink 3.7.8以上版本支持recommendOnly。
- 仅Blink 3.x版本支持AutoScale功能。
- 当开启AutoScale时，需要传入maxCu和configure参数。
',
            'type' => 'string',
            'required' => false,
            'example' => '{"fetch_delay":1.0,"recommendOnly":true}',
          ),
        ),
        6 => 
        array (
          'name' => 'recommendOnly',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '启用AutoScale后，系统是否自动修改您的PlanJson：
- true：系统不会自动修改。
- false（默认值）：系统会自动修改。

> 可以通过SDK中getInstanceHistoryAutoScalePlanListRequest获取PlanJson列表。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'suspendPeriods',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开启AutoScale后，指定暂停AutoScale时间段和使用的PlanJson。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"endTime":"18:20","startTime":"18:00","plan":"ORIGINAL","policy":"EVERY_DAY_TIME"},{"endTime":"19:00","startTime":"18:40","plan":"CURRENT","policy":"EVERY_DAY_TIME"},{"endTime":"2020-07-17 20:00","startTime":"2020-07-17 19:30","plan":"CURRENT","policy":"SPECIFIED_TIME"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'suspendPeriodParam',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'plan' => 
                array (
                  'description' => '指定暂停作业后使用的PlanJson：
- ORIGINAL：初始的PlanJson。
- CURRENT：当前的PlanJson。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ORIGINAL',
                ),
                'policy' => 
                array (
                  'description' => '指定暂停时间段：
- EVERY_DAY_TIME：指定每天的暂停时间段，需要填写暂停起始时间（startTime:HH:mm）和暂停结束时间（endTime:HH:mm）。
- SPECIFIED_TIME：指定具体的暂停时间段，需要填写暂停起始时间（startTime:yyyy-MM-dd HH:mm）和暂停结束时间（endTime:yyyy-MM-dd HH:mm）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'EVERY_DAY_TIME',
                ),
                'startTime' => 
                array (
                  'description' => '暂停时间段的开始时间。
> 根据policy设置不同格式的时间格式。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '18:20',
                ),
                'endTime' => 
                array (
                  'description' => '暂停时间段的结束时间。

> 根据policy设置不同格式的时间格式。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '18:25',
                ),
              ),
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5C6746D-2FFC-4D5D-A6A8-FA8DF7585DC2</requestId>","errorExample":""}]',
      'title' => '提交作业',
      'summary' => '您可以通过CommitJob提交作业。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OfflineJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/offline',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID
> 公共云用户请忽略此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
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
                'example' => '5A0AF0E2-A715-40FD-8A2B-1EDBF4213489',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A0AF0E2-A715-40FD-8A2B-1EDBF4213489\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5A0AF0E2-A715-40FD-8A2B-1EDBF4213489</RequestId>","errorExample":""}]',
      'title' => '下线作业',
      'summary' => '您可以通过OfflineJob OpenAPI下线作业。',
      'description' => '> 下线作业前，需要先停止运行作业。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ValidateJob' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/validate',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
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
                'example' => '5A3EB3CC-D899-4B0B-AF1F-1C0C0B6A0F91',
              ),
              'JobInOut' => 
              array (
                'description' => '作业输入输出',
                'type' => 'object',
                'properties' => 
                array (
                  'Inputs' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Input' => 
                      array (
                        'description' => '输入数组详情',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '表类型',
                              'type' => 'string',
                              'example' => 'datahub',
                            ),
                            'Workspace' => 
                            array (
                              'description' => '表所属项目',
                              'type' => 'string',
                              'example' => 'project1',
                            ),
                            'Name' => 
                            array (
                              'description' => '表名',
                              'type' => 'string',
                              'example' => 'datahub_input1',
                            ),
                            'Alias' => 
                            array (
                              'description' => '源表别名',
                              'type' => 'string',
                              'example' => 'datahub_input1',
                            ),
                            'Properties' => 
                            array (
                              'description' => '配置组',
                              'type' => 'object',
                              'example' => 'k:v',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Outputs' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Output' => 
                      array (
                        'description' => '返回数组详情',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '表类型',
                              'type' => 'string',
                              'example' => 'rds',
                            ),
                            'Workspace' => 
                            array (
                              'description' => '表所属项目',
                              'type' => 'string',
                              'example' => 'project1',
                            ),
                            'Name' => 
                            array (
                              'description' => '表名',
                              'type' => 'string',
                              'example' => 'result_infor',
                            ),
                            'Alias' => 
                            array (
                              'description' => '结果表别名',
                              'type' => 'string',
                              'example' => 'result_infor',
                            ),
                            'Properties' => 
                            array (
                              'description' => '配置组',
                              'type' => 'object',
                              'example' => 'k:v',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Dims' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Dim' => 
                      array (
                        'description' => '作业中的维表
',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '表类型',
                              'type' => 'string',
                              'example' => 'rds',
                            ),
                            'Workspace' => 
                            array (
                              'description' => '表所属项目',
                              'type' => 'string',
                              'example' => 'project1',
                            ),
                            'Name' => 
                            array (
                              'description' => '表名',
                              'type' => 'string',
                              'example' => 'phoneNumber',
                            ),
                            'Alias' => 
                            array (
                              'description' => '维表别名',
                              'type' => 'string',
                              'example' => 'phoneNumber',
                            ),
                            'Properties' => 
                            array (
                              'description' => '配置组',
                              'type' => 'object',
                              'example' => 'k:v',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A3EB3CC-D899-4B0B-AF1F-1C0C0B6A0F91\\",\\n  \\"JobInOut\\": {\\n    \\"Inputs\\": {\\n      \\"Input\\": [\\n        {\\n          \\"Type\\": \\"datahub\\",\\n          \\"Workspace\\": \\"project1\\",\\n          \\"Name\\": \\"datahub_input1\\",\\n          \\"Alias\\": \\"datahub_input1\\",\\n          \\"Properties\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    },\\n    \\"Outputs\\": {\\n      \\"Output\\": [\\n        {\\n          \\"Type\\": \\"rds\\",\\n          \\"Workspace\\": \\"project1\\",\\n          \\"Name\\": \\"result_infor\\",\\n          \\"Alias\\": \\"result_infor\\",\\n          \\"Properties\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    },\\n    \\"Dims\\": {\\n      \\"Dim\\": [\\n        {\\n          \\"Type\\": \\"rds\\",\\n          \\"Workspace\\": \\"project1\\",\\n          \\"Name\\": \\"phoneNumber\\",\\n          \\"Alias\\": \\"phoneNumber\\",\\n          \\"Properties\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<JobInOut>\\n    <Outputs>\\n        <Output>\\n            <Type>rds</Type>\\n            <Alias>result_infor</Alias>\\n            <Properties>\\n                <type>rds</type>\\n            </Properties>\\n            <Workspace/>\\n        </Output>\\n    </Outputs>\\n    <Dims>\\n        <Dim>\\n            <Type>ots</Type>\\n            <Alias>phoneNumber</Alias>\\n            <Properties>\\n                <type>ots</type>\\n            </Properties>\\n        </Dim>\\n    </Dims>\\n    <Inputs>\\n        <Input>\\n            <Type>datahub</Type>\\n            <Alias>datahub_input1</Alias>\\n            <Properties>\\n                <type>datahub</type>\\n            </Properties>\\n        </Input>\\n    </Inputs>\\n</JobInOut>\\n<RequestId>5A3EB3CC-D899-4B0B-AF1F-1C0C0B6A0F91</RequestId>","errorExample":""}]',
      'title' => '对作业进行语法检查',
      'summary' => '检查通过则返回参数。检查不通过则返回解析SQL出现错误的报错信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CalcPlanJsonResource' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/planjson-resource',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
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
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'PlanJsonResource' => 
              array (
                'description' => '执行计划的资源信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'MemoryGB' => 
                  array (
                    'description' => '作业所消耗的内存大小，单位是GB。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '3',
                  ),
                  'Cores' => 
                  array (
                    'description' => '作业所消耗的CPU内核个数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '1.2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"PlanJsonResource\\": {\\n    \\"MemoryGB\\": 3,\\n    \\"Cores\\": 1.2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PlanJsonResource>\\n    <Cores>5</Cores>\\n    <MemoryGB>12.5</MemoryGB>\\n</PlanJsonResource>\\n<RequestId>4D3D89FC-4C0F-4FF5-82BD-BF8C00F22129</RequestId>","errorExample":""}]',
      'title' => '获取作业执行计划所需信息',
      'summary' => '获取作业执行计划所需要的CPU、内存等资源消耗信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckRawPlanJson' => 
    array (
      'path' => '/api/v2/projects/{projectName}/jobs/{jobName}/planjson/check',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '集团内用户使用： cn-hangzhou-pre 公共云预发； cn-hangzhou-internal 集团内生产； cn-hangzhou-internal-pre 集团内预发；',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-pre',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'project1',
          ),
        ),
        2 => 
        array (
          'name' => 'jobName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '单个作业名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job1',
          ),
        ),
        3 => 
        array (
          'name' => 'sessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当使用CheckRawPlanJson发送请求后，会返回一个sessionId，将该sessionId填在此处',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'j6b43mm10nnzywsixmeh8maflgt6xq5afyeuflow3fravqlby0udi605mi7sty2pem2w9nysqiztag5je4esvmgq04pdcazgdthy3u5riy6na0fz6fmgph1k6b62bvjs7kqorn69ujsk0',
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
                'description' => '请求ID，方便foas定位问题',
                'type' => 'string',
                'example' => 'FD0FF8C0-779A-45EB-9674-FF3E127B10D2',
              ),
              'PlanJsonInfo' => 
              array (
                'description' => 'planjson详情',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => 'GetRawPlanJson的执行状态：
Session in run  执行中
success 成功
fail 失败',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                  'ErrorMessage' => 
                  array (
                    'description' => '错误信息',
                    'type' => 'string',
                    'example' => 'eroor',
                  ),
                  'PlanJson' => 
                  array (
                    'description' => '执行计划',
                    'type' => 'string',
                    'example' => '{a:b}',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD0FF8C0-779A-45EB-9674-FF3E127B10D2\\",\\n  \\"PlanJsonInfo\\": {\\n    \\"Status\\": \\"success\\",\\n    \\"ErrorMessage\\": \\"eroor\\",\\n    \\"PlanJson\\": \\"{a:b}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '检测作业planjson的获取状态',
      'summary' => '根据项目名称和作业名称检测是否已经获取到planjson。',
      'description' => '本接口和GetRawPlanJson接口组合调用何以获取牧歌作业的planjson，GetRawPlanJson接口发出调用请求后会返回一个session ID，CheckRawPlanJson获取这个session ID可以查询到planjson的详细情况。使用时建议循环调用CheckRawPlanJson方法直到成功获取。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'foas.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'foas.cn-qingdao.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'foas.cn-beijing.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'foas.cn-zhangjiakou.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'foas.cn-hangzhou.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'foas.cn-shanghai.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'foas.cn-shenzhen.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'foas.ap-southeast-1.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'foas.ap-southeast-3.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'foas.ap-northeast-1.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'foas.cn-hangzhou-finance.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'foas.cn-shanghai-finance-1.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'foas.cn-north-2-gov-1.aliyuncs.com',
    ),
  ),
);
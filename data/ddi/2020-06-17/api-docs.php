<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Ddi',
    'version' => '2020-06-17',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 112433,
      'title' => '集群操作',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateClusterV2',
        1 => 'ReleaseCluster',
        2 => 'DescribeClusterV2',
        3 => 'ListClusters',
      ),
    ),
    1 => 
    array (
      'id' => 112438,
      'title' => '作业和工作流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 112439,
          'title' => '作业子文件夹的增删改查',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFlowCategory',
            1 => 'DeleteFlowCategory',
          ),
        ),
        1 => 
        array (
          'id' => 112443,
          'title' => '工作流的增删改查',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFlow',
            1 => 'DeleteFlow',
            2 => 'ListFlow',
            3 => 'DescribeFlow',
          ),
        ),
        2 => 
        array (
          'id' => 112452,
          'title' => '作业的增删改查',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFlowJob',
            1 => 'CloneFlowJob',
            2 => 'SubmitFlowJob',
            3 => 'KillFlowJob',
            4 => 'ModifyFlowJob',
            5 => 'DescribeFlowJob',
            6 => 'ListFlowJobs',
            7 => 'ListFlowJobHistory',
          ),
        ),
        3 => 'RerunFlow',
        4 => 'SubmitFlow',
        5 => 'ResumeFlow',
      ),
    ),
    2 => 
    array (
      'id' => 112470,
      'title' => '项目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFlowProject',
        1 => 'CreateFlowProjectUser',
        2 => 'DeleteFlowProject',
        3 => 'DeleteFlowProjectUser',
        4 => 'ModifyFlowProject',
        5 => 'DescribeFlowProject',
        6 => 'ListFlowProjects',
        7 => 'ListFlowProjectUser',
      ),
    ),
    3 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeFlowCategoryTree',
        1 => 'DescribeFlowEntitySnapshot',
        2 => 'DescribeFlowNodeInstance',
        3 => 'ModifyFlowForWeb',
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
    'CreateClusterV2' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的名字。长度限制为 1-64 个字符，只允许包含中文、字母、数字、-、_。',
            'type' => 'string',
            'required' => true,
            'example' => 'bi_spark',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。目前支持华东 1、华东 2、华南 1、华北 2、华北 3、美西、新加坡、德国。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。

华东 1（杭州）支持：cn-hangzhou-b、cn-hangzhou-e、cn-hangzhou-f、cn-hangzhou-g、cn-hangzhou-h、cn-hangzhou-i。
华东 2（上海）支持：cn-shanghai-a、cn-shanghai-b、cn-shanghai-c、cn-shanghai-d、cn-shanghai-e、cn-shanghai-f、cn-shanghai-g。
华北 2（北京）支持：cn-beijing-a、cn-beijing-b、cn-beijing-c、cn-beijing-d、cn-beijing-e、cn-beijing-f、cn-beijing-g
华南 1（深圳）支持：cn-shenzhen-a、cn-shenzhen-b、cn-shenzhen-c、cn-shenzhen-d。
华北 5（呼和浩特）支持：cn-huhehaote-a、cn-huhehaote-b。
美国（弗吉尼亚）支持：us-east-1a、us-east-1b。

',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        3 => 
        array (
          'name' => 'LogPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ath	
OSS日志路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss//bucketname/path',
          ),
        ),
        4 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组 ID。可以在ECS中创建一个然后使用。需要确认的是，如果使用已有的安全组，会被增加上默认安全组策略：入只开放22端口，出开放所有端口。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bp1id7ajv83kmqwq****',
          ),
        ),
        5 => 
        array (
          'name' => 'IsOpenPublicIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启公网IP。如果开启，默认会带有8MB的带宽',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'SecurityGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要新建的安全组名称。如果不指定安全组ID，那么将使用这个名字创建一个新的安全组。当集群创建完成以后，可以在集群详情中看到创建的安全组ID。这个安全组将会带有默认的安全组策略：入只开放22端口，出开放所有端口',
            'type' => 'string',
            'required' => false,
            'example' => 'ddi-sg',
          ),
        ),
        7 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型：

PostPaid：按量付费。
PrePaid：包年包月。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
            'default' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PostPaid',
              1 => 'PrePaid',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月时间（包月数有：1、2、3、4、5、6、7、8、9、12、24、36）。ChargeType=PrePaid 时，必填。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '36',
            'minimum' => '1',
            'example' => '30',
            'default' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
              3 => '4',
              4 => '5',
              5 => '6',
              6 => '7',
              7 => '8',
              8 => '9',
              9 => '12',
              10 => '24',
              11 => '36',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'Auto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月集群是否自动续费',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'AutoPayOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID，NetType=vpc时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1l4urd87xlh7i4b****',
          ),
        ),
        12 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID，NetType=vpc时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp10tvjyc77psy0z5****',
          ),
        ),
        13 => 
        array (
          'name' => 'NetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc',
            'default' => 'classic',
            'enum' => 
            array (
              0 => 'classic',
              1 => 'vpc',
            ),
          ),
        ),
        14 => 
        array (
          'name' => 'UserDefinedEmrEcsRole',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于免AK访问OSS的Role',
            'type' => 'string',
            'required' => false,
            'example' => 'AliyunDDIAccessingOSSRole',
            'default' => 'AliyunEmrEcsDefaultRole',
          ),
        ),
        15 => 
        array (
          'name' => 'EmrVer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Databricks 数据洞察版本号',
            'type' => 'string',
            'required' => true,
            'example' => 'DDI-v1.0',
          ),
        ),
        16 => 
        array (
          'name' => 'ClusterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群类型。',
            'type' => 'string',
            'required' => true,
            'example' => '标准型',
            'enum' => 
            array (
              0 => 'HADOOP',
              1 => 'HBASE',
              2 => 'KAFKA',
              3 => 'GATEWAY',
              4 => 'DRUID',
              5 => 'ZOOKEEPER',
              6 => 'DATA_SCIENCE',
              7 => 'FLINK',
              8 => 'CLICKHOUSE',
              9 => 'DATABRICKS_DATAINSIGHT',
            ),
          ),
        ),
        17 => 
        array (
          'name' => 'EnableHighAvailability',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启高可用集群。如果开启高可用，需要两台Master节点。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'UseLocalMetaDb',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用本地Hive元数据库。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        19 => 
        array (
          'name' => 'EnableSsh',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启SSH。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'InstanceGeneration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例分代。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs-3',
          ),
        ),
        21 => 
        array (
          'name' => 'MasterPwd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Master节点SSH访问密码。需要满足ECS的密码规则：8-30个字符，且同时包含任意三项（大、小写字母、数字和特殊符号）。',
            'type' => 'string',
            'required' => false,
            'example' => 'pwd',
          ),
        ),
        22 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_pair',
          ),
        ),
        23 => 
        array (
          'name' => 'MetaStoreType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统一元数据类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'local',
            'enum' => 
            array (
              0 => 'local',
              1 => 'unified',
              2 => 'user_rds',
              3 => 'dlf',
            ),
          ),
        ),
        24 => 
        array (
          'name' => 'MetaStoreConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统一元数据的配置信息。

',
            'type' => 'string',
            'required' => false,
            'example' => 'rds-xxx.com',
          ),
        ),
        25 => 
        array (
          'name' => 'ClickHouseConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        26 => 
        array (
          'name' => 'ExtraAttributes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加属性',
            'type' => 'string',
            'required' => false,
            'example' => '[]',
          ),
        ),
        27 => 
        array (
          'name' => 'DepositType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '托管类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'HALF_MANAGED',
            'default' => 'HALF_MANAGED',
            'enum' => 
            array (
              0 => 'FULLY_MANAGED',
              1 => 'HALF_MANAGED',
            ),
          ),
        ),
        28 => 
        array (
          'name' => 'MachineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器类型。

',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
            'default' => 'ECS',
            'enum' => 
            array (
              0 => 'ECS',
              1 => 'DOCKER',
              2 => 'PYHSICAL_MACHINE',
            ),
          ),
        ),
        29 => 
        array (
          'name' => 'UseCustomHiveMetaDB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段，无需填写。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        30 => 
        array (
          'name' => 'InitCustomHiveMetaDB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
保留字段，无需填写。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        31 => 
        array (
          'name' => 'Configurations',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段，无需填写。

',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        32 => 
        array (
          'name' => 'EnableEas',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否高安全集群。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        33 => 
        array (
          'name' => 'RelatedClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前集群是gateway时，其关联的主集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'C-D7958B72E59B****',
          ),
        ),
        34 => 
        array (
          'name' => 'WhiteListType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单类型。取值：

IP：IP白名单分组。
SecurityGroup：安全组。

默认为：IP。',
            'type' => 'string',
            'required' => false,
            'example' => 'IP',
            'enum' => 
            array (
              0 => 'IP',
              1 => 'SEC_GROUP',
            ),
          ),
        ),
        35 => 
        array (
          'name' => 'AuthorizeContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段，无需填写。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        36 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例和节点ECS实例所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        37 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端令牌。',
            'type' => 'string',
            'required' => false,
            'example' => '[]',
          ),
        ),
        38 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => 'Knox用户的密码。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'pwd',
                ),
                'UserId' => 
                array (
                  'description' => 'Knox用户的用户RAM ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '123456789',
                ),
                'UserName' => 
                array (
                  'description' => 'Knox用户的用户名。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'username',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        39 => 
        array (
          'name' => 'HostComponentInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '主机组件信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '主机组件信息',
              'type' => 'object',
              'properties' => 
              array (
                'ComponentNameList' => 
                array (
                  'description' => '组件列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '组件列表',
                    'type' => 'string',
                    'required' => false,
                    'example' => '无',
                  ),
                  'required' => false,
                  'example' => 'NAMENODE',
                  'maxItems' => 20,
                ),
                'HostName' => 
                array (
                  'description' => '主机名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ddi-header-1',
                ),
                'ServiceName' => 
                array (
                  'description' => '服务名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SPARK',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 500,
          ),
        ),
        40 => 
        array (
          'name' => 'ServiceInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '集群的服务详情信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ServiceName' => 
                array (
                  'description' => '服务名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SPARK',
                ),
                'ServiceVersion' => 
                array (
                  'description' => '服务内部版本。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2.3.3-1.0.2',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 500,
          ),
        ),
        41 => 
        array (
          'name' => 'PromotionInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '促销信息列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ProductCode' => 
                array (
                  'description' => '促销信息，产品代码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[]',
                  'enum' => 
                  array (
                    0 => 'emr',
                    1 => 'ecs',
                  ),
                ),
                'PromotionOptionCode' => 
                array (
                  'description' => '促销信息，促销选项代码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[]',
                ),
                'PromotionOptionNo' => 
                array (
                  'description' => '促销信息  促销编号',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[]',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 500,
          ),
        ),
        42 => 
        array (
          'name' => 'HostGroup',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '机器组列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'AutoRenew' => 
                array (
                  'description' => '机器组机器是否自动续费。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                  'default' => 'false',
                ),
                'ChargeType' => 
                array (
                  'description' => '机器组机器付费类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PostPaid',
                  'default' => 'PostPaid',
                  'enum' => 
                  array (
                    0 => 'PostPaid',
                    1 => 'PrePaid',
                  ),
                ),
                'ClusterId' => 
                array (
                  'description' => '保留字段，无需填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0',
                ),
                'Comment' => 
                array (
                  'description' => '保留字段，无需填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0',
                ),
                'CreateType' => 
                array (
                  'description' => '保留字段，无需填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0',
                  'default' => 'MANUAL',
                  'enum' => 
                  array (
                    0 => 'ON-DEMAND',
                    1 => 'MANUAL',
                  ),
                ),
                'DiskCapacity' => 
                array (
                  'description' => '机器组的数据盘容量。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '20000',
                  'minimum' => '40',
                  'example' => '80',
                ),
                'DiskCount' => 
                array (
                  'description' => '机器组的数据盘数量。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '4',
                  'minimum' => '1',
                  'example' => '4',
                ),
                'DiskType' => 
                array (
                  'description' => '机器组的数据盘类型。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CLOUD_ESSD',
                  'enum' => 
                  array (
                    0 => 'CLOUD',
                    1 => 'CLOUD_EFFICIENCY',
                    2 => 'CLOUD_SSD',
                    3 => 'LOCAL_DISK',
                  ),
                ),
                'GpuDriver' => 
                array (
                  'description' => 'GPU驱动。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cuda9',
                ),
                'HostGroupId' => 
                array (
                  'description' => '保留字段，无需填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0',
                ),
                'HostGroupName' => 
                array (
                  'description' => '主实例组',
                  'type' => 'string',
                  'required' => true,
                  'example' => '主实例组',
                ),
                'HostGroupType' => 
                array (
                  'description' => '机器组类型，枚举值：

MASTER
Worker',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'MASTER',
                  'enum' => 
                  array (
                    0 => 'CORE',
                    1 => 'MASTER',
                    2 => 'TASK',
                    3 => 'GATEWAY',
                  ),
                ),
                'InstanceType' => 
                array (
                  'description' => '机器组型号',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ecs.g5.2xlargeg',
                ),
                'NodeCount' => 
                array (
                  'description' => '机器组节点数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '1000',
                  'minimum' => '2',
                  'example' => '2',
                ),
                'Period' => 
                array (
                  'description' => '包年包月时间（包月数有1、2、3、4、5、6、7、8、9、12、24、36）。HostGroup.n.ChargeType=PrePaid时，必填。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '36',
                  'default' => '1',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                    3 => '4',
                    4 => '5',
                    5 => '6',
                    6 => '7',
                    7 => '8',
                    8 => '9',
                    9 => '12',
                    10 => '24',
                    11 => '36',
                  ),
                ),
                'SysDiskCapacity' => 
                array (
                  'description' => '	
机器组的系统盘容量。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '500',
                  'minimum' => '40',
                  'example' => '80',
                ),
                'SysDiskType' => 
                array (
                  'description' => '机器组的系统盘类型。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CLOUD_SSD',
                  'enum' => 
                  array (
                    0 => 'CLOUD',
                    1 => 'CLOUD_EFFICIENCY',
                    2 => 'CLOUD_SSD',
                  ),
                ),
                'VSwitchId' => 
                array (
                  'description' => '虚拟交换机ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp10tvjyc77psy0z5****',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1000,
          ),
        ),
        43 => 
        array (
          'name' => 'BootstrapAction',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '引导操作的详细信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Arg' => 
                array (
                  'description' => '引导操作参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '--a=b',
                ),
                'Name' => 
                array (
                  'description' => '引导操作名字。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'name',
                ),
                'Path' => 
                array (
                  'description' => '引导操作脚本路径。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'oss://bucket/path',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        44 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '自定义配置。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ConfigKey' => 
                array (
                  'description' => '自定义配置项的Key。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'fs.trash.interval',
                ),
                'ConfigValue' => 
                array (
                  'description' => '自定义配置项的值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '60',
                ),
                'Encrypt' => 
                array (
                  'description' => '保留字段，无需填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0',
                ),
                'FileName' => 
                array (
                  'description' => '自定义配置项所属文件名。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'spark-site',
                ),
                'Replace' => 
                array (
                  'description' => '保留字段，无需填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0',
                ),
                'ServiceName' => 
                array (
                  'description' => '自定义配置项服务名（大写）。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SPARK',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        45 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => 'DDI实例和节点ECS实例的标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => 'DDI实例和节点ECS实例的标签值。N的取值范围：1~20。一旦传入该值，可以为空字符串。标签值的取值范围：1~128，不能以acs:开头，不能包含http://或者https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'C-D7958B72E59B****	',
              ),
              'CoreOrderId' => 
              array (
                'description' => 'Core节点订单ID。',
                'type' => 'string',
                'example' => '0',
              ),
              'EmrOrderId' => 
              array (
                'description' => 'Databricks 数据洞察订单ID。',
                'type' => 'string',
                'example' => '0',
              ),
              'MasterOrderId' => 
              array (
                'description' => 'Master节点订单ID。',
                'type' => 'string',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22',
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
            'errorCode' => 'ECSInfo.DiskSize.TooSmall',
            'errorMessage' => 'The disk size must be greater than or equal to 80 GB.',
          ),
          1 => 
          array (
            'errorCode' => 'ECSInfo.ECSOrder.IndexMissing',
            'errorMessage' => 'The order information is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ECSInfo.ECSOrder.MasterIndexMissing',
            'errorMessage' => 'The order information is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          4 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          5 => 
          array (
            'errorCode' => 'ECSInfo.ECSOrder.SlaveOrderMissing',
            'errorMessage' => 'The order information is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'RAM.Permission.NotAllow',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          7 => 
          array (
            'errorCode' => 'ECSInfo.ECSOrder.NodeCount.TooSmall',
            'errorMessage' => 'You must increase the number of nodes.',
          ),
          8 => 
          array (
            'errorCode' => 'SecurityGroup.IsEmpty',
            'errorMessage' => 'You must specify the security group name.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Account.Abnormal',
            'errorMessage' => 'The user account is out of service.',
          ),
          10 => 
          array (
            'errorCode' => 'Master.Pwd.Cannot.Blank',
            'errorMessage' => 'You must specify Master password.',
          ),
          11 => 
          array (
            'errorCode' => 'LogPath.Cannot.Blank',
            'errorMessage' => 'You must specify the log path.',
          ),
          12 => 
          array (
            'errorCode' => 'HighAvailability.Master.NodeCount.Not.Match',
            'errorMessage' => 'The HighAvailability parameter does not match the master node count.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.Period',
            'errorMessage' => 'The specified period is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Balance.Not.Enough',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          15 => 
          array (
            'errorCode' => 'VSwitch.NotBelongTo.Zone',
            'errorMessage' => 'The specified VSwitch does not belong to the specified zone.',
          ),
          16 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          17 => 
          array (
            'errorCode' => 'DB.Fail',
            'errorMessage' => 'A database access error occurred.',
          ),
          18 => 
          array (
            'errorCode' => 'ECSInfo.ECSOrder.INVALID',
            'errorMessage' => 'The order creation parameter is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'Ecs.InstanceType.NotSupported',
            'errorMessage' => 'The ECS instance type %s is not supported in DDI.',
          ),
          20 => 
          array (
            'errorCode' => 'DiskType.Invalid',
            'errorMessage' => 'The disk type %s is invalid.',
          ),
          21 => 
          array (
            'errorCode' => 'Unsupported.DiskType',
            'errorMessage' => 'The ECS instance type %s does not support the disk type %s.',
          ),
          22 => 
          array (
            'errorCode' => 'Unsupported.ZoneId',
            'errorMessage' => 'The zone %s is not supported.',
          ),
          23 => 
          array (
            'errorCode' => 'ECSInfo.DiskSize.TooBig',
            'errorMessage' => 'The maximum size of the disk is exceeded.',
          ),
          24 => 
          array (
            'errorCode' => 'ECSInfo.DiskCount.ExceedLimit',
            'errorMessage' => 'The maximum number of disks is exceeded.',
          ),
          25 => 
          array (
            'errorCode' => 'ECSInfo.NodeType.Unsupported',
            'errorMessage' => 'The specified node type is not supported.',
          ),
          26 => 
          array (
            'errorCode' => 'Must.Specify.MasterNode',
            'errorMessage' => 'You must specify Master node information.',
          ),
          27 => 
          array (
            'errorCode' => 'Only.Support.One.Master',
            'errorMessage' => 'Only one master node is supported in a DDI cluster.',
          ),
          28 => 
          array (
            'errorCode' => 'Have.Orders.Wait.For.Pay',
            'errorMessage' => 'A payable order already exists.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidDataDiskSize.ValueNotSupported',
            'errorMessage' => 'The specified data disk size is invalid.',
          ),
          30 => 
          array (
            'errorCode' => 'Cluster.WaitForPay.OverLimit',
            'errorMessage' => 'Too many clusters are waiting for payment.',
          ),
          31 => 
          array (
            'errorCode' => 'User.OtherUserResource.NotAllow',
            'errorMessage' => 'You are not authorized to operate other users resource.',
          ),
          32 => 
          array (
            'errorCode' => 'AuthRealNameNotPass',
            'errorMessage' => 'User real name authenticate failed!',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterId\\": \\"C-D7958B72E59B****\\\\t\\",\\n  \\"CoreOrderId\\": \\"0\\",\\n  \\"EmrOrderId\\": \\"0\\",\\n  \\"MasterOrderId\\": \\"0\\",\\n  \\"RequestId\\": \\"BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22\\"\\n}","errorExample":""},{"type":"xml","example":"<MasterOrderId>0</MasterOrderId>\\n<CoreOrderId>0</CoreOrderId>\\n<RequestId>BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22</RequestId>\\n<ClusterId>C-D7958B72E59B****</ClusterId>\\n<EmrOrderId>0</EmrOrderId>","errorExample":""}]',
      'title' => 'CreateClusterV2',
      'summary' => '调用CreateClusterV2，创建一个Databricks 数据洞察集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseCluster' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'C-D7958B72E59B****',
          ),
        ),
        2 => 
        array (
          'name' => 'ForceRelease',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '正常释放时，如果您打开了日志保存，系统会花费几分钟时间将作业的日志都保存到您的OSS空间中。
您也可以勾选强制释放选项，放弃日志的保存，立即释放。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22',
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
            'errorCode' => 'Cluster.RegionId.NotMatch',
            'errorMessage' => 'The cluster does not exist in region %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Cluster.Cannot.Release',
            'errorMessage' => 'Failed to release the cluster.',
          ),
          2 => 
          array (
            'errorCode' => 'Prepaid.Cluster.Cannot.Release',
            'errorMessage' => 'Prepaid clusters do not support the release operation.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          4 => 
          array (
            'errorCode' => 'ClusterId.NotFound',
            'errorMessage' => 'The specified cluster ID %s does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'RAM.Permission.NotAllow',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Account.Abnormal',
            'errorMessage' => 'The user account is out of service.',
          ),
          7 => 
          array (
            'errorCode' => 'Cluster.Role.NotConfirm',
            'errorMessage' => 'The DDI RAM role has not been granted.',
          ),
          8 => 
          array (
            'errorCode' => 'DB.Fail',
            'errorMessage' => 'A database access error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'User.OtherUserResource.NotAllow',
            'errorMessage' => 'You are not authorized to operate other users resource.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Params.Illegal',
            'errorMessage' => 'The format of the specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseClusterResponse>\\n    <RequestId>BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22</RequestId>\\n</ReleaseClusterResponse>","errorExample":""}]',
      'title' => '释放集群所有节点',
      'summary' => '释放集群所有节点。',
    ),
    'DescribeClusterV2' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'C-E331B8AC12BF****',
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
                'example' => '14E9C045-9B8D-4D1E-8D23-FC0027B6D947',
              ),
              'ClusterInfo' => 
              array (
                'description' => '集群详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => 'VPC ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp1l4urd87xlh7i4****',
                  ),
                  'LogEnable' => 
                  array (
                    'description' => '是否打开集群OSS日志。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TaskNodeInService' => 
                  array (
                    'description' => '使用中的Task节点数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'AutoScalingSpotWithLimitAllowed' => 
                  array (
                    'description' => '是否允许使用弹性伸缩竞价实例。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => '125046002175****',
                  ),
                  'ChargeType' => 
                  array (
                    'description' => '付费方式。',
                    'type' => 'string',
                    'example' => 'PostPaid',
                  ),
                  'StopTime' => 
                  array (
                    'description' => '集群停止时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1543804234000',
                  ),
                  'DepositType' => 
                  array (
                    'description' => '集群托管方式。',
                    'type' => 'string',
                    'example' => 'HALF_MANAGED',
                  ),
                  'CreateType' => 
                  array (
                    'description' => '集群创建的方式。',
                    'type' => 'string',
                    'example' => 'MANUAL',
                  ),
                  'RelateClusterId' => 
                  array (
                    'description' => '针对Gateway， 关联的主集群ID。',
                    'type' => 'string',
                    'example' => 'C-D7958B72E59****',
                  ),
                  'SecurityGroupName' => 
                  array (
                    'description' => '安全组名。',
                    'type' => 'string',
                    'example' => 'ddi-default-securitygroup',
                  ),
                  'ResizeDiskEnable' => 
                  array (
                    'description' => '是否允许扩容磁盘。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ImageId' => 
                  array (
                    'description' => '创建集群使用的镜像ID。',
                    'type' => 'string',
                    'example' => 'm-bp118knl07yk88y8s6cj',
                  ),
                  'UserDefinedEmrEcsRole' => 
                  array (
                    'description' => '使用的DDI权限名。',
                    'type' => 'string',
                    'example' => 'AliyunDDIAccessingOSSRole',
                  ),
                  'MetaStoreType' => 
                  array (
                    'description' => '统一元数据类型。',
                    'type' => 'string',
                    'example' => 'local',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '集群启动时间（时间戳）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1543804234000',
                  ),
                  'Configurations' => 
                  array (
                    'description' => '无需填写。',
                    'type' => 'string',
                    'example' => '[]',
                  ),
                  'LogPath' => 
                  array (
                    'description' => '集群OSS日志路径。',
                    'type' => 'string',
                    'example' => 'oss://bucketname/path',
                  ),
                  'AutoScalingVersion' => 
                  array (
                    'description' => '保留字段。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'NetType' => 
                  array (
                    'description' => '集群网络类型。',
                    'type' => 'string',
                    'example' => 'vpc',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-b',
                  ),
                  'CreateResource' => 
                  array (
                    'description' => '集群标记，无需关注。',
                    'type' => 'string',
                    'example' => 'ECM_DDI',
                  ),
                  'Status' => 
                  array (
                    'description' => '集群状态。',
                    'type' => 'string',
                    'example' => 'IDLE',
                  ),
                  'RunningTime' => 
                  array (
                    'description' => '已经运行的时间（秒数）。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1102',
                  ),
                  'HighAvailabilityEnable' => 
                  array (
                    'description' => '是否高可用集群。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '安全组ID。',
                    'type' => 'string',
                    'example' => 'sg-bp1bvompzxgx7q0****',
                  ),
                  'AutoScalingAllowed' => 
                  array (
                    'description' => '允许弹性扩容。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'MasterNodeInService' => 
                  array (
                    'description' => '使用中的Master节点数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'AutoScalingEnable' => 
                  array (
                    'description' => '是否开启弹性扩容。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AutoScalingWithGraceAllowed' => 
                  array (
                    'description' => '保留字段。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CoreNodeInService' => 
                  array (
                    'description' => '使用中的Core节点数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'ShowSoftwareInterface' => 
                  array (
                    'description' => '是否展示快捷链接页面。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'K8sClusterId' => 
                  array (
                    'description' => 'K8s集群ID',
                    'type' => 'string',
                    'example' => '[]',
                  ),
                  'AutoScalingByLoadAllowed' => 
                  array (
                    'description' => '是否允许按负载伸缩。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LocalMetaDb' => 
                  array (
                    'description' => '是否使用Hive本地元数据库。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'InstanceGeneration' => 
                  array (
                    'description' => 'ECS分代。',
                    'type' => 'string',
                    'example' => 'ecs-3',
                  ),
                  'Name' => 
                  array (
                    'description' => '集群名。',
                    'type' => 'string',
                    'example' => 'cluster_name',
                  ),
                  'EasEnable' => 
                  array (
                    'description' => '是否高安全集群。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'MachineType' => 
                  array (
                    'description' => '集群的主机类型，目前默认为ECS。',
                    'type' => 'string',
                    'example' => 'ECS',
                  ),
                  'MasterNodeTotal' => 
                  array (
                    'description' => 'Master节点总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'Period' => 
                  array (
                    'description' => '机器组的包年包月时间（包月数有1、2、3、4、5、6、7、8、9、12、24、36）。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '36',
                  ),
                  'ExtraInfo' => 
                  array (
                    'description' => 'Stack的附加信息。',
                    'type' => 'string',
                    'example' => '-None-',
                  ),
                  'IoOptimized' => 
                  array (
                    'description' => '是否I/O优化。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '虚拟交换机ID。',
                    'type' => 'string',
                    'example' => 'vsw-bp11qjbyggil4pow0****',
                  ),
                  'ExpiredTime' => 
                  array (
                    'description' => '包年包月集群的过期时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1544076205000',
                  ),
                  'CoreNodeTotal' => 
                  array (
                    'description' => 'Core节点总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'GatewayClusterIds' => 
                  array (
                    'description' => '包含的Gateway集群ID。',
                    'type' => 'string',
                    'example' => 'C-D7958B72E59B****',
                  ),
                  'BootstrapFailed' => 
                  array (
                    'description' => '引导操作执行结果。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Id' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'C-E331B8AC12BF****',
                  ),
                  'TaskNodeTotal' => 
                  array (
                    'description' => 'Task节点总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'GatewayClusterInfoList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'GatewayClusterInfo' => 
                      array (
                        'description' => 'Gateway集群概况信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ClusterName' => 
                            array (
                              'description' => 'Gateway集群名。',
                              'type' => 'string',
                              'example' => 'gateway-name',
                            ),
                            'Status' => 
                            array (
                              'description' => 'Gateway集群状态。',
                              'type' => 'string',
                              'example' => 'IDLE',
                            ),
                            'ClusterId' => 
                            array (
                              'description' => 'Gateway集群ID。',
                              'type' => 'string',
                              'example' => 'C-D7958B72E59B****',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'HostGroupList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'HostGroup' => 
                      array (
                        'description' => '集群机器组列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'LockType' => 
                            array (
                              'description' => '保留字段。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'HostGroupSubType' => 
                            array (
                              'description' => '保留字段。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'HostGroupType' => 
                            array (
                              'description' => '机器组角色。',
                              'type' => 'string',
                              'example' => 'CORE',
                            ),
                            'HostGroupChangeStatus' => 
                            array (
                              'description' => '保留字段。升配任务的执行状态，枚举值：IN_PROGRESS、COMPLETED和FAILED。',
                              'type' => 'string',
                              'example' => 'IN_PROGRESS',
                            ),
                            'ChargeType' => 
                            array (
                              'description' => '付费类型。',
                              'type' => 'string',
                              'example' => 'PostPaid',
                            ),
                            'LockReason' => 
                            array (
                              'description' => '保留字段。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'DiskType' => 
                            array (
                              'description' => '数据盘磁盘类型。',
                              'type' => 'string',
                              'example' => 'CLOUD_ESSD',
                            ),
                            'HostGroupId' => 
                            array (
                              'description' => '机器组ID。',
                              'type' => 'string',
                              'example' => 'G-9D08642FB8CE****',
                            ),
                            'BandWidth' => 
                            array (
                              'description' => '带宽。',
                              'type' => 'string',
                              'example' => '10',
                            ),
                            'InstanceType' => 
                            array (
                              'description' => '机器组实例类型。',
                              'type' => 'string',
                              'example' => 'ecs.n4.2xlarge',
                            ),
                            'DiskCount' => 
                            array (
                              'description' => '数据盘数量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '4',
                            ),
                            'Period' => 
                            array (
                              'description' => '包年包月时间（天）。',
                              'type' => 'string',
                              'example' => '30',
                            ),
                            'DiskCapacity' => 
                            array (
                              'description' => '数据盘容量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '120',
                            ),
                            'CpuCore' => 
                            array (
                              'description' => 'CPU核心数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '16',
                            ),
                            'MemoryCapacity' => 
                            array (
                              'description' => '内存大小。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '16',
                            ),
                            'NodeCount' => 
                            array (
                              'description' => '机器组节点数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '4',
                            ),
                            'HostGroupChangeType' => 
                            array (
                              'description' => '机器组当前的操作类型，枚举值：RESIZE_DISK、MODIFY_INSTANCE_TYPE和RESTART_HOST_GROUP。',
                              'type' => 'string',
                              'example' => 'RESIZE_DISK',
                            ),
                            'HostGroupName' => 
                            array (
                              'description' => '机器组名称。',
                              'type' => 'string',
                              'example' => '主实例组',
                            ),
                            'Nodes' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Node' => 
                                array (
                                  'description' => '机器节点。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Status' => 
                                      array (
                                        'description' => '状态。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                      ),
                                      'SupportIpV6' => 
                                      array (
                                        'description' => '是否支持IPV6。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                      ),
                                      'InnerIp' => 
                                      array (
                                        'description' => '内网IP。',
                                        'type' => 'string',
                                        'example' => '192.168.128.236',
                                      ),
                                      'ExpiredTime' => 
                                      array (
                                        'description' => '超时时间。',
                                        'type' => 'string',
                                        'example' => '2099-12-31T15:59Z',
                                      ),
                                      'CreateTime' => 
                                      array (
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '1543804242000',
                                      ),
                                      'ZoneId' => 
                                      array (
                                        'description' => '可用区。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-e',
                                      ),
                                      'InstanceId' => 
                                      array (
                                        'description' => 'ECS实例ID。',
                                        'type' => 'string',
                                        'example' => 'i-bp1ftve3lzvpm16hp7lo',
                                      ),
                                      'EmrExpiredTime' => 
                                      array (
                                        'description' => 'DDI超时时间。',
                                        'type' => 'string',
                                        'example' => '2099-12-31T15:59Z',
                                      ),
                                      'PubIp' => 
                                      array (
                                        'description' => '公网IP。',
                                        'type' => 'string',
                                        'example' => '47.99.***.***',
                                      ),
                                      'DaemonInfos' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'DaemonInfo' => 
                                          array (
                                            'description' => '保留字段。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Name' => 
                                                array (
                                                  'description' => '保留字段。',
                                                  'type' => 'string',
                                                  'example' => '0',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                      'DiskInfos' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'DiskInfo' => 
                                          array (
                                            'description' => '磁盘信息。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Type' => 
                                                array (
                                                  'description' => '磁盘类型。',
                                                  'type' => 'string',
                                                  'example' => 'data',
                                                ),
                                                'DiskId' => 
                                                array (
                                                  'description' => '磁盘ID。',
                                                  'type' => 'string',
                                                  'example' => 'd-bp15vg2nr3x2t0f37ko9',
                                                ),
                                                'Size' => 
                                                array (
                                                  'description' => '磁盘容量（G）。',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '80',
                                                ),
                                                'Device' => 
                                                array (
                                                  'description' => '	
磁盘名。',
                                                  'type' => 'string',
                                                  'example' => '/dev/xvdb',
                                                ),
                                                'DiskName' => 
                                                array (
                                                  'description' => '磁盘名。',
                                                  'type' => 'string',
                                                  'example' => 'disk1',
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
                      ),
                    ),
                  ),
                  'BootstrapActionList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BootstrapAction' => 
                      array (
                        'description' => '引导操作列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Path' => 
                            array (
                              'description' => '引导操作脚本路径。',
                              'type' => 'string',
                              'example' => 'oss://bucket/path',
                            ),
                            'Name' => 
                            array (
                              'description' => '引导操作的名字。',
                              'type' => 'string',
                              'example' => 'action_name',
                            ),
                            'Arg' => 
                            array (
                              'description' => '引导操作的参数。',
                              'type' => 'string',
                              'example' => '--a',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'RelateClusterInfo' => 
                  array (
                    'description' => '针对Gateway, 关联的主集群信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ClusterName' => 
                      array (
                        'description' => '关联集群名称。',
                        'type' => 'string',
                        'example' => 'main',
                      ),
                      'Status' => 
                      array (
                        'description' => '状态。',
                        'type' => 'string',
                        'example' => 'SUCCESS',
                      ),
                      'ClusterId' => 
                      array (
                        'description' => '关联集群ID。',
                        'type' => 'string',
                        'example' => 'C-D7958B72E59B****',
                      ),
                    ),
                  ),
                  'HostPoolInfo' => 
                  array (
                    'description' => '机器池信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'HpName' => 
                      array (
                        'description' => '机器池名称。',
                        'type' => 'string',
                        'example' => 'name',
                      ),
                      'HpBizId' => 
                      array (
                        'description' => '机器池 ID。',
                        'type' => 'string',
                        'example' => 'id',
                      ),
                    ),
                  ),
                  'FailReason' => 
                  array (
                    'description' => '集群创建失败的原因。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ErrorMsg' => 
                      array (
                        'description' => '创建失败错误信息。',
                        'type' => 'string',
                        'example' => 'The specified ImageId does not exist.',
                      ),
                      'RequestId' => 
                      array (
                        'description' => '创建集群请求ID。',
                        'type' => 'string',
                        'example' => 'B8DC3A91-3953-4444-92BB-DBC29C47EC1A',
                      ),
                      'ErrorCode' => 
                      array (
                        'description' => '创建失败错误码。',
                        'type' => 'string',
                        'example' => 'InvalidImageId.NotFound',
                      ),
                    ),
                  ),
                  'SoftwareInfo' => 
                  array (
                    'description' => '服务列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ClusterType' => 
                      array (
                        'description' => '集群类型。',
                        'type' => 'string',
                        'example' => '标准型',
                      ),
                      'EmrVer' => 
                      array (
                        'description' => 'DDI版本号。',
                        'type' => 'string',
                        'example' => 'DDI-V1.0',
                      ),
                      'Softwares' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Software' => 
                          array (
                            'description' => '服务列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DisplayName' => 
                                array (
                                  'description' => '服务名称。',
                                  'type' => 'string',
                                  'example' => 'SPARK',
                                ),
                                'OnlyDisplay' => 
                                array (
                                  'description' => '是否展现。',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'StartTpe' => 
                                array (
                                  'description' => '启动类型。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'Name' => 
                                array (
                                  'description' => '服务内部名称。',
                                  'type' => 'string',
                                  'example' => 'HIVE',
                                ),
                                'Version' => 
                                array (
                                  'description' => '服务版本。',
                                  'type' => 'string',
                                  'example' => '2.3.3',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AccessInfo' => 
                  array (
                    'description' => '集群连接信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ZKLinks' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ZKLink' => 
                          array (
                            'description' => 'ZooKeeper连接信息。

',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Port' => 
                                array (
                                  'description' => 'ZooKeeper连接端口。',
                                  'type' => 'string',
                                  'example' => '2181',
                                ),
                                'Link' => 
                                array (
                                  'description' => 'ZooKeeper连接地址。',
                                  'type' => 'string',
                                  'example' => 'ddi-worker-1,ddi-header-2,ddi-header-1',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'ClusterId.NotFound',
            'errorMessage' => 'The cluster ID does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'RAM.Permission.NotAllow',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          3 => 
          array (
            'errorCode' => 'DB.Fail',
            'errorMessage' => 'A database access error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'User.OtherUserResource.NotAllow',
            'errorMessage' => 'You are not authorized to operate other users resource.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Params.Illegal',
            'errorMessage' => 'The format of the specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14E9C045-9B8D-4D1E-8D23-FC0027B6D947\\",\\n  \\"ClusterInfo\\": {\\n    \\"VpcId\\": \\"vpc-bp1l4urd87xlh7i4****\\",\\n    \\"LogEnable\\": true,\\n    \\"TaskNodeInService\\": 2,\\n    \\"AutoScalingSpotWithLimitAllowed\\": false,\\n    \\"UserId\\": \\"125046002175****\\",\\n    \\"ChargeType\\": \\"PostPaid\\",\\n    \\"StopTime\\": 1543804234000,\\n    \\"DepositType\\": \\"HALF_MANAGED\\",\\n    \\"CreateType\\": \\"MANUAL\\",\\n    \\"RelateClusterId\\": \\"C-D7958B72E59****\\",\\n    \\"SecurityGroupName\\": \\"ddi-default-securitygroup\\",\\n    \\"ResizeDiskEnable\\": true,\\n    \\"ImageId\\": \\"m-bp118knl07yk88y8s6cj\\",\\n    \\"UserDefinedEmrEcsRole\\": \\"AliyunDDIAccessingOSSRole\\",\\n    \\"MetaStoreType\\": \\"local\\",\\n    \\"StartTime\\": 1543804234000,\\n    \\"Configurations\\": \\"[]\\",\\n    \\"LogPath\\": \\"oss://bucketname/path\\",\\n    \\"AutoScalingVersion\\": \\"false\\",\\n    \\"NetType\\": \\"vpc\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n    \\"CreateResource\\": \\"ECM_DDI\\",\\n    \\"Status\\": \\"IDLE\\",\\n    \\"RunningTime\\": 1102,\\n    \\"HighAvailabilityEnable\\": true,\\n    \\"SecurityGroupId\\": \\"sg-bp1bvompzxgx7q0****\\",\\n    \\"AutoScalingAllowed\\": false,\\n    \\"MasterNodeInService\\": 2,\\n    \\"AutoScalingEnable\\": false,\\n    \\"AutoScalingWithGraceAllowed\\": false,\\n    \\"CoreNodeInService\\": 3,\\n    \\"ShowSoftwareInterface\\": true,\\n    \\"K8sClusterId\\": \\"[]\\",\\n    \\"AutoScalingByLoadAllowed\\": true,\\n    \\"LocalMetaDb\\": true,\\n    \\"InstanceGeneration\\": \\"ecs-3\\",\\n    \\"Name\\": \\"cluster_name\\",\\n    \\"EasEnable\\": true,\\n    \\"MachineType\\": \\"ECS\\",\\n    \\"MasterNodeTotal\\": 2,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Period\\": 36,\\n    \\"ExtraInfo\\": \\"-None-\\",\\n    \\"IoOptimized\\": true,\\n    \\"VSwitchId\\": \\"vsw-bp11qjbyggil4pow0****\\",\\n    \\"ExpiredTime\\": 1544076205000,\\n    \\"CoreNodeTotal\\": 3,\\n    \\"GatewayClusterIds\\": \\"C-D7958B72E59B****\\",\\n    \\"BootstrapFailed\\": false,\\n    \\"Id\\": \\"C-E331B8AC12BF****\\",\\n    \\"TaskNodeTotal\\": 2,\\n    \\"GatewayClusterInfoList\\": {\\n      \\"GatewayClusterInfo\\": [\\n        {\\n          \\"ClusterName\\": \\"gateway-name\\",\\n          \\"Status\\": \\"IDLE\\",\\n          \\"ClusterId\\": \\"C-D7958B72E59B****\\"\\n        }\\n      ]\\n    },\\n    \\"HostGroupList\\": {\\n      \\"HostGroup\\": [\\n        {\\n          \\"LockType\\": \\"0\\",\\n          \\"HostGroupSubType\\": \\"0\\",\\n          \\"HostGroupType\\": \\"CORE\\",\\n          \\"HostGroupChangeStatus\\": \\"IN_PROGRESS\\",\\n          \\"ChargeType\\": \\"PostPaid\\",\\n          \\"LockReason\\": \\"0\\",\\n          \\"DiskType\\": \\"CLOUD_ESSD\\",\\n          \\"HostGroupId\\": \\"G-9D08642FB8CE****\\",\\n          \\"BandWidth\\": \\"10\\",\\n          \\"InstanceType\\": \\"ecs.n4.2xlarge\\",\\n          \\"DiskCount\\": 4,\\n          \\"Period\\": \\"30\\",\\n          \\"DiskCapacity\\": 120,\\n          \\"CpuCore\\": 16,\\n          \\"MemoryCapacity\\": 16,\\n          \\"NodeCount\\": 4,\\n          \\"HostGroupChangeType\\": \\"RESIZE_DISK\\",\\n          \\"HostGroupName\\": \\"主实例组\\",\\n          \\"Nodes\\": {\\n            \\"Node\\": [\\n              {\\n                \\"Status\\": \\"NORMAL\\",\\n                \\"SupportIpV6\\": false,\\n                \\"InnerIp\\": \\"192.168.128.236\\",\\n                \\"ExpiredTime\\": \\"2099-12-31T15:59Z\\",\\n                \\"CreateTime\\": \\"1543804242000\\",\\n                \\"ZoneId\\": \\"cn-hangzhou-e\\",\\n                \\"InstanceId\\": \\"i-bp1ftve3lzvpm16hp7lo\\",\\n                \\"EmrExpiredTime\\": \\"2099-12-31T15:59Z\\",\\n                \\"PubIp\\": \\"47.99.***.***\\",\\n                \\"DaemonInfos\\": {\\n                  \\"DaemonInfo\\": [\\n                    {\\n                      \\"Name\\": \\"0\\"\\n                    }\\n                  ]\\n                },\\n                \\"DiskInfos\\": {\\n                  \\"DiskInfo\\": [\\n                    {\\n                      \\"Type\\": \\"data\\",\\n                      \\"DiskId\\": \\"d-bp15vg2nr3x2t0f37ko9\\",\\n                      \\"Size\\": 80,\\n                      \\"Device\\": \\"/dev/xvdb\\",\\n                      \\"DiskName\\": \\"disk1\\"\\n                    }\\n                  ]\\n                }\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    },\\n    \\"BootstrapActionList\\": {\\n      \\"BootstrapAction\\": [\\n        {\\n          \\"Path\\": \\"oss://bucket/path\\",\\n          \\"Name\\": \\"action_name\\",\\n          \\"Arg\\": \\"--a\\"\\n        }\\n      ]\\n    },\\n    \\"RelateClusterInfo\\": {\\n      \\"ClusterName\\": \\"main\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"ClusterId\\": \\"C-D7958B72E59B****\\"\\n    },\\n    \\"HostPoolInfo\\": {\\n      \\"HpName\\": \\"name\\",\\n      \\"HpBizId\\": \\"id\\"\\n    },\\n    \\"FailReason\\": {\\n      \\"ErrorMsg\\": \\"The specified ImageId does not exist.\\",\\n      \\"RequestId\\": \\"B8DC3A91-3953-4444-92BB-DBC29C47EC1A\\",\\n      \\"ErrorCode\\": \\"InvalidImageId.NotFound\\"\\n    },\\n    \\"SoftwareInfo\\": {\\n      \\"ClusterType\\": \\"标准型\\",\\n      \\"EmrVer\\": \\"DDI-V1.0\\",\\n      \\"Softwares\\": {\\n        \\"Software\\": [\\n          {\\n            \\"DisplayName\\": \\"SPARK\\",\\n            \\"OnlyDisplay\\": false,\\n            \\"StartTpe\\": 1,\\n            \\"Name\\": \\"HIVE\\",\\n            \\"Version\\": \\"2.3.3\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"AccessInfo\\": {\\n      \\"ZKLinks\\": {\\n        \\"ZKLink\\": [\\n          {\\n            \\"Port\\": \\"2181\\",\\n            \\"Link\\": \\"ddi-worker-1,ddi-header-2,ddi-header-1\\"\\n          }\\n        ]\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ClusterInfo>\\n    <TaskNodeInService>2</TaskNodeInService>\\n    <ShowSoftwareInterface>true</ShowSoftwareInterface>\\n    <CoreNodeInService>3</CoreNodeInService>\\n    <HostPoolInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </HostPoolInfo>\\n    <BootstrapActionList>\\n        <BootstrapAction>\\n            <Status>IDLE</Status>\\n            <ClusterId>C-D7958B72E59B****</ClusterId>\\n            <ClusterName>gateway-name</ClusterName>\\n        </BootstrapAction>\\n        <BootstrapAction>\\n            <HostGroupType>CORE</HostGroupType>\\n            <HostGroupSubType>0</HostGroupSubType>\\n            <HostGroupChangeType>RESIZE_DISK</HostGroupChangeType>\\n            <DiskCount>4</DiskCount>\\n            <HostGroupChangeStatus>IN_PROGRESS</HostGroupChangeStatus>\\n            <NodeCount>4</NodeCount>\\n            <Period>30</Period>\\n            <MemoryCapacity>16</MemoryCapacity>\\n            <HostGroupName>主实例组</HostGroupName>\\n            <LockType>0</LockType>\\n            <DiskType>CLOUD_ESSD</DiskType>\\n            <BandWidth>10</BandWidth>\\n            <DiskCapacity>120</DiskCapacity>\\n            <HostGroupId>G-9D08642FB8CE****</HostGroupId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <CpuCore>16</CpuCore>\\n            <InstanceType>ecs.n4.2xlarge</InstanceType>\\n            <LockReason>0</LockReason>\\n        </BootstrapAction>\\n        <BootstrapAction>\\n            <Nodes>\\n                <Node>\\n                    <Status>NORMAL</Status>\\n                    <ZoneId>cn-hangzhou-e</ZoneId>\\n                    <InnerIp>192.168.128.236</InnerIp>\\n                    <InstanceId>i-bp1ftve3lzvpm16hp7lo</InstanceId>\\n                    <ExpiredTime>2099-12-31T15:59Z</ExpiredTime>\\n                    <CreateTime>1543804242000</CreateTime>\\n                    <PubIp>47.99.***.***</PubIp>\\n                    <EmrExpiredTime>2099-12-31T15:59Z</EmrExpiredTime>\\n                    <SupportIpV6>false</SupportIpV6>\\n                </Node>\\n                <Node>\\n                    <DaemonInfos>\\n                        <DaemonInfo>\\n                            <Name>0</Name>\\n                        </DaemonInfo>\\n                        <DaemonInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DaemonInfo>\\n                    </DaemonInfos>\\n                    <DiskInfos>\\n                        <DiskInfo>\\n                            <Name>0</Name>\\n                        </DiskInfo>\\n                        <DiskInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DiskInfo>\\n                    </DiskInfos>\\n                </Node>\\n            </Nodes>\\n        </BootstrapAction>\\n        <BootstrapAction>\\n            <Path>oss://bucket/path</Path>\\n            <Arg>--a</Arg>\\n            <Name>action_name</Name>\\n        </BootstrapAction>\\n    </BootstrapActionList>\\n    <ResizeDiskEnable>true</ResizeDiskEnable>\\n    <FailReason>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </FailReason>\\n    <K8sClusterId>[]</K8sClusterId>\\n    <Name>cluster_name</Name>\\n    <HighAvailabilityEnable>true</HighAvailabilityEnable>\\n    <AutoScalingVersion>false</AutoScalingVersion>\\n    <ExpiredTime>1544076205000</ExpiredTime>\\n    <CreateType>MANUAL</CreateType>\\n    <ImageId>m-bp118knl07yk88y8s6cj</ImageId>\\n    <AutoScalingSpotWithLimitAllowed>false</AutoScalingSpotWithLimitAllowed>\\n    <UserDefinedEmrEcsRole>AliyunDDIAccessingOSSRole</UserDefinedEmrEcsRole>\\n    <AutoScalingAllowed>false</AutoScalingAllowed>\\n    <StopTime>1543804234000</StopTime>\\n    <Status>IDLE</Status>\\n    <CreateResource>ECM_DDI</CreateResource>\\n    <BootstrapFailed>false</BootstrapFailed>\\n    <VSwitchId>vsw-bp11qjbyggil4pow0****</VSwitchId>\\n    <DepositType>HALF_MANAGED</DepositType>\\n    <StartTime>1543804234000</StartTime>\\n    <Period>36</Period>\\n    <MetaStoreType>local</MetaStoreType>\\n    <GatewayClusterInfoList>\\n        <GatewayClusterInfo>\\n            <Status>IDLE</Status>\\n            <ClusterId>C-D7958B72E59B****</ClusterId>\\n            <ClusterName>gateway-name</ClusterName>\\n        </GatewayClusterInfo>\\n        <GatewayClusterInfo>\\n            <HostGroupType>CORE</HostGroupType>\\n            <HostGroupSubType>0</HostGroupSubType>\\n            <HostGroupChangeType>RESIZE_DISK</HostGroupChangeType>\\n            <DiskCount>4</DiskCount>\\n            <HostGroupChangeStatus>IN_PROGRESS</HostGroupChangeStatus>\\n            <NodeCount>4</NodeCount>\\n            <Period>30</Period>\\n            <MemoryCapacity>16</MemoryCapacity>\\n            <HostGroupName>主实例组</HostGroupName>\\n            <LockType>0</LockType>\\n            <DiskType>CLOUD_ESSD</DiskType>\\n            <BandWidth>10</BandWidth>\\n            <DiskCapacity>120</DiskCapacity>\\n            <HostGroupId>G-9D08642FB8CE****</HostGroupId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <CpuCore>16</CpuCore>\\n            <InstanceType>ecs.n4.2xlarge</InstanceType>\\n            <LockReason>0</LockReason>\\n        </GatewayClusterInfo>\\n        <GatewayClusterInfo>\\n            <Nodes>\\n                <Node>\\n                    <Status>NORMAL</Status>\\n                    <ZoneId>cn-hangzhou-e</ZoneId>\\n                    <InnerIp>192.168.128.236</InnerIp>\\n                    <InstanceId>i-bp1ftve3lzvpm16hp7lo</InstanceId>\\n                    <ExpiredTime>2099-12-31T15:59Z</ExpiredTime>\\n                    <CreateTime>1543804242000</CreateTime>\\n                    <PubIp>47.99.***.***</PubIp>\\n                    <EmrExpiredTime>2099-12-31T15:59Z</EmrExpiredTime>\\n                    <SupportIpV6>false</SupportIpV6>\\n                </Node>\\n                <Node>\\n                    <DaemonInfos>\\n                        <DaemonInfo>\\n                            <Name>0</Name>\\n                        </DaemonInfo>\\n                        <DaemonInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DaemonInfo>\\n                    </DaemonInfos>\\n                    <DiskInfos>\\n                        <DiskInfo>\\n                            <Name>0</Name>\\n                        </DiskInfo>\\n                        <DiskInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DiskInfo>\\n                    </DiskInfos>\\n                </Node>\\n            </Nodes>\\n        </GatewayClusterInfo>\\n        <GatewayClusterInfo>\\n            <Path>oss://bucket/path</Path>\\n            <Arg>--a</Arg>\\n            <Name>action_name</Name>\\n        </GatewayClusterInfo>\\n    </GatewayClusterInfoList>\\n    <EasEnable>true</EasEnable>\\n    <VpcId>vpc-bp1l4urd87xlh7i4****</VpcId>\\n    <HostGroupList>\\n        <HostGroup>\\n            <Status>IDLE</Status>\\n            <ClusterId>C-D7958B72E59B****</ClusterId>\\n            <ClusterName>gateway-name</ClusterName>\\n        </HostGroup>\\n        <HostGroup>\\n            <HostGroupType>CORE</HostGroupType>\\n            <HostGroupSubType>0</HostGroupSubType>\\n            <HostGroupChangeType>RESIZE_DISK</HostGroupChangeType>\\n            <DiskCount>4</DiskCount>\\n            <HostGroupChangeStatus>IN_PROGRESS</HostGroupChangeStatus>\\n            <NodeCount>4</NodeCount>\\n            <Period>30</Period>\\n            <MemoryCapacity>16</MemoryCapacity>\\n            <HostGroupName>主实例组</HostGroupName>\\n            <LockType>0</LockType>\\n            <DiskType>CLOUD_ESSD</DiskType>\\n            <BandWidth>10</BandWidth>\\n            <DiskCapacity>120</DiskCapacity>\\n            <HostGroupId>G-9D08642FB8CE****</HostGroupId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <CpuCore>16</CpuCore>\\n            <InstanceType>ecs.n4.2xlarge</InstanceType>\\n            <LockReason>0</LockReason>\\n        </HostGroup>\\n        <HostGroup>\\n            <Nodes>\\n                <Node>\\n                    <Status>NORMAL</Status>\\n                    <ZoneId>cn-hangzhou-e</ZoneId>\\n                    <InnerIp>192.168.128.236</InnerIp>\\n                    <InstanceId>i-bp1ftve3lzvpm16hp7lo</InstanceId>\\n                    <ExpiredTime>2099-12-31T15:59Z</ExpiredTime>\\n                    <CreateTime>1543804242000</CreateTime>\\n                    <PubIp>47.99.***.***</PubIp>\\n                    <EmrExpiredTime>2099-12-31T15:59Z</EmrExpiredTime>\\n                    <SupportIpV6>false</SupportIpV6>\\n                </Node>\\n                <Node>\\n                    <DaemonInfos>\\n                        <DaemonInfo>\\n                            <Name>0</Name>\\n                        </DaemonInfo>\\n                        <DaemonInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DaemonInfo>\\n                    </DaemonInfos>\\n                    <DiskInfos>\\n                        <DiskInfo>\\n                            <Name>0</Name>\\n                        </DiskInfo>\\n                        <DiskInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DiskInfo>\\n                    </DiskInfos>\\n                </Node>\\n            </Nodes>\\n        </HostGroup>\\n        <HostGroup>\\n            <Path>oss://bucket/path</Path>\\n            <Arg>--a</Arg>\\n            <Name>action_name</Name>\\n        </HostGroup>\\n    </HostGroupList>\\n    <Id>C-E331B8AC12BF****</Id>\\n    <SoftwareInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </SoftwareInfo>\\n    <SecurityGroupName>emr-default-securitygroup</SecurityGroupName>\\n    <LogEnable>true</LogEnable>\\n    <MasterNodeInService>2</MasterNodeInService>\\n    <RelateClusterInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </RelateClusterInfo>\\n    <RelateClusterId>C-D7958B72E59****</RelateClusterId>\\n    <AutoScalingByLoadAllowed>true</AutoScalingByLoadAllowed>\\n    <AutoScalingWithGraceAllowed>false</AutoScalingWithGraceAllowed>\\n    <CoreNodeTotal>3</CoreNodeTotal>\\n    <Configurations>[]</Configurations>\\n    <NetType>vpc</NetType>\\n    <LocalMetaDb>true</LocalMetaDb>\\n    <GatewayClusterIds>C-D7958B72E59B****</GatewayClusterIds>\\n    <IoOptimized>true</IoOptimized>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n    <SecurityGroupId>sg-bp1bvompzxgx7q0****</SecurityGroupId>\\n    <MachineType>ECS</MachineType>\\n    <TaskNodeTotal>2</TaskNodeTotal>\\n    <AccessInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </AccessInfo>\\n    <ExtraInfo>-None-</ExtraInfo>\\n    <MasterNodeTotal>2</MasterNodeTotal>\\n    <UserId>125046002175****</UserId>\\n    <ChargeType>PostPaid</ChargeType>\\n    <AutoScalingEnable>false</AutoScalingEnable>\\n    <InstanceGeneration>ecs-3</InstanceGeneration>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <LogPath>oss://bucketname/path</LogPath>\\n    <RunningTime>1102</RunningTime>\\n</ClusterInfo>\\n<RequestId>14E9C045-9B8D-4D1E-8D23-FC0027B6D947</RequestId>","errorExample":""}]',
      'title' => '查询集群基本信息',
      'summary' => '查询集群的基本信息，包括：付费、ECS机器概况和DDI服务列表等。',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListClusters' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'CreateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群创建类型。可选值：
ON-DEMAND。
MANUAL。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON-DEMAND',
            'enum' => 
            array (
              0 => 'ON-DEMAND',
              1 => 'MANUAL',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'MachineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
            'enum' => 
            array (
              0 => 'ECS',
              1 => 'DOCKER',
              2 => 'PYHSICAL_MACHINE',
              3 => 'ECS_FROM_ECM_HOSTPOOL',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'IsDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否倒序排列。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'DepositType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '托管类型，标识集群是全托管还是半托管。枚举值：

HALF_MANAGED。
FULLY_MANAGED。',
            'type' => 'string',
            'required' => false,
            'example' => 'HALF_MANAGED',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页分数，从1开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'DefaultStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询默认状态为初始化中、等待构建、空闲、运行中、释放中、创建失败的集群。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名。',
            'type' => 'string',
            'required' => false,
            'example' => 'cluster_name',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DDI实例和节点ECS实例所在的企业资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        10 => 
        array (
          'name' => 'ClusterTypeList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '集群类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'DATABRICKS DATAINSIGHT',
            ),
            'required' => false,
            'example' => '["HADOOP","KAFKA"]',
            'maxItems' => 100,
          ),
        ),
        11 => 
        array (
          'name' => 'StatusList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'Running',
            ),
            'required' => false,
            'example' => '["CREATING","IDLE"]',
            'maxItems' => 100,
          ),
        ),
        12 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => 'DDI实例和节点ECS实例的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => 'DDI实例和节点ECS实例的标签值。N的取值范围：1~20。一旦传入该值，可以为空字符串。标签值的取值范围1~128，不能以acs:开头，不能包含http://或者https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        13 => 
        array (
          'name' => 'ExpiredTagList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '保留字段。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'None',
            ),
            'required' => false,
            'example' => '0',
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
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22',
              ),
              'PageNumber' => 
              array (
                'description' => '分页页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '查询总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Clusters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ClusterInfo' => 
                  array (
                    'description' => '集群列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '集群类型。',
                          'type' => 'string',
                          'example' => '标准型',
                        ),
                        'Status' => 
                        array (
                          'description' => '集群状态。',
                          'type' => 'string',
                          'example' => 'IDEL',
                        ),
                        'RunningTime' => 
                        array (
                          'description' => '已运行时间（秒）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2345',
                        ),
                        'MetaStoreType' => 
                        array (
                          'description' => '统一元数据类型。',
                          'type' => 'string',
                          'example' => 'local',
                        ),
                        'MachineType' => 
                        array (
                          'description' => '集群的主机类型，目前默认为ECS。',
                          'type' => 'string',
                          'example' => 'ECS',
                        ),
                        'OrderList' => 
                        array (
                          'description' => '订单列表。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1542784048000',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '付费类型。',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'DepositType' => 
                        array (
                          'description' => '托管类型，标识集群是全托管还是半托管。枚举值：HALF_MANAGED、FULLY_MANAGED。',
                          'type' => 'string',
                          'example' => 'HALF_MANAGED',
                        ),
                        'Period' => 
                        array (
                          'description' => '包年包月时间（可选包月数量有：1、2、3、4、5、6、7、8、9、12、24、36。）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'K8sClusterId' => 
                        array (
                          'description' => 'K8s集群ID。',
                          'type' => 'string',
                          'example' => '[]',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '包年包月集群超时时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1542784048000',
                        ),
                        'HasUncompletedOrder' => 
                        array (
                          'description' => '是否有未完成的订单。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Name' => 
                        array (
                          'description' => '集群名。',
                          'type' => 'string',
                          'example' => 'cluster_name',
                        ),
                        'CreateResource' => 
                        array (
                          'description' => '自动附加到DDI集群的标签。',
                          'type' => 'string',
                          'example' => 'ECM_DDI',
                        ),
                        'Id' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'C-010A704DA760****',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagValue' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => '[]',
                                  ),
                                  'TagKey' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => '[]',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'OrderTaskInfo' => 
                        array (
                          'description' => '保留字段，订单任务信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TargetCount' => 
                            array (
                              'description' => '保留字段。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'CurrentCount' => 
                            array (
                              'description' => '保留字段。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'OrderIdList' => 
                            array (
                              'description' => '保留字段。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                          ),
                        ),
                        'FailReason' => 
                        array (
                          'description' => '创建失败原因。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ErrorMsg' => 
                            array (
                              'description' => '错误信息。',
                              'type' => 'string',
                              'example' => 'The specified ImageId does not exist.',
                            ),
                            'RequestId' => 
                            array (
                              'description' => '请求ID。',
                              'type' => 'string',
                              'example' => 'B8DC3A91-3953-4444-92BB-DBC29C47EC1A',
                            ),
                            'ErrorCode' => 
                            array (
                              'description' => '错误码。',
                              'type' => 'string',
                              'example' => 'InvalidImageId.NotFound',
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
            'errorCode' => 'EcmClusterId.NotFound',
            'errorMessage' => 'The cluster ID is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'DB.Fail',
            'errorMessage' => 'A database access error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'RAM.Permission.NotAllow',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Cluster.Status',
            'errorMessage' => 'The cluster status %s is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Cluster.Type',
            'errorMessage' => 'The cluster type %s is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'User.OtherUserResource.NotAllow',
            'errorMessage' => 'You are not authorized to operate other users resource.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Params.Illegal',
            'errorMessage' => 'The format of the specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Clusters\\": {\\n    \\"ClusterInfo\\": [\\n      {\\n        \\"Type\\": \\"标准型\\",\\n        \\"Status\\": \\"IDEL\\",\\n        \\"RunningTime\\": 2345,\\n        \\"MetaStoreType\\": \\"local\\",\\n        \\"MachineType\\": \\"ECS\\",\\n        \\"OrderList\\": \\"0\\",\\n        \\"CreateTime\\": 1542784048000,\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"DepositType\\": \\"HALF_MANAGED\\",\\n        \\"Period\\": 10,\\n        \\"K8sClusterId\\": \\"[]\\",\\n        \\"ExpiredTime\\": 1542784048000,\\n        \\"HasUncompletedOrder\\": false,\\n        \\"Name\\": \\"cluster_name\\",\\n        \\"CreateResource\\": \\"ECM_DDI\\",\\n        \\"Id\\": \\"C-010A704DA760****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"[]\\",\\n              \\"TagKey\\": \\"[]\\"\\n            }\\n          ]\\n        },\\n        \\"OrderTaskInfo\\": {\\n          \\"TargetCount\\": 0,\\n          \\"CurrentCount\\": 0,\\n          \\"OrderIdList\\": \\"0\\"\\n        },\\n        \\"FailReason\\": {\\n          \\"ErrorMsg\\": \\"The specified ImageId does not exist.\\",\\n          \\"RequestId\\": \\"B8DC3A91-3953-4444-92BB-DBC29C47EC1A\\",\\n          \\"ErrorCode\\": \\"InvalidImageId.NotFound\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>12</TotalCount>\\n<RequestId>BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<Clusters>\\n    <ClusterInfo>\\n        <Status>IDEL</Status>\\n        <CreateResource>ECM_DDI</CreateResource>\\n        <CreateTime>1542784048000</CreateTime>\\n        <MachineType>ECS</MachineType>\\n        <DepositType>HALF_MANAGED</DepositType>\\n        <Period>10</Period>\\n        <MetaStoreType>local</MetaStoreType>\\n        <K8sClusterId/>\\n        <Name>cluster_name</Name>\\n        <Type>标准型</Type>\\n        <ChargeType>PostPaid</ChargeType>\\n        <ExpiredTime>1542784048000</ExpiredTime>\\n        <Id>C-010A704DA760****</Id>\\n        <OrderList>0</OrderList>\\n        <HasUncompletedOrder>false</HasUncompletedOrder>\\n        <RunningTime>2345</RunningTime>\\n    </ClusterInfo>\\n    <ClusterInfo>\\n        <Tags>\\n            <Tag>\\n                <TagKey/>\\n                <TagValue/>\\n            </Tag>\\n        </Tags>\\n    </ClusterInfo>\\n    <ClusterInfo>\\n        <OrderTaskInfo>\\n            <OrderIdList>0</OrderIdList>\\n            <TargetCount>0</TargetCount>\\n            <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n            <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n            <CurrentCount>0</CurrentCount>\\n            <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        </OrderTaskInfo>\\n        <FailReason>\\n            <OrderIdList>0</OrderIdList>\\n            <TargetCount>0</TargetCount>\\n            <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n            <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n            <CurrentCount>0</CurrentCount>\\n            <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        </FailReason>\\n    </ClusterInfo>\\n</Clusters>","errorExample":""}]',
      'title' => 'ListClusters',
      'summary' => '调用ListClusters分页查询集群列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFlowCategory' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-A4XDIAFWCF00X',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'myFolder',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型：

- FLOW: 工作流
- JOB: 作业',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FLOW',
          ),
        ),
        4 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父目录ID，为空时则默认为root目录。',
            'type' => 'string',
            'required' => false,
            'example' => 'FC-AF08490649B8****',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'Id' => 
              array (
                'description' => '新增的目录文件夹ID。',
                'type' => 'string',
                'example' => 'FC-AF08490649B8****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2670BCFB-925D-4C3E-9994-8D12F7A9F538',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FC-AF08490649B8****\\",\\n  \\"RequestId\\": \\"2670BCFB-925D-4C3E-9994-8D12F7A9F538\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowCategoryResponse>\\n    <Id>FC-AF08490649B8****</Id>\\n    <RequestId>2670BCFB-925D-4C3E-9994-8D12F7A9F538</RequestId>\\n</CreateFlowCategoryResponse>","errorExample":""}]',
      'title' => '创建工作流子文件夹',
      'summary' => '用于创建工作流或者作业子文件夹。',
    ),
    'DeleteFlowCategory' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。您可以调用DescribeFlowCategory查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC-075AB9477DAE****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-ABD24A6163D3****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回执行结果，包含如下：

- true：删除成功。
- false：删除失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowCategoryResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</DeleteFlowCategoryResponse>","errorExample":""}]',
      'title' => '删除工作流目录',
      'summary' => '调用DeleteFlowCategory接口，删除工作流目录。',
    ),
    'CreateFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-ED2F3E844FE3****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。您可以调用ListFlowProject查看',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'myFlow',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目描述。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '这是一个项目描述',
          ),
        ),
        4 => 
        array (
          'name' => 'StartSchedule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始调度时间，长整型时间戳.。例如：System.currentTimeMillis()。
- 必须小于EndSchedule。
- 当CronExpr不为空时，此项必填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1538017814000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndSchedule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度失效时间，长整型时间戳，例如System.currentTimeMillis()。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1538018814000',
          ),
        ),
        6 => 
        array (
          'name' => 'CronExpression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间周期调度的cron表达式。',
            'type' => 'string',
            'required' => false,
            'example' => '0 0 0-23/1 * * ?',
          ),
        ),
        7 => 
        array (
          'name' => 'CreateCluster',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过集群模板创建集群，true表示通过集群模板创建集群，ClusterId应设置为集群模板 ID(CT-xxx)，否则为已有集群 ID（C-xxx）。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'C-A23BD131A862****',
          ),
        ),
        9 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点实例运行所在主机的名称。您可以调用ListFlow或登录主机使用hostname命令查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'emr-header-1.cluster-123456',
          ),
        ),
        10 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        11 => 
        array (
          'name' => 'Application',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'APP',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        12 => 
        array (
          'name' => 'AlertConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警通知配置，eventId目前支持以下告警：
- EMR-210401001（工作流失败报警）。
- EMR-110401002（工作流成功通知）。
- EMR-110401015（工作流节点失败报警）。',
            'type' => 'string',
            'required' => false,
            'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
          ),
        ),
        13 => 
        array (
          'name' => 'AlertUserGroupBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警用户组信息。

',
            'type' => 'string',
            'required' => false,
            'example' => 'ADG-0a00d00abb7743ff9f812f1a997f3d87',
          ),
        ),
        14 => 
        array (
          'name' => 'AlertDingDingGroupBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警钉钉群信息。',
            'type' => 'string',
            'required' => false,
            'example' => '已过期',
          ),
        ),
        15 => 
        array (
          'name' => 'ParentFlowList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '依赖的上游工作流列表，以逗号分隔。您可以调用ListFlowInstance查看工作流ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89',
          ),
        ),
        16 => 
        array (
          'name' => 'ParentCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89',
            'type' => 'string',
            'required' => false,
            'example' => 'F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89',
          ),
        ),
        17 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'Id' => 
              array (
                'description' => '新创建的工作流ID。',
                'type' => 'string',
                'example' => 'F-7A39731FE719****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"F-7A39731FE719****\\",\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowResponse>\\n    <Id>F-7A39731FE719****</Id>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</CreateFlowResponse>","errorExample":""}]',
      'title' => '创建工作流',
      'summary' => '创建一个工作流，对应于项目空间 -> 工作流设计页面 -> 新建工作流。',
    ),
    'DeleteFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'F-7A39731FE719****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回执行结果，包含如下：
- true：删除成功。
- false：删除失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11BAFBD8-8509-4177-A26D-407505E73713',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"11BAFBD8-8509-4177-A26D-407505E73713\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowResponse>\\n    <Data>true</Data>\\n    <RequestId>11BAFBD8-8509-4177-A26D-407505E73713</RequestId>\\n</DeleteFlowResponse>","errorExample":""}]',
      'title' => '删除工作流',
      'summary' => '删除工作流。',
    ),
    'ListFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FP-3535FE0BE522****',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业ID。您可以调用ListFlowJob查看。',
            'description' => '作业ID。您可以调用ListFlowJob查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'FJ-F32FB31D8295****',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作流名称。您可以调用ListFlowInstance查看。',
            'description' => '工作流名称。您可以调用ListFlowInstance查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_flow',
          ),
        ),
        4 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
            'description' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'F-A32FB31D8295****',
          ),
        ),
        5 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'C-F32FB31D8295****',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态：  STOP_SCHEDULE（停止调度） UNDER_SCHEDULE（调度中）',
            'description' => '状态：  

- STOP_SCHEDULE（停止调度）

- UNDER_SCHEDULE（调度中）',
            'type' => 'string',
            'required' => false,
            'example' => 'STOP_SCHEDULE',
          ),
        ),
        7 => 
        array (
          'name' => 'Periodic',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否调度。',
            'description' => '是否调度。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。',
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页查询数量。',
            'description' => '每页查询数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
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
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7DDFF4C7-3AE3-485F-BFA1-BAE0AA3689DD',
              ),
              'PageNumber' => 
              array (
                'title' => '页码。',
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页数量。',
                'description' => '每页数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'title' => '总数。',
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Flow' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Flow' => 
                  array (
                    'title' => '工作流列表',
                    'description' => '工作流列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '支持状态：
- STOP_SCHEDULE（停止调度）
- UNDER_SCHEDULE（调度中）',
                          'type' => 'string',
                          'example' => 'STOP_SCHEDULE',
                        ),
                        'Type' => 
                        array (
                          'description' => '目前只支持DATABRICKS_INSIGHT。',
                          'type' => 'string',
                          'example' => 'DATABRICKS_INSIGHT',
                        ),
                        'AlertUserGroupBizId' => 
                        array (
                          'description' => '	
报警用户组信息。',
                          'type' => 'string',
                          'example' => 'ADG-0a00d00abb7743ff9f812f1a997f3d87',
                        ),
                        'Periodic' => 
                        array (
                          'description' => '是否周期执行：
- true：周期执行。
- false：非周期行执行。',
                          'type' => 'boolean',
                          'example' => 'Periodic',
                        ),
                        'ProjectId' => 
                        array (
                          'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                          'type' => 'string',
                          'example' => 'ProjectId',
                        ),
                        'HostName' => 
                        array (
                          'description' => '指定运行的机器信息，格式为emr-header-1.cluster-123456。',
                          'type' => 'string',
                          'example' => 'emr-header-1.cluster-123456',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'Description' => 
                        array (
                          'description' => '	
工作流描述。',
                          'type' => 'string',
                          'example' => '这是一个创建工作流描述',
                        ),
                        'CreateCluster' => 
                        array (
                          'description' => '是否创建集群：
- true：ClusterId为集群模板id（CT-XXXXXX）。
- false：ClusterId为集群id（C-XXXXXX）。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'StartSchedule' => 
                        array (
                          'description' => '开始调度时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'EndSchedule' => 
                        array (
                          'description' => '结束调度时间。

',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'Graph' => 
                        array (
                          'description' => '图形信息。

',
                          'type' => 'string',
                          'example' => '{"nodes":[{"id":"48d474ea","index":0,"spmAnchorId":"0.0.0.i0.766645eb2cmNtQ","attribute":{"type":"START"},"shape":"startControlNode","type":"node","y":250,"size":"80*34","x":500},{"id":"7ba480b3","index":1,"spmAnchorId":"5176.8250060.0.i19.771e28d0IPNQGE","attribute":{"jobType":"SHELL","jobId":"FJ-7BE1062897B19D25","type":"JOB"},"config":{"hostName":""},"label":"fail_job","shape":"shellJobNode","type":"node","y":398.5,"size":"170*34","x":470.5},{"id":"33202d60","index":2,"spmAnchorId":"5176.8250060.0.i23.771e28d0IPNQGE","attribute":{"type":"END"},"shape":"endControlNode","type":"node","y":562.5,"size":"80*34","x":430.5}],"edges":[{"id":"28167ea0","index":3,"source":"48d474ea","sourceAnchor":0,"target":"7ba480b3","targetAnchor":0},{"id":"e8d5ff52","index":4,"source":"7ba480b3","sourceAnchor":1,"target":"33202d60","targetAnchor":0}]}',
                        ),
                        'AlertDingDingGroupBizId' => 
                        array (
                          'description' => '报警钉钉群信息。

',
                          'type' => 'string',
                          'example' => 'AUG-c917bbfaf6494bbfacdee69c8284967c',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间。

',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'CategoryId' => 
                        array (
                          'description' => '工作流目录ID。

',
                          'type' => 'string',
                          'example' => 'FC-F2495319DA05****',
                        ),
                        'CronExpr' => 
                        array (
                          'description' => '调度Cron表达式。

',
                          'type' => 'string',
                          'example' => '0 0 0-23/1 * * ?',
                        ),
                        'Name' => 
                        array (
                          'description' => '工作流名称。

',
                          'type' => 'string',
                          'example' => 'my_flow_demo',
                        ),
                        'Id' => 
                        array (
                          'description' => '工作流ID。

',
                          'type' => 'string',
                          'example' => 'F-7A39731FE719****',
                        ),
                        'AlertConf' => 
                        array (
                          'description' => '报警通知配置，eventId目前支持：
- EMR-210401001（工作流失败报警）。
- EMR-110401002（工作流成功通知）。
- EMR-110401015（工作流节点失败报警）。
',
                          'type' => 'string',
                          'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群或集群模板ID。

',
                          'type' => 'string',
                          'example' => 'C-A23BD131A862****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7DDFF4C7-3AE3-485F-BFA1-BAE0AA3689DD\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 1,\\n  \\"Flow\\": {\\n    \\"Flow\\": [\\n      {\\n        \\"Status\\": \\"STOP_SCHEDULE\\",\\n        \\"Type\\": \\"DATABRICKS_INSIGHT\\",\\n        \\"AlertUserGroupBizId\\": \\"ADG-0a00d00abb7743ff9f812f1a997f3d87\\",\\n        \\"Periodic\\": true,\\n        \\"ProjectId\\": \\"ProjectId\\",\\n        \\"HostName\\": \\"emr-header-1.cluster-123456\\",\\n        \\"GmtModified\\": 1538017814000,\\n        \\"Description\\": \\"这是一个创建工作流描述\\",\\n        \\"CreateCluster\\": false,\\n        \\"StartSchedule\\": 1538017814000,\\n        \\"EndSchedule\\": 1538017814000,\\n        \\"Graph\\": \\"{\\\\\\"nodes\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"index\\\\\\":0,\\\\\\"spmAnchorId\\\\\\":\\\\\\"0.0.0.i0.766645eb2cmNtQ\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"START\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"startControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":250,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":500},{\\\\\\"id\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"index\\\\\\":1,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i19.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"jobType\\\\\\":\\\\\\"SHELL\\\\\\",\\\\\\"jobId\\\\\\":\\\\\\"FJ-7BE1062897B19D25\\\\\\",\\\\\\"type\\\\\\":\\\\\\"JOB\\\\\\"},\\\\\\"config\\\\\\":{\\\\\\"hostName\\\\\\":\\\\\\"\\\\\\"},\\\\\\"label\\\\\\":\\\\\\"fail_job\\\\\\",\\\\\\"shape\\\\\\":\\\\\\"shellJobNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":398.5,\\\\\\"size\\\\\\":\\\\\\"170*34\\\\\\",\\\\\\"x\\\\\\":470.5},{\\\\\\"id\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"index\\\\\\":2,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i23.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"END\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"endControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":562.5,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":430.5}],\\\\\\"edges\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"28167ea0\\\\\\",\\\\\\"index\\\\\\":3,\\\\\\"source\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"sourceAnchor\\\\\\":0,\\\\\\"target\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"targetAnchor\\\\\\":0},{\\\\\\"id\\\\\\":\\\\\\"e8d5ff52\\\\\\",\\\\\\"index\\\\\\":4,\\\\\\"source\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"sourceAnchor\\\\\\":1,\\\\\\"target\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"targetAnchor\\\\\\":0}]}\\",\\n        \\"AlertDingDingGroupBizId\\": \\"AUG-c917bbfaf6494bbfacdee69c8284967c\\",\\n        \\"GmtCreate\\": 1538017814000,\\n        \\"CategoryId\\": \\"FC-F2495319DA05****\\",\\n        \\"CronExpr\\": \\"0 0 0-23/1 * * ?\\",\\n        \\"Name\\": \\"my_flow_demo\\",\\n        \\"Id\\": \\"F-7A39731FE719****\\",\\n        \\"AlertConf\\": \\"{\\\\\\"items\\\\\\":[{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-210401001\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401015\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401002\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]}]}\\",\\n        \\"ClusterId\\": \\"C-A23BD131A862****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowResponse>\\n    <RequestId>7DDFF4C7-3AE3-485F-BFA1-BAE0AA3689DD</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <Total>1</Total>\\n    <Flow>\\n        <Status>STOP_SCHEDULE</Status>\\n        <Type>DATABRICKS_INSIGHT</Type>\\n        <AlertUserGroupBizId>ADG-0a00d00abb7743ff9f812f1a997f3d87</AlertUserGroupBizId>\\n        <Periodic>false</Periodic>\\n        <ProjectId>ProjectId</ProjectId>\\n        <HostName>emr-header-1.cluster-123456</HostName>\\n        <GmtModified>1538017814000</GmtModified>\\n        <Description>这是一个创建工作流描述</Description>\\n        <CreateCluster>false</CreateCluster>\\n        <StartSchedule>1538017814000</StartSchedule>\\n        <EndSchedule>1538017814000</EndSchedule>\\n        <Graph>{\\"nodes\\":[{\\"id\\":\\"48d474ea\\",\\"index\\":0,\\"spmAnchorId\\":\\"0.0.0.i0.766645eb2cmNtQ\\",\\"attribute\\":{\\"type\\":\\"START\\"},\\"shape\\":\\"startControlNode\\",\\"type\\":\\"node\\",\\"y\\":250,\\"size\\":\\"80*34\\",\\"x\\":500},{\\"id\\":\\"7ba480b3\\",\\"index\\":1,\\"spmAnchorId\\":\\"5176.8250060.0.i19.771e28d0IPNQGE\\",\\"attribute\\":{\\"jobType\\":\\"SHELL\\",\\"jobId\\":\\"FJ-7BE1062897B19D25\\",\\"type\\":\\"JOB\\"},\\"config\\":{\\"hostName\\":\\"\\"},\\"label\\":\\"fail_job\\",\\"shape\\":\\"shellJobNode\\",\\"type\\":\\"node\\",\\"y\\":398.5,\\"size\\":\\"170*34\\",\\"x\\":470.5},{\\"id\\":\\"33202d60\\",\\"index\\":2,\\"spmAnchorId\\":\\"5176.8250060.0.i23.771e28d0IPNQGE\\",\\"attribute\\":{\\"type\\":\\"END\\"},\\"shape\\":\\"endControlNode\\",\\"type\\":\\"node\\",\\"y\\":562.5,\\"size\\":\\"80*34\\",\\"x\\":430.5}],\\"edges\\":[{\\"id\\":\\"28167ea0\\",\\"index\\":3,\\"source\\":\\"48d474ea\\",\\"sourceAnchor\\":0,\\"target\\":\\"7ba480b3\\",\\"targetAnchor\\":0},{\\"id\\":\\"e8d5ff52\\",\\"index\\":4,\\"source\\":\\"7ba480b3\\",\\"sourceAnchor\\":1,\\"target\\":\\"33202d60\\",\\"targetAnchor\\":0}]}</Graph>\\n        <AlertDingDingGroupBizId>AUG-c917bbfaf6494bbfacdee69c8284967c</AlertDingDingGroupBizId>\\n        <GmtCreate>1538017814000</GmtCreate>\\n        <CategoryId>FC-F2495319DA05****</CategoryId>\\n        <CronExpr>0 0 0-23/1 * * ?</CronExpr>\\n        <Name>my_flow_demo</Name>\\n        <Id>F-7A39731FE719****</Id>\\n        <AlertConf>{\\"items\\":[{\\"enable\\":true,\\"eventId\\":\\"EMR-210401001\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401015\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401002\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]}]}</AlertConf>\\n        <ClusterId>C-A23BD131A862****</ClusterId>\\n    </Flow>\\n</ListFlowResponse>","errorExample":""}]',
      'title' => '获取工作流列表',
      'summary' => '获取工作流列表。',
    ),
    'DescribeFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'F-7A39731FE719****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '支持状态：

- STOP_SCHEDULE

- UNDER_SCHEDULE',
                'type' => 'string',
                'example' => 'STOP_SCHEDULE',
              ),
              'Type' => 
              array (
                'description' => '目前只支持DDI',
                'type' => 'string',
                'example' => 'DDI',
              ),
              'AlertUserGroupBizId' => 
              array (
                'description' => '报警用户组信息。

',
                'type' => 'string',
                'example' => 'ADG-0a00d00abb7743ff9f812f1a997f3d87',
              ),
              'Periodic' => 
              array (
                'description' => '是否周期执行：
- true：周期执行。
- false：非周期行执行。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EditLockDetail' => 
              array (
                'description' => '编辑锁信息。

',
                'type' => 'string',
                'example' => '{}',
              ),
              'Namespace' => 
              array (
                'description' => '保留参数。',
                'type' => 'string',
                'example' => '无',
              ),
              'HostName' => 
              array (
                'description' => '指定运行的机器信息，格式为emr-header-1.cluster-123456。',
                'type' => 'string',
                'example' => 'emr-header-1.cluster-123456',
              ),
              'Application' => 
              array (
                'description' => '工作流构造信息，由一组节点定义nodeDefMap组成，多个时以逗号分隔。

type：类型包括开始节点（:start:）、构建按需集群节点（:Cluster:）、动作节点（:action:）和结束节点（:end:）。

transitions：下游的节点。',
                'type' => 'string',
                'example' => '{"nodeDefMap":{":start:":{"name":":start:","type":":start:","transitions":["cluster"]},"cluster":{"id":"CT-0C74281682CF03B4","name":"cluster","type":":Cluster:","transitions":["job1"]},"job1":{"jobId":"FJ-242AB240DBAF4195","name":"job1","type":":action:","transitions":["end"]},"end":{"name":"end","type":":end:"}}}',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1538017814000',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
              'Description' => 
              array (
                'description' => '工作流描述。

',
                'type' => 'string',
                'example' => '这是一个创建工作流描述',
              ),
              'CreateCluster' => 
              array (
                'description' => '是否创建集群：

- 为true时，ClusterId为集群模板id CT-XXXXXX。

- 为false时，ClusterId为集群id C-XXXXXX。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'StartSchedule' => 
              array (
                'description' => '开始调度时间。

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1538017814000',
              ),
              'EndSchedule' => 
              array (
                'description' => '结束调度时间。

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1538018814000',
              ),
              'Graph' => 
              array (
                'description' => '图形信息。',
                'type' => 'string',
                'example' => '{"nodes":[{"id":"48d474ea","index":0,"spmAnchorId":"0.0.0.i0.766645eb2cmNtQ","attribute":{"type":"START"},"shape":"startControlNode","type":"node","y":250,"size":"80*34","x":500},{"id":"7ba480b3","index":1,"spmAnchorId":"5176.8250060.0.i19.771e28d0IPNQGE","attribute":{"jobType":"SHELL","jobId":"FJ-7BE1062897B19D25","type":"JOB"},"config":{"hostName":""},"label":"fail_job","shape":"shellJobNode","type":"node","y":398.5,"size":"170*34","x":470.5},{"id":"33202d60","index":2,"spmAnchorId":"5176.8250060.0.i23.771e28d0IPNQGE","attribute":{"type":"END"},"shape":"endControlNode","type":"node","y":562.5,"size":"80*34","x":430.5}],"edges":[{"id":"28167ea0","index":3,"source":"48d474ea","sourceAnchor":0,"target":"7ba480b3","targetAnchor":0},{"id":"e8d5ff52","index":4,"source":"7ba480b3","sourceAnchor":1,"target":"33202d60","targetAnchor":0}]}',
              ),
              'AlertDingDingGroupBizId' => 
              array (
                'description' => '报警钉钉群信息。

',
                'type' => 'string',
                'example' => 'AUG-c917bbfaf6494bbfacdee69c8284967c',
              ),
              'GmtCreate' => 
              array (
                'description' => '创建时间。

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1538017814000',
              ),
              'CategoryId' => 
              array (
                'description' => '工作流目录ID。

',
                'type' => 'string',
                'example' => 'FC-F2495319DA05****',
              ),
              'CronExpr' => 
              array (
                'description' => '调度Cron表达式。

',
                'type' => 'string',
                'example' => '0 0 0-23/1 * * ?',
              ),
              'Name' => 
              array (
                'description' => '工作流名称。

',
                'type' => 'string',
                'example' => 'my_flow_demo',
              ),
              'Id' => 
              array (
                'description' => '工作流ID。

',
                'type' => 'string',
                'example' => 'F-7A39731FE719****',
              ),
              'AlertConf' => 
              array (
                'description' => '报警通知配置，eventId目前支持：

- EMR-210401001（工作流失败报警）。

- EMR-110401002（工作流成功通知）。

- EMR-110401015（工作流节点失败报警）。
',
                'type' => 'string',
                'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
              ),
              'ClusterId' => 
              array (
                'description' => '集群/集群模板ID。

',
                'type' => 'string',
                'example' => 'C-A23BD131A862****',
              ),
              'ParentFlowList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ParentFlow' => 
                  array (
                    'description' => '依赖的父工作流列表。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParentFlowName' => 
                        array (
                          'description' => '父工作流名称。',
                          'type' => 'string',
                          'example' => 'parent_flow',
                        ),
                        'ParentFlowId' => 
                        array (
                          'description' => '父工作流ID。',
                          'type' => 'string',
                          'example' => '173659F59685',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '项目名称。',
                          'type' => 'string',
                          'example' => 'my_project',
                        ),
                        'ProjectId' => 
                        array (
                          'description' => '项目ID。',
                          'type' => 'string',
                          'example' => 'FP-257A173659F59685',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"STOP_SCHEDULE\\",\\n  \\"Type\\": \\"DDI\\",\\n  \\"AlertUserGroupBizId\\": \\"ADG-0a00d00abb7743ff9f812f1a997f3d87\\",\\n  \\"Periodic\\": true,\\n  \\"EditLockDetail\\": \\"{}\\",\\n  \\"Namespace\\": \\"无\\",\\n  \\"HostName\\": \\"emr-header-1.cluster-123456\\",\\n  \\"Application\\": \\"{\\\\\\"nodeDefMap\\\\\\":{\\\\\\":start:\\\\\\":{\\\\\\"name\\\\\\":\\\\\\":start:\\\\\\",\\\\\\"type\\\\\\":\\\\\\":start:\\\\\\",\\\\\\"transitions\\\\\\":[\\\\\\"cluster\\\\\\"]},\\\\\\"cluster\\\\\\":{\\\\\\"id\\\\\\":\\\\\\"CT-0C74281682CF03B4\\\\\\",\\\\\\"name\\\\\\":\\\\\\"cluster\\\\\\",\\\\\\"type\\\\\\":\\\\\\":Cluster:\\\\\\",\\\\\\"transitions\\\\\\":[\\\\\\"job1\\\\\\"]},\\\\\\"job1\\\\\\":{\\\\\\"jobId\\\\\\":\\\\\\"FJ-242AB240DBAF4195\\\\\\",\\\\\\"name\\\\\\":\\\\\\"job1\\\\\\",\\\\\\"type\\\\\\":\\\\\\":action:\\\\\\",\\\\\\"transitions\\\\\\":[\\\\\\"end\\\\\\"]},\\\\\\"end\\\\\\":{\\\\\\"name\\\\\\":\\\\\\"end\\\\\\",\\\\\\"type\\\\\\":\\\\\\":end:\\\\\\"}}}\\",\\n  \\"GmtModified\\": 1538017814000,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\",\\n  \\"Description\\": \\"这是一个创建工作流描述\\",\\n  \\"CreateCluster\\": false,\\n  \\"StartSchedule\\": 1538017814000,\\n  \\"EndSchedule\\": 1538018814000,\\n  \\"Graph\\": \\"{\\\\\\"nodes\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"index\\\\\\":0,\\\\\\"spmAnchorId\\\\\\":\\\\\\"0.0.0.i0.766645eb2cmNtQ\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"START\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"startControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":250,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":500},{\\\\\\"id\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"index\\\\\\":1,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i19.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"jobType\\\\\\":\\\\\\"SHELL\\\\\\",\\\\\\"jobId\\\\\\":\\\\\\"FJ-7BE1062897B19D25\\\\\\",\\\\\\"type\\\\\\":\\\\\\"JOB\\\\\\"},\\\\\\"config\\\\\\":{\\\\\\"hostName\\\\\\":\\\\\\"\\\\\\"},\\\\\\"label\\\\\\":\\\\\\"fail_job\\\\\\",\\\\\\"shape\\\\\\":\\\\\\"shellJobNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":398.5,\\\\\\"size\\\\\\":\\\\\\"170*34\\\\\\",\\\\\\"x\\\\\\":470.5},{\\\\\\"id\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"index\\\\\\":2,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i23.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"END\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"endControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":562.5,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":430.5}],\\\\\\"edges\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"28167ea0\\\\\\",\\\\\\"index\\\\\\":3,\\\\\\"source\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"sourceAnchor\\\\\\":0,\\\\\\"target\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"targetAnchor\\\\\\":0},{\\\\\\"id\\\\\\":\\\\\\"e8d5ff52\\\\\\",\\\\\\"index\\\\\\":4,\\\\\\"source\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"sourceAnchor\\\\\\":1,\\\\\\"target\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"targetAnchor\\\\\\":0}]}\\",\\n  \\"AlertDingDingGroupBizId\\": \\"AUG-c917bbfaf6494bbfacdee69c8284967c\\",\\n  \\"GmtCreate\\": 1538017814000,\\n  \\"CategoryId\\": \\"FC-F2495319DA05****\\",\\n  \\"CronExpr\\": \\"0 0 0-23/1 * * ?\\",\\n  \\"Name\\": \\"my_flow_demo\\",\\n  \\"Id\\": \\"F-7A39731FE719****\\",\\n  \\"AlertConf\\": \\"{\\\\\\"items\\\\\\":[{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-210401001\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401015\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401002\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]}]}\\",\\n  \\"ClusterId\\": \\"C-A23BD131A862****\\",\\n  \\"ParentFlowList\\": {\\n    \\"ParentFlow\\": [\\n      {\\n        \\"ParentFlowName\\": \\"parent_flow\\",\\n        \\"ParentFlowId\\": \\"173659F59685\\",\\n        \\"ProjectName\\": \\"my_project\\",\\n        \\"ProjectId\\": \\"FP-257A173659F59685\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowResponse>\\n    <Status>STOP_SCHEDULE</Status>\\n    <Type>DDI</Type>\\n    <AlertUserGroupBizId>ADG-0a00d00abb7743ff9f812f1a997f3d87</AlertUserGroupBizId>\\n    <Periodic>true</Periodic>\\n    <EditLockDetail>{}</EditLockDetail>\\n    <Namespace>无</Namespace>\\n    <HostName>emr-header-1.cluster-123456</HostName>\\n    <Application>{\\"nodeDefMap\\":{\\":start:\\":{\\"name\\":\\":start:\\",\\"type\\":\\":start:\\",\\"transitions\\":[\\"cluster\\"]},\\"cluster\\":{\\"id\\":\\"CT-0C74281682CF03B4\\",\\"name\\":\\"cluster\\",\\"type\\":\\":Cluster:\\",\\"transitions\\":[\\"job1\\"]},\\"job1\\":{\\"jobId\\":\\"FJ-242AB240DBAF4195\\",\\"name\\":\\"job1\\",\\"type\\":\\":action:\\",\\"transitions\\":[\\"end\\"]},\\"end\\":{\\"name\\":\\"end\\",\\"type\\":\\":end:\\"}}}</Application>\\n    <GmtModified>1538017814000</GmtModified>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n    <Description>这是一个创建工作流描述</Description>\\n    <CreateCluster>false</CreateCluster>\\n    <StartSchedule>1538017814000</StartSchedule>\\n    <EndSchedule>1538018814000</EndSchedule>\\n    <Graph>{\\"nodes\\":[{\\"id\\":\\"48d474ea\\",\\"index\\":0,\\"spmAnchorId\\":\\"0.0.0.i0.766645eb2cmNtQ\\",\\"attribute\\":{\\"type\\":\\"START\\"},\\"shape\\":\\"startControlNode\\",\\"type\\":\\"node\\",\\"y\\":250,\\"size\\":\\"80*34\\",\\"x\\":500},{\\"id\\":\\"7ba480b3\\",\\"index\\":1,\\"spmAnchorId\\":\\"5176.8250060.0.i19.771e28d0IPNQGE\\",\\"attribute\\":{\\"jobType\\":\\"SHELL\\",\\"jobId\\":\\"FJ-7BE1062897B19D25\\",\\"type\\":\\"JOB\\"},\\"config\\":{\\"hostName\\":\\"\\"},\\"label\\":\\"fail_job\\",\\"shape\\":\\"shellJobNode\\",\\"type\\":\\"node\\",\\"y\\":398.5,\\"size\\":\\"170*34\\",\\"x\\":470.5},{\\"id\\":\\"33202d60\\",\\"index\\":2,\\"spmAnchorId\\":\\"5176.8250060.0.i23.771e28d0IPNQGE\\",\\"attribute\\":{\\"type\\":\\"END\\"},\\"shape\\":\\"endControlNode\\",\\"type\\":\\"node\\",\\"y\\":562.5,\\"size\\":\\"80*34\\",\\"x\\":430.5}],\\"edges\\":[{\\"id\\":\\"28167ea0\\",\\"index\\":3,\\"source\\":\\"48d474ea\\",\\"sourceAnchor\\":0,\\"target\\":\\"7ba480b3\\",\\"targetAnchor\\":0},{\\"id\\":\\"e8d5ff52\\",\\"index\\":4,\\"source\\":\\"7ba480b3\\",\\"sourceAnchor\\":1,\\"target\\":\\"33202d60\\",\\"targetAnchor\\":0}]}</Graph>\\n    <AlertDingDingGroupBizId>AUG-c917bbfaf6494bbfacdee69c8284967c</AlertDingDingGroupBizId>\\n    <GmtCreate>1538017814000</GmtCreate>\\n    <CategoryId>FC-F2495319DA05****</CategoryId>\\n    <CronExpr>0 0 0-23/1 * * ?</CronExpr>\\n    <Name>my_flow_demo</Name>\\n    <Id>F-7A39731FE719****</Id>\\n    <AlertConf>{\\"items\\":[{\\"enable\\":true,\\"eventId\\":\\"EMR-210401001\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401015\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401002\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]}]}</AlertConf>\\n    <ClusterId>C-A23BD131A862****</ClusterId>\\n    <ParentFlowList>\\n        <ParentFlowName>parent_flow</ParentFlowName>\\n        <ParentFlowId>173659F59685</ParentFlowId>\\n        <ProjectName>my_project</ProjectName>\\n        <ProjectId>FP-257A173659F59685</ProjectId>\\n    </ParentFlowList>\\n</DescribeFlowResponse>","errorExample":""}]',
      'title' => '查询工作流信息',
      'summary' => '查询工作流信息。',
    ),
    'CreateFlowJob' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.htm?spm=a2c4g.11186623.0.0.14c95997qeKkoC)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-A4FEE10D860*****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业的名称。',
            'description' => '作业的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_spark_job',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业的描述。',
            'description' => '作业的描述。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Job description',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
            'description' => '作业类型，取值如下：
- SPARK：spark作业，使用spark-submit提交
- ZEPPELIN：提交zeppelin notebook，使用该作业类型，作业的params参数为notebook id
- SPARK_STREAMING：提交spark流处理作业',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SPARK',
          ),
        ),
        5 => 
        array (
          'name' => 'FailAct',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
            'description' => '失败策略，取值如下：
- CONTINUE：跳过本次作业
- STOP：停止作业（default）',
            'type' => 'string',
            'required' => false,
            'example' => 'STOP',
          ),
        ),
        6 => 
        array (
          'name' => 'RetryPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '重试策略，保留参数。',
            'description' => '保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        7 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业内容。',
            'description' => '作业内容，如果是SPARK类型的作业，则该参数即为spark-submit的参数，如果为ZEPPELIN类型的作业，该参数为Notebook的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://bucket_name/jar_to_run.jar',
          ),
        ),
        8 => 
        array (
          'name' => 'ParamConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数设置。',
            'description' => '保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        9 => 
        array (
          'name' => 'CustomVariables',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自定义变量。',
            'description' => '用户自定义变量。使用json数组存储。',
            'type' => 'string',
            'required' => false,
            'example' => '[{\\"name\\":\\"key1\\",\\"value\\":\\"value1\\",\\"properties\\":{\\"password\\":false}}]',
          ),
        ),
        10 => 
        array (
          'name' => 'EnvConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '环境变量设置。',
            'description' => '环境变量设置。json格式存储。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"key1\\":\\"value1\\"}',
          ),
        ),
        11 => 
        array (
          'name' => 'RunConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
            'description' => '运行配置，可选的配置项包括：
- priority：task的优先级
- userName：提交任务的linux用户
- memory：内存，单位为MB
- cores：CPU核心数',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"memory\\":1024,\\"cores\\":2,\\"userName\\":\\"hadoop\\"}',
          ),
        ),
        12 => 
        array (
          'name' => 'MonitorConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
            'description' => '监控配置，仅SPARK_STREAMING类型的作业支持监控配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
          ),
        ),
        13 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
            'description' => '运行模式，取值如下：
- YARN：将作业包装成一个launcher提交到YARN中运行
- LOCAL：作业直接在机器上以进程方式运行',
            'type' => 'string',
            'required' => false,
            'example' => 'YARN',
          ),
        ),
        14 => 
        array (
          'name' => 'ParentCategory',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '父目录ID。您可以调用DescribeFlowCategory查看。',
            'description' => '父目录ID，可以调用DescribeFlowCategory查看目录结构。
',
            'type' => 'string',
            'required' => false,
            'example' => 'FC-5BD9575E3462****',
          ),
        ),
        15 => 
        array (
          'name' => 'Adhoc',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否临时查询。',
            'description' => '是否为临时查询。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        16 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'C-A23BD131A862****',
          ),
        ),
        17 => 
        array (
          'name' => 'AlertConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留参数。',
            'description' => '保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        18 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留参数。',
            'description' => '保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        19 => 
        array (
          'name' => 'ResourceList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '保留参数。',
            'description' => '保留参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Path' => 
                array (
                  'title' => '保留参数。',
                  'description' => '保留参数。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => '无',
                ),
                'Alias' => 
                array (
                  'title' => '保留参数。',
                  'description' => '保留参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '无',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
              'Id' => 
              array (
                'title' => '作业ID。',
                'description' => '作业ID。',
                'type' => 'string',
                'example' => 'FJ-A23BD131A862****',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FJ-A23BD131A862****\\",\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowJobResponse>\\n    <Id>FJ-A23BD131A862****</Id>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n</CreateFlowJobResponse>","errorExample":""}]',
      'title' => '创建工作流作业',
      'summary' => '创建工作流作业。',
    ),
    'CloneFlowJob' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '克隆的目标作业所属项目。您可以调用ListFlowProject查看项目的ID。',
            'description' => '克隆的目标作业所属项目。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-C62EEC30F773****',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '克隆的目标作业ID。您可以调用ListFlowJob查看。',
            'description' => '克隆的目标作业ID。您可以调用ListFlowJobs查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FJ-244582F1934C****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '克隆的目标作业名称。',
            'description' => '克隆的目标作业名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_clone_job',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '新产生的作业ID。',
                'description' => '新产生的作业ID。',
                'type' => 'string',
                'example' => 'FJ-06D12BA16419****',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BCE475E4-129D-43D2-8595-C80B80CBC114',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FJ-06D12BA16419****\\",\\n  \\"RequestId\\": \\"BCE475E4-129D-43D2-8595-C80B80CBC114\\"\\n}","errorExample":""},{"type":"xml","example":"<CloneFlowJobResponse>\\n    <Id>FJ-06D12BA16419****</Id>\\n    <RequestId>BCE475E4-129D-43D2-8595-C80B80CBC114</RequestId>\\n</CloneFlowJobResponse>","errorExample":""}]',
      'title' => '克隆工作流作业',
      'summary' => '克隆作业，对应于项目空间的作业编辑页面，在作业上点击右键 -> 克隆作业。',
    ),
    'SubmitFlowJob' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE5228***',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
            'description' => '作业ID。您可以调用ListFlowJob查看作业ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FJ-1A2FB31D8295****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'C-F32FB31D8295****',
          ),
        ),
        4 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留参数。',
            'description' => '保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        5 => 
        array (
          'name' => 'Conf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置参数信息：{"key1":"value1"}。key为params的参数值会覆盖实际作业中运行的内容。',
            'description' => '配置参数信息：{"key1":"value1"}。key为params的参数值会覆盖实际作业中运行的内容。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1"}',
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
              'Id' => 
              array (
                'title' => '运行的作业实例ID。',
                'description' => '运行的作业实例ID。',
                'type' => 'string',
                'example' => 'FJI-9DDAAA3ADA5F****',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FJI-9DDAAA3ADA5F****\\",\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitFlowJobResponse>\\n    <Id>FJI-9DDAAA3ADA5F****</Id>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</SubmitFlowJobResponse>","errorExample":""}]',
      'title' => '提交运行作业',
      'summary' => '提交运行作业。',
    ),
    'KillFlowJob' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE522****',
          ),
        ),
        2 => 
        array (
          'name' => 'JobInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
            'description' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FJI-9DDAAA3ADA5F****',
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
                'title' => '返回执行结果，包含如下：true（执行成功），false（执行失败）',
                'description' => '返回执行结果，包含如下：true（执行成功），false（执行失败）',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<KillFlowJobResponse>\\n    <Data>true</Data>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</KillFlowJobResponse>","errorExample":""}]',
      'title' => '停止作业实例',
      'summary' => '停止作业实例。',
    ),
    'ModifyFlowJob' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE5228***',
          ),
        ),
        2 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要修改的作业的ID。',
            'description' => '需要修改的作业的ID。您可以调用ListFlowJobs查看ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FJ-1A2FB31D8295****',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '修改后的作业名称。',
            'description' => '修改后的作业名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_updated_job_name',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '修改后的作业描述。',
            'description' => '修改后的作业描述。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个修改后的作业描述',
          ),
        ),
        5 => 
        array (
          'name' => 'FailAct',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
            'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTINUE',
          ),
        ),
        6 => 
        array (
          'name' => 'RetryPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '重试策略，保留参数。',
            'description' => '重试策略，保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        7 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业内容。如果是spark作业，该参数的内容会作为spark-submit的参数。',
            'description' => '作业内容。如果是spark作业，该参数的内容会作为spark-submit的参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://bucket_name/jar_to_run.jar',
          ),
        ),
        8 => 
        array (
          'name' => 'ParamConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数设置。',
            'description' => '参数设置。',
            'type' => 'string',
            'required' => false,
            'example' => '{"date":"${yyyy-MM-dd}"}',
          ),
        ),
        9 => 
        array (
          'name' => 'CustomVariables',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自定义变量。',
            'description' => '自定义变量。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"scope\\":\\"PROJECT\\",\\"entityId\\":\\"FP-80C2FDDBF35D9CC5\\",\\"variables\\":[{\\"name\\":\\"v1\\",\\"value\\":\\"1\\",\\"properties\\":{\\"password\\":true}}]}',
          ),
        ),
        10 => 
        array (
          'name' => 'EnvConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '环境变量设置。',
            'description' => '环境变量设置。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key":"value"}',
          ),
        ),
        11 => 
        array (
          'name' => 'KnoxUser',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
            'description' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_knox_user_name',
          ),
        ),
        12 => 
        array (
          'name' => 'KnoxPassword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
            'description' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_knox_password',
          ),
        ),
        13 => 
        array (
          'name' => 'RunConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
            'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
            'type' => 'string',
            'required' => false,
            'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
          ),
        ),
        14 => 
        array (
          'name' => 'MonitorConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
            'description' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
          ),
        ),
        15 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
            'description' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
            'type' => 'string',
            'required' => false,
            'example' => 'YARN',
          ),
        ),
        16 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'C-A23BD131A862****',
          ),
        ),
        17 => 
        array (
          'name' => 'AlertConf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留参数。',
            'description' => '保留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        18 => 
        array (
          'name' => 'ResourceList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '保留参数。',
            'description' => '保留参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Path' => 
                array (
                  'title' => '保留参数。',
                  'description' => '保留参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '无',
                ),
                'Alias' => 
                array (
                  'title' => '保留参数。',
                  'description' => '保留参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '无',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        19 => 
        array (
          'name' => 'MaxRetry',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'RetryInterval',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
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
              'Data' => 
              array (
                'title' => 'API调用结果：true（修改成功），false（修改失败）',
                'description' => 'API调用结果：true（修改成功），false（修改失败）',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowJobResponse>\\n    <Data>true</Data>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n</ModifyFlowJobResponse>","errorExample":""}]',
      'title' => '修改工作流作业',
      'summary' => '修改工作流作业。',
    ),
    'DescribeFlowJob' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE5228***',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
            'description' => '作业ID。您可以调用ListFlowJobs查看作业ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FJ-1A2FB31D8295****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                'description' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                'type' => 'string',
                'example' => 'SPARK',
              ),
              'LastInstanceId' => 
              array (
                'title' => '最后一次执行的实例ID。',
                'description' => '最后一次执行的实例ID。',
                'type' => 'string',
                'example' => 'FJI-0BA97D0BB8F3****',
              ),
              'EnvConf' => 
              array (
                'title' => '环境变量设置。',
                'description' => '环境变量设置。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
              'RetryInterval' => 
              array (
                'title' => '重试间隔 0~300（秒）。',
                'description' => '重试间隔 0~300（秒）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Mode' => 
              array (
                'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                'description' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                'type' => 'string',
                'example' => 'YARN',
              ),
              'GmtModified' => 
              array (
                'title' => '最后修改时间。',
                'description' => '最后修改时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1538017813000',
              ),
              'MonitorConf' => 
              array (
                'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                'description' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                'type' => 'string',
                'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
              ),
              'Params' => 
              array (
                'title' => '作业内容。',
                'description' => '作业内容。',
                'type' => 'string',
                'example' => 'oss://bucket_name/jar_to_run.jar',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
              ),
              'Description' => 
              array (
                'title' => '作业的描述。',
                'description' => '作业的描述。',
                'type' => 'string',
                'example' => '这是一个作业描述。',
              ),
              'RetryPolicy' => 
              array (
                'title' => '重试策略，保留参数。',
                'description' => '重试策略，保留参数。',
                'type' => 'string',
                'example' => '无',
              ),
              'Adhoc' => 
              array (
                'title' => '是否临时查询。',
                'description' => '是否临时查询。',
                'type' => 'string',
                'example' => 'false',
              ),
              'Name' => 
              array (
                'title' => '作业名称。',
                'description' => '作业名称。',
                'type' => 'string',
                'example' => 'Job_name_example',
              ),
              'MaxRetry' => 
              array (
                'title' => '最大重试次数。',
                'description' => '最大重试次数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'MaxRunningTimeSec' => 
              array (
                'title' => '保留参数。',
                'description' => '保留参数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'FailAct' => 
              array (
                'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                'type' => 'string',
                'example' => 'STOP',
              ),
              'CustomVariables' => 
              array (
                'title' => '自定义变量。',
                'description' => '自定义变量。',
                'type' => 'string',
                'example' => '{"scope": "project"}',
              ),
              'EditLockDetail' => 
              array (
                'title' => '保留参数。',
                'description' => '保留参数。',
                'type' => 'string',
                'example' => '无',
              ),
              'ParamConf' => 
              array (
                'title' => '参数设置。',
                'description' => '参数设置。',
                'type' => 'string',
                'example' => '{"date":"${yyyy-MM-dd}"}',
              ),
              'RunConf' => 
              array (
                'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                'type' => 'string',
                'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
              ),
              'KnoxUser' => 
              array (
                'title' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
                'description' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
                'type' => 'string',
                'example' => 'my_knox_user_name',
              ),
              'KnoxPassword' => 
              array (
                'title' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
                'description' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
                'type' => 'string',
                'example' => 'my_knox_password',
              ),
              'GmtCreate' => 
              array (
                'title' => '创建时间。',
                'description' => '创建时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1538017814000',
              ),
              'CategoryId' => 
              array (
                'title' => '作业所在目录ID。',
                'description' => '作业所在目录ID。',
                'type' => 'string',
                'example' => 'FC-5BD9575E3462****',
              ),
              'Id' => 
              array (
                'title' => '作业ID。',
                'description' => '作业ID。',
                'type' => 'string',
                'example' => 'FJ-BCCAE48B90CC****',
              ),
              'AlertConf' => 
              array (
                'title' => '报警配置。',
                'description' => '报警配置。',
                'type' => 'string',
                'example' => '无',
              ),
              'ResourceList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Resource' => 
                  array (
                    'description' => '资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Path' => 
                        array (
                          'title' => '保留参数。',
                          'description' => '保留参数。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'Alias' => 
                        array (
                          'title' => '保留参数。',
                          'description' => '保留参数。',
                          'type' => 'string',
                          'example' => '无',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"SPARK\\",\\n  \\"LastInstanceId\\": \\"FJI-0BA97D0BB8F3****\\",\\n  \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"RetryInterval\\": 200,\\n  \\"Mode\\": \\"YARN\\",\\n  \\"GmtModified\\": 1538017813000,\\n  \\"MonitorConf\\": \\"{\\\\\\"inputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\",\\\\\\"consumer.group\\\\\\":\\\\\\"kafka_consumer_group\\\\\\"}],\\\\\\"outputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\"}]}\\",\\n  \\"Params\\": \\"oss://bucket_name/jar_to_run.jar\\",\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\",\\n  \\"Description\\": \\"这是一个作业描述。\\",\\n  \\"RetryPolicy\\": \\"无\\",\\n  \\"Adhoc\\": \\"false\\",\\n  \\"Name\\": \\"Job_name_example\\",\\n  \\"MaxRetry\\": 3,\\n  \\"MaxRunningTimeSec\\": 0,\\n  \\"FailAct\\": \\"STOP\\",\\n  \\"CustomVariables\\": \\"{\\\\\\"scope\\\\\\": \\\\\\"project\\\\\\"}\\",\\n  \\"EditLockDetail\\": \\"无\\",\\n  \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n  \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n  \\"KnoxUser\\": \\"my_knox_user_name\\",\\n  \\"KnoxPassword\\": \\"my_knox_password\\",\\n  \\"GmtCreate\\": 1538017814000,\\n  \\"CategoryId\\": \\"FC-5BD9575E3462****\\",\\n  \\"Id\\": \\"FJ-BCCAE48B90CC****\\",\\n  \\"AlertConf\\": \\"无\\",\\n  \\"ResourceList\\": {\\n    \\"Resource\\": [\\n      {\\n        \\"Path\\": \\"无\\",\\n        \\"Alias\\": \\"无\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowJobResponse>\\n    <Type>SPARK</Type>\\n    <LastInstanceId>FJI-0BA97D0BB8F3****</LastInstanceId>\\n    <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n    <RetryInterval>200</RetryInterval>\\n    <Mode>YARN</Mode>\\n    <GmtModified>1538017813000</GmtModified>\\n    <MonitorConf>{\\"inputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\",\\"consumer.group\\":\\"kafka_consumer_group\\"}],\\"outputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\"}]}</MonitorConf>\\n    <Params>oss://bucket_name/jar_to_run.jar</Params>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n    <Description>这是一个作业描述。</Description>\\n    <RetryPolicy>无</RetryPolicy>\\n    <Adhoc>false</Adhoc>\\n    <Name>Job_name_example</Name>\\n    <MaxRetry>3</MaxRetry>\\n    <MaxRunningTimeSec>0</MaxRunningTimeSec>\\n    <FailAct>STOP</FailAct>\\n    <CustomVariables>{\\"scope\\": \\"project\\"}</CustomVariables>\\n    <EditLockDetail>无</EditLockDetail>\\n    <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n    <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n    <KnoxUser>my_knox_user_name</KnoxUser>\\n    <KnoxPassword>my_knox_password</KnoxPassword>\\n    <GmtCreate>1538017814000</GmtCreate>\\n    <CategoryId>FC-5BD9575E3462****</CategoryId>\\n    <Id>FJ-BCCAE48B90CC****</Id>\\n    <AlertConf>无</AlertConf>\\n    <ResourceList>\\n        <Path>无</Path>\\n        <Alias>无</Alias>\\n    </ResourceList>\\n</DescribeFlowJobResponse>","errorExample":""}]',
      'title' => '查询作业信息',
      'summary' => '查询作业信息。',
    ),
    'ListFlowJobs' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE5228***',
          ),
        ),
        2 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
            'description' => '作业ID。您可以调用ListFlowJobs查看作业ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FJ-1A2FB31D8295****',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业名称。',
            'description' => '作业名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_job_name',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业类型。用于过滤作业，支持的类型有：SPARK，SPARK_STREAMING，ZEPPELIN。',
            'description' => '作业类型。用于过滤作业，支持的类型有：SPARK，SPARK_STREAMING，ZEPPELIN。',
            'type' => 'string',
            'required' => false,
            'example' => 'SPARK',
          ),
        ),
        5 => 
        array (
          'name' => 'Adhoc',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否为临时查询。用于过滤作业。',
            'description' => '是否为临时查询。用于过滤作业。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页数。',
            'description' => '当前页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的作业数量。',
            'description' => '每页的作业数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'ExactName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '精确匹配 job name',
            'type' => 'string',
            'required' => false,
            'example' => 'my_job_name',
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
              'PageNumber' => 
              array (
                'title' => '当前页数。',
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页的作业数量。',
                'description' => '每页的作业数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
              ),
              'Total' => 
              array (
                'title' => '作业数量。',
                'description' => '作业数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'JobList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Job' => 
                  array (
                    'description' => '作业列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                          'description' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                          'type' => 'string',
                          'example' => 'SPARK',
                        ),
                        'FailAct' => 
                        array (
                          'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                          'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                          'type' => 'string',
                          'example' => 'STOP',
                        ),
                        'CustomVariables' => 
                        array (
                          'title' => '自定义变量。',
                          'description' => '自定义变量。',
                          'type' => 'string',
                          'example' => '{"scope": "project"}',
                        ),
                        'RetryInterval' => 
                        array (
                          'title' => '重试间隔 0~300（秒）。',
                          'description' => '重试间隔 0~300（秒）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'EnvConf' => 
                        array (
                          'title' => '环境变量设置。',
                          'description' => '环境变量设置。',
                          'type' => 'string',
                          'example' => '{"key":"value"}',
                        ),
                        'ParamConf' => 
                        array (
                          'title' => '参数设置。',
                          'description' => '参数设置。',
                          'type' => 'string',
                          'example' => '{"date":"${yyyy-MM-dd}"}',
                        ),
                        'Mode' => 
                        array (
                          'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                          'description' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                          'type' => 'string',
                          'example' => 'YARN',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '最后修改时间。',
                          'description' => '最后修改时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017813000',
                        ),
                        'MonitorConf' => 
                        array (
                          'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                          'description' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                          'type' => 'string',
                          'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
                        ),
                        'LastInstanceDetail' => 
                        array (
                          'title' => '最后一次执行的实例ID。',
                          'description' => '最后一次执行的实例ID。',
                          'type' => 'string',
                          'example' => 'FJI-0BA97D0BB8F3****',
                        ),
                        'RunConf' => 
                        array (
                          'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                          'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                          'type' => 'string',
                          'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                        ),
                        'Params' => 
                        array (
                          'title' => '作业内容。',
                          'description' => '作业内容。',
                          'type' => 'string',
                          'example' => 'oss://bucket_name/jar_to_run.jar',
                        ),
                        'Description' => 
                        array (
                          'title' => '作业的描述。',
                          'description' => '作业的描述。',
                          'type' => 'string',
                          'example' => '这是一个作业描述。',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间。',
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'CategoryId' => 
                        array (
                          'title' => '作业所在目录ID。',
                          'description' => '作业所在目录ID。',
                          'type' => 'string',
                          'example' => 'FC-5BD9575E3462****',
                        ),
                        'Adhoc' => 
                        array (
                          'title' => '是否临时查询。',
                          'description' => '是否临时查询。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'Name' => 
                        array (
                          'title' => '作业名称。',
                          'description' => '作业名称。',
                          'type' => 'string',
                          'example' => 'Job_name_example',
                        ),
                        'Id' => 
                        array (
                          'title' => '作业ID。',
                          'description' => '作业ID。',
                          'type' => 'string',
                          'example' => 'FJ-BCCAE48B90CC****',
                        ),
                        'MaxRetry' => 
                        array (
                          'title' => '最大重试次数。',
                          'description' => '最大重试次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'AlertConf' => 
                        array (
                          'title' => '报警配置。',
                          'description' => '报警配置。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'ResourceList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Resource' => 
                            array (
                              'description' => '资源列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Path' => 
                                  array (
                                    'title' => '保留参数。',
                                    'description' => '保留参数。',
                                    'type' => 'string',
                                    'example' => '无',
                                  ),
                                  'Alias' => 
                                  array (
                                    'title' => '保留参数。',
                                    'description' => '保留参数。',
                                    'type' => 'string',
                                    'example' => '无',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\",\\n  \\"Total\\": 3,\\n  \\"JobList\\": {\\n    \\"Job\\": [\\n      {\\n        \\"Type\\": \\"SPARK\\",\\n        \\"FailAct\\": \\"STOP\\",\\n        \\"CustomVariables\\": \\"{\\\\\\"scope\\\\\\": \\\\\\"project\\\\\\"}\\",\\n        \\"RetryInterval\\": 200,\\n        \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n        \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n        \\"Mode\\": \\"YARN\\",\\n        \\"GmtModified\\": 1538017813000,\\n        \\"MonitorConf\\": \\"{\\\\\\"inputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\",\\\\\\"consumer.group\\\\\\":\\\\\\"kafka_consumer_group\\\\\\"}],\\\\\\"outputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\"}]}\\",\\n        \\"LastInstanceDetail\\": \\"FJI-0BA97D0BB8F3****\\",\\n        \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n        \\"Params\\": \\"oss://bucket_name/jar_to_run.jar\\",\\n        \\"Description\\": \\"这是一个作业描述。\\",\\n        \\"GmtCreate\\": 1538017814000,\\n        \\"CategoryId\\": \\"FC-5BD9575E3462****\\",\\n        \\"Adhoc\\": \\"false\\",\\n        \\"Name\\": \\"Job_name_example\\",\\n        \\"Id\\": \\"FJ-BCCAE48B90CC****\\",\\n        \\"MaxRetry\\": 3,\\n        \\"AlertConf\\": \\"无\\",\\n        \\"ResourceList\\": {\\n          \\"Resource\\": [\\n            {\\n              \\"Path\\": \\"无\\",\\n              \\"Alias\\": \\"无\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowJobsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n    <Total>3</Total>\\n    <JobList>\\n        <Type>SPARK</Type>\\n        <FailAct>STOP</FailAct>\\n        <CustomVariables>{\\"scope\\": \\"project\\"}</CustomVariables>\\n        <RetryInterval>200</RetryInterval>\\n        <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n        <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n        <Mode>YARN</Mode>\\n        <GmtModified>1538017813000</GmtModified>\\n        <MonitorConf>{\\"inputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\",\\"consumer.group\\":\\"kafka_consumer_group\\"}],\\"outputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\"}]}</MonitorConf>\\n        <LastInstanceDetail>FJI-0BA97D0BB8F3****</LastInstanceDetail>\\n        <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n        <Params>oss://bucket_name/jar_to_run.jar</Params>\\n        <Description>这是一个作业描述。</Description>\\n        <GmtCreate>1538017814000</GmtCreate>\\n        <CategoryId>FC-5BD9575E3462****</CategoryId>\\n        <Adhoc>false</Adhoc>\\n        <Name>Job_name_example</Name>\\n        <Id>FJ-BCCAE48B90CC****</Id>\\n        <MaxRetry>3</MaxRetry>\\n        <AlertConf>无</AlertConf>\\n        <ResourceList>\\n            <Path>无</Path>\\n            <Alias>无</Alias>\\n        </ResourceList>\\n    </JobList>\\n</ListFlowJobsResponse>","errorExample":""}]',
      'title' => '列出所有的工作流作业',
      'summary' => '列出所有的工作流作业。',
    ),
    'ListFlowJobHistory' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE5228***',
          ),
        ),
        2 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
            'description' => '作业ID。您可以调用ListFlowJob查看作业ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FJ-1A2FB31D8295****',
          ),
        ),
        3 => 
        array (
          'name' => 'JobType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
            'description' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
            'type' => 'string',
            'required' => false,
            'example' => 'SPARK',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
            'description' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FJI-BCCAE48B90CC****',
          ),
        ),
        5 => 
        array (
          'name' => 'TimeRange',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的时间范围参数，参数列表：type: range，from: 开始时间（long型时间戳），to: 结束时间（long型时间戳）',
            'description' => '查询的时间范围参数，参数列表：type: range，from: 开始时间（long型时间戳），to: 结束时间（long型时间戳）',
            'type' => 'string',
            'required' => false,
            'example' => '{"type":"range","from":1564416000000,"to":1567008000000}',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码。',
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时每页行数。',
            'description' => '分页查询时每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'StatusList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '状态列表。取值如下：SUBMITTED, RUNNING, SUCCESS, FAILED, KILL_FAILED, KILL_SUCCESS',
            'description' => '状态列表。取值如下：SUBMITTED, RUNNING, SUCCESS, FAILED, KILL_FAILED, KILL_SUCCESS',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '["FAILED"]',
            ),
            'required' => false,
            'example' => '["FAILED"]',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5540D8F-06E8-4E3C-B47A-D75CED72A795',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页码。',
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页查询时设置的每页行数。',
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'title' => '记录总数。',
                'description' => '记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'NodeInstances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NodeInstance' => 
                  array (
                    'title' => '作业实例列表。',
                    'description' => '作业实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'title' => '节点类型：JOB：作业，CLUSTER：集群，START：开始，END：结束',
                          'description' => '节点类型：JOB：作业，CLUSTER：集群，START：开始，END：结束',
                          'type' => 'string',
                          'example' => 'START',
                        ),
                        'Status' => 
                        array (
                          'title' => '实例的执行状态：PREP：准备启动，SUBMITTING：提交中，RUNNING：运行中DONE：已完成，OK：执行成功，FAILED：执行失败，KILLED：已终止，KILL_FAILED：终止失败，START_RETRY：开始重试',
                          'description' => '实例的执行状态：PREP：准备启动，SUBMITTING：提交中，RUNNING：运行中DONE：已完成，OK：执行成功，FAILED：执行失败，KILLED：已终止，KILL_FAILED：终止失败，START_RETRY：开始重试',
                          'type' => 'string',
                          'example' => 'PREP',
                        ),
                        'pending' => 
                        array (
                          'title' => '是否结束。',
                          'description' => '是否结束。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'EnvConf' => 
                        array (
                          'title' => '环境变量设置。',
                          'description' => '环境变量设置。',
                          'type' => 'string',
                          'example' => '{"key":"value"}',
                        ),
                        'RetryInterval' => 
                        array (
                          'title' => '重试间隔 0-300（秒）。',
                          'description' => '重试间隔 0-300（秒）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'ProjectId' => 
                        array (
                          'title' => '项目ID。',
                          'description' => '项目ID。',
                          'type' => 'string',
                          'example' => 'FP-3535FE0BE522****',
                        ),
                        'JobType' => 
                        array (
                          'title' => '作业类型。',
                          'description' => '作业类型。',
                          'type' => 'string',
                          'example' => 'SPARK',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '创建时间。',
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1540796236000',
                        ),
                        'ExternalInfo' => 
                        array (
                          'title' => '外部信息。例如，运行作业的错误诊断信息。',
                          'description' => '外部信息。例如，运行作业的错误诊断信息。',
                          'type' => 'string',
                          'example' => 'empty',
                        ),
                        'ExternalStatus' => 
                        array (
                          'title' => '实例对应的Container的状态：SUBMITTED, RUNNING, SUCCESS, FAIL, KILL_FAIL, KILL_SUCCESS',
                          'description' => '实例对应的Container的状态：SUBMITTED, RUNNING, SUCCESS, FAIL, KILL_FAIL, KILL_SUCCESS',
                          'type' => 'string',
                          'example' => 'SUBMITTED',
                        ),
                        'JobName' => 
                        array (
                          'title' => '作业名称。',
                          'description' => '作业名称。',
                          'type' => 'string',
                          'example' => 'my_job_name',
                        ),
                        'ExternalId' => 
                        array (
                          'title' => '启动器的application的ID。',
                          'description' => '启动器的application的ID。',
                          'type' => 'string',
                          'example' => 'application_1541559535023_3****',
                        ),
                        'MaxRetry' => 
                        array (
                          'title' => '最大重试次数。',
                          'description' => '最大重试次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'ClusterId' => 
                        array (
                          'title' => '集群ID。',
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'C-A6C9F4F1E9EC****',
                        ),
                        'FailAct' => 
                        array (
                          'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                          'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                          'type' => 'string',
                          'example' => 'STOP',
                        ),
                        'JobParams' => 
                        array (
                          'title' => '作业内容。',
                          'description' => '作业内容。',
                          'type' => 'string',
                          'example' => 'oss://bucket_name/example.jar',
                        ),
                        'ParamConf' => 
                        array (
                          'title' => '参数设置。',
                          'description' => '参数设置。',
                          'type' => 'string',
                          'example' => '{"date":"${yyyy-MM-dd}"}',
                        ),
                        'HostName' => 
                        array (
                          'title' => '保留参数。',
                          'description' => '保留参数。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'Retries' => 
                        array (
                          'title' => '重试次数。',
                          'description' => '重试次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '运行结束时间。',
                          'description' => '运行结束时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1540796248000',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '运行开始时间。',
                          'description' => '运行开始时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1540796489000',
                        ),
                        'RunConf' => 
                        array (
                          'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                          'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                          'type' => 'string',
                          'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                        ),
                        'NodeName' => 
                        array (
                          'title' => '保留参数。',
                          'description' => '保留参数。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'JobId' => 
                        array (
                          'title' => '作业ID。',
                          'description' => '作业ID。',
                          'type' => 'string',
                          'example' => 'FJ-A23BD131A862****',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间。',
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1540796236000',
                        ),
                        'Id' => 
                        array (
                          'title' => '作业实例ID。',
                          'description' => '作业实例ID。',
                          'type' => 'string',
                          'example' => 'FJI-F4FC53D7207E****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5540D8F-06E8-4E3C-B47A-D75CED72A795\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 12,\\n  \\"NodeInstances\\": {\\n    \\"NodeInstance\\": [\\n      {\\n        \\"Type\\": \\"START\\",\\n        \\"Status\\": \\"PREP\\",\\n        \\"pending\\": true,\\n        \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n        \\"RetryInterval\\": 200,\\n        \\"ProjectId\\": \\"FP-3535FE0BE522****\\",\\n        \\"JobType\\": \\"SPARK\\",\\n        \\"GmtModified\\": 1540796236000,\\n        \\"ExternalInfo\\": \\"empty\\",\\n        \\"ExternalStatus\\": \\"SUBMITTED\\",\\n        \\"JobName\\": \\"my_job_name\\",\\n        \\"ExternalId\\": \\"application_1541559535023_3****\\",\\n        \\"MaxRetry\\": 3,\\n        \\"ClusterId\\": \\"C-A6C9F4F1E9EC****\\",\\n        \\"FailAct\\": \\"STOP\\",\\n        \\"JobParams\\": \\"oss://bucket_name/example.jar\\",\\n        \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n        \\"HostName\\": \\"无\\",\\n        \\"Retries\\": 0,\\n        \\"EndTime\\": 1540796248000,\\n        \\"StartTime\\": 1540796489000,\\n        \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n        \\"NodeName\\": \\"无\\",\\n        \\"JobId\\": \\"FJ-A23BD131A862****\\",\\n        \\"GmtCreate\\": 1540796236000,\\n        \\"Id\\": \\"FJI-F4FC53D7207E****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowJobHistoryResponse>\\n    <RequestId>F5540D8F-06E8-4E3C-B47A-D75CED72A795</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <Total>12</Total>\\n    <NodeInstances>\\n        <Type>START</Type>\\n        <Status>PREP</Status>\\n        <pending>true</pending>\\n        <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n        <RetryInterval>200</RetryInterval>\\n        <ProjectId>FP-3535FE0BE522****</ProjectId>\\n        <JobType>SPARK</JobType>\\n        <GmtModified>1540796236000</GmtModified>\\n        <ExternalInfo>empty</ExternalInfo>\\n        <ExternalStatus>SUBMITTED</ExternalStatus>\\n        <JobName>my_job_name</JobName>\\n        <ExternalId>application_1541559535023_3****</ExternalId>\\n        <MaxRetry>3</MaxRetry>\\n        <ClusterId>C-A6C9F4F1E9EC****</ClusterId>\\n        <FailAct>STOP</FailAct>\\n        <JobParams>oss://bucket_name/example.jar</JobParams>\\n        <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n        <HostName>无</HostName>\\n        <Retries>0</Retries>\\n        <EndTime>1540796248000</EndTime>\\n        <StartTime>1540796489000</StartTime>\\n        <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n        <NodeName>无</NodeName>\\n        <JobId>FJ-A23BD131A862****</JobId>\\n        <GmtCreate>1540796236000</GmtCreate>\\n        <Id>FJI-F4FC53D7207E****</Id>\\n    </NodeInstances>\\n</ListFlowJobHistoryResponse>","errorExample":""}]',
      'title' => '查询作业运行实例列表',
      'summary' => '调用ListFlowJobHistory接口，查询作业的运行实例列表。',
    ),
    'RerunFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE522****',
          ),
        ),
        2 => 
        array (
          'name' => 'FlowInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作流实例ID。您可以调用ListFlowInstance查看工作流实例ID。',
            'description' => '工作流实例ID。您可以调用ListFlowInstance查看工作流实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FI-9DDAAA3ADA5F****',
          ),
        ),
        3 => 
        array (
          'name' => 'ReRunFail',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否只重试失败节点。',
            'description' => '是否只重试失败节点。',
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
              'Data' => 
              array (
                'title' => '返回执行结果，包含如下：true: 重试工作流成功，false: 重试工作流失败。',
                'description' => '返回执行结果，包含如下：true: 重试工作流成功，false: 重试工作流失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<RerunFlowResponse>\\n    <Data>true</Data>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</RerunFlowResponse>","errorExample":""}]',
      'title' => '重跑已经结束的工作流实例',
      'summary' => '重跑已经结束的工作流实例。',
    ),
    'SubmitFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-AC84F265C8E4****',
          ),
        ),
        2 => 
        array (
          'name' => 'FlowId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
            'description' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'F-FD06A29AF6D2****',
          ),
        ),
        3 => 
        array (
          'name' => 'Conf',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置信息{"key":"value"}格式。  本示例中cyctime表示实际调度运行的时间（长整型时间戳）。',
            'description' => '配置信息{"key":"value"}格式。  本示例中cyctime表示实际调度运行的时间（长整型时间戳）。',
            'type' => 'string',
            'required' => false,
            'example' => '{"cyctime":"1542783967503"}',
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
                'title' => '过期参数。',
                'description' => '过期参数。',
                'type' => 'string',
                'example' => 'FI-7A39731FE719****',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
              'InstanceId' => 
              array (
                'title' => '过期参数。',
                'description' => '过期参数。',
                'type' => 'string',
                'example' => 'FI-7A39731FE719****',
              ),
              'Id' => 
              array (
                'title' => '工作流实例ID。',
                'description' => '工作流实例ID。',
                'type' => 'string',
                'example' => 'FI-7A39731FE719****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"FI-7A39731FE719****\\",\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\",\\n  \\"InstanceId\\": \\"FI-7A39731FE719****\\",\\n  \\"Id\\": \\"FI-7A39731FE719****\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitFlowResponse>\\n    <Data>FI-7A39731FE719****</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n    <InstanceId>FI-7A39731FE719****</InstanceId>\\n    <Id>FI-7A39731FE719****</Id>\\n</SubmitFlowResponse>","errorExample":""}]',
      'title' => '提交运行工作流',
      'summary' => '提交运行工作流。',
    ),
    'ResumeFlow' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'description' => '区域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE522****',
          ),
        ),
        2 => 
        array (
          'name' => 'FlowInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作流实例ID。您可以调用ListFlowInstance查看工作流ID。',
            'description' => '工作流实例ID。您可以调用ListFlowInstance查看工作流ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FI-9DDAAA3ADA5F****',
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
                'title' => '返回执行结果。',
                'description' => '返回执行结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<ResumeFlowResponse>\\n    <Data>true</Data>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</ResumeFlowResponse>","errorExample":""}]',
      'title' => '恢复暂停的工作流',
      'summary' => '恢复暂停的工作流。',
    ),
    'CreateFlowProject' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品类型，固定值DATABRICKS_DATAINSIGHT',
            'description' => '项目描述。

',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个项目描述',
            'enum' => 
            array (
              0 => 'DATABRICKS_DATAINSIGHT',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_project',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目描述',
            'description' => '项目描述。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '这是一个项目描述',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => 'EMR实例和节点ECS实例所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'Id' => 
              array (
                'title' => '项目ID',
                'description' => '项目ID',
                'type' => 'string',
                'example' => 'FP-257A173659F5****',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2670BCFB-925D-4C3E-9994-8D12F7A9F538',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FP-257A173659F5****\\",\\n  \\"RequestId\\": \\"2670BCFB-925D-4C3E-9994-8D12F7A9F538\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowProjectResponse>\\n    <Id>FP-257A173659F5****</Id>\\n    <RequestId>2670BCFB-925D-4C3E-9994-8D12F7A9F538</RequestId>\\n</CreateFlowProjectResponse>","errorExample":""}]',
      'title' => '创建数据开发项目',
      'summary' => '创建数据开发项目。',
    ),
    'CreateFlowProjectUser' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'UserId' => 
                array (
                  'description' => '阿里云账号ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12*****',
                ),
                'UserName' => 
                array (
                  'description' => 'RAM用户名。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'subuser1',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
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
              'Data' => 
              array (
                'description' => '返回执行结果，包含如下：

- true：添加成功。

- false：添加失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowProjectUserResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</CreateFlowProjectUserResponse>","errorExample":""}]',
      'title' => '添加项目用户',
      'summary' => '添加项目用户。',
    ),
    'DeleteFlowProject' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
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
                'description' => '结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2670BCFB-925D-4C3E-9994-8D12F7A9F538',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"2670BCFB-925D-4C3E-9994-8D12F7A9F538\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowProjectResponse>\\n    <Data>true</Data>\\n    <RequestId>2670BCFB-925D-4C3E-9994-8D12F7A9F538</RequestId>\\n</DeleteFlowProjectResponse>","errorExample":""}]',
      'title' => '删除数据开发项目',
      'summary' => '删除数据开发项目。',
    ),
    'DeleteFlowProjectUser' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM用户名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'subuser1',
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
                'description' => '返回执行结果，包含如下：

- true：删除成功。

- false：删除失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowProjectUserResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</DeleteFlowProjectUserResponse>","errorExample":""}]',
      'title' => '删除项目用户',
      'summary' => '删除项目用户。',
    ),
    'ModifyFlowProject' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_project',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'my flow description',
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
                'description' => '返回结果。 取值如下：

- true：成功

- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11BAFBD8-8509-4177-A26D-407505E73713',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"11BAFBD8-8509-4177-A26D-407505E73713\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowProjectResponse>\\n    <Data>true</Data>\\n    <RequestId>11BAFBD8-8509-4177-A26D-407505E73713</RequestId>\\n</ModifyFlowProjectResponse>","errorExample":""}]',
      'title' => '修改数据开发项目',
      'summary' => '修改数据开发项目。',
    ),
    'DescribeFlowProject' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-5D55DA9DEDF2****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ACD3A7A5-CD6E-48DA-823B-ACE5B01DA43D',
              ),
              'Description' => 
              array (
                'description' => '项目描述。',
                'type' => 'string',
                'example' => 'project description demo',
              ),
              'UserId' => 
              array (
                'description' => '主账号ID。',
                'type' => 'string',
                'example' => '123456789',
              ),
              'GmtCreate' => 
              array (
                'description' => '创建时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1542934807000',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1542934807000',
              ),
              'Name' => 
              array (
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'project_name_demo',
              ),
              'Id' => 
              array (
                'description' => '项目ID。',
                'type' => 'string',
                'example' => 'FP-5D55DA9DEDF2****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ACD3A7A5-CD6E-48DA-823B-ACE5B01DA43D\\",\\n  \\"Description\\": \\"project description demo\\",\\n  \\"UserId\\": \\"123456789\\",\\n  \\"GmtCreate\\": 1542934807000,\\n  \\"GmtModified\\": 1542934807000,\\n  \\"Name\\": \\"project_name_demo\\",\\n  \\"Id\\": \\"FP-5D55DA9DEDF2****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowProjectResponse>\\n    <RequestId>ACD3A7A5-CD6E-48DA-823B-ACE5B01DA43D</RequestId>\\n    <Description>project description demo</Description>\\n    <UserId>123456789</UserId>\\n    <GmtCreate>1542934807000</GmtCreate>\\n    <GmtModified>1542934807000</GmtModified>\\n    <Name>project_name_demo</Name>\\n    <Id>FP-5D55DA9DEDF2****</Id>\\n</DescribeFlowProjectResponse>","errorExample":""}]',
      'title' => '查询项目详情',
      'summary' => '查询项目详情。',
    ),
    'ListFlowProjects' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品类型。固定值DATABIRCKS_DATAINSIGHT',
            'description' => '产品类型。固定值DATABIRCKS_DATAINSIGHT',
            'type' => 'string',
            'required' => false,
            'example' => 'DATABRICKS_DATAINSIGHT',
            'enum' => 
            array (
              0 => 'EMR',
              1 => 'FLINK',
              2 => 'DSW',
              3 => 'FLINK_SPEC',
              4 => 'DATABRICKS_DATAINSIGHT',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID。您可以调用ListFlowProjects查看项目的ID',
            'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID',
            'type' => 'string',
            'required' => false,
            'example' => 'FP-CXNDJSCZKXNDC',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称，用于过滤项目',
            'description' => '项目名称，用于过滤项目',
            'type' => 'string',
            'required' => false,
            'example' => 'my_project',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码，用于分页',
            'description' => '页码，用于分页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-axndjccbxdj',
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
              'PageNumber' => 
              array (
                'title' => '页码',
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页数量',
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83B256D4-4E95-454B-AD08-799DF31D5556',
              ),
              'Total' => 
              array (
                'title' => '总数',
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Projects' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'title' => '项目列表',
                    'description' => '项目列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'title' => '项目描述',
                          'description' => '项目描述',
                          'type' => 'string',
                          'example' => '这是一个项目描述',
                        ),
                        'UserId' => 
                        array (
                          'title' => '主账号ID',
                          'description' => '主账号ID',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间戳',
                          'description' => '创建时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1540796236000',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间戳',
                          'description' => '修改时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1540796236000',
                        ),
                        'Name' => 
                        array (
                          'title' => '项目名称',
                          'description' => '项目名称',
                          'type' => 'string',
                          'example' => 'my_project',
                        ),
                        'Id' => 
                        array (
                          'title' => '项目ID',
                          'description' => '项目ID',
                          'type' => 'string',
                          'example' => 'FB-SBCXKSDCBDS',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"83B256D4-4E95-454B-AD08-799DF31D5556\\",\\n  \\"Total\\": 1,\\n  \\"Projects\\": {\\n    \\"Project\\": [\\n      {\\n        \\"Description\\": \\"这是一个项目描述\\",\\n        \\"UserId\\": \\"123456\\",\\n        \\"GmtCreate\\": 1540796236000,\\n        \\"GmtModified\\": 1540796236000,\\n        \\"Name\\": \\"my_project\\",\\n        \\"Id\\": \\"FB-SBCXKSDCBDS\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowProjectsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <RequestId>83B256D4-4E95-454B-AD08-799DF31D5556</RequestId>\\n    <Total>1</Total>\\n    <Projects>\\n        <Description>这是一个项目描述</Description>\\n        <UserId>123456</UserId>\\n        <GmtCreate>1540796236000</GmtCreate>\\n        <GmtModified>1540796236000</GmtModified>\\n        <Name>my_project</Name>\\n        <Id>FB-SBCXKSDCBDS</Id>\\n    </Projects>\\n</ListFlowProjectsResponse>","errorExample":""}]',
      'title' => '列出所有的项目空间',
      'summary' => '列出所有的项目空间。',
    ),
    'ListFlowProjectUser' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-3535FE0BE522****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
            'default' => '20',
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
                'example' => '80F270E8-27BD-4F24-BB2A-CD3FBCC450DA',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Users' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'User' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProjectId' => 
                        array (
                          'description' => '项目ID。',
                          'type' => 'string',
                          'example' => 'FP-3535FE0BE522****',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1538017814000',
                        ),
                        'UserName' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'admin',
                        ),
                        'AccountUserId' => 
                        array (
                          'description' => '用户ID',
                          'type' => 'string',
                          'example' => '252016171****',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'string',
                          'example' => '123456',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"80F270E8-27BD-4F24-BB2A-CD3FBCC450DA\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Total\\": 20,\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"ProjectId\\": \\"FP-3535FE0BE522****\\",\\n        \\"GmtCreate\\": 1538017814000,\\n        \\"GmtModified\\": 1538017814000,\\n        \\"UserName\\": \\"admin\\",\\n        \\"AccountUserId\\": \\"252016171****\\",\\n        \\"OwnerId\\": \\"123456\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowProjectUserResponse>\\n    <RequestId>80F270E8-27BD-4F24-BB2A-CD3FBCC450DA</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <Total>20</Total>\\n    <Users>\\n        <ProjectId>FP-3535FE0BE522****</ProjectId>\\n        <GmtCreate>1538017814000</GmtCreate>\\n        <GmtModified>1538017814000</GmtModified>\\n        <UserName>admin</UserName>\\n        <AccountUserId>252016171****</AccountUserId>\\n        <OwnerId>123456</OwnerId>\\n    </Users>\\n</ListFlowProjectUserResponse>","errorExample":""}]',
      'title' => '查询项目用户列表',
      'summary' => '调用ListFlowProjectUser接口，查询项目用户列表。',
    ),
    'DescribeFlowCategoryTree' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-ABD24A6163D3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录类型，取值如下：

- FLOW（工作流）

- JOB（作业）

- ADHOC（临时查询）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FLOW',
          ),
        ),
        3 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型模式，支持如下取值：

- FULL：默认模式,可以不填, 获取完整的目录树。

- STEP：获取下一级目录列表, 需要设置父目录id。

- LOCATION：定位模式, 获取给定目录的最小展开树。

- SEARCH：搜索模式,  过滤包含关键字的目录项目。',
            'type' => 'string',
            'required' => false,
            'example' => 'FULL',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'SQL',
          ),
        ),
        5 => 
        array (
          'name' => 'CategoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- STEP模式下：上级目录id, 获取根目录id时不设置

- LOCATION模式下：需要定位的目录id

',
            'type' => 'string',
            'required' => false,
            'example' => 'FC-5BD9575E3462****',
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
                'description' => '结果， 由node和children构成的树状结构。',
                'type' => 'string',
                'example' => '{"node":{"categoryType":"FOLDER","gmtModified":1540344706000,"name":"FLOW","id":"FC-6B5B5BDAD3EFAB67","gmtCreate":1540344706000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"root_parent"},"children":[{"node":{"categoryType":"FILE","gmtModified":1542855766000,"name":"flow2","id":"FC-D30AC9A7795F03A1","gmtCreate":1542855766000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"FC-6B5B5BDAD3EFAB67","objectId":"F-E9DC5533695C989B","objectType":"FLOW"},"children":[],"childrenMap":{}},{"node":{"categoryType":"FILE","gmtModified":1540796206000,"name":"flow-hive","id":"FC-296E3BB9491E39F2","gmtCreate":1540796206000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"FC-6B5B5BDAD3EFAB67","objectId":"F-35683D0E45734E34","objectType":"FLOW"},"children":[],"childrenMap":{}}]}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '5C5E4A6F-5140-4627-AB81-F3E0D06C5C36',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"node\\\\\\":{\\\\\\"categoryType\\\\\\":\\\\\\"FOLDER\\\\\\",\\\\\\"gmtModified\\\\\\":1540344706000,\\\\\\"name\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"id\\\\\\":\\\\\\"FC-6B5B5BDAD3EFAB67\\\\\\",\\\\\\"gmtCreate\\\\\\":1540344706000,\\\\\\"type\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"projectId\\\\\\":\\\\\\"FP-7A1018ADE9179EE1\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"root_parent\\\\\\"},\\\\\\"children\\\\\\":[{\\\\\\"node\\\\\\":{\\\\\\"categoryType\\\\\\":\\\\\\"FILE\\\\\\",\\\\\\"gmtModified\\\\\\":1542855766000,\\\\\\"name\\\\\\":\\\\\\"flow2\\\\\\",\\\\\\"id\\\\\\":\\\\\\"FC-D30AC9A7795F03A1\\\\\\",\\\\\\"gmtCreate\\\\\\":1542855766000,\\\\\\"type\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"projectId\\\\\\":\\\\\\"FP-7A1018ADE9179EE1\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"FC-6B5B5BDAD3EFAB67\\\\\\",\\\\\\"objectId\\\\\\":\\\\\\"F-E9DC5533695C989B\\\\\\",\\\\\\"objectType\\\\\\":\\\\\\"FLOW\\\\\\"},\\\\\\"children\\\\\\":[],\\\\\\"childrenMap\\\\\\":{}},{\\\\\\"node\\\\\\":{\\\\\\"categoryType\\\\\\":\\\\\\"FILE\\\\\\",\\\\\\"gmtModified\\\\\\":1540796206000,\\\\\\"name\\\\\\":\\\\\\"flow-hive\\\\\\",\\\\\\"id\\\\\\":\\\\\\"FC-296E3BB9491E39F2\\\\\\",\\\\\\"gmtCreate\\\\\\":1540796206000,\\\\\\"type\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"projectId\\\\\\":\\\\\\"FP-7A1018ADE9179EE1\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"FC-6B5B5BDAD3EFAB67\\\\\\",\\\\\\"objectId\\\\\\":\\\\\\"F-35683D0E45734E34\\\\\\",\\\\\\"objectType\\\\\\":\\\\\\"FLOW\\\\\\"},\\\\\\"children\\\\\\":[],\\\\\\"childrenMap\\\\\\":{}}]}\\",\\n  \\"RequestId\\": \\"5C5E4A6F-5140-4627-AB81-F3E0D06C5C36\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowCategoryTreeResponse>\\n    <Data>{\\"node\\":{\\"categoryType\\":\\"FOLDER\\",\\"gmtModified\\":1540344706000,\\"name\\":\\"FLOW\\",\\"id\\":\\"FC-6B5B5BDAD3EFAB67\\",\\"gmtCreate\\":1540344706000,\\"type\\":\\"FLOW\\",\\"projectId\\":\\"FP-7A1018ADE9179EE1\\",\\"parentId\\":\\"root_parent\\"},\\"children\\":[{\\"node\\":{\\"categoryType\\":\\"FILE\\",\\"gmtModified\\":1542855766000,\\"name\\":\\"flow2\\",\\"id\\":\\"FC-D30AC9A7795F03A1\\",\\"gmtCreate\\":1542855766000,\\"type\\":\\"FLOW\\",\\"projectId\\":\\"FP-7A1018ADE9179EE1\\",\\"parentId\\":\\"FC-6B5B5BDAD3EFAB67\\",\\"objectId\\":\\"F-E9DC5533695C989B\\",\\"objectType\\":\\"FLOW\\"},\\"children\\":[],\\"childrenMap\\":{}},{\\"node\\":{\\"categoryType\\":\\"FILE\\",\\"gmtModified\\":1540796206000,\\"name\\":\\"flow-hive\\",\\"id\\":\\"FC-296E3BB9491E39F2\\",\\"gmtCreate\\":1540796206000,\\"type\\":\\"FLOW\\",\\"projectId\\":\\"FP-7A1018ADE9179EE1\\",\\"parentId\\":\\"FC-6B5B5BDAD3EFAB67\\",\\"objectId\\":\\"F-35683D0E45734E34\\",\\"objectType\\":\\"FLOW\\"},\\"children\\":[],\\"childrenMap\\":{}}]}</Data>\\n    <RequestId>5C5E4A6F-5140-4627-AB81-F3E0D06C5C36</RequestId>\\n</DescribeFlowCategoryTreeResponse>","errorExample":""}]',
      'title' => '获取目录树',
      'summary' => '调用DescribeFlowCategoryTree接口，获取目录树。',
    ),
    'DescribeFlowEntitySnapshot' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'PageCount',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderField',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'OrderMode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CommitterId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'EntityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'Revision',
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
              'Active' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'EntityId' => 
              array (
                'type' => 'string',
              ),
              'EntityType' => 
              array (
                'type' => 'string',
              ),
              'UserId' => 
              array (
                'type' => 'string',
              ),
              'GmtCreate' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'EntityGroupId' => 
              array (
                'type' => 'string',
              ),
              'CommitterId' => 
              array (
                'type' => 'string',
              ),
              'Revision' => 
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
    'DescribeFlowNodeInstance' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-7A1018ADE917****',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FNI-FE4BD156E939****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '实例的执行状态，取值如下：

- PREP（等待启动）

- SUBMITTING（提交中）

- RUNNING（运行中）

- DONE（已完成）

- OK（执行成功）

- FAILED（执行失败）

- KILLED（已终止）

- KILL_FAILED（终止失败）

- START_RETRY（开始重试）',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Type' => 
              array (
                'description' => '节点类型，取值如下：

- JOB：作业

- CLUSTER：集群

- START：开始

- END：结束',
                'type' => 'string',
                'example' => 'JOB',
              ),
              'EnvConf' => 
              array (
                'description' => '环境变量。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
              'ProjectId' => 
              array (
                'description' => '项目ID。',
                'type' => 'string',
                'example' => 'FP-7A1018ADE917****',
              ),
              'RetryInterval' => 
              array (
                'description' => '重试间隔，单位s。',
                'type' => 'string',
                'example' => '15',
              ),
              'JobType' => 
              array (
                'description' => '作业类型。',
                'type' => 'string',
                'example' => 'HIVE_SQL',
              ),
              'Mode' => 
              array (
                'description' => '模型模式。支持：YARN和LOCAL YARN。将作业包装成一个 launcher提交至YARN中执行LOCAL。作业直接在主机上以进程方式运行。',
                'type' => 'string',
                'example' => 'YARN',
              ),
              'ExternalInfo' => 
              array (
                'description' => '外部信息。例如运行作业的错误诊断信息。',
                'type' => 'string',
                'example' => 'empty',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1540796247000',
              ),
              'ExternalChildIds' => 
              array (
                'description' => '任务的application列表。',
                'type' => 'string',
                'example' => 'application_1541559535023_34028',
              ),
              'MonitorConf' => 
              array (
                'description' => '监控配置，只有SPARK_STREAMING类型作业支持。',
                'type' => 'string',
                'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
              ),
              'ExternalStatus' => 
              array (
                'description' => '实例对应的Container的状态，取值如下：

- SUBMITTED（已提交）

- RUNNING（运行中）

- SUCCESS（执行成功）

- FAIL（执行失败）

- KILL_FAIL（终止失败）

- KILL_SUCCESS（终止成功）',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
              ),
              'JobName' => 
              array (
                'description' => '作业名称。',
                'type' => 'string',
                'example' => 'myJob',
              ),
              'RetryPolicy' => 
              array (
                'description' => '重试策略。',
                'type' => 'string',
                'example' => '无',
              ),
              'Adhoc' => 
              array (
                'description' => '是否临时查询。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ExternalId' => 
              array (
                'description' => '启动器的application的ID。',
                'type' => 'string',
                'example' => 'application_1541559535023_34027',
              ),
              'Pending' => 
              array (
                'description' => '是否结束。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'C-F32FB31D8295****',
              ),
              'MaxRetry' => 
              array (
                'description' => '最大重试次数。',
                'type' => 'string',
                'example' => '0',
              ),
              'FailAct' => 
              array (
                'description' => '失败策略，取值如下：

- STOP（终止工作流）

- CONTINUE（跳过）',
                'type' => 'string',
                'example' => 'STOP',
              ),
              'JobParams' => 
              array (
                'description' => '作业内容。',
                'type' => 'string',
                'example' => 'ls -l',
              ),
              'FlowInstanceId' => 
              array (
                'description' => '工作流实例ID。',
                'type' => 'string',
                'example' => 'FI-7CAF9709CD32****',
              ),
              'ParamConf' => 
              array (
                'description' => '参数配置。',
                'type' => 'string',
                'example' => '{"date":"${yyyy-MM-dd}"}',
              ),
              'HostName' => 
              array (
                'description' => '节点实例运行所在主机的名称。您可以登录主机使用hostname命令查看主机名称。',
                'type' => 'string',
                'example' => 'emr-header-1.cluster-12345',
              ),
              'FlowId' => 
              array (
                'description' => '工作流ID。',
                'type' => 'string',
                'example' => 'F-35683D0E4573****',
              ),
              'Retries' => 
              array (
                'description' => '重试次数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'EndTime' => 
              array (
                'description' => '运行结束时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1540796248000',
              ),
              'StartTime' => 
              array (
                'description' => '运行开始时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1540796237000',
              ),
              'RunConf' => 
              array (
                'description' => '运行配置，取值如下：

- priority：优先级。

- userName：用于提交作业Linux用户。

- memory：内存单位为MB。

- cores： 核数。',
                'type' => 'string',
                'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
              ),
              'ExternalSubId' => 
              array (
                'description' => '启动器container的ID。',
                'type' => 'string',
                'example' => 'container_1541559535023_34027_01_000001',
              ),
              'NodeName' => 
              array (
                'description' => '节点名称。',
                'type' => 'string',
                'example' => '812589f5',
              ),
              'JobId' => 
              array (
                'description' => '作业ID。',
                'type' => 'string',
                'example' => 'FJ-A23BD131A862****',
              ),
              'ClusterName' => 
              array (
                'description' => '集群名称。',
                'type' => 'string',
                'example' => 'myCluster',
              ),
              'GmtCreate' => 
              array (
                'description' => '创建时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1540796236000',
              ),
              'Duration' => 
              array (
                'description' => '运行持续时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '600',
              ),
              'Id' => 
              array (
                'description' => '节点实例ID',
                'type' => 'string',
                'example' => 'FNI-FE4BD156E939****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"Type\\": \\"JOB\\",\\n  \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"ProjectId\\": \\"FP-7A1018ADE917****\\",\\n  \\"RetryInterval\\": \\"15\\",\\n  \\"JobType\\": \\"HIVE_SQL\\",\\n  \\"Mode\\": \\"YARN\\",\\n  \\"ExternalInfo\\": \\"empty\\",\\n  \\"GmtModified\\": 1540796247000,\\n  \\"ExternalChildIds\\": \\"application_1541559535023_34028\\",\\n  \\"MonitorConf\\": \\"{\\\\\\"inputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\",\\\\\\"consumer.group\\\\\\":\\\\\\"kafka_consumer_group\\\\\\"}],\\\\\\"outputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\"}]}\\",\\n  \\"ExternalStatus\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\",\\n  \\"JobName\\": \\"myJob\\",\\n  \\"RetryPolicy\\": \\"无\\",\\n  \\"Adhoc\\": true,\\n  \\"ExternalId\\": \\"application_1541559535023_34027\\",\\n  \\"Pending\\": true,\\n  \\"ClusterId\\": \\"C-F32FB31D8295****\\",\\n  \\"MaxRetry\\": \\"0\\",\\n  \\"FailAct\\": \\"STOP\\",\\n  \\"JobParams\\": \\"ls -l\\",\\n  \\"FlowInstanceId\\": \\"FI-7CAF9709CD32****\\",\\n  \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n  \\"HostName\\": \\"emr-header-1.cluster-12345\\",\\n  \\"FlowId\\": \\"F-35683D0E4573****\\",\\n  \\"Retries\\": 0,\\n  \\"EndTime\\": 1540796248000,\\n  \\"StartTime\\": 1540796237000,\\n  \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n  \\"ExternalSubId\\": \\"container_1541559535023_34027_01_000001\\",\\n  \\"NodeName\\": \\"812589f5\\",\\n  \\"JobId\\": \\"FJ-A23BD131A862****\\",\\n  \\"ClusterName\\": \\"myCluster\\",\\n  \\"GmtCreate\\": 1540796236000,\\n  \\"Duration\\": 600,\\n  \\"Id\\": \\"FNI-FE4BD156E939****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowNodeInstanceResponse>\\n    <Status>OK</Status>\\n    <Type>JOB</Type>\\n    <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n    <ProjectId>FP-7A1018ADE917****</ProjectId>\\n    <RetryInterval>15</RetryInterval>\\n    <JobType>HIVE_SQL</JobType>\\n    <Mode>YARN</Mode>\\n    <ExternalInfo>empty</ExternalInfo>\\n    <GmtModified>1540796247000</GmtModified>\\n    <ExternalChildIds>application_1541559535023_34028</ExternalChildIds>\\n    <MonitorConf>{\\"inputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\",\\"consumer.group\\":\\"kafka_consumer_group\\"}],\\"outputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\"}]}</MonitorConf>\\n    <ExternalStatus>SUCCESS</ExternalStatus>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n    <JobName>myJob</JobName>\\n    <RetryPolicy>无</RetryPolicy>\\n    <Adhoc>true</Adhoc>\\n    <ExternalId>application_1541559535023_34027</ExternalId>\\n    <Pending>true</Pending>\\n    <ClusterId>C-F32FB31D8295****</ClusterId>\\n    <MaxRetry>0</MaxRetry>\\n    <FailAct>STOP</FailAct>\\n    <JobParams>ls -l</JobParams>\\n    <FlowInstanceId>FI-7CAF9709CD32****</FlowInstanceId>\\n    <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n    <HostName>emr-header-1.cluster-12345</HostName>\\n    <FlowId>F-35683D0E4573****</FlowId>\\n    <Retries>0</Retries>\\n    <EndTime>1540796248000</EndTime>\\n    <StartTime>1540796237000</StartTime>\\n    <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n    <ExternalSubId>container_1541559535023_34027_01_000001</ExternalSubId>\\n    <NodeName>812589f5</NodeName>\\n    <JobId>FJ-A23BD131A862****</JobId>\\n    <ClusterName>myCluster</ClusterName>\\n    <GmtCreate>1540796236000</GmtCreate>\\n    <Duration>600</Duration>\\n    <Id>FNI-FE4BD156E939****</Id>\\n</DescribeFlowNodeInstanceResponse>","errorExample":""}]',
      'title' => '查询节点实例详情',
      'summary' => '调用DescribeFlowNodeInstance接口，查询节点实例（工作流节点实例和作业运行节点实例）详情。',
    ),
    'ModifyFlowForWeb' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FP-257A173659F5****',
          ),
        ),
        2 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'F-7A39731FE719****',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
工作流名称， 长度限制为64个字符，同一个项目中不允许重名。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_flow',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流状态， 支持STOP_SCHEDULE和UNDER_SCHEDULE。',
            'type' => 'string',
            'required' => false,
            'example' => 'STOP_SCHEDULE',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
工作流描述，长度限制为256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个工作流描述',
          ),
        ),
        6 => 
        array (
          'name' => 'Periodic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否周期调度。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'StartSchedule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度生效时间， 长整型时间戳。例如：System.currentTimeMillis()必须小于EndSchedule。当CronExpr不为空时， 此项必填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '1538017814000',
          ),
        ),
        8 => 
        array (
          'name' => 'EndSchedule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度失效时间，长整型时间戳，例如：System.currentTimeMillis()。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '1538018814000',
          ),
        ),
        9 => 
        array (
          'name' => 'CronExpr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间周期调度的Cron表达式。',
            'type' => 'string',
            'required' => false,
            'example' => '0 0 0-23/1 * * ?',
          ),
        ),
        10 => 
        array (
          'name' => 'CreateCluster',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否创建集群：

为true时，ClusterId为集群模板ID：CT-XXXXXX。
为false时，ClusterId为集群ID：C-XXXXXX。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'C-F32FB31D8295****',
          ),
        ),
        12 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定运行的机器信息，格式为emr-header-1.cluster-123456。',
            'type' => 'string',
            'required' => false,
            'example' => 'emr-header-1.cluster-123456',
          ),
        ),
        13 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        14 => 
        array (
          'name' => 'Graph',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流信息',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"nodes":[{"id":"48d474ea","attribute":{"type":"START"},"type":"node"},{"id":"59065ccd","label":"bep-test","attribute":{"jobId":"FJ-6B0706D041565649","type":"JOB","jobType":"SPARK"},"type":"node","config":{"hostName":"","clusterId":""}},{"id":"aa1557a6","attribute":{"type":"END"},"type":"node"},{"id":"29e683d7","label":"test","attribute":{"jobId":"FJ-A9E1B3AF5B5E28B3","type":"JOB","jobType":"SPARK"},"type":"node","config":{"hostName":"","clusterId":""}}],"edges":[{"sourceAnchor":0,"targetAnchor":0,"index":2,"source":"48d474ea","id":"1acb3290","target":"59065ccd"},{"sourceAnchor":1,"targetAnchor":0,"index":4,"source":"59065ccd","id":"ad0fdda5","target":"aa1557a6"}]}',
          ),
        ),
        15 => 
        array (
          'name' => 'AlertConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警通知配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
          ),
        ),
        16 => 
        array (
          'name' => 'AlertUserGroupBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段',
            'type' => 'string',
            'required' => false,
            'example' => '已过期',
          ),
        ),
        17 => 
        array (
          'name' => 'AlertDingDingGroupBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留字段',
            'type' => 'string',
            'required' => false,
            'example' => '已过期',
          ),
        ),
        18 => 
        array (
          'name' => 'ParentFlowList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '依赖的父工作流列表。',
            'type' => 'string',
            'required' => false,
            'example' => '[F-123456]',
          ),
        ),
        19 => 
        array (
          'name' => 'ParentCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父目录ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FC-F2495319DA05****',
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
                'description' => '返回执行结果，包含如下：

true：成功
false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowForWebResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</ModifyFlowForWebResponse>","errorExample":""}]',
      'title' => '修改带有图形信息的工作流',
      'summary' => '修改带有图形信息的工作流。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ddi.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ddi.cn-chengdu.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ddi.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ddi.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ddi.cn-hongkong.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ddi.ap-southeast-2.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ddi.ap-southeast-3.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ddi.ap-southeast-5.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ddi.ap-northeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ddi.eu-west-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'ddi.us-east-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ddi.eu-central-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'ddi.me-east-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'ddi.ap-south-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'ddi.aliyuncs.com',
    ),
  ),
);
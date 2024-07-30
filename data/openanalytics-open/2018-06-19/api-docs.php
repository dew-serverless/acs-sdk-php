<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'openanalytics-open',
        'version' => '2018-06-19',
    ],
    'directories' => [
        [
            'id' => 66483,
            'title' => 'Serverless Spark',
            'type' => 'directory',
            'children' => [
                'GetJobStatus',
                'GetJobDetail',
                'GetJobLog',
                'ListSparkJob',
                'SubmitSparkJob',
                'KillSparkJob',
            ],
        ],
        [
            'id' => 66490,
            'title' => '服务管理',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'ReleaseInstance',
                'ValidateVirtualClusterName',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'SubmitSparkSQL',
                'CancelSparkStatement',
                'ExecuteSparkStatement',
                'GetSparkSessionState',
                'GetSparkStatement',
                'ListSparkStatements',
                'GetJobAttemptLog',
                'ListSparkJobAttempt',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetJobStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的ID。您可以登录[DLA控制台](https://datalakeanalytics.console.aliyun.com/)，在作业任务列表中获取作业任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202011031935hangzhouf742a4330003667',
                    ],
                ],
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyCluster',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '作业执行状态码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5C3F9ADD-2350-4C21-A3A1-A906F8DF8016',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"success\\",\\n  \\"RequestId\\": \\"5C3F9ADD-2350-4C21-A3A1-A906F8DF8016\\"\\n}","errorExample":""},{"type":"xml","example":"<Status>success</Status>\\n<RequestId>5C3F9ADD-2350-4C21-A3A1-A906F8DF8016</RequestId>","errorExample":""}]',
            'title' => '获取Spark作业的执行状态',
            'summary' => '获取Spark作业的执行状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '**作业的状态码如下表**'."\n"
                .'| 状态码   | 语义                                 |'."\n"
                .'|----------|--------------------------------------|'."\n"
                .'| starting | 启动中，作业尚未执行。               |'."\n"
                .'| running  | 作业在执行中。                       |'."\n"
                .'| error    | 作业中的程序执行失败，抛出Exception。 |'."\n"
                .'| dead     | 作业因为资源问题等执行失败。         |'."\n"
                .'| killed   | 执行中的作业被取消。                 |'."\n"
                .'| success  | 作业执行成功。                       |',
            'extraInfo' => ' ',
        ],
        'GetJobDetail' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202010271622hangzhouf742a4330000923',
                    ],
                ],
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行Spark作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyCluster',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的唯一ID。',
                                'type' => 'string',
                                'example' => '5F10AB6E-8984-4E32-B821-4E1512711B8C',
                            ],
                            'JobDetail' => [
                                'description' => 'Spark作业的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'Spark作业的状态码。',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '最后一次更新Spark作业状态的时间，时区为执行作业区域的时区。',
                                        'type' => 'string',
                                        'example' => '2020-10-27 16:23:16',
                                    ],
                                    'ExecutorResourceSpec' => [
                                        'description' => 'Executor计算资源规格。取值范围：'."\n"
                                            ."\n"
                                            .'- **small**：1Core 4GB'."\n"
                                            ."\n"
                                            .'- **medium**：2Core 8GB'."\n"
                                            ."\n"
                                            .'- **large**：4Core 16GB'."\n"
                                            ."\n"
                                            .'- **xlarge**：8Core 32GB',
                                        'type' => 'string',
                                        'example' => 'small',
                                    ],
                                    'CreateTime' => [
                                        'description' => 'Spark作业开始执行的时间，时区为执行区域的时区。',
                                        'type' => 'string',
                                        'example' => '2020-10-27 16:23:16',
                                    ],
                                    'DriverResourceSpec' => [
                                        'description' => 'Driver计算资源规格。取值范围：'."\n"
                                            ."\n"
                                            .'- **small**：1Core 4GB'."\n"
                                            ."\n"
                                            .'- **medium**：2Core 8GB'."\n"
                                            ."\n"
                                            .'- **large**：4Core 16GB'."\n"
                                            ."\n"
                                            .'- **xlarge**：8Core 32GB',
                                        'type' => 'string',
                                        'example' => 'small',
                                    ],
                                    'CreateTimeValue' => [
                                        'description' => 'Spark作业开始执行的毫秒级时间戳。',
                                        'type' => 'string',
                                        'example' => '1603786996000',
                                    ],
                                    'UpdateTimeValue' => [
                                        'description' => '最后一次更新Spark作业状态的毫秒级时间戳。',
                                        'type' => 'string',
                                        'example' => '1603786996000',
                                    ],
                                    'SparkUI' => [
                                        'description' => 'Spark作业的UI，具体请参考[配置Spark UI](~~163470~~)。',
                                        'type' => 'string',
                                        'example' => 'https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx',
                                    ],
                                    'LastJobAttemptId' => [
                                        'description' => '最近一次尝试执行的Spark作业ID。',
                                        'type' => 'string',
                                        'example' => '202105251618hzslot9906b0b40000005-0001',
                                    ],
                                    'SubmitTimeValue' => [
                                        'description' => '提交Spark作业的毫秒级时间戳。',
                                        'type' => 'string',
                                        'example' => '1603786996000',
                                    ],
                                    'JobName' => [
                                        'description' => 'Spark作业的名称。',
                                        'type' => 'string',
                                        'example' => 'SparkPi',
                                    ],
                                    'JobId' => [
                                        'description' => 'Spark作业的ID。',
                                        'type' => 'string',
                                        'example' => 'j202010271622hangzhouf742a4330000923',
                                    ],
                                    'ExecutorInstances' => [
                                        'description' => 'Spark作业Executor数量。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'VcName' => [
                                        'description' => '执行Spark作业的虚拟集群名称。',
                                        'type' => 'string',
                                        'example' => 'MyCluster',
                                    ],
                                    'SubmitTime' => [
                                        'description' => '提交Spark作业的时间，时区为执行区域的时区。',
                                        'type' => 'string',
                                        'example' => '2020-10-27 16:23:16',
                                    ],
                                    'Detail' => [
                                        'description' => '定义Spark作业的JSON字符串。',
                                        'type' => 'string',
                                        'example' => '{\\"args\\":[\\"100\\"],\\"name\\":\\"SparkPi\\",\\"className\\":\\"org.apache.spark.examples.SparkPi\\",\\"conf\\":{\\"spark.driver.resourceSpec\\":\\"medium\\",\\"spark.executor.instances\\":5,\\"spark.executor.resourceSpec\\":\\"medium\\"},\\"file\\":\\"local:///tmp/spark-examples.jar\\"}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F10AB6E-8984-4E32-B821-4E1512711B8C\\",\\n  \\"JobDetail\\": {\\n    \\"Status\\": \\"success\\",\\n    \\"UpdateTime\\": \\"2020-10-27 16:23:16\\",\\n    \\"ExecutorResourceSpec\\": \\"small\\",\\n    \\"CreateTime\\": \\"2020-10-27 16:23:16\\",\\n    \\"DriverResourceSpec\\": \\"small\\",\\n    \\"CreateTimeValue\\": \\"1603786996000\\",\\n    \\"UpdateTimeValue\\": \\"1603786996000\\",\\n    \\"SparkUI\\": \\"https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx\\",\\n    \\"LastJobAttemptId\\": \\"202105251618hzslot9906b0b40000005-0001\\",\\n    \\"SubmitTimeValue\\": \\"1603786996000\\",\\n    \\"JobName\\": \\"SparkPi\\",\\n    \\"JobId\\": \\"j202010271622hangzhouf742a4330000923\\",\\n    \\"ExecutorInstances\\": \\"1\\",\\n    \\"VcName\\": \\"MyCluster\\",\\n    \\"SubmitTime\\": \\"2020-10-27 16:23:16\\",\\n    \\"Detail\\": \\"{\\\\\\\\\\\\\\"args\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"100\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SparkPi\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"className\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"org.apache.spark.examples.SparkPi\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"conf\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"spark.driver.resourceSpec\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"medium\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"spark.executor.instances\\\\\\\\\\\\\\":5,\\\\\\\\\\\\\\"spark.executor.resourceSpec\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"medium\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"file\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"local:///tmp/spark-examples.jar\\\\\\\\\\\\\\"}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<JobDetail>\\n    <Status>success</Status>\\n    <VcName>MyCluser</VcName>\\n    <ExecutorInstances>5</ExecutorInstances>\\n    <LastJobAttemptId>j202010271622hangzhouf742a4330000923-0001</LastJobAttemptId>\\n    <SparkUI>https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx</SparkUI>\\n    <DriverResourceSpec>medium</DriverResourceSpec>\\n    <CreateTime>2020-10-27 16:23:16</CreateTime>\\n    <JobName>SparkPi</JobName>\\n    <ExecutorResourceSpec>medium</ExecutorResourceSpec>\\n    <SubmitTime>2020-10-27 16:22:52</SubmitTime>\\n    <CreateTimeValue>1603786996000</CreateTimeValue>\\n    <UpdateTimeValue>1603787047000</UpdateTimeValue>\\n    <SubmitTimeValue>1603786972000</SubmitTimeValue>\\n    <UpdateTime>2020-10-27 16:24:07</UpdateTime>\\n    <JobId>j202010271622hangzhouf742a4330000923</JobId>\\n    <Detail>{\\"args\\":[\\"100\\"],\\"name\\":\\"SparkPi\\",\\"className\\":\\"org.apache.spark.examples.SparkPi\\",\\"conf\\":{\\"spark.driver.resourceSpec\\":\\"medium\\",\\"spark.executor.instances\\":5,\\"spark.executor.resourceSpec\\":\\"medium\\"},\\"file\\":\\"local:///tmp/spark-examples.jar\\"}</Detail>\\n</JobDetail>\\n<RequestId>5F10AB6E-8984-4E32-B821-4E1512711B8C</RequestId>","errorExample":""}]',
            'title' => '获取一个 Spark作业的详细信息',
            'summary' => '调用GetJobDetail获取Spark作业的详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '**作业的状态码如下表**'."\n"
                .'| 状态码   | 语义                                 |'."\n"
                .'|----------|--------------------------------------|'."\n"
                .'| starting | 启动中，作业尚未执行。               |'."\n"
                .'| running  | 作业在执行中。                       |'."\n"
                .'| error    | 作业中的程序执行失败，抛出了Exception。 |'."\n"
                .'| dead     | 作业因为资源不足等问题失败。         |'."\n"
                .'| killed   | 作业在执行中被取消。                 |'."\n"
                .'| success  | 作业执行成功。                       |',
            'extraInfo' => ' ',
        ],
        'GetJobLog' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的ID。您可以登录[DLA控制台](https://datalakeanalytics.console.aliyun.com/)，在作业任务列表中获取作业任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202010271622hangzhouf742a4330000923',
                    ],
                ],
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyCluster',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '作业的日志内容。',
                                'type' => 'string',
                                'example' => 'INFO SparkContext: Running Spark version 2.x',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EC031B4B-3E07-40D2-9BC5-xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"INFO SparkContext: Running Spark version 2.x\\",\\n  \\"RequestId\\": \\"EC031B4B-3E07-40D2-9BC5-xxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3970ACB5-3E30-4A3A-B63A-xxxx</RequestId>\\n<Data>Running Spark version 2.x</Data>","errorExample":""}]',
            'title' => '获取Spark作业的日志',
            'summary' => '获取Spark作业的日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSparkJob' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VcName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行Spark作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySparkCluster',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定需要查询的页码号，用于遍历全部数据，页码的编码从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的作业的个数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '提取Spark虚拟集群的历史作业详情信息的过滤条件，不填写表示没有过滤条件。'."\n",
                        'type' => 'object',
                        'required' => false,
                        'example' => '{   "createTime":"2020-12-28 09:00:00",   "jobName":"SparkPi" }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的唯一编码。',
                                'type' => 'string',
                                'example' => 'E18B0634-F003-486A-90B9-4AA6932DA3AA',
                            ],
                            'DataResult' => [
                                'description' => '虚拟集群的历史作业结果列表。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'description' => '当前请求返回的页码。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '当前请求返回的每页作业数量。',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'TotalCount' => [
                                        'description' => '当前可查询的历史作业的总数。',
                                        'type' => 'string',
                                        'example' => '4998',
                                    ],
                                    'JobList' => [
                                        'description' => '历史作业详情数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '作业的状态码。',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'UpdateTime' => [
                                                    'description' => '最后一次更新作业状态的时间，时区为该集群所在的地域的时区。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-27 17:51:05',
                                                ],
                                                'ExecutorResourceSpec' => [
                                                    'description' => '作业所申请的Executor的规格。',
                                                    'type' => 'string',
                                                    'example' => 'small',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '创建Spark作业的时间点，时区为该集群所在的地域的时区。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-27 17:51:05',
                                                ],
                                                'CreateTimeValue' => [
                                                    'description' => '创建Spark作业的毫秒级时间戳。',
                                                    'type' => 'string',
                                                    'example' => '1603792267000',
                                                ],
                                                'DriverResourceSpec' => [
                                                    'description' => '作业所申请的Driver的实例规格。',
                                                    'type' => 'string',
                                                    'example' => 'small',
                                                ],
                                                'UpdateTimeValue' => [
                                                    'description' => '最后一次更新作业状态的毫秒级时间戳。',
                                                    'type' => 'string',
                                                    'example' => '1603792267000',
                                                ],
                                                'SparkUI' => [
                                                    'description' => 'Spark作业的UI，具体请参考文档[Spark UI](~~163470~~)。',
                                                    'type' => 'string',
                                                    'example' => 'https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx',
                                                ],
                                                'SubmitTimeValue' => [
                                                    'description' => '提交作业的毫秒级时间戳。',
                                                    'type' => 'string',
                                                    'example' => '1603792267000',
                                                ],
                                                'JobName' => [
                                                    'description' => 'Spark作业的名称。',
                                                    'type' => 'string',
                                                    'example' => 'SparkPi',
                                                ],
                                                'JobId' => [
                                                    'description' => 'Spark作业的ID。',
                                                    'type' => 'string',
                                                    'example' => 'j202010271750hangzhouf742a4330000950',
                                                ],
                                                'VcName' => [
                                                    'description' => '执行作业的虚拟集群名称。',
                                                    'type' => 'string',
                                                    'example' => 'MyCluster',
                                                ],
                                                'ExecutorInstances' => [
                                                    'description' => '作业所申请的Executor的数量。',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'SubmitTime' => [
                                                    'description' => '提交作业的时间，时区为该集群所在的地域的时区。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-27 17:51:05',
                                                ],
                                                'Detail' => [
                                                    'description' => '描述此作业的JSON格式的字符串。',
                                                    'type' => 'string',
                                                    'example' => '{"args":["100"],"name":...}',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E18B0634-F003-486A-90B9-4AA6932DA3AA\\",\\n  \\"DataResult\\": {\\n    \\"PageNumber\\": \\"1\\",\\n    \\"PageSize\\": \\"10\\",\\n    \\"TotalCount\\": \\"4998\\",\\n    \\"JobList\\": [\\n      {\\n        \\"Status\\": \\"running\\",\\n        \\"UpdateTime\\": \\"2020-10-27 17:51:05\\",\\n        \\"ExecutorResourceSpec\\": \\"small\\",\\n        \\"CreateTime\\": \\"2020-10-27 17:51:05\\",\\n        \\"CreateTimeValue\\": \\"1603792267000\\",\\n        \\"DriverResourceSpec\\": \\"small\\",\\n        \\"UpdateTimeValue\\": \\"1603792267000\\",\\n        \\"SparkUI\\": \\"https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx\\",\\n        \\"SubmitTimeValue\\": \\"1603792267000\\",\\n        \\"JobName\\": \\"SparkPi\\",\\n        \\"JobId\\": \\"j202010271750hangzhouf742a4330000950\\",\\n        \\"VcName\\": \\"MyCluster\\",\\n        \\"ExecutorInstances\\": \\"100\\",\\n        \\"SubmitTime\\": \\"2020-10-27 17:51:05\\",\\n        \\"Detail\\": \\"{\\\\\\"args\\\\\\":[\\\\\\"100\\\\\\"],\\\\\\"name\\\\\\":...}\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DataResult>\\n    <TotalCount>4998</TotalCount>\\n    <PageSize>2</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <JobList>\\n        <ExecutorInstances>2</ExecutorInstances>\\n        <Status>success</Status>\\n        <VcName>MyCluster</VcName>\\n        <SparkUI>https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx</SparkUI>\\n        <DriverResourceSpec>small</DriverResourceSpec>\\n        <CreateTime>2020-10-27 17:51:07</CreateTime>\\n        <JobName>localFile</JobName>\\n        <ExecutorResourceSpec>small</ExecutorResourceSpec>\\n        <SubmitTime>2020-10-27 17:50:43</SubmitTime>\\n        <CreateTimeValue>1603792267000</CreateTimeValue>\\n        <UpdateTimeValue>1603792302000</UpdateTimeValue>\\n        <SubmitTimeValue>1603792243000</SubmitTimeValue>\\n        <UpdateTime>2020-10-27 17:51:42</UpdateTime>\\n        <Detail>{\\"args\\":[\\"100\\"],\\"name\\"f}</Detail>\\n        <JobId>j202010271750hangzhouf742a4330000950</JobId>\\n    </JobList>\\n    <JobList>\\n        <ExecutorInstances>2</ExecutorInstances>\\n        <Status>error</Status>\\n        <VcName>MyCluster</VcName>\\n        <SparkUI>https://dlaui-cn-hangzhou.aliyuncs.com/?token=xxx</SparkUI>\\n        <DriverResourceSpec>small</DriverResourceSpec>\\n        <CreateTime>2020-10-27 17:51:05</CreateTime>\\n        <JobName>localFile</JobName>\\n        <ExecutorResourceSpec>small</ExecutorResourceSpec>\\n        <SubmitTime>2020-10-27 17:50:39</SubmitTime>\\n        <CreateTimeValue>1603792265000</CreateTimeValue>\\n        <UpdateTimeValue>1603792300000</UpdateTimeValue>\\n        <SubmitTimeValue>1603792239000</SubmitTimeValue>\\n        <UpdateTime>2020-10-27 17:51:40</UpdateTime>\\n        <Detail>{\\"args\\":[\\"100\\"],\\"name\\"f}</Detail>\\n        <JobId>j202010271750hangzhouf742a4330000949</JobId>\\n    </JobList>\\n</DataResult>\\n<RequestId>E18B0634-F003-486A-90B9-4AA6932DA3AA</RequestId>","errorExample":""}]',
            'title' => '提取数据湖分析Spark虚拟集群历史作业信息',
            'summary' => '分页提取某个数据湖分析Spark虚拟集群的历史作业详情信息。',
            'requestParamsDescription' => ' Condition是一个JSON格式的字符串，目前支持如下参数。'."\n"
                .'- status：Spark作业的状态，取值如下。'."\n"
                .'    -  starting：提交中。'."\n"
                .'    - running：运行中。'."\n"
                .'    - success：成功。'."\n"
                .'    - error：运行失败。'."\n"
                .'    - killed：被取消。'."\n"
                .'    - unknown：未知状态。'."\n"
                .'    - dead：启动失败。'."\n"
                .'- createTime：代表筛选指定时间之后提交的作业，格式为yyyy-mm-dd HH:mm:ss，指定该参数的时候，同时需要指定timeZone。'."\n"
                .'- timeZone：createTime时间串所在的时区，例如 Asia/Shanghai。'."\n"
                .'- jobId：Spark作业的ID。'."\n"
                .'- jobName：Spark作业的名称，支持局部匹配。',
            'responseParamsDescription' => '**作业的状态码如下表**'."\n"
                .'| 状态码   | 语义                                 |'."\n"
                .'|----------|--------------------------------------|'."\n"
                .'| starting | 启动中，作业尚未执行。               |'."\n"
                .'| running  | 作业在执行中。                       |'."\n"
                .'| error    | 作业中的程序执行失败，抛出了Exception。 |'."\n"
                .'| dead     | 作业因为资源问题等问题失败。         |'."\n"
                .'| killed   | 作业在执行中被取消。                 |'."\n"
                .'| success  | 作业执行成功。                       |',
            'extraInfo' => ' ',
        ],
        'SubmitSparkJob' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyCluster',
                    ],
                ],
                [
                    'name' => 'ConfigJson',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定义Spark作业的JSON字符串。JSON字符串的作业参数说明请参见[作业配置指南](~~185924~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{     "name": "SparkPi",     "file": "local:///tmp/spark-examples.jar",     "className": "org.apache.spark.examples.SparkPi",     "args": [         "100"     ],     "conf": {         "spark.driver.resourceSpec": "medium",         "spark.executor.instances": 5,         "spark.executor.resourceSpec": "medium"     } }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'description' => 'Spark作业的ID。',
                                'type' => 'string',
                                'example' => 'j202011032013hangzhouf742a4330003679',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C039FD4D-2F3C-4556-AF09-864D3A6485B2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"j202011032013hangzhouf742a4330003679\\",\\n  \\"RequestId\\": \\"C039FD4D-2F3C-4556-AF09-864D3A6485B2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C039FD4D-2F3C-4556-AF09-864D3A6485B2</RequestId>\\n<JobId>j202011032013hangzhouf742a4330003679</JobId>","errorExample":""}]',
            'title' => '提交一个Spark作业',
            'summary' => '提交Spark作业。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'KillSparkJob' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行Spark作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyCluster',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202011031935hangzhouf742a4330003667',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果，`deleted`代表执行成功。',
                                'type' => 'string',
                                'example' => 'deleted',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一ID。',
                                'type' => 'string',
                                'example' => '3970ACB5-3E30-4A3A-B63A-1790FCC261F4',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"deleted\\",\\n  \\"RequestId\\": \\"3970ACB5-3E30-4A3A-B63A-1790FCC261F4\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3970ACB5-3E30-4A3A-B63A-1790FCC261F4</RequestId>\\n<Data>deleted</Data>","errorExample":""}]',
            'title' => '强行停止一个运行中的Spark作业',
            'summary' => '调用KillSparkJob强行停止一个运行中的Spark作业。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateInstance' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定为**POSTPAY**。暂只支持创建后付费实例。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'POSTPAY',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '实例类型，取值说明：'."\n"
                            ."\n"
                            .'- **CU_SPARK**：云原生Spark引擎。'."\n"
                            ."\n"
                            .'- **CU_PRESTO**：兼容开源Presto语法。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CU_PRESTO',
                    ],
                ],
                [
                    'name' => 'Component',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'component模块的JSON序列化。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"{\\"operable\\":\\"false\\",\\"max_cu\\":\\"8\\",\\"instance_name\\":\\"api-test-9\\",\\"min_cu\\":\\"0\\",\\"engine\\":\\"spark\\",\\"region\\":\\"cn-hangzhou\\",\\"app_name\\":\\"xx\\",\\"app_version_name\\":\\"xx\\"}"',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '312F48C7-AFA0-46AA-B8F6-1B16B8808045',
                            ],
                            'ErrorInfo' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'An internal error occurred',
                            ],
                            'Result' => [
                                'description' => '返回的创建实例的结果。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '600',
                            ],
                            'Success' => [
                                'description' => '请求是否调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'Openanalytics.Unauthorized.Exception',
                        'errorMessage' => 'You do not have permission to perform the operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Openanalytics.NotFound.Exception',
                        'errorMessage' => 'The specified instance does not exist.',
                    ],
                ],
                600 => [
                    [
                        'errorCode' => 'Openanalytics.Internal.Exception',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"312F48C7-AFA0-46AA-B8F6-1B16B8808045\\",\\n  \\"ErrorInfo\\": \\"An internal error occurred\\",\\n  \\"Result\\": \\"true\\",\\n  \\"ErrorCode\\": \\"600\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>312F48C7-AFA0-46AA-B8F6-1B16B8808045</RequestId>\\n<ErrorInfo>An internal error occurred</ErrorInfo>\\n<ErrorCode>600</ErrorCode>\\n<Success>true</Success>\\n<Result>true</Result>","errorExample":""}]',
            'title' => '创建实例',
            'summary' => '调用CreateInstance创建实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReleaseInstance' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dla-3qntmdtbqklsbsmceu****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '312F48C7-AFA0-46AA-B8F6-1B16B8808045',
                            ],
                            'ErrorInfo' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'An internal error occurred',
                            ],
                            'Result' => [
                                'description' => '返回的释放实例的结果。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '600',
                            ],
                            'Success' => [
                                'description' => '请求是否调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'Openanalytics.Unauthorized.Exception',
                        'errorMessage' => 'You do not have permission to perform the operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Openanalytics.NotFound.Exception',
                        'errorMessage' => 'The specified instance does not exist.',
                    ],
                ],
                600 => [
                    [
                        'errorCode' => 'Openanalytics.Internal.Exception',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"312F48C7-AFA0-46AA-B8F6-1B16B8808045\\",\\n  \\"ErrorInfo\\": \\"An internal error occurred\\",\\n  \\"Result\\": \\"true\\",\\n  \\"ErrorCode\\": \\"600\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<requestId>312F48C7-AFA0-46AA-B8F6-1B16B8808045</requestId>\\n<result>true</result>\\n<success>true</success>","errorExample":""}]',
            'title' => '释放实例',
            'summary' => '调用ReleaseInstance释放实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ValidateVirtualClusterName' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要校验的虚拟集群的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C039FD4D-2F3C-4556-AF09-864D3A6485B2',
                            ],
                            'Data' => [
                                'description' => '校验返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Message' => [
                                        'description' => '如果虚拟集群名称不合法，上报的错误信息。',
                                        'type' => 'string',
                                        'example' => 'null',
                                    ],
                                    'Legal' => [
                                        'description' => '校验返回值，是否合法。取值：'."\n"
                                            ."\n"
                                            .'- **true**：合法'."\n"
                                            ."\n"
                                            .'- **false**：不合法',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EmptyResult',
                        'errorMessage' => 'The result is empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C039FD4D-2F3C-4556-AF09-864D3A6485B2\\",\\n  \\"Data\\": {\\n    \\"Message\\": \\"null\\",\\n    \\"Legal\\": \\"true\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C039FD4D-2F3C-4556-AF09-864D3A6485B2</RequestId>\\n<Data>\\n    <Message>null</Message>\\n    <Legal>true</Legal>\\n</Data>","errorExample":""}]',
            'title' => '校验虚拟集群的名字是否合法',
            'summary' => '调用ValidateVirtualClusterName校验虚拟集群的名字是否合法。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SubmitSparkSQL' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行SparkSQL作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySparkCluster',
                    ],
                ],
                [
                    'name' => 'Sql',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark SQL内容。具体请参考[Spark SQL](~~185724~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'set spark.driver.resourceSpec=medium;set spark.executor.instances=5;  set spark.executor.resourceSpec=medium;  set spark.app.name=sparksqltest;  show databases;',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'description' => 'Spark作业的ID。',
                                'type' => 'string',
                                'example' => 'j202104261729hangzhou224ee5230000930',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B570310A-8A49-461B-B81D-AE0B58D63DA4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"j202104261729hangzhou224ee5230000930\\",\\n  \\"RequestId\\": \\"B570310A-8A49-461B-B81D-AE0B58D63DA4\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B570310A-8A49-461B-B81D-AE0B58D63DA4</RequestId>\\n<JobId>j202104261729hangzhou224ee5230000930</JobId>","errorExample":""}]',
            'title' => '提交 Spark SQL 作业',
            'summary' => '提交SubmitSQL作业。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelSparkStatement' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'StatementId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业中代码块的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2026****',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202106071620hangzhou****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '是否终止成功，取值说明：'."\n"
                                    ."\n"
                                    .'- **true**：终止成功。'."\n"
                                    .'- **false**：终止失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '341ADFA1-4A68-4707-9CA7-FA86523A5F14',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"341ADFA1-4A68-4707-9CA7-FA86523A5F14\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>341ADFA1-4A68-4707-9CA7-FA86523A5F14</RequestId>\\n<Data>true</Data>","errorExample":""}]',
            'title' => '终止一个代码块的执行',
            'summary' => '终止一个代码块的执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '此操作为异步操作, 当返回`true`时代表Spark作业收到了终止命令, 开始尝试终止代码块, 但最终能否成功依赖实际运行情况. '."\n"
                .'后续应当通过`GetSparkStatement`接口来查看最终是否终止成功.',
        ],
        'ExecuteSparkStatement' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Code',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '一段代码块，使用Linux系统的 \'\\n\' 来代表切到新的一行。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'print(2+2)\\n',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202106071620hangzhou****',
                    ],
                ],
                [
                    'name' => 'Kind',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行代码的语言是什么, 取值：'."\n"
                            .'- **scala**'."\n"
                            .'- **python**'."\n"
                            .'- **sql**',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'sql',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '代码块提交成功后在此Spark作业中的唯一ID。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0DC5B6F080E8-0DC5B6F080E8-0DC5B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"2\\",\\n  \\"RequestId\\": \\"0DC5B6F080E8-0DC5B6F080E8-0DC5B\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0DC5B6F080E8-0DC5B6F080E8-0DC5B</RequestId>\\n<Data>2</Data>","errorExample":""}]',
            'title' => '执行Spark代码块作业',
            'summary' => '提交一段代码块给Spark作业执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSparkSessionState' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的ID。您可以登录[DLA控制台](https://datalakeanalytics.console.aliyun.com/)，在作业任务列表中获取作业任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202104171040zjkb4cc449d0000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'State' => [
                                'description' => 'Spark作业的各种内部状态，如running、success、starting、killing、failed，等等',
                                'type' => 'string',
                                'example' => 'killed',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '9AD49396-8F80-5511-9268-A6360B205136',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"State\\": \\"killed\\",\\n  \\"RequestId\\": \\"9AD49396-8F80-5511-9268-A6360B205136\\"\\n}","type":"json"}]',
            'title' => '获取可交互Spark作业的状态',
            'summary' => '获取可交互Spark作业的状态。',
            'description' => '获取当前Session的状态',
        ],
        'GetSparkStatement' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'StatementId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '此Spark作业中代码块的唯一id',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的唯一id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202106071620hangzhou00000000001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的唯一id',
                                'type' => 'string',
                                'example' => 'C5DB60E0-6EB3-493C-8956-DA0D3A2EE656',
                            ],
                            'Data' => [
                                'description' => '描述了此段代码块的执行状态',
                                'type' => 'object',
                                'properties' => [
                                    'Process' => [
                                        'description' => '代码当前执行进度, 为浮点数,`1`代表100%执行完成, `0.5` 代表执行了50%',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0.5',
                                    ],
                                    'CompletedTime' => [
                                        'description' => '代码执行结束的毫秒级时间戳',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1623033200754',
                                    ],
                                    'State' => [
                                        'description' => '代码块的执行状态, 可能的状态有'."\n"
                                            ."\n"
                                            .'- waiting 等待执行'."\n"
                                            .'- running 正在还行'."\n"
                                            .'- available 执行完成'."\n"
                                            .'- error 执行失败'."\n"
                                            .'- cancelling 在尝试终止'."\n"
                                            .'- cancelled 已经终止执行',
                                        'type' => 'string',
                                        'example' => 'running',
                                    ],
                                    'StartedTime' => [
                                        'description' => '代码开始执行的毫秒级时间戳',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1623033200750',
                                    ],
                                    'Code' => [
                                        'description' => '提交的代码块',
                                        'type' => 'string',
                                        'example' => 'print(2+2)',
                                    ],
                                    'Output' => [
                                        'description' => '代码块的执行结果, 执行结果是一个JSON格式的字符串, 其结构如下'."\n"
                                            ."\n"
                                            .'- status	执行状态'."\n"
                                            .'- execution_count	当前执行到此代码块的哪一行'."\n"
                                            .'- data	代码执行结果',
                                        'type' => 'string',
                                        'example' => '"{\\"status\\":\\"ok\\",\\"execution_count\\":1,\\"data\\":{\\"text/plain\\":\\"4\\"}}"',
                                    ],
                                    'Id' => [
                                        'description' => '代码块在此Spark作业中的唯一递增id',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5DB60E0-6EB3-493C-8956-DA0D3A2EE656\\",\\n  \\"Data\\": {\\n    \\"Process\\": 0.5,\\n    \\"CompletedTime\\": 1623033200754,\\n    \\"State\\": \\"running\\",\\n    \\"StartedTime\\": 1623033200750,\\n    \\"Code\\": \\"print(2+2)\\",\\n    \\"Output\\": \\"\\\\\\"{\\\\\\\\\\\\\\"status\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ok\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"execution_count\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"data\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"text/plain\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"4\\\\\\\\\\\\\\"}}\\\\\\"\\",\\n    \\"Id\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C5DB60E0-6EB3-493C-8956-DA0D3A2EE656</RequestId>\\n<Data>\\n    <CompletedTime>1623033200754</CompletedTime>\\n    <State>available</State>\\n    <Output>{\\"status\\":\\"ok\\",\\"execution_count\\":1,\\"data\\":{\\"text/plain\\":\\"4\\"}}</Output>\\n    <StartedTime>1623033200753</StartedTime>\\n    <Process>1</Process>\\n    <Id>1</Id>\\n    <Code>print(2 + 2)\\n</Code>\\n</Data>","errorExample":""}]',
            'title' => '获取代码块的执行状态',
            'summary' => '获取指定代码块的执行状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSparkStatements' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202106071620hangzhou00000000001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的唯一标识ID。',
                                'type' => 'string',
                                'example' => 'C2AB7692-B9EF-4A50-BCFF-0DC5B6F080E8',
                            ],
                            'Statements' => [
                                'description' => '代码块执行结果的列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Progress' => [
                                            'description' => '当前执行进度，是一个浮点数，代表执行的百分比，‘1’代表100%执行完成。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '1',
                                        ],
                                        'CompletedTime' => [
                                            'description' => '执行完成的毫秒级时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1623033200754',
                                        ],
                                        'State' => [
                                            'description' => '代码块的执行状态，可能的状态有：'."\n"
                                                ."\n"
                                                .'- waiting：等待执行。'."\n"
                                                .'- running：正在执行。'."\n"
                                                .'- available：执行完成。'."\n"
                                                .'- error：执行失败。'."\n"
                                                .'- cancelling：尝试终止。'."\n"
                                                .'- cancelled：已经终止执行。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'StartedTime' => [
                                            'description' => '代码块开始执行的毫秒级时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1623033200750',
                                        ],
                                        'Code' => [
                                            'description' => '提交执行的代码块。',
                                            'type' => 'string',
                                            'example' => 'print(2 + 2)',
                                        ],
                                        'Output' => [
                                            'description' => '代码块的执行结果，执行结果是一个JSON格式的字符串，其结构如下。'."\n"
                                                ."\n"
                                                .'- status：执行状态。'."\n"
                                                .'- execution_count：当前执行到此代码块的哪一行。'."\n"
                                                .'- data：代码执行结果。',
                                            'type' => 'string',
                                            'example' => '{\\"status\\":\\"ok\\",\\"execution_count\\":1,\\"data\\":{\\"text/plain\\":\\"4\\"}}',
                                        ],
                                        'Id' => [
                                            'description' => '代码块的唯一ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2AB7692-B9EF-4A50-BCFF-0DC5B6F080E8\\",\\n  \\"Statements\\": [\\n    {\\n      \\"Progress\\": 1,\\n      \\"CompletedTime\\": 1623033200754,\\n      \\"State\\": \\"running\\",\\n      \\"StartedTime\\": 1623033200750,\\n      \\"Code\\": \\"print(2 + 2)\\",\\n      \\"Output\\": \\"{\\\\\\\\\\\\\\"status\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ok\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"execution_count\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"data\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"text/plain\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"4\\\\\\\\\\\\\\"}}\\",\\n      \\"Id\\": 2\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C2AB7692-B9EF-4A50-BCFF-0DC5B6F080E8</RequestId>\\n<Statements>\\n    <Progress>1</Progress>\\n    <CompletedTime>1623033200078</CompletedTime>\\n    <State>available</State>\\n    <Output>{\\"status\\":\\"ok\\",\\"execution_count\\":0,\\"data\\":{\\"text/plain\\":\\"&lt;pyspark.sql.session.SparkSession object at 0x7f5e4a550390&gt;\\"}}</Output>\\n    <StartedTime>1623033200077</StartedTime>\\n    <Id>0</Id>\\n    <Code>spark</Code>\\n</Statements>\\n<Statements>\\n    <Progress>1</Progress>\\n    <CompletedTime>1623033200754</CompletedTime>\\n    <State>available</State>\\n    <Output>{\\"status\\":\\"ok\\",\\"execution_count\\":1,\\"data\\":{\\"text/plain\\":\\"4\\"}}</Output>\\n    <StartedTime>1623033200753</StartedTime>\\n    <Id>1</Id>\\n    <Code>print(2 + 2)\\n</Code>\\n</Statements>","errorExample":""}]',
            'title' => '获取 Spark 代码块列表',
            'summary' => '获取Spark Session的所有代码块的执行状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetJobAttemptLog' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业ID。您可以在作业管理页面查看作业。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202105272322hangzhou5d64f1560000128',
                    ],
                ],
                [
                    'name' => 'VcName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行Spark作业的虚拟集群名称。您可以在虚拟集群管理页面查看虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'release-test',
                    ],
                ],
                [
                    'name' => 'JobAttemptId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Spark作业尝试ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202105272322hangzhou5d64f1560000128-0001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的日志。',
                                'type' => 'string',
                                'example' => 'local:///opt/spark/jars/offline-sql.jar, main_file\\n+ exec /usr/bin/tini -s -- /jdk/jdk8/bin/java -cp \'/opt/tools/exec-wrapper.jar:.:::/opt/spark/jars/*\' com.aliyun.dla.spark.SparkJobWrapper /opt/spark/bin/spark-submit --conf spark.driver.host=172.16.6.205 --conf spark.ui.port=4040 --conf \'spark.driver.extraJavaOptions=-Dlog4j.configuration=file:///opt/spark/log-conf/log4j.properties -XX:+HeapDumpOnOutOfMemoryError -XX:HeapDumpPath=/tmp/dump.hprof -XX:OnOutOfMemoryError=\\"bash /opt/tools/oss-cp.sh /tmp/dump.hprof oss://dla-test-cn-hangzhou/spark-logs/release-test/j202105272322hangzhou5d64f1560000128-0001/driver/dump.hprof; bash /opt/tools/job-stop.sh\\" \'',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一ID。',
                                'type' => 'string',
                                'example' => '9CE8F271-F918-43B6-8F58-F9F1C2DCFDB8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"local:///opt/spark/jars/offline-sql.jar, main_file\\\\\\\\n+ exec /usr/bin/tini -s -- /jdk/jdk8/bin/java -cp \'/opt/tools/exec-wrapper.jar:.:::/opt/spark/jars/*\' com.aliyun.dla.spark.SparkJobWrapper /opt/spark/bin/spark-submit --conf spark.driver.host=172.16.6.205 --conf spark.ui.port=4040 --conf \'spark.driver.extraJavaOptions=-Dlog4j.configuration=file:///opt/spark/log-conf/log4j.properties -XX:+HeapDumpOnOutOfMemoryError -XX:HeapDumpPath=/tmp/dump.hprof -XX:OnOutOfMemoryError=\\\\\\\\\\\\\\"bash /opt/tools/oss-cp.sh /tmp/dump.hprof oss://dla-test-cn-hangzhou/spark-logs/release-test/j202105272322hangzhou5d64f1560000128-0001/driver/dump.hprof; bash /opt/tools/job-stop.sh\\\\\\\\\\\\\\" \'\\",\\n  \\"RequestId\\": \\"9CE8F271-F918-43B6-8F58-F9F1C2DCFDB8\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9CE8F271-F918-43B6-8F58-F9F1C2DCFDB8</RequestId>\\n<Data>local:///opt/spark/jars/offline-sql.jar, main_file\\\\n+ exec /usr/bin/tini -s -- /jdk/jdk8/bin/java -cp \'/opt/tools/exec-wrapper.jar:.:::/opt/spark/jars/*\' com.aliyun.dla.spark.SparkJobWrapper /opt/spark/bin/spark-submit --conf spark.driver.host=172.16.6.205 --conf spark.ui.port=4040 --conf \'spark.driver.extraJavaOptions=-Dlog4j.configuration=file:///opt/spark/log-conf/log4j.properties -XX:+HeapDumpOnOutOfMemoryError -XX:HeapDumpPath=/tmp/dump.hprof -XX:OnOutOfMemoryError=\\\\\\"bash /opt/tools/oss-cp.sh /tmp/dump.hprof oss://dla-test-cn-hangzhou/spark-logs/release-test/j202105272322hangzhou5d64f1560000128-0001/driver/dump.hprof; bash /opt/tools/job-stop.sh\\\\\\" \'</Data>","errorExample":""}]',
            'title' => '获取作业日志',
            'summary' => '获取对应JobAttempt的日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSparkJobAttempt' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VcName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行Spark作业的虚拟集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'release-test',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的页码号，用于遍历全部数据，页码的编码从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的作业的个数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'JobAttempt过滤条件，JSON格式。'."\n",
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"status":"success", "createTime":"2021-05-27 11:00:00", "timeZone":"Asia/Shanghai"}',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Spark作业ID。您可以在作业管理页面查看作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j202105272322hangzhou5d64f1560000128',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的唯一ID。',
                                'type' => 'string',
                                'example' => '4A839055-70C7-423D-A6F2-E714EA4502DB',
                            ],
                            'DataResult' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'description' => '页数',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '页大小',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'TotalCount' => [
                                        'description' => 'JobAttempt总数',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'JobAttemptList' => [
                                        'description' => 'JobAttempt列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => 'JobAttempt状态',
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                ],
                                                'DurationTime' => [
                                                    'description' => 'JobAttempt持续时间',
                                                    'type' => 'string',
                                                    'example' => '00:01:12',
                                                ],
                                                'TerminatedTime' => [
                                                    'description' => '终止时间',
                                                    'type' => 'string',
                                                    'example' => '2021-05-27 23:23:20',
                                                ],
                                                'DurationTimeValue' => [
                                                    'description' => '持续时间戳',
                                                    'type' => 'string',
                                                    'example' => '72000',
                                                ],
                                                'CreateTime' => [
                                                    'description' => 'JobAttempt创建时间',
                                                    'type' => 'string',
                                                    'example' => '2021-05-27 23:22:08',
                                                ],
                                                'CreateTimeValue' => [
                                                    'description' => 'JobAttempt创建时间戳',
                                                    'type' => 'string',
                                                    'example' => '1622128928000',
                                                ],
                                                'SparkUI' => [
                                                    'description' => 'SparkUI地址',
                                                    'type' => 'string',
                                                    'example' => 'xxx',
                                                ],
                                                'JobAttemptId' => [
                                                    'description' => '作业尝试ID',
                                                    'type' => 'string',
                                                    'example' => 'j202105272322hangzhou5d64f1560000128-0001',
                                                ],
                                                'JobName' => [
                                                    'description' => '作业名称',
                                                    'type' => 'string',
                                                    'example' => 'xxx',
                                                ],
                                                'JobId' => [
                                                    'description' => '作业ID',
                                                    'type' => 'string',
                                                    'example' => 'j202105272322hangzhou5d64f1560000128',
                                                ],
                                                'TerminatedTimeValue' => [
                                                    'description' => '终止时间戳',
                                                    'type' => 'string',
                                                    'example' => '1622129000000',
                                                ],
                                                'VcName' => [
                                                    'description' => '虚拟集群名称',
                                                    'type' => 'string',
                                                    'example' => 'release-test',
                                                ],
                                                'Detail' => [
                                                    'description' => '作业配置',
                                                    'type' => 'string',
                                                    'example' => '{"xxx":"xxx"}',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A839055-70C7-423D-A6F2-E714EA4502DB\\",\\n  \\"DataResult\\": {\\n    \\"PageNumber\\": \\"1\\",\\n    \\"PageSize\\": \\"10\\",\\n    \\"TotalCount\\": \\"1\\",\\n    \\"JobAttemptList\\": [\\n      {\\n        \\"Status\\": \\"success\\",\\n        \\"DurationTime\\": \\"00:01:12\\",\\n        \\"TerminatedTime\\": \\"2021-05-27 23:23:20\\",\\n        \\"DurationTimeValue\\": \\"72000\\",\\n        \\"CreateTime\\": \\"2021-05-27 23:22:08\\",\\n        \\"CreateTimeValue\\": \\"1622128928000\\",\\n        \\"SparkUI\\": \\"xxx\\",\\n        \\"JobAttemptId\\": \\"j202105272322hangzhou5d64f1560000128-0001\\",\\n        \\"JobName\\": \\"xxx\\",\\n        \\"JobId\\": \\"j202105272322hangzhou5d64f1560000128\\",\\n        \\"TerminatedTimeValue\\": \\"1622129000000\\",\\n        \\"VcName\\": \\"release-test\\",\\n        \\"Detail\\": \\"{\\\\\\"xxx\\\\\\":\\\\\\"xxx\\\\\\"}\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DataResult>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <JobAttemptList>\\n        <VcName>release-test</VcName>\\n        <Status>success</Status>\\n        <JobAttemptId>j202105272322hangzhou5d64f1560000128-0001</JobAttemptId>\\n        <TerminatedTime>2021-05-27 23:23:20</TerminatedTime>\\n        <SparkUI>xxx</SparkUI>\\n        <DurationTimeValue>72000</DurationTimeValue>\\n        <CreateTime>2021-05-27 23:22:08</CreateTime>\\n        <JobName>xxx</JobName>\\n        <TerminatedTimeValue>1622129000000</TerminatedTimeValue>\\n        <JobId>j202105272322hangzhou5d64f1560000128</JobId>\\n        <Detail>{\\"xxx\\":\\"xxx\\"}</Detail>\\n        <CreateTimeValue>1622128928000</CreateTimeValue>\\n        <DurationTime>00:01:12</DurationTime>\\n    </JobAttemptList>\\n</DataResult>\\n<RequestId>4A839055-70C7-423D-A6F2-E714EA4502DB</RequestId>","errorExample":""}]',
            'title' => '获取 Spark 作业记录列表',
            'summary' => '获取一个Job对应的所有JobAttempt信息。',
            'requestParamsDescription' => ' Condition目前支持下列两个参数'."\n"
                ."\n"
                .'- status:  starting、running、unknown、success、dead、killed'."\n"
                .'- createTime: 格式为 yyyy-mm-dd HH:mm:ss，代表筛选指定时间之后提交的作业，指定该参数的时候，同时需要指定timeZone'."\n"
                .'- timeZone: 例如 Asia/Shanghai',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'openanalytics.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'openanalytics.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'openanalytics.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'openanalytics.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'openanalytics.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'openanalytics.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'openanalytics.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'datalakeanalytics.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'openanalytics.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'datalakeanalytics.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'openanalytics.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'openanalytics.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'datalakeanalytics.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'datalakeanalytics.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'openanalytics.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'openanalytics.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'openanalytics.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'openanalytics.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'openanalytics.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'openanalytics.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'openanalytics.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'openanalytics.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'openanalytics.ap-northeast-1.aliyuncs.com',
        ],
    ],
];
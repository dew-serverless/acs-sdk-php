<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'paiAutoML',
        'version' => '2022-08-28',
    ],
    'directories' => [
        [
            'id' => 190161,
            'title' => 'HPO',
            'type' => 'directory',
            'children' => [
                'CreateHpoExperiment',
                'ListHpoExperiments',
                'GetHpoExperiment',
                'UpdateHpoExperiment',
                'StopHpoExperiment',
                'DeleteHpoExperiment',
                'ListHpoExperimentLogs',
                'ListHpoTrials',
                'GetHpoTrial',
                'StopHpoTrials',
                'RestartHpoTrials',
                'ListHpoTrialLogNames',
                'ListHpoTrialLogs',
                'ListHpoTrialCommands',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AutofeExperimentConfiguration' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'oss_config' => [
                        'title' => 'oss_config',
                        'type' => 'object',
                        'properties' => [
                            'oss_bucket' => [
                                'title' => 'oss_bucket',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'autofe-service',
                            ],
                            'oss_access_id' => [
                                'title' => 'oss_access_id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_access_key' => [
                                'title' => 'oss_access_key',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_role_arn' => [
                                'title' => 'oss_role_arn',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_endpoint' => [
                                'title' => 'oss_endpoint',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'oss-cn-beijing.aliyuncs.com',
                            ],
                        ],
                        'required' => true,
                    ],
                    'odps_config' => [
                        'title' => 'odps_config',
                        'type' => 'object',
                        'properties' => [
                            'odps_region_id' => [
                                'title' => 'odps_region_id',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'cn-beijing',
                            ],
                            'odps_project_name' => [
                                'title' => 'odps_project_name',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'odps_endpoint' => [
                                'title' => 'odps_endpoint',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'http://service.cn-beijing.maxcompute.aliyun.com/api',
                            ],
                            'odps_access_id' => [
                                'title' => 'odps_access_id',
                                'type' => 'string',
                            ],
                            'odps_access_key' => [
                                'title' => 'odps_access_key',
                                'type' => 'string',
                            ],
                            'odps_role_arn' => [
                                'title' => 'odps_role_arn',
                                'type' => 'string',
                            ],
                        ],
                        'required' => true,
                    ],
                    'yml_config' => [
                        'title' => 'yml_config',
                        'type' => 'object',
                        'properties' => [
                            'workspace_name' => [
                                'title' => 'workspace_name',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'output_config_oss_dir' => [
                                'title' => 'output_config_oss_dir',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'oss://bucket_name/',
                            ],
                            'label' => [
                                'title' => 'label',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'label',
                            ],
                            'data_source' => [
                                'title' => 'data_source',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'odps_table_name',
                            ],
                            'data_type' => [
                                'title' => 'data_type',
                                'type' => 'string',
                                'example' => 'odps',
                            ],
                            'aggregate_only' => [
                                'title' => 'aggregate_only',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'reuse_results' => [
                                'title' => 'reuse_results',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'workers' => [
                                'title' => 'workers',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'memory' => [
                                'title' => 'memory',
                                'type' => 'string',
                                'example' => '4000',
                            ],
                            'cpu' => [
                                'title' => 'cpu',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'debug_mode' => [
                                'title' => 'debug_mode',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'action' => [
                                'title' => 'action',
                                'type' => 'string',
                                'example' => 'train',
                            ],
                            'sample_size' => [
                                'title' => 'sample_size',
                                'type' => 'string',
                                'example' => '5000000',
                            ],
                            'analyze_exp_id' => [
                                'title' => 'analyze_exp_id',
                                'type' => 'string',
                            ],
                            'data_partition' => [
                                'title' => 'data_partition',
                                'type' => 'string',
                            ],
                            'exclude_columns' => [
                                'title' => 'exclude_columns',
                                'type' => 'string',
                            ],
                            'feature_selection' => [
                                'title' => 'feature_selection',
                                'type' => 'string',
                            ],
                            'selection_exp_id' => [
                                'title' => 'selection_exp_id',
                                'type' => 'string',
                            ],
                            'pipeline_exp_id' => [
                                'title' => 'pipeline_exp_id',
                                'type' => 'string',
                            ],
                            'sample_ratio' => [
                                'title' => 'sample_ratio',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'filter_thresh' => [
                                'title' => 'filter_thresh',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'skip_select' => [
                                'title' => 'skip_select',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'iv_thresh' => [
                                'title' => 'iv_thresh',
                                'type' => 'string',
                                'example' => '0.02',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'HpoExperimentConfig' => [
                'title' => 'A short description of struct',
                'description' => 'CreateHpoExperiment API的入参',
                'type' => 'object',
                'properties' => [
                    'params_config' => [
                        'title' => 'params_config',
                        'description' => 'params_config',
                        'type' => 'object',
                        'properties' => [
                            'params_src_dst_filepath' => [
                                'title' => 'params_src_dst_filepath',
                                'description' => '参数配置的源头路径和最终输出路径',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'src和dst路径字符串，用逗号隔开。',
                                    'type' => 'string',
                                    'example' => './local/path/foo.config,oss://bucket/remote/path/bar.config',
                                ],
                                'example' => 'src_path,dst_file_path',
                            ],
                        ],
                    ],
                    'platform_config' => [
                        'title' => 'platform_config',
                        'description' => 'platform_config',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => 'name of the computation platform',
                                'description' => '后台计算平台的名称',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DLC, MaxCompute,paiflow, etc',
                            ],
                            'cmd' => [
                                'title' => 'a list of commands to be executed',
                                'description' => '在后台计算平台上需要执行的命令列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '具体的命令行',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'pai -name kmeans -project foo -Dseed 1',
                                ],
                                'required' => true,
                            ],
                            'resume' => [
                                'title' => 'resume',
                                'description' => '是否启用resume功能',
                                'type' => 'string',
                                'example' => '1表示启用。不填写不启用',
                            ],
                        ],
                        'required' => true,
                    ],
                    'metric_config' => [
                        'title' => 'metric_config',
                        'description' => 'metric_config',
                        'type' => 'object',
                        'properties' => [
                            'metric_type' => [
                                'title' => 'metric_type',
                                'description' => 'metric_type',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'table, summary, stdout，或者json',
                            ],
                            'metric_source' => [
                                'title' => 'metric_source',
                                'description' => 'metric_source',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'metric来源',
                                    'type' => 'string',
                                    'example' => '可以是mc select语句，本地路径，oss路径，hdfs路径等',
                                ],
                                'required' => true,
                            ],
                            'final_mode' => [
                                'title' => 'final_mode',
                                'description' => 'final_mode',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'final, best, avg',
                            ],
                            'metric_dict' => [
                                'title' => 'metric_dict',
                                'description' => 'json字符串',
                                'type' => 'object',
                                'required' => true,
                                'example' => '{\'auc\':0.25, \'recall\':0.5, \'precision\':0.25}',
                            ],
                            'source_list_final_mode' => [
                                'title' => 'source_list_final_mode',
                                'description' => 'source_list_final_mode',
                                'type' => 'string',
                                'example' => 'avg',
                            ],
                        ],
                        'required' => true,
                    ],
                    'oss_config' => [
                        'title' => 'oss_config',
                        'description' => 'oss_config',
                        'type' => 'object',
                        'properties' => [
                            'endpoint' => [
                                'title' => 'endpoint',
                                'description' => 'endpoint',
                                'type' => 'string',
                                'example' => 'http://oss-cn-beijing.aliyuncs.com',
                            ],
                            'accessKeyID' => [
                                'title' => 'accessKeyID',
                                'description' => 'accessKeyID',
                                'type' => 'string',
                                'example' => 'ak字符串',
                            ],
                            'accessKeySecret' => [
                                'title' => 'accessKeySecret',
                                'description' => 'accessKeySecret',
                                'type' => 'string',
                                'example' => 'sk字符串',
                            ],
                            'role_arn' => [
                                'title' => 'role_arn',
                                'description' => 'role_arn',
                                'type' => 'string',
                                'example' => 'acs:ram::1234567890123:role/aliyunserviceroleforfoo',
                            ],
                        ],
                    ],
                    'odps_config' => [
                        'title' => 'odps_config',
                        'description' => 'odps_config',
                        'type' => 'object',
                        'properties' => [
                            'access_id' => [
                                'title' => 'access_id',
                                'description' => 'access_id',
                                'type' => 'string',
                                'example' => 'ak字符串',
                            ],
                            'access_key' => [
                                'title' => 'access_key',
                                'description' => 'access_key',
                                'type' => 'string',
                                'example' => 'sk字符串',
                            ],
                            'project_name' => [
                                'title' => 'project_name',
                                'description' => 'maxcompute 项目名称',
                                'type' => 'string',
                                'example' => 'my_project_x',
                            ],
                            'end_point' => [
                                'title' => 'end_point',
                                'description' => 'end_point',
                                'type' => 'string',
                                'example' => 'http://service.cn-beijing.maxcompute.aliyun.com/api',
                            ],
                            'log_view_host' => [
                                'title' => 'log_view_host',
                                'description' => 'log_view_host',
                                'type' => 'string',
                                'example' => 'http://logview.odps.aliyun.com',
                            ],
                            'region' => [
                                'title' => 'region',
                                'description' => 'region',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'role_arn' => [
                                'title' => 'role_arn',
                                'description' => 'role_arn',
                                'type' => 'string',
                                'example' => 'acs:ram::1234567890123:role/aliyunserviceroleforfoo',
                            ],
                        ],
                    ],
                    'ts_config' => [
                        'title' => 'ts_config',
                        'description' => 'ts_config',
                        'type' => 'object',
                        'properties' => [
                            'access_key_id' => [
                                'title' => 'access_key_id',
                                'description' => 'access_key_id',
                                'type' => 'string',
                                'example' => 'ak字符串',
                            ],
                            'access_key_secret' => [
                                'title' => 'access_key_secret',
                                'description' => 'access_key_secret',
                                'type' => 'string',
                                'example' => 'sk字符串',
                            ],
                            'region_id' => [
                                'title' => 'region_id',
                                'description' => 'region_id',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                            ],
                            'endpoint' => [
                                'title' => 'endpoint',
                                'description' => 'endpoint',
                                'type' => 'string',
                                'example' => 'pai.cn-shanghai.aliyuncs.com',
                            ],
                        ],
                    ],
                    'paiflow_config' => [
                        'title' => 'paiflow_config',
                        'description' => 'paiflow_config',
                        'type' => 'object',
                        'properties' => [
                            'access_key_id' => [
                                'title' => 'access_key_id',
                                'description' => 'access_key_id',
                                'type' => 'string',
                                'example' => 'ak字符串',
                            ],
                            'access_key_secret' => [
                                'title' => 'access_key_secret',
                                'description' => 'access_key_secret',
                                'type' => 'string',
                                'example' => 'sk字符串',
                            ],
                            'region_id' => [
                                'title' => 'region_id',
                                'description' => 'region_id',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'workspace_id' => [
                                'title' => 'workspace_id',
                                'description' => 'workspace_id',
                                'type' => 'string',
                                'example' => '12345',
                            ],
                        ],
                    ],
                    'yml_config' => [
                        'title' => 'yml_config',
                        'description' => 'yml_config',
                        'type' => 'object',
                        'properties' => [
                            'trial_concurrency' => [
                                'title' => 'trialConcurrency',
                                'description' => '最大的trial并发数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'max_trial_number' => [
                                'title' => 'maxTrialNumber',
                                'description' => '一个实验最多可运行的trial数量。实验可能在还没运行到这么多trials时就结束了。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'experiment_name' => [
                                'title' => 'experiment_name',
                                'description' => 'experiment_name',
                                'type' => 'string',
                                'example' => 'my_hpo_exp_3',
                            ],
                            'tuner' => [
                                'title' => 'tuner',
                                'description' => 'tuner',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => 'name',
                                        'description' => 'name',
                                        'type' => 'string',
                                        'example' => 'TPE',
                                    ],
                                    'class_args' => [
                                        'title' => 'class_args',
                                        'description' => 'class_args',
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                            'debug' => [
                                'title' => 'debug',
                                'description' => 'debug开启标记',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'log_level' => [
                                'title' => 'log_level',
                                'description' => 'log_level',
                                'type' => 'string',
                                'example' => 'debug',
                            ],
                            'assessor' => [
                                'title' => 'assessor',
                                'description' => 'assessor',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => 'name',
                                        'description' => 'assessor名称',
                                        'type' => 'string',
                                        'example' => 'PAIAssessor',
                                    ],
                                    'class_args' => [
                                        'title' => 'class_args',
                                        'description' => 'class_args',
                                        'type' => 'object',
                                        'properties' => [
                                            'proportion' => [
                                                'title' => 'proportion',
                                                'description' => 'proportion',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '0.5',
                                            ],
                                            'start_step' => [
                                                'title' => 'start_step',
                                                'description' => 'start_step',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'moving_avg' => [
                                                'title' => 'moving_avg',
                                                'description' => 'moving_avg',
                                                'type' => 'string',
                                                'example' => 'true',
                                            ],
                                            'optimize_mode' => [
                                                'title' => 'optimize_mode',
                                                'description' => 'optimize_mode',
                                                'type' => 'string',
                                                'example' => 'maximize',
                                            ],
                                            'earlystop' => [
                                                'title' => 'earlystop',
                                                'description' => 'earlystop',
                                                'type' => 'boolean',
                                                'example' => 'True, False',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'search_space' => [
                        'title' => 'search_space',
                        'description' => 'search_space',
                        'type' => 'object',
                        'example' => '{'."\n"
                            .'    "${tree_count}":{"_type":"choice","_value":[5,10,3]},'."\n"
                            .'    "${max_depth}":{"_type":"randint","_value":[3,6]}'."\n"
                            .'}',
                    ],
                    'k8s_config' => [
                        'title' => 'k8s_config',
                        'description' => '不需要配置',
                        'type' => 'object',
                        'properties' => [
                            'nni_container_requested_memory' => [
                                'title' => 'nni_container_requested_memory',
                                'description' => 'nni_container_requested_memory',
                                'type' => 'string',
                                'example' => '不需要配置',
                            ],
                            'nni_container_requested_cpu' => [
                                'title' => 'nni_container_requested_cpu',
                                'description' => 'nni_container_requested_cpu',
                                'type' => 'string',
                                'example' => '不需要配置',
                            ],
                            'nni_container_memory_limit' => [
                                'title' => 'nni_container_memory_limit',
                                'description' => 'nni_container_memory_limit',
                                'type' => 'string',
                                'example' => '不需要配置',
                            ],
                            'nni_container_cpu_limit' => [
                                'title' => 'nni_container_cpu_limit',
                                'description' => 'nni_container_cpu_limit',
                                'type' => 'string',
                                'example' => '不需要配置',
                            ],
                        ],
                    ],
                    'dlc_config' => [
                        'title' => 'dlc_config',
                        'description' => 'dlc_config',
                        'type' => 'object',
                        'properties' => [
                            'access_id' => [
                                'title' => 'access_id',
                                'description' => 'access_id',
                                'type' => 'string',
                                'example' => 'ak字符串',
                            ],
                            'access_key' => [
                                'title' => 'access_key',
                                'description' => 'access_key',
                                'type' => 'string',
                                'example' => 'sk字符串',
                            ],
                            'endpoint' => [
                                'title' => 'endpoint',
                                'description' => 'endpoint',
                                'type' => 'string',
                                'example' => 'pai-dlc.cn-shanghai.aliyuncs.com',
                            ],
                            'region' => [
                                'title' => 'region',
                                'description' => 'region',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                            'protocol' => [
                                'title' => 'protocol',
                                'description' => 'protocol',
                                'type' => 'string',
                                'example' => 'https',
                            ],
                        ],
                    ],
                    'schedule_config' => [
                        'title' => 'schedule_config',
                        'description' => 'schedule_config',
                        'type' => 'object',
                        'properties' => [
                            'day' => [
                                'title' => 'day',
                                'description' => 'day',
                                'type' => 'string',
                                'example' => 'everyday',
                            ],
                            'start_time' => [
                                'title' => 'start_time',
                                'description' => 'start_time',
                                'type' => 'string',
                                'example' => '11:10',
                            ],
                            'end_time' => [
                                'title' => 'end_time',
                                'description' => 'end_time',
                                'type' => 'string',
                                'example' => '23:56',
                            ],
                        ],
                    ],
                    'monitor_config' => [
                        'title' => 'monitor_config',
                        'description' => 'monitor_config',
                        'type' => 'object',
                        'properties' => [
                            'url' => [
                                'title' => 'url',
                                'description' => 'url',
                                'type' => 'string',
                                'example' => 'https://oapi.dingtalk.com/robot/send?access_token=${UID}',
                            ],
                            'keyword' => [
                                'title' => 'keyword',
                                'description' => 'keyword',
                                'type' => 'string',
                                'example' => 'monitor',
                            ],
                            'at_mobiles' => [
                                'title' => 'at_mobiles',
                                'description' => 'at_mobiles',
                                'type' => 'string',
                                'example' => '[1472583690]',
                            ],
                            'at_user_ids' => [
                                'title' => 'at_user_ids',
                                'description' => 'at_user_ids',
                                'type' => 'string',
                                'example' => '[1234567890]',
                            ],
                            'is_at_all' => [
                                'title' => 'is_at_all',
                                'description' => 'is_at_all',
                                'type' => 'string',
                                'example' => 'False',
                            ],
                        ],
                    ],
                    'output_config' => [
                        'title' => 'output_config',
                        'description' => 'output_config',
                        'type' => 'object',
                        'properties' => [
                            'model_path' => [
                                'title' => 'model_path',
                                'description' => 'model_path',
                                'type' => 'string',
                                'example' => 'oss://bucket/foo/bar/model/model_${exp_id}_${trial_id}',
                            ],
                            'summary_path' => [
                                'title' => 'summary_path',
                                'description' => 'summary_path',
                                'type' => 'string',
                                'example' => 'oss://bucket/foo/bar/model_${exp_id}_${trial_id}/',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateHpoExperiment' => [
            'summary' => '提交实验配置信息，创建一个HPO实验。',
            'path' => '/api/automl/v1/hpo/experiment',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '162681',
                'abilityTreeNodes' => [
                    'FEATURElearnVYA4L9',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体。',
                        'type' => 'object',
                        'properties' => [
                            'HpoExperimentConfiguration' => [
                                'description' => 'HPO实验配置参数结构体。',
                                'required' => false,
                                '$ref' => '#/components/schemas/HpoExperimentConfig',
                            ],
                            'Name' => [
                                'description' => '实验名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'my experiment x',
                            ],
                            'WorkspaceId' => [
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                            'Description' => [
                                'description' => '实验描述信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is an AutoML HPO experiment.',
                            ],
                            'Accessibility' => [
                                'description' => '代码配置的可见性，取值如下。'."\n"
                                    .'- PUBLIC：在此工作空间中，对所有人可见。'."\n"
                                    .'- PRIVATE：在此工作空间中，仅对您和管理员可见。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PRIVATE',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'ExperimentId' => [
                                'title' => 'Id of the request',
                                'description' => 'HPO实验id',
                                'type' => 'string',
                                'example' => 'sORVEck',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_INPUT_PARAMS',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'RequestId' => [
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '自定义信息',
                                    'description' => '自定义key',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ExperimentId\\": \\"sORVEck\\",\\n  \\"Code\\": \\"INVALID_INPUT_PARAMS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"自定义信息\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建一个HPO实验',
        ],
        'ListHpoExperiments' => [
            'summary' => '查询符合条件的HPO实验信息',
            'path' => '/api/automl/v1/hpo/experiments',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实验名称关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '任意关键字',
                    ],
                ],
                [
                    'name' => 'Creator',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实验创建人的UserId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '266977839132045194',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'MinCreateTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最早的实验创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'yyyy-mm-dd hh:mm:ss或着yyyy-mm-dd，比如2023-03-31 10:29:30',
                    ],
                ],
                [
                    'name' => 'MaxCreateTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最晚的实验创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'yyyy-mm-dd hh:mm:ss或着yyyy-mm-dd，比如2023-03-31 10:29:30',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实验状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED, RUNNING, FINISHED, FAILED, EARLY_STOPPED, USER_CANCELED, SYS_CANCELED, WAITING, NO_MORE_TRIAL, UNKNOWN',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Accessibility',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间可见性，可能值为：'."\n"
                            .'- PRIVATE：在此工作空间中，仅对您和管理员可见。'."\n"
                            .'- PUBLIC：在此工作空间中，对所有人可见。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PRIVATE',
                    ],
                ],
                [
                    'name' => 'IncludeConfigData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '响应里是否包括实验配置数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'True或者False，默认False表示不包括',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'create_time, update_time, workspace_id, status, accessibility其中之一',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序顺序，取值如下，与SortBy一起使用。'."\n"
                            .'- DESC（默认值）：降序排列。'."\n"
                            .'- ASC：升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC或ASC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'title' => '响应状态。',
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_INPUT_PARAMS',
                            ],
                            'Message' => [
                                'title' => '响应错误信息。只在响应出错时被设置',
                                'description' => '响应错误信息。只在响应出错时被设置',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '额外的错误信息。只在响应出错时被设置。',
                                    'example' => '{}',
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '查询到的实验总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'Experiments' => [
                                'title' => '符合搜索条件的实验列表。',
                                'description' => '符合搜索条件的实验列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实验数据结构体',
                                    'type' => 'object',
                                    'properties' => [
                                        'ExperimentId' => [
                                            'title' => '实验id。',
                                            'description' => '实验id。',
                                            'type' => 'string',
                                            'example' => 'sORVEck',
                                        ],
                                        'Creator' => [
                                            'title' => '实验创建者的id。',
                                            'description' => '实验创建者的id。',
                                            'type' => 'string',
                                            'example' => '1049310008714189',
                                        ],
                                        'SearchSpace' => [
                                            'title' => '实验配置里的SearchSpace属性。',
                                            'description' => '实验配置里的SearchSpace属性。',
                                            'type' => 'string',
                                            'example' => '{\'foo\':\'bar\'}',
                                        ],
                                        'Name' => [
                                            'title' => '实验名称。',
                                            'description' => '实验名称。',
                                            'type' => 'string',
                                            'example' => 'my experiment x',
                                        ],
                                        'Status' => [
                                            'title' => '实验状态。',
                                            'description' => '实验状态。',
                                            'type' => 'string',
                                            'example' => 'CREATED, RUNNING, FINISHED, FAILED, EARLY_STOPPED, USER_CANCELED, WAITING, NO_MORE_TRIAL, UNKNOWN',
                                        ],
                                        'JobType' => [
                                            'description' => '实验类型。对于HPO实验，类型值始终是1.',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'ConfigIni' => [
                                            'description' => 'trial.ini配置内容。其中ak/sk等敏感数据如果存在，则会被API用星号替换实际数据内容。',
                                            'type' => 'string',
                                            'example' => '[odps_config]'."\n"
                                                .'key1 = value1'."\n"
                                                .'key2 = value2',
                                        ],
                                        'ConfigYml' => [
                                            'description' => 'exp.yml配置内容',
                                            'type' => 'string',
                                            'example' => 'experimentName: dlc_oss_mnist'."\n"
                                                .'experimentWorkingDirectory: ../expdir'."\n"
                                                .'searchSpaceFile: search_space.json'."\n"
                                                .'trialCommand: python3 -m hpo_tools.core.utils.run --config=./trial.ini'."\n"
                                                .'trialConcurrency: 1'."\n"
                                                .'maxTrialNumber: 4'."\n"
                                                .'tuner:'."\n"
                                                .'  name: TPE'."\n"
                                                .'  classArgs:'."\n"
                                                .'    optimize_mode: maximize'."\n"
                                                .'trainingService:'."\n"
                                                .'  platform: local'."\n"
                                                .'assessor:'."\n"
                                                .'  name: PAIAssessor'."\n"
                                                .'  classArgs:'."\n"
                                                .'    optimize_mode: maximize'."\n"
                                                .'    start_step: 2',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '实验创建时间。',
                                            'description' => '实验创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-31T10:29:30Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '实验数据最近更新时间。',
                                            'description' => '实验数据最近更新时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-27T00:55:54Z',
                                        ],
                                        'WorkspaceId' => [
                                            'description' => '工作空间id',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'Accessibility' => [
                                            'description' => '工作空间可见度。支持以下取值：'."\n"
                                                .'- PRIVATE（默认值）：表示工作空间内自己以及管理员可见。'."\n"
                                                .'- PUBLIC为：工作空间所有用户可见。',
                                            'type' => 'string',
                                            'example' => 'PUBLIC',
                                        ],
                                        'Description' => [
                                            'description' => '实验描述信息',
                                            'type' => 'string',
                                            'example' => 'description',
                                        ],
                                        'TrialCount' => [
                                            'description' => '该实验总的trial数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'TrialStatus' => [
                                            'description' => 'trial 状态和处于各个状态的trial的数量的map',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '3',
                                                'description' => 'FINISHED',
                                            ],
                                        ],
                                        'Deleted' => [
                                            'description' => '是否已经被删除',
                                            'type' => 'boolean',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_INPUT_PARAMS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"{}\\"\\n  },\\n  \\"TotalCount\\": 5,\\n  \\"Experiments\\": [\\n    {\\n      \\"ExperimentId\\": \\"sORVEck\\",\\n      \\"Creator\\": \\"1049310008714189\\",\\n      \\"SearchSpace\\": \\"{\'foo\':\'bar\'}\\",\\n      \\"Name\\": \\"my experiment x\\",\\n      \\"Status\\": \\"CREATED, RUNNING, FINISHED, FAILED, EARLY_STOPPED, USER_CANCELED, WAITING, NO_MORE_TRIAL, UNKNOWN\\",\\n      \\"JobType\\": \\"1\\",\\n      \\"ConfigIni\\": \\"[odps_config]\\\\nkey1 = value1\\\\nkey2 = value2\\",\\n      \\"ConfigYml\\": \\"experimentName: dlc_oss_mnist\\\\nexperimentWorkingDirectory: ../expdir\\\\nsearchSpaceFile: search_space.json\\\\ntrialCommand: python3 -m hpo_tools.core.utils.run --config=./trial.ini\\\\ntrialConcurrency: 1\\\\nmaxTrialNumber: 4\\\\ntuner:\\\\n  name: TPE\\\\n  classArgs:\\\\n    optimize_mode: maximize\\\\ntrainingService:\\\\n  platform: local\\\\nassessor:\\\\n  name: PAIAssessor\\\\n  classArgs:\\\\n    optimize_mode: maximize\\\\n    start_step: 2\\",\\n      \\"GmtCreateTime\\": \\"2023-03-31T10:29:30Z\\",\\n      \\"GmtModifiedTime\\": \\"2022-10-27T00:55:54Z\\",\\n      \\"WorkspaceId\\": \\"default\\",\\n      \\"Accessibility\\": \\"PUBLIC\\",\\n      \\"Description\\": \\"description\\",\\n      \\"TrialCount\\": 20,\\n      \\"TrialStatus\\": {\\n        \\"key\\": \\"3\\"\\n      },\\n      \\"Deleted\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '搜索符合条件的HPO实验',
        ],
        'GetHpoExperiment' => [
            'summary' => '获取一个HPO实验的信息，包括状态、配置、以及所属trials的状态等数据。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sX5O9Q8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_INPUT_PARAMS',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'example' => 'TBD',
                            ],
                            'ExperimentId' => [
                                'description' => 'HPO实验id',
                                'type' => 'string',
                                'example' => 'sX5O9Q8',
                            ],
                            'Creator' => [
                                'description' => '实验创建人的UserId',
                                'type' => 'string',
                                'example' => '123456789',
                            ],
                            'SearchSpace' => [
                                'description' => 'search_space.json配置内容',
                                'type' => 'string',
                                'example' => '{"${centerCount}":{"_type":"choice","_value":[2,3,4,5]},"${distanceType}":{"_type":"choice","_value":["euclidean","cosine","cityblock"]}}',
                            ],
                            'Name' => [
                                'description' => '实验名称',
                                'type' => 'string',
                                'example' => 'my_hpo_exp_1',
                            ],
                            'Status' => [
                                'description' => '实验状态',
                                'type' => 'string',
                                'example' => 'INVALID_USER_OR_EXP, SUCCESS, or EXECUTION_FAILURE',
                            ],
                            'JobType' => [
                                'description' => '实验类型。对于HPO实验，类型值始终是1.',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'ConfigIni' => [
                                'description' => 'trial.ini配置内容',
                                'type' => 'string',
                                'example' => '[odps_config]'."\n"
                                    .'access_id=foo'."\n"
                                    .'access_key=bar'."\n"
                                    .'end_point=http://service.odps.aliyun.com/api'."\n"
                                    .'log_view_host=http://logview.odps.aliyun.com'."\n"
                                    .'project_name=my_project',
                            ],
                            'ConfigYml' => [
                                'description' => 'exp.yml配置内容',
                                'type' => 'string',
                                'example' => 'assessor:'."\n"
                                    .'  classArgs:'."\n"
                                    .'    optimize_mode: maximize'."\n"
                                    .'    start_step: 1'."\n"
                                    .'  name: PAIAssessor'."\n"
                                    .'debug: true'."\n"
                                    .'experimentName: maxcompute_kmeans_monitor'."\n"
                                    .'experimentWorkingDirectory: ../expdir'."\n"
                                    .'logLevel: debug'."\n"
                                    .'maxTrialNumber: 10'."\n"
                                    .'searchSpaceFile: search_space.json'."\n"
                                    .'trainingService:'."\n"
                                    .'  platform: local'."\n"
                                    .'trialCommand: python3 -m hpo_tools.core.utils.run --config=./config.ini'."\n"
                                    .'trialConcurrency: 2'."\n"
                                    .'tuner:'."\n"
                                    .'  classArgs:'."\n"
                                    .'    optimize_mode: maximize'."\n"
                                    .'  name: TPE',
                            ],
                            'GmtCreateTime' => [
                                'description' => '实验创建时间。',
                                'type' => 'string',
                                'example' => '2024-01-01 08:30:11',
                            ],
                            'GmtModifiedTime' => [
                                'description' => '实验数据最近更新时间。',
                                'type' => 'string',
                                'example' => '2024-01-01 08:30:11',
                            ],
                            'WorkspaceId' => [
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'example' => '12345',
                            ],
                            'Accessibility' => [
                                'description' => '工作空间可见性，可能值为：'."\n"
                                    .'- PRIVATE：在此工作空间中，仅对您和管理员可见。'."\n"
                                    .'- PUBLIC：在此工作空间中，对所有人可见。',
                                'type' => 'string',
                                'example' => 'PRIVATE',
                            ],
                            'Description' => [
                                'description' => '实验描述信息',
                                'type' => 'string',
                                'example' => '我的实验',
                            ],
                            'TrialCount' => [
                                'description' => '实验已经产生的trial的数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'TrialStatus' => [
                                'description' => 'trail状态名称和数量',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => 'trial 状态和处于各个状态的trial的数量的map',
                                    'example' => '{‘FINISHED\':1, \'RUNNING\':2}',
                                ],
                            ],
                            'HpoExperimentConfiguration' => [
                                'description' => '实验配置信息',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "output_config": {'."\n"
                                    .'        "model_path": "bi_ps_${exp_id}_${trial_id}"'."\n"
                                    .'    },'."\n"
                                    .'    "platform_config": {'."\n"
                                    .'        "cmd": ['."\n"
                                    .'            "PAI -name ps_smart\\n    -project foo",'."\n"
                                    .'            "PAI -name prediction\\n    -project foo",'."\n"
                                    .'            "PAI -name evaluate -project foo",'."\n"
                                    .'            "INSERT OVERWRITE TABLE my_table;"'."\n"
                                    .'        ],'."\n"
                                    .'        "name": "MaxCompute"'."\n"
                                    .'    },'."\n"
                                    .'    "metric_config": {'."\n"
                                    .'        "metric_dict": {'."\n"
                                    .'            "recall": 0.5,'."\n"
                                    .'            "auc": 0.25,'."\n"
                                    .'            "precision": 0.25'."\n"
                                    .'        },'."\n"
                                    .'        "metric_source": ['."\n"
                                    .'            "select * from my_metrics where pt=\'${exp_id}_${trial_id}\';"'."\n"
                                    .'        ],'."\n"
                                    .'        "metric_type": "table",'."\n"
                                    .'        "final_mode": "best"'."\n"
                                    .'    },'."\n"
                                    .'    "odps_config": {'."\n"
                                    .'        "project_name": "my_project",'."\n"
                                    .'        "role_arn": "acs:ram::123456789:role/aliyunserviceroleforfoo",'."\n"
                                    .'        "region": "cn-shanghai",'."\n"
                                    .'        "end_point": "http://service.cn.maxcompute.aliyun-inc.com/api",'."\n"
                                    .'        "log_view_host": "http://logview.odps.aliyun.com"'."\n"
                                    .'    },'."\n"
                                    .'    "yml_config": {'."\n"
                                    .'        "max_trial_number": 5,'."\n"
                                    .'        "assessor": {'."\n"
                                    .'            "name": "PAIAssessor",'."\n"
                                    .'            "class_args": {'."\n"
                                    .'                "earlystop": true,'."\n"
                                    .'                "start_step": 5,'."\n"
                                    .'                "optimize_mode": "maximize"'."\n"
                                    .'            }'."\n"
                                    .'        },'."\n"
                                    .'        "experiment_name": "my_exp",'."\n"
                                    .'        "tuner": {'."\n"
                                    .'            "name": "TPE",'."\n"
                                    .'            "class_args": {'."\n"
                                    .'                "optimize_mode": "maximize"'."\n"
                                    .'            }'."\n"
                                    .'        },'."\n"
                                    .'        "trial_concurrency": 2'."\n"
                                    .'    },'."\n"
                                    .'    "search_space": {'."\n"
                                    .'        "${max_depth}": {'."\n"
                                    .'            "_type": "choice",'."\n"
                                    .'            "_value": ['."\n"
                                    .'                1,'."\n"
                                    .'                3,'."\n"
                                    .'                5'."\n"
                                    .'            ]'."\n"
                                    .'        },'."\n"
                                    .'        "${tree_count}": {'."\n"
                                    .'            "_value": ['."\n"
                                    .'                50,'."\n"
                                    .'                100,'."\n"
                                    .'                150'."\n"
                                    .'            ],'."\n"
                                    .'            "_type": "choice"'."\n"
                                    .'        }'."\n"
                                    .'    }'."\n"
                                    .'}',
                            ],
                            'Deleted' => [
                                'description' => '是否已经被删除',
                                'type' => 'boolean',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_INPUT_PARAMS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"ExperimentId\\": \\"sX5O9Q8\\",\\n  \\"Creator\\": \\"123456789\\",\\n  \\"SearchSpace\\": \\"{\\\\\\"${centerCount}\\\\\\":{\\\\\\"_type\\\\\\":\\\\\\"choice\\\\\\",\\\\\\"_value\\\\\\":[2,3,4,5]},\\\\\\"${distanceType}\\\\\\":{\\\\\\"_type\\\\\\":\\\\\\"choice\\\\\\",\\\\\\"_value\\\\\\":[\\\\\\"euclidean\\\\\\",\\\\\\"cosine\\\\\\",\\\\\\"cityblock\\\\\\"]}}\\",\\n  \\"Name\\": \\"my_hpo_exp_1\\",\\n  \\"Status\\": \\"INVALID_USER_OR_EXP, SUCCESS, or EXECUTION_FAILURE\\",\\n  \\"JobType\\": \\"1\\",\\n  \\"ConfigIni\\": \\"[odps_config]\\\\naccess_id=foo\\\\naccess_key=bar\\\\nend_point=http://service.odps.aliyun.com/api\\\\nlog_view_host=http://logview.odps.aliyun.com\\\\nproject_name=my_project\\",\\n  \\"ConfigYml\\": \\"assessor:\\\\n  classArgs:\\\\n    optimize_mode: maximize\\\\n    start_step: 1\\\\n  name: PAIAssessor\\\\ndebug: true\\\\nexperimentName: maxcompute_kmeans_monitor\\\\nexperimentWorkingDirectory: ../expdir\\\\nlogLevel: debug\\\\nmaxTrialNumber: 10\\\\nsearchSpaceFile: search_space.json\\\\ntrainingService:\\\\n  platform: local\\\\ntrialCommand: python3 -m hpo_tools.core.utils.run --config=./config.ini\\\\ntrialConcurrency: 2\\\\ntuner:\\\\n  classArgs:\\\\n    optimize_mode: maximize\\\\n  name: TPE\\",\\n  \\"GmtCreateTime\\": \\"2024-01-01 08:30:11\\",\\n  \\"GmtModifiedTime\\": \\"2024-01-01 08:30:11\\",\\n  \\"WorkspaceId\\": \\"12345\\",\\n  \\"Accessibility\\": \\"PRIVATE\\",\\n  \\"Description\\": \\"我的实验\\",\\n  \\"TrialCount\\": 3,\\n  \\"TrialStatus\\": {\\n    \\"key\\": \\"{‘FINISHED\':1, \'RUNNING\':2}\\"\\n  },\\n  \\"HpoExperimentConfiguration\\": {\\n    \\"output_config\\": {\\n      \\"model_path\\": \\"bi_ps_${exp_id}_${trial_id}\\"\\n    },\\n    \\"platform_config\\": {\\n      \\"cmd\\": [\\n        \\"PAI -name ps_smart\\\\n    -project foo\\",\\n        \\"PAI -name prediction\\\\n    -project foo\\",\\n        \\"PAI -name evaluate -project foo\\",\\n        \\"INSERT OVERWRITE TABLE my_table;\\"\\n      ],\\n      \\"name\\": \\"MaxCompute\\"\\n    },\\n    \\"metric_config\\": {\\n      \\"metric_dict\\": {\\n        \\"recall\\": 0.5,\\n        \\"auc\\": 0.25,\\n        \\"precision\\": 0.25\\n      },\\n      \\"metric_source\\": [\\n        \\"select * from my_metrics where pt=\'${exp_id}_${trial_id}\';\\"\\n      ],\\n      \\"metric_type\\": \\"table\\",\\n      \\"final_mode\\": \\"best\\"\\n    },\\n    \\"odps_config\\": {\\n      \\"project_name\\": \\"my_project\\",\\n      \\"role_arn\\": \\"acs:ram::123456789:role/aliyunserviceroleforfoo\\",\\n      \\"region\\": \\"cn-shanghai\\",\\n      \\"end_point\\": \\"http://service.cn.maxcompute.aliyun-inc.com/api\\",\\n      \\"log_view_host\\": \\"http://logview.odps.aliyun.com\\"\\n    },\\n    \\"yml_config\\": {\\n      \\"max_trial_number\\": 5,\\n      \\"assessor\\": {\\n        \\"name\\": \\"PAIAssessor\\",\\n        \\"class_args\\": {\\n          \\"earlystop\\": true,\\n          \\"start_step\\": 5,\\n          \\"optimize_mode\\": \\"maximize\\"\\n        }\\n      },\\n      \\"experiment_name\\": \\"my_exp\\",\\n      \\"tuner\\": {\\n        \\"name\\": \\"TPE\\",\\n        \\"class_args\\": {\\n          \\"optimize_mode\\": \\"maximize\\"\\n        }\\n      },\\n      \\"trial_concurrency\\": 2\\n    },\\n    \\"search_space\\": {\\n      \\"${max_depth}\\": {\\n        \\"_type\\": \\"choice\\",\\n        \\"_value\\": [\\n          1,\\n          3,\\n          5\\n        ]\\n      },\\n      \\"${tree_count}\\": {\\n        \\"_value\\": [\\n          50,\\n          100,\\n          150\\n        ],\\n        \\"_type\\": \\"choice\\"\\n      }\\n    }\\n  },\\n  \\"Deleted\\": true\\n}","type":"json"}]',
            'title' => '获取一个HPO实验的信息',
        ],
        'UpdateHpoExperiment' => [
            'summary' => '更新一个正在运行中的HPO实验的设置。更新成功后，该实验将按照新的设置继续执行。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/update',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体。',
                        'type' => 'object',
                        'properties' => [
                            'HpoExperimentConfiguration' => [
                                'description' => 'HPO实验配置参数结构体',
                                'required' => false,
                                '$ref' => '#/components/schemas/HpoExperimentConfig',
                            ],
                            'Description' => [
                                'description' => '实验描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is an AutoML HPO experiment.',
                            ],
                            'Accessibility' => [
                                'description' => '工作空间可见度，取值如下。'."\n"
                                    .'- PRIVATE：在此工作空间中，仅对您和管理员可见。'."\n"
                                    .'- PUBLIC：在此工作空间中，对所有人可见。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PRIVATE',
                            ],
                            'Name' => [
                                'description' => '实验名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'my experiment x',
                            ],
                            'WorkspaceId' => [
                                'description' => '工作空间ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12345',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {}\\n}","type":"json"}]',
            'title' => '更新HPO实验设置',
        ],
        'StopHpoExperiment' => [
            'summary' => '完全停止一个指定的AutoML HPO实验，包括停止该实验所属的trials，和这些trials所依赖的后台任务。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/stop',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '需要被停止的实验的id。',
                        'description' => '需要被停止的实验的id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'abcde',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'ExpId' => [
                                'title' => '实验id。',
                                'description' => '实验id。',
                                'type' => 'string',
                                'example' => 'abcde',
                            ],
                            'Code' => [
                                'title' => '响应状态。',
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_INPUT_PARAMS',
                            ],
                            'Message' => [
                                'title' => '响应错误信息。只在响应出错时被设置。',
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'RequestId' => [
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '071A904D-5A49-597F-9F69-81C7701D04AC',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'value',
                                    'description' => 'key',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ExpId\\": \\"abcde\\",\\n  \\"Code\\": \\"INVALID_INPUT_PARAMS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"RequestId\\": \\"071A904D-5A49-597F-9F69-81C7701D04AC\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"value\\"\\n  }\\n}","type":"json"}]',
            'title' => '停止一个指定的HPO实验',
        ],
        'DeleteHpoExperiment' => [
            'summary' => '删除一个HPO实验。删除后，实验和它的trials数据都不会再通过Get/List API返回。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/delete',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '实验ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP请求ID',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_USER_OR_EXP',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_USER_OR_EXP\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {}\\n}","type":"json"}]',
            'title' => '删除一个HPO实验',
        ],
        'ListHpoExperimentLogs' => [
            'summary' => '显示一个HPO实验指定log的内容。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/logs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'LogName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'log名称。目前支持‘nnimanager.log\'和\'dispatcher.log\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nnimanager.log',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。起始值：1。不填则返回log文件里所有内容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页包含的日志行数。不填则返回log文件里所有内容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '40',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '071A904D-5A49-597F-9F69-81C7701D04AC',
                            ],
                            'Code' => [
                                'description' => '返回状态码',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'TotalCount' => [
                                'description' => 'log文件的总行数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '467',
                            ],
                            'Logs' => [
                                'description' => '日志行内容',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志行内容',
                                    'type' => 'string',
                                    'example' => '[2024-03-07 18:29:29] INFO (LocalTrainingService) Run local machine training service.',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"071A904D-5A49-597F-9F69-81C7701D04AC\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {},\\n  \\"TotalCount\\": 467,\\n  \\"Logs\\": [\\n    \\"[2024-03-07 18:29:29] INFO (LocalTrainingService) Run local machine training service.\\"\\n  ]\\n}","type":"json"}]',
            'title' => '显示HPO实验一个指定log的内容',
        ],
        'ListHpoTrials' => [
            'summary' => '返回指定实验id的trial',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trials',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '1-based 结果页面序号。做为搜索实验的限制条件。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '本次读取的最大数据记录数量',
                        'description' => '当前查询的页大小（每页上显示的trials的个数）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FINAL_METRIC 或着 CREATE_TIME',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，对指定的排序字段进行升序或降序。默认ASC。'."\n"
                            .'- ASC'."\n"
                            .'升序'."\n"
                            .'- DESC'."\n"
                            .'降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_USER_OR_EXP',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'Trials' => [
                                'description' => 'trial数据结构体列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Trial 结构体',
                                    'type' => 'object',
                                    'properties' => [
                                        'TrialId' => [
                                            'description' => 'trial的id',
                                            'type' => 'string',
                                            'example' => 'asdf',
                                        ],
                                        'ExperimentId' => [
                                            'description' => 'HPO实验id',
                                            'type' => 'string',
                                            'example' => 'abcde',
                                        ],
                                        'ParameterId' => [
                                            'description' => 'trail所对应的后台任务给这个trial分配的一个id',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '未使用。空字符串',
                                        ],
                                        'Hyperparam' => [
                                            'description' => 'trial配置的超参(hyper parameter)值',
                                            'type' => 'string',
                                            'example' => '{"${centerCount}": 5, "${distanceType}": "cityblock"}',
                                        ],
                                        'Status' => [
                                            'description' => 'Trial 状态',
                                            'type' => 'string',
                                            'example' => 'UNKNOWN, RUNNING, WAITING, EARLY_STOPPED, SUCCEEDED, FAILED, USER_CANCELED, SYS_CANCELED',
                                        ],
                                        'Model' => [
                                            'description' => '这个Trial 所对应的后台任务生成的模型的存储位置。',
                                            'type' => 'string',
                                            'example' => ' pai_kmeans_test_output_model_sy9zkpvc_zleam',
                                        ],
                                        'MetricName' => [
                                            'description' => '未填充。不在使用中。',
                                            'type' => 'string',
                                            'example' => '空字符串',
                                        ],
                                        'Metric' => [
                                            'description' => 'trial计算metric的结果数组。包括一个或多个计算过程中产生的临时值，和一个最终值。',
                                            'type' => 'string',
                                            'example' => '[{"default":9999.2,"type":"PERIODICAL","vrc":9999.2}, {"default":9999.2,"type":"FINAL","vrc":9999.2}',
                                        ],
                                        'JobMeta' => [
                                            'description' => 'trial所对应的后台任务的meta信息。json string格式。',
                                            'type' => 'string',
                                            'example' => '{"nni_trial_id": "ZLeAM", "nni_exp_id": "sy9zkpvc", "nni_trial_sequence_id": 0}',
                                        ],
                                        'UserScore' => [
                                            'description' => '未填充。不在使用中。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '空字符串',
                                        ],
                                        'UserComment' => [
                                            'description' => '未填充。不在使用中。',
                                            'type' => 'string',
                                            'example' => '空字符串',
                                        ],
                                        'FinalMetric' => [
                                            'description' => 'trial成功结束后，后台任务计算出的最终的metric值。来自metric数组里的FINAL 类型的metric项里的default key所对应的值。',
                                            'type' => 'string',
                                            'example' => '9999.2',
                                        ],
                                        'GmtCreateTime' => [
                                            'description' => 'Trial创建时间 UTC time。',
                                            'type' => 'string',
                                            'example' => '2023-06-07T13:17:13Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'description' => 'Trial 最后更新时间 UTC time',
                                            'type' => 'string',
                                            'example' => '2023-02-27T07:01:12Z',
                                        ],
                                    ],
                                    'example' => '{"key": "value"}',
                                ],
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => 'key',
                                    'example' => 'value',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_USER_OR_EXP\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"TotalCount\\": 5,\\n  \\"Trials\\": [\\n    {\\n      \\"TrialId\\": \\"asdf\\",\\n      \\"ExperimentId\\": \\"abcde\\",\\n      \\"ParameterId\\": 0,\\n      \\"Hyperparam\\": \\"{\\\\\\"${centerCount}\\\\\\": 5, \\\\\\"${distanceType}\\\\\\": \\\\\\"cityblock\\\\\\"}\\",\\n      \\"Status\\": \\"UNKNOWN, RUNNING, WAITING, EARLY_STOPPED, SUCCEEDED, FAILED, USER_CANCELED, SYS_CANCELED\\",\\n      \\"Model\\": \\" pai_kmeans_test_output_model_sy9zkpvc_zleam\\",\\n      \\"MetricName\\": \\"空字符串\\",\\n      \\"Metric\\": \\"[{\\\\\\"default\\\\\\":9999.2,\\\\\\"type\\\\\\":\\\\\\"PERIODICAL\\\\\\",\\\\\\"vrc\\\\\\":9999.2}, {\\\\\\"default\\\\\\":9999.2,\\\\\\"type\\\\\\":\\\\\\"FINAL\\\\\\",\\\\\\"vrc\\\\\\":9999.2}\\",\\n      \\"JobMeta\\": \\"{\\\\\\"nni_trial_id\\\\\\": \\\\\\"ZLeAM\\\\\\", \\\\\\"nni_exp_id\\\\\\": \\\\\\"sy9zkpvc\\\\\\", \\\\\\"nni_trial_sequence_id\\\\\\": 0}\\",\\n      \\"UserScore\\": 0,\\n      \\"UserComment\\": \\"空字符串\\",\\n      \\"FinalMetric\\": \\"9999.2\\",\\n      \\"GmtCreateTime\\": \\"2023-06-07T13:17:13Z\\",\\n      \\"GmtModifiedTime\\": \\"2023-02-27T07:01:12Z\\"\\n    }\\n  ],\\n  \\"Detail\\": {\\n    \\"key\\": \\"value\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取一个HPO实验里的多个trials信息',
        ],
        'GetHpoTrial' => [
            'summary' => '获取一个HPO实验里一个指定Trial的信息',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验id。',
                        'description' => '实验id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'trial id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mf99W4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'POP 请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'title' => '响应状态。',
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_INPUT_PARAMS',
                            ],
                            'Message' => [
                                'title' => '响应错误信息。只在响应出错时被设置。',
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '请求出错的详细信息',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '{}',
                                    'description' => '额外的错误信息。只在响应出错时被设置。',
                                ],
                            ],
                            'TrialId' => [
                                'description' => 'trial的id',
                                'type' => 'string',
                                'example' => 'mf99W4',
                            ],
                            'ExperimentId' => [
                                'description' => 'HPO实验id',
                                'type' => 'string',
                                'example' => 'abcde',
                            ],
                            'Model' => [
                                'description' => '这个Trial 所对应的后台任务生成的模型的存储位置。',
                                'type' => 'string',
                                'example' => 'model_table_name_foo',
                            ],
                            'Hyperparam' => [
                                'description' => 'trial配置的超参(hyper parameter)值',
                                'type' => 'string',
                                'example' => '{"${centerCount}": 5, "${distanceType}": "cosine"}',
                            ],
                            'ParameterId' => [
                                'description' => 'trail所对应的后台任务给这个trial分配的一个id',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Status' => [
                                'description' => 'Trial状态',
                                'type' => 'string',
                                'example' => 'FINISHED, FAILED, USER_CANCELED',
                            ],
                            'MetricName' => [
                                'description' => 'metric名称。未填充，不在使用中',
                                'type' => 'string',
                                'example' => '空字符串',
                            ],
                            'Metric' => [
                                'description' => 'trial计算metric的结果数组。包括一个或多个计算过程中产生的临时值，和一个最终值。',
                                'type' => 'string',
                                'example' => '[{"default":0.087745,"val_loss=([0-9\\\\\\\\.]+)":0.087745},'."\n"
                                    .'{"default":1.085841,"val_loss=([0-9\\\\\\\\.]+)":0.085841},'."\n"
                                    .'{"default":0.087745,"type":"FINAL","val_loss=([0-9\\\\\\\\.]+)":0.087745}]',
                            ],
                            'JobMeta' => [
                                'description' => 'trial所对应的后台任务的meta信息。json string格式。',
                                'type' => 'string',
                                'example' => '{"nni_trial_id": "asdf", "nni_exp_id": "abcde", "nni_trial_sequence_id": 2}',
                            ],
                            'UserScore' => [
                                'description' => '未使用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'UserComment' => [
                                'description' => '未使用',
                                'type' => 'string',
                                'example' => '空字符串',
                            ],
                            'FinalMetric' => [
                                'description' => 'trial成功结束后，后台任务计算出的最终的metric值。来自metric数组里的FINAL 类型的metric项里的default key所对应的值。',
                                'type' => 'string',
                                'example' => '{"default":0.087745,"type":"FINAL","val_loss=([0-9\\\\\\\\.]+)":0.087745}',
                            ],
                            'GmtCreateTime' => [
                                'description' => 'Trial创建时间 UTC time。',
                                'type' => 'string',
                                'example' => '2024-01-02 12:34:56',
                            ],
                            'GmtModifiedTime' => [
                                'description' => 'Trial 最后更新时间 UTC time',
                                'type' => 'string',
                                'example' => '2024-01-02 21:32:56',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_INPUT_PARAMS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"{}\\"\\n  },\\n  \\"TrialId\\": \\"mf99W4\\",\\n  \\"ExperimentId\\": \\"abcde\\",\\n  \\"Model\\": \\"model_table_name_foo\\",\\n  \\"Hyperparam\\": \\"{\\\\\\"${centerCount}\\\\\\": 5, \\\\\\"${distanceType}\\\\\\": \\\\\\"cosine\\\\\\"}\\",\\n  \\"ParameterId\\": 0,\\n  \\"Status\\": \\"FINISHED, FAILED, USER_CANCELED\\",\\n  \\"MetricName\\": \\"空字符串\\",\\n  \\"Metric\\": \\"[{\\\\\\"default\\\\\\":0.087745,\\\\\\"val_loss=([0-9\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.]+)\\\\\\":0.087745},\\\\n{\\\\\\"default\\\\\\":1.085841,\\\\\\"val_loss=([0-9\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.]+)\\\\\\":0.085841},\\\\n{\\\\\\"default\\\\\\":0.087745,\\\\\\"type\\\\\\":\\\\\\"FINAL\\\\\\",\\\\\\"val_loss=([0-9\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.]+)\\\\\\":0.087745}]\\",\\n  \\"JobMeta\\": \\"{\\\\\\"nni_trial_id\\\\\\": \\\\\\"asdf\\\\\\", \\\\\\"nni_exp_id\\\\\\": \\\\\\"abcde\\\\\\", \\\\\\"nni_trial_sequence_id\\\\\\": 2}\\",\\n  \\"UserScore\\": 0,\\n  \\"UserComment\\": \\"空字符串\\",\\n  \\"FinalMetric\\": \\"{\\\\\\"default\\\\\\":0.087745,\\\\\\"type\\\\\\":\\\\\\"FINAL\\\\\\",\\\\\\"val_loss=([0-9\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.]+)\\\\\\":0.087745}\\",\\n  \\"GmtCreateTime\\": \\"2024-01-02 12:34:56\\",\\n  \\"GmtModifiedTime\\": \\"2024-01-02 21:32:56\\"\\n}","type":"json"}]',
            'title' => '获取一个HPO实验里一个指定Trial的信息',
        ],
        'StopHpoTrials' => [
            'summary' => '停止一个HPO实验里指定的trials，以及这些trials对应的后台任务。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/stop_trials',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验id。',
                        'description' => '实验id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body参数。',
                        'type' => 'object',
                        'properties' => [
                            'TrialIds' => [
                                'title' => '需要被停止的trial ids。不填则不会有任何trial被停止。',
                                'description' => '需要被停止的trial ids。不填则不会有任何trial被停止。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'trial id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '[xrYq99, xrYq9N]',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '响应状态。',
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_USER_OR_EXP',
                            ],
                            'Message' => [
                                'title' => '响应错误信息。只在响应出错时被设置。',
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'failed to stop any trial',
                            ],
                            'Results' => [
                                'title' => '(trial id: 停止操作结果) map。',
                                'description' => '(trial id: 停止操作结果) map。',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    \'xrYq99\':\'successfully stopped trial,\','."\n"
                                    .'    \'xrYq9N\':\'failed to stop trial,\''."\n"
                                    .'}',
                            ],
                            'RequestId' => [
                                'description' => 'POP 请求id',
                                'type' => 'string',
                                'example' => '071A904D-5A49-597F-9F69-81C7701D04AC',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'value',
                                    'description' => 'key',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"INVALID_USER_OR_EXP\\",\\n  \\"Message\\": \\"failed to stop any trial\\",\\n  \\"Results\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"RequestId\\": \\"071A904D-5A49-597F-9F69-81C7701D04AC\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"value\\"\\n  }\\n}","type":"json"}]',
            'title' => '停止一个HPO实验里指定的trials',
        ],
        'RestartHpoTrials' => [
            'summary' => '重启一个HPO实验里失败的trials。对于指定的trial，提取它使用的超参配置。如果该实验所有使用这个配置的trials都没有成功过，那么用这个配置重新启动一个trial。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/restart_trials',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验id。',
                        'description' => '实验id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体。TrialIds和TrialHyperParameters二者必须填写一个。如果都不提供则不会触发服务端任何操作。如果都填了，则只对TrialIds执行操作。',
                        'type' => 'object',
                        'properties' => [
                            'TrialIds' => [
                                'title' => '需要重新运行的trial ids。不填则会包括所有符合重新运行条件的trial ids。',
                                'description' => '需要重新运行的、已经存在的trial ids。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'hpo trial ids',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => ' [xrYq99, xrYq9N]',
                                ],
                                'required' => false,
                            ],
                            'TrialHyperParameters' => [
                                'description' => '一个新的trial的超参配置，实验会用这组超参启动一个新trial',
                                'type' => 'string',
                                'required' => false,
                                'example' => '‘{"${batch_size}": "32", "${lr}": "0.01"}\'',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'POP 请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_USER_OR_EXP',
                            ],
                            'Message' => [
                                'title' => '响应错误信息。只在响应出错时被设置。',
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'value',
                                    'description' => 'key',
                                ],
                            ],
                            'Results' => [
                                'title' => '(trial id: 重启状态) mapping。',
                                'description' => '(trial id: 重启状态) mapping。',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'\'xrYq99\': TrialJobInfo text,'."\n"
                                    .'\'xrYq9N\':TrialJobInfo text'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_USER_OR_EXP\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"value\\"\\n  },\\n  \\"Results\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '重启一个HPO实验里失败的trials',
        ],
        'ListHpoTrialLogNames' => [
            'summary' => '返回指定的HPO实验里指定的trial所拥有的所有的log文件的名称。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}/lognames',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Trial id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zUEapH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP 请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_INPUT_PARAMS',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'value',
                                    'description' => 'key',
                                ],
                            ],
                            'LogNames' => [
                                'description' => 'log文件路径列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'trial log文件全路径',
                                    'type' => 'string',
                                    'example' => 'oss;//foo/bar/trial.log',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"INVALID_INPUT_PARAMS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"value\\"\\n  },\\n  \\"LogNames\\": [\\n    \\"oss;//foo/bar/trial.log\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取HPO实验指定trial的所有log文件名称',
        ],
        'ListHpoTrialLogs' => [
            'summary' => '分页显示一个hpo trial的一个指定日治的内容',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}/logs',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'trial的id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf',
                    ],
                ],
                [
                    'name' => 'LogName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Log名称：stderr, stdout, trial.log',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'trial.log',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。起始值：1。不填则返回log文件里所有内容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页包含的日志行数。正整数。不填则返回log文件里所有内容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '3F190916-B3E5-5D1E-AD0C-35C0DF105F51',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'TotalCount' => [
                                'description' => 'log文件的总行数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '123',
                            ],
                            'Logs' => [
                                'description' => '日志行内容',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志行内容',
                                    'type' => 'string',
                                    'example' => '[2024-03-07 18:41:00] INFO (sys/MainThread) system_config loaded for region. cn-shanghai',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F190916-B3E5-5D1E-AD0C-35C0DF105F51\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {},\\n  \\"TotalCount\\": 123,\\n  \\"Logs\\": [\\n    \\"[2024-03-07 18:41:00] INFO (sys/MainThread) system_config loaded for region. cn-shanghai\\"\\n  ]\\n}","type":"json"}]',
            'title' => '显示一个HPO trial的一个指定的日志内容',
        ],
        'ListHpoTrialCommands' => [
            'summary' => 'HPO一个trial会按配置里的命令集，顺序运行一个或多个后台命令。这些命令在执行时的输出可以通过这个API返回。',
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}/commands',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'HPO实验id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde',
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'HPO实验的Trial id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zUEapH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'POP的请求id',
                                'type' => 'string',
                                'example' => '071A904D-5A49-597F-9F69-81C7701D04AC',
                            ],
                            'Code' => [
                                'description' => '内部错误码。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'INVALID_USER_OR_EXP',
                            ],
                            'Message' => [
                                'description' => '响应错误信息。只在响应出错时被设置。',
                                'type' => 'string',
                                'example' => 'Missing \'user_id\' in request.',
                            ],
                            'Detail' => [
                                'description' => '额外的错误信息。只在响应出错时被设置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'value',
                                    'description' => 'Key',
                                ],
                            ],
                            'Commands' => [
                                'description' => '命令列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '命令描述结构体',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '序号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Command' => [
                                            'description' => '命令内容',
                                            'type' => 'string',
                                            'example' => 'dlc submit pytorch --name=test_nni_foo_bar',
                                        ],
                                        'Output' => [
                                            'description' => '命令执行的输出',
                                            'type' => 'string',
                                            'example' => 'foo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"071A904D-5A49-597F-9F69-81C7701D04AC\\",\\n  \\"Code\\": \\"INVALID_USER_OR_EXP\\",\\n  \\"Message\\": \\"Missing \'user_id\' in request.\\",\\n  \\"Detail\\": {\\n    \\"key\\": \\"value\\"\\n  },\\n  \\"Commands\\": [\\n    {\\n      \\"Id\\": 1,\\n      \\"Command\\": \\"dlc submit pytorch --name=test_nni_foo_bar\\",\\n      \\"Output\\": \\"foo\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取HPO实验指定trial的后台任务的命令和输出',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paiautoml.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'paiautoml.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paiautoml.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paiautoml.cn-shanghai.aliyuncs.com',
        ],
    ],
];
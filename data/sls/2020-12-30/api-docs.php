<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'SLS',
        'product' => 'Sls',
        'version' => '2020-12-30',
    ],
    'components' => [
        'schemas' => [
            'AgentInstanceConfigGrayConfigs' => [
                'type' => 'object',
                'properties' => [
                    'condition' => [
                        'type' => 'string',
                    ],
                    'content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Alert' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/AlertConfiguration',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlertConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'muteUntil' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'version' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'templateConfiguration' => [
                        '$ref' => '#/components/schemas/TemplateConfiguration',
                    ],
                    'dashboard' => [
                        'type' => 'string',
                    ],
                    'threshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'noDataFire' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'noDataSeverity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sendResolved' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'queryList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/AlertQuery',
                        ],
                    ],
                    'annotations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AlertTag',
                        ],
                    ],
                    'labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AlertTag',
                        ],
                    ],
                    'conditionConfiguration' => [
                        '$ref' => '#/components/schemas/ConditionConfiguration',
                    ],
                    'severityConfigurations' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/SeverityConfiguration',
                        ],
                    ],
                    'joinConfigurations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JoinConfiguration',
                        ],
                    ],
                    'groupConfiguration' => [
                        '$ref' => '#/components/schemas/GroupConfiguration',
                        'required' => true,
                    ],
                    'policyConfiguration' => [
                        '$ref' => '#/components/schemas/PolicyConfiguration',
                    ],
                    'autoAnnotation' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'sinkEventStore' => [
                        '$ref' => '#/components/schemas/SinkEventStoreConfiguration',
                    ],
                    'sinkCms' => [
                        '$ref' => '#/components/schemas/SinkCmsConfiguration',
                    ],
                    'sinkAlerthub' => [
                        '$ref' => '#/components/schemas/SinkAlerthubConfiguration',
                        'required' => false,
                    ],
                    'tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'AlertQuery' => [
                'type' => 'object',
                'properties' => [
                    'chartTitle' => [
                        'type' => 'string',
                    ],
                    'query' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'timeSpanType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'start' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'end' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'storeType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'project' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'store' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'dashboardId' => [
                        'type' => 'string',
                    ],
                    'powerSqlMode' => [
                        'type' => 'string',
                    ],
                    'ui' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlertTag' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConditionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'condition' => [
                        'type' => 'string',
                    ],
                    'countCondition' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConsumeProcessor' => [
                'type' => 'object',
                'properties' => [
                    'processorName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/ConsumeProcessorConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ConsumeProcessorConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'spl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ConsumerGroup' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'order' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CopilotAction' => [
                'type' => 'object',
                'properties' => [
                    'queryTemplate' => [
                        'type' => 'string',
                    ],
                    'queryTemplateParameters' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'type' => [
                                    'type' => 'string',
                                ],
                                'prompt' => [
                                    'type' => 'string',
                                ],
                                'required' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'action' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'scene' => [
                        'type' => 'string',
                    ],
                    'parameters' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'type' => [
                                    'type' => 'string',
                                ],
                                'prompt' => [
                                    'type' => 'string',
                                ],
                                'required' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'queryMaxLength' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DeleteLogStoreLogsTask' => [
                'type' => 'object',
                'properties' => [
                    'progress' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'taskId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                    'errorCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'from' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'to' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ETL' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/ETLConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ETLConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'script' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'lang' => [
                        'type' => 'string',
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessKeyId' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                    'accessKeySecret' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sinks' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/ETLConfigurationSink',
                        ],
                    ],
                    'parameters' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ETLConfigurationSink' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'project' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'datasets' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                        'minItems' => 1,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessKeyId' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                    'accessKeySecret' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
            ],
            'EncryptConf' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'encrypt_type' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'user_cmk_info' => [
                        '$ref' => '#/components/schemas/EncryptUserCmkConf',
                    ],
                ],
            ],
            'EncryptUserCmkConf' => [
                'type' => 'object',
                'properties' => [
                    'cmk_key_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'arn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'GroupConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Histogram' => [
                'type' => 'object',
                'properties' => [
                    'from' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'to' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'progress' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IndexJsonKey' => [
                'type' => 'object',
                'properties' => [
                    'chn' => [
                        'type' => 'boolean',
                    ],
                    'caseSensitive' => [
                        'type' => 'boolean',
                    ],
                    'token' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'doc_value' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'IndexKey' => [
                'type' => 'object',
                'properties' => [
                    'chn' => [
                        'type' => 'boolean',
                    ],
                    'caseSensitive' => [
                        'type' => 'boolean',
                    ],
                    'token' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'doc_value' => [
                        'type' => 'boolean',
                    ],
                    'index_all' => [
                        'type' => 'boolean',
                    ],
                    'max_depth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'json_keys' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IndexJsonKey',
                        ],
                    ],
                ],
            ],
            'IngestProcessor' => [
                'type' => 'object',
                'properties' => [
                    'processorName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/IngestProcessorConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IngestProcessorConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'spl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parseFail' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JoinConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'condition' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListAgentInstanceConfigs' => [
                'type' => 'array',
                'items' => [
                    'type' => 'object',
                    'properties' => [
                        'configType' => [
                            'type' => 'string',
                        ],
                        'attributes' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'LogContent' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'LogGroup' => [
                'type' => 'object',
                'properties' => [
                    'Topic' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Source' => [
                        'type' => 'string',
                    ],
                    'LogTags' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LogTag',
                        ],
                    ],
                    'LogItems' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/LogItem',
                        ],
                    ],
                ],
            ],
            'LogGroupList' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'logGroupList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/LogGroup',
                        ],
                    ],
                ],
            ],
            'LogItem' => [
                'type' => 'object',
                'properties' => [
                    'Time' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'Contents' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/LogContent',
                        ],
                    ],
                ],
            ],
            'LogTag' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'LogtailConfig' => [
                'type' => 'object',
                'properties' => [
                    'configName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logSample' => [
                        'type' => 'string',
                    ],
                    'inputType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'inputDetail' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'outputType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'outputDetail' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'region' => [
                                'type' => 'string',
                            ],
                            'telemetryType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'LogtailPipelineConfig' => [
                'type' => 'object',
                'properties' => [
                    'configName' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z_-]{0,126}[0-9a-zA-Z]$',
                    ],
                    'logSample' => [
                        'type' => 'string',
                    ],
                    'global' => [
                        'type' => 'object',
                    ],
                    'inputs' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'processors' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'aggregators' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'flushers' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MLDataParam' => [
                'type' => 'object',
                'properties' => [
                    'annotationdataId' => [
                        'type' => 'string',
                    ],
                    'dataHash' => [
                        'type' => 'string',
                    ],
                    'datasetId' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'valueType' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'annotations' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'annotatedBy' => [
                                    'type' => 'string',
                                ],
                                'updateTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'results' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'predictions' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'annotatedBy' => [
                                    'type' => 'string',
                                ],
                                'updateTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'results' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MLDataSetParam' => [
                'type' => 'object',
                'properties' => [
                    'datasetId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'dataType' => [
                        'type' => 'string',
                    ],
                    'labelId' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createBy' => [
                        'type' => 'string',
                    ],
                    'settingType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MLLabelParam' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'labelId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'settings' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'mode' => [
                                    'type' => 'string',
                                ],
                                'type' => [
                                    'type' => 'string',
                                ],
                                'config' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MLServiceAnalysisParam' => [
                'type' => 'object',
                'properties' => [
                    'parameter' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'input' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'MLServiceParam' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'serviceType' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'model' => [
                        'type' => 'object',
                        'properties' => [
                            'modelResourceId' => [
                                'type' => 'string',
                            ],
                            'modelResourceType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'resource' => [
                        'type' => 'object',
                        'properties' => [
                            'cpuLimit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'memoryLimit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'replica' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'MaxComputeExport' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MaxComputeExportConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sink' => [
                        '$ref' => '#/components/schemas/MaxComputeExportConfigurationSink',
                        'required' => true,
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'MaxComputeExportConfigurationSink' => [
                'type' => 'object',
                'properties' => [
                    'odpsEndpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsTunnelEndpoint' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'odpsProject' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsTable' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsRolearn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsAccessKeyId' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'odpsAccessSecret' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'partitionTimeFormat' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'timeZone' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'fields' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'partitionColumn' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'filterInvalid' => [
                        'type' => 'boolean',
                    ],
                    'timeFormatType' => [
                        'type' => 'string',
                    ],
                    'bufferInterval' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OSSExport' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/OSSExportConfiguration',
                        'required' => false,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OSSExportConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sink' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'bucket' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'prefix' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'suffix' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'roleArn' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pathFormat' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pathFormatType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeZone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'contentType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'contentDetail' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'compressionType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'bufferInterval' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'bufferSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'delaySec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'delaySeconds' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'OSSIngestion' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/OSSIngestionConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OSSIngestionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/OSSIngestionConfigurationSource',
                        'required' => true,
                    ],
                ],
            ],
            'OSSIngestionConfigurationSource' => [
                'type' => 'object',
                'properties' => [
                    'endpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'compressionCodec' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'encoding' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'format' => [
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'interval' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'pattern' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                    'restoreObjectEnabled' => [
                        'type' => 'boolean',
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeField' => [
                        'type' => 'string',
                    ],
                    'timeFormat' => [
                        'type' => 'string',
                    ],
                    'timePattern' => [
                        'type' => 'string',
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                    'useMetaIndex' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'roleARN' => [
                        'type' => 'string',
                    ],
                    'tagPackId' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'PolicyConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'alertPolicyId' => [
                        'type' => 'string',
                    ],
                    'actionPolicyId' => [
                        'type' => 'string',
                    ],
                    'repeatInterval' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ProcessorAssociate' => [
                'type' => 'object',
                'properties' => [
                    'processorId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ProjectSummary' => [
                'type' => 'object',
                'properties' => [
                    'projectName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'S3Ingestion' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/S3IngestionConfigurationSource',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'S3IngestionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/S3IngestionConfigurationSource',
                    ],
                ],
            ],
            'S3IngestionConfigurationSource' => [
                'type' => 'object',
                'properties' => [
                    'awsRegion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'awsAccessKey' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'awsAccessKeySecret' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'compressionCodec' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'encoding' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'format' => [
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'interval' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'pattern' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                    'awsUseSQS' => [
                        'type' => 'boolean',
                    ],
                    'awsSQSQueueUrl' => [
                        'type' => 'string',
                    ],
                    'useAwsSQSOnly' => [
                        'type' => 'boolean',
                    ],
                    'tagPackId' => [
                        'type' => 'boolean',
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeField' => [
                        'type' => 'string',
                    ],
                    'timeFormat' => [
                        'type' => 'string',
                    ],
                    'timePattern' => [
                        'type' => 'string',
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SavedSearch' => [
                'type' => 'object',
                'properties' => [
                    'savedsearchName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'searchQuery' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'topic' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'Schedule' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'FixedRate',
                            'Cron',
                        ],
                    ],
                    'cronExpression' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'runImmediately' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'timeZone' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'delay' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'interval' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ScheduledSQL' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledSQLConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'script' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sqlType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destEndpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destProject' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sourceLogstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destLogstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destRoleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'fromTimeExpr' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'toTimeExpr' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'maxRunTimeInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'resourcePool' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'maxRetries' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'dataFormat' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parameters' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                ],
            ],
            'SeverityConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'severity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'evalCondition' => [
                        '$ref' => '#/components/schemas/ConditionConfiguration',
                    ],
                ],
            ],
            'SinkAlerthubConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SinkCmsConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SinkEventStoreConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'project' => [
                        'type' => 'string',
                    ],
                    'eventStore' => [
                        'type' => 'string',
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StoreViewStore' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'storeName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TemplateConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'lang' => [
                        'type' => 'string',
                    ],
                    'tokens' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'aonotations' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'Ticket' => [
                'type' => 'object',
                'properties' => [
                    'ticketId' => [
                        'type' => 'string',
                    ],
                    'ticket' => [
                        'type' => 'string',
                    ],
                    'number' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '0',
                        'maximum' => '2147483647',
                    ],
                    'expirationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'extra' => [
                        'type' => 'string',
                    ],
                    'callerUid' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'usedNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'createDate' => [
                        'type' => 'string',
                    ],
                    'expireDate' => [
                        'type' => 'string',
                    ],
                    'valid' => [
                        'type' => 'boolean',
                    ],
                    'sharingTo' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'chart' => [
                'type' => 'object',
                'properties' => [
                    'title' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'search' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'display' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'action' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                ],
            ],
            'dashboard' => [
                'type' => 'object',
                'properties' => [
                    'dashboardName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'attribute' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'charts' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/chart',
                        ],
                    ],
                ],
            ],
            'externalStore' => [
                'type' => 'object',
                'properties' => [
                    'externalStoreName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'storeType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parameter' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                ],
            ],
            'index' => [
                'type' => 'object',
                'properties' => [
                    'max_text_len' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'log_reduce_white_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'log_reduce_black_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'line' => [
                        'type' => 'object',
                        'properties' => [
                            'chn' => [
                                'type' => 'boolean',
                            ],
                            'caseSensitive' => [
                                'type' => 'boolean',
                            ],
                            'token' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'include_keys' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'exclude_keys' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'keys' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IndexKey',
                        ],
                    ],
                    'log_reduce' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'logging' => [
                'type' => 'object',
                'properties' => [
                    'loggingProject' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'loggingDetails' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'consumergroup_log',
                                        'logtail_alarm',
                                        'operation_log',
                                        'logtail_profile',
                                        'metering',
                                        'logtail_status',
                                        'scheduled_sql_alert',
                                        'etl_alert',
                                    ],
                                ],
                                'logstore' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'logstore' => [
                'type' => 'object',
                'properties' => [
                    'logstoreName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ttl' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'shardCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'enable_tracking' => [
                        'type' => 'boolean',
                    ],
                    'autoSplit' => [
                        'type' => 'boolean',
                    ],
                    'maxSplitShard' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'appendMeta' => [
                        'type' => 'boolean',
                    ],
                    'telemetryType' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'encrypt_conf' => [
                        '$ref' => '#/components/schemas/EncryptConf',
                    ],
                    'hot_ttl' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'infrequentAccessTTL' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'mode' => [
                        'type' => 'string',
                    ],
                    'productType' => [
                        'type' => 'string',
                    ],
                    'processorId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'machine' => [
                'type' => 'object',
                'properties' => [
                    'ip' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'machine-uniqueid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastHeartbeatTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'userdefined-id' => [
                        'type' => 'string',
                    ],
                    'host-id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'machineGroup' => [
                'type' => 'object',
                'properties' => [
                    'groupName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'groupType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'machineIdentifyType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'groupAttribute' => [
                        'type' => 'object',
                        'properties' => [
                            'groupTopic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'externalName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                    'machineList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'project' => [
                'type' => 'object',
                'properties' => [
                    'createTime' => [
                        'type' => 'string',
                    ],
                    'lastModifyTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'projectName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'dataRedundancyType' => [
                        'type' => 'string',
                    ],
                    'quota' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'recycleBinEnabled' => [
                        'type' => 'boolean',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'serviceStatus' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'shard' => [
                'type' => 'object',
                'properties' => [
                    'shardID' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'inclusiveBeginKey' => [
                        'type' => 'string',
                    ],
                    'exclusiveEndKey' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateProject' => [
            'path' => '/',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'projectName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataRedundancyType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'LRS',
                                    'ZRS',
                                ],
                            ],
                            'recycleBinEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDomain' => [
            'path' => '/domains',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'domainName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateLogging' => [
            'path' => '/logging',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'loggingProject' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'loggingDetails' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'consumergroup_log',
                                                'logtail_alarm',
                                                'operation_log',
                                                'logtail_profile',
                                                'metering',
                                                'logtail_status',
                                                'scheduled_sql_alert',
                                                'etl_alert',
                                            ],
                                        ],
                                        'logstore' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteProject' => [
            'path' => '/',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'forceDelete',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteLogging' => [
            'path' => '/logging',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDomain' => [
            'path' => '/domains/{domainName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateProject' => [
            'path' => '/',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'recycleBinEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateLogging' => [
            'path' => '/logging',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'loggingProject' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'loggingDetails' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'consumergroup_log',
                                                'logtail_alarm',
                                                'operation_log',
                                                'logtail_profile',
                                                'metering',
                                                'logtail_status',
                                                'scheduled_sql_alert',
                                                'etl_alert',
                                            ],
                                        ],
                                        'logstore' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutProjectTransferAcceleration' => [
            'path' => '/transferacceleration',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetProject' => [
            'path' => '/',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListProject' => [
            'path' => '/',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fetchQuota',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetProjectLogs' => [
            'path' => '/logs',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'powerSql',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLogging' => [
            'path' => '/logging',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDomains' => [
            'path' => '/domains',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'domainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLogStore' => [
            'path' => '/logstores',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'shardCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'encrypt_conf' => [
                                '$ref' => '#/components/schemas/EncryptConf',
                                'required' => false,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'enable_tracking' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'appendMeta' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'telemetryType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'processorId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateIndex' => [
            'path' => '/logstores/{logstore}/index',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/index',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteLogStore' => [
            'path' => '/logstores/{logstore}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteIndex' => [
            'path' => '/logstores/{logstore}/index',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PutWebtracking' => [
            'path' => '/logstores/{logstoreName}/track',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            '__topic__' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            '__source__' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            '__logs__' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            '__tags__' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateLogStore' => [
            'path' => '/logstores/{logstore}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'shardCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'encrypt_conf' => [
                                '$ref' => '#/components/schemas/EncryptConf',
                                'required' => false,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'enable_tracking' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'appendMeta' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'telemetryType' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateIndex' => [
            'path' => '/logstores/{logstore}/index',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/index',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SplitShard' => [
            'path' => '/logstores/{logstore}/shards/{shard}?action=split',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shard',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'shardCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLogStoreMeteringMode' => [
            'path' => '/logstores/{logstore}/meteringmode',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'meteringMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'ChargeByDataIngest',
                                    'ChargeByFunction',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'MergeShard' => [
            'path' => '/logstores/{logstore}/shards/{shard}?action=merge',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shard',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListLogStores' => [
            'path' => '/logstores',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'telemetryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLogStore' => [
            'path' => '/logstores/{logstore}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetIndex' => [
            'path' => '/logstores/{logstore}/index',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListShards' => [
            'path' => '/logstores/{logstore}/shards',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLogs' => [
            'path' => '/logstores/{logstore}?type=log',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'topic',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'line',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'reverse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'powerSql',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLogStoreEncryption' => [
            'path' => '/logstores/{logstore}/encryption',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'enable' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'encryptType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'default',
                                    'm4',
                                    'sm4_ecb',
                                    'sm4_cbc',
                                    'sm4_gcm',
                                    'aes_ecb',
                                    'aes_cbc',
                                    'aes_cfb',
                                    'aes_ofb',
                                    'aes_gcm',
                                ],
                            ],
                            'userCmkInfo' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'keyId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'roleArn' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'regionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCursor' => [
            'path' => '/logstores/{logstore}/shards/{shardId}?type=cursor',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetContextLogs' => [
            'path' => '/logstores/{logstore}?type=context_log',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pack_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pack_meta',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'back_lines',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'forward_lines',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetHistograms' => [
            'path' => '/logstores/{logstore}/index?type=histogram',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'topic',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCursorTime' => [
            'path' => '/logstores/{logstore}/shards/{shardId}?type=cursor_time',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cursor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLogsV2' => [
            'path' => '/logstores/{logstore}/logs',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Accept-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'from' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'to' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'line' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '100',
                            ],
                            'offset' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'reverse' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'powerSql' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'session' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'forward' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'highlight' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PullLogs' => [
            'path' => '/logstores/{logStore}/shards/{shardId}?type=log',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logStore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cursor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '1000',
                    ],
                ],
                [
                    'name' => 'end_cursor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accept-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutLogs' => [
            'path' => '/logstores/{logstore}/shards/lb',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-log-compresstype',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'lz4',
                        ],
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/LogGroup',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLogStoreMeteringMode' => [
            'path' => '/logstores/{logstore}/meteringmode',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListMetricStores' => [
            'path' => '/metricstores',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateMetricStore' => [
            'path' => '/metricstores',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'shardCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'metricType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteMetricStore' => [
            'path' => '/metricstores/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateMetricStore' => [
            'path' => '/metricstores/{name}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMetricStoreMeteringMode' => [
            'path' => '/metricstores/{metricStore}/meteringmode',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'metricStore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'meteringMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'ChargeByDataIngest',
                                    'ChargeByFunction',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMetricStore' => [
            'path' => '/metricstores/{name}',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMetricStoreMeteringMode' => [
            'path' => '/metricstores/{metricStore}/meteringmode',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'metricStore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateStoreView' => [
            'path' => '/storeviews',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'storeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'stores' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/StoreViewStore',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteStoreView' => [
            'path' => '/storeviews/{name}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateStoreView' => [
            'path' => '/storeviews/{name}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'storeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'stores' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/StoreViewStore',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStoreView' => [
            'path' => '/storeviews/{name}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetStoreViewIndex' => [
            'path' => '/storeviews/{name}/index',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListStoreViews' => [
            'path' => '/storeviews',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'storeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateMachineGroup' => [
            'path' => '/machinegroups',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'groupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'machineIdentifyType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'groupType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'groupAttribute' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'groupTopic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'externalName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'machineList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveConfigFromMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}/configs/{configName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ApplyConfigToMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}/configs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateMachineGroup' => [
            'path' => '/machinegroups/{groupName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'groupName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'groupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'machineIdentifyType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'groupType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'groupAttribute' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'groupTopic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'externalName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'machineList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMachineGroupMachine' => [
            'path' => '/machinegroups/{machineGroup}/machines',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'action',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'add',
                            'delete',
                        ],
                    ],
                ],
            ],
        ],
        'ListMachineGroup' => [
            'path' => '/machinegroups',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'groupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMachines' => [
            'path' => '/machinegroups/{machineGroup}/machines',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAppliedConfigs' => [
            'path' => '/machinegroups/{machineGroup}/configs',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAppliedMachineGroups' => [
            'path' => '/configs/{configName}/machinegroups',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateConfig' => [
            'path' => '/configs',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/LogtailConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'configName' => [
                                'type' => 'string',
                                'required' => true,
                                'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                            ],
                            'logSample' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'global' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'inputs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'processors' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'aggregators' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'flushers' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteConfig' => [
            'path' => '/configs/{configName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs/{configName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                    ],
                ],
            ],
        ],
        'UpdateConfig' => [
            'path' => '/configs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/LogtailConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'configName' => [
                                'type' => 'string',
                                'required' => true,
                                'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                            ],
                            'logSample' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'global' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'inputs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'processors' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'aggregators' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'flushers' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetConfig' => [
            'path' => '/configs/{configName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListConfig' => [
            'path' => '/configs',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs/{configName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                    ],
                ],
            ],
        ],
        'ListLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '500',
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDashboard' => [
            'path' => '/dashboards',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/dashboard',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDashboard' => [
            'path' => '/dashboards/{dashboardName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDashboard' => [
            'path' => '/dashboards/{dashboardName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'dashboardName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'attribute' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'charts' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/chart',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDashboard' => [
            'path' => '/dashboards/{dashboardName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDashboard' => [
            'path' => '/dashboards',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'consumerGroup' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'order' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ConsumerGroupUpdateCheckPoint' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}?type=checkpoint',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'forceSuccess',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'shard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'checkpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'order' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConsumerGroupHeartBeat' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}?type=heartbeat',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'ListConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCheckPoint' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shard',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSavedSearch' => [
            'path' => '/savedsearches',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'savedsearchName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'searchQuery' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstore' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteSavedSearch' => [
            'path' => '/savedsearches/{savedsearchName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savedsearchName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateSavedSearch' => [
            'path' => '/savedsearches/{savedsearchName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savedsearchName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'savedsearchName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'searchQuery' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstore' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSavedSearch' => [
            'path' => '/savedsearches',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSavedSearch' => [
            'path' => '/savedsearches/{savedsearchName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savedsearchName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAlert' => [
            'path' => '/alerts',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/AlertConfiguration',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAlert' => [
            'path' => '/alerts/{alertName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAlert' => [
            'path' => '/alerts/{alertName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/AlertConfiguration',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableAlert' => [
            'path' => '/alerts/{alertName}?action=enable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableAlert' => [
            'path' => '/alerts/{alertName}?action=disable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAlert' => [
            'path' => '/alerts/{alertName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAlerts' => [
            'path' => '/alerts',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateOSSIngestion' => [
            'path' => '/ossingestions',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSIngestionConfiguration',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSIngestionConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListOSSIngestions' => [
            'path' => '/ossingestions',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateOSSExport' => [
            'path' => '/ossexports',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateOSSHDFSExport' => [
            'path' => '/osshdfsexports',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteOSSExport' => [
            'path' => '/ossexports/{ossExportName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateOSSExport' => [
            'path' => '/ossexports/{ossExportName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartOSSExport' => [
            'path' => '/ossexports/{ossExportName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopOSSExport' => [
            'path' => '/ossexports/{ossExportName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOSSExport' => [
            'path' => '/ossexports/{ossExportName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListOSSExports' => [
            'path' => '/ossexports',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListOSSHDFSExports' => [
            'path' => '/osshdfsexports',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateETL' => [
            'path' => '/etls',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ETLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteETL' => [
            'path' => '/etls/{etlName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateETL' => [
            'path' => '/etls/{etlName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ETLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartETL' => [
            'path' => '/etls/{etlName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopETL' => [
            'path' => '/etls/{etlName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListETLs' => [
            'path' => '/etls',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetETL' => [
            'path' => '/etls/{etlName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateScheduledSQL' => [
            'path' => '/scheduledsqls',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}?action=enable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}?action=disable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListScheduledSQLs' => [
            'path' => '/scheduledsqls',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDownloadJob' => [
            'path' => '/downloadjobs',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'logstore' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'fromTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'toTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'query' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'powerSql' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'allowInComplete' => [
                                        'type' => 'boolean',
                                        'required' => true,
                                    ],
                                    'sink' => [
                                        'type' => 'object',
                                        'required' => true,
                                        'properties' => [
                                            'type' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'contentType' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'compressionType' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'roleArn' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'bucket' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'prefix' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDownloadJob' => [
            'path' => '/downloadjobs/{downloadJobName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'downloadJobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'properties' => [],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDownloadJob' => [
            'path' => '/downloadjobs/{downloadJobName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'downloadJobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'properties' => [],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDownloadJobs' => [
            'path' => '/downloadjobs',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutIngestProcessor' => [
            'path' => '/ingestprocessors/{processorName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/IngestProcessorConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIngestProcessor' => [
            'path' => '/ingestprocessors/{processorName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListIngestProcessors' => [
            'path' => '/ingestprocessors',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteIngestProcessor' => [
            'path' => '/ingestprocessors/{processorName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateLogStoreProcessor' => [
            'path' => '/logstores/{logstore}/processor',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'processorName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMetricStoreProcessor' => [
            'path' => '/metricstores/{metricstore}/processor',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'metricstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'processorName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAiTools' => [
            'path' => '/ml/tool/list',
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
            'deprecated' => false,
            'parameters' => [],
        ],
        'CallAiTools' => [
            'path' => '/ml/tool/call',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'toolName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'params' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'regionId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAnnotationLabel' => [
            'path' => '/ml/annotationlabel',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLLabelParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'annotationdataId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'rawLog' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'mlDataParam' => [
                                '$ref' => '#/components/schemas/MLDataParam',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAnnotationDataSet' => [
            'path' => '/ml/annotationdataset',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLDataSetParam',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'datasetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAnnotationLabel' => [
            'path' => '/ml/annotationlabel/{labelId}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata/{annotationdataId}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'annotationdataId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAnnotationDataSet' => [
            'path' => '/ml/annotationdataset/{datasetId}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAnnotationLabel' => [
            'path' => '/ml/annotationlabel',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLLabelParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAnnotationDataSet' => [
            'path' => '/ml/annotationdataset/{datasetId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLDataSetParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAnnotationLabel' => [
            'path' => '/ml/annotationlabel/{labelId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAnnotationLabels' => [
            'path' => '/ml/annotationlabel',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata/{annotationdataId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'annotationdataId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAnnotationDataSet' => [
            'path' => '/ml/annotationdataset/{datasetId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAnnotationDataSets' => [
            'path' => '/ml/annotationdataset',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMLServiceResults' => [
            'path' => '/ml/service/{serviceName}/analysis',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'allowBuiltin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLServiceAnalysisParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TagResources' => [
            'path' => '/tag',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'resourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceId' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UntagResources' => [
            'path' => '/untag',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'resourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceId' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'all' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
            'path' => '/tags',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'key' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'PutProjectPolicy' => [
            'path' => '/policy',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteProjectPolicy' => [
            'path' => '/policy',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetProjectPolicy' => [
            'path' => '/policy',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeResourceGroup' => [
            'path' => '/resourcegroup',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'resourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpsertCollectionPolicy' => [
            'path' => '/collectionpolicy',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'policyName' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 3,
                                'maxLength' => 63,
                            ],
                            'productCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'dataCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'policyConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'resourceMode' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'all',
                                            'instanceMode',
                                            'attributeMode',
                                        ],
                                    ],
                                    'resourceTags' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                    'regions' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'instanceIds' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'centralizeEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'centralizeConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'destRegion' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'destProject' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'destLogstore' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'destTTL' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'dataConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'dataRegion' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'resourceDirectory' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'accountGroupType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'members' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteCollectionPolicy' => [
            'path' => '/collectionpolicy/{policyName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'policyName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 3,
                        'maxLength' => 63,
                    ],
                ],
                [
                    'name' => 'productCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListCollectionPolicies' => [
            'path' => '/collectionpolicy',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'productCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'policyName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'centralProject',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCollectionPolicy' => [
            'path' => '/collectionpolicy/{policyName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'policyName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 3,
                        'maxLength' => 63,
                    ],
                ],
                [
                    'name' => 'productCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSqlInstance' => [
            'path' => '/sqlinstance',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'cu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'useAsDefault' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateSqlInstance' => [
            'path' => '/sqlinstance',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'cu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'useAsDefault' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetSqlInstance' => [
            'path' => '/sqlinstance',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'OpenSlsService' => [
            'path' => '/slsservice',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [],
        ],
        'GetSlsService' => [
            'path' => '/slsservice',
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
            'deprecated' => false,
            'parameters' => [],
        ],
        'CreateTicket' => [
            'path' => '/tickets',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'expirationTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'accessTokenExpirationTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefreshToken' => [
            'path' => '/token/refresh',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ticket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'accessTokenExpirationTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/regions',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'language',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateMaxComputeExport' => [
            'path' => '/maxcomputeexports',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListMaxComputeExports' => [
            'path' => '/maxcomputeexports',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteConsumeProcessor' => [
            'path' => '/consumeprocessors/{processorName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetConsumeProcessor' => [
            'path' => '/consumeprocessors/{processorName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListConsumeProcessors' => [
            'path' => '/consumeprocessors',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'PutConsumeProcessor' => [
            'path' => '/consumeprocessors/{processorName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ConsumeProcessorConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'cn-beijing-finance-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cn-qingdao.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cn-beijing.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cn-zhangjiakou.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cn-huhehaote.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cn-wulanchabu.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cn-hangzhou.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cn-shanghai.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'cn-nanjing.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'cn-fuzhou.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cn-shenzhen.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'cn-heyuan.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'cn-guangzhou.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cn-chengdu.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cn-hongkong.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ap-northeast-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'ap-northeast-2.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ap-southeast-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ap-southeast-2.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ap-southeast-3.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ap-southeast-5.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'ap-southeast-6.log.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'us-east-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'us-west-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'eu-west-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'eu-central-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'ap-south-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'me-east-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cn-hangzhou-finance.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cn-shanghai-finance-1.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cn-shenzhen-finance.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'ap-southeast-7.log.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'me-central-1.log.aliyuncs.com',
        ],
    ],
];
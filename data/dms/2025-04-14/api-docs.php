<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dms',
        'version' => '2025-04-14',
    ],
    'components' => [
        'schemas' => [
            'DLCatalog' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLColumn' => [
                'type' => 'object',
                'properties' => [
                    'Comment' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLDatabase' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                    ],
                    'DbId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CatalogName' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLFunction' => [
                'type' => 'object',
                'properties' => [
                    'FunctionName' => [
                        'type' => 'string',
                    ],
                    'OwnerName' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'CreatorId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FunctionType' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ResourceUris' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLResourceUri',
                        ],
                    ],
                    'ClassName' => [
                        'type' => 'string',
                    ],
                    'CatalogName' => [
                        'type' => 'string',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                    'ModifierId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DLFunctionInput' => [
                'type' => 'object',
                'properties' => [
                    'FunctionName' => [
                        'type' => 'string',
                    ],
                    'OwnerName' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'CreatorId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FunctionType' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ResourceUris' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLResourceUri',
                        ],
                    ],
                    'ClassName' => [
                        'type' => 'string',
                    ],
                    'ModifierId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DLOrder' => [
                'type' => 'object',
                'properties' => [
                    'Order' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Col' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLPartition' => [
                'type' => 'object',
                'properties' => [
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'Sd' => [
                        '$ref' => '#/components/schemas/DLStorageDescriptor',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'CatalogName' => [
                        'type' => 'string',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DLPartitionInput' => [
                'type' => 'object',
                'properties' => [
                    'Parameters' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'StorageDescriptor' => [
                        '$ref' => '#/components/schemas/DLStorageDescriptor',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DLResourceUri' => [
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLSerdeInfo' => [
                'type' => 'object',
                'properties' => [
                    'SerializationLib' => [
                        'type' => 'string',
                    ],
                    'DeserializerClass' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'SerdeType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SerializerClass' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLSkewedInfo' => [
                'type' => 'object',
                'properties' => [
                    'SkewedColValues' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'SkewedColValueLocationMaps' => [
                        'type' => 'object',
                    ],
                    'SkewedColNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'DLStorageDescriptor' => [
                'type' => 'object',
                'properties' => [
                    'OriginalColumns' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLColumn',
                        ],
                    ],
                    'SortCols' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLOrder',
                        ],
                    ],
                    'Parameters' => [
                        'type' => 'object',
                    ],
                    'SkewedInfo' => [
                        '$ref' => '#/components/schemas/DLSkewedInfo',
                    ],
                    'InputFormat' => [
                        'type' => 'string',
                    ],
                    'OutputFormat' => [
                        'type' => 'string',
                    ],
                    'Columns' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLColumn',
                        ],
                    ],
                    'IsCompressed' => [
                        'type' => 'boolean',
                    ],
                    'SerdeInfo' => [
                        '$ref' => '#/components/schemas/DLSerdeInfo',
                    ],
                    'BucketCols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'NumBuckets' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLTable' => [
                'type' => 'object',
                'properties' => [
                    'ViewOriginalText' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'CreatorId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'StorageDescriptor' => [
                        '$ref' => '#/components/schemas/DLStorageDescriptor',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Retention' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'ViewExpandedText' => [
                        'type' => 'string',
                    ],
                    'DbId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                    'CatalogName' => [
                        'type' => 'string',
                    ],
                    'PartitionKeys' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLColumn',
                        ],
                    ],
                    'ModifierId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLTableInput' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'ViewOriginalText' => [
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'CreatorId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'StorageDescriptor' => [
                        '$ref' => '#/components/schemas/DLStorageDescriptor',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Retention' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'ViewExpandedText' => [
                        'type' => 'string',
                    ],
                    'PartitionKeys' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLColumn',
                        ],
                    ],
                    'ModifierId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DLTablebaseInfo' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'ViewOriginalText' => [
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'CreatorId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Retention' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'ViewExpandedText' => [
                        'type' => 'string',
                    ],
                    'DbId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                    'CatalogName' => [
                        'type' => 'string',
                    ],
                    'PartitionKeys' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DLColumn',
                        ],
                    ],
                    'ModifierId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ForeignInstance' => [
                'type' => 'object',
                'properties' => [
                    'InstanceSource' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Host' => [
                        'type' => 'string',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'Properties' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'DataLinkName' => [
                        'type' => 'string',
                    ],
                    'Sid' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ForeignInstanceCredInfo' => [
                'type' => 'object',
                'properties' => [
                    'CredInfo' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'CredType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PartitionError' => [
                'type' => 'object',
                'properties' => [
                    'ErrorDetail' => [
                        'type' => 'string',
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateAirflowLoginToken' => [
            'path' => '',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AirflowId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dms.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dms.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dms.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dms.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dms.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
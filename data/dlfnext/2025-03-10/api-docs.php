<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DlfNext',
        'version' => '2025-03-10',
    ],
    'components' => [
        'schemas' => [
            'Catalog' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogSummary' => [
                'type' => 'object',
                'properties' => [
                    'partitionCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'databaseCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'tableCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'generatedDate' => [
                        'type' => 'string',
                    ],
                    'apiVisitCountMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'throughputMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileSizeInBytes' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                ],
            ],
            'CatalogSummaryTrend' => [
                'type' => 'object',
                'properties' => [
                    'apiVisitCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'throughput' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'totalMetaCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'totalFileCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                ],
            ],
            'DataField' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'type' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                ],
            ],
            'Database' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DatabaseSummary' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'partitionCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'tableCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'generatedDate' => [
                        'type' => 'string',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'totalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DateSummary' => [
                'type' => 'object',
                'properties' => [
                    'date' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ErrorResponse' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FailurePermission' => [
                'type' => 'object',
                'properties' => [
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                    'errorCode' => [
                        'type' => 'string',
                    ],
                    'permission' => [
                        '$ref' => '#/components/schemas/Permission',
                    ],
                ],
            ],
            'FullDataType' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                    'value' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                    'key' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                    'element' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                ],
            ],
            'FullInstant' => [
                'type' => 'object',
                'properties' => [
                    'snapshotId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'tagName' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FullSchemaChange' => [
                'type' => 'object',
                'properties' => [
                    'keepNullability' => [
                        'type' => 'boolean',
                    ],
                    'move' => [
                        '$ref' => '#/components/schemas/Move',
                    ],
                    'newName' => [
                        'type' => 'string',
                    ],
                    'newNullability' => [
                        'type' => 'boolean',
                    ],
                    'fieldNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'dataType' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                    'newComment' => [
                        'type' => 'string',
                    ],
                    'action' => [
                        'type' => 'string',
                        'enum' => [
                            'setOption',
                            'removeOption',
                            'updateComment',
                            'addColumn',
                            'renameColumn',
                            'dropColumn',
                            'updateColumnComment',
                            'updateColumnType',
                            'updateColumnPosition',
                            'updateColumnNullability',
                        ],
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                    'newDataType' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                ],
            ],
            'IcebergNestedField' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'doc' => [
                        'type' => 'string',
                    ],
                    'optional' => [
                        'type' => 'boolean',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IcebergPartitionField' => [
                'type' => 'object',
                'properties' => [
                    'sourceId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'transform' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'fieldId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IcebergSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'summary' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'sequenceNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timestampMillis' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'schemaId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'addedRows' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'operation' => [
                        'type' => 'string',
                    ],
                    'parentId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IcebergTable' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'icebergTableMetadata' => [
                        '$ref' => '#/components/schemas/IcebergTableMetadata',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IcebergTableMetadata' => [
                'type' => 'object',
                'properties' => [
                    'currentSnapshot' => [
                        '$ref' => '#/components/schemas/IcebergSnapshot',
                    ],
                    'partitionFields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/IcebergPartitionField',
                        ],
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/IcebergNestedField',
                        ],
                    ],
                    'properties' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Identifier' => [
                'type' => 'object',
                'properties' => [
                    'database' => [
                        'type' => 'string',
                    ],
                    'object' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MoMValues' => [
                'type' => 'object',
                'properties' => [
                    'lastDayValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastMonthValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'currentValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Move' => [
                'type' => 'object',
                'properties' => [
                    'referenceFieldName' => [
                        'type' => 'string',
                    ],
                    'fieldName' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'FIRST',
                            'AFTER',
                            'BEFORE',
                            'LAST',
                        ],
                    ],
                ],
            ],
            'Namespace' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Partition' => [
                'type' => 'object',
                'properties' => [
                    'lastFileCreationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'recordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'done' => [
                        'type' => 'boolean',
                    ],
                    'spec' => [
                        'type' => 'object',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'PartitionSummaries' => [
                'type' => 'object',
                'properties' => [
                    'partitions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PartitionSummary',
                        ],
                    ],
                    'nextPageToken' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PartitionSummary' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'partitionName' => [
                        'type' => 'string',
                    ],
                    'lastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'totalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Permission' => [
                'type' => 'object',
                'properties' => [
                    'principal' => [
                        'type' => 'string',
                    ],
                    'database' => [
                        'type' => 'string',
                    ],
                    'view' => [
                        'type' => 'string',
                    ],
                    'access' => [
                        'type' => 'string',
                    ],
                    'columns' => [
                        'type' => 'object',
                        'properties' => [
                            'columnNames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'excludedColumnNames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'function' => [
                        'type' => 'string',
                    ],
                    'table' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Role' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'isPredefined' => [
                        'type' => 'string',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'roleName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'rolePrincipal' => [
                        'type' => 'string',
                    ],
                    'users' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/User',
                        ],
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Schema' => [
                'type' => 'object',
                'properties' => [
                    'primaryKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'partitionKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                ],
            ],
            'Snapshot' => [
                'type' => 'object',
                'properties' => [
                    'deltaManifestList' => [
                        'type' => 'string',
                    ],
                    'changelogManifestList' => [
                        'type' => 'string',
                    ],
                    'watermark' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commitKind' => [
                        'type' => 'string',
                        'enum' => [
                            'APPEND',
                            'COMPACT',
                            'OVERWRITE',
                            'ANALYZE',
                        ],
                    ],
                    'deltaRecordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'baseManifestList' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'totalRecordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commitUser' => [
                        'type' => 'string',
                    ],
                    'logOffsets' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                    'schemaId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'indexManifest' => [
                        'type' => 'string',
                    ],
                    'changelogRecordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commitIdentifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeMillis' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'statistics' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Table' => [
                'type' => 'object',
                'properties' => [
                    'schema' => [
                        '$ref' => '#/components/schemas/Schema',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'isExternal' => [
                        'type' => 'boolean',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'schemaId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TableCompaction' => [
                'type' => 'object',
                'properties' => [
                    'catalogId' => [
                        'type' => 'string',
                    ],
                    'tableId' => [
                        'type' => 'string',
                    ],
                    'maxLevel0FileCount' => [
                        'type' => 'string',
                    ],
                    'lastCompactedFileTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TableSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'lastFileCreationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'recordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'snapshot' => [
                        '$ref' => '#/components/schemas/Snapshot',
                    ],
                ],
            ],
            'TableSummary' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'partitionCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'lastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'generatedDate' => [
                        'type' => 'string',
                    ],
                    'totalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'User' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'userName' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'RAM_USER',
                            'RAM_ROLE',
                        ],
                    ],
                    'userId' => [
                        'type' => 'string',
                    ],
                    'userPrincipal' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'Subscribe' => [
            'path' => '/dlf/v1/service/subscribe',
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
            'parameters' => [],
        ],
        'DescribeRegions' => [
            'path' => '/dlf/v1/service/regions',
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
        'GetRegionStatus' => [
            'path' => '/dlf/v1/service/status',
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
        'CreateCatalog' => [
            'path' => '/dlf/v1/catalogs',
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
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'options' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'optimizationConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PAIMON',
                                    'ICEBERG',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCatalog' => [
            'path' => '/dlf/v1/catalogs/{catalog}',
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
                    'name' => 'catalog',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AlterCatalog' => [
            'path' => '/dlf/v1/catalogs/{catalog}',
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
                    'name' => 'catalog',
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
                            'removals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'updates' => [
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
        'DropCatalog' => [
            'path' => '/dlf/v1/catalogs/{catalog}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'catalog',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCatalogs' => [
            'path' => '/dlf/v1/catalogs',
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
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'catalogNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCatalogToken' => [
            'path' => '/dlf/v1/catalogs/{catalog}/token',
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
                    'name' => 'catalog',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BatchGrantPermissions' => [
            'path' => '/dlf/v1/auth/permissions/{catalogId}/batchgrant',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'struct',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'permissions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Permission',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchRevokePermissions' => [
            'path' => '/dlf/v1/auth/permissions/{catalogId}/batchrevoke',
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
                    'name' => 'catalogId',
                    'in' => 'path',
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
                            'permissions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Permission',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPermissions' => [
            'path' => '/dlf/v1/auth/permissions/{catalogId}/list',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'function',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'view',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'principal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                        'required' => false,
                        'properties' => [
                            'roleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                    'name' => 'rolePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRole' => [
            'path' => '/dlf/v1/auth/roles',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'rolePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRoles' => [
            'path' => '/dlf/v1/auth/roles/list',
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
                    'name' => 'roleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUser' => [
            'path' => '/dlf/v1/auth/users',
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
                    'name' => 'userPrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListUsers' => [
            'path' => '/dlf/v1/auth/users/list',
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
                    'name' => 'userName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRoleUsers' => [
            'path' => '/dlf/v1/auth/roles/users/list',
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
                    'name' => 'rolePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateRoleUsers' => [
            'path' => '/dlf/v1/auth/roles/users',
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
                            'userPrincipals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListUserRoles' => [
            'path' => '/dlf/v1/auth/users/roles/list',
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
                    'name' => 'userPrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GrantRoleToUsers' => [
            'path' => '/dlf/v1/auth/roles/grant',
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
                        'required' => false,
                        'properties' => [
                            'userPrincipals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RevokeRoleFromUsers' => [
            'path' => '/dlf/v1/auth/roles/revoke',
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
                        'required' => false,
                        'properties' => [
                            'userPrincipals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCatalogSummary' => [
            'path' => '/dlf/v1/{catalogId}/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCatalogSummaryTrend' => [
            'path' => '/dlf/v1/{catalogId}/storage-summary/trend',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDatabaseSummary' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTableSummary' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListPartitionSummaries' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/partitions/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'partitionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dlfnext.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dlfnext.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dlfnext.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'dlfnext.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dlfnext.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dlfnext.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dlfnext.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dlfnext.eu-central-1.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'OSS',
        'product' => 'Oss',
        'version' => '2019-05-17',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListBuckets' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-resource-group-id',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ResourceGroupId',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListAllMyBucketsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        '$ref' => '#/components/schemas/Owner',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextMarker' => [
                                        'type' => 'string',
                                    ],
                                    'Buckets' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Bucket' => [
                                                'type' => 'array',
                                                'items' => [
                                                    '$ref' => '#/components/schemas/Bucket',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/?regions',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'regions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RegionInfoList' => [
                                'type' => 'object',
                                'properties' => [
                                    'RegionInfo' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/RegionInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketStat' => [
            'path' => '/?stat',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketStat' => [
                                '$ref' => '#/components/schemas/BucketStat',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucket' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/BucketACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-resource-group-id',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ResourceGroupId',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CreateBucketConfiguration' => [
                                '$ref' => '#/components/schemas/CreateBucketConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'DeleteBucket' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'ListObjects' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListBucketResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'NextMarker' => [
                                        'type' => 'string',
                                    ],
                                    'Contents' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ObjectSummary',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'ListObjectsV2' => [
            'path' => '/?list-type=2',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fetch-owner',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'start-after',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListBucketResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'StartAfter' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'KeyCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'ContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'Contents' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ObjectSummary',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'GetBucketInfo' => [
            'path' => '/?bucketInfo',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketInfo' => [
                                '$ref' => '#/components/schemas/BucketInfo',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetBucketLocation' => [
            'path' => '/?location',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'LocationConstraint' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListAccessPoints' => [
            'path' => '/?accessPoint',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListAccessPointsResult' => [
                                '$ref' => '#/components/schemas/ListAccessPointsResult',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccessPoint' => [
            'path' => '/?accessPoint',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'GetAccessPointResult' => [
                                '$ref' => '#/components/schemas/GetAccessPointResult',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccessPointPolicy' => [
            'path' => '/?accessPointPolicy',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAccessPointPolicy' => [
            'path' => '/?accessPointPolicy',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PutAccessPointPolicy' => [
            'path' => '/?accessPointPolicy',
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
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAccessPoint' => [
            'path' => '/?accessPoint',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'CreateAccessPoint' => [
            'path' => '/?accessPoint',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CreateAccessPointConfiguration' => [
                                '$ref' => '#/components/schemas/CreateAccessPointConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateAccessPointResult' => [
                                '$ref' => '#/components/schemas/CreateAccessPointResult',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InitiateBucketWorm' => [
            'path' => '/?worm',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InitiateWormConfiguration' => [
                                '$ref' => '#/components/schemas/InitiateWormConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'AbortBucketWorm' => [
            'path' => '/?worm',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'CompleteBucketWorm' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'wormId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'ExtendBucketWorm' => [
            'path' => '/?wormExtend',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'wormId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ExtendWormConfiguration' => [
                                '$ref' => '#/components/schemas/ExtendWormConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'GetBucketWorm' => [
            'path' => '/?worm',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'WormConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'WormId' => [
                                        'type' => 'string',
                                    ],
                                    'State' => [
                                        '$ref' => '#/components/schemas/BucketWormState',
                                    ],
                                    'RetentionPeriodInDays' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CreationDate' => [
                                        'type' => 'string',
                                    ],
                                    'ExpirationDate' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketAcl' => [
            'path' => '/?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/BucketACL',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketAcl' => [
            'path' => '/?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessControlPolicy' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        '$ref' => '#/components/schemas/Owner',
                                    ],
                                    'AccessControlList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Grant' => [
                                                '$ref' => '#/components/schemas/BucketACL',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketLifecycle' => [
            'path' => '/?lifecycle',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-allow-same-action-overlap',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'LifecycleConfiguration' => [
                                '$ref' => '#/components/schemas/LifecycleConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketLifecycle' => [
            'path' => '/?lifecycle',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'LifecycleConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Rule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/LifecycleRule',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketLifecycle' => [
            'path' => '/?lifecycle',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketTransferAcceleration' => [
            'path' => '/?transferAcceleration',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TransferAccelerationConfiguration' => [
                                '$ref' => '#/components/schemas/TransferAccelerationConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketTransferAcceleration' => [
            'path' => '/?transferAcceleration',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TransferAccelerationConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketVersioning' => [
            'path' => '/?versioning',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'VersioningConfiguration' => [
                                '$ref' => '#/components/schemas/VersioningConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'GetBucketVersioning' => [
            'path' => '/?versioning',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VersioningConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        '$ref' => '#/components/schemas/BucketVersioningStatus',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
            ],
        ],
        'ListObjectVersions' => [
            'path' => '/?versions',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'key-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'version-id-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListVersionsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'VersionIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'NextKeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'NextVersionIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'Version' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ObjectVersion',
                                        ],
                                    ],
                                    'DeleteMarker' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/DeleteMarkerEntry',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'PutBucketPolicy' => [
            'path' => '/?policy',
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
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
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
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBucketPolicy' => [
            'path' => '/?policy',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteBucketPolicy' => [
            'path' => '/?policy',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'GetBucketPolicyStatus' => [
            'path' => '/?policyStatus',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PolicyStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'IsPublic' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketRtc' => [
            'path' => '/?rtc',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ReplicationRule' => [
                                '$ref' => '#/components/schemas/RtcConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutBucketReplication' => [
            'path' => '/?replication&comp=add',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ReplicationConfiguration' => [
                                '$ref' => '#/components/schemas/ReplicationConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketReplication' => [
            'path' => '/?replication',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ReplicationConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Rule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ReplicationRule',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketReplicationLocation' => [
            'path' => '/?replicationLocation',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ReplicationLocation' => [
                                'type' => 'object',
                                'properties' => [
                                    'Location' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'LocationTransferTypeConstraint' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'LocationTransferType' => [
                                                'type' => 'array',
                                                'items' => [
                                                    '$ref' => '#/components/schemas/LocationTransferType',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'LocationRTCConstraint' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Location' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [],
            ],
        ],
        'GetBucketReplicationProgress' => [
            'path' => '/?replicationProgress',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'rule-id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ReplicationProgress' => [
                                'type' => 'object',
                                'properties' => [
                                    'Rule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ReplicationProgressRule',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBucketReplication' => [
            'path' => '/?replication&comp=delete',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ReplicationRules' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ID' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5xx' => [],
            ],
        ],
        'PutBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'inventoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InventoryConfiguration' => [
                                '$ref' => '#/components/schemas/InventoryConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'GetBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'inventoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InventoryConfiguration' => [
                                '$ref' => '#/components/schemas/InventoryConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListInventoryConfigurationsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'InventoryConfiguration' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/InventoryConfiguration',
                                        ],
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
            ],
        ],
        'DeleteBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'inventoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'PutBucketLogging' => [
            'path' => '/?logging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BucketLoggingStatus' => [
                                '$ref' => '#/components/schemas/BucketLoggingStatus',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketLogging' => [
            'path' => '/?logging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketLoggingStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'LoggingEnabled' => [
                                        '$ref' => '#/components/schemas/LoggingEnabled',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketLogging' => [
            'path' => '/?logging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutUserDefinedLogFieldsConfig' => [
            'path' => '/?userDefinedLogFieldsConfig',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserDefinedLogFieldsConfiguration' => [
                                '$ref' => '#/components/schemas/UserDefinedLogFieldsConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetUserDefinedLogFieldsConfig' => [
            'path' => '/?userDefinedLogFieldsConfig',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UserDefinedLogFieldsConfiguration' => [
                                '$ref' => '#/components/schemas/UserDefinedLogFieldsConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUserDefinedLogFieldsConfig' => [
            'path' => '/?userDefinedLogFieldsConfig',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketWebsite' => [
            'path' => '/?website',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'WebsiteConfiguration' => [
                                '$ref' => '#/components/schemas/WebsiteConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketWebsite' => [
            'path' => '/?website',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'WebsiteConfiguration' => [
                                '$ref' => '#/components/schemas/WebsiteConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'DeleteBucketWebsite' => [
            'path' => '/?website',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketReferer' => [
            'path' => '/?referer',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RefererConfiguration' => [
                                '$ref' => '#/components/schemas/RefererConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketReferer' => [
            'path' => '/?referer',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RefererConfiguration' => [
                                '$ref' => '#/components/schemas/RefererConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketTags' => [
            'path' => '/?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Tagging' => [
                                '$ref' => '#/components/schemas/Tagging',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketTags' => [
            'path' => '/?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Tagging' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagSet' => [
                                        '$ref' => '#/components/schemas/TagSet',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketTags' => [
            'path' => '/?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'ListBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListBucketDataRedundancyTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'BucketDataRedundancyTransition' => [
                                        '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-redundancy-transition-taskid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketDataRedundancyTransition' => [
                                '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-target-redundancy-type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketDataRedundancyTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-redundancy-transition-taskid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutBucketEncryption' => [
            'path' => '/?encryption',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ServerSideEncryptionRule' => [
                                '$ref' => '#/components/schemas/ServerSideEncryptionRule',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketEncryption' => [
            'path' => '/?encryption',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ServerSideEncryptionRule' => [
                                'type' => 'object',
                                'properties' => [
                                    'ApplyServerSideEncryptionByDefault' => [
                                        '$ref' => '#/components/schemas/ApplyServerSideEncryptionByDefault',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketEncryption' => [
            'path' => '/?encryption',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketRequestPayment' => [
            'path' => '/?requestPayment',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RequestPaymentConfiguration' => [
                                '$ref' => '#/components/schemas/RequestPaymentConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketRequestPayment' => [
            'path' => '/?requestPayment',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestPaymentConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Payer' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketCors' => [
            'path' => '/?cors',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CORSConfiguration' => [
                                '$ref' => '#/components/schemas/CORSConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketCors' => [
            'path' => '/?cors',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CORSConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'CORSRule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CORSRule',
                                        ],
                                    ],
                                    'ResponseVary' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketCors' => [
            'path' => '/?cors',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'OptionObject' => [
            'path' => '/{key}',
            'methods' => [
                'options',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Origin',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Access-Control-Request-Method',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Access-Control-Request-Headers',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketAccessMonitor' => [
            'path' => '/?accessmonitor',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AccessMonitorConfiguration' => [
                                '$ref' => '#/components/schemas/AccessMonitorConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketAccessMonitor' => [
            'path' => '/?accessmonitor',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessMonitorConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        '$ref' => '#/components/schemas/AccessMonitorStatus',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMetaQueryStatus' => [
            'path' => '/?metaQuery',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MetaQueryStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'Phase' => [
                                        'type' => 'string',
                                    ],
                                    'CreateTime' => [
                                        'type' => 'string',
                                    ],
                                    'UpdateTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CloseMetaQuery' => [
            'path' => '/?metaQuery&comp=delete',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DoMetaQuery' => [
            'path' => '/?metaQuery&comp=query',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MetaQuery' => [
                                '$ref' => '#/components/schemas/MetaQuery',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MetaQuery' => [
                                'type' => 'object',
                                'properties' => [
                                    'NextToken' => [
                                        'type' => 'string',
                                    ],
                                    'Files' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'File' => [
                                                'type' => 'array',
                                                'items' => [
                                                    '$ref' => '#/components/schemas/MetaQueryFile',
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
        ],
        'OpenMetaQuery' => [
            'path' => '/?metaQuery&comp=add',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'UpdateUserAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'x-oss-defender-instance',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-status',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'UpdateBucketAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-instance',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-status',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AntiDDOSConfiguration' => [
                                '$ref' => '#/components/schemas/BucketAntiDDOSConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'ListBucketAntiDDosInfo' => [
            'path' => '/?bucketAntiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AntiDDOSListConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'AntiDDOSConfiguration' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/BucketAntiDDOSInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InitUserAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [],
            ],
        ],
        'InitBucketAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-instance',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AntiDDOSConfiguration' => [
                                '$ref' => '#/components/schemas/BucketAntiDDOSConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetUserAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AntiDDOSListConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'AntiDDOSConfiguration' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/UserAntiDDOSInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketResourceGroup' => [
            'path' => '/?resourceGroup',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketResourceGroupConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'ResourceGroupId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketResourceGroup' => [
            'path' => '/?resourceGroup',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BucketResourceGroupConfiguration' => [
                                '$ref' => '#/components/schemas/BucketResourceGroupConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutCname' => [
            'path' => '/?cname&comp=add',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BucketCnameConfiguration' => [
                                '$ref' => '#/components/schemas/BucketCnameConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'ListCname' => [
            'path' => '/?cname',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListCnameResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Owner' => [
                                        'type' => 'string',
                                    ],
                                    'Cname' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CnameInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteCname' => [
            'path' => '/?cname&comp=delete',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BucketCnameConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Cname' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Domain' => [
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
            'responses' => [
                200 => [],
            ],
        ],
        'GetCnameToken' => [
            'path' => '/?comp=token',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cname',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CnameToken' => [
                                '$ref' => '#/components/schemas/CnameToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateCnameToken' => [
            'path' => '/?cname&comp=token',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BucketCnameConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Cname' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Domain' => [
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
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CnameToken' => [
                                '$ref' => '#/components/schemas/CnameToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'styleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'category',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Style' => [
                                '$ref' => '#/components/schemas/Style',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'ListStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'StyleList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Style' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/StyleInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'styleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Style' => [
                                '$ref' => '#/components/schemas/StyleInfo',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'styleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketHttpsConfig' => [
            'path' => '/?httpsConfig',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpsConfiguration' => [
                                '$ref' => '#/components/schemas/HttpsConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketHttpsConfig' => [
            'path' => '/?httpsConfig',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'HttpsConfiguration' => [
                                '$ref' => '#/components/schemas/HttpsConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'CreateAccessPointForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CreateAccessPointForObjectProcessConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'AccessPointName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ObjectProcessConfiguration' => [
                                        '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                                        'required' => false,
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateAccessPointForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessPointForObjectProcessArn' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointForObjectProcessAlias' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccessPointForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'GetAccessPointForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessPointNameForObjectProcess' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointForObjectProcessAlias' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointName' => [
                                        'type' => 'string',
                                    ],
                                    'AccountId' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointForObjectProcessArn' => [
                                        'type' => 'string',
                                    ],
                                    'CreationDate' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'Endpoints' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'PublicEndpoint' => [
                                                'type' => 'string',
                                            ],
                                            'InternalEndpoint' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                    ],
                                    'PublicAccessBlockConfiguration' => [
                                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAccessPointsForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListAccessPointsForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'AccountId' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointsForObjectProcess' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'AccessPointForObjectProcess' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'AccessPointNameForObjectProcess' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AccessPointForObjectProcessAlias' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AccessPointName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Status' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AllowAnonymousAccessForObjectProcess' => [
                                                            'type' => 'string',
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
                ],
            ],
        ],
        'DeleteAccessPointForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetAccessPointConfigForObjectProcess' => [
            'path' => '/?accessPointConfigForObjectProcess',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'GetAccessPointConfigForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'ObjectProcessConfiguration' => [
                                        '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                    ],
                                    'PublicAccessBlockConfiguration' => [
                                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutAccessPointConfigForObjectProcess' => [
            'path' => '/?accessPointConfigForObjectProcess',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'PutAccessPointConfigForObjectProcessConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ObjectProcessConfiguration' => [
                                        '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                                        'required' => false,
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PublicAccessBlockConfiguration' => [
                                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutAccessPointPolicyForObjectProcess' => [
            'path' => '/?accessPointPolicyForObjectProcess',
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
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAccessPointPolicyForObjectProcess' => [
            'path' => '/?accessPointPolicyForObjectProcess',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/json',
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAccessPointPolicyForObjectProcess' => [
            'path' => '/?accessPointPolicyForObjectProcess',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DeletePublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DeleteBucketPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetAccessPointPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutAccessPointPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'DeleteAccessPointPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketArchiveDirectRead' => [
            'path' => '/?bucketArchiveDirectRead',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ArchiveDirectReadConfiguration' => [
                                '$ref' => '#/components/schemas/ArchiveDirectReadConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketArchiveDirectRead' => [
            'path' => '/?bucketArchiveDirectRead',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ArchiveDirectReadConfiguration' => [
                                '$ref' => '#/components/schemas/ArchiveDirectReadConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutObject' => [
            'path' => '/{key}',
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
                'application/octet-stream',
            ],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-data-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption-key-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-meta-*',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CopyObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-none-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-unmodified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-modified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-metadata-directive',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-data-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption-key-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging-directive',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-meta-*',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CopyObjectResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'ETag' => [
                                        'type' => 'string',
                                    ],
                                    'LastModified' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'response-content-type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-content-language',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-expires',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-cache-control',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-content-disposition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-content-encoding',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Range',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Modified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Unmodified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-None-Match',
                    'in' => 'header',
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
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'AppendObject' => [
            'path' => '/{key}?append',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'position',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-meta-*',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'Cache-Control',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Disposition',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-MD5',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Expires',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'HeadObject' => [
            'path' => '/{key}',
            'methods' => [
                'head',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Modified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Unmodified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-None-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetObjectMeta' => [
            'path' => '/{key}?objectMeta',
            'methods' => [
                'head',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'RestoreObject' => [
            'path' => '/{key}?restore',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RestoreRequest' => [
                                '$ref' => '#/components/schemas/RestoreRequest',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'SelectObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
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
                        '$ref' => '#/components/schemas/SelectRequest',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'CreateSelectObjectMeta' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
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
                        '$ref' => '#/components/schemas/SelectMetaRequest',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        '$ref' => '#/components/schemas/SelectMetaStatus',
                    ],
                ],
            ],
        ],
        'InitiateMultipartUpload' => [
            'path' => '/{key}?uploads',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-data-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption-key-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cache-Control',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Disposition',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Expires',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InitiateMultipartUploadResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'UploadId' => [
                                        'type' => 'string',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'UploadPart' => [
            'path' => '/{key}',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'partNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CompleteMultipartUpload' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-complete-all',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CompleteMultipartUpload' => [
                                '$ref' => '#/components/schemas/CompleteMultipartUpload',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CompleteMultipartUploadResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'Location' => [
                                        'type' => 'string',
                                    ],
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'ETag' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'UploadPartCopy' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'partNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-range',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-none-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-unmodified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-modified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CopyPartResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'LastModified' => [
                                        'type' => 'string',
                                        'format' => 'iso8601',
                                    ],
                                    'ETag' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'AbortMultipartUpload' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'ListMultipartUploads' => [
            'path' => '/?uploads',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-uploads',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'key-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'upload-id-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListMultipartUploadsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'UploadIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'NextKeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'NextUploadIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxUploads' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'Upload' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/Upload',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListParts' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'max-parts',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'part-number-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListPartResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'UploadId' => [
                                        'type' => 'string',
                                    ],
                                    'PartNumberMarker' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'NextPartNumberMarker' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'MaxParts' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'Part' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/Part',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [],
            ],
        ],
        'PutObjectAcl' => [
            'path' => '/{key}?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetObjectAcl' => [
            'path' => '/{key}?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessControlPolicy' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        '$ref' => '#/components/schemas/Owner',
                                    ],
                                    'AccessControlList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Grant' => [
                                                '$ref' => '#/components/schemas/ObjectACL',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutSymlink' => [
            'path' => '/{key}?symlink',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-symlink-target',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetSymlink' => [
            'path' => '/{key}?symlink',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutObjectTagging' => [
            'path' => '/{key}?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Tagging' => [
                                '$ref' => '#/components/schemas/Tagging',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetObjectTagging' => [
            'path' => '/{key}?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Tagging' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagSet' => [
                                        '$ref' => '#/components/schemas/TagSet',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteObjectTagging' => [
            'path' => '/{key}?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutLiveChannel' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'LiveChannelConfiguration' => [
                                '$ref' => '#/components/schemas/LiveChannelConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateLiveChannelResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'PublishUrls' => [
                                        '$ref' => '#/components/schemas/LiveChannelPublishUrls',
                                    ],
                                    'PlayUrls' => [
                                        '$ref' => '#/components/schemas/LiveChannelPlayUrls',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListLiveChannel' => [
            'path' => '/?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListLiveChannelResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextMarker' => [
                                        'type' => 'string',
                                    ],
                                    'LiveChannel' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/LiveChannel',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteLiveChannel' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutLiveChannelStatus' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetLiveChannelInfo' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'LiveChannelConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'Target' => [
                                        '$ref' => '#/components/schemas/LiveChannelTarget',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetLiveChannelHistory' => [
            'path' => '/{channel}?live&comp=history',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'LiveChannelHistory' => [
                                'type' => 'object',
                                'properties' => [
                                    'LiveRecord' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/LiveRecord',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetLiveChannelStat' => [
            'path' => '/{channel}?live&comp=stat',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'LiveChannelStat' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'ConnectedTime' => [
                                        'type' => 'string',
                                        'format' => 'iso8601',
                                    ],
                                    'RemoteAddr' => [
                                        'type' => 'string',
                                    ],
                                    'Video' => [
                                        '$ref' => '#/components/schemas/LiveChannelVideo',
                                    ],
                                    'Audio' => [
                                        '$ref' => '#/components/schemas/LiveChannelAudio',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetVodPlaylist' => [
            'path' => '/{channel}?vod',
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
                'application/xml',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PostVodPlaylist' => [
            'path' => '/{channel}/{playlist}?vod',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'playlist',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wuhan-lr',
            'endpoint' => 'oss-cn-wuhan-lr.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'oss-cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'oss-cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'oss-cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'oss-cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'oss-cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'oss-cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'oss-cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'oss-cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'oss-cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'oss-cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'oss-cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'oss-cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'oss-cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'oss-cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'oss-ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'oss-ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'oss-ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'oss-ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'oss-ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'oss-ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'oss-ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'oss-us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'oss-us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'oss-eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'oss-eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'oss-ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'oss-me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'oss-cn-hzjbp-b-console.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'oss-cn-shanghai-finance-1-internal.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'oss-cn-shenzhen-finance-1-internal.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'oss-ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'oss-cn-beijing-finance-1-internal.aliyuncs.com',
        ],
    ],
];
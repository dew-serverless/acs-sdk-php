<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cms-export',
        'version' => '2021-11-01',
    ],
    'directories' => [
        [
            'id' => 120930,
            'title' => '数据导出',
            'type' => 'directory',
            'children' => [
                'BatchGet',
                'Cursor',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'BatchGet' => [
            'summary' => '导出在Cursor接口中定义的监控数据。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的数据命名空间。'."\n"
                            ."\n"
                            .'关于如何获取云产品的数据命名空间，请参见[云产品监控项](~~163515~~)。'."\n"
                            ."\n"
                            .'> 本参数必须与Cursor接口中的请求参数`Namespace`相同。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs_ecs_dashboard',
                    ],
                ],
                [
                    'name' => 'Metric',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的监控项名称。'."\n"
                            ."\n"
                            .'关于如何获取云产品的监控项名称，请参见[云产品监控项](~~163515~~)。'."\n"
                            ."\n"
                            .'> 本参数必须与Cursor接口中的请求参数`Metric`相同。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cpu_idle',
                    ],
                ],
                [
                    'name' => 'Cursor',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '循环调用本接口导出数据时，必须输入`Cursor`的值。`Cursor`值的获取方法如下：'."\n"
                            ."\n"
                            .'- 当您初次调用本接口时，必须先调用Cursor接口，获取`Cursor`的值。更多信息，请参见[Cursor](~~391206~~)。'."\n"
                            ."\n"
                            .'- 当您再次调用本接口时，可以从上次调用本接口的返回数据中获取`Cursor`的值。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0MzIwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQ3NTY2MzYzMjY3NmI2ZjM5MzU2YjY4MzAzMTYyNzg3MTcwNjkzMTM3MjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2****',
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每次最多返回的数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'CompressionType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '监控数据的压缩类型。'."\n"
                            ."\n"
                            .'目前仅支持`normal`（不压缩）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'RecordKeyWhiteList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '监控项统计方法的白名单。'."\n"
                            ."\n"
                            .'- 如果不设置该参数，则表示返回监控项的所有统计方法的监控数据。'."\n"
                            ."\n"
                            .'- 如果设置该参数，则表示仅返回白名单中统计方法的监控数据。'."\n"
                            ."\n"
                            .'关于如何获取监控项的统计方法，请参见[云产品监控项](~~163515~~)中的参数`Statistics`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Maximum',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '251402CD-305C-1617-808E-D8C11FC8138D',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回的数据体。',
                                'type' => 'object',
                                'properties' => [
                                    'Cursor' => [
                                        'description' => '用于再次调用本接口。'."\n"
                                            ."\n"
                                            .'> 如果返回结果为`null`，则说明监控数据导出完成。'."\n",
                                        'type' => 'string',
                                        'example' => 'eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0ODAwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQzMjdhNjU2MjY3N2E2NjZhNzczOTY2NmM3Mjc0NjM3MzY5Njg3NDcyMjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTUyMzYxMTIsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTUyMzYxMTIsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDYzNjExMiwiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDYzNjExMiwic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2MH0=',
                                    ],
                                    'Records' => [
                                        'description' => '监控数据导出列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '-',
                                            'type' => 'object',
                                            'properties' => [
                                                'Namespace' => [
                                                    'description' => '云产品的数据命名空间。',
                                                    'type' => 'string',
                                                    'example' => 'acs_ecs_dashboard',
                                                ],
                                                'Metric' => [
                                                    'description' => '云产品的监控项名称。',
                                                    'type' => 'string',
                                                    'example' => 'cpu_idle',
                                                ],
                                                'MeasureLabels' => [
                                                    'description' => '监控项统计方法的键。'."\n"
                                                        ."\n"
                                                        .'监控项统计方法的格式：key-value键值对形式的集合。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '监控项统计方法的键。'."\n"
                                                            ."\n"
                                                            .'监控项统计方法的格式：key-value键值对形式的集合。',
                                                        'type' => 'string',
                                                        'example' => '[Minimum, Maximum, Average]',
                                                    ],
                                                ],
                                                'MeasureValues' => [
                                                    'description' => '监控项统计方法的值。'."\n"
                                                        ."\n"
                                                        .'监控项统计方法的格式：key-value键值对形式的集合。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '监控项统计方法的值。'."\n"
                                                            ."\n"
                                                            .'监控项统计方法的格式：key-value键值对形式的集合。',
                                                        'type' => 'string',
                                                        'example' => '[0.71, 0.81, 0.91]',
                                                    ],
                                                ],
                                                'Labels' => [
                                                    'description' => '监控项维度的键。'."\n"
                                                        ."\n"
                                                        .'监控项维度的格式：key-value键值对形式的集合。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '监控项维度的键。'."\n"
                                                            ."\n"
                                                            .'监控项维度的格式：key-value键值对形式的集合。',
                                                        'type' => 'string',
                                                        'example' => '[instanceId, userId]',
                                                    ],
                                                ],
                                                'LabelValues' => [
                                                    'description' => '监控项维度的值。'."\n"
                                                        ."\n"
                                                        .'监控项维度的格式：key-value键值对形式的集合。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '监控项维度的值。'."\n"
                                                            ."\n"
                                                            .'监控项维度的格式：key-value键值对形式的集合。',
                                                        'type' => 'string',
                                                        'example' => '[i-0jl0z6wbjh8w4xcv****, 173651113438****]',
                                                    ],
                                                ],
                                                'Tags' => [
                                                    'description' => '资源的标签键。'."\n"
                                                        ."\n"
                                                        .'> 目前该参数为空。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '资源的标签键。'."\n"
                                                            ."\n"
                                                            .'> 目前该参数为空。',
                                                        'type' => 'string',
                                                        'example' => '-',
                                                    ],
                                                ],
                                                'TagValues' => [
                                                    'description' => '资源的标签值。'."\n"
                                                        ."\n"
                                                        .'> 目前该参数为空。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '资源的标签值。'."\n"
                                                            ."\n"
                                                            .'> 目前该参数为空。',
                                                        'type' => 'string',
                                                        'example' => '-',
                                                    ],
                                                ],
                                                'Timestamp' => [
                                                    'description' => '监控数据的时间戳。'."\n"
                                                        ."\n"
                                                        .'单位：毫秒。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1641454680000',
                                                ],
                                                'Period' => [
                                                    'description' => '监控数据的统计周期。'."\n"
                                                        ."\n"
                                                        .'单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '60',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Length' => [
                                        'description' => '每次最多返回的数据条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1000',
                                    ],
                                    'CompressionKeys' => [
                                        'description' => '监控数据压缩类型的键。'."\n"
                                            ."\n"
                                            .'> 当`CompressionType`为`normal`时，该参数为空。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '监控数据压缩类型的键。'."\n"
                                                ."\n"
                                                .'> 当`CompressionType`为`normal`时，该参数为空。',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                    ],
                                    'CompressionValues' => [
                                        'description' => '监控数据压缩类型的值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '监控数据压缩类型的值。'."\n"
                                                ."\n"
                                                .'> 当`CompressionType`为`normal`时，该参数为空。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '监控数据压缩类型的值。'."\n"
                                                    ."\n"
                                                    .'> 当`CompressionType`为`normal`时，该参数为空。',
                                                'type' => 'string',
                                                'example' => '-',
                                            ],
                                        ],
                                    ],
                                    '__anchorTs__' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'> 200表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '操作是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"251402CD-305C-1617-808E-D8C11FC8138D\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Cursor\\": \\"eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0ODAwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQzMjdhNjU2MjY3N2E2NjZhNzczOTY2NmM3Mjc0NjM3MzY5Njg3NDcyMjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTUyMzYxMTIsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTUyMzYxMTIsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDYzNjExMiwiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDYzNjExMiwic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2MH0=\\",\\n    \\"Records\\": [\\n      {\\n        \\"Namespace\\": \\"acs_ecs_dashboard\\",\\n        \\"Metric\\": \\"cpu_idle\\",\\n        \\"MeasureLabels\\": [\\n          \\"[Minimum, Maximum, Average]\\"\\n        ],\\n        \\"MeasureValues\\": [\\n          \\"[0.71, 0.81, 0.91]\\"\\n        ],\\n        \\"Labels\\": [\\n          \\"[instanceId, userId]\\"\\n        ],\\n        \\"LabelValues\\": [\\n          \\"[i-0jl0z6wbjh8w4xcv****, 173651113438****]\\"\\n        ],\\n        \\"Tags\\": [\\n          \\"-\\"\\n        ],\\n        \\"TagValues\\": [\\n          \\"-\\"\\n        ],\\n        \\"Timestamp\\": 1641454680000,\\n        \\"Period\\": 60\\n      }\\n    ],\\n    \\"Length\\": 1000,\\n    \\"CompressionKeys\\": [\\n      \\"-\\"\\n    ],\\n    \\"CompressionValues\\": [\\n      [\\n        \\"-\\"\\n      ]\\n    ],\\n    \\"__anchorTs__\\": 0\\n  },\\n  \\"Code\\": 200,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchGetResponse>\\n\\t<RequestId>251402CD-305C-1617-808E-D8C11FC8138D</RequestId>\\n\\t<Message>success</Message>\\n\\t<Data>\\n\\t\\t<Cursor>eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0ODAwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQzMjdhNjU2MjY3N2E2NjZhNzczOTY2NmM3Mjc0NjM3MzY5Njg3NDcyMjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTUyMzYxMTIsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTUyMzYxMTIsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDYzNjExMiwiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDYzNjExMiwic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2MH0=</Cursor>\\n\\t\\t<Records>\\n\\t\\t\\t<Namespace>acs_ecs_dashboard</Namespace>\\n\\t\\t\\t<Metric>cpu_idle</Metric>\\n\\t\\t\\t<MeasureLabels>[Minimum, Maximum, Average]</MeasureLabels>\\n\\t\\t\\t<MeasureValues>[0.71, 0.81, 0.91]</MeasureValues>\\n\\t\\t\\t<Labels>[instanceId, userId]</Labels>\\n\\t\\t\\t<LabelValues>[i-0jl0z6wbjh8w4xcv****, 173651113438****]</LabelValues>\\n\\t\\t\\t<Timestamp>1641454680000</Timestamp>\\n\\t\\t\\t<Period>60</Period>\\n\\t\\t</Records>\\n\\t\\t<Length>1000</Length>\\n\\t</Data>\\n\\t<Code>200</Code>\\n\\t<Success>true</Success>\\n</BatchGetResponse>\\t","errorExample":""}]',
            'title' => '获取导出数据',
            'description' => '### 前提条件'."\n"
                .'请确保您已调用Cursor接口获取初始的`Cursor`。更多信息，请参见[Cursor](~~391206~~)。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                .'本文将提供一个示例，导出云产品`acs_ecs_dashboard`的监控项`cpu_idle`的某个初始`Cursor`的监控数据，且每次最多返回1000条数据。'."\n",
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~382265~~)。',
        ],
        'Cursor' => [
            'summary' => '定义导出监控数据的范围并返回用于初始调用BatchGet接口的Cursor参数。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的数据命名空间。'."\n"
                            ."\n"
                            .'关于如何获取云产品的数据命名空间，请参见[云产品监控项](~~163515~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs_ecs_dashboard',
                    ],
                ],
                [
                    'name' => 'Metric',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的监控项名称。'."\n"
                            ."\n"
                            .'关于如何获取云产品的监控项名称，请参见[云产品监控项](~~163515~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cpu_idle',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '监控项的时间间隔。'."\n"
                            ."\n"
                            .'单位：秒。'."\n"
                            ."\n"
                            .'> 监控项的时间间隔通常为60秒。特殊取值，请参见[云产品监控项](~~163515~~)中的参数`Period`。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间戳。'."\n"
                            ."\n"
                            .'单位：毫秒。'."\n"
                            ."\n"
                            .'> 由于云监控中的监控数据只能保存90天，建议开始时间与当前时间间隔小于等于90天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1641627000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间戳。'."\n"
                            ."\n"
                            .'单位：毫秒。'."\n"
                            ."\n"
                            .'> 结束时间无限制，可以设置为未来的某个时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1641645000000',
                    ],
                ],
                [
                    'name' => 'Matchers',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '监控项的维度信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '-',
                            'type' => 'object',
                            'properties' => [
                                'Label' => [
                                    'description' => '监控项维度的键。'."\n"
                                        ."\n"
                                        .'监控项维度的格式：key-value键值对形式的集合，例如：`instanceId:i-2ze2d6j5uhg20x47****`或`userId:120886317861****`。'."\n"
                                        ."\n"
                                        .'关于如何获取监控项的维度，请参见[云产品监控项](~~163515~~)中的参数`Dimension`。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'userId',
                                ],
                                'Value' => [
                                    'description' => '监控项维度的值。'."\n"
                                        ."\n"
                                        .'监控项维度的格式：key-value键值对形式的集合，例如：`instanceId:i-2ze2d6j5uhg20x47****`或`userId:120886317861****`。'."\n"
                                        ."\n"
                                        .'关于如何获取监控项的维度，请参见[云产品监控项](~~163515~~)中的参数`Dimension`。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '120886317861****',
                                ],
                                'Operator' => [
                                    'description' => '监控项维度的匹配关系。'."\n"
                                        ."\n"
                                        .'目前仅支持EQUALS（等于）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'EQUALS',
                                ],
                            ],
                            'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '915C2D7A-E6A4-17C3-8E13-4DBDD61E7919',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回的数据体。',
                                'type' => 'object',
                                'properties' => [
                                    'Cursor' => [
                                        'description' => '用于首次调用BatchGet接口。',
                                        'type' => 'string',
                                        'example' => 'eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0MzIwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQ3NTY2MzYzMjY3NmI2ZjM5MzU2YjY4MzAzMTYyNzg3MTcwNjkzMTM3MjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2****',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'> 200表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '操作是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"915C2D7A-E6A4-17C3-8E13-4DBDD61E7919\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Cursor\\": \\"eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0MzIwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQ3NTY2MzYzMjY3NmI2ZjM5MzU2YjY4MzAzMTYyNzg3MTcwNjkzMTM3MjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2****\\"\\n  },\\n  \\"Code\\": 200,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CursorResponse>\\n\\t<RequestId>915C2D7A-E6A4-17C3-8E13-4DBDD61E7919</RequestId>\\n\\t<Message>success</Message>\\n\\t<Data>\\n\\t\\t<Cursor>eyJidWNrZXRzIjo0LCJjdXJzb3IiOiIxNjQxNDU0MzIwMDAwMWUxY2YxNWY0NTU0MTliZjllYTY4OWQ2ODI1OTU1Yzc1NmZjMDQ2OTMxMzczMzM2MzUzMTMxMzEzMzM0MzMzODM5MzEzMTMwMjQyYzY5MmQ3NTY2MzYzMjY3NmI2ZjM5MzU2YjY4MzAzMTYyNzg3MTcwNjkzMTM3MjQyYyIsImN1cnNvclZlcnNpb24iOiJxdWVyeSIsImVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydEVuZFRpbWUiOjE2NDE0NTQ3OTU4MjMsImV4cG9ydFN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywiZXhwcmVzc1JhbmdlIjpmYWxzZSwiaGFzTmV4dCI6dHJ1ZSwiaW5wdXRNZXRyaWMiOiJDUFVVdGlsaXphdGlvbiIsImlucHV0TmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJsaW1pdCI6MTAwMCwibG9nVGltZU1vZGUiOnRydWUsIm1hdGNoZXJzIjp7ImNoYWluIjpbeyJsYWJlbCI6InVzZXJJZCIsIm9wZXJhdG9yIjoiRVFVQUxTIiwidmFsdWUiOiIxNzM2NTExMTM0Mzg5MTEwIn1dfSwibWV0cmljIjoiQ1BVVXRpbGl6YXRpb24iLCJtZXRyaWNUeXBlIjoiTUVUUklDIiwibmFtZXNwYWNlIjoiYWNzX2Vjc19kYXNoYm9hcmQiLCJuZXh0UGtBZGFwdGVyIjp7fSwib2Zmc2V0IjowLCJwYXJlbnRVaWQiOjEyNzA2NzY2Nzk1NDY3MDQsInN0YXJ0VGltZSI6MTY0MTQ1NDE5NTgyMywic3RlcCI6LTEsInRpbWVvdXQiOjEyMCwid2luZG93Ijo2****</Cursor>\\n\\t</Data>\\n\\t<Code>200</Code>\\n\\t<Success>true</Success>\\n</CursorResponse>\\t","errorExample":""}]',
            'title' => '获取导出数据初始游标',
            'description' => '### 前提条件'."\n"
                .'请确保您已开通企业云监控。具体操作，请参见[开通企业云监控](~~250773~~)。'."\n"
                ."\n"
                .'### 背景信息'."\n"
                .'先调用本接口获取初始的Cursor，再调用BatchGet接口导出监控数据。更多信息，请参见[BatchGet](~~391205~~)。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                .'本文将提供一个示例，定义云产品`acs_ecs_dashboard`的监控项`cpu_idle`在时间段`1641627000000`（2022-01-08 15:30:00）至`1641645000000`（2022-01-08 20:30:00）内每60秒的数据导出范围。返回结果显示`Cursor`信息。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~382265~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cms-export.cn-shanghai.aliyuncs.com',
        ],
    ],
];
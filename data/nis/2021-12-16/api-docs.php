<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'nis',
        'version' => '2021-12-16',
    ],
    'directories' => [
        [
            'id' => 183429,
            'title' => '流量分析',
            'type' => 'directory',
            'children' => [
                'GetInternetTuple',
                'GetNatTopN',
                'GetVbrFlowTopN',
                'GetTransitRouterFlowTopN',
            ],
        ],
        [
            'id' => 183223,
            'title' => '自助诊断',
            'type' => 'directory',
            'children' => [
                'CreateNetworkReachableAnalysis',
                'CreateNetworkPath',
                'CreateAndAnalyzeNetworkPath',
                'DeleteNetworkPath',
                'DeleteNetworkReachableAnalysis',
                'GetNetworkReachableAnalysis',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetInternetTuple' => [
            'summary' => '调用GetInternetTuple接口，获取公网流量详情数据排名，覆盖一元组、二元组、五元组粒度，支持按流量、包数等指标排序。',
            'methods' => [
                'get',
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
                'operationType' => 'list',
                'abilityTreeCode' => '173536',
                'abilityTreeNodes' => [
                    'FEATUREnetana5MCZ6K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网流量的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TupleType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询的元组类型，枚举：1，2，5，分别表示一元组、二元组、五元组',
                        'description' => '查询的元组类型。取值： '."\n"
                            .'- **1**：表示一元组。 '."\n"
                            .'- **2**：表示二元组。 '."\n"
                            .'- **5**：表示五元组。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                        'enum' => [
                            '1',
                            '2',
                            '5',
                        ],
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询起始时间的毫秒时间戳。',
                        'description' => '查询起始时间的毫秒时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '253402271999000',
                        'minimum' => '0',
                        'example' => '1684373600099',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询结束时间的毫秒时间戳。',
                        'description' => '查询结束时间的毫秒时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '253402271999000',
                        'minimum' => '0',
                        'example' => '1684373700099',
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询流量方向，取值：'."\n"
                            .'in：入云方向'."\n"
                            .'out：出云方向',
                        'description' => '查询流量方向，取值：'."\n"
                            ."\n"
                            .'- **in**：入云方向。'."\n"
                            .'- **out**：出云方向。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'in' => 'in',
                            'out' => 'out',
                        ],
                        'example' => 'in',
                        'enum' => [
                            'in',
                            'out',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '根据什么指标排序，默认值为ByteCount，即按流量排序。',
                        'description' => '数据排序的指标。默认值：**ByteCount**，表示按流量排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ByteCount',
                        'enum' => [
                            'Rtt',
                            'ByteCount',
                            'PacketCount',
                            'RetransmitRate',
                        ],
                    ],
                ],
                [
                    'name' => 'CloudIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '五元组：云端IP。',
                        'description' => '阿里云端IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '112.74.XX.XX',
                    ],
                ],
                [
                    'name' => 'CloudPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '五元组：云端端口',
                        'description' => '阿里云端端口。 '."\n"
                            .'> 仅**TupleType**配置为**5**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '443',
                    ],
                ],
                [
                    'name' => 'OtherIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '五元组：对端IP',
                        'description' => '对端IP。'."\n"
                            .' > 仅**TupleType**配置为**2**或**5**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '122.112.XX.XX',
                    ],
                ],
                [
                    'name' => 'OtherPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '五元组：对端端口',
                        'description' => '对端端口。'."\n"
                            .' > 仅**TupleType**配置为**5**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '40002',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '阿里云端实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-sample*',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'title' => '五元组：协议',
                        'description' => '协议号。 '."\n"
                            .'>支持全部协议， 仅**TupleType**配置为**5**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方向：desc从大到小排序，asc从小到大排序。',
                        'description' => '流量数据的排序方式。 '."\n"
                            .'- **desc**：从大到小排序。 '."\n"
                            .'- **asc**：从小到大排序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                        'default' => 'desc',
                        'enum' => [
                            'desc',
                            'asc',
                        ],
                    ],
                ],
                [
                    'name' => 'TopN',
                    'in' => 'query',
                    'schema' => [
                        'title' => '默认10',
                        'description' => '展示排序靠前的数据。默认值：**10**。表示默认展示排序前10的数据。最大值：**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'CloudIsp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云端运营商。',
                        'description' => '云端运营商。'."\n"
                            .'> 通常为“阿里巴巴”或“阿里云”。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里巴巴',
                    ],
                ],
                [
                    'name' => 'OtherIsp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对端运营商，查看运营商情况时，请指定此参数。',
                        'description' => '对端运营商。 '."\n"
                            .'> 查看运营商情况时，请指定此参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '移动',
                    ],
                ],
                [
                    'name' => 'OtherCountry',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对端国家。仅TupleType配置为5时，才需要配置该参数。',
                        'description' => '对端国家。'."\n"
                            .'>仅**TupleType**配置为**2**或**5**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '中国',
                    ],
                ],
                [
                    'name' => 'OtherCity',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对端城市。仅TupleType配置为5时，才需要配置该参数。',
                        'description' => '对端城市。'."\n"
                            .'>仅**TupleType**配置为**2**或**5**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'InstanceList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '批量过滤时的实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批量过滤时的实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[\\"eip-sample*\\"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CloudIpList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '批量过滤时的云上IP列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批量过滤时的云上IP。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[\\"103.212.XX.XX\\"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UseMultiAccount',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否使用多账号访问模式',
                        'description' => '是否使用多账号管理功能。默认值：**false**。表示不使用。 '."\n"
                            .'> 多账号管理功能默认不开放，如需使用，请联系商务经理申请使用权限。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'AccountIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '显式传递子账号ID',
                        'description' => '成员账号ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '某个成员账号ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '[123]',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ArrayList<PublicFlowTupleModel>>',
                        'description' => 'RpcResponse<ArrayList<PublicFlowTupleModel>>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D5E98683-355B-5867-8D3D-A24755F6895B',
                            ],
                            'Data' => [
                                'description' => '公网流量详情排名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '公网流量单行详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'BeginTime' => [
                                            'title' => '数据时间点',
                                            'description' => '数据毫秒时间戳。',
                                            'type' => 'string',
                                            'example' => '1684373600099',
                                        ],
                                        'Direction' => [
                                            'title' => '数据方向',
                                            'description' => '流量方向。取值：'."\n"
                                                .' - **in**：入云方向。 '."\n"
                                                .'- **out**：出云方向。',
                                            'type' => 'string',
                                            'example' => 'in',
                                        ],
                                        'InstanceId' => [
                                            'title' => '阿里侧IP归属的实例。',
                                            'description' => '阿里云端IP归属的实例ID。',
                                            'type' => 'string',
                                            'example' => 'eip-sample*',
                                        ],
                                        'AccessRegion' => [
                                            'title' => 'InstanceId为AnyCastEip时，流量进入阿里云的Pop点。',
                                            'description' => '流量进入阿里云的接入点。 '."\n"
                                                .'> 仅**InstanceId**为Anycast弹性公网IP时，该参数有效。',
                                            'type' => 'string',
                                            'example' => 'cn-hongkong-pop',
                                        ],
                                        'CloudIp' => [
                                            'title' => '五元组云端IP',
                                            'description' => '阿里云端IP。',
                                            'type' => 'string',
                                            'example' => '112.74.XX.XX',
                                        ],
                                        'CloudPort' => [
                                            'title' => '五元组云端端口',
                                            'description' => '阿里云端端口。',
                                            'type' => 'string',
                                            'example' => '443',
                                        ],
                                        'OtherIp' => [
                                            'title' => '五元组对端IP',
                                            'description' => '对端IP。',
                                            'type' => 'string',
                                            'example' => '122.112.XX.XX',
                                        ],
                                        'OtherPort' => [
                                            'title' => '五元组对端端口',
                                            'description' => '对端端口。',
                                            'type' => 'string',
                                            'example' => '40002',
                                        ],
                                        'Protocol' => [
                                            'title' => '五元组协议',
                                            'description' => '协议号。',
                                            'type' => 'string',
                                            'example' => '6',
                                        ],
                                        'CloudCountry' => [
                                            'title' => '云端国家/地区',
                                            'description' => '阿里云端国家或地区。',
                                            'type' => 'string',
                                            'example' => '中国',
                                        ],
                                        'CloudProvince' => [
                                            'title' => '云端省份',
                                            'description' => '阿里云端省份。',
                                            'type' => 'string',
                                            'example' => '江苏省',
                                        ],
                                        'CloudCity' => [
                                            'title' => '云端城市',
                                            'description' => '阿里云端城市。',
                                            'type' => 'string',
                                            'example' => '南京市',
                                        ],
                                        'CloudIsp' => [
                                            'title' => '云端ISP',
                                            'description' => '阿里云端运营商。',
                                            'type' => 'string',
                                            'example' => '移动',
                                        ],
                                        'CloudProduct' => [
                                            'title' => '云端ISP',
                                            'description' => '阿里云侧IP归属的实例对应的产品Code。',
                                            'type' => 'string',
                                            'example' => 'EIP',
                                        ],
                                        'OtherCountry' => [
                                            'title' => '对端国家/地区',
                                            'description' => '对端国家或地区。',
                                            'type' => 'string',
                                            'example' => '美国',
                                        ],
                                        'OtherProvince' => [
                                            'title' => '对端省份',
                                            'description' => '对端省份。当**OtherCountry**为国外时，此值多数为空。',
                                            'type' => 'string',
                                            'example' => '得克萨斯州',
                                        ],
                                        'OtherCity' => [
                                            'title' => '对端城市',
                                            'description' => '对端城市。当**OtherCountry**为国外时，此值多数为空。',
                                            'type' => 'string',
                                            'example' => '奥斯汀',
                                        ],
                                        'OtherIsp' => [
                                            'title' => '对端ISP',
                                            'description' => '对端运营商。',
                                            'type' => 'string',
                                            'example' => 'amazon.com',
                                        ],
                                        'OtherProduct' => [
                                            'title' => '对端ISP',
                                            'description' => '对端IP归属的产品。如果非云上IP，则为空。',
                                            'type' => 'string',
                                            'example' => 'ECS',
                                        ],
                                        'Rtt' => [
                                            'title' => 'RTT 指标(us)',
                                            'description' => '往返时延RTT（Round Trip Time）。单位：us。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '10000',
                                        ],
                                        'ByteCount' => [
                                            'title' => '流量指标(byte)',
                                            'description' => '流量数(Byte)。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '88',
                                        ],
                                        'PacketCount' => [
                                            'title' => '包数指标(个)',
                                            'description' => '流量包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '66',
                                        ],
                                        'OutOrderCount' => [
                                            'title' => '包数指标(个)',
                                            'description' => '乱序包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '1',
                                        ],
                                        'InByteCount' => [
                                            'title' => '包数指标(个)',
                                            'description' => '入云方向流量数。单位：Byte。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '88',
                                        ],
                                        'OutByteCount' => [
                                            'title' => '包数指标(个)',
                                            'description' => '出云方向流量数。单位：Byte。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '66',
                                        ],
                                        'InPacketCount' => [
                                            'title' => '入方向包数指标(个)',
                                            'description' => '入云方向流量包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '33',
                                        ],
                                        'OutPacketCount' => [
                                            'title' => '出方向包数指标(个)',
                                            'description' => '出云方向流量包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '22',
                                        ],
                                        'InOutOrderCount' => [
                                            'title' => '入方向乱序包数指标(个)',
                                            'description' => '入云方向乱序包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '2',
                                        ],
                                        'OutOutOrderCount' => [
                                            'title' => '出方向乱序包数指标(个)',
                                            'description' => '出云方向乱序包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '1',
                                        ],
                                        'InRetranCount' => [
                                            'title' => '入方向重传包数指标(个)',
                                            'description' => '入云方向重传包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '0',
                                        ],
                                        'OutRetranCount' => [
                                            'title' => '出方向重传包数指标(个)',
                                            'description' => '出云方向重传包数。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '1',
                                        ],
                                        'RetransmitRate' => [
                                            'title' => '重传率。',
                                            'description' => 'TCP报文的重传率。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '0.1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.TopN',
                        'errorMessage' => 'The TopN(%s) should not greater than 100.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTimeAndEndTime1H',
                        'errorMessage' => 'It only supports querying data for up to 1 hour: %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.GroupBy',
                        'errorMessage' => 'The specified param of GroupBy (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.OrderBy',
                        'errorMessage' => 'The specified param of orderBy (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.RegionId',
                        'errorMessage' => 'The specified region ID (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTimeAndEndTime',
                        'errorMessage' => 'It only supports querying data for up to 24 hours: %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTimeAndEndTime5M',
                        'errorMessage' => 'It only supports querying data for up to 5 minute when TupleType is 5 and the CloudIp and OtherIp are both empty: %s.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.DbConcurrentTooHigh',
                        'errorMessage' => 'The operation failed due to too many concurrent queries. Please try again later.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.DataTooMuch',
                        'errorMessage' => 'Too much data has been queried under the specified conditions. Shorten the query time, specify more precise filtering conditions, or try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.InstanceId',
                        'errorMessage' => 'The specified InstanceId(%s) does not exist.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.IpSets',
                        'errorMessage' => 'The specified instance does not exist or does not have any acceleration region.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5E98683-355B-5867-8D3D-A24755F6895B\\",\\n  \\"Data\\": [\\n    {\\n      \\"BeginTime\\": \\"1684373600099\\",\\n      \\"Direction\\": \\"in\\",\\n      \\"InstanceId\\": \\"eip-sample*\\",\\n      \\"AccessRegion\\": \\"cn-hongkong-pop\\",\\n      \\"CloudIp\\": \\"112.74.XX.XX\\",\\n      \\"CloudPort\\": \\"443\\",\\n      \\"OtherIp\\": \\"122.112.XX.XX\\",\\n      \\"OtherPort\\": \\"40002\\",\\n      \\"Protocol\\": \\"6\\",\\n      \\"CloudCountry\\": \\"中国\\",\\n      \\"CloudProvince\\": \\"江苏省\\",\\n      \\"CloudCity\\": \\"南京市\\",\\n      \\"CloudIsp\\": \\"移动\\",\\n      \\"CloudProduct\\": \\"EIP\\",\\n      \\"OtherCountry\\": \\"美国\\",\\n      \\"OtherProvince\\": \\"得克萨斯州\\",\\n      \\"OtherCity\\": \\"奥斯汀\\",\\n      \\"OtherIsp\\": \\"amazon.com\\",\\n      \\"OtherProduct\\": \\"ECS\\",\\n      \\"Rtt\\": 10000,\\n      \\"ByteCount\\": 88,\\n      \\"PacketCount\\": 66,\\n      \\"OutOrderCount\\": 1,\\n      \\"InByteCount\\": 88,\\n      \\"OutByteCount\\": 66,\\n      \\"InPacketCount\\": 33,\\n      \\"OutPacketCount\\": 22,\\n      \\"InOutOrderCount\\": 2,\\n      \\"OutOutOrderCount\\": 1,\\n      \\"InRetranCount\\": 0,\\n      \\"OutRetranCount\\": 1,\\n      \\"RetransmitRate\\": 0.1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取公网流量详情数据排名',
        ],
        'GetNatTopN' => [
            'summary' => '调用GetNatTopN接口，获取NAT网关的SNAT转发实时数据排名。',
            'methods' => [
                'get',
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
                'abilityTreeCode' => '116918',
                'abilityTreeNodes' => [
                    'FEATUREnetana5MCZ6K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Nat网关实例所属地域',
                        'description' => 'NAT网关实例所属地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'NatGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Nat网关实例ID',
                        'description' => 'NAT网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ngw-sample***',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询指标的开始毫秒时间戳。如果不指定EndTime，则查询的是BeginTime指定的时间点的TopN情况。',
                        'description' => '查询指标的开始毫秒时间戳。如果不指定**EndTime**，则查询的是**BeginTime**指定的时间点的情况。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1638239092000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询指标的结束毫秒时间戳。BeginTime和EndTime的最大差距不能超过24小时，即86400000。',
                        'description' => '查询指标的结束毫秒时间戳。**BeginTime**和**EndTime**的最大差距不能超过24小时，即**86400000**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1638239093000',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按哪个指标倒叙排序取TopN。',
                        'description' => '对NAT网关进行SNAT转发实时数据排名的指标。取值：'."\n"
                            .'-  **InBps**：入方向流量。单位：bps。'."\n"
                            .'-  **OutBps**：出方向流量。单位：bps。'."\n"
                            .'-  **InPps**：入方向包速率。单位：个/秒。'."\n"
                            .'-  **OutPps**：出方向包速率。单位：个/秒。'."\n"
                            .'-  **NewSessionPerSecond**：新建连接数。单位：个/秒。'."\n"
                            .'-  **ActiveSessionCount**：并发连接数。单位：个。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'InBps',
                    ],
                ],
                [
                    'name' => 'TopN',
                    'in' => 'query',
                    'schema' => [
                        'title' => '取最大多少条数据，默认10，最大100。',
                        'description' => '查询NAT网关的SNAT转发实时数据排名的条目数。取值范围：**1~100**。默认值：**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查指定ip的指标，此时无需传topN和orderBy',
                        'description' => '查询指定IP地址的监控指标。当输入Ip参数时，无需输入**TopN**和**OrderBy**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.156.101',
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
                                'example' => '77C512B5-12f3-f892-BD94-88A98271C1A0',
                            ],
                            'NatGatewayTopN' => [
                                'title' => '以下指标取BeginTime到EndTime的均值。',
                                'description' => 'NAT网关SNAT转发实时数据排名数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'NAT网关SNAT转发实时数据排名对象。以下指标取**BeginTime**到**EndTime**的均值。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'title' => 'IP地址',
                                            'description' => 'IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.156.101',
                                        ],
                                        'InBps' => [
                                            'title' => '入方向流量，单位bps',
                                            'description' => '入方向流量。单位：bps。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '100',
                                        ],
                                        'OutBps' => [
                                            'title' => '出方向流量，单位bps',
                                            'description' => '出方向流量。单位：bps。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '200',
                                        ],
                                        'InPps' => [
                                            'title' => '入方向包速率（个/秒）',
                                            'description' => '入方向包速率。单位：个/秒。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '10',
                                        ],
                                        'OutPps' => [
                                            'title' => '出方向包速率',
                                            'description' => '出方向包速率。单位：个/秒。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '20',
                                        ],
                                        'InFlowPerMinute' => [
                                            'description' => '保留字段，暂未使用。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '10',
                                        ],
                                        'OutFlowPerMinute' => [
                                            'description' => '保留字段，暂未使用。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '10',
                                        ],
                                        'NewSessionPerSecond' => [
                                            'title' => '新建连接数（个/秒）',
                                            'description' => '新建连接数。单位：个/秒。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '2',
                                        ],
                                        'ActiveSessionCount' => [
                                            'title' => '并发连接数（个）',
                                            'description' => '并发连接数。单位：个。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '8',
                                        ],
                                    ],
                                ],
                            ],
                            'IsTopNOpen' => [
                                'title' => '该实例是否开通TopN功能',
                                'description' => '是否已开通网络智能服务(NIS)功能，未开通时NatGatewayTopN返回空。'."\n"
                                    .'- **true**：已开通。'."\n"
                                    .'- **false**：未开通。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.TopN',
                        'errorMessage' => 'The TopN(%s) should not greater than 100.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTimeAndEndTime',
                        'errorMessage' => 'It only supports querying data for up to 7 days: %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ResourceId',
                        'errorMessage' => 'The specified resourceId (%s) may be not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.OrderBy',
                        'errorMessage' => 'The specified param of orderBy (%s) is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"77C512B5-12f3-f892-BD94-88A98271C1A0\\",\\n  \\"NatGatewayTopN\\": [\\n    {\\n      \\"Ip\\": \\"192.168.156.101\\",\\n      \\"InBps\\": 100,\\n      \\"OutBps\\": 200,\\n      \\"InPps\\": 10,\\n      \\"OutPps\\": 20,\\n      \\"InFlowPerMinute\\": 10,\\n      \\"OutFlowPerMinute\\": 10,\\n      \\"NewSessionPerSecond\\": 2,\\n      \\"ActiveSessionCount\\": 8\\n    }\\n  ],\\n  \\"IsTopNOpen\\": true\\n}","type":"json"}]',
            'title' => '获取NAT网关SNAT转发实时数据排名',
        ],
        'GetVbrFlowTopN' => [
            'summary' => '调用GetVbrFlowTopN接口，获取混合云流量详情数据排名，覆盖一元组、二元组、五元组粒度，支持按流量、包数等指标排序。',
            'methods' => [
                'get',
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
                'abilityTreeCode' => '178894',
                'abilityTreeNodes' => [
                    'FEATUREnetanaOV20CD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云端地域。',
                        'description' => '云端地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询起始时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'description' => '查询起始时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1638239092000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询结束时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'description' => '查询结束时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1638239093000',
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对于当前地域或IP的流量方向。'."\n"
                            .'in：从IDC访问阿里云'."\n"
                            .'out：从阿里云访问IDC',
                        'description' => '对于当前地域或IP的流量方向。'."\n"
                            .'- **in**：从IDC访问阿里云。'."\n"
                            .'- **out**：从阿里云访问IDC。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'in',
                        'enum' => [
                            'in',
                            'out',
                        ],
                    ],
                ],
                [
                    'name' => 'GroupBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定混合云流量排名的维度，大小写敏感。'."\n"
                            .'1Tuple：查询混合云流量中CEN、连接、VBR、IP维度的排名。'."\n"
                            .'2Tuple：查询混合云流量中两端IP维度的排名。'."\n"
                            .'5Tuple：查询混合云流量中两端IP、两端端口和协议维度的排名。'."\n"
                            .'CloudPort：查询混合云流量中云端端口的排名。'."\n"
                            .'OtherPort：查询混合云流量中IDC端端口的排名。'."\n"
                            .'Protocol：查询混合云流量中协议维度的排名。',
                        'description' => '指定混合云流量排名的维度，大小写敏感，注意区分大小写。取值：'."\n"
                            .'- **1Tuple**：查询混合云流量中云企业网CEN（Cloud Enterprise Network）、连接、改为边界路由器VBR（Virtual Border Router）、IP维度的排名。'."\n"
                            .'- **2Tuple**：查询混合云流量中两端IP维度的排名。'."\n"
                            .'- **5Tuple**：查询混合云流量中两端IP、两端端口和协议维度的排名。'."\n"
                            .'- **CloudPort**：查询混合云流量中云端端口的排名。'."\n"
                            .'- **OtherPort**：查询混合云流量中IDC端端口的排名。'."\n"
                            .'- **Protocol**：查询混合云流量中协议维度的排名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1Tuple',
                        'enum' => [
                            '1Tuple',
                            '2Tuple',
                            '5Tuple',
                            'CloudPort',
                            'OtherPort',
                            'Protocol',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按哪个指标倒序排序',
                        'description' => '数据排序的指标。默认值：Bytes，表示按流量排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Bytes',
                        'default' => 'Bytes',
                        'enum' => [
                            'Bytes',
                            'Packets',
                        ],
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。'."\n"
                            .'desc：降序'."\n"
                            .'asc：升序',
                        'description' => '排序方式。取值：'."\n"
                            .'- **desc**：降序。'."\n"
                            .'- **asc**：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                        'default' => 'desc',
                        'enum' => [
                            'asc',
                            'desc',
                        ],
                    ],
                ],
                [
                    'name' => 'TopN',
                    'in' => 'query',
                    'schema' => [
                        'title' => '取最大多少条数据，默认10，最大100。',
                        'description' => '展示排序靠前的数据。默认值：**10**。表示默认展示排序前10的数据。最大**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'CenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CEN实例ID。',
                        'description' => 'CEN实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cen-ia8kw1zjv4hyal****',
                    ],
                ],
                [
                    'name' => 'VirtualBorderRouterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专线ID。',
                        'description' => '专线VBR实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vbr-k1atj46citwuek42j****',
                    ],
                ],
                [
                    'name' => 'AttachmentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CEN的连接ID。',
                        'description' => 'CEN的连接ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tr-attach-dnv870gmqzmb5u****',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'title' => '协议类型编号。常见协议号如下：'."\n"
                            .'1：ICMP'."\n"
                            .'4：IP'."\n"
                            .'6：TCP'."\n"
                            .'17：UDP'."\n"
                            .'41：IPv6',
                        'description' => '协议号。'."\n"
                            .'> 支持全部协议，仅**GroupBy**配置为**5Tuple**或**Protocol**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'CloudIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云端IP',
                        'description' => '云端IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '112.74.XX.XX',
                    ],
                ],
                [
                    'name' => 'OtherIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'IDC侧IP',
                        'description' => 'IDC侧IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '122.112.XX.XX',
                    ],
                ],
                [
                    'name' => 'CloudPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云端端口号',
                        'description' => '云端端口号。'."\n"
                            .'> 仅**GroupBy**配置为**CloudPort**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '443',
                    ],
                ],
                [
                    'name' => 'OtherPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'IDC侧端口号',
                        'description' => 'IDC侧端口号。'."\n"
                            .'> 仅**GroupBy**配置为**OtherPort**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '40002',
                    ],
                ],
                [
                    'name' => 'AccountIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '子账号ID',
                        'description' => '成员账号ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '某个成员账号ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '[\\"118639953821****\\"]',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'UseMultiAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用多账号管理功能。默认值：**false**。表示不使用。 '."\n"
                            .'> 多账号管理功能默认不开放，如需使用，请联系商务经理申请使用权限。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<VbrFlowlogTopNResponse>',
                        'description' => 'RpcResponse<ArrayList>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A7F0D6EC-E19E-58AC-AC9F-08036763960F',
                            ],
                            'VirtualBorderRouterFlowlogTopN' => [
                                'description' => '混合云流量详情排名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '混合云流量详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CloudRegion' => [
                                            'title' => 'region',
                                            'description' => '云端IP对应的云端地域。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'CloudIp' => [
                                            'title' => '源IP',
                                            'description' => '云端IP。',
                                            'type' => 'string',
                                            'example' => '120.24.X.X',
                                        ],
                                        'OtherIp' => [
                                            'title' => '目的IP',
                                            'description' => 'IDC侧IP。',
                                            'type' => 'string',
                                            'example' => '222.85.X.X',
                                        ],
                                        'CloudPort' => [
                                            'title' => '源端口',
                                            'description' => '云端端口。',
                                            'type' => 'string',
                                            'example' => '80',
                                        ],
                                        'OtherPort' => [
                                            'title' => '目的端口',
                                            'description' => 'IDC侧端口。',
                                            'type' => 'string',
                                            'example' => '10965',
                                        ],
                                        'Protocol' => [
                                            'title' => '协议',
                                            'description' => '协议号。',
                                            'type' => 'string',
                                            'example' => '6',
                                        ],
                                        'AttachmentId' => [
                                            'title' => 'attachmentId',
                                            'description' => 'CEN的连接ID。',
                                            'type' => 'string',
                                            'example' => 'tr-attach-u6v1j3jre0fe9h****',
                                        ],
                                        'VirtualBorderRouterId' => [
                                            'title' => '专线Id',
                                            'description' => '专线ID。',
                                            'type' => 'string',
                                            'example' => 'vbr-k1atj46citwuek42j****',
                                        ],
                                        'Bytes' => [
                                            'description' => '指定时间段内的流量总和。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '108',
                                        ],
                                        'Packets' => [
                                            'description' => '指定时间段内的发包数总和。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '66',
                                        ],
                                        'AccountId' => [
                                            'title' => '子账号ID',
                                            'description' => '账号ID。',
                                            'type' => 'string',
                                            'example' => '156237031628****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.TopN',
                        'errorMessage' => 'The TopN(%s) should not greater than 100.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTime',
                        'errorMessage' => 'The specified begin time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTimeAndEndTime',
                        'errorMessage' => 'It only supports querying data for up to 7 days: %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.Sort',
                        'errorMessage' => 'The specified Sort(%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.OrderBy',
                        'errorMessage' => 'The specified param of orderBy (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.DataTooMuch',
                        'errorMessage' => 'Too much data has been queried under the specified conditions. Shorten the query time, specify more precise filtering conditions, or try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A7F0D6EC-E19E-58AC-AC9F-08036763960F\\",\\n  \\"VirtualBorderRouterFlowlogTopN\\": [\\n    {\\n      \\"CloudRegion\\": \\"cn-shanghai\\",\\n      \\"CloudIp\\": \\"120.24.X.X\\",\\n      \\"OtherIp\\": \\"222.85.X.X\\",\\n      \\"CloudPort\\": \\"80\\",\\n      \\"OtherPort\\": \\"10965\\",\\n      \\"Protocol\\": \\"6\\",\\n      \\"AttachmentId\\": \\"tr-attach-u6v1j3jre0fe9h****\\",\\n      \\"VirtualBorderRouterId\\": \\"vbr-k1atj46citwuek42j****\\",\\n      \\"Bytes\\": 108,\\n      \\"Packets\\": 66,\\n      \\"AccountId\\": \\"156237031628****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取混合云流量详情数据排名',
        ],
        'GetTransitRouterFlowTopN' => [
            'summary' => '调用GetTransitRouterFlowTopN接口，获取跨域流量详情数据排名，覆盖一元组、二元组、五元组粒度，支持按流量、包数等指标排序。',
            'methods' => [
                'get',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询起始时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'description' => '查询起始时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1684373600099',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询结束时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'description' => '查询结束时间的毫秒时间戳。最大支持查24小时跨度的数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1638239093000',
                    ],
                ],
                [
                    'name' => 'TopN',
                    'in' => 'query',
                    'schema' => [
                        'title' => '取最大多少条数据，默认10，最大100。',
                        'description' => '取最大多少条数据。默认值：**10**。最大值：**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对于当前地域或IP的流量方向。'."\n"
                            .'in：入流量 '."\n"
                            .'out：出流量',
                        'description' => '对于当前地域或IP的流量方向。取值：'."\n"
                            .'- **in**：入流量。'."\n"
                            .'- **out**：出流量。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'in',
                        'enum' => [
                            'in',
                            'out',
                        ],
                    ],
                ],
                [
                    'name' => 'GroupBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定跨域流量排名的维度，大小写敏感。'."\n"
                            .'1Tuple：查询跨域流量中当前地域、CEN、IP维度的排名。'."\n"
                            .'2Tuple：查询跨域流量中两端地域、两端IP对维度的排名。'."\n"
                            .'5Tuple：查询跨域流量中两端IP、两端端口和协议维度的排名。'."\n"
                            .'Cen：查询跨域流量中CEN实例维度的排名。'."\n"
                            .'RegionPair：查询跨域流量中两端地域维度的排名。'."\n"
                            .'Port：查询跨域流量中端口维度的排名。'."\n"
                            .'Protocol：查询跨域流量中协议维度的排名。',
                        'description' => '指定跨域流量排名的维度，大小写敏感，请注意区分大小写。取值：'."\n"
                            .'- **1Tuple**：查询跨域流量中当前地域、云企业网CEN（Cloud Enterprise Network）、IP维度的排名。'."\n"
                            .'- **2Tuple**：查询跨域流量中两端地域、两端IP维度的排名。'."\n"
                            .'- **5Tuple**：查询跨域流量中两端IP、两端端口和协议维度的排名。'."\n"
                            .'- **Cen**：查询跨域流量中云企业网CEN实例维度的排名。'."\n"
                            .'- **RegionPair**：查询跨域流量中两端地域维度的排名。'."\n"
                            .'- **Port**：查询跨域流量中端口维度的排名。'."\n"
                            .'- **Protocol**：查询跨域流量中协议维度的排名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1Tuple',
                        'enum' => [
                            '1Tuple',
                            '2Tuple',
                            '5Tuple',
                            'Cen',
                            'RegionPair',
                            'Port',
                            'Protocol',
                        ],
                    ],
                ],
                [
                    'name' => 'ThisRegion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前地域。',
                        'description' => '当前地域，即**ThisIp**所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'ThisIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前IP地址。',
                        'description' => '本端IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.8.XX.XX',
                    ],
                ],
                [
                    'name' => 'ThisPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前端口。',
                        'description' => '本端端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'OtherRegion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对端地域。',
                        'description' => '对端地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ap-southeast-1',
                    ],
                ],
                [
                    'name' => 'OtherIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对端IP地址。',
                        'description' => '对端IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '122.112.XX.XX',
                    ],
                ],
                [
                    'name' => 'OtherPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对端端口。',
                        'description' => '对端端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10869',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'title' => '协议类型编号。常见协议号如下：'."\n"
                            .'1：ICMP'."\n"
                            .'4：IP'."\n"
                            .'6：TCP'."\n"
                            .'17：UDP'."\n"
                            .'41：IPv6'."\n",
                        'description' => '协议号。'."\n"
                            ."\n"
                            .'> 支持全部协议，仅**GroupBy**配置为**5Tuple**或**Protocol**时，才需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按哪个指标排序。',
                        'description' => '数据排序的指标。默认值：Bytes，表示按流量排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Bytes',
                        'default' => 'Bytes',
                        'enum' => [
                            'Bytes',
                            'Packets',
                        ],
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。'."\n"
                            .'desc：降序'."\n"
                            .'asc：升序',
                        'description' => '流量数据的排序方式。'."\n"
                            .'- **desc**：降序。'."\n"
                            .'- **asc**：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                        'default' => 'desc',
                        'enum' => [
                            'desc',
                            'asc',
                        ],
                    ],
                ],
                [
                    'name' => 'CenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CEN实例ID。',
                        'description' => 'CEN实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cen-ia8kw1zjv4hyal****',
                    ],
                ],
                [
                    'name' => 'BandwithPackageId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CEN带宽包ID。',
                        'description' => 'CEN带宽包ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cenbwp-ia8kw1zjv4hyal****',
                    ],
                ],
                [
                    'name' => 'AccountIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '成员账号ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '某个成员账号ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '[\\"118639953821****\\"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UseMultiAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用多账号管理功能。默认值：**false**。表示不使用。 '."\n"
                            .'> 多账号管理功能默认不开放，如需使用，请联系商务经理申请使用权限。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<TrFlowlogTopNResponse>',
                        'description' => 'RpcResponse<TrFlowlogTopNResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D5E98683-355B-5867-8D3D-A24755F6895B',
                            ],
                            'TransitRouterFlowTopN' => [
                                'description' => '跨域流量详情排名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '跨域流量详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccountId' => [
                                            'title' => '账号ID。',
                                            'description' => '账号ID。',
                                            'type' => 'string',
                                            'example' => '118639953821****',
                                        ],
                                        'CenId' => [
                                            'title' => '跨域ID',
                                            'description' => 'CEN实例ID。',
                                            'type' => 'string',
                                            'example' => 'cen-ia8kw1zjv4hyal****',
                                        ],
                                        'ThisRegion' => [
                                            'title' => '源regionId',
                                            'description' => '本端地域，即**ThisIp**所在地域。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'ThisIp' => [
                                            'title' => '源IP地址',
                                            'description' => '本端IP地址。',
                                            'type' => 'string',
                                            'example' => '1.8.XX.XX',
                                        ],
                                        'ThisPort' => [
                                            'title' => '源端口号',
                                            'description' => '本端端口号。',
                                            'type' => 'string',
                                            'example' => '80',
                                        ],
                                        'OtherRegion' => [
                                            'title' => '目的regionId',
                                            'description' => '目的地域，即**OtherIp**所在地域。',
                                            'type' => 'string',
                                            'example' => 'ap-southeast-1',
                                        ],
                                        'OtherIp' => [
                                            'title' => '目的IP地址',
                                            'description' => '对端IP地址。',
                                            'type' => 'string',
                                            'example' => '47.216.XX.XX',
                                        ],
                                        'OtherPort' => [
                                            'title' => '目的端口号',
                                            'description' => '对端端口号。',
                                            'type' => 'string',
                                            'example' => '53470',
                                        ],
                                        'Protocol' => [
                                            'title' => '协议号',
                                            'description' => '协议号。',
                                            'type' => 'string',
                                            'example' => '6',
                                        ],
                                        'StartTime' => [
                                            'title' => '开始时间',
                                            'description' => '开始时间。',
                                            'type' => 'string',
                                            'example' => '2023-01-31T05:40:00Z',
                                        ],
                                        'EndTime' => [
                                            'title' => '结束时间',
                                            'description' => '结束时间。',
                                            'type' => 'string',
                                            'example' => '2023-01-31T06:40:00Z',
                                        ],
                                        'Packets' => [
                                            'description' => '指定时间段内的包数总和。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '88',
                                        ],
                                        'Bytes' => [
                                            'description' => '指定时间段内的流量总和。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '188',
                                        ],
                                        'BandwithPackageId' => [
                                            'title' => '带宽包',
                                            'description' => 'CEN带宽包ID。',
                                            'type' => 'string',
                                            'example' => 'cenbwp-ia8kw1zjv4hyal****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.TopN',
                        'errorMessage' => 'The TopN(%s) should not greater than 100.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTime',
                        'errorMessage' => 'The specified begin time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTimeAndEndTime',
                        'errorMessage' => 'It only supports querying data for up to 7 days: %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.OrderBy',
                        'errorMessage' => 'The specified param of orderBy (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.Sort',
                        'errorMessage' => 'The specified Sort(%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.AccountIds',
                        'errorMessage' => 'The specified parameter accountId (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.inOrOut',
                        'errorMessage' => 'Valid values for the inOrOut parameter: in and out.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5E98683-355B-5867-8D3D-A24755F6895B\\",\\n  \\"TransitRouterFlowTopN\\": [\\n    {\\n      \\"AccountId\\": \\"118639953821****\\",\\n      \\"CenId\\": \\"cen-ia8kw1zjv4hyal****\\",\\n      \\"ThisRegion\\": \\"cn-shanghai\\",\\n      \\"ThisIp\\": \\"1.8.XX.XX\\",\\n      \\"ThisPort\\": \\"80\\",\\n      \\"OtherRegion\\": \\"ap-southeast-1\\",\\n      \\"OtherIp\\": \\"47.216.XX.XX\\",\\n      \\"OtherPort\\": \\"53470\\",\\n      \\"Protocol\\": \\"6\\",\\n      \\"StartTime\\": \\"2023-01-31T05:40:00Z\\",\\n      \\"EndTime\\": \\"2023-01-31T06:40:00Z\\",\\n      \\"Packets\\": 88,\\n      \\"Bytes\\": 188,\\n      \\"BandwithPackageId\\": \\"cenbwp-ia8kw1zjv4hyal****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取跨域流量详情数据排名',
        ],
        'CreateNetworkReachableAnalysis' => [
            'summary' => '调用CreateNetworkReachableAnalysis接口，创建网络可达性分析任务。',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建网络可达性分析的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'NetworkPathId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络路径ID。 您可以通过调用[CreateNetworkPath](~~2366522~~)接口获取网络路径ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'np-b2f618ceb2c84057****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Team',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。一旦输入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ops',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NetworkReachableAnalysisId' => [
                                'description' => '网络可达性分析任务ID。',
                                'type' => 'string',
                                'example' => 'nra-2fede05617494417****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A7F0D6EC-E19E-58AC-AC9F-08036763960F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.NetworkPath',
                        'errorMessage' => 'The last analysis status of %s is %s. Please try again later.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.ParallelNraLimit',
                        'errorMessage' => 'The maximum number of parallel reachability analysis task is exceeded.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.MaxNraCount',
                        'errorMessage' => 'The maximum number of reachability analysis task is exceeded.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ZoneId',
                        'errorMessage' => 'The specified available zone (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.StepMinutes',
                        'errorMessage' => 'The specified sampling interval (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTime',
                        'errorMessage' => 'The specified begin time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.EndTime',
                        'errorMessage' => 'The specified end time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'Mismatch.BeginTimeAndEndTime',
                        'errorMessage' => 'The specified begin time must be earlier than the end time.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagValue',
                        'errorMessage' => 'You must specify Tag.N.Value.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.N.Value parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.NetworkPath',
                        'errorMessage' => 'The specified resource of %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NetworkReachableAnalysisId\\": \\"nra-2fede05617494417****\\",\\n  \\"RequestId\\": \\"A7F0D6EC-E19E-58AC-AC9F-08036763960F\\"\\n}","type":"json"}]',
            'title' => '创建网络可达性分析任务',
            'description' => '- **CreateNetworkReachableAnalysis**接口是对**CreateNetworkPath**接口中返回的网络路径创建可达性分析任务，并记录分析结果。'."\n"
                .' - **CreateNetworkReachableAnalysis**接口支持对同一网络路径进行多次分析。'."\n"
                .' - 一个阿里云账号（主账号）最多支持创建1000条可达性分析记录。',
        ],
        'CreateNetworkPath' => [
            'summary' => '调用CreateNetworkPath接口，创建网络分析路径，用于云上网络路径可达性分析。',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '116922',
                'abilityTreeNodes' => [
                    'FEATUREnetana59X9GB',
                    'FEATUREnetana98CV3P',
                    'FEATUREnetanaWZGUR4',
                    'FEATUREnetanaDZZVCZ',
                    'FEATUREnetana0CBIRP',
                    'FEATUREnetanaJGHZ2X',
                    'FEATUREnetanaRD137H',
                    'FEATUREnetanaCAWHBE',
                    'FEATUREnetana8JUW6E',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建网络分析路径的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NetworkPathName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路径名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs2PublicIp',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-2zef4ngqfarepyun****',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源资源类型。'."\n"
                            ."\n"
                            .' - **ecs**：云服务器ECS（Elastic Compute Service）。'."\n"
                            .' - **internetIp**：公网IP地址。'."\n"
                            .' - **vsw**：交换机（vSwitch）。'."\n"
                            .' - **vpn**：VPN网关。'."\n"
                            .' - **vbr**：边界路由器VBR（Virtual Border Router）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'SourceIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '172.17.XX.XX',
                    ],
                ],
                [
                    'name' => 'SourcePort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '443',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'minimum' => '0',
                        'example' => 'i-bp13d0e064gubm****',
                        'maxItems' => 24,
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的资源类型。'."\n"
                            .' - **ecs**：云服务器ECS（Elastic Compute Service）。 '."\n"
                            .'- **internetIp**：公网IP地址。'."\n"
                            .' - **vsw**：交换机（vSwitch）。'."\n"
                            .' - **vpn**：VPN网关。'."\n"
                            .' - **vbr**：边界路由器VBR（Virtual Border Router）。'."\n"
                            .' - **clb**：传统型负载均衡CLB（Classic Load Balancer）。',
                        'type' => 'string',
                        'required' => false,
                        'minimum' => '0',
                        'example' => 'ecs',
                        'maxItems' => 24,
                    ],
                ],
                [
                    'name' => 'TargetIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
                [
                    'name' => 'TargetPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .' - **tcp**：传输控制协议。'."\n"
                            .' - **udp**：用户数据报协议。'."\n"
                            .' - **icmp**：网络控制报文协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tcp',
                    ],
                ],
                [
                    'name' => 'NetworkPathDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络路径的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '分析ECS到ECS路径',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'role',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持输入20个标签值。一旦输入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ops',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路径所属的资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm27qsxjj****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NetworkPathId' => [
                                'description' => '网络路径ID。',
                                'type' => 'string',
                                'example' => 'np-4cbf598673d14d27****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '92DD9FFB-06FB-56F7-83EF-5CEF98F5562A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.InternetIP',
                        'errorMessage' => 'The specified IP address (%s) is not an internet IP address.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.IP',
                        'errorMessage' => 'The specified IP address (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.NetworkPath',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'ResourceAlreadyExist.NetworkPath',
                        'errorMessage' => 'The specified resource of %s already exists.',
                    ],
                    [
                        'errorCode' => 'Mismatch.SourceIdAndTargetId',
                        'errorMessage' => 'Reachability Analyzer does not support the scenario in which source and target Internet IP addresses and ECS instance ID (%s and %s) are bound.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceAndTargetInternetIp',
                        'errorMessage' => 'Both source ID and target ID are IP addresses, but are not Internet IP addresses. Reachability Analyzer does not support the scenario.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourcePort',
                        'errorMessage' => 'The specified SourcePort(%s) value is invalid. The value must be within the range of (0,65536].',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetPort',
                        'errorMessage' => 'The specified TargetPort(%s) value is invalid. The value must be within the range of (0,65536].',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceId',
                        'errorMessage' => 'The specified SourceId(%s) may be not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetId',
                        'errorMessage' => 'The specified TargetId(%s) may be not exist.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagValue',
                        'errorMessage' => 'You must specify Tag.N.Value.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.N.Value parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceIp',
                        'errorMessage' => 'Please enter a valid source IP.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.Protocol',
                        'errorMessage' => 'The specified Protocol(%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetType',
                        'errorMessage' => 'The specified target type (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceType',
                        'errorMessage' => 'The specified source type (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetIp',
                        'errorMessage' => 'The specified target ip (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.NotSupportHaVpn',
                        'errorMessage' => 'The specified VPN(%s), which is not currently supported for such instances.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceNotBound',
                        'errorMessage' => 'Elastic public network IP(%s) is not bound to resources, and analysis is not supported for the time being.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetNotBound',
                        'errorMessage' => 'Elastic public network IP(%s) is not bound to resources, and analysis is not supported for the time being.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.NotPublicIp',
                        'errorMessage' => 'The specified (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceEqualTarget',
                        'errorMessage' => 'The specified source and destination are identical, which is not supported for analysis.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TypeAndIdMismatch',
                        'errorMessage' => 'The specified instanceId (%s) and type do not match.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NetworkPath',
                        'errorMessage' => 'The current user has not activated NIS and is not authorized to use the path analysis interface.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NetworkPathId\\": \\"np-4cbf598673d14d27****\\",\\n  \\"RequestId\\": \\"92DD9FFB-06FB-56F7-83EF-5CEF98F5562A\\"\\n}","type":"json"}]',
            'title' => '创建网络分析路径',
            'description' => '- **CreateNetworkPath**接口支持多种组网场景以及多种资源间的路径创建，路径创建后，路径参数将被保存，便于重复分析。'."\n"
                .' - 一个阿里云账号（主账号）最多支持创建100条路径。',
        ],
        'CreateAndAnalyzeNetworkPath' => [
            'summary' => '调用CreateAndAnalyzeNetworkPath接口，发起网络可达性分析任务。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'abilityTreeCode' => '178742',
                'abilityTreeNodes' => [
                    'FEATUREnetana59X9GB',
                    'FEATUREnetana98CV3P',
                    'FEATUREnetanaWZGUR4',
                    'FEATUREnetanaDZZVCZ',
                    'FEATUREnetanaJGHZ2X',
                    'FEATUREnetana0CBIRP',
                    'FEATUREnetanaRD137H',
                    'FEATUREnetanaCAWHBE',
                    'FEATUREnetana8JUW6E',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-uf62y8khhbkbdrp6****',
                    ],
                ],
                [
                    'name' => 'SourceIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
                [
                    'name' => 'TargetIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '172.50.XX.XX',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源资源类型。'."\n"
                            ."\n"
                            .' - **ecs**：云服务器ECS（Elastic Compute Service）。'."\n"
                            .' - **internetIp**：公网IP地址。'."\n"
                            .' - **vsw**：交换机（vSwitch）。'."\n"
                            .' - **vpn**：VPN网关。'."\n"
                            .' - **vbr**：边界路由器VBR（Virtual Border Router）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'SourcePort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-m5eactvw7wtpktv5****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的资源类型。'."\n"
                            .' - **ecs**：云服务器ECS（Elastic Compute Service）。 '."\n"
                            .'- **internetIp**：公网IP地址。'."\n"
                            .' - **vsw**：交换机（vSwitch）。'."\n"
                            .' - **vpn**：VPN网关。'."\n"
                            .' - **vbr**：边界路由器VBR（Virtual Border Router）。'."\n"
                            .' - **clb**：传统型负载均衡CLB（Classic Load Balancer）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'TargetPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .' - **tcp**：传输控制协议。'."\n"
                            .' - **udp**：用户数据报协议。'."\n"
                            .' - **icmp**：网络控制报文协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tcp',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要发起网络可达性分析任务的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
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
                                'example' => 'D5E98683-355B-5867-8D3D-A24755F6895B',
                            ],
                            'NetworkReachableAnalysisId' => [
                                'description' => '发起的网络可达性分析任务ID。',
                                'type' => 'string',
                                'example' => 'nra-dfe9e53d2b524568****',
                            ],
                            'SourceId' => [
                                'description' => '源资源ID。',
                                'type' => 'string',
                                'example' => 'i-uf62y8khhbkbdrp6****'."\n",
                            ],
                            'TargetId' => [
                                'description' => '目的资源ID。',
                                'type' => 'string',
                                'example' => 'i-m5eactvw7wtpktv5****'."\n",
                            ],
                            'SourceType' => [
                                'description' => '源资源类型。',
                                'type' => 'string',
                                'example' => 'ecs',
                            ],
                            'TargetType' => [
                                'description' => '目的资源类型。',
                                'type' => 'string',
                                'example' => 'ecs',
                            ],
                            'SourcePort' => [
                                'description' => '源端口。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'TargetPort' => [
                                'description' => '目的端口。',
                                'type' => 'string',
                                'example' => '80',
                            ],
                            'Protocol' => [
                                'description' => '协议类型。',
                                'type' => 'string',
                                'example' => 'tcp',
                            ],
                            'SourceIpAddress' => [
                                'description' => '源IP地址。',
                                'type' => 'string',
                                'example' => '192.168.XX.XX'."\n",
                            ],
                            'TargetIpAddress' => [
                                'description' => '目的IP地址。',
                                'type' => 'string',
                                'example' => '172.50.XX.XX'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.InternetIP',
                        'errorMessage' => 'The specified IP address (%s) is not an internet IP address.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.IP',
                        'errorMessage' => 'The specified IP address (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'Mismatch.SourceIdAndTargetId',
                        'errorMessage' => 'Reachability Analyzer does not support the scenario in which source and target Internet IP addresses and ECS instance ID (%s and %s) are bound.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceAndTargetInternetIp',
                        'errorMessage' => 'Both source ID and target ID are IP addresses, but are not Internet IP addresses. Reachability Analyzer does not support the scenario.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourcePort',
                        'errorMessage' => 'The specified SourcePort(%s) value is invalid. The value must be within the range of (0,65536].',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetPort',
                        'errorMessage' => 'The specified TargetPort(%s) value is invalid. The value must be within the range of (0,65536].',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceId',
                        'errorMessage' => 'The specified SourceId(%s) may be not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetId',
                        'errorMessage' => 'The specified TargetId(%s) may be not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceIp',
                        'errorMessage' => 'Please enter a valid source IP.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceType',
                        'errorMessage' => 'The specified source type (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.Protocol',
                        'errorMessage' => 'The specified Protocol(%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetType',
                        'errorMessage' => 'The specified target type (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetIp',
                        'errorMessage' => 'The specified target ip (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.NotSupportHaVpn',
                        'errorMessage' => 'The specified VPN(%s), which is not currently supported for such instances.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceNotBound',
                        'errorMessage' => 'Elastic public network IP(%s) is not bound to resources, and analysis is not supported for the time being.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TargetNotBound',
                        'errorMessage' => 'Elastic public network IP(%s) is not bound to resources, and analysis is not supported for the time being.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.NotPublicIp',
                        'errorMessage' => 'The specified (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.SourceEqualTarget',
                        'errorMessage' => 'The specified source and destination are identical, which is not supported for analysis.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TypeAndIdMismatch',
                        'errorMessage' => 'The specified instanceId (%s) and type do not match.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NetworkPath',
                        'errorMessage' => 'The current user has not activated NIS and is not authorized to use the path analysis interface.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5E98683-355B-5867-8D3D-A24755F6895B\\",\\n  \\"NetworkReachableAnalysisId\\": \\"nra-dfe9e53d2b524568****\\",\\n  \\"SourceId\\": \\"i-uf62y8khhbkbdrp6****\\\\n\\",\\n  \\"TargetId\\": \\"i-m5eactvw7wtpktv5****\\\\n\\",\\n  \\"SourceType\\": \\"ecs\\",\\n  \\"TargetType\\": \\"ecs\\",\\n  \\"SourcePort\\": \\"0\\",\\n  \\"TargetPort\\": \\"80\\",\\n  \\"Protocol\\": \\"tcp\\",\\n  \\"SourceIpAddress\\": \\"192.168.XX.XX\\\\n\\",\\n  \\"TargetIpAddress\\": \\"172.50.XX.XX\\\\n\\"\\n}","type":"json"}]',
            'title' => '发起网络可达性分析任务',
            'description' => '该接口根据输入的源和目的信息，无需创建网络分析路径，直接发起可达性分析任务。返回分析结果后，将不在系统中记录，如需在NIS中留存网络路径或可达性分析任务结果，建议使用**createNetworkReachableAnalysis**接口。',
        ],
        'DeleteNetworkPath' => [
            'summary' => '删除网络分析路径。',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '116931',
                'abilityTreeNodes' => [
                    'FEATUREnetana59X9GB',
                    'FEATUREnetana98CV3P',
                    'FEATUREnetanaWZGUR4',
                    'FEATUREnetanaDZZVCZ',
                    'FEATUREnetana0CBIRP',
                    'FEATUREnetanaJGHZ2X',
                    'FEATUREnetanaRD137H',
                    'FEATUREnetanaCAWHBE',
                    'FEATUREnetana8JUW6E',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的网络分析路径的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'NetworkPathIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '网络分析路径集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '您可以通过调用[CreateNetworkPath](~~2366522~~)接口获取网络分析路径ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'np-10c31b7aca0e4486****',
                        ],
                        'required' => true,
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
                                'example' => 'C4331873-C534-590F-A905-F66C53B88A47',
                            ],
                            'Data' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.DiskCategory',
                        'errorMessage' => 'The specified disk category (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'SizeExceeds.Zones',
                        'errorMessage' => 'The length of the specified available zones exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'SizeExceeds.DiskCategories',
                        'errorMessage' => 'The length of the specified disk categories exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ZonesConflict',
                        'errorMessage' => 'The specified available zones do not belong to the same region.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ZoneId',
                        'errorMessage' => 'The specified available zone (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.StepMinutes',
                        'errorMessage' => 'The specified sampling interval (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTime',
                        'errorMessage' => 'The specified begin time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.EndTime',
                        'errorMessage' => 'The specified end time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'Mismatch.BeginTimeAndEndTime',
                        'errorMessage' => 'The specified begin time must be earlier than the end time.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C4331873-C534-590F-A905-F66C53B88A47\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '删除网络分析路径',
        ],
        'DeleteNetworkReachableAnalysis' => [
            'summary' => '调用DeleteNetworkReachableAnalysis接口，删除网络可达性分析任务。',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '116935',
                'abilityTreeNodes' => [
                    'FEATUREnetana59X9GB',
                    'FEATUREnetana98CV3P',
                    'FEATUREnetanaDZZVCZ',
                    'FEATUREnetana0CBIRP',
                    'FEATUREnetanaWZGUR4',
                    'FEATUREnetanaJGHZ2X',
                    'FEATUREnetanaRD137H',
                    'FEATUREnetanaCAWHBE',
                    'FEATUREnetana8JUW6E',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络可达性分析任务的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'NetworkReachableAnalysisIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '网络可达性分析任务ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络可达性分析任务ID。您可以通过调用[CreateNetworkReachableAnalysis](~~2366521~~)接口获取网络可达性分析任务ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[\\"nra-be3cff6bed3049f5****\\"]',
                        ],
                        'required' => true,
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
                                'example' => '4838F3F2-30E1-5D82-B25A-B9FE33BC3E25',
                            ],
                            'Data' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.DiskCategory',
                        'errorMessage' => 'The specified disk category (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'SizeExceeds.Zones',
                        'errorMessage' => 'The length of the specified available zones exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'SizeExceeds.DiskCategories',
                        'errorMessage' => 'The length of the specified disk categories exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ZonesConflict',
                        'errorMessage' => 'The specified available zones do not belong to the same region.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ZoneId',
                        'errorMessage' => 'The specified available zone (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.StepMinutes',
                        'errorMessage' => 'The specified sampling interval (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTime',
                        'errorMessage' => 'The specified begin time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.EndTime',
                        'errorMessage' => 'The specified end time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'Mismatch.BeginTimeAndEndTime',
                        'errorMessage' => 'The specified begin time must be earlier than the end time.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4838F3F2-30E1-5D82-B25A-B9FE33BC3E25\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '删除网络可达性分析任务',
        ],
        'GetNetworkReachableAnalysis' => [
            'summary' => '调用GetNetworkReachableAnalysis接口，获取网络可达性分析结果。',
            'methods' => [
                'get',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络可达性分析任务的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'NetworkReachableAnalysisId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络可达性分析任务ID。 您可以通过调用**CreateNetworkRearchableAnalysis**接口获取网络可达性分析ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nra-90eef36a9e6e4662****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NetworkPathId' => [
                                'description' => '创建的网络实例的路径ID。',
                                'type' => 'string',
                                'example' => 'np-2a1332214fa346b6****',
                            ],
                            'NetworkReachableAnalysisId' => [
                                'description' => '网络可达性分析任务ID。',
                                'type' => 'string',
                                'example' => 'nra-8607514e71c1484****',
                            ],
                            'NetworkReachableAnalysisStatus' => [
                                'description' => '网络可达性分析任务的状态。取值：'."\n"
                                    .'- **init**：初始化。'."\n"
                                    .'- **finish**：已完成。'."\n"
                                    .'- **error**：分析错误。'."\n"
                                    .'- **timeout**：已超时。',
                                'type' => 'string',
                                'example' => 'finish',
                            ],
                            'NetworkReachableAnalysisResult' => [
                                'description' => '用于展示网络可达性分析结果，包括网络路径拓扑、网络不可达错误码、网络不可达规则等。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'  "errorCode": "",'."\n"
                                    .'  "networkAclData": {'."\n"
                                    .'    "networkAclItems": ['."\n"
                                    .'      '."\n"
                                    .'    ]'."\n"
                                    .'  },'."\n"
                                    .'  "nraId": "nra-f2c8701a36424094****",'."\n"
                                    .'  "requestId": "B931F8A0-620E-5230-B77F-3BD7F612****",'."\n"
                                    .'  "routeData": {'."\n"
                                    .'    "routeItems": ['."\n"
                                    .'      '."\n"
                                    .'    ]'."\n"
                                    .'  },'."\n"
                                    .'  "securityGroupData": {'."\n"
                                    .'    "policy": "accept",'."\n"
                                    .'    "securityGroupItems": ['."\n"
                                    .'      {'."\n"
                                    .'        "description": "default_sg_access_rule",'."\n"
                                    .'        "matchedRule": {'."\n"
                                    .'          "bizProtocol": "ALL",'."\n"
                                    .'          "creatingTime": "2022-11-10T03:24:49Z",'."\n"
                                    .'          "description": "",'."\n"
                                    .'          "destinationCidr": "",'."\n"
                                    .'          "destinationGroupId": "sg-wz980j96p8y99co5****",'."\n"
                                    .'          "direction": "egress",'."\n"
                                    .'          "policy": "Accept",'."\n"
                                    .'          "portRange": "-1/-1",'."\n"
                                    .'          "priority": "1",'."\n"
                                    .'          "sourceCidr": "",'."\n"
                                    .'          "sourceGroupId": ""'."\n"
                                    .'        },'."\n"
                                    .'        "policy": "accept",'."\n"
                                    .'        "resourceId": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'        "securityGroupId": "sg-wz980j96p8y99co5****"'."\n"
                                    .'      },'."\n"
                                    .'      {'."\n"
                                    .'        "description": "user_acl_drop_rule",'."\n"
                                    .'        "matchedRule": {'."\n"
                                    .'          "bizProtocol": "",'."\n"
                                    .'          "creatingTime": "",'."\n"
                                    .'          "description": "",'."\n"
                                    .'          "destinationCidr": "",'."\n"
                                    .'          "destinationGroupId": "",'."\n"
                                    .'          "direction": "",'."\n"
                                    .'          "policy": "",'."\n"
                                    .'          "portRange": "",'."\n"
                                    .'          "priority": "",'."\n"
                                    .'          "sourceCidr": "",'."\n"
                                    .'          "sourceGroupId": ""'."\n"
                                    .'        },'."\n"
                                    .'        "policy": "",'."\n"
                                    .'        "resourceId": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'        "securityGroupId": "sg-wz980j96p8y99co****"'."\n"
                                    .'      }'."\n"
                                    .'    ],'."\n"
                                    .'    "securityGroupReportId": "sgr-4479d23bb37241aab****"'."\n"
                                    .'  },'."\n"
                                    .'  "status": "security_group_checking_target",'."\n"
                                    .'  "topologyData": {'."\n"
                                    .'    "positive": {'."\n"
                                    .'      "linkList": ['."\n"
                                    .'        {'."\n"
                                    .'          "id": "i-wz91dk7bor557hp93zyv-->eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "source": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "target": "eni-wz92ce4saz1jzazg****"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "id": "eni-wz92ce4saz1jzazgi13d-->vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "source": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "target": "vsw-wz9slpwdcppwfrnee****"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "id": "vsw-wz9slpwdcppwfrneebcrp-->eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "source": "vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "target": "eni-wz97vry93t6z4lbd****"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "id": "eni-wz97vry93t6z4lbdgmfi-->i-wz91dk7bor557hp9****",'."\n"
                                    .'          "source": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "target": "i-wz91dk7bor557hp9****"'."\n"
                                    .'        }'."\n"
                                    .'      ],'."\n"
                                    .'      "nodeList": ['."\n"
                                    .'        {'."\n"
                                    .'          "aZone": "cn-shenzhen-d",'."\n"
                                    .'          "bizInsId": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "id": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "level": 1,'."\n"
                                    .'          "matchedRoute": {'."\n"
                                    .'            "nextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "nodeType": "VM",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "trafficLogs": ['."\n"
                                    .'            '."\n"
                                    .'          ]'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "aZone": "cn-shenzhen-d",'."\n"
                                    .'          "bizInsId": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "id": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "level": 3,'."\n"
                                    .'          "matchedRoute": {'."\n"
                                    .'            "nextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "nodeType": "VM",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "trafficLogs": ['."\n"
                                    .'            '."\n"
                                    .'          ]'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "aZone": "cn-shenzhen-d",'."\n"
                                    .'          "bizInsId": "vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "cidr": "192.168.0.0/24",'."\n"
                                    .'          "id": "vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "level": 2,'."\n"
                                    .'          "matchedRoute": {'."\n"
                                    .'            "nextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "nodeType": "VSW",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "trafficLogs": ['."\n"
                                    .'            '."\n"
                                    .'          ]'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "bizInsId": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "id": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "ip": "192.168.0.33",'."\n"
                                    .'          "mac": "00:XXXX:3e:16:7c:50",'."\n"
                                    .'          "matchedRoute": {'."\n"
                                    .'            "nextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "nodeType": "ENI",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "status": "InUse",'."\n"
                                    .'          "trafficLogs": ['."\n"
                                    .'            '."\n"
                                    .'          ]'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "bizInsId": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "id": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "ip": "192.168.0.34",'."\n"
                                    .'          "mac": "00:XXXX:3e:14:70:c2",'."\n"
                                    .'          "matchedRoute": {'."\n"
                                    .'            "nextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "nodeType": "ENI",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "status": "InUse",'."\n"
                                    .'          "trafficLogs": ['."\n"
                                    .'            '."\n"
                                    .'          ]'."\n"
                                    .'        }'."\n"
                                    .'      ]'."\n"
                                    .'    },'."\n"
                                    .'    "reverse": {'."\n"
                                    .'      "revLinkList": ['."\n"
                                    .'        {'."\n"
                                    .'          "id": "i-wz91dk7bor557hp93zys-->eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "source": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "target": "eni-wz97vry93t6z4lbd****"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "id": "eni-wz97vry93t6z4lbdgmfi-->vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "source": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "target": "vsw-wz9slpwdcppwfrnee****"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "id": "vsw-wz9slpwdcppwfrneebcrp-->eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "source": "vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "target": "eni-wz92ce4saz1jzazg****"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "id": "eni-wz92ce4saz1jzazgi13d-->i-wz91dk7bor557hp9****",'."\n"
                                    .'          "source": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "target": "i-wz91dk7bor557hp9****"'."\n"
                                    .'        }'."\n"
                                    .'      ],'."\n"
                                    .'      "revNodeList": ['."\n"
                                    .'        {'."\n"
                                    .'          "aZone": "cn-shenzhen-d",'."\n"
                                    .'          "bizInsId": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "id": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "level": 1,'."\n"
                                    .'          "nodeType": "VM",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "revMatchedRoute": {'."\n"
                                    .'            "revNextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          }'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "aZone": "cn-shenzhen-d",'."\n"
                                    .'          "bizInsId": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "id": "i-wz91dk7bor557hp9****",'."\n"
                                    .'          "level": 3,'."\n"
                                    .'          "nodeType": "VM",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "revMatchedRoute": {'."\n"
                                    .'            "revNextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          }'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "aZone": "cn-shenzhen-d",'."\n"
                                    .'          "bizInsId": "vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "cidr": "192.168.0.0/24",'."\n"
                                    .'          "id": "vsw-wz9slpwdcppwfrnee****",'."\n"
                                    .'          "level": 2,'."\n"
                                    .'          "nodeType": "VSW",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "revMatchedRoute": {'."\n"
                                    .'            "revNextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          }'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "bizInsId": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "id": "eni-wz97vry93t6z4lbd****",'."\n"
                                    .'          "ip": "192.168.0.34",'."\n"
                                    .'          "mac": "00:XXXX:3e:14:70:c2",'."\n"
                                    .'          "nodeType": "ENI",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "revMatchedRoute": {'."\n"
                                    .'            "revNextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "status": "InUse"'."\n"
                                    .'        },'."\n"
                                    .'        {'."\n"
                                    .'          "bizInsId": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "id": "eni-wz92ce4saz1jzazg****",'."\n"
                                    .'          "ip": "192.168.0.33",'."\n"
                                    .'          "mac": "00:XXXX:3e:16:7c:50",'."\n"
                                    .'          "nodeType": "ENI",'."\n"
                                    .'          "regionNo": "cn-shenzhen-st3-a01",'."\n"
                                    .'          "regionNoAlias": "cn-shenzhen",'."\n"
                                    .'          "revMatchedRoute": {'."\n"
                                    .'            "revNextHopSet": ['."\n"
                                    .'              '."\n"
                                    .'            ]'."\n"
                                    .'          },'."\n"
                                    .'          "status": "InUse"'."\n"
                                    .'        }'."\n"
                                    .'      ]'."\n"
                                    .'    },'."\n"
                                    .'    "topologyReportId": "tpr-21cf60002715491b8****"'."\n"
                                    .'  }'."\n"
                                    .'}',
                            ],
                            'Reachable' => [
                                'description' => '网络路径是否可达。取值：'."\n"
                                    .'- **true**：可达。'."\n"
                                    .'- **false**：不可达。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-03-16T07:11:27Z',
                            ],
                            'AliUid' => [
                                'description' => '用户UID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123147627844****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DEE0FEAF-59AE-5CDD-AA07-626BC365D571',
                            ],
                            'NetworkPathParameter' => [
                                'description' => '网络路径详细参数。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'  "sourceId": "i-bp100g5pbp6kj4p9****",'."\n"
                                    .'  "sourceType": "ecs",'."\n"
                                    .'  "targetId": "i-t4n4ltwgbbomzb0g****",'."\n"
                                    .'  "targetType": "ecs"'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SizeExceeds.Zones',
                        'errorMessage' => 'The length of the specified available zones exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'SizeExceeds.DiskCategories',
                        'errorMessage' => 'The length of the specified disk categories exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ZonesConflict',
                        'errorMessage' => 'The specified available zones do not belong to the same region.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ZoneId',
                        'errorMessage' => 'The specified available zone (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.StepMinutes',
                        'errorMessage' => 'The specified sampling interval (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.BeginTime',
                        'errorMessage' => 'The specified begin time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.EndTime',
                        'errorMessage' => 'The specified end time (%s) is invalid.',
                    ],
                    [
                        'errorCode' => 'Mismatch.BeginTimeAndEndTime',
                        'errorMessage' => 'The specified begin time must be earlier than the end time.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.NetworkReachableAnalysis',
                        'errorMessage' => 'The operation is not allowed because of invalid parameters.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.NetworkReachableAnalysis',
                        'errorMessage' => 'The specified resource of %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NetworkPathId\\": \\"np-2a1332214fa346b6****\\",\\n  \\"NetworkReachableAnalysisId\\": \\"nra-8607514e71c1484****\\",\\n  \\"NetworkReachableAnalysisStatus\\": \\"finish\\",\\n  \\"NetworkReachableAnalysisResult\\": \\"{\\\\n  \\\\\\"errorCode\\\\\\": \\\\\\"\\\\\\",\\\\n  \\\\\\"networkAclData\\\\\\": {\\\\n    \\\\\\"networkAclItems\\\\\\": [\\\\n      \\\\n    ]\\\\n  },\\\\n  \\\\\\"nraId\\\\\\": \\\\\\"nra-f2c8701a36424094****\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"B931F8A0-620E-5230-B77F-3BD7F612****\\\\\\",\\\\n  \\\\\\"routeData\\\\\\": {\\\\n    \\\\\\"routeItems\\\\\\": [\\\\n      \\\\n    ]\\\\n  },\\\\n  \\\\\\"securityGroupData\\\\\\": {\\\\n    \\\\\\"policy\\\\\\": \\\\\\"accept\\\\\\",\\\\n    \\\\\\"securityGroupItems\\\\\\": [\\\\n      {\\\\n        \\\\\\"description\\\\\\": \\\\\\"default_sg_access_rule\\\\\\",\\\\n        \\\\\\"matchedRule\\\\\\": {\\\\n          \\\\\\"bizProtocol\\\\\\": \\\\\\"ALL\\\\\\",\\\\n          \\\\\\"creatingTime\\\\\\": \\\\\\"2022-11-10T03:24:49Z\\\\\\",\\\\n          \\\\\\"description\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"destinationCidr\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"destinationGroupId\\\\\\": \\\\\\"sg-wz980j96p8y99co5****\\\\\\",\\\\n          \\\\\\"direction\\\\\\": \\\\\\"egress\\\\\\",\\\\n          \\\\\\"policy\\\\\\": \\\\\\"Accept\\\\\\",\\\\n          \\\\\\"portRange\\\\\\": \\\\\\"-1/-1\\\\\\",\\\\n          \\\\\\"priority\\\\\\": \\\\\\"1\\\\\\",\\\\n          \\\\\\"sourceCidr\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"sourceGroupId\\\\\\": \\\\\\"\\\\\\"\\\\n        },\\\\n        \\\\\\"policy\\\\\\": \\\\\\"accept\\\\\\",\\\\n        \\\\\\"resourceId\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n        \\\\\\"securityGroupId\\\\\\": \\\\\\"sg-wz980j96p8y99co5****\\\\\\"\\\\n      },\\\\n      {\\\\n        \\\\\\"description\\\\\\": \\\\\\"user_acl_drop_rule\\\\\\",\\\\n        \\\\\\"matchedRule\\\\\\": {\\\\n          \\\\\\"bizProtocol\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"creatingTime\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"description\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"destinationCidr\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"destinationGroupId\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"direction\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"policy\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"portRange\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"priority\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"sourceCidr\\\\\\": \\\\\\"\\\\\\",\\\\n          \\\\\\"sourceGroupId\\\\\\": \\\\\\"\\\\\\"\\\\n        },\\\\n        \\\\\\"policy\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"resourceId\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n        \\\\\\"securityGroupId\\\\\\": \\\\\\"sg-wz980j96p8y99co****\\\\\\"\\\\n      }\\\\n    ],\\\\n    \\\\\\"securityGroupReportId\\\\\\": \\\\\\"sgr-4479d23bb37241aab****\\\\\\"\\\\n  },\\\\n  \\\\\\"status\\\\\\": \\\\\\"security_group_checking_target\\\\\\",\\\\n  \\\\\\"topologyData\\\\\\": {\\\\n    \\\\\\"positive\\\\\\": {\\\\n      \\\\\\"linkList\\\\\\": [\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"i-wz91dk7bor557hp93zyv-->eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz92ce4saz1jzazgi13d-->vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrneebcrp-->eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz97vry93t6z4lbdgmfi-->i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\"\\\\n        }\\\\n      ],\\\\n      \\\\\\"nodeList\\\\\\": [\\\\n        {\\\\n          \\\\\\"aZone\\\\\\": \\\\\\"cn-shenzhen-d\\\\\\",\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"level\\\\\\": 1,\\\\n          \\\\\\"matchedRoute\\\\\\": {\\\\n            \\\\\\"nextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"VM\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"trafficLogs\\\\\\": [\\\\n            \\\\n          ]\\\\n        },\\\\n        {\\\\n          \\\\\\"aZone\\\\\\": \\\\\\"cn-shenzhen-d\\\\\\",\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"level\\\\\\": 3,\\\\n          \\\\\\"matchedRoute\\\\\\": {\\\\n            \\\\\\"nextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"VM\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"trafficLogs\\\\\\": [\\\\n            \\\\n          ]\\\\n        },\\\\n        {\\\\n          \\\\\\"aZone\\\\\\": \\\\\\"cn-shenzhen-d\\\\\\",\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"cidr\\\\\\": \\\\\\"192.168.0.0/24\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"level\\\\\\": 2,\\\\n          \\\\\\"matchedRoute\\\\\\": {\\\\n            \\\\\\"nextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"VSW\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"trafficLogs\\\\\\": [\\\\n            \\\\n          ]\\\\n        },\\\\n        {\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"ip\\\\\\": \\\\\\"192.168.0.33\\\\\\",\\\\n          \\\\\\"mac\\\\\\": \\\\\\"00:XXXX:3e:16:7c:50\\\\\\",\\\\n          \\\\\\"matchedRoute\\\\\\": {\\\\n            \\\\\\"nextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"ENI\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"status\\\\\\": \\\\\\"InUse\\\\\\",\\\\n          \\\\\\"trafficLogs\\\\\\": [\\\\n            \\\\n          ]\\\\n        },\\\\n        {\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"ip\\\\\\": \\\\\\"192.168.0.34\\\\\\",\\\\n          \\\\\\"mac\\\\\\": \\\\\\"00:XXXX:3e:14:70:c2\\\\\\",\\\\n          \\\\\\"matchedRoute\\\\\\": {\\\\n            \\\\\\"nextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"ENI\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"status\\\\\\": \\\\\\"InUse\\\\\\",\\\\n          \\\\\\"trafficLogs\\\\\\": [\\\\n            \\\\n          ]\\\\n        }\\\\n      ]\\\\n    },\\\\n    \\\\\\"reverse\\\\\\": {\\\\n      \\\\\\"revLinkList\\\\\\": [\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"i-wz91dk7bor557hp93zys-->eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz97vry93t6z4lbdgmfi-->vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrneebcrp-->eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz92ce4saz1jzazgi13d-->i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"source\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"target\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\"\\\\n        }\\\\n      ],\\\\n      \\\\\\"revNodeList\\\\\\": [\\\\n        {\\\\n          \\\\\\"aZone\\\\\\": \\\\\\"cn-shenzhen-d\\\\\\",\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"level\\\\\\": 1,\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"VM\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"revMatchedRoute\\\\\\": {\\\\n            \\\\\\"revNextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          }\\\\n        },\\\\n        {\\\\n          \\\\\\"aZone\\\\\\": \\\\\\"cn-shenzhen-d\\\\\\",\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"i-wz91dk7bor557hp9****\\\\\\",\\\\n          \\\\\\"level\\\\\\": 3,\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"VM\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"revMatchedRoute\\\\\\": {\\\\n            \\\\\\"revNextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          }\\\\n        },\\\\n        {\\\\n          \\\\\\"aZone\\\\\\": \\\\\\"cn-shenzhen-d\\\\\\",\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"cidr\\\\\\": \\\\\\"192.168.0.0/24\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"vsw-wz9slpwdcppwfrnee****\\\\\\",\\\\n          \\\\\\"level\\\\\\": 2,\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"VSW\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"revMatchedRoute\\\\\\": {\\\\n            \\\\\\"revNextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          }\\\\n        },\\\\n        {\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz97vry93t6z4lbd****\\\\\\",\\\\n          \\\\\\"ip\\\\\\": \\\\\\"192.168.0.34\\\\\\",\\\\n          \\\\\\"mac\\\\\\": \\\\\\"00:XXXX:3e:14:70:c2\\\\\\",\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"ENI\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"revMatchedRoute\\\\\\": {\\\\n            \\\\\\"revNextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"status\\\\\\": \\\\\\"InUse\\\\\\"\\\\n        },\\\\n        {\\\\n          \\\\\\"bizInsId\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"id\\\\\\": \\\\\\"eni-wz92ce4saz1jzazg****\\\\\\",\\\\n          \\\\\\"ip\\\\\\": \\\\\\"192.168.0.33\\\\\\",\\\\n          \\\\\\"mac\\\\\\": \\\\\\"00:XXXX:3e:16:7c:50\\\\\\",\\\\n          \\\\\\"nodeType\\\\\\": \\\\\\"ENI\\\\\\",\\\\n          \\\\\\"regionNo\\\\\\": \\\\\\"cn-shenzhen-st3-a01\\\\\\",\\\\n          \\\\\\"regionNoAlias\\\\\\": \\\\\\"cn-shenzhen\\\\\\",\\\\n          \\\\\\"revMatchedRoute\\\\\\": {\\\\n            \\\\\\"revNextHopSet\\\\\\": [\\\\n              \\\\n            ]\\\\n          },\\\\n          \\\\\\"status\\\\\\": \\\\\\"InUse\\\\\\"\\\\n        }\\\\n      ]\\\\n    },\\\\n    \\\\\\"topologyReportId\\\\\\": \\\\\\"tpr-21cf60002715491b8****\\\\\\"\\\\n  }\\\\n}\\",\\n  \\"Reachable\\": true,\\n  \\"CreateTime\\": \\"2023-03-16T07:11:27Z\\",\\n  \\"AliUid\\": 0,\\n  \\"RequestId\\": \\"DEE0FEAF-59AE-5CDD-AA07-626BC365D571\\",\\n  \\"NetworkPathParameter\\": \\"{\\\\n  \\\\\\"sourceId\\\\\\": \\\\\\"i-bp100g5pbp6kj4p9****\\\\\\",\\\\n  \\\\\\"sourceType\\\\\\": \\\\\\"ecs\\\\\\",\\\\n  \\\\\\"targetId\\\\\\": \\\\\\"i-t4n4ltwgbbomzb0g****\\\\\\",\\\\n  \\\\\\"targetType\\\\\\": \\\\\\"ecs\\\\\\"\\\\n}\\"\\n}","type":"json"}]',
            'title' => '获取网络可达性分析任务结果',
            'description' => '**GetNetworkReachableAnalysis**接口属于异步接口，即系统会返回一个任务ID，但该网络可达性分析结果尚未成功获取，系统后台的获取任务仍在进行。您可以查询网络可达性分析任务的状态： '."\n"
                .'- 当网络可达性分析任务处于**init**状态时，表示网络可达性分析任务正在进行中。'."\n"
                .'- 当网络可达性分析任务处于**finish**状态时，表示网络可达性分析任务已完成，即可获取结果。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'nis.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'nis-intl.aliyuncs.com',
        ],
    ],
];
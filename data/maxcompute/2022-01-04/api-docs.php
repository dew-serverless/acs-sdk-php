<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'MaxCompute',
        'version' => '2022-01-04',
    ],
    'directories' => [
        [
            'id' => 176776,
            'title' => 'Quota管理',
            'type' => 'directory',
            'children' => [
                'ListQuotas',
                'GetQuota',
                'UpdateQuota',
                'ListQuotasPlans',
                'CreateQuotaPlan',
                'UpdateQuotaPlan',
                'GetQuotaPlan',
                'DeleteQuotaPlan',
                'CreateQuotaSchedule',
                'UpdateQuotaSchedule',
                'GetQuotaSchedule',
            ],
        ],
        [
            'id' => 176788,
            'title' => '项目管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 174122,
                    'title' => '基础管理（Project）',
                    'type' => 'directory',
                    'children' => [
                        'CreateProject',
                        'ListProjects',
                        'GetProject',
                        'UpdateProjectIpWhiteList',
                        'GetTrustedProjects',
                    ],
                ],
                [
                    'id' => 176791,
                    'title' => '角色权限（Role、User）',
                    'type' => 'directory',
                    'children' => [
                        'ListProjectUsers',
                        'CreateRole',
                        'ListRoles',
                        'GetRoleAcl',
                        'GetRoleAclOnObject',
                        'GetRolePolicy',
                        'ListUsersByRole',
                    ],
                ],
                [
                    'id' => 176799,
                    'title' => 'Package',
                    'type' => 'directory',
                    'children' => [
                        'ListPackages',
                        'UpdatePackage',
                        'CreatePackage',
                        'GetPackage',
                    ],
                ],
                [
                    'id' => 176804,
                    'title' => '表（Table）',
                    'type' => 'directory',
                    'children' => [
                        'ListTables',
                    ],
                ],
                [
                    'id' => 173014,
                    'title' => '函数（Function）',
                    'type' => 'directory',
                    'children' => [
                        'ListFunctions',
                    ],
                ],
                [
                    'id' => 176806,
                    'title' => '资源（Resource）',
                    'type' => 'directory',
                    'children' => [
                        'ListResources',
                    ],
                ],
            ],
        ],
        [
            'id' => 181874,
            'title' => '租户管理',
            'type' => 'directory',
            'children' => [
                'ListUsers',
            ],
        ],
        [
            'id' => 185541,
            'title' => '作业运维',
            'type' => 'directory',
            'children' => [
                'ListJobInfos',
                'GetRunningJobs',
                'KillJobs',
                'GetJobResourceUsage',
            ],
        ],
        [
            'id' => 190118,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetTableInfo',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListQuotas' => [
            'path' => '/api/v1/quotas',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '280747109771520',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'productId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ODPS',
                        'default' => 'ODPS',
                    ],
                ],
                [
                    'name' => 'billingType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费模式',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'subscription',
                        'default' => 'subscription',
                    ],
                ],
                [
                    'name' => 'saleTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可以根据费用标签来过滤quota 对象，费用标签是用户在标签云产品创建的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"tag":"this_is_tag_demo"}',
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                    ],
                ],
                [
                    'name' => 'maxItem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限制返回的最大数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopCompatibleResult<ListQuotasDTO>',
                        'description' => 'PopCompatibleResult<ListQuotasDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc12e6f16677875480593081d2956',
                            ],
                            'quotaInfoList' => [
                                'description' => 'quota列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'quota列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'billingPolicy' => [
                                            'description' => '订单信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'billingMethod' => [
                                                    'title' => '"PAYASYOUGO" 表示后付费',
                                                    'description' => '付费模式。'."\n"
                                                        .'- subscription,表示是预付费quota。'."\n"
                                                        .'- payasyougo，表示是后付费quota。',
                                                    'type' => 'string',
                                                    'example' => 'subscription',
                                                ],
                                                'odpsSpecCode' => [
                                                    'description' => '订单规格',
                                                    'type' => 'string',
                                                    'example' => 'OdpsStandard ',
                                                ],
                                                'orderId' => [
                                                    'description' => '订单id。',
                                                    'type' => 'string',
                                                    'example' => '45245678',
                                                ],
                                            ],
                                        ],
                                        'saleTag' => [
                                            'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                            'type' => 'object',
                                            'properties' => [
                                                'resourceIds' => [
                                                    'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'maxcompute quota 对象的标识',
                                                        'type' => 'string',
                                                        'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"',
                                                    ],
                                                ],
                                                'resourceType' => [
                                                    'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                    'type' => 'string',
                                                    'example' => '"project"',
                                                ],
                                            ],
                                        ],
                                        'cluster' => [
                                            'description' => '集群id',
                                            'type' => 'string',
                                            'example' => 'AT-120N'."\n",
                                        ],
                                        'createTime' => [
                                            'description' => '资源创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2022-09-06T02:14:44Z'."\n",
                                        ],
                                        'creatorId' => [
                                            'description' => '资源创建者，云账号UID。',
                                            'type' => 'string',
                                            'example' => '672863518'."\n",
                                        ],
                                        'id' => [
                                            'description' => 'quota ID',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'name' => [
                                            'description' => 'quota名称',
                                            'type' => 'string',
                                            'example' => 'quota_a'."\n",
                                        ],
                                        'nickName' => [
                                            'description' => 'quota别名',
                                            'type' => 'string',
                                            'example' => 'quota_nickname'."\n",
                                        ],
                                        'parameter' => [
                                            'description' => 'quota的描述信息',
                                            'type' => 'object',
                                            'example' => '{"minCU":10,	'."\n"
                                                .'"adhocCU":0,'."\n"
                                                .'"maxCU":10,'."\n"
                                                .'"schedulerType":"Fair",'."\n"
                                                .'}',
                                        ],
                                        'parentId' => [
                                            'description' => '父资源id。',
                                            'type' => 'string',
                                            'example' => 'null',
                                        ],
                                        'regionId' => [
                                            'description' => '地域id。',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                        'scheduleInfo' => [
                                            'description' => '分时信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'currPlan' => [
                                                    'description' => '按照调度计划生效的quota计划',
                                                    'type' => 'string',
                                                    'example' => 'planA',
                                                ],
                                                'currTime' => [
                                                    'description' => 'currPlan被调度的时间',
                                                    'type' => 'string',
                                                    'example' => '0800',
                                                ],
                                                'nextPlan' => [
                                                    'description' => '按照调度计划将要生效的quota计划',
                                                    'type' => 'string',
                                                    'example' => 'planB',
                                                ],
                                                'nextTime' => [
                                                    'description' => 'next_plan被调度的时间',
                                                    'type' => 'string',
                                                    'example' => '1700',
                                                ],
                                                'oncePlan' => [
                                                    'description' => '立即生效的quota计划。'."\n"
                                                        .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                    'type' => 'string',
                                                    'example' => 'planC',
                                                ],
                                                'onceTime' => [
                                                    'description' => '立即生效触发的时间',
                                                    'type' => 'string',
                                                    'example' => '1500',
                                                ],
                                                'operatorName' => [
                                                    'description' => '操作人名称。',
                                                    'type' => 'string',
                                                    'example' => 'userA',
                                                ],
                                                'timezone' => [
                                                    'description' => '时区',
                                                    'type' => 'string',
                                                    'example' => 'UTC+8',
                                                ],
                                            ],
                                        ],
                                        'status' => [
                                            'description' => '资源状态',
                                            'type' => 'string',
                                            'example' => 'ON '."\n",
                                        ],
                                        'subQuotaInfoList' => [
                                            'description' => '二级quota信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '二级quota信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'saleTag' => [
                                                        'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'resourceIds' => [
                                                                'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => 'maxcompute quota 对象的标识',
                                                                    'type' => 'string',
                                                                    'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                                                ],
                                                            ],
                                                            'resourceType' => [
                                                                'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                                'type' => 'string',
                                                                'example' => '"quota"',
                                                            ],
                                                        ],
                                                    ],
                                                    'billingPolicy' => [
                                                        'description' => '订单信息',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'billingMethod' => [
                                                                'title' => '"PAYASYOUGO" 表示后付费',
                                                                'description' => '付费模式。'."\n"
                                                                    .'- subscription,表示是预付费quota。'."\n"
                                                                    .'- payasyougo，表示是后付费quota。',
                                                                'type' => 'string',
                                                                'example' => 'subscription'."\n",
                                                            ],
                                                            'odpsSpecCode' => [
                                                                'description' => '订单规格',
                                                                'type' => 'string',
                                                                'example' => 'OdpsStandard ',
                                                            ],
                                                            'orderId' => [
                                                                'description' => '订单id。',
                                                                'type' => 'string',
                                                                'example' => '45245678'."\n",
                                                            ],
                                                        ],
                                                    ],
                                                    'cluster' => [
                                                        'description' => '集群id',
                                                        'type' => 'string',
                                                        'example' => 'AT-120N',
                                                    ],
                                                    'createTime' => [
                                                        'description' => '资源创建时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '2022-09-06T02:14:44Z'."\n",
                                                    ],
                                                    'creatorId' => [
                                                        'description' => '资源创建者，云账号UID。',
                                                        'type' => 'string',
                                                        'example' => '672863518'."\n",
                                                    ],
                                                    'id' => [
                                                        'description' => '二级quota ID',
                                                        'type' => 'string',
                                                        'example' => '1000048',
                                                    ],
                                                    'name' => [
                                                        'description' => '二级quota名称',
                                                        'type' => 'string',
                                                        'example' => 'subquotaA'."\n",
                                                    ],
                                                    'nickName' => [
                                                        'description' => '二级quota别名',
                                                        'type' => 'string',
                                                        'example' => 'subquotaA'."\n",
                                                    ],
                                                    'parameter' => [
                                                        'description' => 'quota的描述信息',
                                                        'type' => 'object',
                                                        'example' => '{"minCU":10,	'."\n"
                                                            .'"adhocCU":0,'."\n"
                                                            .'"maxCU":10,'."\n"
                                                            .'"schedulerType":"Fair",'."\n"
                                                            .'}',
                                                    ],
                                                    'parentId' => [
                                                        'description' => '父资源id',
                                                        'type' => 'string',
                                                        'example' => '0',
                                                    ],
                                                    'regionId' => [
                                                        'description' => '地域id。',
                                                        'type' => 'string',
                                                        'example' => 'cn-beijing',
                                                    ],
                                                    'scheduleInfo' => [
                                                        'description' => '分时信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'currPlan' => [
                                                                'description' => '按照调度计划生效的quota计划',
                                                                'type' => 'string',
                                                                'example' => 'planA',
                                                            ],
                                                            'currTime' => [
                                                                'description' => 'currPlan被调度的时间',
                                                                'type' => 'string',
                                                                'example' => '0800',
                                                            ],
                                                            'nextPlan' => [
                                                                'description' => '按照调度计划将要生效的quota计划',
                                                                'type' => 'string',
                                                                'example' => 'planB',
                                                            ],
                                                            'nextTime' => [
                                                                'description' => 'next_plan被调度的时间',
                                                                'type' => 'string',
                                                                'example' => '1700',
                                                            ],
                                                            'oncePlan' => [
                                                                'description' => '立即生效的quota计划。'."\n"
                                                                    .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                                'type' => 'string',
                                                                'example' => 'planC',
                                                            ],
                                                            'onceTime' => [
                                                                'description' => '立即生效触发的时间',
                                                                'type' => 'string',
                                                                'example' => '1500',
                                                            ],
                                                            'operatorName' => [
                                                                'description' => '操作人名称。',
                                                                'type' => 'string',
                                                                'example' => 'userA',
                                                            ],
                                                            'timezone' => [
                                                                'description' => '时区',
                                                                'type' => 'string',
                                                                'example' => 'UTC+8',
                                                            ],
                                                        ],
                                                    ],
                                                    'status' => [
                                                        'description' => '资源状态',
                                                        'type' => 'string',
                                                        'example' => 'ON',
                                                    ],
                                                    'tag' => [
                                                        'description' => 'quota的资源标签',
                                                        'type' => 'string',
                                                        'example' => 'abc',
                                                    ],
                                                    'tenantId' => [
                                                        'description' => '租户id。',
                                                        'type' => 'string',
                                                        'example' => '280747109771520'."\n",
                                                    ],
                                                    'type' => [
                                                        'title' => '对应控制集群的resourceSystemType字段',
                                                        'description' => '对应控制集群的resourceSystemType字段',
                                                        'type' => 'string',
                                                        'example' => 'FUXI_ONLINE'."\n",
                                                    ],
                                                    'version' => [
                                                        'description' => '版本',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'tag' => [
                                            'description' => 'quota的资源标签',
                                            'type' => 'string',
                                            'example' => 'abc',
                                        ],
                                        'tenantId' => [
                                            'description' => '租户id。',
                                            'type' => 'string',
                                            'example' => '280747109771520'."\n",
                                        ],
                                        'type' => [
                                            'title' => '对应控制集群的resourceSystemType字段',
                                            'description' => '对应控制集群的resourceSystemType字段',
                                            'type' => 'string',
                                            'example' => 'FUXI_ONLINE'."\n",
                                        ],
                                        'version' => [
                                            'description' => '版本。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Tags' => [
                                            'description' => '标签',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagValue' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                    'TagKey' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'Department',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'marker' => [
                                'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                                'type' => 'string',
                                'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                            ],
                            'maxItem' => [
                                'description' => '每页返回的最大结果数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'quotaInfoList' => [
                                        'description' => 'quota列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'quota列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'id' => [
                                                    'description' => 'quota id',
                                                    'type' => 'string',
                                                    'example' => '0'."\n",
                                                ],
                                                'name' => [
                                                    'description' => 'quota名称',
                                                    'type' => 'string',
                                                    'example' => 'quota_a'."\n",
                                                ],
                                                'nickName' => [
                                                    'description' => 'quota别名',
                                                    'type' => 'string',
                                                    'example' => 'quota_nickname',
                                                ],
                                                'type' => [
                                                    'title' => '对应控制集群的resourceSystemType字段',
                                                    'description' => '对应控制集群的resourceSystemType字段',
                                                    'type' => 'string',
                                                    'example' => 'FUXI_ONLINE',
                                                ],
                                                'status' => [
                                                    'description' => '资源状态',
                                                    'type' => 'string',
                                                    'example' => 'ON',
                                                ],
                                                'tenantId' => [
                                                    'description' => '租户id。',
                                                    'type' => 'string',
                                                    'example' => '280747109771520',
                                                ],
                                                'regionId' => [
                                                    'description' => '地域id。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'parentId' => [
                                                    'description' => '父资源 id',
                                                    'type' => 'string',
                                                    'example' => 'null',
                                                ],
                                                'cluster' => [
                                                    'description' => '集群id',
                                                    'type' => 'string',
                                                    'example' => 'AT-120N',
                                                ],
                                                'version' => [
                                                    'description' => '版本',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'billingPolicy' => [
                                                    'description' => '订单信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'odpsSpecCode' => [
                                                            'description' => '订单规格',
                                                            'type' => 'string',
                                                            'example' => 'OdpsStandard ',
                                                        ],
                                                        'orderId' => [
                                                            'description' => '订单id',
                                                            'type' => 'string',
                                                            'example' => '45245678'."\n",
                                                        ],
                                                        'billingMethod' => [
                                                            'title' => '"PAYASYOUGO" 表示后付费',
                                                            'description' => '付费模式。'."\n"
                                                                .'- subscription,表示是预付费quota。'."\n"
                                                                .'- payasyougo，表示是后付费quota。',
                                                            'type' => 'string',
                                                            'example' => 'subscription',
                                                        ],
                                                    ],
                                                ],
                                                'scheduleInfo' => [
                                                    'description' => '分时信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'currPlan' => [
                                                            'description' => '按照调度计划生效的quota计划',
                                                            'type' => 'string',
                                                            'example' => 'planA'."\n",
                                                        ],
                                                        'currTime' => [
                                                            'description' => 'currPlan被调度的时间',
                                                            'type' => 'string',
                                                            'example' => '0800',
                                                        ],
                                                        'nextPlan' => [
                                                            'description' => '按照调度计划将要生效的quota计划',
                                                            'type' => 'string',
                                                            'example' => 'planB',
                                                        ],
                                                        'nextTime' => [
                                                            'description' => 'next_plan被调度的时间',
                                                            'type' => 'string',
                                                            'example' => '1700',
                                                        ],
                                                        'oncePlan' => [
                                                            'description' => '立即生效的quota计划。'."\n"
                                                                .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                            'type' => 'string',
                                                            'example' => 'planC',
                                                        ],
                                                        'onceTime' => [
                                                            'description' => '立即生效触发的时间',
                                                            'type' => 'string',
                                                            'example' => '1500',
                                                        ],
                                                        'operatorName' => [
                                                            'description' => '操作人名称。',
                                                            'type' => 'string',
                                                            'example' => 'userA',
                                                        ],
                                                        'timezone' => [
                                                            'description' => '时区',
                                                            'type' => 'string',
                                                            'example' => 'UTC+8',
                                                        ],
                                                    ],
                                                ],
                                                'parameter' => [
                                                    'description' => 'quota的描述信息',
                                                    'type' => 'object',
                                                    'example' => '{"minCU":10,	'."\n"
                                                        .'"adhocCU":0,'."\n"
                                                        .'"maxCU":10,'."\n"
                                                        .'"schedulerType":"Fair",'."\n"
                                                        .'}',
                                                ],
                                                'tag' => [
                                                    'description' => 'quota的资源标签',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                                'createTime' => [
                                                    'description' => '资源创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2022-09-06T02:14:44Z'."\n",
                                                ],
                                                'creatorId' => [
                                                    'description' => '资源创建者，云账号UID。',
                                                    'type' => 'string',
                                                    'example' => '672863518'."\n",
                                                ],
                                                'saleTag' => [
                                                    'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'resourceIds' => [
                                                            'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'maxcompute quota 对象的标识',
                                                                'type' => 'string',
                                                                'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                                            ],
                                                        ],
                                                        'resourceType' => [
                                                            'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                            'type' => 'string',
                                                            'example' => '"quota"'."\n",
                                                        ],
                                                    ],
                                                ],
                                                'subQuotaInfoList' => [
                                                    'description' => '二级quota信息',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '二级quota信息',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'id' => [
                                                                'description' => '二级quota ID',
                                                                'type' => 'string',
                                                                'example' => '1000048',
                                                            ],
                                                            'name' => [
                                                                'description' => '二级quota名称',
                                                                'type' => 'string',
                                                                'example' => 'subquotaA'."\n",
                                                            ],
                                                            'nickName' => [
                                                                'description' => '二级quota昵称',
                                                                'type' => 'string',
                                                                'example' => 'subquotaA'."\n",
                                                            ],
                                                            'type' => [
                                                                'title' => '对应控制集群的resourceSystemType字段',
                                                                'description' => '对应控制集群的resourceSystemType字段',
                                                                'type' => 'string',
                                                                'example' => 'FUXI_ONLINE'."\n",
                                                            ],
                                                            'status' => [
                                                                'description' => '资源状态',
                                                                'type' => 'string',
                                                                'example' => 'ON',
                                                            ],
                                                            'tenantId' => [
                                                                'description' => '租户id。',
                                                                'type' => 'string',
                                                                'example' => '280747109771520'."\n",
                                                            ],
                                                            'regionId' => [
                                                                'description' => '地域id。',
                                                                'type' => 'string',
                                                                'example' => 'cn-beijing',
                                                            ],
                                                            'parentId' => [
                                                                'description' => '父资源id。',
                                                                'type' => 'string',
                                                                'example' => '0',
                                                            ],
                                                            'cluster' => [
                                                                'description' => '集群id',
                                                                'type' => 'string',
                                                                'example' => 'AT-120N',
                                                            ],
                                                            'version' => [
                                                                'description' => '版本号',
                                                                'type' => 'string',
                                                                'example' => '1',
                                                            ],
                                                            'billingPolicy' => [
                                                                'description' => '订单信息',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'odpsSpecCode' => [
                                                                        'description' => '订单规格',
                                                                        'type' => 'string',
                                                                        'example' => 'OdpsStandard ',
                                                                    ],
                                                                    'orderId' => [
                                                                        'description' => '订单id。',
                                                                        'type' => 'string',
                                                                        'example' => '45245678'."\n",
                                                                    ],
                                                                    'billingMethod' => [
                                                                        'title' => '"PAYASYOUGO" 表示后付费',
                                                                        'description' => '付费模式。'."\n"
                                                                            .'- subscription，表示预付费quota。'."\n"
                                                                            .'- payasyougo，表示是后付费quota。',
                                                                        'type' => 'string',
                                                                        'example' => 'subscription',
                                                                    ],
                                                                ],
                                                            ],
                                                            'scheduleInfo' => [
                                                                'description' => '分时信息',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'currPlan' => [
                                                                        'description' => '按照调度计划生效的quota计划',
                                                                        'type' => 'string',
                                                                        'example' => 'planA',
                                                                    ],
                                                                    'currTime' => [
                                                                        'description' => 'currPlan被调度的时间',
                                                                        'type' => 'string',
                                                                        'example' => '0800',
                                                                    ],
                                                                    'nextPlan' => [
                                                                        'description' => '按照调度计划将要生效的quota计划',
                                                                        'type' => 'string',
                                                                        'example' => 'planB',
                                                                    ],
                                                                    'nextTime' => [
                                                                        'description' => 'next_plan被调度的时间',
                                                                        'type' => 'string',
                                                                        'example' => '1700',
                                                                    ],
                                                                    'oncePlan' => [
                                                                        'description' => '立即生效的quota计划。'."\n"
                                                                            .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                                        'type' => 'string',
                                                                        'example' => 'planC',
                                                                    ],
                                                                    'onceTime' => [
                                                                        'description' => '立即生效触发的时间',
                                                                        'type' => 'string',
                                                                        'example' => '1500',
                                                                    ],
                                                                    'operatorName' => [
                                                                        'description' => '操作人名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'userA',
                                                                    ],
                                                                    'timezone' => [
                                                                        'description' => '时区',
                                                                        'type' => 'string',
                                                                        'example' => 'UTC+8',
                                                                    ],
                                                                ],
                                                            ],
                                                            'parameter' => [
                                                                'description' => 'quota的描述信息',
                                                                'type' => 'object',
                                                                'example' => '{"minCU":10,	'."\n"
                                                                    .'"adhocCU":0,'."\n"
                                                                    .'"maxCU":10,'."\n"
                                                                    .'"schedulerType":"Fair",'."\n"
                                                                    .'}',
                                                            ],
                                                            'tag' => [
                                                                'description' => 'quota的资源标签',
                                                                'type' => 'string',
                                                                'example' => 'abc',
                                                            ],
                                                            'createTime' => [
                                                                'description' => '资源创建时间',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '2022-09-06T02:14:44Z'."\n",
                                                            ],
                                                            'creatorId' => [
                                                                'description' => '资源创建者，云账号UID。',
                                                                'type' => 'string',
                                                                'example' => '672863518'."\n",
                                                            ],
                                                            'saleTag' => [
                                                                'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'resourceIds' => [
                                                                        'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => 'maxcompute quota 对象的标识',
                                                                            'type' => 'string',
                                                                            'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                                                        ],
                                                                    ],
                                                                    'resourceType' => [
                                                                        'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                                        'type' => 'string',
                                                                        'example' => '"quota"'."\n",
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Tags' => [
                                                    'description' => '标签。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '标签',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TagValue' => [
                                                                'description' => '标签值。',
                                                                'type' => 'string',
                                                                'example' => 'a12351qHDP6YEQMt',
                                                            ],
                                                            'TagKey' => [
                                                                'description' => '标签键。',
                                                                'type' => 'string',
                                                                'example' => 'Department',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'marker' => [
                                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                                        'type' => 'string',
                                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                                    ],
                                    'maxItem' => [
                                        'description' => '每页返回的最大结果数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'NextToken' => [
                                        'description' => '分页标识，当前接口仅支持连续翻页。返回值nextToken 非空代表还有剩余数据。把nextToken 作为参数继续查询会获得下一页。',
                                        'type' => 'string',
                                        'enumValueTitles' => [],
                                        'example' => '"abcde"',
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '分页标识，当前接口仅支持连续翻页。返回值nextToken 非空代表还有剩余数据。把nextToken 作为参数继续查询会获得下一页。',
                                'type' => 'string',
                                'example' => 'AAAAAdDWBF2w6Olxc+cMPjUtUMo/CvPe4IK7f7kIQFrIZjyc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc12e6f16677875480593081d2956\\",\\n  \\"quotaInfoList\\": [\\n    {\\n      \\"billingPolicy\\": {\\n        \\"billingMethod\\": \\"subscription\\",\\n        \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n        \\"orderId\\": \\"45245678\\"\\n      },\\n      \\"saleTag\\": {\\n        \\"resourceIds\\": [\\n          \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\"\\n        ],\\n        \\"resourceType\\": \\"\\\\\\"project\\\\\\"\\"\\n      },\\n      \\"cluster\\": \\"AT-120N\\\\n\\",\\n      \\"createTime\\": 0,\\n      \\"creatorId\\": \\"672863518\\\\n\\",\\n      \\"id\\": \\"0\\",\\n      \\"name\\": \\"quota_a\\\\n\\",\\n      \\"nickName\\": \\"quota_nickname\\\\n\\",\\n      \\"parameter\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"parentId\\": \\"null\\",\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"scheduleInfo\\": {\\n        \\"currPlan\\": \\"planA\\",\\n        \\"currTime\\": \\"0800\\",\\n        \\"nextPlan\\": \\"planB\\",\\n        \\"nextTime\\": \\"1700\\",\\n        \\"oncePlan\\": \\"planC\\",\\n        \\"onceTime\\": \\"1500\\",\\n        \\"operatorName\\": \\"userA\\",\\n        \\"timezone\\": \\"UTC+8\\"\\n      },\\n      \\"status\\": \\"ON \\\\n\\",\\n      \\"subQuotaInfoList\\": [\\n        {\\n          \\"saleTag\\": {\\n            \\"resourceIds\\": [\\n              \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n            ],\\n            \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\"\\n          },\\n          \\"billingPolicy\\": {\\n            \\"billingMethod\\": \\"subscription\\\\n\\",\\n            \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n            \\"orderId\\": \\"45245678\\\\n\\"\\n          },\\n          \\"cluster\\": \\"AT-120N\\",\\n          \\"createTime\\": 0,\\n          \\"creatorId\\": \\"672863518\\\\n\\",\\n          \\"id\\": \\"1000048\\",\\n          \\"name\\": \\"subquotaA\\\\n\\",\\n          \\"nickName\\": \\"subquotaA\\\\n\\",\\n          \\"parameter\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"parentId\\": \\"0\\",\\n          \\"regionId\\": \\"cn-beijing\\",\\n          \\"scheduleInfo\\": {\\n            \\"currPlan\\": \\"planA\\",\\n            \\"currTime\\": \\"0800\\",\\n            \\"nextPlan\\": \\"planB\\",\\n            \\"nextTime\\": \\"1700\\",\\n            \\"oncePlan\\": \\"planC\\",\\n            \\"onceTime\\": \\"1500\\",\\n            \\"operatorName\\": \\"userA\\",\\n            \\"timezone\\": \\"UTC+8\\"\\n          },\\n          \\"status\\": \\"ON\\",\\n          \\"tag\\": \\"abc\\",\\n          \\"tenantId\\": \\"280747109771520\\\\n\\",\\n          \\"type\\": \\"FUXI_ONLINE\\\\n\\",\\n          \\"version\\": \\"1\\"\\n        }\\n      ],\\n      \\"tag\\": \\"abc\\",\\n      \\"tenantId\\": \\"280747109771520\\\\n\\",\\n      \\"type\\": \\"FUXI_ONLINE\\\\n\\",\\n      \\"version\\": \\"1\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagValue\\": \\"1\\",\\n          \\"TagKey\\": \\"Department\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n  \\"maxItem\\": 10,\\n  \\"data\\": {\\n    \\"quotaInfoList\\": [\\n      {\\n        \\"id\\": \\"0\\\\n\\",\\n        \\"name\\": \\"quota_a\\\\n\\",\\n        \\"nickName\\": \\"quota_nickname\\",\\n        \\"type\\": \\"FUXI_ONLINE\\",\\n        \\"status\\": \\"ON\\",\\n        \\"tenantId\\": \\"280747109771520\\",\\n        \\"regionId\\": \\"cn-beijing\\",\\n        \\"parentId\\": \\"null\\",\\n        \\"cluster\\": \\"AT-120N\\",\\n        \\"version\\": \\"1\\",\\n        \\"billingPolicy\\": {\\n          \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n          \\"orderId\\": \\"45245678\\\\n\\",\\n          \\"billingMethod\\": \\"subscription\\"\\n        },\\n        \\"scheduleInfo\\": {\\n          \\"currPlan\\": \\"planA\\\\n\\",\\n          \\"currTime\\": \\"0800\\",\\n          \\"nextPlan\\": \\"planB\\",\\n          \\"nextTime\\": \\"1700\\",\\n          \\"oncePlan\\": \\"planC\\",\\n          \\"onceTime\\": \\"1500\\",\\n          \\"operatorName\\": \\"userA\\",\\n          \\"timezone\\": \\"UTC+8\\"\\n        },\\n        \\"parameter\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"tag\\": \\"abc\\",\\n        \\"createTime\\": 0,\\n        \\"creatorId\\": \\"672863518\\\\n\\",\\n        \\"saleTag\\": {\\n          \\"resourceIds\\": [\\n            \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n          ],\\n          \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n        },\\n        \\"subQuotaInfoList\\": [\\n          {\\n            \\"id\\": \\"1000048\\",\\n            \\"name\\": \\"subquotaA\\\\n\\",\\n            \\"nickName\\": \\"subquotaA\\\\n\\",\\n            \\"type\\": \\"FUXI_ONLINE\\\\n\\",\\n            \\"status\\": \\"ON\\",\\n            \\"tenantId\\": \\"280747109771520\\\\n\\",\\n            \\"regionId\\": \\"cn-beijing\\",\\n            \\"parentId\\": \\"0\\",\\n            \\"cluster\\": \\"AT-120N\\",\\n            \\"version\\": \\"1\\",\\n            \\"billingPolicy\\": {\\n              \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n              \\"orderId\\": \\"45245678\\\\n\\",\\n              \\"billingMethod\\": \\"subscription\\"\\n            },\\n            \\"scheduleInfo\\": {\\n              \\"currPlan\\": \\"planA\\",\\n              \\"currTime\\": \\"0800\\",\\n              \\"nextPlan\\": \\"planB\\",\\n              \\"nextTime\\": \\"1700\\",\\n              \\"oncePlan\\": \\"planC\\",\\n              \\"onceTime\\": \\"1500\\",\\n              \\"operatorName\\": \\"userA\\",\\n              \\"timezone\\": \\"UTC+8\\"\\n            },\\n            \\"parameter\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"tag\\": \\"abc\\",\\n            \\"createTime\\": 0,\\n            \\"creatorId\\": \\"672863518\\\\n\\",\\n            \\"saleTag\\": {\\n              \\"resourceIds\\": [\\n                \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n              ],\\n              \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n            }\\n          }\\n        ],\\n        \\"Tags\\": [\\n          {\\n            \\"TagValue\\": \\"a12351qHDP6YEQMt\\",\\n            \\"TagKey\\": \\"Department\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10,\\n    \\"NextToken\\": \\"\\\\\\"abcde\\\\\\"\\"\\n  },\\n  \\"NextToken\\": \\"AAAAAdDWBF2w6Olxc+cMPjUtUMo/CvPe4IK7f7kIQFrIZjyc\\"\\n}","type":"json"}]',
            'title' => '获取Quota列表',
            'summary' => '获取Quota列表。',
        ],
        'GetQuota' => [
            'path' => '/api/v1/quotas/{nickname}',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p'."\n"
                            ."\n"
                            .'#中文名称需要经过utf8 urlencode编码转义',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '520539530998273',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-chengdu',
                    ],
                ],
                [
                    'name' => 'AkProven',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ak 换取凭证',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'null',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'mock',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含子模块。取值：-true：包含。-false（默认值）：不包含。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopCompatibleResult<QuotaInfo>',
                        'description' => 'PopCompatibleResult<QuotaInfo>',
                        'type' => 'object',
                        'properties' => [
                            'billingPolicy' => [
                                'description' => '订单信息',
                                'type' => 'object',
                                'properties' => [
                                    'billingMethod' => [
                                        'title' => '"PAYASYOUGO" 表示后付费',
                                        'description' => '付费模式。'."\n"
                                            .'- subscription,表示是预付费quota。'."\n"
                                            .'- payasyougo，表示是后付费quota。',
                                        'type' => 'string',
                                        'example' => 'subscription'."\n",
                                    ],
                                    'odpsSpecCode' => [
                                        'description' => '订单规格',
                                        'type' => 'string',
                                        'example' => 'OdpsStandard',
                                    ],
                                    'orderId' => [
                                        'description' => '订单id。',
                                        'type' => 'string',
                                        'example' => '45245678',
                                    ],
                                ],
                            ],
                            'saleTag' => [
                                'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                'type' => 'object',
                                'properties' => [
                                    'resourceIds' => [
                                        'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                            'type' => 'string',
                                            'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                        ],
                                    ],
                                    'resourceType' => [
                                        'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                        'type' => 'string',
                                        'example' => '"quota"',
                                    ],
                                ],
                            ],
                            'cluster' => [
                                'description' => '集群id。',
                                'type' => 'string',
                                'example' => 'AT-120N',
                            ],
                            'createTime' => [
                                'description' => '资源的创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2022-09-06T02:14:44Z'."\n",
                            ],
                            'creatorId' => [
                                'description' => '资源创建者，云账号UID。',
                                'type' => 'string',
                                'example' => '672863518'."\n",
                            ],
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0b87b7a316654730544735643e9200',
                            ],
                            'id' => [
                                'description' => 'quota ID',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'name' => [
                                'description' => 'quota名称',
                                'type' => 'string',
                                'example' => 'quota_a'."\n",
                            ],
                            'nickName' => [
                                'description' => 'quota别名',
                                'type' => 'string',
                                'example' => 'quota_nickname',
                            ],
                            'parameter' => [
                                'description' => 'quota的描述信息',
                                'type' => 'object',
                                'example' => '{"minCU":10,	'."\n"
                                    .'"adhocCU":0,'."\n"
                                    .'"maxCU":10,'."\n"
                                    .'"schedulerType":"Fair",'."\n"
                                    .'}',
                            ],
                            'parentId' => [
                                'description' => '父资源id。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'regionId' => [
                                'description' => '地域id',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                            ],
                            'scheduleInfo' => [
                                'description' => '分时信息。',
                                'type' => 'object',
                                'properties' => [
                                    'currPlan' => [
                                        'description' => '按照调度计划生效的quota计划',
                                        'type' => 'string',
                                        'example' => 'planA',
                                    ],
                                    'currTime' => [
                                        'description' => 'currPlan被调度的时间',
                                        'type' => 'string',
                                        'example' => '0800',
                                    ],
                                    'nextPlan' => [
                                        'description' => '按照调度计划将要生效的quota计划',
                                        'type' => 'string',
                                        'example' => 'planB',
                                    ],
                                    'nextTime' => [
                                        'description' => 'next_plan被调度的时间',
                                        'type' => 'string',
                                        'example' => '1700',
                                    ],
                                    'oncePlan' => [
                                        'description' => '立即生效的quota计划。'."\n"
                                            .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                        'type' => 'string',
                                        'example' => 'planC',
                                    ],
                                    'onceTime' => [
                                        'description' => '立即生效触发的时间',
                                        'type' => 'string',
                                        'example' => '1500',
                                    ],
                                    'operatorName' => [
                                        'description' => '操作人名称。',
                                        'type' => 'string',
                                        'example' => 'userA',
                                    ],
                                    'timezone' => [
                                        'description' => '时区',
                                        'type' => 'string',
                                        'example' => 'UTC+8',
                                    ],
                                ],
                            ],
                            'status' => [
                                'description' => '资源状态',
                                'type' => 'string',
                                'example' => 'ON',
                            ],
                            'subQuotaInfoList' => [
                                'description' => '二级quota信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'billingPolicy' => [
                                            'description' => '订单信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'billingMethod' => [
                                                    'title' => '"PAYASYOUGO" 表示后付费',
                                                    'description' => '付费模式。'."\n"
                                                        .'- subscription,表示是预付费quota。'."\n"
                                                        .'- payasyougo，表示是后付费quota。',
                                                    'type' => 'string',
                                                    'example' => 'subscription',
                                                ],
                                                'odpsSpecCode' => [
                                                    'description' => '订单规格',
                                                    'type' => 'string',
                                                    'example' => 'OdpsStandard'."\n",
                                                ],
                                                'orderId' => [
                                                    'description' => '订单id。',
                                                    'type' => 'string',
                                                    'example' => '45245678'."\n",
                                                ],
                                            ],
                                        ],
                                        'saleTag' => [
                                            'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                            'type' => 'object',
                                            'properties' => [
                                                'resourceIds' => [
                                                    'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                        'type' => 'string',
                                                        'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                                    ],
                                                ],
                                                'resourceType' => [
                                                    'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                    'type' => 'string',
                                                    'example' => '"quota"',
                                                ],
                                            ],
                                        ],
                                        'cluster' => [
                                            'description' => '集群id。',
                                            'type' => 'string',
                                            'example' => 'AT-120N'."\n",
                                        ],
                                        'createTime' => [
                                            'description' => '资源创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2022-09-06T02:14:44Z'."\n",
                                        ],
                                        'creatorId' => [
                                            'description' => '资源创建者，云账号UID。',
                                            'type' => 'string',
                                            'example' => '672863518'."\n",
                                        ],
                                        'id' => [
                                            'description' => '二级quota ID',
                                            'type' => 'string',
                                            'example' => '1000048'."\n",
                                        ],
                                        'name' => [
                                            'description' => '二级quota名称',
                                            'type' => 'string',
                                            'example' => 'subquotaA'."\n",
                                        ],
                                        'nickName' => [
                                            'description' => '二级quota别名',
                                            'type' => 'string',
                                            'example' => 'subquotaA'."\n",
                                        ],
                                        'parameter' => [
                                            'description' => 'quota的描述信息',
                                            'type' => 'object',
                                            'example' => '{"minCU":10,	'."\n"
                                                .'"adhocCU":0,'."\n"
                                                .'"maxCU":10,'."\n"
                                                .'"schedulerType":"Fair",'."\n"
                                                .'}',
                                        ],
                                        'parentId' => [
                                            'description' => '父资源id。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'regionId' => [
                                            'description' => '地域id',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                        'scheduleInfo' => [
                                            'description' => '分时信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'currPlan' => [
                                                    'description' => '按照调度计划生效的quota计划',
                                                    'type' => 'string',
                                                    'example' => 'planA',
                                                ],
                                                'currTime' => [
                                                    'description' => 'currPlan被调度的时间',
                                                    'type' => 'string',
                                                    'example' => '0800',
                                                ],
                                                'nextPlan' => [
                                                    'description' => '按照调度计划将要生效的quota计划',
                                                    'type' => 'string',
                                                    'example' => 'planB',
                                                ],
                                                'nextTime' => [
                                                    'description' => 'next_plan被调度的时间',
                                                    'type' => 'string',
                                                    'example' => '1700',
                                                ],
                                                'oncePlan' => [
                                                    'description' => '立即生效的quota计划。'."\n"
                                                        .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                    'type' => 'string',
                                                    'example' => 'planC',
                                                ],
                                                'onceTime' => [
                                                    'description' => '立即生效触发的时间',
                                                    'type' => 'string',
                                                    'example' => '1500',
                                                ],
                                                'operatorName' => [
                                                    'description' => '操作人名称。',
                                                    'type' => 'string',
                                                    'example' => 'userA'."\n",
                                                ],
                                                'timezone' => [
                                                    'description' => '时区',
                                                    'type' => 'string',
                                                    'example' => 'UTC+8',
                                                ],
                                            ],
                                        ],
                                        'status' => [
                                            'description' => '资源状态',
                                            'type' => 'string',
                                            'example' => 'ON'."\n",
                                        ],
                                        'tag' => [
                                            'description' => 'quota的资源标签',
                                            'type' => 'string',
                                            'example' => 'abc',
                                        ],
                                        'tenantId' => [
                                            'description' => '租户id。',
                                            'type' => 'string',
                                            'example' => '478403690625249',
                                        ],
                                        'type' => [
                                            'title' => '对应控制集群的resourceSystemType字段',
                                            'description' => '对应控制集群的resourceSystemType字段',
                                            'type' => 'string',
                                            'example' => 'FUXI_ONLINE',
                                        ],
                                        'version' => [
                                            'description' => '版本号',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'tag' => [
                                'description' => 'quota的资源标签',
                                'type' => 'string',
                                'example' => 'abc',
                            ],
                            'tenantId' => [
                                'description' => '租户id。',
                                'type' => 'string',
                                'example' => '478403690625249',
                            ],
                            'type' => [
                                'title' => '对应控制集群的resourceSystemType字段',
                                'description' => '对应控制集群的resourceSystemType字段',
                                'type' => 'string',
                                'example' => 'FUXI_ONLINE',
                            ],
                            'version' => [
                                'description' => '版本号。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'description' => 'quota ID',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'name' => [
                                        'description' => 'quota名称',
                                        'type' => 'string',
                                        'example' => 'quota_a',
                                    ],
                                    'nickName' => [
                                        'description' => 'Quota别名',
                                        'type' => 'string',
                                        'example' => 'quota_nickname',
                                    ],
                                    'type' => [
                                        'title' => '对应控制集群的resourceSystemType字段',
                                        'description' => '对应控制集群的resourceSystemType字段',
                                        'type' => 'string',
                                        'example' => 'FUXI_ONLINE',
                                    ],
                                    'status' => [
                                        'description' => '资源状态',
                                        'type' => 'string',
                                        'example' => 'ON',
                                    ],
                                    'saleTag' => [
                                        'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                        'type' => 'object',
                                        'properties' => [
                                            'resourceIds' => [
                                                'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                    'type' => 'string',
                                                    'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                                ],
                                            ],
                                            'resourceType' => [
                                                'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                'type' => 'string',
                                                'example' => '"quota"'."\n",
                                            ],
                                        ],
                                    ],
                                    'tenantId' => [
                                        'description' => '租户id。',
                                        'type' => 'string',
                                        'example' => '478403690625249',
                                    ],
                                    'regionId' => [
                                        'description' => '地域id',
                                        'type' => 'string',
                                        'example' => 'cn-beijing',
                                    ],
                                    'parentId' => [
                                        'description' => '父资源id。',
                                        'type' => 'string',
                                        'example' => 'null',
                                    ],
                                    'cluster' => [
                                        'description' => '集群id。',
                                        'type' => 'string',
                                        'example' => 'AT-120N',
                                    ],
                                    'version' => [
                                        'description' => '版本号',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'billingPolicy' => [
                                        'description' => '订单信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'odpsSpecCode' => [
                                                'description' => '订单规格',
                                                'type' => 'string',
                                                'example' => 'OdpsStandard',
                                            ],
                                            'orderId' => [
                                                'description' => '订单id。',
                                                'type' => 'string',
                                                'example' => '45245678',
                                            ],
                                            'billingMethod' => [
                                                'title' => '"PAYASYOUGO" 表示后付费',
                                                'description' => '付费模式。'."\n"
                                                    .'- subscription,表示是预付费quota。'."\n"
                                                    .'- payasyougo，表示是后付费quota。',
                                                'type' => 'string',
                                                'example' => 'subscription',
                                            ],
                                        ],
                                    ],
                                    'scheduleInfo' => [
                                        'description' => '分时信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'currPlan' => [
                                                'description' => '按照调度计划生效的quota计划',
                                                'type' => 'string',
                                                'example' => 'planA',
                                            ],
                                            'currTime' => [
                                                'description' => 'currPlan被调度的时间',
                                                'type' => 'string',
                                                'example' => '0800',
                                            ],
                                            'nextPlan' => [
                                                'description' => '按照调度计划将要生效的quota计划',
                                                'type' => 'string',
                                                'example' => 'planB',
                                            ],
                                            'nextTime' => [
                                                'description' => 'next_plan被调度的时间',
                                                'type' => 'string',
                                                'example' => '1700',
                                            ],
                                            'oncePlan' => [
                                                'description' => '立即生效的quota计划。'."\n"
                                                    .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                'type' => 'string',
                                                'example' => 'planC',
                                            ],
                                            'onceTime' => [
                                                'description' => '立即生效触发的时间',
                                                'type' => 'string',
                                                'example' => '1500',
                                            ],
                                            'operatorName' => [
                                                'description' => '操作人名称。',
                                                'type' => 'string',
                                                'example' => 'userA',
                                            ],
                                            'timezone' => [
                                                'description' => '时区',
                                                'type' => 'string',
                                                'example' => 'UTC+8',
                                            ],
                                        ],
                                    ],
                                    'parameter' => [
                                        'description' => 'quota的描述信息',
                                        'type' => 'object',
                                        'example' => '{"minCU":10,	'."\n"
                                            .'"adhocCU":0,'."\n"
                                            .'"maxCU":10,'."\n"
                                            .'"schedulerType":"Fair",'."\n"
                                            .'}',
                                    ],
                                    'tag' => [
                                        'description' => 'quota的资源标签',
                                        'type' => 'string',
                                        'example' => 'abc',
                                    ],
                                    'createTime' => [
                                        'description' => '资源创建时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2022-09-06T02:14:44Z',
                                    ],
                                    'creatorId' => [
                                        'description' => '资源创建者，云账号UID。',
                                        'type' => 'string',
                                        'example' => '672863518',
                                    ],
                                    'subQuotaInfoList' => [
                                        'description' => '二级quota信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据',
                                            'type' => 'object',
                                            'properties' => [
                                                'id' => [
                                                    'description' => '二级quota ID',
                                                    'type' => 'string',
                                                    'example' => '1000048',
                                                ],
                                                'name' => [
                                                    'description' => '二级quota名称',
                                                    'type' => 'string',
                                                    'example' => 'subquotaA',
                                                ],
                                                'saleTag' => [
                                                    'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'resourceIds' => [
                                                            'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                                                'type' => 'string',
                                                                'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"'."\n",
                                                            ],
                                                        ],
                                                        'resourceType' => [
                                                            'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                            'type' => 'string',
                                                            'example' => '"quota"'."\n",
                                                        ],
                                                    ],
                                                ],
                                                'nickName' => [
                                                    'description' => '二级quota昵称',
                                                    'type' => 'string',
                                                    'example' => 'subquotaA',
                                                ],
                                                'type' => [
                                                    'title' => '对应控制集群的resourceSystemType字段',
                                                    'description' => '对应控制集群的resourceSystemType字段',
                                                    'type' => 'string',
                                                    'example' => 'FUXI_ONLINE',
                                                ],
                                                'status' => [
                                                    'description' => '资源状态',
                                                    'type' => 'string',
                                                    'example' => 'ON',
                                                ],
                                                'tenantId' => [
                                                    'description' => '租户id。',
                                                    'type' => 'string',
                                                    'example' => '478403690625249'."\n",
                                                ],
                                                'regionId' => [
                                                    'description' => '地域id。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'parentId' => [
                                                    'description' => '父资源id。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'cluster' => [
                                                    'description' => '集群id',
                                                    'type' => 'string',
                                                    'example' => 'AT-120N'."\n",
                                                ],
                                                'version' => [
                                                    'description' => '版本号。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'billingPolicy' => [
                                                    'description' => '订单信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'odpsSpecCode' => [
                                                            'description' => '订单规格',
                                                            'type' => 'string',
                                                            'example' => 'OdpsStandard',
                                                        ],
                                                        'orderId' => [
                                                            'description' => '订单id。',
                                                            'type' => 'string',
                                                            'example' => '45245678',
                                                        ],
                                                        'billingMethod' => [
                                                            'title' => '"PAYASYOUGO" 表示后付费',
                                                            'description' => '付费模式。'."\n"
                                                                .'- subscription,表示是预付费quota。'."\n"
                                                                .'- payasyougo，表示是后付费quota。',
                                                            'type' => 'string',
                                                            'example' => 'subscription',
                                                        ],
                                                    ],
                                                ],
                                                'scheduleInfo' => [
                                                    'description' => '分时信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'currPlan' => [
                                                            'description' => '按照调度计划生效的quota计划',
                                                            'type' => 'string',
                                                            'example' => 'planA',
                                                        ],
                                                        'currTime' => [
                                                            'description' => 'currPlan被调度的时间',
                                                            'type' => 'string',
                                                            'example' => '0800',
                                                        ],
                                                        'nextPlan' => [
                                                            'description' => '按照调度计划将要生效的quota计划',
                                                            'type' => 'string',
                                                            'example' => 'planB',
                                                        ],
                                                        'nextTime' => [
                                                            'description' => 'next_plan被调度的时间',
                                                            'type' => 'string',
                                                            'example' => '1700',
                                                        ],
                                                        'oncePlan' => [
                                                            'description' => '立即生效的quota计划。'."\n"
                                                                .'如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                            'type' => 'string',
                                                            'example' => 'planC',
                                                        ],
                                                        'onceTime' => [
                                                            'description' => '立即生效触发的时间',
                                                            'type' => 'string',
                                                            'example' => '1500',
                                                        ],
                                                        'operatorName' => [
                                                            'description' => '操作人名称。',
                                                            'type' => 'string',
                                                            'example' => 'userA',
                                                        ],
                                                        'timezone' => [
                                                            'description' => '时区',
                                                            'type' => 'string',
                                                            'example' => 'UTC+8',
                                                        ],
                                                    ],
                                                ],
                                                'parameter' => [
                                                    'description' => 'quota的描述信息',
                                                    'type' => 'object',
                                                ],
                                                'tag' => [
                                                    'description' => 'quota的资源标签',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                                'createTime' => [
                                                    'description' => '资源创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2022-09-06T02:14:44Z'."\n",
                                                ],
                                                'creatorId' => [
                                                    'description' => '资源创建者，云账号UID。',
                                                    'type' => 'string',
                                                    'example' => '672863518',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"billingPolicy\\": {\\n    \\"billingMethod\\": \\"subscription\\\\n\\",\\n    \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n    \\"orderId\\": \\"45245678\\"\\n  },\\n  \\"saleTag\\": {\\n    \\"resourceIds\\": [\\n      \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n    ],\\n    \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\"\\n  },\\n  \\"cluster\\": \\"AT-120N\\",\\n  \\"createTime\\": 0,\\n  \\"creatorId\\": \\"672863518\\\\n\\",\\n  \\"requestId\\": \\"0b87b7a316654730544735643e9200\\",\\n  \\"id\\": \\"0\\",\\n  \\"name\\": \\"quota_a\\\\n\\",\\n  \\"nickName\\": \\"quota_nickname\\",\\n  \\"parameter\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"parentId\\": \\"null\\",\\n  \\"regionId\\": \\"cn-beijing\\",\\n  \\"scheduleInfo\\": {\\n    \\"currPlan\\": \\"planA\\",\\n    \\"currTime\\": \\"0800\\",\\n    \\"nextPlan\\": \\"planB\\",\\n    \\"nextTime\\": \\"1700\\",\\n    \\"oncePlan\\": \\"planC\\",\\n    \\"onceTime\\": \\"1500\\",\\n    \\"operatorName\\": \\"userA\\",\\n    \\"timezone\\": \\"UTC+8\\"\\n  },\\n  \\"status\\": \\"ON\\",\\n  \\"subQuotaInfoList\\": [\\n    {\\n      \\"billingPolicy\\": {\\n        \\"billingMethod\\": \\"subscription\\",\\n        \\"odpsSpecCode\\": \\"OdpsStandard\\\\n\\",\\n        \\"orderId\\": \\"45245678\\\\n\\"\\n      },\\n      \\"saleTag\\": {\\n        \\"resourceIds\\": [\\n          \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n        ],\\n        \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\"\\n      },\\n      \\"cluster\\": \\"AT-120N\\\\n\\",\\n      \\"createTime\\": 0,\\n      \\"creatorId\\": \\"672863518\\\\n\\",\\n      \\"id\\": \\"1000048\\\\n\\",\\n      \\"name\\": \\"subquotaA\\\\n\\",\\n      \\"nickName\\": \\"subquotaA\\\\n\\",\\n      \\"parameter\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"parentId\\": \\"0\\",\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"scheduleInfo\\": {\\n        \\"currPlan\\": \\"planA\\",\\n        \\"currTime\\": \\"0800\\",\\n        \\"nextPlan\\": \\"planB\\",\\n        \\"nextTime\\": \\"1700\\",\\n        \\"oncePlan\\": \\"planC\\",\\n        \\"onceTime\\": \\"1500\\",\\n        \\"operatorName\\": \\"userA\\\\n\\",\\n        \\"timezone\\": \\"UTC+8\\"\\n      },\\n      \\"status\\": \\"ON\\\\n\\",\\n      \\"tag\\": \\"abc\\",\\n      \\"tenantId\\": \\"478403690625249\\",\\n      \\"type\\": \\"FUXI_ONLINE\\",\\n      \\"version\\": \\"1\\"\\n    }\\n  ],\\n  \\"tag\\": \\"abc\\",\\n  \\"tenantId\\": \\"478403690625249\\",\\n  \\"type\\": \\"FUXI_ONLINE\\",\\n  \\"version\\": \\"1\\",\\n  \\"data\\": {\\n    \\"id\\": \\"0\\",\\n    \\"name\\": \\"quota_a\\",\\n    \\"nickName\\": \\"quota_nickname\\",\\n    \\"type\\": \\"FUXI_ONLINE\\",\\n    \\"status\\": \\"ON\\",\\n    \\"saleTag\\": {\\n      \\"resourceIds\\": [\\n        \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n      ],\\n      \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n    },\\n    \\"tenantId\\": \\"478403690625249\\",\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"parentId\\": \\"null\\",\\n    \\"cluster\\": \\"AT-120N\\",\\n    \\"version\\": \\"1\\",\\n    \\"billingPolicy\\": {\\n      \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n      \\"orderId\\": \\"45245678\\",\\n      \\"billingMethod\\": \\"subscription\\"\\n    },\\n    \\"scheduleInfo\\": {\\n      \\"currPlan\\": \\"planA\\",\\n      \\"currTime\\": \\"0800\\",\\n      \\"nextPlan\\": \\"planB\\",\\n      \\"nextTime\\": \\"1700\\",\\n      \\"oncePlan\\": \\"planC\\",\\n      \\"onceTime\\": \\"1500\\",\\n      \\"operatorName\\": \\"userA\\",\\n      \\"timezone\\": \\"UTC+8\\"\\n    },\\n    \\"parameter\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"tag\\": \\"abc\\",\\n    \\"createTime\\": 0,\\n    \\"creatorId\\": \\"672863518\\",\\n    \\"subQuotaInfoList\\": [\\n      {\\n        \\"id\\": \\"1000048\\",\\n        \\"name\\": \\"subquotaA\\",\\n        \\"saleTag\\": {\\n          \\"resourceIds\\": [\\n            \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n          ],\\n          \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n        },\\n        \\"nickName\\": \\"subquotaA\\",\\n        \\"type\\": \\"FUXI_ONLINE\\",\\n        \\"status\\": \\"ON\\",\\n        \\"tenantId\\": \\"478403690625249\\\\n\\",\\n        \\"regionId\\": \\"cn-beijing\\",\\n        \\"parentId\\": \\"0\\",\\n        \\"cluster\\": \\"AT-120N\\\\n\\",\\n        \\"version\\": \\"1\\",\\n        \\"billingPolicy\\": {\\n          \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n          \\"orderId\\": \\"45245678\\",\\n          \\"billingMethod\\": \\"subscription\\"\\n        },\\n        \\"scheduleInfo\\": {\\n          \\"currPlan\\": \\"planA\\",\\n          \\"currTime\\": \\"0800\\",\\n          \\"nextPlan\\": \\"planB\\",\\n          \\"nextTime\\": \\"1700\\",\\n          \\"oncePlan\\": \\"planC\\",\\n          \\"onceTime\\": \\"1500\\",\\n          \\"operatorName\\": \\"userA\\",\\n          \\"timezone\\": \\"UTC+8\\"\\n        },\\n        \\"parameter\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"tag\\": \\"abc\\",\\n        \\"createTime\\": 0,\\n        \\"creatorId\\": \\"672863518\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取指定一级Quota组信息',
            'summary' => '获取指定一级Quota组信息。',
        ],
        'UpdateQuota' => [
            'path' => '/api/v1/quotas/{nickname}',
            'methods' => [
                'put',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '196871833188896',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'AkProven',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'ak 换取凭证',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'null',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配额名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'quota_a',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "id": "0",'."\n"
                            .'      "name": "a",'."\n"
                            .'      "nickName": "VIRTUAL",'."\n"
                            .'      "type": "",'."\n"
                            .'      "status": "ON",'."\n"
                            .'      "tenantId": "10001",'."\n"
                            .'      "regionId": "cn-hangzhou",'."\n"
                            .'      "parentId": "0",'."\n"
                            .'      "cluster": "AT-ODPS-TEST3",'."\n"
                            .'      "version": "",'."\n"
                            .'      "billingPolicy": {'."\n"
                            .'            "odpsSpecCode": "",'."\n"
                            .'            "billingMethod": "subscription"'."\n"
                            .'      },'."\n"
                            .'      "parameter": {'."\n"
                            .'            "minCU": 40,'."\n"
                            .'            "maxCU": 40,'."\n"
                            .'            "adhocCU": 0, //弹性预留CU'."\n"
                            .'            "elasticMinCU": 40, //非预留CU'."\n"
                            .'            "elasticMaxCU": 40,'."\n"
                            .'            "enablePreemptiveScheduling": false,'."\n"
                            .'            "forceReservedMin": true,'."\n"
                            .'            "enablePriority": false,'."\n"
                            .'            "singleJobCULimit": 100,'."\n"
                            .'            "adhocQuotaBeginTimeInSec": 1345,'."\n"
                            .'            "adhocQuotaEndTimeInSec": 1234,'."\n"
                            .'            "ignoreAdhocQuota": false'."\n"
                            .'      },'."\n"
                            .'      "subQuotaInfoList": ['."\n"
                            .'            {'."\n"
                            .'                  "id": "1000048",'."\n"
                            .'                  "nickName": "WlmFuxiSecondaryOnlineQuotaTest",'."\n"
                            .'                  "name": "WlmFuxiSecondaryOnlineQuotaTest",'."\n"
                            .'                  "type": "FUXI_ONLINE",'."\n"
                            .'                  "status": "ON",'."\n"
                            .'                  "tenantId": "10001",'."\n"
                            .'                  "regionId": "cn-hangzhou",'."\n"
                            .'                  "parentId": "0",'."\n"
                            .'                  "cluster": "AT-ODPS-TEST3",'."\n"
                            .'                  "version": "",'."\n"
                            .'                  "billingPolicy": {'."\n"
                            .'                        "odpsSpecCode": "",'."\n"
                            .'                        "billingMethod": "subscription"'."\n"
                            .'                  },'."\n"
                            .'                  "parameter": {'."\n"
                            .'                        "minCU": 40,'."\n"
                            .'                        "maxCU": 40,'."\n"
                            .'                        "adhocCU": 0, //弹性预留CU'."\n"
                            .'                        "elasticMinCU": 40, //非预留CU'."\n"
                            .'                        "elasticMaxCU": 40,'."\n"
                            .'                        "enablePreemptiveScheduling": false,'."\n"
                            .'                        "forceReservedMin": true,'."\n"
                            .'                        "enablePriority": false,'."\n"
                            .'                        "singleJobCULimit": 100,'."\n"
                            .'                        "adhocQuotaBeginTimeInSec": 1345,'."\n"
                            .'                        "adhocQuotaEndTimeInSec": 1234,'."\n"
                            .'                        "ignoreAdhocQuota": false'."\n"
                            .'                  }'."\n"
                            .'            }'."\n"
                            .'      ]'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc12e6a16679892465424670db3eb',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc12e6a16679892465424670db3eb\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '更新配额信息',
            'summary' => '更新MaxCompute配额信息。',
        ],
        'ListQuotasPlans' => [
            'path' => '/api/v1/quotas/{nickname}/plans',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'quotaA',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '478403690625249',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListQuotaPlansDTO>',
                        'description' => 'PopResult<ListQuotaPlansDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0be3e0bd16661643917136451ebf55',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'planList' => [
                                        'description' => 'Quota计划列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => 'Quota计划名称',
                                                    'type' => 'string',
                                                    'example' => 'planA',
                                                ],
                                                'createTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-05-16T06:07:45Z'."\n",
                                                ],
                                                'quota' => [
                                                    'description' => 'quota详情',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'id' => [
                                                            'description' => 'quota ID',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'name' => [
                                                            'description' => 'quota名称',
                                                            'type' => 'string',
                                                            'example' => 'quota_a',
                                                        ],
                                                        'nickName' => [
                                                            'description' => 'quota别名',
                                                            'type' => 'string',
                                                            'example' => 'quota_nickname',
                                                        ],
                                                        'type' => [
                                                            'title' => '对应控制集群的resourceSystemType字段',
                                                            'description' => '对应控制集群的resourceSystemType字段',
                                                            'type' => 'string',
                                                            'example' => 'FUXI_ONLINE',
                                                        ],
                                                        'status' => [
                                                            'description' => '资源状态',
                                                            'type' => 'string',
                                                            'example' => 'ON',
                                                        ],
                                                        'tenantId' => [
                                                            'description' => '租户id。',
                                                            'type' => 'string',
                                                            'example' => '478403690625249',
                                                        ],
                                                        'regionId' => [
                                                            'description' => '地域id。',
                                                            'type' => 'string',
                                                            'example' => 'cn-beijing',
                                                        ],
                                                        'parentId' => [
                                                            'description' => '父资源id。',
                                                            'type' => 'string',
                                                            'example' => 'null',
                                                        ],
                                                        'cluster' => [
                                                            'description' => '集群id',
                                                            'type' => 'string',
                                                            'example' => 'AT-120N'."\n",
                                                        ],
                                                        'version' => [
                                                            'description' => '版本。',
                                                            'type' => 'string',
                                                            'example' => '1',
                                                        ],
                                                        'billingPolicy' => [
                                                            'description' => '订单信息',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'odpsSpecCode' => [
                                                                    'description' => '订单规格',
                                                                    'type' => 'string',
                                                                    'example' => 'OdpsStandard ',
                                                                ],
                                                                'orderId' => [
                                                                    'description' => '订单id。',
                                                                    'type' => 'string',
                                                                    'example' => '45245678',
                                                                ],
                                                                'billingMethod' => [
                                                                    'title' => '"PAYASYOUGO" 表示后付费',
                                                                    'description' => '付费模式。'."\n"
                                                                        .'- subscription,表示是预付费quota。'."\n"
                                                                        .'- payasyougo，表示是后付费quota。',
                                                                    'type' => 'string',
                                                                    'example' => 'subscription',
                                                                ],
                                                            ],
                                                        ],
                                                        'scheduleInfo' => [
                                                            'description' => '分时信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'currPlan' => [
                                                                    'description' => '按照调度计划生效的quota计划',
                                                                    'type' => 'string',
                                                                    'example' => 'planA',
                                                                ],
                                                                'currTime' => [
                                                                    'description' => 'currPlan被调度的时间',
                                                                    'type' => 'string',
                                                                    'example' => '0800'."\n",
                                                                ],
                                                                'nextPlan' => [
                                                                    'description' => '按照调度计划将要生效的quota计划',
                                                                    'type' => 'string',
                                                                    'example' => 'planB',
                                                                ],
                                                                'nextTime' => [
                                                                    'description' => 'next_plan被调度的时间',
                                                                    'type' => 'string',
                                                                    'example' => '1700',
                                                                ],
                                                                'oncePlan' => [
                                                                    'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                                    'type' => 'string',
                                                                    'example' => 'planC',
                                                                ],
                                                                'onceTime' => [
                                                                    'description' => '立即生效触发的时间',
                                                                    'type' => 'string',
                                                                    'example' => '1500',
                                                                ],
                                                                'operatorName' => [
                                                                    'description' => '操作者名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'userA',
                                                                ],
                                                            ],
                                                        ],
                                                        'parameter' => [
                                                            'description' => 'quota的描述信息',
                                                            'type' => 'object',
                                                        ],
                                                        'tag' => [
                                                            'description' => 'quota的资源标签',
                                                            'type' => 'string',
                                                            'example' => 'abc',
                                                        ],
                                                        'createTime' => [
                                                            'description' => '创建时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '2022-09-06T02:14:44Z'."\n",
                                                        ],
                                                        'creatorId' => [
                                                            'description' => '资源创建者，云账号UID。',
                                                            'type' => 'string',
                                                            'example' => '672863518',
                                                        ],
                                                        'subQuotaInfoList' => [
                                                            'description' => '二级quota信息',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '二级quota信息',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'id' => [
                                                                        'description' => '二级quota ID',
                                                                        'type' => 'string',
                                                                        'example' => '1000048',
                                                                    ],
                                                                    'name' => [
                                                                        'description' => '二级quota名称',
                                                                        'type' => 'string',
                                                                        'example' => 'subquotaA',
                                                                    ],
                                                                    'nickName' => [
                                                                        'description' => '二级quota昵称',
                                                                        'type' => 'string',
                                                                        'example' => 'subquotaA',
                                                                    ],
                                                                    'type' => [
                                                                        'title' => '对应控制集群的resourceSystemType字段',
                                                                        'description' => '对应控制集群的resourceSystemType字段',
                                                                        'type' => 'string',
                                                                        'example' => 'FUXI_ONLINE',
                                                                    ],
                                                                    'status' => [
                                                                        'description' => '资源状态',
                                                                        'type' => 'string',
                                                                        'example' => 'ON',
                                                                    ],
                                                                    'tenantId' => [
                                                                        'description' => '租户id。',
                                                                        'type' => 'string',
                                                                        'example' => '478403690625249',
                                                                    ],
                                                                    'regionId' => [
                                                                        'description' => '地域id。',
                                                                        'type' => 'string',
                                                                        'example' => 'cn-beijing',
                                                                    ],
                                                                    'parentId' => [
                                                                        'description' => '父资源id。',
                                                                        'type' => 'string',
                                                                        'example' => '0',
                                                                    ],
                                                                    'cluster' => [
                                                                        'description' => '集群id',
                                                                        'type' => 'string',
                                                                        'example' => 'AT-120N'."\n",
                                                                    ],
                                                                    'version' => [
                                                                        'description' => '版本号',
                                                                        'type' => 'string',
                                                                        'example' => '1',
                                                                    ],
                                                                    'billingPolicy' => [
                                                                        'description' => '订单信息',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'odpsSpecCode' => [
                                                                                'description' => '订单规格',
                                                                                'type' => 'string',
                                                                                'example' => 'OdpsStandard ',
                                                                            ],
                                                                            'orderId' => [
                                                                                'description' => '订单ID',
                                                                                'type' => 'string',
                                                                                'example' => '45245678',
                                                                            ],
                                                                            'billingMethod' => [
                                                                                'title' => '"PAYASYOUGO" 表示后付费',
                                                                                'description' => '付费模式。'."\n"
                                                                                    .'- subscription,表示是预付费quota。'."\n"
                                                                                    .'- payasyougo，表示是后付费quota。',
                                                                                'type' => 'string',
                                                                                'example' => 'subscription'."\n",
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'scheduleInfo' => [
                                                                        'description' => '分时信息',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'currPlan' => [
                                                                                'description' => '按照调度计划生效的quota计划',
                                                                                'type' => 'string',
                                                                                'example' => 'planA',
                                                                            ],
                                                                            'currTime' => [
                                                                                'description' => 'currPlan被调度的时间',
                                                                                'type' => 'string',
                                                                                'example' => '0800',
                                                                            ],
                                                                            'nextPlan' => [
                                                                                'description' => '按照调度计划将要生效的quota计划',
                                                                                'type' => 'string',
                                                                                'example' => 'planB',
                                                                            ],
                                                                            'nextTime' => [
                                                                                'description' => 'next_plan被调度的时间',
                                                                                'type' => 'string',
                                                                                'example' => '1700',
                                                                            ],
                                                                            'oncePlan' => [
                                                                                'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                                                'type' => 'string',
                                                                                'example' => 'planC',
                                                                            ],
                                                                            'onceTime' => [
                                                                                'description' => '立即生效触发的时间',
                                                                                'type' => 'string',
                                                                                'example' => '1500',
                                                                            ],
                                                                            'operatorName' => [
                                                                                'description' => '操作者名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'userA',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'parameter' => [
                                                                        'description' => 'quota的描述信息',
                                                                        'type' => 'object',
                                                                    ],
                                                                    'tag' => [
                                                                        'description' => 'quota的资源标签',
                                                                        'type' => 'string',
                                                                        'example' => 'abc',
                                                                    ],
                                                                    'createTime' => [
                                                                        'description' => '创建时间。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '2022-09-06T02:14:44Z'."\n",
                                                                    ],
                                                                    'creatorId' => [
                                                                        'description' => '资源创建者，云账号UID。',
                                                                        'type' => 'string',
                                                                        'example' => '672863518',
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
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0bd16661643917136451ebf55\\",\\n  \\"data\\": {\\n    \\"planList\\": [\\n      {\\n        \\"name\\": \\"planA\\",\\n        \\"createTime\\": \\"2022-05-16T06:07:45Z\\\\n\\",\\n        \\"quota\\": {\\n          \\"id\\": \\"0\\",\\n          \\"name\\": \\"quota_a\\",\\n          \\"nickName\\": \\"quota_nickname\\",\\n          \\"type\\": \\"FUXI_ONLINE\\",\\n          \\"status\\": \\"ON\\",\\n          \\"tenantId\\": \\"478403690625249\\",\\n          \\"regionId\\": \\"cn-beijing\\",\\n          \\"parentId\\": \\"null\\",\\n          \\"cluster\\": \\"AT-120N\\\\n\\",\\n          \\"version\\": \\"1\\",\\n          \\"billingPolicy\\": {\\n            \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n            \\"orderId\\": \\"45245678\\",\\n            \\"billingMethod\\": \\"subscription\\"\\n          },\\n          \\"scheduleInfo\\": {\\n            \\"currPlan\\": \\"planA\\",\\n            \\"currTime\\": \\"0800\\\\n\\",\\n            \\"nextPlan\\": \\"planB\\",\\n            \\"nextTime\\": \\"1700\\",\\n            \\"oncePlan\\": \\"planC\\",\\n            \\"onceTime\\": \\"1500\\",\\n            \\"operatorName\\": \\"userA\\"\\n          },\\n          \\"parameter\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"tag\\": \\"abc\\",\\n          \\"createTime\\": 0,\\n          \\"creatorId\\": \\"672863518\\",\\n          \\"subQuotaInfoList\\": [\\n            {\\n              \\"id\\": \\"1000048\\",\\n              \\"name\\": \\"subquotaA\\",\\n              \\"nickName\\": \\"subquotaA\\",\\n              \\"type\\": \\"FUXI_ONLINE\\",\\n              \\"status\\": \\"ON\\",\\n              \\"tenantId\\": \\"478403690625249\\",\\n              \\"regionId\\": \\"cn-beijing\\",\\n              \\"parentId\\": \\"0\\",\\n              \\"cluster\\": \\"AT-120N\\\\n\\",\\n              \\"version\\": \\"1\\",\\n              \\"billingPolicy\\": {\\n                \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n                \\"orderId\\": \\"45245678\\",\\n                \\"billingMethod\\": \\"subscription\\\\n\\"\\n              },\\n              \\"scheduleInfo\\": {\\n                \\"currPlan\\": \\"planA\\",\\n                \\"currTime\\": \\"0800\\",\\n                \\"nextPlan\\": \\"planB\\",\\n                \\"nextTime\\": \\"1700\\",\\n                \\"oncePlan\\": \\"planC\\",\\n                \\"onceTime\\": \\"1500\\",\\n                \\"operatorName\\": \\"userA\\"\\n              },\\n              \\"parameter\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"tag\\": \\"abc\\",\\n              \\"createTime\\": 0,\\n              \\"creatorId\\": \\"672863518\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取Quota计划列表',
            'summary' => '获取Quota计划列表。',
        ],
        'CreateQuotaPlan' => [
            'path' => '/api/v1/quotas/{nickname}/plans',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'QuotaNickName',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'planA',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '228451885265153',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "name": "planA",'."\n"
                            .'  // 以下为一个一级 quota，可以只选取跟 plan 相关的字段'."\n"
                            .'  "quota": {'."\n"
                            .'    "name": "a",'."\n"
                            .'    "nickName": "aaa_nick",'."\n"
                            .'    "tenantId": "10001",'."\n"
                            .'    "regionId": "cn-hangzhou",'."\n"
                            .'    "parentId": "0",'."\n"
                            .'    "cluster": "AT-ODPS-TEST3",'."\n"
                            .'    "parameter": {'."\n"
                            .'        "minCU": 40,'."\n"
                            .'        "maxCU": 40,'."\n"
                            .'        "adhocCU": 0,'."\n"
                            .'        "elasticMinCU": 40,'."\n"
                            .'        "elasticMaxCU": 40,'."\n"
                            .'        "enablePreemptiveScheduling": false,'."\n"
                            .'        "forceReservedMin":true,'."\n"
                            .'        "enablePriority":false,'."\n"
                            .'        "singleJobCULimit":100,'."\n"
                            .'        "adhocQuotaBeginTimeInSec": 1345,'."\n"
                            .'        "adhocQuotaEndTimeInSec": 1234,'."\n"
                            .'        "ignoreAdhocQuota":false'."\n"
                            .'    },'."\n"
                            .'    "subQuotaInfoList":'."\n"
                            .'  [ '."\n"
                            .'        {'."\n"
                            .'            "nickName": "WlmFuxiSecondaryOnlineQuotaTest",'."\n"
                            .'            "name": "WlmFuxiSecondaryOnlineQuotaTest",'."\n"
                            .'            "type": "FUXI_ONLINE",'."\n"
                            .'            "tenantId": "10001",'."\n"
                            .'            "regionId": "cn-hangzhou",'."\n"
                            .'            "cluster": "AT-ODPS-TEST3",'."\n"
                            .'            "parameter": {'."\n"
                            .'                "minCU": 40,'."\n"
                            .'                "maxCU": 40,'."\n"
                            .'                "adhocCU": 0,'."\n"
                            .'                "elasticMinCU": 40,'."\n"
                            .'                "elasticMaxCU": 40,'."\n"
                            .'                "enablePreemptiveScheduling": false,'."\n"
                            .'                "forceReservedMin":true,'."\n"
                            .'                "enablePriority":false,'."\n"
                            .'                "singleJobCULimit":100,'."\n"
                            .'                "adhocQuotaBeginTimeInSec": 1345,'."\n"
                            .'                "adhocQuotaEndTimeInSec": 1234,'."\n"
                            .'                "ignoreAdhocQuota":false'."\n"
                            .'            }'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'  }'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc3b4b016674434996033675e71ee',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4b016674434996033675e71ee\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '创建Quota计划',
            'summary' => '新增Quota计划。',
        ],
        'UpdateQuotaPlan' => [
            'path' => '/api/v1/quotas/{nickname}/plans/{planName}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'quotaA',
                    ],
                ],
                [
                    'name' => 'planName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota计划名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'planA',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '478403690625249',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "name": "planA",'."\n"
                            .'  // 以下为一个一级 quota，可以只选取跟 plan 相关的字段'."\n"
                            .'  "quota": {'."\n"
                            .'    "name": "a",'."\n"
                            .'    "nickName": "aaa_nick",'."\n"
                            .'    "tenantId": "10001",'."\n"
                            .'    "regionId": "cn-hangzhou",'."\n"
                            .'    "parentId": "0",'."\n"
                            .'    "cluster": "AT-ODPS-TEST3",'."\n"
                            .'    "parameter": {'."\n"
                            .'        "minCU": 40,'."\n"
                            .'        "maxCU": 40,'."\n"
                            .'        "adhocCU": 0,'."\n"
                            .'        "elasticMinCU": 40,'."\n"
                            .'        "elasticMaxCU": 40,'."\n"
                            .'        "enablePreemptiveScheduling": false,'."\n"
                            .'        "forceReservedMin":true,'."\n"
                            .'        "enablePriority":false,'."\n"
                            .'        "singleJobCULimit":100,'."\n"
                            .'        "adhocQuotaBeginTimeInSec": 1345,'."\n"
                            .'        "adhocQuotaEndTimeInSec": 1234,'."\n"
                            .'        "ignoreAdhocQuota":false'."\n"
                            .'    },'."\n"
                            .'    "subQuotaInfoList":'."\n"
                            .'  [ '."\n"
                            .'        {'."\n"
                            .'            "nickName": "WlmFuxiSecondaryOnlineQuotaTest",'."\n"
                            .'            "name": "WlmFuxiSecondaryOnlineQuotaTest",'."\n"
                            .'            "type": "FUXI_ONLINE",'."\n"
                            .'            "tenantId": "10001",'."\n"
                            .'            "regionId": "cn-hangzhou",'."\n"
                            .'            "cluster": "AT-ODPS-TEST3",'."\n"
                            .'            "parameter": {'."\n"
                            .'                "minCU": 40,'."\n"
                            .'                "maxCU": 40,'."\n"
                            .'                "adhocCU": 0,'."\n"
                            .'                "elasticMinCU": 40,'."\n"
                            .'                "elasticMaxCU": 40,'."\n"
                            .'                "enablePreemptiveScheduling": false,'."\n"
                            .'                "forceReservedMin":true,'."\n"
                            .'                "enablePriority":false,'."\n"
                            .'                "singleJobCULimit":100,'."\n"
                            .'                "adhocQuotaBeginTimeInSec": 1345,'."\n"
                            .'                "adhocQuotaEndTimeInSec": 1234,'."\n"
                            .'                "ignoreAdhocQuota":false'."\n"
                            .'            }'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'  }'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0a06dfe516688379832875789e2c65',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dfe516688379832875789e2c65\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '更新Quota计划',
            'summary' => '更新Quota计划。',
        ],
        'GetQuotaPlan' => [
            'path' => '/api/v1/quotas/{nickname}/plans/{planName}',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'quotaA',
                    ],
                ],
                [
                    'name' => 'planName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota计划名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'planA',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '483212237127906',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<QuotaPlanDTO>',
                        'description' => 'PopResult<QuotaPlanDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0be3e0aa16667684362147582e038f',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'description' => 'quota计划名称',
                                        'type' => 'string',
                                        'example' => 'planA',
                                    ],
                                    'createTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-05-16T06:07:45Z',
                                    ],
                                    'quota' => [
                                        'description' => 'quota详情',
                                        'type' => 'object',
                                        'properties' => [
                                            'id' => [
                                                'description' => 'quota ID',
                                                'type' => 'string',
                                                'example' => '0',
                                            ],
                                            'name' => [
                                                'description' => 'quota名称',
                                                'type' => 'string',
                                                'example' => 'quota_a'."\n",
                                            ],
                                            'nickName' => [
                                                'description' => 'quota别名',
                                                'type' => 'string',
                                                'example' => 'quota_nickname',
                                            ],
                                            'type' => [
                                                'title' => '对应控制集群的resourceSystemType字段',
                                                'description' => '对应控制集群的resourceSystemType字段',
                                                'type' => 'string',
                                                'example' => 'FUXI_ONLINE',
                                            ],
                                            'status' => [
                                                'description' => '资源状态',
                                                'type' => 'string',
                                                'example' => 'ON',
                                            ],
                                            'tenantId' => [
                                                'description' => '租户id。',
                                                'type' => 'string',
                                                'example' => '478403690625249',
                                            ],
                                            'regionId' => [
                                                'description' => '地域id。',
                                                'type' => 'string',
                                                'example' => 'cn-beijing',
                                            ],
                                            'parentId' => [
                                                'description' => '父资源id。',
                                                'type' => 'string',
                                                'example' => 'null',
                                            ],
                                            'cluster' => [
                                                'description' => '集群id。',
                                                'type' => 'string',
                                                'example' => 'AT-120N'."\n",
                                            ],
                                            'version' => [
                                                'description' => '版本号。',
                                                'type' => 'string',
                                                'example' => '1',
                                            ],
                                            'billingPolicy' => [
                                                'description' => '订单信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'odpsSpecCode' => [
                                                        'description' => '订单规格',
                                                        'type' => 'string',
                                                        'example' => 'OdpsStandard',
                                                    ],
                                                    'orderId' => [
                                                        'description' => '订单号。',
                                                        'type' => 'string',
                                                        'example' => '45245678',
                                                    ],
                                                    'billingMethod' => [
                                                        'title' => '"PAYASYOUGO" 表示后付费',
                                                        'description' => '付费模式。'."\n"
                                                            .'- subscription,表示是预付费quota。'."\n"
                                                            .'- payasyougo，表示是后付费quota。',
                                                        'type' => 'string',
                                                        'example' => 'subscription',
                                                    ],
                                                ],
                                            ],
                                            'scheduleInfo' => [
                                                'description' => '分时信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'currPlan' => [
                                                        'description' => '按照调度计划生效的quota计划',
                                                        'type' => 'string',
                                                        'example' => 'planA',
                                                    ],
                                                    'currTime' => [
                                                        'description' => 'currPlan被调度的时间',
                                                        'type' => 'string',
                                                        'example' => '0800',
                                                    ],
                                                    'nextPlan' => [
                                                        'description' => '按照调度计划将要生效的quota plan',
                                                        'type' => 'string',
                                                        'example' => 'planB',
                                                    ],
                                                    'nextTime' => [
                                                        'description' => 'next_plan被调度的时间',
                                                        'type' => 'string',
                                                        'example' => '1700',
                                                    ],
                                                    'oncePlan' => [
                                                        'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                        'type' => 'string',
                                                        'example' => 'planC',
                                                    ],
                                                    'onceTime' => [
                                                        'description' => '立即生效触发的时间',
                                                        'type' => 'string',
                                                        'example' => '1500',
                                                    ],
                                                    'operatorName' => [
                                                        'description' => '操作者名称。',
                                                        'type' => 'string',
                                                        'example' => 'userA',
                                                    ],
                                                ],
                                            ],
                                            'parameter' => [
                                                'description' => 'quota的描述信息',
                                                'type' => 'object',
                                            ],
                                            'tag' => [
                                                'description' => 'quota的资源标签',
                                                'type' => 'string',
                                                'example' => 'abc',
                                            ],
                                            'createTime' => [
                                                'description' => '创建时间。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '2022-09-06T02:14:44Z'."\n",
                                            ],
                                            'creatorId' => [
                                                'description' => '资源创建者，云账号UID。',
                                                'type' => 'string',
                                                'example' => '672863518',
                                            ],
                                            'subQuotaInfoList' => [
                                                'description' => '二级quota信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '二级quota信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'id' => [
                                                            'description' => '二级quota ID',
                                                            'type' => 'string',
                                                            'example' => '1000048',
                                                        ],
                                                        'name' => [
                                                            'description' => '二级quota名称',
                                                            'type' => 'string',
                                                            'example' => 'subquotaA',
                                                        ],
                                                        'nickName' => [
                                                            'description' => '二级quota别名',
                                                            'type' => 'string',
                                                            'example' => 'subquotaA',
                                                        ],
                                                        'type' => [
                                                            'title' => '对应控制集群的resourceSystemType字段',
                                                            'description' => '对应控制集群的resourceSystemType字段',
                                                            'type' => 'string',
                                                            'example' => 'FUXI_ONLINE',
                                                        ],
                                                        'status' => [
                                                            'description' => '资源状态',
                                                            'type' => 'string',
                                                            'example' => 'ON',
                                                        ],
                                                        'tenantId' => [
                                                            'description' => '租户id。',
                                                            'type' => 'string',
                                                            'example' => '478403690625249',
                                                        ],
                                                        'regionId' => [
                                                            'description' => '地域id。',
                                                            'type' => 'string',
                                                            'example' => 'cn-beijing',
                                                        ],
                                                        'parentId' => [
                                                            'description' => '父资源id。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'cluster' => [
                                                            'description' => '集群id',
                                                            'type' => 'string',
                                                            'example' => 'AT-120N'."\n",
                                                        ],
                                                        'version' => [
                                                            'description' => '版本号',
                                                            'type' => 'string',
                                                            'example' => '1',
                                                        ],
                                                        'billingPolicy' => [
                                                            'description' => '订单信息',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'odpsSpecCode' => [
                                                                    'description' => '订单规格',
                                                                    'type' => 'string',
                                                                    'example' => 'OdpsStandard',
                                                                ],
                                                                'orderId' => [
                                                                    'description' => '订单id。',
                                                                    'type' => 'string',
                                                                    'example' => '45245678',
                                                                ],
                                                                'billingMethod' => [
                                                                    'title' => '"PAYASYOUGO" 表示后付费',
                                                                    'description' => '付费模式。'."\n"
                                                                        .'- subscription,表示是预付费quota。'."\n"
                                                                        .'- payasyougo，表示是后付费quota。',
                                                                    'type' => 'string',
                                                                    'example' => 'subscription',
                                                                ],
                                                            ],
                                                        ],
                                                        'scheduleInfo' => [
                                                            'description' => '分时信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'currPlan' => [
                                                                    'description' => '按照调度计划生效的quota计划',
                                                                    'type' => 'string',
                                                                    'example' => 'planA',
                                                                ],
                                                                'currTime' => [
                                                                    'description' => 'currPlan被调度的时间',
                                                                    'type' => 'string',
                                                                    'example' => '0800',
                                                                ],
                                                                'nextPlan' => [
                                                                    'description' => '计划将要生效的quota计划',
                                                                    'type' => 'string',
                                                                    'example' => 'planB',
                                                                ],
                                                                'nextTime' => [
                                                                    'description' => 'next_plan被调度的时间',
                                                                    'type' => 'string',
                                                                    'example' => '1700',
                                                                ],
                                                                'oncePlan' => [
                                                                    'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                                                    'type' => 'string',
                                                                    'example' => 'planC',
                                                                ],
                                                                'onceTime' => [
                                                                    'description' => '立即生效触发的时间',
                                                                    'type' => 'string',
                                                                    'example' => '1500',
                                                                ],
                                                                'operatorName' => [
                                                                    'description' => '操作者名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'userA',
                                                                ],
                                                            ],
                                                        ],
                                                        'parameter' => [
                                                            'description' => 'quota的描述信息',
                                                            'type' => 'object',
                                                        ],
                                                        'tag' => [
                                                            'description' => 'quota的资源标签',
                                                            'type' => 'string',
                                                            'example' => 'abc',
                                                        ],
                                                        'createTime' => [
                                                            'description' => '资源创建时间',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '2022-09-06T02:14:44Z'."\n",
                                                        ],
                                                        'creatorId' => [
                                                            'description' => '创建者id。',
                                                            'type' => 'string',
                                                            'example' => '672863518',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0aa16667684362147582e038f\\",\\n  \\"data\\": {\\n    \\"name\\": \\"planA\\",\\n    \\"createTime\\": \\"2022-05-16T06:07:45Z\\",\\n    \\"quota\\": {\\n      \\"id\\": \\"0\\",\\n      \\"name\\": \\"quota_a\\\\n\\",\\n      \\"nickName\\": \\"quota_nickname\\",\\n      \\"type\\": \\"FUXI_ONLINE\\",\\n      \\"status\\": \\"ON\\",\\n      \\"tenantId\\": \\"478403690625249\\",\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"parentId\\": \\"null\\",\\n      \\"cluster\\": \\"AT-120N\\\\n\\",\\n      \\"version\\": \\"1\\",\\n      \\"billingPolicy\\": {\\n        \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n        \\"orderId\\": \\"45245678\\",\\n        \\"billingMethod\\": \\"subscription\\"\\n      },\\n      \\"scheduleInfo\\": {\\n        \\"currPlan\\": \\"planA\\",\\n        \\"currTime\\": \\"0800\\",\\n        \\"nextPlan\\": \\"planB\\",\\n        \\"nextTime\\": \\"1700\\",\\n        \\"oncePlan\\": \\"planC\\",\\n        \\"onceTime\\": \\"1500\\",\\n        \\"operatorName\\": \\"userA\\"\\n      },\\n      \\"parameter\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"tag\\": \\"abc\\",\\n      \\"createTime\\": 0,\\n      \\"creatorId\\": \\"672863518\\",\\n      \\"subQuotaInfoList\\": [\\n        {\\n          \\"id\\": \\"1000048\\",\\n          \\"name\\": \\"subquotaA\\",\\n          \\"nickName\\": \\"subquotaA\\",\\n          \\"type\\": \\"FUXI_ONLINE\\",\\n          \\"status\\": \\"ON\\",\\n          \\"tenantId\\": \\"478403690625249\\",\\n          \\"regionId\\": \\"cn-beijing\\",\\n          \\"parentId\\": \\"0\\",\\n          \\"cluster\\": \\"AT-120N\\\\n\\",\\n          \\"version\\": \\"1\\",\\n          \\"billingPolicy\\": {\\n            \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n            \\"orderId\\": \\"45245678\\",\\n            \\"billingMethod\\": \\"subscription\\"\\n          },\\n          \\"scheduleInfo\\": {\\n            \\"currPlan\\": \\"planA\\",\\n            \\"currTime\\": \\"0800\\",\\n            \\"nextPlan\\": \\"planB\\",\\n            \\"nextTime\\": \\"1700\\",\\n            \\"oncePlan\\": \\"planC\\",\\n            \\"onceTime\\": \\"1500\\",\\n            \\"operatorName\\": \\"userA\\"\\n          },\\n          \\"parameter\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"tag\\": \\"abc\\",\\n          \\"createTime\\": 0,\\n          \\"creatorId\\": \\"672863518\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取Quota计划信息',
            'summary' => '获取Quota计划信息。',
        ],
        'DeleteQuotaPlan' => [
            'path' => '/api/v1/quotas/{nickname}/plans/{planName}',
            'methods' => [
                'delete',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'QuotaNickName',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'quota_A',
                    ],
                ],
                [
                    'name' => 'planName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota计划名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'planA',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '416441016836866',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0b57ff7616612271051086500ea3ce',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b57ff7616612271051086500ea3ce\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '删除Quota计划',
            'summary' => '删除Quota计划。',
        ],
        'CreateQuotaSchedule' => [
            'path' => '/api/v1/quotas/{nickname}/schedule',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'QuotaNickName',
                        'type' => 'string',
                        'required' => true,
                        'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p'."\n"
                            ."\n"
                            .'#中文名称需要经过utf8 urlencode编码转义',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '407137536592384',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-chengdu',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '# 立即生效'."\n"
                            .'['."\n"
                            .'  {'."\n"
                            .'    "type": "once",'."\n"
                            .'    "plan": "planA",'."\n"
                            .'    "operator":"xxx"'."\n"
                            .'  }'."\n"
                            .']'."\n"
                            ."\n"
                            .'# 定时调度'."\n"
                            .'['."\n"
                            .'  {'."\n"
                            .'    "id": "bi",'."\n"
                            .'    "type": "daily",'."\n"
                            .'    "condition": {'."\n"
                            .'      "at": "0800"'."\n"
                            ."\n"
                            .'    },'."\n"
                            .'    "plan": "planA"'."\n"
                            .'  },'."\n"
                            .'  {'."\n"
                            .'    "id": "bi",'."\n"
                            .'    "type": "daily",'."\n"
                            .'    "condition": {'."\n"
                            .'      "at": "0900"'."\n"
                            .'    },'."\n"
                            .'    "plan": "planB"'."\n"
                            .'  },'."\n"
                            .']',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0be3e0b716671885050924814e3623',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0b716671885050924814e3623\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '新增Quota时间计划',
            'summary' => '添加Quota时间计划。',
        ],
        'UpdateQuotaSchedule' => [
            'path' => '/api/v1/quotas/{nickname}/schedule',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p'."\n"
                            ."\n"
                            .'#中文名称需要经过utf8 urlencode编码转义',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '478403690625249',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-chengdu',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => "\n"
                            .'# 立即生效'."\n"
                            .'['."\n"
                            .'  {'."\n"
                            .'    "type": "once",'."\n"
                            .'    "plan": "planA",'."\n"
                            .'    "operator":"userA"'."\n"
                            .'  }'."\n"
                            .']'."\n"
                            ."\n"
                            .'# 定时调度'."\n"
                            .'['."\n"
                            .'  {'."\n"
                            .'    "id": "etl_time",'."\n"
                            .'    "type": "daily",'."\n"
                            .'    "condition": {'."\n"
                            .'      "at": "0800"'."\n"
                            .'    },'."\n"
                            .'    "plan": "planA"'."\n"
                            .'  },'."\n"
                            .'  {'."\n"
                            .'    "id": "bi",'."\n"
                            .'    "type": "daily",'."\n"
                            .'    "condition": {'."\n"
                            .'      "at": "0900"'."\n"
                            .'    },'."\n"
                            .'    "plan": "planB"'."\n"
                            .'  },'."\n"
                            .']',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0a06dfe516691014920015940e1c9d',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dfe516691014920015940e1c9d\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '更新Quota时间计划',
            'summary' => '更新Quota时间计划信息。',
        ],
        'GetQuotaSchedule' => [
            'path' => '/api/v1/quotas/{nickname}/schedule',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'nickname',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Quota名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p'."\n"
                            ."\n"
                            .'#中文名称需要经过utf8 urlencode编码转义',
                    ],
                ],
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '478403690625249',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'displayTimezone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '显示时区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UTC+8',
                        'default' => 'UTC+8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<List<QuotaScheduleDTO>>',
                        'description' => 'PopResult<List<QuotaScheduleDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc059b716696296266308790e0d3e',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'errorMsg' => [
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '异常信息',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'id' => [
                                            'description' => 'quota计划id',
                                            'type' => 'string',
                                            'example' => '63',
                                        ],
                                        'type' => [
                                            'description' => '类型',
                                            'type' => 'string',
                                            'example' => 'once',
                                        ],
                                        'plan' => [
                                            'description' => '计划名称',
                                            'type' => 'string',
                                            'example' => 'planA',
                                        ],
                                        'condition' => [
                                            'description' => '条件值',
                                            'type' => 'object',
                                            'properties' => [
                                                'at' => [
                                                    'description' => '生效时间',
                                                    'type' => 'string',
                                                    'example' => '0900',
                                                ],
                                                'after' => [
                                                    'description' => '生效开始时间',
                                                    'type' => 'string',
                                                    'example' => '2022-04-25T04:23:04Z'."\n",
                                                ],
                                            ],
                                        ],
                                        'operator' => [
                                            'description' => '操作者名称',
                                            'type' => 'string',
                                            'example' => 'userA',
                                        ],
                                        'timezone' => [
                                            'description' => '时区',
                                            'type' => 'string',
                                            'example' => 'UTC+8',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc059b716696296266308790e0d3e\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"success\\",\\n  \\"errorMsg\\": \\"异常信息\\",\\n  \\"data\\": [\\n    {\\n      \\"id\\": \\"63\\",\\n      \\"type\\": \\"once\\",\\n      \\"plan\\": \\"planA\\",\\n      \\"condition\\": {\\n        \\"at\\": \\"0900\\",\\n        \\"after\\": \\"2022-04-25T04:23:04Z\\\\n\\"\\n      },\\n      \\"operator\\": \\"userA\\",\\n      \\"timezone\\": \\"UTC+8\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取Quota时间计划信息',
            'summary' => '获取Quota时间计划信息。',
        ],
        'CreateProject' => [
            'path' => '/api/v1/projects',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "name":"project_name",'."\n"
                            .'    "comment":"",'."\n"
                            .'    "productType":"payasyougo/subscription/dev",'."\n"
                            .'    "defaultQuota":"quota_nick_name",'."\n"
                            .'    "properties":{'."\n"
                            .'        "sqlMeteringMax":"",'."\n"
                            .'        "typeSystem":"",'."\n"
                            .'        "encryption":{'."\n"
                            .'            "enable":true,'."\n"
                            .'            "algorithm":"",'."\n"
                            .'            "key":""'."\n"
                            .'        }'."\n"
                            .'    }'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0b87b7a316654730544735643e9200',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7a316654730544735643e9200\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '创建项目',
            'summary' => '创建MaxCompute项目。',
        ],
        'ListProjects' => [
            'path' => '/api/v1/projects',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '549532154333697',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'quotaNickName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Quota名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'quotaA',
                    ],
                ],
                [
                    'name' => 'quotaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '这是quota 在maxcompute 内部的标识，与quotaNickname有区别。quotaNickname 是用户设置的，quotaName 是系统自动生成的。这个字段仅用于描述数据通道quota。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"hsajkdgbkaubh"',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a',
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                    ],
                ],
                [
                    'name' => 'maxItem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的最大结果数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'saleTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"aaaa-bbbb"',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '这个type 用于描述内部项目和外部项目。"external“ 表示外部项目，用于湖仓一体场景下。"managed" 表示内部项目。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"managed"',
                    ],
                ],
                [
                    'name' => 'listSystemCatalog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否列出SystemCatalog。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '列出',
                            'false' => '不列出',
                        ],
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListResultDTO<ProjectInfo, MarkerPageInfo>>',
                        'description' => 'PopResult<ListResultDTO<ProjectInfo, MarkerPageInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0b16399216671970335563173e2340',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'projects' => [
                                        'description' => '项目描述。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回数据。',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '项目名称。',
                                                    'type' => 'string',
                                                    'example' => 'odps_project',
                                                ],
                                                'owner' => [
                                                    'description' => '项目owner。',
                                                    'type' => 'string',
                                                    'example' => '113981577560****',
                                                ],
                                                'type' => [
                                                    'description' => '项目类型。'."\n"
                                                        .'取值：'."\n"
                                                        .'-managed：内部项目。'."\n"
                                                        .'-external：外部项目。',
                                                    'type' => 'string',
                                                    'example' => 'managed',
                                                ],
                                                'comment' => [
                                                    'description' => '备注',
                                                    'type' => 'string',
                                                    'example' => 'MaxCompute项目'."\n",
                                                ],
                                                'defaultQuota' => [
                                                    'description' => '默认计算quota',
                                                    'type' => 'string',
                                                    'example' => 'quotaA',
                                                ],
                                                'status' => [
                                                    'description' => '项目状态。'."\n"
                                                        .'取值：'."\n"
                                                        .'-AVAILABLE：正常'."\n"
                                                        .'-READONLY：只读'."\n"
                                                        .'-FROZEN：冻结'."\n"
                                                        .'-DELETING：删除中',
                                                    'type' => 'string',
                                                    'example' => 'AVAILABLE',
                                                ],
                                                'costStorage' => [
                                                    'description' => '存储量',
                                                    'type' => 'string',
                                                    'example' => '16489027',
                                                ],
                                                'regionId' => [
                                                    'title' => '区域ID',
                                                    'description' => '区域ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'createdTime' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1704380838000',
                                                ],
                                                'properties' => [
                                                    'description' => '项目属性。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'timezone' => [
                                                            'description' => '时区。',
                                                            'type' => 'string',
                                                            'example' => 'Asia/Shanghai'."\n",
                                                        ],
                                                        'retentionDays' => [
                                                            'description' => '备份数据保留天数。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'allowFullScan' => [
                                                            'description' => '是否允许全表扫描。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                        'typeSystem' => [
                                                            'description' => '数据类型版本。'."\n"
                                                                .'取值：'."\n"
                                                                .'-1：1.0版本'."\n"
                                                                .'-2：2.0版本'."\n"
                                                                .'-hive：hive兼容类型',
                                                            'type' => 'string',
                                                            'example' => '2',
                                                        ],
                                                        'enableDecimal2' => [
                                                            'description' => '是否开启decimal 2.0。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'sqlMeteringMax' => [
                                                            'description' => 'sql消费限制。',
                                                            'type' => 'string',
                                                            'example' => '1500',
                                                        ],
                                                        'tableLifecycle' => [
                                                            'description' => '表生命周期。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'type' => [
                                                                    'description' => '生命周期类型。'."\n"
                                                                        .'取值：'."\n"
                                                                        .'-mandatory：Lifecycle子句为必选设置，用户必须设置表的生命周期。'."\n"
                                                                        .'-optional：创建表时，Lifecycle子句为可选设置，如果不设置表的生命周期，则该表永远有效。'."\n"
                                                                        .'-inherit：创建表时，如果不设置表的生命周期，则该表的生命周期为odps.table.lifecycle.value的值。',
                                                                    'type' => 'string',
                                                                    'example' => 'optional',
                                                                ],
                                                                'value' => [
                                                                    'description' => '生命周期天数。',
                                                                    'type' => 'string',
                                                                    'example' => '37231'."\n",
                                                                ],
                                                            ],
                                                        ],
                                                        'encryption' => [
                                                            'description' => '存储加密信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'enable' => [
                                                                    'description' => '是否启用加密，取值：-true-false。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'algorithm' => [
                                                                    'description' => '加密算法名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'SHA1',
                                                                ],
                                                                'key' => [
                                                                    'description' => '算法密钥名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'dafault',
                                                                ],
                                                            ],
                                                        ],
                                                        'tunnelQuota' => [
                                                            'description' => 'tunnel Quota名称。',
                                                            'type' => 'string',
                                                            'example' => 'quota_tunnel',
                                                        ],
                                                        'enableTunnelQuotaRoute' => [
                                                            'description' => '是否开启tunnelQuota路由。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                ],
                                                'securityProperties' => [
                                                    'description' => '权限属性。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'usingAcl' => [
                                                            'description' => '是否使用acl。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'usingPolicy' => [
                                                            'description' => '是否使用Policy授权。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'objectCreatorHasAccessPermission' => [
                                                            'description' => '是否允许对象创建者操作对象。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'objectCreatorHasGrantPermission' => [
                                                            'description' => '是否允许对象创建者授权对象。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'labelSecurity' => [
                                                            'description' => '是否启动Label访问控制。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                        'enableDownloadPrivilege' => [
                                                            'description' => '是否开启Download权限。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                        'projectProtection' => [
                                                            'description' => '是否开启项目空间数据保护。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'protected' => [
                                                                    'description' => '是否开启项目空间数据保护。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'exceptionPolicy' => [
                                                                    'description' => 'ExceptionPolicy。项目所有者需要提前规划Exception Policy，允许指定用户将指定对象的数据流出至指定项目，所有符合Exception Policy中描述的情形都可以打破数据保护机制。',
                                                                    'type' => 'string',
                                                                    'example' => '{'."\n"
                                                                        .'      "Version": "1",'."\n"
                                                                        .'      "Statement": ['."\n"
                                                                        .'            {'."\n"
                                                                        .'                  "Effect": "Allow",'."\n"
                                                                        .'                  "Principal": "",'."\n"
                                                                        .'                  "Action": ['."\n"
                                                                        .'                        "odps:[, , ...]"'."\n"
                                                                        .'                  ],'."\n"
                                                                        .'                  "Resource": "acs:odps:*:",'."\n"
                                                                        .'                  "Condition": {'."\n"
                                                                        .'                        "StringEquals": {'."\n"
                                                                        .'                              "odps:TaskType": ['."\n"
                                                                        .'                                    ""'."\n"
                                                                        .'                              ]'."\n"
                                                                        .'                        }'."\n"
                                                                        .'                  }'."\n"
                                                                        .'            }'."\n"
                                                                        .'      ]'."\n"
                                                                        .'}',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ipWhiteList' => [
                                                    'description' => 'IP白名单',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ipList' => [
                                                            'description' => 'IP白名单列表',
                                                            'type' => 'string',
                                                            'example' => '10.88.111.3',
                                                        ],
                                                        'vpcIpList' => [
                                                            'description' => 'VPCID白名单列表',
                                                            'type' => 'string',
                                                            'example' => '10.88.111.3',
                                                        ],
                                                    ],
                                                ],
                                                'saleTag' => [
                                                    'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'resourceId' => [
                                                            'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                                            'type' => 'string',
                                                            'example' => '"aaaa-bbbb"',
                                                        ],
                                                        'resourceType' => [
                                                            'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                                            'type' => 'string',
                                                            'example' => '"project"',
                                                        ],
                                                    ],
                                                ],
                                                'Tags' => [
                                                    'description' => '标签。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '标签。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TagValue' => [
                                                                'description' => '标签值。',
                                                                'type' => 'string',
                                                                'example' => 'acceptance test',
                                                            ],
                                                            'TagKey' => [
                                                                'description' => '标签键。',
                                                                'type' => 'string',
                                                                'example' => 'Department',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'threeTierModel' => [
                                                    'description' => '当前project是否支持三层模型',
                                                    'type' => 'boolean',
                                                    'enumValueTitles' => [
                                                        'true' => '支持',
                                                        'false' => '不支持',
                                                    ],
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'marker' => [
                                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                                        'type' => 'string',
                                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                                    ],
                                    'maxItem' => [
                                        'description' => '每页返回的最大结果数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'NextToken' => [
                                        'description' => '分页标识，当前接口仅支持连续翻页。返回值nextToken 非空代表还有剩余数据。把nextToken 作为参数继续查询会获得下一页。',
                                        'type' => 'string',
                                        'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kvikyUl3ChyRxN+qLPvtOb',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b16399216671970335563173e2340\\",\\n  \\"data\\": {\\n    \\"projects\\": [\\n      {\\n        \\"name\\": \\"odps_project\\",\\n        \\"owner\\": \\"113981577560****\\",\\n        \\"type\\": \\"managed\\",\\n        \\"comment\\": \\"MaxCompute项目\\\\n\\",\\n        \\"defaultQuota\\": \\"quotaA\\",\\n        \\"status\\": \\"AVAILABLE\\",\\n        \\"costStorage\\": \\"16489027\\",\\n        \\"regionId\\": \\"cn-beijing\\",\\n        \\"createdTime\\": 1704380838000,\\n        \\"properties\\": {\\n          \\"timezone\\": \\"Asia/Shanghai\\\\n\\",\\n          \\"retentionDays\\": 1,\\n          \\"allowFullScan\\": false,\\n          \\"typeSystem\\": \\"2\\",\\n          \\"enableDecimal2\\": true,\\n          \\"sqlMeteringMax\\": \\"1500\\",\\n          \\"tableLifecycle\\": {\\n            \\"type\\": \\"optional\\",\\n            \\"value\\": \\"37231\\\\n\\"\\n          },\\n          \\"encryption\\": {\\n            \\"enable\\": true,\\n            \\"algorithm\\": \\"SHA1\\",\\n            \\"key\\": \\"dafault\\"\\n          },\\n          \\"tunnelQuota\\": \\"quota_tunnel\\",\\n          \\"enableTunnelQuotaRoute\\": true\\n        },\\n        \\"securityProperties\\": {\\n          \\"usingAcl\\": true,\\n          \\"usingPolicy\\": true,\\n          \\"objectCreatorHasAccessPermission\\": true,\\n          \\"objectCreatorHasGrantPermission\\": true,\\n          \\"labelSecurity\\": false,\\n          \\"enableDownloadPrivilege\\": false,\\n          \\"projectProtection\\": {\\n            \\"protected\\": true,\\n            \\"exceptionPolicy\\": \\"{\\\\n      \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n      \\\\\\"Statement\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n                  \\\\\\"Principal\\\\\\": \\\\\\"\\\\\\",\\\\n                  \\\\\\"Action\\\\\\": [\\\\n                        \\\\\\"odps:[, , ...]\\\\\\"\\\\n                  ],\\\\n                  \\\\\\"Resource\\\\\\": \\\\\\"acs:odps:*:\\\\\\",\\\\n                  \\\\\\"Condition\\\\\\": {\\\\n                        \\\\\\"StringEquals\\\\\\": {\\\\n                              \\\\\\"odps:TaskType\\\\\\": [\\\\n                                    \\\\\\"\\\\\\"\\\\n                              ]\\\\n                        }\\\\n                  }\\\\n            }\\\\n      ]\\\\n}\\"\\n          }\\n        },\\n        \\"ipWhiteList\\": {\\n          \\"ipList\\": \\"10.88.111.3\\",\\n          \\"vpcIpList\\": \\"10.88.111.3\\"\\n        },\\n        \\"saleTag\\": {\\n          \\"resourceId\\": \\"\\\\\\"aaaa-bbbb\\\\\\"\\",\\n          \\"resourceType\\": \\"\\\\\\"project\\\\\\"\\"\\n        },\\n        \\"Tags\\": [\\n          {\\n            \\"TagValue\\": \\"acceptance test\\",\\n            \\"TagKey\\": \\"Department\\"\\n          }\\n        ],\\n        \\"threeTierModel\\": true\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10,\\n    \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6kvikyUl3ChyRxN+qLPvtOb\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取项目列表',
            'summary' => '获取MaxCompute项目列表。',
        ],
        'GetProject' => [
            'path' => '/api/v1/projects/{projectName}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '142482',
                'abilityTreeNodes' => [
                    'FEATUREodpsTZPZOE',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'odps_project',
                    ],
                ],
                [
                    'name' => 'verbose',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否带有附加信息',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ProjectInfo>',
                        'description' => 'PopResult<ProjectInfo>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0b87b7b316643495896551555e855b',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '040002',
                            ],
                            'errorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'error message.',
                            ],
                            'data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'description' => '项目名称',
                                        'type' => 'string',
                                        'example' => 'odps_project',
                                    ],
                                    'owner' => [
                                        'description' => '项目owner',
                                        'type' => 'string',
                                        'example' => '1565950907343451',
                                    ],
                                    'type' => [
                                        'description' => '项目类型。'."\n"
                                            .'取值：'."\n"
                                            .'-**managed**：内部项目。'."\n"
                                            .'-**external**：外部项目。',
                                        'type' => 'string',
                                        'example' => 'managed',
                                    ],
                                    'comment' => [
                                        'description' => '备注',
                                        'type' => 'string',
                                        'example' => 'maxcompute项目',
                                    ],
                                    'defaultQuota' => [
                                        'description' => '默认计算quota',
                                        'type' => 'string',
                                        'example' => 'quota_a',
                                    ],
                                    'status' => [
                                        'description' => '项目状态。'."\n"
                                            .'取值：'."\n"
                                            .'-**AVAILABLE**：正常'."\n"
                                            .'-**READONLY**：只读'."\n"
                                            .'-**FROZEN**：冻结'."\n"
                                            .'-**DELETING**：删除中',
                                        'type' => 'string',
                                        'example' => 'AVAILABLE',
                                    ],
                                    'productType' => [
                                        'description' => '计费模式',
                                        'type' => 'string',
                                        'example' => 'PayAsYouGo',
                                    ],
                                    'threeTierModel' => [
                                        'description' => '当前project是否支持三层模型',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'costStorage' => [
                                        'description' => '存储量',
                                        'type' => 'string',
                                        'example' => '16489027',
                                    ],
                                    'regionId' => [
                                        'title' => '区域ID',
                                        'description' => '区域ID',
                                        'type' => 'string',
                                        'example' => 'cn-beijing',
                                    ],
                                    'createdTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1704380838000'."\n",
                                    ],
                                    'properties' => [
                                        'description' => '项目属性',
                                        'type' => 'object',
                                        'properties' => [
                                            'timezone' => [
                                                'description' => '项目时区',
                                                'type' => 'string',
                                                'example' => 'Asia/Shanghai',
                                            ],
                                            'retentionDays' => [
                                                'description' => '备份数据保留天数',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1',
                                            ],
                                            'allowFullScan' => [
                                                'description' => '是否允许全表扫描。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'typeSystem' => [
                                                'description' => '数据类型版本。'."\n"
                                                    .'取值：'."\n"
                                                    .'-**1**：1.0版本'."\n"
                                                    .'-**2**：2.0版本'."\n"
                                                    .'-**hive**：hive兼容类型',
                                                'type' => 'string',
                                                'example' => '2.0',
                                            ],
                                            'enableDecimal2' => [
                                                'description' => '是否开启decimal 2.0',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'sqlMeteringMax' => [
                                                'description' => 'sql消费限制',
                                                'type' => 'string',
                                                'example' => '1500',
                                            ],
                                            'tableLifecycle' => [
                                                'description' => '表的生命周期。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'type' => [
                                                        'description' => '生命周期类型。'."\n"
                                                            .'取值：'."\n"
                                                            .'-**mandatory**：Lifecycle子句为必选设置，用户必须设置表的生命周期。'."\n"
                                                            .'-**optional**：创建表时，Lifecycle子句为可选设置，如果不设置表的生命周期，则该表永远有效。'."\n"
                                                            .'-**inherit**：创建表时，如果不设置表的生命周期，则该表的生命周期为odps.table.lifecycle.value的值。',
                                                        'type' => 'string',
                                                        'example' => 'optional',
                                                    ],
                                                    'value' => [
                                                        'description' => '生命周期天数。',
                                                        'type' => 'string',
                                                        'example' => '37231',
                                                    ],
                                                ],
                                            ],
                                            'encryption' => [
                                                'description' => '存储加密信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'enable' => [
                                                        'description' => '是否启用加密，取值：-true-false',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'algorithm' => [
                                                        'description' => '加密算法名称',
                                                        'type' => 'string',
                                                        'example' => 'SHA1',
                                                    ],
                                                    'key' => [
                                                        'description' => '算法密钥名称',
                                                        'type' => 'string',
                                                        'example' => 'dafault',
                                                    ],
                                                ],
                                            ],
                                            'tunnelQuota' => [
                                                'description' => 'tunnel Quota名称',
                                                'type' => 'string',
                                                'example' => 'Quota',
                                            ],
                                            'elderTunnelQuota' => [
                                                'description' => '无需关注',
                                                'type' => 'string',
                                                'example' => '无需关注',
                                            ],
                                            'enableTunnelQuotaRoute' => [
                                                'description' => '是否允许tunnel quota路由',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'storageTierInfo' => [
                                                'description' => '分层存储信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'storageTierSize' => [
                                                        'description' => '分层存储',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'standardSize' => [
                                                                'description' => '标准存储',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '27649172',
                                                            ],
                                                            'longTermSize' => [
                                                                'description' => '长期存储',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '21764917',
                                                            ],
                                                            'lowFrequencySize' => [
                                                                'description' => '低频存储',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '767693',
                                                            ],
                                                        ],
                                                    ],
                                                    'projectTotalSize' => [
                                                        'description' => '总存储',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '56066037',
                                                    ],
                                                    'projectBackupSize' => [
                                                        'description' => '备份存储',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '86672917',
                                                    ],
                                                ],
                                            ],
                                            'fdcQuota' => [
                                                'title' => 'fdc quota',
                                                'description' => 'fdc quota',
                                                'type' => 'string',
                                            ],
                                            'enableFdcCacheForce' => [
                                                'title' => '是否强制开启fdc缓存',
                                                'description' => '是否强制开启fdc缓存',
                                                'type' => 'boolean',
                                            ],
                                            'enableTieredStorage' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'superAdmins' => [
                                        'description' => 'superadmin角色成员',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'superadmin角色成员',
                                            'type' => 'string',
                                            'example' => 'ALIYUN$***@aliyun.com',
                                        ],
                                    ],
                                    'securityProperties' => [
                                        'description' => '权限属性',
                                        'type' => 'object',
                                        'properties' => [
                                            'usingAcl' => [
                                                'description' => '是否使用acl权限',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'usingPolicy' => [
                                                'description' => '是否使用Policy授权',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'objectCreatorHasAccessPermission' => [
                                                'description' => '是否允许对象创建者操作对象',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'objectCreatorHasGrantPermission' => [
                                                'description' => '是否允许对象创建者授权对象',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'labelSecurity' => [
                                                'description' => '是否启动Label访问控制',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'enableDownloadPrivilege' => [
                                                'description' => '是否开启Download权限',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'projectProtection' => [
                                                'description' => '是否开启项目空间数据保护',
                                                'type' => 'object',
                                                'properties' => [
                                                    'exceptionPolicy' => [
                                                        'description' => 'ExceptionPolicy。项目所有者需要提前规划Exception Policy，允许指定用户将指定对象的数据流出至指定项目，所有符合Exception Policy中描述的情形都可以打破数据保护机制。',
                                                        'type' => 'string',
                                                        'example' => '    {'."\n"
                                                            .'    "Version": "1",'."\n"
                                                            .'    "Statement":'."\n"
                                                            .'    [{'."\n"
                                                            .'        "Effect":"Allow",'."\n"
                                                            .'        "Principal":"<Principal>",'."\n"
                                                            .'        "Action":["odps:<Action1>[, <Action2>, ...]"],'."\n"
                                                            .'        "Resource":"acs:odps:*:<Resource>",'."\n"
                                                            .'        "Condition":{'."\n"
                                                            .'            "StringEquals": {'."\n"
                                                            .'                "odps:TaskType":["<Tasktype>"]'."\n"
                                                            .'            }'."\n"
                                                            .'        }'."\n"
                                                            .'    }]'."\n"
                                                            .'    }',
                                                    ],
                                                    'protected' => [
                                                        'description' => '是否开启项目空间数据保护',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ipWhiteList' => [
                                        'description' => 'ip白名单',
                                        'type' => 'object',
                                        'properties' => [
                                            'ipList' => [
                                                'description' => 'ip白名单',
                                                'type' => 'string',
                                                'example' => '10.88.111.3',
                                            ],
                                            'vpcIpList' => [
                                                'description' => 'vpcip白名单列表',
                                                'type' => 'string',
                                                'example' => '10.88.111.3',
                                            ],
                                        ],
                                    ],
                                    'saleTag' => [
                                        'description' => '标签',
                                        'type' => 'object',
                                        'properties' => [
                                            'resourceId' => [
                                                'description' => '资源ID',
                                                'type' => 'string',
                                                'example' => 'project_name',
                                            ],
                                            'resourceType' => [
                                                'description' => '资源类型',
                                                'type' => 'string',
                                                'example' => 'project',
                                            ],
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7b316643495896551555e855b\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"040002\\",\\n  \\"errorMsg\\": \\"error message.\\",\\n  \\"data\\": {\\n    \\"name\\": \\"odps_project\\",\\n    \\"owner\\": \\"1565950907343451\\",\\n    \\"type\\": \\"managed\\",\\n    \\"comment\\": \\"maxcompute项目\\",\\n    \\"defaultQuota\\": \\"quota_a\\",\\n    \\"status\\": \\"AVAILABLE\\",\\n    \\"productType\\": \\"PayAsYouGo\\",\\n    \\"threeTierModel\\": true,\\n    \\"costStorage\\": \\"16489027\\",\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"createdTime\\": 1704380838000,\\n    \\"properties\\": {\\n      \\"timezone\\": \\"Asia/Shanghai\\",\\n      \\"retentionDays\\": 1,\\n      \\"allowFullScan\\": false,\\n      \\"typeSystem\\": \\"2.0\\",\\n      \\"enableDecimal2\\": true,\\n      \\"sqlMeteringMax\\": \\"1500\\",\\n      \\"tableLifecycle\\": {\\n        \\"type\\": \\"optional\\",\\n        \\"value\\": \\"37231\\"\\n      },\\n      \\"encryption\\": {\\n        \\"enable\\": true,\\n        \\"algorithm\\": \\"SHA1\\",\\n        \\"key\\": \\"dafault\\"\\n      },\\n      \\"tunnelQuota\\": \\"Quota\\",\\n      \\"elderTunnelQuota\\": \\"无需关注\\",\\n      \\"enableTunnelQuotaRoute\\": true,\\n      \\"storageTierInfo\\": {\\n        \\"storageTierSize\\": {\\n          \\"standardSize\\": 27649172,\\n          \\"longTermSize\\": 21764917,\\n          \\"lowFrequencySize\\": 767693\\n        },\\n        \\"projectTotalSize\\": 56066037,\\n        \\"projectBackupSize\\": 86672917\\n      },\\n      \\"fdcQuota\\": \\"\\",\\n      \\"enableFdcCacheForce\\": true,\\n      \\"enableTieredStorage\\": true\\n    },\\n    \\"superAdmins\\": [\\n      \\"ALIYUN$***@aliyun.com\\"\\n    ],\\n    \\"securityProperties\\": {\\n      \\"usingAcl\\": true,\\n      \\"usingPolicy\\": true,\\n      \\"objectCreatorHasAccessPermission\\": true,\\n      \\"objectCreatorHasGrantPermission\\": true,\\n      \\"labelSecurity\\": false,\\n      \\"enableDownloadPrivilege\\": false,\\n      \\"projectProtection\\": {\\n        \\"exceptionPolicy\\": \\"    {\\\\n    \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n    \\\\\\"Statement\\\\\\":\\\\n    [{\\\\n        \\\\\\"Effect\\\\\\":\\\\\\"Allow\\\\\\",\\\\n        \\\\\\"Principal\\\\\\":\\\\\\"<Principal>\\\\\\",\\\\n        \\\\\\"Action\\\\\\":[\\\\\\"odps:<Action1>[, <Action2>, ...]\\\\\\"],\\\\n        \\\\\\"Resource\\\\\\":\\\\\\"acs:odps:*:<Resource>\\\\\\",\\\\n        \\\\\\"Condition\\\\\\":{\\\\n            \\\\\\"StringEquals\\\\\\": {\\\\n                \\\\\\"odps:TaskType\\\\\\":[\\\\\\"<Tasktype>\\\\\\"]\\\\n            }\\\\n        }\\\\n    }]\\\\n    }\\",\\n        \\"protected\\": true\\n      }\\n    },\\n    \\"ipWhiteList\\": {\\n      \\"ipList\\": \\"10.88.111.3\\",\\n      \\"vpcIpList\\": \\"10.88.111.3\\"\\n    },\\n    \\"saleTag\\": {\\n      \\"resourceId\\": \\"project_name\\",\\n      \\"resourceType\\": \\"project\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取项目信息',
            'summary' => '查询MaxCompute项目的基本信息。',
        ],
        'UpdateProjectIpWhiteList' => [
            'path' => '/api/v1/projects/{projectName}/ipWhiteList',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'odps_project',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'json'."\n"
                            ."\n"
                            .'{"ipWhiteList":{"ipList": "", //string 以逗号分隔多个'."\n"
                            .'                "vpcIpList": "", //}'."\n"
                            .'               }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0bc12e4316675560945192024e1044',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc12e4316675560945192024e1044\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '修改项目IP白名单',
            'summary' => '修改MaxCompute项目IP白名单。',
        ],
        'GetTrustedProjects' => [
            'path' => '/api/v1/projects/{projectName}/trustedProjects',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'odps_project',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<List<String>>',
                        'description' => 'PopResult<List<String>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc0590416675329272834336e4387',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'string',
                                    'example' => 'json Array'."\n"
                                        .'['."\n"
                                        .'"project_A",'."\n"
                                        .'"project_B"'."\n"
                                        .']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc0590416675329272834336e4387\\",\\n  \\"data\\": [\\n    \\"json Array\\\\n[\\\\n\\\\\\"project_A\\\\\\",\\\\n\\\\\\"project_B\\\\\\"\\\\n]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取受信任项目列表',
            'summary' => '获取当前项目的TrustedProject（受信任项目）列表。',
        ],
        'ListProjectUsers' => [
            'path' => '/api/v1/projects/{projectName}/users',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListUsersDTO>',
                        'description' => 'PopResult<ListUsersDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0b87b7b316643495896551555e855b',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'users' => [
                                        'description' => '用户列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '用户名称',
                                                    'type' => 'string',
                                                    'example' => 'userA',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7b316643495896551555e855b\\",\\n  \\"data\\": {\\n    \\"users\\": [\\n      {\\n        \\"name\\": \\"userA\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取项目用户列表',
            'summary' => '获取项目用户列表。',
        ],
        'CreateRole' => [
            'path' => '/api/v1/projects/{projectName}/roles',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数。'."\n"
                            .'取值可参考[MaxCompute权限](~~27935~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"name": "role_name","type": "resource/adminn","policy": "", //policy 的内容，如果是acl，此项不需要。"acl": { // 如果是policy，则此字段不需要"table": [{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"resource":[{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"function":[{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"package":[{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"project":[{"name": "", "actions":[]}], //管控台页面固定只有当前项目"instance":[{"name": "", "actions":[]}] //管控台页面只支持name * }}// name 支持写 *',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0b87b7e716665825896565060e87a4',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7e716665825896565060e87a4\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '创建项目级角色',
            'summary' => '创建MaxCompute项目级角色。',
        ],
        'ListRoles' => [
            'path' => '/api/v1/projects/{projectName}/roles',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListRolesDTO>',
                        'description' => 'PopResult<ListRolesDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0a06dfe716686526652451361e80ae',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'roles' => [
                                        'description' => '角色列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '角色列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '角色名称。',
                                                    'type' => 'string',
                                                    'example' => 'roleA',
                                                ],
                                                'type' => [
                                                    'description' => '角色类型',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'resource' => 'resource',
                                                        'admin' => 'admin',
                                                    ],
                                                    'example' => 'admin',
                                                ],
                                                'policy' => [
                                                    'description' => '角色的Policy授权信息',
                                                    'type' => 'string',
                                                    'example' => '{'."\n"
                                                        .'      "Statement": ['."\n"
                                                        .'            {'."\n"
                                                        .'                  "Action": ['."\n"
                                                        .'                        "odps:*"'."\n"
                                                        .'                  ],'."\n"
                                                        .'                  "Effect": "Allow",'."\n"
                                                        .'                  "Resource": ['."\n"
                                                        .'                        "acs:odps:*:projects/{projectname}/authorization/packages"'."\n"
                                                        .'                  ]'."\n"
                                                        .'            }'."\n"
                                                        .'      ],'."\n"
                                                        .'      "Version": "1"'."\n"
                                                        .'}',
                                                ],
                                                'acl' => [
                                                    'description' => '角色的ACL授权信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'table' => [
                                                            'description' => '表',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '表',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'name' => [
                                                                        'description' => '表名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'tableA',
                                                                    ],
                                                                    'actions' => [
                                                                        'description' => '表操作',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '表操作',
                                                                            'type' => 'string',
                                                                            'example' => 'describe',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'resource' => [
                                                            'description' => '资源',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '资源',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'name' => [
                                                                        'description' => '资源名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'resourceA',
                                                                    ],
                                                                    'actions' => [
                                                                        'description' => '资源操作',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '资源操作',
                                                                            'type' => 'string',
                                                                            'example' => 'read',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'function' => [
                                                            'description' => '函数',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '函数',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'name' => [
                                                                        'description' => '函数名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'functionA',
                                                                    ],
                                                                    'actions' => [
                                                                        'description' => '函数操作',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '函数操作',
                                                                            'type' => 'string',
                                                                            'example' => 'read',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'package' => [
                                                            'description' => 'Package',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'package',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'name' => [
                                                                        'description' => 'package名称',
                                                                        'type' => 'string',
                                                                        'example' => 'packageA',
                                                                    ],
                                                                    'actions' => [
                                                                        'description' => 'package操作',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => 'package操作',
                                                                            'type' => 'string',
                                                                            'example' => 'read',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'project' => [
                                                            'description' => '项目',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '项目',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'name' => [
                                                                        'description' => 'maxcompute项目名称',
                                                                        'type' => 'string',
                                                                        'example' => 'projectA',
                                                                    ],
                                                                    'actions' => [
                                                                        'description' => '项目操作',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '项目操作',
                                                                            'type' => 'string',
                                                                            'example' => 'list',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'instance' => [
                                                            'description' => '实例',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '实例',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'name' => [
                                                                        'description' => '实例名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'instanceA',
                                                                    ],
                                                                    'actions' => [
                                                                        'description' => '实例操作',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '实例操作',
                                                                            'type' => 'string',
                                                                            'example' => 'read',
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
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dfe716686526652451361e80ae\\",\\n  \\"data\\": {\\n    \\"roles\\": [\\n      {\\n        \\"name\\": \\"roleA\\",\\n        \\"type\\": \\"admin\\",\\n        \\"policy\\": \\"{\\\\n      \\\\\\"Statement\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Action\\\\\\": [\\\\n                        \\\\\\"odps:*\\\\\\"\\\\n                  ],\\\\n                  \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n                  \\\\\\"Resource\\\\\\": [\\\\n                        \\\\\\"acs:odps:*:projects/{projectname}/authorization/packages\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ],\\\\n      \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"\\\\n}\\",\\n        \\"acl\\": {\\n          \\"table\\": [\\n            {\\n              \\"name\\": \\"tableA\\",\\n              \\"actions\\": [\\n                \\"describe\\"\\n              ]\\n            }\\n          ],\\n          \\"resource\\": [\\n            {\\n              \\"name\\": \\"resourceA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ],\\n          \\"function\\": [\\n            {\\n              \\"name\\": \\"functionA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ],\\n          \\"package\\": [\\n            {\\n              \\"name\\": \\"packageA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ],\\n          \\"project\\": [\\n            {\\n              \\"name\\": \\"projectA\\",\\n              \\"actions\\": [\\n                \\"list\\"\\n              ]\\n            }\\n          ],\\n          \\"instance\\": [\\n            {\\n              \\"name\\": \\"instanceA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取项目级角色列表',
            'summary' => '获取MaxCompute项目级角色列表。',
        ],
        'GetRoleAcl' => [
            'path' => '/api/v1/projects/{projectName}/roles/{roleName}/roleAcl',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'roleName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '角色名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'roleA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<AclAction>',
                        'description' => 'PopResult<AclAction>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0a06dc0916696898838762018e9564',
                            ],
                            'httpCode' => [
                                'description' => '返回的HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '040002',
                            ],
                            'errorMsg' => [
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '异常信息',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'table' => [
                                        'description' => '表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '表',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '表名称',
                                                    'type' => 'string',
                                                    'example' => 'tableA',
                                                ],
                                                'schemaName' => [
                                                    'description' => 'Schema名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'actions' => [
                                                    'description' => '表操作',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '表操作',
                                                        'type' => 'string',
                                                        'example' => 'describe',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'resource' => [
                                        'description' => '资源',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '资源名称。',
                                                    'type' => 'string',
                                                    'example' => 'resourceA',
                                                ],
                                                'schemaName' => [
                                                    'description' => 'Schema名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'actions' => [
                                                    'description' => '资源操作',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '资源操作',
                                                        'type' => 'string',
                                                        'example' => 'read',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'function' => [
                                        'description' => '函数',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '函数',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '函数名称。',
                                                    'type' => 'string',
                                                    'example' => 'functionA',
                                                ],
                                                'schemaName' => [
                                                    'description' => 'Schema名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'actions' => [
                                                    'description' => '函数操作',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '函数操作',
                                                        'type' => 'string',
                                                        'example' => 'read',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'project' => [
                                        'description' => '项目',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '项目',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => 'maxcompute项目名称',
                                                    'type' => 'string',
                                                    'example' => 'projectA',
                                                ],
                                                'schemaName' => [
                                                    'description' => 'Schema名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'actions' => [
                                                    'description' => '项目操作',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '项目操作',
                                                        'type' => 'string',
                                                        'example' => 'list',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'instance' => [
                                        'description' => '实例',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '实例名称',
                                                    'type' => 'string',
                                                    'example' => 'instanceA',
                                                ],
                                                'schemaName' => [
                                                    'description' => 'Schema名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'actions' => [
                                                    'description' => '实例操作',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '实例操作',
                                                        'type' => 'string',
                                                        'example' => 'read',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'package' => [
                                        'description' => 'Package',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'Package',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => 'package名称',
                                                    'type' => 'string',
                                                    'example' => 'packageA',
                                                ],
                                                'schemaName' => [
                                                    'description' => 'Schema名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'actions' => [
                                                    'description' => 'package操作',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'package操作',
                                                        'type' => 'string',
                                                        'example' => 'read',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dc0916696898838762018e9564\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"040002\\",\\n  \\"errorMsg\\": \\"异常信息\\",\\n  \\"data\\": {\\n    \\"table\\": [\\n      {\\n        \\"name\\": \\"tableA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"describe\\"\\n        ]\\n      }\\n    ],\\n    \\"resource\\": [\\n      {\\n        \\"name\\": \\"resourceA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ],\\n    \\"function\\": [\\n      {\\n        \\"name\\": \\"functionA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ],\\n    \\"project\\": [\\n      {\\n        \\"name\\": \\"projectA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"list\\"\\n        ]\\n      }\\n    ],\\n    \\"instance\\": [\\n      {\\n        \\"name\\": \\"instanceA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ],\\n    \\"package\\": [\\n      {\\n        \\"name\\": \\"packageA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取项目级角色ACL授权信息',
            'summary' => '获取项目级角色ACL授权信息。',
        ],
        'GetRoleAclOnObject' => [
            'path' => '/api/v1/projects/{projectName}/roles/{roleName}/acl',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'roleName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '角色名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'roleA',
                    ],
                ],
                [
                    'name' => 'objectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对象类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'resource' => 'resource',
                            'function' => 'function',
                            ' package' => ' package',
                            'table' => 'table',
                        ],
                        'example' => 'table',
                    ],
                ],
                [
                    'name' => 'objectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tableA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ActionItem>',
                        'description' => 'PopResult<ActionItem>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0bc1366d16686529650188023ef87f',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'description' => '对象名称',
                                        'type' => 'string',
                                        'example' => 'tableA',
                                    ],
                                    'actions' => [
                                        'description' => '对象操作',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '对象操作',
                                            'type' => 'string',
                                            'example' => 'describe',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc1366d16686529650188023ef87f\\",\\n  \\"data\\": {\\n    \\"name\\": \\"tableA\\",\\n    \\"actions\\": [\\n      \\"describe\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取角色对某对象的ACL授权',
            'summary' => '获取项目级角色对某对象的ACL授权信息。',
        ],
        'GetRolePolicy' => [
            'path' => '/api/v1/projects/{projectName}/roles/{roleName}/policy',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'roleName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '角色名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'roleA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc1eeed16675342848904412e08dd',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'      "Statement": ['."\n"
                                    .'            {'."\n"
                                    .'                  "Action": ['."\n"
                                    .'                        "odps:*"'."\n"
                                    .'                  ],'."\n"
                                    .'                  "Effect": "Allow",'."\n"
                                    .'                  "Resource": ['."\n"
                                    .'                        "acs:odps:*:projects/{projectname}/authorization/packages"'."\n"
                                    .'                  ]'."\n"
                                    .'            }'."\n"
                                    .'      ],'."\n"
                                    .'      "Version": "1"'."\n"
                                    .'}'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc1eeed16675342848904412e08dd\\",\\n  \\"data\\": \\"{\\\\n      \\\\\\"Statement\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Action\\\\\\": [\\\\n                        \\\\\\"odps:*\\\\\\"\\\\n                  ],\\\\n                  \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n                  \\\\\\"Resource\\\\\\": [\\\\n                        \\\\\\"acs:odps:*:projects/{projectname}/authorization/packages\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ],\\\\n      \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"\\\\n}\\\\n\\"\\n}","type":"json"}]',
            'title' => '获取角色Policy授权内容',
            'summary' => '获取项目级角色Policy授权内容。',
        ],
        'ListUsersByRole' => [
            'path' => '/api/v1/projects/{projectName}/roles/{roleName}/users',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'roleName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '角色名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'roleA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListUsersDTO>',
                        'description' => 'PopResult<ListUsersDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0be3e0bb16654558425251398e27a9',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'users' => [
                                        'description' => '用户列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '用户名称',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN${account_name}',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0bb16654558425251398e27a9\\",\\n  \\"data\\": {\\n    \\"users\\": [\\n      {\\n        \\"name\\": \\"ALIYUN${account_name}\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取绑定某项目级角色的用户列表',
            'summary' => '获取绑定某项目级角色的用户列表。',
        ],
        'ListPackages' => [
            'path' => '/api/v1/projects/{projectName}/packages',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListPackagesDTO>',
                        'description' => 'PopResult<ListPackagesDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc3b4aa16677927210252786e4cb6',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'createdPackages' => [
                                        'description' => '创建的package列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '创建的package列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => 'package名称。',
                                                    'type' => 'string',
                                                    'example' => 'packageA',
                                                ],
                                                'createTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2022-08-02T02:30:34Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'installedPackages' => [
                                        'description' => '已安装的package列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已安装的package列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => 'package名称。',
                                                    'type' => 'string',
                                                    'example' => 'packageB',
                                                ],
                                                'sourceProject' => [
                                                    'description' => 'package所属项目。如果package 是install 的，此参数必填。',
                                                    'type' => 'string',
                                                    'example' => 'projectB',
                                                ],
                                                'status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'OK',
                                                ],
                                                'installTime' => [
                                                    'description' => '安装时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2022-09-02T02:30:34Z'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4aa16677927210252786e4cb6\\",\\n  \\"data\\": {\\n    \\"createdPackages\\": [\\n      {\\n        \\"name\\": \\"packageA\\",\\n        \\"createTime\\": 0\\n      }\\n    ],\\n    \\"installedPackages\\": [\\n      {\\n        \\"name\\": \\"packageB\\",\\n        \\"sourceProject\\": \\"projectB\\",\\n        \\"status\\": \\"OK\\",\\n        \\"installTime\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取Package列表',
            'summary' => '获取MaxCompute项目下的Package列表。',
        ],
        'UpdatePackage' => [
            'path' => '/api/v1/projects/{projectName}/packages/{packageName}',
            'methods' => [
                'put',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'packageName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'package名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'packageA',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "add": {'."\n"
                            .'        "allowedProjectList": ['."\n"
                            .'            {'."\n"
                            .'                "label": "2",'."\n"
                            .'                "project": "project_name"'."\n"
                            .'            }'."\n"
                            .'        ],'."\n"
                            .'        "resourceList": {'."\n"
                            .'            "table": ['."\n"
                            .'                {'."\n"
                            .'                    "name": "table_name",'."\n"
                            .'                    "actions": ['."\n"
                            .'                        "Describe",'."\n"
                            .'                        "Select"'."\n"
                            .'                    ]'."\n"
                            .'                },'."\n"
                            .'                {'."\n"
                            .'                    "name": "table_name",'."\n"
                            .'                    "actions": ['."\n"
                            .'                        "Describe",'."\n"
                            .'                        "Select"'."\n"
                            .'                    ]'."\n"
                            .'                }'."\n"
                            .'            ],'."\n"
                            .'            "resource": ['."\n"
                            .'                {'."\n"
                            .'                    "name": "",'."\n"
                            .'                    "actions": []'."\n"
                            .'                },'."\n"
                            .'                {'."\n"
                            .'                    "name": "",'."\n"
                            .'                    "actions": []'."\n"
                            .'                }'."\n"
                            .'            ],'."\n"
                            .'            "function": ['."\n"
                            .'                {'."\n"
                            .'                    "name": "",'."\n"
                            .'                    "actions": []'."\n"
                            .'                },'."\n"
                            .'                {'."\n"
                            .'                    "name": "",'."\n"
                            .'                    "actions": []'."\n"
                            .'                }'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    },'."\n"
                            .'    "remove": {'."\n"
                            .'        "allowedProjectList": ['."\n"
                            .'            {'."\n"
                            .'                "project": "project_name"'."\n"
                            .'            },'."\n"
                            .'            {'."\n"
                            .'                "project": "project_2"'."\n"
                            .'            }'."\n"
                            .'        ],'."\n"
                            .'        "resourceList": {'."\n"
                            .'            "table": ['."\n"
                            .'                {'."\n"
                            .'                    "name": "table_name"'."\n"
                            .'                },'."\n"
                            .'                {'."\n"
                            .'                    "name": "table_name"'."\n"
                            .'                }'."\n"
                            .'            ],'."\n"
                            .'            "resource": ['."\n"
                            .'                {'."\n"
                            .'                    "name": ""'."\n"
                            .'                },'."\n"
                            .'                {'."\n"
                            .'                    "name": ""'."\n"
                            .'                }'."\n"
                            .'            ],'."\n"
                            .'            "function": ['."\n"
                            .'                {'."\n"
                            .'                    "name": ""'."\n"
                            .'                },'."\n"
                            .'                {'."\n"
                            .'                    "name": ""'."\n"
                            .'                }'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    }'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc1ec4016697018733156991e0888',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc1ec4016697018733156991e0888\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '更新Package',
            'summary' => '更新Package内的对象及允许安装的项目列表。',
        ],
        'CreatePackage' => [
            'path' => '/api/v1/projects/{projectName}/packages',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA'."\n",
                    ],
                ],
                [
                    'name' => 'isInstall',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否安装',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'"name": "test_packege", '."\n"
                            .'    "resourceList": { '."\n"
                            .'        "table": ['."\n"
                            .'            {'."\n"
                            .'                "name": "table_name",'."\n"
                            .'                "actions": ['."\n"
                            .'                    "Describe",'."\n"
                            .'                    "Select"'."\n"
                            .'                ]'."\n"
                            .'            },'."\n"
                            .'            {'."\n"
                            .'                "name": "table_name",'."\n"
                            .'                "actions": ['."\n"
                            .'                    "Describe",'."\n"
                            .'                    "Select"'."\n"
                            .'                ]'."\n"
                            .'            }'."\n"
                            .'        ],'."\n"
                            .'        "resource": ['."\n"
                            .'            {'."\n"
                            .'                "name": "",'."\n"
                            .'                "actions": []'."\n"
                            .'            },'."\n"
                            .'            {'."\n"
                            .'                "name": "",'."\n"
                            .'                "actions": []'."\n"
                            .'            }'."\n"
                            .'        ],'."\n"
                            .'        "function": ['."\n"
                            .'            {'."\n"
                            .'                "name": "",'."\n"
                            .'                "actions": []'."\n"
                            .'            },'."\n"
                            .'            {'."\n"
                            .'                "name": "",'."\n"
                            .'                "actions": []'."\n"
                            .'            }'."\n"
                            .'        ]'."\n"
                            .'    }'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc3b4ab16684833172127321e2c25',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4ab16684833172127321e2c25\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '创建package',
            'summary' => '通过调用该接口创建package。',
        ],
        'GetPackage' => [
            'path' => '/api/v1/projects/{projectName}/packages/{packageName}',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'packageName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'package名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_package',
                    ],
                ],
                [
                    'name' => 'sourceProject',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'package所属项目。如果package 是install 的，此参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<PackageInfo>',
                        'description' => 'PopResult<PackageInfo>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0b57ff8316614119858417939e3e54',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '040002',
                            ],
                            'errorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '异常信息',
                            ],
                            'data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'allowedProjectList' => [
                                        'description' => '已经安装的项目列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已经安装的项目列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'label' => [
                                                    'description' => '指定安全许可标签级别',
                                                    'type' => 'string',
                                                    'example' => '2',
                                                ],
                                                'project' => [
                                                    'description' => 'maxcompute项目名称',
                                                    'type' => 'string',
                                                    'example' => 'proejctB',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'resourceList' => [
                                        'description' => 'package内包含的资源详情',
                                        'type' => 'object',
                                        'properties' => [
                                            'table' => [
                                                'description' => '表列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '表列表',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'description' => '表名称',
                                                            'type' => 'string',
                                                            'example' => 'dim_odps'."\n",
                                                        ],
                                                        'schemaName' => [
                                                            'description' => 'schema名称。',
                                                            'type' => 'string',
                                                            'example' => 'default',
                                                        ],
                                                        'actions' => [
                                                            'description' => '表操作',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '表操作',
                                                                'type' => 'string',
                                                                'example' => 'describe',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'resource' => [
                                                'description' => '资源列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '资源列表',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'description' => '资源名称',
                                                            'type' => 'string',
                                                            'example' => 'res_1',
                                                        ],
                                                        'schemaName' => [
                                                            'description' => 'schema名称。',
                                                            'type' => 'string',
                                                            'example' => 'default',
                                                        ],
                                                        'actions' => [
                                                            'description' => '资源的操作',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '资源的操作',
                                                                'type' => 'string',
                                                                'example' => 'read',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'function' => [
                                                'description' => '函数列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '函数列表',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'description' => '函数名称',
                                                            'type' => 'string',
                                                            'example' => 'function_1',
                                                        ],
                                                        'schemaName' => [
                                                            'description' => 'schema名称。',
                                                            'type' => 'string',
                                                            'example' => 'default',
                                                        ],
                                                        'actions' => [
                                                            'description' => '函数操作',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '函数操作',
                                                                'type' => 'string',
                                                                'example' => 'read',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b57ff8316614119858417939e3e54\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"040002\\",\\n  \\"errorMsg\\": \\"异常信息\\",\\n  \\"data\\": {\\n    \\"allowedProjectList\\": [\\n      {\\n        \\"label\\": \\"2\\",\\n        \\"project\\": \\"proejctB\\"\\n      }\\n    ],\\n    \\"resourceList\\": {\\n      \\"table\\": [\\n        {\\n          \\"name\\": \\"dim_odps\\\\n\\",\\n          \\"schemaName\\": \\"default\\",\\n          \\"actions\\": [\\n            \\"describe\\"\\n          ]\\n        }\\n      ],\\n      \\"resource\\": [\\n        {\\n          \\"name\\": \\"res_1\\",\\n          \\"schemaName\\": \\"default\\",\\n          \\"actions\\": [\\n            \\"read\\"\\n          ]\\n        }\\n      ],\\n      \\"function\\": [\\n        {\\n          \\"name\\": \\"function_1\\",\\n          \\"schemaName\\": \\"default\\",\\n          \\"actions\\": [\\n            \\"read\\"\\n          ]\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取Package信息',
            'summary' => '获取package信息。',
        ],
        'ListTables' => [
            'path' => '/api/v1/projects/{projectName}/tables',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a',
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y29tbWlzc2lvbl9leHRlcm5hbF91cmdlXzFfd3Ih',
                    ],
                ],
                [
                    'name' => 'maxItem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的最大结果数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'internal' => 'internal',
                            'external' => 'external',
                        ],
                        'example' => 'internal',
                    ],
                ],
                [
                    'name' => 'schemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Schema名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListResultDTO<TableInfo, MarkerPageInfo>>',
                        'description' => 'PopResult<ListResultDTO<TableInfo, MarkerPageInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0a06dd4516687375802853481ec9fd',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'tables' => [
                                        'description' => '表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '表信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '表名称。',
                                                    'type' => 'string',
                                                    'example' => 'sale_detail',
                                                ],
                                                'owner' => [
                                                    'description' => '表所有者。',
                                                    'type' => 'string',
                                                    'example' => '188785396123****',
                                                ],
                                                'type' => [
                                                    'description' => '表类型。',
                                                    'type' => 'string',
                                                    'example' => 'internal'."\n",
                                                ],
                                                'schema' => [
                                                    'description' => '归属schema。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'creationTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2022-01-17T07:07:47Z',
                                                ],
                                                'viewText' => [
                                                    'description' => '生成视图的语句。',
                                                    'type' => 'string',
                                                    'example' => 'select shop_name, sum(total_price) '."\n"
                                                        .'from sale_detail group by shop_name',
                                                ],
                                                'displayName' => [
                                                    'description' => '展示名称。',
                                                    'type' => 'string',
                                                    'example' => 'sale_detail',
                                                ],
                                                'projectName' => [
                                                    'description' => '项目名称。',
                                                    'type' => 'string',
                                                    'example' => 'projectA'."\n",
                                                ],
                                                'lastDDLTime' => [
                                                    'description' => 'DDL最近更新时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2023-11-21T02:05:56Z'."\n",
                                                ],
                                                'lastModifiedTime' => [
                                                    'description' => '数据最近更新时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2023-11-21T02:05:56Z',
                                                ],
                                                'lastAccessTime' => [
                                                    'description' => '数据最近访问时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2023-12-21T02:05:56Z',
                                                ],
                                                'lifecycle' => [
                                                    'description' => '生命周期。',
                                                    'type' => 'string',
                                                    'example' => '-1',
                                                ],
                                                'isExternalTable' => [
                                                    'description' => '是否外部表。',
                                                    'type' => 'boolean',
                                                    'example' => 'False',
                                                ],
                                                'size' => [
                                                    'description' => '大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5372',
                                                ],
                                                'tableComment' => [
                                                    'description' => '表说明。',
                                                    'type' => 'string',
                                                    'example' => 'sale_detail',
                                                ],
                                                'tableLabel' => [
                                                    'description' => '表的label级别。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'createTableDDL' => [
                                                    'description' => '创建表的DDL语句。',
                                                    'type' => 'string',
                                                    'example' => 'create table if not exists sale_detail('."\n"
                                                        .' shop_name     STRING,'."\n"
                                                        .' customer_id   STRING,'."\n"
                                                        .' total_price   DOUBLE)'."\n"
                                                        .'partitioned by (sale_date STRING, region STRING); ',
                                                ],
                                                'nativeColumns' => [
                                                    'description' => '列信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '列信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'description' => '列名。',
                                                                'type' => 'string',
                                                                'example' => 'shop_name',
                                                            ],
                                                            'type' => [
                                                                'description' => '类型。',
                                                                'type' => 'string',
                                                                'example' => 'STRING',
                                                            ],
                                                            'label' => [
                                                                'description' => '列Label等级。',
                                                                'type' => 'string',
                                                                'example' => '0',
                                                            ],
                                                            'comment' => [
                                                                'description' => '备注。',
                                                                'type' => 'string',
                                                                'example' => '商店名称',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'partitionColumns' => [
                                                    'description' => '分区列信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '分区列信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'description' => '列名。',
                                                                'type' => 'string',
                                                                'example' => 'sale_date',
                                                            ],
                                                            'type' => [
                                                                'description' => '类型。',
                                                                'type' => 'string',
                                                                'example' => 'STRING',
                                                            ],
                                                            'label' => [
                                                                'description' => '列Label等级。',
                                                                'type' => 'string',
                                                                'example' => '0',
                                                            ],
                                                            'comment' => [
                                                                'description' => '备注。',
                                                                'type' => 'string',
                                                                'example' => '销售日期',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'materializedView' => [
                                                    'description' => '是否物化视图。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'rewriteEnabled' => [
                                                    'description' => '是否允许通过物化视图执行查询改写操作。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'autoRefreshEnabled' => [
                                                    'description' => '是否开启自动刷新物化视图。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'isOutdated' => [
                                                    'description' => '是否因为源表数据有变化，导致物化视图数据无效。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'physicalSize' => [
                                                    'description' => '物理大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2763',
                                                ],
                                                'fileNum' => [
                                                    'description' => '文件数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                                'storageHandler' => [
                                                    'description' => '外部表解析器。',
                                                    'type' => 'string',
                                                    'example' => 'com.aliyun.odps.CsvStorageHandler',
                                                ],
                                                'location' => [
                                                    'description' => '外部表地址',
                                                    'type' => 'string',
                                                    'example' => 'oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/',
                                                ],
                                                'odpsPropertiesRolearn' => [
                                                    'description' => 'RAM中AliyunODPSDefaultRole的ARN信息。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::xxxxx:role/aliyunodpsdefaultrole',
                                                ],
                                                'tablestoreColumnsMapping' => [
                                                    'description' => '描述MaxCompute将访问的Tablestore表的列，包括主键和属性列。',
                                                    'type' => 'string',
                                                    'example' => ':o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice',
                                                ],
                                                'tablesotreTableName' => [
                                                    'description' => '需要访问的Tablestore表名称。',
                                                    'type' => 'string',
                                                    'example' => 'ots_tpch_orders',
                                                ],
                                                'odpsSqlTextOptionFlushHeader' => [
                                                    'description' => '是否忽略表头。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'odpsTextOptionHeaderLinesCount' => [
                                                    'description' => '忽略表头前N行。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'marker' => [
                                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                                        'type' => 'string',
                                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                                    ],
                                    'maxItem' => [
                                        'description' => '每页返回的最大结果数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dd4516687375802853481ec9fd\\",\\n  \\"data\\": {\\n    \\"tables\\": [\\n      {\\n        \\"name\\": \\"sale_detail\\",\\n        \\"owner\\": \\"188785396123****\\",\\n        \\"type\\": \\"internal\\\\n\\",\\n        \\"schema\\": \\"default\\",\\n        \\"creationTime\\": 0,\\n        \\"viewText\\": \\"select shop_name, sum(total_price) \\\\nfrom sale_detail group by shop_name\\",\\n        \\"displayName\\": \\"sale_detail\\",\\n        \\"projectName\\": \\"projectA\\\\n\\",\\n        \\"lastDDLTime\\": 0,\\n        \\"lastModifiedTime\\": 0,\\n        \\"lastAccessTime\\": 0,\\n        \\"lifecycle\\": \\"-1\\",\\n        \\"isExternalTable\\": true,\\n        \\"size\\": 5372,\\n        \\"tableComment\\": \\"sale_detail\\",\\n        \\"tableLabel\\": \\"0\\",\\n        \\"createTableDDL\\": \\"create table if not exists sale_detail(\\\\n shop_name     STRING,\\\\n customer_id   STRING,\\\\n total_price   DOUBLE)\\\\npartitioned by (sale_date STRING, region STRING); \\",\\n        \\"nativeColumns\\": [\\n          {\\n            \\"name\\": \\"shop_name\\",\\n            \\"type\\": \\"STRING\\",\\n            \\"label\\": \\"0\\",\\n            \\"comment\\": \\"商店名称\\"\\n          }\\n        ],\\n        \\"partitionColumns\\": [\\n          {\\n            \\"name\\": \\"sale_date\\",\\n            \\"type\\": \\"STRING\\",\\n            \\"label\\": \\"0\\",\\n            \\"comment\\": \\"销售日期\\"\\n          }\\n        ],\\n        \\"materializedView\\": false,\\n        \\"rewriteEnabled\\": false,\\n        \\"autoRefreshEnabled\\": false,\\n        \\"isOutdated\\": false,\\n        \\"physicalSize\\": 2763,\\n        \\"fileNum\\": 200,\\n        \\"storageHandler\\": \\"com.aliyun.odps.CsvStorageHandler\\",\\n        \\"location\\": \\"oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/\\",\\n        \\"odpsPropertiesRolearn\\": \\"acs:ram::xxxxx:role/aliyunodpsdefaultrole\\",\\n        \\"tablestoreColumnsMapping\\": \\":o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice\\",\\n        \\"tablesotreTableName\\": \\"ots_tpch_orders\\",\\n        \\"odpsSqlTextOptionFlushHeader\\": true,\\n        \\"odpsTextOptionHeaderLinesCount\\": 1\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取表列表',
            'summary' => '获取MaxCompute项目内的表列表。',
        ],
        'ListFunctions' => [
            'path' => '/api/v1/projects/{projectName}/functions',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'odps_project',
                    ],
                ],
                [
                    'name' => 'schemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'schema名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a',
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                    ],
                ],
                [
                    'name' => 'maxItem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的最大结果数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListResultDTO<FunctionInfo, MarkerPageInfo>>',
                        'description' => 'PopResult<ListResultDTO<FunctionInfo, MarkerPageInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0be3e0b716671885050924814e3623',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'functions' => [
                                        'description' => '各个函数的信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '各个函数的信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'displayName' => [
                                                    'description' => '显示名称',
                                                    'type' => 'string',
                                                    'example' => 'getdate',
                                                ],
                                                'name' => [
                                                    'description' => '函数名称。',
                                                    'type' => 'string',
                                                    'example' => 'getdate',
                                                ],
                                                'owner' => [
                                                    'description' => '所有者。',
                                                    'type' => 'string',
                                                    'example' => 'odpsowner',
                                                ],
                                                'schema' => [
                                                    'description' => '函数schema。',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                                'resources' => [
                                                    'description' => '函数关联的资源名称。',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                                'creationTime' => [
                                                    'description' => '创建时间，单位毫秒',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1664505167000',
                                                ],
                                                'class' => [
                                                    'description' => '函数所在的类。',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'marker' => [
                                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                                        'type' => 'string',
                                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                                    ],
                                    'maxItem' => [
                                        'description' => '每页返回的最大结果数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0b716671885050924814e3623\\",\\n  \\"data\\": {\\n    \\"functions\\": [\\n      {\\n        \\"displayName\\": \\"getdate\\",\\n        \\"name\\": \\"getdate\\",\\n        \\"owner\\": \\"odpsowner\\",\\n        \\"schema\\": \\"abc\\",\\n        \\"resources\\": \\"abc\\",\\n        \\"creationTime\\": 1664505167000,\\n        \\"class\\": \\"abc\\"\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取函数列表',
            'summary' => '获取MaxCompute函数列表。',
        ],
        'ListResources' => [
            'path' => '/api/v1/projects/{projectName}/resources',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'MaxCompute项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'schemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'schema名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'res'."\n",
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                    ],
                ],
                [
                    'name' => 'maxItem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的最大结果数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListResultDTO<ResourceInfo, MarkerPageInfo>>',
                        'description' => 'PopResult<ListResultDTO<ResourceInfo, MarkerPageInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc3b4ae16685836687916212e7850',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'resources' => [
                                        'description' => '资源列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'displayName' => [
                                                    'description' => '显示名称',
                                                    'type' => 'string',
                                                    'example' => 'res_1'."\n",
                                                ],
                                                'name' => [
                                                    'description' => '资源名称。',
                                                    'type' => 'string',
                                                    'example' => 'res_1',
                                                ],
                                                'owner' => [
                                                    'description' => '资源的拥有者。',
                                                    'type' => 'string',
                                                    'example' => '1265860483008101',
                                                ],
                                                'type' => [
                                                    'description' => '资源类型。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'file' => 'file',
                                                        'py' => 'py',
                                                        'jar' => 'jar',
                                                        'volumefile' => 'volumefile',
                                                        'table' => 'table',
                                                    ],
                                                    'example' => 'file',
                                                ],
                                                'schema' => [
                                                    'description' => '所属schema。',
                                                    'type' => 'string',
                                                    'example' => 'schemaA',
                                                ],
                                                'lastUpdator' => [
                                                    'description' => '最后更新人。',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN$xxx@test.aliyunid.com',
                                                ],
                                                'creationTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2022-01-29T03:34:09Z',
                                                ],
                                                'lastModifiedTime' => [
                                                    'description' => '修改时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2023-04-18T06:15:05Z',
                                                ],
                                                'comment' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => 'filr类型资源',
                                                ],
                                                'size' => [
                                                    'description' => '大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'contentMD5' => [
                                                    'description' => 'HTTP请求正文的128-bit MD5散列值转换成BASE64编码的结果。',
                                                    'type' => 'string',
                                                    'example' => 'MACiECZtnLiNkNS1v5****=1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'marker' => [
                                        'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                                        'type' => 'string',
                                        'example' => 'ZmN0X21vbnRoX3Rhb2Jhb19pbmRleCE=',
                                    ],
                                    'maxItem' => [
                                        'description' => '每页返回的最大结果数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4ae16685836687916212e7850\\",\\n  \\"data\\": {\\n    \\"resources\\": [\\n      {\\n        \\"displayName\\": \\"res_1\\\\n\\",\\n        \\"name\\": \\"res_1\\",\\n        \\"owner\\": \\"1265860483008101\\",\\n        \\"type\\": \\"file\\",\\n        \\"schema\\": \\"schemaA\\",\\n        \\"lastUpdator\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"creationTime\\": 0,\\n        \\"lastModifiedTime\\": 0,\\n        \\"comment\\": \\"filr类型资源\\",\\n        \\"size\\": 10,\\n        \\"contentMD5\\": \\"MACiECZtnLiNkNS1v5****=1\\"\\n      }\\n    ],\\n    \\"marker\\": \\"ZmN0X21vbnRoX3Rhb2Jhb19pbmRleCE=\\",\\n    \\"maxItem\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取资源列表',
            'summary' => '获取MaxCompute项目内的资源列表。',
        ],
        'ListUsers' => [
            'path' => '/api/v1/users',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目',
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
                        'title' => 'PopResult<ListResultDTO<UserAccount, DefaultPageInfo>>',
                        'description' => 'PopResult<ListResultDTO<UserAccount, DefaultPageInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0a06dd4816687424611405643e3730',
                            ],
                            'data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'users' => [
                                        'description' => '用户列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'accountId' => [
                                                    'description' => '账号ID',
                                                    'type' => 'string',
                                                    'example' => '167835629082',
                                                ],
                                                'accountName' => [
                                                    'description' => '账号名称',
                                                    'type' => 'string',
                                                    'example' => 'Bob@',
                                                ],
                                                'displayName' => [
                                                    'description' => '显示名称',
                                                    'type' => 'string',
                                                    'example' => 'Bob',
                                                ],
                                                'accountType' => [
                                                    'description' => '账号类型',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN',
                                                ],
                                                'tenantId' => [
                                                    'description' => '租户ID',
                                                    'type' => 'string',
                                                    'example' => '1567253789',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'totalCount' => [
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '64',
                                    ],
                                    'pageNumber' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'pageSize' => [
                                        'description' => '每页显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dd4816687424611405643e3730\\",\\n  \\"data\\": {\\n    \\"users\\": [\\n      {\\n        \\"accountId\\": \\"167835629082\\",\\n        \\"accountName\\": \\"Bob@\\",\\n        \\"displayName\\": \\"Bob\\",\\n        \\"accountType\\": \\"ALIYUN\\",\\n        \\"tenantId\\": \\"1567253789\\"\\n      }\\n    ],\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取用户列表',
            'summary' => '获取租户下的所有用户列表。',
        ],
        'ListJobInfos' => [
            'path' => '/api/v1/jobs',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '478403690625249',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'orderColumn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序列',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cuUsage',
                    ],
                ],
                [
                    'name' => 'ascOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升序or降序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "from":1672112000, #起始时间戳'."\n"
                            .'  "to":1672112130, #截止时间戳'."\n"
                            .'  "statusList":[], #作业状态'."\n"
                            .'  "quotaNickname":"quota_nickname", #配额名称'."\n"
                            .'  "projectList":[], #项目名称'."\n"
                            .'  "typeList":[], #类型'."\n"
                            .'  "jobOwnerList":[], #作业owner'."\n"
                            .'  "signatureList":[], #sql签名'."\n"
                            .'  "extNodeIdList":[], '."\n"
                            .'  "instanceIdList":[], #实例ID'."\n"
                            .'  "priorityList":[], #作业优先级'."\n"
                            .'  "settings":{'."\n"
                            .'    "key":"value"'."\n"
                            .'  }'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListJobInfoDTO>',
                        'description' => 'PopResult<ListJobInfoDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc13a9516807484336515320e38f5',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'totalCount' => [
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '64',
                                    ],
                                    'pageNumber' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'pageSize' => [
                                        'description' => '每页显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'jobInfoList' => [
                                        'description' => '作业信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '作业信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'tenantId' => [
                                                    'description' => '租户ID',
                                                    'type' => 'string',
                                                    'example' => '213065738244354',
                                                ],
                                                'region' => [
                                                    'description' => '地域id。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'cluster' => [
                                                    'description' => '集群id',
                                                    'type' => 'string',
                                                    'example' => 'AY20A',
                                                ],
                                                'instanceId' => [
                                                    'description' => '实例ID。'."\n",
                                                    'type' => 'string',
                                                    'example' => '20230410050036549gfmsdwf60gg',
                                                ],
                                                'jobOwner' => [
                                                    'description' => '提交作业的账号',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN$xxx@test.aliyunid.com',
                                                ],
                                                'project' => [
                                                    'description' => 'maxcompute项目名称',
                                                    'type' => 'string',
                                                    'example' => 'openrec_new',
                                                ],
                                                'jobType' => [
                                                    'description' => '作业类型',
                                                    'type' => 'string',
                                                    'example' => 'SQL',
                                                ],
                                                'priority' => [
                                                    'description' => '优先级',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'quotaNickname' => [
                                                    'description' => '作业使用的配额昵称',
                                                    'type' => 'string',
                                                    'example' => 'my_quota',
                                                ],
                                                'quotaType' => [
                                                    'description' => 'quota类型',
                                                    'type' => 'string',
                                                    'example' => 'subscription',
                                                ],
                                                'cuUsage' => [
                                                    'description' => 'cu使用总量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'memoryUsage' => [
                                                    'description' => '内存使用总量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '40',
                                                ],
                                                'cuSnapshot' => [
                                                    'description' => '作业的cu快照占比',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0.48',
                                                ],
                                                'memorySnapshot' => [
                                                    'description' => '作业的内存快照占比',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0.42',
                                                ],
                                                'statusSnapshot' => [
                                                    'description' => '作业快照状态',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'submittedAtTime' => [
                                                    'description' => '作业的提交时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1672112013',
                                                ],
                                                'waitingTime' => [
                                                    'description' => '等待时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'runningAtTime' => [
                                                    'description' => '作业的开始运行时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1672112113',
                                                ],
                                                'runningTime' => [
                                                    'description' => '运行时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '800',
                                                ],
                                                'endAtTime' => [
                                                    'description' => '运行结束时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'totalTime' => [
                                                    'description' => '总运行时长',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '900',
                                                ],
                                                'signature' => [
                                                    'description' => 'sql签名',
                                                    'type' => 'string',
                                                    'example' => 'i094KijGrN3kOXZ74kbexB77XQY=',
                                                ],
                                                'extPlantFrom' => [
                                                    'description' => '上游平台',
                                                    'type' => 'string',
                                                    'example' => 'platform_3',
                                                ],
                                                'extNodeId' => [
                                                    'description' => 'DataWorks节点ID',
                                                    'type' => 'string',
                                                    'example' => 'node_4',
                                                ],
                                                'extNodeOnDuty' => [
                                                    'description' => '执行责任人',
                                                    'type' => 'string',
                                                    'example' => 'duty_2',
                                                ],
                                                'tags' => [
                                                    'description' => '标签',
                                                    'type' => 'string',
                                                    'example' => '[]',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc13a9516807484336515320e38f5\\",\\n  \\"httpCode\\": 200,\\n  \\"data\\": {\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10,\\n    \\"jobInfoList\\": [\\n      {\\n        \\"tenantId\\": \\"213065738244354\\",\\n        \\"region\\": \\"cn-shanghai\\",\\n        \\"cluster\\": \\"AY20A\\",\\n        \\"instanceId\\": \\"20230410050036549gfmsdwf60gg\\",\\n        \\"jobOwner\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"project\\": \\"openrec_new\\",\\n        \\"jobType\\": \\"SQL\\",\\n        \\"priority\\": 1,\\n        \\"status\\": \\"running\\",\\n        \\"quotaNickname\\": \\"my_quota\\",\\n        \\"quotaType\\": \\"subscription\\",\\n        \\"cuUsage\\": 10,\\n        \\"memoryUsage\\": 40,\\n        \\"cuSnapshot\\": 0.48,\\n        \\"memorySnapshot\\": 0.42,\\n        \\"statusSnapshot\\": \\"running\\",\\n        \\"submittedAtTime\\": 1672112013,\\n        \\"waitingTime\\": 100,\\n        \\"runningAtTime\\": 1672112113,\\n        \\"runningTime\\": 800,\\n        \\"endAtTime\\": 0,\\n        \\"totalTime\\": 900,\\n        \\"signature\\": \\"i094KijGrN3kOXZ74kbexB77XQY=\\",\\n        \\"extPlantFrom\\": \\"platform_3\\",\\n        \\"extNodeId\\": \\"node_4\\",\\n        \\"extNodeOnDuty\\": \\"duty_2\\",\\n        \\"tags\\": \\"[]\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查看作业列表',
            'summary' => '查看作业列表',
        ],
        'GetRunningJobs' => [
            'path' => '/api/v1/jobs/runningJobs',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间点。该时间是指作业的提交时间。'."\n"
                            ."\n"
                            .'- 请求参数**from**和**to**定义的时间区间遵循双闭原则，即该时间区间既包括区间开始时间点也包括区间结束时间点。如果**from**和**to**的值相同，则为无效区间，函数直接返回空。'."\n"
                            .'- Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1683785928',
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间点。该时间是指作业的提交时间。'."\n"
                            ."\n"
                            .'- 请求参数**from**和**to**定义的时间区间遵循双闭原则，即该时间区间既包括区间开始时间点也包括区间结束时间点。如果**from**和**to**的值相同，则为无效区间，函数直接返回空。'."\n"
                            .'- Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1683612946',
                    ],
                ],
                [
                    'name' => 'jobOwnerList',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '作业的执行者列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '作业的执行者列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ALIYUN$xxx@test.aliyunid.com',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'quotaNicknameList',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '作业使用的配额昵称列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '作业使用的配额昵称列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'my_quota',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认为10，最大为20',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListRunningJobInfoDTO>',
                        'description' => 'PopResult<ListRunningJobInfoDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0bc3b4ab16684833172127321e2c25',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'errorMsg' => [
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '0A3B1FD2006A24C8D8BE65CDAC028298',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'runningJobInfoList' => [
                                        'description' => '执行状态的作业列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '执行状态的作业',
                                            'type' => 'object',
                                            'properties' => [
                                                'instanceId' => [
                                                    'description' => '实例ID。'."\n",
                                                    'type' => 'string',
                                                    'example' => '2023050206371544gomgtp3ljcr4',
                                                ],
                                                'jobOwner' => [
                                                    'description' => '提交作业的账号',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN$xxx@test.aliyunid.com',
                                                ],
                                                'project' => [
                                                    'description' => 'maxcompute项目名称',
                                                    'type' => 'string',
                                                    'example' => 'project_20221021123044_981b',
                                                ],
                                                'quotaNickname' => [
                                                    'description' => '作业使用的配额昵称',
                                                    'type' => 'string',
                                                    'example' => 'my_quota',
                                                ],
                                                'cuSnapshot' => [
                                                    'description' => '作业的cu快照占比',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0.45',
                                                ],
                                                'memorySnapshot' => [
                                                    'description' => '作业的内存快照占比',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0.45',
                                                ],
                                                'submittedAtTime' => [
                                                    'description' => '作业的提交时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1689746864',
                                                ],
                                                'runningAtTime' => [
                                                    'description' => '作业的开始运行时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1689746864',
                                                ],
                                                'progress' => [
                                                    'description' => '任务进度。',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'totalCount' => [
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '64',
                                    ],
                                    'pageNumber' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'pageSize' => [
                                        'description' => '每页显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4ab16684833172127321e2c25\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"success\\",\\n  \\"errorMsg\\": \\"0A3B1FD2006A24C8D8BE65CDAC028298\\",\\n  \\"data\\": {\\n    \\"runningJobInfoList\\": [\\n      {\\n        \\"instanceId\\": \\"2023050206371544gomgtp3ljcr4\\",\\n        \\"jobOwner\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"project\\": \\"project_20221021123044_981b\\",\\n        \\"quotaNickname\\": \\"my_quota\\",\\n        \\"cuSnapshot\\": 0.45,\\n        \\"memorySnapshot\\": 0.45,\\n        \\"submittedAtTime\\": 1689746864,\\n        \\"runningAtTime\\": 1689746864,\\n        \\"progress\\": 0\\n      }\\n    ],\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取运行态的作业列表',
            'summary' => '指定时间范围内，所有仍处于“运行中”的作业的运行态数据展示。',
        ],
        'KillJobs' => [
            'path' => '/api/v1/jobs/kill',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'tenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '478403690625249',
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '['."\n"
                            .'      {'."\n"
                            .'            "instanceId": "",'."\n"
                            .'            "projectName": ""'."\n"
                            .'      },'."\n"
                            .'      {'."\n"
                            .'            "instanceId": "",'."\n"
                            .'            "projectName": ""'."\n"
                            .'      }'."\n"
                            .']',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<String>',
                        'description' => 'PopResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0abb7ede16814560741256732e91b6',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'data' => [
                                'description' => '返回数据',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0abb7ede16814560741256732e91b6\\",\\n  \\"httpCode\\": 200,\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '终止作业',
            'summary' => '终止正在运行的作业。',
        ],
        'GetJobResourceUsage' => [
            'path' => '/api/v1/jobs/resourceUsage',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'date',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的日期，以天为级别，时间参数填写必须为yyyy-MM-dd',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023-05-15',
                    ],
                ],
                [
                    'name' => 'jobOwnerList',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '作业的执行者列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '作业的执行者列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ALIYUN$xxx@test.aliyunid.com',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'quotaNicknameList',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '作业使用的配额昵称列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '作业使用的配额昵称列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'my_quota',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认为10，最大为100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<ListJobResourceUsageDTO>',
                        'description' => 'PopResult<ListJobResourceUsageDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0b57ff7616612271051086500ea3ce',
                            ],
                            'httpCode' => [
                                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'errorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '0A3B1E82006A23A918C70905BF08AEC7',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'jobResourceUsageList' => [
                                        'description' => '返回的数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回的数据列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'date' => [
                                                    'description' => '日程开始日期，格式：yyyy-MM-dd。',
                                                    'type' => 'string',
                                                    'example' => '2023-05-09',
                                                ],
                                                'jobOwner' => [
                                                    'description' => '作业的执行者',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN$xxx@test.aliyunid.com',
                                                ],
                                                'quotaNickname' => [
                                                    'description' => '配额昵称',
                                                    'type' => 'string',
                                                    'example' => 'my_quota',
                                                ],
                                                'cuUsage' => [
                                                    'description' => 'cu使用总量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1185100',
                                                ],
                                                'memoryUsage' => [
                                                    'description' => '内存使用总量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '15169536',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'totalCount' => [
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '64',
                                    ],
                                    'pageNumber' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'pageSize' => [
                                        'description' => '每页显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b57ff7616612271051086500ea3ce\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"success\\",\\n  \\"errorMsg\\": \\"0A3B1E82006A23A918C70905BF08AEC7\\",\\n  \\"data\\": {\\n    \\"jobResourceUsageList\\": [\\n      {\\n        \\"date\\": \\"2023-05-09\\",\\n        \\"jobOwner\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"quotaNickname\\": \\"my_quota\\",\\n        \\"cuUsage\\": 1185100,\\n        \\"memoryUsage\\": 15169536\\n      }\\n    ],\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获得作业执行者级别的资源使用列表',
            'summary' => '指定时间范围内，针对已结束的全部作业进行统计，以“天”为级别展示作业执行者级别的资源使用总量。',
        ],
        'GetTableInfo' => [
            'path' => '/api/v1/projects/{projectName}/tables/{tableName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'projectA',
                    ],
                ],
                [
                    'name' => 'schemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'schema名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '表名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sale_detail',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'internal' => 'internal',
                            'external' => 'external',
                            'view' => 'view',
                            'materialView' => 'materialView',
                        ],
                        'example' => 'internal',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResult<TableInfo>',
                        'description' => 'PopResult<TableInfo>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0a06dd4516687375802853481ec9fd',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'description' => '表名称。',
                                        'type' => 'string',
                                        'example' => 'sale_detail',
                                    ],
                                    'owner' => [
                                        'description' => '表的拥有者。',
                                        'type' => 'string',
                                        'example' => '188785396123****',
                                    ],
                                    'type' => [
                                        'description' => '表类型。',
                                        'type' => 'string',
                                        'example' => '-**internal**：内部表。'."\n"
                                            .'-**external**：外部表。'."\n"
                                            .'-**view**：视图。'."\n"
                                            .'-**materializedView**：物化视图。',
                                    ],
                                    'schema' => [
                                        'description' => '归属schema。',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'creationTime' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2022-01-17T07:07:47Z',
                                    ],
                                    'viewText' => [
                                        'description' => '生成视图的语句（当前表类型为视图时展示）。',
                                        'type' => 'string',
                                        'example' => 'select shop_name, sum(total_price) from sale_detail group by shop_name',
                                    ],
                                    'displayName' => [
                                        'description' => '展示名称。',
                                        'type' => 'string',
                                        'example' => 'project_name.schema_name.table_name',
                                    ],
                                    'projectName' => [
                                        'description' => '项目名称。',
                                        'type' => 'string',
                                        'example' => 'projectA',
                                    ],
                                    'lastDDLTime' => [
                                        'description' => 'DDL最近更新时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2023-11-21T02:05:56Z',
                                    ],
                                    'lastModifiedTime' => [
                                        'description' => '数据最近更新时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2023-11-21T02:05:56Z',
                                    ],
                                    'lastAccessTime' => [
                                        'description' => '数据最近访问时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2023-11-21T02:05:56Z',
                                    ],
                                    'lifecycle' => [
                                        'description' => '生命周期。',
                                        'type' => 'string',
                                        'example' => '-1',
                                    ],
                                    'isExternalTable' => [
                                        'description' => '是否外部表。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'size' => [
                                        'description' => '大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5372',
                                    ],
                                    'comment' => [
                                        'description' => '表说明。',
                                        'type' => 'string',
                                        'example' => 'sale_detail',
                                    ],
                                    'tableLabel' => [
                                        'description' => '表的label级别。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'createTableDDL' => [
                                        'description' => '创建表的DDL语句。',
                                        'type' => 'string',
                                        'example' => 'create table if not exists sale_detail( shop_name STRING, customer_id STRING, total_price DOUBLE) partitioned by (sale_date STRING, region STRING);',
                                    ],
                                    'nativeColumns' => [
                                        'description' => '列信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '列名。',
                                                    'type' => 'string',
                                                    'example' => 'shop_name',
                                                ],
                                                'type' => [
                                                    'description' => '数据类型。',
                                                    'type' => 'string',
                                                    'example' => 'STRING',
                                                ],
                                                'label' => [
                                                    'description' => '列Label等级。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'comment' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '商店名称',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'partitionColumns' => [
                                        'description' => '分区列信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '列名。',
                                                    'type' => 'string',
                                                    'example' => 'sale_date',
                                                ],
                                                'type' => [
                                                    'description' => '数据类型。',
                                                    'type' => 'string',
                                                    'example' => 'STRING',
                                                ],
                                                'label' => [
                                                    'description' => '列Label等级。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'comment' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '销售日期',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'materializedView' => [
                                        'description' => '是否物化视图。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'rewriteEnabled' => [
                                        'description' => '是否允许通过物化视图执行查询改写操作。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'autoRefreshEnabled' => [
                                        'description' => '是否开启自动刷新物化视图。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'isOutdated' => [
                                        'description' => '是否因为源表数据有变化，导致物化视图数据无效。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'physicalSize' => [
                                        'description' => '物理大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2763',
                                    ],
                                    'fileNum' => [
                                        'description' => '文件数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'storageHandler' => [
                                        'description' => '外部表解析器。',
                                        'type' => 'string',
                                        'example' => 'com.aliyun.odps.CsvStorageHandler',
                                    ],
                                    'location' => [
                                        'description' => '外部表地址。',
                                        'type' => 'string',
                                        'example' => '外部表地址'."\n"
                                            ."\n"
                                            .'oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/',
                                    ],
                                    'odpsPropertiesRolearn' => [
                                        'description' => 'RAM 中 AliyunODPSDefaultRole 的 ARN 信息。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::xxxxx:role/aliyunodpsdefaultrole',
                                    ],
                                    'tablestoreColumnsMapping' => [
                                        'description' => '描述 MaxCompute 将访问的 Tablestore 表的列，包括主键和属性列。',
                                        'type' => 'string',
                                        'example' => ':o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice',
                                    ],
                                    'tablesotreTableName' => [
                                        'description' => '需要访问的 Tablestore 表名称。',
                                        'type' => 'string',
                                        'example' => 'ots_tpch_orders',
                                    ],
                                    'odpsSqlTextOptionFlushHeader' => [
                                        'description' => '是否忽略表头。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'odpsTextOptionHeaderLinesCount' => [
                                        'description' => '忽略表头前N行。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dd4516687375802853481ec9fd\\",\\n  \\"data\\": {\\n    \\"name\\": \\"sale_detail\\",\\n    \\"owner\\": \\"188785396123****\\",\\n    \\"type\\": \\"-**internal**：内部表。\\\\n-**external**：外部表。\\\\n-**view**：视图。\\\\n-**materializedView**：物化视图。\\",\\n    \\"schema\\": \\"default\\",\\n    \\"creationTime\\": 0,\\n    \\"viewText\\": \\"select shop_name, sum(total_price) from sale_detail group by shop_name\\",\\n    \\"displayName\\": \\"project_name.schema_name.table_name\\",\\n    \\"projectName\\": \\"projectA\\",\\n    \\"lastDDLTime\\": 0,\\n    \\"lastModifiedTime\\": 0,\\n    \\"lastAccessTime\\": 0,\\n    \\"lifecycle\\": \\"-1\\",\\n    \\"isExternalTable\\": false,\\n    \\"size\\": 5372,\\n    \\"comment\\": \\"sale_detail\\",\\n    \\"tableLabel\\": \\"0\\",\\n    \\"createTableDDL\\": \\"create table if not exists sale_detail( shop_name STRING, customer_id STRING, total_price DOUBLE) partitioned by (sale_date STRING, region STRING);\\",\\n    \\"nativeColumns\\": [\\n      {\\n        \\"name\\": \\"shop_name\\",\\n        \\"type\\": \\"STRING\\",\\n        \\"label\\": \\"0\\",\\n        \\"comment\\": \\"商店名称\\"\\n      }\\n    ],\\n    \\"partitionColumns\\": [\\n      {\\n        \\"name\\": \\"sale_date\\",\\n        \\"type\\": \\"STRING\\",\\n        \\"label\\": \\"0\\",\\n        \\"comment\\": \\"销售日期\\"\\n      }\\n    ],\\n    \\"materializedView\\": false,\\n    \\"rewriteEnabled\\": false,\\n    \\"autoRefreshEnabled\\": false,\\n    \\"isOutdated\\": false,\\n    \\"physicalSize\\": 2763,\\n    \\"fileNum\\": 200,\\n    \\"storageHandler\\": \\"com.aliyun.odps.CsvStorageHandler\\",\\n    \\"location\\": \\"外部表地址\\\\n\\\\noss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/\\",\\n    \\"odpsPropertiesRolearn\\": \\"acs:ram::xxxxx:role/aliyunodpsdefaultrole\\",\\n    \\"tablestoreColumnsMapping\\": \\":o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice\\",\\n    \\"tablesotreTableName\\": \\"ots_tpch_orders\\",\\n    \\"odpsSqlTextOptionFlushHeader\\": true,\\n    \\"odpsTextOptionHeaderLinesCount\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '获取表信息',
            'summary' => '获取表信息',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'maxcompute.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'maxcompute.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'maxcompute.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'maxcompute.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'maxcompute.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'maxcompute.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'maxcompute.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'maxcompute.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'maxcompute.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'maxcompute.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'maxcompute.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'maxcompute.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'maxcompute.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'maxcompute.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'maxcompute.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'maxcompute.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'maxcompute.ap-south-1.aliyuncs.com',
        ],
    ],
];
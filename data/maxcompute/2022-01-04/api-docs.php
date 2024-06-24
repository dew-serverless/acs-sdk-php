<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'MaxCompute',
    'version' => '2022-01-04',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 176776,
      'title' => 'Quota管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListQuotas',
        1 => 'GetQuota',
        2 => 'UpdateQuota',
        3 => 'ListQuotasPlans',
        4 => 'CreateQuotaPlan',
        5 => 'UpdateQuotaPlan',
        6 => 'GetQuotaPlan',
        7 => 'DeleteQuotaPlan',
        8 => 'CreateQuotaSchedule',
        9 => 'UpdateQuotaSchedule',
        10 => 'GetQuotaSchedule',
      ),
    ),
    1 => 
    array (
      'id' => 176788,
      'title' => '项目管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 174122,
          'title' => '基础管理（Project）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateProject',
            1 => 'ListProjects',
            2 => 'GetProject',
            3 => 'UpdateProjectIpWhiteList',
            4 => 'GetTrustedProjects',
          ),
        ),
        1 => 
        array (
          'id' => 176791,
          'title' => '角色权限（Role、User）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListProjectUsers',
            1 => 'CreateRole',
            2 => 'ListRoles',
            3 => 'GetRoleAcl',
            4 => 'GetRoleAclOnObject',
            5 => 'GetRolePolicy',
            6 => 'ListUsersByRole',
          ),
        ),
        2 => 
        array (
          'id' => 176799,
          'title' => 'Package',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListPackages',
            1 => 'UpdatePackage',
            2 => 'CreatePackage',
            3 => 'GetPackage',
          ),
        ),
        3 => 
        array (
          'id' => 176804,
          'title' => '表（Table）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListTables',
          ),
        ),
        4 => 
        array (
          'id' => 173014,
          'title' => '函数（Function）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListFunctions',
          ),
        ),
        5 => 
        array (
          'id' => 176806,
          'title' => '资源（Resource）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListResources',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 181874,
      'title' => '租户管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListUsers',
      ),
    ),
    3 => 
    array (
      'id' => 185541,
      'title' => '作业运维',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListJobInfos',
        1 => 'GetRunningJobs',
        2 => 'KillJobs',
        3 => 'GetJobResourceUsage',
      ),
    ),
    4 => 
    array (
      'id' => 190118,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTableInfo',
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
    'ListQuotas' => 
    array (
      'path' => '/api/v1/quotas',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '280747109771520',
          ),
        ),
        1 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'productId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品id',
            'type' => 'string',
            'required' => false,
            'example' => 'ODPS',
            'default' => 'ODPS',
          ),
        ),
        3 => 
        array (
          'name' => 'billingType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费模式',
            'type' => 'string',
            'required' => false,
            'example' => 'subscription',
            'default' => 'subscription',
          ),
        ),
        4 => 
        array (
          'name' => 'saleTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可以根据费用标签来过滤quota 对象，费用标签是用户在标签云产品创建的。',
            'type' => 'string',
            'required' => false,
            'example' => '{"tag":"this_is_tag_demo"}',
          ),
        ),
        5 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
          ),
        ),
        6 => 
        array (
          'name' => 'maxItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限制返回的最大数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopCompatibleResult<ListQuotasDTO>',
            'description' => 'PopCompatibleResult<ListQuotasDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc12e6f16677875480593081d2956',
              ),
              'quotaInfoList' => 
              array (
                'description' => 'quota列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'quota列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'billingPolicy' => 
                    array (
                      'description' => '订单信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'billingMethod' => 
                        array (
                          'title' => '"PAYASYOUGO" 表示后付费',
                          'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                          'type' => 'string',
                          'example' => 'subscription',
                        ),
                        'odpsSpecCode' => 
                        array (
                          'description' => '订单规格',
                          'type' => 'string',
                          'example' => 'OdpsStandard ',
                        ),
                        'orderId' => 
                        array (
                          'description' => '订单id。',
                          'type' => 'string',
                          'example' => '45245678',
                        ),
                      ),
                    ),
                    'saleTag' => 
                    array (
                      'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'resourceIds' => 
                        array (
                          'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'maxcompute quota 对象的标识',
                            'type' => 'string',
                            'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"',
                          ),
                        ),
                        'resourceType' => 
                        array (
                          'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                          'type' => 'string',
                          'example' => '"project"',
                        ),
                      ),
                    ),
                    'cluster' => 
                    array (
                      'description' => '集群id',
                      'type' => 'string',
                      'example' => 'AT-120N
',
                    ),
                    'createTime' => 
                    array (
                      'description' => '资源创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2022-09-06T02:14:44Z
',
                    ),
                    'creatorId' => 
                    array (
                      'description' => '资源创建者，云账号UID。',
                      'type' => 'string',
                      'example' => '672863518
',
                    ),
                    'id' => 
                    array (
                      'description' => 'quota ID',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'name' => 
                    array (
                      'description' => 'quota名称',
                      'type' => 'string',
                      'example' => 'quota_a
',
                    ),
                    'nickName' => 
                    array (
                      'description' => 'quota别名',
                      'type' => 'string',
                      'example' => 'quota_nickname
',
                    ),
                    'parameter' => 
                    array (
                      'description' => 'quota的描述信息',
                      'type' => 'object',
                      'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
                    ),
                    'parentId' => 
                    array (
                      'description' => '父资源id。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'regionId' => 
                    array (
                      'description' => '地域id。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'scheduleInfo' => 
                    array (
                      'description' => '分时信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'currPlan' => 
                        array (
                          'description' => '按照调度计划生效的quota计划',
                          'type' => 'string',
                          'example' => 'planA',
                        ),
                        'currTime' => 
                        array (
                          'description' => 'currPlan被调度的时间',
                          'type' => 'string',
                          'example' => '0800',
                        ),
                        'nextPlan' => 
                        array (
                          'description' => '按照调度计划将要生效的quota计划',
                          'type' => 'string',
                          'example' => 'planB',
                        ),
                        'nextTime' => 
                        array (
                          'description' => 'next_plan被调度的时间',
                          'type' => 'string',
                          'example' => '1700',
                        ),
                        'oncePlan' => 
                        array (
                          'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                          'type' => 'string',
                          'example' => 'planC',
                        ),
                        'onceTime' => 
                        array (
                          'description' => '立即生效触发的时间',
                          'type' => 'string',
                          'example' => '1500',
                        ),
                        'operatorName' => 
                        array (
                          'description' => '操作人名称。',
                          'type' => 'string',
                          'example' => 'userA',
                        ),
                        'timezone' => 
                        array (
                          'description' => '时区',
                          'type' => 'string',
                          'example' => 'UTC+8',
                        ),
                      ),
                    ),
                    'status' => 
                    array (
                      'description' => '资源状态',
                      'type' => 'string',
                      'example' => 'ON 
',
                    ),
                    'subQuotaInfoList' => 
                    array (
                      'description' => '二级quota信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '二级quota信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'saleTag' => 
                          array (
                            'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'resourceIds' => 
                              array (
                                'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'maxcompute quota 对象的标识',
                                  'type' => 'string',
                                  'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                                ),
                              ),
                              'resourceType' => 
                              array (
                                'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                'type' => 'string',
                                'example' => '"quota"',
                              ),
                            ),
                          ),
                          'billingPolicy' => 
                          array (
                            'description' => '订单信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'billingMethod' => 
                              array (
                                'title' => '"PAYASYOUGO" 表示后付费',
                                'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                                'type' => 'string',
                                'example' => 'subscription
',
                              ),
                              'odpsSpecCode' => 
                              array (
                                'description' => '订单规格',
                                'type' => 'string',
                                'example' => 'OdpsStandard ',
                              ),
                              'orderId' => 
                              array (
                                'description' => '订单id。',
                                'type' => 'string',
                                'example' => '45245678
',
                              ),
                            ),
                          ),
                          'cluster' => 
                          array (
                            'description' => '集群id',
                            'type' => 'string',
                            'example' => 'AT-120N',
                          ),
                          'createTime' => 
                          array (
                            'description' => '资源创建时间',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2022-09-06T02:14:44Z
',
                          ),
                          'creatorId' => 
                          array (
                            'description' => '资源创建者，云账号UID。',
                            'type' => 'string',
                            'example' => '672863518
',
                          ),
                          'id' => 
                          array (
                            'description' => '二级quota ID',
                            'type' => 'string',
                            'example' => '1000048',
                          ),
                          'name' => 
                          array (
                            'description' => '二级quota名称',
                            'type' => 'string',
                            'example' => 'subquotaA
',
                          ),
                          'nickName' => 
                          array (
                            'description' => '二级quota别名',
                            'type' => 'string',
                            'example' => 'subquotaA
',
                          ),
                          'parameter' => 
                          array (
                            'description' => 'quota的描述信息',
                            'type' => 'object',
                            'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
                          ),
                          'parentId' => 
                          array (
                            'description' => '父资源id',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'regionId' => 
                          array (
                            'description' => '地域id。',
                            'type' => 'string',
                            'example' => 'cn-beijing',
                          ),
                          'scheduleInfo' => 
                          array (
                            'description' => '分时信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'currPlan' => 
                              array (
                                'description' => '按照调度计划生效的quota计划',
                                'type' => 'string',
                                'example' => 'planA',
                              ),
                              'currTime' => 
                              array (
                                'description' => 'currPlan被调度的时间',
                                'type' => 'string',
                                'example' => '0800',
                              ),
                              'nextPlan' => 
                              array (
                                'description' => '按照调度计划将要生效的quota计划',
                                'type' => 'string',
                                'example' => 'planB',
                              ),
                              'nextTime' => 
                              array (
                                'description' => 'next_plan被调度的时间',
                                'type' => 'string',
                                'example' => '1700',
                              ),
                              'oncePlan' => 
                              array (
                                'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                'type' => 'string',
                                'example' => 'planC',
                              ),
                              'onceTime' => 
                              array (
                                'description' => '立即生效触发的时间',
                                'type' => 'string',
                                'example' => '1500',
                              ),
                              'operatorName' => 
                              array (
                                'description' => '操作人名称。',
                                'type' => 'string',
                                'example' => 'userA',
                              ),
                              'timezone' => 
                              array (
                                'description' => '时区',
                                'type' => 'string',
                                'example' => 'UTC+8',
                              ),
                            ),
                          ),
                          'status' => 
                          array (
                            'description' => '资源状态',
                            'type' => 'string',
                            'example' => 'ON',
                          ),
                          'tag' => 
                          array (
                            'description' => 'quota的资源标签',
                            'type' => 'string',
                            'example' => 'abc',
                          ),
                          'tenantId' => 
                          array (
                            'description' => '租户id。',
                            'type' => 'string',
                            'example' => '280747109771520
',
                          ),
                          'type' => 
                          array (
                            'title' => '对应控制集群的resourceSystemType字段',
                            'description' => '对应控制集群的resourceSystemType字段',
                            'type' => 'string',
                            'example' => 'FUXI_ONLINE
',
                          ),
                          'version' => 
                          array (
                            'description' => '版本',
                            'type' => 'string',
                            'example' => '1',
                          ),
                        ),
                      ),
                    ),
                    'tag' => 
                    array (
                      'description' => 'quota的资源标签',
                      'type' => 'string',
                      'example' => 'abc',
                    ),
                    'tenantId' => 
                    array (
                      'description' => '租户id。',
                      'type' => 'string',
                      'example' => '280747109771520
',
                    ),
                    'type' => 
                    array (
                      'title' => '对应控制集群的resourceSystemType字段',
                      'description' => '对应控制集群的resourceSystemType字段',
                      'type' => 'string',
                      'example' => 'FUXI_ONLINE
',
                    ),
                    'version' => 
                    array (
                      'description' => '版本。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagValue' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => '1',
                          ),
                          'TagKey' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'Department',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                'type' => 'string',
                'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
              ),
              'maxItem' => 
              array (
                'description' => '每页返回的最大结果数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'quotaInfoList' => 
                  array (
                    'description' => 'quota列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'quota列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'id' => 
                        array (
                          'description' => 'quota id',
                          'type' => 'string',
                          'example' => '0
',
                        ),
                        'name' => 
                        array (
                          'description' => 'quota名称',
                          'type' => 'string',
                          'example' => 'quota_a
',
                        ),
                        'nickName' => 
                        array (
                          'description' => 'quota别名',
                          'type' => 'string',
                          'example' => 'quota_nickname',
                        ),
                        'type' => 
                        array (
                          'title' => '对应控制集群的resourceSystemType字段',
                          'description' => '对应控制集群的resourceSystemType字段',
                          'type' => 'string',
                          'example' => 'FUXI_ONLINE',
                        ),
                        'status' => 
                        array (
                          'description' => '资源状态',
                          'type' => 'string',
                          'example' => 'ON',
                        ),
                        'tenantId' => 
                        array (
                          'description' => '租户id。',
                          'type' => 'string',
                          'example' => '280747109771520',
                        ),
                        'regionId' => 
                        array (
                          'description' => '地域id。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
                        ),
                        'parentId' => 
                        array (
                          'description' => '父资源 id',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'cluster' => 
                        array (
                          'description' => '集群id',
                          'type' => 'string',
                          'example' => 'AT-120N',
                        ),
                        'version' => 
                        array (
                          'description' => '版本',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'billingPolicy' => 
                        array (
                          'description' => '订单信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'odpsSpecCode' => 
                            array (
                              'description' => '订单规格',
                              'type' => 'string',
                              'example' => 'OdpsStandard ',
                            ),
                            'orderId' => 
                            array (
                              'description' => '订单id',
                              'type' => 'string',
                              'example' => '45245678
',
                            ),
                            'billingMethod' => 
                            array (
                              'title' => '"PAYASYOUGO" 表示后付费',
                              'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                              'type' => 'string',
                              'example' => 'subscription',
                            ),
                          ),
                        ),
                        'scheduleInfo' => 
                        array (
                          'description' => '分时信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'currPlan' => 
                            array (
                              'description' => '按照调度计划生效的quota计划',
                              'type' => 'string',
                              'example' => 'planA
',
                            ),
                            'currTime' => 
                            array (
                              'description' => 'currPlan被调度的时间',
                              'type' => 'string',
                              'example' => '0800',
                            ),
                            'nextPlan' => 
                            array (
                              'description' => '按照调度计划将要生效的quota计划',
                              'type' => 'string',
                              'example' => 'planB',
                            ),
                            'nextTime' => 
                            array (
                              'description' => 'next_plan被调度的时间',
                              'type' => 'string',
                              'example' => '1700',
                            ),
                            'oncePlan' => 
                            array (
                              'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                              'type' => 'string',
                              'example' => 'planC',
                            ),
                            'onceTime' => 
                            array (
                              'description' => '立即生效触发的时间',
                              'type' => 'string',
                              'example' => '1500',
                            ),
                            'operatorName' => 
                            array (
                              'description' => '操作人名称。',
                              'type' => 'string',
                              'example' => 'userA',
                            ),
                            'timezone' => 
                            array (
                              'description' => '时区',
                              'type' => 'string',
                              'example' => 'UTC+8',
                            ),
                          ),
                        ),
                        'parameter' => 
                        array (
                          'description' => 'quota的描述信息',
                          'type' => 'object',
                          'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
                        ),
                        'tag' => 
                        array (
                          'description' => 'quota的资源标签',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'createTime' => 
                        array (
                          'description' => '资源创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2022-09-06T02:14:44Z
',
                        ),
                        'creatorId' => 
                        array (
                          'description' => '资源创建者，云账号UID。',
                          'type' => 'string',
                          'example' => '672863518
',
                        ),
                        'saleTag' => 
                        array (
                          'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'resourceIds' => 
                            array (
                              'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'maxcompute quota 对象的标识',
                                'type' => 'string',
                                'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                              ),
                            ),
                            'resourceType' => 
                            array (
                              'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                              'type' => 'string',
                              'example' => '"quota"
',
                            ),
                          ),
                        ),
                        'subQuotaInfoList' => 
                        array (
                          'description' => '二级quota信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '二级quota信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'id' => 
                              array (
                                'description' => '二级quota ID',
                                'type' => 'string',
                                'example' => '1000048',
                              ),
                              'name' => 
                              array (
                                'description' => '二级quota名称',
                                'type' => 'string',
                                'example' => 'subquotaA
',
                              ),
                              'nickName' => 
                              array (
                                'description' => '二级quota昵称',
                                'type' => 'string',
                                'example' => 'subquotaA
',
                              ),
                              'type' => 
                              array (
                                'title' => '对应控制集群的resourceSystemType字段',
                                'description' => '对应控制集群的resourceSystemType字段',
                                'type' => 'string',
                                'example' => 'FUXI_ONLINE
',
                              ),
                              'status' => 
                              array (
                                'description' => '资源状态',
                                'type' => 'string',
                                'example' => 'ON',
                              ),
                              'tenantId' => 
                              array (
                                'description' => '租户id。',
                                'type' => 'string',
                                'example' => '280747109771520
',
                              ),
                              'regionId' => 
                              array (
                                'description' => '地域id。',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                              ),
                              'parentId' => 
                              array (
                                'description' => '父资源id。',
                                'type' => 'string',
                                'example' => '0',
                              ),
                              'cluster' => 
                              array (
                                'description' => '集群id',
                                'type' => 'string',
                                'example' => 'AT-120N',
                              ),
                              'version' => 
                              array (
                                'description' => '版本号',
                                'type' => 'string',
                                'example' => '1',
                              ),
                              'billingPolicy' => 
                              array (
                                'description' => '订单信息',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'odpsSpecCode' => 
                                  array (
                                    'description' => '订单规格',
                                    'type' => 'string',
                                    'example' => 'OdpsStandard ',
                                  ),
                                  'orderId' => 
                                  array (
                                    'description' => '订单id。',
                                    'type' => 'string',
                                    'example' => '45245678
',
                                  ),
                                  'billingMethod' => 
                                  array (
                                    'title' => '"PAYASYOUGO" 表示后付费',
                                    'description' => '付费模式。
- subscription，表示预付费quota。
- payasyougo，表示是后付费quota。',
                                    'type' => 'string',
                                    'example' => 'subscription',
                                  ),
                                ),
                              ),
                              'scheduleInfo' => 
                              array (
                                'description' => '分时信息',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'currPlan' => 
                                  array (
                                    'description' => '按照调度计划生效的quota计划',
                                    'type' => 'string',
                                    'example' => 'planA',
                                  ),
                                  'currTime' => 
                                  array (
                                    'description' => 'currPlan被调度的时间',
                                    'type' => 'string',
                                    'example' => '0800',
                                  ),
                                  'nextPlan' => 
                                  array (
                                    'description' => '按照调度计划将要生效的quota计划',
                                    'type' => 'string',
                                    'example' => 'planB',
                                  ),
                                  'nextTime' => 
                                  array (
                                    'description' => 'next_plan被调度的时间',
                                    'type' => 'string',
                                    'example' => '1700',
                                  ),
                                  'oncePlan' => 
                                  array (
                                    'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                    'type' => 'string',
                                    'example' => 'planC',
                                  ),
                                  'onceTime' => 
                                  array (
                                    'description' => '立即生效触发的时间',
                                    'type' => 'string',
                                    'example' => '1500',
                                  ),
                                  'operatorName' => 
                                  array (
                                    'description' => '操作人名称。',
                                    'type' => 'string',
                                    'example' => 'userA',
                                  ),
                                  'timezone' => 
                                  array (
                                    'description' => '时区',
                                    'type' => 'string',
                                    'example' => 'UTC+8',
                                  ),
                                ),
                              ),
                              'parameter' => 
                              array (
                                'description' => 'quota的描述信息',
                                'type' => 'object',
                                'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
                              ),
                              'tag' => 
                              array (
                                'description' => 'quota的资源标签',
                                'type' => 'string',
                                'example' => 'abc',
                              ),
                              'createTime' => 
                              array (
                                'description' => '资源创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2022-09-06T02:14:44Z
',
                              ),
                              'creatorId' => 
                              array (
                                'description' => '资源创建者，云账号UID。',
                                'type' => 'string',
                                'example' => '672863518
',
                              ),
                              'saleTag' => 
                              array (
                                'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'resourceIds' => 
                                  array (
                                    'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => 'maxcompute quota 对象的标识',
                                      'type' => 'string',
                                      'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                                    ),
                                  ),
                                  'resourceType' => 
                                  array (
                                    'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                                    'type' => 'string',
                                    'example' => '"quota"
',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Tags' => 
                        array (
                          'description' => '标签。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagValue' => 
                              array (
                                'description' => '标签值。',
                                'type' => 'string',
                                'example' => 'a12351qHDP6YEQMt',
                              ),
                              'TagKey' => 
                              array (
                                'description' => '标签键。',
                                'type' => 'string',
                                'example' => 'Department',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'marker' => 
                  array (
                    'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                    'type' => 'string',
                    'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                  ),
                  'maxItem' => 
                  array (
                    'description' => '每页返回的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '分页标识，当前接口仅支持连续翻页。返回值nextToken 非空代表还有剩余数据。把nextToken 作为参数继续查询会获得下一页。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => '"abcde"',
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '分页标识，当前接口仅支持连续翻页。返回值nextToken 非空代表还有剩余数据。把nextToken 作为参数继续查询会获得下一页。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2w6Olxc+cMPjUtUMo/CvPe4IK7f7kIQFrIZjyc',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc12e6f16677875480593081d2956\\",\\n  \\"quotaInfoList\\": [\\n    {\\n      \\"billingPolicy\\": {\\n        \\"billingMethod\\": \\"subscription\\",\\n        \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n        \\"orderId\\": \\"45245678\\"\\n      },\\n      \\"saleTag\\": {\\n        \\"resourceIds\\": [\\n          \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\"\\n        ],\\n        \\"resourceType\\": \\"\\\\\\"project\\\\\\"\\"\\n      },\\n      \\"cluster\\": \\"AT-120N\\\\n\\",\\n      \\"createTime\\": 0,\\n      \\"creatorId\\": \\"672863518\\\\n\\",\\n      \\"id\\": \\"0\\",\\n      \\"name\\": \\"quota_a\\\\n\\",\\n      \\"nickName\\": \\"quota_nickname\\\\n\\",\\n      \\"parameter\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"parentId\\": \\"null\\",\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"scheduleInfo\\": {\\n        \\"currPlan\\": \\"planA\\",\\n        \\"currTime\\": \\"0800\\",\\n        \\"nextPlan\\": \\"planB\\",\\n        \\"nextTime\\": \\"1700\\",\\n        \\"oncePlan\\": \\"planC\\",\\n        \\"onceTime\\": \\"1500\\",\\n        \\"operatorName\\": \\"userA\\",\\n        \\"timezone\\": \\"UTC+8\\"\\n      },\\n      \\"status\\": \\"ON \\\\n\\",\\n      \\"subQuotaInfoList\\": [\\n        {\\n          \\"saleTag\\": {\\n            \\"resourceIds\\": [\\n              \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n            ],\\n            \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\"\\n          },\\n          \\"billingPolicy\\": {\\n            \\"billingMethod\\": \\"subscription\\\\n\\",\\n            \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n            \\"orderId\\": \\"45245678\\\\n\\"\\n          },\\n          \\"cluster\\": \\"AT-120N\\",\\n          \\"createTime\\": 0,\\n          \\"creatorId\\": \\"672863518\\\\n\\",\\n          \\"id\\": \\"1000048\\",\\n          \\"name\\": \\"subquotaA\\\\n\\",\\n          \\"nickName\\": \\"subquotaA\\\\n\\",\\n          \\"parameter\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"parentId\\": \\"0\\",\\n          \\"regionId\\": \\"cn-beijing\\",\\n          \\"scheduleInfo\\": {\\n            \\"currPlan\\": \\"planA\\",\\n            \\"currTime\\": \\"0800\\",\\n            \\"nextPlan\\": \\"planB\\",\\n            \\"nextTime\\": \\"1700\\",\\n            \\"oncePlan\\": \\"planC\\",\\n            \\"onceTime\\": \\"1500\\",\\n            \\"operatorName\\": \\"userA\\",\\n            \\"timezone\\": \\"UTC+8\\"\\n          },\\n          \\"status\\": \\"ON\\",\\n          \\"tag\\": \\"abc\\",\\n          \\"tenantId\\": \\"280747109771520\\\\n\\",\\n          \\"type\\": \\"FUXI_ONLINE\\\\n\\",\\n          \\"version\\": \\"1\\"\\n        }\\n      ],\\n      \\"tag\\": \\"abc\\",\\n      \\"tenantId\\": \\"280747109771520\\\\n\\",\\n      \\"type\\": \\"FUXI_ONLINE\\\\n\\",\\n      \\"version\\": \\"1\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagValue\\": \\"1\\",\\n          \\"TagKey\\": \\"Department\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n  \\"maxItem\\": 10,\\n  \\"data\\": {\\n    \\"quotaInfoList\\": [\\n      {\\n        \\"id\\": \\"0\\\\n\\",\\n        \\"name\\": \\"quota_a\\\\n\\",\\n        \\"nickName\\": \\"quota_nickname\\",\\n        \\"type\\": \\"FUXI_ONLINE\\",\\n        \\"status\\": \\"ON\\",\\n        \\"tenantId\\": \\"280747109771520\\",\\n        \\"regionId\\": \\"cn-beijing\\",\\n        \\"parentId\\": \\"null\\",\\n        \\"cluster\\": \\"AT-120N\\",\\n        \\"version\\": \\"1\\",\\n        \\"billingPolicy\\": {\\n          \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n          \\"orderId\\": \\"45245678\\\\n\\",\\n          \\"billingMethod\\": \\"subscription\\"\\n        },\\n        \\"scheduleInfo\\": {\\n          \\"currPlan\\": \\"planA\\\\n\\",\\n          \\"currTime\\": \\"0800\\",\\n          \\"nextPlan\\": \\"planB\\",\\n          \\"nextTime\\": \\"1700\\",\\n          \\"oncePlan\\": \\"planC\\",\\n          \\"onceTime\\": \\"1500\\",\\n          \\"operatorName\\": \\"userA\\",\\n          \\"timezone\\": \\"UTC+8\\"\\n        },\\n        \\"parameter\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"tag\\": \\"abc\\",\\n        \\"createTime\\": 0,\\n        \\"creatorId\\": \\"672863518\\\\n\\",\\n        \\"saleTag\\": {\\n          \\"resourceIds\\": [\\n            \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n          ],\\n          \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n        },\\n        \\"subQuotaInfoList\\": [\\n          {\\n            \\"id\\": \\"1000048\\",\\n            \\"name\\": \\"subquotaA\\\\n\\",\\n            \\"nickName\\": \\"subquotaA\\\\n\\",\\n            \\"type\\": \\"FUXI_ONLINE\\\\n\\",\\n            \\"status\\": \\"ON\\",\\n            \\"tenantId\\": \\"280747109771520\\\\n\\",\\n            \\"regionId\\": \\"cn-beijing\\",\\n            \\"parentId\\": \\"0\\",\\n            \\"cluster\\": \\"AT-120N\\",\\n            \\"version\\": \\"1\\",\\n            \\"billingPolicy\\": {\\n              \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n              \\"orderId\\": \\"45245678\\\\n\\",\\n              \\"billingMethod\\": \\"subscription\\"\\n            },\\n            \\"scheduleInfo\\": {\\n              \\"currPlan\\": \\"planA\\",\\n              \\"currTime\\": \\"0800\\",\\n              \\"nextPlan\\": \\"planB\\",\\n              \\"nextTime\\": \\"1700\\",\\n              \\"oncePlan\\": \\"planC\\",\\n              \\"onceTime\\": \\"1500\\",\\n              \\"operatorName\\": \\"userA\\",\\n              \\"timezone\\": \\"UTC+8\\"\\n            },\\n            \\"parameter\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"tag\\": \\"abc\\",\\n            \\"createTime\\": 0,\\n            \\"creatorId\\": \\"672863518\\\\n\\",\\n            \\"saleTag\\": {\\n              \\"resourceIds\\": [\\n                \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n              ],\\n              \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n            }\\n          }\\n        ],\\n        \\"Tags\\": [\\n          {\\n            \\"TagValue\\": \\"a12351qHDP6YEQMt\\",\\n            \\"TagKey\\": \\"Department\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10,\\n    \\"NextToken\\": \\"\\\\\\"abcde\\\\\\"\\"\\n  },\\n  \\"NextToken\\": \\"AAAAAdDWBF2w6Olxc+cMPjUtUMo/CvPe4IK7f7kIQFrIZjyc\\"\\n}","type":"json"}]',
      'title' => '获取Quota列表',
      'summary' => '获取Quota列表。',
    ),
    'GetQuota' => 
    array (
      'path' => '/api/v1/quotas/{nickname}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota名称',
            'type' => 'string',
            'required' => true,
            'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p

#中文名称需要经过utf8 urlencode编码转义',
          ),
        ),
        1 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '520539530998273',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-chengdu',
          ),
        ),
        3 => 
        array (
          'name' => 'AkProven',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ak 换取凭证',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'mock',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否包含子模块。取值：-true：包含。-false（默认值）：不包含。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
            'title' => 'PopCompatibleResult<QuotaInfo>',
            'description' => 'PopCompatibleResult<QuotaInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'billingPolicy' => 
              array (
                'description' => '订单信息',
                'type' => 'object',
                'properties' => 
                array (
                  'billingMethod' => 
                  array (
                    'title' => '"PAYASYOUGO" 表示后付费',
                    'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                    'type' => 'string',
                    'example' => 'subscription
',
                  ),
                  'odpsSpecCode' => 
                  array (
                    'description' => '订单规格',
                    'type' => 'string',
                    'example' => 'OdpsStandard',
                  ),
                  'orderId' => 
                  array (
                    'description' => '订单id。',
                    'type' => 'string',
                    'example' => '45245678',
                  ),
                ),
              ),
              'saleTag' => 
              array (
                'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                'type' => 'object',
                'properties' => 
                array (
                  'resourceIds' => 
                  array (
                    'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                      'type' => 'string',
                      'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                    ),
                  ),
                  'resourceType' => 
                  array (
                    'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                    'type' => 'string',
                    'example' => '"quota"',
                  ),
                ),
              ),
              'cluster' => 
              array (
                'description' => '集群id。',
                'type' => 'string',
                'example' => 'AT-120N',
              ),
              'createTime' => 
              array (
                'description' => '资源的创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2022-09-06T02:14:44Z
',
              ),
              'creatorId' => 
              array (
                'description' => '资源创建者，云账号UID。',
                'type' => 'string',
                'example' => '672863518
',
              ),
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0b87b7a316654730544735643e9200',
              ),
              'id' => 
              array (
                'description' => 'quota ID',
                'type' => 'string',
                'example' => '0',
              ),
              'name' => 
              array (
                'description' => 'quota名称',
                'type' => 'string',
                'example' => 'quota_a
',
              ),
              'nickName' => 
              array (
                'description' => 'quota别名',
                'type' => 'string',
                'example' => 'quota_nickname',
              ),
              'parameter' => 
              array (
                'description' => 'quota的描述信息',
                'type' => 'object',
                'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
              ),
              'parentId' => 
              array (
                'description' => '父资源id。',
                'type' => 'string',
                'example' => 'null',
              ),
              'regionId' => 
              array (
                'description' => '地域id',
                'type' => 'string',
                'example' => 'cn-beijing',
              ),
              'scheduleInfo' => 
              array (
                'description' => '分时信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'currPlan' => 
                  array (
                    'description' => '按照调度计划生效的quota计划',
                    'type' => 'string',
                    'example' => 'planA',
                  ),
                  'currTime' => 
                  array (
                    'description' => 'currPlan被调度的时间',
                    'type' => 'string',
                    'example' => '0800',
                  ),
                  'nextPlan' => 
                  array (
                    'description' => '按照调度计划将要生效的quota计划',
                    'type' => 'string',
                    'example' => 'planB',
                  ),
                  'nextTime' => 
                  array (
                    'description' => 'next_plan被调度的时间',
                    'type' => 'string',
                    'example' => '1700',
                  ),
                  'oncePlan' => 
                  array (
                    'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                    'type' => 'string',
                    'example' => 'planC',
                  ),
                  'onceTime' => 
                  array (
                    'description' => '立即生效触发的时间',
                    'type' => 'string',
                    'example' => '1500',
                  ),
                  'operatorName' => 
                  array (
                    'description' => '操作人名称。',
                    'type' => 'string',
                    'example' => 'userA',
                  ),
                  'timezone' => 
                  array (
                    'description' => '时区',
                    'type' => 'string',
                    'example' => 'UTC+8',
                  ),
                ),
              ),
              'status' => 
              array (
                'description' => '资源状态',
                'type' => 'string',
                'example' => 'ON',
              ),
              'subQuotaInfoList' => 
              array (
                'description' => '二级quota信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'billingPolicy' => 
                    array (
                      'description' => '订单信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'billingMethod' => 
                        array (
                          'title' => '"PAYASYOUGO" 表示后付费',
                          'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                          'type' => 'string',
                          'example' => 'subscription',
                        ),
                        'odpsSpecCode' => 
                        array (
                          'description' => '订单规格',
                          'type' => 'string',
                          'example' => 'OdpsStandard
',
                        ),
                        'orderId' => 
                        array (
                          'description' => '订单id。',
                          'type' => 'string',
                          'example' => '45245678
',
                        ),
                      ),
                    ),
                    'saleTag' => 
                    array (
                      'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'resourceIds' => 
                        array (
                          'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                            'type' => 'string',
                            'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                          ),
                        ),
                        'resourceType' => 
                        array (
                          'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                          'type' => 'string',
                          'example' => '"quota"',
                        ),
                      ),
                    ),
                    'cluster' => 
                    array (
                      'description' => '集群id。',
                      'type' => 'string',
                      'example' => 'AT-120N
',
                    ),
                    'createTime' => 
                    array (
                      'description' => '资源创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2022-09-06T02:14:44Z
',
                    ),
                    'creatorId' => 
                    array (
                      'description' => '资源创建者，云账号UID。',
                      'type' => 'string',
                      'example' => '672863518
',
                    ),
                    'id' => 
                    array (
                      'description' => '二级quota ID',
                      'type' => 'string',
                      'example' => '1000048
',
                    ),
                    'name' => 
                    array (
                      'description' => '二级quota名称',
                      'type' => 'string',
                      'example' => 'subquotaA
',
                    ),
                    'nickName' => 
                    array (
                      'description' => '二级quota别名',
                      'type' => 'string',
                      'example' => 'subquotaA
',
                    ),
                    'parameter' => 
                    array (
                      'description' => 'quota的描述信息',
                      'type' => 'object',
                      'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
                    ),
                    'parentId' => 
                    array (
                      'description' => '父资源id。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'regionId' => 
                    array (
                      'description' => '地域id',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'scheduleInfo' => 
                    array (
                      'description' => '分时信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'currPlan' => 
                        array (
                          'description' => '按照调度计划生效的quota计划',
                          'type' => 'string',
                          'example' => 'planA',
                        ),
                        'currTime' => 
                        array (
                          'description' => 'currPlan被调度的时间',
                          'type' => 'string',
                          'example' => '0800',
                        ),
                        'nextPlan' => 
                        array (
                          'description' => '按照调度计划将要生效的quota计划',
                          'type' => 'string',
                          'example' => 'planB',
                        ),
                        'nextTime' => 
                        array (
                          'description' => 'next_plan被调度的时间',
                          'type' => 'string',
                          'example' => '1700',
                        ),
                        'oncePlan' => 
                        array (
                          'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                          'type' => 'string',
                          'example' => 'planC',
                        ),
                        'onceTime' => 
                        array (
                          'description' => '立即生效触发的时间',
                          'type' => 'string',
                          'example' => '1500',
                        ),
                        'operatorName' => 
                        array (
                          'description' => '操作人名称。',
                          'type' => 'string',
                          'example' => 'userA
',
                        ),
                        'timezone' => 
                        array (
                          'description' => '时区',
                          'type' => 'string',
                          'example' => 'UTC+8',
                        ),
                      ),
                    ),
                    'status' => 
                    array (
                      'description' => '资源状态',
                      'type' => 'string',
                      'example' => 'ON
',
                    ),
                    'tag' => 
                    array (
                      'description' => 'quota的资源标签',
                      'type' => 'string',
                      'example' => 'abc',
                    ),
                    'tenantId' => 
                    array (
                      'description' => '租户id。',
                      'type' => 'string',
                      'example' => '478403690625249',
                    ),
                    'type' => 
                    array (
                      'title' => '对应控制集群的resourceSystemType字段',
                      'description' => '对应控制集群的resourceSystemType字段',
                      'type' => 'string',
                      'example' => 'FUXI_ONLINE',
                    ),
                    'version' => 
                    array (
                      'description' => '版本号',
                      'type' => 'string',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'tag' => 
              array (
                'description' => 'quota的资源标签',
                'type' => 'string',
                'example' => 'abc',
              ),
              'tenantId' => 
              array (
                'description' => '租户id。',
                'type' => 'string',
                'example' => '478403690625249',
              ),
              'type' => 
              array (
                'title' => '对应控制集群的resourceSystemType字段',
                'description' => '对应控制集群的resourceSystemType字段',
                'type' => 'string',
                'example' => 'FUXI_ONLINE',
              ),
              'version' => 
              array (
                'description' => '版本号。',
                'type' => 'string',
                'example' => '1',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'id' => 
                  array (
                    'description' => 'quota ID',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'name' => 
                  array (
                    'description' => 'quota名称',
                    'type' => 'string',
                    'example' => 'quota_a',
                  ),
                  'nickName' => 
                  array (
                    'description' => 'Quota别名',
                    'type' => 'string',
                    'example' => 'quota_nickname',
                  ),
                  'type' => 
                  array (
                    'title' => '对应控制集群的resourceSystemType字段',
                    'description' => '对应控制集群的resourceSystemType字段',
                    'type' => 'string',
                    'example' => 'FUXI_ONLINE',
                  ),
                  'status' => 
                  array (
                    'description' => '资源状态',
                    'type' => 'string',
                    'example' => 'ON',
                  ),
                  'saleTag' => 
                  array (
                    'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'resourceIds' => 
                      array (
                        'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                          'type' => 'string',
                          'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                        ),
                      ),
                      'resourceType' => 
                      array (
                        'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                        'type' => 'string',
                        'example' => '"quota"
',
                      ),
                    ),
                  ),
                  'tenantId' => 
                  array (
                    'description' => '租户id。',
                    'type' => 'string',
                    'example' => '478403690625249',
                  ),
                  'regionId' => 
                  array (
                    'description' => '地域id',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'parentId' => 
                  array (
                    'description' => '父资源id。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'cluster' => 
                  array (
                    'description' => '集群id。',
                    'type' => 'string',
                    'example' => 'AT-120N',
                  ),
                  'version' => 
                  array (
                    'description' => '版本号',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'billingPolicy' => 
                  array (
                    'description' => '订单信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'odpsSpecCode' => 
                      array (
                        'description' => '订单规格',
                        'type' => 'string',
                        'example' => 'OdpsStandard',
                      ),
                      'orderId' => 
                      array (
                        'description' => '订单id。',
                        'type' => 'string',
                        'example' => '45245678',
                      ),
                      'billingMethod' => 
                      array (
                        'title' => '"PAYASYOUGO" 表示后付费',
                        'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                        'type' => 'string',
                        'example' => 'subscription',
                      ),
                    ),
                  ),
                  'scheduleInfo' => 
                  array (
                    'description' => '分时信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'currPlan' => 
                      array (
                        'description' => '按照调度计划生效的quota计划',
                        'type' => 'string',
                        'example' => 'planA',
                      ),
                      'currTime' => 
                      array (
                        'description' => 'currPlan被调度的时间',
                        'type' => 'string',
                        'example' => '0800',
                      ),
                      'nextPlan' => 
                      array (
                        'description' => '按照调度计划将要生效的quota计划',
                        'type' => 'string',
                        'example' => 'planB',
                      ),
                      'nextTime' => 
                      array (
                        'description' => 'next_plan被调度的时间',
                        'type' => 'string',
                        'example' => '1700',
                      ),
                      'oncePlan' => 
                      array (
                        'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                        'type' => 'string',
                        'example' => 'planC',
                      ),
                      'onceTime' => 
                      array (
                        'description' => '立即生效触发的时间',
                        'type' => 'string',
                        'example' => '1500',
                      ),
                      'operatorName' => 
                      array (
                        'description' => '操作人名称。',
                        'type' => 'string',
                        'example' => 'userA',
                      ),
                      'timezone' => 
                      array (
                        'description' => '时区',
                        'type' => 'string',
                        'example' => 'UTC+8',
                      ),
                    ),
                  ),
                  'parameter' => 
                  array (
                    'description' => 'quota的描述信息',
                    'type' => 'object',
                    'example' => '{"minCU":10,	
"adhocCU":0,
"maxCU":10,
"schedulerType":"Fair",
}',
                  ),
                  'tag' => 
                  array (
                    'description' => 'quota的资源标签',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'createTime' => 
                  array (
                    'description' => '资源创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2022-09-06T02:14:44Z',
                  ),
                  'creatorId' => 
                  array (
                    'description' => '资源创建者，云账号UID。',
                    'type' => 'string',
                    'example' => '672863518',
                  ),
                  'subQuotaInfoList' => 
                  array (
                    'description' => '二级quota信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'id' => 
                        array (
                          'description' => '二级quota ID',
                          'type' => 'string',
                          'example' => '1000048',
                        ),
                        'name' => 
                        array (
                          'description' => '二级quota名称',
                          'type' => 'string',
                          'example' => 'subquotaA',
                        ),
                        'saleTag' => 
                        array (
                          'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'resourceIds' => 
                            array (
                              'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'maxcompute quota 对象的标识，这个标识在阿里云售卖子系统内也存在。通过这个标识，可以把quota 对象的费用都关联到某个标签上。',
                                'type' => 'string',
                                'example' => '"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd"
',
                              ),
                            ),
                            'resourceType' => 
                            array (
                              'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                              'type' => 'string',
                              'example' => '"quota"
',
                            ),
                          ),
                        ),
                        'nickName' => 
                        array (
                          'description' => '二级quota昵称',
                          'type' => 'string',
                          'example' => 'subquotaA',
                        ),
                        'type' => 
                        array (
                          'title' => '对应控制集群的resourceSystemType字段',
                          'description' => '对应控制集群的resourceSystemType字段',
                          'type' => 'string',
                          'example' => 'FUXI_ONLINE',
                        ),
                        'status' => 
                        array (
                          'description' => '资源状态',
                          'type' => 'string',
                          'example' => 'ON',
                        ),
                        'tenantId' => 
                        array (
                          'description' => '租户id。',
                          'type' => 'string',
                          'example' => '478403690625249
',
                        ),
                        'regionId' => 
                        array (
                          'description' => '地域id。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
                        ),
                        'parentId' => 
                        array (
                          'description' => '父资源id。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'cluster' => 
                        array (
                          'description' => '集群id',
                          'type' => 'string',
                          'example' => 'AT-120N
',
                        ),
                        'version' => 
                        array (
                          'description' => '版本号。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'billingPolicy' => 
                        array (
                          'description' => '订单信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'odpsSpecCode' => 
                            array (
                              'description' => '订单规格',
                              'type' => 'string',
                              'example' => 'OdpsStandard',
                            ),
                            'orderId' => 
                            array (
                              'description' => '订单id。',
                              'type' => 'string',
                              'example' => '45245678',
                            ),
                            'billingMethod' => 
                            array (
                              'title' => '"PAYASYOUGO" 表示后付费',
                              'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                              'type' => 'string',
                              'example' => 'subscription',
                            ),
                          ),
                        ),
                        'scheduleInfo' => 
                        array (
                          'description' => '分时信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'currPlan' => 
                            array (
                              'description' => '按照调度计划生效的quota计划',
                              'type' => 'string',
                              'example' => 'planA',
                            ),
                            'currTime' => 
                            array (
                              'description' => 'currPlan被调度的时间',
                              'type' => 'string',
                              'example' => '0800',
                            ),
                            'nextPlan' => 
                            array (
                              'description' => '按照调度计划将要生效的quota计划',
                              'type' => 'string',
                              'example' => 'planB',
                            ),
                            'nextTime' => 
                            array (
                              'description' => 'next_plan被调度的时间',
                              'type' => 'string',
                              'example' => '1700',
                            ),
                            'oncePlan' => 
                            array (
                              'description' => '立即生效的quota计划。
如果用户触发了立即生效且不同于curr_plan，那么非空。',
                              'type' => 'string',
                              'example' => 'planC',
                            ),
                            'onceTime' => 
                            array (
                              'description' => '立即生效触发的时间',
                              'type' => 'string',
                              'example' => '1500',
                            ),
                            'operatorName' => 
                            array (
                              'description' => '操作人名称。',
                              'type' => 'string',
                              'example' => 'userA',
                            ),
                            'timezone' => 
                            array (
                              'description' => '时区',
                              'type' => 'string',
                              'example' => 'UTC+8',
                            ),
                          ),
                        ),
                        'parameter' => 
                        array (
                          'description' => 'quota的描述信息',
                          'type' => 'object',
                        ),
                        'tag' => 
                        array (
                          'description' => 'quota的资源标签',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'createTime' => 
                        array (
                          'description' => '资源创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2022-09-06T02:14:44Z
',
                        ),
                        'creatorId' => 
                        array (
                          'description' => '资源创建者，云账号UID。',
                          'type' => 'string',
                          'example' => '672863518',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"billingPolicy\\": {\\n    \\"billingMethod\\": \\"subscription\\\\n\\",\\n    \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n    \\"orderId\\": \\"45245678\\"\\n  },\\n  \\"saleTag\\": {\\n    \\"resourceIds\\": [\\n      \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n    ],\\n    \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\"\\n  },\\n  \\"cluster\\": \\"AT-120N\\",\\n  \\"createTime\\": 0,\\n  \\"creatorId\\": \\"672863518\\\\n\\",\\n  \\"requestId\\": \\"0b87b7a316654730544735643e9200\\",\\n  \\"id\\": \\"0\\",\\n  \\"name\\": \\"quota_a\\\\n\\",\\n  \\"nickName\\": \\"quota_nickname\\",\\n  \\"parameter\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"parentId\\": \\"null\\",\\n  \\"regionId\\": \\"cn-beijing\\",\\n  \\"scheduleInfo\\": {\\n    \\"currPlan\\": \\"planA\\",\\n    \\"currTime\\": \\"0800\\",\\n    \\"nextPlan\\": \\"planB\\",\\n    \\"nextTime\\": \\"1700\\",\\n    \\"oncePlan\\": \\"planC\\",\\n    \\"onceTime\\": \\"1500\\",\\n    \\"operatorName\\": \\"userA\\",\\n    \\"timezone\\": \\"UTC+8\\"\\n  },\\n  \\"status\\": \\"ON\\",\\n  \\"subQuotaInfoList\\": [\\n    {\\n      \\"billingPolicy\\": {\\n        \\"billingMethod\\": \\"subscription\\",\\n        \\"odpsSpecCode\\": \\"OdpsStandard\\\\n\\",\\n        \\"orderId\\": \\"45245678\\\\n\\"\\n      },\\n      \\"saleTag\\": {\\n        \\"resourceIds\\": [\\n          \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n        ],\\n        \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\"\\n      },\\n      \\"cluster\\": \\"AT-120N\\\\n\\",\\n      \\"createTime\\": 0,\\n      \\"creatorId\\": \\"672863518\\\\n\\",\\n      \\"id\\": \\"1000048\\\\n\\",\\n      \\"name\\": \\"subquotaA\\\\n\\",\\n      \\"nickName\\": \\"subquotaA\\\\n\\",\\n      \\"parameter\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"parentId\\": \\"0\\",\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"scheduleInfo\\": {\\n        \\"currPlan\\": \\"planA\\",\\n        \\"currTime\\": \\"0800\\",\\n        \\"nextPlan\\": \\"planB\\",\\n        \\"nextTime\\": \\"1700\\",\\n        \\"oncePlan\\": \\"planC\\",\\n        \\"onceTime\\": \\"1500\\",\\n        \\"operatorName\\": \\"userA\\\\n\\",\\n        \\"timezone\\": \\"UTC+8\\"\\n      },\\n      \\"status\\": \\"ON\\\\n\\",\\n      \\"tag\\": \\"abc\\",\\n      \\"tenantId\\": \\"478403690625249\\",\\n      \\"type\\": \\"FUXI_ONLINE\\",\\n      \\"version\\": \\"1\\"\\n    }\\n  ],\\n  \\"tag\\": \\"abc\\",\\n  \\"tenantId\\": \\"478403690625249\\",\\n  \\"type\\": \\"FUXI_ONLINE\\",\\n  \\"version\\": \\"1\\",\\n  \\"data\\": {\\n    \\"id\\": \\"0\\",\\n    \\"name\\": \\"quota_a\\",\\n    \\"nickName\\": \\"quota_nickname\\",\\n    \\"type\\": \\"FUXI_ONLINE\\",\\n    \\"status\\": \\"ON\\",\\n    \\"saleTag\\": {\\n      \\"resourceIds\\": [\\n        \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n      ],\\n      \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n    },\\n    \\"tenantId\\": \\"478403690625249\\",\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"parentId\\": \\"null\\",\\n    \\"cluster\\": \\"AT-120N\\",\\n    \\"version\\": \\"1\\",\\n    \\"billingPolicy\\": {\\n      \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n      \\"orderId\\": \\"45245678\\",\\n      \\"billingMethod\\": \\"subscription\\"\\n    },\\n    \\"scheduleInfo\\": {\\n      \\"currPlan\\": \\"planA\\",\\n      \\"currTime\\": \\"0800\\",\\n      \\"nextPlan\\": \\"planB\\",\\n      \\"nextTime\\": \\"1700\\",\\n      \\"oncePlan\\": \\"planC\\",\\n      \\"onceTime\\": \\"1500\\",\\n      \\"operatorName\\": \\"userA\\",\\n      \\"timezone\\": \\"UTC+8\\"\\n    },\\n    \\"parameter\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"tag\\": \\"abc\\",\\n    \\"createTime\\": 0,\\n    \\"creatorId\\": \\"672863518\\",\\n    \\"subQuotaInfoList\\": [\\n      {\\n        \\"id\\": \\"1000048\\",\\n        \\"name\\": \\"subquotaA\\",\\n        \\"saleTag\\": {\\n          \\"resourceIds\\": [\\n            \\"\\\\\\"aaaaaaa-bbbb-4fd0-a8eb-50861590f7dd\\\\\\"\\\\n\\"\\n          ],\\n          \\"resourceType\\": \\"\\\\\\"quota\\\\\\"\\\\n\\"\\n        },\\n        \\"nickName\\": \\"subquotaA\\",\\n        \\"type\\": \\"FUXI_ONLINE\\",\\n        \\"status\\": \\"ON\\",\\n        \\"tenantId\\": \\"478403690625249\\\\n\\",\\n        \\"regionId\\": \\"cn-beijing\\",\\n        \\"parentId\\": \\"0\\",\\n        \\"cluster\\": \\"AT-120N\\\\n\\",\\n        \\"version\\": \\"1\\",\\n        \\"billingPolicy\\": {\\n          \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n          \\"orderId\\": \\"45245678\\",\\n          \\"billingMethod\\": \\"subscription\\"\\n        },\\n        \\"scheduleInfo\\": {\\n          \\"currPlan\\": \\"planA\\",\\n          \\"currTime\\": \\"0800\\",\\n          \\"nextPlan\\": \\"planB\\",\\n          \\"nextTime\\": \\"1700\\",\\n          \\"oncePlan\\": \\"planC\\",\\n          \\"onceTime\\": \\"1500\\",\\n          \\"operatorName\\": \\"userA\\",\\n          \\"timezone\\": \\"UTC+8\\"\\n        },\\n        \\"parameter\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"tag\\": \\"abc\\",\\n        \\"createTime\\": 0,\\n        \\"creatorId\\": \\"672863518\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取指定一级Quota组信息',
      'summary' => '获取指定一级Quota组信息。',
    ),
    'UpdateQuota' => 
    array (
      'path' => '/api/v1/quotas/{nickname}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '196871833188896',
          ),
        ),
        1 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'AkProven',
          'in' => 'header',
          'schema' => 
          array (
            'description' => 'ak 换取凭证',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
            'default' => '',
          ),
        ),
        3 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配额名称',
            'type' => 'string',
            'required' => true,
            'example' => 'quota_a',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "id": "0",
      "name": "a",
      "nickName": "VIRTUAL",
      "type": "",
      "status": "ON",
      "tenantId": "10001",
      "regionId": "cn-hangzhou",
      "parentId": "0",
      "cluster": "AT-ODPS-TEST3",
      "version": "",
      "billingPolicy": {
            "odpsSpecCode": "",
            "billingMethod": "subscription"
      },
      "parameter": {
            "minCU": 40,
            "maxCU": 40,
            "adhocCU": 0, //弹性预留CU
            "elasticMinCU": 40, //非预留CU
            "elasticMaxCU": 40,
            "enablePreemptiveScheduling": false,
            "forceReservedMin": true,
            "enablePriority": false,
            "singleJobCULimit": 100,
            "adhocQuotaBeginTimeInSec": 1345,
            "adhocQuotaEndTimeInSec": 1234,
            "ignoreAdhocQuota": false
      },
      "subQuotaInfoList": [
            {
                  "id": "1000048",
                  "nickName": "WlmFuxiSecondaryOnlineQuotaTest",
                  "name": "WlmFuxiSecondaryOnlineQuotaTest",
                  "type": "FUXI_ONLINE",
                  "status": "ON",
                  "tenantId": "10001",
                  "regionId": "cn-hangzhou",
                  "parentId": "0",
                  "cluster": "AT-ODPS-TEST3",
                  "version": "",
                  "billingPolicy": {
                        "odpsSpecCode": "",
                        "billingMethod": "subscription"
                  },
                  "parameter": {
                        "minCU": 40,
                        "maxCU": 40,
                        "adhocCU": 0, //弹性预留CU
                        "elasticMinCU": 40, //非预留CU
                        "elasticMaxCU": 40,
                        "enablePreemptiveScheduling": false,
                        "forceReservedMin": true,
                        "enablePriority": false,
                        "singleJobCULimit": 100,
                        "adhocQuotaBeginTimeInSec": 1345,
                        "adhocQuotaEndTimeInSec": 1234,
                        "ignoreAdhocQuota": false
                  }
            }
      ]
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc12e6a16679892465424670db3eb',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc12e6a16679892465424670db3eb\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '更新配额信息',
      'summary' => '更新MaxCompute配额信息。',
    ),
    'ListQuotasPlans' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/plans',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota名称',
            'type' => 'string',
            'required' => true,
            'example' => 'quotaA',
          ),
        ),
        1 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '478403690625249',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListQuotaPlansDTO>',
            'description' => 'PopResult<ListQuotaPlansDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0be3e0bd16661643917136451ebf55',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'planList' => 
                  array (
                    'description' => 'Quota计划列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => 'Quota计划名称',
                          'type' => 'string',
                          'example' => 'planA',
                        ),
                        'createTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2022-05-16T06:07:45Z
',
                        ),
                        'quota' => 
                        array (
                          'description' => 'quota详情',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'id' => 
                            array (
                              'description' => 'quota ID',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'name' => 
                            array (
                              'description' => 'quota名称',
                              'type' => 'string',
                              'example' => 'quota_a',
                            ),
                            'nickName' => 
                            array (
                              'description' => 'quota别名',
                              'type' => 'string',
                              'example' => 'quota_nickname',
                            ),
                            'type' => 
                            array (
                              'title' => '对应控制集群的resourceSystemType字段',
                              'description' => '对应控制集群的resourceSystemType字段',
                              'type' => 'string',
                              'example' => 'FUXI_ONLINE',
                            ),
                            'status' => 
                            array (
                              'description' => '资源状态',
                              'type' => 'string',
                              'example' => 'ON',
                            ),
                            'tenantId' => 
                            array (
                              'description' => '租户id。',
                              'type' => 'string',
                              'example' => '478403690625249',
                            ),
                            'regionId' => 
                            array (
                              'description' => '地域id。',
                              'type' => 'string',
                              'example' => 'cn-beijing',
                            ),
                            'parentId' => 
                            array (
                              'description' => '父资源id。',
                              'type' => 'string',
                              'example' => 'null',
                            ),
                            'cluster' => 
                            array (
                              'description' => '集群id',
                              'type' => 'string',
                              'example' => 'AT-120N
',
                            ),
                            'version' => 
                            array (
                              'description' => '版本。',
                              'type' => 'string',
                              'example' => '1',
                            ),
                            'billingPolicy' => 
                            array (
                              'description' => '订单信息',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'odpsSpecCode' => 
                                array (
                                  'description' => '订单规格',
                                  'type' => 'string',
                                  'example' => 'OdpsStandard ',
                                ),
                                'orderId' => 
                                array (
                                  'description' => '订单id。',
                                  'type' => 'string',
                                  'example' => '45245678',
                                ),
                                'billingMethod' => 
                                array (
                                  'title' => '"PAYASYOUGO" 表示后付费',
                                  'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                                  'type' => 'string',
                                  'example' => 'subscription',
                                ),
                              ),
                            ),
                            'scheduleInfo' => 
                            array (
                              'description' => '分时信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'currPlan' => 
                                array (
                                  'description' => '按照调度计划生效的quota计划',
                                  'type' => 'string',
                                  'example' => 'planA',
                                ),
                                'currTime' => 
                                array (
                                  'description' => 'currPlan被调度的时间',
                                  'type' => 'string',
                                  'example' => '0800
',
                                ),
                                'nextPlan' => 
                                array (
                                  'description' => '按照调度计划将要生效的quota计划',
                                  'type' => 'string',
                                  'example' => 'planB',
                                ),
                                'nextTime' => 
                                array (
                                  'description' => 'next_plan被调度的时间',
                                  'type' => 'string',
                                  'example' => '1700',
                                ),
                                'oncePlan' => 
                                array (
                                  'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                  'type' => 'string',
                                  'example' => 'planC',
                                ),
                                'onceTime' => 
                                array (
                                  'description' => '立即生效触发的时间',
                                  'type' => 'string',
                                  'example' => '1500',
                                ),
                                'operatorName' => 
                                array (
                                  'description' => '操作者名称。',
                                  'type' => 'string',
                                  'example' => 'userA',
                                ),
                              ),
                            ),
                            'parameter' => 
                            array (
                              'description' => 'quota的描述信息',
                              'type' => 'object',
                            ),
                            'tag' => 
                            array (
                              'description' => 'quota的资源标签',
                              'type' => 'string',
                              'example' => 'abc',
                            ),
                            'createTime' => 
                            array (
                              'description' => '创建时间。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2022-09-06T02:14:44Z
',
                            ),
                            'creatorId' => 
                            array (
                              'description' => '资源创建者，云账号UID。',
                              'type' => 'string',
                              'example' => '672863518',
                            ),
                            'subQuotaInfoList' => 
                            array (
                              'description' => '二级quota信息',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '二级quota信息',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'id' => 
                                  array (
                                    'description' => '二级quota ID',
                                    'type' => 'string',
                                    'example' => '1000048',
                                  ),
                                  'name' => 
                                  array (
                                    'description' => '二级quota名称',
                                    'type' => 'string',
                                    'example' => 'subquotaA',
                                  ),
                                  'nickName' => 
                                  array (
                                    'description' => '二级quota昵称',
                                    'type' => 'string',
                                    'example' => 'subquotaA',
                                  ),
                                  'type' => 
                                  array (
                                    'title' => '对应控制集群的resourceSystemType字段',
                                    'description' => '对应控制集群的resourceSystemType字段',
                                    'type' => 'string',
                                    'example' => 'FUXI_ONLINE',
                                  ),
                                  'status' => 
                                  array (
                                    'description' => '资源状态',
                                    'type' => 'string',
                                    'example' => 'ON',
                                  ),
                                  'tenantId' => 
                                  array (
                                    'description' => '租户id。',
                                    'type' => 'string',
                                    'example' => '478403690625249',
                                  ),
                                  'regionId' => 
                                  array (
                                    'description' => '地域id。',
                                    'type' => 'string',
                                    'example' => 'cn-beijing',
                                  ),
                                  'parentId' => 
                                  array (
                                    'description' => '父资源id。',
                                    'type' => 'string',
                                    'example' => '0',
                                  ),
                                  'cluster' => 
                                  array (
                                    'description' => '集群id',
                                    'type' => 'string',
                                    'example' => 'AT-120N
',
                                  ),
                                  'version' => 
                                  array (
                                    'description' => '版本号',
                                    'type' => 'string',
                                    'example' => '1',
                                  ),
                                  'billingPolicy' => 
                                  array (
                                    'description' => '订单信息',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'odpsSpecCode' => 
                                      array (
                                        'description' => '订单规格',
                                        'type' => 'string',
                                        'example' => 'OdpsStandard ',
                                      ),
                                      'orderId' => 
                                      array (
                                        'description' => '订单ID',
                                        'type' => 'string',
                                        'example' => '45245678',
                                      ),
                                      'billingMethod' => 
                                      array (
                                        'title' => '"PAYASYOUGO" 表示后付费',
                                        'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                                        'type' => 'string',
                                        'example' => 'subscription
',
                                      ),
                                    ),
                                  ),
                                  'scheduleInfo' => 
                                  array (
                                    'description' => '分时信息',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'currPlan' => 
                                      array (
                                        'description' => '按照调度计划生效的quota计划',
                                        'type' => 'string',
                                        'example' => 'planA',
                                      ),
                                      'currTime' => 
                                      array (
                                        'description' => 'currPlan被调度的时间',
                                        'type' => 'string',
                                        'example' => '0800',
                                      ),
                                      'nextPlan' => 
                                      array (
                                        'description' => '按照调度计划将要生效的quota计划',
                                        'type' => 'string',
                                        'example' => 'planB',
                                      ),
                                      'nextTime' => 
                                      array (
                                        'description' => 'next_plan被调度的时间',
                                        'type' => 'string',
                                        'example' => '1700',
                                      ),
                                      'oncePlan' => 
                                      array (
                                        'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                        'type' => 'string',
                                        'example' => 'planC',
                                      ),
                                      'onceTime' => 
                                      array (
                                        'description' => '立即生效触发的时间',
                                        'type' => 'string',
                                        'example' => '1500',
                                      ),
                                      'operatorName' => 
                                      array (
                                        'description' => '操作者名称。',
                                        'type' => 'string',
                                        'example' => 'userA',
                                      ),
                                    ),
                                  ),
                                  'parameter' => 
                                  array (
                                    'description' => 'quota的描述信息',
                                    'type' => 'object',
                                  ),
                                  'tag' => 
                                  array (
                                    'description' => 'quota的资源标签',
                                    'type' => 'string',
                                    'example' => 'abc',
                                  ),
                                  'createTime' => 
                                  array (
                                    'description' => '创建时间。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '2022-09-06T02:14:44Z
',
                                  ),
                                  'creatorId' => 
                                  array (
                                    'description' => '资源创建者，云账号UID。',
                                    'type' => 'string',
                                    'example' => '672863518',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0bd16661643917136451ebf55\\",\\n  \\"data\\": {\\n    \\"planList\\": [\\n      {\\n        \\"name\\": \\"planA\\",\\n        \\"createTime\\": \\"2022-05-16T06:07:45Z\\\\n\\",\\n        \\"quota\\": {\\n          \\"id\\": \\"0\\",\\n          \\"name\\": \\"quota_a\\",\\n          \\"nickName\\": \\"quota_nickname\\",\\n          \\"type\\": \\"FUXI_ONLINE\\",\\n          \\"status\\": \\"ON\\",\\n          \\"tenantId\\": \\"478403690625249\\",\\n          \\"regionId\\": \\"cn-beijing\\",\\n          \\"parentId\\": \\"null\\",\\n          \\"cluster\\": \\"AT-120N\\\\n\\",\\n          \\"version\\": \\"1\\",\\n          \\"billingPolicy\\": {\\n            \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n            \\"orderId\\": \\"45245678\\",\\n            \\"billingMethod\\": \\"subscription\\"\\n          },\\n          \\"scheduleInfo\\": {\\n            \\"currPlan\\": \\"planA\\",\\n            \\"currTime\\": \\"0800\\\\n\\",\\n            \\"nextPlan\\": \\"planB\\",\\n            \\"nextTime\\": \\"1700\\",\\n            \\"oncePlan\\": \\"planC\\",\\n            \\"onceTime\\": \\"1500\\",\\n            \\"operatorName\\": \\"userA\\"\\n          },\\n          \\"parameter\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"tag\\": \\"abc\\",\\n          \\"createTime\\": 0,\\n          \\"creatorId\\": \\"672863518\\",\\n          \\"subQuotaInfoList\\": [\\n            {\\n              \\"id\\": \\"1000048\\",\\n              \\"name\\": \\"subquotaA\\",\\n              \\"nickName\\": \\"subquotaA\\",\\n              \\"type\\": \\"FUXI_ONLINE\\",\\n              \\"status\\": \\"ON\\",\\n              \\"tenantId\\": \\"478403690625249\\",\\n              \\"regionId\\": \\"cn-beijing\\",\\n              \\"parentId\\": \\"0\\",\\n              \\"cluster\\": \\"AT-120N\\\\n\\",\\n              \\"version\\": \\"1\\",\\n              \\"billingPolicy\\": {\\n                \\"odpsSpecCode\\": \\"OdpsStandard \\",\\n                \\"orderId\\": \\"45245678\\",\\n                \\"billingMethod\\": \\"subscription\\\\n\\"\\n              },\\n              \\"scheduleInfo\\": {\\n                \\"currPlan\\": \\"planA\\",\\n                \\"currTime\\": \\"0800\\",\\n                \\"nextPlan\\": \\"planB\\",\\n                \\"nextTime\\": \\"1700\\",\\n                \\"oncePlan\\": \\"planC\\",\\n                \\"onceTime\\": \\"1500\\",\\n                \\"operatorName\\": \\"userA\\"\\n              },\\n              \\"parameter\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"tag\\": \\"abc\\",\\n              \\"createTime\\": 0,\\n              \\"creatorId\\": \\"672863518\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取Quota计划列表',
      'summary' => '获取Quota计划列表。',
    ),
    'CreateQuotaPlan' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/plans',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'QuotaNickName',
            'type' => 'string',
            'required' => true,
            'example' => 'planA',
          ),
        ),
        1 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id。',
            'type' => 'string',
            'required' => false,
            'example' => '228451885265153',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "name": "planA",
  // 以下为一个一级 quota，可以只选取跟 plan 相关的字段
  "quota": {
    "name": "a",
    "nickName": "aaa_nick",
    "tenantId": "10001",
    "regionId": "cn-hangzhou",
    "parentId": "0",
    "cluster": "AT-ODPS-TEST3",
    "parameter": {
        "minCU": 40,
        "maxCU": 40,
        "adhocCU": 0,
        "elasticMinCU": 40,
        "elasticMaxCU": 40,
        "enablePreemptiveScheduling": false,
        "forceReservedMin":true,
        "enablePriority":false,
        "singleJobCULimit":100,
        "adhocQuotaBeginTimeInSec": 1345,
        "adhocQuotaEndTimeInSec": 1234,
        "ignoreAdhocQuota":false
    },
    "subQuotaInfoList":
  [ 
        {
            "nickName": "WlmFuxiSecondaryOnlineQuotaTest",
            "name": "WlmFuxiSecondaryOnlineQuotaTest",
            "type": "FUXI_ONLINE",
            "tenantId": "10001",
            "regionId": "cn-hangzhou",
            "cluster": "AT-ODPS-TEST3",
            "parameter": {
                "minCU": 40,
                "maxCU": 40,
                "adhocCU": 0,
                "elasticMinCU": 40,
                "elasticMaxCU": 40,
                "enablePreemptiveScheduling": false,
                "forceReservedMin":true,
                "enablePriority":false,
                "singleJobCULimit":100,
                "adhocQuotaBeginTimeInSec": 1345,
                "adhocQuotaEndTimeInSec": 1234,
                "ignoreAdhocQuota":false
            }
        }
    ]
  }
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc3b4b016674434996033675e71ee',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4b016674434996033675e71ee\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建Quota计划',
      'summary' => '新增Quota计划。',
    ),
    'UpdateQuotaPlan' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/plans/{planName}',
      'methods' => 
      array (
        0 => 'put',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota名称',
            'type' => 'string',
            'required' => true,
            'example' => 'quotaA',
          ),
        ),
        1 => 
        array (
          'name' => 'planName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota计划名称',
            'type' => 'string',
            'required' => true,
            'example' => 'planA',
          ),
        ),
        2 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id。',
            'type' => 'string',
            'required' => false,
            'example' => '478403690625249',
          ),
        ),
        3 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "name": "planA",
  // 以下为一个一级 quota，可以只选取跟 plan 相关的字段
  "quota": {
    "name": "a",
    "nickName": "aaa_nick",
    "tenantId": "10001",
    "regionId": "cn-hangzhou",
    "parentId": "0",
    "cluster": "AT-ODPS-TEST3",
    "parameter": {
        "minCU": 40,
        "maxCU": 40,
        "adhocCU": 0,
        "elasticMinCU": 40,
        "elasticMaxCU": 40,
        "enablePreemptiveScheduling": false,
        "forceReservedMin":true,
        "enablePriority":false,
        "singleJobCULimit":100,
        "adhocQuotaBeginTimeInSec": 1345,
        "adhocQuotaEndTimeInSec": 1234,
        "ignoreAdhocQuota":false
    },
    "subQuotaInfoList":
  [ 
        {
            "nickName": "WlmFuxiSecondaryOnlineQuotaTest",
            "name": "WlmFuxiSecondaryOnlineQuotaTest",
            "type": "FUXI_ONLINE",
            "tenantId": "10001",
            "regionId": "cn-hangzhou",
            "cluster": "AT-ODPS-TEST3",
            "parameter": {
                "minCU": 40,
                "maxCU": 40,
                "adhocCU": 0,
                "elasticMinCU": 40,
                "elasticMaxCU": 40,
                "enablePreemptiveScheduling": false,
                "forceReservedMin":true,
                "enablePriority":false,
                "singleJobCULimit":100,
                "adhocQuotaBeginTimeInSec": 1345,
                "adhocQuotaEndTimeInSec": 1234,
                "ignoreAdhocQuota":false
            }
        }
    ]
  }
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0a06dfe516688379832875789e2c65',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dfe516688379832875789e2c65\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '更新Quota计划',
      'summary' => '更新Quota计划。',
    ),
    'GetQuotaPlan' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/plans/{planName}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota名称',
            'type' => 'string',
            'required' => true,
            'example' => 'quotaA',
          ),
        ),
        1 => 
        array (
          'name' => 'planName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota计划名称',
            'type' => 'string',
            'required' => true,
            'example' => 'planA',
          ),
        ),
        2 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id。',
            'type' => 'string',
            'required' => false,
            'example' => '483212237127906',
          ),
        ),
        3 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<QuotaPlanDTO>',
            'description' => 'PopResult<QuotaPlanDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0be3e0aa16667684362147582e038f',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'description' => 'quota计划名称',
                    'type' => 'string',
                    'example' => 'planA',
                  ),
                  'createTime' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2022-05-16T06:07:45Z',
                  ),
                  'quota' => 
                  array (
                    'description' => 'quota详情',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'id' => 
                      array (
                        'description' => 'quota ID',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'name' => 
                      array (
                        'description' => 'quota名称',
                        'type' => 'string',
                        'example' => 'quota_a
',
                      ),
                      'nickName' => 
                      array (
                        'description' => 'quota别名',
                        'type' => 'string',
                        'example' => 'quota_nickname',
                      ),
                      'type' => 
                      array (
                        'title' => '对应控制集群的resourceSystemType字段',
                        'description' => '对应控制集群的resourceSystemType字段',
                        'type' => 'string',
                        'example' => 'FUXI_ONLINE',
                      ),
                      'status' => 
                      array (
                        'description' => '资源状态',
                        'type' => 'string',
                        'example' => 'ON',
                      ),
                      'tenantId' => 
                      array (
                        'description' => '租户id。',
                        'type' => 'string',
                        'example' => '478403690625249',
                      ),
                      'regionId' => 
                      array (
                        'description' => '地域id。',
                        'type' => 'string',
                        'example' => 'cn-beijing',
                      ),
                      'parentId' => 
                      array (
                        'description' => '父资源id。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'cluster' => 
                      array (
                        'description' => '集群id。',
                        'type' => 'string',
                        'example' => 'AT-120N
',
                      ),
                      'version' => 
                      array (
                        'description' => '版本号。',
                        'type' => 'string',
                        'example' => '1',
                      ),
                      'billingPolicy' => 
                      array (
                        'description' => '订单信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'odpsSpecCode' => 
                          array (
                            'description' => '订单规格',
                            'type' => 'string',
                            'example' => 'OdpsStandard',
                          ),
                          'orderId' => 
                          array (
                            'description' => '订单号。',
                            'type' => 'string',
                            'example' => '45245678',
                          ),
                          'billingMethod' => 
                          array (
                            'title' => '"PAYASYOUGO" 表示后付费',
                            'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                            'type' => 'string',
                            'example' => 'subscription',
                          ),
                        ),
                      ),
                      'scheduleInfo' => 
                      array (
                        'description' => '分时信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'currPlan' => 
                          array (
                            'description' => '按照调度计划生效的quota计划',
                            'type' => 'string',
                            'example' => 'planA',
                          ),
                          'currTime' => 
                          array (
                            'description' => 'currPlan被调度的时间',
                            'type' => 'string',
                            'example' => '0800',
                          ),
                          'nextPlan' => 
                          array (
                            'description' => '按照调度计划将要生效的quota plan',
                            'type' => 'string',
                            'example' => 'planB',
                          ),
                          'nextTime' => 
                          array (
                            'description' => 'next_plan被调度的时间',
                            'type' => 'string',
                            'example' => '1700',
                          ),
                          'oncePlan' => 
                          array (
                            'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                            'type' => 'string',
                            'example' => 'planC',
                          ),
                          'onceTime' => 
                          array (
                            'description' => '立即生效触发的时间',
                            'type' => 'string',
                            'example' => '1500',
                          ),
                          'operatorName' => 
                          array (
                            'description' => '操作者名称。',
                            'type' => 'string',
                            'example' => 'userA',
                          ),
                        ),
                      ),
                      'parameter' => 
                      array (
                        'description' => 'quota的描述信息',
                        'type' => 'object',
                      ),
                      'tag' => 
                      array (
                        'description' => 'quota的资源标签',
                        'type' => 'string',
                        'example' => 'abc',
                      ),
                      'createTime' => 
                      array (
                        'description' => '创建时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2022-09-06T02:14:44Z
',
                      ),
                      'creatorId' => 
                      array (
                        'description' => '资源创建者，云账号UID。',
                        'type' => 'string',
                        'example' => '672863518',
                      ),
                      'subQuotaInfoList' => 
                      array (
                        'description' => '二级quota信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '二级quota信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'id' => 
                            array (
                              'description' => '二级quota ID',
                              'type' => 'string',
                              'example' => '1000048',
                            ),
                            'name' => 
                            array (
                              'description' => '二级quota名称',
                              'type' => 'string',
                              'example' => 'subquotaA',
                            ),
                            'nickName' => 
                            array (
                              'description' => '二级quota别名',
                              'type' => 'string',
                              'example' => 'subquotaA',
                            ),
                            'type' => 
                            array (
                              'title' => '对应控制集群的resourceSystemType字段',
                              'description' => '对应控制集群的resourceSystemType字段',
                              'type' => 'string',
                              'example' => 'FUXI_ONLINE',
                            ),
                            'status' => 
                            array (
                              'description' => '资源状态',
                              'type' => 'string',
                              'example' => 'ON',
                            ),
                            'tenantId' => 
                            array (
                              'description' => '租户id。',
                              'type' => 'string',
                              'example' => '478403690625249',
                            ),
                            'regionId' => 
                            array (
                              'description' => '地域id。',
                              'type' => 'string',
                              'example' => 'cn-beijing',
                            ),
                            'parentId' => 
                            array (
                              'description' => '父资源id。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'cluster' => 
                            array (
                              'description' => '集群id',
                              'type' => 'string',
                              'example' => 'AT-120N
',
                            ),
                            'version' => 
                            array (
                              'description' => '版本号',
                              'type' => 'string',
                              'example' => '1',
                            ),
                            'billingPolicy' => 
                            array (
                              'description' => '订单信息',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'odpsSpecCode' => 
                                array (
                                  'description' => '订单规格',
                                  'type' => 'string',
                                  'example' => 'OdpsStandard',
                                ),
                                'orderId' => 
                                array (
                                  'description' => '订单id。',
                                  'type' => 'string',
                                  'example' => '45245678',
                                ),
                                'billingMethod' => 
                                array (
                                  'title' => '"PAYASYOUGO" 表示后付费',
                                  'description' => '付费模式。
- subscription,表示是预付费quota。
- payasyougo，表示是后付费quota。',
                                  'type' => 'string',
                                  'example' => 'subscription',
                                ),
                              ),
                            ),
                            'scheduleInfo' => 
                            array (
                              'description' => '分时信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'currPlan' => 
                                array (
                                  'description' => '按照调度计划生效的quota计划',
                                  'type' => 'string',
                                  'example' => 'planA',
                                ),
                                'currTime' => 
                                array (
                                  'description' => 'currPlan被调度的时间',
                                  'type' => 'string',
                                  'example' => '0800',
                                ),
                                'nextPlan' => 
                                array (
                                  'description' => '计划将要生效的quota计划',
                                  'type' => 'string',
                                  'example' => 'planB',
                                ),
                                'nextTime' => 
                                array (
                                  'description' => 'next_plan被调度的时间',
                                  'type' => 'string',
                                  'example' => '1700',
                                ),
                                'oncePlan' => 
                                array (
                                  'description' => '如果用户触发了立即生效且不同于curr_plan，那么非空。',
                                  'type' => 'string',
                                  'example' => 'planC',
                                ),
                                'onceTime' => 
                                array (
                                  'description' => '立即生效触发的时间',
                                  'type' => 'string',
                                  'example' => '1500',
                                ),
                                'operatorName' => 
                                array (
                                  'description' => '操作者名称。',
                                  'type' => 'string',
                                  'example' => 'userA',
                                ),
                              ),
                            ),
                            'parameter' => 
                            array (
                              'description' => 'quota的描述信息',
                              'type' => 'object',
                            ),
                            'tag' => 
                            array (
                              'description' => 'quota的资源标签',
                              'type' => 'string',
                              'example' => 'abc',
                            ),
                            'createTime' => 
                            array (
                              'description' => '资源创建时间',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2022-09-06T02:14:44Z
',
                            ),
                            'creatorId' => 
                            array (
                              'description' => '创建者id。',
                              'type' => 'string',
                              'example' => '672863518',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0aa16667684362147582e038f\\",\\n  \\"data\\": {\\n    \\"name\\": \\"planA\\",\\n    \\"createTime\\": \\"2022-05-16T06:07:45Z\\",\\n    \\"quota\\": {\\n      \\"id\\": \\"0\\",\\n      \\"name\\": \\"quota_a\\\\n\\",\\n      \\"nickName\\": \\"quota_nickname\\",\\n      \\"type\\": \\"FUXI_ONLINE\\",\\n      \\"status\\": \\"ON\\",\\n      \\"tenantId\\": \\"478403690625249\\",\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"parentId\\": \\"null\\",\\n      \\"cluster\\": \\"AT-120N\\\\n\\",\\n      \\"version\\": \\"1\\",\\n      \\"billingPolicy\\": {\\n        \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n        \\"orderId\\": \\"45245678\\",\\n        \\"billingMethod\\": \\"subscription\\"\\n      },\\n      \\"scheduleInfo\\": {\\n        \\"currPlan\\": \\"planA\\",\\n        \\"currTime\\": \\"0800\\",\\n        \\"nextPlan\\": \\"planB\\",\\n        \\"nextTime\\": \\"1700\\",\\n        \\"oncePlan\\": \\"planC\\",\\n        \\"onceTime\\": \\"1500\\",\\n        \\"operatorName\\": \\"userA\\"\\n      },\\n      \\"parameter\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"tag\\": \\"abc\\",\\n      \\"createTime\\": 0,\\n      \\"creatorId\\": \\"672863518\\",\\n      \\"subQuotaInfoList\\": [\\n        {\\n          \\"id\\": \\"1000048\\",\\n          \\"name\\": \\"subquotaA\\",\\n          \\"nickName\\": \\"subquotaA\\",\\n          \\"type\\": \\"FUXI_ONLINE\\",\\n          \\"status\\": \\"ON\\",\\n          \\"tenantId\\": \\"478403690625249\\",\\n          \\"regionId\\": \\"cn-beijing\\",\\n          \\"parentId\\": \\"0\\",\\n          \\"cluster\\": \\"AT-120N\\\\n\\",\\n          \\"version\\": \\"1\\",\\n          \\"billingPolicy\\": {\\n            \\"odpsSpecCode\\": \\"OdpsStandard\\",\\n            \\"orderId\\": \\"45245678\\",\\n            \\"billingMethod\\": \\"subscription\\"\\n          },\\n          \\"scheduleInfo\\": {\\n            \\"currPlan\\": \\"planA\\",\\n            \\"currTime\\": \\"0800\\",\\n            \\"nextPlan\\": \\"planB\\",\\n            \\"nextTime\\": \\"1700\\",\\n            \\"oncePlan\\": \\"planC\\",\\n            \\"onceTime\\": \\"1500\\",\\n            \\"operatorName\\": \\"userA\\"\\n          },\\n          \\"parameter\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"tag\\": \\"abc\\",\\n          \\"createTime\\": 0,\\n          \\"creatorId\\": \\"672863518\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取Quota计划信息',
      'summary' => '获取Quota计划信息。',
    ),
    'DeleteQuotaPlan' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/plans/{planName}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'QuotaNickName',
            'type' => 'string',
            'required' => true,
            'example' => 'quota_A',
          ),
        ),
        1 => 
        array (
          'name' => 'planName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota计划名称',
            'type' => 'string',
            'required' => true,
            'example' => 'planA',
          ),
        ),
        2 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '416441016836866',
          ),
        ),
        3 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0b57ff7616612271051086500ea3ce',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b57ff7616612271051086500ea3ce\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除Quota计划',
      'summary' => '删除Quota计划。',
    ),
    'CreateQuotaSchedule' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/schedule',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'QuotaNickName',
            'type' => 'string',
            'required' => true,
            'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p

#中文名称需要经过utf8 urlencode编码转义',
          ),
        ),
        1 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '407137536592384',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-chengdu',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '# 立即生效
[
  {
    "type": "once",
    "plan": "planA",
    "operator":"xxx"
  }
]

# 定时调度
[
  {
    "id": "bi",
    "type": "daily",
    "condition": {
      "at": "0800"

    },
    "plan": "planA"
  },
  {
    "id": "bi",
    "type": "daily",
    "condition": {
      "at": "0900"
    },
    "plan": "planB"
  },
]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0be3e0b716671885050924814e3623',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0b716671885050924814e3623\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '新增Quota时间计划',
      'summary' => '添加Quota时间计划。',
    ),
    'UpdateQuotaSchedule' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/schedule',
      'methods' => 
      array (
        0 => 'put',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota名称',
            'type' => 'string',
            'required' => true,
            'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p

#中文名称需要经过utf8 urlencode编码转义',
          ),
        ),
        1 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '478403690625249',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-chengdu',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '
# 立即生效
[
  {
    "type": "once",
    "plan": "planA",
    "operator":"userA"
  }
]

# 定时调度
[
  {
    "id": "etl_time",
    "type": "daily",
    "condition": {
      "at": "0800"
    },
    "plan": "planA"
  },
  {
    "id": "bi",
    "type": "daily",
    "condition": {
      "at": "0900"
    },
    "plan": "planB"
  },
]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0a06dfe516691014920015940e1c9d',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dfe516691014920015940e1c9d\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '更新Quota时间计划',
      'summary' => '更新Quota时间计划信息。',
    ),
    'GetQuotaSchedule' => 
    array (
      'path' => '/api/v1/quotas/{nickname}/schedule',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nickname',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Quota名称',
            'type' => 'string',
            'required' => true,
            'example' => '%E9%BB%98%E8%AE%A4%E9%A2%84%E4%BB%98%E8%B4%B9Quota_p

#中文名称需要经过utf8 urlencode编码转义',
          ),
        ),
        1 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '478403690625249',
          ),
        ),
        2 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'displayTimezone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '显示时区',
            'type' => 'string',
            'required' => false,
            'example' => 'UTC+8',
            'default' => 'UTC+8',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<List<QuotaScheduleDTO>>',
            'description' => 'PopResult<List<QuotaScheduleDTO>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc059b716696296266308790e0d3e',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'errorCode' => 
              array (
                'description' => '- 当success为false，返回业务错误码；
 
- 当success为true，返回空值。 ',
                'type' => 'string',
                'example' => 'success',
              ),
              'errorMsg' => 
              array (
                'description' => '错误描述信息。',
                'type' => 'string',
                'example' => '异常信息',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'id' => 
                    array (
                      'description' => 'quota计划id',
                      'type' => 'string',
                      'example' => '63',
                    ),
                    'type' => 
                    array (
                      'description' => '类型',
                      'type' => 'string',
                      'example' => 'once',
                    ),
                    'plan' => 
                    array (
                      'description' => '计划名称',
                      'type' => 'string',
                      'example' => 'planA',
                    ),
                    'condition' => 
                    array (
                      'description' => '条件值',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'at' => 
                        array (
                          'description' => '生效时间',
                          'type' => 'string',
                          'example' => '0900',
                        ),
                        'after' => 
                        array (
                          'description' => '生效开始时间',
                          'type' => 'string',
                          'example' => '2022-04-25T04:23:04Z
',
                        ),
                      ),
                    ),
                    'operator' => 
                    array (
                      'description' => '操作者名称',
                      'type' => 'string',
                      'example' => 'userA',
                    ),
                    'timezone' => 
                    array (
                      'description' => '时区',
                      'type' => 'string',
                      'example' => 'UTC+8',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc059b716696296266308790e0d3e\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"success\\",\\n  \\"errorMsg\\": \\"异常信息\\",\\n  \\"data\\": [\\n    {\\n      \\"id\\": \\"63\\",\\n      \\"type\\": \\"once\\",\\n      \\"plan\\": \\"planA\\",\\n      \\"condition\\": {\\n        \\"at\\": \\"0900\\",\\n        \\"after\\": \\"2022-04-25T04:23:04Z\\\\n\\"\\n      },\\n      \\"operator\\": \\"userA\\",\\n      \\"timezone\\": \\"UTC+8\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取Quota时间计划信息',
      'summary' => '获取Quota时间计划信息。',
    ),
    'CreateProject' => 
    array (
      'path' => '/api/v1/projects',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "name":"project_name",
    "comment":"",
    "productType":"payasyougo/subscription/dev",
    "defaultQuota":"quota_nick_name",
    "properties":{
        "sqlMeteringMax":"",
        "typeSystem":"",
        "encryption":{
            "enable":true,
            "algorithm":"",
            "key":""
        }
    }
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0b87b7a316654730544735643e9200',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7a316654730544735643e9200\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建项目',
      'summary' => '创建MaxCompute项目。',
    ),
    'ListProjects' => 
    array (
      'path' => '/api/v1/projects',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '549532154333697',
          ),
        ),
        1 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'quotaNickName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quota名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'quotaA',
          ),
        ),
        3 => 
        array (
          'name' => 'quotaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '这是quota 在maxcompute 内部的标识，与quotaNickname有区别。quotaNickname 是用户设置的，quotaName 是系统自动生成的。这个字段仅用于描述数据通道quota。',
            'type' => 'string',
            'required' => false,
            'example' => '"hsajkdgbkaubh"',
          ),
        ),
        4 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
            'type' => 'string',
            'required' => false,
            'example' => 'a',
          ),
        ),
        5 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
          ),
        ),
        6 => 
        array (
          'name' => 'maxItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回的最大结果数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'saleTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
            'type' => 'string',
            'required' => false,
            'example' => '"aaaa-bbbb"',
          ),
        ),
        8 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '这个type 用于描述内部项目和外部项目。"external“ 表示外部项目，用于湖仓一体场景下。"managed" 表示内部项目。',
            'type' => 'string',
            'required' => false,
            'example' => '"managed"',
          ),
        ),
        9 => 
        array (
          'name' => 'listSystemCatalog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否列出SystemCatalog。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '列出',
              'false' => '不列出',
            ),
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
            'title' => 'PopResult<ListResultDTO<ProjectInfo, MarkerPageInfo>>',
            'description' => 'PopResult<ListResultDTO<ProjectInfo, MarkerPageInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0b16399216671970335563173e2340',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'projects' => 
                  array (
                    'description' => '项目描述。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '项目名称。',
                          'type' => 'string',
                          'example' => 'odps_project',
                        ),
                        'owner' => 
                        array (
                          'description' => '项目owner。',
                          'type' => 'string',
                          'example' => '113981577560****',
                        ),
                        'type' => 
                        array (
                          'description' => '项目类型。
取值：
-managed：内部项目。
-external：外部项目。',
                          'type' => 'string',
                          'example' => 'managed',
                        ),
                        'comment' => 
                        array (
                          'description' => '备注',
                          'type' => 'string',
                          'example' => 'MaxCompute项目
',
                        ),
                        'defaultQuota' => 
                        array (
                          'description' => '默认计算quota',
                          'type' => 'string',
                          'example' => 'quotaA',
                        ),
                        'status' => 
                        array (
                          'description' => '项目状态。
取值：
-AVAILABLE：正常
-READONLY：只读
-FROZEN：冻结
-DELETING：删除中',
                          'type' => 'string',
                          'example' => 'AVAILABLE',
                        ),
                        'costStorage' => 
                        array (
                          'description' => '存储量',
                          'type' => 'string',
                          'example' => '16489027',
                        ),
                        'regionId' => 
                        array (
                          'title' => '区域ID',
                          'description' => '区域ID',
                          'type' => 'string',
                          'example' => 'cn-beijing',
                        ),
                        'createdTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1704380838000',
                        ),
                        'properties' => 
                        array (
                          'description' => '项目属性。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'timezone' => 
                            array (
                              'description' => '时区。',
                              'type' => 'string',
                              'example' => 'Asia/Shanghai
',
                            ),
                            'retentionDays' => 
                            array (
                              'description' => '备份数据保留天数。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'allowFullScan' => 
                            array (
                              'description' => '是否允许全表扫描。',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'typeSystem' => 
                            array (
                              'description' => '数据类型版本。
取值：
-1：1.0版本
-2：2.0版本
-hive：hive兼容类型',
                              'type' => 'string',
                              'example' => '2',
                            ),
                            'enableDecimal2' => 
                            array (
                              'description' => '是否开启decimal 2.0。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'sqlMeteringMax' => 
                            array (
                              'description' => 'sql消费限制。',
                              'type' => 'string',
                              'example' => '1500',
                            ),
                            'tableLifecycle' => 
                            array (
                              'description' => '表生命周期。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'type' => 
                                array (
                                  'description' => '生命周期类型。
取值：
-mandatory：Lifecycle子句为必选设置，用户必须设置表的生命周期。
-optional：创建表时，Lifecycle子句为可选设置，如果不设置表的生命周期，则该表永远有效。
-inherit：创建表时，如果不设置表的生命周期，则该表的生命周期为odps.table.lifecycle.value的值。',
                                  'type' => 'string',
                                  'example' => 'optional',
                                ),
                                'value' => 
                                array (
                                  'description' => '生命周期天数。',
                                  'type' => 'string',
                                  'example' => '37231
',
                                ),
                              ),
                            ),
                            'encryption' => 
                            array (
                              'description' => '存储加密信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'enable' => 
                                array (
                                  'description' => '是否启用加密，取值：-true-false。',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'algorithm' => 
                                array (
                                  'description' => '加密算法名称。',
                                  'type' => 'string',
                                  'example' => 'SHA1',
                                ),
                                'key' => 
                                array (
                                  'description' => '算法密钥名称。',
                                  'type' => 'string',
                                  'example' => 'dafault',
                                ),
                              ),
                            ),
                            'tunnelQuota' => 
                            array (
                              'description' => 'tunnel Quota名称。',
                              'type' => 'string',
                              'example' => 'quota_tunnel',
                            ),
                            'enableTunnelQuotaRoute' => 
                            array (
                              'description' => '是否开启tunnelQuota路由。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                          ),
                        ),
                        'securityProperties' => 
                        array (
                          'description' => '权限属性。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'usingAcl' => 
                            array (
                              'description' => '是否使用acl。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'usingPolicy' => 
                            array (
                              'description' => '是否使用Policy授权。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'objectCreatorHasAccessPermission' => 
                            array (
                              'description' => '是否允许对象创建者操作对象。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'objectCreatorHasGrantPermission' => 
                            array (
                              'description' => '是否允许对象创建者授权对象。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'labelSecurity' => 
                            array (
                              'description' => '是否启动Label访问控制。',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'enableDownloadPrivilege' => 
                            array (
                              'description' => '是否开启Download权限。',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'projectProtection' => 
                            array (
                              'description' => '是否开启项目空间数据保护。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'protected' => 
                                array (
                                  'description' => '是否开启项目空间数据保护。',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'exceptionPolicy' => 
                                array (
                                  'description' => 'ExceptionPolicy。项目所有者需要提前规划Exception Policy，允许指定用户将指定对象的数据流出至指定项目，所有符合Exception Policy中描述的情形都可以打破数据保护机制。',
                                  'type' => 'string',
                                  'example' => '{
      "Version": "1",
      "Statement": [
            {
                  "Effect": "Allow",
                  "Principal": "",
                  "Action": [
                        "odps:[, , ...]"
                  ],
                  "Resource": "acs:odps:*:",
                  "Condition": {
                        "StringEquals": {
                              "odps:TaskType": [
                                    ""
                              ]
                        }
                  }
            }
      ]
}',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ipWhiteList' => 
                        array (
                          'description' => 'IP白名单',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ipList' => 
                            array (
                              'description' => 'IP白名单列表',
                              'type' => 'string',
                              'example' => '10.88.111.3',
                            ),
                            'vpcIpList' => 
                            array (
                              'description' => 'VPCID白名单列表',
                              'type' => 'string',
                              'example' => '10.88.111.3',
                            ),
                          ),
                        ),
                        'saleTag' => 
                        array (
                          'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'resourceId' => 
                            array (
                              'description' => '描述了MaxCompute quota 对象的标识，这个标识与阿里云售卖账单中的标识是一致的。实际使用与标签场景下。',
                              'type' => 'string',
                              'example' => '"aaaa-bbbb"',
                            ),
                            'resourceType' => 
                            array (
                              'description' => '对象的类型，目前仅支持quota 和 project 两种类型。',
                              'type' => 'string',
                              'example' => '"project"',
                            ),
                          ),
                        ),
                        'Tags' => 
                        array (
                          'description' => '标签。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagValue' => 
                              array (
                                'description' => '标签值。',
                                'type' => 'string',
                                'example' => 'acceptance test',
                              ),
                              'TagKey' => 
                              array (
                                'description' => '标签键。',
                                'type' => 'string',
                                'example' => 'Department',
                              ),
                            ),
                          ),
                        ),
                        'threeTierModel' => 
                        array (
                          'description' => '当前project是否支持三层模型',
                          'type' => 'boolean',
                          'enumValueTitles' => 
                          array (
                            'true' => '支持',
                            'false' => '不支持',
                          ),
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'marker' => 
                  array (
                    'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                    'type' => 'string',
                    'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                  ),
                  'maxItem' => 
                  array (
                    'description' => '每页返回的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '分页标识，当前接口仅支持连续翻页。返回值nextToken 非空代表还有剩余数据。把nextToken 作为参数继续查询会获得下一页。',
                    'type' => 'string',
                    'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kvikyUl3ChyRxN+qLPvtOb',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b16399216671970335563173e2340\\",\\n  \\"data\\": {\\n    \\"projects\\": [\\n      {\\n        \\"name\\": \\"odps_project\\",\\n        \\"owner\\": \\"113981577560****\\",\\n        \\"type\\": \\"managed\\",\\n        \\"comment\\": \\"MaxCompute项目\\\\n\\",\\n        \\"defaultQuota\\": \\"quotaA\\",\\n        \\"status\\": \\"AVAILABLE\\",\\n        \\"costStorage\\": \\"16489027\\",\\n        \\"regionId\\": \\"cn-beijing\\",\\n        \\"createdTime\\": 1704380838000,\\n        \\"properties\\": {\\n          \\"timezone\\": \\"Asia/Shanghai\\\\n\\",\\n          \\"retentionDays\\": 1,\\n          \\"allowFullScan\\": false,\\n          \\"typeSystem\\": \\"2\\",\\n          \\"enableDecimal2\\": true,\\n          \\"sqlMeteringMax\\": \\"1500\\",\\n          \\"tableLifecycle\\": {\\n            \\"type\\": \\"optional\\",\\n            \\"value\\": \\"37231\\\\n\\"\\n          },\\n          \\"encryption\\": {\\n            \\"enable\\": true,\\n            \\"algorithm\\": \\"SHA1\\",\\n            \\"key\\": \\"dafault\\"\\n          },\\n          \\"tunnelQuota\\": \\"quota_tunnel\\",\\n          \\"enableTunnelQuotaRoute\\": true\\n        },\\n        \\"securityProperties\\": {\\n          \\"usingAcl\\": true,\\n          \\"usingPolicy\\": true,\\n          \\"objectCreatorHasAccessPermission\\": true,\\n          \\"objectCreatorHasGrantPermission\\": true,\\n          \\"labelSecurity\\": false,\\n          \\"enableDownloadPrivilege\\": false,\\n          \\"projectProtection\\": {\\n            \\"protected\\": true,\\n            \\"exceptionPolicy\\": \\"{\\\\n      \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n      \\\\\\"Statement\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n                  \\\\\\"Principal\\\\\\": \\\\\\"\\\\\\",\\\\n                  \\\\\\"Action\\\\\\": [\\\\n                        \\\\\\"odps:[, , ...]\\\\\\"\\\\n                  ],\\\\n                  \\\\\\"Resource\\\\\\": \\\\\\"acs:odps:*:\\\\\\",\\\\n                  \\\\\\"Condition\\\\\\": {\\\\n                        \\\\\\"StringEquals\\\\\\": {\\\\n                              \\\\\\"odps:TaskType\\\\\\": [\\\\n                                    \\\\\\"\\\\\\"\\\\n                              ]\\\\n                        }\\\\n                  }\\\\n            }\\\\n      ]\\\\n}\\"\\n          }\\n        },\\n        \\"ipWhiteList\\": {\\n          \\"ipList\\": \\"10.88.111.3\\",\\n          \\"vpcIpList\\": \\"10.88.111.3\\"\\n        },\\n        \\"saleTag\\": {\\n          \\"resourceId\\": \\"\\\\\\"aaaa-bbbb\\\\\\"\\",\\n          \\"resourceType\\": \\"\\\\\\"project\\\\\\"\\"\\n        },\\n        \\"Tags\\": [\\n          {\\n            \\"TagValue\\": \\"acceptance test\\",\\n            \\"TagKey\\": \\"Department\\"\\n          }\\n        ],\\n        \\"threeTierModel\\": true\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10,\\n    \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6kvikyUl3ChyRxN+qLPvtOb\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取项目列表',
      'summary' => '获取MaxCompute项目列表。',
    ),
    'GetProject' => 
    array (
      'path' => '/api/v1/projects/{projectName}',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '142482',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREodpsTZPZOE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'odps_project',
          ),
        ),
        1 => 
        array (
          'name' => 'verbose',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否带有附加信息',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ProjectInfo>',
            'description' => 'PopResult<ProjectInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0b87b7b316643495896551555e855b',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'errorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '040002',
              ),
              'errorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'error message.',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'description' => '项目名称',
                    'type' => 'string',
                    'example' => 'odps_project',
                  ),
                  'owner' => 
                  array (
                    'description' => '项目owner',
                    'type' => 'string',
                    'example' => '1565950907343451',
                  ),
                  'type' => 
                  array (
                    'description' => '项目类型。
取值：
-**managed**：内部项目。
-**external**：外部项目。',
                    'type' => 'string',
                    'example' => 'managed',
                  ),
                  'comment' => 
                  array (
                    'description' => '备注',
                    'type' => 'string',
                    'example' => 'maxcompute项目',
                  ),
                  'defaultQuota' => 
                  array (
                    'description' => '默认计算quota',
                    'type' => 'string',
                    'example' => 'quota_a',
                  ),
                  'status' => 
                  array (
                    'description' => '项目状态。
取值：
-**AVAILABLE**：正常
-**READONLY**：只读
-**FROZEN**：冻结
-**DELETING**：删除中',
                    'type' => 'string',
                    'example' => 'AVAILABLE',
                  ),
                  'productType' => 
                  array (
                    'description' => '计费模式',
                    'type' => 'string',
                    'example' => 'PayAsYouGo',
                  ),
                  'threeTierModel' => 
                  array (
                    'description' => '当前project是否支持三层模型',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'costStorage' => 
                  array (
                    'description' => '存储量',
                    'type' => 'string',
                    'example' => '16489027',
                  ),
                  'regionId' => 
                  array (
                    'title' => '区域ID',
                    'description' => '区域ID',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'createdTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1704380838000
',
                  ),
                  'properties' => 
                  array (
                    'description' => '项目属性',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'timezone' => 
                      array (
                        'description' => '项目时区',
                        'type' => 'string',
                        'example' => 'Asia/Shanghai',
                      ),
                      'retentionDays' => 
                      array (
                        'description' => '备份数据保留天数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'allowFullScan' => 
                      array (
                        'description' => '是否允许全表扫描。',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'typeSystem' => 
                      array (
                        'description' => '数据类型版本。
取值：
-**1**：1.0版本
-**2**：2.0版本
-**hive**：hive兼容类型',
                        'type' => 'string',
                        'example' => '2.0',
                      ),
                      'enableDecimal2' => 
                      array (
                        'description' => '是否开启decimal 2.0',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'sqlMeteringMax' => 
                      array (
                        'description' => 'sql消费限制',
                        'type' => 'string',
                        'example' => '1500',
                      ),
                      'tableLifecycle' => 
                      array (
                        'description' => '表的生命周期。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'type' => 
                          array (
                            'description' => '生命周期类型。
取值：
-**mandatory**：Lifecycle子句为必选设置，用户必须设置表的生命周期。
-**optional**：创建表时，Lifecycle子句为可选设置，如果不设置表的生命周期，则该表永远有效。
-**inherit**：创建表时，如果不设置表的生命周期，则该表的生命周期为odps.table.lifecycle.value的值。',
                            'type' => 'string',
                            'example' => 'optional',
                          ),
                          'value' => 
                          array (
                            'description' => '生命周期天数。',
                            'type' => 'string',
                            'example' => '37231',
                          ),
                        ),
                      ),
                      'encryption' => 
                      array (
                        'description' => '存储加密信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'enable' => 
                          array (
                            'description' => '是否启用加密，取值：-true-false',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'algorithm' => 
                          array (
                            'description' => '加密算法名称',
                            'type' => 'string',
                            'example' => 'SHA1',
                          ),
                          'key' => 
                          array (
                            'description' => '算法密钥名称',
                            'type' => 'string',
                            'example' => 'dafault',
                          ),
                        ),
                      ),
                      'tunnelQuota' => 
                      array (
                        'description' => 'tunnel Quota名称',
                        'type' => 'string',
                        'example' => 'Quota',
                      ),
                      'elderTunnelQuota' => 
                      array (
                        'description' => '无需关注',
                        'type' => 'string',
                        'example' => '无需关注',
                      ),
                      'enableTunnelQuotaRoute' => 
                      array (
                        'description' => '是否允许tunnel quota路由',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'storageTierInfo' => 
                      array (
                        'description' => '分层存储信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'storageTierSize' => 
                          array (
                            'description' => '分层存储',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'standardSize' => 
                              array (
                                'description' => '标准存储',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '27649172',
                              ),
                              'longTermSize' => 
                              array (
                                'description' => '长期存储',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '21764917',
                              ),
                              'lowFrequencySize' => 
                              array (
                                'description' => '低频存储',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '767693',
                              ),
                            ),
                          ),
                          'projectTotalSize' => 
                          array (
                            'description' => '总存储',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '56066037',
                          ),
                          'projectBackupSize' => 
                          array (
                            'description' => '备份存储',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '86672917',
                          ),
                        ),
                      ),
                      'fdcQuota' => 
                      array (
                        'title' => 'fdc quota',
                        'description' => 'fdc quota',
                        'type' => 'string',
                      ),
                      'enableFdcCacheForce' => 
                      array (
                        'title' => '是否强制开启fdc缓存',
                        'description' => '是否强制开启fdc缓存',
                        'type' => 'boolean',
                      ),
                      'enableTieredStorage' => 
                      array (
                        'type' => 'boolean',
                      ),
                    ),
                  ),
                  'superAdmins' => 
                  array (
                    'description' => 'superadmin角色成员',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'superadmin角色成员',
                      'type' => 'string',
                      'example' => 'ALIYUN$***@aliyun.com',
                    ),
                  ),
                  'securityProperties' => 
                  array (
                    'description' => '权限属性',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'usingAcl' => 
                      array (
                        'description' => '是否使用acl权限',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'usingPolicy' => 
                      array (
                        'description' => '是否使用Policy授权',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'objectCreatorHasAccessPermission' => 
                      array (
                        'description' => '是否允许对象创建者操作对象',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'objectCreatorHasGrantPermission' => 
                      array (
                        'description' => '是否允许对象创建者授权对象',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'labelSecurity' => 
                      array (
                        'description' => '是否启动Label访问控制',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'enableDownloadPrivilege' => 
                      array (
                        'description' => '是否开启Download权限',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'projectProtection' => 
                      array (
                        'description' => '是否开启项目空间数据保护',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'exceptionPolicy' => 
                          array (
                            'description' => 'ExceptionPolicy。项目所有者需要提前规划Exception Policy，允许指定用户将指定对象的数据流出至指定项目，所有符合Exception Policy中描述的情形都可以打破数据保护机制。',
                            'type' => 'string',
                            'example' => '    {
    "Version": "1",
    "Statement":
    [{
        "Effect":"Allow",
        "Principal":"<Principal>",
        "Action":["odps:<Action1>[, <Action2>, ...]"],
        "Resource":"acs:odps:*:<Resource>",
        "Condition":{
            "StringEquals": {
                "odps:TaskType":["<Tasktype>"]
            }
        }
    }]
    }',
                          ),
                          'protected' => 
                          array (
                            'description' => '是否开启项目空间数据保护',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ipWhiteList' => 
                  array (
                    'description' => 'ip白名单',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ipList' => 
                      array (
                        'description' => 'ip白名单',
                        'type' => 'string',
                        'example' => '10.88.111.3',
                      ),
                      'vpcIpList' => 
                      array (
                        'description' => 'vpcip白名单列表',
                        'type' => 'string',
                        'example' => '10.88.111.3',
                      ),
                    ),
                  ),
                  'saleTag' => 
                  array (
                    'description' => '标签',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'resourceId' => 
                      array (
                        'description' => '资源ID',
                        'type' => 'string',
                        'example' => 'project_name',
                      ),
                      'resourceType' => 
                      array (
                        'description' => '资源类型',
                        'type' => 'string',
                        'example' => 'project',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7b316643495896551555e855b\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"040002\\",\\n  \\"errorMsg\\": \\"error message.\\",\\n  \\"data\\": {\\n    \\"name\\": \\"odps_project\\",\\n    \\"owner\\": \\"1565950907343451\\",\\n    \\"type\\": \\"managed\\",\\n    \\"comment\\": \\"maxcompute项目\\",\\n    \\"defaultQuota\\": \\"quota_a\\",\\n    \\"status\\": \\"AVAILABLE\\",\\n    \\"productType\\": \\"PayAsYouGo\\",\\n    \\"threeTierModel\\": true,\\n    \\"costStorage\\": \\"16489027\\",\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"createdTime\\": 1704380838000,\\n    \\"properties\\": {\\n      \\"timezone\\": \\"Asia/Shanghai\\",\\n      \\"retentionDays\\": 1,\\n      \\"allowFullScan\\": false,\\n      \\"typeSystem\\": \\"2.0\\",\\n      \\"enableDecimal2\\": true,\\n      \\"sqlMeteringMax\\": \\"1500\\",\\n      \\"tableLifecycle\\": {\\n        \\"type\\": \\"optional\\",\\n        \\"value\\": \\"37231\\"\\n      },\\n      \\"encryption\\": {\\n        \\"enable\\": true,\\n        \\"algorithm\\": \\"SHA1\\",\\n        \\"key\\": \\"dafault\\"\\n      },\\n      \\"tunnelQuota\\": \\"Quota\\",\\n      \\"elderTunnelQuota\\": \\"无需关注\\",\\n      \\"enableTunnelQuotaRoute\\": true,\\n      \\"storageTierInfo\\": {\\n        \\"storageTierSize\\": {\\n          \\"standardSize\\": 27649172,\\n          \\"longTermSize\\": 21764917,\\n          \\"lowFrequencySize\\": 767693\\n        },\\n        \\"projectTotalSize\\": 56066037,\\n        \\"projectBackupSize\\": 86672917\\n      },\\n      \\"fdcQuota\\": \\"\\",\\n      \\"enableFdcCacheForce\\": true,\\n      \\"enableTieredStorage\\": true\\n    },\\n    \\"superAdmins\\": [\\n      \\"ALIYUN$***@aliyun.com\\"\\n    ],\\n    \\"securityProperties\\": {\\n      \\"usingAcl\\": true,\\n      \\"usingPolicy\\": true,\\n      \\"objectCreatorHasAccessPermission\\": true,\\n      \\"objectCreatorHasGrantPermission\\": true,\\n      \\"labelSecurity\\": false,\\n      \\"enableDownloadPrivilege\\": false,\\n      \\"projectProtection\\": {\\n        \\"exceptionPolicy\\": \\"    {\\\\n    \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n    \\\\\\"Statement\\\\\\":\\\\n    [{\\\\n        \\\\\\"Effect\\\\\\":\\\\\\"Allow\\\\\\",\\\\n        \\\\\\"Principal\\\\\\":\\\\\\"<Principal>\\\\\\",\\\\n        \\\\\\"Action\\\\\\":[\\\\\\"odps:<Action1>[, <Action2>, ...]\\\\\\"],\\\\n        \\\\\\"Resource\\\\\\":\\\\\\"acs:odps:*:<Resource>\\\\\\",\\\\n        \\\\\\"Condition\\\\\\":{\\\\n            \\\\\\"StringEquals\\\\\\": {\\\\n                \\\\\\"odps:TaskType\\\\\\":[\\\\\\"<Tasktype>\\\\\\"]\\\\n            }\\\\n        }\\\\n    }]\\\\n    }\\",\\n        \\"protected\\": true\\n      }\\n    },\\n    \\"ipWhiteList\\": {\\n      \\"ipList\\": \\"10.88.111.3\\",\\n      \\"vpcIpList\\": \\"10.88.111.3\\"\\n    },\\n    \\"saleTag\\": {\\n      \\"resourceId\\": \\"project_name\\",\\n      \\"resourceType\\": \\"project\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取项目信息',
      'summary' => '查询MaxCompute项目的基本信息。',
    ),
    'UpdateProjectIpWhiteList' => 
    array (
      'path' => '/api/v1/projects/{projectName}/ipWhiteList',
      'methods' => 
      array (
        0 => 'put',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'odps_project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => 'json

{"ipWhiteList":{"ipList": "", //string 以逗号分隔多个
                "vpcIpList": "", //}
               }',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0bc12e4316675560945192024e1044',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc12e4316675560945192024e1044\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '修改项目IP白名单',
      'summary' => '修改MaxCompute项目IP白名单。',
    ),
    'GetTrustedProjects' => 
    array (
      'path' => '/api/v1/projects/{projectName}/trustedProjects',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'odps_project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<List<String>>',
            'description' => 'PopResult<List<String>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc0590416675329272834336e4387',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据。',
                  'type' => 'string',
                  'example' => 'json Array
[
"project_A",
"project_B"
]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc0590416675329272834336e4387\\",\\n  \\"data\\": [\\n    \\"json Array\\\\n[\\\\n\\\\\\"project_A\\\\\\",\\\\n\\\\\\"project_B\\\\\\"\\\\n]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取受信任项目列表',
      'summary' => '获取当前项目的TrustedProject（受信任项目）列表。',
    ),
    'ListProjectUsers' => 
    array (
      'path' => '/api/v1/projects/{projectName}/users',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListUsersDTO>',
            'description' => 'PopResult<ListUsersDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0b87b7b316643495896551555e855b',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'users' => 
                  array (
                    'description' => '用户列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '用户名称',
                          'type' => 'string',
                          'example' => 'userA',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7b316643495896551555e855b\\",\\n  \\"data\\": {\\n    \\"users\\": [\\n      {\\n        \\"name\\": \\"userA\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取项目用户列表',
      'summary' => '获取项目用户列表。',
    ),
    'CreateRole' => 
    array (
      'path' => '/api/v1/projects/{projectName}/roles',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数。
取值可参考[MaxCompute权限](~~27935~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"name": "role_name","type": "resource/adminn","policy": "", //policy 的内容，如果是acl，此项不需要。"acl": { // 如果是policy，则此字段不需要"table": [{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"resource":[{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"function":[{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"package":[{"name": "", "actions":["","",]}, {"name": "", "actions":[]}],"project":[{"name": "", "actions":[]}], //管控台页面固定只有当前项目"instance":[{"name": "", "actions":[]}] //管控台页面只支持name * }}// name 支持写 *',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0b87b7e716665825896565060e87a4',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b87b7e716665825896565060e87a4\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建项目级角色',
      'summary' => '创建MaxCompute项目级角色。',
    ),
    'ListRoles' => 
    array (
      'path' => '/api/v1/projects/{projectName}/roles',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListRolesDTO>',
            'description' => 'PopResult<ListRolesDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0a06dfe716686526652451361e80ae',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'roles' => 
                  array (
                    'description' => '角色列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '角色列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '角色名称。',
                          'type' => 'string',
                          'example' => 'roleA',
                        ),
                        'type' => 
                        array (
                          'description' => '角色类型',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'resource' => 'resource',
                            'admin' => 'admin',
                          ),
                          'example' => 'admin',
                        ),
                        'policy' => 
                        array (
                          'description' => '角色的Policy授权信息',
                          'type' => 'string',
                          'example' => '{
      "Statement": [
            {
                  "Action": [
                        "odps:*"
                  ],
                  "Effect": "Allow",
                  "Resource": [
                        "acs:odps:*:projects/{projectname}/authorization/packages"
                  ]
            }
      ],
      "Version": "1"
}',
                        ),
                        'acl' => 
                        array (
                          'description' => '角色的ACL授权信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'table' => 
                            array (
                              'description' => '表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '表',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'name' => 
                                  array (
                                    'description' => '表名称。',
                                    'type' => 'string',
                                    'example' => 'tableA',
                                  ),
                                  'actions' => 
                                  array (
                                    'description' => '表操作',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '表操作',
                                      'type' => 'string',
                                      'example' => 'describe',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'resource' => 
                            array (
                              'description' => '资源',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '资源',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'name' => 
                                  array (
                                    'description' => '资源名称。',
                                    'type' => 'string',
                                    'example' => 'resourceA',
                                  ),
                                  'actions' => 
                                  array (
                                    'description' => '资源操作',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '资源操作',
                                      'type' => 'string',
                                      'example' => 'read',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'function' => 
                            array (
                              'description' => '函数',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '函数',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'name' => 
                                  array (
                                    'description' => '函数名称。',
                                    'type' => 'string',
                                    'example' => 'functionA',
                                  ),
                                  'actions' => 
                                  array (
                                    'description' => '函数操作',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '函数操作',
                                      'type' => 'string',
                                      'example' => 'read',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'package' => 
                            array (
                              'description' => 'Package',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'package',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'name' => 
                                  array (
                                    'description' => 'package名称',
                                    'type' => 'string',
                                    'example' => 'packageA',
                                  ),
                                  'actions' => 
                                  array (
                                    'description' => 'package操作',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => 'package操作',
                                      'type' => 'string',
                                      'example' => 'read',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'project' => 
                            array (
                              'description' => '项目',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '项目',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'name' => 
                                  array (
                                    'description' => 'maxcompute项目名称',
                                    'type' => 'string',
                                    'example' => 'projectA',
                                  ),
                                  'actions' => 
                                  array (
                                    'description' => '项目操作',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '项目操作',
                                      'type' => 'string',
                                      'example' => 'list',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'instance' => 
                            array (
                              'description' => '实例',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '实例',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'name' => 
                                  array (
                                    'description' => '实例名称。',
                                    'type' => 'string',
                                    'example' => 'instanceA',
                                  ),
                                  'actions' => 
                                  array (
                                    'description' => '实例操作',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '实例操作',
                                      'type' => 'string',
                                      'example' => 'read',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dfe716686526652451361e80ae\\",\\n  \\"data\\": {\\n    \\"roles\\": [\\n      {\\n        \\"name\\": \\"roleA\\",\\n        \\"type\\": \\"admin\\",\\n        \\"policy\\": \\"{\\\\n      \\\\\\"Statement\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Action\\\\\\": [\\\\n                        \\\\\\"odps:*\\\\\\"\\\\n                  ],\\\\n                  \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n                  \\\\\\"Resource\\\\\\": [\\\\n                        \\\\\\"acs:odps:*:projects/{projectname}/authorization/packages\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ],\\\\n      \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"\\\\n}\\",\\n        \\"acl\\": {\\n          \\"table\\": [\\n            {\\n              \\"name\\": \\"tableA\\",\\n              \\"actions\\": [\\n                \\"describe\\"\\n              ]\\n            }\\n          ],\\n          \\"resource\\": [\\n            {\\n              \\"name\\": \\"resourceA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ],\\n          \\"function\\": [\\n            {\\n              \\"name\\": \\"functionA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ],\\n          \\"package\\": [\\n            {\\n              \\"name\\": \\"packageA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ],\\n          \\"project\\": [\\n            {\\n              \\"name\\": \\"projectA\\",\\n              \\"actions\\": [\\n                \\"list\\"\\n              ]\\n            }\\n          ],\\n          \\"instance\\": [\\n            {\\n              \\"name\\": \\"instanceA\\",\\n              \\"actions\\": [\\n                \\"read\\"\\n              ]\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取项目级角色列表',
      'summary' => '获取MaxCompute项目级角色列表。',
    ),
    'GetRoleAcl' => 
    array (
      'path' => '/api/v1/projects/{projectName}/roles/{roleName}/roleAcl',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'roleName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '角色名称',
            'type' => 'string',
            'required' => true,
            'example' => 'roleA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<AclAction>',
            'description' => 'PopResult<AclAction>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0a06dc0916696898838762018e9564',
              ),
              'httpCode' => 
              array (
                'description' => '返回的HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'errorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '040002',
              ),
              'errorMsg' => 
              array (
                'description' => '错误描述信息。',
                'type' => 'string',
                'example' => '异常信息',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'table' => 
                  array (
                    'description' => '表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '表名称',
                          'type' => 'string',
                          'example' => 'tableA',
                        ),
                        'schemaName' => 
                        array (
                          'description' => 'Schema名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'actions' => 
                        array (
                          'description' => '表操作',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '表操作',
                            'type' => 'string',
                            'example' => 'describe',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'resource' => 
                  array (
                    'description' => '资源',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'resourceA',
                        ),
                        'schemaName' => 
                        array (
                          'description' => 'Schema名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'actions' => 
                        array (
                          'description' => '资源操作',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资源操作',
                            'type' => 'string',
                            'example' => 'read',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'function' => 
                  array (
                    'description' => '函数',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '函数',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '函数名称。',
                          'type' => 'string',
                          'example' => 'functionA',
                        ),
                        'schemaName' => 
                        array (
                          'description' => 'Schema名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'actions' => 
                        array (
                          'description' => '函数操作',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '函数操作',
                            'type' => 'string',
                            'example' => 'read',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'project' => 
                  array (
                    'description' => '项目',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '项目',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => 'maxcompute项目名称',
                          'type' => 'string',
                          'example' => 'projectA',
                        ),
                        'schemaName' => 
                        array (
                          'description' => 'Schema名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'actions' => 
                        array (
                          'description' => '项目操作',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '项目操作',
                            'type' => 'string',
                            'example' => 'list',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'instance' => 
                  array (
                    'description' => '实例',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '实例名称',
                          'type' => 'string',
                          'example' => 'instanceA',
                        ),
                        'schemaName' => 
                        array (
                          'description' => 'Schema名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'actions' => 
                        array (
                          'description' => '实例操作',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '实例操作',
                            'type' => 'string',
                            'example' => 'read',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'package' => 
                  array (
                    'description' => 'Package',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Package',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => 'package名称',
                          'type' => 'string',
                          'example' => 'packageA',
                        ),
                        'schemaName' => 
                        array (
                          'description' => 'Schema名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'actions' => 
                        array (
                          'description' => 'package操作',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'package操作',
                            'type' => 'string',
                            'example' => 'read',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dc0916696898838762018e9564\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"040002\\",\\n  \\"errorMsg\\": \\"异常信息\\",\\n  \\"data\\": {\\n    \\"table\\": [\\n      {\\n        \\"name\\": \\"tableA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"describe\\"\\n        ]\\n      }\\n    ],\\n    \\"resource\\": [\\n      {\\n        \\"name\\": \\"resourceA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ],\\n    \\"function\\": [\\n      {\\n        \\"name\\": \\"functionA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ],\\n    \\"project\\": [\\n      {\\n        \\"name\\": \\"projectA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"list\\"\\n        ]\\n      }\\n    ],\\n    \\"instance\\": [\\n      {\\n        \\"name\\": \\"instanceA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ],\\n    \\"package\\": [\\n      {\\n        \\"name\\": \\"packageA\\",\\n        \\"schemaName\\": \\"default\\",\\n        \\"actions\\": [\\n          \\"read\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取项目级角色ACL授权信息',
      'summary' => '获取项目级角色ACL授权信息。',
    ),
    'GetRoleAclOnObject' => 
    array (
      'path' => '/api/v1/projects/{projectName}/roles/{roleName}/acl',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'roleName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '角色名称',
            'type' => 'string',
            'required' => true,
            'example' => 'roleA',
          ),
        ),
        2 => 
        array (
          'name' => 'objectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对象类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'resource' => 'resource',
              'function' => 'function',
              ' package' => ' package',
              'table' => 'table',
            ),
            'example' => 'table',
          ),
        ),
        3 => 
        array (
          'name' => 'objectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对象名称',
            'type' => 'string',
            'required' => true,
            'example' => 'tableA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ActionItem>',
            'description' => 'PopResult<ActionItem>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0bc1366d16686529650188023ef87f',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'description' => '对象名称',
                    'type' => 'string',
                    'example' => 'tableA',
                  ),
                  'actions' => 
                  array (
                    'description' => '对象操作',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '对象操作',
                      'type' => 'string',
                      'example' => 'describe',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc1366d16686529650188023ef87f\\",\\n  \\"data\\": {\\n    \\"name\\": \\"tableA\\",\\n    \\"actions\\": [\\n      \\"describe\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取角色对某对象的ACL授权',
      'summary' => '获取项目级角色对某对象的ACL授权信息。',
    ),
    'GetRolePolicy' => 
    array (
      'path' => '/api/v1/projects/{projectName}/roles/{roleName}/policy',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'roleName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '角色名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'roleA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc1eeed16675342848904412e08dd',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'string',
                'example' => '{
      "Statement": [
            {
                  "Action": [
                        "odps:*"
                  ],
                  "Effect": "Allow",
                  "Resource": [
                        "acs:odps:*:projects/{projectname}/authorization/packages"
                  ]
            }
      ],
      "Version": "1"
}
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc1eeed16675342848904412e08dd\\",\\n  \\"data\\": \\"{\\\\n      \\\\\\"Statement\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Action\\\\\\": [\\\\n                        \\\\\\"odps:*\\\\\\"\\\\n                  ],\\\\n                  \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n                  \\\\\\"Resource\\\\\\": [\\\\n                        \\\\\\"acs:odps:*:projects/{projectname}/authorization/packages\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ],\\\\n      \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"\\\\n}\\\\n\\"\\n}","type":"json"}]',
      'title' => '获取角色Policy授权内容',
      'summary' => '获取项目级角色Policy授权内容。',
    ),
    'ListUsersByRole' => 
    array (
      'path' => '/api/v1/projects/{projectName}/roles/{roleName}/users',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'roleName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '角色名称',
            'type' => 'string',
            'required' => true,
            'example' => 'roleA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListUsersDTO>',
            'description' => 'PopResult<ListUsersDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0be3e0bb16654558425251398e27a9',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'users' => 
                  array (
                    'description' => '用户列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '用户名称',
                          'type' => 'string',
                          'example' => 'ALIYUN${account_name}',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0bb16654558425251398e27a9\\",\\n  \\"data\\": {\\n    \\"users\\": [\\n      {\\n        \\"name\\": \\"ALIYUN${account_name}\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取绑定某项目级角色的用户列表',
      'summary' => '获取绑定某项目级角色的用户列表。',
    ),
    'ListPackages' => 
    array (
      'path' => '/api/v1/projects/{projectName}/packages',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListPackagesDTO>',
            'description' => 'PopResult<ListPackagesDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc3b4aa16677927210252786e4cb6',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'createdPackages' => 
                  array (
                    'description' => '创建的package列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '创建的package列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => 'package名称。',
                          'type' => 'string',
                          'example' => 'packageA',
                        ),
                        'createTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2022-08-02T02:30:34Z',
                        ),
                      ),
                    ),
                  ),
                  'installedPackages' => 
                  array (
                    'description' => '已安装的package列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已安装的package列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => 'package名称。',
                          'type' => 'string',
                          'example' => 'packageB',
                        ),
                        'sourceProject' => 
                        array (
                          'description' => 'package所属项目。如果package 是install 的，此参数必填。',
                          'type' => 'string',
                          'example' => 'projectB',
                        ),
                        'status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'OK',
                        ),
                        'installTime' => 
                        array (
                          'description' => '安装时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2022-09-02T02:30:34Z
',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4aa16677927210252786e4cb6\\",\\n  \\"data\\": {\\n    \\"createdPackages\\": [\\n      {\\n        \\"name\\": \\"packageA\\",\\n        \\"createTime\\": 0\\n      }\\n    ],\\n    \\"installedPackages\\": [\\n      {\\n        \\"name\\": \\"packageB\\",\\n        \\"sourceProject\\": \\"projectB\\",\\n        \\"status\\": \\"OK\\",\\n        \\"installTime\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取Package列表',
      'summary' => '获取MaxCompute项目下的Package列表。',
    ),
    'UpdatePackage' => 
    array (
      'path' => '/api/v1/projects/{projectName}/packages/{packageName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'packageName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'package名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'packageA',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "add": {
        "allowedProjectList": [
            {
                "label": "2",
                "project": "project_name"
            }
        ],
        "resourceList": {
            "table": [
                {
                    "name": "table_name",
                    "actions": [
                        "Describe",
                        "Select"
                    ]
                },
                {
                    "name": "table_name",
                    "actions": [
                        "Describe",
                        "Select"
                    ]
                }
            ],
            "resource": [
                {
                    "name": "",
                    "actions": []
                },
                {
                    "name": "",
                    "actions": []
                }
            ],
            "function": [
                {
                    "name": "",
                    "actions": []
                },
                {
                    "name": "",
                    "actions": []
                }
            ]
        }
    },
    "remove": {
        "allowedProjectList": [
            {
                "project": "project_name"
            },
            {
                "project": "project_2"
            }
        ],
        "resourceList": {
            "table": [
                {
                    "name": "table_name"
                },
                {
                    "name": "table_name"
                }
            ],
            "resource": [
                {
                    "name": ""
                },
                {
                    "name": ""
                }
            ],
            "function": [
                {
                    "name": ""
                },
                {
                    "name": ""
                }
            ]
        }
    }
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc1ec4016697018733156991e0888',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc1ec4016697018733156991e0888\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '更新Package',
      'summary' => '更新Package内的对象及允许安装的项目列表。',
    ),
    'CreatePackage' => 
    array (
      'path' => '/api/v1/projects/{projectName}/packages',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA
',
          ),
        ),
        1 => 
        array (
          'name' => 'isInstall',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否安装',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
"name": "test_packege", 
    "resourceList": { 
        "table": [
            {
                "name": "table_name",
                "actions": [
                    "Describe",
                    "Select"
                ]
            },
            {
                "name": "table_name",
                "actions": [
                    "Describe",
                    "Select"
                ]
            }
        ],
        "resource": [
            {
                "name": "",
                "actions": []
            },
            {
                "name": "",
                "actions": []
            }
        ],
        "function": [
            {
                "name": "",
                "actions": []
            },
            {
                "name": "",
                "actions": []
            }
        ]
    }
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc3b4ab16684833172127321e2c25',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4ab16684833172127321e2c25\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建package',
      'summary' => '通过调用该接口创建package。',
    ),
    'GetPackage' => 
    array (
      'path' => '/api/v1/projects/{projectName}/packages/{packageName}',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'packageName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'package名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_package',
          ),
        ),
        2 => 
        array (
          'name' => 'sourceProject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'package所属项目。如果package 是install 的，此参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'projectB',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<PackageInfo>',
            'description' => 'PopResult<PackageInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0b57ff8316614119858417939e3e54',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'errorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '040002',
              ),
              'errorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '异常信息',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'allowedProjectList' => 
                  array (
                    'description' => '已经安装的项目列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已经安装的项目列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'label' => 
                        array (
                          'description' => '指定安全许可标签级别',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'project' => 
                        array (
                          'description' => 'maxcompute项目名称',
                          'type' => 'string',
                          'example' => 'proejctB',
                        ),
                      ),
                    ),
                  ),
                  'resourceList' => 
                  array (
                    'description' => 'package内包含的资源详情',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'table' => 
                      array (
                        'description' => '表列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '表列表',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'description' => '表名称',
                              'type' => 'string',
                              'example' => 'dim_odps
',
                            ),
                            'schemaName' => 
                            array (
                              'description' => 'schema名称。',
                              'type' => 'string',
                              'example' => 'default',
                            ),
                            'actions' => 
                            array (
                              'description' => '表操作',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '表操作',
                                'type' => 'string',
                                'example' => 'describe',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'resource' => 
                      array (
                        'description' => '资源列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '资源列表',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'description' => '资源名称',
                              'type' => 'string',
                              'example' => 'res_1',
                            ),
                            'schemaName' => 
                            array (
                              'description' => 'schema名称。',
                              'type' => 'string',
                              'example' => 'default',
                            ),
                            'actions' => 
                            array (
                              'description' => '资源的操作',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '资源的操作',
                                'type' => 'string',
                                'example' => 'read',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'function' => 
                      array (
                        'description' => '函数列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '函数列表',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'description' => '函数名称',
                              'type' => 'string',
                              'example' => 'function_1',
                            ),
                            'schemaName' => 
                            array (
                              'description' => 'schema名称。',
                              'type' => 'string',
                              'example' => 'default',
                            ),
                            'actions' => 
                            array (
                              'description' => '函数操作',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '函数操作',
                                'type' => 'string',
                                'example' => 'read',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b57ff8316614119858417939e3e54\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"040002\\",\\n  \\"errorMsg\\": \\"异常信息\\",\\n  \\"data\\": {\\n    \\"allowedProjectList\\": [\\n      {\\n        \\"label\\": \\"2\\",\\n        \\"project\\": \\"proejctB\\"\\n      }\\n    ],\\n    \\"resourceList\\": {\\n      \\"table\\": [\\n        {\\n          \\"name\\": \\"dim_odps\\\\n\\",\\n          \\"schemaName\\": \\"default\\",\\n          \\"actions\\": [\\n            \\"describe\\"\\n          ]\\n        }\\n      ],\\n      \\"resource\\": [\\n        {\\n          \\"name\\": \\"res_1\\",\\n          \\"schemaName\\": \\"default\\",\\n          \\"actions\\": [\\n            \\"read\\"\\n          ]\\n        }\\n      ],\\n      \\"function\\": [\\n        {\\n          \\"name\\": \\"function_1\\",\\n          \\"schemaName\\": \\"default\\",\\n          \\"actions\\": [\\n            \\"read\\"\\n          ]\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取Package信息',
      'summary' => '获取package信息。',
    ),
    'ListTables' => 
    array (
      'path' => '/api/v1/projects/{projectName}/tables',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
            'type' => 'string',
            'required' => false,
            'example' => 'a',
          ),
        ),
        2 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'Y29tbWlzc2lvbl9leHRlcm5hbF91cmdlXzFfd3Ih',
          ),
        ),
        3 => 
        array (
          'name' => 'maxItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回的最大结果数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'internal' => 'internal',
              'external' => 'external',
            ),
            'example' => 'internal',
          ),
        ),
        5 => 
        array (
          'name' => 'schemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Schema名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListResultDTO<TableInfo, MarkerPageInfo>>',
            'description' => 'PopResult<ListResultDTO<TableInfo, MarkerPageInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0a06dd4516687375802853481ec9fd',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'tables' => 
                  array (
                    'description' => '表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '表名称。',
                          'type' => 'string',
                          'example' => 'sale_detail',
                        ),
                        'owner' => 
                        array (
                          'description' => '表所有者。',
                          'type' => 'string',
                          'example' => '188785396123****',
                        ),
                        'type' => 
                        array (
                          'description' => '表类型。',
                          'type' => 'string',
                          'example' => 'internal
',
                        ),
                        'schema' => 
                        array (
                          'description' => '归属schema。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'creationTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2022-01-17T07:07:47Z',
                        ),
                        'viewText' => 
                        array (
                          'description' => '生成视图的语句。',
                          'type' => 'string',
                          'example' => 'select shop_name, sum(total_price) 
from sale_detail group by shop_name',
                        ),
                        'displayName' => 
                        array (
                          'description' => '展示名称。',
                          'type' => 'string',
                          'example' => 'sale_detail',
                        ),
                        'projectName' => 
                        array (
                          'description' => '项目名称。',
                          'type' => 'string',
                          'example' => 'projectA
',
                        ),
                        'lastDDLTime' => 
                        array (
                          'description' => 'DDL最近更新时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2023-11-21T02:05:56Z
',
                        ),
                        'lastModifiedTime' => 
                        array (
                          'description' => '数据最近更新时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2023-11-21T02:05:56Z',
                        ),
                        'lastAccessTime' => 
                        array (
                          'description' => '数据最近访问时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2023-12-21T02:05:56Z',
                        ),
                        'lifecycle' => 
                        array (
                          'description' => '生命周期。',
                          'type' => 'string',
                          'example' => '-1',
                        ),
                        'isExternalTable' => 
                        array (
                          'description' => '是否外部表。',
                          'type' => 'boolean',
                          'example' => 'False',
                        ),
                        'size' => 
                        array (
                          'description' => '大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5372',
                        ),
                        'tableComment' => 
                        array (
                          'description' => '表说明。',
                          'type' => 'string',
                          'example' => 'sale_detail',
                        ),
                        'tableLabel' => 
                        array (
                          'description' => '表的label级别。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'createTableDDL' => 
                        array (
                          'description' => '创建表的DDL语句。',
                          'type' => 'string',
                          'example' => 'create table if not exists sale_detail(
 shop_name     STRING,
 customer_id   STRING,
 total_price   DOUBLE)
partitioned by (sale_date STRING, region STRING); ',
                        ),
                        'nativeColumns' => 
                        array (
                          'description' => '列信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '列信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'name' => 
                              array (
                                'description' => '列名。',
                                'type' => 'string',
                                'example' => 'shop_name',
                              ),
                              'type' => 
                              array (
                                'description' => '类型。',
                                'type' => 'string',
                                'example' => 'STRING',
                              ),
                              'label' => 
                              array (
                                'description' => '列Label等级。',
                                'type' => 'string',
                                'example' => '0',
                              ),
                              'comment' => 
                              array (
                                'description' => '备注。',
                                'type' => 'string',
                                'example' => '商店名称',
                              ),
                            ),
                          ),
                        ),
                        'partitionColumns' => 
                        array (
                          'description' => '分区列信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '分区列信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'name' => 
                              array (
                                'description' => '列名。',
                                'type' => 'string',
                                'example' => 'sale_date',
                              ),
                              'type' => 
                              array (
                                'description' => '类型。',
                                'type' => 'string',
                                'example' => 'STRING',
                              ),
                              'label' => 
                              array (
                                'description' => '列Label等级。',
                                'type' => 'string',
                                'example' => '0',
                              ),
                              'comment' => 
                              array (
                                'description' => '备注。',
                                'type' => 'string',
                                'example' => '销售日期',
                              ),
                            ),
                          ),
                        ),
                        'materializedView' => 
                        array (
                          'description' => '是否物化视图。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'rewriteEnabled' => 
                        array (
                          'description' => '是否允许通过物化视图执行查询改写操作。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'autoRefreshEnabled' => 
                        array (
                          'description' => '是否开启自动刷新物化视图。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'isOutdated' => 
                        array (
                          'description' => '是否因为源表数据有变化，导致物化视图数据无效。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'physicalSize' => 
                        array (
                          'description' => '物理大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2763',
                        ),
                        'fileNum' => 
                        array (
                          'description' => '文件数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'storageHandler' => 
                        array (
                          'description' => '外部表解析器。',
                          'type' => 'string',
                          'example' => 'com.aliyun.odps.CsvStorageHandler',
                        ),
                        'location' => 
                        array (
                          'description' => '外部表地址',
                          'type' => 'string',
                          'example' => 'oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/',
                        ),
                        'odpsPropertiesRolearn' => 
                        array (
                          'description' => 'RAM中AliyunODPSDefaultRole的ARN信息。',
                          'type' => 'string',
                          'example' => 'acs:ram::xxxxx:role/aliyunodpsdefaultrole',
                        ),
                        'tablestoreColumnsMapping' => 
                        array (
                          'description' => '描述MaxCompute将访问的Tablestore表的列，包括主键和属性列。',
                          'type' => 'string',
                          'example' => ':o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice',
                        ),
                        'tablesotreTableName' => 
                        array (
                          'description' => '需要访问的Tablestore表名称。',
                          'type' => 'string',
                          'example' => 'ots_tpch_orders',
                        ),
                        'odpsSqlTextOptionFlushHeader' => 
                        array (
                          'description' => '是否忽略表头。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'odpsTextOptionHeaderLinesCount' => 
                        array (
                          'description' => '忽略表头前N行。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'marker' => 
                  array (
                    'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                    'type' => 'string',
                    'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                  ),
                  'maxItem' => 
                  array (
                    'description' => '每页返回的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dd4516687375802853481ec9fd\\",\\n  \\"data\\": {\\n    \\"tables\\": [\\n      {\\n        \\"name\\": \\"sale_detail\\",\\n        \\"owner\\": \\"188785396123****\\",\\n        \\"type\\": \\"internal\\\\n\\",\\n        \\"schema\\": \\"default\\",\\n        \\"creationTime\\": 0,\\n        \\"viewText\\": \\"select shop_name, sum(total_price) \\\\nfrom sale_detail group by shop_name\\",\\n        \\"displayName\\": \\"sale_detail\\",\\n        \\"projectName\\": \\"projectA\\\\n\\",\\n        \\"lastDDLTime\\": 0,\\n        \\"lastModifiedTime\\": 0,\\n        \\"lastAccessTime\\": 0,\\n        \\"lifecycle\\": \\"-1\\",\\n        \\"isExternalTable\\": true,\\n        \\"size\\": 5372,\\n        \\"tableComment\\": \\"sale_detail\\",\\n        \\"tableLabel\\": \\"0\\",\\n        \\"createTableDDL\\": \\"create table if not exists sale_detail(\\\\n shop_name     STRING,\\\\n customer_id   STRING,\\\\n total_price   DOUBLE)\\\\npartitioned by (sale_date STRING, region STRING); \\",\\n        \\"nativeColumns\\": [\\n          {\\n            \\"name\\": \\"shop_name\\",\\n            \\"type\\": \\"STRING\\",\\n            \\"label\\": \\"0\\",\\n            \\"comment\\": \\"商店名称\\"\\n          }\\n        ],\\n        \\"partitionColumns\\": [\\n          {\\n            \\"name\\": \\"sale_date\\",\\n            \\"type\\": \\"STRING\\",\\n            \\"label\\": \\"0\\",\\n            \\"comment\\": \\"销售日期\\"\\n          }\\n        ],\\n        \\"materializedView\\": false,\\n        \\"rewriteEnabled\\": false,\\n        \\"autoRefreshEnabled\\": false,\\n        \\"isOutdated\\": false,\\n        \\"physicalSize\\": 2763,\\n        \\"fileNum\\": 200,\\n        \\"storageHandler\\": \\"com.aliyun.odps.CsvStorageHandler\\",\\n        \\"location\\": \\"oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/\\",\\n        \\"odpsPropertiesRolearn\\": \\"acs:ram::xxxxx:role/aliyunodpsdefaultrole\\",\\n        \\"tablestoreColumnsMapping\\": \\":o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice\\",\\n        \\"tablesotreTableName\\": \\"ots_tpch_orders\\",\\n        \\"odpsSqlTextOptionFlushHeader\\": true,\\n        \\"odpsTextOptionHeaderLinesCount\\": 1\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取表列表',
      'summary' => '获取MaxCompute项目内的表列表。',
    ),
    'ListFunctions' => 
    array (
      'path' => '/api/v1/projects/{projectName}/functions',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'odps_project',
          ),
        ),
        1 => 
        array (
          'name' => 'schemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'schema名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
            'type' => 'string',
            'required' => false,
            'example' => 'a',
          ),
        ),
        3 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
          ),
        ),
        4 => 
        array (
          'name' => 'maxItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回的最大结果数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListResultDTO<FunctionInfo, MarkerPageInfo>>',
            'description' => 'PopResult<ListResultDTO<FunctionInfo, MarkerPageInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0be3e0b716671885050924814e3623',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'functions' => 
                  array (
                    'description' => '各个函数的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各个函数的信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'displayName' => 
                        array (
                          'description' => '显示名称',
                          'type' => 'string',
                          'example' => 'getdate',
                        ),
                        'name' => 
                        array (
                          'description' => '函数名称。',
                          'type' => 'string',
                          'example' => 'getdate',
                        ),
                        'owner' => 
                        array (
                          'description' => '所有者。',
                          'type' => 'string',
                          'example' => 'odpsowner',
                        ),
                        'schema' => 
                        array (
                          'description' => '函数schema。',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'resources' => 
                        array (
                          'description' => '函数关联的资源名称。',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'creationTime' => 
                        array (
                          'description' => '创建时间，单位毫秒',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1664505167000',
                        ),
                        'class' => 
                        array (
                          'description' => '函数所在的类。',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                      ),
                    ),
                  ),
                  'marker' => 
                  array (
                    'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                    'type' => 'string',
                    'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
                  ),
                  'maxItem' => 
                  array (
                    'description' => '每页返回的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0be3e0b716671885050924814e3623\\",\\n  \\"data\\": {\\n    \\"functions\\": [\\n      {\\n        \\"displayName\\": \\"getdate\\",\\n        \\"name\\": \\"getdate\\",\\n        \\"owner\\": \\"odpsowner\\",\\n        \\"schema\\": \\"abc\\",\\n        \\"resources\\": \\"abc\\",\\n        \\"creationTime\\": 1664505167000,\\n        \\"class\\": \\"abc\\"\\n      }\\n    ],\\n    \\"marker\\": \\"cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==\\",\\n    \\"maxItem\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取函数列表',
      'summary' => '获取MaxCompute函数列表。',
    ),
    'ListResources' => 
    array (
      'path' => '/api/v1/projects/{projectName}/resources',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'MaxCompute项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'schemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'schema名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'res
',
          ),
        ),
        3 => 
        array (
          'name' => 'marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==',
          ),
        ),
        4 => 
        array (
          'name' => 'maxItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回的最大结果数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListResultDTO<ResourceInfo, MarkerPageInfo>>',
            'description' => 'PopResult<ListResultDTO<ResourceInfo, MarkerPageInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc3b4ae16685836687916212e7850',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'resources' => 
                  array (
                    'description' => '资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'displayName' => 
                        array (
                          'description' => '显示名称',
                          'type' => 'string',
                          'example' => 'res_1
',
                        ),
                        'name' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'res_1',
                        ),
                        'owner' => 
                        array (
                          'description' => '资源的拥有者。',
                          'type' => 'string',
                          'example' => '1265860483008101',
                        ),
                        'type' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'file' => 'file',
                            'py' => 'py',
                            'jar' => 'jar',
                            'volumefile' => 'volumefile',
                            'table' => 'table',
                          ),
                          'example' => 'file',
                        ),
                        'schema' => 
                        array (
                          'description' => '所属schema。',
                          'type' => 'string',
                          'example' => 'schemaA',
                        ),
                        'lastUpdator' => 
                        array (
                          'description' => '最后更新人。',
                          'type' => 'string',
                          'example' => 'ALIYUN$xxx@test.aliyunid.com',
                        ),
                        'creationTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2022-01-29T03:34:09Z',
                        ),
                        'lastModifiedTime' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2023-04-18T06:15:05Z',
                        ),
                        'comment' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => 'filr类型资源',
                        ),
                        'size' => 
                        array (
                          'description' => '大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'contentMD5' => 
                        array (
                          'description' => 'HTTP请求正文的128-bit MD5散列值转换成BASE64编码的结果。',
                          'type' => 'string',
                          'example' => 'MACiECZtnLiNkNS1v5****=1',
                        ),
                      ),
                    ),
                  ),
                  'marker' => 
                  array (
                    'description' => '设定结果从marker之后按字母排序的第一个开始返回。',
                    'type' => 'string',
                    'example' => 'ZmN0X21vbnRoX3Rhb2Jhb19pbmRleCE=',
                  ),
                  'maxItem' => 
                  array (
                    'description' => '每页返回的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4ae16685836687916212e7850\\",\\n  \\"data\\": {\\n    \\"resources\\": [\\n      {\\n        \\"displayName\\": \\"res_1\\\\n\\",\\n        \\"name\\": \\"res_1\\",\\n        \\"owner\\": \\"1265860483008101\\",\\n        \\"type\\": \\"file\\",\\n        \\"schema\\": \\"schemaA\\",\\n        \\"lastUpdator\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"creationTime\\": 0,\\n        \\"lastModifiedTime\\": 0,\\n        \\"comment\\": \\"filr类型资源\\",\\n        \\"size\\": 10,\\n        \\"contentMD5\\": \\"MACiECZtnLiNkNS1v5****=1\\"\\n      }\\n    ],\\n    \\"marker\\": \\"ZmN0X21vbnRoX3Rhb2Jhb19pbmRleCE=\\",\\n    \\"maxItem\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取资源列表',
      'summary' => '获取MaxCompute项目内的资源列表。',
    ),
    'ListUsers' => 
    array (
      'path' => '/api/v1/users',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListResultDTO<UserAccount, DefaultPageInfo>>',
            'description' => 'PopResult<ListResultDTO<UserAccount, DefaultPageInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0a06dd4816687424611405643e3730',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'users' => 
                  array (
                    'description' => '用户列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'accountId' => 
                        array (
                          'description' => '账号ID',
                          'type' => 'string',
                          'example' => '167835629082',
                        ),
                        'accountName' => 
                        array (
                          'description' => '账号名称',
                          'type' => 'string',
                          'example' => 'Bob@',
                        ),
                        'displayName' => 
                        array (
                          'description' => '显示名称',
                          'type' => 'string',
                          'example' => 'Bob',
                        ),
                        'accountType' => 
                        array (
                          'description' => '账号类型',
                          'type' => 'string',
                          'example' => 'ALIYUN',
                        ),
                        'tenantId' => 
                        array (
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '1567253789',
                        ),
                      ),
                    ),
                  ),
                  'totalCount' => 
                  array (
                    'description' => '返回结果的总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '64',
                  ),
                  'pageNumber' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'pageSize' => 
                  array (
                    'description' => '每页显示条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dd4816687424611405643e3730\\",\\n  \\"data\\": {\\n    \\"users\\": [\\n      {\\n        \\"accountId\\": \\"167835629082\\",\\n        \\"accountName\\": \\"Bob@\\",\\n        \\"displayName\\": \\"Bob\\",\\n        \\"accountType\\": \\"ALIYUN\\",\\n        \\"tenantId\\": \\"1567253789\\"\\n      }\\n    ],\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取用户列表',
      'summary' => '获取租户下的所有用户列表。',
    ),
    'ListJobInfos' => 
    array (
      'path' => '/api/v1/jobs',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '478403690625249',
          ),
        ),
        1 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'orderColumn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序列',
            'type' => 'string',
            'required' => false,
            'example' => 'cuUsage',
          ),
        ),
        3 => 
        array (
          'name' => 'ascOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升序or降序',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "from":1672112000, #起始时间戳
  "to":1672112130, #截止时间戳
  "statusList":[], #作业状态
  "quotaNickname":"quota_nickname", #配额名称
  "projectList":[], #项目名称
  "typeList":[], #类型
  "jobOwnerList":[], #作业owner
  "signatureList":[], #sql签名
  "extNodeIdList":[], 
  "instanceIdList":[], #实例ID
  "priorityList":[], #作业优先级
  "settings":{
    "key":"value"
  }
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListJobInfoDTO>',
            'description' => 'PopResult<ListJobInfoDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc13a9516807484336515320e38f5',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'totalCount' => 
                  array (
                    'description' => '返回结果的总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '64',
                  ),
                  'pageNumber' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'pageSize' => 
                  array (
                    'description' => '每页显示条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'jobInfoList' => 
                  array (
                    'description' => '作业信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '作业信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'tenantId' => 
                        array (
                          'description' => '租户ID',
                          'type' => 'string',
                          'example' => '213065738244354',
                        ),
                        'region' => 
                        array (
                          'description' => '地域id。',
                          'type' => 'string',
                          'example' => 'cn-shanghai',
                        ),
                        'cluster' => 
                        array (
                          'description' => '集群id',
                          'type' => 'string',
                          'example' => 'AY20A',
                        ),
                        'instanceId' => 
                        array (
                          'description' => '实例ID。
',
                          'type' => 'string',
                          'example' => '20230410050036549gfmsdwf60gg',
                        ),
                        'jobOwner' => 
                        array (
                          'description' => '提交作业的账号',
                          'type' => 'string',
                          'example' => 'ALIYUN$xxx@test.aliyunid.com',
                        ),
                        'project' => 
                        array (
                          'description' => 'maxcompute项目名称',
                          'type' => 'string',
                          'example' => 'openrec_new',
                        ),
                        'jobType' => 
                        array (
                          'description' => '作业类型',
                          'type' => 'string',
                          'example' => 'SQL',
                        ),
                        'priority' => 
                        array (
                          'description' => '优先级',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'quotaNickname' => 
                        array (
                          'description' => '作业使用的配额昵称',
                          'type' => 'string',
                          'example' => 'my_quota',
                        ),
                        'quotaType' => 
                        array (
                          'description' => 'quota类型',
                          'type' => 'string',
                          'example' => 'subscription',
                        ),
                        'cuUsage' => 
                        array (
                          'description' => 'cu使用总量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'memoryUsage' => 
                        array (
                          'description' => '内存使用总量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '40',
                        ),
                        'cuSnapshot' => 
                        array (
                          'description' => '作业的cu快照占比',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.48',
                        ),
                        'memorySnapshot' => 
                        array (
                          'description' => '作业的内存快照占比',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.42',
                        ),
                        'statusSnapshot' => 
                        array (
                          'description' => '作业快照状态',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'submittedAtTime' => 
                        array (
                          'description' => '作业的提交时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1672112013',
                        ),
                        'waitingTime' => 
                        array (
                          'description' => '等待时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'runningAtTime' => 
                        array (
                          'description' => '作业的开始运行时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1672112113',
                        ),
                        'runningTime' => 
                        array (
                          'description' => '运行时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '800',
                        ),
                        'endAtTime' => 
                        array (
                          'description' => '运行结束时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'totalTime' => 
                        array (
                          'description' => '总运行时长',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '900',
                        ),
                        'signature' => 
                        array (
                          'description' => 'sql签名',
                          'type' => 'string',
                          'example' => 'i094KijGrN3kOXZ74kbexB77XQY=',
                        ),
                        'extPlantFrom' => 
                        array (
                          'description' => '上游平台',
                          'type' => 'string',
                          'example' => 'platform_3',
                        ),
                        'extNodeId' => 
                        array (
                          'description' => 'DataWorks节点ID',
                          'type' => 'string',
                          'example' => 'node_4',
                        ),
                        'extNodeOnDuty' => 
                        array (
                          'description' => '执行责任人',
                          'type' => 'string',
                          'example' => 'duty_2',
                        ),
                        'tags' => 
                        array (
                          'description' => '标签',
                          'type' => 'string',
                          'example' => '[]',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc13a9516807484336515320e38f5\\",\\n  \\"httpCode\\": 200,\\n  \\"data\\": {\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10,\\n    \\"jobInfoList\\": [\\n      {\\n        \\"tenantId\\": \\"213065738244354\\",\\n        \\"region\\": \\"cn-shanghai\\",\\n        \\"cluster\\": \\"AY20A\\",\\n        \\"instanceId\\": \\"20230410050036549gfmsdwf60gg\\",\\n        \\"jobOwner\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"project\\": \\"openrec_new\\",\\n        \\"jobType\\": \\"SQL\\",\\n        \\"priority\\": 1,\\n        \\"status\\": \\"running\\",\\n        \\"quotaNickname\\": \\"my_quota\\",\\n        \\"quotaType\\": \\"subscription\\",\\n        \\"cuUsage\\": 10,\\n        \\"memoryUsage\\": 40,\\n        \\"cuSnapshot\\": 0.48,\\n        \\"memorySnapshot\\": 0.42,\\n        \\"statusSnapshot\\": \\"running\\",\\n        \\"submittedAtTime\\": 1672112013,\\n        \\"waitingTime\\": 100,\\n        \\"runningAtTime\\": 1672112113,\\n        \\"runningTime\\": 800,\\n        \\"endAtTime\\": 0,\\n        \\"totalTime\\": 900,\\n        \\"signature\\": \\"i094KijGrN3kOXZ74kbexB77XQY=\\",\\n        \\"extPlantFrom\\": \\"platform_3\\",\\n        \\"extNodeId\\": \\"node_4\\",\\n        \\"extNodeOnDuty\\": \\"duty_2\\",\\n        \\"tags\\": \\"[]\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查看作业列表',
      'summary' => '查看作业列表',
    ),
    'GetRunningJobs' => 
    array (
      'path' => '/api/v1/jobs/runningJobs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'from',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间点。该时间是指作业的提交时间。

- 请求参数**from**和**to**定义的时间区间遵循双闭原则，即该时间区间既包括区间开始时间点也包括区间结束时间点。如果**from**和**to**的值相同，则为无效区间，函数直接返回空。
- Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1683785928',
          ),
        ),
        1 => 
        array (
          'name' => 'to',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间点。该时间是指作业的提交时间。

- 请求参数**from**和**to**定义的时间区间遵循双闭原则，即该时间区间既包括区间开始时间点也包括区间结束时间点。如果**from**和**to**的值相同，则为无效区间，函数直接返回空。
- Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1683612946',
          ),
        ),
        2 => 
        array (
          'name' => 'jobOwnerList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '作业的执行者列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '作业的执行者列表',
              'type' => 'string',
              'required' => false,
              'example' => 'ALIYUN$xxx@test.aliyunid.com',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'quotaNicknameList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '作业使用的配额昵称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '作业使用的配额昵称列表',
              'type' => 'string',
              'required' => false,
              'example' => 'my_quota',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认为10，最大为20',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListRunningJobInfoDTO>',
            'description' => 'PopResult<ListRunningJobInfoDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0bc3b4ab16684833172127321e2c25',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'errorCode' => 
              array (
                'description' => '- 当success为false，返回业务错误码；
 
- 当success为true，返回空值。 ',
                'type' => 'string',
                'example' => 'success',
              ),
              'errorMsg' => 
              array (
                'description' => '错误描述信息。',
                'type' => 'string',
                'example' => '0A3B1FD2006A24C8D8BE65CDAC028298',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'runningJobInfoList' => 
                  array (
                    'description' => '执行状态的作业列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '执行状态的作业',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'instanceId' => 
                        array (
                          'description' => '实例ID。
',
                          'type' => 'string',
                          'example' => '2023050206371544gomgtp3ljcr4',
                        ),
                        'jobOwner' => 
                        array (
                          'description' => '提交作业的账号',
                          'type' => 'string',
                          'example' => 'ALIYUN$xxx@test.aliyunid.com',
                        ),
                        'project' => 
                        array (
                          'description' => 'maxcompute项目名称',
                          'type' => 'string',
                          'example' => 'project_20221021123044_981b',
                        ),
                        'quotaNickname' => 
                        array (
                          'description' => '作业使用的配额昵称',
                          'type' => 'string',
                          'example' => 'my_quota',
                        ),
                        'cuSnapshot' => 
                        array (
                          'description' => '作业的cu快照占比',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.45',
                        ),
                        'memorySnapshot' => 
                        array (
                          'description' => '作业的内存快照占比',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.45',
                        ),
                        'submittedAtTime' => 
                        array (
                          'description' => '作业的提交时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1689746864',
                        ),
                        'runningAtTime' => 
                        array (
                          'description' => '作业的开始运行时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1689746864',
                        ),
                        'progress' => 
                        array (
                          'description' => '任务进度。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                  'totalCount' => 
                  array (
                    'description' => '返回结果的总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '64',
                  ),
                  'pageNumber' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'pageSize' => 
                  array (
                    'description' => '每页显示条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0bc3b4ab16684833172127321e2c25\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"success\\",\\n  \\"errorMsg\\": \\"0A3B1FD2006A24C8D8BE65CDAC028298\\",\\n  \\"data\\": {\\n    \\"runningJobInfoList\\": [\\n      {\\n        \\"instanceId\\": \\"2023050206371544gomgtp3ljcr4\\",\\n        \\"jobOwner\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"project\\": \\"project_20221021123044_981b\\",\\n        \\"quotaNickname\\": \\"my_quota\\",\\n        \\"cuSnapshot\\": 0.45,\\n        \\"memorySnapshot\\": 0.45,\\n        \\"submittedAtTime\\": 1689746864,\\n        \\"runningAtTime\\": 1689746864,\\n        \\"progress\\": 0\\n      }\\n    ],\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取运行态的作业列表',
      'summary' => '指定时间范围内，所有仍处于“运行中”的作业的运行态数据展示。',
    ),
    'KillJobs' => 
    array (
      'path' => '/api/v1/jobs/kill',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'tenantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户id',
            'type' => 'string',
            'required' => false,
            'example' => '478403690625249',
          ),
        ),
        1 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'string',
            'required' => false,
            'example' => '[
      {
            "instanceId": "",
            "projectName": ""
      },
      {
            "instanceId": "",
            "projectName": ""
      }
]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<String>',
            'description' => 'PopResult<String>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0abb7ede16814560741256732e91b6',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0abb7ede16814560741256732e91b6\\",\\n  \\"httpCode\\": 200,\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '终止作业',
      'summary' => '终止正在运行的作业。',
    ),
    'GetJobResourceUsage' => 
    array (
      'path' => '/api/v1/jobs/resourceUsage',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'date',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的日期，以天为级别，时间参数填写必须为yyyy-MM-dd',
            'type' => 'string',
            'required' => true,
            'example' => '2023-05-15',
          ),
        ),
        1 => 
        array (
          'name' => 'jobOwnerList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '作业的执行者列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '作业的执行者列表',
              'type' => 'string',
              'required' => false,
              'example' => 'ALIYUN$xxx@test.aliyunid.com',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'quotaNicknameList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '作业使用的配额昵称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '作业使用的配额昵称列表',
              'type' => 'string',
              'required' => false,
              'example' => 'my_quota',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认为10，最大为100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<ListJobResourceUsageDTO>',
            'description' => 'PopResult<ListJobResourceUsageDTO>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0b57ff7616612271051086500ea3ce',
              ),
              'httpCode' => 
              array (
                'description' => '业务成功与否。如果非空且不是200，那么表示业务处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'errorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'success',
              ),
              'errorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '0A3B1E82006A23A918C70905BF08AEC7',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'jobResourceUsageList' => 
                  array (
                    'description' => '返回的数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回的数据列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'date' => 
                        array (
                          'description' => '日程开始日期，格式：yyyy-MM-dd。',
                          'type' => 'string',
                          'example' => '2023-05-09',
                        ),
                        'jobOwner' => 
                        array (
                          'description' => '作业的执行者',
                          'type' => 'string',
                          'example' => 'ALIYUN$xxx@test.aliyunid.com',
                        ),
                        'quotaNickname' => 
                        array (
                          'description' => '配额昵称',
                          'type' => 'string',
                          'example' => 'my_quota',
                        ),
                        'cuUsage' => 
                        array (
                          'description' => 'cu使用总量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1185100',
                        ),
                        'memoryUsage' => 
                        array (
                          'description' => '内存使用总量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '15169536',
                        ),
                      ),
                    ),
                  ),
                  'totalCount' => 
                  array (
                    'description' => '返回结果的总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '64',
                  ),
                  'pageNumber' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'pageSize' => 
                  array (
                    'description' => '每页显示条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0b57ff7616612271051086500ea3ce\\",\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"success\\",\\n  \\"errorMsg\\": \\"0A3B1E82006A23A918C70905BF08AEC7\\",\\n  \\"data\\": {\\n    \\"jobResourceUsageList\\": [\\n      {\\n        \\"date\\": \\"2023-05-09\\",\\n        \\"jobOwner\\": \\"ALIYUN$xxx@test.aliyunid.com\\",\\n        \\"quotaNickname\\": \\"my_quota\\",\\n        \\"cuUsage\\": 1185100,\\n        \\"memoryUsage\\": 15169536\\n      }\\n    ],\\n    \\"totalCount\\": 64,\\n    \\"pageNumber\\": 2,\\n    \\"pageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获得作业执行者级别的资源使用列表',
      'summary' => '指定时间范围内，针对已结束的全部作业进行统计，以“天”为级别展示作业执行者级别的资源使用总量。',
    ),
    'GetTableInfo' => 
    array (
      'path' => '/api/v1/projects/{projectName}/tables/{tableName}',
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'projectA',
          ),
        ),
        1 => 
        array (
          'name' => 'schemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'schema名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '表名',
            'type' => 'string',
            'required' => true,
            'example' => 'sale_detail',
          ),
        ),
        3 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'internal' => 'internal',
              'external' => 'external',
              'view' => 'view',
              'materialView' => 'materialView',
            ),
            'example' => 'internal',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResult<TableInfo>',
            'description' => 'PopResult<TableInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0a06dd4516687375802853481ec9fd',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'description' => '表名称。',
                    'type' => 'string',
                    'example' => 'sale_detail',
                  ),
                  'owner' => 
                  array (
                    'description' => '表的拥有者。',
                    'type' => 'string',
                    'example' => '188785396123****',
                  ),
                  'type' => 
                  array (
                    'description' => '表类型。',
                    'type' => 'string',
                    'example' => '-**internal**：内部表。
-**external**：外部表。
-**view**：视图。
-**materializedView**：物化视图。',
                  ),
                  'schema' => 
                  array (
                    'description' => '归属schema。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'creationTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2022-01-17T07:07:47Z',
                  ),
                  'viewText' => 
                  array (
                    'description' => '生成视图的语句（当前表类型为视图时展示）。',
                    'type' => 'string',
                    'example' => 'select shop_name, sum(total_price) from sale_detail group by shop_name',
                  ),
                  'displayName' => 
                  array (
                    'description' => '展示名称。',
                    'type' => 'string',
                    'example' => 'project_name.schema_name.table_name',
                  ),
                  'projectName' => 
                  array (
                    'description' => '项目名称。',
                    'type' => 'string',
                    'example' => 'projectA',
                  ),
                  'lastDDLTime' => 
                  array (
                    'description' => 'DDL最近更新时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2023-11-21T02:05:56Z',
                  ),
                  'lastModifiedTime' => 
                  array (
                    'description' => '数据最近更新时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2023-11-21T02:05:56Z',
                  ),
                  'lastAccessTime' => 
                  array (
                    'description' => '数据最近访问时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2023-11-21T02:05:56Z',
                  ),
                  'lifecycle' => 
                  array (
                    'description' => '生命周期。',
                    'type' => 'string',
                    'example' => '-1',
                  ),
                  'isExternalTable' => 
                  array (
                    'description' => '是否外部表。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'size' => 
                  array (
                    'description' => '大小。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5372',
                  ),
                  'comment' => 
                  array (
                    'description' => '表说明。',
                    'type' => 'string',
                    'example' => 'sale_detail',
                  ),
                  'tableLabel' => 
                  array (
                    'description' => '表的label级别。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'createTableDDL' => 
                  array (
                    'description' => '创建表的DDL语句。',
                    'type' => 'string',
                    'example' => 'create table if not exists sale_detail( shop_name STRING, customer_id STRING, total_price DOUBLE) partitioned by (sale_date STRING, region STRING);',
                  ),
                  'nativeColumns' => 
                  array (
                    'description' => '列信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'shop_name',
                        ),
                        'type' => 
                        array (
                          'description' => '数据类型。',
                          'type' => 'string',
                          'example' => 'STRING',
                        ),
                        'label' => 
                        array (
                          'description' => '列Label等级。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'comment' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '商店名称',
                        ),
                      ),
                    ),
                  ),
                  'partitionColumns' => 
                  array (
                    'description' => '分区列信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'sale_date',
                        ),
                        'type' => 
                        array (
                          'description' => '数据类型。',
                          'type' => 'string',
                          'example' => 'STRING',
                        ),
                        'label' => 
                        array (
                          'description' => '列Label等级。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'comment' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '销售日期',
                        ),
                      ),
                    ),
                  ),
                  'materializedView' => 
                  array (
                    'description' => '是否物化视图。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'rewriteEnabled' => 
                  array (
                    'description' => '是否允许通过物化视图执行查询改写操作。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'autoRefreshEnabled' => 
                  array (
                    'description' => '是否开启自动刷新物化视图。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'isOutdated' => 
                  array (
                    'description' => '是否因为源表数据有变化，导致物化视图数据无效。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'physicalSize' => 
                  array (
                    'description' => '物理大小。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2763',
                  ),
                  'fileNum' => 
                  array (
                    'description' => '文件数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'storageHandler' => 
                  array (
                    'description' => '外部表解析器。',
                    'type' => 'string',
                    'example' => 'com.aliyun.odps.CsvStorageHandler',
                  ),
                  'location' => 
                  array (
                    'description' => '外部表地址。',
                    'type' => 'string',
                    'example' => '外部表地址

oss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/',
                  ),
                  'odpsPropertiesRolearn' => 
                  array (
                    'description' => 'RAM 中 AliyunODPSDefaultRole 的 ARN 信息。',
                    'type' => 'string',
                    'example' => 'acs:ram::xxxxx:role/aliyunodpsdefaultrole',
                  ),
                  'tablestoreColumnsMapping' => 
                  array (
                    'description' => '描述 MaxCompute 将访问的 Tablestore 表的列，包括主键和属性列。',
                    'type' => 'string',
                    'example' => ':o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice',
                  ),
                  'tablesotreTableName' => 
                  array (
                    'description' => '需要访问的 Tablestore 表名称。',
                    'type' => 'string',
                    'example' => 'ots_tpch_orders',
                  ),
                  'odpsSqlTextOptionFlushHeader' => 
                  array (
                    'description' => '是否忽略表头。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'odpsTextOptionHeaderLinesCount' => 
                  array (
                    'description' => '忽略表头前N行。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0a06dd4516687375802853481ec9fd\\",\\n  \\"data\\": {\\n    \\"name\\": \\"sale_detail\\",\\n    \\"owner\\": \\"188785396123****\\",\\n    \\"type\\": \\"-**internal**：内部表。\\\\n-**external**：外部表。\\\\n-**view**：视图。\\\\n-**materializedView**：物化视图。\\",\\n    \\"schema\\": \\"default\\",\\n    \\"creationTime\\": 0,\\n    \\"viewText\\": \\"select shop_name, sum(total_price) from sale_detail group by shop_name\\",\\n    \\"displayName\\": \\"project_name.schema_name.table_name\\",\\n    \\"projectName\\": \\"projectA\\",\\n    \\"lastDDLTime\\": 0,\\n    \\"lastModifiedTime\\": 0,\\n    \\"lastAccessTime\\": 0,\\n    \\"lifecycle\\": \\"-1\\",\\n    \\"isExternalTable\\": false,\\n    \\"size\\": 5372,\\n    \\"comment\\": \\"sale_detail\\",\\n    \\"tableLabel\\": \\"0\\",\\n    \\"createTableDDL\\": \\"create table if not exists sale_detail( shop_name STRING, customer_id STRING, total_price DOUBLE) partitioned by (sale_date STRING, region STRING);\\",\\n    \\"nativeColumns\\": [\\n      {\\n        \\"name\\": \\"shop_name\\",\\n        \\"type\\": \\"STRING\\",\\n        \\"label\\": \\"0\\",\\n        \\"comment\\": \\"商店名称\\"\\n      }\\n    ],\\n    \\"partitionColumns\\": [\\n      {\\n        \\"name\\": \\"sale_date\\",\\n        \\"type\\": \\"STRING\\",\\n        \\"label\\": \\"0\\",\\n        \\"comment\\": \\"销售日期\\"\\n      }\\n    ],\\n    \\"materializedView\\": false,\\n    \\"rewriteEnabled\\": false,\\n    \\"autoRefreshEnabled\\": false,\\n    \\"isOutdated\\": false,\\n    \\"physicalSize\\": 2763,\\n    \\"fileNum\\": 200,\\n    \\"storageHandler\\": \\"com.aliyun.odps.CsvStorageHandler\\",\\n    \\"location\\": \\"外部表地址\\\\n\\\\noss://oss-cn-hangzhou-internal.aliyuncs.com/oss-mc-test/Demo1/\\",\\n    \\"odpsPropertiesRolearn\\": \\"acs:ram::xxxxx:role/aliyunodpsdefaultrole\\",\\n    \\"tablestoreColumnsMapping\\": \\":o_orderkey,:o_orderdate,o_custkey,o_orderstatus,o_totalprice\\",\\n    \\"tablesotreTableName\\": \\"ots_tpch_orders\\",\\n    \\"odpsSqlTextOptionFlushHeader\\": true,\\n    \\"odpsTextOptionHeaderLinesCount\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '获取表信息',
      'summary' => '获取表信息',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'maxcompute.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'maxcompute.cn-zhangjiakou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'maxcompute.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'maxcompute.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'maxcompute.cn-shenzhen.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'maxcompute.cn-chengdu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'maxcompute.cn-hongkong.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'maxcompute.ap-northeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'maxcompute.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'maxcompute.ap-southeast-2.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'maxcompute.ap-southeast-3.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'maxcompute.ap-southeast-5.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'maxcompute.us-east-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'maxcompute.us-west-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'maxcompute.eu-west-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'maxcompute.eu-central-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'maxcompute.ap-south-1.aliyuncs.com',
    ),
  ),
);
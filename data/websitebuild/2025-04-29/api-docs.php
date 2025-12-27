<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'WebsiteBuild',
        'version' => '2025-04-29',
    ],
    'components' => [
        'schemas' => [
            'AppAiStaff' => [
                'type' => 'object',
                'properties' => [
                    'StaffId' => [
                        'type' => 'string',
                    ],
                    'StaffName' => [
                        'type' => 'string',
                    ],
                    'StaffType' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AppInstance' => [
                'type' => 'object',
                'properties' => [
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'AppType' => [
                        'type' => 'string',
                    ],
                    'AppSubType' => [
                        'type' => 'string',
                    ],
                    'BuildType' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'IconUrl' => [
                        'type' => 'string',
                    ],
                    'ThumbnailUrl' => [
                        'type' => 'string',
                    ],
                    'Slug' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'StatusText' => [
                        'type' => 'string',
                    ],
                    'DesignSpecId' => [
                        'type' => 'string',
                    ],
                    'GmtPublish' => [
                        'type' => 'string',
                    ],
                    'GmtDelete' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'Domain' => [
                        'type' => 'string',
                    ],
                    'SiteHost' => [
                        'type' => 'string',
                    ],
                    'EspBizId' => [
                        'type' => 'string',
                    ],
                    'Deleted' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DesignSpecBizId' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'Profile' => [
                        '$ref' => '#/components/schemas/AppInstanceProfile',
                    ],
                ],
            ],
            'AppInstanceAggregate' => [
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'AppType' => [
                        'type' => 'string',
                    ],
                    'AppSubType' => [
                        'type' => 'string',
                    ],
                    'BuildType' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'IconUrl' => [
                        'type' => 'string',
                    ],
                    'ThumbnailUrl' => [
                        'type' => 'string',
                    ],
                    'Slug' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'StatusText' => [
                        'type' => 'string',
                    ],
                    'DesignSpecId' => [
                        'type' => 'string',
                    ],
                    'GmtPublish' => [
                        'type' => 'string',
                    ],
                    'GmtDelete' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'Domain' => [
                        'type' => 'string',
                    ],
                    'SiteHost' => [
                        'type' => 'string',
                    ],
                    'EspBizId' => [
                        'type' => 'string',
                    ],
                    'Deleted' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DesignSpecBizId' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'Profile' => [
                        '$ref' => '#/components/schemas/AppInstanceProfile',
                    ],
                    'AppOperationAddress' => [
                        '$ref' => '#/components/schemas/AppOperationAddress',
                    ],
                    'AiStaffList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AppAiStaff',
                        ],
                    ],
                    'AppServiceList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AppServiceAggregate',
                        ],
                    ],
                ],
            ],
            'AppInstanceProfile' => [
                'type' => 'object',
                'properties' => [
                    'CommodityCode' => [
                        'type' => 'string',
                    ],
                    'PayTime' => [
                        'type' => 'string',
                    ],
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TemplateEtag' => [
                        'type' => 'string',
                    ],
                    'OrderId' => [
                        'type' => 'string',
                    ],
                    'SeoSite' => [
                        'type' => 'string',
                    ],
                    'CustomerService' => [
                        'type' => 'string',
                    ],
                    'ApplicationType' => [
                        'type' => 'string',
                    ],
                    'ApplicationTypeText' => [
                        'type' => 'string',
                    ],
                    'DeployArea' => [
                        'type' => 'string',
                    ],
                    'SiteVersion' => [
                        'type' => 'string',
                    ],
                    'SiteVersionText' => [
                        'type' => 'string',
                    ],
                    'OrdTime' => [
                        'type' => 'string',
                    ],
                    'Source' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AppOperateAction' => [
                'type' => 'object',
                'properties' => [
                    'ActionKey' => [
                        'type' => 'string',
                    ],
                    'ActionText' => [
                        'type' => 'string',
                    ],
                    'Href' => [
                        'type' => 'string',
                    ],
                    'Enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'AppOperationAddress' => [
                'type' => 'object',
                'properties' => [
                    'Actions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AppOperateAction',
                        ],
                    ],
                ],
            ],
            'AppService' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'ServiceType' => [
                        'type' => 'string',
                    ],
                    'ServiceTypeText' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Deleted' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'Slug' => [
                        'type' => 'string',
                    ],
                    'InstanceBizId' => [
                        'type' => 'string',
                    ],
                    'EspBizId' => [
                        'type' => 'string',
                    ],
                    'Profile' => [
                        '$ref' => '#/components/schemas/AppServiceProfile',
                    ],
                ],
            ],
            'AppServiceAggregate' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'ServiceType' => [
                        'type' => 'string',
                    ],
                    'ServiceTypeText' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Deleted' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'Slug' => [
                        'type' => 'string',
                    ],
                    'InstanceBizId' => [
                        'type' => 'string',
                    ],
                    'EspBizId' => [
                        'type' => 'string',
                    ],
                    'Profile' => [
                        '$ref' => '#/components/schemas/AppServiceProfile',
                    ],
                    'OperationAddress' => [
                        '$ref' => '#/components/schemas/AppOperationAddress',
                    ],
                ],
            ],
            'AppServiceGroup' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Url' => [
                        'type' => 'string',
                    ],
                    'QrCode' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AppServiceProfile' => [
                'type' => 'object',
                'properties' => [
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'DesignType' => [
                        'type' => 'string',
                    ],
                    'DesignTypeText' => [
                        'type' => 'string',
                    ],
                    'ServiceSpec' => [
                        'type' => 'string',
                    ],
                    'ServiceSpecText' => [
                        'type' => 'string',
                    ],
                    'OrderId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'GetDomainInfoForPartner' => [
            'path' => '',
            'methods' => [
                'get',
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
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetUserAccessTokenForPartner' => [
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
                    'name' => 'Ticket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SiteHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DispatchConsoleAPIForPartner' => [
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
                    'name' => 'LiveToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Operation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Params',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SiteHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetIcpFilingInfoForPartner' => [
            'path' => '',
            'methods' => [
                'get',
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUserTmpIdentityForPartner' => [
            'path' => '',
            'methods' => [
                'get',
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AuthPurpose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceLinkedRole',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Extend',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SyncAppInstanceForPartner' => [
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
                    'name' => 'SourceBizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppInstance',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BizId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AppType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IconUrl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ThumbnailUrl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Slug' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'GmtPublish' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'GmtDelete' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SiteHost' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Deleted' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Profile' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'TemplateId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'TemplateEtag' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'DeployArea' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SiteVersion' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LxInstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Operator',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'OperateAppInstanceForPartner' => [
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
                    'name' => 'OperateEvent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Extend',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'OperateAppServiceForPartner' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OperateEvent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Extend',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SearchImage' => [
            'path' => '',
            'methods' => [
                'get',
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
                    'name' => 'Text',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'ColorHex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinWidth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxWidth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinHeight',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxHeight',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'HasPerson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCreateLogoTask' => [
            'path' => '',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLogoTask' => [
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
                    'name' => 'Prompt',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NegativePrompt',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogoVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyAppInstanceSpec' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeployArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SiteVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Extend',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BindAppDomain' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OperateType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Extend',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAppInstanceDomains' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderColumn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SetAppDomainCertificate' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertificateType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PublicKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PrivateKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertificateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnbindAppDomain' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeAppDomainDnsRecord' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Purpose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAppDomainRedirectRecords' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAppDomainRedirect' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RecordId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAppDomainCertificate' => [
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
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];
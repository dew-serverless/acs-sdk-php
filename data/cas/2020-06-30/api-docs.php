<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cas',
        'version' => '2020-06-30',
    ],
    'directories' => [
        [
            'id' => 172165,
            'title' => '私有CA证书',
            'type' => 'directory',
            'children' => [
                'UpdateCACertificateStatus',
                'DescribeCACertificateCount',
                'DescribeCACertificate',
                'DescribeCACertificateList',
                'CreateSubCACertificate',
                'CreateRootCACertificate',
                'GetCAInstanceStatus',
            ],
        ],
        [
            'id' => 172174,
            'title' => '客户端和服务端证书',
            'type' => 'directory',
            'children' => [
                'CreateCustomCertificate',
                'CreateClientCertificate',
                'CreateClientCertificateWithCsr',
                'CreateRevokeClientCertificate',
                'CreateServerCertificate',
                'CreateServerCertificateWithCsr',
                'DeleteClientCertificate',
                'DescribeCertificatePrivateKey',
                'DescribeClientCertificate',
                'DescribeClientCertificateStatus',
                'ListClientCertificate',
                'ListRevokeCertificate',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'UpdateCACertificateStatus' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改状态的CA证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeCACertificateList](~~465957~~)查询所有CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对该CA证书执行的操作。取值固定为**REVOKE**，表示吊销CA证书，即将CA证书的状态修改为**REVOKE**。'."\n"
                            ."\n"
                            .'> 只有当CA证书的当前状态为**ISSUE**时，才支持该操作。您可以调用[DescribeCACertificate](~~465954~~)查询CA证书的当前状态。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'REVOKE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateCACertificateStatusResponse>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</UpdateCACertificateStatusResponse>","errorExample":""}]',
            'title' => '更新CA证书状态',
            'summary' => '将根CA证书或子CA证书的状态由正常签发修改为吊销。',
            'description' => 'CA证书经创建后，默认为正常签发状态。您可以调用本接口将CA证书的状态从正常签发修改为吊销。在正常签发状态下，CA证书可用于签发证书。在吊销状态下，CA证书不可用于签发证书，同时经该CA证书签发的证书也会相应失效。'."\n"
                ."\n"
                .'调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书、调用[CreateSubCACertificate](~~465959~~)创建了子CA证书。'."\n"
                ."\n\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeCACertificateCount' => [
            'methods' => [
                'post',
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
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '已创建的CA证书（包括根CA证书、子CA证书）的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeCACertificateCountResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</DescribeCACertificateCountResponse>","errorExample":""}]',
            'title' => '查询已创建的CA证书的数量',
            'summary' => '查询已创建的CA证书的数量。',
            'description' => '本接口用于查询您已创建的CA证书（包括根CA证书、子CA证书）的数量。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeCACertificate' => [
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
                'abilityTreeCode' => '83512',
                'abilityTreeNodes' => [
                    'FEATUREcasFBEHXR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的CA证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeCACertificateList](~~465957~~)查询所有CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DescribeCertificateResponse<CaCertificateDTO>',
                        'description' => 'DescribeCertificateResponse<CaCertificateDTO>。',
                        'type' => 'object',
                        'properties' => [
                            'Certificate' => [
                                'description' => 'CA证书的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CertificateType' => [
                                        'description' => 'CA证书的类型。取值：'."\n"
                                            ."\n"
                                            .'- **ROOT**：表示根CA证书。'."\n"
                                            .'- **SUB_ROOT**：表示子CA证书。',
                                        'type' => 'string',
                                        'example' => 'SUB_ROOT',
                                    ],
                                    'X509Certificate' => [
                                        'description' => 'CA证书的内容。',
                                        'type' => 'string',
                                        'example' => '-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----',
                                    ],
                                    'Identifier' => [
                                        'description' => 'CA证书的唯一识别码。',
                                        'type' => 'string',
                                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                                    ],
                                    'SerialNumber' => [
                                        'description' => 'CA证书的序列号。',
                                        'type' => 'string',
                                        'example' => '70e3b2566d92805173767869727fb92e****',
                                    ],
                                    'SubjectDN' => [
                                        'description' => 'CA证书的使用者属性，包含以下信息：'."\n"
                                            ."\n"
                                            .'- **C**：组织机构所在国家代码。'."\n"
                                            .'- **O**：组织机构的名称。'."\n"
                                            .'- **OU**：组织机构下的部门。'."\n"
                                            .'- **L**：组织机构所在城市。'."\n"
                                            .'<props="china">- **ST**：组织机构所在省份、直辖市或自治区。</props>'."\n"
                                            .'<props="intl">- **ST**：组织机构所在省份或州。</props>'."\n"
                                            .'- **CN**：组织机构的通用名称或简称。'."\n",
                                        'type' => 'string',
                                        'example' => 'C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun',
                                    ],
                                    'CommonName' => [
                                        'description' => 'CA证书关联的组织机构的通用名称或简称。',
                                        'type' => 'string',
                                        'example' => 'Aliyun',
                                    ],
                                    'OrganizationUnit' => [
                                        'description' => 'CA证书关联的组织机构下部门的名称。',
                                        'type' => 'string',
                                        'example' => 'Security',
                                    ],
                                    'Organization' => [
                                        'description' => 'CA证书关联的组织机构的名称。',
                                        'type' => 'string',
                                        'example' => '阿里云计算有限公司',
                                    ],
                                    'Locality' => [
                                        'description' => 'CA证书关联的组织机构所在城市的名称。',
                                        'type' => 'string',
                                        'example' => 'Hangzhou',
                                    ],
                                    'State' => [
                                        'description' => '<props="china">CA证书关联的组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                                            .'<props="intl">CA证书关联的组织机构所在省份或州的名称。</props>'."\n",
                                        'type' => 'string',
                                        'example' => 'Zhejiang',
                                    ],
                                    'CountryCode' => [
                                        'description' => 'CA证书关联的组织机构所在国家的代码。'."\n"
                                            ."\n"
                                            .'关于不同国家代码的含义，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                                        'type' => 'string',
                                        'example' => 'CN',
                                    ],
                                    'Sans' => [
                                        'description' => '该参数已废弃。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Status' => [
                                        'description' => 'CA证书的状态。取值：'."\n"
                                            ."\n"
                                            .'- **ISSUE**：表示正常签发。'."\n"
                                            .'- **REVOKE**：表示已被吊销。'."\n",
                                        'type' => 'string',
                                        'example' => 'ISSUE',
                                    ],
                                    'Algorithm' => [
                                        'description' => 'CA证书的加密算法类型。取值：'."\n"
                                            ."\n"
                                            .'- **RSA**：表示RSA算法。'."\n"
                                            .'- **ECC**：表示ECC算法。'."\n"
                                            .'- **SM2**：表示SM2（国密）算法。',
                                        'type' => 'string',
                                        'example' => 'RSA',
                                    ],
                                    'KeySize' => [
                                        'description' => 'CA证书的密钥长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2048',
                                    ],
                                    'SignAlgorithm' => [
                                        'description' => 'CA证书的签名算法。',
                                        'type' => 'string',
                                        'example' => 'SHA256WITHRSA',
                                    ],
                                    'BeforeDate' => [
                                        'description' => 'CA证书的签发日期。使用时间戳表示，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634283958000',
                                    ],
                                    'AfterDate' => [
                                        'description' => 'CA证书的到期日期。使用时间戳表示，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1665819958000',
                                    ],
                                    'ParentIdentifier' => [
                                        'description' => '签发该CA证书的根CA证书的唯一识别码。'."\n"
                                            ."\n"
                                            .'> 只有当**CertificateType**为**SUB_ROOT**（表示子CA证书）时，才会返回该参数。',
                                        'type' => 'string',
                                        'example' => '1a83bcbb89e562885e40aa0108f5****',
                                    ],
                                    'Sha2' => [
                                        'description' => 'CA证书的SHA256数字指纹。',
                                        'type' => 'string',
                                        'example' => '14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****',
                                    ],
                                    'Md5' => [
                                        'description' => 'CA证书的MD5数字指纹。',
                                        'type' => 'string',
                                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                                    ],
                                    'CrlStatus' => [
                                        'description' => 'CRL状态（启用状态）。',
                                        'type' => 'string',
                                        'example' => 'ACTIVE',
                                    ],
                                    'CrlUrl' => [
                                        'description' => 'CRL地址。',
                                        'type' => 'string',
                                        'example' => 'https://crl-cn-publish.oss-cn-hangzhou.aliyuncs.com/pca/crl/1925647866611395/1ed40789-483f-6023-b6b8-29ddd3bb0a9a.crl',
                                    ],
                                    'CertTotalCount' => [
                                        'description' => '已购买证书配额总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '40',
                                    ],
                                    'CertRemainingCount' => [
                                        'description' => '剩余可分配证书配额数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30',
                                    ],
                                    'CertIssuedCount' => [
                                        'description' => '私有CA实例已经签发证书的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'CaCertChain' => [
                                        'description' => '完整证书链。',
                                        'type' => 'string',
                                        'example' => '-----BEGIN CERTIFICATE-----'."\n"
                                            .'用户证书'."\n"
                                            .'-----END CERTIFICATE-----'."\n"
                                            ."\n"
                                            .'-----BEGIN CERTIFICATE-----'."\n"
                                            .'中间证书'."\n"
                                            .'-----END CERTIFICATE-----'."\n"
                                            ."\n"
                                            .'-----BEGIN CERTIFICATE-----'."\n"
                                            .'根证书'."\n"
                                            .'-----END CERTIFICATE-----',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'Years' => [
                                'description' => 'CA证书的有效期，单位：年。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Certificate\\": {\\n    \\"CertificateType\\": \\"SUB_ROOT\\",\\n    \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----\\",\\n    \\"Identifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n    \\"SerialNumber\\": \\"70e3b2566d92805173767869727fb92e****\\",\\n    \\"SubjectDN\\": \\"C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun\\",\\n    \\"CommonName\\": \\"Aliyun\\",\\n    \\"OrganizationUnit\\": \\"Security\\",\\n    \\"Organization\\": \\"阿里云计算有限公司\\",\\n    \\"Locality\\": \\"Hangzhou\\",\\n    \\"State\\": \\"Zhejiang\\",\\n    \\"CountryCode\\": \\"CN\\",\\n    \\"Sans\\": \\"1\\",\\n    \\"Status\\": \\"ISSUE\\",\\n    \\"Algorithm\\": \\"RSA\\",\\n    \\"KeySize\\": 2048,\\n    \\"SignAlgorithm\\": \\"SHA256WITHRSA\\",\\n    \\"BeforeDate\\": 1634283958000,\\n    \\"AfterDate\\": 1665819958000,\\n    \\"ParentIdentifier\\": \\"1a83bcbb89e562885e40aa0108f5****\\",\\n    \\"Sha2\\": \\"14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****\\",\\n    \\"Md5\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n    \\"CrlStatus\\": \\"ACTIVE\\",\\n    \\"CrlUrl\\": \\"https://crl-cn-publish.oss-cn-hangzhou.aliyuncs.com/pca/crl/1925647866611395/1ed40789-483f-6023-b6b8-29ddd3bb0a9a.crl\\",\\n    \\"CertTotalCount\\": 40,\\n    \\"CertRemainingCount\\": 30,\\n    \\"CertIssuedCount\\": 10,\\n    \\"CaCertChain\\": \\"-----BEGIN CERTIFICATE-----\\\\n用户证书\\\\n-----END CERTIFICATE-----\\\\n\\\\n-----BEGIN CERTIFICATE-----\\\\n中间证书\\\\n-----END CERTIFICATE-----\\\\n\\\\n-----BEGIN CERTIFICATE-----\\\\n根证书\\\\n-----END CERTIFICATE-----\\"\\n  },\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"Years\\": 10\\n}","errorExample":""},{"type":"xml","example":"<DescribeCACertificateResponse>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <Certificate>\\n        <Years>5</Years>\\n        <Status>ISSUE</Status>\\n        <SerialNumber>70e3b2566d92805173767869727fb92e****</SerialNumber>\\n        <CertificateType>SUB_ROOT</CertificateType>\\n        <Algorithm>RSA</Algorithm>\\n        <State>Zhejiang</State>\\n        <Organization>阿里云计算有限公司</Organization>\\n        <ParentIdentifier>1a83bcbb89e562885e40aa0108f5****</ParentIdentifier>\\n        <Locality>Hangzhou</Locality>\\n        <Identifier>160ae6bb538d538c70c01f81dcf2****</Identifier>\\n        <KeySize>2048</KeySize>\\n        <X509Certificate>-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----</X509Certificate>\\n        <SubjectDN>C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun</SubjectDN>\\n        <SignAlgorithm>SHA256WITHRSA</SignAlgorithm>\\n        <OrganizationUnit>Security</OrganizationUnit>\\n        <AfterDate>1665819958000</AfterDate>\\n        <Sha2>14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****</Sha2>\\n        <CommonName>Aliyun</CommonName>\\n        <Md5>160ae6bb538d538c70c01f81dcf2****</Md5>\\n        <CountryCode>CN</CountryCode>\\n        <BeforeDate>1634283958000</BeforeDate>\\n    </Certificate>\\n</DescribeCACertificateResponse>","errorExample":""}]',
            'title' => '查询单个根CA证书或子CA证书的详细信息',
            'summary' => '查询单个根CA证书或子CA证书的详细信息。',
            'description' => '本接口用于通过证书的唯一识别码，查询单个根CA证书或子CA证书的详细信息，例如，CA证书的序列号、使用者信息、证书内容等。'."\n"
                ."\n"
                .'调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书、调用[CreateSubCACertificate](~~465959~~)创建了子CA证书。'."\n"
                ."\n\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeCACertificateList' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含CA证书的数量。默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CA证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeCACertificateList](~~328095~~)查询所有CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1ee47e24-c51b-67cc-aa6b-1f7561cf9d9a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的根CA证书和子CA证书的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageCount' => [
                                'description' => '返回结果的页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ShowSize' => [
                                'description' => '每页包含CA证书的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'CertificateList' => [
                                'description' => 'CA证书的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Years' => [
                                            'description' => 'CA证书的有效期，单位：年。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'Status' => [
                                            'description' => 'CA证书的状态。取值：'."\n"
                                                ."\n"
                                                .'- **ISSUE**：表示正常签发。'."\n"
                                                .'- **REVOKE**：表示已被吊销。',
                                            'type' => 'string',
                                            'example' => 'ISSUE',
                                        ],
                                        'SerialNumber' => [
                                            'description' => 'CA证书的序列号。',
                                            'type' => 'string',
                                            'example' => '70e3b2566d92805173767869727fb92e****',
                                        ],
                                        'CertificateType' => [
                                            'description' => 'CA证书的类型。取值：'."\n"
                                                ."\n"
                                                .'- **ROOT**：表示根CA证书。'."\n"
                                                .'- **SUB_ROOT**：表示子CA证书。',
                                            'type' => 'string',
                                            'example' => 'SUB_ROOT',
                                        ],
                                        'Algorithm' => [
                                            'description' => 'CA证书的加密算法类型。取值：'."\n"
                                                ."\n"
                                                .'- **RSA**：表示RSA算法。'."\n"
                                                .'- **ECC**：表示ECC算法。'."\n"
                                                .'- **SM2**：表示SM2（国密）算法。',
                                            'type' => 'string',
                                            'example' => 'RSA',
                                        ],
                                        'State' => [
                                            'description' => '<props="china">CA证书关联的组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                                                .'<props="intl">CA证书关联的组织机构所在省份或州的名称。</props>',
                                            'type' => 'string',
                                            'example' => 'Zhejiang',
                                        ],
                                        'Organization' => [
                                            'description' => 'CA证书关联的组织机构的名称。',
                                            'type' => 'string',
                                            'example' => '阿里云计算有限公司',
                                        ],
                                        'ParentIdentifier' => [
                                            'description' => '签发该CA证书的根CA证书的唯一识别码。'."\n"
                                                ."\n"
                                                .'> 只有当**CertificateType**为**SUB_ROOT**（表示子CA证书）时，才会返回该参数。',
                                            'type' => 'string',
                                            'example' => '1a83bcbb89e562885e40aa0108f5****',
                                        ],
                                        'Locality' => [
                                            'description' => 'CA证书关联的组织机构所在城市的名称。',
                                            'type' => 'string',
                                            'example' => 'Hangzhou',
                                        ],
                                        'Identifier' => [
                                            'description' => 'CA证书的唯一识别码。',
                                            'type' => 'string',
                                            'example' => '160ae6bb538d538c70c01f81dcf2****',
                                        ],
                                        'Sans' => [
                                            'description' => '该参数已废弃。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'KeySize' => [
                                            'description' => 'CA证书的密钥长度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2048',
                                        ],
                                        'X509Certificate' => [
                                            'description' => 'CA证书的内容。',
                                            'type' => 'string',
                                            'example' => '-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----',
                                        ],
                                        'SubjectDN' => [
                                            'description' => 'CA证书的DN（Distinguished Name）属性，表示证书的使用者，具体包含以下信息：'."\n"
                                                ."\n"
                                                .'- **C**：组织机构所在国家代码。'."\n"
                                                .'- **O**：组织机构的名称。'."\n"
                                                .'- **OU**：组织机构下的部门。'."\n"
                                                .'- **L**：组织机构所在城市。'."\n"
                                                .'- **CN**：组织机构的通用名称或简称。',
                                            'type' => 'string',
                                            'example' => 'C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun',
                                        ],
                                        'SignAlgorithm' => [
                                            'description' => 'CA证书的签名算法。',
                                            'type' => 'string',
                                            'example' => 'SHA256WITHRSA',
                                        ],
                                        'OrganizationUnit' => [
                                            'description' => 'CA证书关联的组织机构下部门的名称。',
                                            'type' => 'string',
                                            'example' => 'Security',
                                        ],
                                        'AfterDate' => [
                                            'description' => 'CA证书的到期日期。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665819958000',
                                        ],
                                        'Sha2' => [
                                            'description' => 'CA证书的SHA256数字指纹。',
                                            'type' => 'string',
                                            'example' => '14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****',
                                        ],
                                        'CommonName' => [
                                            'description' => 'CA证书关联的组织机构的通用名称或简称。',
                                            'type' => 'string',
                                            'example' => 'Aliyun',
                                        ],
                                        'Md5' => [
                                            'description' => 'CA证书的MD5数字指纹。',
                                            'type' => 'string',
                                            'example' => '160ae6bb538d538c70c01f81dcf2****',
                                        ],
                                        'CountryCode' => [
                                            'description' => 'CA证书关联的组织机构所在国家的代码。'."\n"
                                                ."\n"
                                                .'关于不同国家代码的含义，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                                            'type' => 'string',
                                            'example' => 'CN',
                                        ],
                                        'BeforeDate' => [
                                            'description' => 'CA证书的签发日期。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1634283958000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageCount\\": 1,\\n  \\"ShowSize\\": 20,\\n  \\"CertificateList\\": [\\n    {\\n      \\"Years\\": 3,\\n      \\"Status\\": \\"ISSUE\\",\\n      \\"SerialNumber\\": \\"70e3b2566d92805173767869727fb92e****\\",\\n      \\"CertificateType\\": \\"SUB_ROOT\\",\\n      \\"Algorithm\\": \\"RSA\\",\\n      \\"State\\": \\"Zhejiang\\",\\n      \\"Organization\\": \\"阿里云计算有限公司\\",\\n      \\"ParentIdentifier\\": \\"1a83bcbb89e562885e40aa0108f5****\\",\\n      \\"Locality\\": \\"Hangzhou\\",\\n      \\"Identifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n      \\"Sans\\": \\"1\\",\\n      \\"KeySize\\": 2048,\\n      \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----\\",\\n      \\"SubjectDN\\": \\"C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun\\",\\n      \\"SignAlgorithm\\": \\"SHA256WITHRSA\\",\\n      \\"OrganizationUnit\\": \\"Security\\",\\n      \\"AfterDate\\": 1665819958000,\\n      \\"Sha2\\": \\"14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****\\",\\n      \\"CommonName\\": \\"Aliyun\\",\\n      \\"Md5\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n      \\"CountryCode\\": \\"CN\\",\\n      \\"BeforeDate\\": 1634283958000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCACertificateListResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <TotalCount>2</TotalCount>\\n    <PageCount>1</PageCount>\\n    <ShowSize>20</ShowSize>\\n    <CertificateList>\\n        <Years>1</Years>\\n        <Status>ISSUE</Status>\\n        <SerialNumber>70e3b2566d92805173767869727fb92e****</SerialNumber>\\n        <CertificateType>SUB_ROOT</CertificateType>\\n        <Algorithm>RSA</Algorithm>\\n        <State>Zhejiang</State>\\n        <Organization>阿里云计算有限公司</Organization>\\n        <ParentIdentifier>1a83bcbb89e562885e40aa0108f5****</ParentIdentifier>\\n        <Locality>Hangzhou</Locality>\\n        <Identifier>160ae6bb538d538c70c01f81dcf2****</Identifier>\\n        <KeySize>2048</KeySize>\\n        <X509Certificate>-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----</X509Certificate>\\n        <SubjectDN>C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun</SubjectDN>\\n        <SignAlgorithm>SHA256WITHRSA</SignAlgorithm>\\n        <OrganizationUnit>Security</OrganizationUnit>\\n        <AfterDate>1665819958000</AfterDate>\\n        <Sha2>14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****</Sha2>\\n        <CommonName>Aliyun</CommonName>\\n        <Md5>160ae6bb538d538c70c01f81dcf2****</Md5>\\n        <CountryCode>CN</CountryCode>\\n        <BeforeDate>1634283958000</BeforeDate>\\n    </CertificateList>\\n    <CertificateList>\\n        <Years>1</Years>\\n        <Status>ISSUE</Status>\\n        <SerialNumber>566d70e3b292805173767869727fb92e****</SerialNumber>\\n        <CertificateType>ROOT</CertificateType>\\n        <Algorithm>RSA</Algorithm>\\n        <State>Zhejiang</State>\\n        <Organization>阿里巴巴网络技术有限公司</Organization>\\n        <Locality>Hangzhou</Locality>\\n        <Identifier>1a83bcbb89e562885e40aa0108f5****</Identifier>\\n        <KeySize>2048</KeySize>\\n        <X509Certificate>-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----</X509Certificate>\\n        <SubjectDN>C=CN,O=阿里巴巴网络技术有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Alibaba</SubjectDN>\\n        <SignAlgorithm>SHA256WITHRSA</SignAlgorithm>\\n        <OrganizationUnit>Security</OrganizationUnit>\\n        <AfterDate>1665819958000</AfterDate>\\n        <Sha2>1fcec36d65814dcc8afc7578ef7e20de18f6957bbac42b373a66bc9de4e9****</Sha2>\\n        <CommonName>Aliyun</CommonName>\\n        <Md5>1a83bcbb89e562885e40aa0108f5****</Md5>\\n        <CountryCode>CN</CountryCode>\\n        <BeforeDate>1634283958000</BeforeDate>\\n    </CertificateList>\\n</DescribeCACertificateListResponse>","errorExample":""}]',
            'title' => '查询所有根CA证书和子CA证书的信息',
            'summary' => '查询所有根CA证书和子CA证书的信息。',
            'description' => '本接口用于分页查询您已创建的所有CA证书（包括根CA证书和子CA证书）的详细信息，例如，CA证书的唯一识别码、序列号、使用者信息、证书内容等。'."\n"
                ."\n\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'CreateSubCACertificate' => [
            'summary' => '创建一个子CA证书。',
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根CA证书的唯一识别码。'."\n"
                            ."\n\n"
                            .'> 您可以调用[DescribeCACertificateList](~~465957~~)查询所有CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1a83bcbb89e562885e40aa0108f5****',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构的通用名称或简称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Aliyun',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构下部门或分支的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Security',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子CA证书关联的组织机构（对应您的企业或单位）的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云计算有限公司',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构所在城市的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hangzhou',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '<props="china">组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。</props>'."\n"
                            .'<props="intl">组织机构所在省份或州的名称。支持使用中文、英文字符等。</props>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'CountryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构所在国家或地区的代码，使用两位或三位大写英文字母缩写表示。例如，**CN**表示中国，**US**表示美国。'."\n"
                            ."\n"
                            .'关于不同国家的代码，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子CA证书的密钥算法类型。密钥算法使用`<加密算法>_<密钥长度>`格式表示。取值：'."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n\n"
                            .'子CA证书的加密算法必须与根CA证书一致，密钥长度可以不一致。示例：根CA证书的密钥算法为**RSA\\_2048**，则子CA证书的密钥算法必须是**RSA\\_1024**、**RSA\\_2048**、**RSA\\_4096**。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeCACertificate](~~465954~~)查询根CA证书的密钥算法。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子CA证书的有效期，单位：年。'."\n"
                            ."\n"
                            .'建议设置为5~10年。'."\n"
                            ."\n\n"
                            .'> 子CA证书的有效期不能超过根CA证书的有效期。您可以调用[DescribeCACertificate](~~465954~~)查询根CA证书的有效期。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'PathLenConstraint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书路径长度限制，默认0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ExtendedKeyUsages',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '扩展密钥用法',
                        'type' => 'array',
                        'items' => [
                            'description' => '扩展密钥用法，允许以下其一：'."\n"
                                ."\n"
                                .'-  any'."\n"
                                .'-  serverAuth'."\n"
                                .'-  clientAuth'."\n"
                                .'-  codeSigning'."\n"
                                .'-  emailProtection'."\n"
                                .'-  timeStamping'."\n"
                                .'-  OCSPSigning'."\n"
                                .'-  其他扩展密钥用法OID',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'codeSigning' => '代码签名',
                                'emailProtection' => '邮件保护',
                                'serverAuth' => '服务器认证',
                                'timeStamping' => '签发时间戳',
                                'any' => '任意',
                                'clientAuth' => '客户端认证',
                                'OCSPSigning' => 'OCSP签名',
                            ],
                            'example' => 'serverAuth',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'EnableCrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用CRL服务'."\n"
                            ."\n"
                            .'- 0 - 否'."\n"
                            .'- 1 - 是',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CrlDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CRL有效期 1-365天',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiResponse<CreateCaCertificateResult>',
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'Identifier' => [
                                'description' => '本次请求创建的子CA证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '160ae6bb538d538c70c01f81dcf2****',
                            ],
                            'Certificate' => [
                                'description' => '本次调用创建的PEM格式证书。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => '本次调用创建的证书的CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"Identifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n  \\"Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSubCACertificateResponse>\\n    <Identifier>160ae6bb538d538c70c01f81dcf2****</Identifier>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n      -----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </CertificateChain>\\n</CreateSubCACertificateResponse>","errorExample":""}]',
            'title' => '创建子CA证书',
            'description' => '本接口用于通过已有的根CA证书签发一个子CA证书。子CA证书可用于签发客户端和服务端证书。'."\n"
                ."\n"
                .'调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => '-  serverAuth  :服务器认证'."\n"
                .'-  clientAuth :客户端认证'."\n"
                .'-  codeSigning :代码签名'."\n"
                .'-  emailProtection :邮件保护'."\n"
                .'-  timeStamping :时间戳'."\n"
                .'-  OCSPSigning :OCSP签名'."\n"
                .'-  其他扩展密钥用法OID',
        ],
        'CreateRootCACertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构的通用名称或简称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Alibaba',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构下部门或分支的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Security',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根CA证书关联的组织机构（对应您的企业或单位）的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里巴巴网络技术有限公司',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构所在城市的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hangzhou',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '<props="china">组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。</props>'."\n"
                            .'<props="intl">组织机构所在省份或州的名称。支持使用中文、英文字符等。</props>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'CountryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构所在国家或地区的代码，使用两位大写英文字母缩写表示。例如，**CN**表示中国，**US**表示美国。'."\n"
                            ."\n"
                            .'关于不同国家的代码，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根CA证书的密钥算法类型。密钥算法使用`<加密算法>_<密钥长度>`格式表示。取值：'."\n"
                            ."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_384**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_512**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n\n"
                            .'根CA证书的加密算法必须与您购买的私有根CA的**证书算法**一致。示例：如果您购买私有根CA时选择的**证书算法**为**RSA**，则根CA证书的密钥算法必须是**RSA\\_1024**、**RSA\\_2048**或**RSA\\_4096**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根CA证书的有效期，单位：年。'."\n"
                            ."\n"
                            .'> 建议设置为5~10年。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiResponse<CreateCaCertificateResult>',
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6D9B4C5F-7140-5B41-924C-329181DC00C1',
                            ],
                            'Identifier' => [
                                'description' => '本次请求创建的根CA证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '1a83bcbb89e562885e40aa0108f5****',
                            ],
                            'Certificate' => [
                                'description' => '本次调用创建的PEM格式根证书。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => '本次调用创建的根证书的CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6D9B4C5F-7140-5B41-924C-329181DC00C1\\",\\n  \\"Identifier\\": \\"1a83bcbb89e562885e40aa0108f5****\\",\\n  \\"Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRootCACertificateResponse>\\n    <Identifier>1a83bcbb89e562885e40aa0108f5****</Identifier>\\n    <RequestId>6D9B4C5F-7140-5B41-924C-329181DC00C1</RequestId>\\n    <Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n      -----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </CertificateChain>\\n</CreateRootCACertificateResponse>","errorExample":""}]',
            'title' => '创建根CA证书',
            'summary' => '创建一个根CA证书。',
            'description' => '本接口用于创建一个自签名的根CA证书。根CA证书是企业内部私有证书信任链的起点。只有创建根CA证书后，您才可以使用根CA证书签发子CA证书，然后使用子CA证书签发客户端与服务端证书。'."\n"
                ."\n"
                .'调用本接口前，您必须已经通过[SSL证书服务控制台](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist)购买了私有根CA，否则会调用失败。相关操作，请参见[购买私有CA](~~208553~~)。'."\n"
                ."\n\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'GetCAInstanceStatus' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的私有CA实例的ID。'."\n"
                            ."\n"
                            .'> 您在[数字证书管理服务控制台](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist)购买私有CA实例后，可以在**私有证书**页面，通过查看私有CA实例的**详情**，获取私有CA实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cas-member-0hmi****',
                    ],
                ],
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的客户端证书或服务端证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[ListClientCertificate](~~330884~~)查询所有客户端证书和服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '25589516-2A56-5159-AB88-4A1D9824E183',
                            ],
                            'InstanceStatusList' => [
                                'description' => '私有CA实例的状态详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CertTotalCount' => [
                                            'description' => '私有CA实例能够签发证书的数量。'."\n"
                                                ."\n"
                                                .'对于私有根CA实例（**Type**为**ROOT**），该参数表示能够签发的子CA证书的数量。'."\n"
                                                .'对于私有子CA实例（**Type**为**SUB_ROOT**），该参数表示能够签发的客户端证书和服务端证书的总数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'Status' => [
                                            'description' => '私有CA实例的状态。取值：'."\n"
                                                ."\n"
                                                .'- **BUY**：表示已购买但是未启用。'."\n"
                                                .'- **USED**：表示已启用。'."\n"
                                                .'- **REFUND**：表示已退款。'."\n"
                                                .'- **REVOKE**：表示已被吊销。',
                                            'type' => 'string',
                                            'example' => 'USED',
                                        ],
                                        'Type' => [
                                            'description' => '私有CA实例的类型。取值：'."\n"
                                                ."\n"
                                                .'- **ROOT**：表示根CA实例。'."\n"
                                                .'- **SUB_ROOT**：表示子CA实例。',
                                            'type' => 'string',
                                            'example' => 'ROOT',
                                        ],
                                        'CertIssuedCount' => [
                                            'description' => '私有CA实例已经签发证书的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BeforeTime' => [
                                            'description' => '私有CA证书的签发日期。使用时间戳表示，单位：毫秒。'."\n"
                                                ."\n"
                                                .'> 只有当**Status**为**USED**（表示私有CA实例已启用）或**REVOKE**（表示私有CA实例已被吊销）时，才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1635177600000',
                                        ],
                                        'Identifier' => [
                                            'description' => '私有CA证书的唯一标识码。'."\n"
                                                ."\n"
                                                .'> 只有当**Status**为**USED**（表示私有CA实例已启用）或**REVOKE**（表示私有CA实例已被吊销）时，才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'a7bb2dd212a2112128cd5cc9b753****',
                                        ],
                                        'AfterTime' => [
                                            'description' => '私有CA证书的到期日期。使用时间戳格式表示，单位：毫秒。'."\n"
                                                ."\n"
                                                .'> 只有当**Status**为**USED**（表示私有CA实例已启用）或**REVOKE**（表示私有CA实例已被吊销）时，才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1792944000000',
                                        ],
                                        'InstanceId' => [
                                            'description' => '私有CA实例的ID。',
                                            'type' => 'string',
                                            'example' => 'cas-member-0hmi****',
                                        ],
                                        'UseExpireTime' => [
                                            'description' => '私有CA实例的到期日期。使用时间戳表示，单位：毫秒。'."\n"
                                                ."\n"
                                                .'> 该参数对应您在购买私有CA实例时选择的购买时长，即PCA服务的时长。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637251200000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"25589516-2A56-5159-AB88-4A1D9824E183\\",\\n  \\"InstanceStatusList\\": [\\n    {\\n      \\"CertTotalCount\\": 10,\\n      \\"Status\\": \\"USED\\",\\n      \\"Type\\": \\"ROOT\\",\\n      \\"CertIssuedCount\\": 1,\\n      \\"BeforeTime\\": 1635177600000,\\n      \\"Identifier\\": \\"a7bb2dd212a2112128cd5cc9b753****\\",\\n      \\"AfterTime\\": 1792944000000,\\n      \\"InstanceId\\": \\"cas-member-0hmi****\\",\\n      \\"UseExpireTime\\": 1637251200000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetCAInstanceStatusResponse>\\n    <RequestId>25589516-2A56-5159-AB88-4A1D9824E183</RequestId>\\n    <InstanceStatusList>\\n        <Status>USED</Status>\\n        <Type>ROOT</Type>\\n        <Identifier>a7bb2dd212a2112128cd5cc9b753****</Identifier>\\n        <InstanceId>cas-member-0hmi****</InstanceId>\\n        <BeforeTime>1635177600000</BeforeTime>\\n        <UseExpireTime>1637251200000</UseExpireTime>\\n        <AfterTime>1792944000000</AfterTime>\\n        <CertTotalCount>10</CertTotalCount>\\n        <CertIssuedCount>1</CertIssuedCount>\\n    </InstanceStatusList>\\n    <InstanceStatusList>\\n        <Status>USED</Status>\\n        <Type>SUB_ROOT</Type>\\n        <Identifier>93b09902767679da31f23adc9513****</Identifier>\\n        <InstanceId>cas-member-0hmi****</InstanceId>\\n        <BeforeTime>1635177600000</BeforeTime>\\n        <UseExpireTime>1637251200000</UseExpireTime>\\n        <AfterTime>1792944000000</AfterTime>\\n        <CertTotalCount>10</CertTotalCount>\\n        <CertIssuedCount>1</CertIssuedCount>\\n    </InstanceStatusList>\\n</GetCAInstanceStatusResponse>","errorExample":""}]',
            'title' => '查询CA实例的状态信息',
            'summary' => '查询您通过SSL证书服务控制台购买的私有根CA实例或私有子CA实例的状态信息。',
            'description' => '本接口用于通过私有CA实例的ID，查询您通过SSL证书服务控制台购买的私有CA实例的状态信息，例如，CA实例的状态、包含的证书数量、已签发的证书数量等。'."\n"
                ."\n"
                .'调用本接口前，您必须已经通过[数字证书管理服务控制台](https://yundun.console.aliyun.com/?p=cas#/pca/rootlist)购买了私有CA。具体操作，请参见[购买私有CA](~~208553~~)。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'CreateCustomCertificate' => [
            'summary' => '使用指定的证书主体名称、证书主题别名、密钥用法、扩展密钥用法颁发数字证书。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CA证书识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ed4068c-6f1b-6deb-8e32-3f8439a851cb',
                    ],
                ],
                [
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR内容。您可以通过OpenSSL工具或者Keytool工具生成CSR。更多信息，请参见[如何制作CSR文件](~~42218~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN CERTIFICATE REQUEST-----'."\n"
                            .'MIIBczCCARgCAQAwgYoxFDASBgNVBAMMC2FsaXl1bi50ZXN0MQ0wCwYDVQQ'."\n"
                            .'...'."\n"
                            .'...'."\n"
                            .'...'."\n"
                            .'vbIgMQIhAKHDWD6/WAMbtezAt4bysJ/BZIDz1jPWuUR5GV4TJ/mS'."\n"
                            .'-----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'Validity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。不可超过实例有效期。支持使用相对时间和绝对时间。'."\n"
                            ."\n"
                            .'相对时间：支持单位年、月、日。'."\n"
                            ."\n"
                            .'- 年 - y'."\n"
                            .'- 月 - m'."\n"
                            .'- 日 - d'."\n"
                            ."\n"
                            .'绝对时间：使用GMT时间。格式：`yyyy-MM-dd\'T\'HH:mm:ss\'Z\'`'."\n"
                            ."\n"
                            .'- 指定结束时间 - $NotAfter'."\n"
                            .'- 指定开始时间和结束时间 - $NotBefore/$NotAfter',
                        'type' => 'string',
                        'required' => true,
                        'example' => '相对时间：'."\n"
                            .'● 1y'."\n"
                            .'● 3m'."\n"
                            .'● 7d'."\n"
                            ."\n"
                            .'绝对时间：'."\n"
                            .'● 2006-01-02T15:04:05Z'."\n"
                            .'● 2006-01-02T15:04:05Z/2023-03-09T17:48:13Z',
                    ],
                ],
                [
                    'name' => 'ApiPassthrough',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '透传参数。',
                        'type' => 'object',
                        'properties' => [
                            'Subject' => [
                                'description' => '证书主体名称。',
                                'type' => 'object',
                                'properties' => [
                                    'Country' => [
                                        'description' => '国家代码。使用ISO 3166-1的二位国家代码。参考[ISO](https://www.iso.org/obp/ui/#search/code/)。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'CN',
                                    ],
                                    'State' => [
                                        'description' => '<props="china">CA证书关联的组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                                            .'<props="intl">CA证书关联的组织机构所在省份或州的名称。</props>',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '浙江省',
                                    ],
                                    'Locality' => [
                                        'description' => '组织机构所在城市的名称。支持使用中文、英文字符等。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '杭州市',
                                    ],
                                    'Organization' => [
                                        'description' => '组织机构名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'XXX公司',
                                    ],
                                    'OrganizationUnit' => [
                                        'description' => '组织机构下部门或分支的名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'XXX部门',
                                    ],
                                    'CommonName' => [
                                        'description' => '证书使用者的通用名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '张三',
                                    ],
                                    'CustomAttributes' => [
                                        'description' => '自定义证书的Subject属性。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ObjectIdentifier' => [
                                                    'description' => '自定义属性键值，需符合行业标准。如：'."\n"
                                                        ."\n"
                                                        .'- 2.5.4.6：国家代码'."\n"
                                                        .'- 2.5.4.10：组织'."\n"
                                                        .'- 2.5.4.11：组织单位名称'."\n"
                                                        .'- 2.5.4.12：职位'."\n"
                                                        .'- 2.5.4.3：通用名称'."\n"
                                                        .'- 2.5.4.9：街道'."\n"
                                                        .'- 2.5.4.5：序列号名称'."\n"
                                                        .'- 2.5.4.7：地区'."\n"
                                                        .'- 2.5.4.8：省市'."\n"
                                                        .'- 1.3.6.1.4.1.37244.1.1：Matter证书 - 节点ID'."\n"
                                                        .'- 1.3.6.1.4.1.37244.1.5：Matter证书 - 结构ID'."\n"
                                                        .'- 1.3.6.1.4.1.37244.2.1：Matter证书供应商ID (VID)'."\n"
                                                        .'- 1.3.6.1.4.1.37244.2.2：Matter证书产品ID (PID)',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '2.5.4.3',
                                                ],
                                                'Value' => [
                                                    'description' => '自定义属性属性值。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'Aliyun',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Extensions' => [
                                'description' => '证书扩展项。',
                                'type' => 'object',
                                'properties' => [
                                    'KeyUsage' => [
                                        'description' => '密钥用法。',
                                        'type' => 'object',
                                        'properties' => [
                                            'DigitalSignature' => [
                                                'description' => '数字签名。允许使用证书私钥进行数字签名，允许使用证书公钥验证数字签名。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'true',
                                            ],
                                            'ContentCommitment' => [
                                                'description' => '内容承诺。原名称NonRepudiation。允许证书密钥用于内容承诺。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'NonRepudiation' => [
                                                'description' => '抗抵赖。X.509标准中已更名为ContentCommitment。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'KeyEncipherment' => [
                                                'description' => '密钥加密。允许证书密钥加密保护其他密钥。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'DataEncipherment' => [
                                                'description' => '数据加密。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'KeyAgreement' => [
                                                'description' => '密钥协商。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'EncipherOnly' => [
                                                'description' => '在KeyAgreement为true时，用于标记该证书密钥只能用于加密。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'DecipherOnly' => [
                                                'description' => '在KeyAgreement为true时，用于标记该证书密钥只能用于解密。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'ExtendedKeyUsages' => [
                                        'description' => '扩展密钥用法。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '允许使用以下值：'."\n"
                                                ."\n"
                                                .'- any - 不限制'."\n"
                                                .'- serverAuth - 服务器认证'."\n"
                                                .'- clientAuth - 客户端认证'."\n"
                                                .'- codeSigning - 代码签名'."\n"
                                                .'- emailProtection - 邮件保护'."\n"
                                                .'- timeStamping - 时间戳'."\n"
                                                .'- OCSPSigning - OCSP签名'."\n"
                                                .'- 其他扩展密钥用法OID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '1.3.6.1.4.1.311.20.2.2',
                                        ],
                                        'required' => false,
                                    ],
                                    'SubjectAlternativeNames' => [
                                        'description' => '证书主体别名。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '证书主体别名。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => 'otherName, rfc822Name, dNSName, x400Address, directoryName, ediPartyName, uniformResourceIdentifier, iPAddress, registeredID',
                                                    'description' => '允许使用以下值：'."\n"
                                                        ."\n"
                                                        .'- rfc822Name - Email地址'."\n"
                                                        .'- dNSName - 域名'."\n"
                                                        .'- uniformResourceIdentifier - 统一资源标识符（URI）'."\n"
                                                        .'- iPAddress - IP地址',
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'example' => 'dNSName',
                                                ],
                                                'Value' => [
                                                    'description' => '符合Type定义的值。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'rfc822Name:'."\n"
                                                        .'example.aliyundoc.com'."\n"
                                                        ."\n"
                                                        .'dNSName:'."\n"
                                                        .'learn.aliyundoc.com'."\n"
                                                        ."\n"
                                                        .'uniformResourceIdentifier:'."\n"
                                                        .'acs:ecs:regionid:15619224785*****:instance/i-bp1bzvz55uz27hf*****'."\n"
                                                        ."\n"
                                                        .'iPAddress:'."\n"
                                                        .'127.0.0.1',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'Criticals' => [
                                        'description' => '如果是必要参数，则criticals列表中包含参数名。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '必要参数的参数名，如ExtendedKeyUsages。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'ExtendedKeyUsages',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'SerialNumber' => [
                                'description' => '自定义证书的序列号（必须是长整型）。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '16889526086333',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Immediately',
                    'in' => 'query',
                    'schema' => [
                        'description' => '立即获取证书。'."\n"
                            ."\n"
                            .'- 0 - 异步颁发证书。'."\n"
                            .'- 1 - 立即颁发证书。'."\n"
                            .'- 2 - 立即颁发证书并返回CA证书链。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EnableCrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含CRL地址'."\n"
                            ."\n"
                            .'- 0 - 否'."\n"
                            .'- 1 - 是',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiResponseV1<EnrollCertificateResultV2>',
                        'description' => 'OpenApiResponseV1<EnrollCertificateResultV2>',
                        'type' => 'object',
                        'properties' => [
                            'Identifier' => [
                                'description' => '证书唯一标识。',
                                'type' => 'string',
                                'example' => '160ae6bb538d538c70c01f81dcf2****',
                            ],
                            'Certificate' => [
                                'description' => '证书内容。'."\n"
                                    .'Immediately为1或2时返回。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----'."\n"
                                    .'MIIEkjCCA3qgAwIBAgIQCgFBQgAAAVOFc2oLheynCDANBgkqhkiG9w0BAQsFADA/'."\n"
                                    .'...'."\n"
                                    .'...'."\n"
                                    .'...'."\n"
                                    .'KOqkqm57TH2H3eDJAkSnh6/DNFu0Qg=='."\n"
                                    .'-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => 'CA证书链。'."\n"
                                    .'Immediately为2时返回。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----'."\n"
                                    .'MIIBfzCCATGgAwIBAgIUfI5kSdcO2S0+LkpdL3b2VUJG10YwBQYDK2VwMDUxCzAJ'."\n"
                                    .'...'."\n"
                                    .'...'."\n"
                                    .'...'."\n"
                                    .'ZYYG'."\n"
                                    .'-----END CERTIFICATE-----'."\n"
                                    .'-----BEGIN CERTIFICATE-----'."\n"
                                    .'MIIBczCCARgCAQAwgYoxFDASBgNVBAMMC2FsaXl1bi50ZXN0MQ0wCwYDVQQ'."\n"
                                    .'...'."\n"
                                    .'...'."\n"
                                    .'...'."\n"
                                    .'KL5cUmF'."\n"
                                    .'-----END CERTIFICATE-----',
                            ],
                            'SerialNumber' => [
                                'description' => '证书序列号。'."\n"
                                    .'Immediately为1或2时返回。',
                                'type' => 'string',
                                'example' => '084bde9cd233f0ddae33adc438cfbbbd****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-123456789ABC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Identifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n  \\"Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\nMIIEkjCCA3qgAwIBAgIQCgFBQgAAAVOFc2oLheynCDANBgkqhkiG9w0BAQsFADA/\\\\n...\\\\n...\\\\n...\\\\nKOqkqm57TH2H3eDJAkSnh6/DNFu0Qg==\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\nMIIBfzCCATGgAwIBAgIUfI5kSdcO2S0+LkpdL3b2VUJG10YwBQYDK2VwMDUxCzAJ\\\\n...\\\\n...\\\\n...\\\\nZYYG\\\\n-----END CERTIFICATE-----\\\\n-----BEGIN CERTIFICATE-----\\\\nMIIBczCCARgCAQAwgYoxFDASBgNVBAMMC2FsaXl1bi50ZXN0MQ0wCwYDVQQ\\\\n...\\\\n...\\\\n...\\\\nKL5cUmF\\\\n-----END CERTIFICATE-----\\",\\n  \\"SerialNumber\\": \\"084bde9cd233f0ddae33adc438cfbbbd****\\",\\n  \\"RequestId\\": \\"12345678-1234-1234-1234-123456789ABC\\"\\n}","type":"json"}]',
            'title' => '颁发自定义证书',
            'description' => '默认从CSR中获取证书主体名称颁发证书。当指定了证书主体名称时，CSR中的证书主体名称将失效，即使用指定的证书主体名称颁发证书。'."\n"
                ."\n"
                .'必须根据应用场景指定密钥用法或扩展密钥用法。以下是常见应用场景的应用示例：'."\n"
                ."\n"
                .'- 服务端认证证书'."\n"
                ."\n"
                .'密钥用法：digitalSignature、keyEncipherment'."\n"
                ."\n"
                .'扩展密钥用法：serverAuth'."\n"
                ."\n"
                .'- 客户端认证证书'."\n"
                ."\n"
                .'密钥用法：digitalSignature、keyEncipherment'."\n"
                ."\n"
                .'扩展密钥用法：clientAuth'."\n"
                ."\n"
                .'- mTLS双向认证证书'."\n"
                ."\n"
                .'密钥用法：digitalSignature、keyEncipherment'."\n"
                ."\n"
                .'扩展密钥用法：serverAuth、clientAuth'."\n"
                ."\n"
                .'- 邮件签名证书'."\n"
                ."\n"
                .'密钥用法：digitalSignature、contentCommitment'."\n"
                ."\n"
                .'扩展密钥用法：emailProtection'."\n"
                ."\n"
                .'注意：合规CA由第三方权威机构管理，不支持此接口。',
        ],
        'CreateClientCertificate' => [
            'methods' => [
                'get',
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
                    'name' => 'SanType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书支持的扩展信息SAN（Subject Alternative Name）类型。取值：'."\n"
                            ."\n"
                            .'- **1**：表示邮箱。'."\n"
                            .'- **6**：表示统一资源标志符URI（Uniform Resource Identifier）。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SanValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的具体扩展信息。支持输入多个扩展信息，如果您需要输入多个扩展信息，请用半角逗号（,）将其隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'somebody@example.com',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机构名称，默认：Alibaba Inc。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称，默认：Aliyun CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IT',
                    ],
                ],
                [
                    'name' => 'Country',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属国家，默认：CN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表示证书使用者的名称。客户端认证（ClientAuth）证书使用者一般是自然人、公司、组织或某个应用，建议填写使用者的通用名称。例如，张三、阿里巴巴、阿里云密码平台、天猫精灵等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliyun',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '<props="china">设置证书组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                            .'<props="intl">设置证书组织机构所在省份或州的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份或州的名称。</props>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书组织机构所在城市的名称。支持使用中文、英文字符等。'."\n"
                            .'默认为签发该证书的子CA证书的组织机构所在城市的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的密钥算法。密钥算法使用`<加密算法>_<密钥长度>`格式表示。取值：'."\n"
                            ."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_384**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_512**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n"
                            .'客户端证书的加密算法必须与子CA证书一致，密钥长度可以不一致。例如：子CA证书的密钥算法为RSA_2048，则客户端证书的密钥算法必须是RSA_1024、RSA_2048、RSA_4096中的一种。'."\n"
                            ."\n"
                            .'>您可以调用[DescribeCACertificate](~~465954~~)查询子CA证书的密钥算法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签发该证书的子CA证书的唯一识别码。'."\n"
                            .'>您可以调用[DescribeCACertificateList]查询子CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '273ae6bb538d538c70c01f81jh2****',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买证书的时长。单位：年。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Months',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买证书的时长。单位：月。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Days',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的有效期。单位：天。'."\n"
                            .'**Days**、**BeforeTime**、**AfterTime**参数不能同时为空，并且**BeforeTime**、**AfterTime**参数必须同时为空或者同时设置。该参数具体设置说明如下：'."\n"
                            ."\n"
                            .'- 当设置**Days**参数时，您可以选择同时设置**BeforeTime**、**AfterTime**参数或者不设置**BeforeTime**、**AfterTime**参数。'."\n"
                            .'- 当不设置**Days**参数时，您必须设置**BeforeTime**、**AfterTime**参数。'."\n"
                            ."\n"
                            .'>- 当您同时设置**Days**、**BeforeTime**、**AfterTime**参数时，客户端证书的有效期以**Days**参数的值为准。'."\n"
                            .'- 客户端证书的有效期不能超过子CA证书的有效期。您可以调用[DescribeCACertificate](~~465954~~)查看子CA证书的有效期。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的签发时间，使用时间戳格式，默认为您调用该接口的时间。单位：秒。'."\n"
                            ."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同时为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1634283958',
                    ],
                ],
                [
                    'name' => 'AfterTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的服务到期时间，使用时间戳格式。单位：秒。'."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同时为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1665819958',
                    ],
                ],
                [
                    'name' => 'Immediately',
                    'in' => 'query',
                    'schema' => [
                        'description' => '立即返回数字证书。'."\n"
                            .'- **0**，不返回。默认值。'."\n"
                            .'- **1**，返回证书。'."\n"
                            .'- **2**， 返回证书及其证书链 。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EnableCrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含CRL地址'."\n"
                            ."\n"
                            .'0 - 否'."\n"
                            .'1 - 是',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'description' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'type' => 'object',
                        'properties' => [
                            'X509Certificate' => [
                                'description' => '客户端证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => 'CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                            'Identifier' => [
                                'description' => '客户端证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '190ae6bb538d538c70c01f81dcf2****',
                            ],
                            'SerialNumber' => [
                                'description' => '证书序列号。',
                                'type' => 'string',
                                'example' => '084bde9cd233f0ddae33adc438cfbbbd****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8C467B38-3910-447D-87BC-AC049166F216',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\",\\n  \\"Identifier\\": \\"190ae6bb538d538c70c01f81dcf2****\\",\\n  \\"SerialNumber\\": \\"084bde9cd233f0ddae33adc438cfbbbd****\\",\\n  \\"RequestId\\": \\"8C467B38-3910-447D-87BC-AC049166F216\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClientCertificateResponse>\\n    <Identifier>190ae6bb538d538c70c01f81dcf2****</Identifier>\\n    <RootX509Certificate>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----</RootX509Certificate>\\n    <ParentX509Certificate>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----</ParentX509Certificate>\\n    <RequestId>8C467B38-3910-447D-87BC-AC049166F216</RequestId>\\n    <X509Certificate>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----</X509Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----\\\\n-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----\\\\n</CertificateChain>\\n</CreateClientCertificateResponse>","errorExample":""}]',
            'title' => '基于系统自动生成的CSR签发单个客户端证书',
            'summary' => '基于系统自动生成的CSR签发单个客户端证书。',
            'description' => '调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书，并且调用[CreateSubCACertificate](~~465959~~)创建了子CA证书。只有子CA证书才能签发客户端证书。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'CreateClientCertificateWithCsr' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR内容。您可以通过OpenSSL工具或者Keytool工具生成CSR。更多信息，请参见[如何制作CSR文件](~~42218~~)。'."\n"
                            .'<props="china">您也可以通过SSL证书控制台创建CSR。更多信息，请参见[创建CSR](~~313297~~)。</props>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'SanType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的扩展信息SAN（Subject Alternative Name）的类型。取值：'."\n"
                            ."\n"
                            .'- **1**：表示邮箱。'."\n"
                            .'- **6**：表示统一资源标志符URI（Uniform Resource Identifier）。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SanValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的具体扩展信息。支持输入多个扩展信息，如果您需要输入多个扩展信息，请用半角逗号（,）将其隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'somebody@example.com',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机构名称，默认：Alibaba Inc。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云计算有限公司',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称，默认：Aliyun CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Security',
                    ],
                ],
                [
                    'name' => 'Country',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国家代码，例如**CN**、**US**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书的公用名。支持使用中文、英文字符等。'."\n"
                            .'>如果您设置了**CsrPemString**参数，则**CommonName**参数取值以**CsrPemString**参数中的对应信息为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '<props="china">设置证书组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                            .'<props="intl">设置证书组织机构所在省份或州的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份或州的名称。</props>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书组织机构所在城市的名称。支持使用中文、英文字符等。'."\n"
                            .'默认为签发该证书的子CA证书的组织机构所在城市的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Hangzhou',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的密钥算法。密钥算法使用`<加密算法>_<密钥长度>`格式表示。取值：'."\n"
                            ."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_384**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_512**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n"
                            .'客户端证书的加密算法必须与子CA证书一致，密钥长度可以不一致。例如：子CA证书的密钥算法为RSA_2048，则客户端证书的密钥算法必须是RSA_1024、RSA_2048、RSA_4096中的一种。'."\n"
                            ."\n"
                            .'>您可以调用[DescribeCACertificate](~~465954~~)查询子CA证书的密钥算法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签发该证书的子CA证书的唯一识别码。'."\n"
                            .'>您可以调用[DescribeCACertificateList](~~465957~~)查询子CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '270ae6bb538d538c70c01f81fg3****',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：年。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Months',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：月。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Days',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的有效期。单位：天。'."\n"
                            .'**Days**、**BeforeTime**、**AfterTime**参数不能同时为空，同时**BeforeTime**和**AfterTime**参数必须同时为空或者同时设置。该参数具体设置说明如下：'."\n"
                            ."\n"
                            .'- 当设置**Days**参数时，您可以选择同时设置**BeforeTime**和**AfterTime**参数或者不设置**BeforeTime**和**AfterTime**参数。'."\n"
                            .'- 当不设置**Days**参数时，您必须设置**BeforeTime**和**AfterTime**参数。'."\n"
                            ."\n"
                            .'>- 当您同时设置**Days**、**BeforeTime**、**AfterTime**参数时，客户端证书的有效期以**Days**参数的值为准。'."\n"
                            .'- 客户端证书的有效期不能超过子CA证书的有效期。您可以调用[DescribeCACertificate](~~465954~~)查看子CA证书的有效期。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的签发时间，使用时间戳格式，默认为您调用该接口的时间。单位：秒。'."\n"
                            ."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同时为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1634283958',
                    ],
                ],
                [
                    'name' => 'AfterTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的服务到期时间，使用时间戳格式。单位：秒。'."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同时为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1665819958',
                    ],
                ],
                [
                    'name' => 'Immediately',
                    'in' => 'query',
                    'schema' => [
                        'description' => '立即返回数字证书。'."\n"
                            .'- **0**，不返回。默认值。'."\n"
                            .'- **1**，返回证书。'."\n"
                            .'- **2**， 返回证书及其证书链 。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EnableCrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含CRL地址'."\n"
                            ."\n"
                            .'0 - 否 '."\n"
                            ."\n"
                            .'1 - 是',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'description' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'type' => 'object',
                        'properties' => [
                            'X509Certificate' => [
                                'description' => '客户端证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => 'CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                            'Identifier' => [
                                'description' => '客户端证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '200ae6bb538d538c70c01f81dcf2****',
                            ],
                            'SerialNumber' => [
                                'description' => '证书序列号。',
                                'type' => 'string',
                                'example' => '084bde9cd233f0ddae33adc438cfbbbd****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '31C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\",\\n  \\"Identifier\\": \\"200ae6bb538d538c70c01f81dcf2****\\",\\n  \\"SerialNumber\\": \\"084bde9cd233f0ddae33adc438cfbbbd****\\",\\n  \\"RequestId\\": \\"31C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClientCertificateWithCsrResponse>\\n    <Identifier>200ae6bb538d538c70c01f81dcf2****</Identifier>\\n    <RootX509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </RootX509Certificate>\\n    <ParentX509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </ParentX509Certificate>\\n    <RequestId>31C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <X509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </X509Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n      -----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </CertificateChain>\\n</CreateClientCertificateWithCsrResponse>","errorExample":""}]',
            'title' => '基于自定义的CSR签发单个客户端证书',
            'summary' => '基于自定义的CSR签发单个客户端证书。',
            'description' => '调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书，并且调用[CreateSubCACertificate](~~465959~~)创建了子CA证书。只有子CA证书才能签发客户端证书。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'CreateRevokeClientCertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要吊销的客户端证书或服务端证书的唯一识别码。'."\n"
                            ."\n\n"
                            .'> 您可以调用[ListClientCertificate](~~465990~~)查询所有客户端与服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SuccessResponse',
                        'description' => 'SuccessResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","type":"json"}]',
            'title' => '吊销证书',
            'summary' => '吊销某个客户端证书或服务端证书。',
            'description' => '客户端证书或服务端证书被吊销后，安装该证书的客户端或服务端将无法与其他设备建立HTTPS连接。'."\n"
                ."\n"
                .'吊销客户端证书或服务端证书后，您可以调用[DeleteClientCertificate](~~465981~~)将该证书永久删除。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'CreateServerCertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的扩展域名、扩展IP地址。为证书添加扩展信息后，您可以将证书应用到多个域名、IP地址。'."\n"
                            ."\n"
                            .'多个域名、IP地址之间需用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机构名称，默认：Alibaba Inc。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称，默认：Aliyun CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IT',
                    ],
                ],
                [
                    'name' => 'Country',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国家代码，如CN，US。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表示证书使用者的名称。服务端认证（ServerAuth）证书使用者是服务器，建议填写服务器绑定的域名或IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '<props="china">设置证书组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                            .'<props="intl">设置证书组织机构所在省份或州的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份或州的名称。</props>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书组织机构所在城市的名称。支持使用中文、英文字符等。'."\n"
                            .'默认为签发该证书的子CA证书的组织机构所在城市的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Hangzhou',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的密钥算法。密钥算法使用`<加密算法>_<密钥长度>`格式表示。取值：'."\n"
                            ."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_384**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_512**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n\n"
                            .'服务端证书的加密算法必须与子CA证书一致，密钥长度可以不一致。例如：子CA证书的密钥算法为RSA_2048，则服务端证书的密钥算法必须是RSA_1024、RSA_2048、RSA_4096中的一种。'."\n"
                            ."\n"
                            .'>您可以调用[DescribeCACertificate](~~465954~~)查询子CA证书的密钥算法。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签发该证书的子CA证书的唯一识别码。'."\n"
                            .'>您可以调用[DescribeCACertificateList](~~465957~~)查询子CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '271ae6bb538d538c70c01f81dg3****',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：年。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Months',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：月。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Days',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的有效期。单位：天。'."\n"
                            .'**Days**、**BeforeTime**、**AfterTime**参数不能同时为空，并且**BeforeTime**和**AfterTime**参数必须同时为空或者同时设置。该参数具体设置说明如下：'."\n"
                            ."\n"
                            .'- 当设置**Days**参数时，您可以选择同时设置**BeforeTime**、**AfterTime**参数或者不设置**BeforeTime**、**AfterTime**参数。'."\n"
                            ."\n\n"
                            .'- 当不设置**Days**参数时，您必须设置**BeforeTime**、**AfterTime**参数。'."\n"
                            ."\n"
                            .'>- 当您同时设置**Days**、**BeforeTime**、**AfterTime**参数时，服务端证书的有效期以**Days**参数的值为准。'."\n"
                            .'- 服务端证书的有效期不能超过子CA证书的有效期。您可以调用[DescribeCACertificate](~~465954~~)查看子CA证书的有效期。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的签发时间，使用时间戳格式，默认为您调用该接口的时间。单位：秒。'."\n"
                            ."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1634283958',
                    ],
                ],
                [
                    'name' => 'AfterTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的服务到期时间，使用时间戳格式。单位：秒。'."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1665819958',
                    ],
                ],
                [
                    'name' => 'Immediately',
                    'in' => 'query',
                    'schema' => [
                        'description' => '立即返回数字证书。'."\n"
                            .'- **0**，不返回。默认值。'."\n"
                            .'- **1**，返回证书。'."\n"
                            .'- **2**， 返回证书及其证书链 。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EnableCrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含CRL地址'."\n"
                            ."\n"
                            .'0 - 否 '."\n"
                            ."\n"
                            .'1 - 是',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'description' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'type' => 'object',
                        'properties' => [
                            'X509Certificate' => [
                                'description' => '服务端证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => 'CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                            'Identifier' => [
                                'description' => '服务端证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '160ae6bb538d538c70c01f81dcf2****',
                            ],
                            'SerialNumber' => [
                                'description' => '证书序列号。',
                                'type' => 'string',
                                'example' => '084bde9cd233f0ddae33adc438cfbbbd****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\",\\n  \\"Identifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n  \\"SerialNumber\\": \\"084bde9cd233f0ddae33adc438cfbbbd****\\",\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServerCertificateResponse>\\n    <Identifier>160ae6bb538d538c70c01f81dcf2****</Identifier>\\n    <RootX509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </RootX509Certificate>\\n    <ParentX509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </ParentX509Certificate>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <X509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </X509Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n      -----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </CertificateChain>\\n</CreateServerCertificateResponse>","errorExample":""}]',
            'title' => '基于系统自动生成的CSR签发单个服务端证书',
            'summary' => '基于系统自动生成的CSR签发单个服务端证书。',
            'description' => '调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书，并且调用[CreateSubCACertificate](~~465975~~)创建了子CA证书。只有子CA证书才能签发服务端证书。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'CreateServerCertificateWithCsr' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR内容。'."\n"
                            .'您可以通过OpenSSL工具或者Keytool工具生成CSR。更多信息，请参见[如何制作CSR文件](~~42218~~)。'."\n"
                            .'<props="china">您也可以通过SSL证书控制台创建CSR。更多信息，请参见[创建CSR](~~313297~~)。</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的扩展域名或者扩展IP地址。为证书添加扩展信息后，您可以将证书应用到多个域名或者IP地址。'."\n"
                            ."\n"
                            .'支持同时输入多个域名和IP地址。如果您需要输入多个扩展信息，请用半角逗号（,）将其隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机构名称，默认：Alibaba Inc。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称，默认：Aliyun CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IT',
                    ],
                ],
                [
                    'name' => 'Country',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国家代码，例如**CN**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书的公用名。支持使用中文、英文字符等。'."\n"
                            .'>如果您设置了**Csr**参数，则**CommonName**参数取值以**Csr**参数中的对应信息为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mtcsq.com',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '<props="china">设置证书组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                            .'<props="intl">设置证书组织机构所在省份或州的名称。支持使用中文、英文字符等。默认为签发该证书的子CA证书组织机构所在省份或州的名称。</props>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书组织机构所在城市的名称。支持使用中文、英文字符等。'."\n"
                            .'默认为签发该证书的子CA证书的组织机构所在城市的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Hangzhou',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的密钥算法。密钥算法使用`<加密算法>_<密钥长度>`格式表示。取值：'."\n"
                            ."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_384**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_512**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n\n"
                            .'服务端证书的加密算法必须与子CA证书一致，密钥长度可以不一致。例如：子CA证书的密钥算法为RSA_2048，则服务端证书的密钥算法必须是RSA_1024、RSA_2048、RSA_4096中的一种。'."\n"
                            ."\n"
                            .'>您可以调用[DescribeCACertificate](~~465954~~)查询子CA证书的密钥算法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签发该证书的子CA证书的唯一识别码。'."\n"
                            .'>您可以调用[DescribeCACertificateList](~~465957~~)查询子CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '270oe6bb538d538c70c01f81hfd3****',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：年。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Months',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：月。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Days',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的有效期。单位：天。'."\n"
                            .'**Days**、**BeforeTime**、**AfterTime**参数不能同时为空，并且**BeforeTime**、**AfterTime**参数必须同时为空或者同时设置。该参数具体设置说明如下：'."\n"
                            ."\n"
                            .'- 当设置**Days**参数时，您可以选择同时设置**BeforeTime**、**AfterTime**参数或者不设置**BeforeTime**、**AfterTime**参数。'."\n"
                            ."\n\n"
                            .'- 当不设置**Days**参数时，您必须设置**BeforeTime**、**AfterTime**参数。'."\n"
                            ."\n"
                            .'>- 当您同时设置**Days**、**BeforeTime**、**AfterTime**参数时，服务端证书的有效期以**Days**参数的值为准。'."\n"
                            .'- 服务端证书的有效期不能超过子CA证书的有效期。您可以调用[DescribeCACertificate](~~465954~~)查看子CA证书的有效期。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的签发时间，使用时间戳格式，默认为您调用该接口的时间。单位：秒。'."\n"
                            ."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同时为空或者同时配置。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1634283958',
                    ],
                ],
                [
                    'name' => 'AfterTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端证书的服务到期时间，使用时间戳格式。单位：秒。'."\n"
                            .'>**BeforeTime**和**AfterTime**参数必须同时为空或者同时配置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1665819958',
                    ],
                ],
                [
                    'name' => 'Immediately',
                    'in' => 'query',
                    'schema' => [
                        'description' => '立即返回数字证书。'."\n"
                            .'- **0** , 不返回。默认值。'."\n"
                            .'- **1**，返回证书。'."\n"
                            .'- **2**， 返回证书及其证书链 。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EnableCrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含CRL地址'."\n"
                            ."\n"
                            .'0 - 否 '."\n"
                            ."\n"
                            .'1 - 是',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'description' => 'CreateCertificateResponse<CertificateIdentifierWithParentDTO>',
                        'type' => 'object',
                        'properties' => [
                            'X509Certificate' => [
                                'description' => '服务端证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => 'CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                            'Identifier' => [
                                'description' => '服务端证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '180ae6bb538d538c70c01f81dcf2****',
                            ],
                            'SerialNumber' => [
                                'description' => '证书序列号。',
                                'type' => 'string',
                                'example' => '084bde9cd233f0ddae33adc438cfbbbd****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '55C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\",\\n  \\"Identifier\\": \\"180ae6bb538d538c70c01f81dcf2****\\",\\n  \\"SerialNumber\\": \\"084bde9cd233f0ddae33adc438cfbbbd****\\",\\n  \\"RequestId\\": \\"55C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServerCertificateWithCsrResponse>\\n    <Identifier>180ae6bb538d538c70c01f81dcf2****</Identifier>\\n    <RootX509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </RootX509Certificate>\\n    <ParentX509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </ParentX509Certificate>\\n    <RequestId>55C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <X509Certificate>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </X509Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n      -----BEGIN CERTIFICATE-----\\n      ......\\n      -----END CERTIFICATE-----\\n    </CertificateChain>\\n</CreateServerCertificateWithCsrResponse>","errorExample":""}]',
            'title' => '基于自定义的CSR签发单个服务端证书',
            'summary' => '基于自定义的CSR签发单个服务端证书。',
            'description' => '调用本接口前，您必须已经调用[CreateRootCACertificate](~~465962~~)创建了根CA证书，并且调用[CreateSubCACertificate](~~465959~~)创建了子CA证书。只有子CA证书才能签发服务端证书。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'DeleteClientCertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的客户端证书或服务端证书的唯一识别码。证书的当前状态必须是**REVOKE**。'."\n"
                            ."\n\n"
                            ."\n"
                            .'> 您可以调用[ListClientCertificate](~~465990~~)查询所有客户端证书和服务端证书的唯一识别码和当前状态。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SuccessResponse',
                        'description' => 'SuccessResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","type":"json"}]',
            'title' => '删除证书',
            'summary' => '删除已吊销的客户端证书或服务端证书。',
            'description' => '调用本接口前，您必须先调用[CreateRevokeClientCertificate](~~465972~~)吊销客户端证书或服务端证书。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~327167~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'DescribeCertificatePrivateKey' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要获取私钥的客户端证书或服务端证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[ListClientCertificate](~~465990~~)查询所有客户端与服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bc37133bb7ed68c7938d928fd26d****',
                    ],
                ],
                [
                    'name' => 'EncryptedCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如，`,.+-_#`）等。最大长度为32字节。'."\n"
                            ."\n"
                            .'><warning> 请记住您设置的密码，后续您需要使用该密码为私钥（加密格式）解密。如果您忘记了已设置的私钥密码，则本次调用获取的私钥（加密格式）将无法解密，您必须重新调用本接口。'."\n"
                            .'></warning>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '!QA@WS3ed',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'GetCertificatePrivateKeyResponse',
                        'description' => 'GetCertificatePrivateKeyResponse。',
                        'type' => 'object',
                        'properties' => [
                            'EncryptedData' => [
                                'description' => '加密后的私钥内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN ENCRYPTED PRIVATE KEY----- …… -----END ENCRYPTED PRIVATE KEY-----',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '09470F19-CEE8-5C63-BF2C-02B5E3F07A17',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EncryptedData\\": \\"-----BEGIN ENCRYPTED PRIVATE KEY----- …… -----END ENCRYPTED PRIVATE KEY-----\\",\\n  \\"RequestId\\": \\"09470F19-CEE8-5C63-BF2C-02B5E3F07A17\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeCertificatePrivateKeyResponse>\\n    <EncryptedData>-----BEGIN ENCRYPTED PRIVATE KEY----- …… -----END ENCRYPTED PRIVATE KEY-----</EncryptedData>\\n    <RequestId>09470F19-CEE8-5C63-BF2C-02B5E3F07A17</RequestId>\\n</DescribeCertificatePrivateKeyResponse>","errorExample":""}]',
            'title' => '查询证书的私钥',
            'summary' => '获取单个客户端证书或服务端证书的私钥（加密格式）。',
            'description' => '本接口只适用基于系统生成的CSR（Certificate Signing Request）签发的证书，用于获取客户端证书或服务端证书的私钥（加密格式）。调用本接口前，您必须已经调用以下接口签发了客户端证书或服务端证书：'."\n"
                .'- [CreateClientCertificate](~~465967~~)'."\n"
                .'- [CreateServerCertificate](~~465975~~)'."\n"
                ."\n"
                .'为确保私钥传输安全，本接口会使用您设置的私钥密码（一个加密字符串）为私钥加密，并返回加密后的私钥。您获取证书私钥（加密格式）后，可以通过以下方法为私钥解密：'."\n"
                ."\n"
                .'- 证书的加密算法为RSA时，您需要在安装了[OpenSSL](https://www.openssl.org/source/)或[BabaSSL](https://github.com/BabaSSL/BabaSSL)的计算机上执行`openssl rsa -in <加密的私钥文件> -passin pass:<私钥密码> -out <解密的私钥文件>`命令来解密私钥。'."\n"
                .'- 证书的加密算法为ECC时，您需要在安装了[OpenSSL](https://www.openssl.org/source/)或[BabaSSL](https://github.com/BabaSSL/BabaSSL)的计算机上执行`openssl ec -in <加密的私钥文件> -passin pass:<私钥密码> -out <解密的私钥文件>`命令来解密私钥。'."\n"
                .'- 证书的加密算法为SM2时，您需要在安装了[BabaSSL](https://github.com/BabaSSL/BabaSSL)的计算机上执行`openssl ec -in <加密的私钥文件> -passin pass:<私钥密码> -out <解密的私钥文件>`命令来解密私钥。'."\n"
                ."\n"
                .'> 您可以调用[DescribeClientCertificate](~~465985~~)查询客户端证书或服务端证书的加密算法类型。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'DescribeClientCertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的客户端证书或服务端证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[ListClientCertificate](~~465990~~)查询所有客户端证书和服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'd3b95700998e47afc4d95f886579****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DescribeCertificateResponse<CertificateWithContentDTO>',
                        'description' => 'DescribeCertificateResponse<CertificateWithContentDTO>',
                        'type' => 'object',
                        'properties' => [
                            'Certificate' => [
                                'description' => '客户端证书或服务端证书的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'X509Certificate' => [
                                        'description' => '证书的内容。',
                                        'type' => 'string',
                                        'example' => '-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----',
                                    ],
                                    'Identifier' => [
                                        'description' => '证书的唯一识别码。',
                                        'type' => 'string',
                                        'example' => 'd3b95700998e47afc4d95f886579****',
                                    ],
                                    'SerialNumber' => [
                                        'description' => '证书的序列号。',
                                        'type' => 'string',
                                        'example' => '62b2b943a32d96883a6650e672ea0276****',
                                    ],
                                    'SubjectDN' => [
                                        'description' => '证书的DN（Distinguished Name）属性，表示证书的使用者，具体包含以下信息：'."\n"
                                            ."\n"
                                            .'- **C**：国家。'."\n"
                                            .'- **O**：组织机构。'."\n"
                                            .'- **OU**：部门。'."\n"
                                            .'- **L**：城市。'."\n"
                                            .'<props="china">- **ST**：省份、直辖市或自治区。</props>'."\n"
                                            .'<props="intl">- **ST**：省份或州。</props>'."\n"
                                            .'- **CN**：公用名。',
                                        'type' => 'string',
                                        'example' => 'C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun',
                                    ],
                                    'CommonName' => [
                                        'description' => '证书的公用名。',
                                        'type' => 'string',
                                        'example' => 'aliyun.com',
                                    ],
                                    'OrganizationUnit' => [
                                        'description' => '签发该证书的子CA证书关联的组织机构下部门的名称。',
                                        'type' => 'string',
                                        'example' => 'Security',
                                    ],
                                    'Organization' => [
                                        'description' => '签发该证书的子CA证书关联的组织机构的名称。',
                                        'type' => 'string',
                                        'example' => '阿里云计算有限公司',
                                    ],
                                    'Locality' => [
                                        'description' => '签发该证书的子CA证书关联的组织机构所在城市的名称。',
                                        'type' => 'string',
                                        'example' => 'Hangzhou',
                                    ],
                                    'State' => [
                                        'description' => '<props="china">签发该证书的子CA证书关联的组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                                            .'<props="intl">签发该证书的子CA证书关联的组织机构所在省份或州的名称。</props>',
                                        'type' => 'string',
                                        'example' => 'Zhejiang',
                                    ],
                                    'CountryCode' => [
                                        'description' => '签发该证书的子CA证书关联的组织机构所在国家的代码。'."\n"
                                            ."\n"
                                            .'关于不同国家代码的含义，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                                        'type' => 'string',
                                        'example' => 'CN',
                                    ],
                                    'Sans' => [
                                        'description' => '证书的SAN（Subject Alternative Name）扩展属性，表示证书关联的其他域名、IP地址等。'."\n"
                                            ."\n"
                                            .'该参数使用JSON数组转化的字符串表示。JSON数组中的每个元素是一个结构体，对应一个SAN扩展。'."\n"
                                            .'每个SAN扩展结构体包含以下参数：'."\n"
                                            ."\n"
                                            .'- **Type**：Integer类型，表示扩展的类型。取值：'."\n"
                                            .'	- **1**：表示邮箱地址。'."\n"
                                            .'	- **2**：表示域名。'."\n"
                                            .'	- **6**：表示统一资源标志符URI（Uniform Resource Identifier）。'."\n"
                                            .'	- **7**：表示IP地址。'."\n"
                                            .'- **Value**：String类型，表示扩展的内容。',
                                        'type' => 'string',
                                        'example' => '[ {"Type": 7, "Value": "192.0.XX.XX"}, {"Type": 2, "Value": "www.aliyundoc.com"}, ]',
                                    ],
                                    'Status' => [
                                        'description' => '证书的状态。取值：'."\n"
                                            ."\n"
                                            .'- **ISSUE**：表示正常签发。'."\n"
                                            .'- **REVOKE**：表示已被吊销。',
                                        'type' => 'string',
                                        'example' => 'ISSUE',
                                    ],
                                    'BeforeDate' => [
                                        'description' => '证书的签发日期。使用时间戳表示，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634283958000',
                                    ],
                                    'AfterDate' => [
                                        'description' => '证书的到期日期。使用时间戳表示，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1665819958000',
                                    ],
                                    'Algorithm' => [
                                        'description' => '证书的加密算法类型。取值：'."\n"
                                            ."\n"
                                            .'- **RSA**：表示RSA算法。'."\n"
                                            .'- **ECC**：表示ECC算法。'."\n"
                                            .'- **SM2**：表示SM2（国密）算法。',
                                        'type' => 'string',
                                        'example' => 'RSA',
                                    ],
                                    'KeySize' => [
                                        'description' => '证书的密钥长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4096',
                                    ],
                                    'SignAlgorithm' => [
                                        'description' => '证书的签名算法。',
                                        'type' => 'string',
                                        'example' => 'SHA256WITHRSA',
                                    ],
                                    'CertificateType' => [
                                        'description' => '证书的类型。取值：'."\n"
                                            ."\n"
                                            .'-  **CLIENT**：表示客户端证书。'."\n"
                                            .'-  **SERVER**：表示服务端证书。',
                                        'type' => 'string',
                                        'example' => 'SERVER',
                                    ],
                                    'ParentIdentifier' => [
                                        'description' => '签发该证书的子CA证书的唯一识别码。',
                                        'type' => 'string',
                                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                                    ],
                                    'Sha2' => [
                                        'description' => '证书的SHA256数字指纹。',
                                        'type' => 'string',
                                        'example' => '14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****',
                                    ],
                                    'Md5' => [
                                        'description' => '证书的MD5数字指纹。',
                                        'type' => 'string',
                                        'example' => 'd3b95700998e47afc4d95f886579****',
                                    ],
                                    'Days' => [
                                        'description' => '证书的有效期。单位：天。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '365',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Certificate\\": {\\n    \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----\\",\\n    \\"Identifier\\": \\"d3b95700998e47afc4d95f886579****\\",\\n    \\"SerialNumber\\": \\"62b2b943a32d96883a6650e672ea0276****\\",\\n    \\"SubjectDN\\": \\"C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun\\",\\n    \\"CommonName\\": \\"aliyun.com\\",\\n    \\"OrganizationUnit\\": \\"Security\\",\\n    \\"Organization\\": \\"阿里云计算有限公司\\",\\n    \\"Locality\\": \\"Hangzhou\\",\\n    \\"State\\": \\"Zhejiang\\",\\n    \\"CountryCode\\": \\"CN\\",\\n    \\"Sans\\": \\"[ {\\\\\\"Type\\\\\\": 7, \\\\\\"Value\\\\\\": \\\\\\"192.0.XX.XX\\\\\\"}, {\\\\\\"Type\\\\\\": 2, \\\\\\"Value\\\\\\": \\\\\\"www.aliyundoc.com\\\\\\"}, ]\\",\\n    \\"Status\\": \\"ISSUE\\",\\n    \\"BeforeDate\\": 1634283958000,\\n    \\"AfterDate\\": 1665819958000,\\n    \\"Algorithm\\": \\"RSA\\",\\n    \\"KeySize\\": 4096,\\n    \\"SignAlgorithm\\": \\"SHA256WITHRSA\\",\\n    \\"CertificateType\\": \\"SERVER\\",\\n    \\"ParentIdentifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n    \\"Sha2\\": \\"14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****\\",\\n    \\"Md5\\": \\"d3b95700998e47afc4d95f886579****\\",\\n    \\"Days\\": 365\\n  },\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClientCertificateResponse>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <Certificate>\\n        <Status>ISSUE</Status>\\n        <SerialNumber>62b2b943a32d96883a6650e672ea0276****</SerialNumber>\\n        <CertificateType>SERVER</CertificateType>\\n        <Algorithm>RSA</Algorithm>\\n        <State>Zhejiang</State>\\n        <Organization>阿里云计算有限公司</Organization>\\n        <ParentIdentifier>160ae6bb538d538c70c01f81dcf2****</ParentIdentifier>\\n        <Locality>Hangzhou</Locality>\\n        <Identifier>d3b95700998e47afc4d95f886579****</Identifier>\\n        <Sans>[ {\\"Type\\": 7, \\"Value\\": \\"192.0.XX.XX\\"}, {\\"Type\\": 2, \\"Value\\": \\"www.aliyundoc.com\\"}, ]</Sans>\\n        <Days>365</Days>\\n        <KeySize>4096</KeySize>\\n        <X509Certificate>-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----</X509Certificate>\\n        <SubjectDN>C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun</SubjectDN>\\n        <SignAlgorithm>SHA256WITHRSA</SignAlgorithm>\\n        <OrganizationUnit>Security</OrganizationUnit>\\n        <AfterDate>1665819958000</AfterDate>\\n        <Sha2>14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****</Sha2>\\n        <CommonName>aliyun.com</CommonName>\\n        <Md5>d3b95700998e47afc4d95f886579****</Md5>\\n        <CountryCode>CN</CountryCode>\\n        <BeforeDate>1634283958000</BeforeDate>\\n    </Certificate>\\n</DescribeClientCertificateResponse>","errorExample":""}]',
            'title' => '查询证书详细信息',
            'summary' => '通过证书的唯一识别码查询单个客户端证书或服务端证书的详细信息。',
            'description' => '本接口用于通过证书的唯一识别码，查询单个客户端证书或服务端证书的详细信息，例如，证书的序列号、使用者信息、内容、状态等。'."\n"
                ."\n"
                .'调用本接口前，您必须已经创建了客户端证书或服务端证书。'."\n"
                ."\n"
                .'关于如何调用API创建客户端证书，请参见：'."\n"
                .'- [CreateClientCertificate](~~465967~~)'."\n"
                .'- [CreateClientCertificateWithCsr](~~465970~~)'."\n"
                ."\n\n"
                .'关于如何调用API创建服务端证书，请参见：'."\n"
                .'- [CreateServerCertificate](~~465975~~)'."\n"
                .'- [CreateServerCertificateWithCsr](~~465979~~)'."\n"
                ."\n\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'DescribeClientCertificateStatus' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的客户端证书或服务端证书的唯一识别码。多个证书识别码之间使用半角逗号（,）分隔。'."\n"
                            ."\n\n"
                            .'> 您可以调用[ListClientCertificate](~~465990~~)查询所有客户端与服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'CertificateStatus' => [
                                'description' => '证书状态的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SerialNumber' => [
                                            'description' => '证书的序列号。',
                                            'type' => 'string',
                                            'example' => 'b67e53ebcea9b77d65b0c3236646d715****',
                                        ],
                                        'Status' => [
                                            'description' => '证书的当前状态。取值：'."\n"
                                                ."\n"
                                                .'- **good**：表示该证书未被吊销。'."\n"
                                                .'- **revoked**：表示该证书已被吊销。'."\n"
                                                .'- **unknown**：表示服务器不能判断该证书的状态。',
                                            'type' => 'string',
                                            'example' => 'good',
                                        ],
                                        'RevokeTime' => [
                                            'description' => '证书被吊销的日期。'."\n"
                                                ."\n"
                                                .'> 只有当**Status**为**revoked**（表示证书已被吊销）时，才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2021-01-01T00:00Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"CertificateStatus\\": [\\n    {\\n      \\"SerialNumber\\": \\"b67e53ebcea9b77d65b0c3236646d715****\\",\\n      \\"Status\\": \\"good\\",\\n      \\"RevokeTime\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询证书的状态信息',
            'summary' => '通过证书的唯一识别码查询客户端证书和服务端证书的状态信息。',
            'description' => '本接口用于通过证书的唯一识别码，批量查询客户端证书或服务端证书的状态，例如，证书是否已被吊销。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'ListClientCertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页显示证书的数量。默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的客户端证书或服务端证书的唯一识别码。'."\n"
                            ."\n"
                            .'> 您可以调用[ListClientCertificate](~~330884~~)查询所有客户端证书和服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListCertificateResponse2<CertificateWithContentDTO>',
                        'description' => 'ListCertificateResponse2<CertificateWithContentDTO>',
                        'type' => 'object',
                        'properties' => [
                            'CertificateList' => [
                                'description' => '客户端证书或服务端证书的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'X509Certificate' => [
                                            'description' => '证书的内容。',
                                            'type' => 'string',
                                            'example' => '-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----',
                                        ],
                                        'Identifier' => [
                                            'description' => '证书的唯一识别码。',
                                            'type' => 'string',
                                            'example' => 'd3b95700998e47afc4d95f886579****',
                                        ],
                                        'SerialNumber' => [
                                            'description' => '证书的序列号。',
                                            'type' => 'string',
                                            'example' => '62b2b943a32d96883a6650e672ea0276****',
                                        ],
                                        'SubjectDN' => [
                                            'description' => '证书的DN（Distinguished Name）属性，表示证书的使用者，具体包含以下信息：'."\n"
                                                ."\n"
                                                .'- **C**：国家。'."\n"
                                                .'- **O**：组织机构。'."\n"
                                                .'- **OU**：部门。'."\n"
                                                .'- **L**：城市。'."\n"
                                                .'<props="china">- **ST**：省份、直辖市或自治区。</props>'."\n"
                                                .'<props="intl">- **ST**：省份或州。</props>'."\n"
                                                .'- **CN**：公用名。',
                                            'type' => 'string',
                                            'example' => 'C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun',
                                        ],
                                        'CommonName' => [
                                            'description' => '证书的公用名。',
                                            'type' => 'string',
                                            'example' => 'aliyundoc.com',
                                        ],
                                        'OrganizationUnit' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构下部门的名称。',
                                            'type' => 'string',
                                            'example' => 'Security',
                                        ],
                                        'Organization' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构的名称。',
                                            'type' => 'string',
                                            'example' => '阿里云计算有限公司',
                                        ],
                                        'Locality' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构所在城市的名称。',
                                            'type' => 'string',
                                            'example' => 'Hangzhou',
                                        ],
                                        'State' => [
                                            'description' => '<props="china">签发该证书的子CA证书关联的组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                                                .'<props="intl">签发该证书的子CA证书关联的组织机构所在省份或州的名称。</props>',
                                            'type' => 'string',
                                            'example' => 'Zhejiang',
                                        ],
                                        'CountryCode' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构所在国家的代码。'."\n"
                                                ."\n"
                                                .'关于不同国家代码的含义，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                                            'type' => 'string',
                                            'example' => 'CN',
                                        ],
                                        'Sans' => [
                                            'description' => '证书的SAN（Subject Alternative Name）扩展属性，表示证书关联的其他域名、IP地址等。'."\n"
                                                ."\n"
                                                .'该参数使用JSON数组转化的字符串表示。JSON数组中的每个元素是一个结构体，对应一个SAN扩展。'."\n"
                                                .'每个SAN扩展结构体包含以下参数：'."\n"
                                                ."\n"
                                                .'- **Type**：Integer类型，表示扩展的类型。取值：'."\n"
                                                .'	- **1**：表示邮箱地址。'."\n"
                                                .'	- **2**：表示域名。'."\n"
                                                .'	- **6**：表示统一资源标识符URI（Uniform Resource Identifier）。'."\n"
                                                .'	- **7**：表示IP地址。'."\n"
                                                .'- **Value**：String类型，表示扩展的内容。',
                                            'type' => 'string',
                                            'example' => '[ {"Type": 7, "Value": "192.0.XX.XX"}, {"Type": 2, "Value": "www.aliyundoc.com"}, ]',
                                        ],
                                        'Status' => [
                                            'description' => '证书的状态。取值：'."\n"
                                                ."\n"
                                                .'- **ISSUE**：表示正常签发。'."\n"
                                                .'- **REVOKE**：表示已被吊销。',
                                            'type' => 'string',
                                            'example' => 'ISSUE',
                                        ],
                                        'BeforeDate' => [
                                            'description' => '证书的签发日期。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1634283958000',
                                        ],
                                        'AfterDate' => [
                                            'description' => '证书的到期日期。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665819958000',
                                        ],
                                        'Algorithm' => [
                                            'description' => '证书的加密算法类型。取值：'."\n"
                                                ."\n"
                                                .'- **RSA**：表示RSA算法。'."\n"
                                                .'- **ECC**：表示ECC算法。'."\n"
                                                .'- **SM2**：表示SM2（国密）算法。',
                                            'type' => 'string',
                                            'example' => 'RSA',
                                        ],
                                        'KeySize' => [
                                            'description' => '证书的密钥长度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4096',
                                        ],
                                        'SignAlgorithm' => [
                                            'description' => '证书的签名算法。',
                                            'type' => 'string',
                                            'example' => 'SHA256WITHRSA',
                                        ],
                                        'CertificateType' => [
                                            'description' => '证书的类型。取值：'."\n"
                                                ."\n"
                                                .'-  **CLIENT**：表示客户端证书。'."\n"
                                                .'-  **SERVER**：表示服务端证书。',
                                            'type' => 'string',
                                            'example' => 'SERVER',
                                        ],
                                        'ParentIdentifier' => [
                                            'description' => '签发该证书的子CA证书的唯一识别码。',
                                            'type' => 'string',
                                            'example' => '160ae6bb538d538c70c01f81dcf2****',
                                        ],
                                        'Sha2' => [
                                            'description' => '证书的SHA256数字指纹。',
                                            'type' => 'string',
                                            'example' => '14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****',
                                        ],
                                        'Md5' => [
                                            'description' => '证书的MD5数字指纹。',
                                            'type' => 'string',
                                            'example' => 'd3b95700998e47afc4d95f886579****',
                                        ],
                                        'Days' => [
                                            'description' => '证书的有效期。单位：天。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '365',
                                        ],
                                    ],
                                ],
                            ],
                            'CurrentPage' => [
                                'description' => '当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageCount' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ShowSize' => [
                                'description' => '每页显示证书的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的客户端证书和服务端证书的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertificateList\\": [\\n    {\\n      \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----\\",\\n      \\"Identifier\\": \\"d3b95700998e47afc4d95f886579****\\",\\n      \\"SerialNumber\\": \\"62b2b943a32d96883a6650e672ea0276****\\",\\n      \\"SubjectDN\\": \\"C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun\\",\\n      \\"CommonName\\": \\"aliyundoc.com\\",\\n      \\"OrganizationUnit\\": \\"Security\\",\\n      \\"Organization\\": \\"阿里云计算有限公司\\",\\n      \\"Locality\\": \\"Hangzhou\\",\\n      \\"State\\": \\"Zhejiang\\",\\n      \\"CountryCode\\": \\"CN\\",\\n      \\"Sans\\": \\"[ {\\\\\\"Type\\\\\\": 7, \\\\\\"Value\\\\\\": \\\\\\"192.0.XX.XX\\\\\\"}, {\\\\\\"Type\\\\\\": 2, \\\\\\"Value\\\\\\": \\\\\\"www.aliyundoc.com\\\\\\"}, ]\\",\\n      \\"Status\\": \\"ISSUE\\",\\n      \\"BeforeDate\\": 1634283958000,\\n      \\"AfterDate\\": 1665819958000,\\n      \\"Algorithm\\": \\"RSA\\",\\n      \\"KeySize\\": 4096,\\n      \\"SignAlgorithm\\": \\"SHA256WITHRSA\\",\\n      \\"CertificateType\\": \\"SERVER\\",\\n      \\"ParentIdentifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n      \\"Sha2\\": \\"14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****\\",\\n      \\"Md5\\": \\"d3b95700998e47afc4d95f886579****\\",\\n      \\"Days\\": 365\\n    }\\n  ],\\n  \\"CurrentPage\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"ShowSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<ListClientCertificateResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageCount>1</PageCount>\\n    <ShowSize>20</ShowSize>\\n    <CertificateList>\\n        <Status>ISSUE</Status>\\n        <SerialNumber>62b2b943a32d96883a6650e672ea0276****</SerialNumber>\\n        <CertificateType>SERVER</CertificateType>\\n        <Algorithm>RSA</Algorithm>\\n        <State>Zhejiang</State>\\n        <Organization>阿里云计算有限公司</Organization>\\n        <ParentIdentifier>160ae6bb538d538c70c01f81dcf2****</ParentIdentifier>\\n        <Locality>Hangzhou</Locality>\\n        <Identifier>d3b95700998e47afc4d95f886579****</Identifier>\\n        <Sans>[ {\\"Type\\": 7, \\"Value\\": \\"192.0.XX.XX\\"}, {\\"Type\\": 2, \\"Value\\": \\"www.aliyundoc.com\\"}, ]</Sans>\\n        <Days>365</Days>\\n        <KeySize>4096</KeySize>\\n        <X509Certificate>-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----</X509Certificate>\\n        <SubjectDN>C=CN,O=阿里云计算有限公司,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun</SubjectDN>\\n        <SignAlgorithm>SHA256WITHRSA</SignAlgorithm>\\n        <OrganizationUnit>Security</OrganizationUnit>\\n        <AfterDate>1665819958000</AfterDate>\\n        <Sha2>14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****</Sha2>\\n        <CommonName>aliyundoc.com</CommonName>\\n        <Md5>d3b95700998e47afc4d95f886579****</Md5>\\n        <CountryCode>CN</CountryCode>\\n        <BeforeDate>1634283958000</BeforeDate>\\n    </CertificateList>\\n</ListClientCertificateResponse>","errorExample":""}]',
            'title' => '查询证书列表',
            'summary' => '查询所有客户端证书和服务端证书的详细信息。',
            'description' => '本接口用于分页查询您已创建的所有客户端证书和服务端证书的详细信息，例如，证书的唯一识别码、序列号、使用者信息、内容、状态等。'."\n"
                ."\n\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'ListRevokeCertificate' => [
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含已被吊销证书的数量。默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListCertificateResponse2<RevokedCertificateDTO>',
                        'description' => 'ListCertificateResponse2<RevokedCertificateDTO>。',
                        'type' => 'object',
                        'properties' => [
                            'CertificateList' => [
                                'description' => '已被吊销的客户端证书或服务端证书的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RevokeDate' => [
                                            'description' => '证书被吊销的日期。格式为`yyyy-MM-ddT00:00Z`，例如，`2021-09-01T00:00Z`表示2021年09月01日。'."\n",
                                            'type' => 'string',
                                            'example' => '2021-09-01T00:00Z',
                                        ],
                                        'Identifier' => [
                                            'description' => '证书的唯一识别码。',
                                            'type' => 'string',
                                            'example' => '05e148d8d3ecc9976d9ecd2b2f25****',
                                        ],
                                        'SerialNumber' => [
                                            'description' => '证书的序列号。',
                                            'type' => 'string',
                                            'example' => '168b12c42e62339f8d2340ff530f9365****',
                                        ],
                                        'SubjectDN' => [
                                            'description' => '证书的DN（Distinguished Name）属性，表示证书的使用者，具体包含以下信息：'."\n"
                                                ."\n"
                                                .'- **C**：国家。'."\n"
                                                .'- **O**：组织机构。'."\n"
                                                .'- **OU**：部门。'."\n"
                                                .'- **L**：城市。'."\n"
                                                .'<props="china">- **ST**：省份、直辖市或自治区。</props>'."\n"
                                                .'<props="intl">- **ST**：省份或州。</props>'."\n"
                                                .'- **CN**：公用名。'."\n",
                                            'type' => 'string',
                                            'example' => 'C=CN,O=阿里云计算有限公司,OU=Security,L=ZheJiang,ST=HangZhou,CN=aliyundoc.com',
                                        ],
                                        'CommonName' => [
                                            'description' => '证书的公用名。',
                                            'type' => 'string',
                                            'example' => 'aliyundoc.com',
                                        ],
                                        'OrganizationUnit' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构下部门的名称。',
                                            'type' => 'string',
                                            'example' => 'Security',
                                        ],
                                        'Organization' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构的名称。',
                                            'type' => 'string',
                                            'example' => '阿里云计算有限公司',
                                        ],
                                        'Locality' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构所在城市的名称。',
                                            'type' => 'string',
                                            'example' => 'Hangzhou',
                                        ],
                                        'State' => [
                                            'description' => '<props="china">签发该证书的子CA证书关联的组织机构所在省份、直辖市或自治区的名称。</props>'."\n"
                                                .'<props="intl">签发该证书的子CA证书关联的组织机构所在省份或州的名称。</props>',
                                            'type' => 'string',
                                            'example' => 'Zhejiang',
                                        ],
                                        'CountryCode' => [
                                            'description' => '签发该证书的子CA证书关联的组织机构所在国家的代码。'."\n"
                                                ."\n"
                                                .'关于不同国家代码的含义，请参见[管理公司信息](~~198289~~)中的**国际代号**章节。',
                                            'type' => 'string',
                                            'example' => 'CN',
                                        ],
                                        'Sans' => [
                                            'description' => '证书的SAN（Subject Alternative Name）扩展属性。'."\n"
                                                ."\n"
                                                .'该参数使用JSON数组转化的字符串表示。JSON数组中的每个元素是一个结构体，对应一个SAN扩展。每个SAN扩展结构体包含以下参数：'."\n"
                                                ."\n"
                                                .'- **Type**：Integer类型，表示扩展的类型。取值：'."\n"
                                                .'	- **1**：表示邮箱地址。'."\n"
                                                .'	- **2**：表示域名。'."\n"
                                                .'	- **6**：表示统一资源标识符URI（Uniform Resource Identifier）。'."\n"
                                                .'	- **7**：表示IP地址。'."\n"
                                                .'- **Value**：String类型，表示扩展的内容。',
                                            'type' => 'string',
                                            'example' => '[ {"Type": 7, "Value": "192.0.XX.XX"}, {"Type": 2, "Value": "www.aliyundoc.com"}, ]',
                                        ],
                                        'Status' => [
                                            'description' => '状态。',
                                            'type' => 'string',
                                            'example' => 'ISSUE',
                                        ],
                                        'BeforeDate' => [
                                            'description' => '证书的签发日期。格式为`yyyy-MM-ddT00:00Z`，例如，`2021-01-01T00:00Z`表示2021年01月01日。',
                                            'type' => 'string',
                                            'example' => '2021-01-01T00:00Z',
                                        ],
                                        'AfterDate' => [
                                            'description' => '证书的到期日期。格式为`yyyy-MM-ddT00:00Z`，例如，`2021-12-31T00:00Z`表示2021年12月31日。',
                                            'type' => 'string',
                                            'example' => '2021-12-31T00:00Z',
                                        ],
                                        'Algorithm' => [
                                            'description' => '证书的加密算法类型。取值：'."\n"
                                                ."\n"
                                                .'- **RSA**：表示RSA算法。'."\n"
                                                .'- **ECC**：表示ECC算法。'."\n"
                                                .'- **SM2**：表示SM2（国密）算法。',
                                            'type' => 'string',
                                            'example' => 'RSA',
                                        ],
                                        'KeySize' => [
                                            'description' => '证书的密钥长度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4096',
                                        ],
                                        'SignAlgorithm' => [
                                            'description' => '证书的签名算法。',
                                            'type' => 'string',
                                            'example' => 'SHA256WITHRSA',
                                        ],
                                        'CertificateType' => [
                                            'description' => '证书类型。',
                                            'type' => 'string',
                                            'example' => 'SERVER',
                                        ],
                                        'ParentIdentifier' => [
                                            'description' => '父证书标识。',
                                            'type' => 'string',
                                            'example' => '160ae6bb538d538c70c01f81dcf2****',
                                        ],
                                        'Sha2' => [
                                            'description' => '证书的SHA256数字指纹。',
                                            'type' => 'string',
                                            'example' => 'b60eff7e04323ff662f9ab5e6986f849f626a9c7bf2c59dcc752fa23779a****',
                                        ],
                                        'Md5' => [
                                            'description' => '证书的MD5数字指纹。',
                                            'type' => 'string',
                                            'example' => '05e148d8d3ecc9976d9ecd2b2f25****',
                                        ],
                                    ],
                                ],
                            ],
                            'CurrentPage' => [
                                'description' => '当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageCount' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ShowSize' => [
                                'description' => '每页包含已被吊销证书的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '已被吊销的客户端证书和服务端证书的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CertificateList\\": [\\n    {\\n      \\"RevokeDate\\": \\"2021-09-01T00:00Z\\",\\n      \\"Identifier\\": \\"05e148d8d3ecc9976d9ecd2b2f25****\\",\\n      \\"SerialNumber\\": \\"168b12c42e62339f8d2340ff530f9365****\\",\\n      \\"SubjectDN\\": \\"C=CN,O=阿里云计算有限公司,OU=Security,L=ZheJiang,ST=HangZhou,CN=aliyundoc.com\\",\\n      \\"CommonName\\": \\"aliyundoc.com\\",\\n      \\"OrganizationUnit\\": \\"Security\\",\\n      \\"Organization\\": \\"阿里云计算有限公司\\",\\n      \\"Locality\\": \\"Hangzhou\\",\\n      \\"State\\": \\"Zhejiang\\",\\n      \\"CountryCode\\": \\"CN\\",\\n      \\"Sans\\": \\"[ {\\\\\\"Type\\\\\\": 7, \\\\\\"Value\\\\\\": \\\\\\"192.0.XX.XX\\\\\\"}, {\\\\\\"Type\\\\\\": 2, \\\\\\"Value\\\\\\": \\\\\\"www.aliyundoc.com\\\\\\"}, ]\\",\\n      \\"Status\\": \\"ISSUE\\",\\n      \\"BeforeDate\\": \\"2021-01-01T00:00Z\\",\\n      \\"AfterDate\\": \\"2021-12-31T00:00Z\\",\\n      \\"Algorithm\\": \\"RSA\\",\\n      \\"KeySize\\": 4096,\\n      \\"SignAlgorithm\\": \\"SHA256WITHRSA\\",\\n      \\"CertificateType\\": \\"SERVER\\",\\n      \\"ParentIdentifier\\": \\"160ae6bb538d538c70c01f81dcf2****\\",\\n      \\"Sha2\\": \\"b60eff7e04323ff662f9ab5e6986f849f626a9c7bf2c59dcc752fa23779a****\\",\\n      \\"Md5\\": \\"05e148d8d3ecc9976d9ecd2b2f25****\\"\\n    }\\n  ],\\n  \\"CurrentPage\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"ShowSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","type":"json"}]',
            'title' => '查询吊销证书列表',
            'summary' => '查询所有已被吊销的客户端证书和服务端证书的详细信息。',
            'description' => '本接口用于分页查询所有已被吊销的客户端证书和服务端证书的详细信息，例如，证书的唯一识别码、序列号、吊销日期等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cas.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cas.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cas.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
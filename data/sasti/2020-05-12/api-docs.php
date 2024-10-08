<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Sasti',
        'version' => '2020-05-12',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'DescribeDomainReport',
                'DescribeFileReport',
                'DescribeIpReport',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeDomainReport' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '56810',
                'abilityTreeNodes' => [
                    'FEATUREsas8YMQ5V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的域名。支持通配符域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Field',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的字段。可以输入多个参数值，以英文逗号分隔。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n\n"
                            .'-  **ThreatTypes**：从威胁情报、安全事件分析出来的该域名所具备的风险标签。'."\n"
                            ."\n"
                            .'- **Intelligences**：详细的威胁情报事件。'."\n"
                            ."\n"
                            .'- **AttackPreferenceTop5**：被攻击的网站所属的Top 5行业。'."\n"
                            ."\n"
                            .'- **AttackCntByThreatType**：服务器遭受的攻击次数。'."\n"
                            ."\n"
                            .'- **为空**：表示仅返回域名、威胁等级、域名的基础信息、域名Whois信息和SSL证书信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ThreatTypes,Intelligences,AttackPreferenceTop5,AttackCntByThreatType',
                    ],
                ],
                [
                    'name' => 'ServiceLang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置结果返回语言'."\n"
                            .'- **zh**：简体中文'."\n"
                            ."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh/en',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Intelligences' => [
                                'description' => '详细的威胁情报事件，使用JSON数组表示。'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    ."\n"
                                    .'- **source**：威胁情报数据来源。'."\n"
                                    ."\n"
                                    .'- **first\\_find\\_time**：首次发现时间。'."\n"
                                    ."\n"
                                    .'- **last\\_find\\_time**：最后活跃时间。'."\n"
                                    ."\n"
                                    .'- **threat\\_type\\_l2**：威胁情报详细标签，可以使家族团伙的标签，例如mykings，apt32，可以使攻击手法，例如bits job，描述连接域名使用的手法。'."\n"
                                    ."\n"
                                    .'- **threat\\_type**：威胁情报详细标签对应的一级标签，即威胁的大分类标签。'."\n"
                                    ."\n"
                                    .'- **refer**：相关参考。'."\n"
                                    ."\n\n",
                                'type' => 'string',
                                'example' => '[{ "last_find_time": "2020-06-17 03:54:23", "threat_type_l2": "恶意下载源", "first_find_time": "2020-01-01 00:59:52", "source": "aliyun" }, { "last_find_time": "2020-11-10 14:45:12", "threat_type_l2": "regsvr32.exe执行恶意文件", "first_find_time": "2017-09-22 11:15:00", "source": "aliyun" } ]',
                            ],
                            'Domain' => [
                                'description' => '域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'SslCert' => [
                                'description' => '域名绑定的SSL证书信息。使用JSON串表示。',
                                'type' => 'string',
                                'example' => '{   "serial_number": "18395475168054001104",   "validity_end": "2029-12-02 06:00:31",   "issuer": "example.ca",...}',
                            ],
                            'AttackPreferenceTop5' => [
                                'description' => '被攻击的网站所属的Top 5行业。使用JSON数组表示。'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **event_cnt**：攻击次数。'."\n"
                                    .'- **industry_name**：攻击行业类别。'."\n"
                                    .'- **gmt\\_last\\_attack**：最后攻击活跃时间。',
                                'type' => 'string',
                                'example' => '[{"event_cnt":586,"industry_name":"Gaming","gmt_last_attack":"2020-06-14 21:54:04"}]',
                            ],
                            'ThreatTypes' => [
                                'description' => '该域名相关的详细威胁情报数据，使用JSON数组表示，每一个数组的字段含义如下：'."\n"
                                    ."\n"
                                    .'- **threat_type_desc**：标签的中文描述。'."\n"
                                    .'- **first\\_find\\_time**：首次标记时间。'."\n"
                                    .'- **last\\_find\\_time**：最后标记时间。'."\n"
                                    .'- **risk_type**：表示是否是恶意标签。**0**表示非恶意标签，**1**表示低危标签，**2**表示中危标签，**3**表示高危标签，**-1**表示未知。'."\n"
                                    .'- **scenario**： 该域名所归属的场景，失陷指标或攻击指标。'."\n"
                                    .'- **attck_stage**：该恶意行为所属的 ATT&CK 攻击阶段。'."\n"
                                    .'- **threat_type**：威胁类型。'."\n"
                                    ."\n"
                                    .'常见的威胁标签（threat_type字段）取值：'."\n"
                                    .'- **Botnet**：僵尸网络'."\n"
                                    .'- **Trojan**：木马'."\n"
                                    .'- **Worm**：蠕虫'."\n"
                                    .'- **Malware**：恶意软件'."\n"
                                    .'- **Ransomware**：勒索软件'."\n"
                                    .'- **APT**：高级持续威胁攻击'."\n"
                                    .'- **RAT**：远控'."\n"
                                    .'- **C&C Server**：命令与控制服务器'."\n"
                                    .'- **Miner Pool**：矿池'."\n"
                                    .'- **Malicious Source**：恶意下载源'."\n"
                                    .'- **Scheduled Task**：Windows计划任务'."\n"
                                    .'- **BITS Jobs**：BITS作业'."\n"
                                    .'- **Command-Line Interface**：恶意命令'."\n"
                                    .'- **Mshta执行**：Mshta执行'."\n"
                                    .'- **Regsvr32**：Regsvr32执行'."\n"
                                    .'- **Signed Binary Proxy Execution**：签名的二进制代理执行'."\n"
                                    .'- **Local Job Scheduling**：Linux计划任务'."\n"
                                    .'- **Rundll32**：Rundll32执行',
                                'type' => 'string',
                                'example' => '[{ "threat_type_desc": "恶意下载源", "last_find_time": "2020-06-17 03:54:23", "risk_type": 3, "scenario": "失陷指标", "threat_type": "Malicious Source", "first_find_time": "2020-01-01 00:59:52", "attck_stage": "delivery" }, { "threat_type_desc": "Regsvr32执行", "last_find_time": "2020-11-10 14:45:12", "risk_type": 3, "scenario": "失陷指标", "threat_type": "Regsvr32", "first_find_time": "2017-09-22 11:15:00", "attck_stage": "defense evasion" } ]',
                            ],
                            'Confidence' => [
                                'description' => '对判定结果的置信程度，置信度值越高，说明对判定结果（判定结果是ThreatLevel字段）有多少信心。通常认为置信度大于90的结果可以作为精准结果，对于恶意的高威胁等级的指标可以进行拦截。对于正常（ThreatLevel等于0）的结果可以放行。'."\n"
                                    ."\n"
                                    .'取值范围60-100：'."\n"
                                    .' - **[90-100)**：认为该情报是高可信的，可以作为拦截或者放行依据，如果ThreatLevel表示高危（ThreatLevel=3）则可拦截，如果ThreatLevel表示正常（ThreatLevel=0）。'."\n"
                                    .' - **[60-90)**：认为情报有一定的可信，但是还不能达到拦截指标，通常是有一些恶意行为的域名。可作为安全分析运营的辅助依据。'."\n"
                                    .' - **其他**：威胁情报的威胁相关信息认为置信度低。',
                                'type' => 'string',
                                'example' => '95',
                            ],
                            'ThreatLevel' => [
                                'description' => '威胁等级，命中以后造成的危害等级，恶意的等级有高危、中危、低危、正常和未知五个等级。使用的时候可以结合置信度（Confidence字段）来使用，对高危并且高置信度的数据进行拦截。对于正常（即白名单）的类型可以进行放行。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    .'- **-1**：未知'."\n"
                                    .'- **0**：正常，即白名单，可以放行'."\n"
                                    .'- **1**：低危'."\n"
                                    .'- **2**：中危'."\n"
                                    .'- **3**：高危',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'AttackCntByThreatType' => [
                                'description' => '不同攻击阶段的攻击次数。'."\n"
                                    ."\n"
                                    .'该参数使用JSON数组表示，数组中的字段含义说明如下：'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **event_cnt**：攻击次数。'."\n"
                                    .'- **threat_type**：攻击所属 ATT&CK 阶段。',
                                'type' => 'string',
                                'example' => ' {"event_cnt": 27, "threat_type": "网络层入侵"}',
                            ],
                            'Context' => [
                                'description' => '保留字段，暂空',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Whois' => [
                                'description' => '域名的Whois信息。使用JSON串表示。',
                                'type' => 'string',
                                'example' => '{"registrant_phone": "", "registrar": "科技有限公司", "registrar_url": "", "whois_server": "whois.cnnic.cn", "admin_phone": "", "registrar_phone": "", "registrant_email": "", "admin_email": "", "admin_organization": "", "tech_name": "", "registrant_city": "", "tech_street": "", "tech_phone": "", "dnssec": "unsigned", "admin_province": "", "tech_organization": "", "registrant_country": "", "admin_city": "", "registrant_province": "", "admin_street": "", "tech_email": "", "nameservers": "ns4.myhostadmin.net,ns1.myhostadmin.net,ns2.myhostadmin.net,ns3.myhostadmin.net,ns5.myhostadmin.net,ns6.myhostadmin.net", "registrar_email": "", "domain_status": "ok", "domain": "example.com", "tech_city": "", "registrant_name": "朱轩", "registrant_organization": "", "tech_country": "", "registrant_street": "", "admin_name": "", "tech_province": "", "admin_country": ""}',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为此次调用请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '718747A4-9A75-4130-88F9-C9B47350B7F5',
                            ],
                            'Scenario' => [
                                'description' => '该域名所适用的攻击场景。'."\n"
                                    ."\n"
                                    .'可以取以下的一个或者多个值：'."\n"
                                    ."\n"
                                    .'- **攻击指标**：域名通常不为攻击指标。'."\n"
                                    .'- **失陷指标**：攻击者植入的脚本或者恶意代码会回联该域名进行通讯和数据传输，如果在流量或者日志中发现该域名意味着当前主机已经被攻破。失陷以后对外的C2连接'."\n"
                                    .'- **信息数据**：白名单等类型，该字段为信息数据，不具有风险场景',
                                'type' => 'string',
                                'example' => '"失陷指标"',
                            ],
                            'Basic' => [
                                'description' => '域名的基础信息。使用JSON格式表示。'."\n"
                                    ."\n"
                                    .'字段含义如下：'."\n"
                                    ."\n"
                                    .'- **domain**：域名'."\n"
                                    ."\n"
                                    .'- **sld_domain**：SLD域名'."\n"
                                    ."\n"
                                    .'- **reg_date**：域名注册时间'."\n"
                                    ."\n"
                                    .'- **expire_date**：域名过期时间'."\n"
                                    ."\n"
                                    .'- **child\\_domain\\_cnt**：子域名数量'."\n"
                                    ."\n"
                                    .'- **malicious\\_child\\_domain\\_cnt**：恶意子域名数量'."\n"
                                    ."\n"
                                    .'- **ip\\_cnt**：近1年该域名的解析IP数量'."\n"
                                    ."\n"
                                    .'- **malicious\\_ip\\_cnt**：近1年该域名解析IP为恶意IP的数量',
                                'type' => 'string',
                                'example' => '{ "ip_cnt": "36", "domain": "example.com", "child_domain_cnt": "18", "sld_domain": "example.com", "malicious_ip_cnt": "28", "malicious_child_domain_cnt": "4" }',
                            ],
                            'Group' => [
                                'description' => '暂空，保留字段',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Intelligences\\": \\"[{ \\\\\\"last_find_time\\\\\\": \\\\\\"2020-06-17 03:54:23\\\\\\", \\\\\\"threat_type_l2\\\\\\": \\\\\\"恶意下载源\\\\\\", \\\\\\"first_find_time\\\\\\": \\\\\\"2020-01-01 00:59:52\\\\\\", \\\\\\"source\\\\\\": \\\\\\"aliyun\\\\\\" }, { \\\\\\"last_find_time\\\\\\": \\\\\\"2020-11-10 14:45:12\\\\\\", \\\\\\"threat_type_l2\\\\\\": \\\\\\"regsvr32.exe执行恶意文件\\\\\\", \\\\\\"first_find_time\\\\\\": \\\\\\"2017-09-22 11:15:00\\\\\\", \\\\\\"source\\\\\\": \\\\\\"aliyun\\\\\\" } ]\\",\\n  \\"Domain\\": \\"example.com\\",\\n  \\"SslCert\\": \\"{   \\\\\\"serial_number\\\\\\": \\\\\\"18395475168054001104\\\\\\",   \\\\\\"validity_end\\\\\\": \\\\\\"2029-12-02 06:00:31\\\\\\",   \\\\\\"issuer\\\\\\": \\\\\\"example.ca\\\\\\",...}\\",\\n  \\"AttackPreferenceTop5\\": \\"[{\\\\\\"event_cnt\\\\\\":586,\\\\\\"industry_name\\\\\\":\\\\\\"Gaming\\\\\\",\\\\\\"gmt_last_attack\\\\\\":\\\\\\"2020-06-14 21:54:04\\\\\\"}]\\",\\n  \\"ThreatTypes\\": \\"[{ \\\\\\"threat_type_desc\\\\\\": \\\\\\"恶意下载源\\\\\\", \\\\\\"last_find_time\\\\\\": \\\\\\"2020-06-17 03:54:23\\\\\\", \\\\\\"risk_type\\\\\\": 3, \\\\\\"scenario\\\\\\": \\\\\\"失陷指标\\\\\\", \\\\\\"threat_type\\\\\\": \\\\\\"Malicious Source\\\\\\", \\\\\\"first_find_time\\\\\\": \\\\\\"2020-01-01 00:59:52\\\\\\", \\\\\\"attck_stage\\\\\\": \\\\\\"delivery\\\\\\" }, { \\\\\\"threat_type_desc\\\\\\": \\\\\\"Regsvr32执行\\\\\\", \\\\\\"last_find_time\\\\\\": \\\\\\"2020-11-10 14:45:12\\\\\\", \\\\\\"risk_type\\\\\\": 3, \\\\\\"scenario\\\\\\": \\\\\\"失陷指标\\\\\\", \\\\\\"threat_type\\\\\\": \\\\\\"Regsvr32\\\\\\", \\\\\\"first_find_time\\\\\\": \\\\\\"2017-09-22 11:15:00\\\\\\", \\\\\\"attck_stage\\\\\\": \\\\\\"defense evasion\\\\\\" } ]\\",\\n  \\"Confidence\\": \\"95\\",\\n  \\"ThreatLevel\\": \\"2\\",\\n  \\"AttackCntByThreatType\\": \\" {\\\\\\"event_cnt\\\\\\": 27, \\\\\\"threat_type\\\\\\": \\\\\\"网络层入侵\\\\\\"}\\",\\n  \\"Context\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Whois\\": \\"{\\\\\\"registrant_phone\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrar\\\\\\": \\\\\\"科技有限公司\\\\\\", \\\\\\"registrar_url\\\\\\": \\\\\\"\\\\\\", \\\\\\"whois_server\\\\\\": \\\\\\"whois.cnnic.cn\\\\\\", \\\\\\"admin_phone\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrar_phone\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrant_email\\\\\\": \\\\\\"\\\\\\", \\\\\\"admin_email\\\\\\": \\\\\\"\\\\\\", \\\\\\"admin_organization\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_name\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrant_city\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_street\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_phone\\\\\\": \\\\\\"\\\\\\", \\\\\\"dnssec\\\\\\": \\\\\\"unsigned\\\\\\", \\\\\\"admin_province\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_organization\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrant_country\\\\\\": \\\\\\"\\\\\\", \\\\\\"admin_city\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrant_province\\\\\\": \\\\\\"\\\\\\", \\\\\\"admin_street\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_email\\\\\\": \\\\\\"\\\\\\", \\\\\\"nameservers\\\\\\": \\\\\\"ns4.myhostadmin.net,ns1.myhostadmin.net,ns2.myhostadmin.net,ns3.myhostadmin.net,ns5.myhostadmin.net,ns6.myhostadmin.net\\\\\\", \\\\\\"registrar_email\\\\\\": \\\\\\"\\\\\\", \\\\\\"domain_status\\\\\\": \\\\\\"ok\\\\\\", \\\\\\"domain\\\\\\": \\\\\\"example.com\\\\\\", \\\\\\"tech_city\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrant_name\\\\\\": \\\\\\"朱轩\\\\\\", \\\\\\"registrant_organization\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_country\\\\\\": \\\\\\"\\\\\\", \\\\\\"registrant_street\\\\\\": \\\\\\"\\\\\\", \\\\\\"admin_name\\\\\\": \\\\\\"\\\\\\", \\\\\\"tech_province\\\\\\": \\\\\\"\\\\\\", \\\\\\"admin_country\\\\\\": \\\\\\"\\\\\\"}\\",\\n  \\"RequestId\\": \\"718747A4-9A75-4130-88F9-C9B47350B7F5\\",\\n  \\"Scenario\\": \\"\\\\\\"失陷指标\\\\\\"\\",\\n  \\"Basic\\": \\"{ \\\\\\"ip_cnt\\\\\\": \\\\\\"36\\\\\\", \\\\\\"domain\\\\\\": \\\\\\"example.com\\\\\\", \\\\\\"child_domain_cnt\\\\\\": \\\\\\"18\\\\\\", \\\\\\"sld_domain\\\\\\": \\\\\\"example.com\\\\\\", \\\\\\"malicious_ip_cnt\\\\\\": \\\\\\"28\\\\\\", \\\\\\"malicious_child_domain_cnt\\\\\\": \\\\\\"4\\\\\\" }\\",\\n  \\"Group\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainReportResponse>\\n<Context/>\\n<Basic>\\n    <ip_cnt>36</ip_cnt>\\n    <domain>example.com</domain>\\n    <child_domain_cnt>18</child_domain_cnt>\\n    <sld_domain>example.com</sld_domain>\\n    <malicious_ip_cnt>28</malicious_ip_cnt>\\n    <malicious_child_domain_cnt>4</malicious_child_domain_cnt>\\n</Basic>\\n<RequestId>55B99BBE-AD29-4220-A650-A24F16C61071</RequestId>\\n<SslCert/>\\n<ThreatTypes>\\n    <threat_type_desc>中控</threat_type_desc>\\n    <last_find_time>2019-12-19 10:20:47</last_find_time>\\n    <risk_type>3</risk_type>\\n    <scenario>失陷指标</scenario>\\n    <threat_type>C&amp;C Server</threat_type>\\n    <first_find_time>2019-06-20 22:18:58</first_find_time>\\n    <attck_stage/>\\n</ThreatTypes>\\n<ThreatTypes>\\n    <threat_type_desc>Regsvr32执行</threat_type_desc>\\n    <last_find_time>2020-11-10 14:45:12</last_find_time>\\n    <risk_type>3</risk_type>\\n    <scenario>失陷指标</scenario>\\n    <threat_type>Regsvr32</threat_type>\\n    <first_find_time>2017-09-22 11:15:00</first_find_time>\\n    <attck_stage>defense evasion</attck_stage>\\n</ThreatTypes>\\n<Intelligences>\\n    <last_find_time>2020-06-17 03:54:23</last_find_time>\\n    <threat_type_l2>恶意下载源</threat_type_l2>\\n    <first_find_time>2020-01-01 00:59:52</first_find_time>\\n    <source>aliyun</source>\\n</Intelligences>\\n<Intelligences>\\n    <last_find_time>2020-11-10 14:45:12</last_find_time>\\n    <threat_type_l2>regsvr32.exe执行恶意文件</threat_type_l2>\\n    <first_find_time>2017-09-22 11:15:00</first_find_time>\\n    <source>aliyun</source>\\n</Intelligences>\\n<Scenario>失陷指标</Scenario>\\n<Whois/>\\n<AttackCntByThreatType/>\\n<ThreatLevel>2</ThreatLevel>\\n<Confidence>98</Confidence>\\n<Domain>js.example.com</Domain>\\n<AttackPreferenceTop5/>\\n</DescribeDomainReportResponse>","errorExample":""}]',
            'title' => '威胁情报域名报告接口',
            'summary' => '获取域名威胁标签信息、威胁类型、Whois信息、数字证书、相关攻击团伙等信息',
            'description' => '**请确保在使用该接口前，已充分了解威胁情报产品的收费方式和价格。**'."\n"
                ."\n"
                .'默认接口请求频率限制：100次/秒。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeFileReport' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '56815',
                'abilityTreeNodes' => [
                    'FEATUREsas8YMQ5V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FileHash',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的文件hash（MD5值）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b4208cc50cb22a0f82a47d49fde4312a',
                    ],
                ],
                [
                    'name' => 'Field',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的字段。可以输入多个参数值，以英文逗号分隔。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- **ThreatTypes**：威胁情报事件的类型。'."\n"
                            ."\n"
                            .'- **Intelligences**：威胁情报事件。'."\n"
                            ."\n"
                            .'- **AttackPreferenceTop5**：被攻击网站所属行业的Top 5。'."\n"
                            ."\n"
                            .'- **AttackCntByThreatType**：服务器遭受的攻击次数。'."\n"
                            ."\n"
                            .'- **为空**：表示仅返回域名、威胁等级、域名的基础信息、域名Whois信息和SSL证书信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ThreatTypes,Intelligences,AttackPreferenceTop5,AttackCntByThreatType',
                    ],
                ],
                [
                    'name' => 'ServiceLang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置结果返回语言'."\n"
                            .'- **zh**：简体中文'."\n"
                            ."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh/en',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '威胁情报域名接口调用返回JSON字符串',
                        'type' => 'object',
                        'properties' => [
                            'Intelligences' => [
                                'description' => '威胁情报事件，使用JSON数组表示。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    ."\n\n"
                                    .'- 威胁分类。使用数组表示，数组的元素取值包括DDOS木马、挖矿程序、网络层入侵、网络服务扫描、网络共享发现、矿池 、漏洞利用 、暗网、恶意登录、恶意下载源、中控、Web Shell 、Web攻击等。',
                                'type' => 'string',
                                'example' => '["DDOS木马"]',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为此次调用请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '3F2BBCA2-4EE5-456F-93B1-DE0B69CAFD71',
                            ],
                            'FileHash' => [
                                'description' => '文件Hash值。',
                                'type' => 'string',
                                'example' => '02e6b7cf0d34c6eac059f754b751208b',
                            ],
                            'ThreatTypes' => [
                                'description' => '从威胁情报、安全事件分析出来的风险标签和服务器标签。使用String数组表示，每一个数组中的取值如下：'."\n"
                                    ."\n"
                                    .'- **threat_type_desc**：威胁类型。取值包括：Rootkit、后门程序、可疑程序、挖矿程序、DDOS木马、恶意程序、蠕虫病毒、可疑黑客工具木马程序、被污染的基础软件（被植入了恶意代码）、感染型病毒、漏洞利用程序、勒索病毒、自变异木马、高危程序、黑客工具。'."\n"
                                    ."\n"
                                    .'- **last_find_time**：最近发现时间。'."\n"
                                    ."\n"
                                    .'- **risk_type**：表示是否是恶意标签。**0**表示非恶意标签，**1**表示恶意标签，**-1**表示未知。'."\n"
                                    ."\n"
                                    .'- **threat_type**：威胁类型。使用数组表示，数组的元素取值包括网络层入侵、网络服务扫描、网络共享发现、矿池 、漏洞利用 、暗网、恶意登录、恶意下载源、中控、Web Shell 、Web攻击等。',
                                'type' => 'string',
                                'example' => '[{"threat_type_desc": "DDoS木马","risk_type": 1,"threat_type": "DDOS"}]',
                            ],
                            'Basic' => [
                                'description' => '基础信息。字段说明如下：'."\n"
                                    ."\n"
                                    .'- **md5**：文件MD5值。'."\n"
                                    ."\n"
                                    .'- **sha1**：文件SHA1值。'."\n"
                                    ."\n"
                                    .'- **sha256**：文件SHA256值。'."\n"
                                    ."\n"
                                    .'- **sha512**：文件SHA512值。'."\n"
                                    ."\n"
                                    .'- **virus_result**：文件静态扫描结果。**0**表示正常，**1**表示恶意，**-1**表示未知。'."\n"
                                    ."\n"
                                    .'- **sandbox_result**：文件动态沙箱运行结果。**0**表示正常，**1**表示恶意，**-1**表示未知。'."\n"
                                    ."\n"
                                    .'- **source**：文件来源。唯一取值为**aegis**，表示是由云安全中心检测出该文件。',
                                'type' => 'string',
                                'example' => '"Basic": {"sha1": "","virus_result": "1","sandbox_result": "-1","sha256": "","sha512": "","virus_name": "自变异木马","source": "aegis","md5": "...}',
                            ],
                            'ThreatLevel' => [
                                'description' => '威胁等级。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    .'- **-1**：未知'."\n"
                                    .'- **0**：正常'."\n"
                                    .'- **1**：可疑'."\n"
                                    .'- **2**：中危'."\n"
                                    .'- **3**：高危',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'Sandbox' => [
                                'description' => '暂空，保留字段',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Intelligences\\": \\"[\\\\\\"DDOS木马\\\\\\"]\\",\\n  \\"RequestId\\": \\"3F2BBCA2-4EE5-456F-93B1-DE0B69CAFD71\\",\\n  \\"FileHash\\": \\"02e6b7cf0d34c6eac059f754b751208b\\",\\n  \\"ThreatTypes\\": \\"[{\\\\\\"threat_type_desc\\\\\\": \\\\\\"DDoS木马\\\\\\",\\\\\\"risk_type\\\\\\": 1,\\\\\\"threat_type\\\\\\": \\\\\\"DDOS\\\\\\"}]\\",\\n  \\"Basic\\": \\"\\\\\\"Basic\\\\\\": {\\\\\\"sha1\\\\\\": \\\\\\"\\\\\\",\\\\\\"virus_result\\\\\\": \\\\\\"1\\\\\\",\\\\\\"sandbox_result\\\\\\": \\\\\\"-1\\\\\\",\\\\\\"sha256\\\\\\": \\\\\\"\\\\\\",\\\\\\"sha512\\\\\\": \\\\\\"\\\\\\",\\\\\\"virus_name\\\\\\": \\\\\\"自变异木马\\\\\\",\\\\\\"source\\\\\\": \\\\\\"aegis\\\\\\",\\\\\\"md5\\\\\\": \\\\\\"...}\\",\\n  \\"ThreatLevel\\": \\"2\\",\\n  \\"Sandbox\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFileReportResponse>\\n    <Intelligences>[\\"DDOS木马\\"]</Intelligences>\\n    <RequestId>3F2BBCA2-4EE5-456F-93B1-DE0B69CAFD71</RequestId>\\n    <FileHash>02e6b7cf0d34c6eac059f754b751208b</FileHash>\\n    <ThreatTypes>[{\\"threat_type_desc\\": \\"DDoS木马\\",\\"risk_type\\": 1,\\"threat_type\\": \\"DDOS\\"}]</ThreatTypes>\\n    <Basic>\\"Basic\\": {\\"sha1\\": \\"\\",\\"virus_result\\": \\"1\\",\\"sandbox_result\\": \\"-1\\",\\"sha256\\": \\"\\",\\"sha512\\": \\"\\",\\"virus_name\\": \\"自变异木马\\",\\"source\\": \\"aegis\\",\\"md5\\": \\"...}</Basic>\\n    <ThreatLevel>2</ThreatLevel>\\n    <Sandbox>\\"\\"</Sandbox>\\n</DescribeFileReportResponse>","errorExample":""}]',
            'title' => '威胁情报文件报告接口',
            'summary' => '获取文件静态扫描结果、动态沙箱运行结果',
            'description' => '**请确保在使用该接口前，已充分了解威胁情报产品的收费方式和价格。**'."\n"
                ."\n"
                .'默认接口请求频率限制：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeIpReport' => [
            'summary' => '获取IP地址相关地理位置信息、域名解析信息、威胁类型、相关攻击团伙或安全事件信息',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '56829',
                'abilityTreeNodes' => [
                    'FEATUREsas8YMQ5V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Field',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的字段。可以输入多个参数值，以英文逗号分隔。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'-  **ThreatTypes**：威胁情报事件的类型。'."\n"
                            .'- **Intelligences**：威胁情报事件。'."\n"
                            .'- **AttackPreferenceTop5**：被攻击的网站所属的Top 5行业。'."\n"
                            .'- **AttackCntByThreatType**：服务器遭受的攻击次数。'."\n"
                            .'- **为空**：表示仅返回域名、威胁等级、域名的基础信息、域名Whois信息和SSL证书信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TagsThreatTypes,Intelligences,AttackPreferenceTop5,AttackCntByThreatType',
                    ],
                ],
                [
                    'name' => 'ServiceLang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置结果返回语言'."\n"
                            .'- **zh**：简体中文'."\n"
                            ."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh/en',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '威胁情报IP报告接口返回JSON字符串',
                        'type' => 'object',
                        'properties' => [
                            'Context' => [
                                'description' => '暂空，保留字段',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Intelligences' => [
                                'description' => '威胁情报事件信息。'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **source**：威胁情报事件的来源。'."\n"
                                    .'- **first\\_find\\_time**：首次发现时间。'."\n"
                                    .'- **last\\_find\\_time**：最后活跃时间。'."\n"
                                    .'- **threat\\_type\\_l2**：威胁情报详细标签，可以使家族团伙的标签，例如Mykings，可以使攻击手法，例如SQL注入，描述了这个IP具体的威胁基本标签。',
                                'type' => 'string',
                                'example' => '[{"last_find_time": "2021-01-29 10:50:00", "threat_type_l2": "一句话木马扫描", "first_find_time": "2021-01-29 00:28:43", "source": "aliyun"}]',
                            ],
                            'Whois' => [
                                'description' => 'IP 的Whois信息。',
                                'type' => 'string',
                                'example' => '{   "serial_number": "18395475168054001104",...}',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为此次调用请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'BE036526-FE84-46A8-9165-F086E9810E2F',
                            ],
                            'AttackPreferenceTop5' => [
                                'description' => '该 IP 攻击目标的 Top 5 行业分布。'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **event_cnt**：攻击次数。'."\n"
                                    .'- **industry_name**：攻击行业类别。'."\n"
                                    .'- **gmt\\_last\\_attack**：最后攻击活跃时间。',
                                'type' => 'string',
                                'example' => '[{"event_cnt":586,"industry_name":"Gaming","gmt_last_attack":"2020-06-14 21:54:04"}]',
                            ],
                            'Confidence' => [
                                'description' => '对判定结果的置信程度，置信度值越高，说明对判定结果（判定结果是ThreatLevel字段）有多少信心。通常认为置信度大于90的结果可以作为精准结果，对于恶意的高威胁等级的指标可以进行拦截。对于正常（ThreatLevel等于0）的结果可以放行。'."\n"
                                    ."\n"
                                    .'取值范围0-100：'."\n"
                                    .' - **[90-100)**：认为该情报是高可信的，可以作为拦截或者放行依据，如果ThreatLevel表示高危（ThreatLevel=3）则可拦截，如果ThreatLevel表示正常（ThreatLevel=0）。'."\n"
                                    .' - **[60-90)**：认为情报有一定的可信，但是还不能达到拦截指标，通常是有一些恶意行为的IP。可作为安全分析运营的辅助依据。'."\n"
                                    .' - **其他**：威胁情报的威胁相关信息认为置信度低。',
                                'type' => 'string',
                                'example' => '"98"',
                            ],
                            'ThreatTypes' => [
                                'description' => '从威胁情报、安全事件分析出来的风险标签，例如远程控制、恶意软件等。'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **threat_type**: 英文标签名称'."\n"
                                    .'- **threat\\_type\\_desc**: 中文标签含义'."\n"
                                    .'- **risk_type**: 威胁级别（3高危，2中危，1可疑，0正常，-1未知）'."\n"
                                    .'- **scenario**: 适用的安全场景（攻击指标、失陷指标）'."\n"
                                    .'- **first\\_find\\_time**: 首次标记时间'."\n"
                                    .'- **last\\_find\\_time**: 最后标记时间'."\n"
                                    .'- **attck_stage**: 所属的ATT&CK攻击阶段'."\n"
                                    ."\n"
                                    .'常见的威胁标签（threat_type字段）取值：'."\n"
                                    .'- **IDC**：IDC服务器'."\n"
                                    .'- **Tor**：暗网'."\n"
                                    .'- **Proxy**：代理'."\n"
                                    .'- **NAT**：公共出口'."\n"
                                    .'- **Miner Pool**：矿池'."\n"
                                    .'- **C&C Server**：命令与控制服务器'."\n"
                                    .'- **Brute Force**：暴力破解'."\n"
                                    .'- **Malicious Login**：恶意登录'."\n"
                                    .'- **WEB Attack**：WEB攻击'."\n"
                                    .'- **Malicious Source**：恶意下载源'."\n"
                                    .'- **Network Service Scanning**：网络服务扫描'."\n"
                                    .'- **Exploit**：漏洞利用'."\n"
                                    .'- **Network Share Discovery**：网络共享发现'."\n"
                                    .'- **Scheduled Task**：Windows计划任务'."\n"
                                    .'- **BITS Jobs**：BITS作业'."\n"
                                    .'- **Command-Line Interface**：恶意命令'."\n"
                                    .'- **Mshta执行**：Mshta执行'."\n"
                                    .'- **Regsvr32**：Regsvr32执行'."\n"
                                    .'- **Signed Binary Proxy Execution**：签名的二进制代理执行'."\n"
                                    .'- **Local Job Scheduling**：Linux计划任务'."\n"
                                    .'- **Rundll32**：Rundll32执行'."\n"
                                    .'- **Web Shell**：WebShell通信'."\n"
                                    .'- **SQL Injection**：SQL注入攻击'."\n"
                                    .'- **XSS Attack**：XSS攻击',
                                'type' => 'string',
                                'example' => '[{"threat_type_desc": "漏洞扫描", "last_find_time": "2021-01-29 10:50:00", "risk_type": 2, "scenario": "攻击指标", "threat_type": "Exploit Scanning", "first_find_time": "2021-01-29 00:28:43", "attck_stage": "initial access" }, {"threat_type_desc": "SQL注入", "last_find_time": "2021-02-28 00:18:40", "risk_type": 3, "scenario": "攻击指标", "threat_type": "SQL Injection",    "first_find_time": "2021-02-25 15:54:09", "attck_stage": "" }]',
                            ],
                            'Scenario' => [
                                'description' => '该 IP 所适用的攻击场景。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    .'- **攻击指标**：该 IP 会主动发起攻击流量，可以在防火墙、WAF 等安全设备进行匹配由外向内主动发起的源，并根据标签进行拦截。'."\n"
                                    .'- **失陷指标**：攻击者植入的脚本或者恶意代码会回联该 IP 进行通讯和数据传输，如果在流量或者日志中发现该 IP 意味着当前主机已经被攻破。'."\n"
                                    .'- **信息数据**：白名单等类型，该字段为信息数据，不具有风险场景'."\n",
                                'type' => 'string',
                                'example' => '"攻击指标"',
                            ],
                            'Ip' => [
                                'description' => 'IP的基础信息。'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **ip**：IP地址'."\n"
                                    .'- **idc_name**：IDC服务器'."\n"
                                    .'- **isp**：运营商'."\n"
                                    .'- **country**：国家'."\n"
                                    .'- **province**：省份'."\n"
                                    .'- **city**：城市'."\n"
                                    .'- **asn**：ASN（Autonomous System Numbers，自治系统编号）'."\n"
                                    .'- **asn_label**：ASN名称',
                                'type' => 'string',
                                'example' => '{ "country": "美国", "province": "加利福尼亚州", "city": "洛杉矶", "ip": "X.X.X.X", "isp": "example.com", "idc_name": "*", "asn": "XXXXXX", "asn_label": "VNET" }',
                            ],
                            'ThreatLevel' => [
                                'description' => '威胁等级，命中以后造成的危害等级，恶意的等级有高危、中危、低危、正常和未知五个等级。使用的时候可以结合置信度（Confidence字段）来使用，对高危并且高置信度的数据进行拦截。对于正常（即白名单）的类型可以进行放行。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    .'- **-1**：未知'."\n"
                                    .'- **0**：正常，即白名单，可以放行'."\n"
                                    .'- **1**：低危'."\n"
                                    .'- **2**：中危'."\n"
                                    .'- **3**：高危',
                                'type' => 'string',
                                'example' => '"3"',
                            ],
                            'AttackCntByThreatType' => [
                                'description' => '不同攻击阶段的攻击次数。'."\n"
                                    ."\n"
                                    .'该参数使用JSON数组表示，数组中的字段含义说明如下：'."\n"
                                    ."\n"
                                    .'字段含义：'."\n"
                                    .'- **event_cnt**：攻击次数。'."\n"
                                    .'- **threat_type**：攻击所属 ATT&CK 阶段。'."\n",
                                'type' => 'string',
                                'example' => '[{"event_cnt": 2536, "threat_type": "应用层入侵"}]',
                            ],
                            'Group' => [
                                'description' => '暂空，保留字段',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Context\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Intelligences\\": \\"[{\\\\\\"last_find_time\\\\\\": \\\\\\"2021-01-29 10:50:00\\\\\\", \\\\\\"threat_type_l2\\\\\\": \\\\\\"一句话木马扫描\\\\\\", \\\\\\"first_find_time\\\\\\": \\\\\\"2021-01-29 00:28:43\\\\\\", \\\\\\"source\\\\\\": \\\\\\"aliyun\\\\\\"}]\\",\\n  \\"Whois\\": \\"{   \\\\\\"serial_number\\\\\\": \\\\\\"18395475168054001104\\\\\\",...}\\",\\n  \\"RequestId\\": \\"BE036526-FE84-46A8-9165-F086E9810E2F\\",\\n  \\"AttackPreferenceTop5\\": \\"[{\\\\\\"event_cnt\\\\\\":586,\\\\\\"industry_name\\\\\\":\\\\\\"Gaming\\\\\\",\\\\\\"gmt_last_attack\\\\\\":\\\\\\"2020-06-14 21:54:04\\\\\\"}]\\",\\n  \\"Confidence\\": \\"\\\\\\"98\\\\\\"\\",\\n  \\"ThreatTypes\\": \\"[{\\\\\\"threat_type_desc\\\\\\": \\\\\\"漏洞扫描\\\\\\", \\\\\\"last_find_time\\\\\\": \\\\\\"2021-01-29 10:50:00\\\\\\", \\\\\\"risk_type\\\\\\": 2, \\\\\\"scenario\\\\\\": \\\\\\"攻击指标\\\\\\", \\\\\\"threat_type\\\\\\": \\\\\\"Exploit Scanning\\\\\\", \\\\\\"first_find_time\\\\\\": \\\\\\"2021-01-29 00:28:43\\\\\\", \\\\\\"attck_stage\\\\\\": \\\\\\"initial access\\\\\\" }, {\\\\\\"threat_type_desc\\\\\\": \\\\\\"SQL注入\\\\\\", \\\\\\"last_find_time\\\\\\": \\\\\\"2021-02-28 00:18:40\\\\\\", \\\\\\"risk_type\\\\\\": 3, \\\\\\"scenario\\\\\\": \\\\\\"攻击指标\\\\\\", \\\\\\"threat_type\\\\\\": \\\\\\"SQL Injection\\\\\\",    \\\\\\"first_find_time\\\\\\": \\\\\\"2021-02-25 15:54:09\\\\\\", \\\\\\"attck_stage\\\\\\": \\\\\\"\\\\\\" }]\\",\\n  \\"Scenario\\": \\"\\\\\\"攻击指标\\\\\\"\\",\\n  \\"Ip\\": \\"{ \\\\\\"country\\\\\\": \\\\\\"美国\\\\\\", \\\\\\"province\\\\\\": \\\\\\"加利福尼亚州\\\\\\", \\\\\\"city\\\\\\": \\\\\\"洛杉矶\\\\\\", \\\\\\"ip\\\\\\": \\\\\\"X.X.X.X\\\\\\", \\\\\\"isp\\\\\\": \\\\\\"example.com\\\\\\", \\\\\\"idc_name\\\\\\": \\\\\\"*\\\\\\", \\\\\\"asn\\\\\\": \\\\\\"XXXXXX\\\\\\", \\\\\\"asn_label\\\\\\": \\\\\\"VNET\\\\\\" }\\",\\n  \\"ThreatLevel\\": \\"\\\\\\"3\\\\\\"\\",\\n  \\"AttackCntByThreatType\\": \\"[{\\\\\\"event_cnt\\\\\\": 2536, \\\\\\"threat_type\\\\\\": \\\\\\"应用层入侵\\\\\\"}]\\",\\n  \\"Group\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeIpReportResponse>\\n<Context/>\\n<Whois/>\\n<AttackCntByThreatType>\\n    <event_cnt>2536</event_cnt>\\n    <threat_type>应用层入侵</threat_type>\\n</AttackCntByThreatType>\\n<RequestId>A736BB54-4819-475E-813B-B466968B18B9</RequestId>\\n<ThreatLevel>3</ThreatLevel>\\n<Confidence>98</Confidence>\\n<Ip>\\n    <country>美国</country>\\n    <province>加利福尼亚州</province>\\n    <city>洛杉矶</city>\\n    <ip>X.X.X.X</ip>\\n    <isp>example.com</isp>\\n    <idc_name>*</idc_name>\\n    <asn>XXXXXX</asn>\\n    <asn_label>VNET</asn_label>\\n</Ip>\\n<ThreatTypes>\\n    <threat_type_desc>SQL注入</threat_type_desc>\\n    <last_find_time>2021-02-28 00:18:40</last_find_time>\\n    <risk_type>3</risk_type>\\n    <scenario>攻击指标</scenario>\\n    <threat_type>SQL Injection</threat_type>\\n    <first_find_time>2021-02-25 15:54:09</first_find_time>\\n    <attck_stage/>\\n</ThreatTypes>\\n<ThreatTypes>\\n    <threat_type_desc>网络服务扫描</threat_type_desc>\\n    <last_find_time>2021-03-17 23:52:39</last_find_time>\\n    <risk_type>2</risk_type>\\n    <scenario>攻击指标</scenario>\\n    <threat_type>Network Service Scanning</threat_type>\\n    <first_find_time>2020-11-09 02:04:25</first_find_time>\\n    <attck_stage>initial access</attck_stage>\\n</ThreatTypes>\\n<Intelligences>\\n    <last_find_time>2021-01-29 10:50:00</last_find_time>\\n    <threat_type_l2>一句话木马扫描</threat_type_l2>\\n    <first_find_time>2021-01-29 00:28:43</first_find_time>\\n    <source>aliyun</source>\\n</Intelligences>\\n<Intelligences>\\n    <last_find_time>2021-02-28 00:18:40</last_find_time>\\n    <threat_type_l2>SQL注入攻击</threat_type_l2>\\n    <first_find_time>2021-02-25 15:54:09</first_find_time>\\n    <source>aliyun</source>\\n</Intelligences>\\n<Intelligences>\\n    <last_find_time>2021-03-12 14:59:18</last_find_time>\\n    <threat_type_l2>请求etcpasswd</threat_type_l2>\\n    <first_find_time>2021-03-12 14:59:18</first_find_time>\\n    <source>aliyun</source>\\n</Intelligences>\\n<AttackPreferenceTop5>\\n    <event_cnt>4</event_cnt>\\n    <industry_name>互联网</industry_name>\\n    <gmt_last_attack>2021-02-23 08:01:11</gmt_last_attack>\\n</AttackPreferenceTop5>\\n<AttackPreferenceTop5>\\n    <event_cnt>42</event_cnt>\\n    <industry_name>零售</industry_name>\\n    <gmt_last_attack>2021-03-17 12:00:21</gmt_last_attack>\\n</AttackPreferenceTop5>\\n<Scenario>攻击指标</Scenario>\\n</DescribeIpReportResponse>","errorExample":""}]',
            'title' => '威胁情报IP报告接口',
            'description' => '**请确保在使用该接口前，已充分了解威胁情报产品的收费方式和价格。**'."\n"
                ."\n"
                .'默认接口请求频率限制：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'sasti.aliyuncs.com',
        ],
    ],
];
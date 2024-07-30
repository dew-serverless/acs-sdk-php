<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Push',
        'version' => '2016-08-01',
    ],
    'directories' => [
        [
            'id' => 165111,
            'title' => '推送相关接口',
            'type' => 'directory',
            'children' => [
                'MassPush',
                'Push',
                'ContinuouslyPush',
                'CompleteContinuouslyPush',
                'CancelPush',
                'PushMessageToAndroid',
                'PushMessageToiOS',
                'PushNoticeToAndroid',
                'PushNoticeToiOS',
            ],
        ],
        [
            'id' => 165112,
            'title' => '查询相关接口',
            'type' => 'directory',
            'children' => [
                'CheckCertificate',
                'QueryPushRecords',
                'QueryDeviceStat',
                'QueryUniqueDeviceStat',
                'QueryDeviceInfo',
                'QueryPushStatByApp',
                'QueryPushStatByMsg',
                'CheckDevices',
                'CheckDevice',
            ],
        ],
        [
            'id' => 95678,
            'title' => '标签相关接口',
            'type' => 'directory',
            'children' => [
                'BindTag',
                'UnbindTag',
                'RemoveTag',
                'QueryTags',
                'ListTags',
            ],
        ],
        [
            'id' => 165138,
            'title' => '别名相关接口',
            'type' => 'directory',
            'children' => [
                'BindAlias',
                'UnbindAlias',
                'QueryAliases',
                'QueryDevicesByAlias',
            ],
        ],
        [
            'id' => 95697,
            'title' => '账号相关接口',
            'type' => 'directory',
            'children' => [
                'QueryDevicesByAccount',
            ],
        ],
        [
            'id' => 95671,
            'title' => '其他接口',
            'type' => 'directory',
            'children' => [
                'BindPhone',
                'UnbindPhone',
                'ListSummaryApps',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'MassPush' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'PushTask',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '独立推送任务组成的数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '独立推送任务。',
                            'type' => 'object',
                            'properties' => [
                                'PushType' => [
                                    'description' => '推送类型。取值：'."\n"
                                        ."\n"
                                        .'- MESSAGE：表示消息。'."\n"
                                        .'- NOTICE：表示通知。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'MESSAGE' => 'MESSAGE',
                                        'NOTICE' => 'NOTICE',
                                    ],
                                    'example' => 'MESSAGE',
                                ],
                                'DeviceType' => [
                                    'description' => '设备类型，取值范围为：'."\n"
                                        ."\n"
                                        .'- iOS：iOS设备'."\n"
                                        .'- ANDROID：Android设备'."\n"
                                        .'- ALL：全部类型设备'."\n"
                                        ."\n"
                                        .'> 该参数仅对旧的不分端app有意义。新的分端app下，该参数填写”ALL”或与app分端类型对应的值均可。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'ALL' => 'ALL',
                                        'ANDROID' => 'ANDROID',
                                        'iOS' => 'iOS',
                                    ],
                                    'example' => 'ALL',
                                ],
                                'Target' => [
                                    'description' => '推送目标。可取值：'."\n"
                                        ."\n"
                                        .'- DEVICE：根据设备推送。'."\n"
                                        .'- ACCOUNT：根据账号推送。'."\n"
                                        .'- ALIAS：根据别名推送。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'ACCOUNT' => 'ACCOUNT',
                                        'ALIAS' => 'ALIAS',
                                        'DEVICE' => 'DEVICE',
                                    ],
                                    'example' => 'DEVICE',
                                ],
                                'TargetValue' => [
                                    'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                                        ."\n"
                                        .'- Target=DEVICE，值如`deviceid1,deviceid2`（最多支持1000个）。'."\n"
                                        .'- Target=ACCOUNT，值如`account1,account2`（最多支持1000个）。'."\n"
                                        .'- Target=ALIAS，值如`alias1,alias2`（最多支持1000个）。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'deviceid1,deviceid2',
                                ],
                                'StoreOffline' => [
                                    'description' => '离线消息/通知是否保存。StoreOffline默认设置为false。'."\n"
                                        ."\n"
                                        .'若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。iOS通知走APNs链路，不受StoreOffline影响。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'SendChannels' => [
                                    'description' => '指定发送通道，取值如下：'."\n"
                                        ."\n"
                                        .'- accs：阿里云自有通道'."\n"
                                        .'- huawei：华为通道'."\n"
                                        .'- honor：荣耀通道'."\n"
                                        .'- xiaomi：小米通道'."\n"
                                        .'- oppo：OPPO通道'."\n"
                                        .'- vivo：vivo通道'."\n"
                                        .'- meizu：魅族通道'."\n"
                                        .'- gcm：谷歌GCM通道（旧版HTTP）'."\n"
                                        .'- fcm: 谷歌Firebase通道（HTTP v1 API）'."\n"
                                        .'- apns：APNs通道'."\n"
                                        ."\n"
                                        .'>- 如果未配置此参数，则代表所有通道均可使用。'."\n"
                                        .'>- 如果配置了此参数，则严格使用参数中的通道。'."\n"
                                        .'>- 如果配置的通道和发送策略冲突（如iOS通知仅走APNs通道，但本参数中不包含apns），则不实施发送。'."\n"
                                        .'>- 若配置gcm，则可以走谷歌GCM和FCM通道，若配置fcm，则只能走谷歌FCM通道。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'accs,huawei,xiaomi',
                                ],
                                'PushTime' => [
                                    'description' => '用于定时发送。不设置缺省是立即发送。'."\n"
                                        ."\n"
                                        .'时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2019-02-20T00:00:00Z',
                                ],
                                'ExpireTime' => [
                                    'description' => '离线消息/通知的过期时间，和StoreOffline配合使用，过期则不会再被发送，最长保存72小时。默认为72小时。'."\n"
                                        ."\n"
                                        .'时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ，过期时间不能小于当前时间或者定时发送时间加上3秒（`ExpireTime > PushTime+3秒`），3秒是为了冗余网络和系统延迟造成的误差。建议单推不小于1分钟，全推、批量推送不少于10分钟。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2019-02-20T00:00:00Z',
                                ],
                                'JobKey' => [
                                    'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '123',
                                ],
                                'Title' => [
                                    'description' => '推送时通知/消息的标题，长度限制：200字节。'."\n"
                                        .'在Android推送和iOS推送消息时必填；在iOS推送通知时非必填，如果填写，则：'."\n"
                                        .'* iOS 10+通知显示标题。'."\n"
                                        .'* iOS 8.2 <= iOS系统 < iOS 10：替换通知应用名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'title',
                                ],
                                'Body' => [
                                    'description' => 'Android推送时通知的内容/消息的内容；iOS消息/通知内容，推送的内容大小是有限制的，参见[产品限制](~~92832~~)。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'hello',
                                ],
                                'Trim' => [
                                    'description' => '是否自动对过长标题、内容进行截断。'."\n"
                                        .'注：仅支持明确限制标题、内容的厂商通道，对APNs、华为、荣耀通道等不限制标题、内容，只限制总请求体大小的不适用。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'iOSApnsEnv' => [
                                    'description' => 'iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。'."\n"
                                        ."\n"
                                        .'- DEV：表示开发环境。'."\n"
                                        .'- PRODUCT：表示生产环境。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'DEV' => 'DEV',
                                        'PRODUCT' => 'PRODUCT',
                                    ],
                                    'example' => 'DEV',
                                ],
                                'iOSRemind' => [
                                    'description' => '消息推送时设备不在线（即与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。'."\n"
                                        ."\n"
                                        .'> 离线消息转通知仅适用于生产环境。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'iOSSubtitle' => [
                                    'description' => 'iOS通知副标题内容（iOS 10+）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'subtitle',
                                ],
                                'iOSRemindBody' => [
                                    'description' => 'iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=PRODUCT && iOSRemind为true时有效。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ios通知body',
                                ],
                                'iOSMusic' => [
                                    'description' => 'iOS通知声音。指定存放在app bundle或沙盒Library/Sounds目录下的音频文件名，请参见：iOS推送如何设定通知声音。'."\n"
                                        ."\n"
                                        .'若指定为空串（””），通知为静音；若不设置，默认填充default为系统提示音。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '””',
                                ],
                                'iOSBadge' => [
                                    'description' => 'iOS应用图标右上角角标。'."\n"
                                        ."\n"
                                        .'> 若iOSBadgeAutoIncrement设置为True，则此项必须为空。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'iOSBadgeAutoIncrement' => [
                                    'description' => '是否开启角标自增功能，默认为false。'."\n"
                                        ."\n"
                                        .'>当该项为true时，iOSBadge必须为空。'."\n"
                                        ."\n"
                                        .'角标自增功能由推送服务端维护每个设备的角标计数，需要用户使用V1.9.5以上版本的SDK，并且需要用户主动同步角标数字到服务端。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'iOSSilentNotification' => [
                                    'description' => '是否开启iOS静默通知。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'iOSMutableContent' => [
                                    'description' => 'iOS通知处理扩展标记（iOS 10+）。如果设为true，则APNs推送的通知在弹出前，可先到达Extension进行处理。静默通知时，必须设为true。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'iOSNotificationCategory' => [
                                    'description' => '指定iOS通知Category（iOS 10+）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ios',
                                ],
                                'iOSNotificationCollapseId' => [
                                    'description' => '设备收到有相同CollapseId的消息，会合并成一条。设备不在线，连续发相同CollapseId的消息，通知栏只会显示一条，iOS 10+支持设置此参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ZD2011',
                                ],
                                'iOSNotificationThreadId' => [
                                    'description' => '通过该属性对iOS的远程通知进行分组，标记折叠的组别识别名。仅支持iOS 12.0+版本。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'abc',
                                ],
                                'iOSInterruptionLevel' => [
                                    'description' => '中断级别，取值：'."\n"
                                        ."\n"
                                        .'- passive：系统在不点灯、不播放声音的情况下将通知添加到通知列表中。'."\n"
                                        ."\n"
                                        .'- active：系统立即显示通知，点亮屏幕，并可以播放声音。'."\n"
                                        ."\n"
                                        .'- time-sensitive：系统立即呈现通知，点亮屏幕，并可以播放声音，但不会突破系统通知控制。'."\n"
                                        ."\n"
                                        .'- critical：系统立即显示通知，屏幕亮起，并绕过静音开关播放声音。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'critical' => 'critical',
                                        'time-sensitive' => 'time-sensitive',
                                        'active' => 'active',
                                        'passive' => 'passive',
                                    ],
                                    'example' => 'active',
                                ],
                                'iOSRelevanceScore' => [
                                    'description' => '摘要突出显示分数。取值范围：\\[0,1\\]的浮点数。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'example' => '0.01',
                                ],
                                'iOSExtParameters' => [
                                    'description' => 'iOS通知的扩展属性。'."\n"
                                        ."\n"
                                        .'iOS10+可以在此指定富媒体推送通知的资源Url：`{“attachment”: “https://xxxx.xxx/notification_pic.png"} `。该参数要以Json map的格式传入，否则会解析出错。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{“attachment”: “https://xxxx.xxx/notification_pic.png"} ',
                                ],
                                'AndroidNotifyType' => [
                                    'description' => '通知的提醒方式。可取值：'."\n"
                                        ."\n"
                                        .'- **VIBRATE**：振动（默认值）'."\n"
                                        .'- **SOUND**：声音'."\n"
                                        .'- **BOTH**：声音和振动'."\n"
                                        .'- **NONE**：静音',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'SOUND' => 'SOUND',
                                        'NONE' => 'NONE',
                                        'VIBRATE' => 'VIBRATE',
                                        'BOTH' => 'BOTH',
                                    ],
                                    'example' => 'VIBRATE',
                                ],
                                'AndroidRemind' => [
                                    'description' => '推送类型为消息时设备不在线，则这条推送会使用辅助弹窗功能。默认值为false，仅当PushType=MESSAGE时生效。'."\n"
                                        ."\n"
                                        .'如果消息转通知推送成功，收到通知是展示的数据为服务端设置的AndroidPopupTitle和AndroidPopupBody参数值，点击通知在辅助弹窗的onSysNoticeOpened方法中获取到的数据是服务端设置的Title和Body参数值。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'AndroidOpenType' => [
                                    'description' => '点击通知后动作。可取值：'."\n"
                                        ."\n"
                                        .'- APPLICATION：打开应用（默认值）'."\n"
                                        .'- ACTIVITY：打开应用AndroidActivity'."\n"
                                        .'- URL：打开URL'."\n"
                                        .'- NONE：无跳转',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'APPLICATION' => 'APPLICATION',
                                        'NONE' => 'NONE',
                                        'ACTIVITY' => 'ACTIVITY',
                                        'URL' => 'URL',
                                    ],
                                    'example' => 'APPLICATION',
                                ],
                                'AndroidActivity' => [
                                    'description' => '设定通知打开的activity。'."\n"
                                        ."\n"
                                        .'仅当PushTask.N.AndroidOpenType=”Activity”时传入，如：`com.alibaba.cloudpushdemo.bizactivity`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'com.alibaba.cloudpushdemo.bizactivity',
                                ],
                                'AndroidOpenUrl' => [
                                    'description' => 'Android收到推送后打开对应的url。仅当PushTask.N.AndroidOpenType=”URL”时传入。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://xxxx.xxx',
                                ],
                                'AndroidPopupTitle' => [
                                    'description' => '辅助弹窗模式下标题内容。AndroidPopupActivity参数不为空时，该参数必填。 '."\n"
                                        ."\n"
                                        .'长度限制：30字符。'."\n"
                                        ."\n"
                                        .'如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'hello',
                                ],
                                'AndroidPopupBody' => [
                                    'description' => '辅助弹窗模式下Body内容。AndroidPopupActivity参数不为空时，该参数必填。'."\n"
                                        ."\n"
                                        .'长度限制：128字符。'."\n"
                                        ."\n"
                                        .'如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'hello',
                                ],
                                'AndroidPopupActivity' => [
                                    'description' => '指定点击通知后跳转的Activity。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'com.alibaba.cloudpushdemo.bizactivity',
                                ],
                                'AndroidRenderStyle' => [
                                    'description' => '通知样式，取值为：'."\n"
                                        .'- **0**：标准模式（默认）'."\n"
                                        .'- **1**：长文本模式（支持华为、荣耀、小米、OPPO、魅族、自有通道）'."\n"
                                        .'- **2**：大图模式（仅支持小米）'."\n"
                                        .'- **3**：列表模式（支持华为、荣耀、小米、OPPO、自有通道）'."\n"
                                        .'> 若使用非标准模式，此参数必须提供。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'AndroidBigTitle' => [
                                    'description' => '长文本模式下的标题，长度限制：200个字节（1个汉字算作3字节）。'."\n"
                                        ."\n"
                                        .'- 当前仅支持荣耀通道和华为通道EMUI11及以上版本。'."\n"
                                        ."\n"
                                        .'- 若长文本模式下未提供此参数，则从Title、AndroidPopupTitle里取第一个非空值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '示例长标题',
                                ],
                                'AndroidBigBody' => [
                                    'description' => '长文本模式下的body，长度限制：1000字节（1个汉字算作3字节），发送时受具体厂商通道的限制。'."\n"
                                        ."\n"
                                        .'当前支持：'."\n"
                                        .'- 　华为：EMUI10及以上'."\n"
                                        .'- 　荣耀：Magic UI 4.0及以上'."\n"
                                        .'- 　小米：MIUI10及以上'."\n"
                                        .'- 　OPPO：ColorOS5.0以上'."\n"
                                        .'- 　魅族：Flyme'."\n"
                                        .'- 　自有通道：安卓SDK3.6.0及以上'."\n"
                                        ."\n"
                                        .'若长文本模式下未提供此参数，则从Body、AndroidPopupBody里取第一个非空值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '示例长文本',
                                ],
                                'AndroidBigPictureUrl' => [
                                    'description' => '大图模式下的图片URL，当前支持：自有通道：安卓SDK3.6.0及以上。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://imag.example.com/image.png',
                                ],
                                'AndroidXiaomiBigPictureUrl' => [
                                    'description' => '大图模式下的大图URL。大图模式下图片上传至小米推送后会返回一个图片URL，本参数内填写这个URL。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://f6.market.xiaomi.com/download/MiPass/aaa/bbb.png',
                                ],
                                'AndroidImageUrl' => [
                                    'description' => '大图标URL。当前支持：'."\n"
                                        .'- 华为EMUI（仅长文本模式、Inbox模式下适用）'."\n"
                                        .'- 荣耀Magic UI（仅长文本模式下适用）'."\n"
                                        .'- 自有通道：安卓SDK3.5.0及以上'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://imag.example.com/image.png',
                                ],
                                'AndroidXiaomiImageUrl' => [
                                    'description' => '大图标URL。当前支持：小米MIUI12及以上（仅长文本模式下适用）。'."\n"
                                        .'>上传到小米服务器上，返回的图标URL。具体请参考：[链接](https://dev.mi.com/console/doc/detail?pId=1278#_3_3)。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://imag.example.com/image.png',
                                ],
                                'AndroidInboxBody' => [
                                    'description' => 'Inbox模式下的正文，内容为合法的JSON Array，且元素不超过5个。当前支持：'."\n"
                                        ."\n"
                                        .'- 华为：EMUI9及以上'."\n"
                                        .'- 荣耀：Magic UI 4.0及以上'."\n"
                                        .'- 小米：MIUI10及以上'."\n"
                                        .'- OPPO：ColorOS 5.0以上'."\n"
                                        .'- 自有通道：安卓SDK3.6.0及以上',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '["第一行","第二行"]',
                                ],
                                'AndroidNotificationBarType' => [
                                    'description' => 'Android自定义通知栏样式，取值：1-100。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '2',
                                ],
                                'AndroidNotificationBarPriority' => [
                                    'description' => 'Android通知在通知栏展示时排列位置的优先级。可取值： -2，-1，0，1，2。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'AndroidNotificationNotifyId' => [
                                    'description' => '标识每条消息在通知显示时的唯一标识，不同的通知栏消息可以相同的NotifyId，实现新的通知栏消息覆盖老的，当前支持除FCM通道外的其他厂商通道。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '100001',
                                ],
                                'AndroidNotificationChannel' => [
                                    'description' => 'Android app的channelId，需要与app中的channelId能对应上。'."\n"
                                        .'- 设置NotificationChannel参数，具体用途请参见[常见问题：Android 8.0以上设备通知接收不到](~~67398~~)。'."\n"
                                        .'- 因OPPO通知私信通道的channel_id与app的channelId，故OPPO通道推送时，channel_id取此值。'."\n"
                                        .'- 华为、FCM、阿里云自有通道推送中，channel_id取此值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'AndroidNotificationHuaweiChannel' => [
                                    'description' => '设置Huawei通知消息分类importance参数，决定用户设备消息通知行为，取值如下：'."\n"
                                        ."\n"
                                        .'- LOW：资讯营销类消息'."\n"
                                        .'- NORMAL：服务与通讯类消息'."\n"
                                        ."\n"
                                        .'>- 当前华为通道建议使用AndroidMessageHuaweiCategory进行通知分类，可不再使用AndroidNotificationHuaweiChannel。'."\n"
                                        .'>- 需要在Huawei平台申请，[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section893184112272)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'LOW' => 'LOW',
                                        'NORMAL' => 'NORMAL',
                                    ],
                                    'example' => 'LOW',
                                ],
                                'AndroidNotificationHonorChannel' => [
                                    'description' => '设置荣耀通知消息分类importance参数，决定用户设备消息通知行为，取值如下：'."\n"
                                        ."\n"
                                        .'- LOW：资讯营销类消息'."\n"
                                        ."\n"
                                        .'- NORMAL：服务与通讯类消息'."\n"
                                        ."\n"
                                        .'需要在荣耀平台申请，[申请链接](https://developer.hihonor.com/cn/doc/guides/100364)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'LOW' => 'LOW',
                                        'NORMAL' => 'NORMAL',
                                    ],
                                    'example' => 'LOW',
                                ],
                                'AndroidNotificationVivoChannel' => [
                                    'description' => '设置vivo通知消息分类，取值为：'."\n"
                                        ."\n"
                                        .'- 0：运营类消息（默认）'."\n"
                                        .'- 1：系统类消息'."\n"
                                        ."\n"
                                        .'>- 当前vivo通道建议使用AndroidMessageVivoCategory进行通知分类，可不再使用AndroidNotificationVivoChannel。'."\n"
                                        .'>- 需要在vivo平台申请，详见：[申请链接](https://dev.vivo.com.cn/documentCenter/doc/359)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        '0',
                                        '1',
                                    ],
                                    'example' => '0',
                                ],
                                'AndroidNotificationXiaomiChannel' => [
                                    'description' => '设置小米通知类型的channelId，需要在小米平台申请，详见：[申请链接](https://dev.mi.com/console/doc/detail?pId=2422#_4)。'."\n"
                                        .'>- 小米通道单个应用最多可申请8个channel，请提前做好规划。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'michannel',
                                ],
                                'AndroidNotificationGroup' => [
                                    'description' => '消息分组，同一组消息在通知栏里只显示最新一条和当前该组接受到的消息总数目，不会展示所有消息也无法展开。当前支持：'."\n"
                                        ."\n"
                                        .'- 华为'."\n"
                                        .'- 荣耀'."\n"
                                        .'- 自有通道',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'group-1',
                                ],
                                'AndroidExtParameters' => [
                                    'description' => '设定通知的扩展属性。当推送类型PushType设置为MESSAGE消息类型时，该属性不生效。'."\n"
                                        ."\n"
                                        .'该参数要以JSON map的格式传入，否则会解析出错。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{"key1":"value1","api_name":"PushNoticeToAndroidRequest"}',
                                ],
                                'AndroidMessageHuaweiUrgency' => [
                                    'description' => '华为通道透传消息投递优先级，取值如下：'."\n"
                                        ."\n"
                                        .'- HIGH'."\n"
                                        ."\n"
                                        .'- NORMAL'."\n"
                                        ."\n"
                                        .'需要申请权限，具体请参见：[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'HIGH' => 'HIGH',
                                        'NORMAL' => 'NORMAL',
                                    ],
                                    'example' => 'HIGH',
                                ],
                                'AndroidMessageHuaweiCategory' => [
                                    'description' => '作用一：完成[自分类权益申请](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835?#section3410731125514)后，用于标识消息类型，确定[消息提醒方式](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#ZH-CN_TOPIC_0000001149358835__p3850133955718)，对特定类型消息加快发送，取值请参考华为推送官方文档的[消息分类标准](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section1076611477914)，填写文档表格中的“云端通知category取值”或“本地通知category取值”。'."\n"
                                        ."\n"
                                        .'作用二：[申请特殊权限](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)后，用于标识高优先级透传场景，取值如下：'."\n"
                                        .'- VOIP：音视频通话'."\n"
                                        .'- PLAY_VOICE：语音播报'."\n"
                                        ."\n"
                                        .'> 对于“云端通知category取值”为“不涉及”的一概走阿里云自有通道，对于“本地通知category取值”为“不涉及”的一概走华为通道。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'SUBSCRIPTION',
                                ],
                                'AndroidMessageVivoCategory' => [
                                    'description' => 'vivo将消息分为：系统消息、运营消息两个类别进行管理。 '."\n"
                                        ."\n"
                                        .'系统消息：'."\n"
                                        .'- IM：即时消息'."\n"
                                        .'- ACCOUNT：账号与资产'."\n"
                                        .'- TODO：日程待办'."\n"
                                        .'- DEVICE_REMINDER：设备信息'."\n"
                                        .'- ORDER：订单与物流'."\n"
                                        .'- SUBSCRIPTION：订阅提醒'."\n"
                                        ."\n"
                                        .'运营消息：'."\n"
                                        .'- NEWS：新闻'."\n"
                                        .'- CONTENT：内容推荐'."\n"
                                        .'- MARKETING：运营活动'."\n"
                                        .'- SOCIAL：社交动态'."\n"
                                        .'> 详细请参考[分类说明](https://dev.vivo.com.cn/documentCenter/doc/359#_Toc64906673)',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TODO',
                                ],
                                'AndroidTargetUserType' => [
                                    'description' => '设置厂商通道通知类型：'."\n"
                                        .'- **0**：正式通知（默认）。'."\n"
                                        .'- **1**：测试通知。'."\n"
                                        ."\n"
                                        .'>- 本参数配置后等价于同时配置AndroidHuaweiTargetUserType、AndroidHonorTargetType、AndroidVivoPushMode三个参数，具体厂商通道的对应参数能覆盖本参数。'."\n"
                                        .'>- 当前支持：华为通道、荣耀通道、vivo通道。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidHuaweiTargetUserType' => [
                                    'description' => '设置华为通道通知类型：'."\n"
                                        .'- **0**：正式通知（默认）。'."\n"
                                        .'- **1**：测试通知。'."\n"
                                        ."\n"
                                        .'> 每个应用每日可发送该测试通知500条且不受每日单设备推送数量上限要求。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        '0',
                                        '1',
                                    ],
                                    'example' => '1',
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidHonorTargetUserType' => [
                                    'description' => '设置荣耀通道通知类型：'."\n"
                                        .'- **0**：正式通知（默认）。'."\n"
                                        .'- **1**：测试通知。'."\n"
                                        ."\n"
                                        .'> 每个应用每日可发送该测试通知1000条且不受每日单设备推送数量上限要求。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidVivoPushMode' => [
                                    'description' => '设置vivo通道通知类型：'."\n"
                                        .'- **0**：正式推送（默认）。'."\n"
                                        .'- **1**：测试推送。'."\n"
                                        ."\n"
                                        .'> 测试推送请事先在vivo控制台配置测试设备。测试设备RegId可在设备启动日志中搜索“onReceiveRegId regId”获得。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        '0',
                                        '1',
                                    ],
                                    'example' => '1',
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidHuaweiReceiptId' => [
                                    'description' => '华为通道回执ID，该回执ID可以在华为通道推送运营平台的回执参数配置中查看。'."\n"
                                        ."\n"
                                        .'> 如果在华为通道推送运营平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置华为通道默认回执ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'RCP4C123456',
                                ],
                                'AndroidVivoReceiptId' => [
                                    'description' => 'vivo通道回执ID，该回执ID可以在vivo开放平台推送服务的应用信息中查看。'."\n"
                                        ."\n"
                                        .'> 如果在vivo开放平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置vivo通道默认回执ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '123',
                                ],
                                'AndroidMusic' => [
                                    'description' => 'Android通知声音（保留参数，当前暂不起作用）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '无',
                                ],
                                'SendSpeed' => [
                                    'description' => '该参数已废弃。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'deprecated' => true,
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'AndroidXiaoMiNotifyTitle' => [
                                    'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupTitle**统一支持。',
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                    'example' => '无',
                                ],
                                'AndroidXiaoMiNotifyBody' => [
                                    'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupBody**统一支持。',
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                    'example' => '无',
                                ],
                                'AndroidXiaoMiActivity' => [
                                    'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupActivity**统一支持。',
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                    'example' => '无',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 100,
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'MessageIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'MessageId' => [
                                        'description' => '批量消息ID列表，每个消息ID对应传入的PushTask的推送结果',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '消息ID',
                                            'type' => 'string',
                                            'example' => '501030',
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
                        'errorCode' => 'Invalid%s.Format',
                        'errorMessage' => 'The specified %s format is invalid.',
                    ],
                    [
                        'errorCode' => 'AccountDisabled',
                        'errorMessage' => 'Your account is not enabled.',
                    ],
                    [
                        'errorCode' => 'FileNotExist',
                        'errorMessage' => 'The specified file does not exist.',
                    ],
                    [
                        'errorCode' => 'IncorrectPassword',
                        'errorMessage' => 'The password is incorrect.',
                    ],
                    [
                        'errorCode' => 'NotApnsCertificate',
                        'errorMessage' => 'The Certificate is not an APNs certificate.',
                    ],
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'The specified AppKey is not authorized.',
                    ],
                    [
                        'errorCode' => 'SendSpeedNotSupported',
                        'errorMessage' => 'SendSpeed is not supported for specified Target.',
                    ],
                    [
                        'errorCode' => 'SmsProfileConfigFailed',
                        'errorMessage' => 'Failed to configure SMS profile.',
                    ],
                    [
                        'errorCode' => 'SmsProfileGetFailed',
                        'errorMessage' => 'Failed to get SMS profile.',
                    ],
                    [
                        'errorCode' => 'SmsRoleAuthorizeFailed',
                        'errorMessage' => 'Failed to authorize SMS role.',
                    ],
                    [
                        'errorCode' => 'SmsRoleUnauthorized',
                        'errorMessage' => 'The SMS role is unauthorized.',
                    ],
                    [
                        'errorCode' => 'TagsNumberBeyondLimit',
                        'errorMessage' => 'The number of tags bound to this app exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'TargetNotSupported',
                        'errorMessage' => 'Target is not supported for batch push.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.LengthExceed',
                        'errorMessage' => 'The specified %s length cannot be greater than %s.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.BytesExceed',
                        'errorMessage' => 'The specified %s exceeds the %s bytes limit.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.Empty',
                        'errorMessage' => 'The specified %s cannot be empty.',
                    ],
                    [
                        'errorCode' => 'Invalid.Parameter',
                        'errorMessage' => 'The specified parameter is invalid: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request processing is timeout.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"MessageIds\\": {\\n    \\"MessageId\\": [\\n      \\"501030\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '批量推送',
            'summary' => '批量给不同的设备推送不同的消息/通知。',
            'description' => '# 接口说明'."\n"
                .'**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**'."\n"
                ."\n"
                .'在某种业务场景中，可能需要在极短时间内大量向不同设备单推不同消息，在设备数、消息数极大时，会产生较高QPS，达到我们单来源IP的QPS限制，造成部分推送失败。'."\n"
                ."\n"
                .'本接口针对此问题设计。它支持单次调用最大传入100个独立的推送任务，通过聚合请求的方式有效降低QPS，提高大量单推的稳定性和成功率。批量推送单账号限制每秒500次调用。'."\n"
                ."\n"
                .'每个独立推送任务仅支持根据设备/账号/别名三类推送目标，且暂不支持短信融合配置。'."\n"
                ."\n"
                .'> SDK需升级到3.11.0及以上版本。'."\n"
                ."\n"
                .'# PushTask属性'."\n"
                ."\n\n"
                .'- PushTask属性格式为：PushTask.N.Property。包含：'."\n"
                .'    - 推送目标（destination）'."\n"
                .'    - 推送配置（config）'."\n"
                .'    - iOS通知任务配置'."\n"
                .'    - Android通知任务配置'."\n"
                .'    - Android辅助弹窗功能配置'."\n"
                .'    - 推送控制（push control）'."\n"
                .'- 每一个PushTask表示一个独立推送任务，最大支持100个，推送相关配置，和Push接口一致。'."\n"
                .'- PushTask.N.Target参数只支持DEVICE、ACCOUNT、ALIAS三种类型。'."\n"
                .'- PushTask不支持短信联动配置。'."\n"
                .'- 父节点和子节点的乘积不能超过10000，否则视为参数无效。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '# Java示例代码'."\n"
                .'```'."\n"
                .'MassPushRequest massPushRequest = new MassPushRequest();'."\n"
                .'massPushRequest.setAppKey(appKey);'."\n"
                .'List<MassPushRequest.PushTask> pushTasks = new ArrayList<>();'."\n"
                .'for (int i = 0; i < 100; i++) {'."\n"
                .'    MassPushRequest.PushTask pushTask = new MassPushRequest.PushTask();'."\n"
                .'    // 推送目标'."\n"
                .'    pushTask.setTarget("DEVICE"); //推送目标: DEVICE:推送给设备; ACCOUNT:推送给指定账号,TAG:推送给自定义标签; ALIAS: 按别名推送; ALL: 全推'."\n"
                .'    pushTask.setTargetValue("device1,device2,device3"); //根据Target来设定，如Target=DEVICE, 则对应的值为设备id1,设备id2。多个值使用逗号分隔(账号与设备有一次最多100个的限制)。'."\n"
                .'    pushTask.setDeviceType("iOS"); // 设备类型deviceType, iOS设备: "iOS"; Android设备: "ANDROID"; 全部: "ALL", 这是默认值.'."\n"
                .'    // 推送配置'."\n"
                .'    pushTask.setPushType("MESSAGE"); // MESSAGE:表示消息(默认), NOTICE:表示通知'."\n"
                .'    pushTask.setTitle("Hello-" + i); // 消息的标题'."\n"
                .'    pushTask.setBody("PushRequest body" + i); // 消息的内容'."\n"
                .'    // 推送配置: iOS'."\n"
                .'    pushTask.setIOSBadge(5); // iOS应用图标右上角角标'."\n"
                .'    pushTask.setIOSMusic("default"); // iOS通知声音'."\n"
                .'    pushTask.setIOSApnsEnv("PRODUCT");//iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。\'DEV\': 表示开发环境 \'PRODUCT\': 表示生产环境'."\n"
                .'    pushTask.setIOSRemind(true); //  消息推送时设备不在线（既与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。注意：**离线消息转通知仅适用于`生产环境`**'."\n"
                .'    pushTask.setIOSRemindBody("PushRequest summary"); // iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=`PRODUCT` && iOSRemind为true时有效'."\n"
                .'    pushTask.setIOSExtParameters("{\\"k1\\":\\"ios\\",\\"k2\\":\\"v2\\"}"); //通知的扩展属性(注意 : 该参数要以json map的格式传入,否则会解析出错)'."\n"
                .'    // 推送配置: Android'."\n"
                .'    pushTask.setAndroidOpenType("ACTIVITY"); // 点击通知后动作 \'APPLICATION\': 打开应用 \'ACTIVITY\': 打开应用AndroidActivity \'URL\': 打开URL \'NONE\': 无跳转'."\n"
                .'    pushTask.setAndroidNotifyType("SOUND"); // 通知的提醒方式 ‘VIBRATE\': 振动  \'SOUND\': 声音 \'DEFAULT\': 声音和振动 \'NONE\': 不做处理，用户自定义'."\n"
                .'    pushTask.setAndroidOpenUrl("http://www.alibaba.com");'."\n"
                .'    pushTask.setAndroidMusic("default"); // Android通知声音'."\n"
                .'    pushTask.setAndroidActivity("com.alibaba.push.PushActivity"); // Android收到推送后打开对应的ACTIVITY,仅当`AndroidOpenType="ACTIVITY"`有效'."\n"
                .'    pushTask.setAndroidPopupActivity("com.alibaba.push.PopupActivity"); //设置该参数后启动辅助弹窗功能, 此处指定通知点击后跳转的Activity（辅助弹窗的前提条件：1. 集成第三方辅助通道；2. StoreOffline参数设为true）'."\n"
                .'    pushTask.setAndroidPopupTitle("Popup Title"); //设置辅助弹窗通知的标题'."\n"
                .'    pushTask.setAndroidPopupBody("Popup Body"); //设置辅助弹窗通知的内容'."\n"
                .'    pushTask.setAndroidNotificationBarType(50); //Android自定义通知栏样式，取值：1-100'."\n"
                .'    pushTask.setAndroidNotificationBarPriority(2); //Android通知在通知栏展示时排列位置的优先级 -2 -1 0 1 2'."\n"
                .'    pushTask.setAndroidExtParameters("{\\"k1\\":\\"android\\",\\"k2\\":\\"v2\\"}"); //设定通知的扩展属性。(注意 : 该参数要以 json map 的格式传入,否则会解析出错)'."\n"
                .'    // 推送控制'."\n"
                .'    final Date pushDate = new Date(System.currentTimeMillis() + 3600 * 1000); //用于定时发送。不设置缺省是立即发送。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。'."\n"
                .'    final String pushTime = ParameterHelper.getISO8601Time(pushDate);'."\n"
                .'    pushTask.setPushTime(pushTime); // 延后推送。可选，如果不设置表示立即推送'."\n"
                .'    pushTask.setStoreOffline(true); // 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到'."\n"
                .'    final String expireTime = ParameterHelper.getISO8601Time(new Date(System.currentTimeMillis() + 12 * 3600 * 1000)); // 12小时后消息失效, 不会再发送'."\n"
                .'    pushTask.setExpireTime(expireTime);'."\n"
                .'    pushTasks.add(pushTask);'."\n"
                .'}'."\n"
                .'massPushRequest.setPushTasks(pushTasks);'."\n"
                .'MassPushResponse massPushResponse = client.getAcsResponse(massPushRequest);'."\n"
                .'System.out.printf("RequestId: %s, MessageIds: %s\\n", massPushResponse.getRequestId(), massPushResponse.getMessageIds().toString());'."\n"
                .'```',
        ],
        'Push' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送类型。取值：'."\n"
                            ."\n"
                            .'- **MESSAGE**：表示消息。'."\n"
                            .'- **NOTICE**：表示通知。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MESSAGE',
                        'enum' => [
                            'MESSAGE',
                            'NOTICE',
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备类型，取值范围为：'."\n"
                            ."\n"
                            .'- **iOS**：iOS设备'."\n"
                            .'- **ANDROID**：Android设备'."\n"
                            .'- **ALL**：全部设备类型'."\n"
                            .'> 该参数仅对旧的不分端app有意义。新的分端app下，该参数填写“ALL”或与app分端类型对应的值均可。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'ALL' => 'ALL',
                            'ANDROID' => 'ANDROID',
                            'iOS' => 'iOS',
                        ],
                        'example' => 'ALL',
                        'enum' => [
                            'iOS',
                            'ANDROID',
                            'ALL',
                        ],
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送。'."\n"
                            .'- **ACCOUNT**：根据账号推送。'."\n"
                            .'- **ALIAS**：根据别名推送。'."\n"
                            .'- **TAG**：根据标签推送。'."\n"
                            .'- **ALL**：推送给全部设备（同一种DeviceType的两次全推的间隔至少为1秒）。'."\n"
                            .' > 对iOS设备全推，会推送给24个月内活跃过但未卸载的设备，一旦APNs（苹果推送服务）接收到推送请求且未返回错误信息即为送达，导致活跃设备数暴增，从而产生大量费用，请您酌情使用。'."\n"
                            .'- **TBD**：初始化持续推送，推送目标由后续的[ContinuouslyPush](~~2249917~~)接口指定。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALL',
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                            'TBD',
                            'FILE',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                            ."\n"
                            .'- Target=DEVICE，值如`deviceid1,deviceid2`（最多支持1000个）。'."\n"
                            .'- Target=ACCOUNT，值如`account1,account2`（最多支持1000个）。'."\n"
                            .'- Target=ALIAS，值如`alias1,alias2`（最多支持1000个）。'."\n"
                            .'- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。'."\n"
                            .'- Target=ALL，值为**ALL**。'."\n"
                            .'- Target=TBD，值为**TBD**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'description' => '离线消息、通知是否保存。StoreOffline默认设置为**false**。'."\n"
                            ."\n"
                            .'若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。iOS通知走APNs链路，不受StoreOffline影响。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SendChannels',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定发送通道，取值如下：'."\n"
                            ."\n"
                            .'- accs：阿里云自有通道'."\n"
                            .'- huawei：华为通道'."\n"
                            .'- honor：荣耀通道'."\n"
                            .'- xiaomi：小米通道'."\n"
                            .'- oppo：OPPO通道'."\n"
                            .'- vivo：vivo通道'."\n"
                            .'- meizu：魅族通道'."\n"
                            .'- gcm：谷歌GCM通道（旧版HTTP）'."\n"
                            .'- fcm: 谷歌Firebase通道（HTTP v1 API）'."\n"
                            .'- apns：APNs通道'."\n"
                            ."\n"
                            .'>- 如果未配置此参数，则代表所有通道均可使用。'."\n"
                            .'>- 如果配置了此参数，则严格使用参数中的通道。'."\n"
                            .'>- 如果配置的通道和发送策略冲突（如iOS通知仅走APNs通道，但本参数中不包含apns），则不实施发送。'."\n"
                            .'>- 若配置gcm，则可以走谷歌GCM和FCM通道，若配置fcm，则只能走谷歌FCM通道。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'accs,huawei,xiaomi',
                    ],
                ],
                [
                    'name' => 'PushTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于定时发送。不设置缺省是立即发送。'."\n"
                            .'设置定时发送最迟不能晚于7天发送。'."\n"
                            ."\n"
                            .'时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'>Target为TBD（持续推送）时，不支持定时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-02-20T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '离线消息/通知的过期时间，和StoreOffline配合使用，过期则不会再被发送，最长保存72小时。默认为72小时。'."\n"
                            ."\n"
                            .'时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ，过期时间不能小于当前时间或者定时发送时间加上3秒（`ExpireTime > PushTime+ 3秒`），3秒是为了冗余网络和系统延迟造成的误差。建议单推不小于1分钟，全推、批量推送不少于10分钟。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-02-20T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送时通知/消息的标题，长度限制：200字节。'."\n"
                            ."\n"
                            .'在Android推送时必填；在iOS通知时非必填，如果填写，则：'."\n"
                            ."\n"
                            .'- iOS 10+通知显示标题。'."\n"
                            ."\n"
                            .'- iOS 8.2 <= iOS系统 < iOS 10：替换通知应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'title',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android推送时通知的内容/消息的内容；iOS消息/通知内容，推送的内容大小是有限制的，参见[产品限制](~~434629~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'Trim',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动对过长标题、内容进行截断。'."\n"
                            ."\n"
                            .'>仅支持明确限制标题、内容的厂商通道，对APNs、华为、荣耀通道等不限制标题、内容，只限制总请求体大小的不适用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'iOSApnsEnv',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。'."\n"
                            ."\n"
                            .'- **DEV**：表示开发环境。'."\n"
                            .'- **PRODUCT**：表示生产环境。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'DEV' => 'DEV',
                            'PRODUCT' => 'PRODUCT',
                        ],
                        'example' => 'DEV',
                        'enum' => [
                            'PRODUCT',
                            'DEV',
                        ],
                    ],
                ],
                [
                    'name' => 'iOSRemind',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息推送时设备不在线（即与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。'."\n"
                            ."\n"
                            .'> 离线消息转通知仅适用于生产环境。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'iOSSubtitle',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS通知副标题内容（iOS 10+）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'su\'b',
                    ],
                ],
                [
                    'name' => 'iOSRemindBody',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=PRODUCT && iOSRemind为true时有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ios通知body',
                    ],
                ],
                [
                    'name' => 'iOSMusic',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS通知声音。指定存放在app bundle或沙盒Library/Sounds目录下的音频文件名，请参见：[iOS推送如何设定通知声音](~~48906~~)。'."\n"
                            ."\n"
                            .'若指定为空串（””），通知为静音；若不设置，默认填充default为系统提示音。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '""',
                    ],
                ],
                [
                    'name' => 'iOSBadge',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS应用图标右上角角标。'."\n"
                            ."\n"
                            .'> 若iOSBadgeAutoIncrement设置为True，则此项必须为空。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'iOSBadgeAutoIncrement',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启角标自增功能，默认为false。'."\n"
                            ."\n"
                            .'>当该项为true时，iOSBadge必须为空。'."\n"
                            ."\n"
                            .'角标自增功能由推送服务端维护每个设备的角标计数，需要用户使用1.9.5以上版本的SDK，并且需要用户主动同步角标数字到服务端。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'iOSSilentNotification',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启iOS静默通知。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'iOSMutableContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS通知处理扩展标记（iOS 10+）。如果设为true，则APNs推送的通知在弹出前，可先到达Extension进行处理。静默通知时，必须设为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'iOSNotificationCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定iOS通知Category（iOS 10+）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ios',
                    ],
                ],
                [
                    'name' => 'iOSNotificationCollapseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备收到有相同CollapseId的消息，会合并成一条。设备不在线，连续发相同CollapseId的消息，通知栏只会显示一条，iOS 10+支持设置此参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ZD2011',
                    ],
                ],
                [
                    'name' => 'iOSNotificationThreadId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通过该属性对iOS的远程通知进行分组，标记折叠的组别识别名。'."\n"
                            .'仅支持iOS 12.0+版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                    ],
                ],
                [
                    'name' => 'iOSInterruptionLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '中断级别，取值：'."\n"
                            ."\n"
                            .'- **passive**：系统在不点灯、不播放声音的情况下将通知添加到通知列表中。'."\n"
                            .'- **active**：系统立即显示通知，点亮屏幕，并可以播放声音。'."\n"
                            .'- **time-sensitive**：系统立即呈现通知，点亮屏幕，并可以播放声音，但不会突破系统通知控制。'."\n"
                            .'- **critical**：系统立即显示通知，屏幕亮起，并绕过静音开关播放声音。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'active',
                    ],
                ],
                [
                    'name' => 'iOSRelevanceScore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '摘要突出显示分数。取值范围：\\[0,1\\]的浮点数。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'example' => '0.01',
                    ],
                ],
                [
                    'name' => 'iOSExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS通知的扩展属性。'."\n"
                            ."\n"
                            .'iOS10+可以在此指定富媒体推送通知的资源Url：`{“attachment”: “https://xxxx.xxx/notification_pic.png"} `。该参数要以JSON map的格式传入，否则会解析出错。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{“attachment”: “https://xxxx.xxx/notification_pic.png"} ',
                    ],
                ],
                [
                    'name' => 'AndroidNotifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知的提醒方式。可取值：'."\n"
                            ."\n"
                            .'- **VIBRATE**：振动（默认值）'."\n"
                            .'- **SOUND**：声音'."\n"
                            .'- **BOTH**：声音和振动'."\n"
                            .'- **NONE**：静音',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BOTH',
                        'enum' => [
                            'NONE',
                            'VIBRATE',
                            'SOUND',
                            'BOTH',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidRemind',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送类型为消息时设备不在线，则这条推送会使用辅助弹窗功能。默认值为false，仅当PushType=MESSAGE时生效。'."\n"
                            ."\n"
                            .'如果消息转通知推送成功，收到通知是展示的数据为服务端设置的AndroidPopupTitle和AndroidPopupBody参数值，点击通知在辅助弹窗的onSysNoticeOpened方法中获取到的数据是服务端设置的Title和Body参数值。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AndroidOpenType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '点击通知后动作。可取值：'."\n"
                            ."\n"
                            .'- **APPLICATION**：打开应用（默认值）'."\n"
                            .'- **ACTIVITY**：打开应用AndroidActivity'."\n"
                            .'- **URL**：打开URL'."\n"
                            .'- **NONE**：无跳转',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'APPLICATION',
                        'enum' => [
                            'APPLICATION',
                            'ACTIVITY',
                            'URL',
                            'NONE',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidActivity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定通知打开的activity。'."\n"
                            ."\n"
                            .'仅当AndroidOpenType=”Activity”时传入，如：`com.alibaba.cloudpushdemo.bizactivity`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.alibaba.cloudpushdemo.bizactivity',
                    ],
                ],
                [
                    'name' => 'AndroidOpenUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android收到推送后打开对应的url。'."\n"
                            ."\n"
                            .'仅当AndroidOpenType=”URL”时传入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://xxxx.xxx',
                    ],
                ],
                [
                    'name' => 'AndroidPopupActivity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定点击通知后跳转的Activity。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.alibaba.cloudpushdemo.bizactivity',
                    ],
                ],
                [
                    'name' => 'AndroidPopupTitle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '辅助弹窗模式下标题内容。**AndroidPopupActivity**参数不为空时，该参数必填。 '."\n"
                            ."\n"
                            .'长度限制：30字符。'."\n"
                            ."\n"
                            .'如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'AndroidPopupBody',
                    'in' => 'query',
                    'schema' => [
                        'description' => '辅助弹窗模式下Body内容。**AndroidPopupActivity**参数不为空时，该参数必填。'."\n"
                            ."\n"
                            .'长度限制：128字符。'."\n"
                            ."\n"
                            .'如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'AndroidRenderStyle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知样式，取值为：'."\n"
                            .'- **0**：标准模式（默认）'."\n"
                            .'- **1**：长文本模式（支持华为、荣耀、小米、OPPO、魅族、自有通道）'."\n"
                            .'- **2**：大图模式（仅支持小米）'."\n"
                            .'- **3**：列表模式（支持华为、荣耀、小米、OPPO、自有通道）'."\n"
                            .'> 若使用非标准模式，此参数必须提供。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '0',
                            '1',
                            '2',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AndroidBigTitle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '长文本模式下的标题，长度限制：200个字节（1个汉字算作3字节）。'."\n"
                            ."\n"
                            .'- 当前仅支持荣耀通道和华为通道EMUI11及以上版本。'."\n"
                            ."\n"
                            .'- 若长文本模式下未提供此参数，则从Title、AndroidPopupTitle里取第一个非空值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '示例长标题',
                    ],
                ],
                [
                    'name' => 'AndroidBigBody',
                    'in' => 'query',
                    'schema' => [
                        'description' => '长文本模式下的body，长度限制：1000字节（1个汉字算作3字节），发送时受具体厂商通道的限制。'."\n"
                            ."\n"
                            .'当前支持：'."\n"
                            ."\n"
                            .'- 　华为：EMUI10及以上'."\n"
                            ."\n"
                            .'- 　荣耀：Magic UI 4.0及以上'."\n"
                            ."\n"
                            .'- 　小米：MIUI10及以上'."\n"
                            ."\n"
                            .'- 　OPPO：ColorOS 5.0以上'."\n"
                            ."\n"
                            .'- 　魅族：Flyme '."\n"
                            .'- 　自有通道：安卓SDK3.6.0及以上'."\n"
                            ."\n"
                            .'>若长文本模式下未提供此参数，则从Body、AndroidPopupBody里取第一个非空值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '示例长文本',
                    ],
                ],
                [
                    'name' => 'AndroidBigPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '大图模式下的图片URL，当前支持：自有通道：安卓SDK3.6.0及以上。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://imag.example.com/image.png',
                    ],
                ],
                [
                    'name' => 'AndroidXiaomiBigPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '大图模式下的大图URL。大图模式下图片上传至小米推送后会返回一个图片URL，本参数内填写这个URL。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://f6.market.xiaomi.com/download/MiPass/aaa/bbb.png',
                    ],
                ],
                [
                    'name' => 'AndroidImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '大图标URL。'."\n"
                            .'当前支持：'."\n"
                            .'- 华为EMUI（仅长文本模式、Inbox模式下适用）。'."\n"
                            ."\n"
                            .'- 荣耀Magic UI（仅长文本模式下适用）。'."\n"
                            ."\n"
                            .'- 自有通道：安卓SDK3.5.0及以上。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://imag.example.com/image.png',
                    ],
                ],
                [
                    'name' => 'AndroidXiaomiImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '大图URL。当前支持：小米MIUI12及以上（仅长文本模式下适用）。'."\n"
                            ."\n"
                            .'>上传到小米服务器上，返回的图标URL。具体请参考：[链接](https://dev.mi.com/console/doc/detail?pId=1278#_3_3)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://imag.example.com/image.png',
                    ],
                ],
                [
                    'name' => 'AndroidInboxBody',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Inbox模式下的正文，内容为合法的JSON Array，且元素不超过5个。当前支持：'."\n"
                            ."\n"
                            .'- 华为：EMUI9及以上'."\n"
                            .'- 荣耀：Magic UI 4.0及以上'."\n"
                            .'- 小米：MIUI10及以上'."\n"
                            .'- OPPO：ColorOS 5.0以上'."\n"
                            .'- 自有通道：安卓SDK3.6.0及以上',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["第一行","第二行"]',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationBarType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android自定义通知栏样式，取值：1-100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationBarPriority',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android通知在通知栏展示时排列位置的优先级。可取值： -2，-1，0，1，2。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2',
                        'minimum' => '-2',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationNotifyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标识每条消息在通知显示时的唯一标识，不同的通知栏消息可以相同的NotifyId，实现新的通知栏消息覆盖老的，当前支持除FCM通道外的其他厂商通道。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100001',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationChannel',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android app的channelId，需要与app中的channelId能对应上。'."\n"
                            .'- 设置NotificationChannel参数，具体用途请参见[常见问题：Android 8.0以上设备通知接收不到](~~67398~~)。'."\n"
                            .'- 因OPPO通知私信通道的channel_id与app的channelId，故OPPO通道推送时，channel_id取此值。'."\n"
                            .'- 华为、FCM、阿里云自有通道推送中，channel_id取此值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationHuaweiChannel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置Huawei通知消息分类importance参数，决定用户设备消息通知行为，取值如下：'."\n"
                            ."\n"
                            .'- LOW：资讯营销类消息'."\n"
                            .'- NORMAL：服务与通讯类消息'."\n"
                            ."\n"
                            .'>- 当前华为通道建议使用AndroidMessageHuaweiCategory进行通知分类，可不再使用AndroidNotificationHuaweiChannel。'."\n"
                            .'>- 需要在Huawei平台申请，[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section893184112272)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LOW' => 'LOW',
                            'NORMAL' => 'NORMAL',
                        ],
                        'example' => 'LOW',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationHonorChannel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置荣耀通知消息分类importance参数，决定用户设备消息通知行为，取值如下：'."\n"
                            ."\n"
                            .'- **LOW**：资讯营销类消息'."\n"
                            .'- **NORMAL**：服务与通讯类消息'."\n"
                            ."\n"
                            .'需要在荣耀平台申请，[申请链接](https://developer.hihonor.com/cn/kitdoc?category=%E5%9F%BA%E7%A1%80%E6%9C%8D%E5%8A%A1&kitId=11002&navigation=guides&docId=notification-class.md&token=)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LOW' => 'LOW',
                            'NORMAL' => 'NORMAL',
                        ],
                        'example' => 'LOW',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationXiaomiChannel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置小米通知类型的channelId，需要在小米平台申请，详见：[申请链接](https://dev.mi.com/console/doc/detail?pId=2422#_4)。'."\n"
                            .'>- 小米通道单个应用最多可申请8个channel，请提前做好规划。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'michannel',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationVivoChannel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置vivo通知消息分类，取值为：'."\n"
                            ."\n"
                            .'- 0：运营类消息（默认）'."\n"
                            .'- 1：系统类消息'."\n"
                            ."\n"
                            .'>- 当前vivo通道建议使用AndroidMessageVivoCategory进行通知分类，可不再使用AndroidNotificationVivoChannel。'."\n"
                            .'>- 需要在vivo平台申请，详见：[申请链接](https://dev.vivo.com.cn/documentCenter/doc/359)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '0',
                            '1',
                        ],
                        'example' => 'classification',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息分组，同一组消息在通知栏里只显示最新一条和当前该组接受到的消息总数目，不会展示所有消息也无法展开。当前支持：'."\n"
                            ."\n"
                            .'- 华为'."\n"
                            .'- 荣耀'."\n"
                            .'- 自有通道',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group-1',
                    ],
                ],
                [
                    'name' => 'AndroidExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定通知的扩展属性。当推送类型PushType设置为MESSAGE消息类型时，该属性不生效。'."\n"
                            ."\n"
                            .'该参数要以JSON map的格式传入，否则会解析出错。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key1":"value1","api_name":"PushNoticeToAndroidRequest"}',
                    ],
                ],
                [
                    'name' => 'AndroidMessageHuaweiUrgency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '华为通道透传消息投递优先级，取值如下：'."\n"
                            ."\n"
                            .'- **HIGH**'."\n"
                            .'- **NORMAL**'."\n"
                            ."\n"
                            .'需要申请权限，具体请参见：[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'HIGH' => 'HIGH',
                            'NORMAL' => 'NORMAL',
                        ],
                        'example' => 'HIGH',
                    ],
                ],
                [
                    'name' => 'AndroidMessageHuaweiCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作用一：完成[自分类权益申请](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835?#section3410731125514)后，用于标识消息类型，确定[消息提醒方式](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#ZH-CN_TOPIC_0000001149358835__p3850133955718)，对特定类型消息加快发送，取值请参考华为推送官方文档的[消息分类标准](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section1076611477914)，填写文档表格中的“云端通知category取值”或“本地通知category取值”。'."\n"
                            ."\n"
                            .'作用二：[申请特殊权限](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)后，用于标识高优先级透传场景，取值如下：'."\n"
                            .'- VOIP：音视频通话'."\n"
                            .'- PLAY_VOICE：语音播报'."\n"
                            ."\n"
                            .'> 对于“云端通知category取值”为“不涉及”的一概走阿里云自有通道，对于“本地通知category取值”为“不涉及”的一概走华为通道。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VOIP',
                    ],
                ],
                [
                    'name' => 'AndroidMessageVivoCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'vivo将消息分为：系统消息、运营消息两个类别进行管理。'."\n"
                            .'系统消息：'."\n"
                            .'- IM：即时消息'."\n"
                            .'- ACCOUNT：账号与资产'."\n"
                            .'- TODO：日程待办'."\n"
                            .'- DEVICE_REMINDER：设备信息'."\n"
                            .'- ORDER：订单与物流'."\n"
                            .'- SUBSCRIPTION：订阅提醒'."\n"
                            ."\n"
                            .'运营消息：'."\n"
                            .'- NEWS：新闻'."\n"
                            .'- CONTENT：内容推荐'."\n"
                            .'- MARKETING：运营活动'."\n"
                            .'- SOCIAL：社交动态'."\n"
                            ."\n"
                            .'详细请参考[分类说明](https://dev.vivo.com.cn/documentCenter/doc/359#_Toc64906673)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TODO',
                    ],
                ],
                [
                    'name' => 'AndroidTargetUserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置厂商通道通知类型：'."\n"
                            .'- **0**：正式通知（默认）。'."\n"
                            .'- **1**：测试通知。'."\n"
                            ."\n"
                            .'>- 本参数配置后等价于同时配置AndroidHuaweiTargetUserType、AndroidHonorTargetType、AndroidVivoPushMode三个参数，具体厂商通道的对应参数能覆盖本参数。'."\n"
                            .'>- 当前支持：华为通道、荣耀通道、vivo通道。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidHuaweiTargetUserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置华为通道通知类型：'."\n"
                            .'- **0**：正式通知（默认）。'."\n"
                            .'- **1**：测试通知。'."\n"
                            ."\n"
                            .'> 每个应用每日可发送该测试通知500条且不受每日单设备推送数量上限要求。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '0',
                            '1',
                        ],
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidHonorTargetUserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置荣耀通道通知类型：'."\n"
                            .'- **0**：正式通知（默认）。'."\n"
                            .'- **1**：测试通知。'."\n"
                            ."\n"
                            .'> 每个应用每日可发送该测试通知1000条且不受每日单设备推送数量上限要求。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidVivoPushMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置vivo通道通知类型：'."\n"
                            .'- **0**：正式推送（默认）。'."\n"
                            .'- **1**：测试推送。'."\n"
                            ."\n"
                            .'> 测试推送请事先在vivo控制台配置测试设备。测试设备RegId可在设备启动日志中搜索“onReceiveRegId regId”获得。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '0',
                            '1',
                        ],
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidHuaweiReceiptId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '华为通道回执ID，该回执ID可以在华为通道推送运营平台的回执参数配置中查看。'."\n"
                            ."\n"
                            .'> 如果在华为通道推送运营平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置华为通道默认回执ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RCP4C123456',
                    ],
                ],
                [
                    'name' => 'AndroidVivoReceiptId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'vivo通道回执ID，该回执ID可以在vivo开放平台推送服务的应用信息中查看。'."\n"
                            ."\n"
                            .'> 如果在vivo开放平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置vivo通道默认回执ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'AndroidMusic',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android通知声音（保留参数，当前暂不起作用）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'SmsTemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补发短信的模板名，可以在短信模板管理界面获取，是系统分配的名称，而非开发者设置的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '短信模板名称',
                    ],
                ],
                [
                    'name' => 'SmsSignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补发短信的签名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '短信签名',
                    ],
                ],
                [
                    'name' => 'SmsParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板的变量名值对，格式： `key1=value1&key2=value2`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'key1=value1',
                    ],
                ],
                [
                    'name' => 'SmsDelaySecs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发短信的延迟时间，单位：秒。'."\n"
                            ."\n"
                            .'推荐设置为15秒以上，避免短信和推送的重复。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'SmsSendPolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发短信的条件。可取值：'."\n"
                            ."\n"
                            .'- **0**：推送未收到时触发。'."\n"
                            .'- **1**：用户未打开时触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'enumValueTitles' => [
                            '0',
                            '1',
                        ],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'SendSpeed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => true,
                        'required' => false,
                        'minimum' => '10000',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'AndroidXiaoMiNotifyTitle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupTitle**统一支持。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'AndroidXiaoMiNotifyBody',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupBody**统一支持。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'AndroidXiaoMiActivity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupActivity**统一支持。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '无',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '501029',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidPeriod.ExceedDays',
                        'errorMessage' => 'The period between specified EndTime and StartTime exceeds %s days.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.Format',
                        'errorMessage' => 'The specified %s format is invalid.',
                    ],
                    [
                        'errorCode' => 'AccountDisabled',
                        'errorMessage' => 'Your account is not enabled.',
                    ],
                    [
                        'errorCode' => 'FileNotExist',
                        'errorMessage' => 'The specified file does not exist.',
                    ],
                    [
                        'errorCode' => 'IncorrectPassword',
                        'errorMessage' => 'The password is incorrect.',
                    ],
                    [
                        'errorCode' => 'NotApnsCertificate',
                        'errorMessage' => 'The Certificate is not an APNs certificate.',
                    ],
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'The specified AppKey is not authorized.',
                    ],
                    [
                        'errorCode' => 'SendSpeedNotSupported',
                        'errorMessage' => 'SendSpeed is not supported for specified Target.',
                    ],
                    [
                        'errorCode' => 'SmsProfileConfigFailed',
                        'errorMessage' => 'Failed to configure SMS profile.',
                    ],
                    [
                        'errorCode' => 'SmsProfileGetFailed',
                        'errorMessage' => 'Failed to get SMS profile.',
                    ],
                    [
                        'errorCode' => 'SmsRoleAuthorizeFailed',
                        'errorMessage' => 'Failed to authorize SMS role.',
                    ],
                    [
                        'errorCode' => 'SmsRoleUnauthorized',
                        'errorMessage' => 'The SMS role is unauthorized.',
                    ],
                    [
                        'errorCode' => 'TagsNumberBeyondLimit',
                        'errorMessage' => 'The number of tags bound to this app exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'TargetNotSupported',
                        'errorMessage' => 'Target is not supported for file push.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.LengthExceed',
                        'errorMessage' => 'The specified %s length cannot be greater than %s.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.BytesExceed',
                        'errorMessage' => 'The specified %s exceeds the %s bytes limit.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.Empty',
                        'errorMessage' => 'The specified %s cannot be empty.',
                    ],
                    [
                        'errorCode' => 'Invalid.Parameter',
                        'errorMessage' => 'The specified parameter is invalid: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request processing is timeout.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
            'title' => '高级推送',
            'summary' => '高级推送接口，提供丰富的推送定制参数。',
            'description' => '**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**'."\n"
                ."\n"
                .'本接口区分Android和iOS平台，对于不同平台的推送调用，需要传入平台对应的AppKey。',
            'requestParamsDescription' => '## 请求参数补充说明'."\n"
                .'**Title/Body 展开说明如下：**'."\n"
                ."\n"
                .'|属性\\推送类型|消息（iOS）|消息（Android）|通知（iOS）|	通知（Android）|'."\n"
                .'|:-----------------|:-----------------|:-----------------|:-----------------|:-----------------|'."\n"
                .'|Title	|消息标题，对应消息回调中CCPSysMessage的title字段|	CPushMessage.title字段|	通知标题 |	通知标题，通知回调方法（onNotificationOpened）|'."\n"
                .'Body|	消息体，对应消息回调中CCPSysMessage的body字段|	消息体，CPushMessage.content字段|	通知内容	|通知内容，通知回调方法（onNotificationOpened）|'."\n"
                ."\n"
                .'**下述配置仅作用于Android辅助弹窗功能：**'."\n"
                ."\n"
                .'推送时设备不在线（既与移动推送的服务端的长连接通道不通），则这条推送可以启动辅助弹窗功能，启动辅助弹窗功能参见[移动推送辅助通道配置](https://help.aliyun.com/document_detail/30067.html)，且需要具备如下条件：'."\n"
                ."\n"
                .'* 集成第三方辅助通道。'."\n"
                .'* StoreOffline参数设为true。'."\n"
                .'* 推送通知（无需设置AndroidRemind）或者推送消息并设置AndroidRemind为true。'."\n"
                .'* 正确设置AndroidPopupActivity、AndroidPopupTitle、AndroidPopupBody参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => '#  Java示例代码'."\n"
                ."\n"
                .'```'."\n"
                .'PushRequest pushRequest = new PushRequest();'."\n"
                .'// 推送目标'."\n"
                .'pushRequest.setAppKey(appKey);'."\n"
                .'pushRequest.setTarget("ALL"); //推送目标: DEVICE:推送给设备; ACCOUNT:推送给指定账号,TAG:推送给自定义标签; ALIAS: 按别名推送; ALL: 全推'."\n"
                .'pushRequest.setTargetValue("all"); //根据Target来设定，如Target=DEVICE, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔.(账号与设备有一次最多100个的限制)'."\n"
                .'pushRequest.setDeviceType("iOS"); // 设备类型deviceType, iOS设备: "iOS"; Android设备: "ANDROID"; 全部: "ALL", 这是默认值.'."\n"
                .'// 推送配置'."\n"
                .'pushRequest.setPushType("MESSAGE"); // MESSAGE:表示消息(默认), NOTICE:表示通知'."\n"
                .'pushRequest.setTitle("Hello"); // 消息的标题'."\n"
                .'pushRequest.setBody("PushRequest body"); // 消息的内容'."\n"
                .'// 推送配置: iOS'."\n"
                .'pushRequest.setIOSBadge(5); // iOS应用图标右上角角标'."\n"
                .'pushRequest.setIOSMusic("default"); // iOS通知声音'."\n"
                .'pushRequest.setIOSApnsEnv("PRODUCT");//iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。\'DEV\': 表示开发环境 \'PRODUCT\': 表示生产环境'."\n"
                .'pushRequest.setIOSRemind(true); //  消息推送时设备不在线（既与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。注意：**离线消息转通知仅适用于`生产环境`**'."\n"
                .'pushRequest.setIOSRemindBody("PushRequest summary"); // iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=`PRODUCT` && iOSRemind为true时有效'."\n"
                .'pushRequest.setIOSExtParameters("{\\"k1\\":\\"ios\\",\\"k2\\":\\"v2\\"}"); //通知的扩展属性(注意 : 该参数要以json map的格式传入,否则会解析出错)'."\n"
                .'// 推送配置: Android'."\n"
                .'pushRequest.setAndroidOpenType("ACTIVITY"); // 点击通知后动作 \'APPLICATION\': 打开应用 \'ACTIVITY\': 打开应用AndroidActivity \'URL\': 打开URL \'NONE\': 无跳转'."\n"
                .'pushRequest.setAndroidNotifyType("SOUND"); // 通知的提醒方式 ‘VIBRATE\': 振动  \'SOUND\': 声音 \'DEFAULT\': 声音和振动 \'NONE\': 不做处理，用户自定义'."\n"
                .'pushRequest.setAndroidOpenUrl("http://www.alibaba.com");'."\n"
                .'pushRequest.setAndroidMusic("default"); // Android通知声音'."\n"
                .'pushRequest.setAndroidActivity("com.alibaba.push.PushActivity"); // Android收到推送后打开对应的ACTIVITY,仅当`AndroidOpenType="ACTIVITY"`有效'."\n"
                .'pushRequest.setAndroidPopupActivity("com.alibaba.push.PopupActivity"); //设置该参数后启动辅助弹窗功能, 此处指定通知点击后跳转的Activity（辅助弹窗的前提条件：1. 集成第三方辅助通道；2. StoreOffline参数设为true）'."\n"
                .'pushRequest.setAndroidPopupTitle("Popup Title"); //设置辅助弹窗通知的标题'."\n"
                .'pushRequest.setAndroidPopupBody("Popup Body"); //设置辅助弹窗通知的内容'."\n"
                .'pushRequest.setAndroidNotificationBarType(50); //Android自定义通知栏样式，取值：1-100'."\n"
                .'pushRequest.setAndroidNotificationBarPriority(2); //Android通知在通知栏展示时排列位置的优先级 -2 -1 0 1 2'."\n"
                .'pushRequest.setAndroidExtParameters("{\\"k1\\":\\"android\\",\\"k2\\":\\"v2\\"}"); //设定通知的扩展属性。(注意 : 该参数要以 json map 的格式传入,否则会解析出错)'."\n"
                .'// 推送控制'."\n"
                .'final Date pushDate = new Date(System.currentTimeMillis() + 3600 * 1000); //用于定时发送。不设置缺省是立即发送。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。'."\n"
                .'final String pushTime = ParameterHelper.getISO8601Time(pushDate);'."\n"
                .'pushRequest.setPushTime(pushTime); // 延后推送。可选，如果不设置表示立即推送'."\n"
                .'pushRequest.setStoreOffline(true); // 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到，安卓中若为false则只走阿里云自有在线通道'."\n"
                .'final String expireTime = ParameterHelper.getISO8601Time(new Date(System.currentTimeMillis() + 12 * 3600 * 1000)); // 12小时后消息失效, 不会再发送'."\n"
                .'pushRequest.setExpireTime(expireTime);'."\n"
                .'pushRequest.setSendChannels("accs,huawei,honor,vivo,xiaomi,oppo"); // 指定下发的推送通道，若不填可从任何可行的通道下发'."\n"
                .'pushRequest.setAndroidNotificationNotifyId(1234567); // 设置通知覆盖参数，避免重试等场景用户显示多条相同的通知'."\n"
                .'pushRequest.setAndroidTargetUserType(0); // 代表本次推送如果推送到华为、荣耀、vivo通道，是一个正式通知，但本代码示例中这个值被厂商通道特有参数所覆盖'."\n"
                .'pushRequest.setAndroidHuaweiTargetUserType(1); // 代表本次推送如果推送到华为通道，是一个测试性质的通知'."\n"
                .'pushRequest.setAndroidHonorTargetUserType(1); // 代表本次推送如果推送到荣耀通道，是一个测试性质的通知'."\n"
                .'pushRequest.setAndroidVivoPushMode(1); // 代表本次推送如果推送到华为通道，是一个测试性质的通知，请在推送前把vivo设备regId加入vivo推送平台的测试设备列表中'."\n"
                .'pushRequest.setAndroidHuaweiReceiptId("ABCDEFG"); // 华为厂商通道'."\n"
                .'// 厂商通道通知分类'."\n"
                .'pushRequest.setAndroidNotificationChannel("user_define"); // OPPO通道私信通道channel_id，以及通用安卓channel_id'."\n"
                .'pushRequest.setAndroidNotificationXiaomiChannel("user_define"); //小米通道通知类型channel_id'."\n"
                .'pushRequest.setAndroidNotificationHonorChannel("NORMAL"); // 荣耀通道消息分类参数，对应荣耀通道importance参数'."\n"
                .'pushRequest.setAndroidMessageHuaweiCategory("ACCOUNT"); // 华为通道的通知分类参数，服务与通讯类通知需向华为通道申请权限'."\n"
                .'pushRequest.setAndroidMessageVivoCategory("ACCOUNT"); // vivo通道的通知分类参数，系统消息需向vivo通道申请权限'."\n"
                .'// 短信融合通知'."\n"
                .'pushRequest.setSmsTemplateName("SMS_1234567"); // 设置短信模板名'."\n"
                .'pushRequest.setSmsSignName("测试"); //设置短信签名'."\n"
                .'pushRequest.setSmsParams("name=Bob&code=123"); // 短信模板变量'."\n"
                .'pushRequest.setSmsSendPolicy(0); // 补发短信的策略，0 表示当设备未收到推送时补发'."\n"
                .'pushRequest.setSmsDelaySecs(120); // 两分钟未收到触发短信'."\n"
                .'PushResponse pushResponse = client.getAcsResponse(pushRequest);'."\n"
                .'System.out.printf("RequestId: %s, MessageId: %s\\n",'."\n"
                .'        pushResponse.getRequestId(), pushResponse.getMessageId());'."\n"
                .'```',
        ],
        'ContinuouslyPush' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息ID。'."\n"
                            ."\n"
                            .'调用Push接口，设置Target为TBD，调用后获得的MessageId。它代表了一个已经保存到推送系统的消息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '500131',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送'."\n"
                            .'- **ACCOUNT**：根据账号推送'."\n"
                            .'- **ALIAS**：根据别名推送'."\n"
                            ."\n"
                            .'持续推送只支持这3种目标类型。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DEVICE',
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                            ."\n"
                            .'- Target=DEVICE，值如`deviceid1,deviceid2`（最多支持1000个）。'."\n"
                            .'- Target=ACCOUNT，值如`account1,account2`（最多支持1000个）。'."\n"
                            .'- Target=ALIAS，值如`alias1,alias2`（最多支持1000个）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'a692961a92534047ad3625****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '500131',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MessageId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"RequestId\\": \\"500131\\"\\n}","errorExample":""},{"type":"xml","example":"\\n<ContinuouslyPushResponse>\\n  <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>  \\n  <MessageId>500131</MessageId>\\n</ContinuouslyPushResponse>","errorExample":""}]',
            'title' => '持续推送',
            'summary' => '执行预定义的持续推送任务。',
            'description' => '# 接口说明'."\n"
                .'本接口是用于解决[Push高级推送接口](~~2249916~~)中，无论是按设备推、按账号推、按别名推，在单次调用中都存在目标个数上限的问题。'."\n"
                ."\n"
                .'- 使用持续推送意味着业务场景是要往大量设备上，发送同一条消息。这时候，应当合理调用持续推送接口，每次调用，聚合一组设备进行推送（目前按设备推、按账号推、按别名推，单次推送目标个数上限是1000）。我们会限制在同一个 MessageId 上推送的总次数为10000 。如确实需要更高限额，请联系技术支持评估具体场景。'."\n"
                ."\n"
                .'- 使用这个接口前，需要调用Push接口，将Target设置为TBD（To Be Determined），填入消息内容，调用获得该消息在推送系统中的MessageId。然后，可以基于这个MessageId，重复调用此接口，指定不同的目标组，将此消息推送到这些目标上。'."\n"
                ."\n"
                .'- 调用Push接口设置目标为TBD获得MessageId后，这个消息默认会在推送系统保存24个小时，过期之前，可以随时使用本接口进行指定目标推送。过期后不再允许推送。超出总次数上限后不再允许推送。'."\n"
                ."\n"
                .'- 每次调用本接口指定设备时，消息都是立即推出，不支持设置定时推送。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '# Java示例代码'."\n"
                .'```'."\n"
                .'ContinuouslyPushRequest continuouslyPushRequest = new ContinuouslyPushRequest();'."\n"
                .'continuouslyPushRequest.setAppKey(appKey);'."\n"
                .'// 设置持续推送的消息Id'."\n"
                .'continuouslyPushRequest.setMessageId("500131");'."\n"
                .'// 指定推送目标'."\n"
                .'// 可以继续用同一个`MessageId`，调用此接口指定其它设备，继续推送'."\n"
                .'continuouslyPushRequest.setTarget("DEVICE");'."\n"
                .'continuouslyPushRequest.setTargetValue("a692961a92534047ad362575f31f57b7");'."\n"
                .'ContinuouslyPushResponse continuouslyPushResponse = client.getAcsResponse(continuouslyPushRequest);'."\n"
                .'System.out.printf("RequestId: %s, MessageId: %s\\n",'."\n"
                .'        continuouslyPushResponse.getRequestId(), continuouslyPushResponse.getMessageId());'."\n"
                .'```',
        ],
        'CompleteContinuouslyPush' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息ID。'."\n"
                            ."\n"
                            .'调用Push接口，设置Target为TBD，调用后获得的MessageId。它代表了一个已经保存到推送系统的消息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '500131',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '500131',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MessageId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"RequestId\\": \\"500131\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<ContinuouslyPushResponse>\\n  <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>  \\n  <MessageId>500131</MessageId>\\n</ContinuouslyPushResponse>","errorExample":""}]',
            'title' => '完成持续推送任务',
            'summary' => '手动结束持续推送任务。',
            'description' => '# 接口说明'."\n"
                ."\n"
                .'若不调用此接口以手动形式结束持续推送任务，持续推送任务将会在到达过期时间时自动结束。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
        ],
        'CancelPush' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '某次推送任务的消息ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '501029',
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<PushMessageToAndroidResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n</PushMessageToAndroidResponse>","errorExample":""}]',
            'title' => '取消定时推送任务',
            'summary' => '取消某次尚未执行的定时推送任务。',
        ],
        'PushMessageToAndroid' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送'."\n"
                            .'- **ACCOUNT**：根据账号推送'."\n"
                            .'- **ALIAS**：根据别名推送'."\n"
                            .'- **TAG**：根据标签推送'."\n"
                            .'- **ALL**：推送给全部设备',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                            ."\n"
                            .'- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。'."\n"
                            .'- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。'."\n"
                            .'- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。'."\n"
                            .'- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。'."\n"
                            .'- Target=ALL，值为**all**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送的消息的标题。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my title',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送的消息内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my body',
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息是否离线保存。StoreOffline默认设置为false。'."\n"
                            ."\n"
                            .'若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '501029',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Invalid%s.Format',
                        'errorMessage' => 'The specified %s format is invalid.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.Empty',
                        'errorMessage' => 'The specified %s cannot be empty.',
                    ],
                    [
                        'errorCode' => 'Invalid.Parameter',
                        'errorMessage' => 'The specified parameter is invalid: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request processing is timeout.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
            'title' => '推送消息给Android设备',
            'summary' => '推送消息给Android设备。',
            'description' => '# 接口说明'."\n"
                ."\n"
                .'**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**'."\n"
                ."\n"
                .'该接口默认只发送给在线设备，要发送离线保存消息请使用[推送高级接口](~~2249916~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PushMessageToiOS' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '24780725',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送'."\n"
                            .'- **ACCOUNT**：根据账号推送'."\n"
                            .'- **ALIAS**：根据别名推送'."\n"
                            .'- **TAG**：根据标签推送'."\n"
                            .'- **ALL**：推送给全部设备',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                            ."\n"
                            .'- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。'."\n"
                            .'- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。'."\n"
                            .'- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。'."\n"
                            .'- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。'."\n"
                            .'- Target=ALL，值为**all**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送的消息的标题。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my title',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送的消息内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my body',
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息是否离线保存。StoreOffline默认设置为false。'."\n"
                            ."\n"
                            .'若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '501029',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
            'title' => '推送消息给iOS设备',
            'summary' => '推送消息给iOS设备。',
            'description' => '# 接口说明'."\n"
                ."\n"
                .'**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**'."\n"
                ."\n"
                .'该接口默认只发送给在线设备，要发送离线保存消息请使用[推送高级接口](~~2249916~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PushNoticeToAndroid' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送'."\n"
                            .'- **ACCOUNT**：根据账号推送'."\n"
                            .'- **ALIAS**：根据别名推送'."\n"
                            .'- **TAG**：根据标签推送'."\n"
                            .'- **ALL**：推送给全部设备',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                            ."\n"
                            .'- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。'."\n"
                            .'- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。'."\n"
                            .'- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。'."\n"
                            .'- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。'."\n"
                            .'- Target=ALL，值为**ALL**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送的通知标题。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'title',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送的通知内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'body',
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知是否离线保存。StoreOffline默认设置为false。'."\n"
                            ."\n"
                            .'若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义的KV结构，供开发者扩展使用，针对Android设备。该参数要以JSON map的格式传入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key1":"value1","api_name":"PushNoticeToAndroidRequest"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '501029',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
            'title' => '推送通知给Android设备',
            'summary' => '推送通知给Android设备，本接口仅通过阿里云自有通道进行推送。',
            'description' => '# 接口说明'."\n"
                .'**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**'."\n"
                ."\n"
                .'该接口默认只发送给在线设备，要发送离线保存消息请使用[推送高级接口](~~2249916~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PushNoticeToiOS' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '24780725',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送'."\n"
                            .'- **ACCOUNT**：根据账号推送'."\n"
                            .'- **ALIAS**：根据别名推送'."\n"
                            .'- **TAG**：根据标签推送'."\n"
                            .'- **ALL**：推送给全部设备',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。'."\n"
                            ."\n"
                            .'- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。'."\n"
                            .'- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。'."\n"
                            .'- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。'."\n"
                            .'- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。'."\n"
                            .'- Target=ALL，值为**ALL**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'ApnsEnv',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS的通知是通过APNS中心来发送的，需要填写对应的环境信息。'."\n"
                            .'- DEV：表示开发环境'."\n"
                            .'- PRODUCT：表示生产环境',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEV',
                        'enum' => [
                            'DEV',
                            'PRODUCT',
                        ],
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送的通知的标题。'."\n"
                            .'- iOS 10+通知显示标题。'."\n"
                            .'- iOS 8.2 <= iOS系统 < iOS 10：替换通知应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'title',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送的通知内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hello World',
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义的KV结构，开发者扩展用。'."\n"
                            ."\n"
                            .'> 针对iOS设备，该参数要以JSON map的格式传入，否则会解析出错。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"k1":"ios","k2":"v2"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageId' => [
                                'description' => '标志一次推送的消息ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '501029',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"RequestId\\": \\"501029\\"\\n}","type":"json"}]',
            'title' => '推送通知给iOS设备',
            'summary' => '推送通知给iOS设备，iOS设备需要处于在线状态。',
            'description' => '**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckCertificate' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1000000000',
                        'minimum' => '0',
                        'example' => '23267207',
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'Android' => [
                                'description' => '判断AppKey代表的是否是Android app：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'false',
                            ],
                            'IOS' => [
                                'description' => '判断AppKey代表的是否是iOS app：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'true',
                            ],
                            'ProductionCertInfo' => [
                                'description' => '访问生产环境的证书信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '证书状态，取值：'."\n"
                                            ."\n"
                                            .'- **EXPIRED**：已过期'."\n"
                                            .'- **NOT_CONFIGURED**：未配置'."\n"
                                            .'- **NO_PASSWORD**：未配置密码'."\n"
                                            .'- **OK**：正常'."\n"
                                            .'- **REVOKED**：已撤销',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'REVOKED' => 'REVOKED',
                                            'NO_PASSWORD' => 'NO_PASSWORD',
                                            'EXPIRED' => 'EXPIRED',
                                            'NOT_CONFIGURED' => 'NOT_CONFIGURED',
                                            'OK' => 'OK',
                                        ],
                                        'example' => 'OK',
                                    ],
                                    'ExipreTime' => [
                                        'description' => '证书过期时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1764561600000',
                                    ],
                                ],
                            ],
                            'DevelopmentCertInfo' => [
                                'description' => '访问开发环境/沙箱环境的证书信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '证书状态，取值：'."\n"
                                            ."\n"
                                            .'- **EXPIRED**：已过期'."\n"
                                            .'- **NOT_CONFIGURED**：未配置'."\n"
                                            .'- **NO_PASSWORD**：未配置密码'."\n"
                                            .'- **OK**：正常'."\n"
                                            .'- **REVOKED**：已撤销',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'REVOKED' => 'REVOKED',
                                            'NO_PASSWORD' => 'NO_PASSWORD',
                                            'EXPIRED' => 'EXPIRED',
                                            'NOT_CONFIGURED' => 'NOT_CONFIGURED',
                                            'OK' => 'OK',
                                        ],
                                        'example' => 'EXPIRED',
                                    ],
                                    'ExipreTime' => [
                                        'description' => '证书过期时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1470024000000',
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
                        'errorCode' => 'Invalid%s.NotFound',
                        'errorMessage' => 'The specified %s is not found.',
                    ],
                    [
                        'errorCode' => 'AccountDisabled',
                        'errorMessage' => 'Your account is not enabled.',
                    ],
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'The specified AppKey is not authorized.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"Android\\": false,\\n  \\"IOS\\": true,\\n  \\"ProductionCertInfo\\": {\\n    \\"Status\\": \\"OK\\",\\n    \\"ExipreTime\\": 1764561600000\\n  },\\n  \\"DevelopmentCertInfo\\": {\\n    \\"Status\\": \\"EXPIRED\\",\\n    \\"ExipreTime\\": 1470024000000\\n  }\\n}","errorExample":""}]',
            'title' => '查询证书状态',
            'summary' => '检测指定app的iOS证书过期时间及当前证书状态。',
            'description' => '- 如果返回的ExpireTime大于当前时间戳，并不代表证书一定可用，还需检查Status是否为OK。'."\n"
                .'- REVOKED来源于APNs服务器，如果证书处于REVOKED状态时，则对应环境中至少有一条推向APNs的推送失败。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryPushRecords' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '333526247',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始时间，UTC时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-09-15T02:05:24Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，UTC时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-09-29T06:24:58Z',
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送类型。取值：'."\n"
                            ."\n"
                            .'- **MESSAGE**：表示消息。'."\n"
                            ."\n"
                            .'- **NOTICE**：表示通知。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NOTICE',
                        'enum' => [
                            'MESSAGE',
                            'NOTICE',
                        ],
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送目标：'."\n"
                            ."\n"
                            .'- **DEVICE**：根据设备推送。'."\n"
                            ."\n"
                            .'- **ACCOUNT**：根据账号推送。'."\n"
                            ."\n"
                            .'- **ALIAS**：根据别名推送。'."\n"
                            ."\n"
                            .'- **TAG**：根据标签推送。'."\n"
                            ."\n"
                            .'- **ALL**：推送给全部设备。'."\n"
                            ."\n"
                            .'- **TBD**：初始化持续推送，推送目标由后续的ContinuouslyPush接口指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DEVICE',
                        'enum' => [
                            'ACCOUNT',
                            'ALIAS',
                            'DEVICE',
                            'TAG',
                            'TBD',
                            'FILE',
                            'ALL',
                        ],
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送来源。可取值：'."\n"
                            ."\n"
                            .'- **API**：OpenAPI发起的推送，含OpenAPI平台控制台发起的推送。'."\n"
                            ."\n"
                            .'- **CONSOLE**：通过移动推送控制台推送。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'API',
                        'enum' => [
                            'CONSOLE',
                            'API',
                            'OpenAPIExplorer',
                        ],
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字，根据MessageId、Title、Body字段进行查询。系统对推送的title和body进行了中文分词，使用分词进行查询，非子字符串匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '统计数据测试通知805',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '废弃参数，不再使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFPpkmhCPm*****************xjk=',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的条目数量，默认值为20, 最大为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送记录的当前页数, 默认为1，最大10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '8',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '废弃参数，不再使用。',
                                'type' => 'string',
                                'example' => 'i91D***********kXIh/dVBEQ==',
                            ],
                            'PageSize' => [
                                'description' => '每页的条目数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B24B396-249D-55E4-8CA1-66C9B50BB734',
                            ],
                            'Total' => [
                                'description' => '记录总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '193',
                            ],
                            'Page' => [
                                'description' => '推送记录的当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '11',
                            ],
                            'PushInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'PushInfo' => [
                                        'description' => '具体通知/消息的详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '消息状态。可取值：'."\n"
                                                        ."\n"
                                                        .'- **WAITING**：等待中。'."\n"
                                                        ."\n"
                                                        .'- **SENT**：已推送。'."\n"
                                                        ."\n"
                                                        .'- **CANCELED**：已取消。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'SENT',
                                                ],
                                                'MessageId' => [
                                                    'description' => '消息ID。',
                                                    'type' => 'string',
                                                    'example' => '510431',
                                                ],
                                                'AppKey' => [
                                                    'description' => 'AppKey信息。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '333526247',
                                                ],
                                                'DeviceType' => [
                                                    'description' => '设备类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **ALL**：所有类型。'."\n"
                                                        ."\n"
                                                        .'- **IOS**：iOS设备。'."\n"
                                                        ."\n"
                                                        .'- **ANDROID**：Android设备。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'ALL' => 'ALL',
                                                        'IOS' => 'IOS',
                                                        'ANDROID' => 'ANDROID',
                                                    ],
                                                    'example' => 'ANDROID',
                                                ],
                                                'PushType' => [
                                                    'description' => '推送类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **MESSAGE**：消息。'."\n"
                                                        ."\n"
                                                        .'- **NOTICE**：通知。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'MESSAGE' => 'MESSAGE',
                                                        'NOTICE' => 'NOTICE',
                                                    ],
                                                    'example' => 'NOTICE',
                                                ],
                                                'Body' => [
                                                    'description' => '推送的body字段。',
                                                    'type' => 'string',
                                                    'example' => 'abcd',
                                                ],
                                                'Title' => [
                                                    'description' => '推送的title字段。',
                                                    'type' => 'string',
                                                    'example' => 'sssss',
                                                ],
                                                'Source' => [
                                                    'description' => '推送源类型。可取值：'."\n"
                                                        ."\n"
                                                        .'- **API**：OpenAPI发起的推送，含OpenAPI平台控制台发起的推送。'."\n"
                                                        ."\n"
                                                        .'- **CONSOLE**：通过移动推送控制台推送。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'CONSOLE' => 'CONSOLE',
                                                        'API' => 'API',
                                                    ],
                                                    'example' => 'DEVICE',
                                                ],
                                                'PushTime' => [
                                                    'description' => '推送时间，UTC时间，ISO-8601格式, 格式为 YYYY-MM-DDThh:mm:ssZ。',
                                                    'type' => 'string',
                                                    'example' => '2021-09-15T02:05:24Z',
                                                ],
                                                'Target' => [
                                                    'description' => '推送目标：'."\n"
                                                        ."\n"
                                                        .'- **ACCOUNT**：根据账号推送。'."\n"
                                                        ."\n"
                                                        .'- **ALIAS**：根据别名推送。'."\n"
                                                        ."\n"
                                                        .'- **DEVICE**：根据设备推送。'."\n"
                                                        ."\n"
                                                        .'- **TAG**：根据标签推送。'."\n"
                                                        ."\n"
                                                        .'- **ALL**：推送给全部设备。'."\n"
                                                        ."\n"
                                                        .'- **TBD**：初始化持续推送，推送目标由后续的ContinuouslyPush接口指定。',
                                                    'type' => 'string',
                                                    'example' => 'DEVICE',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AccountDisabled',
                        'errorMessage' => 'Your account is not enabled.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request processing is timeout.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"i91D***********kXIh/dVBEQ==\\",\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"9B24B396-249D-55E4-8CA1-66C9B50BB734\\",\\n  \\"Total\\": 193,\\n  \\"Page\\": 11,\\n  \\"PushInfos\\": {\\n    \\"PushInfo\\": [\\n      {\\n        \\"Status\\": \\"SENT\\",\\n        \\"MessageId\\": \\"510431\\",\\n        \\"AppKey\\": 333526247,\\n        \\"DeviceType\\": \\"ANDROID\\",\\n        \\"PushType\\": \\"NOTICE\\",\\n        \\"Body\\": \\"abcd\\",\\n        \\"Title\\": \\"sssss\\",\\n        \\"Source\\": \\"DEVICE\\",\\n        \\"PushTime\\": \\"2021-09-15T02:05:24Z\\",\\n        \\"Target\\": \\"DEVICE\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPushRecordsResponse>\\n    <Page>1</Page>\\n    <PageSize>20</PageSize>\\n    <PushInfos>\\n        <PushInfo>\\n            <AppKey>23419851</AppKey>\\n            <Body>云智能测试推送内容</Body>\\n            <DeviceType>ANDROID</DeviceType>\\n            <MessageId>60**************</MessageId>\\n            <PushTime>2023-01-01T08:12:34Z</PushTime>\\n            <PushType>NOTICE</PushType>\\n            <Source>API</Source>\\n            <Status>SENT</Status>\\n            <Target>DEVICE</Target>\\n            <Title>通知标题</Title>\\n        </PushInfo>\\n    </PushInfos>\\n    <RequestId>DCA3F8E3-8D6A-5492-B059-48F56B022D8E</RequestId>\\n    <Total>1</Total>\\n</QueryPushRecordsResponse>","errorExample":""}]',
            'title' => '查询推送记录',
            'summary' => '分页查询推送记录，并提供一些简单的筛选能力。',
        ],
        'QueryDeviceStat' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .'> 统计开始日期为开始时间当天北京时间0点。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2016-07-28T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .'> 统计结束日期为结束时间当天。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2016-07-29T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备类型，取值范围为：'."\n"
                            ."\n"
                            .'- **iOS**：iOS设备'."\n"
                            .'- **ANDROID**：Android设备'."\n"
                            .'- **ALL**：全部类型设备',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'ALL' => 'ALL',
                            'ANDROID' => 'ANDROID',
                            'iOS' => 'iOS',
                        ],
                        'example' => 'iOS',
                        'enum' => [
                            'iOS',
                            'ANDROID',
                            'ALL',
                        ],
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的是新增设备数还是历史累计设备数。可取值：'."\n"
                            ."\n"
                            .'- **NEW**：新增设备'."\n"
                            .'- **TOTAL**：累计设备数',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TOTAL',
                        'enum' => [
                            'NEW',
                            'TOTAL',
                        ],
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'AppDeviceStats' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppDeviceStat' => [
                                        'description' => '设备统计数据AppDeviceStat组成的数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备统计数据对象AppDeviceStat。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Time' => [
                                                    'description' => '截止时间。时间格式按照ISO8601标准表示，并使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。',
                                                    'type' => 'string',
                                                    'example' => '2016-07-28T16:00:00Z',
                                                ],
                                                'DeviceType' => [
                                                    'description' => '设备类型。',
                                                    'type' => 'string',
                                                    'example' => 'iOS',
                                                ],
                                                'Count' => [
                                                    'description' => '设备数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"AppDeviceStats\\": {\\n    \\"AppDeviceStat\\": [\\n      {\\n        \\"Time\\": \\"2016-07-28T16:00:00Z\\",\\n        \\"DeviceType\\": \\"iOS\\",\\n        \\"Count\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceStatResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <AppDeviceStats>\\n        <Time>2016-07-27T16:00:00Z</Time>\\n        <DeviceType>iOS</DeviceType>\\n        <Count>90</Count>\\n    </AppDeviceStats>\\n    <AppDeviceStats>\\n        <Time>2016-07-28T16:00:00Z</Time>\\n        <DeviceType>iOS</DeviceType>\\n        <Count>100</Count>\\n    </AppDeviceStats>\\n</QueryDeviceStatResponse>","errorExample":""}]',
            'title' => '设备新增与留存',
            'summary' => '查询app维度的设备统计。',
            'description' => '> 目前只支持返回天的数据，天维度最多支持查31天内数据，天以北京时间为准。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryUniqueDeviceStat' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始时间，ISO-8601格式，格式为 YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2016-07-25T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，ISO-8601格式，格式为 YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2016-07-26T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按天或者按月查询。可取值：'."\n"
                            ."\n"
                            .'- DAY：天'."\n"
                            .'- MONTH：月',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DAY',
                        'enum' => [
                            'DAY',
                            'MONTH',
                        ],
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'AppDeviceStats' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppDeviceStat' => [
                                        'description' => '设备统计数据AppDeviceStat组成的数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备统计数据对象AppDeviceStat。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Time' => [
                                                    'description' => '时间片。',
                                                    'type' => 'string',
                                                    'example' => '2016-07-25T00:00:00Z',
                                                ],
                                                'Count' => [
                                                    'description' => '去重设备数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"AppDeviceStats\\": {\\n    \\"AppDeviceStat\\": [\\n      {\\n        \\"Time\\": \\"2016-07-25T00:00:00Z\\",\\n        \\"Count\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryUniqueDeviceStatResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <AppDeviceStats>\\n      <AppDeviceStat>\\n        <Time>2016-07-25T00:00:00Z</Time>\\n        <Count>100</Count>\\n      </AppDeviceStat>\\n      <AppDeviceStat>\\n        <Time>2016-07-26T00:00:00Z</Time>\\n        <Count>100</Count>\\n      </AppDeviceStat>\\n    </AppDeviceStats>\\n</QueryUniqueDeviceStatResponse>","errorExample":""}]',
            'title' => '去重设备统计',
            'summary' => '查询app维度的去重设备统计。',
            'description' => '> 目前只支持返回天的数据，天维度最多支持查31天内数据。去重设备统计是以月为周期计数，每个月月初都会清零重新计数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryDeviceInfo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23419851',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备在推送系统中的唯一标识，一次只能查询一个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a64ae296f3b04a58a05b30c9****',
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
                                'example' => '6EEF262B-EA7D-41DC-89B9-20F3D1E28194',
                            ],
                            'DeviceInfo' => [
                                'description' => '设备详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'description' => '设备绑定的账户。',
                                        'type' => 'string',
                                        'example' => 'test@aliyun.com',
                                    ],
                                    'LastOnlineTime' => [
                                        'description' => '最近一次上线时间。',
                                        'type' => 'string',
                                        'example' => '2018-03-27T02:19:40Z',
                                    ],
                                    'PhoneNumber' => [
                                        'description' => '手机号。',
                                        'type' => 'string',
                                        'example' => '133********',
                                    ],
                                    'PushEnabled' => [
                                        'description' => '是否开启推送功能。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'DeviceType' => [
                                        'description' => '设备类型。',
                                        'type' => 'string',
                                        'example' => 'iOS',
                                    ],
                                    'DeviceId' => [
                                        'description' => '设备ID。',
                                        'type' => 'string',
                                        'example' => 'a64ae296f3b04a58a05b30c95****',
                                    ],
                                    'Online' => [
                                        'description' => '是否在线。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Tags' => [
                                        'description' => '设备绑定的标签。',
                                        'type' => 'string',
                                        'example' => 'test_tag,test_tag2',
                                    ],
                                    'DeviceToken' => [
                                        'description' => '设备令牌。',
                                        'type' => 'string',
                                        'example' => '5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df',
                                    ],
                                    'Alias' => [
                                        'description' => '设备绑定的别名。',
                                        'type' => 'string',
                                        'example' => 'test_alias,test_alias2',
                                    ],
                                    'Brand' => [
                                        'description' => '设备品牌',
                                        'type' => 'string',
                                        'example' => 'HUAWEI',
                                    ],
                                    'Model' => [
                                        'description' => '设备型号',
                                        'type' => 'string',
                                        'example' => 'VOG-AL00',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6EEF262B-EA7D-41DC-89B9-20F3D1E28194\\",\\n  \\"DeviceInfo\\": {\\n    \\"Account\\": \\"test@aliyun.com\\",\\n    \\"LastOnlineTime\\": \\"2018-03-27T02:19:40Z\\",\\n    \\"PhoneNumber\\": \\"133********\\",\\n    \\"PushEnabled\\": true,\\n    \\"DeviceType\\": \\"iOS\\",\\n    \\"DeviceId\\": \\"a64ae296f3b04a58a05b30c95****\\",\\n    \\"Online\\": false,\\n    \\"Tags\\": \\"test_tag,test_tag2\\",\\n    \\"DeviceToken\\": \\"5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df\\",\\n    \\"Alias\\": \\"test_alias,test_alias2\\",\\n    \\"Brand\\": \\"HUAWEI\\",\\n    \\"Model\\": \\"VOG-AL00\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceInfoResponse>\\n    <RequestId>6EEF262B-EA7D-41DC-89B9-20F3D1E28194</RequestId>\\n    <DeviceInfo>\\n        <Account>test@aliyun.com</Account>\\n        <LastOnlineTime>2018-03-27T02:19:40Z</LastOnlineTime>\\n        <PhoneNumber>133********</PhoneNumber>\\n        <PushEnabled>true</PushEnabled>\\n        <DeviceType>iOS</DeviceType>\\n        <DeviceId>a64ae296f3b04a58a05b30c95****</DeviceId>\\n        <Online>false</Online>\\n        <Tags>test_tag,test_tag2</Tags>\\n        <DeviceToken>5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df</DeviceToken>\\n        <Alias>test_alias,test_alias2</Alias>\\n    </DeviceInfo>\\n</QueryDeviceInfoResponse>","errorExample":""}]',
            'title' => '查询设备详情',
            'summary' => '查询指定设备详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryPushStatByApp' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2016-07-25T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2016-07-29T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的数据粒度，**HOUR**：是小时粒度，**DAY**：是天粒度。'."\n"
                            ."\n"
                            .'小时粒度允许查24小时内数据，天粒度允许查31内天数据，目前只支持天粒度查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DAY',
                        'enum' => [
                            'DAY',
                        ],
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'AppPushStats' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppPushStat' => [
                                        'description' => 'APP推送统计AppPushStat组成的数据，根据时间粒度返回数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Time' => [
                                                    'description' => '时间。',
                                                    'type' => 'string',
                                                    'example' => '2016-07-25T00:00:00Z',
                                                ],
                                                'DeletedCount' => [
                                                    'description' => '通知在设备上被清除的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'OpenedCount' => [
                                                    'description' => '通知在设备上被点击的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '30',
                                                ],
                                                'SmsReceiveSuccessCount' => [
                                                    'description' => '可为空，短信复合推送成功收到的短信数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SmsSkipCount' => [
                                                    'description' => '可为空，短信复合推送跳过发送短信的数目，例如未绑手机号。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SmsReceiveFailedCount' => [
                                                    'description' => '可为空，短信复合推送发出但是手机未收到的短信数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SmsFailedCount' => [
                                                    'description' => '可为空，短信复合推送短信发送失败的数目，例如未开通对应服务、未授权通过、参数错误等。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'ReceivedCount' => [
                                                    'description' => '实际送达到设备的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '60',
                                                ],
                                                'SentCount' => [
                                                    'description' => '推送服务端实际发出的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'SmsSentCount' => [
                                                    'description' => '可为空，短信复合推送发出的短信数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'AcceptCount' => [
                                                    'description' => '推送服务端接收到的推送数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '120',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"AppPushStats\\": {\\n    \\"AppPushStat\\": [\\n      {\\n        \\"Time\\": \\"2016-07-25T00:00:00Z\\",\\n        \\"DeletedCount\\": 10,\\n        \\"OpenedCount\\": 30,\\n        \\"SmsReceiveSuccessCount\\": 0,\\n        \\"SmsSkipCount\\": 0,\\n        \\"SmsReceiveFailedCount\\": 0,\\n        \\"SmsFailedCount\\": 0,\\n        \\"ReceivedCount\\": 60,\\n        \\"SentCount\\": 100,\\n        \\"SmsSentCount\\": 0,\\n        \\"AcceptCount\\": 120\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryPushStatByAppResponse>\\n   <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <AppPushStats>\\n      <AppPushStat>\\n        <Time>2016-07-25T00:00:00Z</Time>\\n        <AcceptCount>120</AcceptCount>\\n        <SentCount>100</SentCount>\\n        <ReceivedCount>60</ReceivedCount>\\n        <OpenedCount>30</OpenedCount>\\n        <DeletedCount>10</DeletedCount>\\n      </AppPushStat>\\n      <AppPushStat>\\n        <time>2016-07-29T00:00:00Z</time>\\n        <AcceptCount>120</AcceptCount>\\n        <SentCount>100</SentCount>\\n        <ReceivedCount>60</ReceivedCount>\\n        <OpenedCount>30</OpenedCount>\\n        <DeletedCount>10</DeletedCount>\\n      </AppPushStat>\\n    </AppPushStats>\\n</QueryPushStatByAppResponse>","errorExample":""}]',
            'title' => 'App维度推送统计',
            'summary' => '查询app维度的推送统计。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryPushStatByMsg' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送的消息ID，推送之后会返回该ID。'."\n"
                            .'> 推送数据隔天展示，不支持查询今日数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => '510427',
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
                                'example' => 'CF195C34-98FB-491A-98D7-19CBC1FA880B',
                            ],
                            'PushStats' => [
                                'type' => 'object',
                                'properties' => [
                                    'PushStat' => [
                                        'description' => '消息/通知的推送结果统计PushStat组成的数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MessageId' => [
                                                    'description' => '消息ID。',
                                                    'type' => 'string',
                                                    'example' => '510427',
                                                ],
                                                'DeletedCount' => [
                                                    'description' => '通知在设备上被清除的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'OpenedCount' => [
                                                    'description' => '通知在设备上被点击的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '30',
                                                ],
                                                'SmsReceiveSuccessCount' => [
                                                    'description' => '（可为空）短信复合推送成功收到的短信数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SmsSkipCount' => [
                                                    'description' => '（可为空）短信复合推送跳过发送短信的数目，例如未绑手机号。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SmsReceiveFailedCount' => [
                                                    'description' => '（可为空）短信复合推送发出但是手机未收到的短信数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SmsFailedCount' => [
                                                    'description' => '（可为空）短信复合推送短信发送失败的数目，例如未开通对应服务、未授权通过、参数错误等。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'ReceivedCount' => [
                                                    'description' => '实际送达到设备的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '60',
                                                ],
                                                'SentCount' => [
                                                    'description' => '推送服务端实际发出的数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'SmsSentCount' => [
                                                    'description' => '（可为空）短信复合推送发出的短信数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'AcceptCount' => [
                                                    'description' => '推送服务端接收到的推送数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '120',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF195C34-98FB-491A-98D7-19CBC1FA880B\\",\\n  \\"PushStats\\": {\\n    \\"PushStat\\": [\\n      {\\n        \\"MessageId\\": \\"510427\\",\\n        \\"DeletedCount\\": 10,\\n        \\"OpenedCount\\": 30,\\n        \\"SmsReceiveSuccessCount\\": 0,\\n        \\"SmsSkipCount\\": 0,\\n        \\"SmsReceiveFailedCount\\": 0,\\n        \\"SmsFailedCount\\": 0,\\n        \\"ReceivedCount\\": 60,\\n        \\"SentCount\\": 100,\\n        \\"SmsSentCount\\": 0,\\n        \\"AcceptCount\\": 120\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryPushStatByMsgResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <PushStats>\\n      <PushStat>\\n        <MessageId>510427</MessageId>\\n        <AcceptCount>120</AcceptCount>\\n        <SentCount>100</SentCount>\\n        <ReceivedCount>60</ReceivedCount>\\n        <OpenedCount>30</OpenedCount>\\n        <DeletedCount>10</DeletedCount>\\n      </PushStat>\\n    </PushStats>\\n</QueryPushStatByMsgResponse>","errorExample":""}]',
            'title' => '任务维度推送统计',
            'summary' => '查询消息维度的推送统计。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckDevices' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23419851',
                    ],
                ],
                [
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备在推送的唯一标识，32位，数字和小写字母组合，多个设备查询用“,”分隔，一次最多查100个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ae296f3b04a58a05b30c95f****,ae296f3b04a58a05b30c95f****,ae296f3b04a58a05b30c95f****',
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
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'DeviceCheckInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'DeviceCheckInfo' => [
                                        'description' => '批量设备有效性检查结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceId' => [
                                                    'description' => '设备ID。',
                                                    'type' => 'string',
                                                    'example' => 'ae296f3b04a58a05b30c95f****',
                                                ],
                                                'Available' => [
                                                    'description' => '是否可用。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"DeviceCheckInfos\\": {\\n    \\"DeviceCheckInfo\\": [\\n      {\\n        \\"DeviceId\\": \\"ae296f3b04a58a05b30c95f****\\",\\n        \\"Available\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<CheckDevicesResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <DeviceCheckInfos>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>false</Available>\\n        </DeviceCheckInfo>\\n    </DeviceCheckInfos>\\n</CheckDevicesResponse>","errorExample":""}]',
            'title' => '批量检查设备有效性',
            'summary' => '验证指定的一组设备的有效性。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckDevice' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23419851',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ae296f3b04a58a05b30c95f****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Available' => [
                                'description' => '是否可用。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'Push::2016-08-01::CheckDevices',
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Available\\": true,\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<CheckDevicesResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <DeviceCheckInfos>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>false</Available>\\n        </DeviceCheckInfo>\\n    </DeviceCheckInfos>\\n</CheckDevicesResponse>","errorExample":""}]',
            'title' => '验证设备有效性',
            'summary' => '验证指定设备的有效性。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BindTag' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'ClientKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备或account或alias，多个key用逗号分隔，最多支持1000个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e2ba19de97604f55b16557673****',
                    ],
                ],
                [
                    'name' => 'KeyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ClientKey的类型。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：设备'."\n"
                            .'- **ACCOUNT**：账号'."\n"
                            .'- **ALIAS**：别名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEVICE',
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的Tag，多个Tag用逗号分隔，一次最多能绑定10个Tag。标签名称设置要小于等于128个字符（中文算1个），每个App最多可创建10000个标签，单设备可以绑定多个标签。'."\n"
                            .'>不建议在单个标签上绑定超过十万级设备，否则，发起对该标签的推送可能需要较长的处理时间，无法保障响应速度。此种情况下，建议您采用全推方式，或将设备集合拆分到更细粒度的标签，多次调用推送接口分别推送给这些标签来避免此问题。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_tag,test_tag2',
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
                                'example' => '82FD0A09-5BB8-40FB-8221-9A11FE92D620',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AccountDisabled',
                        'errorMessage' => 'Your account is not enabled.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.Format',
                        'errorMessage' => 'The specified %s format is invalid.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.NotFound',
                        'errorMessage' => 'The specified %s is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"82FD0A09-5BB8-40FB-8221-9A11FE92D620\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<BindTagResponse>\\n    <RequestId>82FD0A09-5BB8-40FB-8221-9A11FE92D620</RequestId>\\n</BindTagResponse>","errorExample":""}]',
            'title' => '绑定标签',
            'summary' => '将TAG绑定到指定的目标（设备、账号或别名），TAG绑定在10分钟内生效。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnbindTag' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'ClientKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备、账号或别名，多个key用逗号分隔，最多支持1000个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e2ba19de97604f55b16557673****',
                    ],
                ],
                [
                    'name' => 'KeyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ClientKey的类型。可取值：'."\n"
                            ."\n"
                            .'- **DEVICE**：设备'."\n"
                            .'- **ACCOUNT**：账号'."\n"
                            .'- **ALIAS**：别名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEVICE',
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的Tag，多个Tag用逗号分隔，系统总共支持1万个Tag，此接口一次最多能解绑10个Tag。长度限制：不大于128字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_tag1,test_tag2',
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
                                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\"\\n}","type":"json"}]',
            'title' => '解绑标签',
            'summary' => '解绑指定的TAG和其目标之间的关系。',
        ],
        'RemoveTag' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的Tag名称。单次只能删除一个Tag。长度限制：不大于128字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_tag',
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
                                'example' => '23000F3C-0EFE-4C89-82EE-E04F42D37B3C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23000F3C-0EFE-4C89-82EE-E04F42D37B3C\\"\\n}","type":"json"}]',
            'title' => '删除标签',
            'summary' => '删除app下的TAG。',
            'description' => '标签删除需要一定的删除时间，这个时间根据绑定该标签的目标数而定，请勿在删除标签后短时间内重新创建同名标签，或批量删除标签后批量重新创建标签。建议同一个app删除和创建同一名称tag的间隔时间不小于5分钟，批量删除后创建tag建议间隔时间不小于删除数量×5分钟。',
        ],
        'QueryTags' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'ClientKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备、账号或别名， 每次只能查询1个clientKey。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e2ba19de97604f55b165576****',
                    ],
                ],
                [
                    'name' => 'KeyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ClientKey的类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'ACCOUNT' => '账号',
                            'ALIAS' => '别名',
                            'DEVICE' => '设备',
                        ],
                        'example' => 'DEVICE',
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
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
                                'example' => 'D68AE5C6-8AAF-46C9-B627-3FDACD1A4168',
                            ],
                            'TagInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagInfo' => [
                                        'description' => 'Tag列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagName' => [
                                                    'description' => '绑定的Tag名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_tag2',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68AE5C6-8AAF-46C9-B627-3FDACD1A4168\\",\\n  \\"TagInfos\\": {\\n    \\"TagInfo\\": [\\n      {\\n        \\"TagName\\": \\"test_tag2\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTagsResponse>\\n    <RequestId>1197FEB8-3644-4355-A96D-E332F45470EA</RequestId>\\n    <TagInfos>\\n        <TagInfo>\\n            <TagName>test_tag2</TagName>\\n        </TagInfo>\\n        <TagInfo>\\n            <TagName>test_tag1</TagName>\\n        </TagInfo>\\n    </TagInfos>\\n</QueryTagsResponse>","errorExample":""}]',
            'title' => '查询标签列表',
            'summary' => '查询指定对象（设备、账号或别名）的TAG列表。',
        ],
        'ListTags' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
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
                                'example' => '6EEF262B-EA7D-41DC-89B9-20F3D1E28194',
                            ],
                            'TagInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagInfo' => [
                                        'description' => 'Tag列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagName' => [
                                                    'description' => 'Tag名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_tag2',
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
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request processing is timeout.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6EEF262B-EA7D-41DC-89B9-20F3D1E28194\\",\\n  \\"TagInfos\\": {\\n    \\"TagInfo\\": [\\n      {\\n        \\"TagName\\": \\"test_tag2\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取标签列表',
            'summary' => '查询app的标签列表，最多返回100条记录。',
        ],
        'BindAlias' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e2ba19de97604f55b16557673****',
                    ],
                ],
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要绑定的别名。'."\n"
                            ."\n"
                            .'一次最多只能绑定10个，多个alias用逗号分隔，alias最长128个字节（中文算三个字节），一个设备最多绑定128个别名，一个别名最多允许绑定128个设备。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_alias',
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
                                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Invalid%s.Format',
                        'errorMessage' => 'The specified %s format is invalid.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.BytesExceed',
                        'errorMessage' => 'The specified %s exceeds the %s bytes limit.',
                    ],
                    [
                        'errorCode' => 'AccountDisabled',
                        'errorMessage' => 'Your account is not enabled.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.NotFound',
                        'errorMessage' => 'The specified %s is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\"\\n}","errorExample":""},{"type":"xml","example":"<BindAliasResponse>\\n    <RequestId>159E4422-6624-4750-8943-DFD98D34858C</RequestId>\\n</BindAliasResponse>","errorExample":""}]',
            'title' => '绑定别名',
            'summary' => '绑定设备和别名的关系。',
            'description' => '一次最多绑定10个别名，绑定之后立即生效。',
        ],
        'UnbindAlias' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e2ba19de97604f55b16557673****',
                    ],
                ],
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要绑定的alias。'."\n"
                            ."\n"
                            .'Alias支持128个字节（一个中文字符算3个字节），当“UnbindAll”为”false”时该字段必填，一次最多解绑10个，多个alias用逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_alias',
                    ],
                ],
                [
                    'name' => 'UnbindAll',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否全部解绑，默认为”false”。'."\n"
                            ."\n"
                            .'如果值为”true”，则解绑一个设备当前绑定的所有别名；如果值为”false”，则解绑”AliasName”指定的别名。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<UnbindAliasResponse>\\n    <RequestId>82FD0A09-5BB8-40FB-8221-9A11FE92D620</RequestId>\\n</UnbindAliasResponse>","errorExample":""}]',
            'title' => '解绑别名',
            'summary' => '解绑别名，解绑立即生效。',
        ],
        'QueryAliases' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e2ba19de97604f55b165576****',
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
                                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
                            ],
                            'AliasInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'AliasInfo' => [
                                        'description' => '别名列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AliasName' => [
                                                    'description' => '别名名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_alias1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\",\\n  \\"AliasInfos\\": {\\n    \\"AliasInfo\\": [\\n      {\\n        \\"AliasName\\": \\"test_alias1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryAliasesResponse>\\n    <RequestId>159E4422-6624-4750-8943-DFD98D34858C</RequestId>\\n    <AliasInfos>\\n        <AliasName>test_alias1</AliasName>\\n    </AliasInfos>\\n</QueryAliasesResponse>","errorExample":""}]',
            'title' => '查询别名',
            'summary' => '查询指定设备绑定的别名列表。',
        ],
        'QueryDevicesByAlias' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'Alias',
                    'in' => 'query',
                    'schema' => [
                        'description' => '别名，一次仅支持查询一个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_alias',
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
                                'example' => '6A9FD644-35A5-40E4-89B0-2021CAEDC1B4',
                            ],
                            'DeviceIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'DeviceId' => [
                                        'description' => '设备ID列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备ID',
                                            'type' => 'string',
                                            'example' => 'f6e43770afb944a1a879b4613****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6A9FD644-35A5-40E4-89B0-2021CAEDC1B4\\",\\n  \\"DeviceIds\\": {\\n    \\"DeviceId\\": [\\n      \\"f6e43770afb944a1a879b4613****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '通过别名查询设备列表',
            'summary' => '通过别名查询对应的设备列表。',
        ],
        'QueryDevicesByAccount' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户名称，一次仅支持查询一个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_account',
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
                                'example' => 'A8A24108-2AD0-4F6E-81C7-A8A24C2C2AD0',
                            ],
                            'DeviceIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'DeviceId' => [
                                        'description' => '设备ID列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备ID',
                                            'type' => 'string',
                                            'example' => 'f6e43770afb944a1a879b46130ZZ****',
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
                        'errorCode' => 'AccountLimitExceed',
                        'errorMessage' => 'The number of devices bound to the account exceeds 10000.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A8A24108-2AD0-4F6E-81C7-A8A24C2C2AD0\\",\\n  \\"DeviceIds\\": {\\n    \\"DeviceId\\": [\\n      \\"f6e43770afb944a1a879b46130ZZ****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '通过账户查询设备列表',
            'summary' => '通过账户名称查询对应的设备列表。',
        ],
        'BindPhone' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => '27725900',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备的唯一标识，32位，数字和小写字母组合。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'eb5f741d83d04d34807d229999eefa52',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电话号码。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => '1381111****',
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
                                'example' => '0D1126F0-F8FF-513D-BAFA-F140447BDED4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0D1126F0-F8FF-513D-BAFA-F140447BDED4\\"\\n}","errorExample":""},{"type":"xml","example":"<BindPhoneResponse>\\n    <RequestId>0D1126F0-F8FF-513D-BAFA-F140447BDED4</RequestId>\\n</BindPhoneResponse>","errorExample":""}]',
            'title' => '绑定手机号码',
            'summary' => '绑定设备与手机号的关系。',
        ],
        'UnbindPhone' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppKey信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '23267207',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备的唯一标识，32位，数字和小写字母组合。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eb5f741d83d04d34807d229999eefa52',
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
                                'example' => '0D1126F0-F8FF-513D-BAFA-F140447BDED4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0D1126F0-F8FF-513D-BAFA-F140447BDED4\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindPhoneResponse>\\n    <RequestId>0D1126F0-F8FF-513D-BAFA-F140447BDED4</RequestId>\\n</UnbindPhoneResponse>","errorExample":""}]',
            'title' => '解绑手机号码',
            'summary' => '解绑指定设备上已绑定的手机号码。',
        ],
        'ListSummaryApps' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
                            ],
                            'SummaryAppInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'SummaryAppInfo' => [
                                        'description' => 'app详情，SummaryAppInfo组成的集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppName' => [
                                                    'description' => '应用的名称。',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                                'AppKey' => [
                                                    'description' => 'AppKey信息。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '23****07',
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
            'staticInfo' => [
                'substitutions' => [
                    'Mhub::2017-08-25::ListApps',
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"SummaryAppInfos\\": {\\n    \\"SummaryAppInfo\\": [\\n      {\\n        \\"AppName\\": \\"abc\\",\\n        \\"AppKey\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSummaryAppsResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <SummaryAppInfos>\\n        <AppName>abc</AppName>\\n    </SummaryAppInfos>\\n</ListSummaryAppsResponse>","errorExample":""}]',
            'title' => '查询用户已创建的app列表',
            'summary' => '查询云账号下所有app的列表。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
    ],
];
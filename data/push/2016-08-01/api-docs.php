<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Push',
    'version' => '2016-08-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 165111,
      'title' => '推送相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'MassPush',
        1 => 'Push',
        2 => 'ContinuouslyPush',
        3 => 'CompleteContinuouslyPush',
        4 => 'CancelPush',
        5 => 'PushMessageToAndroid',
        6 => 'PushMessageToiOS',
        7 => 'PushNoticeToAndroid',
        8 => 'PushNoticeToiOS',
      ),
    ),
    1 => 
    array (
      'id' => 165112,
      'title' => '查询相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckCertificate',
        1 => 'QueryPushRecords',
        2 => 'QueryDeviceStat',
        3 => 'QueryUniqueDeviceStat',
        4 => 'QueryDeviceInfo',
        5 => 'QueryPushStatByApp',
        6 => 'QueryPushStatByMsg',
        7 => 'CheckDevices',
        8 => 'CheckDevice',
      ),
    ),
    2 => 
    array (
      'id' => 95678,
      'title' => '标签相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindTag',
        1 => 'UnbindTag',
        2 => 'RemoveTag',
        3 => 'QueryTags',
        4 => 'ListTags',
      ),
    ),
    3 => 
    array (
      'id' => 165138,
      'title' => '别名相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindAlias',
        1 => 'UnbindAlias',
        2 => 'QueryAliases',
        3 => 'QueryDevicesByAlias',
      ),
    ),
    4 => 
    array (
      'id' => 95697,
      'title' => '账号相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryDevicesByAccount',
      ),
    ),
    5 => 
    array (
      'id' => 95671,
      'title' => '其他接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindPhone',
        1 => 'UnbindPhone',
        2 => 'ListSummaryApps',
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
    'MassPush' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'PushTask',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '独立推送任务组成的数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '独立推送任务。',
              'type' => 'object',
              'properties' => 
              array (
                'PushType' => 
                array (
                  'description' => '推送类型。取值：

- MESSAGE：表示消息。
- NOTICE：表示通知。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'MESSAGE' => 'MESSAGE',
                    'NOTICE' => 'NOTICE',
                  ),
                  'example' => 'MESSAGE',
                ),
                'DeviceType' => 
                array (
                  'description' => '设备类型，取值范围为：

- iOS：iOS设备
- ANDROID：Android设备
- ALL：全部类型设备

> 该参数仅对旧的不分端app有意义。新的分端app下，该参数填写”ALL”或与app分端类型对应的值均可。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'ALL' => 'ALL',
                    'ANDROID' => 'ANDROID',
                    'iOS' => 'iOS',
                  ),
                  'example' => 'ALL',
                ),
                'Target' => 
                array (
                  'description' => '推送目标。可取值：

- DEVICE：根据设备推送。
- ACCOUNT：根据账号推送。
- ALIAS：根据别名推送。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'ACCOUNT' => 'ACCOUNT',
                    'ALIAS' => 'ALIAS',
                    'DEVICE' => 'DEVICE',
                  ),
                  'example' => 'DEVICE',
                ),
                'TargetValue' => 
                array (
                  'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid1,deviceid2`（最多支持1000个）。
- Target=ACCOUNT，值如`account1,account2`（最多支持1000个）。
- Target=ALIAS，值如`alias1,alias2`（最多支持1000个）。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'deviceid1,deviceid2',
                ),
                'StoreOffline' => 
                array (
                  'description' => '离线消息/通知是否保存。StoreOffline默认设置为false。

若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。iOS通知走APNs链路，不受StoreOffline影响。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'SendChannels' => 
                array (
                  'description' => '指定发送通道，取值如下：

- accs：阿里云自有通道
- huawei：华为通道
- honor：荣耀通道
- xiaomi：小米通道
- oppo：OPPO通道
- vivo：vivo通道
- meizu：魅族通道
- gcm：谷歌GCM通道（旧版HTTP）
- fcm: 谷歌Firebase通道（HTTP v1 API）
- apns：APNs通道

>- 如果未配置此参数，则代表所有通道均可使用。
>- 如果配置了此参数，则严格使用参数中的通道。
>- 如果配置的通道和发送策略冲突（如iOS通知仅走APNs通道，但本参数中不包含apns），则不实施发送。
>- 若配置gcm，则可以走谷歌GCM和FCM通道，若配置fcm，则只能走谷歌FCM通道。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'accs,huawei,xiaomi',
                ),
                'PushTime' => 
                array (
                  'description' => '用于定时发送。不设置缺省是立即发送。

时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2019-02-20T00:00:00Z',
                ),
                'ExpireTime' => 
                array (
                  'description' => '离线消息/通知的过期时间，和StoreOffline配合使用，过期则不会再被发送，最长保存72小时。默认为72小时。

时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ，过期时间不能小于当前时间或者定时发送时间加上3秒（`ExpireTime > PushTime+3秒`），3秒是为了冗余网络和系统延迟造成的误差。建议单推不小于1分钟，全推、批量推送不少于10分钟。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2019-02-20T00:00:00Z',
                ),
                'JobKey' => 
                array (
                  'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123',
                ),
                'Title' => 
                array (
                  'description' => '推送时通知/消息的标题，长度限制：200字节。
在Android推送和iOS推送消息时必填；在iOS推送通知时非必填，如果填写，则：
* iOS 10+通知显示标题。
* iOS 8.2 <= iOS系统 < iOS 10：替换通知应用名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'title',
                ),
                'Body' => 
                array (
                  'description' => 'Android推送时通知的内容/消息的内容；iOS消息/通知内容，推送的内容大小是有限制的，参见[产品限制](~~92832~~)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'hello',
                ),
                'Trim' => 
                array (
                  'description' => '是否自动对过长标题、内容进行截断。
注：仅支持明确限制标题、内容的厂商通道，对APNs、华为、荣耀通道等不限制标题、内容，只限制总请求体大小的不适用。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'iOSApnsEnv' => 
                array (
                  'description' => 'iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。

- DEV：表示开发环境。
- PRODUCT：表示生产环境。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'DEV' => 'DEV',
                    'PRODUCT' => 'PRODUCT',
                  ),
                  'example' => 'DEV',
                ),
                'iOSRemind' => 
                array (
                  'description' => '消息推送时设备不在线（即与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。

> 离线消息转通知仅适用于生产环境。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'iOSSubtitle' => 
                array (
                  'description' => 'iOS通知副标题内容（iOS 10+）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'subtitle',
                ),
                'iOSRemindBody' => 
                array (
                  'description' => 'iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=PRODUCT && iOSRemind为true时有效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ios通知body',
                ),
                'iOSMusic' => 
                array (
                  'description' => 'iOS通知声音。指定存放在app bundle或沙盒Library/Sounds目录下的音频文件名，请参见：iOS推送如何设定通知声音。

若指定为空串（””），通知为静音；若不设置，默认填充default为系统提示音。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '””',
                ),
                'iOSBadge' => 
                array (
                  'description' => 'iOS应用图标右上角角标。

> 若iOSBadgeAutoIncrement设置为True，则此项必须为空。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'iOSBadgeAutoIncrement' => 
                array (
                  'description' => '是否开启角标自增功能，默认为false。

>当该项为true时，iOSBadge必须为空。

角标自增功能由推送服务端维护每个设备的角标计数，需要用户使用V1.9.5以上版本的SDK，并且需要用户主动同步角标数字到服务端。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'iOSSilentNotification' => 
                array (
                  'description' => '是否开启iOS静默通知。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'iOSMutableContent' => 
                array (
                  'description' => 'iOS通知处理扩展标记（iOS 10+）。如果设为true，则APNs推送的通知在弹出前，可先到达Extension进行处理。静默通知时，必须设为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'iOSNotificationCategory' => 
                array (
                  'description' => '指定iOS通知Category（iOS 10+）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ios',
                ),
                'iOSNotificationCollapseId' => 
                array (
                  'description' => '设备收到有相同CollapseId的消息，会合并成一条。设备不在线，连续发相同CollapseId的消息，通知栏只会显示一条，iOS 10+支持设置此参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ZD2011',
                ),
                'iOSNotificationThreadId' => 
                array (
                  'description' => '通过该属性对iOS的远程通知进行分组，标记折叠的组别识别名。仅支持iOS 12.0+版本。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'abc',
                ),
                'iOSInterruptionLevel' => 
                array (
                  'description' => '中断级别，取值：

- passive：系统在不点灯、不播放声音的情况下将通知添加到通知列表中。

- active：系统立即显示通知，点亮屏幕，并可以播放声音。

- time-sensitive：系统立即呈现通知，点亮屏幕，并可以播放声音，但不会突破系统通知控制。

- critical：系统立即显示通知，屏幕亮起，并绕过静音开关播放声音。
',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'critical' => 'critical',
                    'time-sensitive' => 'time-sensitive',
                    'active' => 'active',
                    'passive' => 'passive',
                  ),
                  'example' => 'active',
                ),
                'iOSRelevanceScore' => 
                array (
                  'description' => '摘要突出显示分数。取值范围：\\[0,1\\]的浮点数。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'example' => '0.01',
                ),
                'iOSExtParameters' => 
                array (
                  'description' => 'iOS通知的扩展属性。

iOS10+可以在此指定富媒体推送通知的资源Url：`{“attachment”: “https://xxxx.xxx/notification_pic.png"} `。该参数要以Json map的格式传入，否则会解析出错。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{“attachment”: “https://xxxx.xxx/notification_pic.png"} ',
                ),
                'AndroidNotifyType' => 
                array (
                  'description' => '通知的提醒方式。可取值：

- **VIBRATE**：振动（默认值）
- **SOUND**：声音
- **BOTH**：声音和振动
- **NONE**：静音',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'SOUND' => 'SOUND',
                    'NONE' => 'NONE',
                    'VIBRATE' => 'VIBRATE',
                    'BOTH' => 'BOTH',
                  ),
                  'example' => 'VIBRATE',
                ),
                'AndroidRemind' => 
                array (
                  'description' => '推送类型为消息时设备不在线，则这条推送会使用辅助弹窗功能。默认值为false，仅当PushType=MESSAGE时生效。

如果消息转通知推送成功，收到通知是展示的数据为服务端设置的AndroidPopupTitle和AndroidPopupBody参数值，点击通知在辅助弹窗的onSysNoticeOpened方法中获取到的数据是服务端设置的Title和Body参数值。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'AndroidOpenType' => 
                array (
                  'description' => '点击通知后动作。可取值：

- APPLICATION：打开应用（默认值）
- ACTIVITY：打开应用AndroidActivity
- URL：打开URL
- NONE：无跳转',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'APPLICATION' => 'APPLICATION',
                    'NONE' => 'NONE',
                    'ACTIVITY' => 'ACTIVITY',
                    'URL' => 'URL',
                  ),
                  'example' => 'APPLICATION',
                ),
                'AndroidActivity' => 
                array (
                  'description' => '设定通知打开的activity。

仅当PushTask.N.AndroidOpenType=”Activity”时传入，如：`com.alibaba.cloudpushdemo.bizactivity`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'com.alibaba.cloudpushdemo.bizactivity',
                ),
                'AndroidOpenUrl' => 
                array (
                  'description' => 'Android收到推送后打开对应的url。仅当PushTask.N.AndroidOpenType=”URL”时传入。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://xxxx.xxx',
                ),
                'AndroidPopupTitle' => 
                array (
                  'description' => '辅助弹窗模式下标题内容。AndroidPopupActivity参数不为空时，该参数必填。 

长度限制：30字符。

如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'hello',
                ),
                'AndroidPopupBody' => 
                array (
                  'description' => '辅助弹窗模式下Body内容。AndroidPopupActivity参数不为空时，该参数必填。

长度限制：128字符。

如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'hello',
                ),
                'AndroidPopupActivity' => 
                array (
                  'description' => '指定点击通知后跳转的Activity。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'com.alibaba.cloudpushdemo.bizactivity',
                ),
                'AndroidRenderStyle' => 
                array (
                  'description' => '通知样式，取值为：
- **0**：标准模式（默认）
- **1**：长文本模式（支持华为、荣耀、小米、OPPO、魅族、自有通道）
- **2**：大图模式（仅支持小米）
- **3**：列表模式（支持华为、荣耀、小米、OPPO、自有通道）
> 若使用非标准模式，此参数必须提供。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'AndroidBigTitle' => 
                array (
                  'description' => '长文本模式下的标题，长度限制：200个字节（1个汉字算作3字节）。

- 当前仅支持荣耀通道和华为通道EMUI11及以上版本。

- 若长文本模式下未提供此参数，则从Title、AndroidPopupTitle里取第一个非空值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '示例长标题',
                ),
                'AndroidBigBody' => 
                array (
                  'description' => '长文本模式下的body，长度限制：1000字节（1个汉字算作3字节），发送时受具体厂商通道的限制。

当前支持：
- 　华为：EMUI10及以上
- 　荣耀：Magic UI 4.0及以上
- 　小米：MIUI10及以上
- 　OPPO：ColorOS5.0以上
- 　魅族：Flyme
- 　自有通道：安卓SDK3.6.0及以上

若长文本模式下未提供此参数，则从Body、AndroidPopupBody里取第一个非空值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '示例长文本',
                ),
                'AndroidBigPictureUrl' => 
                array (
                  'description' => '大图模式下的图片URL，当前支持：自有通道：安卓SDK3.6.0及以上。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://imag.example.com/image.png',
                ),
                'AndroidXiaomiBigPictureUrl' => 
                array (
                  'description' => '大图模式下的大图URL。大图模式下图片上传至小米推送后会返回一个图片URL，本参数内填写这个URL。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://f6.market.xiaomi.com/download/MiPass/aaa/bbb.png',
                ),
                'AndroidImageUrl' => 
                array (
                  'description' => '大图标URL。当前支持：
- 华为EMUI（仅长文本模式、Inbox模式下适用）
- 荣耀Magic UI（仅长文本模式下适用）
- 自有通道：安卓SDK3.5.0及以上
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://imag.example.com/image.png',
                ),
                'AndroidXiaomiImageUrl' => 
                array (
                  'description' => '大图标URL。当前支持：小米MIUI12及以上（仅长文本模式下适用）。
>上传到小米服务器上，返回的图标URL。具体请参考：[链接](https://dev.mi.com/console/doc/detail?pId=1278#_3_3)。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://imag.example.com/image.png',
                ),
                'AndroidInboxBody' => 
                array (
                  'description' => 'Inbox模式下的正文，内容为合法的JSON Array，且元素不超过5个。当前支持：

- 华为：EMUI9及以上
- 荣耀：Magic UI 4.0及以上
- 小米：MIUI10及以上
- OPPO：ColorOS 5.0以上
- 自有通道：安卓SDK3.6.0及以上',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["第一行","第二行"]',
                ),
                'AndroidNotificationBarType' => 
                array (
                  'description' => 'Android自定义通知栏样式，取值：1-100。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                ),
                'AndroidNotificationBarPriority' => 
                array (
                  'description' => 'Android通知在通知栏展示时排列位置的优先级。可取值： -2，-1，0，1，2。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'AndroidNotificationNotifyId' => 
                array (
                  'description' => '标识每条消息在通知显示时的唯一标识，不同的通知栏消息可以相同的NotifyId，实现新的通知栏消息覆盖老的，当前支持除FCM通道外的其他厂商通道。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100001',
                ),
                'AndroidNotificationChannel' => 
                array (
                  'description' => 'Android app的channelId，需要与app中的channelId能对应上。
- 设置NotificationChannel参数，具体用途请参见[常见问题：Android 8.0以上设备通知接收不到](~~67398~~)。
- 因OPPO通知私信通道的channel_id与app的channelId，故OPPO通道推送时，channel_id取此值。
- 华为、FCM、阿里云自有通道推送中，channel_id取此值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'AndroidNotificationHuaweiChannel' => 
                array (
                  'description' => '设置Huawei通知消息分类importance参数，决定用户设备消息通知行为，取值如下：

- LOW：资讯营销类消息
- NORMAL：服务与通讯类消息

>- 当前华为通道建议使用AndroidMessageHuaweiCategory进行通知分类，可不再使用AndroidNotificationHuaweiChannel。
>- 需要在Huawei平台申请，[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section893184112272)。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'LOW' => 'LOW',
                    'NORMAL' => 'NORMAL',
                  ),
                  'example' => 'LOW',
                ),
                'AndroidNotificationHonorChannel' => 
                array (
                  'description' => '设置荣耀通知消息分类importance参数，决定用户设备消息通知行为，取值如下：

- LOW：资讯营销类消息

- NORMAL：服务与通讯类消息

需要在荣耀平台申请，[申请链接](https://developer.hihonor.com/cn/doc/guides/100364)。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'LOW' => 'LOW',
                    'NORMAL' => 'NORMAL',
                  ),
                  'example' => 'LOW',
                ),
                'AndroidNotificationVivoChannel' => 
                array (
                  'description' => '设置vivo通知消息分类，取值为：

- 0：运营类消息（默认）
- 1：系统类消息

>- 当前vivo通道建议使用AndroidMessageVivoCategory进行通知分类，可不再使用AndroidNotificationVivoChannel。
>- 需要在vivo平台申请，详见：[申请链接](https://dev.vivo.com.cn/documentCenter/doc/359)。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                  'example' => '0',
                ),
                'AndroidNotificationXiaomiChannel' => 
                array (
                  'description' => '设置小米通知类型的channelId，需要在小米平台申请，详见：[申请链接](https://dev.mi.com/console/doc/detail?pId=2422#_4)。
>- 小米通道单个应用最多可申请8个channel，请提前做好规划。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'michannel',
                ),
                'AndroidNotificationGroup' => 
                array (
                  'description' => '消息分组，同一组消息在通知栏里只显示最新一条和当前该组接受到的消息总数目，不会展示所有消息也无法展开。当前支持：

- 华为
- 荣耀
- 自有通道',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'group-1',
                ),
                'AndroidExtParameters' => 
                array (
                  'description' => '设定通知的扩展属性。当推送类型PushType设置为MESSAGE消息类型时，该属性不生效。

该参数要以JSON map的格式传入，否则会解析出错。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"key1":"value1","api_name":"PushNoticeToAndroidRequest"}',
                ),
                'AndroidMessageHuaweiUrgency' => 
                array (
                  'description' => '华为通道透传消息投递优先级，取值如下：

- HIGH

- NORMAL

需要申请权限，具体请参见：[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)。
',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'HIGH' => 'HIGH',
                    'NORMAL' => 'NORMAL',
                  ),
                  'example' => 'HIGH',
                ),
                'AndroidMessageHuaweiCategory' => 
                array (
                  'description' => '作用一：完成[自分类权益申请](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835?#section3410731125514)后，用于标识消息类型，确定[消息提醒方式](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#ZH-CN_TOPIC_0000001149358835__p3850133955718)，对特定类型消息加快发送，取值请参考华为推送官方文档的[消息分类标准](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section1076611477914)，填写文档表格中的“云端通知category取值”或“本地通知category取值”。

作用二：[申请特殊权限](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)后，用于标识高优先级透传场景，取值如下：
- VOIP：音视频通话
- PLAY_VOICE：语音播报

> 对于“云端通知category取值”为“不涉及”的一概走阿里云自有通道，对于“本地通知category取值”为“不涉及”的一概走华为通道。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SUBSCRIPTION',
                ),
                'AndroidMessageVivoCategory' => 
                array (
                  'description' => 'vivo将消息分为：系统消息、运营消息两个类别进行管理。 

系统消息：
- IM：即时消息
- ACCOUNT：账号与资产
- TODO：日程待办
- DEVICE_REMINDER：设备信息
- ORDER：订单与物流
- SUBSCRIPTION：订阅提醒

运营消息：
- NEWS：新闻
- CONTENT：内容推荐
- MARKETING：运营活动
- SOCIAL：社交动态
> 详细请参考[分类说明](https://dev.vivo.com.cn/documentCenter/doc/359#_Toc64906673)',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TODO',
                ),
                'AndroidTargetUserType' => 
                array (
                  'description' => '设置厂商通道通知类型：
- **0**：正式通知（默认）。
- **1**：测试通知。

>- 本参数配置后等价于同时配置AndroidHuaweiTargetUserType、AndroidHonorTargetType、AndroidVivoPushMode三个参数，具体厂商通道的对应参数能覆盖本参数。
>- 当前支持：华为通道、荣耀通道、vivo通道。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                  'enum' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                ),
                'AndroidHuaweiTargetUserType' => 
                array (
                  'description' => '设置华为通道通知类型：
- **0**：正式通知（默认）。
- **1**：测试通知。

> 每个应用每日可发送该测试通知500条且不受每日单设备推送数量上限要求。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                  'example' => '1',
                  'enum' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                ),
                'AndroidHonorTargetUserType' => 
                array (
                  'description' => '设置荣耀通道通知类型：
- **0**：正式通知（默认）。
- **1**：测试通知。

> 每个应用每日可发送该测试通知1000条且不受每日单设备推送数量上限要求。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                  'enum' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                ),
                'AndroidVivoPushMode' => 
                array (
                  'description' => '设置vivo通道通知类型：
- **0**：正式推送（默认）。
- **1**：测试推送。

> 测试推送请事先在vivo控制台配置测试设备。测试设备RegId可在设备启动日志中搜索“onReceiveRegId regId”获得。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                  'example' => '1',
                  'enum' => 
                  array (
                    0 => '0',
                    1 => '1',
                  ),
                ),
                'AndroidHuaweiReceiptId' => 
                array (
                  'description' => '华为通道回执ID，该回执ID可以在华为通道推送运营平台的回执参数配置中查看。

> 如果在华为通道推送运营平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置华为通道默认回执ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'RCP4C123456',
                ),
                'AndroidVivoReceiptId' => 
                array (
                  'description' => 'vivo通道回执ID，该回执ID可以在vivo开放平台推送服务的应用信息中查看。

> 如果在vivo开放平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置vivo通道默认回执ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123',
                ),
                'AndroidMusic' => 
                array (
                  'description' => 'Android通知声音（保留参数，当前暂不起作用）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '无',
                ),
                'SendSpeed' => 
                array (
                  'description' => '该参数已废弃。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'deprecated' => true,
                  'required' => false,
                  'example' => '0',
                ),
                'AndroidXiaoMiNotifyTitle' => 
                array (
                  'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupTitle**统一支持。',
                  'type' => 'string',
                  'deprecated' => true,
                  'required' => false,
                  'example' => '无',
                ),
                'AndroidXiaoMiNotifyBody' => 
                array (
                  'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupBody**统一支持。',
                  'type' => 'string',
                  'deprecated' => true,
                  'required' => false,
                  'example' => '无',
                ),
                'AndroidXiaoMiActivity' => 
                array (
                  'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupActivity**统一支持。',
                  'type' => 'string',
                  'deprecated' => true,
                  'required' => false,
                  'example' => '无',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'MessageIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MessageId' => 
                  array (
                    'description' => '批量消息ID列表，每个消息ID对应传入的PushTask的推送结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息ID',
                      'type' => 'string',
                      'example' => '501030',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid%s.Format',
            'errorMessage' => 'The specified %s format is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountDisabled',
            'errorMessage' => 'Your account is not enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'FileNotExist',
            'errorMessage' => 'The specified file does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectPassword',
            'errorMessage' => 'The password is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'NotApnsCertificate',
            'errorMessage' => 'The Certificate is not an APNs certificate.',
          ),
          5 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'The specified AppKey is not authorized.',
          ),
          6 => 
          array (
            'errorCode' => 'SendSpeedNotSupported',
            'errorMessage' => 'SendSpeed is not supported for specified Target.',
          ),
          7 => 
          array (
            'errorCode' => 'SmsProfileConfigFailed',
            'errorMessage' => 'Failed to configure SMS profile.',
          ),
          8 => 
          array (
            'errorCode' => 'SmsProfileGetFailed',
            'errorMessage' => 'Failed to get SMS profile.',
          ),
          9 => 
          array (
            'errorCode' => 'SmsRoleAuthorizeFailed',
            'errorMessage' => 'Failed to authorize SMS role.',
          ),
          10 => 
          array (
            'errorCode' => 'SmsRoleUnauthorized',
            'errorMessage' => 'The SMS role is unauthorized.',
          ),
          11 => 
          array (
            'errorCode' => 'TagsNumberBeyondLimit',
            'errorMessage' => 'The number of tags bound to this app exceeds the limit.',
          ),
          12 => 
          array (
            'errorCode' => 'TargetNotSupported',
            'errorMessage' => 'Target is not supported for batch push.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid%s.LengthExceed',
            'errorMessage' => 'The specified %s length cannot be greater than %s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid%s.BytesExceed',
            'errorMessage' => 'The specified %s exceeds the %s bytes limit.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid%s.Empty',
            'errorMessage' => 'The specified %s cannot be empty.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'The specified parameter is invalid: %s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
          1 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request processing is timeout.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"MessageIds\\": {\\n    \\"MessageId\\": [\\n      \\"501030\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '批量推送',
      'summary' => '批量给不同的设备推送不同的消息/通知。',
      'description' => '# 接口说明
**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**

在某种业务场景中，可能需要在极短时间内大量向不同设备单推不同消息，在设备数、消息数极大时，会产生较高QPS，达到我们单来源IP的QPS限制，造成部分推送失败。

本接口针对此问题设计。它支持单次调用最大传入100个独立的推送任务，通过聚合请求的方式有效降低QPS，提高大量单推的稳定性和成功率。批量推送单账号限制每秒500次调用。

每个独立推送任务仅支持根据设备/账号/别名三类推送目标，且暂不支持短信融合配置。

> SDK需升级到3.11.0及以上版本。

# PushTask属性


- PushTask属性格式为：PushTask.N.Property。包含：
    - 推送目标（destination）
    - 推送配置（config）
    - iOS通知任务配置
    - Android通知任务配置
    - Android辅助弹窗功能配置
    - 推送控制（push control）
- 每一个PushTask表示一个独立推送任务，最大支持100个，推送相关配置，和Push接口一致。
- PushTask.N.Target参数只支持DEVICE、ACCOUNT、ALIAS三种类型。
- PushTask不支持短信联动配置。
- 父节点和子节点的乘积不能超过10000，否则视为参数无效。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# Java示例代码
```
MassPushRequest massPushRequest = new MassPushRequest();
massPushRequest.setAppKey(appKey);
List<MassPushRequest.PushTask> pushTasks = new ArrayList<>();
for (int i = 0; i < 100; i++) {
    MassPushRequest.PushTask pushTask = new MassPushRequest.PushTask();
    // 推送目标
    pushTask.setTarget("DEVICE"); //推送目标: DEVICE:推送给设备; ACCOUNT:推送给指定账号,TAG:推送给自定义标签; ALIAS: 按别名推送; ALL: 全推
    pushTask.setTargetValue("device1,device2,device3"); //根据Target来设定，如Target=DEVICE, 则对应的值为设备id1,设备id2。多个值使用逗号分隔(账号与设备有一次最多100个的限制)。
    pushTask.setDeviceType("iOS"); // 设备类型deviceType, iOS设备: "iOS"; Android设备: "ANDROID"; 全部: "ALL", 这是默认值.
    // 推送配置
    pushTask.setPushType("MESSAGE"); // MESSAGE:表示消息(默认), NOTICE:表示通知
    pushTask.setTitle("Hello-" + i); // 消息的标题
    pushTask.setBody("PushRequest body" + i); // 消息的内容
    // 推送配置: iOS
    pushTask.setIOSBadge(5); // iOS应用图标右上角角标
    pushTask.setIOSMusic("default"); // iOS通知声音
    pushTask.setIOSApnsEnv("PRODUCT");//iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。\'DEV\': 表示开发环境 \'PRODUCT\': 表示生产环境
    pushTask.setIOSRemind(true); //  消息推送时设备不在线（既与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。注意：**离线消息转通知仅适用于`生产环境`**
    pushTask.setIOSRemindBody("PushRequest summary"); // iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=`PRODUCT` && iOSRemind为true时有效
    pushTask.setIOSExtParameters("{\\"k1\\":\\"ios\\",\\"k2\\":\\"v2\\"}"); //通知的扩展属性(注意 : 该参数要以json map的格式传入,否则会解析出错)
    // 推送配置: Android
    pushTask.setAndroidOpenType("ACTIVITY"); // 点击通知后动作 \'APPLICATION\': 打开应用 \'ACTIVITY\': 打开应用AndroidActivity \'URL\': 打开URL \'NONE\': 无跳转
    pushTask.setAndroidNotifyType("SOUND"); // 通知的提醒方式 ‘VIBRATE\': 振动  \'SOUND\': 声音 \'DEFAULT\': 声音和振动 \'NONE\': 不做处理，用户自定义
    pushTask.setAndroidOpenUrl("http://www.alibaba.com");
    pushTask.setAndroidMusic("default"); // Android通知声音
    pushTask.setAndroidActivity("com.alibaba.push.PushActivity"); // Android收到推送后打开对应的ACTIVITY,仅当`AndroidOpenType="ACTIVITY"`有效
    pushTask.setAndroidPopupActivity("com.alibaba.push.PopupActivity"); //设置该参数后启动辅助弹窗功能, 此处指定通知点击后跳转的Activity（辅助弹窗的前提条件：1. 集成第三方辅助通道；2. StoreOffline参数设为true）
    pushTask.setAndroidPopupTitle("Popup Title"); //设置辅助弹窗通知的标题
    pushTask.setAndroidPopupBody("Popup Body"); //设置辅助弹窗通知的内容
    pushTask.setAndroidNotificationBarType(50); //Android自定义通知栏样式，取值：1-100
    pushTask.setAndroidNotificationBarPriority(2); //Android通知在通知栏展示时排列位置的优先级 -2 -1 0 1 2
    pushTask.setAndroidExtParameters("{\\"k1\\":\\"android\\",\\"k2\\":\\"v2\\"}"); //设定通知的扩展属性。(注意 : 该参数要以 json map 的格式传入,否则会解析出错)
    // 推送控制
    final Date pushDate = new Date(System.currentTimeMillis() + 3600 * 1000); //用于定时发送。不设置缺省是立即发送。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。
    final String pushTime = ParameterHelper.getISO8601Time(pushDate);
    pushTask.setPushTime(pushTime); // 延后推送。可选，如果不设置表示立即推送
    pushTask.setStoreOffline(true); // 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到
    final String expireTime = ParameterHelper.getISO8601Time(new Date(System.currentTimeMillis() + 12 * 3600 * 1000)); // 12小时后消息失效, 不会再发送
    pushTask.setExpireTime(expireTime);
    pushTasks.add(pushTask);
}
massPushRequest.setPushTasks(pushTasks);
MassPushResponse massPushResponse = client.getAcsResponse(massPushRequest);
System.out.printf("RequestId: %s, MessageIds: %s\\n", massPushResponse.getRequestId(), massPushResponse.getMessageIds().toString());
```',
    ),
    'Push' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'PushType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送类型。取值：

- **MESSAGE**：表示消息。
- **NOTICE**：表示通知。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MESSAGE',
            'enum' => 
            array (
              0 => 'MESSAGE',
              1 => 'NOTICE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备类型，取值范围为：

- **iOS**：iOS设备
- **ANDROID**：Android设备
- **ALL**：全部设备类型
> 该参数仅对旧的不分端app有意义。新的分端app下，该参数填写“ALL”或与app分端类型对应的值均可。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'ALL' => 'ALL',
              'ANDROID' => 'ANDROID',
              'iOS' => 'iOS',
            ),
            'example' => 'ALL',
            'enum' => 
            array (
              0 => 'iOS',
              1 => 'ANDROID',
              2 => 'ALL',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标。可取值：

- **DEVICE**：根据设备推送。
- **ACCOUNT**：根据账号推送。
- **ALIAS**：根据别名推送。
- **TAG**：根据标签推送。
- **ALL**：推送给全部设备（同一种DeviceType的两次全推的间隔至少为1秒）。
 > 对iOS设备全推，会推送给24个月内活跃过但未卸载的设备，一旦APNs（苹果推送服务）接收到推送请求且未返回错误信息即为送达，导致活跃设备数暴增，从而产生大量费用，请您酌情使用。
- **TBD**：初始化持续推送，推送目标由后续的[ContinuouslyPush](~~2249917~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALL',
            'enum' => 
            array (
              0 => 'ALL',
              1 => 'DEVICE',
              2 => 'ACCOUNT',
              3 => 'ALIAS',
              4 => 'TAG',
              5 => 'TBD',
              6 => 'FILE',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid1,deviceid2`（最多支持1000个）。
- Target=ACCOUNT，值如`account1,account2`（最多支持1000个）。
- Target=ALIAS，值如`alias1,alias2`（最多支持1000个）。
- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。
- Target=ALL，值为**ALL**。
- Target=TBD，值为**TBD**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALL',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreOffline',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '离线消息、通知是否保存。StoreOffline默认设置为**false**。

若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。iOS通知走APNs链路，不受StoreOffline影响。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'SendChannels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定发送通道，取值如下：

- accs：阿里云自有通道
- huawei：华为通道
- honor：荣耀通道
- xiaomi：小米通道
- oppo：OPPO通道
- vivo：vivo通道
- meizu：魅族通道
- gcm：谷歌GCM通道（旧版HTTP）
- fcm: 谷歌Firebase通道（HTTP v1 API）
- apns：APNs通道

>- 如果未配置此参数，则代表所有通道均可使用。
>- 如果配置了此参数，则严格使用参数中的通道。
>- 如果配置的通道和发送策略冲突（如iOS通知仅走APNs通道，但本参数中不包含apns），则不实施发送。
>- 若配置gcm，则可以走谷歌GCM和FCM通道，若配置fcm，则只能走谷歌FCM通道。',
            'type' => 'string',
            'required' => false,
            'example' => 'accs,huawei,xiaomi',
          ),
        ),
        7 => 
        array (
          'name' => 'PushTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于定时发送。不设置缺省是立即发送。
设置定时发送最迟不能晚于7天发送。

时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。
>Target为TBD（持续推送）时，不支持定时设置。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-02-20T00:00:00Z',
          ),
        ),
        8 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '离线消息/通知的过期时间，和StoreOffline配合使用，过期则不会再被发送，最长保存72小时。默认为72小时。

时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ，过期时间不能小于当前时间或者定时发送时间加上3秒（`ExpireTime > PushTime+ 3秒`），3秒是为了冗余网络和系统延迟造成的误差。建议单推不小于1分钟，全推、批量推送不少于10分钟。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-02-20T00:00:00Z',
          ),
        ),
        9 => 
        array (
          'name' => 'JobKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        10 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送时通知/消息的标题，长度限制：200字节。

在Android推送时必填；在iOS通知时非必填，如果填写，则：

- iOS 10+通知显示标题。

- iOS 8.2 <= iOS系统 < iOS 10：替换通知应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'title',
          ),
        ),
        11 => 
        array (
          'name' => 'Body',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android推送时通知的内容/消息的内容；iOS消息/通知内容，推送的内容大小是有限制的，参见[产品限制](~~434629~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hello',
          ),
        ),
        12 => 
        array (
          'name' => 'Trim',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动对过长标题、内容进行截断。

>仅支持明确限制标题、内容的厂商通道，对APNs、华为、荣耀通道等不限制标题、内容，只限制总请求体大小的不适用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'iOSApnsEnv',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。

- **DEV**：表示开发环境。
- **PRODUCT**：表示生产环境。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DEV' => 'DEV',
              'PRODUCT' => 'PRODUCT',
            ),
            'example' => 'DEV',
            'enum' => 
            array (
              0 => 'PRODUCT',
              1 => 'DEV',
            ),
          ),
        ),
        14 => 
        array (
          'name' => 'iOSRemind',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息推送时设备不在线（即与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。

> 离线消息转通知仅适用于生产环境。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'iOSSubtitle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS通知副标题内容（iOS 10+）。',
            'type' => 'string',
            'required' => false,
            'example' => 'su\'b',
          ),
        ),
        16 => 
        array (
          'name' => 'iOSRemindBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=PRODUCT && iOSRemind为true时有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'ios通知body',
          ),
        ),
        17 => 
        array (
          'name' => 'iOSMusic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS通知声音。指定存放在app bundle或沙盒Library/Sounds目录下的音频文件名，请参见：[iOS推送如何设定通知声音](~~48906~~)。

若指定为空串（””），通知为静音；若不设置，默认填充default为系统提示音。',
            'type' => 'string',
            'required' => false,
            'example' => '""',
          ),
        ),
        18 => 
        array (
          'name' => 'iOSBadge',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS应用图标右上角角标。

> 若iOSBadgeAutoIncrement设置为True，则此项必须为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        19 => 
        array (
          'name' => 'iOSBadgeAutoIncrement',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启角标自增功能，默认为false。

>当该项为true时，iOSBadge必须为空。

角标自增功能由推送服务端维护每个设备的角标计数，需要用户使用1.9.5以上版本的SDK，并且需要用户主动同步角标数字到服务端。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'iOSSilentNotification',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启iOS静默通知。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        21 => 
        array (
          'name' => 'iOSMutableContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS通知处理扩展标记（iOS 10+）。如果设为true，则APNs推送的通知在弹出前，可先到达Extension进行处理。静默通知时，必须设为true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        22 => 
        array (
          'name' => 'iOSNotificationCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定iOS通知Category（iOS 10+）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ios',
          ),
        ),
        23 => 
        array (
          'name' => 'iOSNotificationCollapseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备收到有相同CollapseId的消息，会合并成一条。设备不在线，连续发相同CollapseId的消息，通知栏只会显示一条，iOS 10+支持设置此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'ZD2011',
          ),
        ),
        24 => 
        array (
          'name' => 'iOSNotificationThreadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过该属性对iOS的远程通知进行分组，标记折叠的组别识别名。
仅支持iOS 12.0+版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        25 => 
        array (
          'name' => 'iOSInterruptionLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中断级别，取值：

- **passive**：系统在不点灯、不播放声音的情况下将通知添加到通知列表中。
- **active**：系统立即显示通知，点亮屏幕，并可以播放声音。
- **time-sensitive**：系统立即呈现通知，点亮屏幕，并可以播放声音，但不会突破系统通知控制。
- **critical**：系统立即显示通知，屏幕亮起，并绕过静音开关播放声音。',
            'type' => 'string',
            'required' => false,
            'example' => 'active',
          ),
        ),
        26 => 
        array (
          'name' => 'iOSRelevanceScore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '摘要突出显示分数。取值范围：\\[0,1\\]的浮点数。',
            'type' => 'number',
            'format' => 'double',
            'required' => false,
            'example' => '0.01',
          ),
        ),
        27 => 
        array (
          'name' => 'iOSExtParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS通知的扩展属性。

iOS10+可以在此指定富媒体推送通知的资源Url：`{“attachment”: “https://xxxx.xxx/notification_pic.png"} `。该参数要以JSON map的格式传入，否则会解析出错。',
            'type' => 'string',
            'required' => false,
            'example' => '{“attachment”: “https://xxxx.xxx/notification_pic.png"} ',
          ),
        ),
        28 => 
        array (
          'name' => 'AndroidNotifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知的提醒方式。可取值：

- **VIBRATE**：振动（默认值）
- **SOUND**：声音
- **BOTH**：声音和振动
- **NONE**：静音',
            'type' => 'string',
            'required' => false,
            'example' => 'BOTH',
            'enum' => 
            array (
              0 => 'NONE',
              1 => 'VIBRATE',
              2 => 'SOUND',
              3 => 'BOTH',
            ),
          ),
        ),
        29 => 
        array (
          'name' => 'AndroidRemind',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送类型为消息时设备不在线，则这条推送会使用辅助弹窗功能。默认值为false，仅当PushType=MESSAGE时生效。

如果消息转通知推送成功，收到通知是展示的数据为服务端设置的AndroidPopupTitle和AndroidPopupBody参数值，点击通知在辅助弹窗的onSysNoticeOpened方法中获取到的数据是服务端设置的Title和Body参数值。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        30 => 
        array (
          'name' => 'AndroidOpenType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '点击通知后动作。可取值：

- **APPLICATION**：打开应用（默认值）
- **ACTIVITY**：打开应用AndroidActivity
- **URL**：打开URL
- **NONE**：无跳转',
            'type' => 'string',
            'required' => false,
            'example' => 'APPLICATION',
            'enum' => 
            array (
              0 => 'APPLICATION',
              1 => 'ACTIVITY',
              2 => 'URL',
              3 => 'NONE',
            ),
          ),
        ),
        31 => 
        array (
          'name' => 'AndroidActivity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定通知打开的activity。

仅当AndroidOpenType=”Activity”时传入，如：`com.alibaba.cloudpushdemo.bizactivity`。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.alibaba.cloudpushdemo.bizactivity',
          ),
        ),
        32 => 
        array (
          'name' => 'AndroidOpenUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android收到推送后打开对应的url。

仅当AndroidOpenType=”URL”时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://xxxx.xxx',
          ),
        ),
        33 => 
        array (
          'name' => 'AndroidPopupActivity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定点击通知后跳转的Activity。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.alibaba.cloudpushdemo.bizactivity',
          ),
        ),
        34 => 
        array (
          'name' => 'AndroidPopupTitle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '辅助弹窗模式下标题内容。**AndroidPopupActivity**参数不为空时，该参数必填。 

长度限制：30字符。

如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'hello',
          ),
        ),
        35 => 
        array (
          'name' => 'AndroidPopupBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '辅助弹窗模式下Body内容。**AndroidPopupActivity**参数不为空时，该参数必填。

长度限制：128字符。

如使用厂商通道，则需同时符合厂商通道的限制，具体内容参见：[Android端辅助通道推送限制](~~165253~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'hello',
          ),
        ),
        36 => 
        array (
          'name' => 'AndroidRenderStyle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知样式，取值为：
- **0**：标准模式（默认）
- **1**：长文本模式（支持华为、荣耀、小米、OPPO、魅族、自有通道）
- **2**：大图模式（仅支持小米）
- **3**：列表模式（支持华为、荣耀、小米、OPPO、自有通道）
> 若使用非标准模式，此参数必须提供。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
            ),
            'example' => '1',
          ),
        ),
        37 => 
        array (
          'name' => 'AndroidBigTitle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '长文本模式下的标题，长度限制：200个字节（1个汉字算作3字节）。

- 当前仅支持荣耀通道和华为通道EMUI11及以上版本。

- 若长文本模式下未提供此参数，则从Title、AndroidPopupTitle里取第一个非空值。',
            'type' => 'string',
            'required' => false,
            'example' => '示例长标题',
          ),
        ),
        38 => 
        array (
          'name' => 'AndroidBigBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '长文本模式下的body，长度限制：1000字节（1个汉字算作3字节），发送时受具体厂商通道的限制。

当前支持：

- 　华为：EMUI10及以上

- 　荣耀：Magic UI 4.0及以上

- 　小米：MIUI10及以上

- 　OPPO：ColorOS 5.0以上

- 　魅族：Flyme 
- 　自有通道：安卓SDK3.6.0及以上

>若长文本模式下未提供此参数，则从Body、AndroidPopupBody里取第一个非空值。',
            'type' => 'string',
            'required' => false,
            'example' => '示例长文本',
          ),
        ),
        39 => 
        array (
          'name' => 'AndroidBigPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '大图模式下的图片URL，当前支持：自有通道：安卓SDK3.6.0及以上。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://imag.example.com/image.png',
          ),
        ),
        40 => 
        array (
          'name' => 'AndroidXiaomiBigPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '大图模式下的大图URL。大图模式下图片上传至小米推送后会返回一个图片URL，本参数内填写这个URL。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://f6.market.xiaomi.com/download/MiPass/aaa/bbb.png',
          ),
        ),
        41 => 
        array (
          'name' => 'AndroidImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '大图标URL。
当前支持：
- 华为EMUI（仅长文本模式、Inbox模式下适用）。

- 荣耀Magic UI（仅长文本模式下适用）。

- 自有通道：安卓SDK3.5.0及以上。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://imag.example.com/image.png',
          ),
        ),
        42 => 
        array (
          'name' => 'AndroidXiaomiImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '大图URL。当前支持：小米MIUI12及以上（仅长文本模式下适用）。

>上传到小米服务器上，返回的图标URL。具体请参考：[链接](https://dev.mi.com/console/doc/detail?pId=1278#_3_3)。
',
            'type' => 'string',
            'required' => false,
            'example' => 'https://imag.example.com/image.png',
          ),
        ),
        43 => 
        array (
          'name' => 'AndroidInboxBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Inbox模式下的正文，内容为合法的JSON Array，且元素不超过5个。当前支持：

- 华为：EMUI9及以上
- 荣耀：Magic UI 4.0及以上
- 小米：MIUI10及以上
- OPPO：ColorOS 5.0以上
- 自有通道：安卓SDK3.6.0及以上',
            'type' => 'string',
            'required' => false,
            'example' => '["第一行","第二行"]',
          ),
        ),
        44 => 
        array (
          'name' => 'AndroidNotificationBarType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android自定义通知栏样式，取值：1-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        45 => 
        array (
          'name' => 'AndroidNotificationBarPriority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android通知在通知栏展示时排列位置的优先级。可取值： -2，-1，0，1，2。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '-2',
            'example' => '0',
          ),
        ),
        46 => 
        array (
          'name' => 'AndroidNotificationNotifyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标识每条消息在通知显示时的唯一标识，不同的通知栏消息可以相同的NotifyId，实现新的通知栏消息覆盖老的，当前支持除FCM通道外的其他厂商通道。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100001',
          ),
        ),
        47 => 
        array (
          'name' => 'AndroidNotificationChannel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android app的channelId，需要与app中的channelId能对应上。
- 设置NotificationChannel参数，具体用途请参见[常见问题：Android 8.0以上设备通知接收不到](~~67398~~)。
- 因OPPO通知私信通道的channel_id与app的channelId，故OPPO通道推送时，channel_id取此值。
- 华为、FCM、阿里云自有通道推送中，channel_id取此值。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        48 => 
        array (
          'name' => 'AndroidNotificationHuaweiChannel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置Huawei通知消息分类importance参数，决定用户设备消息通知行为，取值如下：

- LOW：资讯营销类消息
- NORMAL：服务与通讯类消息

>- 当前华为通道建议使用AndroidMessageHuaweiCategory进行通知分类，可不再使用AndroidNotificationHuaweiChannel。
>- 需要在Huawei平台申请，[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section893184112272)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LOW' => 'LOW',
              'NORMAL' => 'NORMAL',
            ),
            'example' => 'LOW',
          ),
        ),
        49 => 
        array (
          'name' => 'AndroidNotificationHonorChannel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置荣耀通知消息分类importance参数，决定用户设备消息通知行为，取值如下：

- **LOW**：资讯营销类消息
- **NORMAL**：服务与通讯类消息

需要在荣耀平台申请，[申请链接](https://developer.hihonor.com/cn/kitdoc?category=%E5%9F%BA%E7%A1%80%E6%9C%8D%E5%8A%A1&kitId=11002&navigation=guides&docId=notification-class.md&token=)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LOW' => 'LOW',
              'NORMAL' => 'NORMAL',
            ),
            'example' => 'LOW',
          ),
        ),
        50 => 
        array (
          'name' => 'AndroidNotificationXiaomiChannel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置小米通知类型的channelId，需要在小米平台申请，详见：[申请链接](https://dev.mi.com/console/doc/detail?pId=2422#_4)。
>- 小米通道单个应用最多可申请8个channel，请提前做好规划。',
            'type' => 'string',
            'required' => false,
            'example' => 'michannel',
          ),
        ),
        51 => 
        array (
          'name' => 'AndroidNotificationVivoChannel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置vivo通知消息分类，取值为：

- 0：运营类消息（默认）
- 1：系统类消息

>- 当前vivo通道建议使用AndroidMessageVivoCategory进行通知分类，可不再使用AndroidNotificationVivoChannel。
>- 需要在vivo平台申请，详见：[申请链接](https://dev.vivo.com.cn/documentCenter/doc/359)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '0',
              1 => '1',
            ),
            'example' => 'classification',
          ),
        ),
        52 => 
        array (
          'name' => 'AndroidNotificationGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息分组，同一组消息在通知栏里只显示最新一条和当前该组接受到的消息总数目，不会展示所有消息也无法展开。当前支持：

- 华为
- 荣耀
- 自有通道',
            'type' => 'string',
            'required' => false,
            'example' => 'group-1',
          ),
        ),
        53 => 
        array (
          'name' => 'AndroidExtParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设定通知的扩展属性。当推送类型PushType设置为MESSAGE消息类型时，该属性不生效。

该参数要以JSON map的格式传入，否则会解析出错。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1","api_name":"PushNoticeToAndroidRequest"}',
          ),
        ),
        54 => 
        array (
          'name' => 'AndroidMessageHuaweiUrgency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '华为通道透传消息投递优先级，取值如下：

- **HIGH**
- **NORMAL**

需要申请权限，具体请参见：[申请链接](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'HIGH' => 'HIGH',
              'NORMAL' => 'NORMAL',
            ),
            'example' => 'HIGH',
          ),
        ),
        55 => 
        array (
          'name' => 'AndroidMessageHuaweiCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作用一：完成[自分类权益申请](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835?#section3410731125514)后，用于标识消息类型，确定[消息提醒方式](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#ZH-CN_TOPIC_0000001149358835__p3850133955718)，对特定类型消息加快发送，取值请参考华为推送官方文档的[消息分类标准](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/message-classification-0000001149358835#section1076611477914)，填写文档表格中的“云端通知category取值”或“本地通知category取值”。

作用二：[申请特殊权限](https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/faq-0000001050042183#section037425218509)后，用于标识高优先级透传场景，取值如下：
- VOIP：音视频通话
- PLAY_VOICE：语音播报

> 对于“云端通知category取值”为“不涉及”的一概走阿里云自有通道，对于“本地通知category取值”为“不涉及”的一概走华为通道。',
            'type' => 'string',
            'required' => false,
            'example' => 'VOIP',
          ),
        ),
        56 => 
        array (
          'name' => 'AndroidMessageVivoCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'vivo将消息分为：系统消息、运营消息两个类别进行管理。
系统消息：
- IM：即时消息
- ACCOUNT：账号与资产
- TODO：日程待办
- DEVICE_REMINDER：设备信息
- ORDER：订单与物流
- SUBSCRIPTION：订阅提醒

运营消息：
- NEWS：新闻
- CONTENT：内容推荐
- MARKETING：运营活动
- SOCIAL：社交动态

详细请参考[分类说明](https://dev.vivo.com.cn/documentCenter/doc/359#_Toc64906673)',
            'type' => 'string',
            'required' => false,
            'example' => 'TODO',
          ),
        ),
        57 => 
        array (
          'name' => 'AndroidTargetUserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置厂商通道通知类型：
- **0**：正式通知（默认）。
- **1**：测试通知。

>- 本参数配置后等价于同时配置AndroidHuaweiTargetUserType、AndroidHonorTargetType、AndroidVivoPushMode三个参数，具体厂商通道的对应参数能覆盖本参数。
>- 当前支持：华为通道、荣耀通道、vivo通道。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        58 => 
        array (
          'name' => 'AndroidHuaweiTargetUserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置华为通道通知类型：
- **0**：正式通知（默认）。
- **1**：测试通知。

> 每个应用每日可发送该测试通知500条且不受每日单设备推送数量上限要求。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '0',
              1 => '1',
            ),
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        59 => 
        array (
          'name' => 'AndroidHonorTargetUserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置荣耀通道通知类型：
- **0**：正式通知（默认）。
- **1**：测试通知。

> 每个应用每日可发送该测试通知1000条且不受每日单设备推送数量上限要求。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        60 => 
        array (
          'name' => 'AndroidVivoPushMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置vivo通道通知类型：
- **0**：正式推送（默认）。
- **1**：测试推送。

> 测试推送请事先在vivo控制台配置测试设备。测试设备RegId可在设备启动日志中搜索“onReceiveRegId regId”获得。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '0',
              1 => '1',
            ),
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        61 => 
        array (
          'name' => 'AndroidHuaweiReceiptId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '华为通道回执ID，该回执ID可以在华为通道推送运营平台的回执参数配置中查看。

> 如果在华为通道推送运营平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置华为通道默认回执ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'RCP4C123456',
          ),
        ),
        62 => 
        array (
          'name' => 'AndroidVivoReceiptId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'vivo通道回执ID，该回执ID可以在vivo开放平台推送服务的应用信息中查看。

> 如果在vivo开放平台配置的默认回执配置是阿里云回执，则无需提供，如果不是，建议优先在阿里云EMAS移动推送控制台中配置vivo通道默认回执ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        63 => 
        array (
          'name' => 'AndroidMusic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android通知声音（保留参数，当前暂不起作用）。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        64 => 
        array (
          'name' => 'SmsTemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补发短信的模板名，可以在短信模板管理界面获取，是系统分配的名称，而非开发者设置的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '短信模板名称',
          ),
        ),
        65 => 
        array (
          'name' => 'SmsSignName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补发短信的签名。',
            'type' => 'string',
            'required' => false,
            'example' => '短信签名',
          ),
        ),
        66 => 
        array (
          'name' => 'SmsParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信模板的变量名值对，格式： `key1=value1&key2=value2`。',
            'type' => 'string',
            'required' => false,
            'example' => 'key1=value1',
          ),
        ),
        67 => 
        array (
          'name' => 'SmsDelaySecs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发短信的延迟时间，单位：秒。

推荐设置为15秒以上，避免短信和推送的重复。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '15',
          ),
        ),
        68 => 
        array (
          'name' => 'SmsSendPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发短信的条件。可取值：

- **0**：推送未收到时触发。
- **1**：用户未打开时触发。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'enumValueTitles' => 
            array (
              0 => '0',
              1 => '1',
            ),
            'example' => '0',
          ),
        ),
        69 => 
        array (
          'name' => 'SendSpeed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'deprecated' => true,
            'required' => false,
            'minimum' => '10000',
            'example' => '0',
          ),
        ),
        70 => 
        array (
          'name' => 'AndroidXiaoMiNotifyTitle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupTitle**统一支持。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '无',
          ),
        ),
        71 => 
        array (
          'name' => 'AndroidXiaoMiNotifyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupBody**统一支持。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '无',
          ),
        ),
        72 => 
        array (
          'name' => 'AndroidXiaoMiActivity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，所有第三方辅助弹窗都由新参数**AndroidPopupActivity**统一支持。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '无',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '501029',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPeriod.ExceedDays',
            'errorMessage' => 'The period between specified EndTime and StartTime exceeds %s days.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid%s.Format',
            'errorMessage' => 'The specified %s format is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'AccountDisabled',
            'errorMessage' => 'Your account is not enabled.',
          ),
          3 => 
          array (
            'errorCode' => 'FileNotExist',
            'errorMessage' => 'The specified file does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectPassword',
            'errorMessage' => 'The password is incorrect.',
          ),
          5 => 
          array (
            'errorCode' => 'NotApnsCertificate',
            'errorMessage' => 'The Certificate is not an APNs certificate.',
          ),
          6 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'The specified AppKey is not authorized.',
          ),
          7 => 
          array (
            'errorCode' => 'SendSpeedNotSupported',
            'errorMessage' => 'SendSpeed is not supported for specified Target.',
          ),
          8 => 
          array (
            'errorCode' => 'SmsProfileConfigFailed',
            'errorMessage' => 'Failed to configure SMS profile.',
          ),
          9 => 
          array (
            'errorCode' => 'SmsProfileGetFailed',
            'errorMessage' => 'Failed to get SMS profile.',
          ),
          10 => 
          array (
            'errorCode' => 'SmsRoleAuthorizeFailed',
            'errorMessage' => 'Failed to authorize SMS role.',
          ),
          11 => 
          array (
            'errorCode' => 'SmsRoleUnauthorized',
            'errorMessage' => 'The SMS role is unauthorized.',
          ),
          12 => 
          array (
            'errorCode' => 'TagsNumberBeyondLimit',
            'errorMessage' => 'The number of tags bound to this app exceeds the limit.',
          ),
          13 => 
          array (
            'errorCode' => 'TargetNotSupported',
            'errorMessage' => 'Target is not supported for file push.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid%s.LengthExceed',
            'errorMessage' => 'The specified %s length cannot be greater than %s.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid%s.BytesExceed',
            'errorMessage' => 'The specified %s exceeds the %s bytes limit.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid%s.Empty',
            'errorMessage' => 'The specified %s cannot be empty.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'The specified parameter is invalid: %s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
          1 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request processing is timeout.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
      'title' => '高级推送',
      'summary' => '高级推送接口，提供丰富的推送定制参数。',
      'description' => '**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**

本接口区分Android和iOS平台，对于不同平台的推送调用，需要传入平台对应的AppKey。',
      'requestParamsDescription' => '## 请求参数补充说明
**Title/Body 展开说明如下：**

|属性\\推送类型|消息（iOS）|消息（Android）|通知（iOS）|	通知（Android）|
|:-----------------|:-----------------|:-----------------|:-----------------|:-----------------|
|Title	|消息标题，对应消息回调中CCPSysMessage的title字段|	CPushMessage.title字段|	通知标题 |	通知标题，通知回调方法（onNotificationOpened）|
Body|	消息体，对应消息回调中CCPSysMessage的body字段|	消息体，CPushMessage.content字段|	通知内容	|通知内容，通知回调方法（onNotificationOpened）|

**下述配置仅作用于Android辅助弹窗功能：**

推送时设备不在线（既与移动推送的服务端的长连接通道不通），则这条推送可以启动辅助弹窗功能，启动辅助弹窗功能参见[移动推送辅助通道配置](https://help.aliyun.com/document_detail/30067.html)，且需要具备如下条件：

* 集成第三方辅助通道。
* StoreOffline参数设为true。
* 推送通知（无需设置AndroidRemind）或者推送消息并设置AndroidRemind为true。
* 正确设置AndroidPopupActivity、AndroidPopupTitle、AndroidPopupBody参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '#  Java示例代码

```
PushRequest pushRequest = new PushRequest();
// 推送目标
pushRequest.setAppKey(appKey);
pushRequest.setTarget("ALL"); //推送目标: DEVICE:推送给设备; ACCOUNT:推送给指定账号,TAG:推送给自定义标签; ALIAS: 按别名推送; ALL: 全推
pushRequest.setTargetValue("all"); //根据Target来设定，如Target=DEVICE, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔.(账号与设备有一次最多100个的限制)
pushRequest.setDeviceType("iOS"); // 设备类型deviceType, iOS设备: "iOS"; Android设备: "ANDROID"; 全部: "ALL", 这是默认值.
// 推送配置
pushRequest.setPushType("MESSAGE"); // MESSAGE:表示消息(默认), NOTICE:表示通知
pushRequest.setTitle("Hello"); // 消息的标题
pushRequest.setBody("PushRequest body"); // 消息的内容
// 推送配置: iOS
pushRequest.setIOSBadge(5); // iOS应用图标右上角角标
pushRequest.setIOSMusic("default"); // iOS通知声音
pushRequest.setIOSApnsEnv("PRODUCT");//iOS的通知是通过APNs中心来发送的，需要填写对应的环境信息。\'DEV\': 表示开发环境 \'PRODUCT\': 表示生产环境
pushRequest.setIOSRemind(true); //  消息推送时设备不在线（既与移动推送的服务端的长连接通道不通），则这条推送会做为通知，通过苹果的APNs通道送达一次。注意：**离线消息转通知仅适用于`生产环境`**
pushRequest.setIOSRemindBody("PushRequest summary"); // iOS消息转通知时使用的iOS通知内容，仅当iOSApnsEnv=`PRODUCT` && iOSRemind为true时有效
pushRequest.setIOSExtParameters("{\\"k1\\":\\"ios\\",\\"k2\\":\\"v2\\"}"); //通知的扩展属性(注意 : 该参数要以json map的格式传入,否则会解析出错)
// 推送配置: Android
pushRequest.setAndroidOpenType("ACTIVITY"); // 点击通知后动作 \'APPLICATION\': 打开应用 \'ACTIVITY\': 打开应用AndroidActivity \'URL\': 打开URL \'NONE\': 无跳转
pushRequest.setAndroidNotifyType("SOUND"); // 通知的提醒方式 ‘VIBRATE\': 振动  \'SOUND\': 声音 \'DEFAULT\': 声音和振动 \'NONE\': 不做处理，用户自定义
pushRequest.setAndroidOpenUrl("http://www.alibaba.com");
pushRequest.setAndroidMusic("default"); // Android通知声音
pushRequest.setAndroidActivity("com.alibaba.push.PushActivity"); // Android收到推送后打开对应的ACTIVITY,仅当`AndroidOpenType="ACTIVITY"`有效
pushRequest.setAndroidPopupActivity("com.alibaba.push.PopupActivity"); //设置该参数后启动辅助弹窗功能, 此处指定通知点击后跳转的Activity（辅助弹窗的前提条件：1. 集成第三方辅助通道；2. StoreOffline参数设为true）
pushRequest.setAndroidPopupTitle("Popup Title"); //设置辅助弹窗通知的标题
pushRequest.setAndroidPopupBody("Popup Body"); //设置辅助弹窗通知的内容
pushRequest.setAndroidNotificationBarType(50); //Android自定义通知栏样式，取值：1-100
pushRequest.setAndroidNotificationBarPriority(2); //Android通知在通知栏展示时排列位置的优先级 -2 -1 0 1 2
pushRequest.setAndroidExtParameters("{\\"k1\\":\\"android\\",\\"k2\\":\\"v2\\"}"); //设定通知的扩展属性。(注意 : 该参数要以 json map 的格式传入,否则会解析出错)
// 推送控制
final Date pushDate = new Date(System.currentTimeMillis() + 3600 * 1000); //用于定时发送。不设置缺省是立即发送。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为`YYYY-MM-DDThh:mm:ssZ`。
final String pushTime = ParameterHelper.getISO8601Time(pushDate);
pushRequest.setPushTime(pushTime); // 延后推送。可选，如果不设置表示立即推送
pushRequest.setStoreOffline(true); // 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到，安卓中若为false则只走阿里云自有在线通道
final String expireTime = ParameterHelper.getISO8601Time(new Date(System.currentTimeMillis() + 12 * 3600 * 1000)); // 12小时后消息失效, 不会再发送
pushRequest.setExpireTime(expireTime);
pushRequest.setSendChannels("accs,huawei,honor,vivo,xiaomi,oppo"); // 指定下发的推送通道，若不填可从任何可行的通道下发
pushRequest.setAndroidNotificationNotifyId(1234567); // 设置通知覆盖参数，避免重试等场景用户显示多条相同的通知
pushRequest.setAndroidTargetUserType(0); // 代表本次推送如果推送到华为、荣耀、vivo通道，是一个正式通知，但本代码示例中这个值被厂商通道特有参数所覆盖
pushRequest.setAndroidHuaweiTargetUserType(1); // 代表本次推送如果推送到华为通道，是一个测试性质的通知
pushRequest.setAndroidHonorTargetUserType(1); // 代表本次推送如果推送到荣耀通道，是一个测试性质的通知
pushRequest.setAndroidVivoPushMode(1); // 代表本次推送如果推送到华为通道，是一个测试性质的通知，请在推送前把vivo设备regId加入vivo推送平台的测试设备列表中
pushRequest.setAndroidHuaweiReceiptId("ABCDEFG"); // 华为厂商通道
// 厂商通道通知分类
pushRequest.setAndroidNotificationChannel("user_define"); // OPPO通道私信通道channel_id，以及通用安卓channel_id
pushRequest.setAndroidNotificationXiaomiChannel("user_define"); //小米通道通知类型channel_id
pushRequest.setAndroidNotificationHonorChannel("NORMAL"); // 荣耀通道消息分类参数，对应荣耀通道importance参数
pushRequest.setAndroidMessageHuaweiCategory("ACCOUNT"); // 华为通道的通知分类参数，服务与通讯类通知需向华为通道申请权限
pushRequest.setAndroidMessageVivoCategory("ACCOUNT"); // vivo通道的通知分类参数，系统消息需向vivo通道申请权限
// 短信融合通知
pushRequest.setSmsTemplateName("SMS_1234567"); // 设置短信模板名
pushRequest.setSmsSignName("测试"); //设置短信签名
pushRequest.setSmsParams("name=Bob&code=123"); // 短信模板变量
pushRequest.setSmsSendPolicy(0); // 补发短信的策略，0 表示当设备未收到推送时补发
pushRequest.setSmsDelaySecs(120); // 两分钟未收到触发短信
PushResponse pushResponse = client.getAcsResponse(pushRequest);
System.out.printf("RequestId: %s, MessageId: %s\\n",
        pushResponse.getRequestId(), pushResponse.getMessageId());
```',
    ),
    'ContinuouslyPush' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息ID。

调用Push接口，设置Target为TBD，调用后获得的MessageId。它代表了一个已经保存到推送系统的消息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '500131',
          ),
        ),
        2 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标：

- **DEVICE**：根据设备推送
- **ACCOUNT**：根据账号推送
- **ALIAS**：根据别名推送

持续推送只支持这3种目标类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DEVICE',
            'enum' => 
            array (
              0 => 'DEVICE',
              1 => 'ACCOUNT',
              2 => 'ALIAS',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid1,deviceid2`（最多支持1000个）。
- Target=ACCOUNT，值如`account1,account2`（最多支持1000个）。
- Target=ALIAS，值如`alias1,alias2`（最多支持1000个）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a692961a92534047ad3625****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '500131',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MessageId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"RequestId\\": \\"500131\\"\\n}","errorExample":""},{"type":"xml","example":"\\n<ContinuouslyPushResponse>\\n  <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>  \\n  <MessageId>500131</MessageId>\\n</ContinuouslyPushResponse>","errorExample":""}]',
      'title' => '持续推送',
      'summary' => '执行预定义的持续推送任务。',
      'description' => '# 接口说明
本接口是用于解决[Push高级推送接口](~~2249916~~)中，无论是按设备推、按账号推、按别名推，在单次调用中都存在目标个数上限的问题。

- 使用持续推送意味着业务场景是要往大量设备上，发送同一条消息。这时候，应当合理调用持续推送接口，每次调用，聚合一组设备进行推送（目前按设备推、按账号推、按别名推，单次推送目标个数上限是1000）。我们会限制在同一个 MessageId 上推送的总次数为10000 。如确实需要更高限额，请联系技术支持评估具体场景。

- 使用这个接口前，需要调用Push接口，将Target设置为TBD（To Be Determined），填入消息内容，调用获得该消息在推送系统中的MessageId。然后，可以基于这个MessageId，重复调用此接口，指定不同的目标组，将此消息推送到这些目标上。

- 调用Push接口设置目标为TBD获得MessageId后，这个消息默认会在推送系统保存24个小时，过期之前，可以随时使用本接口进行指定目标推送。过期后不再允许推送。超出总次数上限后不再允许推送。

- 每次调用本接口指定设备时，消息都是立即推出，不支持设置定时推送。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# Java示例代码
```
ContinuouslyPushRequest continuouslyPushRequest = new ContinuouslyPushRequest();
continuouslyPushRequest.setAppKey(appKey);
// 设置持续推送的消息Id
continuouslyPushRequest.setMessageId("500131");
// 指定推送目标
// 可以继续用同一个`MessageId`，调用此接口指定其它设备，继续推送
continuouslyPushRequest.setTarget("DEVICE");
continuouslyPushRequest.setTargetValue("a692961a92534047ad362575f31f57b7");
ContinuouslyPushResponse continuouslyPushResponse = client.getAcsResponse(continuouslyPushRequest);
System.out.printf("RequestId: %s, MessageId: %s\\n",
        continuouslyPushResponse.getRequestId(), continuouslyPushResponse.getMessageId());
```',
    ),
    'CompleteContinuouslyPush' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息ID。

调用Push接口，设置Target为TBD，调用后获得的MessageId。它代表了一个已经保存到推送系统的消息。',
            'type' => 'string',
            'required' => true,
            'example' => '500131',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '500131',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MessageId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"RequestId\\": \\"500131\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<ContinuouslyPushResponse>\\n  <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>  \\n  <MessageId>500131</MessageId>\\n</ContinuouslyPushResponse>","errorExample":""}]',
      'title' => '完成持续推送任务',
      'summary' => '手动结束持续推送任务。',
      'description' => '# 接口说明

若不调用此接口以手动形式结束持续推送任务，持续推送任务将会在到达过期时间时自动结束。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'CancelPush' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '某次推送任务的消息ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '501029',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<PushMessageToAndroidResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n</PushMessageToAndroidResponse>","errorExample":""}]',
      'title' => '取消定时推送任务',
      'summary' => '取消某次尚未执行的定时推送任务。',
    ),
    'PushMessageToAndroid' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标。可取值：

- **DEVICE**：根据设备推送
- **ACCOUNT**：根据账号推送
- **ALIAS**：根据别名推送
- **TAG**：根据标签推送
- **ALL**：推送给全部设备',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
            'enum' => 
            array (
              0 => 'ALL',
              1 => 'DEVICE',
              2 => 'ACCOUNT',
              3 => 'ALIAS',
              4 => 'TAG',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。
- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。
- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。
- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。
- Target=ALL，值为**all**。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送的消息的标题。',
            'type' => 'string',
            'required' => true,
            'example' => 'my title',
          ),
        ),
        4 => 
        array (
          'name' => 'Body',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送的消息内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'my body',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreOffline',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息是否离线保存。StoreOffline默认设置为false。

若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'JobKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '501029',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid%s.Format',
            'errorMessage' => 'The specified %s format is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid%s.Empty',
            'errorMessage' => 'The specified %s cannot be empty.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'The specified parameter is invalid: %s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request processing is timeout.',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
      'title' => '推送消息给Android设备',
      'summary' => '推送消息给Android设备。',
      'description' => '# 接口说明

**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**

该接口默认只发送给在线设备，要发送离线保存消息请使用[推送高级接口](~~2249916~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PushMessageToiOS' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '24780725',
          ),
        ),
        1 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标。可取值：

- **DEVICE**：根据设备推送
- **ACCOUNT**：根据账号推送
- **ALIAS**：根据别名推送
- **TAG**：根据标签推送
- **ALL**：推送给全部设备',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
            'enum' => 
            array (
              0 => 'ALL',
              1 => 'DEVICE',
              2 => 'ACCOUNT',
              3 => 'ALIAS',
              4 => 'TAG',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。
- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。
- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。
- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。
- Target=ALL，值为**all**。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送的消息的标题。',
            'type' => 'string',
            'required' => true,
            'example' => 'my title',
          ),
        ),
        4 => 
        array (
          'name' => 'Body',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送的消息内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'my body',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreOffline',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息是否离线保存。StoreOffline默认设置为false。

若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'JobKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '501029',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
      'title' => '推送消息给iOS设备',
      'summary' => '推送消息给iOS设备。',
      'description' => '# 接口说明

**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**

该接口默认只发送给在线设备，要发送离线保存消息请使用[推送高级接口](~~2249916~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PushNoticeToAndroid' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标。可取值：

- **DEVICE**：根据设备推送
- **ACCOUNT**：根据账号推送
- **ALIAS**：根据别名推送
- **TAG**：根据标签推送
- **ALL**：推送给全部设备',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
            'enum' => 
            array (
              0 => 'ALL',
              1 => 'DEVICE',
              2 => 'ACCOUNT',
              3 => 'ALIAS',
              4 => 'TAG',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。
- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。
- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。
- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。
- Target=ALL，值为**ALL**。',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送的通知标题。',
            'type' => 'string',
            'required' => true,
            'example' => 'title',
          ),
        ),
        4 => 
        array (
          'name' => 'Body',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送的通知内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'body',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreOffline',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知是否离线保存。StoreOffline默认设置为false。

若保存，在推送时候用户不在线，在过期时间（ExpireTime）内用户上线时会被再次发送。ExpireTime默认为72小时。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'JobKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        7 => 
        array (
          'name' => 'ExtParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义的KV结构，供开发者扩展使用，针对Android设备。该参数要以JSON map的格式传入。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1","api_name":"PushNoticeToAndroidRequest"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '501029',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"501029\\",\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","type":"json"}]',
      'title' => '推送通知给Android设备',
      'summary' => '推送通知给Android设备，本接口仅通过阿里云自有通道进行推送。',
      'description' => '# 接口说明
**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**

该接口默认只发送给在线设备，要发送离线保存消息请使用[推送高级接口](~~2249916~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PushNoticeToiOS' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '24780725',
          ),
        ),
        1 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标。可取值：

- **DEVICE**：根据设备推送
- **ACCOUNT**：根据账号推送
- **ALIAS**：根据别名推送
- **TAG**：根据标签推送
- **ALL**：推送给全部设备',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
            'enum' => 
            array (
              0 => 'ALL',
              1 => 'DEVICE',
              2 => 'ACCOUNT',
              3 => 'ALIAS',
              4 => 'TAG',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。

- Target=DEVICE，值如`deviceid111,deviceid1111`（最多支持1000个）。
- Target=ACCOUNT，值如`account111,account222`（最多支持1000个）。
- Target=ALIAS，值如`alias111,alias222`（最多支持1000个）。
- Target=TAG，支持单Tag和多Tag，格式请参见[标签格式](~~434847~~)。
- Target=ALL，值为**ALL**。',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
          ),
        ),
        3 => 
        array (
          'name' => 'ApnsEnv',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS的通知是通过APNS中心来发送的，需要填写对应的环境信息。
- DEV：表示开发环境
- PRODUCT：表示生产环境',
            'type' => 'string',
            'required' => true,
            'example' => 'DEV',
            'enum' => 
            array (
              0 => 'DEV',
              1 => 'PRODUCT',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送的通知的标题。
- iOS 10+通知显示标题。
- iOS 8.2 <= iOS系统 < iOS 10：替换通知应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'title',
          ),
        ),
        5 => 
        array (
          'name' => 'Body',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送的通知内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'Hello World',
          ),
        ),
        6 => 
        array (
          'name' => 'JobKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送任务自定义标识，当JobKey不为空时，回执日志中会附带该字段。查看回执日志参见[回执日志](~~434651~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        7 => 
        array (
          'name' => 'ExtParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义的KV结构，开发者扩展用。

> 针对iOS设备，该参数要以JSON map的格式传入，否则会解析出错。',
            'type' => 'string',
            'required' => false,
            'example' => '{"k1":"ios","k2":"v2"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MessageId' => 
              array (
                'description' => '标志一次推送的消息ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '501029',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MessageId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"RequestId\\": \\"501029\\"\\n}","type":"json"}]',
      'title' => '推送通知给iOS设备',
      'summary' => '推送通知给iOS设备，iOS设备需要处于在线状态。',
      'description' => '**请确保在使用该接口前，以充分了解EMAS移动推送产品的[收费方式和价格](~~434638~~)。**',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckCertificate' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '1000000000',
            'minimum' => '0',
            'example' => '23267207',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'Android' => 
              array (
                'description' => '判断AppKey代表的是否是Android app：
- true
- false',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'IOS' => 
              array (
                'description' => '判断AppKey代表的是否是iOS app：
- true
- false',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
              'ProductionCertInfo' => 
              array (
                'description' => '访问生产环境的证书信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '证书状态，取值：

- **EXPIRED**：已过期
- **NOT_CONFIGURED**：未配置
- **NO_PASSWORD**：未配置密码
- **OK**：正常
- **REVOKED**：已撤销',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'REVOKED' => 'REVOKED',
                      'NO_PASSWORD' => 'NO_PASSWORD',
                      'EXPIRED' => 'EXPIRED',
                      'NOT_CONFIGURED' => 'NOT_CONFIGURED',
                      'OK' => 'OK',
                    ),
                    'example' => 'OK',
                  ),
                  'ExipreTime' => 
                  array (
                    'description' => '证书过期时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1764561600000',
                  ),
                ),
              ),
              'DevelopmentCertInfo' => 
              array (
                'description' => '访问开发环境/沙箱环境的证书信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '证书状态，取值：

- **EXPIRED**：已过期
- **NOT_CONFIGURED**：未配置
- **NO_PASSWORD**：未配置密码
- **OK**：正常
- **REVOKED**：已撤销',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'REVOKED' => 'REVOKED',
                      'NO_PASSWORD' => 'NO_PASSWORD',
                      'EXPIRED' => 'EXPIRED',
                      'NOT_CONFIGURED' => 'NOT_CONFIGURED',
                      'OK' => 'OK',
                    ),
                    'example' => 'EXPIRED',
                  ),
                  'ExipreTime' => 
                  array (
                    'description' => '证书过期时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1470024000000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid%s.NotFound',
            'errorMessage' => 'The specified %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountDisabled',
            'errorMessage' => 'Your account is not enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'The specified AppKey is not authorized.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"Android\\": false,\\n  \\"IOS\\": true,\\n  \\"ProductionCertInfo\\": {\\n    \\"Status\\": \\"OK\\",\\n    \\"ExipreTime\\": 1764561600000\\n  },\\n  \\"DevelopmentCertInfo\\": {\\n    \\"Status\\": \\"EXPIRED\\",\\n    \\"ExipreTime\\": 1470024000000\\n  }\\n}","errorExample":""}]',
      'title' => '查询证书状态',
      'summary' => '检测指定app的iOS证书过期时间及当前证书状态。',
      'description' => '- 如果返回的ExpireTime大于当前时间戳，并不代表证书一定可用，还需检查Status是否为OK。
- REVOKED来源于APNs服务器，如果证书处于REVOKED状态时，则对应环境中至少有一条推向APNs的推送失败。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPushRecords' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '333526247',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的起始时间，UTC时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-15T02:05:24Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间，UTC时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-29T06:24:58Z',
          ),
        ),
        3 => 
        array (
          'name' => 'PushType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送类型。取值：

- **MESSAGE**：表示消息。

- **NOTICE**：表示通知。',
            'type' => 'string',
            'required' => false,
            'example' => 'NOTICE',
            'enum' => 
            array (
              0 => 'MESSAGE',
              1 => 'NOTICE',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送目标：

- **DEVICE**：根据设备推送。

- **ACCOUNT**：根据账号推送。

- **ALIAS**：根据别名推送。

- **TAG**：根据标签推送。

- **ALL**：推送给全部设备。

- **TBD**：初始化持续推送，推送目标由后续的ContinuouslyPush接口指定。',
            'type' => 'string',
            'required' => false,
            'example' => 'DEVICE',
            'enum' => 
            array (
              0 => 'ACCOUNT',
              1 => 'ALIAS',
              2 => 'DEVICE',
              3 => 'TAG',
              4 => 'TBD',
              5 => 'FILE',
              6 => 'ALL',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送来源。可取值：

- **API**：OpenAPI发起的推送，含OpenAPI平台控制台发起的推送。

- **CONSOLE**：通过移动推送控制台推送。',
            'type' => 'string',
            'required' => false,
            'example' => 'API',
            'enum' => 
            array (
              0 => 'CONSOLE',
              1 => 'API',
              2 => 'OpenAPIExplorer',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，根据MessageId、Title、Body字段进行查询。系统对推送的title和body进行了中文分词，使用分词进行查询，非子字符串匹配查询。',
            'type' => 'string',
            'required' => false,
            'example' => '统计数据测试通知805',
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '废弃参数，不再使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFPpkmhCPm*****************xjk=',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的条目数量，默认值为20, 最大为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送记录的当前页数, 默认为1，最大10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '8',
            'default' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '废弃参数，不再使用。',
                'type' => 'string',
                'example' => 'i91D***********kXIh/dVBEQ==',
              ),
              'PageSize' => 
              array (
                'description' => '每页的条目数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B24B396-249D-55E4-8CA1-66C9B50BB734',
              ),
              'Total' => 
              array (
                'description' => '记录总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '193',
              ),
              'Page' => 
              array (
                'description' => '推送记录的当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '11',
              ),
              'PushInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PushInfo' => 
                  array (
                    'description' => '具体通知/消息的详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '消息状态。可取值：

- **WAITING**：等待中。

- **SENT**：已推送。

- **CANCELED**：已取消。
',
                          'type' => 'string',
                          'example' => 'SENT',
                        ),
                        'MessageId' => 
                        array (
                          'description' => '消息ID。',
                          'type' => 'string',
                          'example' => '510431',
                        ),
                        'AppKey' => 
                        array (
                          'description' => 'AppKey信息。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '333526247',
                        ),
                        'DeviceType' => 
                        array (
                          'description' => '设备类型。取值：

- **ALL**：所有类型。

- **IOS**：iOS设备。

- **ANDROID**：Android设备。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'ALL' => 'ALL',
                            'IOS' => 'IOS',
                            'ANDROID' => 'ANDROID',
                          ),
                          'example' => 'ANDROID',
                        ),
                        'PushType' => 
                        array (
                          'description' => '推送类型。取值：

- **MESSAGE**：消息。

- **NOTICE**：通知。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'MESSAGE' => 'MESSAGE',
                            'NOTICE' => 'NOTICE',
                          ),
                          'example' => 'NOTICE',
                        ),
                        'Body' => 
                        array (
                          'description' => '推送的body字段。',
                          'type' => 'string',
                          'example' => 'abcd',
                        ),
                        'Title' => 
                        array (
                          'description' => '推送的title字段。',
                          'type' => 'string',
                          'example' => 'sssss',
                        ),
                        'Source' => 
                        array (
                          'description' => '推送源类型。可取值：

- **API**：OpenAPI发起的推送，含OpenAPI平台控制台发起的推送。

- **CONSOLE**：通过移动推送控制台推送。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'CONSOLE' => 'CONSOLE',
                            'API' => 'API',
                          ),
                          'example' => 'DEVICE',
                        ),
                        'PushTime' => 
                        array (
                          'description' => '推送时间，UTC时间，ISO-8601格式, 格式为 YYYY-MM-DDThh:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2021-09-15T02:05:24Z',
                        ),
                        'Target' => 
                        array (
                          'description' => '推送目标：

- **ACCOUNT**：根据账号推送。

- **ALIAS**：根据别名推送。

- **DEVICE**：根据设备推送。

- **TAG**：根据标签推送。

- **ALL**：推送给全部设备。

- **TBD**：初始化持续推送，推送目标由后续的ContinuouslyPush接口指定。',
                          'type' => 'string',
                          'example' => 'DEVICE',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountDisabled',
            'errorMessage' => 'Your account is not enabled.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
          1 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request processing is timeout.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"i91D***********kXIh/dVBEQ==\\",\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"9B24B396-249D-55E4-8CA1-66C9B50BB734\\",\\n  \\"Total\\": 193,\\n  \\"Page\\": 11,\\n  \\"PushInfos\\": {\\n    \\"PushInfo\\": [\\n      {\\n        \\"Status\\": \\"SENT\\",\\n        \\"MessageId\\": \\"510431\\",\\n        \\"AppKey\\": 333526247,\\n        \\"DeviceType\\": \\"ANDROID\\",\\n        \\"PushType\\": \\"NOTICE\\",\\n        \\"Body\\": \\"abcd\\",\\n        \\"Title\\": \\"sssss\\",\\n        \\"Source\\": \\"DEVICE\\",\\n        \\"PushTime\\": \\"2021-09-15T02:05:24Z\\",\\n        \\"Target\\": \\"DEVICE\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPushRecordsResponse>\\n    <Page>1</Page>\\n    <PageSize>20</PageSize>\\n    <PushInfos>\\n        <PushInfo>\\n            <AppKey>23419851</AppKey>\\n            <Body>云智能测试推送内容</Body>\\n            <DeviceType>ANDROID</DeviceType>\\n            <MessageId>60**************</MessageId>\\n            <PushTime>2023-01-01T08:12:34Z</PushTime>\\n            <PushType>NOTICE</PushType>\\n            <Source>API</Source>\\n            <Status>SENT</Status>\\n            <Target>DEVICE</Target>\\n            <Title>通知标题</Title>\\n        </PushInfo>\\n    </PushInfos>\\n    <RequestId>DCA3F8E3-8D6A-5492-B059-48F56B022D8E</RequestId>\\n    <Total>1</Total>\\n</QueryPushRecordsResponse>","errorExample":""}]',
      'title' => '查询推送记录',
      'summary' => '分页查询推送记录，并提供一些简单的筛选能力。',
    ),
    'QueryDeviceStat' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的开始时间。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。

> 统计开始日期为开始时间当天北京时间0点。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-07-28T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间。时间格式按照ISO8601标准表示，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。

> 统计结束日期为结束时间当天。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-07-29T00:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备类型，取值范围为：

- **iOS**：iOS设备
- **ANDROID**：Android设备
- **ALL**：全部类型设备',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'ALL' => 'ALL',
              'ANDROID' => 'ANDROID',
              'iOS' => 'iOS',
            ),
            'example' => 'iOS',
            'enum' => 
            array (
              0 => 'iOS',
              1 => 'ANDROID',
              2 => 'ALL',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的是新增设备数还是历史累计设备数。可取值：

- **NEW**：新增设备
- **TOTAL**：累计设备数',
            'type' => 'string',
            'required' => true,
            'example' => 'TOTAL',
            'enum' => 
            array (
              0 => 'NEW',
              1 => 'TOTAL',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'AppDeviceStats' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppDeviceStat' => 
                  array (
                    'description' => '设备统计数据AppDeviceStat组成的数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备统计数据对象AppDeviceStat。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Time' => 
                        array (
                          'description' => '截止时间。时间格式按照ISO8601标准表示，并使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2016-07-28T16:00:00Z',
                        ),
                        'DeviceType' => 
                        array (
                          'description' => '设备类型。',
                          'type' => 'string',
                          'example' => 'iOS',
                        ),
                        'Count' => 
                        array (
                          'description' => '设备数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"AppDeviceStats\\": {\\n    \\"AppDeviceStat\\": [\\n      {\\n        \\"Time\\": \\"2016-07-28T16:00:00Z\\",\\n        \\"DeviceType\\": \\"iOS\\",\\n        \\"Count\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceStatResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <AppDeviceStats>\\n        <Time>2016-07-27T16:00:00Z</Time>\\n        <DeviceType>iOS</DeviceType>\\n        <Count>90</Count>\\n    </AppDeviceStats>\\n    <AppDeviceStats>\\n        <Time>2016-07-28T16:00:00Z</Time>\\n        <DeviceType>iOS</DeviceType>\\n        <Count>100</Count>\\n    </AppDeviceStats>\\n</QueryDeviceStatResponse>","errorExample":""}]',
      'title' => '设备新增与留存',
      'summary' => '查询app维度的设备统计。',
      'description' => '> 目前只支持返回天的数据，天维度最多支持查31天内数据，天以北京时间为准。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryUniqueDeviceStat' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的起始时间，ISO-8601格式，格式为 YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-07-25T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间，ISO-8601格式，格式为 YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-07-26T00:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Granularity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按天或者按月查询。可取值：

- DAY：天
- MONTH：月',
            'type' => 'string',
            'required' => true,
            'example' => 'DAY',
            'enum' => 
            array (
              0 => 'DAY',
              1 => 'MONTH',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'AppDeviceStats' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppDeviceStat' => 
                  array (
                    'description' => '设备统计数据AppDeviceStat组成的数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备统计数据对象AppDeviceStat。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Time' => 
                        array (
                          'description' => '时间片。',
                          'type' => 'string',
                          'example' => '2016-07-25T00:00:00Z',
                        ),
                        'Count' => 
                        array (
                          'description' => '去重设备数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"AppDeviceStats\\": {\\n    \\"AppDeviceStat\\": [\\n      {\\n        \\"Time\\": \\"2016-07-25T00:00:00Z\\",\\n        \\"Count\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryUniqueDeviceStatResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <AppDeviceStats>\\n      <AppDeviceStat>\\n        <Time>2016-07-25T00:00:00Z</Time>\\n        <Count>100</Count>\\n      </AppDeviceStat>\\n      <AppDeviceStat>\\n        <Time>2016-07-26T00:00:00Z</Time>\\n        <Count>100</Count>\\n      </AppDeviceStat>\\n    </AppDeviceStats>\\n</QueryUniqueDeviceStatResponse>","errorExample":""}]',
      'title' => '去重设备统计',
      'summary' => '查询app维度的去重设备统计。',
      'description' => '> 目前只支持返回天的数据，天维度最多支持查31天内数据。去重设备统计是以月为周期计数，每个月月初都会清零重新计数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23419851',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备在推送系统中的唯一标识，一次只能查询一个。',
            'type' => 'string',
            'required' => true,
            'example' => 'a64ae296f3b04a58a05b30c9****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6EEF262B-EA7D-41DC-89B9-20F3D1E28194',
              ),
              'DeviceInfo' => 
              array (
                'description' => '设备详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '设备绑定的账户。',
                    'type' => 'string',
                    'example' => 'test@aliyun.com',
                  ),
                  'LastOnlineTime' => 
                  array (
                    'description' => '最近一次上线时间。',
                    'type' => 'string',
                    'example' => '2018-03-27T02:19:40Z',
                  ),
                  'PhoneNumber' => 
                  array (
                    'description' => '手机号。',
                    'type' => 'string',
                    'example' => '133********',
                  ),
                  'PushEnabled' => 
                  array (
                    'description' => '是否开启推送功能。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'DeviceType' => 
                  array (
                    'description' => '设备类型。',
                    'type' => 'string',
                    'example' => 'iOS',
                  ),
                  'DeviceId' => 
                  array (
                    'description' => '设备ID。',
                    'type' => 'string',
                    'example' => 'a64ae296f3b04a58a05b30c95****',
                  ),
                  'Online' => 
                  array (
                    'description' => '是否在线。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Tags' => 
                  array (
                    'description' => '设备绑定的标签。',
                    'type' => 'string',
                    'example' => 'test_tag,test_tag2',
                  ),
                  'DeviceToken' => 
                  array (
                    'description' => '设备令牌。',
                    'type' => 'string',
                    'example' => '5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df',
                  ),
                  'Alias' => 
                  array (
                    'description' => '设备绑定的别名。',
                    'type' => 'string',
                    'example' => 'test_alias,test_alias2',
                  ),
                  'Brand' => 
                  array (
                    'description' => '设备品牌',
                    'type' => 'string',
                    'example' => 'HUAWEI',
                  ),
                  'Model' => 
                  array (
                    'description' => '设备型号',
                    'type' => 'string',
                    'example' => 'VOG-AL00',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6EEF262B-EA7D-41DC-89B9-20F3D1E28194\\",\\n  \\"DeviceInfo\\": {\\n    \\"Account\\": \\"test@aliyun.com\\",\\n    \\"LastOnlineTime\\": \\"2018-03-27T02:19:40Z\\",\\n    \\"PhoneNumber\\": \\"133********\\",\\n    \\"PushEnabled\\": true,\\n    \\"DeviceType\\": \\"iOS\\",\\n    \\"DeviceId\\": \\"a64ae296f3b04a58a05b30c95****\\",\\n    \\"Online\\": false,\\n    \\"Tags\\": \\"test_tag,test_tag2\\",\\n    \\"DeviceToken\\": \\"5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df\\",\\n    \\"Alias\\": \\"test_alias,test_alias2\\",\\n    \\"Brand\\": \\"HUAWEI\\",\\n    \\"Model\\": \\"VOG-AL00\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceInfoResponse>\\n    <RequestId>6EEF262B-EA7D-41DC-89B9-20F3D1E28194</RequestId>\\n    <DeviceInfo>\\n        <Account>test@aliyun.com</Account>\\n        <LastOnlineTime>2018-03-27T02:19:40Z</LastOnlineTime>\\n        <PhoneNumber>133********</PhoneNumber>\\n        <PushEnabled>true</PushEnabled>\\n        <DeviceType>iOS</DeviceType>\\n        <DeviceId>a64ae296f3b04a58a05b30c95****</DeviceId>\\n        <Online>false</Online>\\n        <Tags>test_tag,test_tag2</Tags>\\n        <DeviceToken>5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df</DeviceToken>\\n        <Alias>test_alias,test_alias2</Alias>\\n    </DeviceInfo>\\n</QueryDeviceInfoResponse>","errorExample":""}]',
      'title' => '查询设备详情',
      'summary' => '查询指定设备详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPushStatByApp' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的起始时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-07-25T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间，ISO-8601格式，格式为YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-07-29T00:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Granularity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回的数据粒度，**HOUR**：是小时粒度，**DAY**：是天粒度。

小时粒度允许查24小时内数据，天粒度允许查31内天数据，目前只支持天粒度查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'DAY',
            'enum' => 
            array (
              0 => 'DAY',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'AppPushStats' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppPushStat' => 
                  array (
                    'description' => 'APP推送统计AppPushStat组成的数据，根据时间粒度返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Time' => 
                        array (
                          'description' => '时间。',
                          'type' => 'string',
                          'example' => '2016-07-25T00:00:00Z',
                        ),
                        'DeletedCount' => 
                        array (
                          'description' => '通知在设备上被清除的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'OpenedCount' => 
                        array (
                          'description' => '通知在设备上被点击的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '30',
                        ),
                        'SmsReceiveSuccessCount' => 
                        array (
                          'description' => '可为空，短信复合推送成功收到的短信数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SmsSkipCount' => 
                        array (
                          'description' => '可为空，短信复合推送跳过发送短信的数目，例如未绑手机号。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SmsReceiveFailedCount' => 
                        array (
                          'description' => '可为空，短信复合推送发出但是手机未收到的短信数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SmsFailedCount' => 
                        array (
                          'description' => '可为空，短信复合推送短信发送失败的数目，例如未开通对应服务、未授权通过、参数错误等。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ReceivedCount' => 
                        array (
                          'description' => '实际送达到设备的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '60',
                        ),
                        'SentCount' => 
                        array (
                          'description' => '推送服务端实际发出的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'SmsSentCount' => 
                        array (
                          'description' => '可为空，短信复合推送发出的短信数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'AcceptCount' => 
                        array (
                          'description' => '推送服务端接收到的推送数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '120',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"AppPushStats\\": {\\n    \\"AppPushStat\\": [\\n      {\\n        \\"Time\\": \\"2016-07-25T00:00:00Z\\",\\n        \\"DeletedCount\\": 10,\\n        \\"OpenedCount\\": 30,\\n        \\"SmsReceiveSuccessCount\\": 0,\\n        \\"SmsSkipCount\\": 0,\\n        \\"SmsReceiveFailedCount\\": 0,\\n        \\"SmsFailedCount\\": 0,\\n        \\"ReceivedCount\\": 60,\\n        \\"SentCount\\": 100,\\n        \\"SmsSentCount\\": 0,\\n        \\"AcceptCount\\": 120\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryPushStatByAppResponse>\\n   <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <AppPushStats>\\n      <AppPushStat>\\n        <Time>2016-07-25T00:00:00Z</Time>\\n        <AcceptCount>120</AcceptCount>\\n        <SentCount>100</SentCount>\\n        <ReceivedCount>60</ReceivedCount>\\n        <OpenedCount>30</OpenedCount>\\n        <DeletedCount>10</DeletedCount>\\n      </AppPushStat>\\n      <AppPushStat>\\n        <time>2016-07-29T00:00:00Z</time>\\n        <AcceptCount>120</AcceptCount>\\n        <SentCount>100</SentCount>\\n        <ReceivedCount>60</ReceivedCount>\\n        <OpenedCount>30</OpenedCount>\\n        <DeletedCount>10</DeletedCount>\\n      </AppPushStat>\\n    </AppPushStats>\\n</QueryPushStatByAppResponse>","errorExample":""}]',
      'title' => 'App维度推送统计',
      'summary' => '查询app维度的推送统计。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPushStatByMsg' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推送的消息ID，推送之后会返回该ID。
> 推送数据隔天展示，不支持查询今日数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '510427',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CF195C34-98FB-491A-98D7-19CBC1FA880B',
              ),
              'PushStats' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PushStat' => 
                  array (
                    'description' => '消息/通知的推送结果统计PushStat组成的数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MessageId' => 
                        array (
                          'description' => '消息ID。',
                          'type' => 'string',
                          'example' => '510427',
                        ),
                        'DeletedCount' => 
                        array (
                          'description' => '通知在设备上被清除的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'OpenedCount' => 
                        array (
                          'description' => '通知在设备上被点击的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '30',
                        ),
                        'SmsReceiveSuccessCount' => 
                        array (
                          'description' => '（可为空）短信复合推送成功收到的短信数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SmsSkipCount' => 
                        array (
                          'description' => '（可为空）短信复合推送跳过发送短信的数目，例如未绑手机号。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SmsReceiveFailedCount' => 
                        array (
                          'description' => '（可为空）短信复合推送发出但是手机未收到的短信数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SmsFailedCount' => 
                        array (
                          'description' => '（可为空）短信复合推送短信发送失败的数目，例如未开通对应服务、未授权通过、参数错误等。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ReceivedCount' => 
                        array (
                          'description' => '实际送达到设备的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '60',
                        ),
                        'SentCount' => 
                        array (
                          'description' => '推送服务端实际发出的数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'SmsSentCount' => 
                        array (
                          'description' => '（可为空）短信复合推送发出的短信数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'AcceptCount' => 
                        array (
                          'description' => '推送服务端接收到的推送数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '120',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF195C34-98FB-491A-98D7-19CBC1FA880B\\",\\n  \\"PushStats\\": {\\n    \\"PushStat\\": [\\n      {\\n        \\"MessageId\\": \\"510427\\",\\n        \\"DeletedCount\\": 10,\\n        \\"OpenedCount\\": 30,\\n        \\"SmsReceiveSuccessCount\\": 0,\\n        \\"SmsSkipCount\\": 0,\\n        \\"SmsReceiveFailedCount\\": 0,\\n        \\"SmsFailedCount\\": 0,\\n        \\"ReceivedCount\\": 60,\\n        \\"SentCount\\": 100,\\n        \\"SmsSentCount\\": 0,\\n        \\"AcceptCount\\": 120\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryPushStatByMsgResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <PushStats>\\n      <PushStat>\\n        <MessageId>510427</MessageId>\\n        <AcceptCount>120</AcceptCount>\\n        <SentCount>100</SentCount>\\n        <ReceivedCount>60</ReceivedCount>\\n        <OpenedCount>30</OpenedCount>\\n        <DeletedCount>10</DeletedCount>\\n      </PushStat>\\n    </PushStats>\\n</QueryPushStatByMsgResponse>","errorExample":""}]',
      'title' => '任务维度推送统计',
      'summary' => '查询消息维度的推送统计。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckDevices' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23419851',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备在推送的唯一标识，32位，数字和小写字母组合，多个设备查询用“,”分隔，一次最多查100个。',
            'type' => 'string',
            'required' => true,
            'example' => 'ae296f3b04a58a05b30c95f****,ae296f3b04a58a05b30c95f****,ae296f3b04a58a05b30c95f****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'DeviceCheckInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceCheckInfo' => 
                  array (
                    'description' => '批量设备有效性检查结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceId' => 
                        array (
                          'description' => '设备ID。',
                          'type' => 'string',
                          'example' => 'ae296f3b04a58a05b30c95f****',
                        ),
                        'Available' => 
                        array (
                          'description' => '是否可用。',
                          'type' => 'boolean',
                          'example' => 'true',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"DeviceCheckInfos\\": {\\n    \\"DeviceCheckInfo\\": [\\n      {\\n        \\"DeviceId\\": \\"ae296f3b04a58a05b30c95f****\\",\\n        \\"Available\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<CheckDevicesResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <DeviceCheckInfos>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>false</Available>\\n        </DeviceCheckInfo>\\n    </DeviceCheckInfos>\\n</CheckDevicesResponse>","errorExample":""}]',
      'title' => '批量检查设备有效性',
      'summary' => '验证指定的一组设备的有效性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckDevice' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23419851',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
            'type' => 'string',
            'required' => true,
            'example' => 'ae296f3b04a58a05b30c95f****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Available' => 
              array (
                'description' => '是否可用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Push::2016-08-01::CheckDevices',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Available\\": true,\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<CheckDevicesResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <DeviceCheckInfos>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>true</Available>\\n        </DeviceCheckInfo>\\n        <DeviceCheckInfo>\\n            <DeviceId>ae296f3b04a58a05b30c95f1****</DeviceId>\\n            <Available>false</Available>\\n        </DeviceCheckInfo>\\n    </DeviceCheckInfos>\\n</CheckDevicesResponse>","errorExample":""}]',
      'title' => '验证设备有效性',
      'summary' => '验证指定设备的有效性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindTag' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备或account或alias，多个key用逗号分隔，最多支持1000个。',
            'type' => 'string',
            'required' => true,
            'example' => 'e2ba19de97604f55b16557673****',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ClientKey的类型。可取值：

- **DEVICE**：设备
- **ACCOUNT**：账号
- **ALIAS**：别名',
            'type' => 'string',
            'required' => true,
            'example' => 'DEVICE',
            'enum' => 
            array (
              0 => 'DEVICE',
              1 => 'ACCOUNT',
              2 => 'ALIAS',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的Tag，多个Tag用逗号分隔，一次最多能绑定10个Tag。标签名称设置要小于等于128个字符（中文算1个），每个App最多可创建10000个标签，单设备可以绑定多个标签。
>不建议在单个标签上绑定超过十万级设备，否则，发起对该标签的推送可能需要较长的处理时间，无法保障响应速度。此种情况下，建议您采用全推方式，或将设备集合拆分到更细粒度的标签，多次调用推送接口分别推送给这些标签来避免此问题。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_tag,test_tag2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82FD0A09-5BB8-40FB-8221-9A11FE92D620',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountDisabled',
            'errorMessage' => 'Your account is not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid%s.Format',
            'errorMessage' => 'The specified %s format is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid%s.NotFound',
            'errorMessage' => 'The specified %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"82FD0A09-5BB8-40FB-8221-9A11FE92D620\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<BindTagResponse>\\n    <RequestId>82FD0A09-5BB8-40FB-8221-9A11FE92D620</RequestId>\\n</BindTagResponse>","errorExample":""}]',
      'title' => '绑定标签',
      'summary' => '将TAG绑定到指定的目标（设备、账号或别名），TAG绑定在10分钟内生效。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindTag' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备、账号或别名，多个key用逗号分隔，最多支持1000个。',
            'type' => 'string',
            'required' => true,
            'example' => 'e2ba19de97604f55b16557673****',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ClientKey的类型。可取值：

- **DEVICE**：设备
- **ACCOUNT**：账号
- **ALIAS**：别名',
            'type' => 'string',
            'required' => true,
            'example' => 'DEVICE',
            'enum' => 
            array (
              0 => 'DEVICE',
              1 => 'ACCOUNT',
              2 => 'ALIAS',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的Tag，多个Tag用逗号分隔，系统总共支持1万个Tag，此接口一次最多能解绑10个Tag。长度限制：不大于128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_tag1,test_tag2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\"\\n}","type":"json"}]',
      'title' => '解绑标签',
      'summary' => '解绑指定的TAG和其目标之间的关系。',
    ),
    'RemoveTag' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的Tag名称。单次只能删除一个Tag。长度限制：不大于128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_tag',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '23000F3C-0EFE-4C89-82EE-E04F42D37B3C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23000F3C-0EFE-4C89-82EE-E04F42D37B3C\\"\\n}","type":"json"}]',
      'title' => '删除标签',
      'summary' => '删除app下的TAG。',
      'description' => '标签删除需要一定的删除时间，这个时间根据绑定该标签的目标数而定，请勿在删除标签后短时间内重新创建同名标签，或批量删除标签后批量重新创建标签。建议同一个app删除和创建同一名称tag的间隔时间不小于5分钟，批量删除后创建tag建议间隔时间不小于删除数量×5分钟。',
    ),
    'QueryTags' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备、账号或别名， 每次只能查询1个clientKey。',
            'type' => 'string',
            'required' => true,
            'example' => 'e2ba19de97604f55b165576****',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ClientKey的类型。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'ACCOUNT' => '账号',
              'ALIAS' => '别名',
              'DEVICE' => '设备',
            ),
            'example' => 'DEVICE',
            'enum' => 
            array (
              0 => 'DEVICE',
              1 => 'ACCOUNT',
              2 => 'ALIAS',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D68AE5C6-8AAF-46C9-B627-3FDACD1A4168',
              ),
              'TagInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagInfo' => 
                  array (
                    'description' => 'Tag列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagName' => 
                        array (
                          'description' => '绑定的Tag名称。',
                          'type' => 'string',
                          'example' => 'test_tag2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68AE5C6-8AAF-46C9-B627-3FDACD1A4168\\",\\n  \\"TagInfos\\": {\\n    \\"TagInfo\\": [\\n      {\\n        \\"TagName\\": \\"test_tag2\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTagsResponse>\\n    <RequestId>1197FEB8-3644-4355-A96D-E332F45470EA</RequestId>\\n    <TagInfos>\\n        <TagInfo>\\n            <TagName>test_tag2</TagName>\\n        </TagInfo>\\n        <TagInfo>\\n            <TagName>test_tag1</TagName>\\n        </TagInfo>\\n    </TagInfos>\\n</QueryTagsResponse>","errorExample":""}]',
      'title' => '查询标签列表',
      'summary' => '查询指定对象（设备、账号或别名）的TAG列表。',
    ),
    'ListTags' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6EEF262B-EA7D-41DC-89B9-20F3D1E28194',
              ),
              'TagInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagInfo' => 
                  array (
                    'description' => 'Tag列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagName' => 
                        array (
                          'description' => 'Tag名称。',
                          'type' => 'string',
                          'example' => 'test_tag2',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request processing is timeout.',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6EEF262B-EA7D-41DC-89B9-20F3D1E28194\\",\\n  \\"TagInfos\\": {\\n    \\"TagInfo\\": [\\n      {\\n        \\"TagName\\": \\"test_tag2\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取标签列表',
      'summary' => '查询app的标签列表，最多返回100条记录。',
    ),
    'BindAlias' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
            'type' => 'string',
            'required' => true,
            'example' => 'e2ba19de97604f55b16557673****',
          ),
        ),
        2 => 
        array (
          'name' => 'AliasName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要绑定的别名。

一次最多只能绑定10个，多个alias用逗号分隔，alias最长128个字节（中文算三个字节），一个设备最多绑定128个别名，一个别名最多允许绑定128个设备。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_alias',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid%s.Format',
            'errorMessage' => 'The specified %s format is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid%s.BytesExceed',
            'errorMessage' => 'The specified %s exceeds the %s bytes limit.',
          ),
          2 => 
          array (
            'errorCode' => 'AccountDisabled',
            'errorMessage' => 'Your account is not enabled.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid%s.NotFound',
            'errorMessage' => 'The specified %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error. Please try again. If the error still exists, submit a ticket.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\"\\n}","errorExample":""},{"type":"xml","example":"<BindAliasResponse>\\n    <RequestId>159E4422-6624-4750-8943-DFD98D34858C</RequestId>\\n</BindAliasResponse>","errorExample":""}]',
      'title' => '绑定别名',
      'summary' => '绑定设备和别名的关系。',
      'description' => '一次最多绑定10个别名，绑定之后立即生效。',
    ),
    'UnbindAlias' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
            'type' => 'string',
            'required' => true,
            'example' => 'e2ba19de97604f55b16557673****',
          ),
        ),
        2 => 
        array (
          'name' => 'AliasName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要绑定的alias。

Alias支持128个字节（一个中文字符算3个字节），当“UnbindAll”为”false”时该字段必填，一次最多解绑10个，多个alias用逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_alias',
          ),
        ),
        3 => 
        array (
          'name' => 'UnbindAll',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否全部解绑，默认为”false”。

如果值为”true”，则解绑一个设备当前绑定的所有别名；如果值为”false”，则解绑”AliasName”指定的别名。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<UnbindAliasResponse>\\n    <RequestId>82FD0A09-5BB8-40FB-8221-9A11FE92D620</RequestId>\\n</UnbindAliasResponse>","errorExample":""}]',
      'title' => '解绑别名',
      'summary' => '解绑别名，解绑立即生效。',
    ),
    'QueryAliases' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备在推送的唯一标识，32位，数字和小写字母组合。',
            'type' => 'string',
            'required' => true,
            'example' => 'e2ba19de97604f55b165576****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '159E4422-6624-4750-8943-DFD98D34858C',
              ),
              'AliasInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AliasInfo' => 
                  array (
                    'description' => '别名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AliasName' => 
                        array (
                          'description' => '别名名称。',
                          'type' => 'string',
                          'example' => 'test_alias1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"159E4422-6624-4750-8943-DFD98D34858C\\",\\n  \\"AliasInfos\\": {\\n    \\"AliasInfo\\": [\\n      {\\n        \\"AliasName\\": \\"test_alias1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryAliasesResponse>\\n    <RequestId>159E4422-6624-4750-8943-DFD98D34858C</RequestId>\\n    <AliasInfos>\\n        <AliasName>test_alias1</AliasName>\\n    </AliasInfos>\\n</QueryAliasesResponse>","errorExample":""}]',
      'title' => '查询别名',
      'summary' => '查询指定设备绑定的别名列表。',
    ),
    'QueryDevicesByAlias' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'Alias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '别名，一次仅支持查询一个。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_alias',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6A9FD644-35A5-40E4-89B0-2021CAEDC1B4',
              ),
              'DeviceIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceId' => 
                  array (
                    'description' => '设备ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => 'f6e43770afb944a1a879b4613****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6A9FD644-35A5-40E4-89B0-2021CAEDC1B4\\",\\n  \\"DeviceIds\\": {\\n    \\"DeviceId\\": [\\n      \\"f6e43770afb944a1a879b4613****\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '通过别名查询设备列表',
      'summary' => '通过别名查询对应的设备列表。',
    ),
    'QueryDevicesByAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户名称，一次仅支持查询一个。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_account',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A8A24108-2AD0-4F6E-81C7-A8A24C2C2AD0',
              ),
              'DeviceIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceId' => 
                  array (
                    'description' => '设备ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => 'f6e43770afb944a1a879b46130ZZ****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountLimitExceed',
            'errorMessage' => 'The number of devices bound to the account exceeds 10000.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A8A24108-2AD0-4F6E-81C7-A8A24C2C2AD0\\",\\n  \\"DeviceIds\\": {\\n    \\"DeviceId\\": [\\n      \\"f6e43770afb944a1a879b46130ZZ****\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '通过账户查询设备列表',
      'summary' => '通过账户名称查询对应的设备列表。',
    ),
    'BindPhone' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '27725900',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的唯一标识，32位，数字和小写字母组合。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'eb5f741d83d04d34807d229999eefa52',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '1381111****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0D1126F0-F8FF-513D-BAFA-F140447BDED4',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0D1126F0-F8FF-513D-BAFA-F140447BDED4\\"\\n}","errorExample":""},{"type":"xml","example":"<BindPhoneResponse>\\n    <RequestId>0D1126F0-F8FF-513D-BAFA-F140447BDED4</RequestId>\\n</BindPhoneResponse>","errorExample":""}]',
      'title' => '绑定手机号码',
      'summary' => '绑定设备与手机号的关系。',
    ),
    'UnbindPhone' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AppKey信息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '23267207',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的唯一标识，32位，数字和小写字母组合。',
            'type' => 'string',
            'required' => true,
            'example' => 'eb5f741d83d04d34807d229999eefa52',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0D1126F0-F8FF-513D-BAFA-F140447BDED4',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0D1126F0-F8FF-513D-BAFA-F140447BDED4\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindPhoneResponse>\\n    <RequestId>0D1126F0-F8FF-513D-BAFA-F140447BDED4</RequestId>\\n</UnbindPhoneResponse>","errorExample":""}]',
      'title' => '解绑手机号码',
      'summary' => '解绑指定设备上已绑定的手机号码。',
    ),
    'ListSummaryApps' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC',
              ),
              'SummaryAppInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SummaryAppInfo' => 
                  array (
                    'description' => 'app详情，SummaryAppInfo组成的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppName' => 
                        array (
                          'description' => '应用的名称。',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'AppKey' => 
                        array (
                          'description' => 'AppKey信息。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '23****07',
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
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Mhub::2017-08-25::ListApps',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC\\",\\n  \\"SummaryAppInfos\\": {\\n    \\"SummaryAppInfo\\": [\\n      {\\n        \\"AppName\\": \\"abc\\",\\n        \\"AppKey\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSummaryAppsResponse>\\n    <RequestId>9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC</RequestId>\\n    <SummaryAppInfos>\\n        <AppName>abc</AppName>\\n    </SummaryAppInfos>\\n</ListSummaryAppsResponse>","errorExample":""}]',
      'title' => '查询用户已创建的app列表',
      'summary' => '查询云账号下所有app的列表。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudpush.aliyuncs.com',
    ),
  ),
);
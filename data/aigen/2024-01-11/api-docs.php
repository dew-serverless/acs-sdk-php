<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'aigen',
    'version' => '2024-01-11',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GenerateCosplayImage',
        1 => 'InteractiveFullSegmentation',
        2 => 'InteractiveScribbleSegmentation',
        3 => 'GenerateTextDeformation',
        4 => 'GenerateTextTexture',
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
    'GenerateCosplayImage' => 
    array (
      'summary' => '本文介绍生成专区（aigen）类目下的Cosplay-动漫人物生成GenerateCosplayImage的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FaceImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入的人脸图像URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过4 MB。
- 人脸图像：大于等于256x256像素，小于等于5760x3240像素，长宽比不超过1:2。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入的模板图像 URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过4 MB。
- 模板图像：大于等于256x256像素，小于等于5760x3240像素，长宽比不超过1:1.5，如果超过将自适应裁剪至1:1.5。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Style',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成风格。取值范围：
- 0：真人形象（realportrait）
- 1：3D卡通形象（3dcartoon）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '59697D68-2A6E-4553-89BD-0FADD07881E8',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => 'Cosplay-人物动漫化生成结果图的URL地址。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '提交异步任务后的提示信息。',
                'type' => 'string',
                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59697D68-2A6E-4553-89BD-0FADD07881E8\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateCosplayImageResponse>\\n    <RequestId>59697D68-2A6E-4553-89BD-0FADD07881E8</RequestId>\\n    <Data>\\n        <ResultUrl>https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&amp;Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****</ResultUrl>\\n    </Data>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateCosplayImageResponse>","errorExample":""}]',
      'title' => 'Cosplay-动漫人物生成',
      'description' => '## 功能描述
通过输入人像图片和卡通形象图片，可快速生成人物卡通写真。目前支持3D卡通形象和真人形象两种风格。
关于该接口功能的示例图如下：

- 3D卡通形象图（左侧为输入的人像图片+卡通形象图片，右侧为输出的效果图）
![](https://img.alicdn.com/imgextra/i3/O1CN01cv0oWy1omnOgta8tO_!!6000000005268-2-tps-481-410.png" width="500)
- 真人形象图（左侧为输入的人像图片+卡通形象图片，右侧为输出的效果图）
![](https://img.alicdn.com/imgextra/i3/O1CN01nDqiY21rUQMI21cl2_!!6000000005634-2-tps-443-392.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=aigen&children=GenerateCosplayImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 社交媒体个性化：可以在社交媒体平台上传自己的照片，并使用人物动漫化工具将其转换为卡通形象作为头像或分享给好友，展现个性和创意。
- 纪念品定制与艺术创作：制作个人化的动漫肖像画、T恤印花、杯子图案等定制商品，用于生日礼物、节日纪念或者艺术收藏。
- 游戏与虚拟世界：在游戏设计中，可以将玩家的真实照片转化为动漫角色，用于游戏角色创建或个性化装扮，增强沉浸式体验。
- 数字营销与广告设计：广告商在宣传活动中采用动漫化的人物形象，以新颖、有趣的方式吸引消费者关注，尤其适合年轻人群体的市场推广。
- 教育与培训：在教育软件和在线课程中，将教师或学生形象动漫化，既保护隐私又增加了趣味性，有助于提高学习兴趣和参与度。
- 内容创作与动画制作：动漫风格的人物生成可用于动画短片、漫画书以及网络表情包的快速制作，简化了美术设计流程，降低了内容创作者的门槛。
- 视频编辑与特效处理：在视频剪辑软件中集成人物动漫滤镜，支持用户轻松制作出具有动漫效果的MV、短视频或其他创意作品。

## 特色优势

- 复刻人物表情：基于深度学习算法，能够准确识别人物的性别、表情等特征，并在生成的卡通头像上高度还原真实人物的表情。
- 全身卡通化：不仅限于人脸的卡通化处理，提供全身卡通化的功能，从而避免因仅对脸部进行卡通化而可能产生的不协调感，如笑场等尴尬场景。
- 批量稳定特效生成：该技术在社交媒体、游戏开发、广告设计、数字教育、娱乐产业等多个领域都可广泛应用，为各行业带来创新与活力。
- 广泛适用性：该技术在社交媒体、游戏开发、广告设计、数字教育、娱乐产业等多个领域都可广泛应用，为各行业带来创新与活力。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通生成专区服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_synthesis_public_cn)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/aigen/2024-01-11/GenerateCosplayImage)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为生成专区（aigen）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[Cosplay-动漫人物生成示例代码](~~2699414~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过4 MB。
- 人脸图像：大于等于256x256像素，小于等于5760x3240像素，长宽比不超过1:2。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

- 模板图像：大于等于256x256像素，小于等于5760x3240像素，长宽比不超过1:1.5，如果超过将自适应裁剪至1:1.5。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateCosplayImage接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
Cosplay-动漫人物生成能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI生成专区类目下的Cosplay-动漫人物生成能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为生成专区（aigen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[Cosplay-动漫人物生成示例代码](~~2699414~~)。',
      'extraInfo' => '## 错误码
关于Cosplay-动漫人物生成的错误码，具体请参见[常见错误码](~~2699435~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'InteractiveFullSegmentation' => 
    array (
      'summary' => '本文介绍生成专区（aigen）类目下的全图分割InteractiveFullSegmentation的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入的图像URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过10 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像格式。支持JPG、PNG，默认为PNG。',
            'type' => 'string',
            'required' => false,
            'example' => 'PNG',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7574ee8f-38a3-4b1e-9280-11c33ab46e51',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '存放结果的txt文件的地址，包含如下信息：
- output.region_index：索引图像，取值范围0~255。
- output.region_info：由所有分割结果组成的列表，每个分割结果中的`region`值就是对应的分割图像，有效分割区域可视化为白色（像素值255），其他区域可视化为黑色（像素值0），`index`值为该分割结果的对应的索引值。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/interactive_seg_wanx/2024-02-21/6013dba4-2ce3-4f00-a2e7-14b8d22e81a5/20240221_120038993181_wcmohvxj9a.txt?Expires=1708574441&OSSAccessKeyId=LTAI5tQZd8AEcZX6KZV4****&Signature=GZuvrbw8F3GOv0ykq9al%2FFBdg8****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '提交异步任务后的提示信息。',
                'type' => 'string',
                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7574ee8f-38a3-4b1e-9280-11c33ab46e51\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/interactive_seg_wanx/2024-02-21/6013dba4-2ce3-4f00-a2e7-14b8d22e81a5/20240221_120038993181_wcmohvxj9a.txt?Expires=1708574441&OSSAccessKeyId=LTAI5tQZd8AEcZX6KZV4****&Signature=GZuvrbw8F3GOv0ykq9al%2FFBdg8****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<InteractiveFullSegmentationResponse>\\n    <RequestId>7574ee8f-38a3-4b1e-9280-11c33ab46e51</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</InteractiveFullSegmentationResponse>","errorExample":""}]',
      'title' => '交互式全图分割',
      'description' => '## 功能描述
交互式全图分割能力支持以单张图片作为输入，无需任何其他提示，即可返回图片中所有元素的分割结果。用户可以通过点击操作选择其中所需的元素，实现图片中分割元素的自由选择。
关于该接口功能的示例图如下：

- 输入原图
![](https://img.alicdn.com/imgextra/i3/O1CN01lCAP981RoPdPWzKLg_!!6000000002158-0-tps-750-500.jpg" width="500)
- 全图分割
![](https://img.alicdn.com/imgextra/i4/O1CN01Yva0je1jNXTkrGbO9_!!6000000004536-0-tps-750-500.jpg" width="500)
- 点选操作后的mask
![](https://img.alicdn.com/imgextra/i2/O1CN015PLtdV1PV3fH2nxF9_!!6000000001845-0-tps-750-500.jpg" width="500)
- 分割结果
![](https://img.alicdn.com/imgextra/i2/O1CN01GPJfUh1J6QfiuDwdc_!!6000000000979-2-tps-1000-667.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=aigen&children=InteractiveFullSegmentation)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
图片编辑：可对图像中的任意涂抹元素进行选择并智能分离，实现图像后续的二次编辑。

## 特色优势
- 图片元素识别：根据涂抹区域的位置和大小，自动对涂抹目标进行识别和分割。
- 自由开放选择：允许用户通过鼠标涂抹操作自由选择和排除所需的分割对象。
- 适用多种场景：适用于人、动物、食物、物品、家居等各种抠图场景，使用范围广。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通创新专区服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_synthesis_public_cn)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/aigen/2024-01-11/InteractiveFullSegmentation)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为创新专区（aigen）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[交互式全图分割示例代码](~~2699417~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过10 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用InteractiveFullSegmentation接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
交互式全图分割能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## 结果文件格式
分割的结果会以JSON字符串的形式存储在输出的文本文件中，对应的图像会以Base64的结构存储在对应的Base64字段中。
| 名称 | 类型 | 示例值 | 描述 |
| --- | --- | --- | --- |
| output.region_info | List | [{"region": "data:image/png;base64,/9j/4AAQ........GBlPjwh//2Q==", "area": 178579,"index": 1}, ...] | 所有输出mask的信息。region为mask的Base64编码，area为mask的面积, index为该mask的索引，index从1开始，0表示没有结果。 |
| output.region_index | String | "data:image/png;base64,/9j/4AAQSkZJR........GBlPjwh//2Q==" | 所有mask index的整合，值为0~255，输出为Base64编码。 |
| bbox     | Array of Integer     | [303,0,21,14]      | 包含mask的bounding box的坐标，按照XYWH的顺序。      |
| crop_box     | Array of Integer     | [0,0,585,390]      | 预测mask时用到的image切片的坐标，按照XYWH的顺序。      |
| point_coords     | Array of Integer     | [310.78125,12.1875]      | 生成mask对应的预测点坐标。      |
| predicted_iou    | Float     | 0.9326171875      |  预测的置信度。     |
| stability_score   | Float     | 0.9660193920135498      | mask质量的评估。      |
| area     | Long     |  204     | mask所占的像素数，可以理解为面积。      |

结果文件示例
`{
  "output":{
    "region_index":"<BASE64_CODE>",
    "region_info":[
      {
        "area":204,
        "bbox":[303,0,21,14],
        "crop_box":[0,0,585,390],
        "index":1,
        "point_coords":[
          [310.78125,12.1875]
        ],
        "predicted_iou":0.9326171875,
        "region":"<BASE64_CODE>",
        "stability_score":0.9660193920135498
      },
      ... ...
      ... ...
      {
        "area":1353,
        "bbox":Array[4],
        "crop_box":Array[4],
        "index":10,
        "point_coords":Array[1],
        "predicted_iou":0.94873046875,
        "region":"<BASE64_CODE>",
        "stability_score":0.9708878993988037
      },
    ]
  }
}`
返回值的可视化效果示例图如下：
- 第一列为`output.region_index`的可视化结果，取值0~255，尺寸与原图一致，该返回值起索引作用，实际渲染时不会用到。
- 第二列为`output.region_info`的部分mask的可视化结果示意，每个mask取值为0和255，尺寸与原图一致。`output.region_info`是由所有分割结果组成的列表，通过`output.region_index`与原图建立映射。

![](https://img.alicdn.com/imgextra/i4/O1CN01FjYgjm1F5HEcololR_!!6000000000435-2-tps-1465-1036.png" width="500)


## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI创新专区类目下的交互式全图分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为创新专区（aigen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[交互式全图分割示例代码](~~2699417~~)。',
      'extraInfo' => '## 错误码
关于交互式全图分割的错误码，具体请参见[常见错误码](~~2699435~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'InteractiveScribbleSegmentation' => 
    array (
      'summary' => '本文介绍生成专区（aigen）类目下的交互式涂抹分割InteractiveScribbleSegmentation的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入的图像URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过10 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'MaskImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入的Mask URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过5 MB。
- 输入图像：大于等于32x32像素，并与输入原图分辨率保持一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PosScribbleImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '正向涂抹轨迹图像URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过5 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素，并与输入原图分辨率保持一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx03.png',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'NegScribbleImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '负向涂抹轨迹图像URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。输入限制如下：
- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过5 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素，并与输入原图分辨率保持一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx04.png',
            'isFileTransferUrl' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'IntegratedMaskUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '整合的Mask URL。将初始mask、正向划线记录、负向划线记录分别放在rgb图像的三个通道，合成一个图片，减少传输的图片数量，从而节省上传下载时间。输入限制如下：
- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过5 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素，并与输入原图分辨率保持一致。
',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx05.png',
            'isFileTransferUrl' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像形式。取值范围如下：

- rgb_alpha（默认）：返回四通道PNG图，即透明底图。
- only_alpha：返回单通道mask。
- white_background：返回白底图。',
            'type' => 'string',
            'required' => false,
            'example' => 'only_alpha',
          ),
        ),
        6 => 
        array (
          'name' => 'ReturnFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像格式。支持JPG、PNG，默认为PNG。',
            'type' => 'string',
            'required' => false,
            'example' => 'PNG',
          ),
        ),
        7 => 
        array (
          'name' => 'EdgeFeathering',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否做边缘羽化。默认值为true。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'PostprocessOption',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '选择mask精细化模型。取值范围如下：

- edgerefine：稳定但精细度稍微差一点。
- maskrefine（默认）：精细度高但不够稳定。',
            'type' => 'string',
            'required' => false,
            'example' => 'edgerefine',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7574ee8f-38a3-4b1e-9280-11c33ab46e51',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '输出图片的URL，格式由请求参数确定。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7574ee8f-38a3-4b1e-9280-11c33ab46e51\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InteractiveScribbleSegmentationResponse>\\n    <RequestId>7574ee8f-38a3-4b1e-9280-11c33ab46e51</RequestId>\\n    <Data>\\n        <ResultUrl>https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&amp;Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****</ResultUrl>\\n    </Data>\\n    <Message>-</Message>\\n</InteractiveScribbleSegmentationResponse>","errorExample":""}]',
      'title' => '交互式涂抹分割',
      'description' => '## 功能描述
交互式涂抹分割能力支持用户通过鼠标涂抹的方式选择目标元素，算法模型通过涂抹区域的位置和大小，自动对涂抹的目标进行分割。
关于该接口功能的示例图如下：

- 输入原图
![](https://img.alicdn.com/imgextra/i4/O1CN01PqgYCG1QnCycLh5Ko_!!6000000002020-0-tps-750-500.jpg" width="500)
- 涂抹操作
![](https://img.alicdn.com/imgextra/i1/O1CN015rzRd21zXe4SBvMD3_!!6000000006724-0-tps-353-233.jpg" width="500)
- 分割mask
![](https://img.alicdn.com/imgextra/i3/O1CN0196ZJjz1C84mm1Wrjs_!!6000000000035-0-tps-750-500.jpg" width="500)
- 分割结果
![](https://img.alicdn.com/imgextra/i4/O1CN01JduQb127WHowZOHkQ_!!6000000007804-2-tps-1000-667.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=aigen&children=InteractiveScribbleSegmentation)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
图片编辑：可对图像中的任意涂抹元素进行选择并智能分离，实现图像后续的二次编辑。

## 特色优势
- 图片元素识别：根据涂抹区域的位置和大小，自动对涂抹目标进行识别和分割。
- 自由开放选择：允许用户通过鼠标涂抹操作自由选择和排除所需的分割对象。
- 适用多种场景：适用于人、动物、食物、物品、家居等各种抠图场景，使用范围广。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通创新专区服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_synthesis_public_cn)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/aigen/2024-01-11/InteractiveScribbleSegmentation)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为创新专区（aigen）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[交互式涂抹分割示例代码](~~2699418~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG、BMP、WEBP。
- 图像大小：不超过10 MB。
- 输入图像：大于等于32x32像素，小于等于4096x4096像素。
- URL地址中不能包含中文字符。

## 计费说明
交互式涂抹分割能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## 参数可视化说明
功能一：正向涂抹分割
示例：输入原图、当前mask、正向涂抹记录，输出正向分割结果。
![](https://img.alicdn.com/imgextra/i3/O1CN01ndnaA826l73mVmw9L_!!6000000007701-49-tps-750-556.webp" width="700)<br>

功能二：负向涂抹分割
输入原图、当前mask、负向涂抹记录，输出负向分割结果。
![](https://img.alicdn.com/imgextra/i2/O1CN01ECIzHk1Nj8duHq6UM_!!6000000001605-49-tps-750-561.webp" width="700)

## SDK参考
阿里云视觉AI创新专区类目下的交互式涂抹分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为创新专区（aigen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[交互式涂抹分割示例代码](~~2699418~~)。',
      'extraInfo' => '## 错误码
关于交互式涂抹分割的错误码，具体请参见[常见错误码](~~2699435~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateTextDeformation' => 
    array (
      'summary' => '本文介绍生成专区（aigen）类目下的锦书-文字变形生成GenerateTextDeformation的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TextContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户输入的文字内容。输入限制如下：
- 小于6个字符。
- 支持中文、阿拉伯数字、英文字母。若提供ttf文件，字符的支持范围由ttf文件决定。

> **TtfUrl**和**FontName**参数二选一即可。',
            'type' => 'string',
            'required' => true,
            'example' => '文字创意',
          ),
        ),
        1 => 
        array (
          'name' => 'TtfUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户传入的ttf格式字体文件。标准的ttf文件，文件大小小于30 MB。
> **TtfUrl**和**FontName**参数二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/synthesis/GenerateTextDeformation/xxx01.ttf',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'FontName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '使用预置字体的名称。取值范围如下：

- **dongfangdakai**（默认）：阿里妈妈东方大楷
- **puhuiti_m**：阿里巴巴普惠体
- **shuheiti**：阿里妈妈数黑体
- **jinbuti**：钉钉进步体
- **kuheiti**：站酷酷黑体
- **kuaileti**：站酷快乐体
- **wenyiti**：站酷文艺体
- **logoti**：站酷小薇LOGO体
- **cangeryuyangti_m**：站酷仓耳渔阳体
- **siyuansongti_b**：思源宋体
- **siyuanheiti_m**：思源黑体
- **fangzhengkaiti**：方正楷体

> **TtfUrl**和**FontName**参数任选其一即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'dongfangdakai',
          ),
        ),
        3 => 
        array (
          'name' => 'OutputImageRatio',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文字输入的图片的宽高比。取值范围如下：

- 1:1（默认）
- 16:9
- 9:16',
            'type' => 'string',
            'required' => false,
            'example' => '1:1',
          ),
        ),
        4 => 
        array (
          'name' => 'Prompt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望文字纹理创意样式的描述提示词。长度小于200，且不能为空。',
            'type' => 'string',
            'required' => true,
            'example' => '水果，蔬菜',
          ),
        ),
        5 => 
        array (
          'name' => 'N',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的图片数量。取值范围为\\[1, 4]，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Async',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '1',
            'type' => 'boolean',
            'required' => false,
            'example' => '1',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '59697D68-2A6E-4553-89BD-0FADD07881E8',
              ),
              'Data' => 
              array (
                'title' => 'job',
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '文字纹理生成结果图的URL地址。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '提交异步任务后的提示信息。',
                'type' => 'string',
                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59697D68-2A6E-4553-89BD-0FADD07881E8\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateTextDeformationResponse>\\n    <RequestId>59697D68-2A6E-4553-89BD-0FADD07881E8</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateTextDeformationResponse>","errorExample":""}]',
      'title' => '锦书-文字变形生成',
      'description' => '## 功能描述
锦书-文字变形生成能力可以对输入的文字边缘轮廓进行创意变形，根据提示词内容进行边缘变化，实现一种字体的更多种创意用法，返回带有文字内容的黑底白色蒙版图。
示例：
- 输入文字：桂林山水
- 描述提示词（Prompt）：山峦叠嶂、漓江蜿蜒、岩石奇秀

示例图如下：
![](https://img.alicdn.com/imgextra/i1/O1CN01ohzPn51bLgxEf5VVM_!!6000000003449-0-tps-741-202.jpg" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=aigen&children=GenerateTextDeformation)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 海报文字制作：围绕海报文字设计场景，通过简单的提示词描述即可实现创意字形、艺术纹理和个性字体的智能生成，批量生成丰富有趣的具有特效艺术字内容的个性化海报。
- 文档艺术字创作：办公文档艺术字创作设计场景，批量生成丰具有特效艺术字内容的个性化字体嵌入到文档中，实现内容多样性创作。
- 文字配图创意营销：电商、互动娱乐、视频制作等泛娱乐场景，可根据场景主题风格通过特定的提示词描述生成智能配图的艺术纹理和个性字体。

## 特色优势
- 灵活创意字体打造：通过简单灵活的提示词描述即可实现创意字形、艺术纹理和个性字体的智能打造。
- 文字边缘风格多变：文字变形可以对输入的文字边缘轮廓进行风格创意变形，根据提示词内容进行边缘变化。
- 批量稳定特效生成：批量生成丰富有趣的特效艺术字内容，在文字的辨识度、创意感、艺术性实现精准可控。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通生成专区服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_synthesis_public_cn)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/aigen/2024-01-11/GenerateTextDeformation)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为生成专区（aigen）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[锦书-文字变形生成示例代码](~~2699415~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 支持文本输入，要求小于6个字符，且不能为空。支持中文、阿拉伯数字、英文字母。
- 若提供ttf文件，必须为标准的ttf文件，文件大小小于30 MB。**TtfUrl**和**FontName**参数二选一即可。
- 提示词Prompt长度小于200，且不能为空。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateTextDeformation接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
锦书-文字变形生成能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI生成专区类目下的锦书-文字变形生成能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为生成专区（aigen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[锦书-文字变形生成示例代码](~~2699415~~)。',
      'extraInfo' => '## 错误码
关于锦书-文字变形生成的错误码，具体请参见[常见错误码](~~2699435~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateTextTexture' => 
    array (
      'summary' => '本文介绍生成专区（aigen）类目下的锦书-文字纹理生成GenerateTextTexture的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户输入的文字图像URL。输入限制如下：

- 图像大小小于5 MB，黑底白字。
- 图像格式：JPG、PNG、JPEG、BMP。
- 宽高比不超过2:1，图像最长边不超过2048像素。

> - 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。
- 若输入**ImageUrl**字段，则不能使用与文字输入相关的字段：**TextContent**、**TtfUrl**、**FontName**和**OutputImageRatio**。
- URL地址中不能包含中文字符。
',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TextContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户输入的文字内容。输入限制如下：

- 小于6个字符，且不能为空。
- 支持中文、阿拉伯数字、英文字母。若提供ttf文件，字符的支持范围由ttf文件决定。
> **TtfUrl**和**FontName**参数二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => '文字创意',
          ),
        ),
        2 => 
        array (
          'name' => 'TtfUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户传入的ttf格式字体文件。标准的ttf文件，文件大小小于30 MB。
> **TtfUrl**和**FontName**参数二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'FontName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '使用预置字体的名称。取值范围如下：

- **dongfangdakai**（默认）：阿里妈妈东方大楷
- **puhuiti_m**：阿里巴巴普惠体
- **shuheiti**：阿里妈妈数黑体
- **jinbuti**：钉钉进步体
- **kuheiti**：站酷酷黑体
- **kuaileti**：站酷快乐体
- **wenyiti**：站酷文艺体
- **logoti**：站酷小薇LOGO体
- **cangeryuyangti_m**：站酷仓耳渔阳体
- **siyuansongti_b**：思源宋体
- **siyuanheiti_m**：思源黑体
- **fangzhengkaiti**：方正楷体

> **TtfUrl**和**FontName**参数任选其一即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'dongfangdakai',
          ),
        ),
        4 => 
        array (
          'name' => 'OutputImageRatio',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文字输入的图片的宽高比。取值范围如下：

- 1:1（默认）
- 16:9
- 9:16',
            'type' => 'string',
            'required' => false,
            'example' => '1:1',
          ),
        ),
        5 => 
        array (
          'name' => 'Prompt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望文字纹理创意样式的描述提示词。长度小于200，且不能为空。',
            'type' => 'string',
            'required' => true,
            'example' => '水果，蔬菜',
          ),
        ),
        6 => 
        array (
          'name' => 'TextureStyle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '纹理风格的类型。取值范围如下：

- material（默认）：立体材质
- scene：场景融合',
            'type' => 'string',
            'required' => false,
            'example' => 'material',
          ),
        ),
        7 => 
        array (
          'name' => 'ImageShortSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的图片短边的长度。取值范围为[512, 1024]， 若输入数值非64的整数倍数，则最终取值为不大于该数值的能被64整除的最大数。默认为704。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '512',
          ),
        ),
        8 => 
        array (
          'name' => 'N',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的图片数量。取值范围为\\[1, 4]，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'AlphaChannel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否返回带alpha通道的图片。取值范围如下：

- true：带回。
- false（默认）：不带回。	',
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
                'example' => '59697D68-2A6E-4553-89BD-0FADD07881E8',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '文字纹理生成结果图的URL地址。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '提交异步任务后的提示信息。',
                'type' => 'string',
                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59697D68-2A6E-4553-89BD-0FADD07881E8\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateTextTextureResponse>\\n    <RequestId>59697D68-2A6E-4553-89BD-0FADD07881E8</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateTextTextureResponse>","errorExample":""}]',
      'title' => '锦书-文字纹理生成',
      'description' => '## 功能描述
锦书-文字纹理生成能力可以对输入的文字内容或文字图片进行创意设计，根据提示词内容对文字添加材质和纹理，实现立体凸显或场景融合的效果，生成效果精美、风格多样的艺术字，结合背景可以直接作为文字海报使用。
示例图如下：
![](https://img.alicdn.com/imgextra/i1/O1CN010KPThd1wVrgOH3B8U_!!6000000006314-0-tps-744-434.jpg" width="500)

风格说明：目前支持立体材质（material）和场景融合（scene）两种风格，立体材质风格的背景一般为纯色或简单光影，Prompt建议描述文字本身的材质为主，如“乐高”、“花卉”等；场景融合风格为文字与背景融合在一起，形成完整的语义画面，建议Prompt对背景和整体环境进行描述，如“森林”、“天空”等。
示例图如下：
![](https://img.alicdn.com/imgextra/i1/O1CN0104uM631kzNosYnDk1_!!6000000004754-0-tps-750-456.jpg" width="500)

锦书-文字纹理生成可以对输入的文字边缘轮廓进行创意变形，根据提示词内容进行边缘变化，实现一种字体的更多种创意用法，返回带有文字内容的黑底白色蒙版图。
- 输入文字：桂林山水
- 描述提示词（Prompt）：山峦叠嶂、漓江蜿蜒、岩石奇秀

示例图如下：
![](https://img.alicdn.com/imgextra/i1/O1CN01ohzPn51bLgxEf5VVM_!!6000000003449-0-tps-741-202.jpg" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=aigen&children=GenerateTextTexture)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 海报文字制作：围绕海报文字设计场景，通过简单的提示词描述即可实现创意字形、艺术纹理和个性字体的智能生成，批量生成丰富有趣的具有特效艺术字内容的个性化海报。
- 文档艺术字创作：办公文档艺术字创作设计场景，批量生成丰具有特效艺术字内容的个性化字体嵌入到文档中，实现内容多样性创作。
- 文字配图创意营销：电商、互动娱乐、视频制作等泛娱乐场景，可根据场景主题风格通过特定的提示词描述生成智能配图的艺术纹理和个性字体。

## 特色优势
- 灵活创意字体打造：通过简单灵活的提示词描述即可实现创意字形、艺术纹理和个性字体的智能打造。
- 文字边缘风格多变：文字变形可以对输入的文字边缘轮廓进行风格创意变形，根据提示词内容进行边缘变化。
- 批量稳定特效生成：批量生成丰富有趣的特效艺术字内容，在文字的辨识度、创意感、艺术性实现精准可控。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通生成专区服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_synthesis_public_cn)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/aigen/2024-01-11/GenerateTextDeformation)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为生成专区（aigen）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[锦书-文字纹理生成示例代码](~~2699416~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 锦书-文字纹理生成支持图像输入和文本输入，两种方式任选其一即可。
    - 图像输入要求（**ImageUrl**）：黑底白字，图片大小小于5 MB，图像格式推荐JPG、PNG、JPEG、BMP，宽高比不超过2:1，图像最长边不超过2048像素。
    - 文本输入要求（**TextContent**/**TtfUrl**/**FontName**/**OutputImageRatio**）：要求小于6个字符，且不能为空。支持中文、阿拉伯数字、英文字母。若提供ttf文件，必须为标准的ttf文件，文件大小小于30 MB。**TtfUrl**和**FontName**参数二选一即可。

- 提示词Prompt长度小于200，且不能为空。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateTextTexture接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
锦书-文字纹理生成能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI生成专区类目下的锦书-文字纹理生成能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为生成专区（aigen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[锦书-文字纹理生成示例代码](~~2699416~~)。',
      'extraInfo' => '## 错误码
关于锦书-文字纹理生成的错误码，具体请参见[常见错误码](~~2699435~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'aigen.cn-shanghai.aliyuncs.com',
    ),
  ),
);
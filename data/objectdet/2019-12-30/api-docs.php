<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'objectdet',
    'version' => '2019-12-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 114557,
      'title' => '目标检测',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectObject',
        1 => 'DetectIPCObject',
        2 => 'DetectVideoIPCObject',
      ),
    ),
    1 => 
    array (
      'id' => 114562,
      'title' => '车辆',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectVehicleICongestion',
        1 => 'DetectVehicleIllegalParking',
      ),
    ),
    2 => 
    array (
      'id' => 114572,
      'title' => '图像检测',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectMainBody',
        1 => 'DetectWhiteBaseImage',
      ),
    ),
    3 => 
    array (
      'id' => 114576,
      'title' => '通用接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncJobResult',
      ),
    ),
    4 => 
    array (
      'id' => 114578,
      'title' => '环境卫生',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectKitchenAnimals',
        1 => 'DetectWorkwear',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'DetectObjectElement' => 
      array (
        'title' => '检测到的目标',
        'type' => 'object',
        'properties' => 
        array (
          'Type' => 
          array (
            'title' => '目标类型：PERSON, VEHICLE, PET',
            'type' => 'string',
            'example' => 'VEHICLE',
          ),
          'X' => 
          array (
            'title' => '左上角x坐标(像素)',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'Y' => 
          array (
            'title' => '左上角y坐标(像素)',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'Width' => 
          array (
            'title' => '目标宽度(像素)',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'Height' => 
          array (
            'title' => '目标高度(像素)',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '200',
          ),
          'Score' => 
          array (
            'title' => '目标置信度，范围为[0.0, 1.0]',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.68225745',
          ),
        ),
      ),
      'DetectObjectFrame' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'Time' => 
          array (
            'title' => '时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Elements' => 
          array (
            'title' => '结果集',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/DetectObjectElement',
            ),
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'DetectObject' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectObject/DetectObject1.jpg',
            'isFileTransferUrl' => true,
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
                'example' => '6EF97B44-2763-4EAD-8737-FB9F5EE25FE2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '检测框数据集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '检测框对应的物体名称。具体类型如下所示。',
                          'type' => 'string',
                          'example' => 'chair',
                        ),
                        'Boxes' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '检测框坐标，格式为`[left, top, right, bottom]`。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '[468, 238, 531, 299]',
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '检测到物体的置信度，取值范围为0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.266',
                        ),
                      ),
                    ),
                  ),
                  'Width' => 
                  array (
                    'description' => '图片的宽度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '533',
                  ),
                  'Height' => 
                  array (
                    'description' => '图片的高度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '300',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6EF97B44-2763-4EAD-8737-FB9F5EE25FE2\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"chair\\",\\n        \\"Boxes\\": [\\n          0\\n        ],\\n        \\"Score\\": 0.266\\n      }\\n    ],\\n    \\"Width\\": 533,\\n    \\"Height\\": 300\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectObjectResponse>\\n    <RequestId>6EF97B44-2763-4EAD-8737-FB9F5EE25FE2</RequestId>\\n    <Data>\\n        <Height>300</Height>\\n        <Elements>\\n            <Score>0.266</Score>\\n            <Type>chair</Type>\\n            <Boxes>468</Boxes>\\n            <Boxes>238</Boxes>\\n            <Boxes>531</Boxes>\\n            <Boxes>299</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.213</Score>\\n            <Type>chair</Type>\\n            <Boxes>452</Boxes>\\n            <Boxes>168</Boxes>\\n            <Boxes>531</Boxes>\\n            <Boxes>233</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.308</Score>\\n            <Type>picture/frame</Type>\\n            <Boxes>487</Boxes>\\n            <Boxes>44</Boxes>\\n            <Boxes>501</Boxes>\\n            <Boxes>96</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.257</Score>\\n            <Type>picture/frame</Type>\\n            <Boxes>477</Boxes>\\n            <Boxes>67</Boxes>\\n            <Boxes>484</Boxes>\\n            <Boxes>98</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.201</Score>\\n            <Type>picture/frame</Type>\\n            <Boxes>503</Boxes>\\n            <Boxes>26</Boxes>\\n            <Boxes>524</Boxes>\\n            <Boxes>85</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.515</Score>\\n            <Type>pillow</Type>\\n            <Boxes>161</Boxes>\\n            <Boxes>141</Boxes>\\n            <Boxes>181</Boxes>\\n            <Boxes>158</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.293</Score>\\n            <Type>pillow</Type>\\n            <Boxes>473</Boxes>\\n            <Boxes>143</Boxes>\\n            <Boxes>496</Boxes>\\n            <Boxes>157</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.214</Score>\\n            <Type>pillow</Type>\\n            <Boxes>241</Boxes>\\n            <Boxes>145</Boxes>\\n            <Boxes>253</Boxes>\\n            <Boxes>166</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.374</Score>\\n            <Type>potted plant</Type>\\n            <Boxes>449</Boxes>\\n            <Boxes>97</Boxes>\\n            <Boxes>477</Boxes>\\n            <Boxes>140</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.412</Score>\\n            <Type>sofa</Type>\\n            <Boxes>145</Boxes>\\n            <Boxes>135</Boxes>\\n            <Boxes>304</Boxes>\\n            <Boxes>202</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.269</Score>\\n            <Type>sofa</Type>\\n            <Boxes>443</Boxes>\\n            <Boxes>136</Boxes>\\n            <Boxes>531</Boxes>\\n            <Boxes>190</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.262</Score>\\n            <Type>sofa</Type>\\n            <Boxes>301</Boxes>\\n            <Boxes>136</Boxes>\\n            <Boxes>352</Boxes>\\n            <Boxes>168</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.242</Score>\\n            <Type>sofa</Type>\\n            <Boxes>452</Boxes>\\n            <Boxes>167</Boxes>\\n            <Boxes>531</Boxes>\\n            <Boxes>230</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.219</Score>\\n            <Type>carpet</Type>\\n            <Boxes>0</Boxes>\\n            <Boxes>153</Boxes>\\n            <Boxes>272</Boxes>\\n            <Boxes>293</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.458</Score>\\n            <Type>coffee table</Type>\\n            <Boxes>171</Boxes>\\n            <Boxes>172</Boxes>\\n            <Boxes>214</Boxes>\\n            <Boxes>214</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.358</Score>\\n            <Type>coffee table</Type>\\n            <Boxes>337</Boxes>\\n            <Boxes>185</Boxes>\\n            <Boxes>420</Boxes>\\n            <Boxes>274</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.285</Score>\\n            <Type>coffee table</Type>\\n            <Boxes>386</Boxes>\\n            <Boxes>159</Boxes>\\n            <Boxes>428</Boxes>\\n            <Boxes>192</Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.214</Score>\\n            <Type>mirror</Type>\\n            <Boxes>503</Boxes>\\n            <Boxes>26</Boxes>\\n            <Boxes>524</Boxes>\\n            <Boxes>85</Boxes>\\n        </Elements>\\n        <Width>533</Width>\\n    </Data>\\n</DetectObjectResponse>","errorExample":""}]',
      'title' => '物体检测',
      'summary' => '本文介绍物体检测DetectObject的语法及示例。',
      'description' => '## 功能描述
物体检测能力可以检测输入图像中的物体。
关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230213/tusk/DetectObject.png" width="600)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectObject)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectObject?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectObject%2FDetectObject1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：

- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[物体检测示例代码](~~604395~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于20×20像素，小于4096×4096像素。
- URL地址中不能包含中文字符。

## 计费说明
关于物体检测的计费方式及报价，请参见[计费介绍](~~202484~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectObject)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## Type类型包括：

human（人体）、sneakers（胶底运动鞋）、chair（椅子）、hat（帽子）、lamp（灯）、cabinet/shelf（橱柜/ 架子）、car（汽车）、glasses（眼镜）、picture/frame（照片/图画）、street lights（街灯）、helmet（头盔）、pillow（枕头）、glove（手套）、potted plant（盆栽植物）、flower（花）、monitor（显示屏）、plants pot/vase（花盆）、boots（靴子）、umbrella（伞）、boat（小船）、flag（旗帜）、speaker（扬声器/话筒）、trash bin/can（垃圾桶）、backpack（ 双肩背包）、sofa（沙发）、belt（腰带）、carpet（地毯）、coffee table（咖啡桌/茶几）、tie（领带）、bed（床）、traffic light（红绿灯）、necklace（项链）、mirror（镜子）、bicycle（自行车）、watch（手表）、horse（马）、traffic sign（交通标志）、stuffed animal（填充玩具动物）、motorbike/motorcycle（摩托车）、wild bird（鸟）、laptop（笔记本电脑）、cow（奶牛）、clock（时钟）、bus（公共汽车）、nightstand（床头柜）、sheep（绵羊）、traffic cone（锥形交通路标）、keyboard（键盘）、hockey stick（曲棍球球棍）、fan（电扇）、dog（狗）、blackboard/whiteboard（白板/黑板）、mouse（鼠标）、telephone（电话）、airplane（飞机）、skis（滑雪板）、soccer（英式足球）、combine with glove（棒球手套）、train（火车）、tent（帐篷）、sailboat（帆船）、kite（风筝）、computer box（计算机主机机箱）、elephant（大象）、stroller（折叠式婴儿车）、baseball bat（棒球棒）、skateboard（溜冰板）、surfboard（冲浪板）、cat（猫）、zebra（斑马）、sports car（跑车）、giraffe（长颈鹿）、radiator（散热器）、tennis racket（网球拍）、skating and skiing shoes（溜冰鞋）、baseball（棒球）、american football（美式橄榄球）、basketball（篮球）、printer（打印机）、fire hydrant（消防栓）、projector（投影仪）、fire extinguisher（灭火器）、tennis ball（网球）、frisbee（飞盘）、fire truck（消防车）、helicopter（直升飞机）、carriage（四轮马车）、bear（熊）、globe（地球仪）、volleyball（排球）。


## SDK参考
阿里云视觉AI目标检测类目下的物体检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[物体检测示例代码](~~604395~~)。
',
      'extraInfo' => '## 错误码
关于物体检测的错误码，详情请参见[常见错误码](~~146760~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectIPCObject' => 
    array (
      'summary' => '基于图像的IPC目标检测。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '图片URL地址',
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/objectdet/detect-ipc-xxxx.jpg',
            'isFileTransferUrl' => true,
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
                'example' => '7AE23740-A3E5-5607-8E10-895DCBD4C260',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '检测到的目标集合，如果没有目标则为空。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '检测框对应的物体名称，取值如下：

- PERSON：人物
- VEHICLE：车辆
- CAT：猫
- DOG：狗',
                          'type' => 'string',
                          'example' => 'DOG',
                        ),
                        'Score' => 
                        array (
                          'description' => '检测框的置信度，取值范围\\[0.0,1.0]。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.7138671875',
                        ),
                        'Box' => 
                        array (
                          'description' => '检测框坐标。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '检测框坐标，单位像素，格式为\\[left, top, right, bottom]。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[10,150,1587,1193]',
                          ),
                        ),
                        'TargetRate' => 
                        array (
                          'description' => '目标检测框的面积大小和图像大小的比例。取值范围\\[0.0,1.0]，1.0表示全屏。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.8566723958333333',
                        ),
                      ),
                    ),
                  ),
                  'Width' => 
                  array (
                    'description' => '图像的宽度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1600',
                  ),
                  'Height' => 
                  array (
                    'description' => '图像的高度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1200',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7AE23740-A3E5-5607-8E10-895DCBD4C260\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"DOG\\",\\n        \\"Score\\": 0.7138671875,\\n        \\"Box\\": [\\n          0\\n        ],\\n        \\"TargetRate\\": 0.8566723958333333\\n      }\\n    ],\\n    \\"Width\\": 1600,\\n    \\"Height\\": 1200\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectIPCObjectResponse>\\n    <RequestId>7AE23740-A3E5-5607-8E10-895DCBD4C260</RequestId>\\n    <Data>\\n        <Height>1200</Height>\\n        <Elements>\\n            <TargetRate>0.21299583333333333</TargetRate>\\n            <Type>CAT</Type>\\n            <Score>0.85107421875</Score>\\n            <Box>7</Box>\\n            <Box>665</Box>\\n            <Box>783</Box>\\n            <Box>1192</Box>\\n        </Elements>\\n        <Elements>\\n            <TargetRate>0.8566723958333333</TargetRate>\\n            <Type>DOG</Type>\\n            <Score>0.7138671875</Score>\\n            <Box>10</Box>\\n            <Box>150</Box>\\n            <Box>1587</Box>\\n            <Box>1193</Box>\\n        </Elements>\\n        <Width>1600</Width>\\n    </Data>\\n</DetectIPCObjectResponse>","errorExample":""}]',
      'title' => 'IPC图像目标检测',
      'description' => '## 功能描述
IPC图像目标检测能力可以检测到输入图像中的目标物体，例如人、车辆、宠物等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectIPCObject)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 智能看家：家中有人或宠物移动时可生成高精度视频，实现检测提醒功能。且可以关注宠物在家中的活动状况。
- 智能看店：可对门店起到安防作用，尤其是在夜间，可及时知道有人进店。
- 智能看厂：安全是厂区非常重要的事情，对于人员在岗以及人员入侵可以起到良好的监管作用。

## 特色优势

- 适用场景多：适应多种广泛的日常场景的目标检测，室内、室外、家居、店铺、商场、白天、夜间等。
- 检测范围广：可检测的目标大小范围广，适用于大目标检测，也适用于较远摄像头下的小目标检测。
- 检测效率高：高并发处理，处理时间短。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectIPCObject?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22https%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectIPCObject%2FDetectIPCObject1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[IPC图像目标检测示例代码](~~604396~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过2 MB。
- 图像分辨率：大于20×20像素，小于1024×1024像素。并非越高清准确度越高，推荐值：最大边为640像素。
- URL地址中不能包含中文字符。

## 计费说明
关于IPC图像目标检测的计费方式及报价，请参见[计费介绍](~~202484~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectIPCObject)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的IPC图像目标检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[IPC图像目标检测示例代码](~~604396~~)。',
      'extraInfo' => '## 错误码
关于IPC图像目标检测的错误码，详情请参见[常见错误码](~~146760~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectVideoIPCObject' => 
    array (
      'summary' => '基于短视频的IPC目标检测。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'VideoURL',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '视频文件URL地址',
            'description' => '视频文件URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectVideoIPCObject/DetectVideoIPCObject1.mp4',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '视频的开始时间戳(秒)，即UTC时间，默认为0',
            'description' => '视频实际开始时间的时间戳。例如视频开始时间是2021年8月16日12:00，对应时间戳为1629086400。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '0',
            'example' => '1629086400',
          ),
        ),
        2 => 
        array (
          'name' => 'CallbackOnlyHasObject',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否只有检测到物体才回调',
            'description' => '是否回调消息过滤。

- true：如果输入的视频中检测到有目标，才会执行回调，否则不执行。
- false: 无论是否检测到有目标，都执行回调。',
            'type' => 'boolean',
            'required' => false,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'JobId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '35B11E1B-800C-4598-B5AA-577E3BDBD917',
              ),
              'Message' => 
              array (
                'description' => '提交异步任务后的提示信息。',
                'type' => 'string',
                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Width' => 
                  array (
                    'title' => '视频文件的分辨率(像素)',
                    'description' => '视频宽度分辨率，单位像素。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1280',
                  ),
                  'Height' => 
                  array (
                    'title' => '视频文件的分辨率(像素)',
                    'description' => '视频高度分辨率，单位像素。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '720',
                  ),
                  'Frames' => 
                  array (
                    'title' => '视频帧的集合，未检测到目标的帧不列出',
                    'description' => '视频帧的集合，未检测到目标的帧不列出。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Time' => 
                        array (
                          'title' => '视频帧时间，startTimestamp+视频帧的相对时间的值，单位毫秒，如果startTimestamp为空，则是相对时间',
                          'description' => '时间戳，单位秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6124533574',
                        ),
                        'Elements' => 
                        array (
                          'description' => '检测到的目标集合，如果没有目标则为空。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '1',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Type' => 
                              array (
                                'description' => '检测框对应的物体名称。取值如下：

- PERSON：人
- VEHICLE：车辆
- PET：宠物',
                                'type' => 'string',
                                'example' => 'PERSON',
                              ),
                              'X' => 
                              array (
                                'description' => '左上角X轴坐标，单位像素。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '289',
                              ),
                              'Y' => 
                              array (
                                'description' => '左上角Y轴坐标，单位像素。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '271',
                              ),
                              'Width' => 
                              array (
                                'description' => '检测框宽度，单位像素。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                              ),
                              'Height' => 
                              array (
                                'description' => '检测框高度，单位像素。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '156',
                              ),
                              'Score' => 
                              array (
                                'description' => '检测框的置信度，取值范围为\\[0.0,1.0]。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '0.7812',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'InputFile' => 
                  array (
                    'title' => '输入文件信息',
                    'description' => '输入文件信息。',
                    'type' => 'string',
                    'example' => 'oss://viapi-test/viapi-3.0domepic/objectdet/DetectVideoIPCObject/DetectVideoIPCObject4.mp4',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"35B11E1B-800C-4598-B5AA-577E3BDBD917\\",\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\",\\n  \\"Data\\": {\\n    \\"Width\\": 1280,\\n    \\"Height\\": 720,\\n    \\"Frames\\": [\\n      {\\n        \\"Time\\": 6124533574,\\n        \\"Elements\\": [\\n          {\\n            \\"Type\\": \\"PERSON\\",\\n            \\"X\\": 289,\\n            \\"Y\\": 271,\\n            \\"Width\\": 100,\\n            \\"Height\\": 156,\\n            \\"Score\\": 0.7812\\n          }\\n        ]\\n      }\\n    ],\\n    \\"InputFile\\": \\"oss://viapi-test/viapi-3.0domepic/objectdet/DetectVideoIPCObject/DetectVideoIPCObject4.mp4\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectVideoIPCObjectResponse>\\n    <RequestId>35B11E1B-800C-4598-B5AA-577E3BDBD917</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectVideoIPCObjectResponse>","errorExample":""}]',
      'title' => 'IPC视频目标检测',
      'description' => '## 功能描述
IPC视频目标检测能力可以检测到输入视频中的目标物体，例如人、车辆、宠物等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectVideoIPCObject)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 智能看家：家中有人或宠物移动时可生成高精度视频，实现检测提醒功能。且可以关注宠物在家中的活动状况。
- 智能看店：可对门店起到安防作用，尤其是在夜间，可及时知道有人进店。
- 智能看厂：安全是厂区非常重要的事情，对于人员在岗以及人员入侵可以起到良好的监管作用。

## 特色优势

- 适用场景多：适应多种广泛的日常场景的目标检测，室内、室外、家居、店铺、商场、白天、夜间等。
- 检测范围广：可检测的目标大小范围广，适用于大目标检测，也适用于较远摄像头下的小目标检测。
- 检测效率高：高并发处理，处理时间短。


## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectVideoIPCObject?lang=JAVA&sdkStyle=old&params=%7B%22VideoURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectVideoIPCObject%2FDetectVideoIPCObject1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。

5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 视频格式：H264、H265。
- 视频分辨率：大于20×20像素，小于4096×4096像素。
- 视频帧率：要求在35帧以内。
- 视频大小：不超过10 MB。
- 视频时长：不超过10秒。
- URL地址中不能包含中文字符。

## 计费说明
关于IPC视频目标检测的计费方式及报价，请参见[计费介绍](~~202484~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectVideoIPCObject)。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用DetectVideoIPCObject接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI目标检测类目下的IPC视频目标检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于IPC视频目标检测的错误码，详情请参见[常见错误码](~~146760~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectVehicleICongestion' => 
    array (
      'summary' => '本文为您介绍车辆拥堵检测DetectVehicleICongestion的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectVehicleICongestion/DetectVehicleICongestion1.jpg',
            'maxItems' => 1,
            'minItems' => 20,
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'RoadRegions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '多个区域。格式为[RoadRegion\\_1, RoadRegion\\_2, ..., RoadRegion\\_N]。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'RoadRegion' => 
                array (
                  'description' => '任意四边形的四个顶点的坐标X和Y，格式为`[x1,y1,x2,y2,x3,y3,x4,y4]`。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Point' => 
                      array (
                        'description' => '四边形的顶点坐标。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'description' => '坐标点的X值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => true,
                            'example' => '400',
                          ),
                          'Y' => 
                          array (
                            'description' => '坐标点的Y值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => true,
                            'example' => '400',
                          ),
                        ),
                        'required' => true,
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PreRegionIntersectFeatures',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '前一帧画面与各个指定区域相交集的车辆检测框对应的车辆特征。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Features' => 
                array (
                  'description' => '特征为Base64编码的字符串。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'Base64编码的字符串。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'AEAMQQAAAA****ABhC',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
                'example' => '4FC381BB-04F2-50F4-B54B-593042BCF3C6',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '车辆检测框的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Boxes' => 
                        array (
                          'description' => '检测框坐标，格式为`[left, top, right, bottom]`。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Left' => 
                              array (
                                'description' => '矩形区域的左上角横轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '341',
                              ),
                              'Top' => 
                              array (
                                'description' => '矩形区域的左上角纵轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '434',
                              ),
                              'Right' => 
                              array (
                                'description' => '矩形区域的右下角横轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '589',
                              ),
                              'Bottom' => 
                              array (
                                'description' => '矩形区域的右下角纵轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '576',
                              ),
                            ),
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '检测框的置信度，范围为`[0,1]`。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.962890625',
                        ),
                        'TypeName' => 
                        array (
                          'description' => '检测框对应的物体。取值仅为`vehicle`。',
                          'type' => 'string',
                          'example' => 'vehicle',
                        ),
                        'Id' => 
                        array (
                          'description' => '检测框ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'RegionIntersectFeatures' => 
                  array (
                    'description' => '与各个指定区域相交集的车辆检测框对应的车辆特征。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Features' => 
                        array (
                          'description' => '特征为Base64编码的字符串。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '此Base64编码用于匹配两帧之间的车辆是否为同一车辆。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                            'type' => 'string',
                            'example' => 'AEAMQQAAAA****ABhC',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'RegionIntersectMatched' => 
                  array (
                    'description' => '判断当前帧的RegionIntersectFeatures与PreRegionIntersectFeatures中哪一个特征是匹配的。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Ids' => 
                        array (
                          'description' => '输出匹配的特征IDx。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '当两帧之间的两个车辆是匹配时，说明该车辆在两帧之间的时间内存在滞留或拥堵现象。

 > **-1**代表没有匹配的特征，如果匹配将显示对应检测框ID。例如，车辆检测框ID为`[1,2,3]`，RegionIntersectMatched显示为`[-1,-1,-1]`，则表示三个区域均没有匹配，RegionIntersectMatched显示为`[-1,2,3]`，则表示区域1未匹配，区域2和3匹配。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[-1,-1,-1]',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'RegionIntersects' => 
                  array (
                    'description' => '与各个指定区域相交集的车辆检测框对应的车辆特征。

例如，返回结果为[ {"Ids":[1,3]}, {"Ids":[2,4]} ]，其中{"Ids":[1,3]}是与区域1相交集的车辆检测框的ID， {"Ids":[2,4]}是与区域2相交集的车辆检测框的ID。当车辆出现在给定区域内，说明存在车辆占道的情况。

除了**RegionIntersects**里包含的ID的检测框外，其它的检测框为区域外的检测框。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Ids' => 
                        array (
                          'description' => '与各个指定区域相交集的车辆检测框的多个ID。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '与各个指定区域相交集的车辆检测框的多个ID。

例如，{"Ids":[1,3]}是与相应区域相交集的车辆检测框的IDs。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[1,2,3]',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4FC381BB-04F2-50F4-B54B-593042BCF3C6\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Boxes\\": [\\n          {\\n            \\"Left\\": 341,\\n            \\"Top\\": 434,\\n            \\"Right\\": 589,\\n            \\"Bottom\\": 576\\n          }\\n        ],\\n        \\"Score\\": 0.962890625,\\n        \\"TypeName\\": \\"vehicle\\",\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"RegionIntersectFeatures\\": [\\n      {\\n        \\"Features\\": [\\n          \\"AEAMQQAAAA****ABhC\\"\\n        ]\\n      }\\n    ],\\n    \\"RegionIntersectMatched\\": [\\n      {\\n        \\"Ids\\": [\\n          0\\n        ]\\n      }\\n    ],\\n    \\"RegionIntersects\\": [\\n      {\\n        \\"Ids\\": [\\n          0\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectVehicleICongestionResponse>\\n    <RequestId>4FC381BB-04F2-50F4-B54B-593042BCF3C6</RequestId>\\n    <Data>\\n        <RegionIntersectFeatures>\\n            <Features>AOAQQQBA****FRD</Features>\\n            <Features>AEAMQQAA****KRC</Features>\\n            <Features>AEAMQQAA****BhC</Features>\\n        </RegionIntersectFeatures>\\n        <RegionIntersects>\\n            <Ids>1</Ids>\\n            <Ids>2</Ids>\\n            <Ids>3</Ids>\\n        </RegionIntersects>\\n        <Elements>\\n            <Score>0.962890625</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>0</Id>\\n            <Boxes>\\n                <Left>341</Left>\\n                <Top>434</Top>\\n                <Right>589</Right>\\n                <Bottom>576</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.9619140625</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>1</Id>\\n            <Boxes>\\n                <Left>304</Left>\\n                <Top>228</Top>\\n                <Right>525</Right>\\n                <Bottom>440</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.83203125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>2</Id>\\n            <Boxes>\\n                <Left>0</Left>\\n                <Top>24</Top>\\n                <Right>68</Right>\\n                <Bottom>106</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.53125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>3</Id>\\n            <Boxes>\\n                <Left>0</Left>\\n                <Top>0</Top>\\n                <Right>58</Right>\\n                <Bottom>38</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <RegionIntersectMatched>\\n            <Ids>-1</Ids>\\n            <Ids>-1</Ids>\\n            <Ids>-1</Ids>\\n        </RegionIntersectMatched>\\n    </Data>\\n</DetectVehicleICongestionResponse>","errorExample":""}]',
      'title' => '检测车辆拥堵',
      'description' => '## 功能描述
车辆拥堵检测能力根据图片中的车辆，判断是否发生拥堵。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectVehicleICongestion)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 停车场拥堵检测：通过停车场摄像头间隔时间内捕捉的两张图像，检测车辆以及相对位置，判断是否发生拥堵。
- 道路拥堵检测：通过道路监控间隔时间内捕捉的前后图像，检测车辆以及相对位置，判断是否发生拥堵。

## 特色优势
检测数据量少：无需较大数据量的视频，仅通过检测两张图片，即可判断是否发生拥堵。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectVehicleICongestion?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectVehicleICongestion%2FDetectVehicleICongestion1.jpg%22%2C%22%20RoadRegion%22%3A%22%5B100%2C125%2C830%2C125%2C100%2C425%2C830%2C425%5D%22%2C%22RoadRegions%22%3A%5B%7B%22RoadRegion%22%3A%5B%7B%22Point%22%3A%7B%22X%22%3A100%2C%22Y%22%3A125%7D%7D%2C%7B%22Point%22%3A%7B%22X%22%3A830%2C%22Y%22%3A125%7D%7D%2C%7B%22Point%22%3A%7B%22X%22%3A100%2C%22Y%22%3A425%7D%7D%2C%7B%22Point%22%3A%7B%22X%22%3A830%2C%22Y%22%3A425%7D%7D%5D%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。

5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过500 KB。
- 图像分辨率：大于20×20像素，小于800×800像素，长宽比小于等于2。
- URL地址中不能包含中文字符。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的车辆拥堵检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于车辆拥堵检测的错误码，详情请参见[常见错误码](~~146760~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectVehicleIllegalParking' => 
    array (
      'summary' => '本文为您介绍车辆违停检测DetectVehicleIllegalParking的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectVehicleIllegalParking/DetectVehicleIllegalParking2.jpg',
            'maxItems' => 1,
            'minItems' => 20,
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'RoadRegions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '多个区域。格式为[RoadRegion\\_1, RoadRegion\\_2, ..., RoadRegion\\_N]。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'RoadRegion' => 
                array (
                  'description' => '任意四边形的四个顶点的坐标X和Y，格式为`[x1,y1,x2,y2,x3,y3,x4,y4]`。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Point' => 
                      array (
                        'description' => '四边形的顶点坐标。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'description' => '坐标点的X值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => true,
                            'example' => '400',
                          ),
                          'Y' => 
                          array (
                            'description' => '坐标点的Y值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => true,
                            'example' => '400',
                          ),
                        ),
                        'required' => true,
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
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
                'example' => 'DB882EDD-991A-5A0C-A19B-CC7C4BA65E35',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '车辆检测框的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Boxes' => 
                        array (
                          'description' => '检测框坐标，格式为`[left, top, right, bottom]`。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Left' => 
                              array (
                                'description' => '矩形区域的左上角横轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '413',
                              ),
                              'Top' => 
                              array (
                                'description' => '矩形区域的左上角纵轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '138',
                              ),
                              'Right' => 
                              array (
                                'description' => '矩形区域的右下角横轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '499',
                              ),
                              'Bottom' => 
                              array (
                                'description' => '矩形区域的右下角纵轴坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '268',
                              ),
                            ),
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '检测框的置信度，范围为`[0,1]`。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9599609375',
                        ),
                        'TypeName' => 
                        array (
                          'description' => '检测框对应的物体。取值仅为`vehicle`。',
                          'type' => 'string',
                          'example' => 'vehicle',
                        ),
                        'Id' => 
                        array (
                          'description' => '检测框ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'RegionIntersects' => 
                  array (
                    'description' => '与各个给定区域相交集的车辆检测框对应的车辆特征。

例如，返回结果为[ {"Ids":[1,3]}, {"Ids":[2,4]} ]，其中{"Ids":[1,3]}是与区域1相交集的车辆检测框的ID， {"Ids":[2,4]}是与区域2相交集的车辆检测框的ID。当车辆出现在给定区域内，说明存在车辆占道的情况。

除了**RegionIntersects**里包含的ID的检测框外，其它的检测框为区域外的检测框。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Ids' => 
                        array (
                          'description' => '与各个指定区域相交集的车辆检测框的多个ID。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '与各个指定区域相交集的车辆检测框的多个ID。

例如，{"Ids":[1,3]}是与相应区域相交集的车辆检测框的IDs。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[1,2,3]',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DB882EDD-991A-5A0C-A19B-CC7C4BA65E35\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Boxes\\": [\\n          {\\n            \\"Left\\": 413,\\n            \\"Top\\": 138,\\n            \\"Right\\": 499,\\n            \\"Bottom\\": 268\\n          }\\n        ],\\n        \\"Score\\": 0.9599609375,\\n        \\"TypeName\\": \\"vehicle\\",\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"RegionIntersects\\": [\\n      {\\n        \\"Ids\\": [\\n          0\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectVehicleIllegalParkingResponse>\\n    <RequestId>DB882EDD-991A-5A0C-A19B-CC7C4BA65E35</RequestId>\\n    <Data>\\n        <RegionIntersects>\\n            <Ids>1</Ids>\\n            <Ids>2</Ids>\\n            <Ids>3</Ids>\\n            <Ids>4</Ids>\\n            <Ids>5</Ids>\\n            <Ids>6</Ids>\\n            <Ids>7</Ids>\\n            <Ids>8</Ids>\\n            <Ids>10</Ids>\\n            <Ids>11</Ids>\\n        </RegionIntersects>\\n        <Elements>\\n            <Score>0.9599609375</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>0</Id>\\n            <Boxes>\\n                <Left>413</Left>\\n                <Top>138</Top>\\n                <Right>499</Right>\\n                <Bottom>268</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.95751953125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>1</Id>\\n            <Boxes>\\n                <Left>146</Left>\\n                <Top>121</Top>\\n                <Right>371</Right>\\n                <Bottom>284</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.93310546875</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>2</Id>\\n            <Boxes>\\n                <Left>54</Left>\\n                <Top>92</Top>\\n                <Right>164</Right>\\n                <Bottom>213</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.9326171875</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>3</Id>\\n            <Boxes>\\n                <Left>94</Left>\\n                <Top>141</Top>\\n                <Right>171</Right>\\n                <Bottom>232</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.9150390625</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>4</Id>\\n            <Boxes>\\n                <Left>303</Left>\\n                <Top>114</Top>\\n                <Right>430</Right>\\n                <Bottom>195</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.82080078125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>5</Id>\\n            <Boxes>\\n                <Left>14</Left>\\n                <Top>134</Top>\\n                <Right>32</Right>\\n                <Bottom>154</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.767578125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>6</Id>\\n            <Boxes>\\n                <Left>0</Left>\\n                <Top>132</Top>\\n                <Right>17</Right>\\n                <Bottom>151</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.767578125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>7</Id>\\n            <Boxes>\\n                <Left>37</Left>\\n                <Top>133</Top>\\n                <Right>56</Right>\\n                <Bottom>162</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.765625</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>8</Id>\\n            <Boxes>\\n                <Left>27</Left>\\n                <Top>131</Top>\\n                <Right>55</Right>\\n                <Bottom>158</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.75341796875</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>9</Id>\\n            <Boxes>\\n                <Left>408</Left>\\n                <Top>14</Top>\\n                <Right>499</Right>\\n                <Bottom>143</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.517578125</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>10</Id>\\n            <Boxes>\\n                <Left>164</Left>\\n                <Top>130</Top>\\n                <Right>183</Right>\\n                <Bottom>144</Bottom>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.355712890625</Score>\\n            <TypeName>vehicle</TypeName>\\n            <Id>11</Id>\\n            <Boxes>\\n                <Left>1</Left>\\n                <Top>133</Top>\\n                <Right>31</Right>\\n                <Bottom>153</Bottom>\\n            </Boxes>\\n        </Elements>\\n    </Data>\\n</DetectVehicleIllegalParkingResponse>","errorExample":""}]',
      'title' => '检测车辆非法停车',
      'description' => '## 功能描述
车辆违停检测能力可通过检测图片中目标区域内是否有车辆停放。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectVehicleIllegalParking)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 消防通道占用：通过检测消防通道区域是否有车辆，可以判断是否有车辆占用了消防通道。
- 出入口违停：检测停车场、商场、小区、园区出入口指定区域是否有车辆违停。

## 特色优势

- 方便改造部署：仅需提供图像即可检测判断。
- 支持多种角度：支持通过多种角度检测是否存在车辆违停。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectVehicleIllegalParking?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectVehicleIllegalParking%2FDetectVehicleIllegalParking1.jpg%22%2C%22%20RoadRegion%22%3A%22%5B75%2C110%2C735%2C110%2C75%2C510%2C735%2C510%5D%22%2C%22RoadRegions%22%3A%5B%7B%22RoadRegion%22%3A%5B%7B%22Point%22%3A%7B%22X%22%3A75%2C%22Y%22%3A110%7D%7D%2C%7B%22Point%22%3A%7B%22X%22%3A735%2C%22Y%22%3A110%7D%7D%2C%7B%22Point%22%3A%7B%22X%22%3A75%2C%22Y%22%3A510%7D%7D%2C%7B%22Point%22%3A%7B%22X%22%3A735%2C%22Y%22%3A510%7D%7D%5D%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。

5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过500 KB。
- 图像分辨率：大于20×20像素，小于800×800像素。
- URL地址中不能包含中文字符。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的车辆违停检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于车辆违停检测的错误码，详情请参见[常见错误码](~~146760~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectMainBody' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectMainBody/DetectMainBody1.jpg',
            'isFileTransferUrl' => true,
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
                'example' => '2E59C333-5480-4231-A8AB-BEE1001EA7FE',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Location' => 
                  array (
                    'description' => '图像定位信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '元素宽度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '583',
                      ),
                      'Height' => 
                      array (
                        'description' => '元素高度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '320',
                      ),
                      'Y' => 
                      array (
                        'description' => '元素y坐标。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                      'X' => 
                      array (
                        'description' => '元素x坐标。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '28',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2E59C333-5480-4231-A8AB-BEE1001EA7FE\\",\\n  \\"Data\\": {\\n    \\"Location\\": {\\n      \\"Width\\": 583,\\n      \\"Height\\": 320,\\n      \\"Y\\": 20,\\n      \\"X\\": 28\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectMainBodyResponse>\\n    <RequestId>2E59C333-5480-4231-A8AB-BEE1001EA7FE</RequestId>\\n    <Data>\\n        <Location>\\n            <X>28</X>\\n            <Y>20</Y>\\n            <Height>320</Height>\\n            <Width>583</Width>\\n        </Location>\\n    </Data>\\n</DetectMainBodyResponse>","errorExample":""}]',
      'title' => '主体检测',
      'summary' => '本文档介绍主体检测DetectMainBody的语法及示例。',
      'description' => '## 功能描述
主体检测能力对输入图片进行检测，输出主体定位信息。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectMainBody)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectMainBody?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectMainBody%2FDetectMainBody1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。

5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[主体检测示例代码](~~604398~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

##  输入限制

- 图像格式：PNG（不支持8位、16位和64位的PNG）、JPG、JPEG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：小于1280×1280像素。
- URL地址中不能包含中文字符。

## 计费说明
关于主体检测的计费方式及报价，请参见[计费介绍](~~202484~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectMainBody)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的主体检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[主体检测示例代码](~~604398~~)。',
      'extraInfo' => '## 错误码
关于主体检测的错误码，详情请参见[常见错误码](~~146760~~)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectWhiteBaseImage' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectWhiteBaseImage/DetectWhiteBaseImage1.jpg',
            'isFileTransferUrl' => true,
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
                'example' => '7A7F9EEB-44C4-4592-9089-A6185B222B23',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回判断结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'WhiteBase' => 
                        array (
                          'description' => '是否白底图。

- 0：非白底

- 1：白底

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7A7F9EEB-44C4-4592-9089-A6185B222B23\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"WhiteBase\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectWhiteBaseImageResponse>\\n    <RequestId>7A7F9EEB-44C4-4592-9089-A6185B222B23</RequestId>\\n    <Data>\\n        <Elements>\\n            <WhiteBase>0</WhiteBase>\\n        </Elements>\\n    </Data>\\n</DetectWhiteBaseImageResponse>","errorExample":""}]',
      'title' => '白底图检测',
      'summary' => '本文介绍白底图检测DetectWhiteBaseImage的语法及示例。',
      'description' => '## 功能描述
白底图检测能力用于检测图片背景是否为白底图。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectWhiteBaseImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectWhiteBaseImage?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectWhiteBaseImage%2FDetectWhiteBaseImage1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。

5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[白底图检测示例代码](~~604401~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于1280×1280像素。
- URL地址中不能包含中文字符。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的白底图检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[白底图检测示例代码](~~604401~~)。',
      'extraInfo' => '## 错误码
关于白底图检测的错误码，详情请参见[常见错误码](~~146760~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GetAsyncJobResult' => 
    array (
      'summary' => '本文介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '异步接口返回的RequestId，输入后可以查询异步接口的真实请求结果。',
            'type' => 'string',
            'required' => true,
            'example' => '35B11E1B-800C-4598-B5AA-577E3BDBD917',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '87FC80D2-2571-4BBD-BD61-AFF7912C556D',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '异步任务状态。包括：

- QUEUING：任务排队中
- PROCESSING：异步处理中
- PROCESS_SUCCESS：处理成功
- PROCESS_FAILED：处理失败
- TIMEOUT_FAILED：任务超时未处理完成
- LIMIT_RETRY_FAILED：超过最大重试次数',
                    'type' => 'string',
                    'example' => 'PROCESS_SUCCESS',
                  ),
                  'ErrorMessage' => 
                  array (
                    'description' => '异步任务错误码信息。',
                    'type' => 'string',
                    'example' => 'paramsIllegal',
                  ),
                  'Result' => 
                  array (
                    'description' => '异步任务返回的真实请求结果。',
                    'type' => 'string',
                    'example' => '{\\"inputFile\\":\\"oss://public-vigen-video/guotian.xgt/test_images/test_video\\",\\"width\\":1280,\\"height\\":720,\\"frames\\":[{\\"time\\":6124533574,\\"elements\\":[{\\"type\\":\\"PERSON\\",\\"score\\":0.7812,\\"x\\":289,\\"y\\":271,\\"width\\":100,\\"height\\":156},{\\"type\\":\\"PERSON\\",\\"score\\":0.4377,\\"x\\":917,\\"y\\":267,\\"width\\":34,\\"height\\":51}]}]}]}"}',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '异步任务错误码。',
                    'type' => 'string',
                    'example' => 'InvalidParameter',
                  ),
                  'JobId' => 
                  array (
                    'description' => '异步任务ID。',
                    'type' => 'string',
                    'example' => '35B11E1B-800C-4598-B5AA-577E3BDBD917',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"87FC80D2-2571-4BBD-BD61-AFF7912C556D\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\\\\\\\\\"inputFile\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss://public-vigen-video/guotian.xgt/test_images/test_video\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"width\\\\\\\\\\\\\\":1280,\\\\\\\\\\\\\\"height\\\\\\\\\\\\\\":720,\\\\\\\\\\\\\\"frames\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":6124533574,\\\\\\\\\\\\\\"elements\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"PERSON\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"score\\\\\\\\\\\\\\":0.7812,\\\\\\\\\\\\\\"x\\\\\\\\\\\\\\":289,\\\\\\\\\\\\\\"y\\\\\\\\\\\\\\":271,\\\\\\\\\\\\\\"width\\\\\\\\\\\\\\":100,\\\\\\\\\\\\\\"height\\\\\\\\\\\\\\":156},{\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"PERSON\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"score\\\\\\\\\\\\\\":0.4377,\\\\\\\\\\\\\\"x\\\\\\\\\\\\\\":917,\\\\\\\\\\\\\\"y\\\\\\\\\\\\\\":267,\\\\\\\\\\\\\\"width\\\\\\\\\\\\\\":34,\\\\\\\\\\\\\\"height\\\\\\\\\\\\\\":51}]}]}]}\\\\\\"}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"35B11E1B-800C-4598-B5AA-577E3BDBD917\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>87FC80D2-2571-4BBD-BD61-AFF7912C556D</RequestId>\\n<Data>\\n    <Status>PROCESS_SUCCESS</Status>\\n    <ErrorMessage>paramsIllegal</ErrorMessage>\\n    <Result>{\\\\\\"inputFile\\\\\\":\\\\\\"oss://public-vigen-video/guotian.xgt/test_images/test_video\\\\\\",\\\\\\"width\\\\\\":1280,\\\\\\"height\\\\\\":720,\\\\\\"frames\\\\\\":[{\\\\\\"time\\\\\\":6124533574,\\\\\\"elements\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"PERSON\\\\\\",\\\\\\"score\\\\\\":0.7812,\\\\\\"x\\\\\\":289,\\\\\\"y\\\\\\":271,\\\\\\"width\\\\\\":100,\\\\\\"height\\\\\\":156},{\\\\\\"type\\\\\\":\\\\\\"PERSON\\\\\\",\\\\\\"score\\\\\\":0.4377,\\\\\\"x\\\\\\":917,\\\\\\"y\\\\\\":267,\\\\\\"width\\\\\\":34,\\\\\\"height\\\\\\":51}]}]}]}\\"}</Result>\\n    <ErrorCode>InvalidParameter</ErrorCode>\\n    <JobId>35B11E1B-800C-4598-B5AA-577E3BDBD917</JobId>\\n</Data>","errorExample":""}]',
      'title' => '查询异步任务结果',
      'description' => '## 功能描述
针对异步接口，调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。

> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


当前目标检测类目中IPC视频目标检测（DetectVideoIPCObject）为异步接口，需要调用GetAsyncJobResult来获取真实的请求结果。',
      'extraInfo' => '## 错误码
关于查询异步任务结果的错误码，详情请参见[常见错误码](~~146760~~)。

## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见[SDK总览](~~145033~~)下载安装。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectKitchenAnimals' => 
    array (
      'summary' => '本文为您介绍猫鼠识别。',
      'methods' => 
      array (
        0 => 'post',
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
          'name' => 'ImageURLA',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像A的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectKitchenAnimals/DetectKitchenAnimals-left1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageURLB',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像B的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectKitchenAnimals/DetectKitchenAnimals-right1.png',
            'isFileTransferUrl' => true,
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
                'example' => 'C306F16F-30E1-54F4-93DF-A52CCF6664D1',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '检测结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '检测结果类型。取值如下：

- mouse：老鼠
- cat：猫',
                          'type' => 'string',
                          'example' => 'mouse',
                        ),
                        'Score' => 
                        array (
                          'description' => '检测结果概率值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.75105053',
                        ),
                        'Rectangles' => 
                        array (
                          'description' => '检测目标位置。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Top' => 
                            array (
                              'description' => '左上角X坐标，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1048',
                            ),
                            'Left' => 
                            array (
                              'description' => '左上角Y坐标，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '292',
                            ),
                            'Height' => 
                            array (
                              'description' => '高度，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '64',
                            ),
                            'Width' => 
                            array (
                              'description' => '宽度，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '64',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C306F16F-30E1-54F4-93DF-A52CCF6664D1\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"mouse\\",\\n        \\"Score\\": 0.75105053,\\n        \\"Rectangles\\": {\\n          \\"Top\\": 1048,\\n          \\"Left\\": 292,\\n          \\"Height\\": 64,\\n          \\"Width\\": 64\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectKitchenAnimalsResponse>\\n    <RequestId>C306F16F-30E1-54F4-93DF-A52CCF6664D1</RequestId>\\n    <Data>\\n        <Elements>\\n            <Type>mouse</Type>\\n            <Score>0.75105053</Score>\\n            <Rectangles>\\n                <Left>292</Left>\\n                <Top>1048</Top>\\n                <Height>64</Height>\\n                <Width>64</Width>\\n            </Rectangles>\\n        </Elements>\\n        <Elements>\\n            <Type>cat</Type>\\n            <Score>0.4602436</Score>\\n            <Rectangles>\\n                <Left>1344</Left>\\n                <Top>208</Top>\\n                <Height>112</Height>\\n                <Width>164</Width>\\n            </Rectangles>\\n        </Elements>\\n    </Data>\\n</DetectKitchenAnimalsResponse>","errorExample":""}]',
      'title' => '猫鼠识别',
      'description' => '## 功能描述
猫鼠识别能力基于视觉AI算法、物联网和大数据分析技术，可以检测出场景中是否有猫、老鼠等动物，实现实时预警。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectKitchenAnimals)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
餐饮后厨或仓库：针对后厨操作间、食材存储仓库等场地，实时检测是否有猫、老鼠等动物，并进行实时预警，提醒工作人员进行相应处理防范。

## 特色优势

- 识别准确：基于大量场景样本的基础上，对不同环境、光线、角度、目标状态等进行针对性的训练学习，算法模型识别精度高。
- 适应性强：算法模型场景适应性强，可直接用于不同空间布局的场景、各类餐厅后厨及用餐前场。
- 自研算法：通过多端多场景风险发现互通，形成检测、预警、整改、优化全链路闭环，结合数据分析、规则提取实现反哺生产，进而优化模型性能。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectKitchenAnimals?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fobjectdet%2FDetectVehicleICongestion%2FDetectVehicleICongestion1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。

5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[猫鼠识别示例代码](~~604399~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG、BMP。
- 图像大小：不超过4 MB，长宽比建议为16:9。
- 图像分辨率：大于1080×720像素。
- 输入的连续图像尺寸需要保持一致。
- 需要采集摄像头视角的图像。
- 图像URL地址中不能包含中文字符。
- 推荐的图像和检测目标的分辨率如下表所示。
![](https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/objectdet/cat_mouse.png)

## 计费说明
关于猫鼠识别的计费方式及报价，请参见[计费介绍](~~202484~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=objectdet&children=DetectKitchenAnimals)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的猫鼠识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[猫鼠识别示例代码](~~604399~~)。',
      'extraInfo' => '## 错误码
关于猫鼠识别的错误码，详情请参见[常见错误码](~~146760~~)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectWorkwear' => 
    array (
      'summary' => '本文为您介绍着装检测。',
      'methods' => 
      array (
        0 => 'post',
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
          'name' => 'Clothes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '着装参数设置',
            'type' => 'object',
            'properties' => 
            array (
              'MaxNum' => 
              array (
                'description' => '设定最多识别多少人体。最大值为5。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'Threshold' => 
              array (
                'description' => '设定阈值。取值范围0.0~1.0，数值越大，要求和样本数据相似度越高，默认0.4。',
                'type' => 'number',
                'format' => 'double',
                'required' => false,
                'example' => '0.4',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/zhangchaorun/tiyan/xxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Labels',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '1',
            'type' => 'array',
            'items' => 
            array (
              'description' => '检测的属性，取值如下：

- mask：口罩
- hat：帽子
- clothes：衣服',
              'type' => 'string',
              'required' => false,
              'example' => 'hat',
            ),
            'required' => false,
            'maxItems' => 3,
            'minItems' => 0,
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
                'example' => '16CA8094-D7BC-51D4-8D55-6AC59AB20E0B',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '检测结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Property' => 
                        array (
                          'description' => '检测结果属性。仅当**Type**返回0或1时，该字段显示返回结果，否则返回为空。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Label' => 
                              array (
                                'description' => '检测的属性。',
                                'type' => 'string',
                                'example' => 'hat',
                              ),
                              'Probability' => 
                              array (
                                'description' => '检测概率数据。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'No' => 
                                  array (
                                    'description' => '确定未戴口罩、未穿工装、未戴帽子的概率。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.00036084422',
                                  ),
                                  'Threshold' => 
                                  array (
                                    'description' => '系统推荐的阈值。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '0',
                                  ),
                                  'Unknown' => 
                                  array (
                                    'description' => '未知概率。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.0006906331',
                                  ),
                                  'Yes' => 
                                  array (
                                    'description' => '确定戴口罩、穿工装、戴帽子的概率。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.9989485',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Rectangles' => 
                        array (
                          'description' => '检测结果位置信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Height' => 
                            array (
                              'description' => '高度，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '96',
                            ),
                            'Left' => 
                            array (
                              'description' => '左上角Y坐标，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1067',
                            ),
                            'Top' => 
                            array (
                              'description' => '左上角X坐标，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '426',
                            ),
                            'Width' => 
                            array (
                              'description' => '宽度，单位像素。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '88',
                            ),
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '检测结果概率值。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.63913465',
                        ),
                        'Type' => 
                        array (
                          'description' => '检测结果类型。取值如下：

- 0：人体
- 1：人头
- 2：人脸
- 3：手',
                          'type' => 'string',
                          'example' => '1',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16CA8094-D7BC-51D4-8D55-6AC59AB20E0B\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Property\\": [\\n          {\\n            \\"Label\\": \\"hat\\",\\n            \\"Probability\\": {\\n              \\"No\\": 0.00036084422,\\n              \\"Threshold\\": 0,\\n              \\"Unknown\\": 0.0006906331,\\n              \\"Yes\\": 0.9989485\\n            }\\n          }\\n        ],\\n        \\"Rectangles\\": {\\n          \\"Height\\": 96,\\n          \\"Left\\": 1067,\\n          \\"Top\\": 426,\\n          \\"Width\\": 88\\n        },\\n        \\"Score\\": 0.63913465,\\n        \\"Type\\": \\"1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectWorkwearResponse>\\n    <RequestId>16CA8094-D7BC-51D4-8D55-6AC59AB20E0B</RequestId>\\n    <Data>\\n        <Elements>\\n            <Property>\\n                <Label>hat</Label>\\n                <Probability>\\n                    <No>0.00036084422</No>\\n                    <Threshold>0</Threshold>\\n                    <Unknown>0.0006906331</Unknown>\\n                    <Yes>0.9989485</Yes>\\n                </Probability>\\n            </Property>\\n            <Rectangles>\\n                <Height>96</Height>\\n                <Left>1067</Left>\\n                <Top>426</Top>\\n                <Width>88</Width>\\n            </Rectangles>\\n            <Score>0.63913465</Score>\\n            <Type>1</Type>\\n        </Elements>\\n    </Data>\\n</DetectWorkwearResponse>","errorExample":""}]',
      'title' => '着装检测',
      'description' => '## 功能描述
着装检测能力基于视觉AI算法、物联网、大数据分析技术，检测指定场景范围内的人员帽子、口罩、工作服等穿戴情况，对不规范穿戴行为进行实时预警。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
工作人员规范着装识别：检测餐厅（后厨、前场）、服务大厅、工地、工厂、油田等场景下的工作人员着装（衣服、帽子、口罩等）是否合规，针对不规范行为进行实时预警，并提醒进行相应整改。


## 特色优势

- 识别准确：基于大量场景样本的基础上，对不同环境、光线、角度、目标状态等进行针对性的训练学习，算法模型识别精度高。
- 适应性强：算法模型场景适应性强，可直接用于不同空间布局的场景、各类餐厅后厨及用餐前场。
- 自研算法：通过多端多场景风险发现互通，形成检测、预警、整改、优化全链路闭环，结合数据分析、规则提取实现反哺生产，进而优化模型性能。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[目标检测服务](https://vision.aliyun.com/objectdet)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_objectdet_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/objectdet/2019-12-30/DetectWorkwear?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：    
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为目标检测（objectdet）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[着装检测示例代码](~~477842~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG、BMP。
- 图像大小：不超过2 MB，长宽比建议为16:9。
- 图像分辨率：大于1080×720像素。
- URL地址中不能包含中文字符。
- 推荐的图像和检测目标的分辨率如下表所示。
![](https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/objectdet/cloth.png)

## 计费说明
关于着装检测的计费方式及报价，请参见[计费介绍](~~202484~~)。

> 下方调试接口为付费接口。
',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI目标检测类目下的着装检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为目标检测（objectdet）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[着装检测示例代码](~~477842~~)。',
      'extraInfo' => '## 错误码
关于着装检测的错误码，详情请参见[常见错误码](~~146760~~)。

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
      'endpoint' => 'objectdet.cn-shanghai.aliyuncs.com',
    ),
  ),
);
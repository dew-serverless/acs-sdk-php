<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'documentAutoml',
    'version' => '2022-12-29',
  ),
  'directories' => 
  array (
    0 => 'PredictTemplateModel',
    1 => 'PredictModel',
    2 => 'PredictClassifierModel',
    3 => 'CreateModelAsyncPredict',
    4 => 'GetModelAsyncPredict',
    5 => 'PredictPreTrainModel',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'PredictTemplateModel' => 
    array (
      'summary' => '模板服务预测目前包括两种类型：自定义KV模板和自定义表格模板。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片或pdf文件访问URL地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/demo.png',
          ),
        ),
        2 => 
        array (
          'name' => 'BinaryToText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'content字段是图片URL时：false
body为base64的内容时：true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false：表示content传入的是url
true：表示body是直接传入图片进行base64的内容
',
          ),
        ),
        3 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片base64编码内容',
            'type' => 'string',
            'required' => false,
            'example' => 'data:image/png;base64,xxxxx',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F25FBAB4-665A-5D85-8AEF-39AE29F7D588',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'example' => '{
    "score": 0.9091,
    "data": [
      {
        "prob": 1,
        "fieldName": "姓名",
        "fieldWordRaw": "方大呆",
        "wordInfo": [
          {
            "prob": 0.9899999999999999,
            "location": [
              {
                "x": 119,
                "y": 48
              },
              {
                "x": 199,
                "y": 48
              },
              {
                "x": 199,
                "y": 69
              },
              {
                "x": 119,
                "y": 69
              }
            ],
            "word": "方大呆",
            "charInfo": [
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 119,
                    "y": 48
                  },
                  {
                    "x": 142,
                    "y": 48
                  },
                  {
                    "x": 142,
                    "y": 67
                  },
                  {
                    "x": 119,
                    "y": 67
                  }
                ],
                "word": "方"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 142,
                    "y": 48
                  },
                  {
                    "x": 165,
                    "y": 48
                  },
                  {
                    "x": 165,
                    "y": 67
                  },
                  {
                    "x": 142,
                    "y": 67
                  }
                ],
                "word": "大"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 167,
                    "y": 48
                  },
                  {
                    "x": 197,
                    "y": 48
                  },
                  {
                    "x": 197,
                    "y": 67
                  },
                  {
                    "x": 167,
                    "y": 67
                  }
                ],
                "word": "呆"
              }
            ]
          }
        ],
        "location": [
          {
            "x": 119,
            "y": 48
          },
          {
            "x": 199,
            "y": 48
          },
          {
            "x": 199,
            "y": 69
          },
          {
            "x": 119,
            "y": 69
          }
        ],
        "fieldWord": "方大呆"
      },
      {
        "prob": 1,
        "fieldName": "性别",
        "fieldWordRaw": "男",
        "wordInfo": [
          {
            "prob": 0.99,
            "location": [
              {
                "x": 117,
                "y": 93
              },
              {
                "x": 142,
                "y": 93
              },
              {
                "x": 142,
                "y": 112
              },
              {
                "x": 117,
                "y": 112
              }
            ],
            "word": "男",
            "charInfo": [
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 117,
                    "y": 93
                  },
                  {
                    "x": 142,
                    "y": 93
                  },
                  {
                    "x": 142,
                    "y": 112
                  },
                  {
                    "x": 117,
                    "y": 112
                  }
                ],
                "word": "男"
              }
            ]
          }
        ],
        "location": [
          {
            "x": 117,
            "y": 93
          },
          {
            "x": 142,
            "y": 93
          },
          {
            "x": 142,
            "y": 112
          },
          {
            "x": 117,
            "y": 112
          }
        ],
        "fieldWord": "男"
      },
      {
        "prob": 1,
        "fieldName": "身份证号",
        "fieldWordRaw": "310101********3222",
        "wordInfo": [
          {
            "prob": 0.9899999999999998,
            "location": [
              {
                "x": 206,
                "y": 301
              },
              {
                "x": 518,
                "y": 301
              },
              {
                "x": 518,
                "y": 320
              },
              {
                "x": 206,
                "y": 320
              }
            ],
            "word": "310101198610203222",
            "charInfo": [
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 206,
                    "y": 302
                  },
                  {
                    "x": 223,
                    "y": 302
                  },
                  {
                    "x": 223,
                    "y": 319
                  },
                  {
                    "x": 206,
                    "y": 319
                  }
                ],
                "word": "3"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 223,
                    "y": 302
                  },
                  {
                    "x": 238,
                    "y": 302
                  },
                  {
                    "x": 238,
                    "y": 319
                  },
                  {
                    "x": 223,
                    "y": 319
                  }
                ],
                "word": "1"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 240,
                    "y": 302
                  },
                  {
                    "x": 255,
                    "y": 302
                  },
                  {
                    "x": 255,
                    "y": 319
                  },
                  {
                    "x": 240,
                    "y": 319
                  }
                ],
                "word": "0"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 259,
                    "y": 302
                  },
                  {
                    "x": 274,
                    "y": 302
                  },
                  {
                    "x": 274,
                    "y": 319
                  },
                  {
                    "x": 259,
                    "y": 319
                  }
                ],
                "word": "1"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 276,
                    "y": 302
                  },
                  {
                    "x": 291,
                    "y": 302
                  },
                  {
                    "x": 291,
                    "y": 319
                  },
                  {
                    "x": 276,
                    "y": 319
                  }
                ],
                "word": "0"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 292,
                    "y": 302
                  },
                  {
                    "x": 307,
                    "y": 302
                  },
                  {
                    "x": 307,
                    "y": 319
                  },
                  {
                    "x": 292,
                    "y": 319
                  }
                ],
                "word": "1"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 311,
                    "y": 302
                  },
                  {
                    "x": 326,
                    "y": 302
                  },
                  {
                    "x": 326,
                    "y": 319
                  },
                  {
                    "x": 311,
                    "y": 319
                  }
                ],
                "word": "1"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 328,
                    "y": 302
                  },
                  {
                    "x": 343,
                    "y": 302
                  },
                  {
                    "x": 343,
                    "y": 319
                  },
                  {
                    "x": 328,
                    "y": 319
                  }
                ],
                "word": "9"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 344,
                    "y": 302
                  },
                  {
                    "x": 359,
                    "y": 302
                  },
                  {
                    "x": 359,
                    "y": 319
                  },
                  {
                    "x": 344,
                    "y": 319
                  }
                ],
                "word": "8"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 361,
                    "y": 302
                  },
                  {
                    "x": 376,
                    "y": 302
                  },
                  {
                    "x": 376,
                    "y": 319
                  },
                  {
                    "x": 361,
                    "y": 319
                  }
                ],
                "word": "6"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 380,
                    "y": 302
                  },
                  {
                    "x": 395,
                    "y": 302
                  },
                  {
                    "x": 395,
                    "y": 319
                  },
                  {
                    "x": 380,
                    "y": 319
                  }
                ],
                "word": "1"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 396,
                    "y": 302
                  },
                  {
                    "x": 411,
                    "y": 302
                  },
                  {
                    "x": 411,
                    "y": 319
                  },
                  {
                    "x": 396,
                    "y": 319
                  }
                ],
                "word": "0"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 415,
                    "y": 302
                  },
                  {
                    "x": 430,
                    "y": 302
                  },
                  {
                    "x": 430,
                    "y": 319
                  },
                  {
                    "x": 415,
                    "y": 319
                  }
                ],
                "word": "2"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 432,
                    "y": 302
                  },
                  {
                    "x": 447,
                    "y": 302
                  },
                  {
                    "x": 447,
                    "y": 319
                  },
                  {
                    "x": 432,
                    "y": 319
                  }
                ],
                "word": "0"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 448,
                    "y": 302
                  },
                  {
                    "x": 463,
                    "y": 302
                  },
                  {
                    "x": 463,
                    "y": 319
                  },
                  {
                    "x": 448,
                    "y": 319
                  }
                ],
                "word": "3"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 467,
                    "y": 302
                  },
                  {
                    "x": 482,
                    "y": 302
                  },
                  {
                    "x": 482,
                    "y": 319
                  },
                  {
                    "x": 467,
                    "y": 319
                  }
                ],
                "word": "2"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 484,
                    "y": 302
                  },
                  {
                    "x": 499,
                    "y": 302
                  },
                  {
                    "x": 499,
                    "y": 319
                  },
                  {
                    "x": 484,
                    "y": 319
                  }
                ],
                "word": "2"
              },
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 501,
                    "y": 302
                  },
                  {
                    "x": 516,
                    "y": 302
                  },
                  {
                    "x": 516,
                    "y": 319
                  },
                  {
                    "x": 501,
                    "y": 319
                  }
                ],
                "word": "2"
              }
            ]
          }
        ],
        "location": [
          {
            "x": 206,
            "y": 301
          },
          {
            "x": 518,
            "y": 301
          },
          {
            "x": 518,
            "y": 320
          },
          {
            "x": 206,
            "y": 320
          }
        ],
        "fieldWord": "310101198610203222"
      },
      {
        "prob": 1,
        "fieldName": "名族",
        "fieldWordRaw": "汉",
        "wordInfo": [
          {
            "prob": 0.99,
            "location": [
              {
                "x": 232,
                "y": 94
              },
              {
                "x": 259,
                "y": 94
              },
              {
                "x": 259,
                "y": 112
              },
              {
                "x": 232,
                "y": 112
              }
            ],
            "word": "汉",
            "charInfo": [
              {
                "prob": 0.99,
                "location": [
                  {
                    "x": 232,
                    "y": 94
                  },
                  {
                    "x": 259,
                    "y": 94
                  },
                  {
                    "x": 259,
                    "y": 112
                  },
                  {
                    "x": 232,
                    "y": 112
                  }
                ],
                "word": "汉"
              }
            ]
          }
        ],
        "location": [
          {
            "x": 232,
            "y": 94
          },
          {
            "x": 259,
            "y": 94
          },
          {
            "x": 259,
            "y": 112
          },
          {
            "x": 232,
            "y": 112
          }
        ],
        "fieldWord": "汉"
      }
    ],
    "specificType": "infoCustomeKvTemp",
    "width": 586,
    "angle": 0,
    "classType": "template",
    "height": 374,
    "predictFile": "https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/demo.png"
  }',
              ),
              'Message' => 
              array (
                'description' => '返回消息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 200表示成功。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '21002',
            'errorMessage' => '模板预测超时',
          ),
          1 => 
          array (
            'errorCode' => '21003',
            'errorMessage' => '模板预测失败',
          ),
          2 => 
          array (
            'errorCode' => '21004',
            'errorMessage' => '模板提交失败	',
          ),
          3 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => '参数出错	',
          ),
          4 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => '服务不存在	',
          ),
          5 => 
          array (
            'errorCode' => '21018',
            'errorMessage' => '未找到模板信息	',
          ),
          6 => 
          array (
            'errorCode' => '16001',
            'errorMessage' => '未找到可预测的模型',
          ),
          7 => 
          array (
            'errorCode' => '16004',
            'errorMessage' => '指定的模型不存在',
          ),
          8 => 
          array (
            'errorCode' => '23002',
            'errorMessage' => '获取资源HTTP异常	',
          ),
          9 => 
          array (
            'errorCode' => '22002',
            'errorMessage' => 'ocr服务异常	',
          ),
          10 => 
          array (
            'errorCode' => '11002',
            'errorMessage' => '账号没有开通服务	',
          ),
          11 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => '未知异常',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F25FBAB4-665A-5D85-8AEF-39AE29F7D588\\",\\n  \\"Data\\": {\\n    \\"score\\": 0.9091,\\n    \\"data\\": [\\n      {\\n        \\"prob\\": 1,\\n        \\"fieldName\\": \\"姓名\\",\\n        \\"fieldWordRaw\\": \\"方大呆\\",\\n        \\"wordInfo\\": [\\n          {\\n            \\"prob\\": 0.9899999999999999,\\n            \\"location\\": [\\n              {\\n                \\"x\\": 119,\\n                \\"y\\": 48\\n              },\\n              {\\n                \\"x\\": 199,\\n                \\"y\\": 48\\n              },\\n              {\\n                \\"x\\": 199,\\n                \\"y\\": 69\\n              },\\n              {\\n                \\"x\\": 119,\\n                \\"y\\": 69\\n              }\\n            ],\\n            \\"word\\": \\"方大呆\\",\\n            \\"charInfo\\": [\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 119,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 142,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 142,\\n                    \\"y\\": 67\\n                  },\\n                  {\\n                    \\"x\\": 119,\\n                    \\"y\\": 67\\n                  }\\n                ],\\n                \\"word\\": \\"方\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 142,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 165,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 165,\\n                    \\"y\\": 67\\n                  },\\n                  {\\n                    \\"x\\": 142,\\n                    \\"y\\": 67\\n                  }\\n                ],\\n                \\"word\\": \\"大\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 167,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 197,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 197,\\n                    \\"y\\": 67\\n                  },\\n                  {\\n                    \\"x\\": 167,\\n                    \\"y\\": 67\\n                  }\\n                ],\\n                \\"word\\": \\"呆\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"location\\": [\\n          {\\n            \\"x\\": 119,\\n            \\"y\\": 48\\n          },\\n          {\\n            \\"x\\": 199,\\n            \\"y\\": 48\\n          },\\n          {\\n            \\"x\\": 199,\\n            \\"y\\": 69\\n          },\\n          {\\n            \\"x\\": 119,\\n            \\"y\\": 69\\n          }\\n        ],\\n        \\"fieldWord\\": \\"方大呆\\"\\n      },\\n      {\\n        \\"prob\\": 1,\\n        \\"fieldName\\": \\"性别\\",\\n        \\"fieldWordRaw\\": \\"男\\",\\n        \\"wordInfo\\": [\\n          {\\n            \\"prob\\": 0.99,\\n            \\"location\\": [\\n              {\\n                \\"x\\": 117,\\n                \\"y\\": 93\\n              },\\n              {\\n                \\"x\\": 142,\\n                \\"y\\": 93\\n              },\\n              {\\n                \\"x\\": 142,\\n                \\"y\\": 112\\n              },\\n              {\\n                \\"x\\": 117,\\n                \\"y\\": 112\\n              }\\n            ],\\n            \\"word\\": \\"男\\",\\n            \\"charInfo\\": [\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 117,\\n                    \\"y\\": 93\\n                  },\\n                  {\\n                    \\"x\\": 142,\\n                    \\"y\\": 93\\n                  },\\n                  {\\n                    \\"x\\": 142,\\n                    \\"y\\": 112\\n                  },\\n                  {\\n                    \\"x\\": 117,\\n                    \\"y\\": 112\\n                  }\\n                ],\\n                \\"word\\": \\"男\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"location\\": [\\n          {\\n            \\"x\\": 117,\\n            \\"y\\": 93\\n          },\\n          {\\n            \\"x\\": 142,\\n            \\"y\\": 93\\n          },\\n          {\\n            \\"x\\": 142,\\n            \\"y\\": 112\\n          },\\n          {\\n            \\"x\\": 117,\\n            \\"y\\": 112\\n          }\\n        ],\\n        \\"fieldWord\\": \\"男\\"\\n      },\\n      {\\n        \\"prob\\": 1,\\n        \\"fieldName\\": \\"身份证号\\",\\n        \\"fieldWordRaw\\": \\"310101********3222\\",\\n        \\"wordInfo\\": [\\n          {\\n            \\"prob\\": 0.9899999999999998,\\n            \\"location\\": [\\n              {\\n                \\"x\\": 206,\\n                \\"y\\": 301\\n              },\\n              {\\n                \\"x\\": 518,\\n                \\"y\\": 301\\n              },\\n              {\\n                \\"x\\": 518,\\n                \\"y\\": 320\\n              },\\n              {\\n                \\"x\\": 206,\\n                \\"y\\": 320\\n              }\\n            ],\\n            \\"word\\": \\"310101198610203222\\",\\n            \\"charInfo\\": [\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 206,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 223,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 223,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 206,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"3\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 223,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 238,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 238,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 223,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"1\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 240,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 255,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 255,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 240,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"0\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 259,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 274,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 274,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 259,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"1\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 276,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 291,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 291,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 276,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"0\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 292,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 307,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 307,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 292,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"1\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 311,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 326,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 326,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 311,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"1\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 328,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 343,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 343,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 328,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"9\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 344,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 359,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 359,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 344,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"8\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 361,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 376,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 376,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 361,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"6\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 380,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 395,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 395,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 380,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"1\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 396,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 411,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 411,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 396,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"0\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 415,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 430,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 430,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 415,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"2\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 432,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 447,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 447,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 432,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"0\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 448,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 463,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 463,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 448,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"3\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 467,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 482,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 482,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 467,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"2\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 484,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 499,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 499,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 484,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"2\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 501,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 516,\\n                    \\"y\\": 302\\n                  },\\n                  {\\n                    \\"x\\": 516,\\n                    \\"y\\": 319\\n                  },\\n                  {\\n                    \\"x\\": 501,\\n                    \\"y\\": 319\\n                  }\\n                ],\\n                \\"word\\": \\"2\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"location\\": [\\n          {\\n            \\"x\\": 206,\\n            \\"y\\": 301\\n          },\\n          {\\n            \\"x\\": 518,\\n            \\"y\\": 301\\n          },\\n          {\\n            \\"x\\": 518,\\n            \\"y\\": 320\\n          },\\n          {\\n            \\"x\\": 206,\\n            \\"y\\": 320\\n          }\\n        ],\\n        \\"fieldWord\\": \\"310101198610203222\\"\\n      },\\n      {\\n        \\"prob\\": 1,\\n        \\"fieldName\\": \\"名族\\",\\n        \\"fieldWordRaw\\": \\"汉\\",\\n        \\"wordInfo\\": [\\n          {\\n            \\"prob\\": 0.99,\\n            \\"location\\": [\\n              {\\n                \\"x\\": 232,\\n                \\"y\\": 94\\n              },\\n              {\\n                \\"x\\": 259,\\n                \\"y\\": 94\\n              },\\n              {\\n                \\"x\\": 259,\\n                \\"y\\": 112\\n              },\\n              {\\n                \\"x\\": 232,\\n                \\"y\\": 112\\n              }\\n            ],\\n            \\"word\\": \\"汉\\",\\n            \\"charInfo\\": [\\n              {\\n                \\"prob\\": 0.99,\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 232,\\n                    \\"y\\": 94\\n                  },\\n                  {\\n                    \\"x\\": 259,\\n                    \\"y\\": 94\\n                  },\\n                  {\\n                    \\"x\\": 259,\\n                    \\"y\\": 112\\n                  },\\n                  {\\n                    \\"x\\": 232,\\n                    \\"y\\": 112\\n                  }\\n                ],\\n                \\"word\\": \\"汉\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"location\\": [\\n          {\\n            \\"x\\": 232,\\n            \\"y\\": 94\\n          },\\n          {\\n            \\"x\\": 259,\\n            \\"y\\": 94\\n          },\\n          {\\n            \\"x\\": 259,\\n            \\"y\\": 112\\n          },\\n          {\\n            \\"x\\": 232,\\n            \\"y\\": 112\\n          }\\n        ],\\n        \\"fieldWord\\": \\"汉\\"\\n      }\\n    ],\\n    \\"specificType\\": \\"infoCustomeKvTemp\\",\\n    \\"width\\": 586,\\n    \\"angle\\": 0,\\n    \\"classType\\": \\"template\\",\\n    \\"height\\": 374,\\n    \\"predictFile\\": \\"https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/demo.png\\"\\n  },\\n  \\"Message\\": \\"successful\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '模板服务预测API',
      'requestParamsDescription' => 'content字段和body字段传参二选一，图片URL则content为图片访问地址。内容为base64编码则传参body，且BinaryToText传true。

pdf 限制20Mb 10页
除长文档类型的模型预测以外，其他预测服务只会取第一页进行预测。',
      'responseParamsDescription' => '```
模板服务预测接口，返回Data字段解释说明：
score         预测服务置信度 0-1 
data.         算法返回的预测结果，数组格式
prob          算法结果置信度 0-1 
fieldName     抽取key
fieldWord     抽取value
location      抽取结果坐标位置  { "x": 119,"y": 48  }表示页面坐标点
wordInfo      抽取内容详细信息，包括了每个字符的位置信息
specificType  算法类型（infoCustomeKvTemp:自定义KV 模板，infoCustomeTableTemp:自定义表格模板，ocr_infoExtractBill:信息抽取OCR识别，infoExtractBill:单据票证抽取，infoExtractDoc:长文档信息抽取 ）
classType     模型预测服务、模板预测服务
predictFile   预测文件地址（失效时间60分钟）
```',
    ),
    'PredictModel' => 
    array (
      'summary' => '模型预测分为三种类型：长文档信息抽取、单票据信息抽取、表格信息抽取。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片或pdf文件访问URL地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/extractBill.png',
          ),
        ),
        1 => 
        array (
          'name' => 'ModelVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型对应的版本号，如果不传入版本号表示默认用模型最新生效的版本。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型ID。模型列表页模型ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '1',
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'BinaryToText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'content字段是图片URL时：false
body为base64的内容时：true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false：表示content传入的是url
true：表示body是直接传入图片进行base64的内容',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片base64编码内容',
            'type' => 'string',
            'required' => false,
            'example' => 'data:image/png;base64,xxxxx
',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '3EAC98E6-8DD6-511F-8764-DEE8B6EB6BB4',
              ),
              'Code' => 
              array (
                'description' => '请求结果状态，200为成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '接口返回信息',
                'type' => 'object',
                'example' => '{
      "RequestId": "0C066DD3-F55D-18F7-8577-DE533E04054D",
      "Message": "",
      "Data": {
            "code": 200,
            "data": {
                  "姓名": "xxx",
                  "证号": "xxx",
                  "性别": "女"
            },
            "specificType": "ocr_infoExtractBill",
            "originalFileUrl": "https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/extractBill.png",
            "message": "",
            "type": "卡证",
            "version": "1.0.9",
            "predictFile": "",
            "tim_img": "17",
            "score": 1.05,
            "wid": "1544",
            "hgt": "1054",
            "imageUrl": "",
            "angle": "0",
            "orig_hgt": "1054",
            "orig_wid": "1544",
            "tim_ocr": "97",
            "classType": "model",
            "info": [
                  {
                        "value_loc": "595,314,595,399,398,399,398,314",
                        "key_prob": 1,
                        "key_loc": "",
                        "value_prob": 1,
                        "value": "XXX",
                        "key": "姓名"
                  },
                  {
                        "value_loc": "1256,234,1256,312,678,312,678,233",
                        "key_prob": 1,
                        "key_loc": "",
                        "value_prob": 1,
                        "value": "440305198305101408",
                        "key": "证号"
                  },
                  {
                        "value_loc": "965,321,965,394,851,394,851,321",
                        "key_prob": 1,
                        "key_loc": "",
                        "value_prob": 1,
                        "value": "女",
                        "key": "性别"
                  }
            ]
      },
      "Code": 200
}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '21002',
            'errorMessage' => '模板预测超时	',
          ),
          1 => 
          array (
            'errorCode' => '21003',
            'errorMessage' => '模板预测失败	',
          ),
          2 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => '参数出错',
          ),
          3 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => '服务不存在',
          ),
          4 => 
          array (
            'errorCode' => '16001',
            'errorMessage' => '未找到可预测的模型',
          ),
          5 => 
          array (
            'errorCode' => '13018',
            'errorMessage' => '未找到模型信息',
          ),
          6 => 
          array (
            'errorCode' => '16004',
            'errorMessage' => '指定的模型不存在',
          ),
          7 => 
          array (
            'errorCode' => '23002',
            'errorMessage' => '获取资源HTTP异常',
          ),
          8 => 
          array (
            'errorCode' => '11002',
            'errorMessage' => '账号没有开通服务',
          ),
          9 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => '未知异常',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3EAC98E6-8DD6-511F-8764-DEE8B6EB6BB4\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"RequestId\\": \\"0C066DD3-F55D-18F7-8577-DE533E04054D\\",\\n    \\"Message\\": \\"\\",\\n    \\"Data\\": {\\n      \\"code\\": 200,\\n      \\"data\\": {\\n        \\"姓名\\": \\"xxx\\",\\n        \\"证号\\": \\"xxx\\",\\n        \\"性别\\": \\"女\\"\\n      },\\n      \\"specificType\\": \\"ocr_infoExtractBill\\",\\n      \\"originalFileUrl\\": \\"https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/extractBill.png\\",\\n      \\"message\\": \\"\\",\\n      \\"type\\": \\"卡证\\",\\n      \\"version\\": \\"1.0.9\\",\\n      \\"predictFile\\": \\"\\",\\n      \\"tim_img\\": \\"17\\",\\n      \\"score\\": 1.05,\\n      \\"wid\\": \\"1544\\",\\n      \\"hgt\\": \\"1054\\",\\n      \\"imageUrl\\": \\"\\",\\n      \\"angle\\": \\"0\\",\\n      \\"orig_hgt\\": \\"1054\\",\\n      \\"orig_wid\\": \\"1544\\",\\n      \\"tim_ocr\\": \\"97\\",\\n      \\"classType\\": \\"model\\",\\n      \\"info\\": [\\n        {\\n          \\"value_loc\\": \\"595,314,595,399,398,399,398,314\\",\\n          \\"key_prob\\": 1,\\n          \\"key_loc\\": \\"\\",\\n          \\"value_prob\\": 1,\\n          \\"value\\": \\"XXX\\",\\n          \\"key\\": \\"姓名\\"\\n        },\\n        {\\n          \\"value_loc\\": \\"1256,234,1256,312,678,312,678,233\\",\\n          \\"key_prob\\": 1,\\n          \\"key_loc\\": \\"\\",\\n          \\"value_prob\\": 1,\\n          \\"value\\": \\"440305198305101408\\",\\n          \\"key\\": \\"证号\\"\\n        },\\n        {\\n          \\"value_loc\\": \\"965,321,965,394,851,394,851,321\\",\\n          \\"key_prob\\": 1,\\n          \\"key_loc\\": \\"\\",\\n          \\"value_prob\\": 1,\\n          \\"value\\": \\"女\\",\\n          \\"key\\": \\"性别\\"\\n        }\\n      ]\\n    },\\n    \\"Code\\": 200\\n  }\\n}","type":"json"}]',
      'title' => '模型服务预测API',
      'requestParamsDescription' => 'BinaryToText为非必填项。

content字段和body字段传参二选一，图片URL则content为图片访问地址。内容为base64编码则传参body，且BinaryToText传true。

pdf 限制20Mb 10页
除了长文档类型的模型预测以外，其他预测服务只会取第一页进行预测。',
      'responseParamsDescription' => '长文档信息抽取模型data返回字段解释说明：
```json
originalFileUrl     原始文件url
predictFile         解析后用于预测的图片url集合
data                具体预测结果
angle               图片的角度，当NeedRotate为true时才会返回，0表示正向，90表示图片朝右，180朝下，270朝左
content             识别出图片的文字块汇总
height              算法矫正图片后的高度
width               算法矫正图片后的宽度
orgHeight           原图的高度
orgWidth            原图的宽度
prism_wnum          识别的文字块的数量，prism_wordsInfo数组的大小
```
prism-wordsInfo文字块数组内的字段说明
```json
angle                文字块的角度，这个角度只影响width和height，当角度为-90、90、-270、270，width和height的值需要自行互换
height               文字块的高度
width                文字块的宽度
pos                  文字块的外矩形四个点的坐标按顺时针排列，左上、右上、右下、左下，当NeedRotate为true时，如果最外层的angle不为0，需要按照angle矫正图片后，坐标才准确
word                 文字块的文字
tableId              当OutputTable为true并且该文字块在表格内则存在该字段，tableId表示表格的id
tableCellId          当OutputTable为true并且该文字块在表格内则存在该字段，表示表格中单元格的id
```
charInfo单字信息
```json
word                  单字文字
x                     单字左上角横坐标
y                     单字左上角纵坐标
w                     单字宽度
h                     单字高度
```
prism-tablesInfo表格数组内的字段说明
```json
tableId            表格id，和prism_wordsInfo信息中的tableId对应
xCellSize          表格中横坐标单元格的数量
yCellSize          表格中纵坐标单元格的数量
```
cellInfos单元格信息，包含单元格在整个表格中的空间拓扑关系
```json
tableCellId        表格中单元格id，和prism_wordsInfo信息中的tableCellId对应
word               单元格中的文字
xsc                xStartCell缩写，表示横轴方向该单元格起始在第几个单元格，第一个单元格值为0
xec                xEndCell缩写，表示横轴方向该单元格结束在第几个单元格，第一个单元格值为0，如果xsc和xec都为0说明该文字在横轴方向占据了一个单元格并且在第一个单元格内
ysc                yStartCell缩写，表示纵轴方向该单元格起始在第几个单元格，第一个单元格值为0
yec                yEndCell缩写，表示纵轴方向该单元格结束在第几个单元格，第一个单元格值为0
pos                单元格位置，按照单元格四个角的坐标顺时针排列，分别为左上XY坐标、右上XY坐标、右下XY坐标、左下XY坐标
```',
    ),
    'PredictClassifierModel' => 
    array (
      'summary' => '文档自学习分类器预测接口。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClassifierId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分类器ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '99999999999999',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'AutoPrediction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动预测，false：不开启， true：开启，默认开启',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片或pdf文件可访问地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/table.png',
          ),
        ),
        3 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片base64编码内容',
            'type' => 'string',
            'required' => false,
            'example' => 'data:image/png;base64,xxxxx
',
          ),
        ),
        4 => 
        array (
          'name' => 'BinaryToText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'content字段是图片URL时：false <br>body为base64的内容时：true',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '232B91A8-9938-5C10-B522-127D1E342A57',
              ),
              'Code' => 
              array (
                'description' => '成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'example' => '{
      "score": 1,
      "classID": "269_2b6819527769749d962bf51d034b1820",
      "tables": [
            {
                  "columns": [
                        {
                              "header_value": "姓名",
                              "bodies": [
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生1",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 99
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 99
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 123
                                                }
                                          ],
                                          "value": "学生1"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生2",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 146
                                                }
                                          ],
                                          "value": "学生2"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生3",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 169
                                                }
                                          ],
                                          "value": "学生3"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生4",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 191
                                                }
                                          ],
                                          "value": "学生4"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生5",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 215
                                                }
                                          ],
                                          "value": "学生5"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生6",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 238
                                                }
                                          ],
                                          "value": "学生6"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生7",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 261
                                                }
                                          ],
                                          "value": "学生7"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生8",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 283
                                                }
                                          ],
                                          "value": "学生8"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生9",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 307
                                                }
                                          ],
                                          "value": "学生9"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "学生10",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 330
                                                }
                                          ],
                                          "value": "学生10"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 352
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 375
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 399
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 399
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 399
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 399
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 422
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 444
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 467
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 491
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 514
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 536
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 76,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 559
                                                },
                                                {
                                                      "x": 76,
                                                      "y": 559
                                                }
                                          ],
                                          "value": ""
                                    }
                              ],
                              "header_box": [
                                    {
                                          "x": 96,
                                          "y": 79
                                    },
                                    {
                                          "x": 162,
                                          "y": 79
                                    },
                                    {
                                          "x": 162,
                                          "y": 98
                                    },
                                    {
                                          "x": 96,
                                          "y": 98
                                    }
                              ],
                              "col_name": "name"
                        },
                        {
                              "header_value": "性别",
                              "bodies": [
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "男",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 100
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 100
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 123
                                                }
                                          ],
                                          "value": "男"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "男",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 146
                                                }
                                          ],
                                          "value": "男"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "男",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 169
                                                }
                                          ],
                                          "value": "男"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "男",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 191
                                                }
                                          ],
                                          "value": "男"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "男",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 215
                                                }
                                          ],
                                          "value": "男"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "男",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 238
                                                }
                                          ],
                                          "value": "男"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "女",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 261
                                                }
                                          ],
                                          "value": "女"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "女",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 283
                                                }
                                          ],
                                          "value": "女"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "女",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 307
                                                }
                                          ],
                                          "value": "女"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "女",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 330
                                                }
                                          ],
                                          "value": "女"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 352
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 375
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 399
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 399
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 399
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 399
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 422
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 444
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 467
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 491
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 514
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 536
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 187,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 296,
                                                      "y": 559
                                                },
                                                {
                                                      "x": 187,
                                                      "y": 559
                                                }
                                          ],
                                          "value": ""
                                    }
                              ],
                              "header_box": [
                                    {
                                          "x": 210,
                                          "y": 78
                                    },
                                    {
                                          "x": 267,
                                          "y": 78
                                    },
                                    {
                                          "x": 267,
                                          "y": 100
                                    },
                                    {
                                          "x": 210,
                                          "y": 100
                                    }
                              ],
                              "col_name": "sex"
                        },
                        {
                              "header_value": "档案号",
                              "bodies": [
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D001",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 100
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 100
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 123
                                                }
                                          ],
                                          "value": "D001"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D002",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 123
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 146
                                                }
                                          ],
                                          "value": "D002"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D003",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 146
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 169
                                                }
                                          ],
                                          "value": "D003"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D004",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 169
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 191
                                                }
                                          ],
                                          "value": "D004"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D005",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 191
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 215
                                                }
                                          ],
                                          "value": "D005"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D006",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 215
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 238
                                                }
                                          ],
                                          "value": "D006"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D007",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 238
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 261
                                                }
                                          ],
                                          "value": "D007"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D008",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 261
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 283
                                                }
                                          ],
                                          "value": "D008"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D009",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 283
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 307
                                                }
                                          ],
                                          "value": "D009"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "D010",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 307
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 330
                                                }
                                          ],
                                          "value": "D010"
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 330
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 352
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 352
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 375
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 375
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 398
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 398
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 398
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 398
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 422
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 422
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 444
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 444
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 467
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 467
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 491
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 491
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 514
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 514
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 536
                                                }
                                          ],
                                          "value": ""
                                    },
                                    {
                                          "prob": 0,
                                          "fieldWordRaw": "",
                                          "wordInfo": [],
                                          "location": [
                                                {
                                                      "x": 406,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 536
                                                },
                                                {
                                                      "x": 520,
                                                      "y": 559
                                                },
                                                {
                                                      "x": 406,
                                                      "y": 559
                                                }
                                          ],
                                          "value": ""
                                    }
                              ],
                              "header_box": [
                                    {
                                          "x": 430,
                                          "y": 78
                                    },
                                    {
                                          "x": 493,
                                          "y": 78
                                    },
                                    {
                                          "x": 493,
                                          "y": 99
                                    },
                                    {
                                          "x": 430,
                                          "y": 99
                                    }
                              ],
                              "col_name": "ID"
                        }
                  ],
                  "table_id": 1675670984484
            }
      ],
      "code": 0,
      "data": [
            {
                  "prob": 0.99,
                  "fieldWordRaw": "班级：初二3班",
                  "wordInfo": [
                        {
                              "prob": 0.99,
                              "pos": [
                                    {
                                          "x": 2,
                                          "y": 34
                                    },
                                    {
                                          "x": 124,
                                          "y": 34
                                    },
                                    {
                                          "x": 124,
                                          "y": 51
                                    },
                                    {
                                          "x": 2,
                                          "y": 51
                                    }
                              ],
                              "word": "班级：初二3班",
                              "charInfo": [
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 2,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 18,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 18,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 2,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "班"
                                    },
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 18,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 32,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 32,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 18,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "级"
                                    },
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 34,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 50,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 50,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 34,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "："
                                    },
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 52,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 71,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 71,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 52,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "初"
                                    },
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 72,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 88,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 88,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 72,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "二"
                                    },
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 90,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 100,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 100,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 90,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "3"
                                    },
                                    {
                                          "prob": 0.99,
                                          "pos": [
                                                {
                                                      "x": 103,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 124,
                                                      "y": 34
                                                },
                                                {
                                                      "x": 124,
                                                      "y": 48
                                                },
                                                {
                                                      "x": 103,
                                                      "y": 48
                                                }
                                          ],
                                          "word": "班"
                                    }
                              ]
                        }
                  ],
                  "name": "班级",
                  "location": [
                        {
                              "x": 1,
                              "y": 30
                        },
                        {
                              "x": 1102,
                              "y": 30
                        },
                        {
                              "x": 1102,
                              "y": 54
                        },
                        {
                              "x": 1,
                              "y": 54
                        }
                  ],
                  "fieldWord": "班级：初二3班"
            }
      ],
      "specificType": "infoCustomeTableTemp",
      "className": "自定义表格模板测试cz02064-学生名",
      "originalFileUrl": "https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230208/oss-uwGPIS8AsKcGRHfMRjvIrQVqN0uAxTgk.png?Expires=1675843535&OSSAccessKeyId=xxx&Signature=uPhg6JpDn47TgLt%2FI%2F7j4f%2FsFeA%3D",
      "templateID": "269_2b6819527769749d962bf51d034b1820",
      "message": "",
      "classType": "template",
      "predictFile": "https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230208/oss-uwGPIS8AsKcGRHfMRjvIrQVqN0uAxTgk.png?Expires=1675843535&OSSAccessKeyId=xxx&Signature=uPhg6JpDn47TgLt%2FI%2F7j4f%2FsFeA%3D"
}',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '21002',
            'errorMessage' => '模板预测超时',
          ),
          1 => 
          array (
            'errorCode' => '21003',
            'errorMessage' => '模板预测失败',
          ),
          2 => 
          array (
            'errorCode' => '21004',
            'errorMessage' => '模板提交失败',
          ),
          3 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => '参数出错',
          ),
          4 => 
          array (
            'errorCode' => '10002',
            'errorMessage' => '没有权限',
          ),
          5 => 
          array (
            'errorCode' => '10003',
            'errorMessage' => '非法状态',
          ),
          6 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => '服务不存在',
          ),
          7 => 
          array (
            'errorCode' => '21018',
            'errorMessage' => '未找到模板信息',
          ),
          8 => 
          array (
            'errorCode' => '16001',
            'errorMessage' => '未找到可预测的模型',
          ),
          9 => 
          array (
            'errorCode' => '16004',
            'errorMessage' => '指定的模型不存在',
          ),
          10 => 
          array (
            'errorCode' => '23002',
            'errorMessage' => '获取资源HTTP异常',
          ),
          11 => 
          array (
            'errorCode' => '22002',
            'errorMessage' => 'ocr服务异常',
          ),
          12 => 
          array (
            'errorCode' => '11002',
            'errorMessage' => '账号没有开通服务',
          ),
          13 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => '未知异常',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"232B91A8-9938-5C10-B522-127D1E342A57\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"score\\": 1,\\n    \\"classID\\": \\"269_2b6819527769749d962bf51d034b1820\\",\\n    \\"tables\\": [\\n      {\\n        \\"columns\\": [\\n          {\\n            \\"header_value\\": \\"姓名\\",\\n            \\"bodies\\": [\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生1\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 99\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 99\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 123\\n                  }\\n                ],\\n                \\"value\\": \\"学生1\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生2\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 146\\n                  }\\n                ],\\n                \\"value\\": \\"学生2\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生3\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 169\\n                  }\\n                ],\\n                \\"value\\": \\"学生3\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生4\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 191\\n                  }\\n                ],\\n                \\"value\\": \\"学生4\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生5\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 215\\n                  }\\n                ],\\n                \\"value\\": \\"学生5\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生6\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 238\\n                  }\\n                ],\\n                \\"value\\": \\"学生6\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生7\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 261\\n                  }\\n                ],\\n                \\"value\\": \\"学生7\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生8\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 283\\n                  }\\n                ],\\n                \\"value\\": \\"学生8\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生9\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 307\\n                  }\\n                ],\\n                \\"value\\": \\"学生9\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"学生10\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 330\\n                  }\\n                ],\\n                \\"value\\": \\"学生10\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 352\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 375\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 399\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 399\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 399\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 399\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 422\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 444\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 467\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 491\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 514\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 536\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 559\\n                  },\\n                  {\\n                    \\"x\\": 76,\\n                    \\"y\\": 559\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              }\\n            ],\\n            \\"header_box\\": [\\n              {\\n                \\"x\\": 96,\\n                \\"y\\": 79\\n              },\\n              {\\n                \\"x\\": 162,\\n                \\"y\\": 79\\n              },\\n              {\\n                \\"x\\": 162,\\n                \\"y\\": 98\\n              },\\n              {\\n                \\"x\\": 96,\\n                \\"y\\": 98\\n              }\\n            ],\\n            \\"col_name\\": \\"name\\"\\n          },\\n          {\\n            \\"header_value\\": \\"性别\\",\\n            \\"bodies\\": [\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"男\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 100\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 100\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 123\\n                  }\\n                ],\\n                \\"value\\": \\"男\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"男\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 146\\n                  }\\n                ],\\n                \\"value\\": \\"男\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"男\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 169\\n                  }\\n                ],\\n                \\"value\\": \\"男\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"男\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 191\\n                  }\\n                ],\\n                \\"value\\": \\"男\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"男\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 215\\n                  }\\n                ],\\n                \\"value\\": \\"男\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"男\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 238\\n                  }\\n                ],\\n                \\"value\\": \\"男\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"女\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 261\\n                  }\\n                ],\\n                \\"value\\": \\"女\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"女\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 283\\n                  }\\n                ],\\n                \\"value\\": \\"女\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"女\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 307\\n                  }\\n                ],\\n                \\"value\\": \\"女\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"女\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 330\\n                  }\\n                ],\\n                \\"value\\": \\"女\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 352\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 375\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 399\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 399\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 399\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 399\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 422\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 444\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 467\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 491\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 514\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 536\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 296,\\n                    \\"y\\": 559\\n                  },\\n                  {\\n                    \\"x\\": 187,\\n                    \\"y\\": 559\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              }\\n            ],\\n            \\"header_box\\": [\\n              {\\n                \\"x\\": 210,\\n                \\"y\\": 78\\n              },\\n              {\\n                \\"x\\": 267,\\n                \\"y\\": 78\\n              },\\n              {\\n                \\"x\\": 267,\\n                \\"y\\": 100\\n              },\\n              {\\n                \\"x\\": 210,\\n                \\"y\\": 100\\n              }\\n            ],\\n            \\"col_name\\": \\"sex\\"\\n          },\\n          {\\n            \\"header_value\\": \\"档案号\\",\\n            \\"bodies\\": [\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D001\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 100\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 100\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 123\\n                  }\\n                ],\\n                \\"value\\": \\"D001\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D002\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 123\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 146\\n                  }\\n                ],\\n                \\"value\\": \\"D002\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D003\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 146\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 169\\n                  }\\n                ],\\n                \\"value\\": \\"D003\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D004\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 169\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 191\\n                  }\\n                ],\\n                \\"value\\": \\"D004\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D005\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 191\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 215\\n                  }\\n                ],\\n                \\"value\\": \\"D005\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D006\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 215\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 238\\n                  }\\n                ],\\n                \\"value\\": \\"D006\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D007\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 238\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 261\\n                  }\\n                ],\\n                \\"value\\": \\"D007\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D008\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 261\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 283\\n                  }\\n                ],\\n                \\"value\\": \\"D008\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D009\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 283\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 307\\n                  }\\n                ],\\n                \\"value\\": \\"D009\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"D010\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 307\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 330\\n                  }\\n                ],\\n                \\"value\\": \\"D010\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 330\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 352\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 352\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 375\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 375\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 398\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 398\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 398\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 398\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 422\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 422\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 444\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 444\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 467\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 467\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 491\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 491\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 514\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 514\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 536\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              },\\n              {\\n                \\"prob\\": 0,\\n                \\"fieldWordRaw\\": \\"\\",\\n                \\"wordInfo\\": [],\\n                \\"location\\": [\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 536\\n                  },\\n                  {\\n                    \\"x\\": 520,\\n                    \\"y\\": 559\\n                  },\\n                  {\\n                    \\"x\\": 406,\\n                    \\"y\\": 559\\n                  }\\n                ],\\n                \\"value\\": \\"\\"\\n              }\\n            ],\\n            \\"header_box\\": [\\n              {\\n                \\"x\\": 430,\\n                \\"y\\": 78\\n              },\\n              {\\n                \\"x\\": 493,\\n                \\"y\\": 78\\n              },\\n              {\\n                \\"x\\": 493,\\n                \\"y\\": 99\\n              },\\n              {\\n                \\"x\\": 430,\\n                \\"y\\": 99\\n              }\\n            ],\\n            \\"col_name\\": \\"ID\\"\\n          }\\n        ],\\n        \\"table_id\\": 1675670984484\\n      }\\n    ],\\n    \\"code\\": 0,\\n    \\"data\\": [\\n      {\\n        \\"prob\\": 0.99,\\n        \\"fieldWordRaw\\": \\"班级：初二3班\\",\\n        \\"wordInfo\\": [\\n          {\\n            \\"prob\\": 0.99,\\n            \\"pos\\": [\\n              {\\n                \\"x\\": 2,\\n                \\"y\\": 34\\n              },\\n              {\\n                \\"x\\": 124,\\n                \\"y\\": 34\\n              },\\n              {\\n                \\"x\\": 124,\\n                \\"y\\": 51\\n              },\\n              {\\n                \\"x\\": 2,\\n                \\"y\\": 51\\n              }\\n            ],\\n            \\"word\\": \\"班级：初二3班\\",\\n            \\"charInfo\\": [\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 2,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 18,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 18,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 2,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"班\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 18,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 32,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 32,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 18,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"级\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 34,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 50,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 50,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 34,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"：\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 52,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 71,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 71,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 52,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"初\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 72,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 88,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 88,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 72,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"二\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 90,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 100,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 100,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 90,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"3\\"\\n              },\\n              {\\n                \\"prob\\": 0.99,\\n                \\"pos\\": [\\n                  {\\n                    \\"x\\": 103,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 124,\\n                    \\"y\\": 34\\n                  },\\n                  {\\n                    \\"x\\": 124,\\n                    \\"y\\": 48\\n                  },\\n                  {\\n                    \\"x\\": 103,\\n                    \\"y\\": 48\\n                  }\\n                ],\\n                \\"word\\": \\"班\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"name\\": \\"班级\\",\\n        \\"location\\": [\\n          {\\n            \\"x\\": 1,\\n            \\"y\\": 30\\n          },\\n          {\\n            \\"x\\": 1102,\\n            \\"y\\": 30\\n          },\\n          {\\n            \\"x\\": 1102,\\n            \\"y\\": 54\\n          },\\n          {\\n            \\"x\\": 1,\\n            \\"y\\": 54\\n          }\\n        ],\\n        \\"fieldWord\\": \\"班级：初二3班\\"\\n      }\\n    ],\\n    \\"specificType\\": \\"infoCustomeTableTemp\\",\\n    \\"className\\": \\"自定义表格模板测试cz02064-学生名\\",\\n    \\"originalFileUrl\\": \\"https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230208/oss-uwGPIS8AsKcGRHfMRjvIrQVqN0uAxTgk.png?Expires=1675843535&OSSAccessKeyId=xxx&Signature=uPhg6JpDn47TgLt%2FI%2F7j4f%2FsFeA%3D\\",\\n    \\"templateID\\": \\"269_2b6819527769749d962bf51d034b1820\\",\\n    \\"message\\": \\"\\",\\n    \\"classType\\": \\"template\\",\\n    \\"predictFile\\": \\"https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230208/oss-uwGPIS8AsKcGRHfMRjvIrQVqN0uAxTgk.png?Expires=1675843535&OSSAccessKeyId=xxx&Signature=uPhg6JpDn47TgLt%2FI%2F7j4f%2FsFeA%3D\\"\\n  },\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '分类器服务预测API',
      'requestParamsDescription' => 'content字段和body字段传参二选一，图片URL则content为图片访问地址。内容为base64编码则传参body，且BinaryToText传true。

pdf限制20Mb，10页。
除了长文档类型的模型预测以外，其他预测服务只会取第一页进行预测。',
      'responseParamsDescription' => '分类器服务预测接口，返回Data字段解释说明：
```json
score         预测服务置信度 0-1
data          算法返回的预测结果，数组格式 
tables        表格区域预测结果
prob          算法结果置信度 0-1 
fieldName     抽取key 
fieldWord     抽取value 
location      抽取结果坐标位置 { "x": 119,"y": 48 }表示页面坐标点 
wordInfo      抽取内容详细信息，包括了每个字符的位置信息 
specificType  算法类型（infoCustomeKvTemp:自定义KV 模板，infoCustomeTableTemp:自定义表格模板，ocr_infoExtractBill:信息抽取OCR识别，infoExtractBill:单据票证抽取，infoExtractDoc:长文档信息抽取 ）
classType     模型预测服务、模板预测服务 
predictFile   预测文件地址（失效时间60分钟）
```',
    ),
    'CreateModelAsyncPredict' => 
    array (
      'summary' => '文档自学习创建异步预测任务接口。',
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
          'name' => 'ModelVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型对应的版本号，如果不传入版本号表示默认用模型最新生效的版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'V1',
          ),
        ),
        1 => 
        array (
          'name' => 'BinaryToText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'content字段是图片URL时：false
body为base64的内容时：true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false：表示content传入的是url
true：表示body是直接传入图片进行base64的内容
',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片或pdf文件访问URL地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/1559855998794593/stage/upload/20230206/oss-hlfCRJ1SorSWs10MkqxK6YcL4OVAFSv4.png?Expires=1675665563&OSSAccessKeyId=XXXX&Signature=WLKghBc3zKzWJ3Td69%2B4C21jrbE%3D',
          ),
        ),
        3 => 
        array (
          'name' => 'ModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型ID。模型列表页模型ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9999999999999',
            'minimum' => '1',
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预训练服务名称',
            'type' => 'string',
            'required' => false,
            'example' => 'pre_train_service',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预训练服务版本',
            'type' => 'string',
            'required' => false,
            'example' => 'V1',
          ),
        ),
        6 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片base64编码内容',
            'type' => 'string',
            'required' => false,
            'example' => 'data:image/png;base64,xxxxx',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '3EAC98E6-8DD6-511F-8764-DEE8B6EB6BB4',
              ),
              'Code' => 
              array (
                'description' => '请求结果状态，200为成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'string',
                'example' => '{
  "RequestId": "292D1584-134C-1221-B9BB-1B847C623D41",
  "Message": "",
  "Data": 1,
  "Code": 200
}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '21002',
            'errorMessage' => '模板预测超时	',
          ),
          1 => 
          array (
            'errorCode' => '21003',
            'errorMessage' => '模板预测失败',
          ),
          2 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => '参数出错',
          ),
          3 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => '服务不存在',
          ),
          4 => 
          array (
            'errorCode' => '16001',
            'errorMessage' => '未找到可预测的模型',
          ),
          5 => 
          array (
            'errorCode' => '13018',
            'errorMessage' => '未找到模型信息',
          ),
          6 => 
          array (
            'errorCode' => '16004',
            'errorMessage' => '指定的模型不存在',
          ),
          7 => 
          array (
            'errorCode' => '23002',
            'errorMessage' => '获取资源HTTP异常',
          ),
          8 => 
          array (
            'errorCode' => '11002',
            'errorMessage' => '账号没有开通服务',
          ),
          9 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => '未知异常',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3EAC98E6-8DD6-511F-8764-DEE8B6EB6BB4\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"{\\\\n  \\\\\\"RequestId\\\\\\": \\\\\\"292D1584-134C-1221-B9BB-1B847C623D41\\\\\\",\\\\n  \\\\\\"Message\\\\\\": \\\\\\"\\\\\\",\\\\n  \\\\\\"Data\\\\\\": 1,\\\\n  \\\\\\"Code\\\\\\": 200\\\\n}\\"\\n}","type":"json"}]',
      'title' => '模型异步预测API',
      'requestParamsDescription' => 'BinaryToText为非必填项。

content字段和body字段传参二选一，图片URL则content为图片访问地址。内容为base64编码则传参body，且BinaryToText传true。

pdf 限制20Mb 10页
除了长文档类型的模型预测以外，其他预测服务只会取第一页进行预测。',
      'responseParamsDescription' => 'Data字段为创建的异步任务ID，通过GetModelAsyncPredict获取结果',
    ),
    'GetModelAsyncPredict' => 
    array (
      'summary' => '模型预测分为三种类型：长文档信息抽取、单票据信息抽取、表格信息抽取。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AsyncPredictId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步预测唯一ID，用于查询异步预测结果。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '99999999999999',
            'minimum' => '1',
            'example' => '1',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '3EAC98E6-8DD6-511F-8764-DEE8B6EB6BB4',
              ),
              'Code' => 
              array (
                'description' => '请求结果状态，200为成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'string',
                'example' => '{
  "RequestId": "A9796F06-F1C4-1E89-8AFD-596583FF4B16",
  "Message": "",
  "Data": {
    "result": "https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/stage/data/XXXX/asyncPredict/713908/oss-933bbdf4-fa10-4c56-b6ab-9c85f32bbd0e.json?Expires=1991115127&OSSAccessKeyId=XXXX&Signature=5zYLY9yR%2B9Ok1WuRgHYdqtXHK10%3D",
    "asyncPredictId": 713908,
    "errorCode": 200,
    "errorMsg": "",
    "status": 2
  },
  "Code": 200
}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '21002',
            'errorMessage' => '模板预测超时',
          ),
          1 => 
          array (
            'errorCode' => '21003',
            'errorMessage' => '模板预测失败',
          ),
          2 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => '参数出错',
          ),
          3 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => '服务不存在',
          ),
          4 => 
          array (
            'errorCode' => '16001',
            'errorMessage' => '未找到可预测的模型',
          ),
          5 => 
          array (
            'errorCode' => '13018',
            'errorMessage' => '未找到模型信息',
          ),
          6 => 
          array (
            'errorCode' => '16004',
            'errorMessage' => '指定的模型不存在',
          ),
          7 => 
          array (
            'errorCode' => '23002',
            'errorMessage' => '获取资源HTTP异常',
          ),
          8 => 
          array (
            'errorCode' => '11002',
            'errorMessage' => '账号没有开通服务',
          ),
          9 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => '未知异常',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3EAC98E6-8DD6-511F-8764-DEE8B6EB6BB4\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"{\\\\n  \\\\\\"RequestId\\\\\\": \\\\\\"A9796F06-F1C4-1E89-8AFD-596583FF4B16\\\\\\",\\\\n  \\\\\\"Message\\\\\\": \\\\\\"\\\\\\",\\\\n  \\\\\\"Data\\\\\\": {\\\\n    \\\\\\"result\\\\\\": \\\\\\"https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/stage/data/XXXX/asyncPredict/713908/oss-933bbdf4-fa10-4c56-b6ab-9c85f32bbd0e.json?Expires=1991115127&OSSAccessKeyId=XXXX&Signature=5zYLY9yR%2B9Ok1WuRgHYdqtXHK10%3D\\\\\\",\\\\n    \\\\\\"asyncPredictId\\\\\\": 713908,\\\\n    \\\\\\"errorCode\\\\\\": 200,\\\\n    \\\\\\"errorMsg\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"status\\\\\\": 2\\\\n  },\\\\n  \\\\\\"Code\\\\\\": 200\\\\n}\\"\\n}","type":"json"}]',
      'title' => '获取模型异步预测结果API',
      'responseParamsDescription' => 'status 表示任务状态，0：未开始，1：异步任务运行中、 2：异步任务完成 、 3：异步任务运行失败。

当status = 2 时，result为模型预测的结果URL。',
    ),
    'PredictPreTrainModel' => 
    array (
      'summary' => '预置能力现有：UIE抽取，适用于通用智能预标注。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测内容，格式为JSON字符串。
UIE抽取参数格式{"query":"xxx","schema":["字段1","字段2"]}, query对应图片URL，schema对应要抽取的字段数组',
            'type' => 'string',
            'required' => false,
            'example' => '{"query":"https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/demo/extractBill.png", "schema":["姓名", "住址"]}',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置能力服务版本，默认V1',
            'type' => 'string',
            'required' => false,
            'example' => 'V1',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置能力服务名称，必填
UIE抽取对应“FormUIE”',
            'type' => 'string',
            'required' => false,
            'example' => 'FormUIE',
          ),
        ),
        3 => 
        array (
          'name' => 'BinaryToText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'content字段内容为图片URL时：false，
body字段内容为图片base64时：true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片传递base64编码时的预测内容，格式为json字符串。
UIE抽取参数格式{"query":"xxx","schema":["字段1","字段2"]}, query对应图片base64编码，schema对应要抽取的字段数组',
            'type' => 'string',
            'required' => false,
            'example' => '{"query":"data:image/png;base64,xxxxx","schema":["姓名", "住址"]}',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '29413C69-11EF-15CB-BE20-70D318E2F4E9',
              ),
              'Code' => 
              array (
                'description' => '请求结果状态，200为成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '接口返回信息',
                'type' => 'object',
                'example' => '{
  "RequestId": "29413C69-11EF-15CB-BE20-70D318E2F4E9",
  "Message": "success",
  "Data": {
    "score": 1,
    "data": [
      {
        "prob": 0.9138551354408264,
        "fieldWordRaw": "xx",
        "wordInfo": [
          {
            "prob": 0.9138551354408264,
            "pos": [
              {
                "x": 468,
                "y": 139
              },
              {
                "x": 476,
                "y": 139
              },
              {
                "x": 476,
                "y": 153
              },
              {
                "x": 468,
                "y": 153
              }
            ],
            "word": "xx",
            "charInfo": [
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 468,
                    "y": 139
                  },
                  {
                    "x": 471,
                    "y": 139
                  },
                  {
                    "x": 471,
                    "y": 153
                  },
                  {
                    "x": 468,
                    "y": 153
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 473,
                    "y": 139
                  },
                  {
                    "x": 476,
                    "y": 139
                  },
                  {
                    "x": 476,
                    "y": 153
                  },
                  {
                    "x": 473,
                    "y": 153
                  }
                ],
                "word": "x"
              }
            ]
          }
        ],
        "name": "姓名",
        "location": [
          {
            "x": 468,
            "y": 139
          },
          {
            "x": 476,
            "y": 139
          },
          {
            "x": 476,
            "y": 153
          },
          {
            "x": 468,
            "y": 153
          }
        ],
        "fieldWord": "xx"
      },
      {
        "prob": 0.9594210982322693,
        "fieldWordRaw": "xxxxxxxxxxx",
        "wordInfo": [
          {
            "prob": 0.9594210982322693,
            "pos": [
              {
                "x": 168,
                "y": 164
              },
              {
                "x": 467,
                "y": 164
              },
              {
                "x": 467,
                "y": 239
              },
              {
                "x": 168,
                "y": 239
              }
            ],
            "word": "xxxxxxxxxxx",
            "charInfo": [
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 366,
                    "y": 164
                  },
                  {
                    "x": 383,
                    "y": 164
                  },
                  {
                    "x": 383,
                    "y": 179
                  },
                  {
                    "x": 366,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 384,
                    "y": 164
                  },
                  {
                    "x": 401,
                    "y": 164
                  },
                  {
                    "x": 401,
                    "y": 179
                  },
                  {
                    "x": 384,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 402,
                    "y": 164
                  },
                  {
                    "x": 414,
                    "y": 164
                  },
                  {
                    "x": 414,
                    "y": 179
                  },
                  {
                    "x": 402,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 418,
                    "y": 164
                  },
                  {
                    "x": 427,
                    "y": 164
                  },
                  {
                    "x": 427,
                    "y": 179
                  },
                  {
                    "x": 418,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 429,
                    "y": 164
                  },
                  {
                    "x": 438,
                    "y": 164
                  },
                  {
                    "x": 438,
                    "y": 179
                  },
                  {
                    "x": 429,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 439,
                    "y": 164
                  },
                  {
                    "x": 448,
                    "y": 164
                  },
                  {
                    "x": 448,
                    "y": 179
                  },
                  {
                    "x": 439,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 450,
                    "y": 164
                  },
                  {
                    "x": 467,
                    "y": 164
                  },
                  {
                    "x": 467,
                    "y": 179
                  },
                  {
                    "x": 450,
                    "y": 179
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 168,
                    "y": 224
                  },
                  {
                    "x": 180,
                    "y": 224
                  },
                  {
                    "x": 180,
                    "y": 239
                  },
                  {
                    "x": 168,
                    "y": 239
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 180,
                    "y": 224
                  },
                  {
                    "x": 192,
                    "y": 224
                  },
                  {
                    "x": 192,
                    "y": 239
                  },
                  {
                    "x": 180,
                    "y": 239
                  }
                ],
                "word": "x"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 195,
                    "y": 224
                  },
                  {
                    "x": 209,
                    "y": 224
                  },
                  {
                    "x": 209,
                    "y": 239
                  },
                  {
                    "x": 195,
                    "y": 239
                  }
                ],
                "word": "1"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 211,
                    "y": 224
                  },
                  {
                    "x": 223,
                    "y": 224
                  },
                  {
                    "x": 223,
                    "y": 239
                  },
                  {
                    "x": 211,
                    "y": 239
                  }
                ],
                "word": "7"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 224,
                    "y": 224
                  },
                  {
                    "x": 236,
                    "y": 224
                  },
                  {
                    "x": 236,
                    "y": 239
                  },
                  {
                    "x": 224,
                    "y": 239
                  }
                ],
                "word": "2"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 237,
                    "y": 224
                  },
                  {
                    "x": 249,
                    "y": 224
                  },
                  {
                    "x": 249,
                    "y": 239
                  },
                  {
                    "x": 237,
                    "y": 239
                  }
                ],
                "word": "7"
              },
              {
                "prob": 0.99,
                "pos": [
                  {
                    "x": 253,
                    "y": 224
                  },
                  {
                    "x": 270,
                    "y": 224
                  },
                  {
                    "x": 270,
                    "y": 239
                  },
                  {
                    "x": 253,
                    "y": 239
                  }
                ],
                "word": "x"
              }
            ]
          }
        ],
        "name": "住址",
        "location": [
          {
            "x": 168,
            "y": 164
          },
          {
            "x": 467,
            "y": 164
          },
          {
            "x": 467,
            "y": 239
          },
          {
            "x": 168,
            "y": 239
          }
        ],
        "fieldWord": "xxxxxxxx"
      }
    ],
    "specificType": "formuie-anti",
    "classType": "preDefinedServer",
    "predictFile": "https://xxxx"
  },
  "Code": 200
}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '21002',
            'errorMessage' => '模板预测超时',
          ),
          1 => 
          array (
            'errorCode' => '21003',
            'errorMessage' => '模版预测失败',
          ),
          2 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => '参数出错',
          ),
          3 => 
          array (
            'errorCode' => '16001',
            'errorMessage' => '未找到可预测的模型',
          ),
          4 => 
          array (
            'errorCode' => '13018',
            'errorMessage' => '未找到模型信息',
          ),
          5 => 
          array (
            'errorCode' => '16004',
            'errorMessage' => '指定模型不存在',
          ),
          6 => 
          array (
            'errorCode' => '23002',
            'errorMessage' => '获取资源HTTP异常',
          ),
          7 => 
          array (
            'errorCode' => '11002',
            'errorMessage' => '账号没有开通服务',
          ),
          8 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => '未知异常',
          ),
          9 => 
          array (
            'errorCode' => '50008',
            'errorMessage' => '文件过大',
          ),
          10 => 
          array (
            'errorCode' => '50007',
            'errorMessage' => '文件格式不支持',
          ),
          11 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => '服务不存在',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"29413C69-11EF-15CB-BE20-70D318E2F4E9\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"RequestId\\": \\"29413C69-11EF-15CB-BE20-70D318E2F4E9\\",\\n    \\"Message\\": \\"success\\",\\n    \\"Data\\": {\\n      \\"score\\": 1,\\n      \\"data\\": [\\n        {\\n          \\"prob\\": 0.9138551354408264,\\n          \\"fieldWordRaw\\": \\"xx\\",\\n          \\"wordInfo\\": [\\n            {\\n              \\"prob\\": 0.9138551354408264,\\n              \\"pos\\": [\\n                {\\n                  \\"x\\": 468,\\n                  \\"y\\": 139\\n                },\\n                {\\n                  \\"x\\": 476,\\n                  \\"y\\": 139\\n                },\\n                {\\n                  \\"x\\": 476,\\n                  \\"y\\": 153\\n                },\\n                {\\n                  \\"x\\": 468,\\n                  \\"y\\": 153\\n                }\\n              ],\\n              \\"word\\": \\"xx\\",\\n              \\"charInfo\\": [\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 468,\\n                      \\"y\\": 139\\n                    },\\n                    {\\n                      \\"x\\": 471,\\n                      \\"y\\": 139\\n                    },\\n                    {\\n                      \\"x\\": 471,\\n                      \\"y\\": 153\\n                    },\\n                    {\\n                      \\"x\\": 468,\\n                      \\"y\\": 153\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 473,\\n                      \\"y\\": 139\\n                    },\\n                    {\\n                      \\"x\\": 476,\\n                      \\"y\\": 139\\n                    },\\n                    {\\n                      \\"x\\": 476,\\n                      \\"y\\": 153\\n                    },\\n                    {\\n                      \\"x\\": 473,\\n                      \\"y\\": 153\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"name\\": \\"姓名\\",\\n          \\"location\\": [\\n            {\\n              \\"x\\": 468,\\n              \\"y\\": 139\\n            },\\n            {\\n              \\"x\\": 476,\\n              \\"y\\": 139\\n            },\\n            {\\n              \\"x\\": 476,\\n              \\"y\\": 153\\n            },\\n            {\\n              \\"x\\": 468,\\n              \\"y\\": 153\\n            }\\n          ],\\n          \\"fieldWord\\": \\"xx\\"\\n        },\\n        {\\n          \\"prob\\": 0.9594210982322693,\\n          \\"fieldWordRaw\\": \\"xxxxxxxxxxx\\",\\n          \\"wordInfo\\": [\\n            {\\n              \\"prob\\": 0.9594210982322693,\\n              \\"pos\\": [\\n                {\\n                  \\"x\\": 168,\\n                  \\"y\\": 164\\n                },\\n                {\\n                  \\"x\\": 467,\\n                  \\"y\\": 164\\n                },\\n                {\\n                  \\"x\\": 467,\\n                  \\"y\\": 239\\n                },\\n                {\\n                  \\"x\\": 168,\\n                  \\"y\\": 239\\n                }\\n              ],\\n              \\"word\\": \\"xxxxxxxxxxx\\",\\n              \\"charInfo\\": [\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 366,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 383,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 383,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 366,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 384,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 401,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 401,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 384,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 402,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 414,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 414,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 402,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 418,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 427,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 427,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 418,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 429,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 438,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 438,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 429,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 439,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 448,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 448,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 439,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 450,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 467,\\n                      \\"y\\": 164\\n                    },\\n                    {\\n                      \\"x\\": 467,\\n                      \\"y\\": 179\\n                    },\\n                    {\\n                      \\"x\\": 450,\\n                      \\"y\\": 179\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 168,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 180,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 180,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 168,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 180,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 192,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 192,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 180,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 195,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 209,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 209,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 195,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"1\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 211,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 223,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 223,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 211,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"7\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 224,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 236,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 236,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 224,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"2\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 237,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 249,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 249,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 237,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"7\\"\\n                },\\n                {\\n                  \\"prob\\": 0.99,\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 253,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 270,\\n                      \\"y\\": 224\\n                    },\\n                    {\\n                      \\"x\\": 270,\\n                      \\"y\\": 239\\n                    },\\n                    {\\n                      \\"x\\": 253,\\n                      \\"y\\": 239\\n                    }\\n                  ],\\n                  \\"word\\": \\"x\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"name\\": \\"住址\\",\\n          \\"location\\": [\\n            {\\n              \\"x\\": 168,\\n              \\"y\\": 164\\n            },\\n            {\\n              \\"x\\": 467,\\n              \\"y\\": 164\\n            },\\n            {\\n              \\"x\\": 467,\\n              \\"y\\": 239\\n            },\\n            {\\n              \\"x\\": 168,\\n              \\"y\\": 239\\n            }\\n          ],\\n          \\"fieldWord\\": \\"xxxxxxxx\\"\\n        }\\n      ],\\n      \\"specificType\\": \\"formuie-anti\\",\\n      \\"classType\\": \\"preDefinedServer\\",\\n      \\"predictFile\\": \\"https://xxxx\\"\\n    },\\n    \\"Code\\": 200\\n  }\\n}","type":"json"}]',
      'title' => '预置能力服务预测API',
      'requestParamsDescription' => 'BinaryToText为非必填项

content字段和body字段传参二选一，图片内容是URL，在传递content字段，内容是base64，传递body字段，且BinaryToText传true',
      'responseParamsDescription' => '模板服务预测接口，返回Data字段解释说明：<br>
score        预测服务置信度 0-1 <br>
data.         算法返回的预测结果，数组格式<br>
prob          算法结果置信度 0-1 <br>
name     抽取key<br>
fieldWord     抽取value<br>
location      抽取结果坐标位置  { "x": 119,"y": 48  }表示页面坐标点<br>
wordInfo      抽取内容详细信息，包括了每个字符的位置信息<br>
specificType  算法类型（formuie-anti:UIE抽取）<br>
classType     preDefinedServer: 预置能力<br>
predictFile   预测文件地址（失效时间60分钟）',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'documentautoml.cn-beijing.aliyuncs.com',
    ),
  ),
);
<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controllers',

    'modules' => [
        'rental' => [
            'basePath' => '@app/modules/rental',
            'class' => 'api\modules\rental\Module',   // here is our rental module
        ],
        'module1' => [
            'basePath' => '@app/modules/module1',
            'class' => 'api\modules\module1\Module',   // here is our rental module
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'request' => [
            'parsers' => [
              'application/json' => 'yii\web\JsonParser',
              'application/vnd.api+json' => 'yii\web\JsonParser',
            ],
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            //'enableStrictParsing' => false,
            //'showScriptName' => true,
            /*
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'rental/rental',   // our rental api rule,
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]
                ]
            ],
            */
            'rules' => [
                //'GET rentals' => 'parser/rental/rentals',
                //'GET admin_panel/ember_samples/rentals_yii/yii2-advanced-api/api/web/rentals' => 'parser/rental/rentals',
                //'defaultRoute' => 'rental/parser/rental',
                //'http://ember.loc/admin_panel/ember_samples/rentals_yii/yii2-advanced-api/api/web'  => '/parser/rental/rentals',
                //'http://ember.loc/admin_panel/ember_samples/rentals_yii/yii2-advanced-api/api/web/'  => '/parser/rental/rentals',
                'GET rentals' => '/module1/rental/rentals',
                
            ],
        ]
    ],
    //'defaultRoute' => '/parser/rental/rentals',
    'params' => $params,
];
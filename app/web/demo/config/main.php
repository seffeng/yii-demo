<?php
/**
 * 配置文件
 */

$config = [
    'id'    => APP_NAME,
    'name'  => 'yii demo',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'zxf\web\demo\controllers',
    'components'  => [
        'request' => [
            'cookieValidationKey' => 'abcdefghijklmnopqrstuvwxyz',
        ],
        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl'  => '@web/assets',
            'bundles'  => [
                'yii\web\JqueryAsset' => [
                    'js' => ['jquery.min.js'],
                    'jsOptions' => [
                        'position' => \yii\web\View::POS_HEAD,
                    ]
                ],
            ],
        ],
    ],
    'params' => include(__DIR__ . '/params.config.php'),
];

if (YII_DEBUG) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['*'],
    ];
}
return $config;
<?php
$params = array_merge(
    require(CORE_PATH . 'config/params.php'),
    require(__DIR__ . '/params.php')
);

return [
    'id' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'AYifDVgN08b4cLjDOXNS_57e_JTcLyAd',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
            'basePath' => ROOT_PATH .'assets/cache',
            'baseUrl'  => '@web/assets/cache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => false,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
    'params' => $params,
];

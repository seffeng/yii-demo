<?php
$params = array_merge(
    require(ROOT_PATH . 'common/config/params.php'),
    require(APP_PATH . 'config/params.php')
);

return [
    'id' => APP_NAME,
    'basePath' => APP_PATH,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'MxFeArKIHBtbSsHUmnf7c956y-MCCdSZ',
        ],
        'assetManager' => [
            'basePath' => APP_PATH . 'assets',
            'baseUrl' => '@web/' . APP_NAME . '/assets',
        ],
        'urlManager' => [
            'enablePrettyUrl' => false,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [],
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
    ],
    'params' => $params,
];

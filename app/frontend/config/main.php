<?php
/**
 *  @file:   main.php
 *  @brief:  配置文件
**/

return [
    'id' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'abcdefghijklmnopqrfrontend',
        ],
        'errorHandler' => [
            'errorAction' => 'default/error',
        ],
    ],
    'modules' => [
        'backend' => [
            'class' => 'backend\BackendModule',
        ],
    ],
];
<?php
/**
 *  @file:   main.php
 *  @brief:  配置文件
**/

return [
    'id' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'abcdefghijklmnopqbackend',
        ],
        'errorHandler' => [
            'errorAction' => 'default/error',
        ],
    ],
    'modules' => [
        'www' => [
            'class' => 'frontend\FrontendModule',
        ],
    ],
];
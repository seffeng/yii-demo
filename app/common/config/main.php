<?php
/**
 *  @file:   main.php
 *  @brief:  全局配置文件
**/

return [
    'vendorPath' => LIB_PATH . 'vendor',
    'runtimePath' => ROOT_PATH .'data/runtime/'. APP_NAME,
    'defaultRoute' => 'default',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'abcdefghijklmnopqrstuvwxyz',
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
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'errorHandler' => [
            'errorAction' => 'default/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
];
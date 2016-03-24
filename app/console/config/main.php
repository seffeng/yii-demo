<?php
/**
 *  @file:   main.php
 *  @brief:  配置文件
**/

return [
    'id' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'vendorPath' => VENDOR_PATH,
    'runtimePath' => ROOT_PATH .'data/runtime/'. APP_NAME,
    'controllerNamespace' => 'console\controllers',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];
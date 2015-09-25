<?php
/**
 *  @file:   main.php
 *  @brief:  配置文件
**/

return [
    'id' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'appdir\frontend\controllers',
    'components' => [
    ],
    'modules' => [
        'backend' => [
            'class' => 'appdir\backend\BackendModule',
        ],
    ],
];
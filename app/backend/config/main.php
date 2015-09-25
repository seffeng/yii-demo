<?php
/**
 *  @file:   main.php
 *  @brief:  配置文件
**/

return [
    'id' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'appdir\backend\controllers',
    'components' => [
    ],
    'modules' => [
        'www' => [
            'class' => 'appdir\frontend\FrontendModule',
        ],
    ],
];
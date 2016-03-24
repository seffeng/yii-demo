<?php
/**
 * @description: 后台入口文件
 * @file: admin.php
 * @charset: UTF-8
**/

define('THIS_PATH',     __DIR__ .'/');
define('APP_NAME',      'backend');

require(THIS_PATH .'env.php');
require(VENDOR_PATH . 'autoload.php');
require(VENDOR_PATH . 'yiisoft/yii2/Yii.php');
require(APP_PATH . 'config/alias.php');

$config = yii\helpers\ArrayHelper::merge(
    require(APP_PATH . 'config/main.php'),
    require(APP_PATH . APP_NAME .'/config/main.php')
);

(new yii\web\Application($config)) -> run();
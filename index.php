<?php
/**
 *  @file:   index.php
 *  @brief:  人口文件
 *  @date:   2015-09-23
**/

define('THIS_PATH',     __DIR__ .'/');
define('APP_NAME',      'frontend');

require(THIS_PATH .'env.php');
require(VENDOR_PATH . 'autoload.php');
require(VENDOR_PATH . 'yiisoft/yii2/Yii.php');
require(APP_PATH . 'config/alias.php');

$config = yii\helpers\ArrayHelper::merge(
    require(APP_PATH . 'config/main.php'),
    require(APP_PATH . APP_NAME .'/config/main.php')
);
(new yii\web\Application($config)) -> run();
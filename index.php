<?php
/**
 *  @file:   index.php
 *  @brief:  人口文件
 *  @date:   2015-09-23
**/

define('ROOT_PATH',     __DIR__ .'/');
define('LIB_PATH',      ROOT_PATH .'library/');
define('APP_PATH',      ROOT_PATH .'app/');
define('APP_NAME',      'frontend');
define('YII_DEBUG',     TRUE);
define('YII_ENV',       'dev');

require(LIB_PATH . 'vendor/autoload.php');
require(LIB_PATH . 'vendor/yiisoft/yii2/Yii.php');
require(APP_PATH . 'common/config/alias.php');

$config = yii\helpers\ArrayHelper::merge(
    require(APP_PATH . 'common/config/main.php'),
    require(APP_PATH . APP_NAME .'/config/main.php')
);

(new yii\web\Application($config)) -> run();
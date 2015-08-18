<?php
/**
 * @description: 入口文件
 * @file: index.php
 * @charset: UTF-8
**/

defined('ROOT_PATH') or define('ROOT_PATH', __DIR__ .'/');
defined('APP_NAME')  or define('APP_NAME',  'frontend');
defined('APP_PATH')  or define('APP_PATH',  ROOT_PATH .'app/'. APP_NAME .'/');
defined('CORE_PATH') or define('CORE_PATH', ROOT_PATH .'core/');
defined('YII_DEBUG') or define('YII_DEBUG', TRUE);
defined('YII_ENV')   or define('YII_ENV',   'dev');

require(CORE_PATH . 'vendor/autoload.php');
require(CORE_PATH . 'vendor/yiisoft/yii2/Yii.php');
require(CORE_PATH . 'config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(CORE_PATH . 'config/main.php'),
    require(APP_PATH . 'config/main.php')
);

(new yii\web\Application($config)) -> run();
?>
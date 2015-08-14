<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV',     'dev');
defined('ROOT_PATH') or define('ROOT_PATH', __DIR__ . '/');
defined('APP_NAME') or define('APP_NAME',   'admin');
defined('APP_PATH') or define('APP_PATH',   ROOT_PATH . '/'. APP_NAME . '/');

require(ROOT_PATH . 'common/vendor/autoload.php');
require(ROOT_PATH . 'common/vendor/yiisoft/yii2/Yii.php');
require(ROOT_PATH . 'common/config/bootstrap.php');
require(APP_PATH . 'config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(ROOT_PATH . 'common/config/main.php'),
    require(APP_PATH . 'config/main.php')
);

(new yii\web\Application($config)) -> run();

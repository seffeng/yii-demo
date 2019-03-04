<?php
/**
 * 全局配置
 */

$alias = require(__DIR__ . D_S . 'alias.config.php');
$db = require(__DIR__ . D_S . 'db.config.php');
$cache = require(__DIR__ . D_S . 'cache.config.php');
$log = require(__DIR__ . D_S . 'log.config.php');

return [
    'vendorPath'  => VENDOR_PATH,
    'runtimePath' => RUNTIME_PATH . APP_NAME,
    'timeZone'    => 'Asia/Shanghai',
    'aliases' => $alias,
    'components'  => [
        'log' => $log,
        'cache' => $cache,
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
    'params' => include(__DIR__ .'/params.config.php'),
];
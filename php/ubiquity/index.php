<?php

\define('DS', \DIRECTORY_SEPARATOR);
\define('ROOT', __DIR__ . \DS . 'app' . \DS);
$config = include_once \ROOT . 'config/config.php';
require_once ROOT . './../vendor/autoload.php';
\Ubiquity\cache\CacheManager::startProd($config);
\Ubiquity\controllers\Router::start();
\Ubiquity\controllers\Startup::run($config);

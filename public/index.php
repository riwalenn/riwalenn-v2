<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require_once __DIR__ . '/../config/bootstrap.php';

$app = new \App\App();
echo $app->run();

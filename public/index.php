<?php

use App\Bootstrap;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new Bootstrap();
echo $app->run();

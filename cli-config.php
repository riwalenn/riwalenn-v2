<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// configure Composer autoloader for Doctrine + Application namespaces
$bootstrapPath = __DIR__ . '/config/bootstrap.php';
require_once $bootstrapPath;

// get the Doctrine "Entity Manager"
$entityManagerPath = __DIR__ . '/config/entityManager.php';
$entityManager = include $entityManagerPath;

$commands = [];

// get the Doctrine "Entity Manager"
ConsoleRunner::run(
    new SingleManagerProvider($entityManager), $commands
);
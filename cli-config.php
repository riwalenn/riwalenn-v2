<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// configure Composer autoloader for Doctrine + Application namespaces
require_once __DIR__ . '/config/bootstrap.php';

// get the Doctrine "Entity Manager"
$entityManager = include __DIR__ . '/config/entityManager.php';

$commands = [];

// get the Doctrine "Entity Manager"
ConsoleRunner::run(
    new SingleManagerProvider($entityManager), $commands
);
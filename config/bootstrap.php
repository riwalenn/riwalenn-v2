<?php

// doctrine_autoloader.php
// returns an instance of Composer\Autoload\ClassLoader
$autoLoader = include __DIR__ . '/../vendor/autoload.php';

// configure autoloader using add(prefix, path)
$autoLoader->add('Doctrine\Annotations', __DIR__ . '../vendor/doctrine/annotations/lib');
$autoLoader->add('Doctrine\Cache', __DIR__ . '../vendor/doctrine/cache/lib');
$autoLoader->add('Doctrine\Collections', __DIR__ . '../vendor/doctrine/collections/lib');
$autoLoader->add('Doctrine\Common', __DIR__ . '../vendor/doctrine/common/lib');
$autoLoader->add('Doctrine\Dbal', __DIR__ . '../vendor/doctrine/dbal/lib');
$autoLoader->add('Doctrine\Deprecations', __DIR__ . '../vendor/doctrine/deprecations/lib');
$autoLoader->add('Doctrine\Event-manager', __DIR__ . '../vendor/doctrine/event-manager/lib');
$autoLoader->add('Doctrine\Inflector', __DIR__ . '../vendor/doctrine/inflector/lib');
$autoLoader->add('Doctrine\Instantiator', __DIR__ . '../vendor/doctrine/instantiator/lib');
$autoLoader->add('Doctrine\Lexer', __DIR__ . '../vendor/doctrine/lexer/lib');
$autoLoader->add('Doctrine\Orm', __DIR__ . '../vendor/doctrine/orm/lib');
$autoLoader->add('Doctrine\Persistence', __DIR__ . '../vendor/doctrine/persistence/lib');

// add path info for the "Application" namespace
$autoLoader->add('Application', __DIR__);
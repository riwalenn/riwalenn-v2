<?php

use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\ORMSetup;
//use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

$paths = array(
    __DIR__ . '\..\src\Entity',
    __DIR__ . '\..\src\Service',
    __DIR__ . '\..\src\Controller',
    __DIR__ . '\..\src\Repository'
);

$driver = new AnnotationDriver(new AnnotationReader(), $paths);
//AnnotationRegistry::registerLoader('class_exists');
AnnotationRegistry::loadAnnotationClass('class_exists');

// NOTE: use "createXMLMetadataConfiguration()" for XML source
//       use "createYAMLMetadataConfiguration()" for YAML source
// NOTE: if the flag is set TRUE caching is done in memory
//       if set to FALSE, will try to use APC, Xcache, Memcache or Redis caching
//       see: http://docs.doctrine-project.org/en/latest/reference/advanced-configuration.html
//$config   = Setup::createConfiguration(TRUE);
$config = ORMSetup::createConfiguration(TRUE);
$config->setMetadataDriverImpl($driver);
$dbParams = include __DIR__ . '/params.php';
try {
    return EntityManager::create($dbParams, $config);
} catch (ORMException $e) {
}
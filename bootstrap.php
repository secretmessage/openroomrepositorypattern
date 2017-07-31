<?php
// bootstrap.php
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

date_default_timezone_set('America/Lima');
require_once "vendor/autoload.php";
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = TRUE;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
$config = Setup::createYAMLMetadataConfiguration([__DIR__ . "/config/yaml"], $isDevMode);
// the connection configuration
$conn = [
  'driver' => 'pdo_mysql',
  'user' => 'root',
  'password' => 'Queens',
  'dbname' => 'openroom',
  'port' => '3306',
];
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
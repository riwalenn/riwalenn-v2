<?php

return array(
    'driver'         => 'pdo_mysql',
    'host'           => 'localhost',
    'dbname'         => 'riwalenn',
    'user'           => 'root',
    'password'       => '',
    'driver_options' => array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
        // NOTE: change to PDO::ERRMODE_SILENT for production!
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
);

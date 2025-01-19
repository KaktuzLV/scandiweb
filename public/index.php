<?php

define('ROOT_PATH', dirname(__DIR__));
require ROOT_PATH . '/bootstrap/init.php';

echo $_ENV['MYSQL_DATABASE'];
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");
error_reporting(E_ALL);
// echo "TEST" . time();

require_once 'vendor/Autoload.php';
header('Content-Type: application/json');
$router = new Core\Router();

require_once 'src/Routes.php';
$router->run();

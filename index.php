<?php
//Define a path constants for requires

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('CLASSES', __DIR__ . '/Classes/');
define('LAYOUTS', __DIR__ . '/Layouts/');
require 'Controllers/AppController.php';

$controller = new AppController();
$controller->init();
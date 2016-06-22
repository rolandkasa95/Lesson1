<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "classes/ObjectFactoryService.php";

$params = require "config/config.php";

$session = ObjectFactoryService::getSession();
$session->start();


$db = ObjectFactoryService::getDb($params);
$model = ObjectFactoryService::getModel($db);
$view = ObjectFactoryService::getView();

$users = $model->getUsers();

$session->save(array('users' => $users));

$view->setResults($users);

$view->render();
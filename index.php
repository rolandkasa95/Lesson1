<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'classes/Form.php';

$form = new Form('FormLogin','dbconnection');

echo $form->getName();

exit;

//unset($form);
//
//echo "Meow";



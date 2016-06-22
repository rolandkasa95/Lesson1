<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'classes/Form.php';
require 'classes/Field.php';

$name = 'username';
$type = 'text';
$fields[] = new Field($type, $name);

$name = 'password';
$fields[] = new Field($type,$name);

$name = 'Login';
$id = 'Form1';
$form = new Form($name,$id,$fields);

echo $form->getStartTag() . PHP_EOL;
foreach($form->getElements() as $element) {
    echo ucfirst($element->getName()) . $element->getTag() . PHP_EOL;
}
echo $form->getEndTag();



<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'classes/Form.php';
//
//$form = new Form();
//var_dump($form);
//
//echo PHP_EOL;
//
//$anotherForm = new Form();
//var_dump($anotherForm);
//
//echo PHP_EOL;
//
//if($anotherForm === $form){
//    echo "They are aliases";
//}else{
//    echo "They are duplicates";
//}
//
//$name = $form->name;
//
//echo $name;
//echo PHP_EOL;
//echo $form->name;
//echo PHP_EOL . $form->getName();
//
//echo gettype($form);

//$loginForm = new Form();
//$loginForm->setName("Login");
//echo $loginForm->getName();
//
//echo PHP_EOL;
//
//$registrationForm = new Form();
//$registrationForm->setName("Registration");
//echo $registrationForm->getName();
//
//$loginForm->set('id','itemId');
//
//$name = 'LoginForm';
//
//if($loginForm->setName($name)){
//    echo 'success';
//}else{
//    echo 'something is messed up';
//}

$form = new Form();
$name = "LoginForm";
$id = "FormA";

$form->setName($name)->setId($id);
echo $form->name . PHP_EOL . $form->id;




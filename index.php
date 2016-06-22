<?php

require 'classes/InputText.php';
require  'classes/Form.php';

$name = 'Login';
$id = "Form1";

$usernameInput = new InputText();
$usernameInput->setLabel('username');
$usernameInput->setRequired();

$passwordInput = new InputText();
$passwordInput->setType('password');
$passwordInput->setLabel('password');
$passwordInput->setRequired();

$submitInput = new InputText();
$submitInput->setType('Submit');

$fields = [
    'username' => $usernameInput,
    'password' => $passwordInput,
    'submit' => $submitInput,
];


$form = new Form($name,$id,$fields);

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = ctype_alnum($_POST['username'])?$_POST['username']:null;
    $password = ctype_alnum($_POST['password'])?$_POST['password']:null;
    echo "Thank you for logging in";
}else{
    echo '<h1>Hii, Please log in</h1>';
    echo $form->getStartTag() . PHP_EOL;
    foreach($form->getFields() as $field){
        if ($field->label) echo $field->label . ": ";
        echo $field->getInput() . "<br />";
    }
    echo $form->getEndTag();
}

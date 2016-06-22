<?php

require 'classes/Form.php';
require 'classes/StringLengthValidator.php';
require 'classes/InputText.php';


$name = 'Login';
$id = 'Form1';


$usernameInput = new InputText();
$usernameInput->setLabel('username');
$usernameInput->setRequired();


$passwordInput = new InputText();
$passwordInput->setType('password');
$passwordInput->setLabel('password');
$passwordInput->setRequired();


$submitInput = new InputText();
$submitInput->setType('submit');


$fields = array(
    'username' => $usernameInput,
    'password' => $passwordInput,
    'submit' => $submitInput,
);

$form = new Form($name, $id, $fields);


if(!empty($_POST['Username']) && !empty($_POST['Password'])){
    $username = ctype_alnum($_POST['Username'])?$_POST['Username']:null;
    $password = ctype_alnum($_POST['Password'])?$_POST['Password']:null;
    StringLengthValidator::setMaximum(30);
    StringLengthValidator::setMinimum(5);
    if(StringLengthValidator::validate($username)
        && StringLengthValidator::validate($password)){
        echo "<h1>Thank you for logging in $username</h1>";
        exit;
    } else {
        echo "invalid input, username and password must be between 5 and 30 characters";
    }
}

echo '<h1>Hello. Please login</h1>';
echo $form->getStartTag() . PHP_EOL;
foreach($form->getFields() as $field){
    if($field->label) echo $field->label . ": ";
    echo $field->getInput() . '<br/>';
}
echo $form->getEndTag();


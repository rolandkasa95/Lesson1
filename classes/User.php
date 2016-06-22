<?php

class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $assetValue;

    public function __construct($firstname,$lastname,$email,$assetValue)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->assetValue = $assetValue;
    }
}
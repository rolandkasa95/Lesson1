<?php

class Model
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    pubic function getUsers(){
        $sql = "SELECT * FROM 'users'";
        return $this->pdo->query(sql,PDO::FETCH_ASSOC);
    }

    public function getCountry(){
        $sql = 'SELECT name From country';
        return $this->pdo->query(sql,PDO::FETCH_ASSOC);
    }

    public function saveUset($data){
        $sql = "INSERT INTO 'users ('first_name','last_name','email','";
    }
}
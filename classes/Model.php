<?php


class Model
{
    public $result;
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUsers(){
        $sql = 'SELECT * FROM users';
        return $this->db->query($sql,PDO::FETCH_ASSOC);
    }
}
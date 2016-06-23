<?php

class Model
{
    public $pdo;

    /**
     * @param $pdo
     */
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        $sql = "SELECT * FROM `users`";
        return $this->db->query($sql, PDO::FETCH_ASSOC);
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        $sql = 'SELECT `name` FROM country';
        return $this->db->query($sql, PDO::FETCH_ASSOC);
    }

    public function saveUser($data){
        try{
            $sql = "INSERT INTO 'users' ('first_name','last_name','email','email_preferred_contact', 'contry') VALUES (:first_name,:last_name,:email,:email-preferred_contact,:country)";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(':first_name',$data['first_name'] , PDO::PARAM_STR, 50);
            $statement->bindParam('last_name', $data['last_name'] , PDO::PARAM_STR, 50);
            $statement->bindParam(':email', $data['email'], PDO::PARAM_STR, 50);
            $statement->bindParam(':email_preferred_data', $data['email_preferred_contact'],PDO::PARAM_STR,1);
            $statement->bindParam(':country', $data['country'], PDO::PARAM_STR, 100);
            $statement->execute();
        }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }

}
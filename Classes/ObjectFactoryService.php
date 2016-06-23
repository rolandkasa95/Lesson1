<?php

require 'Session.php';
require 'Model/Model.php';

class ObjectFactoryService
{
    public static $pdo;
    public static $session;
    public static $model;

    public static function getDb(array $connectParams = null){
        if (!self::$pdo){
            try{
                self::$pdo = new PDO($connectParams['db']['dsn'],
                    $connectParams['db']['user'],
                    $connectParams['db']['pass']
                );
            }catch (PDOException $e){
                echo "Connection Failed" . $e->getMessage();
            }
        }
    }

    public static function getSession(){
        if(!self::$session){
            self::$session = new Session();
        }
        return self::$session;
    }

    public static function getModel($pdo){
        if(!self::$model){
            self::$model = new Model($pdo);
        }
        return self::$model;
    }
}
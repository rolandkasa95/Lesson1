<?php

require "Model.php";
require "Session.php";
require "View.php";

class ObjectFactoryService
{
    public static $db;
    public static $session;
    public static $model;
    public static $view;

    public static function getDb(array  $connectParams = null){
        if (!self::$db){
            try{
                self::$db = new PDO($connectParams['db']['dsn'],
                    $connectParams['db']['user'],
                    $connectParams['db']['pass']
                    );
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }
        return self::$db;
    }
    public static function getSession(){
        if(!self::$session){
            self::$session = new Session();
        }
        return self::$session;
    }

    public static function getModel($db){
        if(!self::$model){
            self::$model = new Model($db);
        }
        return self::$model;
    }

    public static function  getView(){
        if(!self::$view){
            self::$view = new View();
        }
        return self::$view;
    }

}
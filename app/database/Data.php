<?php
namespace database;
use http\Exception;
use PDO;
use Router\Controller;
use config\Config;

class Data{
    /**
     * @var PDO
     */
    public static $conn;
    protected static $instance = null;

    public static function getInstance(){
        return self::$instance;
    }

    public static function connect(){
        try {
            self::$conn = new PDO("mysql:host=".Config::$server.";dbname=".Config::$dataBase, Config::$user,Config::$password);
        }catch (Exception $e){
            echo "Connection failed.";
        }
    }
    //select,delete,edit в одном классе
    //чтобы контроллеры могли лишь использовать шаблонные методы, передавая им sql

//    public static function select($sqlText){
//        $result = [];
//        self::connect();
//
//        $statement = self::$conn->prepare($sqlText);
//        $statement->setFetchMode(PDO::FETCH_OBJ);
//        $statement->execute();
//
//        while($value = $statement->fetch()){
//            $result[] = $value;
//        }
//        return $result;
//    }

}
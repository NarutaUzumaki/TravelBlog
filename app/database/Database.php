<?php


namespace database;
use database\Data;

use PDO;
class Database{
    public static function select($sqlText, $data){
        $result = [];
        Data::connect();
        //print_r(Data::$conn);
        $statement = Data::$conn->prepare($sqlText);
        $statement->execute($data);
        $result = $statement->fetchAll();
        //var_dump($red);
        //var_dump($result);
        //var_dump($result);
        return $result;

//        $result = [];
//        Data::connect();
//        $statement = Data::$conn->prepare($sqlText);
//        $statement->setFetchMode(PDO::FETCH_OBJ);
//        $statement->execute($data);
//        while ($value = $statement->fetch()) {
//            $result[] = $value;
//        }
//        //var_dump($result);
//        return $result;
    }
//delete, update тут писать

//    public static function insert($sqlText, $data){
//        Data::connect();
//        $statement = Data::$conn->prepare($sqlText);
//        $statement->execute($data);
//        return Data::$conn->lastInsertId();
//    }
//
//    public static function update($sqlText, $data) {
//        Data::connect();
//        $statement = Data::$conn->prepare($sqlText);
//        $statement->execute($data);
//    }
//
//    public static function delete($sqlText, $data) {
//        Data::connect();
//        $statement = Data::$conn->prepare($sqlText);
//        $statement->execute($data);
//    }
}
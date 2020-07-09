<?php


namespace database;
use database\Data;

use PDO;
class Database{
    public static function select($sqlText, $data=null){
        $result = [];
        Data::connect();
        //print_r(Data::$conn);
        $statement = Data::$conn->prepare($sqlText);
        if ($data=null){
            $statement->execute([]);
        }else {
            $statement->execute($data);
        }
        $result = $statement->fetchAll();

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

    public static function insert($sqlText, $data){
        Data::connect();
        $statement = Data::$conn->prepare($sqlText);
        $statement->execute($data);
        return Data::$conn->lastInsertId();
    }
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
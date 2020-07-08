<?php


namespace database;
use database\Data;

use PDO;
class Database{
    public static function select($sqlText){
        $result = [];
        Data::connect();

        print_r(Data::$conn);
        $statement = Data::$conn->prepare($sqlText);
        $statement->execute([]);
        $red = $statement->fetchAll();

        var_dump($red);


        //var_dump($result);
        return $result;
    }
//delete, update тут писать
}
<?php

namespace config;
class Config
{
//    public static  $server = "localhost:3306";
//    public static  $user = "root";
//    public static  $password = "root";
//    public static  $dataBase = "blog";
    protected static $_config;

    public static function conf(){
        return self::$_config = array(
            'server' => 'localhost:3306',
            'user' => 'root',
            'password' => 'root',
            'database' => 'blog'
        );
    }
}
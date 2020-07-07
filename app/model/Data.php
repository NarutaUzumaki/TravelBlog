<?php
namespace model;

class Data
{
    public function __construct(){
        $this->db=new MySqlDB();
        $this->db->connect();

    }

    public function getUser(){

    }
}
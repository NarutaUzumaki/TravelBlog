<?php
namespace controller;
 use Router\Controller;
use view\View;
use database\Database;


class UserController extends Controller {

    public function login(){
        return View::make('login');
    }

    public function register(){
        return View::make('register');
    }

    public function justTest(){
        return View::make('test');
    }

    public function signIn(){
        $test = Database::select('select id,name from users');
        //var_dump($test);
    }
}
<?php
namespace controller;
use Router\Controller;
use view\View;
use database\Database;


class UserController extends Controller {

    public function login(){
        View::make('login');
    }

    public function register(){
        View::make('register');
    }

    public function justTest(){
        View::make('test');
    }

    public function signIn(){
        if ($user = Database::select('select * from users where name = :login or email = :login', ['login' => $_POST['login']])){
//            var_dump($user[0]['password'] == $_POST['passwd']);
//            var_dump($user[0]['password']);
//            var_dump($_POST['passwd']);
            if ($user[0]['password'] == $_POST['passwd']){
                header('Location: /article');
            }else{
                die('Password uncorrect');
            }
        }
    }

//    function signup() {
//        if ($_POST['password'] == $_POST['repeat-password']) {
//            if ($user = DB::getInstance()->select('select * from users where username = :username', ['username' => $_POST['username']])) {
//                die('User with this username exists!');
//            }
//            if ($user = DB::getInstance()->select('select * from users where email = :email', ['email' => $_POST['email']])) {
//                die('User with this e-mail exists!');
//            }
//            $id = DB::getInstance()->insert('insert into users (username, email, password) values (:username, :email, :password)', [
//                'username' => $_POST['username'],
//                'email' => $_POST['email'],
//                'password' => $_POST['password']
//            ]);
//            $_SESSION['user'] = DB::getInstance()->select('select * from users where id = :id', ['id' => $id]);
//            header('Location: /transactions');
//        }
//    }
//
//    function signout() {
//        unset($_SESSION['user']);
//        header('Location: /login');
//    }

}
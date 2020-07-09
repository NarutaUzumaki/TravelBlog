<?php
namespace controller;
use Router\Controller;
use resources\View;
use database\Database;


class UserController extends Controller {

    public function login(){
        View::make('login');
    }

    public function register(){
        View::make('register');
    }

    public function usersList(){
        View::make('userList');
    }

    //-------------------------
    public function justTest(){
        View::make('test');
    }
    //-------------------------

    public function signIn(){
        if ($user = Database::select('select * from users where name = :login or email = :login', ['login' => $_POST['login']])){
            if ($user[0]['password'] == $_POST['passwd']){
                $_SESSION['user'] = $user;
                header('Location: /article');
            }else{
                die('Password uncorrect');
            }
        }else{
            die('User is not exist');
        }
    }

    public function signUp() {
        if ($_POST['passwd'] == $_POST['passwd_repeat']) {
            if ($user = Database::select('select name from users where name = :name',['name' => $_POST['register']])) {
                die('User with this e-mail exists already');
            }
            if ($user = Database::select('select email from users where email = :email',['email' => $_POST['email']])) {
                die('User with this e-mail exists already');
            }
            $id = Database::insert('insert into users (name, email, password) values (:name, :email, :password)', [
                'name' => $_POST['register'],
                'email' => $_POST['email'],
                'password' => $_POST['passwd']
            ]);
            $_SESSION['user'] = Database::select('select * from users where id = :id', ['id' => $id]);
            header('Location: /article');
        }
    }

    public function signout() {
        unset($_SESSION['user']);
        header('Location: /login');
    }

}
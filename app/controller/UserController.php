<?php
namespace controller;
use core\Controller;
use resources\View;
use database\Database;
use ownExc\OwnException;


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

    public function signIn(){
        $user = Database::select('select * from users 
                                            where name = :login 
                                            or email = :login', ['login' => $_POST['login']]);
        if ($user){
            if ($user[0]['password'] == $_POST['passwd']){
                $_SESSION['user'] = $user;
                header('Location: /article');
            }else{
                try {
                    throw new OwnException();
                }catch (\Exception $e){
                }
            }
        }else {
            try {
                throw new OwnException('User are not exist');
            }catch (\Exception $e){
            }
        }
    }

    public function signUp() {
        if ($_POST['passwd'] == $_POST['passwd_repeat']) {
            $hash_passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
            $user = Database::select('select name 
                                                from users 
                                                where name = :name',['name' => $_POST['register']]);
            if ($user) {
                header('Location: /report');
            }

            $user = Database::select('select email 
                                                from users 
                                                where email = :email',['email' => $_POST['email']]);
            if ($user) {
                header('Location: /report');
            }
            $id = Database::insert('insert into users (name, email, password) 
                                            values (:name, :email, :password)', [
                'name' => $_POST['register'],
                'email' => $_POST['email'],
                'password' => $hash_passwd
            ]);
            $_SESSION['user'] = Database::select('select * from users 
                                                            where id = :id', ['id' => $id]);
            header('Location: /article');
        }
    }

    public function signout() {
        unset($_SESSION['user']);
        header('Location: /login');
    }

}
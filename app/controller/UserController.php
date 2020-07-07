<?php
namespace controller;
use Router\Controller;
use view\View;
//require_once ("Controller.php");

class UserController extends Controller {

    public function login(){
        View::make('login');
    }
}
<?php
namespace app\controller;
use Controller;
use view\View;
require_once ("Controller.php");
require ("../view/View.php");
class UserController extends Controller {

    public function login(){
        View::make('login');
    }
}
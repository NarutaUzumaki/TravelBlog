<?php
namespace controller;
use Router\Controller;
use view\View;


class UserController extends Controller {

    public function login(){


        return View::make('login');
    }

    public function justTest(){
        View::make('test');
    }
}
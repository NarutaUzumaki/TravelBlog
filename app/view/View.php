<?php
namespace view;

class View{
    public static function make($view, $data=null){
        var_dump($view);
        include 'views/'.$view.'.php';
    }
}
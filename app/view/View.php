<?php
namespace view;

class View{
    public static function make($view, $data=null){
        include '/views/'.$view.'.php';
    }
}
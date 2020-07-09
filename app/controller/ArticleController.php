<?php


namespace controller;
use Router\Controller;
use resources\View;
use database\Database;

class ArticleController extends Controller{
    public function index(){
        $articles = Database::select('select id, post_text, author from articles');
        View::make('index', $articles);
    }

}
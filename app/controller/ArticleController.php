<?php


namespace controller;
use core\Controller;
use resources\View;
use database\Database;

class ArticleController extends Controller{
    public function index(){
        $articles = Database::select('select id, title, post_text, author 
                                                from articles');
        View::make('index', $articles);
    }

    public function create(){
        View::make('create');
    }

    public function newArticle(){
        $article = Database::insert('insert into articles(title,post_text,author) 
                                                value(:title, :post_text, :author)', [
            'title'=>$_POST['title'],
            'post_text'=>$_POST['article'],
            'author'=>$_SESSION['user'][0]['name'],
        ]);
        if ($article) {
            header('Location: /article');
        }else{
            header('Location: /report');
        }
    }

    public function edit(){
        $oneArticle = Database::select('select id, title, post_text, author 
                                                    from articles where id = :id', [
            'id'=>$_GET['id'],
        ]);
        View::make('edit', $oneArticle);
    }

    public function editArticle(){
        $editArticle = Database::update('update articles 
                                                set title = :title, post_text = :post_text 
                                                where id = :id', [
           'title'=>$_POST['title'],
           'post_text'=>$_POST['article'],
            'id'=>$_POST['id'],
        ]);

        header('Location: /article');
    }

    public function delete(){
        $deleteArticle = Database::delete('delete from articles where id = :id', [
            'id'=>$_GET['id'],
        ]);

        header('Location: /article');
    }
}
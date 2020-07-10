<?php
use core\Router;

Router::get('/login', 'UserController@login');
Router::get('/register', 'UserController@register');
Router::post('/signin', 'UserController@signIn');
Router::post('/signup', 'UserController@signUp');
Router::get('/signOut', 'UserController@signOut');
Router::get('/usersList', 'UserController@usersList');

Router::get('/article', 'ArticleController@index');
Router::get('/create', 'ArticleController@create');
Router::post('/newArticle', 'ArticleController@newArticle');
Router::get('/edit', 'ArticleController@edit');
Router::post('/editArticle', 'ArticleController@editArticle');
Router::get('/delete', 'ArticleController@delete');

Router::get('/report', 'ExceptionController@errorMessage');


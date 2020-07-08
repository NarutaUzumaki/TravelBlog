<?php
use Router\Router;

Router::get('/login', 'UserController@login');
Router::get('/register', 'UserController@register');
Router::post('/signin', 'UserController@signIn');
Router::post('/article', 'ArticleController@index');

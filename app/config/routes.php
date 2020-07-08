<?php
use Router\Router;

Router::get('/login', 'UserController@login');
Router::get('/register', 'UserController@register');
Router::get('/test', 'UserController@signIn');

Router::get('/user/test', 'UserController@justTest');

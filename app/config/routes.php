<?php
use Router\Router;

Router::get('/user', 'UserController@login');
Router::get('/user', 'UserController@signIn');
Router::post('/user', 'UserController@smth');